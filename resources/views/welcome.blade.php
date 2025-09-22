@include('partials.head')
    
@section('title', 'Home - Online Travel')



<body class="relative bg-white font-poppins opacity-0 transition-opacity duration-700 h-[100dvh] overflow-auto md:overflow-hidden">

  <!-- Background Section -->
  <section class="relative shadow-2xl min-h-[100dvh]">
    <!-- Fixed Background Layer -->
    <div class="fixed inset-0 -z-10 bg-cover bg-left md:bg-center bg-no-repeat" style="background-image: url(/background.png);"></div>
    <!-- Fixed Overlay -->
    <div class="fixed inset-0 -z-10 bg-black/30"></div>

    <!-- NavBar -->
    <nav class="relative z-40 flex items-center justify-between w-full px-10 py-6 text-white">
      <a href="#" class="text-[26px] md:text-[30px] font-bold tracking-wide">.travelling</a>


      <!-- Desktop Login -->
      <div class="hidden md:flex space-x-3 text-sm items-center">
        <!-- History Icon -->
        <div class="relative">
          <a href="{{ route('history') }}" class="p-2 text-white hover:bg-white/10 rounded-full transition-all duration-300 block">
            <img src="/history.png" alt="History" class="w-5 h-6">
          </a>
        </div>
        
        <!-- Notification Icon -->
        <div class="relative group">
          <a href="{{ route('notifications.mailbox') }}" class="p-2 text-white hover:bg-white/10 rounded-full transition-all duration-300 block">
            <img src="/notif.png" alt="Notifications" class="w-5 h-6">
          </a>
          <!-- Notification badge -->
          <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center font-medium">3</span>

          <!-- Hover Dropdown Preview -->
          <div class="absolute right-0 mt-3 w-80 bg-white rounded-xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform scale-95 group-hover:scale-100 z-50 border border-gray-100 overflow-hidden">
            <div class="px-4 py-3 border-b border-gray-100">
              <p class="text-sm font-semibold text-gray-900">Notifikasi Terbaru</p>
            </div>
            <ul class="max-h-80 overflow-auto divide-y divide-gray-100">
              <li class="flex items-start gap-3 px-4 py-3 hover:bg-gray-50 transition">
                <div class="mt-0.5 h-2 w-2 rounded-full bg-red-500 shrink-0"></div>
                <div class="min-w-0">
                  <p class="text-sm font-medium text-gray-900 truncate">Promo Hotel 20% untuk akhir pekan ini!</p>
                  <p class="text-xs text-gray-500 truncate">Jangan lewatkan penawaran terbatas.</p>
                  <span class="text-[11px] text-gray-400">Baru saja</span>
                </div>
              </li>
              <li class="flex items-start gap-3 px-4 py-3 hover:bg-gray-50 transition">
                <div class="mt-0.5 h-2 w-2 rounded-full bg-yellow-400 shrink-0"></div>
                <div class="min-w-0">
                  <p class="text-sm font-medium text-gray-900 truncate">Status pesanan kereta kamu diperbarui</p>
                  <p class="text-xs text-gray-500 truncate">E-ticket siap diunduh.</p>
                  <span class="text-[11px] text-gray-400">10 mnt lalu</span>
                </div>
              </li>
              <li class="flex items-start gap-3 px-4 py-3 hover:bg-gray-50 transition">
                <div class="mt-0.5 h-2 w-2 rounded-full bg-blue-500 shrink-0"></div>
                <div class="min-w-0">
                  <p class="text-sm font-medium text-gray-900 truncate">Pengingat: Check-in hotel besok</p>
                  <p class="text-xs text-gray-500 truncate">Siapkan dokumen perjalananmu.</p>
                  <span class="text-[11px] text-gray-400">1 jam lalu</span>
                </div>
              </li>
            </ul>
            <a href="{{ route('notifications.mailbox') }}" class="block text-center text-sm font-medium text-rose-600 hover:text-rose-700 py-3">Lihat semua</a>
          </div>
        </div>
        
        <div class="relative group">
          <a href="#" class="bg-[#FE0004] px-6 py-3 rounded-full font-medium  transition-all duration-300 shadow-lg flex items-center justify-center gap-3 text-white cursor-pointer hover:scale-105">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
            </svg>
            <span>{{ Auth::user()->name }}</span>
            <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </a>
          <div class="absolute right-0 mt-3 w-56 bg-white rounded-xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 border border-gray-100 transform scale-95 group-hover:scale-100 origin-top-right">
            <div class="p-2">
              <div class="px-4 py-3 border-b border-gray-100">
                <p class="text-sm font-medium text-gray-900">Hi, {{ Auth::user()->name }}</p>
                
              </div>
              <div class="py-2">
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-[#FE0004] hover:text-white rounded-lg transition-all duration-200 group/item">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                      </svg>
                      <span class="font-medium">Logout</span>
                      <svg class="w-4 h-4 ml-auto opacity-0 group-hover/item:opacity-100 transition-opacity duration-200" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                      </svg>
                    </button>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile Hamburger -->
      <button id="menu-btn" class="md:hidden flex items-center focus:outline-none">
        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </nav>

    <!-- Mobile Sidebar -->
    <div id="mobile-sidebar" class="fixed top-0 right-0 h-full w-64 bg-white shadow-2xl transform translate-x-full transition-transform duration-300 ease-in-out z-50 overflow-y-auto">
      <div class="flex items-center justify-between p-6 border-b">
        <h3 class="text-lg font-semibold text-gray-800">Menu</h3>
        <button onclick="closeSidebar()" class="text-gray-500 hover:text-gray-700">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      <div class="p-6 space-y-4">

        <div class="pt-4">
          <!-- Mobile User Profile -->
          <div class="mb-6">
            <!-- User Info Card -->
            <div class="bg-[#FE0004] rounded-2xl p-4 text-white shadow-lg ">
              <div class="flex items-center gap-3 mb-3">
                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                  <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-lg">{{ Auth::user()->name }}</p>
                  <p class="text-white/80 text-sm">Welcome back!</p>
                </div>
              </div>
              
              <!-- Logout Button -->
              <form action="{{ route('logout') }}" method="POST" class="w-full">
                @csrf
                <button type="submit" class="w-full bg-white/10 hover:bg-white/20 text-white py-2.5 px-4 rounded-xl font-medium transition-all duration-200 flex items-center justify-center gap-2">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                  </svg>
                  <span>Logout</span>
                </button>
              </form>
            </div>
          </div>
          
          <!-- Mobile Action Buttons -->
          <div class="mb-4 grid grid-cols-2 gap-3">
            <!-- History Button -->
            <button class="bg-white border-2 border-gray-100 hover:border-[#FE0004] text-gray-700 hover:text-[#FE0004] py-4 px-4 rounded-2xl font-medium transition-all duration-300 flex flex-col items-center gap-2 shadow-sm hover:shadow-md">
              <div class=" flex items-center justify-center">
                <img src="/history.png" alt="History" class="w-4 h-5">
              </div>
              <span class="text-sm">Riwayat</span>
            </button>
            
            <!-- Notification Button -->
            <a href="{{ route('notifications.mailbox') }}" class="bg-white border-2 border-gray-100 hover:border-[#F6B101] text-gray-700 hover:text-[#F6B101] py-4 px-4 rounded-2xl font-medium transition-all duration-300 flex flex-col items-center gap-2 shadow-sm hover:shadow-md relative">
              <div class="flex items-center justify-center">
                <img src="/notif.png" alt="Notifications" class="w-4 h-5">
              </div>
              <span class="text-sm">Notifikasi</span>
              <!-- Notification badge -->
              <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center font-medium">3</span>
            </a>
          </div>

          <!-- Recent Notifications (Mobile) -->
          <div class="bg-white border border-gray-100 rounded-2xl shadow-sm overflow-hidden">
            <div class="flex items-center justify-between px-4 py-3 border-b border-gray-100">
              <p class="text-sm font-semibold text-gray-900">Notifikasi Terbaru</p>
              <a href="{{ route('notifications.mailbox') }}" class="text-xs font-medium text-rose-600 hover:text-rose-700">Lihat semua</a>
            </div>
            <ul class="divide-y divide-gray-100">
              <li class="px-4 py-3">
                <div class="flex items-start gap-3">
                  <span class="mt-1 h-2 w-2 rounded-full bg-red-500"></span>
                  <div class="min-w-0">
                    <p class="text-sm font-medium text-gray-900">Promo Hotel 20% untuk akhir pekan ini!</p>
                    <p class="text-xs text-gray-500 truncate">Jangan lewatkan penawaran terbatas.</p>
                    <span class="text-[11px] text-gray-400">Baru saja</span>
                  </div>
                </div>
              </li>
              <li class="px-4 py-3">
                <div class="flex items-start gap-3">
                  <span class="mt-1 h-2 w-2 rounded-full bg-yellow-400"></span>
                  <div class="min-w-0">
                    <p class="text-sm font-medium text-gray-900">Status pesanan kereta kamu diperbarui</p>
                    <p class="text-xs text-gray-500 truncate">E-ticket siap diunduh.</p>
                    <span class="text-[11px] text-gray-400">10 mnt lalu</span>
                  </div>
                </div>
              </li>
              <li class="px-4 py-3">
                <div class="flex items-start gap-3">
                  <span class="mt-1 h-2 w-2 rounded-full bg-blue-500"></span>
                  <div class="min-w-0">
                    <p class="text-sm font-medium text-gray-900">Pengingat: Check-in hotel besok</p>
                    <p class="text-xs text-gray-500 truncate">Siapkan dokumen perjalananmu.</p>
                    <span class="text-[11px] text-gray-400">1 jam lalu</span>
                  </div>
                </div>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
    
    <!-- Sidebar Overlay -->
    <div id="sidebar-overlay" class="fixed inset-0 bg-black/50 z-40 hidden md:hidden" onclick="closeSidebar()"></div>

    <!-- Main Content -->
    <div class="relative z-10 flex flex-col items-center justify-start pt-16 md:pt-20 min-h-[100dvh] max-w-4xl mx-auto px-6 text-white text-center mt-10 md:mt-2 pb-10">
      <h1 class="text-[28px] sm:text-[32px] md:text-[46px] font-bold leading-tight tracking-wide drop-shadow-md">
        Hai, Mau Travelling Kemana?
      </h1>

      <!-- Booking Form -->
      <div class="mt-8 w-full max-w-sm mx-auto space-y-4">
        <!-- Tab Navigation -->
        <div class="bg-white rounded-2xl p-2.5 shadow-lg">
          <div class="flex space-x-1">
            <button onclick="switchTab(this, 'hotel')" class="tab-btn flex-1 flex items-center justify-center space-x-2 bg-rose-50 text-rose-600 py-2 px-2.5 rounded-lg font-medium  hover:bg-gray-100 text-sm transition-all duration-200" data-tab="hotel">
              <img src="/ri_hotel-fill.png" alt="Hotel" class="w-4 h-4">
              <span>Hotel</span>
            </button>
            <button onclick="switchTab(this, 'pesawat')" class="tab-btn flex-1 flex items-center justify-center space-x-2 text-gray-500 py-2 px-2.5 rounded-lg font-medium text-sm hover:bg-gray-100 transition-all duration-200" data-tab="pesawat">
              <img src="/pesawat.png" alt="Pesawat" class="w-4 h-4">
              <span>Pesawat</span>
            </button>
            <button onclick="switchTab(this, 'kereta')" class="tab-btn flex-1 flex items-center justify-center space-x-2 text-gray-500 py-2 px-2.5 rounded-lg font-medium text-sm hover:bg-gray-100 transition-all duration-200" data-tab="kereta">
              <img src="/train.png" alt="Kereta" class="w-4 h-4">
              <span>Kereta</span>
            </button>
          </div>
        </div>
        
        <!-- Form Card -->
        <div class="bg-white rounded-2xl px-4 pt-4 pb-2 shadow-lg">
          <!-- Hotel Form -->
          <div id="hotel-form" class="space-y-2 sm:space-y-2.5">
            <div class="flex items-center gap-2 sm:gap-3 bg-gray-100 rounded-lg p-2 sm:p-2.5">
              <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
              <input type="text" placeholder="Mau nginep dimana?" class="flex-1 bg-transparent text-gray-700 placeholder-gray-500 outline-none text-xs sm:text-sm truncate">
            </div>
            <div class="flex items-center gap-2 sm:gap-3 bg-gray-100 rounded-lg p-2 sm:p-2.5">
              <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
              </svg>
              <button type="button" onclick="openDateFor('hotelCheckin')" class="flex-1 text-left bg-transparent text-gray-700 outline-none text-xs sm:text-sm truncate">
                <span id="hotelCheckinDisplay" class="text-gray-700">Pilih tanggal</span>
              </button>
              <span class="text-gray-500 text-[11px] sm:text-xs shrink-0">Check-in</span>
            </div>
            <div class="flex items-center gap-2 sm:gap-3 bg-gray-100 rounded-lg p-2 sm:p-2.5">
              <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
              </svg>
              <button type="button" onclick="openDateFor('hotelCheckout')" class="flex-1 text-left bg-transparent text-gray-700 outline-none text-xs sm:text-sm truncate">
                <span id="hotelCheckoutDisplay" class="text-gray-700">Pilih tanggal</span>
              </button>
              <span class="text-gray-500 text-[11px] sm:text-xs shrink-0">Check-out</span>
            </div>
            <div class="flex items-center gap-2 sm:gap-3 bg-gray-100 rounded-lg p-2 sm:p-2.5">
              <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
              </svg>
              <input type="text" placeholder="Kamar & tamu" class="flex-1 bg-transparent text-gray-700 placeholder-gray-500 outline-none text-xs sm:text-sm truncate">
            </div>
          </div>

          <!-- Pesawat Form -->
          <div id="pesawat-form" class="space-y-2 sm:space-y-2.5 hidden">
            <div class="flex items-center gap-1.5 sm:gap-3 bg-gray-100 rounded-lg p-2 sm:p-2.5">
            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
              <input type="text" placeholder="Masukkan nama kota atau bandara" class="flex-1 bg-transparent text-gray-700 placeholder-gray-500 outline-none text-xs sm:text-sm truncate">
              <span class="text-gray-500 text-[11px] sm:text-xs shrink-0">Dari</span>
            </div>
            <div class="flex items-center gap-1.5 sm:gap-3 bg-gray-100 rounded-lg p-2 sm:p-2.5">
            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
              <input type="text" placeholder="Masukkan nama kota atau bandara" class="flex-1 bg-transparent text-gray-700 placeholder-gray-500 outline-none text-xs sm:text-sm truncate">
              <span class="text-gray-500 text-[11px] sm:text-xs shrink-0">Ke</span>
            </div>
            <div class="flex items-center gap-1.5 sm:gap-3 bg-gray-100 rounded-lg p-2 sm:p-2.5">
              <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
              </svg>
              <button type="button" onclick="openDateFor('pesawatPergi')" class="flex-1 text-left bg-transparent text-gray-700 outline-none text-xs sm:text-sm truncate">
                <span id="pesawatPergiDisplay" class="text-gray-700">Pilih tanggal</span>
              </button>
              <span class="text-gray-500 text-[11px] sm:text-xs shrink-0">Pergi</span>
            </div>
            <div class="flex items-center gap-1.5 sm:gap-3 bg-gray-100 rounded-lg p-2 sm:p-2.5">
              <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
              </svg>
              <input type="text" placeholder="Atur jumlah penumpang" class="flex-1 bg-transparent text-gray-700 placeholder-gray-500 outline-none text-xs sm:text-sm truncate">
            </div>

            <div id="pesawat-return" class="flex items-center gap-1.5 sm:gap-3 bg-gray-100 rounded-lg p-2 sm:p-2.5 hidden">
              <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
              </svg>
              <button type="button" onclick="openDateFor('pesawatPulang')" class="flex-1 text-left bg-transparent text-gray-700 outline-none text-xs sm:text-sm truncate">
                <span id="pesawatPulangDisplay" class="text-gray-700">Pilih tanggal</span>
              </button>
              <span class="text-gray-500 text-[11px] sm:text-xs shrink-0">Pulang</span>
            </div>
            <div class="flex items-center justify-between bg-gray-50 rounded-lg p-3">
              <span class="text-gray-700 text-sm font-medium">Pulang-pergi?</span>
              <button onclick="toggleRoundTrip('pesawat')" class="relative inline-flex h-6 w-11 items-center rounded-full bg-gray-200 transition-colors" id="pesawat-toggle">
                <span class="inline-block h-4 w-4 transform rounded-full bg-white transition-transform translate-x-1"></span>
              </button>
            </div>
          </div>

          <!-- Kereta Form -->
          <div id="kereta-form" class="space-y-2 sm:space-y-2.5 hidden">
            <div class="flex items-center gap-2 sm:gap-3 bg-gray-100 rounded-lg p-2 sm:p-2.5">
            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
              <input type="text" placeholder="Masukkan nama kota atau stasiun" class="flex-1 bg-transparent text-gray-700 placeholder-gray-500 outline-none text-xs sm:text-sm truncate">
              <span class="text-gray-500 text-[11px] sm:text-xs shrink-0">Dari</span>
            </div>
            <div class="flex items-center gap-2 sm:gap-3 bg-gray-100 rounded-lg p-2 sm:p-2.5">
            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
              <input type="text" placeholder="Masukkan nama kota atau stasiun" class="flex-1 bg-transparent text-gray-700 placeholder-gray-500 outline-none text-xs sm:text-sm truncate">
              <span class="text-gray-500 text-[11px] sm:text-xs shrink-0">Ke</span>
            </div>
            <div class="flex items-center gap-2 sm:gap-3 bg-gray-100 rounded-lg p-2 sm:p-2.5">
              <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
              </svg>
              <button type="button" onclick="openDateFor('keretaPergi')" class="flex-1 text-left bg-transparent text-gray-700 outline-none text-xs sm:text-sm truncate">
                <span id="keretaPergiDisplay" class="text-gray-700">Pilih tanggal</span>
              </button>
              <span class="text-gray-500 text-[11px] sm:text-xs shrink-0">Pergi</span>
            </div>
            <div id="kereta-return" class="flex items-center gap-2 sm:gap-3 bg-gray-100 rounded-lg p-2 sm:p-2.5 hidden">
              <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
              </svg>
              <button type="button" onclick="openDateFor('keretaPulang')" class="flex-1 text-left bg-transparent text-gray-700 outline-none text-xs sm:text-sm truncate">
                <span id="keretaPulangDisplay" class="text-gray-700">Pilih tanggal</span>
              </button>
              <span class="text-gray-500 text-[11px] sm:text-xs shrink-0">Pulang</span>
            </div>
            <div class="flex items-center space-x-3 bg-gray-100 rounded-lg p-3">
              <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
              </svg>
              <input type="text" placeholder="Atur jumlah penumpang" class="flex-1 bg-transparent text-gray-700 placeholder-gray-500 outline-none text-sm">
            </div>
            <div class="flex items-center justify-between bg-gray-50 rounded-lg p-3">
              <span class="text-gray-700 text-sm font-medium">Pulang-pergi?</span>
              <button onclick="toggleRoundTrip('kereta')" class="relative inline-flex h-6 w-11 items-center rounded-full bg-gray-200 transition-colors" id="kereta-toggle">
                <span class="inline-block h-4 w-4 transform rounded-full bg-white transition-transform translate-x-1"></span>
              </button> 
            </div>
          </div>

          <button onclick="handleSearch()" class="w-full bg-[#FE0004] text-white py-3 px-6 rounded-xl font-semibold text-sm  transition-all duration-300 shadow-md mt-5 hover:scale-105">
            Ayo cari!
          </button>
        </div>
      </div>
    </div>
  </section>

  {{-- Calendar Modal Partial for date picking --}}
  @include('partials.calender')

      <script>
      document.addEventListener('DOMContentLoaded', function () {
        document.body.classList.add('opacity-100');

        // Toggle mobile sidebar
        const menuBtn = document.getElementById("menu-btn");
        const mobileSidebar = document.getElementById("mobile-sidebar");
        const sidebarOverlay = document.getElementById("sidebar-overlay");
        
        menuBtn.addEventListener("click", () => {
          mobileSidebar.classList.remove("translate-x-full");
          sidebarOverlay.classList.remove("hidden");
        });

      // Bridge calendar modal to welcome page date fields
      // Map logical targets to display span IDs
      const dateDisplayMap = {
        hotelCheckin: 'hotelCheckinDisplay',
        hotelCheckout: 'hotelCheckoutDisplay',
        pesawatPergi: 'pesawatPergiDisplay',
        pesawatPulang: 'pesawatPulangDisplay',
        keretaPergi: 'keretaPergiDisplay',
        keretaPulang: 'keretaPulangDisplay',
      };

      // Current field we are picking for
      window._dateTarget = null;

      // Open the shared calendar modal for a specific target
      window.openDateFor = function(targetKey){
        window._dateTarget = targetKey;
        // Default to one way for single date pick on welcome
        if (typeof switchTripType === 'function') {
          try { switchTripType('oneWay'); } catch(e) {}
        }
        if (typeof openDateModal === 'function') {
          openDateModal();
        }
      };

      // Wrap global saveDate to also update welcome displays
      (function(){
        if (typeof window.saveDate === 'function' && !window._origSaveDate) {
          window._origSaveDate = window.saveDate;
          window.saveDate = function(){
            // Call original behavior safely (it may reference IDs not present on this page)
            try { window._origSaveDate(); } catch(e) { /* swallow */ }
            // Then update our display span if a target was set
            try {
              const key = window._dateTarget;
              if (key && dateDisplayMap[key]) {
                const displayEl = document.getElementById(dateDisplayMap[key]);
                if (displayEl) {
                  // Prefer the text from the modal display
                  const depTextEl = document.getElementById('departureDateDisplay');
                  let text = depTextEl ? depTextEl.textContent : '';
                  // Fallback: format global departureDate if available
                  if ((!text || text.trim().length === 0) && window.departureDate instanceof Date) {
                    text = window.departureDate.toLocaleDateString('id-ID', {
                      weekday: 'long', day: 'numeric', month: 'short', year: 'numeric'
                    });
                  }
                  if (text && text.trim().length > 0) {
                    displayEl.textContent = text;
                  }
                }
              }
            } catch(e) { /* no-op */ }
            // Ensure modal closes
            try { if (typeof closeDateModal === 'function') closeDateModal(); } catch(e) {}
            // Reset target
            window._dateTarget = null;
          }
        }
      })();
      });

      // Close sidebar function
      function closeSidebar() {
        const mobileSidebar = document.getElementById("mobile-sidebar");
        const sidebarOverlay = document.getElementById("sidebar-overlay");
        mobileSidebar.classList.add("translate-x-full");
        sidebarOverlay.classList.add("hidden");
      }

      // Tab switching functionality
      function switchTab(clickedTab, tabName) {
        // Remove active state from all tabs
        const allTabs = document.querySelectorAll('.tab-btn');
        allTabs.forEach(tab => {
          tab.classList.remove('bg-rose-50', 'text-rose-600');
          tab.classList.add('text-gray-500');
        });
        
        // Add active state to clicked tab
        clickedTab.classList.remove('text-gray-500');
        clickedTab.classList.add('bg-rose-50', 'text-rose-600');
        
        // Hide all forms
        document.getElementById('hotel-form').classList.add('hidden');
        document.getElementById('pesawat-form').classList.add('hidden');
        document.getElementById('kereta-form').classList.add('hidden');
        
        // Show selected form
        document.getElementById(tabName + '-form').classList.remove('hidden');
      }

      // Round trip toggle functionality
      function toggleRoundTrip(type) {
        const toggle = document.getElementById(type + '-toggle');
        const returnField = document.getElementById(type + '-return');
        const isActive = toggle.classList.contains('bg-rose-500');
        
        if (isActive) {
          // Turn off round trip
          toggle.classList.remove('bg-rose-500');
          toggle.classList.add('bg-gray-200');
          toggle.querySelector('span').classList.remove('translate-x-6');
          toggle.querySelector('span').classList.add('translate-x-1');
          returnField.classList.add('hidden');
        } else {
          // Turn on round trip
          toggle.classList.remove('bg-gray-200');
          toggle.classList.add('bg-rose-500');
          toggle.querySelector('span').classList.remove('translate-x-1');
          toggle.querySelector('span').classList.add('translate-x-6');
          returnField.classList.remove('hidden');
        }
      }

      // Handle search button click
      function handleSearch() {
        // Check which form is currently active
        const hotelForm = document.getElementById('hotel-form');
        const pesawatForm = document.getElementById('pesawat-form');
        const keretaForm = document.getElementById('kereta-form');
        
        if (!hotelForm.classList.contains('hidden')) {
          // Hotel form is active, redirect to pesanan/hotel
          console.log('Redirect: hotel');
          window.location.href = "{{ url('/pesanan/hotel') }}";
        } else if (!pesawatForm.classList.contains('hidden')) {
          // Pesawat form is active, redirect to pesanan/pesawat
          console.log('Redirect: pesawat');
          window.location.href = "{{ url('/pesanan/pesawat') }}";
        } else if (!keretaForm.classList.contains('hidden')) {
          // Kereta form is active, redirect to pesanan/kereta
          console.log('Redirect: kereta');
          window.location.href = "{{ route('pesanan.kereta') }}";
        }
      }
    </script>
</body>

