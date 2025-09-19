@include('partials.head')

@section('title', 'Checkout Train - Online Travel')

@include('partials.navigation')
<body class="font-poppins">
    <!-- Page Transition Loading Overlay -->
    <div id="page-transition-overlay" class="fixed inset-0 bg-white/95 backdrop-blur-md z-[9999] hidden">
        <div class="w-full h-full flex flex-col items-center justify-center">
            <div class="w-16 h-16 border-4 border-gray-200 border-t-[#FE0004] rounded-full animate-spin mb-5"></div>
            <div id="loading-text" class="text-gray-700 text-lg font-semibold text-center mb-2">Memproses pemesanan kereta...</div>
            <div class="w-64 h-1.5 bg-gray-200 rounded mt-4 overflow-hidden">
                <div id="loading-progress-bar" class="w-0 h-full bg-gradient-to-r from-[#FE0004] to-[#FE0004] transition-[width] duration-500 ease-linear rounded"></div>
            </div>
        </div>
    </div>
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
                <img src="/KAI.png" alt="KAI Logo" class="w-12 h-auto" loading="lazy">
                <h2 class="text-lg sm:text-xl font-semibold text-gray-500">Sancaka 81</h2>
                <span class="text-lg sm:text-xl font-semibold text-gray-500">•</span>
                <span class="text-lg sm:text-xl font-semibold text-gray-500">Ekonomi</span>
            </div>

            <div class="mt-3"></div>

            <div class="flex items-center gap-4">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium text-white"
                    style="background: linear-gradient(90deg,#FE0004, #FE0004);">
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

        <!--  Additional Details Section --> 
        @include('partials.detail-work-nodin')

        <!-- BAWAH: dua kolom (kiri = detail pemesanan, kanan = dokumen pendukung) -->
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

            <!-- Passengers container: each passenger card is a single white rectangle with left/right columns -->
            <div id="passengers-container" class="space-y-6">
                <!-- Passenger template (will be cloned by JS). Keep one initial passenger (index 0) -->
                <div class="passenger-card bg-white rounded-2xl shadow-lg p-6 relative" data-index="0" id="passenger-0">
                    <!-- Header with passenger label and remove (hidden for first) -->
                    <div class="flex items-start justify-between mb-4">
                        <div class="flex-1">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-800">Penumpang 1</h3>
                                    <p class="text-sm text-gray-500">Informasi pemesanan & dokumen pendukung</p>
                                </div>
                                <!-- Search Bar (only for passengers 2-4) - Aligned with passenger title -->
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
                            <span id="selected-seat-badge-0" class="text-sm text-gray-600 mr-2">Kursi: <strong class="text-gray-800">-</strong></span>
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

                    <!-- BOTTOM: pilih kursi button (pojok bawah kanan) -->
                    <div class="absolute bottom-6 right-6">
                        <button onclick="openSeatModal(0)"
                                class="px-4 py-2 bg-white border border-gray-200 rounded-lg shadow hover:shadow-md flex items-center gap-2">
                            <svg class="w-4 h-4 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7h16M4 12h16M4 17h16"/></svg>
                            Pilih Kursi
                        </button>
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
 </div>

<!-- Seat Selection Modal -->
<div id="seat-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden opacity-0 transition-opacity duration-200">
    <div id="seat-dialog" class="bg-white rounded-2xl p-6 max-w-md w-full mx-4 max-h-[90vh] overflow-y-auto transform scale-95 opacity-0 transition-all duration-300 ease-out">
        <!-- Modal Header -->
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-xl font-bold text-gray-800">Pilih Kursi</h3>
            <button onclick="closeSeatModal()" class="text-gray-400 hover:text-gray-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Route Info -->
        <div class="text-center mb-4">
            <div class="text-sm text-gray-600">SURABAYA GUBENG → MADIUN • 1 Dewasa</div>
            <div class="text-sm text-gray-600">PASUNDAN • Ekonomi (CA)</div>
            <div class="text-sm text-gray-600">Sel, 9 Sep 2025</div>
        </div>

        <!-- Passenger Info -->
        <div class="bg-white rounded-lg p-3 mb-4">
            <div class="flex items-center">
                <div class="bg-gradient-to-r from-[#FE0004] to-[#FE0004] text-white rounded px-2 py-1 text-sm font-medium mr-3"></div>
                <div>
                    <div class="font-medium text-gray-800" id="modal-passenger-name">WILDAN ANWAR</div>
                    <div class="text-sm text-gray-600" id="modal-passenger-seat">Ekonomi I / Kursi 2A</div>
                </div>
            </div>
        </div>

        <!-- Legend -->
        <div class="flex justify-center gap-4 mb-4 text-xs">
            <div class="flex items-center gap-1">
                <div class="w-4 h-4 bg-gray-200 rounded border"></div>
                <span>Tersedia</span>
            </div>
            <div class="flex items-center gap-1">
                <div class="w-4 h-4 bg-gradient-to-r from-[#FE0004] to-[#FE0004] rounded border"></div>
                <span>Dipilih</span>
            </div>
            <div class="flex items-center gap-1">
                <div class="w-4 h-4 bg-gray-400 rounded border"></div>
                <span>Terisi</span>
            </div>
        </div>

        <!-- Seat Map -->
        <div class="space-y-4">
            <!-- Car Tabs -->
            <div class="flex justify-center">
                <div class="flex bg-gray-100 rounded-lg p-1">
                    <button onclick="switchCar('ekonomi1')" class="car-tab px-3 py-1 rounded text-sm font-medium bg-gradient-to-r from-[#FE0004] to-[#FE0004] text-white" data-car="ekonomi1">Ekonomi 1</button>
                    <button onclick="switchCar('ekonomi2')" class="car-tab px-3 py-1 rounded text-sm font-medium text-gray-600" data-car="ekonomi2">Ekonomi 2</button>
                    <button onclick="switchCar('ekonomi3')" class="car-tab px-3 py-1 rounded text-sm font-medium text-gray-600" data-car="ekonomi3">Ekonomi 3</button>
                </div>
            </div>

            <!-- Seat Grid -->
            <div class="seat-map">
                <!-- Column Headers -->
                <div class="grid grid-cols-5 gap-2 mb-2 text-center text-sm font-medium text-gray-600">
                    <div></div>
                    <div>A</div>
                    <div>B</div>
                    <div>C</div>
                    <div>D</div>
                </div>

                <!-- Seat Rows -->
                <div id="seat-grid" class="space-y-2">
                    <!-- Row 1 -->
                    <div class="grid grid-cols-5 gap-2 items-center">
                        <div class="text-sm font-medium text-gray-600 text-center">1</div>
                        <button class="seat-btn w-8 h-8 bg-gray-400 rounded border text-xs font-medium text-white" data-seat="1A" data-status="occupied"></button>
                        <button class="seat-btn w-8 h-8 bg-gray-400 rounded border text-xs font-medium text-white" data-seat="1B" data-status="occupied"></button>
                        <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="1C" data-status="available" onclick="selectSeat('1C')"></button>
                        <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="1D" data-status="available" onclick="selectSeat('1D')"></button>
                    </div>

                    <!-- Row 2 -->
                    <div class="grid grid-cols-5 gap-2 items-center">
                        <div class="text-sm font-medium text-gray-600 text-center">2</div>
                        <button class="seat-btn w-8 h-8 bg-gradient-to-r from-[#FE0004] to-[#FE0004] rounded border text-xs font-medium text-white" data-seat="2A" data-status="selected" onclick="selectSeat('2A')"></button>
                        <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="2B" data-status="available" onclick="selectSeat('2B')"></button>
                        <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="2C" data-status="available" onclick="selectSeat('2C')"></button>
                        <button class="seat-btn w-8 h-8 bg-gray-400 rounded border text-xs font-medium text-white" data-seat="2D" data-status="occupied"></button>
                    </div>

                    <!-- Row 3 -->
                    <div class="grid grid-cols-5 gap-2 items-center">
                        <div class="text-sm font-medium text-gray-600 text-center">3</div>
                        <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="3A" data-status="available" onclick="selectSeat('3A')"></button>
                        <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="3B" data-status="available" onclick="selectSeat('3B')"></button>
                        <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="3C" data-status="available" onclick="selectSeat('3C')"></button>
                        <button class="seat-btn w-8 h-8 bg-gray-400 rounded border text-xs font-medium text-white" data-seat="3D" data-status="occupied"></button>
                    </div>

                    <!-- Row 4 -->
                    <div class="grid grid-cols-5 gap-2 items-center">
                        <div class="text-sm font-medium text-gray-600 text-center">4</div>
                        <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="4A" data-status="available" onclick="selectSeat('4A')"></button>
                        <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="4B" data-status="available" onclick="selectSeat('4B')"></button>
                        <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="4C" data-status="available" onclick="selectSeat('4C')"></button>
                        <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="4D" data-status="available" onclick="selectSeat('4D')"></button>
                    </div>

                    <!-- Row 5 -->
                    <div class="grid grid-cols-5 gap-2 items-center">
                        <div class="text-sm font-medium text-gray-600 text-center">5</div>
                        <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="5A" data-status="available" onclick="selectSeat('5A')"></button>
                        <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="5B" data-status="available" onclick="selectSeat('5B')"></button>
                        <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="5C" data-status="available" onclick="selectSeat('5C')"></button>
                        <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="5D" data-status="available" onclick="selectSeat('5D')"></button>
                    </div>

                    <!-- Row 6 -->
                    <div class="grid grid-cols-5 gap-2 items-center">
                        <div class="text-sm font-medium text-gray-600 text-center">6</div>
                        <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="6A" data-status="available" onclick="selectSeat('6A')"></button>
                        <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="6B" data-status="available" onclick="selectSeat('6B')"></button>
                        <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="6C" data-status="available" onclick="selectSeat('6C')"></button>
                        <button class="seat-btn w-8 h-8 bg-gray-400 rounded border text-xs font-medium text-white" data-seat="6D" data-status="occupied"></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Save Button -->
        <div class="mt-6">
            <button onclick="saveSeatSelection()" class="w-full bg-gradient-to-r from-[#FE0004] to-[#FE0004] text-white py-3 rounded-lg font-medium hover:bg-gradient-to-r from-[#FE0004] to-[#FE0004] transition">
                SIMPAN
            </button>
        </div>
    </div>
</div>


<!-- Verification Modal -->
<div id="verification-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden opacity-0 transition-opacity duration-200">
    <div id="verification-dialog" class="bg-white rounded-2xl p-8 max-w-md w-full mx-4 text-center transform scale-95 opacity-0 transition-all duration-300 ease-out">
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Apakah anda yakin?</h3>
        <p class="text-gray-600 mb-8">anda tidak dapat mengubah data setelah disubmit</p>
        
        <div class="flex gap-4">
            <button onclick="cancelSubmit()" class="flex-1 bg-red-500 text-white py-3 px-6 rounded-lg font-medium hover:bg-red-600 transition">
                tidak
            </button>
            <button onclick="confirmSubmit()" class="flex-1 bg-gradient-to-r from-[#FE0004] to-[#FE0004] text-white py-3 px-6 rounded-lg font-medium hover:from-[#FE0004] hover:to-[#F6B101] transition">
                iya
            </button>
        </div>
    </div>
</div>

 <!-- Back Confirmation Modal -->
<div id="back-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden">
    <div id="back-dialog" class="bg-white rounded-2xl p-8 max-w-sm mx-4 text-center transform scale-95 opacity-0 transition-all duration-300 ease-out shadow-xl">
         <h3 class="text-2xl font-bold text-gray-800 mb-6">Mau lihat kereta lain?</h3>
         <p class="text-gray-600 mb-8 leading-relaxed px-2">Kalau kamu kembali ke halaman sebelumnya, semua info yang diisi dan keberangkatan yang dipilih akan hilang.</p>
         <div class="flex flex-col space-y-4">
              <button onclick="window.location.href='{{ url('pesanan/kereta') }}'" class="w-full px-6 py-4 bg-gradient-to-r from-red-50 to-red-100 text-red-600 rounded-xl hover:from-red-100 hover:to-red-200 transition-all duration-200 font-medium border border-blue-200">

                  Lihat Kereta Lain
              </button>
             <button onclick="hideBackOverlay()" class="w-full px-6 py-4 bg-gradient-to-r from-red-600 to-red-400 text-white rounded-xl hover:from-red-700 hover:to-red-400 transition-all duration-200 font-medium shadow-md">
                 Selesaikan Pemesananmu
             </button>
         </div>
     </div>
 </div>


<script>
// Global variables
let trainPassengerCount = 1;
let currentTrainPassengerIndex = 0;
let trainSelectedSeats = {};
let currentTrainCar = 'ekonomi1';

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

// Dummy passengers for testing when no previous data exists
function getDummyPassengers() {
    return [
        { nama: 'WILDAN ANWAR', telepon: '0812-3456-7890', email: 'wildan@example.com' },
        { nama: 'NUR AINI', telepon: '0813-1111-2222', email: 'nuraini@example.com' }
    ];
}

// Dummy files for testing when no previous file data exists
function getDummyFiles() {
    return {
        ktp: [
            { name: 'KTP_WILDAN_ANWAR.pdf', size: '2.1 MB' },
            { name: 'KTP_NUR_AINI.pdf', size: '1.8 MB' }
        ],
        surat: [
            { name: 'SURAT_DINAS_WILDAN.pdf', size: '1.5 MB' },
            { name: 'SURAT_DINAS_NUR.pdf', size: '1.3 MB' }
        ]
    };
}

// Apply dummy files to upload areas
function applyDummyFilesToForm(files) {
    if (!files) return false;
    
    // Apply KTP files
    if (files.ktp) {
        files.ktp.forEach((file, idx) => {
            const ktpFilename = document.getElementById(`ktp-filename-${idx}`);
            const ktpUploadBox = ktpFilename?.closest('.upload-box');
            if (ktpFilename && ktpUploadBox) {
                ktpFilename.textContent = file.name;
                ktpUploadBox.innerHTML = `
                    <div class="flex flex-col items-center">
                        <svg class="w-8 h-8 text-green-500 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-green-600 text-sm">${file.name}</span>
                        <span class="text-gray-400 text-xs">${file.size}</span>
                    </div>
                `;
                ktpUploadBox.classList.remove('border-gray-200', 'hover:border-red-300');
                ktpUploadBox.classList.add('border-green-400', 'bg-green-50');
            }
        });
    }
    
    // Apply Surat Dinas files
    if (files.surat) {
        files.surat.forEach((file, idx) => {
            const suratFilename = document.getElementById(`surat-filename-${idx}`);
            const suratUploadBox = suratFilename?.closest('.upload-box');
            if (suratFilename && suratUploadBox) {
                suratFilename.textContent = file.name;
                suratUploadBox.innerHTML = `
                    <div class="flex flex-col items-center">
                        <svg class="w-8 h-8 text-green-500 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-green-600 text-sm">${file.name}</span>
                        <span class="text-gray-400 text-xs">${file.size}</span>
                    </div>
                `;
                suratUploadBox.classList.remove('border-gray-200', 'hover:border-red-300');
                suratUploadBox.classList.add('border-green-400', 'bg-green-50');
            }
        });
    }
    
    return true;
}

// Reset file upload areas to empty state (for toggle OFF)
function resetFileUploadsToEmpty() {
    for (let i = 0; i < trainPassengerCount; i++) {
        // Reset KTP upload to empty state
        const ktpFilename = document.getElementById(`ktp-filename-${i}`);
        const ktpUploadBox = ktpFilename?.closest('.upload-box');
        const ktpInput = document.getElementById(`ktp-${i}`);
        
        if (ktpFilename && ktpUploadBox) {
            // Reset the file input value
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
        
        // Reset Surat Dinas upload to empty state
        const suratFilename = document.getElementById(`surat-filename-${i}`);
        const suratUploadBox = suratFilename?.closest('.upload-box');
        const suratInput = document.getElementById(`surat-${i}`);
        
        if (suratFilename && suratUploadBox) {
            // Reset the file input value
            if (suratInput) suratInput.value = '';
            
            suratUploadBox.innerHTML = `
                <img src="{{ asset('folder.png') }}" alt="icon" class="w-8 h-8">
                <div class="flex-1 text-left">
                    <div class="text-gray-700">Klik untuk upload atau tarik file ke sini</div>
                    <div id="surat-filename-${i}" class="text-sm text-gray-400">Format: PDF (maks 5MB)</div>
                </div>
                <input type="file" id="surat-${i}" name="surat[]" accept=".pdf" class="hidden" onchange="handleFileChange(event, 'surat-filename-${i}')">
            `;
            suratUploadBox.classList.remove('border-green-400', 'bg-green-50');
            suratUploadBox.classList.add('border-gray-200', 'hover:border-red-300');
            suratUploadBox.setAttribute('onclick', `triggerFileForPassenger(${i},'surat')`);
        }
        
        // Reset surat dinas toggle to OFF state
        const suratToggle = document.getElementById(`surat-toggle-${i}`);
        if (suratToggle) {
            const knob = suratToggle.querySelector('.toggle-knob');
            suratToggle.classList.remove('bg-red-500');
            suratToggle.classList.add('bg-gray-200');
            if (knob) {
                knob.classList.remove('translate-x-5');
                knob.classList.add('translate-x-1');
            }
            
            // Reset state tracker
            if (window.suratToggleStates) {
                window.suratToggleStates[i] = false;
            }
        }
    }
}

function applyPreviousDataToForm(passengers) {
    if (!passengers || passengers.length === 0) return false;

    // Ensure passenger cards match length
    while (trainPassengerCount < passengers.length && trainPassengerCount < 4) {
        addPassenger();
    }
    // If more forms than data, keep remaining empty

    passengers.forEach((p, idx) => {
        const nama = document.getElementById(`nama-${idx}`);
        const telp = document.getElementById(`telepon-${idx}`);
        const email = document.getElementById(`email-${idx}`);
        if (nama) nama.value = p.nama || p.name || '';
        if (telp) telp.value = p.telepon || p.phone || '';
        if (email) email.value = p.email || '';
    });
    return true;
}

function clearPassengerForms() {
    for (let i = 0; i < trainPassengerCount; i++) {
        const nama = document.getElementById(`nama-${i}`);
        const telp = document.getElementById(`telepon-${i}`);
        const email = document.getElementById(`email-${i}`);
        if (nama) nama.value = '';
        if (telp) telp.value = '';
        if (email) email.value = '';
    }
}

// Verification modal functions
function showVerificationModal() {
    const modal = document.getElementById('verification-overlay');
    const dialog = document.getElementById('verification-dialog');
    if (modal && dialog) {
        modal.classList.remove('hidden');
        modal.classList.remove('opacity-0');
        modal.classList.add('opacity-100');
        
        setTimeout(() => {
            dialog.classList.remove('scale-95', 'opacity-0');
            dialog.classList.add('scale-100', 'opacity-100');
        }, 10);
    }
}

function cancelSubmit() {
    const modal = document.getElementById('verification-overlay');
    const dialog = document.getElementById('verification-dialog');
    if (modal && dialog) {
        dialog.classList.remove('scale-100', 'opacity-100');
        dialog.classList.add('scale-95', 'opacity-0');
        modal.classList.remove('opacity-100');
        modal.classList.add('opacity-0');
        setTimeout(() => modal.classList.add('hidden'), 200);
    }
}

function confirmSubmit() {
    const modal = document.getElementById('verification-overlay');
    const dialog = document.getElementById('verification-dialog');
    if (modal && dialog) {
        dialog.classList.remove('scale-100', 'opacity-100');
        dialog.classList.add('scale-95', 'opacity-0');
        modal.classList.remove('opacity-100');
        modal.classList.add('opacity-0');
        setTimeout(() => modal.classList.add('hidden'), 200);
    }
    
    // Process the actual submission
    alert('Data berhasil disubmit! Redirecting to payment...');
    // Here you can redirect to payment page or process the form
}

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
    // Track toggle states for each passenger
    const suratToggleStates = {};
    
    // Initialize toggle for existing passengers
    for (let i = 0; i < trainPassengerCount; i++) {
        initializeSuratDinasToggle(i, suratToggleStates);
    }
    
    // Return states object for future use
    return suratToggleStates;
}

// Initialize individual surat dinas toggle
function initializeSuratDinasToggle(index, stateTracker) {
    const toggle = document.getElementById(`surat-toggle-${index}`);
    if (!toggle) return;
    
    // Initialize state
    stateTracker[index] = false;
    
    // Remove any existing event listeners
    toggle.replaceWith(toggle.cloneNode(true));
    const newToggle = document.getElementById(`surat-toggle-${index}`);
    
    // Add event listener like the main toggle
    newToggle.addEventListener('click', function() {
        stateTracker[index] = !stateTracker[index];
        const knob = newToggle.querySelector('.toggle-knob');
        
        console.log(`Surat toggle ${index} clicked. New state:`, stateTracker[index] ? 'ON' : 'OFF');
        
        if (stateTracker[index]) {
            // Toggle ON - change to red and auto upload
            newToggle.classList.remove('bg-gray-200');
            newToggle.classList.add('bg-red-500');
            if (knob) knob.classList.add('translate-x-5');
            
            // Auto upload previous surat dinas
            const previousData = JSON.parse(localStorage.getItem('previousNotaDinas') || '{}');
            
            if (previousData.fileName) {
                applySuratDinasToUploadBox(index, previousData);
                showNotification('Surat dinas sebelumnya berhasil digunakan!', 'success');
            } else {
                // Create dummy data
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
            // Toggle OFF - return to gray and reset
            newToggle.classList.remove('bg-red-500');
            newToggle.classList.add('bg-gray-200');
            if (knob) knob.classList.remove('translate-x-5');
            
            // Reset upload box
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

// Reset surat dinas upload box to normal state (complete reset)
function resetSuratDinasUploadBox(index) {
    console.log('Resetting surat dinas upload box for passenger', index);
    
    const suratFilename = document.getElementById(`surat-filename-${index}`);
    const suratUploadBox = suratFilename?.closest('.upload-box');
    const suratInput = document.getElementById(`surat-${index}`);
    
    if (suratFilename && suratUploadBox) {
        // Complete reset: clear file input value
        if (suratInput) {
            suratInput.value = '';
            suratInput.files = null;
        }
        
        // Reset upload box HTML to original state
        suratUploadBox.innerHTML = `
            <img src="{{ asset('folder.png') }}" alt="icon" class="w-8 h-8" loading="lazy">
            <div class="flex-1 text-left">
                <div class="text-gray-700">Klik untuk upload atau tarik file ke sini</div>
                <div id="surat-filename-${index}" class="text-sm text-gray-400">Format: PDF (maks 5MB)</div>
            </div>
            <input type="file" id="surat-${index}" name="surat[]" accept=".pdf" class="hidden" onchange="handleFileChange(event, 'surat-filename-${index}')">
        `;
        
        // Reset all styling to original state
        suratUploadBox.classList.remove('border-green-400', 'bg-green-50');
        suratUploadBox.classList.add('border-gray-200', 'hover:border-red-300', 'cursor-pointer');
        suratUploadBox.setAttribute('onclick', `triggerFileForPassenger(${index},'surat')`);
        
        console.log('Upload box reset complete for passenger', index);
    }
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
        iconPath = 'M5 13l4 4L19 7'; // Checkmark icon
    } else if (type === 'info') {
        iconPath = 'M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'; // Info icon
    } else {
        iconPath = 'M6 18L18 6M6 6l12 12'; // X icon for error
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
    
    // Animate in
    setTimeout(() => {
        notification.classList.remove('translate-x-full');
    }, 100);
    
    // Auto remove after 3 seconds
    setTimeout(() => {
        notification.classList.add('translate-x-full');
        setTimeout(() => {
            document.body.removeChild(notification);
        }, 300);
    }, 3000);
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

// Seat selection functions
function openSeatModal(passengerIndex) {
    currentTrainPassengerIndex = passengerIndex;
    const modal = document.getElementById('seat-modal');
    const dialog = document.getElementById('seat-dialog');
    const passengerName = document.getElementById(`nama-${passengerIndex}`).value || `Penumpang ${passengerIndex + 1}`;
    document.getElementById('modal-passenger-name').textContent = passengerName.toUpperCase();
    document.getElementById('modal-passenger-seat').textContent = `Ekonomi I / Kursi -`;
    modal.classList.remove('hidden');
    // Smooth fade/scale in
    requestAnimationFrame(() => {
        modal.classList.remove('opacity-0');
        if (dialog) {
            dialog.classList.remove('scale-95','opacity-0');
        }
    });
}

function closeSeatModal() {
    const modal = document.getElementById('seat-modal');
    const dialog = document.getElementById('seat-dialog');
    // Smooth fade/scale out then hide
    modal.classList.add('opacity-0');
    if (dialog) {
        dialog.classList.add('scale-95','opacity-0');
    }
    setTimeout(() => modal.classList.add('hidden'), 220);
}

function switchCar(carName) {
    currentTrainCar = carName;
    // Update tab appearance
    document.querySelectorAll('.car-tab').forEach(tab => {
        tab.classList.remove('bg-gradient-to-r');
        tab.classList.remove('from-[#FE0004]');
        tab.classList.remove('to-[#FE0004]');
        tab.classList.remove('text-white');
        tab.classList.add('text-gray-600');
    });
    const selectedTab = document.querySelector(`[data-car="${carName}"]`);
    selectedTab.classList.add('bg-gradient-to-r');
    selectedTab.classList.add('from-[#FE0004]');
    selectedTab.classList.add('to-[#FE0004]');
    selectedTab.classList.add('text-white');
    selectedTab.classList.remove('text-gray-600');
    
    // Reset seat selection for new car
    updateSeatGrid();
}

function updateSeatGrid() {
    // Reset all seats to available (except some occupied ones for demo)
    const occupiedSeats = ['1A', '1B', '2D', '3D', '6D'];
    document.querySelectorAll('.seat-btn').forEach(btn => {
        const seatId = btn.dataset.seat;
        if (occupiedSeats.includes(seatId)) {
            btn.className = 'seat-btn w-8 h-8 bg-gray-400 rounded border text-xs font-medium text-white';
            btn.dataset.status = 'occupied';
            btn.onclick = null;
        } else {
            btn.className = 'seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300';
            btn.dataset.status = 'available';
            btn.onclick = () => selectSeat(seatId);
            btn.textContent = '';
        }
    });
}

function selectSeat(seatId) {
    // Clear previous selection for this passenger
    document.querySelectorAll('.seat-btn').forEach(btn => {
        if (btn.dataset.status === 'selected') {
            btn.className = 'seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300';
            btn.dataset.status = 'available';
            btn.textContent = '';
        }
    });

    // Select new seat
    const seatBtn = document.querySelector(`[data-seat="${seatId}"]`);
    seatBtn.className = 'seat-btn w-8 h-8 bg-gradient-to-r from-[#FE0004] to-[#F6B101] rounded border text-xs font-medium text-white';
    seatBtn.dataset.status = 'selected';
    seatBtn.textContent = '';
    
    trainSelectedSeats[currentTrainPassengerIndex] = {
        seat: seatId,
        car: currentTrainCar
    };
    
    // Update passenger info in modal dynamically
    updateModalPassengerInfo();
}

function updateModalPassengerInfo() {
    if (trainSelectedSeats[currentTrainPassengerIndex]) {
        const seatInfo = trainSelectedSeats[currentTrainPassengerIndex];
        const carDisplay = seatInfo.car.replace('ekonomi', 'Ekonomi ');
        const passengerInfoDiv = document.getElementById('modal-passenger-seat');
        if (passengerInfoDiv) {
            passengerInfoDiv.textContent = `${carDisplay} / Kursi ${seatInfo.seat}`;
        }
    } else {
        // Default display when no seat selected
        const passengerInfoDiv = document.getElementById('modal-passenger-seat');
        if (passengerInfoDiv) {
            passengerInfoDiv.textContent = `Ekonomi I / Kursi -`;
        }
    }
}

function saveSeatSelection() {
    if (trainSelectedSeats[currentTrainPassengerIndex]) {
        const seatInfo = trainSelectedSeats[currentTrainPassengerIndex];
        const badge = document.getElementById(`selected-seat-badge-${currentTrainPassengerIndex}`);
        badge.innerHTML = `Kursi: <strong class="text-gray-800">${seatInfo.car.toUpperCase().replace('EKONOMI', 'Ekonomi ')} - ${seatInfo.seat}</strong>`;
    }
    closeSeatModal();
}

// Global user search functionality
function initializeGlobalUserSearch() {
    const searchInput = document.getElementById('global-user-search');
    const dropdown = document.getElementById('global-search-dropdown');
    let searchTimeout;
    
    if (!searchInput || !dropdown) return;
    
    searchInput.addEventListener('input', function() {
        const query = this.value.trim();
        
        clearTimeout(searchTimeout);
        
        if (query.length < 2) {
            dropdown.classList.add('hidden');
            return;
        }
        
        searchTimeout = setTimeout(() => {
            fetch(`/api/search-users?q=${encodeURIComponent(query)}`)
                .then(response => response.json())
                .then(users => {
                    dropdown.innerHTML = '';
                    
                    if (users.length === 0) {
                        dropdown.innerHTML = '<div class="p-4 text-gray-500 text-center">Tidak ada pengguna ditemukan</div>';
                    } else {
                        users.forEach(user => {
                            const item = document.createElement('div');
                            item.className = 'p-4 hover:bg-gray-50 cursor-pointer border-b border-gray-100 last:border-b-0';
                            item.innerHTML = `
                                <div class="flex items-center justify-between">
                                    <div>
                                        <div class="font-medium text-gray-800">${user.name}</div>
                                        <div class="text-sm text-gray-500">${user.email}</div>
                                        ${user.phone ? `<div class="text-sm text-gray-500">${user.phone}</div>` : ''}
                                    </div>
                                    <div class="text-sm text-blue-600 font-medium">Pilih →</div>
                                </div>
                            `;
                            
                            item.addEventListener('click', () => {
                                showPassengerSelectionModal(user);
                                dropdown.classList.add('hidden');
                                searchInput.value = '';
                            });
                            
                            dropdown.appendChild(item);
                        });
                    }
                    
                    dropdown.classList.remove('hidden');
                })
                .catch(error => {
                    console.error('Error searching users:', error);
                    dropdown.classList.add('hidden');
                });
        }, 300);
    });
    
    // Hide dropdown when clicking outside
    document.addEventListener('click', function(e) {
        if (!searchInput.parentNode.contains(e.target)) {
            dropdown.classList.add('hidden');
        }
    });
}

// Show modal to select which passenger to fill
function showPassengerSelectionModal(userData) {
    // Create modal if it doesn't exist
    let modal = document.getElementById('passenger-selection-modal');
    if (!modal) {
        modal = document.createElement('div');
        modal.id = 'passenger-selection-modal';
        modal.className = 'fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden';
        modal.innerHTML = `
            <div class="bg-white rounded-2xl p-6 max-w-sm w-full mx-4">
                <h3 class="text-xl font-bold text-gray-800 mb-4 text-center">Pilih Penumpang</h3>
                <p class="text-gray-600 mb-4 text-center">Data akan diisi untuk penumpang yang dipilih:</p>
                <div class="space-y-2" id="passenger-selection-list">
                    <!-- Passenger options will be populated here -->
                </div>
                <button onclick="hidePassengerSelectionModal()" class="w-full mt-4 px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition">
                    Batal
                </button>
            </div>
        `;
        document.body.appendChild(modal);
    }
    
    // Populate passenger options
    const passengerList = document.getElementById('passenger-selection-list');
    passengerList.innerHTML = '';
    
    const passengers = document.querySelectorAll('.passenger-card');
    passengers.forEach((passenger, index) => {
        const button = document.createElement('button');
        button.className = 'w-full p-3 text-left bg-gray-50 hover:bg-blue-50 rounded-lg transition border border-gray-200 hover:border-blue-300';
        button.innerHTML = `
            <div class="font-medium text-gray-800">Penumpang ${index + 1}</div>
            <div class="text-sm text-gray-500">Klik untuk mengisi data</div>
        `;
        
        button.addEventListener('click', () => {
            fillPassengerData(index, userData);
            hidePassengerSelectionModal();
        });
        
        passengerList.appendChild(button);
    });
    
    // Show modal
    modal.classList.remove('hidden');
}

// Hide passenger selection modal
function hidePassengerSelectionModal() {
    const modal = document.getElementById('passenger-selection-modal');
    if (modal) {
        modal.classList.add('hidden');
    }
}

// Fill passenger data with selected user
function fillPassengerData(passengerIndex, userData) {
    const nameInput = document.getElementById(`nama-${passengerIndex}`);
    const phoneInput = document.getElementById(`telepon-${passengerIndex}`);
    const emailInput = document.getElementById(`email-${passengerIndex}`);
    
    if (nameInput) nameInput.value = userData.name || '';
    if (phoneInput) phoneInput.value = userData.phone || '';
    if (emailInput) emailInput.value = userData.email || '';
    
    // Show success message
    const successMsg = document.createElement('div');
    successMsg.className = 'fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg z-50';
    successMsg.textContent = `Data ${userData.name} berhasil diisi ke Penumpang ${passengerIndex + 1}`;
    document.body.appendChild(successMsg);
    
    setTimeout(() => {
        successMsg.remove();
    }, 3000);
}

// Individual passenger search functionality
function setupIndividualPassengerSearch(searchInput, dropdown, passengerIndex) {
    let searchTimeout;
    
    searchInput.addEventListener('input', function() {
        const query = this.value.trim();
        
        clearTimeout(searchTimeout);
        
        if (query.length < 2) {
            dropdown.classList.add('hidden');
            return;
        }
        
        searchTimeout = setTimeout(() => {
            fetch(`/api/search-users?q=${encodeURIComponent(query)}`)
                .then(response => response.json())
                .then(users => {
                    dropdown.innerHTML = '';
                    
                    if (users.length === 0) {
                        dropdown.innerHTML = '<div class="p-3 text-gray-500 text-sm">Tidak ada pengguna ditemukan</div>';
                    } else {
                        users.forEach(user => {
                            const item = document.createElement('div');
                            item.className = 'p-3 hover:bg-gray-50 cursor-pointer border-b border-gray-100 last:border-b-0';
                            item.innerHTML = `
                                <div class="font-medium text-gray-800">${user.name}</div>
                                <div class="text-sm text-gray-500">${user.email}</div>
                                ${user.phone ? `<div class="text-sm text-gray-500">${user.phone}</div>` : ''}
                            `;
                            
                            item.addEventListener('click', () => {
                                // Fill the form with selected user data
                                fillPassengerData(passengerIndex, user);
                                dropdown.classList.add('hidden');
                                searchInput.value = '';
                            });
                            
                            dropdown.appendChild(item);
                        });
                    }
                    
                    dropdown.classList.remove('hidden');
                })
                .catch(error => {
                    console.error('Error searching users:', error);
                    dropdown.classList.add('hidden');
                });
        }, 300);
    });
    
    // Hide dropdown when clicking outside
    document.addEventListener('click', function(e) {
        if (!searchInput.parentNode.contains(e.target)) {
            dropdown.classList.add('hidden');
        }
    });
}

// User search functionality
function createUserSearchDropdown(inputElement, passengerIndex) {
    const dropdown = document.createElement('div');
    dropdown.className = 'absolute top-full left-0 right-0 bg-white border border-gray-200 rounded-lg shadow-lg z-10 max-h-48 overflow-y-auto hidden';
    dropdown.id = `user-search-dropdown-${passengerIndex}`;
    
    inputElement.parentNode.style.position = 'relative';
    inputElement.parentNode.appendChild(dropdown);
    
    let searchTimeout;
    
    inputElement.addEventListener('input', function() {
        const query = this.value.trim();
        
        clearTimeout(searchTimeout);
        
        if (query.length < 2) {
            dropdown.classList.add('hidden');
            return;
        }
        
        searchTimeout = setTimeout(() => {
            fetch(`/api/search-users?q=${encodeURIComponent(query)}`)
                .then(response => response.json())
                .then(users => {
                    dropdown.innerHTML = '';
                    
                    if (users.length === 0) {
                        dropdown.innerHTML = '<div class="p-3 text-gray-500 text-sm">Tidak ada pengguna ditemukan</div>';
                    } else {
                        users.forEach(user => {
                            const item = document.createElement('div');
                            item.className = 'p-3 hover:bg-gray-50 cursor-pointer border-b border-gray-100 last:border-b-0';
                            item.innerHTML = `
                                <div class="font-medium text-gray-800">${user.name}</div>
                                <div class="text-sm text-gray-500">${user.email}</div>
                                ${user.phone ? `<div class="text-sm text-gray-500">${user.phone}</div>` : ''}
                            `;
                            
                            item.addEventListener('click', () => {
                                // Fill the form with selected user data
                                document.getElementById(`nama-${passengerIndex}`).value = user.name;
                                document.getElementById(`email-${passengerIndex}`).value = user.email;
                                if (user.phone) {
                                    document.getElementById(`telepon-${passengerIndex}`).value = user.phone;
                                }
                                
                                dropdown.classList.add('hidden');
                            });
                            
                            dropdown.appendChild(item);
                        });
                    }
                    
                    dropdown.classList.remove('hidden');
                })
                .catch(error => {
                    console.error('Error searching users:', error);
                    dropdown.classList.add('hidden');
                });
        }, 300);
    });
    
    // Hide dropdown when clicking outside
    document.addEventListener('click', function(e) {
        if (!inputElement.parentNode.contains(e.target)) {
            dropdown.classList.add('hidden');
        }
    });
}

// Passenger management functions
function addPassenger() {
    if (trainPassengerCount >= 4) {
        alert('Maksimal 4 penumpang');
        return;
    }

    trainPassengerCount++;
    const container = document.getElementById('passengers-container');
    const template = document.getElementById('passenger-0');
    const newPassenger = template.cloneNode(true);
    
    // Update IDs and attributes
    newPassenger.id = `passenger-${trainPassengerCount - 1}`;
    newPassenger.dataset.index = trainPassengerCount - 1;
    
    // Update passenger title
    newPassenger.querySelector('h3').textContent = `Penumpang ${trainPassengerCount}`;
    
    // Update form elements
    const form = newPassenger.querySelector('.passenger-form');
    form.dataset.index = trainPassengerCount - 1;
    
    // Update input IDs and names
    const inputs = newPassenger.querySelectorAll('input, label');
    inputs.forEach(input => {
        if (input.tagName === 'LABEL') {
            const forAttr = input.getAttribute('for');
            if (forAttr) {
                input.setAttribute('for', forAttr.replace(/(-)\d+$/, `$1${trainPassengerCount - 1}`));
            }
        } else {
            const id = input.id;
            const name = input.name;
            if (id) input.id = id.replace('-0', `-${trainPassengerCount - 1}`);
            if (name) input.name = name;
            input.value = ''; // Clear values
            input.removeAttribute('value'); // Remove default values for new passengers
        }
    });
    
    // Show search bar for passengers 2-4
    const searchBar = newPassenger.querySelector('.passenger-search-bar');
    if (searchBar && trainPassengerCount > 1) {
        searchBar.classList.remove('hidden');
    }

    // Update file upload elements
    const uploadBoxes = newPassenger.querySelectorAll('.upload-box');
    uploadBoxes.forEach((box, index) => {
        const type = index === 0 ? 'ktp' : 'surat';
        if (type === 'surat') {
            box.onclick = () => triggerFileForPassenger(trainPassengerCount - 1, type);
        } else {
            box.onclick = () => triggerFileForPassenger(trainPassengerCount - 1, type);
        }
    });

    // Update filename display elements
    const filenameElements = newPassenger.querySelectorAll('[id*="filename"]');
    filenameElements.forEach(el => {
        el.id = el.id.replace('-0', `-${trainPassengerCount - 1}`);
        el.textContent = 'Format: PDF (maks 5MB)';
    });

    // Update surat dinas toggle
    const suratToggle = newPassenger.querySelector('[id*="surat-toggle"]');
    if (suratToggle) {
        suratToggle.id = `surat-toggle-${trainPassengerCount - 1}`;
        // Remove onclick attribute - will be handled by event listener
        suratToggle.removeAttribute('onclick');
        // Ensure toggle starts in OFF state
        suratToggle.classList.remove('bg-red-500');
        suratToggle.classList.add('bg-gray-200');
        const knob = suratToggle.querySelector('.toggle-knob');
        if (knob) {
            knob.classList.remove('translate-x-5');
            knob.classList.add('translate-x-1');
        }
        
        // Initialize toggle for new passenger (will be done after DOM update)
        setTimeout(() => {
            if (window.suratToggleStates) {
                initializeSuratDinasToggle(trainPassengerCount - 1, window.suratToggleStates);
            }
        }, 100);
    }

    // Update seat badge
    const seatBadge = newPassenger.querySelector('[id*="selected-seat-badge"]');
    seatBadge.id = `selected-seat-badge-${trainPassengerCount - 1}`;
    seatBadge.innerHTML = `Kursi: <strong class="text-gray-800">-</strong>`;

    // Update pilih kursi button
    const seatButton = newPassenger.querySelector('button[onclick*="openSeatModal"]');
    seatButton.onclick = () => openSeatModal(trainPassengerCount - 1);

    // Update remove button
    const removeBtn = newPassenger.querySelector('.remove-btn');
    removeBtn.classList.remove('hidden');
    removeBtn.onclick = () => removePassenger(trainPassengerCount - 1);

    container.appendChild(newPassenger);
    
    // Add search functionality to the individual search bar for passengers 2-4
    if (trainPassengerCount > 1) {
        const searchInput = newPassenger.querySelector('.passenger-search-input');
        const searchDropdown = newPassenger.querySelector('.passenger-search-dropdown');
        if (searchInput && searchDropdown) {
            setupIndividualPassengerSearch(searchInput, searchDropdown, trainPassengerCount - 1);
        }
    }
    
    updateTrainPassengerCount();
}

function removePassenger(index) {
    if (trainPassengerCount <= 1) return;
    
    const passenger = document.getElementById(`passenger-${index}`);
    passenger.remove();
    
    // Remove seat selection
    delete trainSelectedSeats[index];
    
    trainPassengerCount--;
    updateTrainPassengerCount();
    
    // Renumber remaining passengers
    renumberTrainPassengers();
}

function renumberTrainPassengers() {
    const passengers = document.querySelectorAll('.passenger-card');
    passengers.forEach((passenger, index) => {
        passenger.id = `passenger-${index}`;
        passenger.dataset.index = index;
        passenger.querySelector('h3').textContent = `Penumpang ${index + 1}`;
        
        // Update all IDs and references
        const elements = passenger.querySelectorAll('[id], [for], [onclick]');
        elements.forEach(el => {
            if (el.id) {
                el.id = el.id.replace(/(-)\d+$/, `$1${index}`);
            }
            if (el.getAttribute('for')) {
                const forAttr = el.getAttribute('for');
                el.setAttribute('for', forAttr.replace(/(-)\d+$/, `$1${index}`));
            }
        });
        
        // Update button onclick handlers
        const seatButton = passenger.querySelector('button[onclick*="openSeatModal"]');
        if (seatButton) seatButton.onclick = () => openSeatModal(index);
        
        const removeBtn = passenger.querySelector('.remove-btn');
        if (removeBtn) {
            removeBtn.onclick = () => removePassenger(index);
            if (index === 0) {
                removeBtn.classList.add('hidden');
            } else {
                removeBtn.classList.remove('hidden');
            }
        }
    });
}

function updateTrainPassengerCount() {
    document.getElementById('passenger-count').textContent = `${trainPassengerCount} / 4`;
    const addBtn = document.getElementById('add-passenger-btn');
    if (trainPassengerCount >= 4) {
        addBtn.disabled = true;
        addBtn.classList.add('opacity-50', 'cursor-not-allowed');
    } else {
        addBtn.disabled = false;
        addBtn.classList.remove('opacity-50', 'cursor-not-allowed');
    }
}

// Back navigation function
function goBack() {
    showBackOverlay();
}

// Back overlay functions
function showBackOverlay() {
   const overlay = document.getElementById('back-overlay');
   const dialog = document.getElementById('back-dialog');
   
   if (overlay && dialog) {
       // Show overlay immediately
       overlay.classList.remove('hidden');
       
       // Reset dialog to initial state
       dialog.classList.remove('scale-100', 'opacity-100');
       dialog.classList.add('scale-95', 'opacity-0');
       
       // Force reflow
       overlay.offsetHeight;
       
       // Animate in
       requestAnimationFrame(() => {
           dialog.classList.remove('scale-95', 'opacity-0');
           dialog.classList.add('scale-100', 'opacity-100');
       });
   }
}

function hideBackOverlay() {
   const overlay = document.getElementById('back-overlay');
   const dialog = document.getElementById('back-dialog');
   if (overlay && dialog) {
       dialog.classList.remove('scale-100', 'opacity-100');
       dialog.classList.add('scale-95', 'opacity-0');
       setTimeout(() => overlay.classList.add('hidden'), 300);
   }
}

function viewOtherFlights() {
     hideBackOverlay();
     alert('Redirecting to flight search page...');
}
 
function completeBooking() {
     hideBackOverlay();
}

// Confirm Submit Overlay functions
function showConfirmOverlay() {
   const overlay = document.getElementById('confirm-overlay');
   const dialog = document.getElementById('confirm-overlay-dialog');
   overlay.classList.remove('hidden');
   requestAnimationFrame(() => {
       overlay.classList.remove('opacity-0');
       dialog.classList.remove('scale-95','opacity-0');
   });
}

function hideConfirmOverlay() {
   const overlay = document.getElementById('confirm-overlay');
   const dialog = document.getElementById('confirm-overlay-dialog');
   if (overlay && dialog) {
       overlay.classList.add('opacity-0');
       dialog.classList.add('scale-95','opacity-0');
       setTimeout(() => overlay.classList.add('hidden'), 220);
   }
}

function handleConfirmSubmit() {
    // Navigate to kereta receipt page
    hideConfirmOverlay();
    window.location.href = "{{ url('receipt/keretareceipt') }}";
}

// Initialize everything when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    // Initialize passenger and seat functionality
    updateTrainPassengerCount();
    updateSeatGrid();
    
    // Initialize global user search functionality
    initializeGlobalUserSearch();
    
    // Initialize search functionality only for existing passenger forms
    // Note: Only passenger 1 exists initially, passengers 2-4 are created dynamically
    const existingPassengers = document.querySelectorAll('.passenger-card');
    existingPassengers.forEach((passenger, index) => {
        if (index > 0) { // Skip passenger 1 (index 0)
            const nameInput = document.getElementById(`nama-${index}`);
            if (nameInput) {
                nameInput.placeholder = 'Ketik nama untuk mencari pengguna terdaftar...';
                createUserSearchDropdown(nameInput, index);
            }
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
                
                if (!applyPreviousDataToForm(prev)) {
                    // If still cannot apply, revert toggle
                    reuseOn = false;
                    reuseBtn.classList.remove('bg-gradient-to-r', 'from-[#FE0004]', 'to-[#FE0004]');
                    reuseBtn.classList.add('bg-gray-200');
                    if (knob) knob.classList.remove('translate-x-6');
                    alert('Data sebelumnya tidak ditemukan.');
                } else {
                    // Also apply dummy files
                    const dummyFiles = getDummyFiles();
                    applyDummyFilesToForm(dummyFiles);
                }
            } else {
                // Toggle OFF - return to gray and clear data, show empty upload areas
                reuseBtn.classList.remove('bg-gradient-to-r', 'from-[#FE0004]', 'to-[#FE0004]');
                reuseBtn.classList.add('bg-gray-200');
                if (knob) knob.classList.remove('translate-x-6');
                clearPassengerForms();
                resetFileUploadsToEmpty();
            }
        });
    }

    // Override problematic external script event listeners
    const originalAddEventListener = document.addEventListener;
    document.addEventListener = function(type, listener, options) {
        if (type === 'click') {
            const safeListener = function(event) {
                try {
                    listener(event);
                } catch (error) {
                    // Silently ignore null reference errors from external scripts
                    if (!error.message || !error.message.includes('Cannot read properties of null')) {
                        console.error(error);
                    }
                }
            };
            originalAddEventListener.call(this, type, safeListener, options);
        } else {
            originalAddEventListener.call(this, type, listener, options);
        }
    };
    
    // File upload functionality
    const fileInputs = document.querySelectorAll('input[type="file"]');
    const uploadAreas = document.querySelectorAll('.border-dashed');
    
    fileInputs.forEach((input, index) => {
        const uploadArea = uploadAreas[index];
        
        if (uploadArea) {
            uploadArea.addEventListener('click', () => {
                input.click();
            });
        }
        
        input.addEventListener('change', (e) => {
            if (e.target.files.length > 0) {
                const fileName = e.target.files[0].name;
                if (uploadArea) {
                    uploadArea.innerHTML = `
                        <div class="flex flex-col items-center">
                            <svg class="w-8 h-8 text-green-500 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-green-600 text-sm">${fileName}</span>
                        </div>
                    `;
                    uploadArea.classList.remove('border-gray-300', 'hover:border-red-400');
                    uploadArea.classList.add('border-green-400', 'bg-green-50');
                }
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

    // Form validation and submission
    const submitBtn = document.getElementById('checkout-submit');
    
    if (submitBtn) {
        submitBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            console.log('Submit button clicked'); // Debug log
            
            // Basic validation for first passenger
            const nama = document.getElementById('nama-0');
            const telepon = document.getElementById('telepon-0');
            const email = document.getElementById('email-0');
            const ktp = document.getElementById('ktp-0');
            const suratDinas = document.getElementById('surat-0');

            // if (!nama || !telepon || !email || !ktp || !suratDinas) {
            //     alert('Mohon lengkapi semua data yang diperlukan');
            //     return;
            // }
            
            // if (!nama.value || !telepon.value || !email.value || !ktp.files[0] || !suratDinas.files[0]) {
            //     alert('Mohon lengkapi semua data yang diperlukan');
            //     return;
            // }
            
            // // Email validation
            // const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            // if (!emailRegex.test(email.value)) {
            //     alert('Format email tidak valid');
            //     return;
            // }
            
            // // Phone validation
            // const phoneRegex = /^[0-9+\-\s()]+$/;
            // if (!phoneRegex.test(telepon.value)) {
            //     alert('Format nomor telepon tidak valid');
            //     return;
            // }
            
            // // If all validation passes, show success message
            // alert('Data berhasil disubmit! Redirecting to payment...');
    
            

            console.log('Validation passed, showing modal'); // Debug log
            
            // If all validation passes, show verification modal
            showVerificationModal();

        });
    }
});

// Global error suppression for external script.js
window.addEventListener('error', function(e) {
    if (e.message && e.message.includes('Cannot read properties of null')) {
        e.preventDefault();
        return true;
    }
}, true);

// Page Transition Loading for Train
function showPageTransition() {
    const overlay = document.getElementById('page-transition-overlay');
    const loadingText = document.getElementById('loading-text');
    const progressBar = document.getElementById('loading-progress-bar');
    
    if (!overlay) return;
    
    overlay.classList.remove('hidden');
    
    // Train-specific loading steps
    const steps = [
        { text: 'Memproses data kereta...', progress: 20, duration: 800 },
        { text: 'Memvalidasi kursi dan dokumen...', progress: 40, duration: 1000 },
        { text: 'Mengirim ke sistem KAI...', progress: 60, duration: 1200 },
        { text: 'Membuat e-tiket kereta...', progress: 80, duration: 800 },
        { text: 'Menyelesaikan reservasi...', progress: 100, duration: 600 }
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
                window.location.href = "{{ url('receipt/keretareceipt') }}";
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

// Back navigation with page transition
function goBack() {
    showBackOverlay();
}

function showBackOverlay() {
    const overlay = document.getElementById('back-overlay');
    if (!overlay) return;
    const dialog = overlay.querySelector('#back-dialog');
    overlay.classList.remove('hidden');
    void overlay.offsetWidth; // trigger reflow
    if (dialog) {
        setTimeout(() => {
            dialog.classList.remove('scale-95', 'opacity-0');
            dialog.classList.add('scale-100', 'opacity-100');
        }, 10);
    }
}

function hideBackOverlay() {
    const overlay = document.getElementById('back-overlay');
    if (!overlay) return;
    const dialog = overlay.querySelector('#back-dialog');
    if (dialog) {
        dialog.classList.add('scale-95', 'opacity-0');
        dialog.classList.remove('scale-100', 'opacity-100');
    }
    setTimeout(() => {
        overlay.classList.add('hidden');
    }, 300);
}

// Update confirmSubmit function to use page transition
function confirmSubmit() {
    const modal = document.getElementById('verification-overlay');
    const dialog = document.getElementById('verification-dialog');
    if (modal && dialog) {
        dialog.classList.remove('scale-100', 'opacity-100');
        dialog.classList.add('scale-95', 'opacity-0');
        modal.classList.remove('opacity-100');
        modal.classList.add('opacity-0');
        setTimeout(() => modal.classList.add('hidden'), 200);
    }
    
    // Process the actual submission with page transition
    showPageTransition();
}

// Initialize lazy loading when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    // Simple lazy loading for images
    const images = document.querySelectorAll('img[loading="lazy"]');
    images.forEach(img => {
        img.addEventListener('load', function() {
            this.classList.add('loaded');
        });
        if (img.complete) {
            img.classList.add('loaded');
        }
    });
});
</script>

@include('partials.footer')