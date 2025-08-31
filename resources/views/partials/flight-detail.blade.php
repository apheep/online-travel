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
