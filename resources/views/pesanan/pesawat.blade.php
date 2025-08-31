<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Flight Search - Online Travel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ["Poppins", "ui-sans-serif", "system-ui", "-apple-system", "Segoe UI", "Roboto", "Helvetica Neue", "Arial", "Noto Sans", "sans-serif"],
                    },
                },
            },
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50 font-poppins">

    <!-- Navigation Bar -->
    <nav class="bg-[F4F7FE]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Brand -->
                <div class="flex items-center">
                    <a href="/" class="text-xl sm:text-2xl font-bold" style="color: #A0AAC3;">.travelling</a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="transition duration-200" style="color: #A0AAC3;">Home</a>
                    <a href="#" class="transition duration-200" style="color: #A0AAC3;">About</a>
                    <a href="#" class="transition duration-200" style="color: #A0AAC3;0">Offers</a>
                    <a href="#" class="transition duration-200" style="color: #A0AAC3;">Our Contact</a>
                </div>

                <!-- Login Button -->
                <div class="flex items-center">
                    <a href="/login" class="text-white px-4 sm:px-6 py-2 rounded-lg font-medium transition duration-200 text-sm sm:text-base" style="background: linear-gradient(90deg, #187499 0%, #36AE7E 100%);">
                        Login
                    </a>
                </div>
            </div>
        </div>
    </nav>

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
        <div id="departureModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
            <div class="bg-white rounded-2xl shadow-xl max-w-md w-full max-h-[85vh] overflow-y-auto">
                <div class="p-6">
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
                        <div id="departureRecentSearches" class="space-y-2">
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
                            <button onclick="selectDeparturePopularLocation('Jakarta')" class="p-3 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-200 text-sm font-medium text-gray-700">
                                Jakarta
                            </button>
                            <button onclick="selectDeparturePopularLocation('Surabaya')" class="p-3 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-200 text-sm font-medium text-gray-700">
                                Surabaya
                            </button>
                            <button onclick="selectDeparturePopularLocation('Medan')" class="p-3 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-200 text-sm font-medium text-gray-700">
                                Medan
                            </button>
                            <button onclick="selectDeparturePopularLocation('Makassar')" class="p-3 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-200 text-sm font-medium text-gray-700">
                                Makassar
                            </button>
                            <button onclick="selectDeparturePopularLocation('Yogyakarta')" class="p-3 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-200 text-sm font-medium text-gray-700">
                                Yogyakarta
                            </button>
                            <button onclick="selectDeparturePopularLocation('Balikpapan')" class="p-3 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-200 text-sm font-medium text-gray-700">
                                Balikpapan
                            </button>
                        </div>
                    </div>
                    
                    <div class="flex space-x-3">
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
        <div id="arrivalModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
            <div class="bg-white rounded-2xl shadow-xl max-w-md w-full max-h-[85vh] overflow-y-auto">
                <div class="p-6">
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
                        <div id="arrivalRecentSearches" class="space-y-2">
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
                            <button onclick="selectArrivalPopularLocation('Denpasar-Bali')" class="p-3 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-200 text-sm font-medium text-gray-700">
                                Denpasar-Bali
                            </button>
                            <button onclick="selectArrivalPopularLocation('Surabaya')" class="p-3 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-200 text-sm font-medium text-gray-700">
                                Surabaya
                            </button>
                            <button onclick="selectArrivalPopularLocation('Medan')" class="p-3 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-200 text-sm font-medium text-gray-700">
                                Medan
                            </button>
                            <button onclick="selectArrivalPopularLocation('Makassar')" class="p-3 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-200 text-sm font-medium text-gray-700">
                                Makassar
                            </button>
                            <button onclick="selectArrivalPopularLocation('Yogyakarta')" class="p-3 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-200 text-sm font-medium text-gray-700">
                                Yogyakarta
                            </button>
                            <button onclick="selectArrivalPopularLocation('Balikpapan')" class="p-3 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-200 text-sm font-medium text-gray-700">
                                Balikpapan
                            </button>
                        </div>
                    </div>
                    
                    <div class="flex space-x-3">
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

        <!-- Date Selection Modal -->
        <div id="dateModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
            <div class="bg-white rounded-2xl shadow-xl max-w-md w-full">
                <div class="p-6">
                    <!-- Header -->
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">Pilih Tanggal</h3>
                            <p class="text-gray-500 text-sm">Tentukan tanggal keberangkatan Anda</p>
                        </div>
                        <button onclick="closeDateModal()" class="text-gray-400 hover:text-gray-600 transition duration-200 p-2 hover:bg-gray-100 rounded-full">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    
                    <!-- Trip Type Options -->
                    <div class="mb-6">
                        <div class="flex space-x-3">
                            <button id="oneWayBtn" onclick="switchTripType('oneWay')" class="flex-1 py-3 px-4 text-center font-medium rounded-lg border border-gray-300 transition duration-200" style="background: linear-gradient(135deg, #187499 0%, #36AE7E 100%); color: white;">
                                Sekali jalan
                            </button>
                            <button id="roundTripBtn" onclick="switchTripType('roundTrip')" class="flex-1 py-3 px-4 text-center font-medium rounded-lg border border-gray-300 transition duration-200 text-gray-700 hover:bg-gray-50">
                                Pulang pergi
                            </button>
                        </div>
                    </div>
                    
                    <!-- Calendar -->
                    <div class="mb-6">
                        <!-- Month Navigation -->
                        <div class="flex justify-between items-center mb-4">
                            <button onclick="previousMonth()" class="p-1 hover:bg-gray-100 rounded transition duration-200">
                                <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                </svg>
                            </button>
                            <h4 class="text-lg font-semibold text-gray-900" id="currentMonth">August 2025</h4>
                            <button onclick="nextMonth()" class="p-1 hover:bg-gray-100 rounded transition duration-200">
                                <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </button>
                        </div>
                        
                        <!-- Day Headers -->
                        <div class="grid grid-cols-7 gap-1 mb-2">
                            <div class="text-center text-sm font-medium text-gray-500 py-2">Mo</div>
                            <div class="text-center text-sm font-medium text-gray-500 py-2">Tu</div>
                            <div class="text-center text-sm font-medium text-gray-500 py-2">We</div>
                            <div class="text-center text-sm font-medium text-gray-500 py-2">Th</div>
                            <div class="text-center text-sm font-medium text-gray-500 py-2">Fr</div>
                            <div class="text-center text-sm font-medium text-gray-500 py-2">Sa</div>
                            <div class="text-center text-sm font-medium text-gray-500 py-2">Su</div>
                        </div>
                        
                        <!-- Calendar Days -->
                        <div id="calendarDays" class="grid grid-cols-7 gap-1">
                            <!-- Calendar days will be generated by JavaScript -->
                        </div>
                    </div>
                    
                    <!-- Selected Dates Display -->
                    <div id="selectedDatesDisplay" class="mb-6 p-4 bg-gray-50 rounded-lg">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Tanggal Keberangkatan</label>
                                <div id="departureDateDisplay" class="p-3 bg-white border border-gray-300 rounded-lg text-gray-500">
                                    Pilih tanggal keberangkatan
                                </div>
                            </div>
                            <div id="returnDateSection">
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Tanggal Pulang</label>
                                <div id="returnDateDisplay" class="p-3 bg-white border border-gray-300 rounded-lg text-gray-500">
                                    Pilih tanggal pulang
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Save Button -->
                    <div class="flex justify-end">
                        <button onclick="saveDate()" class="px-6 py-2 text-white rounded-lg font-medium transition duration-200 shadow-md hover:shadow-lg" style="background: linear-gradient(135deg, #187499 0%, #36AE7E 100%);">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Passenger Selection Modal -->
        <div id="passengerModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
            <div class="bg-white rounded-2xl shadow-2xl max-w-lg w-full">
                <div class="p-8">
                    <div class="flex justify-between items-center mb-8">
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
                    <div class="mb-8">
                        <label class="block text-sm font-semibold text-gray-700 mb-4">Jumlah Penumpang</label>
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
                    <div class="mb-8">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">Kelas</label>
                        <select id="classSelect" class="w-full p-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 text-lg">
                            <option value="Ekonomi">Ekonomi</option>
                            <option value="Bisnis">Bisnis</option>
                            <option value="First Class">First Class</option>
                        </select>
                    </div>
                    
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
        <div class="mb-8 date-cards-container">
            <div class="relative">
                <!-- Left Arrow Button -->
                <button onclick="scrollDateCards('left')" class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10 bg-white border border-gray-200 rounded-full p-2 shadow-sm hover:bg-gray-50 transition-colors duration-150 -ml-4 hidden md:block">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                
                <!-- Right Arrow Button -->
                <button onclick="scrollDateCards('right')" class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 bg-white border border-gray-200 rounded-full p-2 shadow-sm hover:bg-gray-50 transition-colors duration-150 -mr-4 hidden md:block">
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

        <!-- Flight Results -->
        <div class="space-y-3 sm:space-y-4">
            <!-- Flight Card 1 -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4 sm:p-6 hover:shadow-md transition duration-200 flight-card">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
                    <!-- Airline Info -->
                    <div class="flex items-center space-x-3 w-full lg:w-48">
                        <div class="text-red-500 text-xl sm:text-2xl">✈️</div>
                        <div>
                            <div class="font-semibold text-gray-900 text-sm sm:text-base">Lion Air</div>
                            <div class="text-xs sm:text-sm text-gray-500">Flight JT-123</div>
                            <div class="text-xs text-gray-600 font-medium">Ekonomi</div>
                        </div>
                    </div>

                    <!-- Flight Times -->
                    <div class="flex items-center justify-center lg:justify-start space-x-4 sm:space-x-6 w-full lg:w-64">
                        <div class="text-center">
                            <div class="text-lg sm:text-2xl font-bold text-gray-900">20:30</div>
                            <div class="text-xs sm:text-sm text-gray-600">CGK</div>
                        </div>
                        
                        <div class="flex flex-col items-center">
                            <div class="w-12 sm:w-16 h-px bg-gray-300 relative">
                                <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-400 text-xs">✈️</div>
                            </div>
                            <div class="text-xs text-gray-500 mt-1">Langsung</div>
                        </div>
                        
                        <div class="text-center">
                            <div class="text-lg sm:text-2xl font-bold text-gray-900">21:30</div>
                            <div class="text-xs sm:text-sm text-gray-600">DPS</div>
                        </div>
                    </div>

                    <!-- Price -->
                    <div class="text-center lg:text-right w-full lg:w-auto">
                        <div class="text-lg sm:text-xl font-bold text-red-600">IDR 600.000</div>
                        <div class="text-xs sm:text-sm text-gray-500">per passenger</div>
                        <div class="flex space-x-2 mt-2">
                            <button onclick="toggleFlightDetail('flight1')" class="flex-1 text-gray-700 px-4 py-2 rounded-lg text-xs sm:text-sm font-medium transition-all duration-300 transform hover:scale-105 hover:shadow-md active:scale-95 border border-gray-300 hover:bg-gray-50">
                                Detail
                            </button>
                            <button class="flex-1 text-white px-4 py-2 rounded-lg text-xs sm:text-sm font-medium transition-all duration-300 transform hover:scale-105 hover:shadow-lg active:scale-95" style="background: linear-gradient(90deg, #187499 0%, #36AE7E 100%);">
                                Pilih
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Flight Detail Dropdown -->
                <div id="flight1" class="hidden mt-4 pt-4 border-t border-gray-200">
                    <div class="bg-gray-50 rounded-lg p-4">
                        <!-- Flight Route Info -->
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-4">
                                <div class="text-center">
                                    <div class="text-lg font-bold text-gray-900">20:30</div>
                                    <div class="text-sm text-gray-600">CGK</div>
                                </div>
                                <div class="flex flex-col items-center">
                                    <div class="w-8 h-px bg-gray-400 relative">
                                        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-500 text-xs">✈️</div>
                                    </div>
                                    <div class="text-xs text-gray-500 mt-1">1 jam</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-lg font-bold text-gray-900">21:30</div>
                                    <div class="text-sm text-gray-600">DPS</div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-sm font-semibold text-gray-900">Lion Air</div>
                                <div class="text-xs text-gray-600">JT-123</div>
                            </div>
                        </div>
                        
                        <!-- Airport Details -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <div class="text-sm font-semibold text-gray-900">Jakarta</div>
                                <div class="text-xs text-gray-600">Soekarno-Hatta International Airport</div>
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-gray-900">Bali</div>
                                <div class="text-xs text-gray-600">Ngurah Rai International Airport</div>
                            </div>
                        </div>
                        
                        <!-- Class and Amenities -->
                        <div class="border-t border-gray-200 pt-4">
                            <div class="flex items-center justify-between mb-3">
                                <div class="text-sm font-semibold text-gray-900">Kelas: Ekonomi</div>
                                <div class="text-sm text-gray-600">1 Sep 2025</div>
                            </div>
                            
                            <!-- Amenities -->
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                    </svg>
                                    <span>Bagasi 0 kg</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                    </svg>
                                    <span>Kabin 7 kg</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path>
                                    </svg>
                                    <span>Wi-Fi</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                    <span>USB</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Flight Card 2 -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4 sm:p-6 hover:shadow-md transition duration-200 flight-card">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
                    <!-- Airline Info -->
                    <div class="flex items-center space-x-3 w-full lg:w-48">
                        <div class="text-blue-500 text-xl sm:text-2xl">✈️</div>
                        <div>
                            <div class="font-semibold text-gray-900 text-sm sm:text-base">Garuda Indonesia</div>
                            <div class="text-xs sm:text-sm text-gray-500">Flight GA-456</div>
                            <div class="text-xs text-gray-600 font-medium">Ekonomi</div>
                        </div>
                    </div>

                    <!-- Flight Times -->
                    <div class="flex items-center justify-center lg:justify-start space-x-4 sm:space-x-6 w-full lg:w-64">
                        <div class="text-center">
                            <div class="text-lg sm:text-2xl font-bold text-gray-900">21:15</div>
                            <div class="text-xs sm:text-sm text-gray-600">CGK</div>
                        </div>
                        
                        <div class="flex flex-col items-center">
                            <div class="w-12 sm:w-16 h-px bg-gray-300 relative">
                                <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-400 text-xs">✈️</div>
                            </div>
                            <div class="text-xs text-gray-500 mt-1">Langsung</div>
                        </div>
                        
                        <div class="text-center">
                            <div class="text-lg sm:text-2xl font-bold text-gray-900">22:15</div>
                            <div class="text-xs sm:text-sm text-gray-600">DPS</div>
                        </div>
                    </div>

                    <!-- Price -->
                    <div class="text-center lg:text-right w-full lg:w-auto">
                        <div class="text-lg sm:text-xl font-bold text-red-600">IDR 750.000</div>
                        <div class="text-xs sm:text-sm text-gray-500">per passenger</div>
                        <div class="flex space-x-2 mt-2">
                            <button onclick="toggleFlightDetail('flight2')" class="flex-1 text-gray-700 px-4 py-2 rounded-lg text-xs sm:text-sm font-medium transition-all duration-300 transform hover:scale-105 hover:shadow-md active:scale-95 border border-gray-300 hover:bg-gray-50">
                                Detail
                            </button>
                            <button class="flex-1 text-white px-4 py-2 rounded-lg text-xs sm:text-sm font-medium transition-all duration-300 transform hover:scale-105 hover:shadow-lg active:scale-95" style="background: linear-gradient(90deg, #187499 0%, #36AE7E 100%);">
                                Pilih
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Flight Detail Dropdown -->
                <div id="flight2" class="hidden mt-4 pt-4 border-t border-gray-200">
                    <div class="bg-gray-50 rounded-lg p-4">
                        <!-- Flight Route Info -->
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-4">
                                <div class="text-center">
                                    <div class="text-lg font-bold text-gray-900">21:15</div>
                                    <div class="text-sm text-gray-600">CGK</div>
                                </div>
                                <div class="flex flex-col items-center">
                                    <div class="w-8 h-px bg-gray-400 relative">
                                        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-500 text-xs">✈️</div>
                                    </div>
                                    <div class="text-xs text-gray-500 mt-1">1 jam</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-lg font-bold text-gray-900">22:15</div>
                                    <div class="text-sm text-gray-600">DPS</div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-sm font-semibold text-gray-900">Garuda Indonesia</div>
                                <div class="text-xs text-gray-600">GA-456</div>
                            </div>
                        </div>
                        
                        <!-- Airport Details -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <div class="text-sm font-semibold text-gray-900">Jakarta</div>
                                <div class="text-xs text-gray-600">Soekarno-Hatta International Airport</div>
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-gray-900">Bali</div>
                                <div class="text-xs text-gray-600">Ngurah Rai International Airport</div>
                            </div>
                        </div>
                        
                        <!-- Class and Amenities -->
                        <div class="border-t border-gray-200 pt-4">
                            <div class="flex items-center justify-between mb-3">
                                <div class="text-sm font-semibold text-gray-900">Kelas: Ekonomi</div>
                                <div class="text-sm text-gray-600">1 Sep 2025</div>
                            </div>
                            
                            <!-- Amenities -->
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                    </svg>
                                    <span>Bagasi 20 kg</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                    </svg>
                                    <span>Kabin 7 kg</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                    <span>Hiburan</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path>
                                    </svg>
                                    <span>Wi-Fi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Flight Card 3 -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4 sm:p-6 hover:shadow-md transition duration-200 flight-card">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
                    <!-- Airline Info -->
                    <div class="flex items-center space-x-3 w-full lg:w-48">
                        <div class="text-orange-500 text-xl sm:text-2xl">✈️</div>
                        <div>
                            <div class="font-semibold text-gray-900 text-sm sm:text-base">AirAsia</div>
                            <div class="text-xs sm:text-sm text-gray-500">Flight AK-789</div>
                            <div class="text-xs text-gray-600 font-medium">Ekonomi</div>
                        </div>
                    </div>

                    <!-- Flight Times -->
                    <div class="flex items-center justify-center lg:justify-start space-x-4 sm:space-x-6 w-full lg:w-64">
                        <div class="text-center">
                            <div class="text-lg sm:text-2xl font-bold text-gray-900">19:45</div>
                            <div class="text-xs sm:text-sm text-gray-600">CGK</div>
                        </div>
                        
                        <div class="flex flex-col items-center">
                            <div class="w-12 sm:w-16 h-px bg-gray-300 relative">
                                <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-400 text-xs">✈️</div>
                            </div>
                            <div class="text-xs text-gray-500 mt-1">Langsung</div>
                        </div>
                        
                        <div class="text-center">
                            <div class="text-lg sm:text-2xl font-bold text-gray-900">20:45</div>
                            <div class="text-xs sm:text-sm text-gray-600">DPS</div>
                        </div>
                    </div>

                    <!-- Price -->
                    <div class="text-center lg:text-right w-full lg:w-auto">
                        <div class="text-lg sm:text-xl font-bold text-red-600">IDR 550.000</div>
                        <div class="text-xs sm:text-sm text-gray-500">per passenger</div>
                        <div class="flex space-x-2 mt-2">
                            <button onclick="toggleFlightDetail('flight3')" class="flex-1 text-gray-700 px-4 py-2 rounded-lg text-xs sm:text-sm font-medium transition-all duration-300 transform hover:scale-105 hover:shadow-md active:scale-95 border border-gray-300 hover:bg-gray-50">
                                Detail
                            </button>
                            <button class="flex-1 text-white px-4 py-2 rounded-lg text-xs sm:text-sm font-medium transition-all duration-300 transform hover:scale-105 hover:shadow-lg active:scale-95" style="background: linear-gradient(90deg, #187499 0%, #36AE7E 100%);">
                                Pilih
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Flight Detail Dropdown -->
                <div id="flight3" class="hidden mt-4 pt-4 border-t border-gray-200">
                    <div class="bg-gray-50 rounded-lg p-4">
                        <!-- Flight Route Info -->
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-4">
                                <div class="text-center">
                                    <div class="text-lg font-bold text-gray-900">19:45</div>
                                    <div class="text-sm text-gray-600">CGK</div>
                                </div>
                                <div class="flex flex-col items-center">
                                    <div class="w-8 h-px bg-gray-400 relative">
                                        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-500 text-xs">✈️</div>
                                    </div>
                                    <div class="text-xs text-gray-500 mt-1">1 jam</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-lg font-bold text-gray-900">20:45</div>
                                    <div class="text-sm text-gray-600">DPS</div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-sm font-semibold text-gray-900">AirAsia</div>
                                <div class="text-xs text-gray-600">AK-789</div>
                            </div>
                        </div>
                        
                        <!-- Airport Details -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <div class="text-sm font-semibold text-gray-900">Jakarta</div>
                                <div class="text-xs text-gray-600">Soekarno-Hatta International Airport</div>
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-gray-900">Bali</div>
                                <div class="text-xs text-gray-600">Ngurah Rai International Airport</div>
                            </div>
                        </div>
                        
                        <!-- Class and Amenities -->
                        <div class="border-t border-gray-200 pt-4">
                            <div class="flex items-center justify-between mb-3">
                                <div class="text-sm font-semibold text-gray-900">Kelas: Ekonomi</div>
                                <div class="text-sm text-gray-600">1 Sep 2025</div>
                            </div>
                            
                            <!-- Amenities -->
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                    </svg>
                                    <span>Bagasi 0 kg</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                    </svg>
                                    <span>Kabin 7 kg</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path>
                                    </svg>
                                    <span>Wi-Fi</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                    <span>USB</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Flight Card 4 -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4 sm:p-6 hover:shadow-md transition duration-200 flight-card">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
                    <!-- Airline Info -->
                    <div class="flex items-center space-x-3 w-full lg:w-48">
                        <div class="text-purple-500 text-xl sm:text-2xl">✈️</div>
                        <div>
                            <div class="font-semibold text-gray-900 text-sm sm:text-base">Citilink</div>
                            <div class="text-xs sm:text-sm text-gray-500">Flight QG-321</div>
                            <div class="text-xs text-gray-600 font-medium">Ekonomi</div>
                        </div>
                    </div>

                    <!-- Flight Times -->
                    <div class="flex items-center justify-center lg:justify-start space-x-4 sm:space-x-6 w-full lg:w-64">
                        <div class="text-center">
                            <div class="text-lg sm:text-2xl font-bold text-gray-900">22:00</div>
                            <div class="text-xs sm:text-sm text-gray-600">CGK</div>
                        </div>
                        
                        <div class="flex flex-col items-center">
                            <div class="w-12 sm:w-16 h-px bg-gray-300 relative">
                                <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-400 text-xs">✈️</div>
                            </div>
                            <div class="text-xs text-gray-500 mt-1">Langsung</div>
                        </div>
                        
                        <div class="text-center">
                            <div class="text-lg sm:text-2xl font-bold text-gray-900">23:00</div>
                            <div class="text-xs sm:text-sm text-gray-600">DPS</div>
                        </div>
                    </div>

                    <!-- Price -->
                    <div class="text-center lg:text-right w-full lg:w-auto">
                        <div class="text-lg sm:text-xl font-bold text-red-600">IDR 520.000</div>
                        <div class="text-xs sm:text-sm text-gray-500">per passenger</div>
                        <div class="flex space-x-2 mt-2">
                            <button onclick="toggleFlightDetail('flight4')" class="flex-1 text-gray-700 px-4 py-2 rounded-lg text-xs sm:text-sm font-medium transition-all duration-300 transform hover:scale-105 hover:shadow-md active:scale-95 border border-gray-300 hover:bg-gray-50">
                                Detail
                            </button>
                            <button class="flex-1 text-white px-4 py-2 rounded-lg text-xs sm:text-sm font-medium transition-all duration-300 transform hover:scale-105 hover:shadow-lg active:scale-95" style="background: linear-gradient(90deg, #187499 0%, #36AE7E 100%);">
                                Pilih
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Flight Detail Dropdown -->
                <div id="flight4" class="hidden mt-4 pt-4 border-t border-gray-200">
                    <div class="bg-gray-50 rounded-lg p-4">
                        <!-- Flight Route Info -->
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-4">
                                <div class="text-center">
                                    <div class="text-lg font-bold text-gray-900">22:00</div>
                                    <div class="text-sm text-gray-600">CGK</div>
                                </div>
                                <div class="flex flex-col items-center">
                                    <div class="w-8 h-px bg-gray-400 relative">
                                        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-500 text-xs">✈️</div>
                                    </div>
                                    <div class="text-xs text-gray-500 mt-1">1 jam</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-lg font-bold text-gray-900">23:00</div>
                                    <div class="text-sm text-gray-600">DPS</div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-sm font-semibold text-gray-900">Citilink</div>
                                <div class="text-xs text-gray-600">QG-321</div>
                            </div>
                        </div>
                        
                        <!-- Airport Details -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <div class="text-sm font-semibold text-gray-900">Jakarta</div>
                                <div class="text-xs text-gray-600">Soekarno-Hatta International Airport</div>
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-gray-900">Bali</div>
                                <div class="text-xs text-gray-600">Ngurah Rai International Airport</div>
                            </div>
                        </div>
                        
                        <!-- Class and Amenities -->
                        <div class="border-t border-gray-200 pt-4">
                            <div class="flex items-center justify-between mb-3">
                                <div class="text-sm font-semibold text-gray-900">Kelas: Ekonomi</div>
                                <div class="text-sm text-gray-600">1 Sep 2025</div>
                            </div>
                            
                            <!-- Amenities -->
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                    </svg>
                                    <span>Bagasi 0 kg</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                    </svg>
                                    <span>Kabin 7 kg</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path>
                                    </svg>
                                    <span>Wi-Fi</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                    <span>USB</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Flight Card 5 -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4 sm:p-6 hover:shadow-md transition duration-200 flight-card">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
                    <!-- Airline Info -->
                    <div class="flex items-center space-x-3 w-full lg:w-48">
                        <div class="text-green-500 text-xl sm:text-2xl">✈️</div>
                        <div>
                            <div class="font-semibold text-gray-900 text-sm sm:text-base">Batik Air</div>
                            <div class="text-xs sm:text-sm text-gray-500">Flight ID-654</div>
                            <div class="text-xs text-gray-600 font-medium">Ekonomi</div>
                        </div>
                    </div>

                    <!-- Flight Times -->
                    <div class="flex items-center justify-center lg:justify-start space-x-4 sm:space-x-6 w-full lg:w-64">
                        <div class="text-center">
                            <div class="text-lg sm:text-2xl font-bold text-gray-900">18:30</div>
                            <div class="text-xs sm:text-sm text-gray-600">CGK</div>
                        </div>
                        
                        <div class="flex flex-col items-center">
                            <div class="w-12 sm:w-16 h-px bg-gray-300 relative">
                                <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-400 text-xs">✈️</div>
                            </div>
                            <div class="text-xs text-gray-500 mt-1">Langsung</div>
                        </div>
                        
                        <div class="text-center">
                            <div class="text-lg sm:text-2xl font-bold text-gray-900">19:30</div>
                            <div class="text-xs sm:text-sm text-gray-600">DPS</div>
                        </div>
                    </div>

                    <!-- Price -->
                    <div class="text-center lg:text-right w-full lg:w-auto">
                        <div class="text-lg sm:text-xl font-bold text-red-600">IDR 680.000</div>
                        <div class="text-xs sm:text-sm text-gray-500">per passenger</div>
                        <div class="flex space-x-2 mt-2">
                            <button onclick="toggleFlightDetail('flight5')" class="flex-1 text-gray-700 px-4 py-2 rounded-lg text-xs sm:text-sm font-medium transition-all duration-300 transform hover:scale-105 hover:shadow-md active:scale-95 border border-gray-300 hover:bg-gray-50">
                                Detail
                            </button>
                            <button class="flex-1 text-white px-4 py-2 rounded-lg text-xs sm:text-sm font-medium transition-all duration-300 transform hover:scale-105 hover:shadow-lg active:scale-95" style="background: linear-gradient(90deg, #187499 0%, #36AE7E 100%);">
                                Pilih
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Flight Detail Dropdown -->
                <div id="flight5" class="hidden mt-4 pt-4 border-t border-gray-200">
                    <div class="bg-gray-50 rounded-lg p-4">
                        <!-- Flight Route Info -->
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-4">
                                <div class="text-center">
                                    <div class="text-lg font-bold text-gray-900">18:30</div>
                                    <div class="text-sm text-gray-600">CGK</div>
                                </div>
                                <div class="flex flex-col items-center">
                                    <div class="w-8 h-px bg-gray-400 relative">
                                        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-500 text-xs">✈️</div>
                                    </div>
                                    <div class="text-xs text-gray-500 mt-1">1 jam</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-lg font-bold text-gray-900">19:30</div>
                                    <div class="text-sm text-gray-600">DPS</div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-sm font-semibold text-gray-900">Batik Air</div>
                                <div class="text-xs text-gray-600">ID-654</div>
                            </div>
                        </div>
                        
                        <!-- Airport Details -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <div class="text-sm font-semibold text-gray-900">Jakarta</div>
                                <div class="text-xs text-gray-600">Soekarno-Hatta International Airport</div>
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-gray-900">Bali</div>
                                <div class="text-xs text-gray-600">Ngurah Rai International Airport</div>
                            </div>
                        </div>
                        
                        <!-- Class and Amenities -->
                        <div class="border-t border-gray-200 pt-4">
                            <div class="flex items-center justify-between mb-3">
                                <div class="text-sm font-semibold text-gray-900">Kelas: Ekonomi</div>
                                <div class="text-sm text-gray-600">1 Sep 2025</div>
                            </div>
                            
                            <!-- Amenities -->
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                    </svg>
                                    <span>Bagasi 15 kg</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                    </svg>
                                    <span>Kabin 7 kg</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                    <span>Hiburan</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path>
                                    </svg>
                                    <span>Wi-Fi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Flight Cards for Load More Testing -->
            <div id="additionalFlights" class="hidden space-y-3 sm:space-y-4">
                            <!-- Flight Card 6 -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4 sm:p-6 hover:shadow-md transition duration-200 flight-card">
                    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
                        <!-- Airline Info -->
                        <div class="flex items-center space-x-3 w-full lg:w-48">
                            <div class="text-indigo-500 text-xl sm:text-2xl">✈️</div>
                                                    <div>
                            <div class="font-semibold text-gray-900 text-sm sm:text-base">Sriwijaya Air</div>
                            <div class="text-xs sm:text-sm text-gray-500">Flight SJ-123</div>
                            <div class="text-xs text-gray-600 font-medium">Ekonomi</div>
                        </div>
                        </div>

                        <!-- Flight Times -->
                        <div class="flex items-center justify-center lg:justify-start space-x-4 sm:space-x-6 w-full lg:w-64">
                            <div class="text-center">
                                <div class="text-lg sm:text-2xl font-bold text-gray-900">16:00</div>
                                <div class="text-xs sm:text-sm text-gray-600">CGK</div>
                            </div>
                            
                            <div class="flex flex-col items-center">
                                <div class="w-12 sm:w-16 h-px bg-gray-300 relative">
                                    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-400 text-xs">✈️</div>
                                </div>
                                <div class="text-xs text-gray-500 mt-1">Langsung</div>
                            </div>
                            
                            <div class="text-center">
                                <div class="text-lg sm:text-2xl font-bold text-gray-900">17:00</div>
                                <div class="text-xs sm:text-sm text-gray-600">DPS</div>
                            </div>
                        </div>

                        <!-- Price -->
                        <div class="text-center lg:text-right w-full lg:w-auto">
                            <div class="text-lg sm:text-xl font-bold text-red-600">IDR 480.000</div>
                            <div class="text-xs sm:text-sm text-gray-500">per passenger</div>
                            <div class="flex space-x-2 mt-2">
                                <button onclick="toggleFlightDetail('flight6')" class="flex-1 text-gray-700 px-4 py-2 rounded-lg text-xs sm:text-sm font-medium transition-all duration-300 transform hover:scale-105 hover:shadow-md active:scale-95 border border-gray-300 hover:bg-gray-50">
                                    Detail
                                </button>
                                <button class="flex-1 text-white px-4 py-2 rounded-lg text-xs sm:text-sm font-medium transition-all duration-300 transform hover:scale-105 hover:shadow-lg active:scale-95" style="background: linear-gradient(90deg, #187499 0%, #36AE7E 100%);">
                                    Pilih
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Flight Detail Dropdown -->
                    <div id="flight6" class="hidden mt-4 pt-4 border-t border-gray-200">
                        <div class="bg-gray-50 rounded-lg p-4">
                            <!-- Flight Route Info -->
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center space-x-4">
                                    <div class="text-center">
                                        <div class="text-lg font-bold text-gray-900">16:00</div>
                                        <div class="text-sm text-gray-600">CGK</div>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-8 h-px bg-gray-400 relative">
                                            <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-500 text-xs">✈️</div>
                                        </div>
                                        <div class="text-xs text-gray-500 mt-1">1 jam</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-lg font-bold text-gray-900">17:00</div>
                                        <div class="text-sm text-gray-600">DPS</div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <div class="text-sm font-semibold text-gray-900">Sriwijaya Air</div>
                                    <div class="text-xs text-gray-600">SJ-123</div>
                                </div>
                            </div>
                            
                            <!-- Airport Details -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <div class="text-sm font-semibold text-gray-900">Jakarta</div>
                                    <div class="text-xs text-gray-600">Soekarno-Hatta International Airport</div>
                                </div>
                                <div>
                                    <div class="text-sm font-semibold text-gray-900">Bali</div>
                                    <div class="text-xs text-gray-600">Ngurah Rai International Airport</div>
                                </div>
                            </div>
                            
                            <!-- Class and Amenities -->
                            <div class="border-t border-gray-200 pt-4">
                                <div class="flex items-center justify-between mb-3">
                                    <div class="text-sm font-semibold text-gray-900">Kelas: Ekonomi</div>
                                    <div class="text-sm text-gray-600">1 Sep 2025</div>
                                </div>
                                
                                <!-- Amenities -->
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                                    <div class="flex items-center text-sm text-gray-600">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                        </svg>
                                        <span>Bagasi 0 kg</span>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-600">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                        </svg>
                                        <span>Kabin 7 kg</span>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-600">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path>
                                        </svg>
                                        <span>Wi-Fi</span>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-600">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                        </svg>
                                        <span>USB</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                            <!-- Flight Card 7 -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4 sm:p-6 hover:shadow-md transition duration-200 flight-card">
                    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
                        <!-- Airline Info -->
                        <div class="flex items-center space-x-3 w-full lg:w-48">
                            <div class="text-pink-500 text-xl sm:text-2xl">✈️</div>
                                                    <div>
                            <div class="font-semibold text-gray-900 text-sm sm:text-base">Wings Air</div>
                            <div class="text-xs sm:text-sm text-gray-500">Flight IW-456</div>
                            <div class="text-xs text-gray-600 font-medium">Ekonomi</div>
                        </div>
                        </div>

                        <!-- Flight Times -->
                        <div class="flex items-center justify-center lg:justify-start space-x-4 sm:space-x-6 w-full lg:w-64">
                            <div class="text-center">
                                <div class="text-lg sm:text-2xl font-bold text-gray-900">14:30</div>
                                <div class="text-xs sm:text-sm text-gray-600">CGK</div>
                            </div>
                            
                            <div class="flex flex-col items-center">
                                <div class="w-12 sm:w-16 h-px bg-gray-300 relative">
                                    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-400 text-xs">✈️</div>
                                </div>
                                <div class="text-xs text-gray-500 mt-1">Langsung</div>
                            </div>
                            
                            <div class="text-center">
                                <div class="text-lg sm:text-2xl font-bold text-gray-900">15:30</div>
                                <div class="text-xs sm:text-sm text-gray-600">DPS</div>
                            </div>
                        </div>

                        <!-- Price -->
                        <div class="text-center lg:text-right w-full lg:w-auto">
                            <div class="text-lg sm:text-xl font-bold text-red-600">IDR 450.000</div>
                            <div class="text-xs sm:text-sm text-gray-500">per passenger</div>
                            <div class="flex space-x-2 mt-2">
                                <button onclick="toggleFlightDetail('flight7')" class="flex-1 text-gray-700 px-4 py-2 rounded-lg text-xs sm:text-sm font-medium transition-all duration-300 transform hover:scale-105 hover:shadow-md active:scale-95 border border-gray-300 hover:bg-gray-50">
                                    Detail
                                </button>
                                <button class="flex-1 text-white px-4 py-2 rounded-lg text-xs sm:text-sm font-medium transition-all duration-300 transform hover:scale-105 hover:shadow-lg active:scale-95" style="background: linear-gradient(90deg, #187499 0%, #36AE7E 100%);">
                                    Pilih
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Flight Detail Dropdown -->
                    <div id="flight7" class="hidden mt-4 pt-4 border-t border-gray-200">
                        <div class="bg-gray-50 rounded-lg p-4">
                            <!-- Flight Route Info -->
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center space-x-4">
                                    <div class="text-center">
                                        <div class="text-lg font-bold text-gray-900">14:30</div>
                                        <div class="text-sm text-gray-600">CGK</div>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-8 h-px bg-gray-400 relative">
                                            <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-500 text-xs">✈️</div>
                                        </div>
                                        <div class="text-xs text-gray-500 mt-1">1 jam</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-lg font-bold text-gray-900">15:30</div>
                                        <div class="text-sm text-gray-600">DPS</div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <div class="text-sm font-semibold text-gray-900">Wings Air</div>
                                    <div class="text-xs text-gray-600">IW-456</div>
                                </div>
                            </div>
                            
                            <!-- Airport Details -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <div class="text-sm font-semibold text-gray-900">Jakarta</div>
                                    <div class="text-xs text-gray-600">Soekarno-Hatta International Airport</div>
                                </div>
                                <div>
                                    <div class="text-sm font-semibold text-gray-900">Bali</div>
                                    <div class="text-xs text-gray-600">Ngurah Rai International Airport</div>
                                </div>
                            </div>
                            
                            <!-- Class and Amenities -->
                            <div class="border-t border-gray-200 pt-4">
                                <div class="flex items-center justify-between mb-3">
                                    <div class="text-sm font-semibold text-gray-900">Kelas: Ekonomi</div>
                                    <div class="text-sm text-gray-600">1 Sep 2025</div>
                                </div>
                                
                                <!-- Amenities -->
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                                    <div class="flex items-center text-sm text-gray-600">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                        </svg>
                                        <span>Bagasi 0 kg</span>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-600">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                        </svg>
                                        <span>Kabin 7 kg</span>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-600">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path>
                                        </svg>
                                        <span>Wi-Fi</span>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-600">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                        </svg>
                                        <span>USB</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-6 sm:mt-8">
            <button onclick="loadMoreFlights()" class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-6 sm:px-8 py-3 rounded-lg font-medium transition-all duration-300 transform hover:scale-105 active:scale-95 text-sm sm:text-base">
                Load More Flights
            </button>
        </div>
    </div>

    <!-- Flight Detail Modal -->
    <div id="flightDetailModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
        <div class="bg-gray-800 rounded-2xl shadow-xl max-w-md w-full max-h-[85vh] overflow-y-auto">
            <div class="p-6">
                <!-- Header -->
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-bold text-white mb-1">Detail Penerbangan</h3>
                    <button onclick="closeFlightDetailModal()" class="text-gray-400 hover:text-gray-200 transition duration-200 p-2 hover:bg-gray-700 rounded-full">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                
                <!-- Flight Timeline -->
                <div class="relative mb-6">
                    <!-- Departure -->
                    <div class="flex items-start mb-8">
                        <div class="flex-shrink-0 w-4 h-4 rounded-full mr-4" style="background: linear-gradient(135deg, #60A5FA 0%, #34D399 100%);"></div>
                        <div class="flex-1">
                            <div class="text-2xl font-bold text-white" id="departureTime">20.30</div>
                            <div class="text-sm text-gray-400 mb-1" id="departureDate">1 sep 2025</div>
                            <div class="text-lg font-bold text-white" id="departureCity">Jakarta</div>
                            <div class="text-sm text-gray-400" id="departureAirport">Soekarno hatta international airport</div>
                        </div>
                    </div>
                    
                    <!-- Flight Duration -->
                    <div class="absolute left-2 top-8 text-xs text-gray-400" id="flightDuration">1j</div>
                    
                    <!-- Timeline Line -->
                    <div class="absolute left-2 top-4 w-0.5 h-16 bg-gray-600"></div>
                    
                    <!-- Airline Info -->
                    <div class="ml-6 mb-8">
                        <div class="text-lg font-bold text-white text-center mb-4" id="airlineName">Lion Air</div>
                        
                        <!-- Amenities -->
                        <div class="space-y-3">
                            <div class="flex items-center text-sm text-gray-400">
                                <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                                <span>Bagasi 0 kg</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-400">
                                <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                                <span>Bagasi kabin 7 kg</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-400">
                                <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                </svg>
                                <span>Tidak ada hiburan</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-400">
                                <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path>
                                </svg>
                                <span>Wifi</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-400">
                                <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                <span>Stop kontak/USB</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Arrival -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-4 h-4 rounded-full mr-4" style="background: linear-gradient(135deg, #14B8A6 0%, #34D399 100%);"></div>
                        <div class="flex-1">
                            <div class="text-2xl font-bold text-white" id="arrivalTime">21.30</div>
                            <div class="text-sm text-gray-400 mb-1" id="arrivalDate">1 sep 2025</div>
                            <div class="text-lg font-bold text-white" id="arrivalCity">Bali</div>
                            <div class="text-sm text-gray-400" id="arrivalAirport">Ngurah rai international airport</div>
                        </div>
                    </div>
                </div>
                
                <div class="flex space-x-3">
                    <button onclick="closeFlightDetailModal()" class="flex-1 px-4 py-2 border border-gray-600 rounded-lg text-gray-300 hover:bg-gray-700 transition-all duration-300 transform hover:scale-105 active:scale-95 font-medium">
                        Tutup
                    </button>
                    <button onclick="selectFlight()" class="flex-1 px-4 py-2 text-white rounded-lg font-medium transition-all duration-300 transform hover:scale-105 hover:shadow-lg active:scale-95" style="background: linear-gradient(135deg, #187499 0%, #36AE7E 100%);">
                        Pilih Penerbangan
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Date Cards Scrolling Functions
        function scrollDateCards(direction) {
            const container = document.getElementById('dateCardsContainer');
            const cardWidth = 140 + 12; // card width + margin
            const visibleCards = Math.floor(container.clientWidth / cardWidth);
            const scrollAmount = cardWidth * Math.max(1, Math.floor(visibleCards / 2));
            
            if (direction === 'left') {
                container.scrollBy({
                    left: -scrollAmount,
                    behavior: 'smooth'
                });
            } else {
                container.scrollBy({
                    left: scrollAmount,
                    behavior: 'smooth'
                });
            }
            
            // Update scroll indicators after scrolling
            setTimeout(updateScrollIndicators, 500);
        }

        // City database for autocomplete
        const cities = [
            { name: "Jakarta", code: "CGK", airport: "Soekarno-Hatta" },
            { name: "Surabaya", code: "SUB", airport: "Juanda" },
            { name: "Medan", code: "KNO", airport: "Kualanamu" },
            { name: "Makassar", code: "UPG", airport: "Sultan Hasanuddin" },
            { name: "Palembang", code: "PLM", airport: "Sultan Mahmud Badaruddin II" },
            { name: "Bali", code: "DPS", airport: "Ngurah Rai" },
            { name: "Bandung", code: "BDO", airport: "Husein Sastranegara" },
            { name: "Semarang", code: "SRG", airport: "Ahmad Yani" },
            { name: "Yogyakarta", code: "JOG", airport: "Adisutjipto" },
            { name: "Manado", code: "MDC", airport: "Sam Ratulangi" },
            { name: "Padang", code: "PDG", airport: "Minangkabau" },
            { name: "Balikpapan", code: "BPN", airport: "Sepinggan" },
            { name: "Denpasar", code: "DPS", airport: "Ngurah Rai" },
            { name: "Batam", code: "BTH", airport: "Hang Nadim" },
            { name: "Pekanbaru", code: "PKU", airport: "Sultan Syarif Kasim II" },
            { name: "Pontianak", code: "PNK", airport: "Supadio" },
            { name: "Samarinda", code: "AAP", airport: "Aji Pangeran Tumenggung Pranoto" },
            { name: "Banjarmasin", code: "BDJ", airport: "Syamsudin Noor" },
            { name: "Kupang", code: "KOE", airport: "El Tari" },
            { name: "Jayapura", code: "DJJ", airport: "Sentani" }
        ];

        // Location Modal Functions
        function openDepartureModal() {
            document.getElementById('departureModal').classList.remove('hidden');
            // Set current value to the search input
            document.getElementById('departureSearchInput').value = '';
            
            // Update modal title based on type
            document.getElementById('departureModalTitle').textContent = 'Pilih Lokasi Keberangkatan';
            document.getElementById('departureModalSubtitle').textContent = 'Pilih kota asal Anda';
            
            // Store the current type for later use
            window.currentLocationType = 'departure';
        }

        function closeDepartureModal() {
            document.getElementById('departureModal').classList.add('hidden');
            // Hide suggestions
            document.getElementById('departureSearchResults').classList.add('hidden');
        }

        function searchDepartureCities() {
            const input = document.getElementById('departureSearchInput');
            const suggestions = document.getElementById('departureSearchResults');
            const query = input.value.toLowerCase().trim();
            
            if (query.length < 2) {
                suggestions.classList.add('hidden');
                return;
            }
            
            const filteredCities = cities.filter(city => 
                city.name.toLowerCase().includes(query) || 
                city.airport.toLowerCase().includes(query)
            );
            
            if (filteredCities.length > 0) {
                suggestions.innerHTML = filteredCities.map(city => `
                    <div class="p-3 hover:bg-gray-50 cursor-pointer border-b border-gray-100 last:border-b-0 transition duration-200" 
                         onclick="selectDepartureLocationCity('${city.name}', '${city.code}', '${city.airport}')">
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="font-medium text-gray-900">${city.name}</div>
                                <div class="text-sm text-gray-500">${city.airport}</div>
                            </div>
                            <span class="text-xs text-gray-400 bg-gray-100 px-2 py-1 rounded">${city.code}</span>
                        </div>
                    </div>
                `).join('');
                suggestions.classList.remove('hidden');
            } else {
                suggestions.classList.add('hidden');
            }
        }

        function selectDepartureLocationCity(cityName, cityCode, airportName) {
            document.getElementById('departureSearchInput').value = cityName;
            document.getElementById('departureSearchResults').classList.add('hidden');
            // Add to recent searches
            addDepartureRecentSearch(cityName, cityCode);
        }

        function saveDepartureLocation() {
            const locationInput = document.getElementById('departureSearchInput').value;
            if (locationInput) {
                // Update the departure location (fromLocation)
                document.getElementById('fromLocation').textContent = locationInput;
                // Add to recent searches if not already added
                addDepartureRecentSearch(locationInput, 'CUSTOM');
            }
            closeDepartureModal();
        }

        // Recent Searches Functions
        function addDepartureRecentSearch(cityName, cityCode) {
            const recentSearchesContainer = document.getElementById('departureRecentSearches');
            const existingSearch = Array.from(recentSearchesContainer.children).find(
                (item) => item.textContent.includes(cityName)
            );

            if (existingSearch) {
                recentSearchesContainer.removeChild(existingSearch);
            }

            const newSearchItem = document.createElement('div');
            newSearchItem.classList.add('flex', 'items-center', 'p-3', 'border', 'border-gray-200', 'rounded-lg', 'hover:bg-gray-50', 'cursor-pointer', 'transition', 'duration-200');
            newSearchItem.innerHTML = `
                <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center mr-3">
                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <div class="flex-1">
                    <div class="text-sm font-medium text-gray-900">${cityName}</div>
                    <div class="text-xs text-gray-500">${cityName.split(',')[0]}</div>
                </div>
                <span class="text-xs text-gray-400 bg-gray-100 px-2 py-1 rounded">${cityCode}</span>
            `;
            newSearchItem.onclick = () => selectDepartureRecentLocation(cityName, cityCode);
            recentSearchesContainer.insertBefore(newSearchItem, recentSearchesContainer.firstChild); // Add to the top
        }

        function selectDepartureRecentLocation(cityName, cityCode) {
            document.getElementById('departureSearchInput').value = cityName;
            document.getElementById('departureSearchResults').classList.add('hidden');
        }

        function clearDepartureRecentSearches() {
            const recentSearchesContainer = document.getElementById('departureRecentSearches');
            recentSearchesContainer.innerHTML = ''; // Clear all recent searches
        }

        // Popular Destinations Functions
        function selectDeparturePopularLocation(cityName) {
            document.getElementById('departureSearchInput').value = cityName;
            document.getElementById('departureSearchResults').classList.add('hidden');
            addDepartureRecentSearch(cityName, 'POP'); // Assuming a placeholder code for popular destinations
        }

        // Hide suggestions when clicking outside
        document.addEventListener('click', function(event) {
            const departureSearchInput = document.getElementById('departureSearchInput');
            const departureSearchResults = document.getElementById('departureSearchResults');
            
            if (!departureSearchInput.contains(event.target) && !departureSearchResults.contains(event.target)) {
                departureSearchResults.classList.add('hidden');
            }
        });

        function openArrivalModal() {
            document.getElementById('arrivalModal').classList.remove('hidden');
            // Set current value to the search input
            document.getElementById('arrivalSearchInput').value = '';
            
            // Update modal title based on type
            document.getElementById('arrivalModalTitle').textContent = 'Pilih Lokasi Kedatangan';
            document.getElementById('arrivalModalSubtitle').textContent = 'Pilih kota tujuan Anda';
            
            // Store the current type for later use
            window.currentLocationType = 'arrival';
        }

        function closeArrivalModal() {
            document.getElementById('arrivalModal').classList.add('hidden');
            // Hide suggestions
            document.getElementById('arrivalSearchResults').classList.add('hidden');
        }

        function searchArrivalCities() {
            const input = document.getElementById('arrivalSearchInput');
            const suggestions = document.getElementById('arrivalSearchResults');
            const query = input.value.toLowerCase().trim();
            
            if (query.length < 2) {
                suggestions.classList.add('hidden');
                return;
            }
            
            const filteredCities = cities.filter(city => 
                city.name.toLowerCase().includes(query) || 
                city.airport.toLowerCase().includes(query)
            );
            
            if (filteredCities.length > 0) {
                suggestions.innerHTML = filteredCities.map(city => `
                    <div class="p-3 hover:bg-gray-50 cursor-pointer border-b border-gray-100 last:border-b-0 transition duration-200" 
                         onclick="selectArrivalLocationCity('${city.name}', '${city.code}', '${city.airport}')">
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="font-medium text-gray-900">${city.name}</div>
                                <div class="text-sm text-gray-500">${city.airport}</div>
                            </div>
                            <span class="text-xs text-gray-400 bg-gray-100 px-2 py-1 rounded">${city.code}</span>
                        </div>
                    </div>
                `).join('');
                suggestions.classList.remove('hidden');
            } else {
                suggestions.classList.add('hidden');
            }
        }

        function selectArrivalLocationCity(cityName, cityCode, airportName) {
            document.getElementById('arrivalSearchInput').value = cityName;
            document.getElementById('arrivalSearchResults').classList.add('hidden');
            // Add to recent searches
            addArrivalRecentSearch(cityName, cityCode);
        }

        function saveArrivalLocation() {
            const locationInput = document.getElementById('arrivalSearchInput').value;
            if (locationInput) {
                // Check if departure and arrival are the same
                const currentDeparture = document.getElementById('fromLocation').textContent;
                if (locationInput === currentDeparture) {
                    alert('Lokasi keberangkatan dan kedatangan tidak boleh sama!');
                    return;
                }
                
                // Update the arrival location (toLocation)
                document.getElementById('toLocation').textContent = locationInput;
                // Add to recent searches if not already added
                addArrivalRecentSearch(locationInput, 'CUSTOM');
            }
            closeArrivalModal();
        }

        // Recent Searches Functions
        function addArrivalRecentSearch(cityName, cityCode) {
            const recentSearchesContainer = document.getElementById('arrivalRecentSearches');
            const existingSearch = Array.from(recentSearchesContainer.children).find(
                (item) => item.textContent.includes(cityName)
            );

            if (existingSearch) {
                recentSearchesContainer.removeChild(existingSearch);
            }

            const newSearchItem = document.createElement('div');
            newSearchItem.classList.add('flex', 'items-center', 'p-3', 'border', 'border-gray-200', 'rounded-lg', 'hover:bg-gray-50', 'cursor-pointer', 'transition', 'duration-200');
            newSearchItem.innerHTML = `
                <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center mr-3">
                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <div class="flex-1">
                    <div class="text-sm font-medium text-gray-900">${cityName}</div>
                    <div class="text-xs text-gray-500">${cityName.split(',')[0]}</div>
                </div>
                <span class="text-xs text-gray-400 bg-gray-100 px-2 py-1 rounded">${cityCode}</span>
            `;
            newSearchItem.onclick = () => selectArrivalRecentLocation(cityName, cityCode);
            recentSearchesContainer.insertBefore(newSearchItem, recentSearchesContainer.firstChild); // Add to the top
        }

        function selectArrivalRecentLocation(cityName, cityCode) {
            document.getElementById('arrivalSearchInput').value = cityName;
            document.getElementById('arrivalSearchResults').classList.add('hidden');
        }

        function clearArrivalRecentSearches() {
            const recentSearchesContainer = document.getElementById('arrivalRecentSearches');
            recentSearchesContainer.innerHTML = ''; // Clear all recent searches
        }

        // Popular Destinations Functions
        function selectArrivalPopularLocation(cityName) {
            document.getElementById('arrivalSearchInput').value = cityName;
            document.getElementById('arrivalSearchResults').classList.add('hidden');
            addArrivalRecentSearch(cityName, 'POP'); // Assuming a placeholder code for popular destinations
        }

        // Hide suggestions when clicking outside
        document.addEventListener('click', function(event) {
            const arrivalSearchInput = document.getElementById('arrivalSearchInput');
            const arrivalSearchResults = document.getElementById('arrivalSearchResults');
            
            if (!arrivalSearchInput.contains(event.target) && !arrivalSearchResults.contains(event.target)) {
                arrivalSearchResults.classList.add('hidden');
            }
        });

        // Calendar Functions
        let currentDate = new Date();
        let tripType = 'oneWay'; // 'oneWay' or 'roundTrip'
        let departureDate = null;
        let returnDate = null;

        function openDateModal() {
            document.getElementById('dateModal').classList.remove('hidden');
            generateCalendar();
            switchTripType('oneWay'); // Default to one-way
        }

        function closeDateModal() {
            document.getElementById('dateModal').classList.add('hidden');
            departureDate = null;
            returnDate = null;
        }

        function switchTripType(type) {
            tripType = type;
            
            // Update button styling
            const oneWayBtn = document.getElementById('oneWayBtn');
            const roundTripBtn = document.getElementById('roundTripBtn');
            const returnDateSection = document.getElementById('returnDateSection');
            
            if (type === 'oneWay') {
                oneWayBtn.style.background = 'linear-gradient(135deg, #187499 0%, #36AE7E 100%)';
                oneWayBtn.style.color = 'white';
                roundTripBtn.style.background = 'white';
                roundTripBtn.style.color = '#374151';
                returnDateSection.style.display = 'none';
            } else {
                oneWayBtn.style.background = 'white';
                oneWayBtn.style.color = '#374151';
                roundTripBtn.style.background = 'linear-gradient(135deg, #187499 0%, #36AE7E 100%)';
                roundTripBtn.style.color = 'white';
                returnDateSection.style.display = 'block';
            }
            
            // Reset selections
            departureDate = null;
            returnDate = null;
            document.getElementById('departureDateDisplay').textContent = 'Pilih tanggal keberangkatan';
            document.getElementById('returnDateDisplay').textContent = 'Pilih tanggal pulang';
            generateCalendar();
        }

        function generateCalendar() {
            const currentMonth = currentDate.getMonth();
            const currentYear = currentDate.getFullYear();
            
            // Update month label
            const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
            document.getElementById('currentMonth').textContent = `${monthNames[currentMonth]} ${currentYear}`;
            
            // Generate calendar days
            generateCalendarDays(currentMonth, currentYear);
        }

        function generateCalendarDays(month, year) {
            const container = document.getElementById('calendarDays');
            const firstDay = new Date(year, month, 1);
            const lastDay = new Date(year, month + 1, 0);
            const startDate = new Date(firstDay);
            startDate.setDate(startDate.getDate() - firstDay.getDay() + 1); // Start from Monday
            
            let html = '';
            
            for (let week = 0; week < 6; week++) {
                for (let day = 0; day < 7; day++) {
                    const currentDate = new Date(startDate);
                    currentDate.setDate(startDate.getDate() + (week * 7) + day);
                    
                    const isCurrentMonth = currentDate.getMonth() === month;
                    const isToday = currentDate.toDateString() === new Date().toDateString();
                    const isDepartureSelected = departureDate && currentDate.toDateString() === departureDate.toDateString();
                    const isReturnSelected = returnDate && currentDate.toDateString() === returnDate.toDateString();
                    
                    let dayClass = 'text-center py-2 text-sm cursor-pointer transition duration-200';
                    let dayText = currentDate.getDate();
                    
                    if (!isCurrentMonth) {
                        dayClass += ' text-gray-300';
                    } else if (isDepartureSelected || isReturnSelected) {
                        dayClass += ' text-white font-semibold';
                        dayClass += ' rounded-lg';
                        dayClass += ' shadow-md';
                        dayClass += ' transition-all duration-200';
                        dayClass += ' transform scale-105';
                        dayClass += ' z-10';
                        dayClass += ' relative';
                        dayClass += ' overflow-hidden';
                        dayClass += ' before:absolute before:inset-0 before:bg-gradient-to-r before:from-blue-500 before:to-green-500 before:opacity-90';
                        dayClass += ' before:z-0';
                        dayClass += ' relative z-10';
                    } else if (isToday) {
                        dayClass += ' text-blue-600 font-semibold';
                    } else {
                        dayClass += ' text-gray-700 hover:bg-gray-100';
                    }
                    
                    html += `
                        <div class="${dayClass}" onclick="selectDate('${currentDate.toISOString()}')">
                            <div class="relative z-10">${dayText}</div>
                        </div>
                    `;
                }
            }
            
            container.innerHTML = html;
        }

        function selectDate(dateString) {
            const date = new Date(dateString);
            const isCurrentMonth = date.getMonth() === currentDate.getMonth();
            
            if (!isCurrentMonth) return;
            
            if (tripType === 'oneWay') {
                departureDate = date;
                const formattedDate = date.toLocaleDateString('id-ID', {
                    weekday: 'long',
                    day: 'numeric',
                    month: 'short',
                    year: 'numeric'
                });
                document.getElementById('departureDateDisplay').textContent = formattedDate;
            } else {
                if (!departureDate) {
                    departureDate = date;
                    const formattedDate = date.toLocaleDateString('id-ID', {
                        weekday: 'long',
                        day: 'numeric',
                        month: 'short',
                        year: 'numeric'
                    });
                    document.getElementById('departureDateDisplay').textContent = formattedDate;
                } else if (!returnDate) {
                    if (date > departureDate) {
                        returnDate = date;
                        const formattedDate = date.toLocaleDateString('id-ID', {
                            weekday: 'long',
                            day: 'numeric',
                            month: 'short',
                            year: 'numeric'
                        });
                        document.getElementById('returnDateDisplay').textContent = formattedDate;
                    } else {
                        alert('Tanggal pulang tidak boleh sebelum tanggal keberangkatan.');
                        return;
                    }
                } else {
                    alert('Anda sudah memilih tanggal pulang.');
                    return;
                }
            }
            
            generateCalendar();
        }

        function previousMonth() {
            currentDate.setMonth(currentDate.getMonth() - 1);
            generateCalendar();
        }

        function nextMonth() {
            currentDate.setMonth(currentDate.getMonth() + 1);
            generateCalendar();
        }

        function saveDate() {
            if (tripType === 'oneWay') {
                if (departureDate) {
                    const formattedDate = departureDate.toLocaleDateString('id-ID', {
                        weekday: 'long',
                        day: 'numeric',
                        month: 'short',
                        year: 'numeric'
                    });
                    document.getElementById('selectedDate').textContent = formattedDate;
                    document.getElementById('tripType').textContent = '(Sekali jalan)';
                } else {
                    alert('Silakan pilih tanggal keberangkatan.');
                    return;
                }
            } else {
                if (departureDate && returnDate) {
                    const departureFormatted = departureDate.toLocaleDateString('id-ID', {
                        weekday: 'long',
                        day: 'numeric',
                        month: 'short',
                        year: 'numeric'
                    });
                    const returnFormatted = returnDate.toLocaleDateString('id-ID', {
                        weekday: 'long',
                        day: 'numeric',
                        month: 'short',
                        year: 'numeric'
                    });
                    document.getElementById('selectedDate').textContent = `${departureFormatted} - ${returnFormatted}`;
                    document.getElementById('tripType').textContent = '(Pulang pergi)';
                } else {
                    alert('Silakan pilih tanggal keberangkatan dan pulang.');
                    return;
                }
            }
            closeDateModal();
        }

        // Date Card Selection Function
        function selectDateCard(element, date, price) {
            // Remove selected class from all cards
            const allCards = document.querySelectorAll('[onclick*="selectDateCard"]');
            allCards.forEach(card => {
                card.classList.remove('ring-2', 'ring-blue-500', 'border-blue-500');
                card.classList.add('border-gray-200');
            });
            
            // Add selected class to clicked card
            element.classList.remove('border-gray-200');
            element.classList.add('ring-2', 'ring-blue-500', 'border-blue-500');
            
            // Update main search bar date
            document.getElementById('selectedDate').textContent = date;
        }

        // Toggle Flight Detail
        function toggleFlightDetail(flightId) {
            const flightDetail = document.getElementById(flightId);
            flightDetail.classList.toggle('hidden');
        }

        // Load More Flights Function
        function loadMoreFlights() {
            const additionalFlights = document.getElementById('additionalFlights');
            const loadMoreButton = document.querySelector('button[onclick="loadMoreFlights()"]');
            
            if (additionalFlights.classList.contains('hidden')) {
                additionalFlights.classList.remove('hidden');
                loadMoreButton.textContent = 'Show Less Flights';
            } else {
                additionalFlights.classList.add('hidden');
                loadMoreButton.textContent = 'Load More Flights';
            }
        }

        // Passenger Modal Functions
        let passengerCount = 2;

        function openPassengerModal() {
            document.getElementById('passengerModal').classList.remove('hidden');
        }

        function closePassengerModal() {
            document.getElementById('passengerModal').classList.add('hidden');
        }

        function changePassengerCount(change) {
            passengerCount = Math.max(1, Math.min(9, passengerCount + change));
            document.getElementById('passengerCountDisplay').textContent = passengerCount;
        }

        function savePassenger() {
            const passengerClass = document.getElementById('classSelect').value;
            
            document.getElementById('passengerCount').textContent = passengerCount + ' Penumpang';
            document.getElementById('passengerClass').textContent = '(' + passengerClass + ')';
            
            closePassengerModal();
        }

        // Close modals when clicking outside
        window.onclick = function(event) {
            const departureModal = document.getElementById('departureModal');
            const arrivalModal = document.getElementById('arrivalModal');
            const dateModal = document.getElementById('dateModal');
            const passengerModal = document.getElementById('passengerModal');
            
            if (event.target === departureModal) {
                closeDepartureModal();
            }
            if (event.target === arrivalModal) {
                closeArrivalModal();
            }
            if (event.target === dateModal) {
                closeDateModal();
            }
            if (event.target === passengerModal) {
                closePassengerModal();
            }
        }

        // Hide suggestions when clicking outside
        document.addEventListener('click', function(event) {
            const departureSearchInput = document.getElementById('departureSearchInput');
            const departureSearchResults = document.getElementById('departureSearchResults');
            const arrivalSearchInput = document.getElementById('arrivalSearchInput');
            const arrivalSearchResults = document.getElementById('arrivalSearchResults');
            
            if (!departureSearchInput.contains(event.target) && !departureSearchResults.contains(event.target)) {
                departureSearchResults.classList.add('hidden');
            }
            if (!arrivalSearchInput.contains(event.target) && !arrivalSearchResults.contains(event.target)) {
                arrivalSearchResults.classList.add('hidden');
            }
        });

        // Reverse Locations Function
        function reverseLocations() {
            const fromLocation = document.getElementById('fromLocation').textContent;
            const toLocation = document.getElementById('toLocation').textContent;
            document.getElementById('fromLocation').textContent = toLocation;
            document.getElementById('toLocation').textContent = fromLocation;

            const fromInput = document.getElementById('departureSearchInput');
            const toInput = document.getElementById('arrivalSearchInput');
            const temp = fromInput.value;
            fromInput.value = toInput.value;
            toInput.value = temp;

            // Update suggestions based on new values
            searchDepartureCities(); // Re-search for new departure
            searchArrivalCities(); // Re-search for new arrival
        }

        function searchFlights() {
            // Get search criteria from the flight search bar
            const fromLocation = document.getElementById('fromLocation').textContent;
            const toLocation = document.getElementById('toLocation').textContent;
            const selectedDate = document.getElementById('selectedDate').textContent;
            const tripType = document.getElementById('tripType').textContent;
            const passengerCount = document.getElementById('passengerCount').textContent;
            const passengerClass = document.getElementById('passengerClass').textContent;
            
            // Show loading state
            const searchButton = document.querySelector('button[onclick="searchFlights()"]');
            const originalText = searchButton.innerHTML;
            searchButton.innerHTML = '<span class="flex items-center justify-center space-x-2"><svg class="w-4 h-4 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg><span>Mencari...</span></span>';
            searchButton.disabled = true;
            
            // Prepare data for controller
            const searchData = {
                from_location: fromLocation,
                to_location: toLocation,
                departure_date: selectedDate,
                trip_type: tripType,
                passenger_count: passengerCount,
                passenger_class: passengerClass,
                _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            };
            
            // Send AJAX request to controller
            fetch('/search-flights', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(searchData)
            })
            .then(response => response.json())
            .then(data => {
                // Handle successful response
                if (data.success) {
                    displaySearchResults(data.flights, searchData);
                } else {
                    // Show error message
                    showSearchError(data.message || 'Terjadi kesalahan dalam pencarian');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                // Fallback to client-side search if server is not available
                performClientSideSearch(searchData);
            })
            .finally(() => {
                // Restore search button
                searchButton.innerHTML = originalText;
                searchButton.disabled = false;
            });
        }
        
        function displaySearchResults(flights, searchCriteria) {
            // Remove existing results summary
            const existingSummary = document.querySelector('.search-results-popup');
            if (existingSummary) {
                existingSummary.remove();
            }
            
            // Create search results popup in bottom right
            const resultsPopup = document.createElement('div');
            resultsPopup.className = 'search-results-popup fixed bottom-6 right-6 bg-white border border-gray-200 rounded-lg p-4 shadow-lg z-50 max-w-sm w-full sm:w-96 transform translate-y-full opacity-0 transition-all duration-500 ease-out';
            resultsPopup.innerHTML = `
                <div class="flex items-start justify-between mb-3">
                    <div class="flex-1">
                        <h3 class="text-lg font-semibold text-gray-900">Hasil Pencarian</h3>
                        <p class="text-sm text-gray-700">Ditemukan ${flights.length} penerbangan dari ${searchCriteria.from_location} ke ${searchCriteria.to_location}</p>
                        <p class="text-xs text-gray-600 mt-1">Tanggal: ${searchCriteria.departure_date} | ${searchCriteria.trip_type} | ${searchCriteria.passenger_count} ${searchCriteria.passenger_class}</p>
                    </div>
                    <button onclick="closeSearchResults()" class="text-gray-500 hover:text-gray-700 ml-3 p-1 hover:bg-gray-100 rounded-full transition duration-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="flex items-center justify-between">
                    <div class="text-xs text-gray-500">Popup akan hilang otomatis dalam 8 detik</div>
                    <div class="w-16 bg-gray-200 rounded-full h-2">
                        <div class="bg-gradient-to-r from-gray-500 to-gray-600 h-2 rounded-full transition-all duration-100" id="timeoutBar"></div>
                    </div>
                </div>
            `;
            
            // Add popup to body
            document.body.appendChild(resultsPopup);
            
            // Animate popup in
            setTimeout(() => {
                resultsPopup.classList.remove('translate-y-full', 'opacity-0');
                resultsPopup.classList.add('translate-y-0', 'opacity-100');
            }, 100);
            
            // Update flight cards based on search results
            updateFlightCards(flights);
            
            // Start timeout countdown
            startTimeoutCountdown(8);
            
            // Auto close after 8 seconds
            setTimeout(() => {
                closeSearchResults();
            }, 8000);
        }
        
        function performClientSideSearch(searchData) {
            // Fallback client-side search
            const flightCards = document.querySelectorAll('.bg-white.rounded-xl');
            let foundFlights = 0;
            
            flightCards.forEach((card, index) => {
                // Simple filtering logic (you can expand this)
                if (searchData.from_location && searchData.to_location) {
                    // Show all flights for now (in real app, filter by route)
                    card.style.display = 'block';
                    foundFlights++;
                } else {
                    card.style.display = 'none';
                }
            });
            
            // Create search results popup in bottom right
            const resultsPopup = document.createElement('div');
            resultsPopup.className = 'search-results-popup fixed bottom-6 right-6 bg-white border border-gray-200 rounded-lg p-4 shadow-lg z-50 max-w-sm w-full sm:w-96 transform translate-y-full opacity-0 transition-all duration-500 ease-out';
            resultsPopup.innerHTML = `
                <div class="flex items-start justify-between mb-3">
                    <div class="flex-1">
                        <h3 class="text-lg font-semibold text-gray-900">Hasil Pencarian</h3>
                        <p class="text-sm text-gray-700">Ditemukan ${foundFlights} penerbangan dari ${searchData.from_location} ke ${searchData.to_location}</p>
                        <p class="text-xs text-gray-600 mt-1">Tanggal: ${searchData.departure_date} | ${searchData.trip_type} | ${searchData.passenger_count} ${searchData.passenger_class}</p>
                    </div>
                    <button onclick="closeSearchResults()" class="text-gray-500 hover:text-gray-700 ml-3 p-1 hover:bg-gray-100 rounded-full transition duration-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="flex items-center justify-between">
                    <div class="w-16 bg-gray-200 rounded-full h-2">
                        <div class="bg-gradient-to-r from-gray-500 to-gray-600 h-2 rounded-full transition-all duration-100" id="timeoutBar"></div>
                    </div>
                </div>
            `;
            
            // Add popup to body
            document.body.appendChild(resultsPopup);
            
            // Animate popup in
            setTimeout(() => {
                resultsPopup.classList.remove('translate-y-full', 'opacity-0');
                resultsPopup.classList.add('translate-y-0', 'opacity-100');
            }, 100);
            
            // Start timeout countdown
            startTimeoutCountdown(8);
            
            // Auto close after 8 seconds
            setTimeout(() => {
                closeSearchResults();
            }, 8000);
        }
        
        function showSearchError(message) {
            // Create error popup in bottom right
            const errorPopup = document.createElement('div');
            errorPopup.className = 'search-results-popup fixed bottom-6 right-6 bg-red-50 border border-red-200 rounded-lg p-4 shadow-lg z-50 max-w-sm w-full sm:w-96 transform translate-y-full opacity-0 transition-all duration-500 ease-out';
            errorPopup.innerHTML = `
                <div class="flex items-start justify-between mb-3">
                    <div class="flex-1">
                        <h3 class="text-lg font-semibold text-red-900">Error Pencarian</h3>
                        <p class="text-sm text-red-700">${message}</p>
                    </div>
                    <button onclick="closeSearchResults()" class="text-red-500 hover:text-red-700 ml-3 p-1 hover:bg-red-100 rounded-full transition duration-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="flex items-center justify-between">
                    <div class="text-xs text-red-500">Popup akan hilang otomatis dalam 8 detik</div>
                    <div class="w-16 bg-red-200 rounded-full h-2">
                        <div class="bg-red-500 h-2 rounded-full transition-all duration-100" id="timeoutBar"></div>
                    </div>
                </div>
            `;
            
            // Add popup to body
            document.body.appendChild(errorPopup);
            
            // Animate popup in
            setTimeout(() => {
                errorPopup.classList.remove('translate-y-full', 'opacity-0');
                errorPopup.classList.add('translate-y-0', 'opacity-100');
            }, 100);
            
            // Start timeout countdown
            startTimeoutCountdown(8);
            
            // Auto close after 8 seconds
            setTimeout(() => {
                closeSearchResults();
            }, 8000);
        }
        
        function closeSearchResults() {
            const popup = document.querySelector('.search-results-popup');
            if (popup) {
                popup.classList.add('translate-y-full', 'opacity-0');
                setTimeout(() => {
                    popup.remove();
                }, 500);
            }
        }
        
        function startTimeoutCountdown(seconds) {
            const timeoutBar = document.getElementById('timeoutBar');
            if (timeoutBar) {
                const totalWidth = 64; // w-16 = 64px
                const interval = setInterval(() => {
                    seconds--;
                    const progress = (seconds / 8) * totalWidth;
                    timeoutBar.style.width = `${progress}px`;
                    
                    if (seconds <= 0) {
                        clearInterval(interval);
                    }
                }, 1000);
            }
        }
        
        function updateFlightCards(flights) {
            // This function can be used to dynamically update flight cards based on search results
            // For now, we'll just show all existing cards
            console.log('Updating flight cards with:', flights);
        }
        
        // Add responsive CSS for mobile devices
        function addResponsiveStyles() {
            const style = document.createElement('style');
            style.textContent = `
                /* Hide scrollbar for webkit browsers */
                .scrollbar-hide::-webkit-scrollbar {
                    display: none;
                }
                
                /* Hide scrollbar for Firefox */
                .scrollbar-hide {
                    scrollbar-width: none;
                    -ms-overflow-style: none;
                }
                
                /* Date cards responsive improvements */
                @media (max-width: 768px) {
                    .date-cards-container {
                        padding: 0 1rem;
                    }
                    
                    /* Hide arrows on mobile */
                    .date-cards-container button {
                        display: none;
                    }
                    
                    /* Improve touch scrolling on mobile */
                    #dateCardsContainer {
                        scroll-snap-type: x mandatory;
                        -webkit-overflow-scrolling: touch;
                    }
                    
                    #dateCardsContainer > div {
                        scroll-snap-align: start;
                    }
                }
                
                @media (max-width: 640px) {
                    .search-results-popup {
                        bottom: 1rem;
                        right: 1rem;
                        left: 1rem;
                        max-width: none;
                        width: calc(100% - 2rem);
                    }
                    
                    .search-results-popup .text-lg {
                        font-size: 1rem;
                    }
                    
                    .search-results-popup .text-sm {
                        font-size: 0.875rem;
                    }
                    
                    .search-results-popup .text-xs {
                        font-size: 0.75rem;
                    }
                    
                    .date-cards-container button {
                        transform: scale(0.8);
                    }
                    
                    .date-cards-container button.-ml-4 {
                        margin-left: -0.25rem;
                    }
                    
                    .date-cards-container button.-mr-4 {
                        margin-right: -0.25rem;
                    }
                }
                
                @media (max-width: 480px) {
                    .search-results-popup {
                        padding: 0.75rem;
                    }
                    
                    .search-results-popup .text-lg {
                        font-size: 0.875rem;
                    }
                    
                    .date-cards-container {
                        padding: 0 0.5rem;
                    }
                    
                    .date-cards-container button {
                        transform: scale(0.7);
                    }
                    
                    .date-cards-container button.-ml-4 {
                        margin-left: 0;
                    }
                    
                    .date-cards-container button.-mr-4 {
                        margin-right: 0;
                    }
                    
                    #dateCardsContainer {
                        padding: 0 1rem;
                    }
                    
                    #dateCardsContainer .min-w-\\[140px\\] {
                        min-width: 120px;
                    }
                }
                
                /* Responsive improvements for existing components */
                @media (max-width: 768px) {
                    .flight-search-container {
                        padding: 1rem;
                    }
                    
                    .flight-search-container .grid {
                        grid-template-columns: 1fr;
                        gap: 1rem;
                    }
                    
                    .flight-search-container .sm\\:ml-auto {
                        margin-left: 0;
                        margin-top: 1rem;
                    }
                }
                
                @media (max-width: 640px) {
                    .flight-card {
                        padding: 1rem;
                    }
                    
                    .flight-card .lg\\:flex-row {
                        flex-direction: column;
                    }
                    
                    .flight-card .lg\\:w-48 {
                        width: 100%;
                    }
                    
                    .flight-card .lg\\:w-64 {
                        width: 100%;
                    }
                    
                    .flight-card .lg\\:text-right {
                        text-align: center;
                    }
                }
                
                @media (max-width: 480px) {
                    .flight-search-container {
                        padding: 0.75rem;
                    }
                    
                    .flight-card {
                        padding: 0.75rem;
                    }
                    
                    .date-cards-container {
                        padding: 0.75rem;
                    }
                    
                    .date-cards-container .grid {
                        grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
                        gap: 0.5rem;
                    }
                }
                
                /* Smooth scrolling for date cards */
                #dateCardsContainer {
                    scroll-behavior: smooth;
                    cursor: grab;
                    -webkit-overflow-scrolling: touch;
                    scroll-snap-type: x proximity;
                }
                
                #dateCardsContainer:active {
                    cursor: grabbing;
                }
                
                #dateCardsContainer > div {
                    scroll-snap-align: start;
                }
                
                /* Arrow button - minimal hover effect */
                .date-cards-container button {
                    transition: background-color 0.15s ease;
                }
                
                /* Scroll indicators animation */
                .scroll-indicator {
                    transition: all 0.3s ease;
                    cursor: pointer;
                }
                
                .scroll-indicator.active {
                    transform: scale(1.2);
                    background-color: #4B5563;
                }
                
                .scroll-indicator:hover {
                    background-color: #6B7280;
                }
            `;
            document.head.appendChild(style);
        }
        
        // Scroll to specific indicator
        function scrollToIndicator(index) {
            const container = document.getElementById('dateCardsContainer');
            const cardWidth = 140 + 12; // card width + margin
            const visibleCards = Math.floor(container.clientWidth / cardWidth);
            const scrollAmount = cardWidth * visibleCards * index;
            
            container.scrollTo({
                left: scrollAmount,
                behavior: 'smooth'
            });
            
            // Update scroll indicators after scrolling
            setTimeout(updateScrollIndicators, 500);
        }

        // Update scroll indicators
        function updateScrollIndicators() {
            const container = document.getElementById('dateCardsContainer');
            const indicators = document.querySelectorAll('.scroll-indicator');
            
            if (!container || indicators.length === 0) return;
            
            const scrollPosition = container.scrollLeft;
            const maxScroll = container.scrollWidth - container.clientWidth;
            const scrollPercentage = scrollPosition / maxScroll;
            
            // Calculate which indicator should be active
            const activeIndex = Math.round(scrollPercentage * (indicators.length - 1));
            
            indicators.forEach((indicator, index) => {
                if (index === activeIndex) {
                    indicator.classList.add('active');
                    indicator.classList.remove('bg-gray-300');
                    indicator.classList.add('bg-gray-600');
                } else {
                    indicator.classList.remove('active');
                    indicator.classList.remove('bg-gray-600');
                    indicator.classList.add('bg-gray-300');
                }
            });
        }

        // Touch/Swipe functionality for mobile
        let isScrolling = false;
        let startX = 0;
        let scrollLeft = 0;
        
        function initTouchScrolling() {
            const container = document.getElementById('dateCardsContainer');
            if (!container) return;
            
            // Touch events
            container.addEventListener('touchstart', handleTouchStart, { passive: true });
            container.addEventListener('touchmove', handleTouchMove, { passive: true });
            container.addEventListener('touchend', handleTouchEnd, { passive: true });
            
            // Mouse events for desktop
            container.addEventListener('mousedown', handleMouseDown);
            container.addEventListener('mousemove', handleMouseMove);
            container.addEventListener('mouseup', handleMouseUp);
            container.addEventListener('mouseleave', handleMouseUp);
            
            // Scroll event for indicators
            container.addEventListener('scroll', updateScrollIndicators);
        }
        
        function handleTouchStart(e) {
            const container = document.getElementById('dateCardsContainer');
            startX = e.touches[0].pageX - container.offsetLeft;
            scrollLeft = container.scrollLeft;
        }
        
        function handleTouchMove(e) {
            if (!startX) return;
            
            const container = document.getElementById('dateCardsContainer');
            const x = e.touches[0].pageX - container.offsetLeft;
            const walk = (x - startX) * 2;
            container.scrollLeft = scrollLeft - walk;
        }
        
        function handleTouchEnd() {
            startX = 0;
        }
        
        function handleMouseDown(e) {
            const container = document.getElementById('dateCardsContainer');
            isScrolling = true;
            startX = e.pageX - container.offsetLeft;
            scrollLeft = container.scrollLeft;
            container.style.cursor = 'grabbing';
        }
        
        function handleMouseMove(e) {
            if (!isScrolling) return;
            
            const container = document.getElementById('dateCardsContainer');
            e.preventDefault();
            const x = e.pageX - container.offsetLeft;
            const walk = (x - startX) * 2;
            container.scrollLeft = scrollLeft - walk;
        }
        
        function handleMouseUp() {
            const container = document.getElementById('dateCardsContainer');
            isScrolling = false;
            container.style.cursor = 'grab';
        }

        // Initialize responsive styles when page loads
        document.addEventListener('DOMContentLoaded', function() {
            addResponsiveStyles();
            initTouchScrolling();
        });
    </script>

</body>
</html>
