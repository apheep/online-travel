@include('partials.head')
@include('partials.navbarcheck')

<body class="bg-gray-50 min-h-screen font-poppins">
  <main id="detail-main" class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8 opacity-0 translate-y-2 transition-all duration-500 ease-out">

    <!-- Header -->
    <div class="flex items-center gap-3 mb-8">
      <a href="{{ url()->previous() }}" class="text-[#FE0004] text-medium text-sm inline-flex items-center gap-2">
        <i class="fas fa-chevron-left text-xs"></i>
        Back
      </a>
    </div>

  <!-- Modal Konfirmasi Terima -->
  <div id="modal-terima" class="fixed inset-0 z-50 hidden">
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-black/50 opacity-0 transition-opacity duration-300 ease-out" aria-hidden="true"></div>
    <!-- Center wrapper -->
    <div class="relative z-10 w-full h-full flex items-start sm:items-center justify-center p-4">
      <!-- Panel -->
      <div class="max-w-md w-full bg-white rounded-2xl shadow-2xl border border-gray-100 opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95 transition-all duration-300 ease-out">
        <div class="p-6">
          <div class="flex items-start justify-between mb-2">
            <div class="flex items-center gap-2">
              <div class="h-8 w-8 rounded-lg bg-[#FE0004] flex items-center justify-center text-white">
                <i class="fas fa-check text-xs"></i>
              </div>
              <h3 class="text-lg font-semibold text-gray-900">Konfirmasi</h3>
            </div>
            <button id="btn-terima-x" class="text-gray-400 hover:text-gray-600 transition" aria-label="Tutup">
              <i class="fas fa-times"></i>
            </button>
          </div>
          <p class="text-sm text-gray-700">Yakin ingin menerima pengajuan perjalanan dinas ini?</p>

          <div class="mt-5 flex items-center justify-end gap-2">
            <button id="btn-terima-cancel" class="px-4 py-2 text-sm rounded-lg border border-gray-200 text-gray-700 hover:bg-gray-100">Tidak</button>
            <button id="btn-terima-confirm" class="px-4 py-2 text-sm rounded-lg text-white bg-[#FE0004] shadow:lg">Ya, Terima</button>
          </div>
        </div>
      </div>
    </div>
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
            Hotel
          </span>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
          <div>
            <p class="text-gray-500">Hotel</p>
            <p class="font-semibold text-gray-900">Hotel Majapahit Surabaya</p>
          </div>
          <div>
            <p class="text-gray-500">Kode Reservasi</p>
            <p class="font-semibold text-gray-900">HTL-90876</p>
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
            <p class="font-semibold text-gray-900">Deluxe Room • 1 Kamar</p>
          </div>
          <div>
            <p class="text-gray-500">Total</p>
            <p class="font-semibold text-gray-900">Rp 1.800.000</p>
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
              <button class="px-3 py-2 text-xs bg-[#FE0004] text-white rounded-lg">Download</button>
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
              <button class="px-3 py-2 text-xs bg-[#FE0004] text-white rounded-lg">Download</button>
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
          <button id="btn-terima" class="w-full px-6 py-3 rounded-xl font-semibold text-white bg-[#FE0004]  transition shadow-md">Terima</button>
        </div>
      </div>
    </div>
  </main>

  <!-- Modal Tolak -->
  <div id="modal-tolak" class="fixed inset-0 z-50 hidden">
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-black/50 opacity-0 transition-opacity duration-300 ease-out" aria-hidden="true"></div>
    <!-- Panel wrapper to center -->
    <div class="relative z-10 w-full h-full flex items-start sm:items-center justify-center p-4">
      <!-- Panel -->
      <div class="max-w-lg w-full bg-white rounded-2xl shadow-2xl border border-gray-100 opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95 transition-all duration-300 ease-out">
        <div class="p-6">
          <div class="flex items-start justify-between mb-2">
            <div class="flex items-center gap-2">
              <div class="h-8 w-8 rounded-lg bg-[#FE0004] flex items-center justify-center text-white">
                <i class="fas fa-comment-dots text-xs"></i>
              </div>
              <h3 class="text-lg font-semibold text-gray-900">Alasan menolak</h3>
            </div>
            <button id="btn-x-close" class="text-gray-400 hover:text-gray-600 transition" aria-label="Tutup">
              <i class="fas fa-times"></i>
            </button>
          </div>
          <p class="text-sm text-gray-600 mb-3">Tuliskan catatan mengapa menolak perjalanan dinas ini.</p>
          <label for="alasan-text" class="sr-only">Alasan</label>
          <textarea id="alasan-text" rows="4" class="w-full border-2 border-gray-200 rounded-xl p-3 text-sm focus:outline-none focus:border-[#F6B101]" placeholder="Tulis alasan Anda di sini..."></textarea>

          <div class="mt-4 flex items-center justify-end gap-2">
            <button id="btn-cancel" class="px-4 py-2 text-sm rounded-lg border border-gray-200 text-gray-700 hover:bg-gray-100">Batal</button>
            <button id="btn-submit" class="px-4 py-2 text-sm rounded-lg text-white bg-[#FE0004]  shadow">Simpan</button>
          </div>
        </div>
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
    const btnXClose = document.getElementById('btn-x-close');
    const modalBackdrop = modal?.querySelector('div[aria-hidden="true"]');
    const modalPanel = modal?.querySelector('.max-w-lg.w-full');

    // confirm modal elements
    const modalTerima = document.getElementById('modal-terima');
    const btnTerima = document.getElementById('btn-terima');
    const btnTerimaX = document.getElementById('btn-terima-x');
    const btnTerimaCancel = document.getElementById('btn-terima-cancel');
    const btnTerimaConfirm = document.getElementById('btn-terima-confirm');
    const terimaBackdrop = modalTerima?.querySelector('div[aria-hidden="true"]');
    const terimaPanel = modalTerima?.querySelector('.max-w-md.w-full');

    function openModal() {
      if (!modal || !modalBackdrop || !modalPanel) return;
      modal.classList.remove('hidden');
      // allow layout flush before transitioning
      requestAnimationFrame(() => {
        modalBackdrop.classList.remove('opacity-0');
        modalPanel.classList.remove('opacity-0', 'translate-y-4', 'sm:scale-95');
      });
    }

    function closeModal() {
      if (!modal || !modalBackdrop || !modalPanel) return;
      modalBackdrop.classList.add('opacity-0');
      modalPanel.classList.add('opacity-0', 'translate-y-4', 'sm:scale-95');
      // wait for transition to end before hiding
      const done = () => {
        modal.classList.add('hidden');
        modalBackdrop.removeEventListener('transitionend', done);
      };
      modalBackdrop.addEventListener('transitionend', done);
    }

    btnTolak?.addEventListener('click', openModal);
    btnCancel?.addEventListener('click', closeModal);
    btnXClose?.addEventListener('click', closeModal);
    btnSubmit?.addEventListener('click', () => {
      const alasan = (document.getElementById('alasan-text') || {}).value || '';
      // TODO: submit alasan via fetch/AJAX if needed
      closeModal();
      // Redirect back with rejected flag; optionally you can persist alasan server-side
      window.location.href = "{{ route('checking') }}?rejected=1";
    });

    // close when clicking backdrop
    modal?.addEventListener('click', (e) => {
      if (e.target === modal) closeModal();
    });

    // open confirm modal for Terima
    function openConfirm() {
      if (!modalTerima || !terimaBackdrop || !terimaPanel) return;
      modalTerima.classList.remove('hidden');
      requestAnimationFrame(() => {
        terimaBackdrop.classList.remove('opacity-0');
        terimaPanel.classList.remove('opacity-0', 'translate-y-4', 'sm:scale-95');
      });
    }

    function closeConfirm() {
      if (!modalTerima || !terimaBackdrop || !terimaPanel) return;
      terimaBackdrop.classList.add('opacity-0');
      terimaPanel.classList.add('opacity-0', 'translate-y-4', 'sm:scale-95');
      const done2 = () => {
        modalTerima.classList.add('hidden');
        terimaBackdrop.removeEventListener('transitionend', done2);
      };
      terimaBackdrop.addEventListener('transitionend', done2);
    }

    btnTerima?.addEventListener('click', openConfirm);
    btnTerimaCancel?.addEventListener('click', closeConfirm);
    btnTerimaX?.addEventListener('click', closeConfirm);
    btnTerimaConfirm?.addEventListener('click', () => {
      closeConfirm();
      // Redirect to checking page with success flag
      window.location.href = "{{ route('checking') }}?success=1";
    });

    modalTerima?.addEventListener('click', (e) => {
      if (e.target === modalTerima) closeConfirm();
    });
  </script>
</body>

@include('partials.footer')