@include('partials.head')

@section('title', 'Detail Tiket Ditolak - Online Travel')

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
                <span class="bg-red-500 text-white px-4 py-2 rounded-full text-sm font-medium">
                    Ditolak
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
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-6">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-900">Info Tiket</h2>
            </div>
            <div class="px-6 py-6">
                <div class="text-center py-12 text-gray-500">
                    <svg class="w-12 h-12 mx-auto mb-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <p>Tiket tidak dapat ditampilkan karena pesanan ditolak</p>
                </div>
            </div>
        </div>

        <!-- Alasan Section -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-8">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-900">Alasan:</h2>
            </div>
            <div class="px-6 py-6">
                <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-sm font-medium text-red-800 mb-2">Pesanan Ditolak</h3>
                            <div class="text-sm text-red-700 bg-white px-4 py-3 rounded border border-red-200">
                                {{ $booking->rejection_reason ?? 'Budget tidak mencukupi untuk permintaan tiket business class. Silakan ajukan kembali dengan kelas ekonomi atau tunggu approval budget tambahan dari finance department.' }}
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Additional Info -->
                <div class="mt-4 p-4 bg-blue-50 border border-blue-200 rounded-lg">
                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0">
                            <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="text-sm font-medium text-blue-800 mb-1">Langkah Selanjutnya:</h4>
                            <ul class="text-sm text-blue-700 space-y-1">
                                <li>• Hubungi supervisor untuk diskusi lebih lanjut</li>
                                <li>• Ajukan ulang dengan spesifikasi yang disesuaikan</li>
                                <li>• Konsultasi dengan bagian finance untuk budget approval</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Action Button -->
        <div class="flex justify-center">
            <a href="{{ route('notifications.mailbox') }}" class="bg-gradient-to-r from-gray-500 to-gray-600 text-white px-8 py-3 rounded-lg font-semibold hover:shadow-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Kembali ke Mailbox
            </a>
        </div>
    </div>
</div>
</body>
@include('partials.footer')
