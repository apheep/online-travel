
    @include('partials.head')
    @section('title', 'Riwayat Pesanan - Online Travel')


<body class="relative bg-[F4F7FE] font-poppins min-h-screen">
    <!-- Background Section with Navigation -->
    <section class="relative bg-cover shadow-2xl" style="background-image: url(/background.png);">
        <div class="absolute inset-0 bg-black/30"></div>
        
        @include('partials.navigation')
        
        <!-- Header Section -->
        <div class="relative z-10 text-center text-white py-16 px-6">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FE0004] to-[#F6B101]">
                    Riwayat Pesanan
                </span>
            </h1>
            <p class="text-xl text-gray-200 max-w-2xl mx-auto">
                Pantau status perjalanan Anda dan lihat riwayat pemesanan
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-6 py-12">
        <!-- Filter Section -->
        <div class="bg-white rounded-2xl shadow-lg p-6 mb-8">
            <div class="flex flex-col md:flex-row gap-4 items-center justify-between">
                <div class="flex flex-col md:flex-row gap-4 w-full md:w-auto">
                    <!-- Custom Dropdown: Status -->
                    <div class="relative w-full md:w-56">
                        <input type="hidden" id="statusValue" value="">
                        <div id="statusDropdown" class="w-full p-3 bg-white border-2 border-gray-200 rounded-xl cursor-pointer hover:border-gray-300 transition duration-200 flex items-center justify-between" onclick="toggleFilterDropdown('status')">
                            <span id="statusSelected" class="text-gray-900 font-medium">Semua Status</span>
                            <svg id="statusArrow" class="w-5 h-5 text-gray-400 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                        <div id="statusOptions" class="absolute top-full left-0 right-0 mt-2 bg-white border border-gray-200 rounded-xl shadow-lg z-50 hidden overflow-hidden">
                            <div class="p-3 hover:bg-gray-50 cursor-pointer transition duration-150 border-b border-gray-100" onclick="selectFilterOption('status','','Semua Status')">
                                <div class="font-medium text-gray-900">Semua Status</div>
                            </div>
                            <div class="p-3 hover:bg-gray-50 cursor-pointer transition duration-150 border-b border-gray-100" onclick="selectFilterOption('status','pending','Dalam Proses')">
                                <div class="font-medium text-gray-900">Dalam Proses</div>
                            </div>
                            <div class="p-3 hover:bg-gray-50 cursor-pointer transition duration-150 border-b border-gray-100" onclick="selectFilterOption('status','confirmed','Dikonfirmasi')">
                                <div class="font-medium text-gray-900">Dikonfirmasi</div>
                            </div>
                            <div class="p-3 hover:bg-gray-50 cursor-pointer transition duration-150 border-b border-gray-100" onclick="selectFilterOption('status','completed','Selesai')">
                                <div class="font-medium text-gray-900">Selesai</div>
                            </div>
                            <div class="p-3 hover:bg-gray-50 cursor-pointer transition duration-150" onclick="selectFilterOption('status','cancelled','Dibatalkan')">
                                <div class="font-medium text-gray-900">Dibatalkan</div>
                            </div>
                        </div>
                    </div>

                    <!-- Custom Dropdown: Jenis -->
                    <div class="relative w-full md:w-56">
                        <input type="hidden" id="jenisValue" value="">
                        <div id="jenisDropdown" class="w-full p-3 bg-white border-2 border-gray-200 rounded-xl cursor-pointer hover:border-gray-300 transition duration-200 flex items-center justify-between" onclick="toggleFilterDropdown('jenis')">
                            <span id="jenisSelected" class="text-gray-900 font-medium">Semua Jenis</span>
                            <svg id="jenisArrow" class="w-5 h-5 text-gray-400 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                        <div id="jenisOptions" class="absolute top-full left-0 right-0 mt-2 bg-white border border-gray-200 rounded-xl shadow-lg z-50 hidden overflow-hidden">
                            <div class="p-3 hover:bg-gray-50 cursor-pointer transition duration-150 border-b border-gray-100" onclick="selectFilterOption('jenis','','Semua Jenis')">
                                <div class="font-medium text-gray-900">Semua Jenis</div>
                            </div>
                            <div class="p-3 hover:bg-gray-50 cursor-pointer transition duration-150 border-b border-gray-100" onclick="selectFilterOption('jenis','flight','Pesawat')">
                                <div class="font-medium text-gray-900">Pesawat</div>
                            </div>
                            <div class="p-3 hover:bg-gray-50 cursor-pointer transition duration-150 border-b border-gray-100" onclick="selectFilterOption('jenis','hotel','Hotel')">
                                <div class="font-medium text-gray-900">Hotel</div>
                            </div>
                            <div class="p-3 hover:bg-gray-50 cursor-pointer transition duration-150 border-b border-gray-100" onclick="selectFilterOption('jenis','train','Kereta')">
                                <div class="font-medium text-gray-900">Kereta</div>
                            </div>
                            <div class="p-3 hover:bg-gray-50 cursor-pointer transition duration-150" onclick="selectFilterOption('jenis','package','Paket Wisata')">
                                <div class="font-medium text-gray-900">Paket Wisata</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="flex gap-3">
                    <button type="button" onclick="openDateModal()" class="px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white flex items-center gap-2">
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3M5 11h14M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span id="selectedDate" class="text-gray-700">Pilih tanggal</span>
                        <span id="tripType" class="text-xs text-gray-500"></span>
                    </button>
                    <button class="px-6 py-3 bg-gradient-to-r from-[#FE0004] to-[#F6B101]  text-white font-semibold rounded-xl transition-all duration-300 transform hover:scale-105">
                        Filter
                    </button>
                </div>
            </div>
        </div>

        {{-- Calendar Modal Partial --}}
        @include('partials.calender')

        <!-- Back Button -->
        <div class="mb-6">
            <button onclick="history.back()" class="inline-flex items-center gap-2 px-4 py-2 text-[#FE0004] hover:text-white hover:bg-gradient-to-r  rounded-lg transition-all duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="font-medium">Back</span>
            </button>
        </div>

        <!-- Orders Table -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="px-6 py-4 bg-gradient-to-r from-gray-50 to-gray-100 border-b border-gray-200">
                <h2 class="text-xl font-bold text-gray-800">Daftar Pesanan</h2>
            </div>
            
            <!-- Desktop Table -->
            <div class="hidden md:block overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kode Booking</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Detail</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Sample Data - In Progress Order -->
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">TRV001234</div>
                                <div class="text-sm text-gray-500">12 Jan 2024</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                                        <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 2L3 7v11a2 2 0 002 2h10a2 2 0 002-2V7l-7-5z"/>
                                        </svg>
                                    </div>
                                    <span class="text-sm font-medium text-gray-900">Pesawat</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900 font-medium">Jakarta → Bali</div>
                                <div class="text-sm text-gray-500">Garuda Indonesia • GA-123</div>
                                <div class="text-sm text-gray-500">2 Penumpang</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">15 Jan 2024</div>
                                <div class="text-sm text-gray-500">08:30 WIB</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-bold text-gray-900">Rp 2.450.000</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                    <div class="w-2 h-2 bg-yellow-400 rounded-full mr-2 animate-pulse"></div>
                                    Dalam Proses
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button class="text-blue-600 hover:text-blue-900 mr-3">Detail</button>
                                <button class="text-red-600 hover:text-red-900">Batalkan</button>
                            </td>
                        </tr>

                        <!-- Sample Data - Successful Order -->
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">TRV001233</div>
                                <div class="text-sm text-gray-500">10 Jan 2024</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center mr-3">
                                        <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                                        </svg>
                                    </div>
                                    <span class="text-sm font-medium text-gray-900">Hotel</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900 font-medium">Grand Hyatt Bali</div>
                                <div class="text-sm text-gray-500">Deluxe Room • 3 Malam</div>
                                <div class="text-sm text-gray-500">2 Tamu</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">15-18 Jan 2024</div>
                                <div class="text-sm text-gray-500">Check-in 14:00</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-bold text-gray-900">Rp 4.500.000</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    <div class="w-2 h-2 bg-green-400 rounded-full mr-2"></div>
                                    Selesai
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button class="text-blue-600 hover:text-blue-900 mr-3">Detail</button>
                                <button class="text-emerald-600 hover:text-emerald-900">Unduh Tiket</button>
                            </td>
                        </tr>

                        <!-- Sample Data - Confirmed Order -->
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">TRV001232</div>
                                <div class="text-sm text-gray-500">08 Jan 2024</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mr-3">
                                        <svg class="w-4 h-4 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-sm font-medium text-gray-900">Kereta</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900 font-medium">Jakarta → Surabaya</div>
                                <div class="text-sm text-gray-500">Argo Bromo Anggrek • Eksekutif</div>
                                <div class="text-sm text-gray-500">1 Penumpang</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">20 Jan 2024</div>
                                <div class="text-sm text-gray-500">19:10 WIB</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-bold text-gray-900">Rp 450.000</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    <div class="w-2 h-2 bg-blue-400 rounded-full mr-2"></div>
                                    Dikonfirmasi
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button class="text-blue-600 hover:text-blue-900 mr-3">Detail</button>
                                <button class="text-emerald-600 hover:text-emerald-900">Unduh Tiket</button>
                            </td>
                        </tr>

                        <!-- Sample Data - Cancelled Order -->
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">TRV001231</div>
                                <div class="text-sm text-gray-500">05 Jan 2024</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mr-3">
                                        <svg class="w-4 h-4 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </div>
                                    <span class="text-sm font-medium text-gray-900">Paket Wisata</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900 font-medium">Paket Lombok 4D3N</div>
                                <div class="text-sm text-gray-500">Hotel + Transport + Tour</div>
                                <div class="text-sm text-gray-500">2 Orang</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">25-28 Jan 2024</div>
                                <div class="text-sm text-gray-500">4 Hari 3 Malam</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-bold text-gray-900">Rp 6.800.000</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                    <div class="w-2 h-2 bg-red-400 rounded-full mr-2"></div>
                                    Dibatalkan
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button class="text-blue-600 hover:text-blue-900 mr-3">Detail</button>
                                <button class="text-gray-400 cursor-not-allowed">Tidak Tersedia</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Mobile Cards -->
            <div class="md:hidden">
                <!-- Sample Mobile Card - In Progress -->
                <div class="p-6 border-b border-gray-200">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <div class="text-sm font-medium text-gray-900">TRV001234</div>
                            <div class="text-xs text-gray-500">12 Jan 2024</div>
                        </div>
                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                            <div class="w-1.5 h-1.5 bg-yellow-400 rounded-full mr-1 animate-pulse"></div>
                            Dalam Proses
                        </span>
                    </div>
                    
                    <div class="flex items-center mb-3">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                            <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 2L3 7v11a2 2 0 002 2h10a2 2 0 002-2V7l-7-5z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-sm font-medium text-gray-900">Jakarta → Bali</div>
                            <div class="text-xs text-gray-500">Garuda Indonesia • GA-123</div>
                        </div>
                    </div>
                    
                    <div class="flex justify-between items-center mb-4">
                        <div>
                            <div class="text-xs text-gray-500">Tanggal Keberangkatan</div>
                            <div class="text-sm text-gray-900">15 Jan 2024, 08:30</div>
                        </div>
                        <div class="text-right">
                            <div class="text-xs text-gray-500">Total</div>
                            <div class="text-sm font-bold text-gray-900">Rp 2.450.000</div>
                        </div>
                    </div>
                    
                    <div class="flex gap-2">
                        <button class="flex-1 px-3 py-2 bg-blue-50 text-blue-600 text-sm font-medium rounded-lg hover:bg-blue-100 transition-colors">
                            Detail
                        </button>
                        <button class="flex-1 px-3 py-2 bg-red-50 text-red-600 text-sm font-medium rounded-lg hover:bg-red-100 transition-colors">
                            Batalkan
                        </button>
                    </div>
                </div>

                <!-- Sample Mobile Card - Successful -->
                <div class="p-6 border-b border-gray-200">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <div class="text-sm font-medium text-gray-900">TRV001233</div>
                            <div class="text-xs text-gray-500">10 Jan 2024</div>
                        </div>
                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            <div class="w-1.5 h-1.5 bg-green-400 rounded-full mr-1"></div>
                            Selesai
                        </span>
                    </div>
                    
                    <div class="flex items-center mb-3">
                        <div class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center mr-3">
                            <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-sm font-medium text-gray-900">Grand Hyatt Bali</div>
                            <div class="text-xs text-gray-500">Deluxe Room • 3 Malam</div>
                        </div>
                    </div>
                    
                    <div class="flex justify-between items-center mb-4">
                        <div>
                            <div class="text-xs text-gray-500">Check-in</div>
                            <div class="text-sm text-gray-900">15 Jan 2024</div>
                        </div>
                        <div class="text-right">
                            <div class="text-xs text-gray-500">Total</div>
                            <div class="text-sm font-bold text-gray-900">Rp 4.500.000</div>
                        </div>
                    </div>
                    
                    <div class="flex gap-2">
                        <button class="flex-1 px-3 py-2 bg-blue-50 text-blue-600 text-sm font-medium rounded-lg hover:bg-blue-100 transition-colors">
                            Detail
                        </button>
                        <button class="flex-1 px-3 py-2 bg-emerald-50 text-emerald-600 text-sm font-medium rounded-lg hover:bg-emerald-100 transition-colors">
                            Unduh Tiket
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-8 flex items-center justify-between">
            <div class="text-sm text-gray-700">
                Menampilkan <span class="font-medium">1</span> sampai <span class="font-medium">4</span> dari <span class="font-medium">12</span> hasil
            </div>
            <div class="flex items-center space-x-2">
                <button class="px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed" disabled>
                    Sebelumnya
                </button>
                <button class="px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-[#FE0004] to-[#F6B101] rounded-lg">
                    1
                </button>
                <button class="px-3 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                    2
                </button>
                <button class="px-3 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                    3
                </button>
                <button class="px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                    Selanjutnya
                </button>
            </div>
        </div>

        <!-- Empty State (Hidden by default, show when no data) -->
        <div class="hidden bg-white rounded-2xl shadow-lg p-12 text-center">
            <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Belum Ada Pesanan</h3>
            <p class="text-gray-500 mb-6">Anda belum memiliki riwayat pesanan. Mulai jelajahi destinasi impian Anda!</p>
            <button class="px-6 py-3 bg-gradient-to-r from-blue-500 to-emerald-500 hover:from-blue-600 hover:to-emerald-600 text-white font-semibold rounded-xl transition-all duration-300 transform hover:scale-105">
                Mulai Pesan Sekarang
            </button>
        </div>
    </main>

    @include('partials.footer')

    <script>
        // Page load animation
        document.addEventListener('DOMContentLoaded', function() {
            document.body.classList.remove('opacity-0');
        });

        // Custom dropdown logic for filters
        function toggleFilterDropdown(which){
            const dropdown = document.getElementById(which + 'Options');
            const arrow = document.getElementById(which + 'Arrow');
            const isHidden = dropdown.classList.contains('hidden');
            // Close all first
            ['status','jenis'].forEach(function(key){
                const opt = document.getElementById(key + 'Options');
                const arr = document.getElementById(key + 'Arrow');
                if(opt){ opt.classList.add('hidden'); }
                if(arr){ arr.classList.remove('rotate-180'); }
            });
            if(isHidden){
                dropdown.classList.remove('hidden');
                arrow.classList.add('rotate-180');
            }
        }

        function selectFilterOption(which, value, label){
            // set hidden value
            const hidden = document.getElementById(which + 'Value');
            if(hidden){ hidden.value = value; }
            // set label
            const selected = document.getElementById(which + 'Selected');
            if(selected){ selected.textContent = label; }
            // close dropdown
            const dropdown = document.getElementById(which + 'Options');
            const arrow = document.getElementById(which + 'Arrow');
            if(dropdown){ dropdown.classList.add('hidden'); }
            if(arrow){ arrow.classList.remove('rotate-180'); }
            // emit payload
            const payload = {
                status: (document.getElementById('statusValue')||{}).value || '',
                jenis: (document.getElementById('jenisValue')||{}).value || ''
            };
            console.log('Filters changed:', payload);
        }

        // Close on outside click
        document.addEventListener('click', function(e){
            const targets = ['status','jenis'];
            const clickedInside = targets.some(function(key){
                const box = document.getElementById(key + 'Dropdown');
                const opts = document.getElementById(key + 'Options');
                return (box && box.contains(e.target)) || (opts && opts.contains(e.target));
            });
            if(!clickedInside){
                targets.forEach(function(key){
                    const opt = document.getElementById(key + 'Options');
                    const arr = document.getElementById(key + 'Arrow');
                    if(opt){ opt.classList.add('hidden'); }
                    if(arr){ arr.classList.remove('rotate-180'); }
                });
            }
        });

        // Smooth scroll for mobile
        if (window.innerWidth < 768) {
            document.querySelector('main').style.paddingTop = '2rem';
        }
    </script>
</body>
</html>