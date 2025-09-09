
    @include('partials.head')

    @section('title', 'Train Search - Online Travel')

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
              <button onclick="searchFlights()" class="w-full sm:w-auto text-white px-6 py-2 rounded-lg font-medium transition-all duration-300 transform hover:scale-105 hover:shadow-lg active:scale-95 text-sm sm:text-base bg-gradient-to-r from-[#FE0004] to-[#F6B101]">
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
                        <div class="grid grid-cols-3 gap-2">
                            <button onclick="selectDeparturePopularLocation('Jakarta')" class="p-3 border border-gray-300 rounded-lg hover:bg-gradient-to-r  hover:text-white hover:border-transparent transform hover:scale-105 active:scale-95 transition-all duration-300 ease-out text-sm font-medium text-gray-700">
                                Jakarta
                            </button>
                            <button onclick="selectDeparturePopularLocation('Surabaya')" class="p-3 border border-gray-300 rounded-lg hover:bg-gradient-to-r  hover:text-white hover:border-transparent transform hover:scale-105 active:scale-95 transition-all duration-300 ease-out text-sm font-medium text-gray-700">
                                Surabaya
                            </button>
                            <button onclick="selectDeparturePopularLocation('Medan')" class="p-3 border border-gray-300 rounded-lg hover:bg-gradient-to-r  hover:text-white hover:border-transparent transform hover:scale-105 active:scale-95 transition-all duration-300 ease-out text-sm font-medium text-gray-700">
                                Medan
                            </button>
                            <button onclick="selectDeparturePopularLocation('Makassar')" class="p-3 border border-gray-300 rounded-lg hover:bg-gradient-to-r  hover:text-white hover:border-transparent transform hover:scale-105 active:scale-95 transition-all duration-300 ease-out text-sm font-medium text-gray-700">
                                Makassar
                            </button>
                            <button onclick="selectDeparturePopularLocation('Yogyakarta')" class="p-3 border border-gray-300 rounded-lg hover:bg-gradient-to-r  hover:text-white hover:border-transparent transform hover:scale-105 active:scale-95 transition-all duration-300 ease-out text-sm font-medium text-gray-700">
                                Yogyakarta
                            </button>
                            <button onclick="selectDeparturePopularLocation('Balikpapan')" class="p-3 border border-gray-300 rounded-lg hover:bg-gradient-to-r  hover:text-white hover:border-transparent transform hover:scale-105 active:scale-95 transition-all duration-300 ease-out text-sm font-medium text-gray-700">
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
                        <div class="grid grid-cols-3 gap-2">
                            <button onclick="selectArrivalPopularLocation('Denpasar-Bali')" class="p-3 border border-gray-300 rounded-lg hover:bg-gradient-to-r  hover:text-white hover:border-transparent transform hover:scale-105 active:scale-95 transition-all duration-300 ease-out text-sm font-medium text-gray-700">
                                Denpasar-Bali
                            </button>
                            <button onclick="selectArrivalPopularLocation('Surabaya')" class="p-3 border border-gray-300 rounded-lg hover:bg-gradient-to-r  hover:text-white hover:border-transparent transform hover:scale-105 active:scale-95 transition-all duration-300 ease-out text-sm font-medium text-gray-700">
                                Surabaya
                            </button>
                            <button onclick="selectArrivalPopularLocation('Medan')" class="p-3 border border-gray-300 rounded-lg hover:bg-gradient-to-r  hover:text-white hover:border-transparent transform hover:scale-105 active:scale-95 transition-all duration-300 ease-out text-sm font-medium text-gray-700">
                                Medan
                            </button>
                            <button onclick="selectArrivalPopularLocation('Makassar')" class="p-3 border border-gray-300 rounded-lg hover:bg-gradient-to-r  hover:text-white hover:border-transparent transform hover:scale-105 active:scale-95 transition-all duration-300 ease-out text-sm font-medium text-gray-700">
                                Makassar
                            </button>
                            <button onclick="selectArrivalPopularLocation('Yogyakarta')" class="p-3 border border-gray-300 rounded-lg hover:bg-gradient-to-r  hover:text-white hover:border-transparent transform hover:scale-105 active:scale-95 transition-all duration-300 ease-out text-sm font-medium text-gray-700">
                                Yogyakarta
                            </button>
                            <button onclick="selectArrivalPopularLocation('Balikpapan')" class="p-3 border border-gray-300 rounded-lg hover:bg-gradient-to-r  hover:text-white hover:border-transparent transform hover:scale-105 active:scale-95 transition-all duration-300 ease-out text-sm font-medium text-gray-700">
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


        @include('partials.calender-pp')


        <!-- Passenger Selection Modal -->
        <div id="passengerModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4 transition-all duration-300 ease-out">
            <div class="bg-white rounded-2xl shadow-xl w-full max-w-md max-h-[90vh] flex flex-col transform scale-95 opacity-0 transition-all duration-500 ease-out" id="passengerModalContent">
                <!-- Modal Header -->
                <div class="p-6 border-b border-gray-100">
                    <div class="flex justify-between items-center">
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
                </div>
                
                <!-- Modal Content -->
                <div class="flex-1 overflow-y-auto p-6">
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
                        <div class="relative">
                            <div id="classDropdown" class="w-full p-4 bg-white border-2 border-gray-200 rounded-xl cursor-pointer hover:border-gray-300 transition duration-200 flex items-center justify-between" onclick="toggleClassDropdown()">
                                <span id="selectedClass" class="text-gray-900 font-medium">Economy Class</span>
                                <svg id="dropdownArrow" class="w-5 h-5 text-gray-400 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                            <div id="classOptions" class="absolute top-full left-0 right-0 mt-2 bg-white border border-gray-200 rounded-xl shadow-lg z-[60] hidden max-h-48 overflow-y-auto transition-all duration-150 ease-out">
                                <div class="p-3 hover:bg-gray-50 cursor-pointer transition duration-150 border-b border-gray-100 last:border-b-0" onclick="selectClass('Economy Class')">
                                    <div class="font-medium text-gray-900">Economy Class</div>
                                </div>
                                <div class="p-3 hover:bg-gray-50 cursor-pointer transition duration-150 border-b border-gray-100 last:border-b-0" onclick="selectClass('Business Class')">
                                    <div class="font-medium text-gray-900">Business Class</div>
                                </div>
                                <div class="p-3 hover:bg-gray-50 cursor-pointer transition duration-150" onclick="selectClass('First Class')">
                                    <div class="font-medium text-gray-900">First Class</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Modal Footer - Sticky -->
                <div class="border-t border-gray-100 p-6 bg-white rounded-b-2xl">
                    <div class="flex space-x-4">
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
        <div class="mb-8">
            <!-- Date Cards Container -->
            <div class="relative">
                <!-- Left Arrow Button -->
                <button id="scrollLeft" class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10 bg-white border border-gray-200 rounded-full p-2 shadow-md hover:bg-gray-50 transition-colors duration-150 hidden lg:flex items-center justify-center">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                
                <!-- Right Arrow Button -->
                <button id="scrollRight" class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 bg-white border border-gray-200 rounded-full p-2 shadow-md hover:bg-gray-50 transition-colors duration-150 hidden lg:flex items-center justify-center">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
                
                <div id="dateContainer" class="overflow-x-auto scrollbar-hide lg:mx-12">
                    <div class="flex space-x-3 px-4 pb-4" style="scrollbar-width: none; -ms-overflow-style: none;">
                    
                    <!-- Date Card 1 -->
                    <div class="flex-shrink-0 bg-white border border-gray-200 rounded-2xl p-4 min-w-[120px] hover:border-[#FE0004] hover:shadow-md transition-all duration-200 cursor-pointer group">
                        <div class="text-center">
                            <div class="text-xs text-gray-500 font-medium mb-1">SEN</div>
                            <div class="text-xl font-bold text-gray-900 mb-1">1</div>
                            <div class="text-xs text-gray-500 mb-3">Sep 2025</div>
                            <div class="bg-blue-100 text-blue-700 px-3 py-1.5 rounded-lg text-sm font-medium">600K</div>
                        </div>
                    </div>

                    <!-- Date Card 2 -->
                    <div class="flex-shrink-0 bg-white border border-gray-200 rounded-2xl p-4 min-w-[120px] hover:border-[#FE0004] hover:shadow-md transition-all duration-200 cursor-pointer group">
                        <div class="text-center">
                            <div class="text-xs text-gray-500 font-medium mb-1">SEL</div>
                            <div class="text-xl font-bold text-gray-900 mb-1">2</div>
                            <div class="text-xs text-gray-500 mb-3">Sep 2025</div>
                            <div class="bg-red-100 text-red-700 px-3 py-1.5 rounded-lg text-sm font-medium">650K</div>
                        </div>
                    </div>

                    <!-- Date Card 3 -->
                    <div class="flex-shrink-0 bg-white border border-gray-200 rounded-2xl p-4 min-w-[120px] hover:border-[#FE0004] hover:shadow-md transition-all duration-200 cursor-pointer group">
                        <div class="text-center">
                            <div class="text-xs text-gray-500 font-medium mb-1">RAB</div>
                            <div class="text-xl font-bold text-gray-900 mb-1">3</div>
                            <div class="text-xs text-gray-500 mb-3">Sep 2025</div>
                            <div class="bg-green-100 text-green-700 px-3 py-1.5 rounded-lg text-sm font-medium">580K</div>
                        </div>
                    </div>

                    <!-- Date Card 4 -->
                    <div class="flex-shrink-0 bg-white border border-gray-200 rounded-2xl p-4 min-w-[120px] hover:border-[#FE0004] hover:shadow-md transition-all duration-200 cursor-pointer group">
                        <div class="text-center">
                            <div class="text-xs text-gray-500 font-medium mb-1">KAM</div>
                            <div class="text-xl font-bold text-gray-900 mb-1">4</div>
                            <div class="text-xs text-gray-500 mb-3">Sep 2025</div>
                            <div class="bg-blue-100 text-blue-700 px-3 py-1.5 rounded-lg text-sm font-medium">620K</div>
                        </div>
                    </div>

                    <!-- Date Card 5 -->
                    <div class="flex-shrink-0 bg-white border border-gray-200 rounded-2xl p-4 min-w-[120px] hover:border-[#FE0004] hover:shadow-md transition-all duration-200 cursor-pointer group">
                        <div class="text-center">
                            <div class="text-xs text-gray-500 font-medium mb-1">JUM</div>
                            <div class="text-xl font-bold text-gray-900 mb-1">5</div>
                            <div class="text-xs text-gray-500 mb-3">Sep 2025</div>
                            <div class="bg-red-100 text-red-700 px-3 py-1.5 rounded-lg text-sm font-medium">700K</div>
                        </div>
                    </div>

                    <!-- Date Card 6 -->
                    <div class="flex-shrink-0 bg-white border border-gray-200 rounded-2xl p-4 min-w-[120px] hover:border-[#FE0004] hover:shadow-md transition-all duration-200 cursor-pointer group">
                        <div class="text-center">
                            <div class="text-xs text-gray-500 font-medium mb-1">SAB</div>
                            <div class="text-xl font-bold text-gray-900 mb-1">6</div>
                            <div class="text-xs text-gray-500 mb-3">Sep 2025</div>
                            <div class="bg-red-100 text-red-700 px-3 py-1.5 rounded-lg text-sm font-medium">750K</div>
                        </div>
                    </div>

                    <!-- Date Card 7 -->
                    <div class="flex-shrink-0 bg-white border border-gray-200 rounded-2xl p-4 min-w-[120px] hover:border-[#FE0004] hover:shadow-md transition-all duration-200 cursor-pointer group">
                        <div class="text-center">
                            <div class="text-xs text-gray-500 font-medium mb-1">MIN</div>
                            <div class="text-xl font-bold text-gray-900 mb-1">7</div>
                            <div class="text-xs text-gray-500 mb-3">Sep 2025</div>
                            <div class="bg-blue-100 text-blue-700 px-3 py-1.5 rounded-lg text-sm font-medium">680K</div>
                        </div>
                    </div>

                    <!-- Date Card 8 -->
                    <div class="flex-shrink-0 bg-white border border-gray-200 rounded-2xl p-4 min-w-[120px] hover:border-[#FE0004] hover:shadow-md transition-all duration-200 cursor-pointer group">
                        <div class="text-center">
                            <div class="text-xs text-gray-500 font-medium mb-1">SEL</div>
                            <div class="text-xl font-bold text-gray-900 mb-1">8</div>
                            <div class="text-xs text-gray-500 mb-3">Sep 2025</div>
                            <div class="bg-red-100 text-red-700 px-3 py-1.5 rounded-lg text-sm font-medium">720K</div>
                        </div>
                    </div>

                    <!-- Date Card 9 -->
                    <div class="flex-shrink-0 bg-white border border-gray-200 rounded-2xl p-4 min-w-[120px] hover:border-[#FE0004] hover:shadow-md transition-all duration-200 cursor-pointer group">
                        <div class="text-center">
                            <div class="text-xs text-gray-500 font-medium mb-1">RAB</div>
                            <div class="text-xl font-bold text-gray-900 mb-1">9</div>
                            <div class="text-xs text-gray-500 mb-3">Sep 2025</div>
                            <div class="bg-green-100 text-green-700 px-3 py-1.5 rounded-lg text-sm font-medium">590K</div>
                        </div>
                    </div>

                    <!-- Date Card 10 -->
                    <div class="flex-shrink-0 bg-white border border-gray-200 rounded-2xl p-4 min-w-[120px] hover:border-[#FE0004] hover:shadow-md transition-all duration-200 cursor-pointer group">
                        <div class="text-center">
                            <div class="text-xs text-gray-500 font-medium mb-1">KAM</div>
                            <div class="text-xl font-bold text-gray-900 mb-1">10</div>
                            <div class="text-xs text-gray-500 mb-3">Sep 2025</div>
                            <div class="bg-blue-100 text-blue-700 px-3 py-1.5 rounded-lg text-sm font-medium">610K</div>
                        </div>
                    </div>

                    <!-- Date Card 11 -->
                    <div class="flex-shrink-0 bg-white border border-gray-200 rounded-2xl p-4 min-w-[120px] hover:border-[#FE0004] hover:shadow-md transition-all duration-200 cursor-pointer group">
                        <div class="text-center">
                            <div class="text-xs text-gray-500 font-medium mb-1">JUM</div>
                            <div class="text-xl font-bold text-gray-900 mb-1">11</div>
                            <div class="text-xs text-gray-500 mb-3">Sep 2025</div>
                            <div class="bg-red-100 text-red-700 px-3 py-1.5 rounded-lg text-sm font-medium">780K</div>
                        </div>
                    </div>

                    <!-- Date Card 12 -->
                    <div class="flex-shrink-0 bg-white border border-gray-200 rounded-2xl p-4 min-w-[120px] hover:border-[#FE0004] hover:shadow-md transition-all duration-200 cursor-pointer group">
                        <div class="text-center">
                            <div class="text-xs text-gray-500 font-medium mb-1">SAB</div>
                            <div class="text-xl font-bold text-gray-900 mb-1">12</div>
                            <div class="text-xs text-gray-500 mb-3">Sep 2025</div>
                            <div class="bg-red-100 text-red-700 px-3 py-1.5 rounded-lg text-sm font-medium">800K</div>
                        </div>
                    </div>

                </div>
                </div>
            </div>
            
            <!-- Price Legend -->
            <div class="flex justify-center items-center space-x-6 mt-4 text-xs text-gray-500">
                <div class="flex items-center space-x-2">
                    <div class="w-3 h-3 bg-green-100 rounded"></div>
                    <span>Terbaik</span>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-3 h-3 bg-blue-100 rounded"></div>
                    <span>Normal</span>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-3 h-3 bg-red-100 rounded"></div>
                    <span>Tinggi</span>
                </div>
            </div>
        </div>

        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('dateContainer');
            const scrollLeftBtn = document.getElementById('scrollLeft');
            const scrollRightBtn = document.getElementById('scrollRight');
            
            if (container && scrollLeftBtn && scrollRightBtn) {
                scrollLeftBtn.addEventListener('click', function() {
                    container.scrollBy({
                        left: -200,
                        behavior: 'smooth'
                    });
                });
                
                scrollRightBtn.addEventListener('click', function() {
                    container.scrollBy({
                        left: 200,
                        behavior: 'smooth'
                    });
                });
                
                // Update arrow visibility based on scroll position
                function updateArrows() {
                    const scrollLeft = container.scrollLeft;
                    const maxScroll = container.scrollWidth - container.clientWidth;
                    
                    scrollLeftBtn.style.opacity = scrollLeft > 0 ? '1' : '0.5';
                    scrollRightBtn.style.opacity = scrollLeft < maxScroll ? '1' : '0.5';
                }
                
                container.addEventListener('scroll', updateArrows);
                updateArrows(); // Initial check
            }
        });
        </script>

        @include('partials.train-result')

        @include('partials.train-detail')

        <!-- Load More Button -->
        <div class="text-center mt-6 sm:mt-8">
            <button onclick="loadMoreFlights()" class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-6 sm:px-8 py-3 rounded-lg font-medium transition-all duration-300 transform hover:scale-105 active:scale-95 text-sm sm:text-base">
                Load More Flights
            </button>
        </div>
    </div>

</body>

@include('partials.footer')
