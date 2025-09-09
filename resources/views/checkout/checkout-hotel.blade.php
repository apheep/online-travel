@include('partials.head')

@section('title', 'Checkout Hotel - Online Travel')

@include('partials.navigation')

<body class="bg-[F4F7FE] font-poppins">
	<div class="min-h-screen py-4 sm:py-8 px-3 sm:px-4">
		<div class="max-w-6xl mx-auto">

			<!-- Back Navigation -->
            <div class="flex items-center mb-4 sm:mb-6">
                <button onclick="goBack()" 
                        class="flex items-center text-blue-600 hover:text-blue-800 transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                    <span class="text-sm font-medium">Back</span>
                </button>
            </div>

			<!-- Top: Hotel Image (left) and Summary Card (right) -->
			<div class="grid grid-cols-1 md:grid-cols-3 gap-4 sm:gap-5 mb-4 sm:mb-6">	
				<!-- Left image -->
				<div class="md:col-span-1 bg-gray-50 rounded-xl sm:rounded-2xl shadow overflow-hidden h-48 sm:h-auto">
					<img src="{{ asset('pesananhotel.png') }}" alt="Hotel" class="w-full h-full object-cover">
				</div>
				<!-- Right summary card -->
				<div class="md:col-span-2 bg-gray-50 rounded-xl sm:rounded-2xl shadow p-4 sm:p-5">
					<h1 class="text-lg sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4">Hotel Majapahit Surabaya</h1>
					<div class="border rounded-lg sm:rounded-xl p-3 sm:p-4">
						<div class="flex flex-col sm:flex-row items-start sm:items-stretch gap-3 sm:gap-4">
							<!-- Left: room preview + facilities -->
							<div class="flex-1 flex flex-col sm:flex-row gap-3 sm:gap-4 w-full">
								<div class="flex-shrink-0">
									<p class="text-xs font-bold text-gray-800 mb-2">Kamar king</p>
									<img src="{{ asset('kategorikamar.png') }}" 
										alt="Kamar" 
										class="w-40 h-40 sm:w-42 sm:h-42 object-cover">
								</div>
								<div class="border rounded-lg p-3 bg-gray-50 flex-1">
									<div class="grid grid-cols-1 sm:grid-cols-3 gap-3 sm:gap-4">
										<!-- Kolom kiri: Badge + fasilitas -->
										<div class="col-span-1 sm:col-span-2">
										<span class="bg-gradient-to-r from-[#FE0004] to-[#F6B101] text-xs font-medium px-2 sm:px-3 py-1 rounded-md text-white">Sarapan (1pax)
											</span>
											<ul class="mt-3 text-xs sm:text-sm text-gray-700 space-y-1 sm:space-y-2">
												<li class="flex items-start gap-2">
                                                <img src="{{ asset('logomanusia.png') }}" alt="User" class="w-5 h-5 mt-0.5">
                                                <span>1 Dewasa, 1 Anak</span>
                                            </li>

												<li class="flex items-center gap-2">
													<span class="w-1.5 h-1.5 sm:w-2 sm:h-2 rounded-full bg-gray-400 inline-block flex-shrink-0"></span>
													<span>Kasur 2 ranjang</span>
												</li>
												<li class="flex items-center gap-2">
													<span class="w-1.5 h-1.5 sm:w-2 sm:h-2 rounded-full bg-gray-400 inline-block flex-shrink-0"></span>
													<span>TV</span>
												</li>
												<li class="flex items-center gap-2">
													<span class="w-1.5 h-1.5 sm:w-2 sm:h-2 rounded-full bg-gray-400 inline-block flex-shrink-0"></span>
													<span>Bathtub</span>
												</li>
												<li class="flex items-center gap-2">
													<span class="w-1.5 h-1.5 sm:w-2 sm:h-2 rounded-full bg-gray-400 inline-block flex-shrink-0"></span>
													<span>Teras atau Balkon</span>
												</li>
												<li class="flex items-center gap-2">
													<span class="w-1.5 h-1.5 sm:w-2 sm:h-2 rounded-full bg-gray-400 inline-block flex-shrink-0"></span>
													<span>Pembersihan Kamar Harian</span>
												</li>
											</ul>
										</div>
										<!-- Kolom kanan: Harga -->
										<div class="col-span-1 flex items-center justify-center sm:border-l border-t sm:border-t-0 pt-3 sm:pt-0 mt-3 sm:mt-0">
											<span class="text-red-500 font-semibold text-base sm:text-lg">IDR 600.000</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Right: price removed; price now inside the facilities box -->
					</div>
				</div>
			</div>


			                    <!--  Additional Details Section -->
								<div class="bg-white rounded-2xl shadow-lg p-4 sm:p-6 mb-4 sm:mb-6">
                <div class="flex flex-col sm:flex-row gap-6">
                     <!-- Detail Pekerjaan -->
                    <div class="flex gap-4 flex-1">
                        <img src="{{ asset('detailpekerjaan.png') }}" 
                            alt="Detail Pekerjaan" 
                            class="w-12 h-12 self-center">
                        <div class="flex flex-col w-full">
                            <label class="block text-gray-800 font-medium mb-2">Detail Pekerjaan</label>
                            <input type="text" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                placeholder="Masukkan detail pekerjaan">
                        </div>
                    </div>

                    <!-- Detail Dinas -->
                    <div class="flex gap-4 flex-1">
                        <img src="{{ asset('detaildinas.png') }}" 
                            alt="Detail Dinas" 
                            class="w-12 h-12 self-center">
                        <div class="flex flex-col w-full">
                            <label class="block text-gray-800 font-medium mb-2">Detail Dinas</label>
                            <input type="text" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                placeholder="Masukkan detail dinas">
                        </div>
                    </div>
                </div>
            </div> 

			<!-- Booking Details and Supporting Documents Section -->
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
					<p class="text-gray-600 text-sm mb-6">
						KTP dan surat dinas diperlukan untuk memproses e-tiket Anda
					</p>
					
					<div class="space-y-4">
						
						<!-- Upload KTP -->
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
						
						<!-- Upload Surat Dinas -->
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
		</div>

		<!-- Submit Button -->
		<div class="text-center">
			<button type="submit" id="checkout-submit"
					class="w-full max-w-md bg-gradient-to-r from-[#FE0004] to-[#F6B101] text-white font-bold py-4 px-8 rounded-xl hover:from-[#156b8a] hover:to-[#2d9a6b] transition-all duration-200 transform hover:scale-105 shadow-lg">
				SUBMIT
			</button>
		</div>
	</div>
</body>

<!-- Confirm Submit Modal -->
<div id="confirm-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden opacity-0 transition-opacity duration-200">
    <div id="confirm-overlay-dialog" class="bg-white rounded-2xl p-8 max-w-md mx-4 text-center transform scale-95 opacity-0 transition-all duration-300 ease-out">
        <h3 class="text-xl font-bold text-gray-800 mb-3">Kirim Pemesanan?</h3>
        <p class="text-gray-600 mb-6">Pastikan semua data pemesanan sudah benar. Lanjutkan kirim pemesanan sekarang?</p>
        <div class="flex flex-col space-y-3">
            <button id="confirm-cancel" class="w-full px-6 py-3 bg-gradient-to-r from-blue-50 to-blue-100 text-[#F6B101] rounded-xl hover:from-blue-100 hover:to-blue-200 transition-all duration-200 font-medium">Tidak, Periksa Lagi</button>
            <button id="confirm-yes" class="w-full px-6 py-3 bg-gradient-to-r from-[#FE0004] to-[#F6B101] text-white rounded-xl hover:from-[#156b8a] hover:to-[#2d9a6b] transition-all duration-200 font-medium">Ya, Kirim Sekarang</button>
        </div>
    </div>
    </div>

<!-- Overlay Modal -->
<div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden opacity-0 transition-opacity duration-300 ease-out px-4">
    <div class="overlay-panel bg-white rounded-xl sm:rounded-2xl p-6 sm:p-8 max-w-sm sm:max-w-md w-full text-center relative transform transition-all duration-300 ease-out translate-y-4 sm:translate-y-0 sm:scale-95 opacity-0">
        
        <!-- Close Button -->
        <button type="button" onclick="goToCheckout()" 
                class="absolute top-3 right-3 text-gray-400 hover:text-gray-600 transition-colors">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
        
        <!-- Info Icon -->
        <div class="mx-auto mb-4 w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center">
            <svg class="w-5 h-5 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M12 2a10 10 0 110 20 10 10 0 010-20z"/>
            </svg>
        </div>
        
        <!-- Text Content -->
        <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-3 sm:mb-4">Mau lihat penginapan lain?</h3>
        <p class="text-sm sm:text-base text-gray-600 mb-4 sm:mb-6">
            Kalau kamu kembali ke halaman sebelumnya, semua info yang di isi dan penginipan yang dipilih akan hilang.
        </p>
        
        <!-- Actions -->
        <div class="flex flex-col space-y-3">
            <button onclick="viewOtherHotels()" 
                    class="w-full px-6 py-3 bg-gradient-to-r from-blue-50 to-blue-100 text-[#F6B101] rounded-xl hover:from-blue-100 hover:to-blue-200 transition-all duration-200 font-medium">
                Lihat Penginapan Lain
            </button>
            <button onclick="completeBooking()" 
                    class="w-full px-6 py-3 bg-gradient-to-r from-[#FE0004] to-[#F6B101] text-white rounded-xl hover:from-[#156b8a] hover:to-[#2d9a6b] transition-all duration-200 font-medium">
                Selesaikan Pemesananmu
            </button>
        </div>
    </div>
</div>

@include('partials.footer')

<script>
    // Back navigation function
    function goBack() {
        showOverlay();
    }
    
    // Overlay functions
    function showOverlay() {
        const overlay = document.getElementById('overlay');
        if (!overlay) return;
        const panel = overlay.querySelector('.overlay-panel');
        overlay.classList.remove('hidden');
        void overlay.offsetWidth; // trigger reflow
        overlay.classList.remove('opacity-0');
        if (panel) {
            panel.classList.remove('translate-y-4', 'sm:scale-95', 'opacity-0');
            panel.classList.add('translate-y-0', 'sm:scale-100', 'opacity-100');
        }
    }
    
    function hideOverlay() {
        const overlay = document.getElementById('overlay');
        if (!overlay) return;
        const panel = overlay.querySelector('.overlay-panel');
        overlay.classList.add('opacity-0');
        if (panel) {
            panel.classList.add('translate-y-4', 'sm:scale-95', 'opacity-0');
            panel.classList.remove('translate-y-0', 'sm:scale-100', 'opacity-100');
        }
        setTimeout(() => {
            overlay.classList.add('hidden');
        }, 300);
    }

    function goToCheckout() {
        window.location.href = '/checkout/checkout-hotel';
    }
    
    function viewOtherHotels() {
        hideOverlay();
        window.location.href = '/pesanan/hotel';
    }
    
    function completeBooking() {
        hideOverlay();
        // Stay on current page
    }

    // Confirm Submit Overlay functions
    function showConfirmOverlay() {
        const overlay = document.getElementById('confirm-overlay');
        const dialog = document.getElementById('confirm-overlay-dialog');
        if (!overlay || !dialog) return;
        overlay.classList.remove('hidden');
        requestAnimationFrame(() => {
            overlay.classList.remove('opacity-0');
            dialog.classList.remove('scale-95','opacity-0');
        });
    }

    function hideConfirmOverlay() {
        const overlay = document.getElementById('confirm-overlay');
        const dialog = document.getElementById('confirm-overlay-dialog');
        if (!overlay || !dialog) return;
        overlay.classList.add('opacity-0');
        dialog.classList.add('scale-95','opacity-0');
        setTimeout(() => overlay.classList.add('hidden'), 220);
    }

    function handleConfirmSubmit() {
        hideConfirmOverlay();
        window.location.href = "{{ url('receipt/hotelreceipt') }}";
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
        
        // Confirm modal button events
        const confirmCancel = document.getElementById('confirm-cancel');
        if (confirmCancel) {
            confirmCancel.addEventListener('click', function() {
                hideConfirmOverlay();
            });
        }

        const confirmYes = document.getElementById('confirm-yes');
        if (confirmYes) {
            confirmYes.addEventListener('click', function() {
                handleConfirmSubmit();
            });
        }

        // Form validation and submission (scope only to this page's submit)
		const submitBtn = document.getElementById('checkout-submit');
		
		if (submitBtn) submitBtn.addEventListener('click', function(e) {
			e.preventDefault();
			
			const nama = document.getElementById('nama').value;
			const telepon = document.getElementById('telepon').value;
			const email = document.getElementById('email').value;
			const ktp = document.getElementById('ktp').files[0];
			const suratDinas = document.getElementById('surat_dinas').files[0];
            
            // if (!nama || !telepon || !email || !ktp || !suratDinas) {
            //     alert('Mohon lengkapi semua data yang diperlukan');
            //     return;
            // }
            
            // const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            // if (!emailRegex.test(email)) {
            //     alert('Format email tidak valid');
            //     return;
            // }
            
            // const phoneRegex = /^[0-9+\-\s()]+$/;
            // if (!phoneRegex.test(telepon)) {
            //     alert('Format nomor telepon tidak valid');
            //     return;
            // }
            
            // Tampilkan modal konfirmasi setelah validasi lolos
			showConfirmOverlay();
		});
    });
</script>
