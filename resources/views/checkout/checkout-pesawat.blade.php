@include('partials.head')

@section('title', 'Checkout Pesawat - Online Travel')

@include('partials.navigation')
<body class="font-poppins">
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-gray-100 py-4 sm:py-8 px-3 sm:px-4">
    <div class="max-w-6xl mx-auto">
        <!-- Back Navigation -->
        <div class="flex items-center mb-4 sm:mb-6">
                                      <button onclick="goBack()" class="flex items-center text-blue-600 hover:text-blue-800 transition-colors duration-200">
                 <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                 </svg>
                 <span class="text-sm font-medium">Apakah ingin kembali?</span>
             </button>
        </div>
        
        <!-- Flight Summary Card -->
        <div class="bg-white rounded-2xl shadow-lg p-4 sm:p-6 lg:p-8 mb-4 sm:mb-6">
            <!-- Trip Overview Section -->
            <div class="text-center mb-4 sm:mb-6">
                <h1 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-800">Jakarta → Denpasar-Bali</h1>
            </div>
            
            <!-- Separator Line -->
             <div class="w-full h-px bg-gray-200 mb-4 sm:mb-6"></div>
            
            <!-- Date and Trip Type -->
            <div class="flex flex-col sm:flex-row items-center justify-center mb-6 sm:mb-8 space-y-2 sm:space-y-0">
                <span class="bg-gradient-to-r from-[#187499] to-[#36AE7E] text-sm font-medium px-3 sm:px-4 py-2 rounded-full sm:mr-4 text-white">Pergi</span>
                <span class="font-semibold text-gray-800 text-base sm:text-lg">Sen, 1 Sep 2025</span>
            </div>
            
            <!-- Flight Details Card -->
             <div class="bg-gray-50 rounded-xl p-4 sm:p-6 mx-auto max-w-md border-2 border-gray-200">
                 <div class="flex items-center justify-center space-x-6">
                     <!-- Airline Information (Left) -->
                     <div class="flex items-center min-w-0">
                         <img src="{{ asset('lionair.png') }}" alt="Lion Air Logo" class="w-8 h-8 mr-2 flex-shrink-0">
                         <span class="font-bold text-gray-800 text-sm">Lion Air</span>
                     </div>
                     
                     <!-- Flight Details (Right) -->
                     <div class="flex items-center space-x-4">
                         <!-- Departure -->
                         <div class="text-center">
                             <div class="text-lg font-bold text-gray-800">20.30</div>
                             <div class="text-sm text-gray-500">CGK</div>
                         </div>
                         
                         <!-- Flight Duration and Type -->
                         <div class="flex flex-col items-center">
                             <div class="text-sm text-gray-500 mb-1">1j</div>
                             <div class="w-8 h-0.5 bg-gray-300 mb-1"></div>
                             <div class="text-sm text-gray-500">Langsung</div>
                         </div>
                         
                         <!-- Arrival -->
                         <div class="text-center">
                             <div class="text-lg font-bold text-gray-800">21.30</div>
                             <div class="text-sm text-gray-500">DPS</div>
                         </div>
                     </div>
                 </div>
             </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
            <!-- Booking Details Section -->
            <div class="bg-white rounded-2xl shadow-lg p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-2">Detail Pemesanan</h2>
                <p class="text-gray-600 text-sm mb-6">Detail kontak ini akan digunakan untuk pengiriman e-tiket</p>
                
                <form>
                    <div class="space-y-4">
                        <div>
                            <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                            <input type="text" id="nama" name="nama" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                   placeholder="Masukkan nama lengkap">
                        </div>
                        
                        <div>
                            <label for="telepon" class="block text-sm font-medium text-gray-700 mb-2">Nomor Telpon</label>
                            <input type="tel" id="telepon" name="telepon" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                   placeholder="Masukkan nomor telepon">
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Alamat Email</label>
                            <input type="email" id="email" name="email" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                   placeholder="Masukkan alamat email">
                        </div>
                    </div>
                </form>
            </div>

            <!-- Dokumen Pendukung Section -->
            <div class="bg-white rounded-2xl shadow-lg p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-2">Dokumen Pendukung</h2>
                <p class="text-gray-600 text-sm mb-6">KTP dan surat dinas diperlukan untuk memproses e-tiket Anda</p>
                
                <div class="space-y-4">
                                             <div>
                             <label for="ktp" class="block text-sm font-medium text-gray-700 mb-2">Upload KTP</label>
                             <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center hover:border-blue-400 transition-colors duration-200 cursor-pointer">
                                 <input type="file" id="ktp" name="ktp" class="hidden" accept=".pdf">
                                                          <div class="flex flex-col items-center">
                                  <img src="{{ asset('folder.png') }}" alt="Upload Icon" class="w-8 h-8 mb-2">
                                  <span class="text-gray-600">Upload KTP (PDF)</span>
                              </div>
                         </div>
                     </div>
                     
                                              <div>
                              <label for="surat_dinas" class="block text-sm font-medium text-gray-700 mb-2">Upload Surat Dinas</label>
                              <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center hover:border-blue-400 transition-colors duration-200 cursor-pointer">
                                  <input type="file" id="surat_dinas" name="surat_dinas" class="hidden" accept=".pdf">
                                                           <div class="flex flex-col items-center">
                                   <img src="{{ asset('folder.png') }}" alt="Upload Icon" class="w-8 h-8 mb-2">
                                   <span class="text-gray-600">Upload Surat Dinas (PDF)</span>
                               </div>
                          </div>
                      </div>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
                         <button type="submit" 
                     class="w-full max-w-md bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white font-bold py-4 px-8 rounded-xl hover:from-[#156b8a] hover:to-[#2d9a6b] transition-all duration-200 transform hover:scale-105 shadow-lg">
                 SUBMIT
             </button>
                 </div>
     </div>
 </div>
 
 <!-- Overlay Modal -->
 <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden">
     <div class="bg-white rounded-2xl p-8 max-w-md mx-4 text-center relative">
         <button type="button" onclick="goToCheckout()" class="absolute top-3 right-3 text-gray-400 hover:text-gray-600 transition-colors">
             <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
             </svg>
         </button>
         <div class="mx-auto mb-4 w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center">
             <svg class="w-5 h-5 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M12 2a10 10 0 110 20 10 10 0 010-20z" />
             </svg>
         </div>
         <h3 class="text-xl font-bold text-gray-800 mb-4">Mau lihat penerbangan lain?</h3>
         <p class="text-gray-600 mb-6">Kalau kamu kembali ke halaman sebelumnya, semua info yang diisi dan penerbangan yang dipilih akan hilang.</p>
         <div class="flex flex-col space-y-3">
              <button onclick="viewOtherFlights()" class="w-full px-6 py-3 bg-gradient-to-r from-blue-50 to-blue-100 text-[#36AE7E] rounded-xl hover:from-blue-100 hover:to-blue-200 transition-all duration-200 font-medium">
                  Lihat Penerbangan Lain
              </button>
             <button onclick="completeBooking()" class="w-full px-6 py-3 bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white rounded-xl hover:from-[#156b8a] hover:to-[#2d9a6b] transition-all duration-200 font-medium">
                 Selesaikan Pemesananmu
             </button>
         </div>
     </div>
 </div>
 
 </body>
 
 @include('partials.footer')
 
 <script>
 // Back navigation function
 function goBack() {
     // Show overlay
     showOverlay();
 }
 
 // Overlay functions
 function showOverlay() {
     const overlay = document.getElementById('overlay');
     overlay.classList.remove('hidden');
 }
 
 function hideOverlay() {
     const overlay = document.getElementById('overlay');
     if (overlay) {
         overlay.classList.add('hidden');
     }
 }

 function goToCheckout() {
     window.location.href = '/checkout/checkout-pesawat';
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
    
    // Form validation and submission
    const form = document.querySelector('form');
    const submitBtn = document.querySelector('button[type="submit"]');
    
    submitBtn.addEventListener('click', function(e) {
        e.preventDefault();
        
        // Basic validation
        const nama = document.getElementById('nama').value;
        const telepon = document.getElementById('telepon').value;
        const email = document.getElementById('email').value;
        const kursi = document.getElementById('kursi').value;
        const ktp = document.getElementById('ktp').files[0];
        const suratDinas = document.getElementById('surat_dinas').files[0];
        
        if (!nama || !telepon || !email || !kursi || !ktp || !suratDinas) {
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



