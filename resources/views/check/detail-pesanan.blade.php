@include('partials.head')
@include('partials.navbarcheck')

<body class="bg-gray-50 min-h-screen font-poppins">
  <main id="detail-main" class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8 opacity-0 translate-y-2 transition-all duration-500 ease-out">

    <!-- Header -->
    <div class="flex items-center gap-3 mb-8">
      <a href="{{ url()->previous() }}" class="text-[#187499] hover:text-[#36AE7E] text-sm inline-flex items-center gap-2">
        <i class="fas fa-chevron-left text-xs"></i>
        Back
      </a>
    </div>

    <h1 class="text-2xl sm:text-3xl font-bold text-center text-gray-900 mb-8">Detail</h1>

    <div class="space-y-6">

      <!-- Data Diri -->
      <section class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6">
        <h2 class="text-lg font-semibold text-gray-900 mb-4">1. Data diri</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
          <div>
            <p class="text-gray-500">Nama</p>
            <p class="font-semibold text-gray-900">John Doe</p>
          </div>
          <div>
            <p class="text-gray-500">Email</p>
            <p class="font-semibold text-gray-900">john.doe@email.com</p>
          </div>
          <div>
            <p class="text-gray-500">Telepon</p>
            <p class="font-semibold text-gray-900">+62 812-3456-7890</p>
          </div>
          <div>
            <p class="text-gray-500">Divisi</p>
            <p class="font-semibold text-gray-900">Operasional</p>
          </div>
        </div>
      </section>

      <!-- Info Tiket -->
      <section class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6">
        <h2 class="text-lg font-semibold text-gray-900 mb-4">2. Info tiket yang dipilih (Pesawat/Kereta/Hotel)</h2>

        <!-- Badge tipe -->
        <div class="mb-4">
          <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-gradient-to-r from-teal-100 to-blue-100 text-teal-800 border border-teal-200">
            Pesawat
          </span>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
          <div>
            <p class="text-gray-500">Maskapai / Provider</p>
            <p class="font-semibold text-gray-900">Garuda Indonesia</p>
          </div>
          <div>
            <p class="text-gray-500">Kode Booking (PNR)</p>
            <p class="font-semibold text-gray-900">AB12CD</p>
          </div>
          <div>
            <p class="text-gray-500">Berangkat</p>
            <p class="font-semibold text-gray-900">CGK → DPS, 15 Jan 2024, 10:30</p>
          </div>
          <div>
            <p class="text-gray-500">Pulang</p>
            <p class="font-semibold text-gray-900">DPS → CGK, 18 Jan 2024, 17:45</p>
          </div>
          <div>
            <p class="text-gray-500">Kelas</p>
            <p class="font-semibold text-gray-900">Economy</p>
          </div>
          <div>
            <p class="text-gray-500">Total</p>
            <p class="font-semibold text-gray-900">Rp 3.500.000</p>
          </div>
        </div>
      </section>

      <!-- Dokumen -->
      <section class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6">
        <h2 class="text-lg font-semibold text-gray-900 mb-4">3. Dokumen (KTP dan Surat dinas)</h2>
        <ul class="space-y-3">
          <li class="flex items-center justify-between bg-gray-50 border border-gray-200 rounded-xl px-4 py-3">
            <div class="flex items-center gap-3">
              <i class="far fa-file-alt text-gray-500"></i>
              <div>
                <p class="text-sm font-semibold text-gray-900">KTP.pdf</p>
                <p class="text-xs text-gray-500">240 KB • PDF</p>
              </div>
            </div>
            <div class="flex items-center gap-2">
              <button class="px-3 py-2 text-xs bg-white border border-gray-200 text-gray-700 rounded-lg hover:bg-gray-100">Lihat</button>
              <button class="px-3 py-2 text-xs bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white rounded-lg">Download</button>
            </div>
          </li>
          <li class="flex items-center justify-between bg-gray-50 border border-gray-200 rounded-xl px-4 py-3">
            <div class="flex items-center gap-3">
              <i class="far fa-file-alt text-gray-500"></i>
              <div>
                <p class="text-sm font-semibold text-gray-900">Surat-Dinas.pdf</p>
                <p class="text-xs text-gray-500">310 KB • PDF</p>
              </div>
            </div>
            <div class="flex items-center gap-2">
              <button class="px-3 py-2 text-xs bg-white border border-gray-200 text-gray-700 rounded-lg hover:bg-gray-100">Lihat</button>
              <button class="px-3 py-2 text-xs bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white rounded-lg">Download</button>
            </div>
          </li>
        </ul>
      </section>

      <!-- Catatan (via modal saat menolak) -->
      <section class="bg-white rounded-2xl border border-gray-100 p-6">
        <h2 class="text-lg font-semibold text-gray-900 mb-2">4. Catatan penolakan (muncul saat klik Tolak)</h2>
        <p class="text-sm text-gray-600">Catatan akan diminta melalui popup saat menekan tombol <span class="font-semibold">Tolak</span>.</p>
      </section>
    </div>

    <!-- Action buttons -->
    <div class="sticky bottom-0 left-0 right-0 mt-8 bg-gradient-to-t from-white via-white/90 to-transparent py-4">
      <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
          <button id="btn-tolak" class="w-full px-6 py-3 rounded-xl font-semibold text-white bg-red-600 hover:bg-red-700 transition shadow-md">Tolak</button>
          <button class="w-full px-6 py-3 rounded-xl font-semibold text-white bg-gradient-to-r from-[#187499] to-[#36AE7E] hover:from-[#156b8a] hover:to-[#2d9a6e] transition shadow-md">Terima</button>
        </div>
      </div>
    </div>
  </main>

  <!-- Modal Tolak -->
  <div id="modal-tolak" class="fixed inset-0 z-50 hidden">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative z-10 max-w-lg mx-auto mt-24 bg-white rounded-2xl shadow-2xl border border-gray-100 p-6">
      <h3 class="text-lg font-semibold text-gray-900 mb-3">Alasan menolak</h3>
      <p class="text-sm text-gray-600 mb-3">Tuliskan catatan mengapa menolak perjalanan dinas ini.</p>
      <textarea id="alasan-text" rows="4" class="w-full border-2 border-gray-200 rounded-xl p-3 text-sm focus:outline-none focus:border-[#36AE7E]" placeholder="Tulis alasan Anda di sini..."></textarea>
      <div class="mt-4 flex items-center justify-end gap-2">
        <button id="btn-cancel" class="px-4 py-2 text-sm rounded-lg border border-gray-200 text-gray-700 hover:bg-gray-100">Batal</button>
        <button id="btn-submit" class="px-4 py-2 text-sm rounded-lg text-white bg-gradient-to-r from-[#187499] to-[#36AE7E] hover:from-[#156b8a] hover:to-[#2d9a6e]">Simpan</button>
      </div>
    </div>
  </div>

  <script>
    // page enter transition
    document.addEventListener('DOMContentLoaded', () => {
      const el = document.getElementById('detail-main');
      if (el) requestAnimationFrame(() => el.classList.remove('opacity-0', 'translate-y-2'));
    });

    // modal handling
    const modal = document.getElementById('modal-tolak');
    const btnTolak = document.getElementById('btn-tolak');
    const btnCancel = document.getElementById('btn-cancel');
    const btnSubmit = document.getElementById('btn-submit');

    function openModal() { modal.classList.remove('hidden'); }
    function closeModal() { modal.classList.add('hidden'); }

    btnTolak?.addEventListener('click', openModal);
    btnCancel?.addEventListener('click', closeModal);
    btnSubmit?.addEventListener('click', () => {
      const alasan = (document.getElementById('alasan-text') || {}).value || '';
      // TODO: submit alasan via fetch/AJAX if needed
      closeModal();
      alert('Catatan penolakan tersimpan:\\n' + alasan);
    });

    // close when clicking backdrop
    modal?.addEventListener('click', (e) => {
      if (e.target === modal) closeModal();
    });
  </script>
</body>

@include('partials.footer')