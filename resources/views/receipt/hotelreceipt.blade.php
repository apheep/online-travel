@include('partials.head')

@section('title', 'HotelReceipt - Online Travel')

@include('partials.navigation')

<body class="bg-[F4F7FE] font-poppins">

    <div class="min-h-screen py-8 px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Header -->
            <div class="bg-gradient-to-r from-[#FE0004] to-[#F6B101] rounded-2xl shadow-lg p-8 mb-6 text-white">
                <div class="text-center">
                    <div class="mb-4">
                        <svg class="w-16 h-16 mx-auto mb-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                        </svg>
                    </div>
                    <h1 class="text-4xl font-bold mb-3">Pemesanan Berhasil!</h1>
                    <p class="text-yellow-100 text-lg">Hotel Anda telah berhasil dipesan</p>
                    <div class="mt-6 bg-white bg-opacity-20 rounded-lg p-4 inline-block">
                        <p class="text-sm font-medium">Tanggal Pemesanan</p>
                        <p class="text-lg font-bold">{{ date('d F Y') }}</p>
                    </div>
                </div>
            </div>

            <!-- Hotel Information -->
            <div class="bg-white rounded-2xl shadow-lg p-6 mb-6">
                <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4 mb-4">
                    <div>
                        <h2 class="text-xl font-bold text-gray-900">Detail Hotel</h2>
                        <h3 class="text-lg font-semibold text-gray-800 mt-1">Hotel Majapahit Surabaya</h3>
                        <div class="mt-2 flex flex-wrap gap-2 text-xs">
                            <span class="inline-flex items-center px-2 py-1 rounded-full bg-gray-100 text-gray-700">TV</span>
                            <span class="inline-flex items-center px-2 py-1 rounded-full bg-gray-100 text-gray-700">Bathtub</span>
                            <span class="inline-flex items-center px-2 py-1 rounded-full bg-gray-100 text-gray-700">Teras</span>
                        </div>
                    </div>
                    <div class="text-right">
                        <div class="text-xs text-gray-500">Total Harga</div>
                        <div class="text-2xl font-extrabold text-red-600 leading-tight">IDR 600.000</div>
                        <div class="mt-2 flex items-center justify-end gap-2">
                            <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-xs">Sarapan Termasuk</span>
                        </div>
                    </div>
                </div>

                <dl class="grid grid-cols-1 md:grid-cols-2 gap-3">
                    <div class="bg-gray-50 rounded-lg p-3 flex items-center justify-between">
                        <dt class="text-gray-600 text-sm">Kamar</dt>
                        <dd class="text-gray-900 font-medium">Kamar King</dd>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-3 flex items-center justify-between">
                        <dt class="text-gray-600 text-sm">Kasur</dt>
                        <dd class="text-gray-900 font-medium">2 ranjang</dd>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-3 flex items-center justify-between">
                        <dt class="text-gray-600 text-sm">Tamu</dt>
                        <dd class="text-gray-900 font-medium">3 Dewasa</dd>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-3 flex items-center justify-between">
                        <dt class="text-gray-600 text-sm">Check-in</dt>
                        <dd class="text-gray-900 font-medium">15 September 2025</dd>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-3 flex items-center justify-between">
                        <dt class="text-gray-600 text-sm">Check-out</dt>
                        <dd class="text-gray-900 font-medium">17 September 2025</dd>
                    </div>
                </dl>
            </div>

            <!-- Personal Information -->
            <div class="bg-white rounded-2xl shadow-lg p-4 sm:p-6 mb-6">
                <div class="flex flex-col mb-4 gap-2">
                    <h2 class="text-xl sm:text-2xl font-bold text-gray-900">Data Diri Pemesan</h2>
                </div>

                <!-- Surat Dinas: hanya 1 dokumen untuk seluruh pesanan, ditaruh di bawah judul Data Diri -->
                <div class="mb-6">
                    <h5 class="text-sm font-semibold text-gray-900 mb-1">Surat Dinas</h5>
                    <div class="flex flex-wrap items-center gap-3">
                        <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <span class="text-gray-800 font-medium">SuratDinas_Perjalanan.pdf</span>
                        <button onclick="window.open('/documents/SuratDinas_Perjalanan.pdf', '_blank')" class="px-3 py-1.5 text-white rounded-md text-xs font-medium transition duration-200" style="background: linear-gradient(135deg, #FE0004 0%, #F6B101 100%);">View</button>
                        <a href="/documents/SuratDinas_Perjalanan.pdf" download class="px-3 py-1.5 rounded-md text-xs font-medium border border-gray-300 text-gray-700 hover:bg-gray-50 transition">Download</a>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">Uploaded ✓</p>
                </div>

                @php
                    $guests = [
                        ['label' => 'Tamu 1', 'name' => 'John Doe', 'checkin' => '15 September 2025', 'checkout' => '17 September 2025'],
                        ['label' => 'Tamu 2', 'name' => 'Jane Smith', 'checkin' => '15 September 2025', 'checkout' => '17 September 2025'],
                        ['label' => 'Tamu 3', 'name' => 'Bob Johnson', 'checkin' => '15 September 2025', 'checkout' => '17 September 2025'],
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
                                <button onclick="window.open('/documents/KTP_{{ str_replace(' ', '', $guest['name']) }}.pdf', '_blank')" class="px-3 py-1.5 text-white rounded-md text-xs font-medium transition duration-200" style="background: linear-gradient(135deg, #FE0004 0%, #F6B101 100%);">View</button>
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
                <button onclick="window.location.href='/pesanan/hotel'" class="px-8 py-4 border-2 border-gray-300 rounded-xl text-gray-700 hover:bg-gray-50 transition duration-200 font-semibold">
                    Kembali ke Pemesanan
                </button>
                <button onclick="window.location.href='/welcome'" class="px-8 py-4 text-white rounded-xl font-semibold bg-gradient-to-r from-[#FE0004] to-[#F6B101] text-white font-bold py-4 px-8 rounded-xl hover:from-[#FE0004] hover:to-[#FFD700] transition-all duration-200 transform hover:scale-105 shadow-lg">
                    Kembali ke Beranda
                </button>
            </div>

        </div>
    </div>
    
</body>

@include('partials.footer')
