@include('partials.head')

@section('title', 'Checkout Train - Online Travel')

@include('partials.navigation')
<body class="font-poppins">
<div class="min-h-screen bg-[F4F7FE] py-4 sm:py-8 px-3 sm:px-4">
    <div class="max-w-6xl mx-auto">
        <!-- Back Navigation -->
        <div class="flex items-center mb-4 sm:mb-6">
            <button onclick="goBack()" class="flex items-center text-blue-600 hover:text-blue-800 transition-colors duration-200">
                 <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                 </svg>
                 <span class="text-sm font-medium">Back</span>
            </button>
        </div>

        <!-- Container utama: sesuaikan max-w jika mau lebih lebar/small -->
        <div class="max-w-6xl mx-auto px-4">

        <!-- train-summary card (atas) -->
        <div class="relative bg-white rounded-2xl shadow-lg p-4 sm:p-6 lg:p-8 mb-6">
            <div class="flex flex-col items-center">
            <div class="flex items-center space-x-3">
                <img src="/KAI.png" alt="KAI Logo" class="w-12 h-auto">
                <h2 class="text-lg sm:text-xl font-semibold text-gray-500">Sancaka 81</h2>
                <span class="text-lg sm:text-xl font-semibold text-gray-500">•</span>
                <span class="text-lg sm:text-xl font-semibold text-gray-500">Ekonomi</span>
            </div>

            <div class="mt-3"></div>

            <div class="flex items-center gap-4">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium text-white"
                    style="background: linear-gradient(90deg,#0d8596,#36AE7E);">
                Pergi
                </span>
                <div class="text-sm text-gray-600">
                <span class="font-medium text-gray-800">Sen, 1 Sep 2025</span>
                <span class="mx-2 text-gray-800">•</span>
                <span class="font-medium text-gray-800">07:00 - 10:07</span>
                </div>
            </div>

            <div class="mt-4 w-full text-center">
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-800">
                Surabaya Gubeng <span class="mx-2 text-gray-400">→</span> Solo Balapan
                </h1>
            </div>
            </div>

            <div class="mt-6 border-t border-gray-200"></div>

            <div class="mt-4 flex items-center justify-between">
            <div class="text-sm text-gray-500 font-semibold">Total Harga</div>
            <div class="text-right">
                <div class="text-lg sm:text-xl font-semibold text-gray-800">IDR 265.000</div>
            </div>
            </div>
        </div>

        <!-- BAWAH: dua kolom (kiri = detail pemesanan, kanan = dokumen pendukung) -->
        <div class="flex flex-col lg:flex-row gap-6 items-stretch">
            <!-- KIRI: Detail Pemesanan -->
            <div class="w-full lg:w-1/2">
              <div class="bg-white rounded-2xl shadow-lg p-6 h-full">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Detail Pemesanan</h2>
                <p class="text-gray-600 text-sm mb-6">Detail kontak ini akan digunakan untuk pengiriman e-tiket</p>

                <form id="booking-form">
                  <div class="space-y-4">
                    <div>
                      <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                      <input type="text" id="nama" name="nama" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-200 transition" placeholder="Masukkan nama lengkap">
                    </div>
                    <div>
                      <label for="telepon" class="block text-sm font-medium text-gray-700 mb-2">Nomor Telpon</label>
                      <input type="tel" id="telepon" name="telepon" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-200 transition" placeholder="Masukkan nomor telepon">
                    </div>
                    <div>
                      <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Alamat Email</label>
                      <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-200 transition" placeholder="Masukkan alamat email">
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <!-- KANAN: Dokumen Pendukung -->
            <div class="w-full lg:w-1/2">
              <div class="bg-white rounded-2xl shadow-lg p-6 h-full">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Dokumen Pendukung</h2>
                <p class="text-gray-600 text-sm mb-6">KTP dan surat dinas diperlukan untuk memproses e-tiket Anda</p>

                <div class="space-y-4">
                  <!-- Upload KTP -->
                  <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Upload KTP</label>
                    <div class="upload-box border-2 border-dashed border-gray-200 rounded-xl p-4 hover:border-blue-300 transition-colors duration-200 cursor-pointer flex items-center gap-4" onclick="triggerFile('ktp')">
                      <img src="{{ asset('folder.png') }}" alt="icon" class="w-8 h-8">
                      <div class="flex-1 text-left">
                        <div class="text-gray-700">Klik untuk upload atau tarik file ke sini</div>
                        <div id="ktp-filename" class="text-sm text-gray-400">Format: PDF (maks 5MB)</div>
                      </div>
                      <input type="file" id="ktp" name="ktp" accept=".pdf" class="hidden" onchange="handleFileChange(event, 'ktp-filename')">
                    </div>
                  </div>

                  <!-- Upload Surat Dinas -->
                  <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Upload Surat Dinas</label>
                    <div class="upload-box border-2 border-dashed border-gray-200 rounded-xl p-4 hover:border-blue-300 transition-colors duration-200 cursor-pointer flex items-center gap-4" onclick="triggerFile('surat_dinas')">
                      <img src="{{ asset('folder.png') }}" alt="icon" class="w-8 h-8">
                      <div class="flex-1 text-left">
                        <div class="text-gray-700">Klik untuk upload atau tarik file ke sini</div>
                        <div id="surat_dinas-filename" class="text-sm text-gray-400">Format: PDF (maks 5MB)</div>
                      </div>
                      <input type="file" id="surat_dinas" name="surat_dinas" accept=".pdf" class="hidden" onchange="handleFileChange(event, 'surat_dinas-filename')">
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        </div>

        <!-- JS (file upload + seat map interactions) -->
        <script>
        function triggerFile(id) { document.getElementById(id).click(); }
        function handleFileChange(e, labelId) {
            const file = e.target.files[0];
            const label = document.getElementById(labelId);
            if (!file) { label.textContent = e.target.accept === '.pdf' ? 'Format: PDF (maks 5MB)' : ''; return; }
            const name = file.name.length > 40 ? file.name.slice(0,37) + '...' : file.name;
            label.textContent = name;
        }

        // (Seat selection removed)
        </script>


        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" id="checkout-submit"
                     class="w-full max-w-md bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white font-bold py-4 px-8 rounded-xl hover:from-[#156b8a] hover:to-[#2d9a6b] transition-all duration-200 transform hover:scale-105 shadow-lg mt-10">
                 SUBMIT
            </button>
            <!-- (Seat confirmation modal removed) -->

            <script>
            // (Seat confirmation logic removed)
            </script>

        </div>
     </div>
 </div>
 
 <!-- Overlay Modal -->
 <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden opacity-0 transition-opacity duration-200 ease-out">
    <div id="overlay-dialog" class="bg-white rounded-2xl p-8 max-w-md mx-4 text-center transform scale-95 opacity-0 transition-all duration-300 ease-out">
         <h3 class="text-xl font-bold text-gray-800 mb-4">Mau lihat kereta lain?</h3>
         <p class="text-gray-600 mb-6">Kalau kamu kembali ke halaman sebelumnya, semua info yang diisi dan keberangkatan yang dipilih akan hilang.</p>
         <div class="flex flex-col space-y-3">
              <button onclick="viewOtherFlights()" class="w-full px-6 py-3 bg-gradient-to-r from-blue-50 to-blue-100 text-[#36AE7E] rounded-xl hover:from-blue-100 hover:to-blue-200 transition-all duration-200 font-medium">
                  Lihat Kereta Lain
              </button>
             <button onclick="completeBooking()" class="w-full px-6 py-3 bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white rounded-xl hover:from-[#156b8a] hover:to-[#2d9a6b] transition-all duration-200 font-medium">
                 Selesaikan Pemesananmu
             </button>
         </div>
     </div>
 </div>
 
 <script>
 // Back navigation function
 function goBack() {
     // Show overlay
     showOverlay();
 }
 
 // Overlay functions
 function showOverlay() {
    const overlay = document.getElementById('overlay');
    const dialog = document.getElementById('overlay-dialog');
    overlay.classList.remove('hidden');
    requestAnimationFrame(() => {
        overlay.classList.remove('opacity-0');
        dialog.classList.remove('scale-95','opacity-0');
    });
 }
 
 function hideOverlay() {
    const overlay = document.getElementById('overlay');
    const dialog = document.getElementById('overlay-dialog');
    if (overlay && dialog) {
        overlay.classList.add('opacity-0');
        dialog.classList.add('scale-95','opacity-0');
        setTimeout(() => overlay.classList.add('hidden'), 220);
    }
 }
 
 function viewOtherFlights() {
      // Hide overlay and redirect to flight search page
      hideOverlay();
      alert('Redirecting to flight search page...');
      // window.location.href = '/search-flights'; // Uncomment this to actually redirect
 }
  
  function completeBooking() {
      // Hide overlay and stay on current page to complete booking
      hideOverlay();
      // User stays on current page to complete the booking
}

document.addEventListener('DOMContentLoaded', function() {
    // File upload functionality
    const fileInputs = document.querySelectorAll('input[type="file"]');
    const uploadAreas = document.querySelectorAll('.border-dashed');
    
    fileInputs.forEach((input, index) => {
        const uploadArea = uploadAreas[index];
        
        uploadArea.addEventListener('click', () => {
            input.click();
        });
        
        input.addEventListener('change', (e) => {
            if (e.target.files.length > 0) {
                const fileName = e.target.files[0].name;
                uploadArea.innerHTML = `
                    <div class="flex flex-col items-center">
                        <svg class="w-8 h-8 text-green-500 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-green-600 text-sm">${fileName}</span>
                    </div>
                `;
                uploadArea.classList.remove('border-gray-300', 'hover:border-blue-400');
                uploadArea.classList.add('border-green-400', 'bg-green-50');
            }
        });
    });
    
    // Form validation and submission (scope only to this page's submit)
    const form = document.querySelector('form');
    const submitBtn = document.getElementById('checkout-submit');
    
    if (submitBtn) submitBtn.addEventListener('click', function(e) {
        e.preventDefault();
        
        // Basic validation
        const nama = document.getElementById('nama').value;
        const telepon = document.getElementById('telepon').value;
        const email = document.getElementById('email').value;
        const ktp = document.getElementById('ktp').files[0];
        const suratDinas = document.getElementById('surat_dinas').files[0];
        
        if (!nama || !telepon || !email || !ktp || !suratDinas) {
            alert('Mohon lengkapi semua data yang diperlukan');
            return;
        }
        
        // Email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert('Format email tidak valid');
            return;
        }
        
        // Phone validation
        const phoneRegex = /^[0-9+\-\s()]+$/;
        if (!phoneRegex.test(telepon)) {
            alert('Format nomor telepon tidak valid');
            return;
        }
        
        // If all validation passes, show success message
        alert('Data berhasil disubmit! Redirecting to payment...');
        // Here you can redirect to payment page or process the form
    });
});
</script>


@include('partials.footer')
