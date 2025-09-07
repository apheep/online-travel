@include('partials.head')

@section('title', 'Detail Tiket - Online Travel')

@include('partials.navigation')
<body class="font-poppins">
<div class="min-h-screen bg-gray-50">
    <!-- Main Content -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header -->
        <div class="mb-8 flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <a href="{{ route('notifications.mailbox') }}" class="flex items-center text-blue-600 hover:text-blue-800 transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Back
                </a>
            </div>
            <div class="flex items-center space-x-3">
                <span class="bg-green-500 text-white px-4 py-2 rounded-full text-sm font-medium">
                    Diterima
                </span>
            </div>
        </div>

        <!-- Data Diri Section -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-6">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-900">Data Diri</h2>
            </div>
            <div class="px-6 py-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nama</label>
                        <div class="text-sm text-gray-900 bg-gray-50 px-4 py-3 rounded-lg">
                            {{ $booking->customer_name ?? 'John Doe' }}
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <div class="text-sm text-gray-900 bg-gray-50 px-4 py-3 rounded-lg">
                            {{ $booking->customer_email ?? 'john.doe@email.com' }}
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Telepon</label>
                        <div class="text-sm text-gray-900 bg-gray-50 px-4 py-3 rounded-lg">
                            {{ $booking->customer_phone ?? '+62 812-3456-7890' }}
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Divisi</label>
                        <div class="text-sm text-gray-900 bg-gray-50 px-4 py-3 rounded-lg">
                            {{ $booking->division ?? 'IT Department' }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Info Tiket Section -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-8">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-900">Info Tiket</h2>
            </div>
            <div class="px-6 py-6">
                <div class="space-y-6">
                    <!-- Flight Info -->
                    @if(isset($booking->flight_details))
                    <div class="border border-gray-200 rounded-lg p-4">
                        <div class="flex items-center space-x-3 mb-4">
                            <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                                <span class="text-blue-600 text-lg">✈️</span>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900">Penerbangan</h3>
                                <p class="text-sm text-gray-500">{{ $booking->flight_details['airline'] ?? 'Garuda Indonesia' }}</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
                            <div>
                                <span class="text-gray-500">Rute:</span>
                                <p class="font-medium">{{ $booking->flight_details['route'] ?? 'Jakarta → Bali' }}</p>
                            </div>
                            <div>
                                <span class="text-gray-500">Tanggal:</span>
                                <p class="font-medium">{{ $booking->flight_details['date'] ?? '15 Jan 2024' }}</p>
                            </div>
                            <div>
                                <span class="text-gray-500">Waktu:</span>
                                <p class="font-medium">{{ $booking->flight_details['time'] ?? '08:30 - 11:45' }}</p>
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- Hotel Info -->
                    @if(isset($booking->hotel_details))
                    <div class="border border-gray-200 rounded-lg p-4">
                        <div class="flex items-center space-x-3 mb-4">
                            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                                <span class="text-green-600 text-lg">🏨</span>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900">Hotel</h3>
                                <p class="text-sm text-gray-500">{{ $booking->hotel_details['name'] ?? 'Grand Hyatt Bali' }}</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
                            <div>
                                <span class="text-gray-500">Tipe Kamar:</span>
                                <p class="font-medium">{{ $booking->hotel_details['room_type'] ?? 'Deluxe Room' }}</p>
                            </div>
                            <div>
                                <span class="text-gray-500">Check-in:</span>
                                <p class="font-medium">{{ $booking->hotel_details['checkin'] ?? '15 Jan 2024, 14:00' }}</p>
                            </div>
                            <div>
                                <span class="text-gray-500">Check-out:</span>
                                <p class="font-medium">{{ $booking->hotel_details['checkout'] ?? '18 Jan 2024, 12:00' }}</p>
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- Default empty state if no specific details -->
                    @if(!isset($booking->flight_details) && !isset($booking->hotel_details))
                    <div class="text-center py-12 text-gray-500">
                        <svg class="w-12 h-12 mx-auto mb-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <p>Detail tiket akan ditampilkan di sini</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <button class="bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white px-8 py-3 rounded-lg font-semibold hover:shadow-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                </svg>
                Lihat E-Ticket
            </button>
            <button class="bg-gradient-to-r from-green-500 to-green-600 text-white px-8 py-3 rounded-lg font-semibold hover:shadow-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                Unduh E-Ticket
            </button>
        </div>
    </div>
</div>
</body>
@include('partials.footer')
