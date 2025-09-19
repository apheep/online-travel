@include('partials.head')

@section('title', 'PesawatReceipt - Online Travel')

@include('partials.navigation')

<body class="bg-[F4F7FE] font-poppins">

    <div class="min-h-screen py-8 px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Header -->
            <div class="bg-white rounded-2xl shadow-lg border-2 border-gray-100 p-8 mb-6 relative overflow-hidden">
                <!-- Decorative background pattern -->
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-red-50 to-red-100 rounded-full transform translate-x-16 -translate-y-16 opacity-60"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-gradient-to-tr from-red-50 to-red-100 rounded-full transform -translate-x-12 translate-y-12 opacity-60"></div>
                
                <div class="text-center relative z-10">
                    <div class="mb-6">
                        <!-- Success icon with green background -->
                        <div class="w-20 h-20 mx-auto mb-4 bg-green-100 rounded-full flex items-center justify-center">
                            <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                            </svg>
                        </div>
                    </div>
                    <h1 class="text-4xl font-bold mb-3 text-gray-800">Pemesanan Pesawat Berhasil!</h1>
                    <p class="text-gray-600 text-lg mb-6">Tiket pesawat Anda telah berhasil dipesan</p>
                    
                    <!-- Date card with subtle styling -->
                    <div class="inline-flex items-center bg-gray-50 border border-gray-200 rounded-xl px-6 py-4">
                        <svg class="w-5 h-5 text-gray-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <div class="text-left">
                            <p class="text-sm font-medium text-gray-600">Tanggal Pemesanan</p>
                            <p class="text-lg font-bold text-gray-800">{{ date('d F Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Flight Information -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 mb-6">
                <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-8 mb-8">
                    <!-- Flight Details -->
                    <div class="flex-1">
                        <div class="mb-6">
                            <h2 class="text-2xl font-semibold text-gray-900 mb-1">Detail Penerbangan</h2>
                            <p class="text-gray-500">Garuda Indonesia</p>
                        </div>
                        
                        <!-- Flight Info -->
                        <div class="mb-6">
                            <p class="text-sm font-medium text-gray-700 mb-3">Informasi Penerbangan</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="inline-flex items-center px-3 py-1.5 rounded-md bg-gray-50 text-gray-700 text-sm font-medium border border-gray-200">
                                    <svg class="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                    </svg>
                                    Ekonomi
                                </span>
                                <span class="inline-flex items-center px-3 py-1.5 rounded-md bg-gray-50 text-gray-700 text-sm font-medium border border-gray-200">
                                    <svg class="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                    3 Dewasa
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Price Card -->
                    <div class="lg:w-72">
                        <div class=" p-6">
                            <div class="text-center">
                                <p class="text-sm text-gray-600 mb-2">Total Harga</p>
                                <p class="text-3xl font-bold text-[#FE0004] mb-4">IDR 600.000</p>
                                <div class="inline-flex items-center bg-gray-50 text-gray-700 px-3 py-2 rounded-md text-sm font-medium border border-gray-200">
                                    <svg class="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                    </svg>
                                    GA 308
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Flight Details Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div class="border border-gray-200 rounded-lg p-4">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                            <div>
                                <p class="text-sm text-gray-600">Kelas</p>
                                <p class="font-semibold text-gray-900">Ekonomi</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="border border-gray-200 rounded-lg p-4">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            <div>
                                <p class="text-sm text-gray-600">Penumpang</p>
                                <p class="font-semibold text-gray-900">3 Dewasa</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="border border-gray-200 rounded-lg p-4">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <div>
                                <p class="text-sm text-gray-600">Bandara Asal</p>
                                <p class="font-semibold text-gray-900">CGK - Soekarno-Hatta</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="border border-gray-200 rounded-lg p-4">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <div>
                                <p class="text-sm text-gray-600">Bandara Tujuan</p>
                                <p class="font-semibold text-gray-900">DPS - Ngurah Rai</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="border border-gray-200 rounded-lg p-4">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <p class="text-sm text-gray-600">Keberangkatan</p>
                                <p class="font-semibold text-gray-900">15 Sep 2025 • 08:00 WIB</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="border border-gray-200 rounded-lg p-4">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <p class="text-sm text-gray-600">Kedatangan</p>
                                <p class="font-semibold text-gray-900">15 Sep 2025 • 12:30 WIB</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Passengers Information -->
            <div class="bg-white rounded-2xl shadow-lg p-4 sm:p-6 mb-6">
                <div class="flex flex-col mb-4 gap-2">
                    <h2 class="text-xl sm:text-2xl font-bold text-gray-900">Data Diri Penumpang</h2>
                </div>

                <!-- Surat Dinas Global -->
                <div class="mb-6">
                    <h5 class="text-sm font-semibold text-gray-900 mb-1">Surat Dinas</h5>
                    <div class="flex flex-wrap items-center gap-3">
                        <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <span class="text-gray-800 font-medium">SuratDinas_Perjalanan.pdf</span>
                        <button onclick="window.open('/documents/SuratDinas_Perjalanan.pdf', '_blank')" class="px-3 py-1.5 text-white rounded-md text-xs font-medium transition duration-200 bg-[#FE0004] border border-[#FE0004] hover:bg-white hover:text-[#FE0004]">View</button>
                        <a href="/documents/SuratDinas_Perjalanan.pdf" download class="px-3 py-1.5 rounded-md text-xs font-medium border border-gray-300 text-gray-700 hover:bg-gray-50 transition">Download</a>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">Uploaded ✓</p>
                </div>

                @php
                    $guests = [
                        ['label' => 'Penumpang 1', 'name' => 'John Doe'],
                        ['label' => 'Penumpang 2', 'name' => 'Jane Smith'],
                        ['label' => 'Penumpang 3', 'name' => 'Bob Johnson'],
                    ];
                @endphp

                <div class="space-y-4">
                @foreach ($guests as $guest)
                    <div class="py-5 pl-4 bg-gray-50 rounded-xl border-l-4 border-[#FE0004]">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-orange-100 text-orange-700 text-xs font-semibold">{{ $loop->iteration }}</span>
                            <h3 class="text-base font-semibold text-gray-900">{{ $guest['label'] }}</h3>
                        </div>
                        <div class="mt-1">
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap</label>
                            <div class="text-gray-900 font-medium">{{ $guest['name'] }}</div>
                        </div>
                        <div class="mt-3">
                            <h5 class="text-sm font-semibold text-gray-900 mb-1">KTP/Identitas</h5>
                            <div class="flex flex-wrap items-center gap-3">
                                <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                <span class="text-gray-800 font-medium">KTP_{{ str_replace(' ', '', $guest['name']) }}.pdf</span>
                                <button data-file="KTP_{{ str_replace(' ', '', $guest['name']) }}.pdf" class="view-document px-3 py-1.5 text-white rounded-md text-xs font-medium transition duration-200 bg-[#FE0004] border border-[#FE0004] hover:bg-white hover:text-[#FE0004]">View</button>
                                <a href="/documents/KTP_{{ str_replace(' ', '', $guest['name']) }}.pdf" download class="px-3 py-1.5 rounded-md text-xs font-medium border border-gray-300 text-gray-700 hover:bg-gray-50 transition">Download</a>
                            </div>
                            <p class="text-xs text-gray-500 mt-1">Uploaded ✓</p>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>

            

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center py-8">
                <button onclick="window.location.href='/pesanan/pesawat'" class="px-8 py-4 border-2 border-gray-300 rounded-xl text-gray-700 hover:bg-gray-50 transition duration-200 font-semibold">
                    Kembali ke Pemesanan
                </button>
                <button onclick="window.location.href='/welcome'" class="px-8 py-4 text-white rounded-xl font-semibold bg-[#FE0004] border border-[#FE0004] hover:bg-white hover:text-[#FE0004] transition-all duration-200 transform hover:scale-105 shadow-lg">
                    Kembali ke Beranda
                </button>
            </div>

        </div>
    </div>


    
    <script>
        // Handle document view clicks
        document.addEventListener('DOMContentLoaded', function() {
            const viewButtons = document.querySelectorAll('.view-document');
            viewButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const fileName = this.getAttribute('data-file');
                    window.open('/documents/' + fileName, '_blank');
                });
            });
        });
    </script>
</body>

@include('partials.footer')
