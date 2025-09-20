@include('partials.head')

@section('title', 'Checkout Pesawat - Online Travel')

@include('partials.navigation')

<body class="bg-[F4F7FE] font-poppins">
    <!-- Page Transition Loading Overlay -->
    <div id="page-transition-overlay" class="fixed inset-0 bg-white/95 backdrop-blur-md z-[9999] hidden">
        <div class="w-full h-full flex flex-col items-center justify-center">
            <div class="w-16 h-16 border-4 border-gray-200 border-t-[#FE0004] rounded-full animate-spin mb-5"></div>
            <div id="loading-text" class="text-gray-700 text-lg font-semibold text-center mb-2">Memproses pemesanan penerbangan...</div>
            <div class="w-64 h-1.5 bg-gray-200 rounded mt-4 overflow-hidden">
                <div id="loading-progress-bar" class="w-0 h-full bg-gradient-to-r from-[#FE0004] to-[#FE0004] transition-[width] duration-500 ease-linear rounded"></div>
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
            
            <!-- Flight Summary Card -->
            <div class="bg-white rounded-2xl shadow-lg p-4 sm:p-6 lg:p-8 mb-4 sm:mb-6">

                <!-- Trip Overview Section -->
                <div class="text-center mb-4 sm:mb-6">
                    <h1 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-800">
                        Jakarta → Denpasar-Bali
                    </h1>
                </div>
                
                <!-- Separator Line -->
                <div class="w-full h-px bg-gray-200 mb-4 sm:mb-6"></div>
                
                <!-- Date and Trip Type -->
                <div class="flex flex-col sm:flex-row items-center justify-center mb-6 sm:mb-8 space-y-2 sm:space-y-0">
                    <span class="bg-gradient-to-r from-[#FE0004] to-[#FE0004] text-sm font-medium px-3 sm:px-4 py-2 rounded-full sm:mr-4 text-white">
                        Pergi
                    </span>
                    <span class="font-semibold text-gray-800 text-base sm:text-lg">
                        Sen, 1 Sep 2025
                    </span>
                </div>
                
                <!-- Flight Details Card -->
                <div class="bg-gray-50 rounded-xl p-4 sm:p-6 mx-auto max-w-md border-2 border-gray-200">
                    <div class="flex items-center justify-center space-x-6">
                        
                        <!-- Airline Information (Left) -->
                        <div class="flex items-center min-w-0">
                            <img src="{{ asset('lionair.png') }}" alt="Lion Air Logo" 
                                 class="w-8 h-8 mr-2 flex-shrink-0" loading="lazy">
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
                
                <!-- Total Price Section -->
                <div class="w-full h-px bg-gray-200 mt-6 mb-4"></div>
                <div class="flex justify-between items-center">
                    <span class="text-lg font-semibold text-gray-600">Total Harga</span>
                    <span class="text-lg font-bold text-gray-800">IDR 265.000</span>
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
                                  <input type="text" id="nama-0" name="nama[]" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-200 transition" placeholder="Masukkan nama lengkap" value="{{ auth()->user()->name ?? '' }}">
                                </div>
                                <div>
                                  <label for="telepon-0" class="block text-sm font-medium text-gray-700 mb-2">Nomor Telpon</label>
                                  <input type="tel" id="telepon-0" name="telepon[]" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-200 transition" placeholder="Masukkan nomor telepon" value="{{ auth()->user()->phone ?? '' }}">
                                </div>
                                <div>
                                  <label for="email-0" class="block text-sm font-medium text-gray-700 mb-2">Alamat Email</label>
                                  <input type="email" id="email-0" name="email[]" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-200 transition" placeholder="Masukkan alamat email" value="{{ auth()->user()->email ?? '' }}">
                                </div>
                            </form>
                        </div>

                        <!-- RIGHT: Dokumen Pendukung -->
                        <div>
                            <div class="space-y-4">
                              <!-- Upload KTP -->
                              <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Upload KTP</label>
                                <div class="upload-box border-2 border-dashed border-gray-200 rounded-xl p-4 hover:border-red-300 transition-colors duration-200 cursor-pointer flex items-center gap-4" onclick="triggerFileForPassenger(0,'ktp')">
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
                                            class="relative inline-flex h-5 w-9 items-center rounded-full bg-gray-200 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
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

                <!-- Passenger Info -->
                <div class="mb-4 p-3 bg-gray-50 rounded-lg">
                    <div class="flex items-center">
                        <div class="bg-gradient-to-r from-[#FE0004] to-[#FE0004] text-white rounded px-2 py-1 text-sm font-medium mr-3"></div>
                        <div>
                            <div class="font-medium text-gray-800" id="modal-passenger-name">WILDAN ANWAR</div>
                            <div class="text-sm text-gray-600" id="modal-passenger-seat">Ekonomi / Kursi -</div>
                        </div>
                    </div>
                </div>

                <!-- Class Tabs -->
                <div class="flex mb-4 bg-gray-100 rounded-lg p-1">
                    <button class="car-tab flex-1 py-2 px-4 text-sm font-medium rounded-md bg-gradient-to-r from-[#FE0004] to-[#FE0004] text-white" data-class="ekonomi" onclick="switchClass('ekonomi')">
                        Ekonomi
                    </button>
                    <button class="car-tab flex-1 py-2 px-4 text-sm font-medium rounded-md text-gray-600" data-class="bisnis" onclick="switchClass('bisnis')">
                        Bisnis
                    </button>
                </div>

                <!-- Legend -->
                <div class="flex justify-center gap-4 mb-4 text-xs">
                    <div class="flex items-center gap-1">
                        <div class="w-4 h-4 bg-gray-200 rounded border"></div>
                        <span>Tersedia</span>
                    </div>
                    <div class="flex items-center gap-1">
                        <div class="w-4 h-4 bg-gray-400 rounded border"></div>
                        <span>Terisi</span>
                    </div>
                    <div class="flex items-center gap-1">
                        <div class="w-4 h-4 bg-gradient-to-r from-[#FE0004] to-[#FE0004] rounded border"></div>
                        <span>Dipilih</span>
                    </div>
                </div>

                <!-- Seat Map -->
                <div class="seat-map">
                    <!-- Column Headers -->
                    <div class="grid grid-cols-7 gap-2 mb-2 text-center text-sm font-medium text-gray-600">
                        <div></div>
                        <div>A</div>
                        <div>B</div>
                        <div>C</div>
                        <div></div>
                        <div>D</div>
                        <div>E</div>
                    </div>

                    <!-- Seat Rows -->
                    <div id="seat-grid" class="space-y-2">
                        <!-- Row 1 -->
                        <div class="grid grid-cols-7 gap-2 items-center">
                            <div class="text-sm font-medium text-gray-600 text-center">1</div>
                            <button class="seat-btn w-8 h-8 bg-gray-400 rounded border text-xs font-medium text-white" data-seat="1A" data-status="occupied"></button>
                            <button class="seat-btn w-8 h-8 bg-gray-400 rounded border text-xs font-medium text-white" data-seat="1B" data-status="occupied"></button>
                            <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="1C" data-status="available" onclick="selectSeat('1C')"></button>
                            <div class="w-8"></div>
                            <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="1D" data-status="available" onclick="selectSeat('1D')"></button>
                            <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="1E" data-status="available" onclick="selectSeat('1E')"></button>
                        </div>

                        <!-- Row 2 -->
                        <div class="grid grid-cols-7 gap-2 items-center">
                            <div class="text-sm font-medium text-gray-600 text-center">2</div>
                            <button class="seat-btn w-8 h-8 bg-gradient-to-r from-[#FE0004] to-[#FE0004] rounded border text-xs font-medium text-white" data-seat="2A" data-status="selected" onclick="selectSeat('2A')"></button>
                            <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="2B" data-status="available" onclick="selectSeat('2B')"></button>
                            <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="2C" data-status="available" onclick="selectSeat('2C')"></button>
                            <div class="w-8"></div>
                            <button class="seat-btn w-8 h-8 bg-gray-400 rounded border text-xs font-medium text-white" data-seat="2D" data-status="occupied"></button>
                            <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="2E" data-status="available" onclick="selectSeat('2E')"></button>
                        </div>

                        <!-- Row 3 -->
                        <div class="grid grid-cols-7 gap-2 items-center">
                            <div class="text-sm font-medium text-gray-600 text-center">3</div>
                            <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="3A" data-status="available" onclick="selectSeat('3A')"></button>
                            <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="3B" data-status="available" onclick="selectSeat('3B')"></button>
                            <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="3C" data-status="available" onclick="selectSeat('3C')"></button>
                            <div class="w-8"></div>
                            <button class="seat-btn w-8 h-8 bg-gray-400 rounded border text-xs font-medium text-white" data-seat="3D" data-status="occupied"></button>
                            <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="3E" data-status="available" onclick="selectSeat('3E')"></button>
                        </div>

                        <!-- Row 4 -->
                        <div class="grid grid-cols-7 gap-2 items-center">
                            <div class="text-sm font-medium text-gray-600 text-center">4</div>
                            <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="4A" data-status="available" onclick="selectSeat('4A')"></button>
                            <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="4B" data-status="available" onclick="selectSeat('4B')"></button>
                            <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="4C" data-status="available" onclick="selectSeat('4C')"></button>
                            <div class="w-8"></div>
                            <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="4D" data-status="available" onclick="selectSeat('4D')"></button>
                            <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="4E" data-status="available" onclick="selectSeat('4E')"></button>
                        </div>

                        <!-- Row 5 -->
                        <div class="grid grid-cols-7 gap-2 items-center">
                            <div class="text-sm font-medium text-gray-600 text-center">5</div>
                            <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="5A" data-status="available" onclick="selectSeat('5A')"></button>
                            <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="5B" data-status="available" onclick="selectSeat('5B')"></button>
                            <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="5C" data-status="available" onclick="selectSeat('5C')"></button>
                            <div class="w-8"></div>
                            <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="5D" data-status="available" onclick="selectSeat('5D')"></button>
                            <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="5E" data-status="available" onclick="selectSeat('5E')"></button>
                        </div>

                        <!-- Row 6 -->
                        <div class="grid grid-cols-7 gap-2 items-center">
                            <div class="text-sm font-medium text-gray-600 text-center">6</div>
                            <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="6A" data-status="available" onclick="selectSeat('6A')"></button>
                            <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="6B" data-status="available" onclick="selectSeat('6B')"></button>
                            <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="6C" data-status="available" onclick="selectSeat('6C')"></button>
                            <div class="w-8"></div>
                            <button class="seat-btn w-8 h-8 bg-gray-400 rounded border text-xs font-medium text-white" data-seat="6D" data-status="occupied"></button>
                            <button class="seat-btn w-8 h-8 bg-gray-200 rounded border text-xs font-medium text-gray-700 hover:bg-gray-300" data-seat="6E" data-status="available" onclick="selectSeat('6E')"></button>
                        </div>
                    </div>
                </div>

                <!-- Modal Actions -->
                <div class="flex gap-3 mt-6">
                    <button onclick="closeSeatModal()" class="flex-1 px-4 py-2 text-gray-600 border border-gray-300 rounded-lg hover:bg-gray-50">
                        Batal
                    </button>
                    <button onclick="saveSeatSelection()" class="flex-1 px-4 py-2 bg-gradient-to-r from-[#FE0004] to-[#FE0004] text-white rounded-lg hover:from-[#FE0004] hover:to-[#FE0004]">
                        Simpan
                    </button>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" id="checkout-submit"

                     class="w-full max-w-md bg-gradient-to-r from-[#FE0004] to-[#FE0004] text-white font-bold py-4 px-8 rounded-xl hover:from-[#FE0004] hover:to-[#FE0004] transition-all duration-200 transform hover:scale-105 shadow-lg mt-10 mb-10">

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
            <button id="confirm-cancel" class="w-full px-6 py-3 bg-gradient-to-r from-rede-50 to-red-100 text-[#FE0004] rounded-xl hover:from-red-100 hover:to-red-200 transition-all duration-200 font-medium">Tidak, Periksa Lagi</button>
            <button id="confirm-yes" class="w-full px-6 py-3 bg-gradient-to-r from-[#FE0004] to-[#FE0004] text-white rounded-xl hover:from-[#FE0004] hover:to-[#FE0004] transition-all duration-200 font-medium">Ya, Kirim Sekarang</button>
        </div>
    </div>
</div>

<!-- Overlay Modal -->
<div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden opacity-0 transition-opacity duration-300 ease-out">
    <div class="overlay-panel bg-white rounded-2xl p-8 max-w-md mx-4 text-center relative transform transition-all duration-300 ease-out translate-y-4 sm:translate-y-0 sm:scale-95 opacity-0">
        
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
        <h3 class="text-xl font-bold text-gray-800 mb-4">Mau lihat penerbangan lain?</h3>
        <p class="text-gray-600 mb-6">
            Kalau kamu kembali ke halaman sebelumnya, semua info yang diisi dan penerbangan yang dipilih akan hilang.
        </p>
        
        <!-- Actions -->
        <div class="flex flex-col space-y-3">
            <button onclick="viewOtherFlights()" 
                    class="w-full px-6 py-3 bg-gradient-to-r from-red-50 to-red-100 text-[#FE0004] rounded-xl hover:from-red-100 hover:to-red-200 transition-all duration-200 font-medium">
                Lihat Penerbangan Lain
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
// Global variables for flight checkout
let flightPassengerCount = 1;
let currentFlightPassengerIndex = 0;

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
    
    for (let i = 0; i < flightPassengerCount; i++) {
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
    if (flightPassengerCount >= 4) {
        alert('Maksimal 4 penumpang');
        return;
    }

    flightPassengerCount++;
    const container = document.getElementById('passengers-container');
    const template = document.getElementById('passenger-0');
    const newPassenger = template.cloneNode(true);
    
    // Update IDs and attributes
    newPassenger.id = `passenger-${flightPassengerCount - 1}`;
    newPassenger.dataset.index = flightPassengerCount - 1;
    
    // Update passenger title
    newPassenger.querySelector('h3').textContent = `Penumpang ${flightPassengerCount}`;
    
    // Update form elements
    const form = newPassenger.querySelector('.passenger-form');
    form.dataset.index = flightPassengerCount - 1;
    
    // Update input IDs and names
    const inputs = newPassenger.querySelectorAll('input, label');
    inputs.forEach(input => {
        if (input.tagName === 'LABEL') {
            const forAttr = input.getAttribute('for');
            if (forAttr) {
                input.setAttribute('for', forAttr.replace(/(-)\d+$/, `$1${flightPassengerCount - 1}`));
            }
        } else {
            const id = input.id;
            const name = input.name;
            if (id) input.id = id.replace('-0', `-${flightPassengerCount - 1}`);
            if (name) input.name = name;
            input.value = '';
            input.removeAttribute('value');
        }
    });
    
    // Show search bar for passengers 2-4
    const searchBar = newPassenger.querySelector('.passenger-search-bar');
    if (searchBar && flightPassengerCount > 1) {
        searchBar.classList.remove('hidden');
    }

    // Update file upload elements
    const uploadBoxes = newPassenger.querySelectorAll('.upload-box');
    uploadBoxes.forEach((box, index) => {
        const type = index === 0 ? 'ktp' : 'surat';
        box.onclick = () => triggerFileForPassenger(flightPassengerCount - 1, type);
    });

    // Update filename display elements
    const filenameElements = newPassenger.querySelectorAll('[id*="filename"]');
    filenameElements.forEach(el => {
        el.id = el.id.replace('-0', `-${flightPassengerCount - 1}`);
        el.textContent = 'Format: PDF (maks 5MB)';
    });

    // Update surat dinas toggle
    const suratToggle = newPassenger.querySelector('[id*="surat-toggle"]');
    if (suratToggle) {
        suratToggle.id = `surat-toggle-${flightPassengerCount - 1}`;
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
                initializeSuratDinasToggle(flightPassengerCount - 1, window.suratToggleStates);
            }
        }, 100);
    }

    // Update seat badge
    const seatBadge = newPassenger.querySelector('[id*="selected-seat-badge"]');
    seatBadge.id = `selected-seat-badge-${flightPassengerCount - 1}`;
    seatBadge.innerHTML = `Kursi: <strong class="text-gray-800">-</strong>`;

    // Update pilih kursi button
    const seatButton = newPassenger.querySelector('button[onclick*="openSeatModal"]');
    seatButton.onclick = () => openSeatModal(flightPassengerCount - 1);

    // Update remove button
    const removeBtn = newPassenger.querySelector('.remove-btn');
    removeBtn.classList.remove('hidden');
    removeBtn.onclick = () => removePassenger(flightPassengerCount - 1);

    container.appendChild(newPassenger);
    updateFlightPassengerCount();
    
    // Initialize search for new passenger
    const nameInput = newPassenger.querySelector(`#nama-${flightPassengerCount - 1}`);
    if (nameInput && flightPassengerCount > 1) {
        nameInput.placeholder = 'Ketik nama untuk mencari pengguna terdaftar...';
        createUserSearchDropdown(nameInput, flightPassengerCount - 1);
    }
}

function removePassenger(index) {
    if (flightPassengerCount <= 1) return;
    
    const passenger = document.getElementById(`passenger-${index}`);
    if (passenger) {
        passenger.remove();
        flightPassengerCount--;
        renumberFlightPassengers();
        updateFlightPassengerCount();
    }
}

function updateFlightPassengerCount() {
    const countElement = document.getElementById('passenger-count');
    if (countElement) {
        countElement.textContent = `${flightPassengerCount} / 4`;
    }
    
    const addBtn = document.getElementById('add-passenger-btn');
    if (addBtn) {
        addBtn.style.display = flightPassengerCount >= 4 ? 'none' : 'inline-flex';
    }
}

function renumberFlightPassengers() {
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
        
        // Update seat badge
        const seatBadge = passenger.querySelector('[id*="selected-seat-badge"]');
        if (seatBadge) {
            seatBadge.id = `selected-seat-badge-${index}`;
        }

        // Update pilih kursi button
        const seatButton = passenger.querySelector('button[onclick*="openSeatModal"]');
        if (seatButton) {
            seatButton.onclick = () => openSeatModal(index);
        }
        
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
    for (let i = 0; i < flightPassengerCount; i++) {
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

// Seat selection functions
let flightSelectedSeats = {};
let currentFlightClass = 'ekonomi';

function openSeatModal(passengerIndex) {
    currentFlightPassengerIndex = passengerIndex;
    const modal = document.getElementById('seat-modal');
    const dialog = document.getElementById('seat-dialog');
    const passengerName = document.getElementById(`nama-${passengerIndex}`).value || `Penumpang ${passengerIndex + 1}`;
    document.getElementById('modal-passenger-name').textContent = passengerName.toUpperCase();
    document.getElementById('modal-passenger-seat').textContent = `Ekonomi / Kursi -`;
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

function switchClass(className) {
    currentFlightClass = className;
    // Update tab appearance
    document.querySelectorAll('.car-tab').forEach(tab => {
        tab.classList.remove('bg-gradient-to-r');
        tab.classList.remove('from-[#FE0004]');
        tab.classList.remove('to-[#FE0004]');
        tab.classList.remove('text-white');
        tab.classList.add('text-gray-600');
    });
    const selectedTab = document.querySelector(`[data-class="${className}"]`);
    selectedTab.classList.add('bg-gradient-to-r');
    selectedTab.classList.add('from-[#FE0004]');
    selectedTab.classList.add('to-[#FE0004]');
    selectedTab.classList.add('text-white');
    selectedTab.classList.remove('text-gray-600');
    
    // Reset seat selection for new class
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
    seatBtn.className = 'seat-btn w-8 h-8 bg-gradient-to-r from-[#FE0004] to-[#FE0004] rounded border text-xs font-medium text-white';
    seatBtn.dataset.status = 'selected';
    seatBtn.textContent = '';
    
    flightSelectedSeats[currentFlightPassengerIndex] = {
        seat: seatId,
        class: currentFlightClass
    };
    
    // Update passenger info in modal dynamically
    updateModalPassengerInfo();
}

function updateModalPassengerInfo() {
    if (flightSelectedSeats[currentFlightPassengerIndex]) {
        const seatInfo = flightSelectedSeats[currentFlightPassengerIndex];
        const classDisplay = seatInfo.class.charAt(0).toUpperCase() + seatInfo.class.slice(1);
        const passengerInfoDiv = document.getElementById('modal-passenger-seat');
        if (passengerInfoDiv) {
            passengerInfoDiv.textContent = `${classDisplay} / Kursi ${seatInfo.seat}`;
        }
    } else {
        // Default display when no seat selected
        const passengerInfoDiv = document.getElementById('modal-passenger-seat');
        if (passengerInfoDiv) {
            passengerInfoDiv.textContent = `Ekonomi / Kursi -`;
        }
    }
}

function saveSeatSelection() {
    if (flightSelectedSeats[currentFlightPassengerIndex]) {
        const seatInfo = flightSelectedSeats[currentFlightPassengerIndex];
        const badge = document.getElementById(`selected-seat-badge-${currentFlightPassengerIndex}`);
        const classDisplay = seatInfo.class.charAt(0).toUpperCase() + seatInfo.class.slice(1);
        badge.innerHTML = `Kursi: <strong class="text-gray-800">${classDisplay} - ${seatInfo.seat}</strong>`;
    }
    closeSeatModal();
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
        window.location.href = '/checkout/checkout-pesawat';
    }
    
    function viewOtherFlights() {
        hideOverlay();
        showPageTransitionForNavigation('Mencari penerbangan lain...', '/pesanan/pesawat');
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
    
    // Page Transition Loading for Flight
    function showPageTransition() {
        const overlay = document.getElementById('page-transition-overlay');
        const loadingText = document.getElementById('loading-text');
        const progressBar = document.getElementById('loading-progress-bar');
        
        if (!overlay) return;
        
        overlay.classList.remove('hidden');
        
        // Flight-specific loading steps
        const steps = [
            { text: 'Memproses data penerbangan...', progress: 20, duration: 800 },
            { text: 'Memvalidasi kursi dan dokumen...', progress: 40, duration: 1000 },
            { text: 'Mengirim ke sistem maskapai...', progress: 60, duration: 1200 },
            { text: 'Membuat e-tiket penerbangan...', progress: 80, duration: 800 },
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
                    window.location.href = "{{ url('receipt/pesawatreceipt') }}";
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
                                if (index >= flightPassengerCount) {
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
            img.addEventListener('load', function() {
                this.classList.add('loaded');
            });
            if (img.complete) {
                img.classList.add('loaded');
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
