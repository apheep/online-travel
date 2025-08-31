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
