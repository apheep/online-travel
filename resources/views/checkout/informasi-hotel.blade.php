@include('partials.head')

@section('title', 'Hotel Majapahit Surabaya - Online Travel')

@include('partials.navigation')

<body class="bg-[F4F7FE] font-poppins">
    <div class="min-h-screen">
        <!-- Search Header Section -->
        <div class="bg-[#F4F7FE] py-6">
         <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-stretch gap-2">
            <!-- Wrapper Box -->
            <div class="flex flex-col md:flex-row items-st-stretch border rounded-lg overflow-hidden flex-1">
                <!-- Location -->
                <div class="flex items-center px-4 py-3 border-b md:border-b-0 md:border-r">
                    <svg class="w-5 h-5 text-black mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                              d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5A2.5 2.5 0 1112 6a2.5 2.5 0 010 5.5z"
                              clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-medium text-gray-900">Jakarta</span>
                </div>

                <!-- Dates -->
                <div class="flex items-center px-4 py-3 border-b md:border-b-0 md:border-r">
                    <svg class="w-5 h-5 text-black mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M7 10h10M7 14h7m5-9h-1V4a1 1 0 00-2 0v1H9V4a1 1 0 00-2 0v1H6a2 2 0 00-2 2v11a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2z"/>
                    </svg>
                    <span class="text-sm font-medium text-gray-900">Sen, 1 Sep 2025 - Sab, 6 Sep 2025</span>
                </div>

                <!-- Guests -->
                <div class="flex items-center px-4 py-3">
                    <svg class="w-5 h-5 text-black mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                              d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"
                              clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-medium text-gray-900">2 Adults,1 Room</span>
                </div>
            </div>

            <!-- Search Button -->
            <button class="w-full md:w-auto bg-[#FE0004] text-white px-6 py-3 rounded-xl text-sm font-medium transition-all duration-200 shadow-md hover:scale-105">
                Cari
            </button>
            </div>
         </div>
        </div>

        <!-- Main Content -->
        <div class="max-w-6xl mx-auto px-4 py-6">
            <!-- Hotel Images Gallery -->
            <div class="grid grid-cols-1 lg:grid-cols-3 mb-6 rounded-2xl overflow-hidden">
                <!-- Main Image -->
                <div class="lg:col-span-3">
                    <img src="{{ asset('icons/foto-jadi.png') }}" 
                        alt="Hotel Utama" 
                        class="w-full aspect-[22/9] object-cover">
                </div>
            </div>
            <!-- Hotel Description -->
            <div class="mb-6">
                <h3 class="text-lg font-bold text-gray-800 mb-1">Hotel Majapahit Surabaya</h3>
                 <!-- Stars + Score -->
        <div class="flex items-center space-x-2">
        <!-- Stars -->
        <div class="flex">
            <!-- Star 1 -->
            <svg xmlns="http://www.w3.org/2000/svg" 
                class="w-5 h-5 text-yellow-400" 
                viewBox="0 0 20 20" fill="currentColor">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>
            <!-- Star 2 -->
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>
            <!-- Star 3 -->
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>
            <!-- Star 4 -->
            <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>
            <!-- Star 5 -->
            <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>
        </div>
            <!-- Score -->
            <span class="text-gray-600 font-medium mb-1">9.1/10</span>
        </div>
                <p class="text-lg font-bold text-gray-800 mb-3">
                    <span class="font-medium">Tentang Hotel Majapahit Surabaya</span>
                </p>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Dengan menginap di Hotel Majapahit Surabaya, Anda akan berada di pusat kota Surabaya, hanya beberapa langkah dari pusat perbelanjaan Tunjungan Plaza dan dekat dengan Monumen Bambu Runcing. Hotel berpagar ini berjarak sekitar 2 km dari Stasiun Gubeng dan 26 menit berkendara dari Bandara Internasional Juanda.
                </p>
                <button class="flex items-center bg-[#FE0004] bg-clip-text text-transparent font-semibold text-sm mt-2 hover:underline">
                Lebih banyak
                <svg class="w-4 h-4 ml-1 text-[#F6B101]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
                </button>
            </div>
            <!-- Facilities -->
            <div>
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Fasilitas</h3>
                <div class="bg-[F4F7FE] rounded-xl p-4">
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <!-- First Column -->
                        <div class="space-y-3">
                            <div class="flex items-center text-sm text-gray-700">
                                <img src="{{ asset('icons/swimming-pool.png') }}" alt="Swimming Pool" class="w-5 h-5 mr-3 text-gray-500">
                                <span>Kolam renang</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-700">
                                <img src="{{ asset('icons/fitness.png') }}" alt="Fitness Center" class="w-5 h-5 mr-3 text-gray-500">
                                <span>Pusat kebugaran</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-700">
                                <img src="{{ asset('icons/restaurant.png') }}" alt="Restaurant" class="w-5 h-5 mr-3 text-gray-500">
                                <span>Restaurant</span>
                            </div>
                        </div>
                        
                        <!-- Second Column -->
                        <div class="space-y-3">
                            <div class="flex items-center text-sm text-gray-700">
                                <img src="{{ asset('icons/wifi.png') }}" alt="Wifi" class="w-5 h-5 mr-3 text-gray-500">
                                <span>Wifi</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-700">
                                <img src="{{ asset('icons/reception.png') }}" alt="Resepsionis 24 jam" class="w-5 h-5 mr-3 text-gray-500">
                                <span>Resepsionis 24 jam</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-700">
                                <img src="{{ asset('icons/parkirgratis.png') }}" alt="Parkir gratis" class="w-5 h-5 mr-3 text-gray-500">
                                <span>Parkir gratis</span>
                            </div>
                        </div>
                        
                        <!-- Third Column -->
                        <div class="space-y-3">
                            <div class="flex items-center text-sm text-gray-700">
                                <img src="{{ asset('icons/ac.png') }}" alt="AC" class="w-5 h-5 mr-3 text-gray-500">
                                <span>AC</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-700">
                                <img src="{{ asset('icons/lift.png') }}" alt="Lift" class="w-5 h-5 mr-3 text-gray-500">
                                <span>Lift</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-700">
                                <img src="{{ asset('icons/antarjemputbandara.png') }}" alt="Antar jemput bandara" class="w-5 h-5 mr-3 text-gray-500">
                                <span>Antar jemput bandara</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Room Types & Pricing -->
            <div class="bg-[F4F7FE] p-6 mb-6">
                <h2 class="text-xl font-bold text-gray-800 mb-6">Tipe kamar & Harga</h2>
                
                <!-- Room Options -->
                <div class="space-y-6">
                    <!-- Room 1 -->
                    <div class="mb-6">
        <!-- Single Card Container -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow duration-300">
            <!-- Room Title inside card -->
            <h3 class="font-semibold text-gray-800 mb-4 text-lg">Kamar King</h3>

            <!-- Flex Layout -->
            <div class="flex flex-col lg:flex-row items-center lg:items-start justify-between gap-4">
                
                <!-- Left: Room Image -->
                <div class="flex-shrink-0">
                    <img src="{{ asset('kategorikamar.png') }}" 
                        alt="Kamar King" 
                        class="w-40 h-32 object-cover rounded-lg">
                </div>

            <!-- Middle: Room Details -->
                           <div class="flex-1">
                                <span class="bg-[#FE0004] text-white text-xs px-3 py-1 rounded mb-3 inline-block">
                                    Sarapan (1pax)
                                </span>
                                <div class="space-y-1.5">
                                    <div class="flex items-center text-sm text-gray-700">
                                        <svg class="w-4 h-4 mr-2 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 12c2.21 0 4-1.79 
                                            4-4s-1.79-4-4-4-4 1.79-4 
                                            4 1.79 4 4 4zm0 2c-2.67 
                                            0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <span>1 Dewasa, 1 Anak</span>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-700">
                                        <span class="w-2 h-2 rounded-full bg-gray-400 mr-2"></span>
                                        <span>Kasur 2 ranjang</span>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-700">
                                        <span class="w-2 h-2 rounded-full bg-gray-400 mr-2"></span>
                                        <span>TV</span>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-700">
                                        <span class="w-2 h-2 rounded-full bg-gray-400 mr-2"></span>
                                        <span>Bathtub</span>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-700">
                                        <span class="w-2 h-2 rounded-full bg-gray-400 mr-2"></span>
                                        <span>Teras atau Balkon</span>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-700">
                                        <span class="w-2 h-2 rounded-full bg-gray-400 mr-2"></span>
                                        <span>Pembersihan Kamar Harian</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Right: Price & Booking -->
                            <div class="flex flex-col justify-center items-center lg:items-end text-center lg:text-right">
                                <div class="text-2xl font-bold text-red-500 mb-2">IDR 600.000</div>
                                <button onclick="window.location.href='/checkout/checkout-hotel'" 
                                        class="bg-[#FE0004] text-white px-6 py-2.5 rounded-lg hover:scale-105 text-sm font-medium  transition-all duration-200 w-full lg:w-auto lg:min-w-[120px]">
                                    Pesan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

           <!-- Room 1 -->
                    <div class="mb-6">
        <!-- Single Card Container -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow duration-300">
            <!-- Room Title inside card -->
            <h3 class="font-semibold text-gray-800 mb-4 text-lg">Kamar King</h3>

            <!-- Flex Layout -->
            <div class="flex flex-col lg:flex-row items-center lg:items-start justify-between gap-4">
                
                <!-- Left: Room Image -->
                <div class="flex-shrink-0">
                    <img src="{{ asset('kategorikamar.png') }}" 
                        alt="Kamar King" 
                        class="w-40 h-32 object-cover rounded-lg">
                </div>

                 <!-- Middle: Room Details -->
                           <div class="flex-1">
                                <span class="bg-[#FE0004] text-white text-xs px-3 py-1 rounded mb-3 inline-block">
                                    Sarapan (1pax)
                                </span>
                                <div class="space-y-1.5">
                                    <div class="flex items-center text-sm text-gray-700">
                                        <svg class="w-4 h-4 mr-2 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 12c2.21 0 4-1.79 
                                            4-4s-1.79-4-4-4-4 1.79-4 
                                            4 1.79 4 4 4zm0 2c-2.67 
                                            0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <span>1 Dewasa, 1 Anak</span>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-700">
                                        <span class="w-2 h-2 rounded-full bg-gray-400 mr-2"></span>
                                        <span>Kasur 2 ranjang</span>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-700">
                                        <span class="w-2 h-2 rounded-full bg-gray-400 mr-2"></span>
                                        <span>TV</span>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-700">
                                        <span class="w-2 h-2 rounded-full bg-gray-400 mr-2"></span>
                                        <span>Bathtub</span>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-700">
                                        <span class="w-2 h-2 rounded-full bg-gray-400 mr-2"></span>
                                        <span>Teras atau Balkon</span>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-700">
                                        <span class="w-2 h-2 rounded-full bg-gray-400 mr-2"></span>
                                        <span>Pembersihan Kamar Harian</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Right: Price & Booking -->
                            <div class="flex flex-col justify-center items-center lg:items-end text-center lg:text-right">
                                <div class="text-2xl font-bold text-red-500 mb-2">IDR 600.000</div>
                                <button onclick="window.location.href='/checkout/checkout-hotel'" 
                                    class="bg-[#FE0004] text-white px-6 py-2.5 rounded-lg hover:scale-105 text-sm font-medium  transition-all duration-200 w-full lg:w-auto lg:min-w-[120px]">
                                    Pesan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                    <!-- Room 1 -->
                    <div class="mb-6">
        <!-- Single Card Container -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow duration-300">
            <!-- Room Title inside card -->
            <h3 class="font-semibold text-gray-800 mb-4 text-lg">Kamar King</h3>

            <!-- Flex Layout -->
            <div class="flex flex-col lg:flex-row items-center lg:items-start justify-between gap-4">
                
                <!-- Left: Room Image -->
                <div class="flex-shrink-0">
                    <img src="{{ asset('kategorikamar.png') }}" 
                        alt="Kamar King" 
                        class="w-40 h-32 object-cover rounded-lg">
                </div>

                        <!-- Middle: Room Details -->
                           <div class="flex-1">
                                <span class="bg-[#FE0004] text-white text-xs px-3 py-1 rounded mb-3 inline-block">
                                    Sarapan (1pax)
                                </span>
                                <div class="space-y-1.5">
                                    <div class="flex items-center text-sm text-gray-700">
                                        <svg class="w-4 h-4 mr-2 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 12c2.21 0 4-1.79 
                                            4-4s-1.79-4-4-4-4 1.79-4 
                                            4 1.79 4 4 4zm0 2c-2.67 
                                            0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <span>1 Dewasa, 1 Anak</span>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-700">
                                        <span class="w-2 h-2 rounded-full bg-gray-400 mr-2"></span>
                                        <span>Kasur 2 ranjang</span>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-700">
                                        <span class="w-2 h-2 rounded-full bg-gray-400 mr-2"></span>
                                        <span>TV</span>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-700">
                                        <span class="w-2 h-2 rounded-full bg-gray-400 mr-2"></span>
                                        <span>Bathtub</span>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-700">
                                        <span class="w-2 h-2 rounded-full bg-gray-400 mr-2"></span>
                                        <span>Teras atau Balkon</span>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-700">
                                        <span class="w-2 h-2 rounded-full bg-gray-400 mr-2"></span>
                                        <span>Pembersihan Kamar Harian</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Right: Price & Booking -->
                            <div class="flex flex-col justify-center items-center lg:items-end text-center lg:text-right">
                                <div class="text-2xl font-bold text-red-500 mb-2">IDR 600.000</div>
                                <button onclick="window.location.href='/checkout/checkout-hotel'" 
                                    class="bg-[#FE0004] text-white px-6 py-2.5 rounded-lg hover:scale-105 text-sm font-medium  transition-all duration-200 w-full lg:w-auto lg:min-w-[120px]">
                                    Pesan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Location Section -->
            <div class="bg-gray-50 p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-6">Lokasi</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
                    <!-- Map -->
                    <div class="w-full">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.878385703747!2d112.7370416749208!3d-7.257471392754994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f95b53c4e2f7%3A0xb1e21a13a7e4a1ef!2sJl.%20Tunjungan%20No.65%2C%20Genteng%2C%20Kec.%20Genteng%2C%20Surabaya%2C%20Jawa%20Timur%2060275!5e0!3m2!1sen!2sid!4v1693910432645!5m2!1sen!2sid" 
                            width="100%" 
                            height="300" 
                            style="border:0; border-radius: 0.75rem;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                    <!-- Info -->
                    <div>
                        <!-- Address -->
                        <p class="font-semibold text-gray-800 mb-2">
                            Jl. Tunjungan No.65, Genteng, Kec. Genteng, Surabaya, Jawa Timur 60275
                        </p>
                        <p class="text-gray-500 mb-4">Info tempat terdekat</p>

                        <!-- Nearby Places -->
                        <ul class="space-y-4">
                            <!-- Stasiun -->
                            <li class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <img src="{{ asset('icons/stasiun.png') }}" alt="Stasiun" class="w-6 h-6">
                                    <span class="text-gray-700">Stasiun Gubeng</span>
                                </div>
                                <span class="text-sm text-gray-500">3.3Km</span>
                            </li>

                            <!-- Tempat makan -->
                            <li class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <img src="{{ asset('icons/tempatmakan.png') }}" alt="Tempat Makan" class="w-6 h-6">
                                    <span class="text-gray-700">Soto Ayam Cak Pardi</span>
                                </div>
                                <span class="text-sm text-gray-500">200m</span>
                            </li>

                            <!-- Wisata -->
                            <li class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <img src="{{ asset('icons/wisata.png') }}" alt="Wisata" class="w-6 h-6">
                                    <span class="text-gray-700">Pantai Kenjeran</span>
                                </div>
                                <span class="text-sm text-gray-500">9Km</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@include('partials.footer')