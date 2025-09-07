@include('partials.head')

@section('title', 'Hotel Search - Online Travel')

@include('partials.navigation')

<body class="bg-gray-50 font-poppins">
    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-8">
        <!-- Hotel Search Bar -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4 sm:p-6 mb-6 sm:mb-8">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between space-y-4 sm:space-y-0">
                <!-- Search Info -->
                <div class="flex flex-col sm:flex-row sm:items-center space-y-3 sm:space-y-0 sm:space-x-4 text-sm sm:text-base">
              
                    <!-- Search Icon -->
                    <div class="text-gray-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>

                    <!-- Location Info -->
                    <div class="flex items-center space-x-2 cursor-pointer hover:bg-gray-50 p-2 rounded-lg transition-all duration-300 transform hover:scale-105 active:scale-95" onclick="openLocationModal()">
                        <span class="text-gray-900 font-medium" id="hotelLocation">Jakarta</span>
                        <svg class="w-4 h-4 text-gray-400 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>

                    <!-- Check-in Date -->
                    <div class="flex items-center space-x-2 cursor-pointer hover:bg-gray-50 p-2 rounded-lg transition-all duration-300 transform hover:scale-105 active:scale-95" onclick="openCheckinModal()">
                        <span class="text-gray-600 whitespace-nowrap" id="checkinDate">Check-in: -</span>
                        <svg class="w-4 h-4 text-gray-400 ml-1 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>

                    <!-- Check-out Date -->
                    <div class="flex items-center space-x-2 cursor-pointer hover:bg-gray-50 p-2 rounded-lg transition-all duration-300 transform hover:scale-105 active:scale-95" onclick="openCheckoutModal()">
                        <span class="text-gray-600 whitespace-nowrap" id="checkoutDate">Check-out: -</span>
                        <svg class="w-4 h-4 text-gray-400 ml-1 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>

                    <!-- Guests & Rooms Info -->
                    <div class="flex items-center space-x-2 cursor-pointer hover:bg-gray-50 p-2 rounded-lg transition-all duration-300 transform hover:scale-105 active:scale-95" onclick="openGuestModal()">
                        <span class="text-gray-600 whitespace-nowrap" id="guestCount">2 Tamu</span>
                        <span class="text-gray-400 text-sm whitespace-nowrap" id="roomCount">(1 Kamar)</span>
                        <svg class="w-4 h-4 text-gray-400 ml-1 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </div>

                <!-- Search Button -->
                <div class="sm:ml-auto">
                    <button onclick="searchHotels()" class="w-full sm:w-auto bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white px-6 py-2 rounded-lg font-medium transition-all duration-300 transform hover:scale-105 hover:shadow-lg active:scale-95 text-sm sm:text-base">
                        <span class="flex items-center justify-center space-x-2">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <span>Cari Hotel</span>
                        </span>
                    </button>
                </div>
          </div>
        </div>

        <!-- Location Modal -->
        <div id="locationModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4 transition-all duration-300">
            <div class="bg-white rounded-2xl shadow-xl w-full max-w-md max-h-[85vh] flex flex-col transform transition-all duration-300 scale-95 opacity-0" id="locationModalContent">
                <!-- Sticky Header -->
                <div class="p-6 border-b border-gray-200 rounded-t-2xl bg-white sticky top-0 z-10">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">Pilih Destinasi</h3>
                            <p class="text-gray-500 text-sm">Cari hotel di kota tujuan Anda</p>
                        </div>
                        <button onclick="closeLocationModal()" class="text-gray-400 hover:text-gray-600 transition-all duration-200 p-2 hover:bg-gray-100 rounded-full transform hover:scale-110 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Scrollable Content -->
                <div class="flex-1 overflow-y-auto p-6">
                    <!-- Search Input -->
                    <div class="mb-6 relative">
                        <div class="relative">
                            <input 
                                type="text" 
                                id="locationSearchInput" 
                                placeholder="Masukkan nama kota atau hotel" 
                                class="w-full p-3 pl-10 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 focus:outline-none"
                                oninput="searchLocations()" 
                                onkeydown="handleLocationKeydown(event)"
                            >
                            <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <!-- Search Suggestions Dropdown -->
                        <div id="locationSuggestions" class="absolute top-full left-0 right-0 bg-white border border-gray-200 rounded-lg shadow-lg z-10 hidden max-h-48 overflow-y-auto mt-1">
                            <!-- Suggestions will be populated by JavaScript -->
                        </div>
                    </div>
                    
                    <!-- Recent Searches -->
                    <div class="mb-6 hidden" id="recentSearchesSection">
                        <div class="flex items-center justify-between mb-3">
                            <h4 class="text-sm font-semibold text-gray-900 flex items-center">
                                <svg class="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Pencarian Terakhir
                            </h4>
                            <button 
                                onclick="clearRecentSearches()" 
                                class="text-xs text-blue-600 hover:text-blue-700 font-medium transition-colors duration-200 focus:outline-none"
                            >
                                Hapus Semua
                            </button>
                        </div>
                        <div class="space-y-2" id="recentSearchesList">
                            <!-- Recent searches will be populated here -->
                        </div>
                    </div>
                    
                    <!-- Popular Destinations -->
                    <div class="mb-6">
                        <h4 class="text-sm font-semibold text-gray-900 mb-3 flex items-center">
                            <svg class="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            Destinasi Populer
                        </h4>
                        <div class="grid grid-cols-2 gap-3">
                            <button 
                                onclick="selectLocation('Jakarta')" 
                                class="p-4 border-2 border-gray-200 rounded-xl hover:border-blue-300 hover:bg-blue-50 transition-all duration-200 text-left group transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                            >
                                <div class="text-sm font-medium text-gray-900 group-hover:text-blue-700">Jakarta</div>
                                <div class="text-xs text-gray-500 group-hover:text-blue-600 mt-1">1,234 hotel</div>
                            </button>
                            <button 
                                onclick="selectLocation('Bali')" 
                                class="p-4 border-2 border-gray-200 rounded-xl hover:border-blue-300 hover:bg-blue-50 transition-all duration-200 text-left group transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                            >
                                <div class="text-sm font-medium text-gray-900 group-hover:text-blue-700">Bali</div>
                                <div class="text-xs text-gray-500 group-hover:text-blue-600 mt-1">2,156 hotel</div>
                            </button>
                            <button 
                                onclick="selectLocation('Yogyakarta')" 
                                class="p-4 border-2 border-gray-200 rounded-xl hover:border-blue-300 hover:bg-blue-50 transition-all duration-200 text-left group transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                            >
                                <div class="text-sm font-medium text-gray-900 group-hover:text-blue-700">Yogyakarta</div>
                                <div class="text-xs text-gray-500 group-hover:text-blue-600 mt-1">567 hotel</div>
                            </button>
                            <button 
                                onclick="selectLocation('Surabaya')" 
                                class="p-4 border-2 border-gray-200 rounded-xl hover:border-blue-300 hover:bg-blue-50 transition-all duration-200 text-left group transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                            >
                                <div class="text-sm font-medium text-gray-900 group-hover:text-blue-700">Surabaya</div>
                                <div class="text-xs text-gray-500 group-hover:text-blue-600 mt-1">789 hotel</div>
                            </button>
                            <button 
                                onclick="selectLocation('Bandung')" 
                                class="p-4 border-2 border-gray-200 rounded-xl hover:border-blue-300 hover:bg-blue-50 transition-all duration-200 text-left group transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                            >
                                <div class="text-sm font-medium text-gray-900 group-hover:text-blue-700">Bandung</div>
                                <div class="text-xs text-gray-500 group-hover:text-blue-600 mt-1">456 hotel</div>
                            </button>
                            <button 
                                onclick="selectLocation('Semarang')" 
                                class="p-4 border-2 border-gray-200 rounded-xl hover:border-blue-300 hover:bg-blue-50 transition-all duration-200 text-left group transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                            >
                                <div class="text-sm font-medium text-gray-900 group-hover:text-blue-700">Semarang</div>
                                <div class="text-xs text-gray-500 group-hover:text-blue-600 mt-1">234 hotel</div>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Sticky Footer -->
                <div class="p-6 border-t border-gray-200 bg-white rounded-b-2xl sticky bottom-0 z-10">
                    <div class="flex space-x-3">
                        <button onclick="closeLocationModal()" class="flex-1 px-4 py-3 border-2 border-gray-300 rounded-xl text-gray-700 hover:bg-gray-50 transition-all duration-200 font-medium transform hover:scale-105">Batal</button>
                        <button onclick="saveLocation()" class="flex-1 px-4 py-3 text-white rounded-xl font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:scale-105" style="background: linear-gradient(135deg, #187499 0%, #36AE7E 100%);">Simpan</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Guest & Room Modal -->
        <div id="guestModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4 transition-all duration-300">
            <div class="bg-white rounded-2xl shadow-xl w-full max-w-sm max-h-[70vh] flex flex-col transform transition-all duration-300 scale-95 opacity-0" id="guestModalContent">
                <!-- Sticky Header -->
                <div class="p-6 border-b border-gray-200 rounded-t-2xl bg-white">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">Tamu & Kamar</h3>
                            <p class="text-gray-500 text-sm">Tentukan jumlah tamu dan kamar</p>
                        </div>
                        <button onclick="closeGuestModal()" class="text-gray-400 hover:text-gray-600 transition-all duration-200 p-2 hover:bg-gray-100 rounded-full transform hover:scale-110">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Scrollable Content -->
                <div class="flex-1 overflow-y-auto p-6">
                    
                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3 flex items-center">
                                <svg class="w-4 h-4 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                Jumlah Tamu
                            </label>
                            <div class="flex items-center justify-center space-x-6">
                                <button onclick="changeGuestCount(-1)" class="w-10 h-10 rounded-full border-2 border-gray-300 flex items-center justify-center hover:bg-teal-50 hover:border-teal-400 transition-all duration-200 text-gray-600 font-bold text-lg transform hover:scale-110 active:scale-95">-</button>
                                <div class="text-center">
                                    <span id="guestCountDisplay" class="text-2xl font-bold text-gray-900">2</span>
                                    <p class="text-xs text-gray-500 mt-1">Tamu</p>
                                </div>
                                <button onclick="changeGuestCount(1)" class="w-10 h-10 rounded-full border-2 border-gray-300 flex items-center justify-center hover:bg-teal-50 hover:border-teal-400 transition-all duration-200 text-gray-600 font-bold text-lg transform hover:scale-110 active:scale-95">+</button>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3 flex items-center">
                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                                Jumlah Kamar
                            </label>
                            <div class="flex items-center justify-center space-x-6">
                                <button onclick="changeRoomCount(-1)" class="w-10 h-10 rounded-full border-2 border-gray-300 flex items-center justify-center hover:bg-green-50 hover:border-green-400 transition-all duration-200 text-gray-600 font-bold text-lg transform hover:scale-110 active:scale-95">-</button>
                                <div class="text-center">
                                    <span id="roomCountDisplay" class="text-2xl font-bold text-gray-900">1</span>
                                    <p class="text-xs text-gray-500 mt-1">Kamar</p>
                                </div>
                                <button onclick="changeRoomCount(1)" class="w-10 h-10 rounded-full border-2 border-gray-300 flex items-center justify-center hover:bg-green-50 hover:border-green-400 transition-all duration-200 text-gray-600 font-bold text-lg transform hover:scale-110 active:scale-95">+</button>
                            </div>
                        </div>
                        
                        <!-- Quick Options -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">Pilihan Cepat</label>
                            <div class="grid grid-cols-2 gap-2">
                                <button onclick="setGuestRoom(1, 1)" class="p-3 border-2 border-gray-200 rounded-lg transition-all duration-200 text-center group transform hover:scale-105" data-guest-room="1-1">
                                    <div class="text-sm font-medium text-gray-900">Solo</div>
                                    <div class="text-xs text-gray-500">1 tamu, 1 kamar</div>
                                </button>
                                <button onclick="setGuestRoom(2, 1)" class="p-3 border-2 border-gray-200 rounded-lg transition-all duration-200 text-center group transform hover:scale-105" data-guest-room="2-1">
                                    <div class="text-sm font-medium text-gray-900">Couple</div>
                                    <div class="text-xs text-gray-500">2 tamu, 1 kamar</div>
                                </button>
                                <button onclick="setGuestRoom(4, 2)" class="p-3 border-2 border-gray-200 rounded-lg transition-all duration-200 text-center group transform hover:scale-105" data-guest-room="4-2">
                                    <div class="text-sm font-medium text-gray-900">Family</div>
                                    <div class="text-xs text-gray-500">4 tamu, 2 kamar</div>
                                </button>
                                <button onclick="setGuestRoom(6, 3)" class="p-3 border-2 border-gray-200 rounded-lg transition-all duration-200 text-center group transform hover:scale-105" data-guest-room="6-3">
                                    <div class="text-sm font-medium text-gray-900">Group</div>
                                    <div class="text-xs text-gray-500">6 tamu, 3 kamar</div>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <!-- Sticky Footer -->
                <div class="p-6 border-t border-gray-200 bg-white rounded-b-2xl">
                    <div class="flex space-x-3">
                        <button onclick="closeGuestModal()" class="flex-1 px-4 py-3 border-2 border-gray-300 rounded-xl text-gray-700 hover:bg-gray-50 transition-all duration-200 font-medium transform hover:scale-105">Batal</button>
                        <button onclick="saveGuest()" class="flex-1 px-4 py-3 text-white rounded-xl font-medium transition-all duration-200 shadow-lg hover:shadow-xl transform hover:scale-105 bg-gradient-to-r from-[#187499] to-[#36AE7E]">Simpan</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Check-in Date Modal -->
        <div id="checkinModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4 transition-all duration-300">
            <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md max-h-[80vh] flex flex-col transform transition-all duration-300 scale-95 opacity-0" id="checkinModalContent">
                <!-- Sticky Header -->
                <div class="p-6 border-b border-gray-200 rounded-t-2xl bg-white">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-1">Pilih Tanggal Check-in</h3>
                            <p class="text-gray-500">Kapan Anda akan mulai menginap?</p>
                        </div>
                        <button onclick="closeCheckinModal()" class="text-gray-400 hover:text-gray-600 transition duration-200 p-2 hover:bg-gray-100 rounded-full">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Scrollable Content -->
                <div class="flex-1 overflow-y-auto p-6">
                    
                    <!-- Quick Date Options -->
                    <div class="mb-6">
                        <h4 class="text-sm font-semibold text-gray-700 mb-3">Pilihan Cepat</h4>
                        <div class="grid grid-cols-2 gap-3">
                            <button onclick="selectQuickCheckin('today')" class="p-3 border-2 border-gray-200 rounded-xl transition-all duration-200 text-left group" data-checkin-option="today">
                                <div class="text-sm font-medium text-gray-900">Hari Ini</div>
                                <div class="text-xs text-gray-500" id="todayDate">1 Sep 2025</div>
                            </button>
                            <button onclick="selectQuickCheckin('tomorrow')" class="p-3 border-2 border-gray-200 rounded-xl transition-all duration-200 text-left group" data-checkin-option="tomorrow">
                                <div class="text-sm font-medium text-gray-900 group-hover:text-teal-700">Besok</div>
                                <div class="text-xs text-gray-500 group-hover:text-teal-600" id="tomorrowDate">2 Sep 2025</div>
                            </button>
                            <button onclick="selectQuickCheckin('weekend')" class="p-3 border-2 border-gray-200 rounded-xl transition-all duration-200 text-left group" data-checkin-option="weekend">
                                <div class="text-sm font-medium text-gray-900">Akhir Pekan</div>
                                <div class="text-xs text-gray-500" id="weekendDate">6 Sep 2025</div>
                            </button>
                            <button onclick="selectQuickCheckin('nextweek')" class="p-3 border-2 border-gray-200 rounded-xl transition-all duration-200 text-left group" data-checkin-option="nextweek">
                                <div class="text-sm font-medium text-gray-900">Minggu Depan</div>
                                <div class="text-xs text-gray-500" id="nextweekDate">8 Sep 2025</div>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Calendar -->
                    <div class="mb-6">
                        <div class="flex justify-between items-center mb-4">
                            <button onclick="previousMonthCheckin()" class="p-2 hover:bg-gray-100 rounded-full transition-all duration-200 transform hover:scale-110">
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                </svg>
                            </button>
                            <h4 class="text-lg font-bold text-gray-900" id="checkinCurrentMonth">September 2025</h4>
                            <button onclick="nextMonthCheckin()" class="p-2 hover:bg-gray-100 rounded-full transition-all duration-200 transform hover:scale-110">
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </button>
                        </div>
                        
                        <!-- Day Headers -->
                        <div class="grid grid-cols-7 gap-1 mb-2">
                            <div class="text-center text-sm font-medium text-gray-500 py-2">Sen</div>
                            <div class="text-center text-sm font-medium text-gray-500 py-2">Sel</div>
                            <div class="text-center text-sm font-medium text-gray-500 py-2">Rab</div>
                            <div class="text-center text-sm font-medium text-gray-500 py-2">Kam</div>
                            <div class="text-center text-sm font-medium text-gray-500 py-2">Jum</div>
                            <div class="text-center text-sm font-medium text-gray-500 py-2">Sab</div>
                            <div class="text-center text-sm font-medium text-gray-500 py-2">Min</div>
                        </div>
                        
                        <!-- Calendar Days -->
                        <div id="checkinCalendarDays" class="grid grid-cols-7 gap-1">
                            <!-- Days will be generated by JavaScript -->
                        </div>
                    </div>
                    
                    <!-- Selected Date Display -->
                    <div class="mb-6 p-4 bg-gradient-to-r from-blue-50 to-green-50 rounded-xl border border-blue-200">
                        <div class="flex items-center justify-between">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Tanggal Check-in Terpilih</label>
                                <div id="selectedCheckinDisplay" class="text-lg font-bold text-gray-900">Belum dipilih</div>
                            </div>
                            <div class="text-blue-500">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <!-- Sticky Footer -->
                <div class="p-6 border-t border-gray-200 bg-white rounded-b-2xl">
                    <div class="flex space-x-3">
                        <button onclick="closeCheckinModal()" class="flex-1 px-6 py-3 border-2 border-gray-300 rounded-xl text-gray-700 hover:bg-gray-50 transition-all duration-200 font-semibold transform hover:scale-105">
                            Batal
                        </button>
                        <button onclick="saveCheckinDate()" class="flex-1 px-6 py-3 text-white rounded-xl font-semibold transition-all duration-200 shadow-lg hover:shadow-xl transform hover:scale-105 bg-gradient-to-r from-[#187499] to-[#36AE7E]">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Check-out Date Modal -->
        <div id="checkoutModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4 transition-all duration-300">
            <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md max-h-[80vh] flex flex-col transform transition-all duration-300 scale-95 opacity-0" id="checkoutModalContent">
                <!-- Sticky Header -->
                <div class="p-6 border-b border-gray-200 rounded-t-2xl bg-white">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-1">Pilih Tanggal Check-out</h3>
                            <p class="text-gray-500">Kapan Anda akan selesai menginap?</p>
                        </div>
                        <button onclick="closeCheckoutModal()" class="text-gray-400 hover:text-gray-600 transition duration-200 p-2 hover:bg-gray-100 rounded-full">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Scrollable Content -->
                <div class="flex-1 overflow-y-auto p-6">
                    
                    <!-- Duration Options -->
                    <div class="mb-6">
                        <h4 class="text-sm font-semibold text-gray-700 mb-3">Durasi Menginap</h4>
                        <div class="grid grid-cols-4 gap-2">
                            <button onclick="selectDuration(1)" class="p-3 border-2 border-gray-200 rounded-xl transition-all duration-200 text-center group" data-duration="1">
                                <div class="text-lg font-bold text-gray-900">1</div>
                                <div class="text-xs text-gray-500">Malam</div>
                            </button>
                            <button onclick="selectDuration(2)" class="p-3 border-2 border-gray-200 rounded-xl transition-all duration-200 text-center group" data-duration="2">
                                <div class="text-lg font-bold text-gray-900 group-hover:text-green-700">2</div>
                                <div class="text-xs text-gray-500 group-hover:text-green-600">Malam</div>
                            </button>
                            <button onclick="selectDuration(3)" class="p-3 border-2 border-gray-200 rounded-xl transition-all duration-200 text-center group" data-duration="3">
                                <div class="text-lg font-bold text-gray-900">3</div>
                                <div class="text-xs text-gray-500">Malam</div>
                            </button>
                            <button onclick="selectDuration(7)" class="p-3 border-2 border-gray-200 rounded-xl transition-all duration-200 text-center group" data-duration="7">
                                <div class="text-lg font-bold text-gray-900">7</div>
                                <div class="text-xs text-gray-500">Malam</div>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Calendar -->
                    <div class="mb-6">
                        <div class="flex justify-between items-center mb-4">
                            <button onclick="previousMonthCheckout()" class="p-2 hover:bg-gray-100 rounded-full transition-all duration-200 transform hover:scale-110">
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                </svg>
                            </button>
                            <h4 class="text-lg font-bold text-gray-900" id="checkoutCurrentMonth">September 2025</h4>
                            <button onclick="nextMonthCheckout()" class="p-2 hover:bg-gray-100 rounded-full transition-all duration-200 transform hover:scale-110">
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </button>
                        </div>
                        
                        <!-- Day Headers -->
                        <div class="grid grid-cols-7 gap-1 mb-2">
                            <div class="text-center text-sm font-medium text-gray-500 py-2">Sen</div>
                            <div class="text-center text-sm font-medium text-gray-500 py-2">Sel</div>
                            <div class="text-center text-sm font-medium text-gray-500 py-2">Rab</div>
                            <div class="text-center text-sm font-medium text-gray-500 py-2">Kam</div>
                            <div class="text-center text-sm font-medium text-gray-500 py-2">Jum</div>
                            <div class="text-center text-sm font-medium text-gray-500 py-2">Sab</div>
                            <div class="text-center text-sm font-medium text-gray-500 py-2">Min</div>
                        </div>
                        
                        <!-- Calendar Days -->
                        <div id="checkoutCalendarDays" class="grid grid-cols-7 gap-1">
                            <!-- Days will be generated by JavaScript -->
                        </div>
                    </div>
                    
                    <!-- Selected Date Display -->
                    <div class="mb-6 p-4 bg-gradient-to-r from-green-50 to-blue-50 rounded-xl border border-green-200">
                        <div class="flex items-center justify-between">
                            <div class="flex-1">
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Tanggal Check-out Terpilih</label>
                                <div id="selectedCheckoutDisplay" class="text-lg font-bold text-gray-900">Belum dipilih</div>
                                <div id="stayDurationDisplay" class="text-sm text-gray-600 mt-1">Durasi: -</div>
                            </div>
                            <div class="text-green-500">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <!-- Sticky Footer -->
                <div class="p-6 border-t border-gray-200 bg-white rounded-b-2xl">
                    <div class="flex space-x-3">
                        <button onclick="closeCheckoutModal()" class="flex-1 px-6 py-3 border-2 border-gray-300 rounded-xl text-gray-700 hover:bg-gray-50 transition-all duration-200 font-semibold transform hover:scale-105">
                            Batal
                        </button>
                        <button onclick="saveCheckoutDate()" class="flex-1 px-6 py-3 text-white rounded-xl font-semibold transition-all duration-200 shadow-lg hover:shadow-xl transform hover:scale-105 bg-gradient-to-r from-[#187499] to-[#36AE7E]">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hotel Results Section -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 mb-8">
            <!-- Filters Sidebar -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 sticky top-4">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Filter</h3>
                    
                    <!-- Price Range -->
                    <div class="mb-6">
                        <h4 class="text-sm font-semibold text-gray-700 mb-3">Harga per Malam</h4>
                        <div class="px-2">
                            <!-- Price Range Slider -->
                            <div class="relative mb-4">
                                <input type="range" id="priceRangeMin" min="0" max="20000000" value="0" step="100000" 
                                       class="absolute w-full h-2 bg-transparent rounded-lg appearance-none cursor-pointer slider-thumb z-[1]"
                                       oninput="updatePriceRange()">
                                <input type="range" id="priceRangeMax" min="0" max="20000000" value="16000000" step="100000" 
                                       class="absolute w-full h-2 bg-transparent rounded-lg appearance-none cursor-pointer slider-thumb z-[2]"
                                       oninput="updatePriceRange()">
                                <div class="relative h-2 bg-gray-200 rounded-lg">
                                    <div id="priceRangeTrack" class="absolute h-2 rounded-lg bg-gradient-to-r from-[#187499] to-[#36ae7e] left-[0%] right-[20%]"></div>
                                </div>
                            </div>
                            
                            <!-- Price Display -->
                            <div class="flex justify-between items-center text-sm">
                                <div class="bg-gray-100 px-3 py-2 rounded-lg">
                                    <span class="text-gray-600">IDR</span>
                                    <span id="minPriceDisplay" class="font-semibold text-gray-900">0</span>
                                </div>
                                <div class="bg-gray-100 px-3 py-2 rounded-lg">
                                    <span class="text-gray-600">IDR</span>
                                    <span id="maxPriceDisplay" class="font-semibold text-gray-900">16.000.000</span>
                                </div>
                            </div>
                            
                            <!-- Apply Price Filter Button -->
                            <div class="mt-3">
                                <button onclick="applyPriceFilter()" class="w-full bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white text-sm py-2 px-4 rounded-lg hover:bg-teal-700 transition-colors duration-200">
                                    Terapkan Harga
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Star Rating -->
                    <div class="mb-6">
                        <h4 class="text-sm font-semibold text-gray-700 mb-3">Rating Bintang</h4>
                        <div class="space-y-2">
                            <label class="flex items-center cursor-pointer group">
                                <input type="checkbox" class="rounded border-gray-300 text-teal-600 focus:ring-teal-500" onchange="toggleStarFilter(5)">
                                <span class="ml-3 text-sm text-gray-600 flex items-center group-hover:text-gray-800 transition-colors duration-200">
                                    <div class="flex items-center mr-2">
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    </div>
                                    5 Bintang
                                </span>
                            </label>
                            <label class="flex items-center cursor-pointer group">
                                <input type="checkbox" class="rounded border-gray-300 text-teal-600 focus:ring-teal-500" onchange="toggleStarFilter(4)">
                                <span class="ml-3 text-sm text-gray-600 flex items-center group-hover:text-gray-800 transition-colors duration-200">
                                    <div class="flex items-center mr-2">
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                        <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    </div>
                                    4 Bintang ke atas
                                </span>
                            </label>
                            <label class="flex items-center cursor-pointer group">
                                <input type="checkbox" class="rounded border-gray-300 text-teal-600 focus:ring-teal-500" onchange="toggleStarFilter(3)">
                                <span class="ml-3 text-sm text-gray-600 flex items-center group-hover:text-gray-800 transition-colors duration-200">
                                    <div class="flex items-center mr-2">
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                        <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                        <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    </div>
                                    3 Bintang ke atas
                                </span>
                            </label>
                            <label class="flex items-center cursor-pointer group">
                                <input type="checkbox" class="rounded border-gray-300 text-teal-600 focus:ring-teal-500" onchange="toggleStarFilter(2)">
                                <span class="ml-3 text-sm text-gray-600 flex items-center group-hover:text-gray-800 transition-colors duration-200">
                                    <div class="flex items-center mr-2">
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                        <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                        <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                        <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    </div>
                                    2 Bintang ke atas
                                </span>
                            </label>
                            <label class="flex items-center cursor-pointer group">
                                <input type="checkbox" class="rounded border-gray-300 text-teal-600 focus:ring-teal-500" onchange="toggleStarFilter(1)">
                                <span class="ml-3 text-sm text-gray-600 flex items-center group-hover:text-gray-800 transition-colors duration-200">
                                    <div class="flex items-center mr-2">
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                        <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                        <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                        <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                        <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    </div>
                                    1 Bintang ke atas
                                </span>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Facilities -->
                    <div class="mb-6">
                        <h4 class="text-sm font-semibold text-gray-700 mb-3">Fasilitas</h4>
                        <div class="space-y-2">
                            <label class="flex items-center cursor-pointer group">
                                <input type="checkbox" class="rounded border-gray-300 text-teal-600 focus:ring-teal-500" onchange="toggleFacilityFilter('Wi-Fi Gratis')">
                                <span class="ml-2 text-sm text-gray-600">Wi-Fi Gratis</span>
                            </label>
                            <label class="flex items-center cursor-pointer group">
                                <input type="checkbox" class="rounded border-gray-300 text-teal-600 focus:ring-teal-500" onchange="toggleFacilityFilter('Kolam Renang')">
                                <span class="ml-2 text-sm text-gray-600">Kolam Renang</span>
                            </label>
                            <label class="flex items-center cursor-pointer group">
                                <input type="checkbox" class="rounded border-gray-300 text-teal-600 focus:ring-teal-500" onchange="toggleFacilityFilter('Sarapan Gratis')">
                                <span class="ml-2 text-sm text-gray-600">Sarapan Gratis</span>
                            </label>
                            <label class="flex items-center cursor-pointer group">
                                <input type="checkbox" class="rounded border-gray-300 text-teal-600 focus:ring-teal-500" onchange="toggleFacilityFilter('Parkir Gratis')">
                                <span class="ml-2 text-sm text-gray-600">Parkir Gratis</span>
                            </label>
                            <label class="flex items-center cursor-pointer group">
                                <input type="checkbox" class="rounded border-gray-300 text-teal-600 focus:ring-teal-500" onchange="toggleFacilityFilter('Gym')">
                                <span class="ml-2 text-sm text-gray-600">Gym</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Hotel Results --> 
            <div class="lg:col-span-3">
                <div class="space-y-4">
                    <!-- Hotel Card 1 -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow duration-300">
                        <div class="flex flex-col md:flex-row gap-4">
                            <div class="md:w-48 h-32 bg-gray-200 rounded-lg overflow-hidden">
                                <img src="/about-travelling.png" alt="Hotel" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between items-start mb-2">
                                    <div>
                                        <h3 class="text-lg font-bold text-gray-900">Grand Hyatt Jakarta</h3>
                                        <div class="flex items-center mt-1">
                                            <span class="text-yellow-400 text-sm">★★★★★</span>
                                            <span class="text-gray-600 text-sm ml-2">4.8 (2,341 ulasan)</span>
                                        </div>
                                        <p class="text-gray-600 text-sm mt-1">Thamrin, Jakarta Pusat</p>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-2xl font-bold text-red-600">IDR 1.250.000</div>
                                        <div class="text-sm text-gray-500">per malam</div>
                                    </div>
                                </div>
                                <div class="flex flex-wrap gap-2 mb-3">
                                    <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Wi-Fi Gratis</span>
                                    <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Kolam Renang</span>
                                    <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Sarapan</span>
                                    <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Gym</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <div class="text-sm text-gray-600">
                                        <span class="text-green-600 font-medium">Pembatalan Gratis</span> hingga 24 jam sebelum check-in
                                    </div>
                                    <button class="px-6 py-2 text-white rounded-lg font-medium transition-all duration-300 transform hover:scale-105 hover:shadow-lg bg-gradient-to-r from-[#187499] to-[#36AE7E]">
                                        Pilih Kamar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hotel Card 2 -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow duration-300">
                        <div class="flex flex-col md:flex-row gap-4">
                            <div class="md:w-48 h-32 bg-gray-200 rounded-lg overflow-hidden">
                                <img src="/about-travelling.png" alt="Hotel" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between items-start mb-2">
                                    <div>
                                        <h3 class="text-lg font-bold text-gray-900">The Ritz-Carlton Jakarta</h3>
                                        <div class="flex items-center mt-1">
                                            <span class="text-yellow-400 text-sm">★★★★★</span>
                                            <span class="text-gray-600 text-sm ml-2">4.7 (1,892 ulasan)</span>
                                        </div>
                                        <p class="text-gray-600 text-sm mt-1">Mega Kuningan, Jakarta Selatan</p>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-2xl font-bold text-red-600">IDR 1.850.000</div>
                                        <div class="text-sm text-gray-500">per malam</div>
                                    </div>
                                </div>
                                <div class="flex flex-wrap gap-2 mb-3">
                                    <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Wi-Fi Gratis</span>
                                    <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Kolam Renang</span>
                                    <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Spa</span>
                                    <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Valet Parking</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <div class="text-sm text-gray-600">
                                        <span class="text-green-600 font-medium">Pembatalan Gratis</span> hingga 48 jam sebelum check-in
                                    </div>
                                    <button class="px-6 py-2 text-white rounded-lg font-medium transition-all duration-300 transform hover:scale-105 hover:shadow-lg bg-gradient-to-r from-[#187499] to-[#36AE7E]">
                                        Pilih Kamar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hotel Card 3 -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow duration-300">
                        <div class="flex flex-col md:flex-row gap-4">
                            <div class="md:w-48 h-32 bg-gray-200 rounded-lg overflow-hidden">
                                <img src="/about-travelling.png" alt="Hotel" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between items-start mb-2">
                                    <div>
                                        <h3 class="text-lg font-bold text-gray-900">Hotel Indonesia Kempinski</h3>
                                        <div class="flex items-center mt-1">
                                            <span class="text-yellow-400 text-sm">★★★★★</span>
                                            <span class="text-gray-600 text-sm ml-2">4.6 (1,567 ulasan)</span>
                                        </div>
                                        <p class="text-gray-600 text-sm mt-1">Bundaran HI, Jakarta Pusat</p>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-2xl font-bold text-red-600">IDR 1.450.000</div>
                                        <div class="text-sm text-gray-500">per malam</div>
                                    </div>
                                </div>
                                <div class="flex flex-wrap gap-2 mb-3">
                                    <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Wi-Fi Gratis</span>
                                    <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Kolam Renang</span>
                                    <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Sarapan</span>
                                    <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Business Center</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <div class="text-sm text-gray-600">
                                        <span class="text-green-600 font-medium">Pembatalan Gratis</span> hingga 24 jam sebelum check-in
                                    </div>
                                    <button class="px-6 py-2 text-white rounded-lg font-medium transition-all duration-300 transform hover:scale-105 hover:shadow-lg bg-gradient-to-r from-[#187499] to-[#36AE7E]">
                                        Pilih Kamar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Load More Button -->
                <div class="text-center mt-8">
                    <button onclick="loadMoreHotels()" class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-8 py-3 rounded-lg font-medium transition-all duration-300 transform hover:scale-105 active:scale-95">
                        Muat Lebih Banyak Hotel
                    </button>
                </div>
            </div>
        </div>
    </div>

</body>

<script>
// Hotel search functionality
let selectedCheckinDate = null;
let selectedCheckoutDate = null;
let checkinCalendarMonth = 8; // September (0-indexed)
let checkinCalendarYear = 2025;
let checkoutCalendarMonth = 8;
let checkoutCalendarYear = 2025;

// Location suggestions data
const locationSuggestions = [
    'Jakarta', 'Surabaya', 'Bandung', 'Medan', 'Semarang', 'Makassar', 'Palembang', 'Tangerang',
    'Depok', 'Bekasi', 'Bogor', 'Batam', 'Pekanbaru', 'Bandar Lampung', 'Padang', 'Malang',
    'Yogyakarta', 'Samarinda', 'Denpasar', 'Bali', 'Lombok', 'Labuan Bajo', 'Raja Ampat',
    'Solo', 'Pontianak', 'Balikpapan', 'Jambi', 'Cirebon', 'Serang', 'Mataram'
];

let selectedQuickOption = null;

function openLocationModal() {
    const modal = document.getElementById('locationModal');
    const content = document.getElementById('locationModalContent');
    modal.classList.remove('hidden');
    setTimeout(() => {
        content.classList.remove('scale-95', 'opacity-0');
        content.classList.add('scale-100', 'opacity-100');
    }, 10);
}

function closeLocationModal() {
    const modal = document.getElementById('locationModal');
    const content = document.getElementById('locationModalContent');
    content.classList.remove('scale-100', 'opacity-100');
    content.classList.add('scale-95', 'opacity-0');
    setTimeout(() => {
        modal.classList.add('hidden');
    }, 300);
}

function openGuestModal() {
    const modal = document.getElementById('guestModal');
    const content = document.getElementById('guestModalContent');
    modal.classList.remove('hidden');
    setTimeout(() => {
        content.classList.remove('scale-95', 'opacity-0');
        content.classList.add('scale-100', 'opacity-100');
    }, 10);
}

function closeGuestModal() {
    const modal = document.getElementById('guestModal');
    const content = document.getElementById('guestModalContent');
    content.classList.remove('scale-100', 'opacity-100');
    content.classList.add('scale-95', 'opacity-0');
    setTimeout(() => {
        modal.classList.add('hidden');
    }, 300);
}

function setGuestRoom(guests, rooms) {
    // Clear previous selections
    document.querySelectorAll('#guestModal [data-guest-room]').forEach(btn => {
        btn.classList.remove('border-teal-500', 'bg-teal-50');
        btn.classList.add('border-gray-200');
        btn.querySelector('.text-sm').classList.remove('text-teal-700');
        btn.querySelector('.text-xs').classList.remove('text-teal-600');
        btn.querySelector('.text-sm').classList.add('text-gray-900');
        btn.querySelector('.text-xs').classList.add('text-gray-500');
    });
    
    // Highlight selected option
    const selectedBtn = document.querySelector(`[data-guest-room="${guests}-${rooms}"]`);
    if (selectedBtn) {
        selectedBtn.classList.remove('border-gray-200');
        selectedBtn.classList.add('border-teal-500', 'bg-teal-50');
        selectedBtn.querySelector('.text-sm').classList.remove('text-gray-900');
        selectedBtn.querySelector('.text-xs').classList.remove('text-gray-500');
        selectedBtn.querySelector('.text-sm').classList.add('text-teal-700');
        selectedBtn.querySelector('.text-xs').classList.add('text-teal-600');
    }
    
    // Update displays immediately
    document.getElementById('guestCountDisplay').textContent = guests;
    document.getElementById('roomCountDisplay').textContent = rooms;
    
    // Also update main display
    document.getElementById('guestCount').textContent = guests + ' Tamu';
    document.getElementById('roomCount').textContent = '(' + rooms + ' Kamar)';
}

function selectLocationFromRecent(location) {
    document.getElementById('locationSearchInput').value = location;
}

// Price range slider functionality
function updatePriceRange() {
    const minSlider = document.getElementById('priceRangeMin');
    const maxSlider = document.getElementById('priceRangeMax');
    const minDisplay = document.getElementById('minPriceDisplay');
    const maxDisplay = document.getElementById('maxPriceDisplay');
    const track = document.getElementById('priceRangeTrack');
    
    let minVal = parseInt(minSlider.value);
    let maxVal = parseInt(maxSlider.value);
    
    // Ensure min is not greater than max
    if (minVal > maxVal) {
        minSlider.value = maxVal;
        minVal = maxVal;
    }
    
    // Update displays with proper formatting
    minDisplay.textContent = formatPrice(minVal);
    maxDisplay.textContent = formatPrice(maxVal);
    
    // Update slider track with Tailwind classes
    const minPercent = (minVal / 20000000) * 100;
    const maxPercent = (maxVal / 20000000) * 100;
    track.style.left = `${minPercent}%`;
    track.style.right = `${100 - maxPercent}%`;
    
    // Update z-index to ensure proper layering
    if (minVal > maxVal - 100000) {
        minSlider.classList.add('z-[3]');
        maxSlider.classList.remove('z-[3]');
    } else {
        minSlider.classList.remove('z-[3]');
        maxSlider.classList.add('z-[3]');
    }
}

function formatPrice(price) {
    if (price === 0) return '0';
    return price.toLocaleString('id-ID');
}

// Location search functionality
function searchLocations() {
    const input = document.getElementById('locationSearchInput');
    const suggestions = document.getElementById('locationSuggestions');
    const query = input.value.toLowerCase().trim();
    
    if (query.length === 0) {
        suggestions.classList.add('hidden');
        return;
    }
    
    const filtered = locationSuggestions.filter(location => 
        location.toLowerCase().startsWith(query)
    );
    
    if (filtered.length > 0) {
        suggestions.innerHTML = filtered.map(location => 
            `<div class="p-3 hover:bg-blue-50 cursor-pointer border-b border-gray-100 last:border-b-0 transition-colors duration-200" onclick="selectLocationFromSuggestion('${location}')">
                <div class="font-medium text-gray-900">${location}</div>
                <div class="text-sm text-gray-500">Indonesia</div>
            </div>`
        ).join('');
        suggestions.classList.remove('hidden');
    } else {
        suggestions.classList.add('hidden');
    }
}

function selectLocationFromSuggestion(location) {
    document.getElementById('locationSearchInput').value = location;
    document.getElementById('locationSuggestions').classList.add('hidden');
}

function handleLocationKeydown(event) {
    const suggestions = document.getElementById('locationSuggestions');
    if (event.key === 'Escape') {
        suggestions.classList.add('hidden');
    }
}

// Check-in Modal Functions
function openCheckinModal() {
    const modal = document.getElementById('checkinModal');
    const content = document.getElementById('checkinModalContent');
    
    modal.classList.remove('hidden');
    
    // Smooth animation
    setTimeout(() => {
        content.classList.remove('scale-95', 'opacity-0');
        content.classList.add('scale-100', 'opacity-100');
    }, 10);
    
    generateCheckinCalendar();
}

function closeCheckinModal() {
    const modal = document.getElementById('checkinModal');
    const content = document.getElementById('checkinModalContent');
    
    content.classList.remove('scale-100', 'opacity-100');
    content.classList.add('scale-95', 'opacity-0');
    
    setTimeout(() => {
        modal.classList.add('hidden');
    }, 300);
}

// Check-out Modal Functions
function openCheckoutModal() {
    const modal = document.getElementById('checkoutModal');
    const content = document.getElementById('checkoutModalContent');
    
    modal.classList.remove('hidden');
    
    // Smooth animation
    setTimeout(() => {
        content.classList.remove('scale-95', 'opacity-0');
        content.classList.add('scale-100', 'opacity-100');
    }, 10);
    
    generateCheckoutCalendar();
}

function closeCheckoutModal() {
    const modal = document.getElementById('checkoutModal');
    const content = document.getElementById('checkoutModalContent');
    
    content.classList.remove('scale-100', 'opacity-100');
    content.classList.add('scale-95', 'opacity-0');
    
    setTimeout(() => {
        modal.classList.add('hidden');
    }, 300);
}

// Quick date selection for check-in
function selectQuickCheckin(type) {
    // Clear previous selections
    document.querySelectorAll('#checkinModal [data-checkin-option]').forEach(btn => {
        btn.classList.remove('bg-blue-50');
        btn.classList.add('border-gray-200');
        btn.style.borderColor = '';
        btn.style.backgroundColor = '';
        btn.querySelector('.text-sm').classList.remove('text-teal-700');
        btn.querySelector('.text-xs').classList.remove('text-teal-600');
        btn.querySelector('.text-sm').classList.add('text-gray-900');
        btn.querySelector('.text-xs').classList.add('text-gray-500');
    });
    
    // Highlight selected option
    const selectedBtn = document.querySelector(`[data-checkin-option="${type}"]`);
    if (selectedBtn) {
        selectedBtn.style.borderColor = '#187499';
        selectedBtn.style.backgroundColor = 'rgba(24, 116, 153, 0.1)';
        selectedBtn.querySelector('.text-sm').classList.remove('text-gray-900');
        selectedBtn.querySelector('.text-xs').classList.remove('text-gray-500');
        selectedBtn.querySelector('.text-sm').classList.add('text-teal-700');
        selectedBtn.querySelector('.text-xs').classList.add('text-teal-600');
    }
    
    const today = new Date();
    let selectedDate;
    
    switch(type) {
        case 'today':
            selectedDate = new Date(today);
            break;
        case 'tomorrow':
            selectedDate = new Date(today);
            selectedDate.setDate(today.getDate() + 1);
            break;
        case 'weekend':
            selectedDate = new Date(today);
            const daysUntilSaturday = (6 - today.getDay()) % 7;
            selectedDate.setDate(today.getDate() + daysUntilSaturday);
            break;
        case 'nextweek':
            selectedDate = new Date(today);
            selectedDate.setDate(today.getDate() + 7);
            break;
    }
    
    selectedCheckinDate = selectedDate;
    updateCheckinDisplay();
}

// Duration selection for check-out
function selectDuration(nights) {
    // Clear previous selections
    document.querySelectorAll('#checkoutModal [data-duration]').forEach(btn => {
        btn.classList.remove('bg-green-50');
        btn.classList.add('border-gray-200');
        btn.style.borderColor = '';
        btn.style.backgroundColor = '';
        btn.querySelector('.text-lg').classList.remove('text-green-700');
        btn.querySelector('.text-xs').classList.remove('text-green-600');
        btn.querySelector('.text-lg').classList.add('text-gray-900');
        btn.querySelector('.text-xs').classList.add('text-gray-500');
    });
    
    // Highlight selected option
    const selectedBtn = document.querySelector(`[data-duration="${nights}"]`);
    if (selectedBtn) {
        selectedBtn.style.borderColor = '#36ae7e';
        selectedBtn.style.backgroundColor = 'rgba(54, 174, 126, 0.1)';
        selectedBtn.querySelector('.text-lg').classList.remove('text-gray-900');
        selectedBtn.querySelector('.text-xs').classList.remove('text-gray-500');
        selectedBtn.querySelector('.text-lg').classList.add('text-green-700');
        selectedBtn.querySelector('.text-xs').classList.add('text-green-600');
    }
    
    if (selectedCheckinDate) {
        const checkoutDate = new Date(selectedCheckinDate);
        checkoutDate.setDate(selectedCheckinDate.getDate() + nights);
        selectedCheckoutDate = checkoutDate;
        updateCheckoutDisplay();
    } else {
        alert('Silakan pilih tanggal check-in terlebih dahulu');
    }
}

// Calendar generation for check-in
function generateCheckinCalendar() {
    const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni",
        "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
    
    document.getElementById('checkinCurrentMonth').textContent = 
        monthNames[checkinCalendarMonth] + ' ' + checkinCalendarYear;
    
    const firstDay = new Date(checkinCalendarYear, checkinCalendarMonth, 1);
    const lastDay = new Date(checkinCalendarYear, checkinCalendarMonth + 1, 0);
    const startDate = new Date(firstDay);
    startDate.setDate(startDate.getDate() - (firstDay.getDay() + 6) % 7);
    
    const calendarDays = document.getElementById('checkinCalendarDays');
    calendarDays.innerHTML = '';
    
    for (let i = 0; i < 42; i++) {
        const currentDate = new Date(startDate);
        currentDate.setDate(startDate.getDate() + i);
        
        const dayElement = document.createElement('button');
        dayElement.className = 'p-2 text-sm rounded-lg transition-all duration-200 hover:bg-blue-100';
        dayElement.textContent = currentDate.getDate();
        
        if (currentDate.getMonth() !== checkinCalendarMonth) {
            dayElement.className += ' text-gray-300';
        } else if (currentDate < new Date().setHours(0,0,0,0)) {
            dayElement.className += ' text-gray-400 cursor-not-allowed';
        } else {
            dayElement.className += ' text-gray-700 hover:text-teal-700 cursor-pointer transform hover:scale-110';
            dayElement.onclick = () => selectCheckinDate(currentDate);
        }
        
        if (selectedCheckinDate && currentDate.toDateString() === selectedCheckinDate.toDateString()) {
            dayElement.className += ' bg-blue-500 text-white';
        }
        
        calendarDays.appendChild(dayElement);
    }
}

// Display update functions
function updateCheckinDisplay() {
    if (selectedCheckinDate) {
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        document.getElementById('selectedCheckinDisplay').textContent = 
            selectedCheckinDate.toLocaleDateString('id-ID', options);
    }
}

function updateCheckoutDisplay() {
    if (selectedCheckoutDate) {
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        document.getElementById('selectedCheckoutDisplay').textContent = 
            selectedCheckoutDate.toLocaleDateString('id-ID', options);
            
        // Calculate duration
        if (selectedCheckinDate && selectedCheckoutDate) {
            const timeDiff = selectedCheckoutDate.getTime() - selectedCheckinDate.getTime();
            const daysDiff = Math.ceil(timeDiff / (1000 * 3600 * 24));
            document.getElementById('stayDurationDisplay').textContent = `Durasi: ${daysDiff} malam`;
        }
    }
}

// Date selection functions
function selectCheckinDate(date) {
    selectedCheckinDate = date;
    
    // If checkout date is before or same as checkin, clear it
    if (selectedCheckoutDate && selectedCheckoutDate <= selectedCheckinDate) {
        selectedCheckoutDate = null;
        document.getElementById('selectedCheckoutDisplay').textContent = 'Belum dipilih';
        document.getElementById('stayDurationDisplay').textContent = 'Durasi: -';
    }
    
    updateCheckinDisplay();
    generateCheckinCalendar();
}

function selectCheckoutDate(date) {
    if (selectedCheckinDate && date <= selectedCheckinDate) {
        alert('Tanggal check-out harus setelah tanggal check-in');
        return;
    }
    
    selectedCheckoutDate = date;
    updateCheckoutDisplay();
    generateCheckoutCalendar();
}

// Calendar generation for check-out
function generateCheckoutCalendar() {
    const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni",
        "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
    
    document.getElementById('checkoutCurrentMonth').textContent = 
        monthNames[checkoutCalendarMonth] + ' ' + checkoutCalendarYear;
    
    const firstDay = new Date(checkoutCalendarYear, checkoutCalendarMonth, 1);
    const lastDay = new Date(checkoutCalendarYear, checkoutCalendarMonth + 1, 0);
    const startDate = new Date(firstDay);
    startDate.setDate(startDate.getDate() - (firstDay.getDay() + 6) % 7);
    
    const calendarDays = document.getElementById('checkoutCalendarDays');
    calendarDays.innerHTML = '';
    
    for (let i = 0; i < 42; i++) {
        const currentDate = new Date(startDate);
        currentDate.setDate(startDate.getDate() + i);
        
        const dayElement = document.createElement('button');
        dayElement.className = 'p-2 text-sm rounded-lg transition-all duration-200 hover:bg-green-100';
        dayElement.textContent = currentDate.getDate();
        
        if (currentDate.getMonth() !== checkoutCalendarMonth) {
            dayElement.className += ' text-gray-300';
        } else if (selectedCheckinDate && currentDate <= selectedCheckinDate) {
            dayElement.className += ' text-gray-400 cursor-not-allowed';
        } else {
            dayElement.className += ' text-gray-700 hover:text-green-700 cursor-pointer transform hover:scale-110';
            dayElement.onclick = () => selectCheckoutDate(currentDate);
        }
        
        if (selectedCheckoutDate && currentDate.toDateString() === selectedCheckoutDate.toDateString()) {
            dayElement.className += ' bg-green-500 text-white';
        }
        
        calendarDays.appendChild(dayElement);
    }
}

function selectCheckinDate(date) {
    selectedCheckinDate = date;
    updateCheckinDisplay();
    generateCheckinCalendar();
}

function selectCheckoutDate(date) {
    selectedCheckoutDate = date;
    updateCheckoutDisplay();
    generateCheckoutCalendar();
}

function updateCheckinDisplay() {
    if (selectedCheckinDate) {
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        document.getElementById('selectedCheckinDisplay').textContent = 
            selectedCheckinDate.toLocaleDateString('id-ID', options);
    }
}

function updateCheckoutDisplay() {
    if (selectedCheckoutDate) {
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        document.getElementById('selectedCheckoutDisplay').textContent = 
            selectedCheckoutDate.toLocaleDateString('id-ID', options);
        
        if (selectedCheckinDate) {
            const diffTime = Math.abs(selectedCheckoutDate - selectedCheckinDate);
            const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
            document.getElementById('stayDurationDisplay').textContent = 
                `Durasi: ${diffDays} malam`;
        }
    }
}

function previousMonthCheckin() {
    checkinCalendarMonth--;
    if (checkinCalendarMonth < 0) {
        checkinCalendarMonth = 11;
        checkinCalendarYear--;
    }
    generateCheckinCalendar();
}

function nextMonthCheckin() {
    checkinCalendarMonth++;
    if (checkinCalendarMonth > 11) {
        checkinCalendarMonth = 0;
        checkinCalendarYear++;
    }
    generateCheckinCalendar();
}

function previousMonthCheckout() {
    checkoutCalendarMonth--;
    if (checkoutCalendarMonth < 0) {
        checkoutCalendarMonth = 11;
        checkoutCalendarYear--;
    }
    generateCheckoutCalendar();
}

function nextMonthCheckout() {
    checkoutCalendarMonth++;
    if (checkoutCalendarMonth > 11) {
        checkoutCalendarMonth = 0;
        checkoutCalendarYear++;
    }
    generateCheckoutCalendar();
}

function saveCheckinDate() {
    if (selectedCheckinDate) {
        const options = { day: 'numeric', month: 'short', year: 'numeric' };
        document.getElementById('checkinDate').textContent = 
            'Check-in: ' + selectedCheckinDate.toLocaleDateString('id-ID', options);
    }
    closeCheckinModal();
}

function saveCheckoutDate() {
    if (selectedCheckoutDate) {
        const options = { day: 'numeric', month: 'short', year: 'numeric' };
        document.getElementById('checkoutDate').textContent = 
            'Check-out: ' + selectedCheckoutDate.toLocaleDateString('id-ID', options);
    }
    closeCheckoutModal();
}

function selectLocation(location) {
    document.getElementById('hotelLocation').textContent = location;
    currentFilters.location = location;
    closeLocationModal();
}

function selectLocationFromRecent(location) {
    document.getElementById('hotelLocation').textContent = location;
    currentFilters.location = location;
    closeLocationModal();
}

function selectLocationFromSuggestion(location) {
    document.getElementById('locationSearchInput').value = location;
    document.getElementById('locationSuggestions').classList.add('hidden');
}

function changeGuestCount(change) {
    const display = document.getElementById('guestCountDisplay');
    const current = parseInt(display.textContent);
    const newCount = Math.max(1, current + change);
    display.textContent = newCount;
    
    // Update main display
    document.getElementById('guestCount').textContent = newCount + ' Tamu';
}

function changeRoomCount(change) {
    const display = document.getElementById('roomCountDisplay');
    const current = parseInt(display.textContent);
    const newCount = Math.max(1, current + change);
    display.textContent = newCount;
    
    // Update main display
    document.getElementById('roomCount').textContent = '(' + newCount + ' Kamar)';
}

function saveLocation() {
    const inputValue = document.getElementById('locationSearchInput').value.trim();
    if (inputValue) {
        document.getElementById('hotelLocation').textContent = inputValue;
        currentFilters.location = inputValue;
    }
    closeLocationModal();
}

function saveGuest() {
    // Get current values from modal
    const guestCount = parseInt(document.getElementById('guestCountDisplay').textContent);
    const roomCount = parseInt(document.getElementById('roomCountDisplay').textContent);
    
    // Update main display
    document.getElementById('guestCount').textContent = guestCount + ' Tamu';
    document.getElementById('roomCount').textContent = '(' + roomCount + ' Kamar)';
    
    closeGuestModal();
}

// Hotel data
const hotels = [
    {
        id: 1,
        name: "Grand Hyatt Jakarta",
        location: "Thamrin, Jakarta Pusat",
        rating: 5,
        price: 1250000,
        image: "/about-travelling.png",
        facilities: ["Wi-Fi Gratis", "Kolam Renang", "Gym", "Sarapan Gratis"],
        description: "Pengalaman Gratis hingga 24 jam sebelum check-in"
    },
    {
        id: 2,
        name: "Hotel Indonesia Kempinski",
        location: "Bundaran HI, Jakarta Pusat", 
        rating: 5,
        price: 1800000,
        image: "/about-travelling.png",
        facilities: ["Wi-Fi Gratis", "Kolam Renang", "Parkir Gratis", "Gym"],
        description: "Hotel mewah di jantung Jakarta"
    },
    {
        id: 3,
        name: "The Ritz-Carlton Jakarta",
        location: "Mega Kuningan, Jakarta Selatan",
        rating: 5,
        price: 2200000,
        image: "/about-travelling.png", 
        facilities: ["Wi-Fi Gratis", "Kolam Renang", "Gym", "Sarapan Gratis"],
        description: "Kemewahan dan pelayanan premium"
    },
    {
        id: 4,
        name: "Pullman Jakarta Indonesia",
        location: "Thamrin, Jakarta Pusat",
        rating: 4,
        price: 950000,
        image: "/about-travelling.png",
        facilities: ["Wi-Fi Gratis", "Kolam Renang", "Gym"],
        description: "Hotel modern dengan fasilitas lengkap"
    },
    {
        id: 5,
        name: "Shangri-La Hotel Jakarta",
        location: "Sudirman, Jakarta Pusat",
        rating: 5,
        price: 1650000,
        image: "/about-travelling.png",
        facilities: ["Wi-Fi Gratis", "Kolam Renang", "Gym", "Parkir Gratis"],
        description: "Pengalaman menginap yang tak terlupakan"
    },
    {
        id: 6,
        name: "Hotel Borobudur Jakarta",
        location: "Lapangan Banteng, Jakarta Pusat",
        rating: 4,
        price: 750000,
        image: "/about-travelling.png",
        facilities: ["Wi-Fi Gratis", "Kolam Renang", "Parkir Gratis"],
        description: "Hotel heritage dengan taman yang indah"
    },
    {
        id: 7,
        name: "Fairmont Jakarta",
        location: "Senayan, Jakarta Pusat",
        rating: 5,
        price: 1450000,
        image: "/about-travelling.png",
        facilities: ["Wi-Fi Gratis", "Kolam Renang", "Gym", "Sarapan Gratis"],
        description: "Kemewahan di pusat bisnis Jakarta"
    },
    {
        id: 8,
        name: "Mandarin Oriental Jakarta",
        location: "Thamrin, Jakarta Pusat",
        rating: 5,
        price: 1950000,
        image: "/about-travelling.png",
        facilities: ["Wi-Fi Gratis", "Kolam Renang", "Gym", "Parkir Gratis"],
        description: "Hotel mewah dengan pelayanan oriental"
    }
];

let filteredHotels = [...hotels];
let currentFilters = {
    location: '',
    minPrice: 0,
    maxPrice: 16000000,
    stars: null,
    facilities: []
};

// Initialize price slider functionality
function initializePriceSlider() {
    const priceSlider = document.getElementById('priceSlider');
    const minPriceDisplay = document.getElementById('minPrice');
    const maxPriceDisplay = document.getElementById('maxPrice');
    
    if (priceSlider && typeof noUiSlider !== 'undefined') {
        noUiSlider.create(priceSlider, {
            start: [0, 16000000],
            connect: true,
            range: {
                'min': 0,
                'max': 16000000
            },
            step: 100000,
            format: {
                to: function (value) {
                    return Math.round(value);
                },
                from: function (value) {
                    return Number(value);
                }
            }
        });
        
        priceSlider.noUiSlider.on('update', function (values, handle) {
            const minValue = parseInt(values[0]);
            const maxValue = parseInt(values[1]);
            
            // Update display
            if (minPriceDisplay) {
                minPriceDisplay.textContent = 'IDR ' + minValue.toLocaleString('id-ID');
            }
            if (maxPriceDisplay) {
                maxPriceDisplay.textContent = 'IDR ' + maxValue.toLocaleString('id-ID');
            }
        });
    }
}

// Filter functionality
function applyFilters() {
    // Only apply filters if we have hotels to filter
    if (!hotels || hotels.length === 0) {
        return;
    }
    
    console.log('Starting filter with:', currentFilters);
    
    filteredHotels = hotels.filter(hotel => {
        console.log(`Checking hotel: ${hotel.name} (Price: ${hotel.price})`);
        
        // Location filter
        if (currentFilters.location && currentFilters.location !== 'Pilih Lokasi') {
            const locationMatch = hotel.location.toLowerCase().includes(currentFilters.location.toLowerCase()) || 
                                hotel.name.toLowerCase().includes(currentFilters.location.toLowerCase());
            if (!locationMatch) {
                console.log(`${hotel.name} failed location filter`);
                return false;
            }
        }
        
        // Price filter
        const priceInRange = hotel.price >= currentFilters.minPrice && hotel.price <= currentFilters.maxPrice;
        console.log(`${hotel.name} price check: ${hotel.price} between ${currentFilters.minPrice}-${currentFilters.maxPrice} = ${priceInRange}`);
        
        if (!priceInRange) {
            console.log(`${hotel.name} failed price filter`);
            return false;
        }
        
        // Star rating filter (show exact rating only)
        if (currentFilters.stars && hotel.rating !== currentFilters.stars) {
            console.log(`${hotel.name} failed star filter`);
            return false;
        }
        
        // Facilities filter - hotel must have ALL selected facilities
        if (currentFilters.facilities.length > 0) {
            const hasAllFacilities = currentFilters.facilities.every(facility => 
                hotel.facilities && hotel.facilities.includes(facility)
            );
            if (!hasAllFacilities) {
                console.log(`${hotel.name} failed facility filter`);
                return false;
            }
        }
        
        console.log(`${hotel.name} passed all filters`);
        return true;
    });
    
    console.log('Final filtered hotels:', filteredHotels.map(h => `${h.name} (${h.price})`));
    
    displayHotels();
    updateFilterCounts();
}

// Update filter counts (like professional booking sites)
function updateFilterCounts() {
    // Update result count display
    const resultCount = document.querySelector('.result-count');
    if (resultCount) {
        resultCount.textContent = `${filteredHotels.length} hotel ditemukan`;
    }
}

// Display hotels
function displayHotels() {
    const hotelContainer = document.querySelector('.lg\\:col-span-3 .space-y-4');
    if (!hotelContainer) return;
    
    hotelContainer.innerHTML = '';
    
    if (filteredHotels.length === 0) {
        hotelContainer.innerHTML = `
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8 text-center">
                <div class="text-gray-400 mb-4">
                    <svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Tidak ada hotel ditemukan</h3>
                <p class="text-gray-600">Coba ubah kriteria pencarian atau filter Anda</p>
            </div>
        `;
        return;
    }
    
    filteredHotels.forEach(hotel => {
        const hotelCard = createHotelCard(hotel);
        hotelContainer.appendChild(hotelCard);
    });
}

// Create hotel card
function createHotelCard(hotel) {
    const card = document.createElement('div');
    card.className = 'bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow duration-300';
    
    const stars = '★'.repeat(hotel.rating) + '☆'.repeat(5 - hotel.rating);
    const facilitiesHtml = hotel.facilities.slice(0, 4).map(facility => 
        `<span class="px-2 py-1 bg-blue-100 text-teal-700 text-xs rounded-full">${facility}</span>`
    ).join('');
    
    card.innerHTML = `
        <div class="flex flex-col md:flex-row gap-4">
            <div class="md:w-48 h-32 bg-gray-200 rounded-lg overflow-hidden">
                <img src="${hotel.image}" alt="${hotel.name}" class="w-full h-full object-cover">
            </div>
            <div class="flex-1">
                <div class="flex justify-between items-start mb-2">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">${hotel.name}</h3>
                        <div class="flex items-center mt-1">
                            <span class="text-yellow-400 text-sm mr-2">${stars}</span>
                            <span class="text-sm text-gray-600">${hotel.rating} (2.341 ulasan)</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">${hotel.location}</p>
                    </div>
                    <div class="text-right">
                        <div class="text-2xl font-bold text-red-600">IDR ${hotel.price.toLocaleString('id-ID')}</div>
                        <div class="text-sm text-gray-500">per malam</div>
                    </div>
                </div>
                <div class="flex flex-wrap gap-2 mb-3">
                    ${facilitiesHtml}
                </div>
                <p class="text-sm text-gray-600 mb-4">${hotel.description}</p>
                <div class="flex justify-end items-center">
                    <button class="px-6 py-2 bg-teal-600 text-white rounded-lg hover:bg-teal-700 transition-all duration-200 transform hover:scale-105">
                        Pilih Kamar
                    </button>
                </div>
            </div>
        </div>
    `;
    
    return card;
}

// Rating filter - single selection only
function toggleRatingFilter(rating) {
    currentFilters.rating = [rating];
}

// Facility filter
function toggleFacilityFilter(facility) {
    const checkbox = event.target;
    
    if (checkbox.checked) {
        // Add facility to filter if not already present
        if (!currentFilters.facilities.includes(facility)) {
            currentFilters.facilities.push(facility);
        }
    } else {
        // Remove facility from filter
        const index = currentFilters.facilities.indexOf(facility);
        if (index > -1) {
            currentFilters.facilities.splice(index, 1);
        }
    }
    
    // Apply filters immediately after search has been performed
    applyFilters();
}

function searchHotels() {
    // Validate required fields
    const location = document.getElementById('hotelLocation').textContent;
    const checkinDate = document.getElementById('checkinDate').textContent;
    const checkoutDate = document.getElementById('checkoutDate').textContent;
    const guestCount = document.getElementById('guestCount').textContent;
    const roomCount = document.getElementById('roomCount').textContent;
    
    let errors = [];
    
    if (!location || location === 'Pilih Lokasi') {
        errors.push('Pilih lokasi terlebih dahulu');
    }
    
    if (!checkinDate || checkinDate === 'Check-in: -') {
        errors.push('Pilih tanggal check-in');
    }
    
    if (!checkoutDate || checkoutDate === 'Check-out: -') {
        errors.push('Pilih tanggal check-out');
    }
    
    
    if (!guestCount || guestCount === '- Tamu') {
        errors.push('Tentukan jumlah tamu');
    }
    
    if (!roomCount || roomCount === '(- Kamar)') {
        errors.push('Tentukan jumlah kamar');
    }
    
    if (errors.length > 0) {
        showValidationNotification(errors);
        return;
    }
    
    // Add to recent searches if location is valid
    if (location && location !== 'Pilih Lokasi') {
        console.log('Adding to recent searches:', location);
        addToRecentSearches(location);
    }
    
    // Set location filter and display hotels
    currentFilters.location = location;
    filteredHotels = [...hotels];
    applyFilters();
}

// Show attractive validation notification
function showValidationNotification(errors) {
    // Remove existing notification if any
    const existingNotification = document.getElementById('validationNotification');
    if (existingNotification) {
        existingNotification.remove();
    }
    
    // Create notification element
    const notification = document.createElement('div');
    notification.id = 'validationNotification';
    notification.className = 'fixed top-4 right-4 bg-red-500 text-white p-4 rounded-lg shadow-lg z-50 max-w-sm transform transition-all duration-300 translate-x-full';
    
    notification.innerHTML = `
        <div class="flex items-start">
            <div class="flex-shrink-0">
                <svg class="w-5 h-5 text-white mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <div class="ml-3 flex-1">
                <h3 class="text-sm font-semibold">Data Belum Lengkap</h3>
                <div class="mt-2 text-sm">
                    <ul class="list-disc list-inside space-y-1">
                        ${errors.map(error => `<li>${error}</li>`).join('')}
                    </ul>
                </div>
            </div>
            <button onclick="closeValidationNotification()" class="ml-4 text-white hover:text-gray-200 transition-colors">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    `;
    
    document.body.appendChild(notification);
    
    // Animate in
    setTimeout(() => {
        notification.classList.remove('translate-x-full');
    }, 10);
    
    // Auto close after 5 seconds
    setTimeout(() => {
        closeValidationNotification();
    }, 5000);
}

function closeValidationNotification() {
    const notification = document.getElementById('validationNotification');
    if (notification) {
        notification.classList.add('translate-x-full');
        setTimeout(() => {
            notification.remove();
        }, 300);
    }
}

// Star rating filter with checkbox functionality
function toggleStarFilter(stars) {
    const checkbox = event.target;
    
    if (checkbox.checked) {
        // When a star is checked, uncheck all others and set this as the minimum
        const allStarCheckboxes = document.querySelectorAll('input[onchange^="toggleStarFilter"]');
        allStarCheckboxes.forEach(cb => {
            if (cb !== checkbox) {
                cb.checked = false;
            }
        });
        
        currentFilters.stars = stars;
    } else {
        // If unchecked, remove star filter
        currentFilters.stars = null;
    }
    
    // Apply filters immediately
    applyFilters();
}

function updateStarVisuals(selectedStars) {
    // No visual changes needed - just checkbox functionality
}

function resetStarVisuals() {
    // No visual changes needed - just checkbox functionality
}

// Apply price filter when button is clicked
function applyPriceFilter() {
    // Check if hotels array exists and is valid
    if (typeof hotels === 'undefined' || hotels === null) {
        console.error('Hotels array is not available');
        return;
    }
    
    // Always get current slider values directly
    const priceSlider = document.getElementById('priceSlider');
    if (priceSlider && priceSlider.noUiSlider) {
        const values = priceSlider.noUiSlider.get();
        currentFilters.minPrice = parseInt(values[0]);
        currentFilters.maxPrice = parseInt(values[1]);
        
        console.log('Price filter applied:', currentFilters.minPrice, 'to', currentFilters.maxPrice);
        console.log('Hotel prices:', hotels.map(h => `${h.name}: ${h.price}`));
        
        // Force re-filter all hotels
        filteredHotels = [...hotels];
        applyFilters();
        
        console.log('Filtered results:', filteredHotels.length, 'hotels found');
    }
}

function loadMoreHotels() {
    console.log('Loading more hotels...');
    // Add load more functionality here
}

// Recent searches management
// Initialize empty - will populate when user searches
let recentSearches = [];

function addToRecentSearches(location) {
    console.log('Current recent searches before adding:', recentSearches);
    console.log('Trying to add location:', location);
    
    // Don't add duplicates
    if (!recentSearches.includes(location)) {
        recentSearches.unshift(location);
        // Keep only last 5 searches
        if (recentSearches.length > 5) {
            recentSearches.pop();
        }
        console.log('Recent searches after adding:', recentSearches);
        updateRecentSearchesDisplay();
    } else {
        console.log('Location already exists in recent searches');
    }
}

function updateRecentSearchesDisplay() {
    const section = document.getElementById('recentSearchesSection');
    const list = document.getElementById('recentSearchesList');
    
    if (recentSearches.length === 0) {
        section.style.display = 'none';
    } else {
        section.style.display = 'block';
        list.innerHTML = recentSearches.map(location => `
            <div class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-teal-50 cursor-pointer transition-all duration-200 transform hover:scale-105" onclick="selectLocationFromRecent('${location}')">
                <div class="w-8 h-8 rounded-full flex items-center justify-center mr-3" style="background-color: rgba(24, 116, 153, 0.1);">
                    <svg class="w-4 h-4" style="color: #187499;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <div class="flex-1">
                    <div class="text-sm font-medium text-gray-900">${location}</div>
                    <div class="text-xs text-gray-500">Pencarian sebelumnya</div>
                </div>
            </div>
        `).join('');
    }
}

function clearRecentSearches() {
    recentSearches = [];
    updateRecentSearchesDisplay();
}

function selectLocationFromRecent(location) {
    document.getElementById('hotelLocation').textContent = location;
    currentFilters.location = location;
    closeLocationModal();
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    // Initialize price slider
    initializePriceSlider();
    
    // Hide recent searches initially (no searches yet)
    updateRecentSearchesDisplay();
    
    // Don't display hotels initially - wait for search button click
});
</script>