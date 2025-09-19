@include('partials.head')

@section('title', 'Checkout Hotel - Online Travel')

@include('partials.navigation')


<body class="bg-[F4F7FE] font-poppins">
	    <!-- Page Transition Loading Overlay (Tailwind) -->
    <div id="page-transition-overlay" class="fixed inset-0 bg-white/95 backdrop-blur-md z-[9999] hidden">
        <div class="w-full h-full flex flex-col items-center justify-center">
            <div class="w-16 h-16 border-4 border-gray-200 border-t-[#FE0004] rounded-full animate-spin mb-5"></div>
            <div id="loading-text" class="text-gray-700 text-lg font-semibold text-center mb-2">Memproses pemesanan...</div>
            <div class="w-64 h-1.5 bg-gray-200 rounded mt-4 overflow-hidden">
                <div id="loading-progress-bar" class="w-0 h-full bg-gradient-to-r from-[#FE0004] transition-[width] duration-500 ease-linear rounded"></div>
            </div>
        </div>
    </div>
	<div class="min-h-screen py-4 sm:py-8 px-3 sm:px-4">
		<div class="max-w-6xl mx-auto">

			<!-- Back Navigation -->
            <div class="flex items-center mb-4 sm:mb-6">
                <button onclick="goBack()" 
                        class="flex items-center text-red-600 hover:text-red-800 transition-colors duration-200">
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
					<img src="{{ asset('pesananhotel.png') }}" alt="Hotel" class="w-full h-full object-cover" loading="lazy">
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
										<span class="bg-[#FE0004] text-xs font-medium px-2 sm:px-3 py-1 rounded-md text-white">Sarapan (1pax)
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
            @include('partials.detail-work-nodin')

            <!-- PASSENGERS SECTION HEADER -->
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-bold text-gray-800">Detail Penumpang</h2>
                <div class="flex items-center gap-2">
                    <button id="add-passenger-btn" onclick="addPassenger()"
                        class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-[#FE0004] to-[#FE0004] text-white rounded-lg hover:from-[#FE0004] hover:to-[#FE0004] transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        Tambah Penumpang?
                    </button>
                    <div id="passenger-count" class="text-sm text-gray-500">1 / 4</div>
                </div>
            </div>

            <!-- Reuse previous data toggle -->
            <div class="flex items-center justify-end gap-3 mb-6">
                <span class="text-sm text-gray-700 font-medium">Gunakan data sebelumnya?</span>
                <button id="reuse-prev-data" type="button"
                        class="relative inline-flex h-6 w-11 items-center rounded-full bg-gray-200 transition-colors">
                    <span class="toggle-knob inline-block h-4 w-4 transform rounded-full bg-white transition-transform translate-x-1"></span>
                </button>
            </div>

            <!-- Passengers container -->
            <div id="passengers-container" class="space-y-6">
                <!-- Passenger template -->
                <div class="passenger-card bg-white rounded-2xl shadow-lg p-6 relative" data-index="0" id="passenger-0">
                    <!-- Header with passenger label and remove -->
                    <div class="flex items-start justify-between mb-4">
                        <div class="flex-1">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-800">Penumpang 1</h3>
                                    <p class="text-sm text-gray-500">Informasi pemesanan & dokumen pendukung</p>
                                </div>
                                <!-- Search Bar (only for passengers 2-4) -->
                                <div class="passenger-search-bar hidden">
                                    <div class="w-64">
                                        <div class="relative">
                                            <input type="text" class="passenger-search-input w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 pr-8 text-sm" placeholder="Cari pengguna...">
                                            <svg class="absolute right-2 top-1/2 transform -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                            </svg>
                                            <div class="passenger-search-dropdown absolute top-full left-0 right-0 bg-white border border-gray-200 rounded-lg shadow-lg z-10 max-h-48 overflow-y-auto hidden mt-1">
                                                <!-- Search results will appear here -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 ml-4">
                            <!-- Remove button (hidden for first) -->
                            <button onclick="removePassenger(0)" class="remove-btn hidden text-red-500 hover:text-red-700" title="Hapus penumpang">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                            </button>
                        </div>
                    </div>

                    <!-- MAIN: two-column layout inside same rectangle -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <!-- LEFT: Detail Pemesanan -->
                        <div>
                            <form class="space-y-4 passenger-form" data-index="0">
                                <div>
                                  <label for="nama-0" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                                  <input type="text" id="nama-0" name="nama[]" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-200 transition" placeholder="Masukkan nama lengkap" value="{{ auth()->user()->name ?? '' }}">
                                </div>
                                <div>
                                  <label for="telepon-0" class="block text-sm font-medium text-gray-700 mb-2">Nomor Telpon</label>
                                  <input type="tel" id="telepon-0" name="telepon[]" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-200 transition" placeholder="Masukkan nomor telepon" value="{{ auth()->user()->phone ?? '' }}">
                                </div>
                                <div>
                                  <label for="email-0" class="block text-sm font-medium text-gray-700 mb-2">Alamat Email</label>
                                  <input type="email" id="email-0" name="email[]" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-200 transition" placeholder="Masukkan alamat email" value="{{ auth()->user()->email ?? '' }}">
                                </div>
                            </form>
                        </div>

                        <!-- RIGHT: Dokumen Pendukung -->
                        <div>
                            <div class="space-y-4">
                              <!-- Upload KTP -->
                              <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Upload KTP</label>
                                <div class="upload-box border-2 border-dashed border-gray-200 rounded-xl p-4 hover:border-blue-300 transition-colors duration-200 cursor-pointer flex items-center gap-4" onclick="triggerFileForPassenger(0,'ktp')">
                                  <img src="{{ asset('folder.png') }}" alt="icon" class="w-8 h-8" loading="lazy">
                                  <div class="flex-1 text-left">
                                    <div class="text-gray-700">Klik untuk upload atau tarik file ke sini</div>
                                    <div id="ktp-filename-0" class="text-sm text-gray-400">Format: PDF (maks 5MB)</div>
                                  </div>
                                  <input type="file" id="ktp-0" name="ktp[]" accept=".pdf" class="hidden" onchange="handleFileChange(event, 'ktp-filename-0')">
                                </div>
                              </div>

                              <!-- Upload Surat Dinas -->
                              <div>
                                <div class="flex items-center justify-between mb-2">
                                  <label class="text-sm font-medium text-gray-700">Upload Surat Dinas</label>
                                  <div class="flex items-center gap-2">
                                    <span class="text-xs text-gray-600">Gunakan surat dinas sebelumnya?</span>
                                    <button id="surat-toggle-0" type="button"
                                            class="relative inline-flex h-5 w-9 items-center rounded-full bg-gray-200 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                      <span class="toggle-knob inline-block h-3 w-3 transform rounded-full bg-white transition-transform duration-200 translate-x-1 shadow-sm"></span>
                                    </button>
                                  </div>
                                </div>
                                <div class="upload-box border-2 border-dashed border-gray-200 rounded-xl p-4 hover:border-red-300 transition-colors duration-200 cursor-pointer flex items-center gap-4" onclick="triggerFileForPassenger(0,'surat')">
                                  <img src="{{ asset('folder.png') }}" alt="icon" class="w-8 h-8" loading="lazy">
                                  <div class="flex-1 text-left">
                                    <div class="text-gray-700">Klik untuk upload atau tarik file ke sini</div>
                                    <div id="surat-filename-0" class="text-sm text-gray-400">Format: PDF (maks 5MB)</div>
                                  </div>
                                  <input type="file" id="surat-0" name="surat[]" accept=".pdf" class="hidden" onchange="handleFileChange(event, 'surat-filename-0')">
                                </div>
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

                     class="w-full max-w-md bg-gradient-to-r from-[#FE0004] to-[#FE0004] text-white font-bold py-4 px-8 rounded-xl hover:from-[#FE0004] hover:to-[#FE0004] transition-all duration-200 transform hover:scale-105 shadow-lg mt-10">

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
            <button id="confirm-cancel" class="w-full px-6 py-3 bg-gradient-to-r from-blue-50 to-blue-100 text-[#FE0004] rounded-xl hover:from-blue-100 hover:to-blue-200 transition-all duration-200 font-medium">Tidak, Periksa Lagi</button>
            <button id="confirm-yes" class="w-full px-6 py-3 bg-[#FE0004] text-white rounded-xl hover:from-[#FE0004] transition-all duration-200 transform hover:scale-105 shadow-lg font-medium">Ya, Kirim Sekarang</button>
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
            <svg class="w-5 h-5 text-red-600" viewBox="0 0 24 24" fill="none" stroke="currentColor">
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
                    class="w-full px-6 py-3 bg-gradient-to-r from-blue-50 to-blue-100 text-[#FE0004] rounded-xl hover:from-blue-100 hover:to-blue-200 transition-all duration-200 font-medium">
                Lihat Penginapan Lain
            </button>
            <button onclick="completeBooking()" 
                    class="w-full px-6 py-3 bg-gradient-to-r from-[#FE0004] to-[#FE0004] text-white rounded-xl hover:from-[#FE0004] hover:to-[#FE0004] transition-all duration-200 font-medium">
                Selesaikan Pemesananmu
            </button>
        </div>
    </div>
</div>

@include('partials.footer')

<script>
// Global variables for hotel checkout
let hotelPassengerCount = 1;
let currentHotelPassengerIndex = 0;

// File upload functions
function triggerFileForPassenger(index, type) {
    const fileInput = document.getElementById(`${type}-${index}`);
    if (fileInput) {
        fileInput.click();
    } else {
        console.error(`File input element ${type}-${index} not found`);
        showNotification('Terjadi kesalahan saat membuka dialog file', 'error');
    }
}

// Initialize surat dinas toggles for all passengers
function initializeSuratDinasToggles() {
    const suratToggleStates = {};
    
    for (let i = 0; i < hotelPassengerCount; i++) {
        initializeSuratDinasToggle(i, suratToggleStates);
    }
    
    return suratToggleStates;
}

// Initialize individual surat dinas toggle
function initializeSuratDinasToggle(index, stateTracker) {
    const toggle = document.getElementById(`surat-toggle-${index}`);
    if (!toggle) return;
    
    stateTracker[index] = false;
    
    toggle.replaceWith(toggle.cloneNode(true));
    const newToggle = document.getElementById(`surat-toggle-${index}`);
    
    newToggle.addEventListener('click', function() {
        stateTracker[index] = !stateTracker[index];
        const knob = newToggle.querySelector('.toggle-knob');
        
        if (stateTracker[index]) {
            newToggle.classList.remove('bg-gray-200');
            newToggle.classList.add('bg-red-500');
            if (knob) knob.classList.add('translate-x-5');
            
            const previousData = JSON.parse(localStorage.getItem('previousNotaDinas') || '{}');
            
            if (previousData.fileName) {
                applySuratDinasToUploadBox(index, previousData);
                showNotification('Surat dinas sebelumnya berhasil digunakan!', 'success');
            } else {
                const dummyData = {
                    fileName: 'SURAT_DINAS_CONTOH.pdf',
                    fileSize: '1.5 MB',
                    uploadDate: new Date().toISOString()
                };
                localStorage.setItem('previousNotaDinas', JSON.stringify(dummyData));
                applySuratDinasToUploadBox(index, dummyData);
                showNotification('File contoh surat dinas berhasil digunakan!', 'success');
            }
            
        } else {
            newToggle.classList.remove('bg-red-500');
            newToggle.classList.add('bg-gray-200');
            if (knob) knob.classList.remove('translate-x-5');
            
            resetSuratDinasUploadBox(index);
            showNotification('Toggle dimatikan - Upload box direset ke kondisi awal', 'info');
        }
    });
}

// Apply surat dinas data to upload box
function applySuratDinasToUploadBox(index, fileData) {
    const suratFilename = document.getElementById(`surat-filename-${index}`);
    const suratUploadBox = suratFilename?.closest('.upload-box');
    
    if (suratFilename && suratUploadBox) {
        suratUploadBox.innerHTML = `
            <div class="flex flex-col items-center">
                <svg class="w-8 h-8 text-green-500 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                <span class="text-green-600 text-sm">${fileData.fileName}</span>
                <span class="text-gray-400 text-xs">${fileData.fileSize}</span>
                <span class="text-blue-500 text-xs mt-1">(Menggunakan file sebelumnya)</span>
            </div>
        `;
        suratUploadBox.classList.remove('border-gray-200', 'hover:border-red-300', 'cursor-pointer');
        suratUploadBox.classList.add('border-green-400', 'bg-green-50');
        suratUploadBox.removeAttribute('onclick');
    }
}

// Reset surat dinas upload box to normal state
function resetSuratDinasUploadBox(index) {
    const suratFilename = document.getElementById(`surat-filename-${index}`);
    const suratUploadBox = suratFilename?.closest('.upload-box');
    const suratInput = document.getElementById(`surat-${index}`);
    
    if (suratFilename && suratUploadBox) {
        if (suratInput) {
            suratInput.value = '';
            suratInput.files = null;
        }
        
        suratUploadBox.innerHTML = `
            <img src="{{ asset('folder.png') }}" alt="icon" class="w-8 h-8" loading="lazy">
            <div class="flex-1 text-left">
                <div class="text-gray-700">Klik untuk upload atau tarik file ke sini</div>
                <div id="surat-filename-${index}" class="text-sm text-gray-400">Format: PDF (maks 5MB)</div>
            </div>
            <input type="file" id="surat-${index}" name="surat[]" accept=".pdf" class="hidden" onchange="handleFileChange(event, 'surat-filename-${index}')">
        `;
        
        suratUploadBox.classList.remove('border-green-400', 'bg-green-50');
        suratUploadBox.classList.add('border-gray-200', 'hover:border-red-300', 'cursor-pointer');
        suratUploadBox.setAttribute('onclick', `triggerFileForPassenger(${index},'surat')`);
    }
}

function handleFileChange(e, labelId) {
    const file = e.target.files[0];
    const label = document.getElementById(labelId);
    if (!file) { 
        label.textContent = e.target.accept === '.pdf' ? 'Format: PDF (maks 5MB)' : ''; 
        return; 
    }
    const name = file.name.length > 40 ? file.name.slice(0,37) + '...' : file.name;
    label.textContent = name;
    
    // Save to localStorage for future reuse if it's a surat dinas
    if (labelId.includes('surat-filename')) {
        const fileData = {
            fileName: file.name,
            fileSize: (file.size / (1024 * 1024)).toFixed(1) + ' MB',
            uploadDate: new Date().toISOString()
        };
        localStorage.setItem('previousNotaDinas', JSON.stringify(fileData));
    }
}

// Passenger management functions
function addPassenger() {
    if (hotelPassengerCount >= 4) {
        alert('Maksimal 4 penumpang');
        return;
    }

    hotelPassengerCount++;
    const container = document.getElementById('passengers-container');
    const template = document.getElementById('passenger-0');
    const newPassenger = template.cloneNode(true);
    
    // Update IDs and attributes
    newPassenger.id = `passenger-${hotelPassengerCount - 1}`;
    newPassenger.dataset.index = hotelPassengerCount - 1;
    
    // Update passenger title
    newPassenger.querySelector('h3').textContent = `Penumpang ${hotelPassengerCount}`;
    
    // Update form elements
    const form = newPassenger.querySelector('.passenger-form');
    form.dataset.index = hotelPassengerCount - 1;
    
    // Update input IDs and names
    const inputs = newPassenger.querySelectorAll('input, label');
    inputs.forEach(input => {
        if (input.tagName === 'LABEL') {
            const forAttr = input.getAttribute('for');
            if (forAttr) {
                input.setAttribute('for', forAttr.replace(/(-)\d+$/, `$1${hotelPassengerCount - 1}`));
            }
        } else {
            const id = input.id;
            const name = input.name;
            if (id) input.id = id.replace('-0', `-${hotelPassengerCount - 1}`);
            if (name) input.name = name;
            input.value = '';
            input.removeAttribute('value');
        }
    });
    
    // Show search bar for passengers 2-4
    const searchBar = newPassenger.querySelector('.passenger-search-bar');
    if (searchBar && hotelPassengerCount > 1) {
        searchBar.classList.remove('hidden');
    }

    // Update file upload elements
    const uploadBoxes = newPassenger.querySelectorAll('.upload-box');
    uploadBoxes.forEach((box, index) => {
        const type = index === 0 ? 'ktp' : 'surat';
        box.onclick = () => triggerFileForPassenger(hotelPassengerCount - 1, type);
    });

    // Update filename display elements
    const filenameElements = newPassenger.querySelectorAll('[id*="filename"]');
    filenameElements.forEach(el => {
        el.id = el.id.replace('-0', `-${hotelPassengerCount - 1}`);
        el.textContent = 'Format: PDF (maks 5MB)';
    });

    // Update surat dinas toggle
    const suratToggle = newPassenger.querySelector('[id*="surat-toggle"]');
    if (suratToggle) {
        suratToggle.id = `surat-toggle-${hotelPassengerCount - 1}`;
        suratToggle.removeAttribute('onclick');
        suratToggle.classList.remove('bg-red-500');
        suratToggle.classList.add('bg-gray-200');
        const knob = suratToggle.querySelector('.toggle-knob');
        if (knob) {
            knob.classList.remove('translate-x-5');
            knob.classList.add('translate-x-1');
        }
        
        setTimeout(() => {
            if (window.suratToggleStates) {
                initializeSuratDinasToggle(hotelPassengerCount - 1, window.suratToggleStates);
            }
        }, 100);
    }

    // Update remove button
    const removeBtn = newPassenger.querySelector('.remove-btn');
    removeBtn.classList.remove('hidden');
    removeBtn.onclick = () => removePassenger(hotelPassengerCount - 1);

    container.appendChild(newPassenger);
    updateHotelPassengerCount();
    
    // Initialize search for new passenger
    const nameInput = newPassenger.querySelector(`#nama-${hotelPassengerCount - 1}`);
    if (nameInput && hotelPassengerCount > 1) {
        nameInput.placeholder = 'Ketik nama untuk mencari pengguna terdaftar...';
        createUserSearchDropdown(nameInput, hotelPassengerCount - 1);
    }
}

function removePassenger(index) {
    if (hotelPassengerCount <= 1) return;
    
    const passenger = document.getElementById(`passenger-${index}`);
    if (passenger) {
        passenger.remove();
        hotelPassengerCount--;
        renumberHotelPassengers();
        updateHotelPassengerCount();
    }
}

function updateHotelPassengerCount() {
    const countElement = document.getElementById('passenger-count');
    if (countElement) {
        countElement.textContent = `${hotelPassengerCount} / 4`;
    }
    
    const addBtn = document.getElementById('add-passenger-btn');
    if (addBtn) {
        addBtn.style.display = hotelPassengerCount >= 4 ? 'none' : 'inline-flex';
    }
}

function renumberHotelPassengers() {
    const passengers = document.querySelectorAll('.passenger-card');
    passengers.forEach((passenger, index) => {
        passenger.id = `passenger-${index}`;
        passenger.dataset.index = index;
        
        const title = passenger.querySelector('h3');
        if (title) title.textContent = `Penumpang ${index + 1}`;
        
        const inputs = passenger.querySelectorAll('input, label');
        inputs.forEach(input => {
            if (input.tagName === 'LABEL') {
                const forAttr = input.getAttribute('for');
                if (forAttr) {
                    input.setAttribute('for', forAttr.replace(/(-)\d+$/, `-${index}`));
                }
            } else {
                const id = input.id;
                if (id) {
                    input.id = id.replace(/(-)\d+$/, `-${index}`);
                }
            }
        });
        
        const removeBtn = passenger.querySelector('.remove-btn');
        if (removeBtn) {
            removeBtn.onclick = () => removePassenger(index);
            removeBtn.style.display = index === 0 ? 'none' : 'block';
        }
    });
}

// Show notification
function showNotification(message, type = 'success') {
    const notification = document.createElement('div');
    notification.className = `fixed top-4 right-4 z-50 px-6 py-3 rounded-lg shadow-lg transition-all duration-300 transform translate-x-full`;
    
    if (type === 'success') {
        notification.classList.add('bg-green-500', 'text-white');
    } else if (type === 'info') {
        notification.classList.add('bg-blue-500', 'text-white');
    } else {
        notification.classList.add('bg-red-500', 'text-white');
    }
    
    let iconPath = '';
    if (type === 'success') {
        iconPath = 'M5 13l4 4L19 7';
    } else if (type === 'info') {
        iconPath = 'M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z';
    } else {
        iconPath = 'M6 18L18 6M6 6l12 12';
    }
    
    notification.innerHTML = `
        <div class="flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="${iconPath}"/>
            </svg>
            <span>${message}</span>
        </div>
    `;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.classList.remove('translate-x-full');
    }, 100);
    
    setTimeout(() => {
        notification.classList.add('translate-x-full');
        setTimeout(() => {
            document.body.removeChild(notification);
        }, 300);
    }, 3000);
}

// User search functionality
function createUserSearchDropdown(input, passengerIndex) {
    const dropdown = input.parentElement.querySelector('.passenger-search-dropdown');
    if (!dropdown) return;
    
    let debounceTimer;
    
    input.addEventListener('input', function() {
        clearTimeout(debounceTimer);
        const query = this.value.trim();
        
        if (query.length < 2) {
            dropdown.classList.add('hidden');
            return;
        }
        
        debounceTimer = setTimeout(() => {
            searchUsers(query, dropdown, passengerIndex);
        }, 300);
    });
    
    document.addEventListener('click', function(e) {
        if (!input.contains(e.target) && !dropdown.contains(e.target)) {
            dropdown.classList.add('hidden');
        }
    });
}

function searchUsers(query, dropdown, passengerIndex) {
    fetch(`/api/search-users?q=${encodeURIComponent(query)}`)
        .then(response => response.json())
        .then(data => {
            dropdown.innerHTML = '';
            
            if (data.length === 0) {
                dropdown.innerHTML = '<div class="p-3 text-gray-500 text-sm">Tidak ada pengguna ditemukan</div>';
            } else {
                data.forEach(user => {
                    const item = document.createElement('div');
                    item.className = 'p-3 hover:bg-gray-50 cursor-pointer border-b border-gray-100 last:border-b-0';
                    item.innerHTML = `
                        <div class="font-medium text-gray-800">${user.name}</div>
                        <div class="text-sm text-gray-500">${user.email}</div>
                        <div class="text-sm text-gray-500">${user.phone || 'No phone'}</div>
                    `;
                    
                    item.addEventListener('click', () => {
                        fillPassengerData(passengerIndex, user);
                        dropdown.classList.add('hidden');
                    });
                    
                    dropdown.appendChild(item);
                });
            }
            
            dropdown.classList.remove('hidden');
        })
        .catch(error => {
            console.error('Error searching users:', error);
            dropdown.innerHTML = '<div class="p-3 text-red-500 text-sm">Terjadi kesalahan saat mencari</div>';
            dropdown.classList.remove('hidden');
        });
}

function fillPassengerData(index, userData) {
    const nameInput = document.getElementById(`nama-${index}`);
    const phoneInput = document.getElementById(`telepon-${index}`);
    const emailInput = document.getElementById(`email-${index}`);
    
    if (nameInput) nameInput.value = userData.name || '';
    if (phoneInput) phoneInput.value = userData.phone || '';
    if (emailInput) emailInput.value = userData.email || '';
    
    showNotification(`Data ${userData.name} berhasil diisi untuk Penumpang ${index + 1}`, 'success');
}

// Reset file upload areas to empty state
function resetFileUploadsToEmpty() {
    for (let i = 0; i < hotelPassengerCount; i++) {
        // Reset KTP upload
        const ktpFilename = document.getElementById(`ktp-filename-${i}`);
        const ktpUploadBox = ktpFilename?.closest('.upload-box');
        const ktpInput = document.getElementById(`ktp-${i}`);
        
        if (ktpFilename && ktpUploadBox) {
            if (ktpInput) ktpInput.value = '';
            
            ktpUploadBox.innerHTML = `
                <img src="{{ asset('folder.png') }}" alt="icon" class="w-8 h-8">
                <div class="flex-1 text-left">
                    <div class="text-gray-700">Klik untuk upload atau tarik file ke sini</div>
                    <div id="ktp-filename-${i}" class="text-sm text-gray-400">Format: PDF (maks 5MB)</div>
                </div>
                <input type="file" id="ktp-${i}" name="ktp[]" accept=".pdf" class="hidden" onchange="handleFileChange(event, 'ktp-filename-${i}')">
            `;
            ktpUploadBox.classList.remove('border-green-400', 'bg-green-50');
            ktpUploadBox.classList.add('border-gray-200', 'hover:border-red-300');
            ktpUploadBox.setAttribute('onclick', `triggerFileForPassenger(${i},'ktp')`);
        }
        
        // Reset Surat Dinas upload
        resetSuratDinasUploadBox(i);
        
        // Reset surat dinas toggle
        const suratToggle = document.getElementById(`surat-toggle-${i}`);
        if (suratToggle) {
            const knob = suratToggle.querySelector('.toggle-knob');
            suratToggle.classList.remove('bg-red-500');
            suratToggle.classList.add('bg-gray-200');
            if (knob) {
                knob.classList.remove('translate-x-5');
                knob.classList.add('translate-x-1');
            }
            
            if (window.suratToggleStates) {
                window.suratToggleStates[i] = false;
            }
        }
    }
}

// Reuse previous booking data helpers
function getPreviousBookingData() {
    try {
        const raw = localStorage.getItem('prevBookingPassengers');
        if (!raw) return [];
        const data = JSON.parse(raw);
        return Array.isArray(data) ? data : [];
    } catch (_) {
        return [];
    }
}

function getDummyPassengers() {
    return [
        { nama: 'WILDAN ANWAR', telepon: '0812-3456-7890', email: 'wildan@example.com' },
        { nama: 'NUR AINI', telepon: '0813-1111-2222', email: 'nuraini@example.com' }
    ];
}

function clearPassengerForms() {
    const forms = document.querySelectorAll('.passenger-form');
    forms.forEach((form, index) => {
        if (index === 0) {
            // Keep first passenger with auth data
            const nameInput = form.querySelector('[name="nama[]"]');
            const phoneInput = form.querySelector('[name="telepon[]"]');
            const emailInput = form.querySelector('[name="email[]"]');
            
            if (nameInput) nameInput.value = nameInput.getAttribute('value') || '';
            if (phoneInput) phoneInput.value = phoneInput.getAttribute('value') || '';
            if (emailInput) emailInput.value = emailInput.getAttribute('value') || '';
        } else {
            // Clear other passengers
            const inputs = form.querySelectorAll('input');
            inputs.forEach(input => input.value = '');
        }
    });
}

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
        showPageTransitionForNavigation('Mencari hotel lain...', '/pesanan/hotel');
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
        showPageTransition();
    }
    
    // Page Transition Loading
    function showPageTransition() {
        const overlay = document.getElementById('page-transition-overlay');
        const loadingText = document.getElementById('loading-text');
        const progressBar = document.getElementById('loading-progress-bar');
        
        if (!overlay) return;
        
        overlay.classList.remove('hidden');
        
        // Simulate loading steps
        const steps = [
            { text: 'Memproses data pemesanan...', progress: 20, duration: 800 },
            { text: 'Memvalidasi dokumen...', progress: 40, duration: 1000 },
            { text: 'Mengirim ke sistem hotel...', progress: 60, duration: 1200 },
            { text: 'Membuat e-tiket...', progress: 80, duration: 800 },
            { text: 'Menyelesaikan pemesanan...', progress: 100, duration: 600 }
        ];
        
        let currentStep = 0;
        
        function executeStep() {
            if (currentStep < steps.length) {
                const step = steps[currentStep];
                loadingText.textContent = step.text;
                progressBar.style.width = step.progress + '%';
                
                setTimeout(() => {
                    currentStep++;
                    executeStep();
                }, step.duration);
            } else {
                // Navigate to receipt page
                setTimeout(() => {
                    window.location.href = "{{ url('receipt/hotelreceipt') }}";
                }, 500);
            }
        }
        
        executeStep();
    }
    
    // Page Transition for Navigation
    function showPageTransitionForNavigation(message, url) {
        const overlay = document.getElementById('page-transition-overlay');
        const loadingText = document.getElementById('loading-text');
        const progressBar = document.getElementById('loading-progress-bar');
        
        if (!overlay) return;
        
        overlay.classList.remove('hidden');
        loadingText.textContent = message;
        
        // Quick loading animation
        let progress = 0;
        const interval = setInterval(() => {
            progress += 10;
            progressBar.style.width = progress + '%';
            
            if (progress >= 100) {
                clearInterval(interval);
                setTimeout(() => {
                    window.location.href = url;
                }, 200);
            }
        }, 100);
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Initialize search for first passenger
        const nameInputs = document.querySelectorAll('input[name="nama[]"]');
        nameInputs.forEach((nameInput, index) => {
            if (index > 0) {
                nameInput.placeholder = 'Ketik nama untuk mencari pengguna terdaftar...';
                createUserSearchDropdown(nameInput, index);
            }
        });
        
        // Ensure upload areas start in empty state
        resetFileUploadsToEmpty();
        
        // Initialize surat dinas toggles
        window.suratToggleStates = initializeSuratDinasToggles();
        
        // Bind reuse previous data toggle
        const reuseBtn = document.getElementById('reuse-prev-data');
        if (reuseBtn) {
            let reuseOn = false;
            reuseBtn.addEventListener('click', function() {
                reuseOn = !reuseOn;
                const knob = reuseBtn.querySelector('.toggle-knob');
                
                if (reuseOn) {
                    // Toggle ON - change to gradient and fill data
                    reuseBtn.classList.remove('bg-gray-200');
                    reuseBtn.classList.add('bg-gradient-to-r', 'from-[#FE0004]', 'to-[#FE0004]');
                    if (knob) knob.classList.add('translate-x-6');

                    // Try previous data, otherwise use dummy for testing
                    let prev = getPreviousBookingData();
                    if (!prev || prev.length === 0) prev = getDummyPassengers();
                    
                    if (prev.length > 0) {
                        // Apply data to forms
                        prev.forEach((passenger, index) => {
                            if (index < 4) {
                                if (index >= hotelPassengerCount) {
                                    addPassenger();
                                }
                                fillPassengerData(index, passenger);
                            }
                        });
                    } else {
                        // If still cannot apply, revert toggle
                        reuseOn = false;
                        reuseBtn.classList.remove('bg-gradient-to-r', 'from-[#FE0004]', 'to-[#FE0004]');
                        reuseBtn.classList.add('bg-gray-200');
                        if (knob) knob.classList.remove('translate-x-6');
                        alert('Data sebelumnya tidak ditemukan.');
                    }
                } else {
                    // Toggle OFF - return to gray and clear data
                    reuseBtn.classList.remove('bg-gradient-to-r', 'from-[#FE0004]', 'to-[#FE0004]');
                    reuseBtn.classList.add('bg-gray-200');
                    if (knob) knob.classList.remove('translate-x-6');
                    clearPassengerForms();
                    resetFileUploadsToEmpty();
                }
            });
        }
        
        // Simple lazy loading for images
        const images = document.querySelectorAll('img[loading="lazy"]');
        images.forEach(img => {
            const onLoad = () => img.classList.add('loaded');
            if (img.complete) {
                onLoad();
            } else {
                img.addEventListener('load', onLoad, { once: true });
            }
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

        // Form submission
        const submitBtn = document.getElementById('checkout-submit');
        if (submitBtn) submitBtn.addEventListener('click', function(e) {
            e.preventDefault();
            showConfirmOverlay();
        });
    });
</script>
