<!-- Modal Detail -->
<div id="modal-detail-kereta" class="fixed inset-0 z-50 hidden">
  <!-- Backdrop -->
  <div class="absolute inset-0 bg-black/50 opacity-0 transition-opacity duration-300 ease-out" aria-hidden="true"></div>

  <!-- Wrapper -->
  <div class="relative z-10 w-full h-full flex items-start sm:items-center justify-center p-4">
    <!-- Panel -->
    <div class="max-w-5xl w-full bg-white rounded-2xl shadow-2xl border border-gray-100 opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95 transition-all duration-300 ease-out" role="dialog" aria-modal="true" aria-labelledby="detail-title">
      <!-- Header -->
      <div class="sticky top-0 z-10 px-6 py-5 border-b border-gray-100 bg-white/90 backdrop-blur-sm rounded-t-2xl">
        <div class="relative flex items-center justify-center">
          <h1 id="detail-title" class="text-2xl sm:text-2xl font-bold text-gray-900 tracking-tight">Detail Ticket</h1>
        </div>
      </div>

      <!-- Content -->
      <div class="p-6 overflow-y-auto max-h-[calc(90vh-8rem)]">
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
            <h2 class="text-lg font-semibold text-gray-900 mb-4">2. Info tiket yang dipilih</h2>
            <div class="mb-4">
              <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-gradient-to-r from-teal-100 to-blue-100 text-teal-800 border border-teal-200">
                Kereta
              </span>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
              <div>
                <p class="text-gray-500">Kereta / Operator</p>
                <p class="font-semibold text-gray-900">KA Argo Bromo Anggrek • KAI</p>
              </div>
              <div>
                <p class="text-gray-500">Kode Booking</p>
                <p class="font-semibold text-gray-900">TR12AB</p>
              </div>
              <div>
                <p class="text-gray-500">Berangkat</p>
                <p class="font-semibold text-gray-900">GMR → SLO, 15 Jan 2024, 07:00</p>
              </div>
              <div>
                <p class="text-gray-500">Tiba</p>
                <p class="font-semibold text-gray-900">SLO, 15 Jan 2024, 10:07</p>
              </div>
              <div>
                <p class="text-gray-500">Kelas</p>
                <p class="font-semibold text-gray-900">Eksekutif</p>
              </div>
              <div>
                <p class="text-gray-500">Total</p>
                <p class="font-semibold text-gray-900">Rp 3.500.000</p>
              </div>
            </div>
          </section>

          <!-- Dokumen -->
          <section class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">3. Dokumen</h2>
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
        </div>
      </div>

      <!-- Footer -->
      <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-100">
        <button type="button" class="px-4 py-2 rounded-lg bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white hover:opacity-95 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2" onclick="closeDetailKereta()">
          Tutup
        </button>
      </div>
    </div>
  </div>
</div>




<!-- Modal Detail -->
<div id="modal-detail-pesawat" class="fixed inset-0 z-50 hidden">
  <!-- Backdrop -->
  <div class="absolute inset-0 bg-black/50 opacity-0 transition-opacity duration-300 ease-out" aria-hidden="true"></div>

  <!-- Wrapper -->
  <div class="relative z-10 w-full h-full flex items-start sm:items-center justify-center p-4">
    <!-- Panel -->
    <div class="max-w-5xl w-full bg-white rounded-2xl shadow-2xl border border-gray-100 opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95 transition-all duration-300 ease-out" role="dialog" aria-modal="true" aria-labelledby="detail-title">
      <!-- Header -->
      <div class="sticky top-0 z-10 px-6 py-5 border-b border-gray-100 bg-white/90 backdrop-blur-sm rounded-t-2xl">
        <div class="relative flex items-center justify-center">
          <h1 id="detail-title" class="text-2xl sm:text-2xl font-bold text-gray-900 tracking-tight">Detail Ticket</h1>
        </div>
      </div>

      <!-- Content -->
      <div class="p-6 overflow-y-auto max-h-[calc(90vh-8rem)]">
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
            <h2 class="text-lg font-semibold text-gray-900 mb-4">2. Info tiket yang dipilih</h2>
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
            <h2 class="text-lg font-semibold text-gray-900 mb-4">3. Dokumen</h2>
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
        </div>
      </div>

      <!-- Footer -->
      <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-100">
        <button type="button" class="px-4 py-2 rounded-lg bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white hover:opacity-95 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2" onclick="closeDetailPesawat()">
          Tutup
        </button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Detail -->
<div id="modal-detail-hotel" class="fixed inset-0 z-50 hidden">
  <!-- Backdrop -->
  <div class="absolute inset-0 bg-black/50 opacity-0 transition-opacity duration-300 ease-out" aria-hidden="true"></div>

  <!-- Wrapper -->
  <div class="relative z-10 w-full h-full flex items-start sm:items-center justify-center p-4">
    <!-- Panel -->
    <div class="max-w-5xl w-full bg-white rounded-2xl shadow-2xl border border-gray-100 opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95 transition-all duration-300 ease-out" role="dialog" aria-modal="true" aria-labelledby="detail-title">
      <!-- Header -->
      <div class="sticky top-0 z-10 px-6 py-5 border-b border-gray-100 bg-white/90 backdrop-blur-sm rounded-t-2xl">
        <div class="relative flex items-center justify-center">
          <h1 id="detail-title" class="text-2xl sm:text-2xl font-bold text-gray-900 tracking-tight">Detail Ticket</h1>
        </div>
      </div>

      <!-- Content -->
      <div class="p-6 overflow-y-auto max-h-[calc(90vh-8rem)]">
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
            <h2 class="text-lg font-semibold text-gray-900 mb-4">2. Info tiket yang dipilih</h2>
            <div class="mb-4">
              <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-gradient-to-r from-teal-100 to-blue-100 text-teal-800 border border-teal-200">
                Hotel
              </span>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
              <div>
                <p class="text-gray-500">Nama Hotel</p>
                <p class="font-semibold text-gray-900">Hotel Mulia Senayan, Jakarta</p>
              </div>
              <div>
                <p class="text-gray-500">Kode Booking</p>
                <p class="font-semibold text-gray-900">HTL9XYZ</p>
              </div>
              <div>
                <p class="text-gray-500">Check-in</p>
                <p class="font-semibold text-gray-900">15 Jan 2024, 14:00</p>
              </div>
              <div>
                <p class="text-gray-500">Check-out</p>
                <p class="font-semibold text-gray-900">18 Jan 2024, 12:00</p>
              </div>
              <div>
                <p class="text-gray-500">Tipe Kamar</p>
                <p class="font-semibold text-gray-900">Deluxe King • 1 Kamar • 2 Tamu</p>
              </div>
              <div>
                <p class="text-gray-500">Total</p>
                <p class="font-semibold text-gray-900">Rp 3.500.000</p>
              </div>
            </div>
          </section>

          <!-- Dokumen -->
          <section class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">3. Dokumen</h2>
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
        </div>
      </div>

      <!-- Footer -->
      <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-100">
        <button type="button" class="px-4 py-2 rounded-lg bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white hover:opacity-95 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2" onclick="closeDetailHotel()">
          Tutup
        </button>
      </div>
    </div>
  </div>
</div>

<script>
  function makeModalController(modalId) {
    const modal = document.getElementById(modalId);
    if (!modal) return { open: () => {}, close: () => {} };
    const backdrop = modal.querySelector('div[aria-hidden="true"]');
    const panel = modal.querySelector('.max-w-5xl.w-full');

    function open() {
      if (!backdrop || !panel) { modal.classList.remove('hidden'); return; }
      modal.classList.remove('hidden');
      requestAnimationFrame(() => {
        backdrop.classList.remove('opacity-0');
        panel.classList.remove('opacity-0', 'translate-y-4', 'sm:scale-95');
      });
    }

    function close() {
      if (!backdrop || !panel) { modal.classList.add('hidden'); return; }
      backdrop.classList.add('opacity-0');
      panel.classList.add('opacity-0', 'translate-y-4', 'sm:scale-95');
      const done = () => {
        modal.classList.add('hidden');
        backdrop.removeEventListener('transitionend', done);
      };
      backdrop.addEventListener('transitionend', done);
    }

    // Close when clicking backdrop
    backdrop?.addEventListener('click', close);

    return { open, close };
  }

  const keretaCtrl = makeModalController('modal-detail-kereta');
  const pesawatCtrl = makeModalController('modal-detail-pesawat');
  const hotelCtrl = makeModalController('modal-detail-hotel');

  function openDetailKereta() { keretaCtrl.open(); }
  function closeDetailKereta() { keretaCtrl.close(); }
  function openDetailPesawat() { pesawatCtrl.open(); }
  function closeDetailPesawat() { pesawatCtrl.close(); }
  function openDetailHotel() { hotelCtrl.open(); }
  function closeDetailHotel() { hotelCtrl.close(); }

  // Expose globally for manual calls
  window.openDetailKereta = openDetailKereta;
  window.closeDetailKereta = closeDetailKereta;
  window.openDetailPesawat = openDetailPesawat;
  window.closeDetailPesawat = closeDetailPesawat;
  window.openDetailHotel = openDetailHotel;
  window.closeDetailHotel = closeDetailHotel;
</script>
