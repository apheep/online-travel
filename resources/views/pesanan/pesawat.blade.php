
    @include('partials.head')

    @section('title', 'Flight Search - Online Travel')

    @include('partials.navigation')

<body class="bg-[F4F7FE] font-poppins">
    

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-8">
        
        <!-- Flight Search Bar -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4 sm:p-6 mb-6 sm:mb-8 flight-search-container">
          <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between space-y-4 sm:space-y-0">
            
            <!-- Search Info -->
            <div class="flex flex-col sm:flex-row sm:items-center space-y-3 sm:space-y-0 sm:space-x-4 text-sm sm:text-base">
              
              <!-- Search Icon -->
              <div class="text-gray-400">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
              </div>

              <!-- Route Info -->
              <div class="flex items-center space-x-2">
                <!-- Departure -->
                <div class="flex items-center space-x-2 cursor-pointer hover:bg-gray-50 p-2 rounded-lg transition-all duration-300 transform hover:scale-105  active:scale-95" onclick="openDepartureModal()">
                  <span class="text-gray-900 font-medium" id="fromLocation">Jakarta</span>
                  <svg class="w-4 h-4 text-gray-400 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </div>
                
                <!-- Reverse Button -->
                <button onclick="reverseLocations()" class="p-2 hover:bg-gray-100 rounded-full transition-all duration-300 transform hover:scale-110 hover:rotate-180 active:scale-95">
                  <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"></path>
                  </svg>
                </button>
                
                <!-- Arrival -->
                <div class="flex items-center space-x-2 cursor-pointer hover:bg-gray-50 p-2 rounded-lg transition-all duration-300 transform hover:scale-105  active:scale-95" onclick="openArrivalModal()">
                  <span class="text-gray-900 font-medium" id="toLocation">Bali</span>
                  <svg class="w-4 h-4 text-gray-400 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </div>
              </div>

              <!-- Date Info -->
              <div class="flex items-center space-x-2 cursor-pointer hover:bg-gray-50 p-2 rounded-lg transition-all duration-300 transform hover:scale-105 active:scale-95" onclick="openDateModal()">
                <span class="text-gray-600" id="selectedDate">Senin, 1 Sep 2025</span>
                <span class="text-gray-400 text-sm" id="tripType">(Sekali jalan)</span>
                <svg class="w-4 h-4 text-gray-400 ml-1 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
              </div>

              <!-- Passenger Info -->
              <div class="flex items-center space-x-2 cursor-pointer hover:bg-gray-50 p-2 rounded-lg transition-all duration-300 transform hover:scale-105 active:scale-95" onclick="openPassengerModal()">
                <span class="text-gray-600" id="passengerCount">2 Penumpang</span>
                <span class="text-gray-400 text-sm" id="passengerClass">(Ekonomi)</span>
                <svg class="w-4 h-4 text-gray-400 ml-1 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
              </div>
            </div>

            <!-- Search Button -->
            <div class="sm:ml-auto">
              <button onclick="searchFlights()" class="w-full sm:w-auto text-white px-6 py-2 rounded-lg font-medium transition-all duration-300 transform hover:scale-105 hover:shadow-lg active:scale-95 text-sm sm:text-base" style="background: linear-gradient(90deg, #187499 0%, #36AE7E 100%);">
                <span class="flex items-center justify-center space-x-2">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                  </svg>
                  <span>Cari</span>
                </span>
              </button>
            </div>
          </div>
        </div>

        <!-- Departure Location Modal -->
        <div id="departureModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4 transition-all duration-300 ease-out">
            <div class="bg-white rounded-2xl shadow-xl w-full max-w-md h-[600px] flex flex-col transform scale-95 opacity-0 transition-all duration-500 ease-out" id="departureModalContent">
                <div class="p-6 flex-1 flex flex-col overflow-hidden">
                    <!-- Header -->
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">Dari Mana?</h3>
                            <p class="text-gray-500 text-sm">Pilih lokasi keberangkatan Anda</p>
                        </div>
                        <button onclick="closeDepartureModal()" class="text-gray-400 hover:text-gray-600 transition duration-200 p-2 hover:bg-gray-100 rounded-full">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    
                    <!-- Search Input -->
                    <div class="mb-6">
                        <div class="relative">
                            <input type="text" id="departureSearchInput" placeholder="Masukkan nama kota atau bandara" 
                                   class="w-full p-3 pl-10 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-gray-500 transition duration-200"
                                   oninput="searchDepartureCities()">
                            <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <div id="departureSearchResults" class="mt-2 max-h-40 overflow-y-auto hidden bg-white rounded-lg shadow-lg border border-gray-200"></div>
                    </div>
                    
                    <!-- Recent Searches -->
                    <div class="mb-6">
                        <div class="flex justify-between items-center mb-3">
                            <h4 class="text-sm font-semibold text-gray-900">Pencarian Terakhir</h4>
                            <button onclick="clearDepartureRecentSearches()" class="text-sm text-gray-600 hover:text-gray-700 font-medium">Hapus</button>
                        </div>
                        <div id="departureRecentSearches" class="space-y-2 h-24 overflow-y-auto">
                            <div class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-gray-50 cursor-pointer transition duration-200" onclick="selectDepartureRecentLocation('Jakarta, Indonesia', 'CGK')">
                                <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center mr-3">
                                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <div class="text-sm font-medium text-gray-900">Jakarta, Indonesia</div>
                                    <div class="text-xs text-gray-500">Jakarta</div>
                                </div>
                                <span class="text-xs text-gray-400 bg-gray-100 px-2 py-1 rounded">CGK</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Popular Departure Cities -->
                    <div class="mb-6">
                        <h4 class="text-sm font-semibold text-gray-900 mb-3">Kota Populer</h4>
                        <div class="grid grid-cols-3 gap-2 h-32 overflow-y-auto">
                            <button onclick="selectDeparturePopularLocation('Jakarta')" class="p-3 border border-gray-300 rounded-lg hover:bg-gradient-to-r hover:from-[#187499] hover:to-[#36AE7E] hover:text-white hover:border-transparent transform hover:scale-105 active:scale-95 transition-all duration-300 ease-out text-sm font-medium text-gray-700">
                                Jakarta
                            </button>
                            <button onclick="selectDeparturePopularLocation('Surabaya')" class="p-3 border border-gray-300 rounded-lg hover:bg-gradient-to-r hover:from-[#187499] hover:to-[#36AE7E] hover:text-white hover:border-transparent transform hover:scale-105 active:scale-95 transition-all duration-300 ease-out text-sm font-medium text-gray-700">
                                Surabaya
                            </button>
                            <button onclick="selectDeparturePopularLocation('Medan')" class="p-3 border border-gray-300 rounded-lg hover:bg-gradient-to-r hover:from-[#187499] hover:to-[#36AE7E] hover:text-white hover:border-transparent transform hover:scale-105 active:scale-95 transition-all duration-300 ease-out text-sm font-medium text-gray-700">
                                Medan
                            </button>
                            <button onclick="selectDeparturePopularLocation('Makassar')" class="p-3 border border-gray-300 rounded-lg hover:bg-gradient-to-r hover:from-[#187499] hover:to-[#36AE7E] hover:text-white hover:border-transparent transform hover:scale-105 active:scale-95 transition-all duration-300 ease-out text-sm font-medium text-gray-700">
                                Makassar
                            </button>
                            <button onclick="selectDeparturePopularLocation('Yogyakarta')" class="p-3 border border-gray-300 rounded-lg hover:bg-gradient-to-r hover:from-[#187499] hover:to-[#36AE7E] hover:text-white hover:border-transparent transform hover:scale-105 active:scale-95 transition-all duration-300 ease-out text-sm font-medium text-gray-700">
                                Yogyakarta
                            </button>
                            <button onclick="selectDeparturePopularLocation('Balikpapan')" class="p-3 border border-gray-300 rounded-lg hover:bg-gradient-to-r hover:from-[#187499] hover:to-[#36AE7E] hover:text-white hover:border-transparent transform hover:scale-105 active:scale-95 transition-all duration-300 ease-out text-sm font-medium text-gray-700">
                                Balikpapan
                            </button>
                        </div>
                    </div>
                    
                    <div class="flex space-x-3 mt-auto pt-4">
                        <button onclick="closeDepartureModal()" class="flex-1 px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition duration-200 font-medium">
                            Batal
                        </button>
                        <button onclick="saveDepartureLocation()" class="flex-1 px-4 py-2 text-white rounded-lg font-medium transition duration-200 shadow-md hover:shadow-lg" style="background: linear-gradient(135deg, #187499 0%, #36AE7E 100%);">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Arrival Location Modal -->
        <div id="arrivalModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4 transition-all duration-300 ease-out">
            <div class="bg-white rounded-2xl shadow-xl w-full max-w-md h-[600px] flex flex-col transform scale-95 opacity-0 transition-all duration-500 ease-out" id="arrivalModalContent">
                <div class="p-6 flex-1 flex flex-col overflow-hidden">
                    <!-- Header -->
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">Mau ke Mana?</h3>
                            <p class="text-gray-500 text-sm">Pilih destinasi tujuan Anda</p>
                        </div>
                        <button onclick="closeArrivalModal()" class="text-gray-400 hover:text-gray-600 transition duration-200 p-2 hover:bg-gray-100 rounded-full">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    
                    <!-- Search Input -->
                    <div class="mb-6">
                        <div class="relative">
                            <input type="text" id="arrivalSearchInput" placeholder="Masukkan nama kota atau bandara" 
                                   class="w-full p-3 pl-10 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-gray-500 transition duration-200"
                                   oninput="searchArrivalCities()">
                            <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <div id="arrivalSearchResults" class="mt-2 max-h-40 overflow-y-auto hidden bg-white rounded-lg shadow-lg border border-gray-200"></div>
                    </div>
                    
                    <!-- Recent Searches -->
                    <div class="mb-6">
                        <div class="flex justify-between items-center mb-3">
                            <h4 class="text-sm font-semibold text-gray-900">Pencarian Terakhir</h4>
                            <button onclick="clearArrivalRecentSearches()" class="text-sm text-gray-600 hover:text-gray-700 font-medium">Hapus</button>
                        </div>
                        <div id="arrivalRecentSearches" class="space-y-2 h-24 overflow-y-auto">
                            <div class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-gray-50 cursor-pointer transition duration-200" onclick="selectArrivalRecentLocation('Denpasar-Bali, Indonesia', 'DPS')">
                                <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center mr-3">
                                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <div class="text-sm font-medium text-gray-900">Denpasar-Bali, Indonesia</div>
                                    <div class="text-xs text-gray-500">Denpasar-Bali</div>
                                </div>
                                <span class="text-xs text-gray-400 bg-gray-100 px-2 py-1 rounded">DPS</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Popular Destinations -->
                    <div class="mb-6">
                        <h4 class="text-sm font-semibold text-gray-900 mb-3">Destinasi Populer</h4>
                        <div class="grid grid-cols-3 gap-2 h-32 overflow-y-auto">
                            <button onclick="selectArrivalPopularLocation('Denpasar-Bali')" class="p-3 border border-gray-300 rounded-lg hover:bg-gradient-to-r hover:from-[#187499] hover:to-[#36AE7E] hover:text-white hover:border-transparent transform hover:scale-105 active:scale-95 transition-all duration-300 ease-out text-sm font-medium text-gray-700">
                                Denpasar-Bali
                            </button>
                            <button onclick="selectArrivalPopularLocation('Surabaya')" class="p-3 border border-gray-300 rounded-lg hover:bg-gradient-to-r hover:from-[#187499] hover:to-[#36AE7E] hover:text-white hover:border-transparent transform hover:scale-105 active:scale-95 transition-all duration-300 ease-out text-sm font-medium text-gray-700">
                                Surabaya
                            </button>
                            <button onclick="selectArrivalPopularLocation('Medan')" class="p-3 border border-gray-300 rounded-lg hover:bg-gradient-to-r hover:from-[#187499] hover:to-[#36AE7E] hover:text-white hover:border-transparent transform hover:scale-105 active:scale-95 transition-all duration-300 ease-out text-sm font-medium text-gray-700">
                                Medan
                            </button>
                            <button onclick="selectArrivalPopularLocation('Makassar')" class="p-3 border border-gray-300 rounded-lg hover:bg-gradient-to-r hover:from-[#187499] hover:to-[#36AE7E] hover:text-white hover:border-transparent transform hover:scale-105 active:scale-95 transition-all duration-300 ease-out text-sm font-medium text-gray-700">
                                Makassar
                            </button>
                            <button onclick="selectArrivalPopularLocation('Yogyakarta')" class="p-3 border border-gray-300 rounded-lg hover:bg-gradient-to-r hover:from-[#187499] hover:to-[#36AE7E] hover:text-white hover:border-transparent transform hover:scale-105 active:scale-95 transition-all duration-300 ease-out text-sm font-medium text-gray-700">
                                Yogyakarta
                            </button>
                            <button onclick="selectArrivalPopularLocation('Balikpapan')" class="p-3 border border-gray-300 rounded-lg hover:bg-gradient-to-r hover:from-[#187499] hover:to-[#36AE7E] hover:text-white hover:border-transparent transform hover:scale-105 active:scale-95 transition-all duration-300 ease-out text-sm font-medium text-gray-700">
                                Balikpapan
                            </button>
                        </div>
                    </div>
                    
                    <div class="flex space-x-3 mt-auto pt-4">
                        <button onclick="closeArrivalModal()" class="flex-1 px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition duration-200 font-medium">
                            Batal
                        </button>
                        <button onclick="saveArrivalLocation()" class="flex-1 px-4 py-2 text-white rounded-lg font-medium transition duration-200 shadow-md hover:shadow-lg" style="background: linear-gradient(135deg, #187499 0%, #36AE7E 100%);">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>


        @include('partials.calender')


        <!-- Passenger Selection Modal -->
        <div id="passengerModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4 transition-all duration-300 ease-out">
            <div class="bg-white rounded-2xl shadow-xl w-full max-w-md h-[450px] flex flex-col transform scale-95 opacity-0 transition-all duration-500 ease-out" id="passengerModalContent">
                <div class="p-6 flex-1 flex flex-col overflow-hidden">
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-1">Pilih Penumpang</h3>
                            <p class="text-gray-500">Tentukan jumlah dan kelas penumpang</p>
                        </div>
                        <button onclick="closePassengerModal()" class="text-gray-400 hover:text-gray-600 transition duration-200 p-2 hover:bg-gray-100 rounded-full">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    
                    <!-- Passenger Count -->
                    <div class="mb-6">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">Jumlah Penumpang</label>
                        <div class="flex items-center justify-center space-x-8">
                            <button onclick="changePassengerCount(-1)" class="w-12 h-12 rounded-full border-2 border-gray-300 flex items-center justify-center hover:bg-gray-50 hover:border-gray-400 transition duration-200 text-gray-600 font-bold text-xl">-</button>
                            <div class="text-center">
                                <span id="passengerCountDisplay" class="text-3xl font-bold text-gray-900">2</span>
                                <p class="text-sm text-gray-500 mt-1">Penumpang</p>
                            </div>
                            <button onclick="changePassengerCount(1)" class="w-12 h-12 rounded-full border-2 border-gray-300 flex items-center justify-center hover:bg-gray-50 hover:border-gray-400 transition duration-200 text-gray-600 font-bold text-xl">+</button>
                        </div>
                    </div>
                    
                    <!-- Class Selection -->
                    <div class="mb-6">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">Kelas</label>
                        <select id="classSelect" class="w-full p-3 border-2 border-transparent bg-gradient-to-r from-[#187499] to-[#36AE7E] rounded-xl focus:ring-2 focus:ring-[#187499] focus:border-transparent transition duration-200 text-lg" style="background: linear-gradient(white, white) padding-box, linear-gradient(135deg, #187499, #36AE7E) border-box; border: 2px solid transparent;">
                            <option value="Ekonomi">Ekonomi</option>
                            <option value="Bisnis">Bisnis</option>
                            <option value="First Class">First Class</option>
                        </select>
                    </div>
                    
                    <div class="flex space-x-4 mt-auto pt-4">
                        <button onclick="closePassengerModal()" class="flex-1 px-6 py-3 border-2 border-gray-300 rounded-xl text-gray-700 hover:bg-gray-50 transition duration-200 font-semibold">
                            Batal
                        </button>
                        <button onclick="savePassenger()" class="flex-1 px-6 py-3 text-white rounded-xl font-semibold transition duration-200 shadow-lg hover:shadow-xl" style="background: linear-gradient(135deg, #187499 0%, #36AE7E 100%);">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Date and Price Selector -->
        <div class="mb-8 date-cards-container">
            <div class="relative">
                <!-- Left Arrow Button -->
                <button onclick="scrollDateCards('left')" class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10 bg-white border border-gray-200 rounded-full p-2 shadow-sm hover:bg-gray-50 transition-colors duration-150 -ml-10 hidden md:block">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                
                <!-- Right Arrow Button -->
                <button onclick="scrollDateCards('right')" class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 bg-white border border-gray-200 rounded-full p-2 shadow-sm hover:bg-gray-50 transition-colors duration-150 -mr-10 hidden md:block">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
                
                <!-- Scrollable Date Cards Container -->
                <div id="dateCardsContainer" class="flex space-x-3 overflow-x-auto scrollbar-hide scroll-smooth cursor-grab active:cursor-grabbing" style="scrollbar-width: none; -ms-overflow-style: none;">
                    <!-- Date Cards -->
                    <div class="bg-white rounded-lg border border-gray-200 p-4 text-center shadow-sm flex-shrink-0 min-w-[140px]">
                        <div class="text-sm text-gray-600 mb-2">Sen, 1 Sep 2025</div>
                        <div class="text-lg font-bold text-red-600">IDR 600.000</div>
                    </div>
                    <div class="bg-white rounded-lg border border-gray-200 p-4 text-center shadow-sm flex-shrink-0 min-w-[140px]">
                        <div class="text-sm text-gray-600 mb-2">Sel, 2 Sep 2025</div>
                        <div class="text-lg font-bold text-red-600">IDR 650.000</div>
                    </div>
                    <div class="bg-white rounded-lg border border-gray-200 p-4 text-center shadow-sm flex-shrink-0 min-w-[140px]">
                        <div class="text-sm text-gray-600 mb-2">Rab, 3 Sep 2025</div>
                        <div class="text-lg font-bold text-red-600">IDR 580.000</div>
                    </div>
                    <div class="bg-white rounded-lg border border-gray-200 p-4 text-center shadow-sm flex-shrink-0 min-w-[140px]">
                        <div class="text-sm text-gray-600 mb-2">Kam, 4 Sep 2025</div>
                        <div class="text-lg font-bold text-red-600">IDR 620.000</div>
                    </div>
                    <div class="bg-white rounded-lg border border-gray-200 p-4 text-center shadow-sm flex-shrink-0 min-w-[140px]">
                        <div class="text-sm text-gray-600 mb-2">Jum, 5 Sep 2025</div>
                        <div class="text-lg font-bold text-red-600">IDR 700.000</div>
                    </div>
                    <div class="bg-white rounded-lg border border-gray-200 p-4 text-center shadow-sm flex-shrink-0 min-w-[140px]">
                        <div class="text-sm text-gray-600 mb-2">Sab, 6 Sep 2025</div>
                        <div class="text-lg font-bold text-red-600">IDR 750.000</div>
                    </div>
                    <div class="bg-white rounded-lg border border-gray-200 p-4 text-center shadow-sm flex-shrink-0 min-w-[140px]">
                        <div class="text-sm text-gray-600 mb-2">Min, 7 Sep 2025</div>
                        <div class="text-lg font-bold text-red-600">IDR 680.000</div>
                    </div>
                    <!-- Additional dates for more scrolling -->
                    <div class="bg-white rounded-lg border border-gray-200 p-4 text-center shadow-sm flex-shrink-0 min-w-[140px]">
                        <div class="text-sm text-gray-600 mb-2">Sen, 8 Sep 2025</div>
                        <div class="text-lg font-bold text-red-600">IDR 720.000</div>
                    </div>
                    <div class="bg-white rounded-lg border border-gray-200 p-4 text-center shadow-sm flex-shrink-0 min-w-[140px]">
                        <div class="text-sm text-gray-600 mb-2">Sel, 9 Sep 2025</div>
                        <div class="text-lg font-bold text-red-600">IDR 690.000</div>
                    </div>
                    <div class="bg-white rounded-lg border border-gray-200 p-4 text-center shadow-sm flex-shrink-0 min-w-[140px]">
                        <div class="text-sm text-gray-600 mb-2">Rab, 10 Sep 2025</div>
                        <div class="text-lg font-bold text-red-600">IDR 640.000</div>
                    </div>
                </div>
                
                <!-- Scroll Indicators -->
                <div class="flex justify-center mt-4 space-x-2">
                    <div class="w-2 h-2 bg-gray-300 rounded-full scroll-indicator active cursor-pointer" onclick="scrollToIndicator(0)"></div>
                    <div class="w-2 h-2 bg-gray-300 rounded-full scroll-indicator cursor-pointer" onclick="scrollToIndicator(1)"></div>
                    <div class="w-2 h-2 bg-gray-300 rounded-full scroll-indicator cursor-pointer" onclick="scrollToIndicator(2)"></div>
                    <div class="w-2 h-2 bg-gray-300 rounded-full scroll-indicator cursor-pointer" onclick="scrollToIndicator(3)"></div>
                </div>
            </div>
        </div>

        @include('partials.flight-result')

        @include('partials.flight-detail')

        <!-- Load More Button -->
        <div class="text-center mt-6 sm:mt-8">
            <button onclick="loadMoreFlights()" class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-6 sm:px-8 py-3 rounded-lg font-medium transition-all duration-300 transform hover:scale-105 active:scale-95 text-sm sm:text-base">
                Load More Flights
            </button>
        </div>
    </div>

</body>

@include('partials.footer')
