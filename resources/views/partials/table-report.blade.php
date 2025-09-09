

@php
    // Tahun aktif (opsional, bisa Anda override dari controller)
    $year = $year ?? now()->year;
    // Override dari query string jika ada (tanpa backend tambahan)
    $year = (int) request('year', $year);

    // Daftar bulan default jika tidak dikirim dari controller
    // Format: [['num' => 1, 'label' => 'Jan'], ..., ['num' => 12, 'label' => 'Dec']]
    if (!isset($months) || empty($months)) {
        $months = collect(range(1, 12))->map(fn ($m) => [
            'num' => $m,
            'label' => \Carbon\Carbon::createFromDate($year, $m, 1)->isoFormat('MMM'),
        ])->toArray();
    } else {
        // Normalisasi jika user mengirim hanya angka bulan
        $months = collect($months)->map(function ($m) use ($year) {
            if (is_array($m)) {
                return $m;
            }
            return [
                'num' => (int) $m,
                'label' => \Carbon\Carbon::createFromDate($year, (int) $m, 1)->isoFormat('MMM'),
            ];
        })->toArray();
    }

    // Koleksi user kosong fallback
    $users = $users ?? collect([]);
    // Jika tidak ada data user yang dikirim dari backend, buat dummy users
    if (($users instanceof \Illuminate\Support\Collection && $users->isEmpty()) || (is_array($users) && empty($users))) {
        $users = collect([
            (object) ['id' => 1, 'name' => 'Andi Pratama'],
            (object) ['id' => 2, 'name' => 'Budi Santoso'],
            (object) ['id' => 3, 'name' => 'Citra Lestari'],
            (object) ['id' => 4, 'name' => 'Dewi Anjani'],
        ]);
    }

    // Struktur pengeluaran:
    // - $expensesDetail[user_id][monthNum] = ['kereta' => x, 'pesawat' => y, 'hotel' => z]
    // - $expensesByUserAndMonth[user_id][monthNum] = total
    $expensesDetail = $expensesDetail ?? [];
    $expensesByUserAndMonth = $expensesByUserAndMonth ?? [];
    // Jika tidak ada data pengeluaran yang dikirim, buat dummy per kategori yang deterministik (konsisten)
    if (empty($expensesDetail) && empty($expensesByUserAndMonth)) {
        $generatedDetail = [];
        $generatedTotal = [];
        foreach ($users as $u) {
            $generatedDetail[$u->id] = [];
            $generatedTotal[$u->id] = [];
            foreach ($months as $m) {
                $monthNum = is_array($m) ? ($m['num'] ?? (int) $m) : (int) $m;
                // Variasi angka menggunakan tahun agar berubah saat filter tahun diganti
                $yearBias = ((int) $year % 5) * 5000; // sedikit perbedaan antar tahun
                $base = 150000 + ($u->id * 40000) + $yearBias;
                $kereta  = $base + (20000 * $monthNum);
                $pesawat = (int) round($base * 1.2) + (30000 * $monthNum);
                $hotel   = (int) round($base * 0.9) + (25000 * $monthNum);
                $generatedDetail[$u->id][$monthNum] = [
                    'kereta' => $kereta,
                    'pesawat' => $pesawat,
                    'hotel' => $hotel,
                ];
                $generatedTotal[$u->id][$monthNum] = $kereta + $pesawat + $hotel;
            }
        }
        $expensesDetail = $generatedDetail;
        $expensesByUserAndMonth = $generatedTotal;
    }

    // Helper format rupiah sederhana
    $formatRupiah = function ($number) {
        try {
            return 'Rp ' . number_format((float) $number, 0, ',', '.');
        } catch (\Throwable $e) {
            return 'Rp 0';
        }
    };
@endphp

<div class="bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden">
    <!-- Header -->
    <div class="px-4 sm:px-6 py-4 border-b border-gray-200 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
        <div>
            <h3 class="text-lg font-semibold text-gray-900">Report Pengeluaran Tahun {{ $year }}</h3>
        </div>

        <div class="flex flex-wrap items-center gap-2 sm:gap-3">
            <!-- Kategori filter (client-side) -->
            <div class="flex flex-wrap items-center gap-2 rounded-xl p-1 w-full sm:w-auto">
                <button type="button" data-cat="kereta" class="cat-btn inline-flex items-center h-9 px-3 text-xs font-medium rounded-lg bg-white text-gray-800 shadow">
                  <span class="inline-block w-2 h-2 rounded-full bg-emerald-500 mr-2"></span>Kereta
                </button>
                <button type="button" data-cat="pesawat" class="cat-btn inline-flex items-center h-9 px-3 text-xs font-medium rounded-lg bg-white text-gray-800 shadow">
                  <span class="inline-block w-2 h-2 rounded-full bg-sky-500 mr-2"></span>Pesawat
                </button>
                <button type="button" data-cat="hotel" class="cat-btn inline-flex items-center h-9 px-3 text-xs font-medium rounded-lg bg-white text-gray-800 shadow">
                  <span class="inline-block w-2 h-2 rounded-full bg-amber-500 mr-2"></span>Hotel
                </button>
            </div>

            <!-- Filter tahun (server-side GET) -->
            <form method="GET" action="{{ url()->current() }}" class="flex items-center gap-2 mb-1 w-full sm:w-auto">
                <select name="year" class="h-9 px-3 rounded-xl border-2 border-gray-200 text-sm focus:border-[#F6B101] focus:outline-none bg-white shrink-0 min-w-[100px]">
                    @for ($y = now()->year - 3; $y <= now()->year + 1; $y++)
                        <option value="{{ $y }}" {{ (int) request('year', $year) === (int) $y ? 'selected' : '' }}>{{ $y }}</option>
                    @endfor
                </select>
                <button class="inline-flex items-center justify-center h-9 px-4 bg-gradient-to-r from-[#FE0004] to-[#F6B101] text-white rounded-xl text-sm shrink-0 hover:scale-105 transition-all duration-200">Terapkan</button>
            </form>
        </div>
    </div>

    <!-- Table wrapper (horizontal scroll) -->
    <div class="w-full overflow-x-auto">
        <table class="min-w-full border-collapse table-auto">
            <thead class="bg-white/90 supports-[backdrop-filter]:backdrop-blur sticky top-0 z-20">
                <tr>
                    <th class="sticky left-0 bg-white z-20 px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider border-b border-gray-200 rounded-tl-lg" style="box-shadow: 6px 0 8px -8px rgba(0,0,0,0.15);">
                        User
                    </th>

                    @foreach ($months as $m)
                        <th class="px-4 py-3 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider border-b border-gray-200 whitespace-nowrap" data-col="{{ $loop->index + 1 }}">
                            {{ $m['label'] }}
                        </th>
                    @endforeach

                    <th class="px-4 py-3 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider border-b border-gray-200 rounded-tr-lg" data-col="{{ count($months) + 1 }}">
                        Total
                    </th>
                </tr>
            </thead>

            <tbody id="report-tbody" class="bg-white divide-y divide-gray-100">
                @forelse ($users as $user)
                    @php
                        $rowTotal = 0;
                    @endphp
                    <tr class="">
                        <td class="sticky left-0 bg-white z-10 px-4 py-3 text-sm font-medium text-gray-900 border-r border-gray-100 min-w-[200px]" style="box-shadow: 6px 0 8px -8px rgba(0,0,0,0.12);">
                            {{ $user->name ?? ('User #' . ($user->id ?? '-')) }}
                        </td>

                        @foreach ($months as $m)
                            @php
                                $mn = $m['num'];
                                $detail = $expensesDetail[$user->id][$mn] ?? ['kereta' => 0, 'pesawat' => 0, 'hotel' => 0];
                                $val = ($detail['kereta'] ?? 0) + ($detail['pesawat'] ?? 0) + ($detail['hotel'] ?? 0);
                                $rowTotal += (float) $val;
                            @endphp
                            <td class="px-4 py-3 text-sm text-gray-800 text-right tabular-nums cell-amount border-b border-gray-100"
                                data-user="{{ $user->id }}" data-month="{{ $mn }}" data-col="{{ $loop->index + 1 }}"
                                data-kereta="{{ $detail['kereta'] ?? 0 }}"
                                data-pesawat="{{ $detail['pesawat'] ?? 0 }}"
                                data-hotel="{{ $detail['hotel'] ?? 0 }}"
                                title="Kereta: {{ $formatRupiah($detail['kereta'] ?? 0) }}&#10;Pesawat: {{ $formatRupiah($detail['pesawat'] ?? 0) }}&#10;Hotel: {{ $formatRupiah($detail['hotel'] ?? 0) }}">
                                {{ $formatRupiah($val) }}
                            </td>
                        @endforeach

                        <td class="px-4 py-3 text-sm font-semibold text-red-600 text-right tabular-nums row-total border-b border-gray-100" data-user="{{ $user->id }}" data-col="{{ count($months) + 1 }}">
                            {{ $formatRupiah($rowTotal) }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="{{ count($months) + 2 }}" class="px-4 sm:px-6 py-8 text-center text-gray-500">
                            Belum ada data user untuk ditampilkan.
                        </td>
                    </tr>
                @endforelse
            </tbody>

            <tfoot class="bg-gray-50 sticky bottom-0 z-10" style="box-shadow: 0 -8px 12px -12px rgba(0,0,0,0.25);">
                @php
                    // Hitung total per bulan dan grand total (default: semua kategori)
                    $totalPerBulan = [];
                    $grandTotal = 0;

                    foreach ($months as $m) {
                        $sum = 0;
                        foreach ($users as $user) {
                            $d = $expensesDetail[$user->id][$m['num']] ?? ['kereta' => 0, 'pesawat' => 0, 'hotel' => 0];
                            $sum += (float) (($d['kereta'] ?? 0) + ($d['pesawat'] ?? 0) + ($d['hotel'] ?? 0));
                        }
                        $totalPerBulan[$m['num']] = $sum;
                        $grandTotal += $sum;
                    }
                @endphp
                <tr class="bg-white">
                    <th class="sticky left-0 bg-gray-50 z-10 px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border-t border-gray-200" style="box-shadow: 6px 0 8px -8px rgba(0,0,0,0.15);">
                        Total
                    </th>

                    @foreach ($months as $m)
                        <th class="px-4 py-3 text-right text-xs font-semibold text-red-600 uppercase tracking-wider border-t border-gray-200 tabular-nums col-total" data-month="{{ $m['num'] }}" data-col="{{ $loop->index + 1 }}">
                            {{ $formatRupiah($totalPerBulan[$m['num']] ?? 0) }}
                        </th>
                    @endforeach

                    <th class="px-4 py-3 text-right text-xs font-bold text-red-700 uppercase tracking-wider border-t border-gray-200 tabular-nums " id="grand-total" data-col="{{ count($months) + 1 }}">
                        {{ $formatRupiah($grandTotal) }}
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>


    </div>

    <script>
      (function() {
        const activeCats = new Set(['kereta', 'pesawat', 'hotel']);

        const rupiah = (n) => {
          const num = Number(n) || 0;
          return 'Rp ' + num.toLocaleString('id-ID', { maximumFractionDigits: 0 });
        };

        function updateTable() {
          const cells = document.querySelectorAll('.cell-amount');
          const rowTotals = {};
          const colTotals = {};
          let grand = 0;

          cells.forEach(td => {
            const user = td.getAttribute('data-user');
            const month = td.getAttribute('data-month');
            const kereta = Number(td.getAttribute('data-kereta')) || 0;
            const pesawat = Number(td.getAttribute('data-pesawat')) || 0;
            const hotel = Number(td.getAttribute('data-hotel')) || 0;

            let sum = 0;
            if (activeCats.has('kereta')) sum += kereta;
            if (activeCats.has('pesawat')) sum += pesawat;
            if (activeCats.has('hotel')) sum += hotel;

            td.textContent = rupiah(sum);

            rowTotals[user] = (rowTotals[user] || 0) + sum;
            colTotals[month] = (colTotals[month] || 0) + sum;
            grand += sum;
          });

          // Apply row totals
          document.querySelectorAll('.row-total').forEach(el => {
            const user = el.getAttribute('data-user');
            el.textContent = rupiah(rowTotals[user] || 0);
          });

          // Apply column totals
          document.querySelectorAll('.col-total').forEach(el => {
            const month = el.getAttribute('data-month');
            el.textContent = rupiah(colTotals[month] || 0);
          });

          // Apply grand total
          const grandEl = document.getElementById('grand-total');
          if (grandEl) grandEl.textContent = rupiah(grand);
        }

        // Initialize cat buttons
        function setActiveStyle(btn, active) {
          btn.className = 'cat-btn px-3 py-1.5 text-xs font-medium rounded-lg ' + (active
            ? 'bg-white text-gray-800 shadow'
            : 'bg-transparent text-gray-500');
        }

        document.querySelectorAll('.cat-btn').forEach(btn => {
          const cat = btn.getAttribute('data-cat');
          // Default active for all three
          setActiveStyle(btn, true);
          btn.addEventListener('click', () => {
            if (activeCats.has(cat)) {
              activeCats.delete(cat);
              setActiveStyle(btn, false);
            } else {
              activeCats.add(cat);
              setActiveStyle(btn, true);
            }
            updateTable();
          });
        });

        // Column hover highlight
    function bindColumnHover() {
      const table = document.querySelector('table');
      if (!table) return;
      table.addEventListener('mouseover', e => {
        const target = e.target.closest('[data-col]');
        if (!target) return;
        setCol(target.getAttribute('data-col'), true);
      });
      table.addEventListener('mouseout', e => {
        const target = e.target.closest('[data-col]');
        if (!target) return;
        setCol(target.getAttribute('data-col'), false);
      });
    }

    // Run once on load
    document.addEventListener('DOMContentLoaded', () => {
      updateTable();
      bindColumnHover();
    });
  })();
</script>