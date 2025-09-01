@include('partials.head')
    
@section('title', 'Home - Online Travel')



<body class="relative bg-white font-poppins opacity-0 transition-opacity duration-700">

  <!-- Background Section -->
  <section class="relative bg-cover md:rounded-b-[100px] shadow-2xl" style="background-image: url(/background.png);">
    <!-- <div class="absolute inset-0 bg-black/20 md:rounded-b-[100px]"></div> -->

    <!-- NavBar -->
    <nav class="relative z-10 flex items-center justify-between w-full px-10 py-6 text-white">
      <a href="#" class="text-[26px] md:text-[30px] font-bold tracking-wide">.travelling</a>

      <!-- Desktop Menu -->
      <ul class="hidden md:flex absolute left-1/2 -translate-x-1/2 items-center space-x-8 text-[18px] font-normal">
        <li><a href="#" class="hover:underline">Home</a></li>
        <li><a href="#" class="hover:underline">About</a></li>
        <li><a href="#" class="hover:underline">Offers</a></li>
        <li><a href="#" class="hover:underline">Our Contact</a></li>
      </ul>

      <!-- Desktop Login -->
      <div class="hidden md:flex space-x-6 text-sm items-center">
        <!-- Notification Icon -->
        <div class="relative">
          <button class="p-2 text-white hover:bg-white/10 rounded-full transition-all duration-300">
            <img src="/notif.png" alt="Notifications" class="w-6 h-6">
          </button>
          <!-- Notification badge -->
          <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center font-medium">3</span>
        </div>
        
        <div class="relative group">
          <a href="#" class="bg-gradient-to-r from-[#187499] to-[#36AE7E] px-6 py-3 rounded-full font-medium hover:from-[#156b8a] hover:to-[#2d9a6e] transition-all duration-300 shadow-lg flex items-center justify-center gap-3 text-white cursor-pointer">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
            </svg>
            <span>inlife</span>
            <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </a>
          <div class="absolute right-0 mt-3 w-56 bg-white rounded-xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 border border-gray-100 transform scale-95 group-hover:scale-100 origin-top-right">
            <div class="p-2">
              <div class="px-4 py-3 border-b border-gray-100">
                <p class="text-sm font-medium text-gray-900">Welcome back!</p>
                <p class="text-xs text-gray-500">Manage your account</p>
              </div>
              <div class="py-2">
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-gradient-to-r hover:from-[#187499] hover:to-[#36AE7E] hover:text-white rounded-lg transition-all duration-200 group/item">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                  </svg>
                  <span class="font-medium">Logout</span>
                  <svg class="w-4 h-4 ml-auto opacity-0 group-hover/item:opacity-100 transition-opacity duration-200" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                  </svg>
                </a>
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
    <div id="mobile-sidebar" class="fixed top-0 right-0 h-full w-64 bg-white shadow-2xl transform translate-x-full transition-transform duration-300 ease-in-out z-50">
      <div class="flex items-center justify-between p-6 border-b">
        <h3 class="text-lg font-semibold text-gray-800">Menu</h3>
        <button onclick="closeSidebar()" class="text-gray-500 hover:text-gray-700">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      <div class="p-6 space-y-4">
        <a href="#" class="block text-gray-700 hover:text-green-600 py-2 font-medium">Home</a>
        <a href="#" class="block text-gray-700 hover:text-green-600 py-2 font-medium">About</a>
        <a href="#" class="block text-gray-700 hover:text-green-600 py-2 font-medium">Offers</a>
        <a href="#" class="block text-gray-700 hover:text-green-600 py-2 font-medium">Our Contact</a>
        <div class="pt-4">
          <!-- Mobile Notification Icon -->
          <div class="mb-4">
            <button class="w-full flex items-center justify-center gap-3 bg-gray-100 text-gray-700 py-3 px-6 rounded-full font-medium hover:bg-gray-200 transition-all duration-300">
              <img src="/notif.png" alt="Notifications" class="w-5 h-5">
              <span>Notifikasi</span>
              <span class="bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center font-medium ml-auto">3</span>
            </button>
          </div>
          
          <div class="relative group">
            <a href="#" class="block bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white text-center py-3 px-6 rounded-full font-medium hover:from-[#156b8a] hover:to-[#2d9a6e] transition-all duration-300 flex items-center justify-center gap-3 cursor-pointer">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
              </svg>
              <span>inlife</span>
              <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </a>
            <div class="absolute left-0 mt-3 w-56 bg-white rounded-xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 border border-gray-100 transform scale-95 group-hover:scale-100 origin-top-left">
              <div class="p-2">
                <div class="px-4 py-3 border-b border-gray-100">
                  <p class="text-sm font-medium text-gray-900">Welcome back!</p>
                  <p class="text-xs text-gray-500">Manage your account</p>
                </div>
                <div class="py-2">
                  <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-gradient-to-r hover:from-[#187499] hover:to-[#36AE7E] hover:text-white rounded-lg transition-all duration-200 group/item">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                    <span class="font-medium">Logout</span>
                    <svg class="w-4 h-4 ml-auto opacity-0 group-hover/item:opacity-100 transition-opacity duration-200" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Sidebar Overlay -->
    <div id="sidebar-overlay" class="fixed inset-0 bg-black/50 z-40 hidden md:hidden" onclick="closeSidebar()"></div>

    <!-- Main Content -->
    <div class="relative z-10 flex flex-col items-center justify-center h-[calc(100vh-72px)] max-w-4xl mx-auto px-6 text-white text-center mt-10 md:mt-6">
      <h1 class="text-[36px] md:text-[50px] font-bold leading-tight tracking-wide drop-shadow-md">
        Hai, Mau Travelling Kemana?
      </h1>

      <!-- Booking Form -->
      <div class="mt-8 w-full max-w-sm mx-auto space-y-4">
        <!-- Tab Navigation -->
        <div class="bg-white rounded-2xl p-2.5 shadow-lg">
          <div class="flex space-x-1">
            <button onclick="switchTab(this, 'hotel')" class="tab-btn flex-1 flex items-center justify-center space-x-2 bg-green-50 text-green-600 py-2 px-2.5 rounded-lg font-medium text-sm transition-all duration-200" data-tab="hotel">
              <img src="/ri_hotel-fill.png" alt="Hotel" class="w-4 h-4">
              <span>Hotel</span>
            </button>
            <button onclick="switchTab(this, 'pesawat')" class="tab-btn flex-1 flex items-center justify-center space-x-2 text-gray-500 py-2 px-2.5 rounded-lg font-medium text-sm hover:bg-gray-50 transition-all duration-200" data-tab="pesawat">
              <img src="/pesawat.png" alt="Pesawat" class="w-4 h-4">
              <span>Pesawat</span>
            </button>
            <button onclick="switchTab(this, 'kereta')" class="tab-btn flex-1 flex items-center justify-center space-x-2 text-gray-500 py-2 px-2.5 rounded-lg font-medium text-sm hover:bg-gray-50 transition-all duration-200" data-tab="kereta">
              <img src="/train.png" alt="Kereta" class="w-4 h-4">
              <span>Kereta</span>
            </button>
          </div>
        </div>
        
        <!-- Form Card -->
        <div class="bg-white rounded-2xl p-4 shadow-lg">
          <!-- Hotel Form -->
          <div id="hotel-form" class="space-y-3">
            <div class="flex items-center space-x-3 bg-gray-100 rounded-lg p-3">
              <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
              <input type="text" placeholder="Mau nginep dimana?" class="flex-1 bg-transparent text-gray-700 placeholder-gray-500 outline-none text-sm">
            </div>
            <div class="flex items-center space-x-3 bg-gray-100 rounded-lg p-3">
              <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
              </svg>
              <input type="date" class="flex-1 bg-transparent text-gray-700 outline-none text-sm">
              <span class="text-gray-500 text-sm">Check-in</span>
            </div>
            <div class="flex items-center space-x-3 bg-gray-100 rounded-lg p-3">
              <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
              </svg>
              <input type="date" class="flex-1 bg-transparent text-gray-700 outline-none text-sm">
              <span class="text-gray-500 text-sm">Check-out</span>
            </div>
            <div class="flex items-center space-x-3 bg-gray-100 rounded-lg p-3">
              <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
              </svg>
              <input type="text" placeholder="Kamar & tamu" class="flex-1 bg-transparent text-gray-700 placeholder-gray-500 outline-none text-sm">
            </div>
          </div>

          <!-- Pesawat Form -->
          <div id="pesawat-form" class="space-y-3 hidden">
            <div class="flex items-center space-x-3 bg-gray-100 rounded-lg p-3">
            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
              <input type="text" placeholder="Masukkan nama kota atau bandara" class="flex-1 bg-transparent text-gray-700 placeholder-gray-500 outline-none text-sm">
              <span class="text-gray-500 text-sm">Dari</span>
            </div>
            <div class="flex items-center space-x-3 bg-gray-100 rounded-lg p-3">
            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
              </svg>
              <input type="text" placeholder="Masukkan nama kota atau bandara" class="flex-1 bg-transparent text-gray-700 placeholder-gray-500 outline-none text-sm">
              <span class="text-gray-500 text-sm">Ke</span>
            </div>
            <div class="flex items-center space-x-3 bg-gray-100 rounded-lg p-3">
              <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
              </svg>
              <input type="date" class="flex-1 bg-transparent text-gray-700 outline-none text-sm">
              <span class="text-gray-500 text-sm">Pergi</span>
            </div>
            <div id="pesawat-return" class="flex items-center space-x-3 bg-gray-100 rounded-lg p-3 hidden">
              <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
              </svg>
              <input type="date" class="flex-1 bg-transparent text-gray-700 outline-none text-sm">
              <span class="text-gray-500 text-sm">Pulang</span>
            </div>
            <div class="flex items-center justify-between bg-gray-50 rounded-lg p-3">
              <span class="text-gray-700 text-sm font-medium">Pulang-pergi?</span>
              <button onclick="toggleRoundTrip('pesawat')" class="relative inline-flex h-6 w-11 items-center rounded-full bg-gray-200 transition-colors" id="pesawat-toggle">
                <span class="inline-block h-4 w-4 transform rounded-full bg-white transition-transform translate-x-1"></span>
              </button>
            </div>
          </div>

          <!-- Kereta Form -->
          <div id="kereta-form" class="space-y-3 hidden">
            <div class="flex items-center space-x-3 bg-gray-100 rounded-lg p-3">
            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
              <input type="text" placeholder="Masukkan nama kota atau stasiun" class="flex-1 bg-transparent text-gray-700 placeholder-gray-500 outline-none text-sm">
              <span class="text-gray-500 text-sm">Dari</span>
            </div>
            <div class="flex items-center space-x-3 bg-gray-100 rounded-lg p-3">
            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
              <input type="text" placeholder="Masukkan nama kota atau stasiun" class="flex-1 bg-transparent text-gray-700 placeholder-gray-500 outline-none text-sm">
              <span class="text-gray-500 text-sm">Ke</span>
            </div>
            <div class="flex items-center space-x-3 bg-gray-100 rounded-lg p-3">
              <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
              </svg>
              <input type="date" class="flex-1 bg-transparent text-gray-700 outline-none text-sm">
              <span class="text-gray-500 text-sm">Pergi</span>
            </div>
            <div id="kereta-return" class="flex items-center space-x-3 bg-gray-100 rounded-lg p-3 hidden">
              <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
              </svg>
              <input type="date" class="flex-1 bg-transparent text-gray-700 outline-none text-sm">
              <span class="text-gray-500 text-sm">Pulang</span>
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

          <button class="w-full bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white py-3 px-4 rounded-lg font-semibold text-sm hover:from-[#156b8a] hover:to-[#2d9a6e] transition-all duration-300 shadow-md mt-4">
            Ayo cari!
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- About Travelling Section -->
  <section class="py-8 md:py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4 md:px-6">
      <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center">
        <div class="relative order-2 md:order-1">
          <img src="/about-travelling.png" alt="Luxury Resort" class="w-full h-64 md:h-80 object-cover rounded-2xl shadow-lg">
        </div>
        <div class="space-y-4 md:space-y-6 order-1 md:order-2">
          <h2 class="text-2xl md:text-4xl font-bold text-gray-800 text-center md:text-left">About Travelling</h2>
          <p class="text-base md:text-lg text-gray-600 leading-relaxed text-center md:text-left">
            Travelling adalah website yang dirancang untuk memudahkan perjalanan bisnis Anda. Kami menyediakan informasi destinasi, rekomendasi akomodasi, dan layanan pendukung untuk pengalaman yang nyaman, efisien, dan terpercaya.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Hotel Recommendations Section -->
  <section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6">
      <h2 class="text-4xl font-bold text-gray-800 mb-12 text-center">Rekomendasi Hotel</h2>
      <div class="flex space-x-6 overflow-x-auto pb-4">
        <!-- Hotel Card 1 -->
        <div class="flex-shrink-0 w-80 bg-white rounded-2xl shadow-lg overflow-hidden">
          <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=1000&auto=format&fit=crop" alt="Hotel Majapahit" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Hotel Majapahit Surabaya</h3>
            <div class="flex items-center mb-2">
              <span class="text-yellow-500 text-sm font-medium">4.9/5</span>
              <div class="flex ml-2">
                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
              </div>
            </div>
            <p class="text-gray-600 mb-3">Genteng, Surabaya Pusat</p>
            <p class="text-lg font-semibold text-green-600">IDR 1.200.000 - 1.600.000</p>
          </div>
        </div>

        <!-- Hotel Card 2 -->
        <div class="flex-shrink-0 w-80 bg-white rounded-2xl shadow-lg overflow-hidden">
          <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?q=80&w=1000&auto=format&fit=crop" alt="Hotel Banyan Tree" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Banyan Tree Bintan</h3>
            <div class="flex items-center mb-2">
              <span class="text-yellow-500 text-sm font-medium">4.8/5</span>
              <div class="flex ml-2">
                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
              </div>
            </div>
            <p class="text-gray-600 mb-3">Bintan, Kepulauan Riau</p>
            <p class="text-lg font-semibold text-green-600">IDR 2.500.000 - 4.000.000</p>
          </div>
        </div>

        <!-- Hotel Card 3 -->
        <div class="flex-shrink-0 w-80 bg-white rounded-2xl shadow-lg overflow-hidden">
          <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?q=80&w=1000&auto=format&fit=crop" alt="Hotel Four Seasons" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Four Seasons Bali</h3>
            <div class="flex items-center mb-2">
              <span class="text-yellow-500 text-sm font-medium">4.9/5</span>
              <div class="flex ml-2">
                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
              </div>
            </div>
            <p class="text-gray-600 mb-3">Sayan, Ubud, Bali</p>
            <p class="text-lg font-semibold text-green-600">IDR 5.000.000 - 8.000.000</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Flight Tickets Section -->
  <section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6">
      <h2 class="text-4xl font-bold text-gray-800 mb-12 text-center">Tiket Pesawat</h2>
      
      <!-- Flight Class Tabs -->
      <div class="flex justify-center space-x-2 mb-8">
        <button class="px-6 py-3 bg-teal-600 text-white rounded-lg font-medium">Ekonomi</button>
        <button class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg font-medium hover:bg-gray-300">Bisnis</button>
        <button class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg font-medium hover:bg-gray-300">Premium Ekonomi</button>
        <button class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg font-medium hover:bg-gray-300">First</button>
      </div>

      <div class="flex space-x-6 overflow-x-auto pb-4">
        <!-- Flight Card 1 -->
        <div class="flex-shrink-0 w-80 bg-white rounded-2xl shadow-lg p-6 border">
          <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold text-gray-800">Surabaya ke Bali</h3>
            <span class="text-sm text-gray-500 bg-gray-100 px-2 py-1 rounded">Sekali jalan</span>
          </div>
          <div class="space-y-3 mb-4">
            <div class="flex items-center text-sm text-gray-600">
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
              </svg>
              5 Sep 2025
            </div>
            <div class="flex items-center text-sm text-gray-600">
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
              </svg>
              Mulai dari IDR 600.000
            </div>
          </div>
          <div class="flex items-center justify-between">
            <span class="text-sm text-gray-600">Lion Air Ekonomi</span>
            <img src="https://via.placeholder.com/60x30/FF6B35/FFFFFF?text=LA" alt="Lion Air" class="w-15 h-8 rounded">
          </div>
        </div>

        <!-- Flight Card 2 -->
        <div class="flex-shrink-0 w-80 bg-white rounded-2xl shadow-lg p-6 border">
          <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold text-gray-800">Jakarta ke Surabaya</h3>
            <span class="text-sm text-gray-500 bg-gray-100 px-2 py-1 rounded">Pulang-pergi</span>
          </div>
          <div class="space-y-3 mb-4">
            <div class="flex items-center text-sm text-gray-600">
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
              </svg>
              10-15 Sep 2025
            </div>
            <div class="flex items-center text-sm text-gray-600">
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
              </svg>
              Mulai dari IDR 800.000
            </div>
          </div>
          <div class="flex items-center justify-between">
            <span class="text-sm text-gray-600">Garuda Indonesia</span>
            <img src="https://via.placeholder.com/60x30/1E3A8A/FFFFFF?text=GA" alt="Garuda" class="w-15 h-8 rounded">
          </div>
        </div>

        <!-- Flight Card 3 -->
        <div class="flex-shrink-0 w-80 bg-white rounded-2xl shadow-lg p-6 border">
          <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold text-gray-800">Bandung ke Yogyakarta</h3>
            <span class="text-sm text-gray-500 bg-gray-100 px-2 py-1 rounded">Sekali jalan</span>
          </div>
          <div class="space-y-3 mb-4">
            <div class="flex items-center text-sm text-gray-600">
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
              </svg>
              20 Sep 2025
            </div>
            <div class="flex items-center text-sm text-gray-600">
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
              </svg>
              Mulai dari IDR 450.000
            </div>
          </div>
          <div class="flex items-center justify-between">
            <span class="text-sm text-gray-600">Citilink</span>
            <img src="https://via.placeholder.com/60x30/059669/FFFFFF?text=QG" alt="Citilink" class="w-15 h-8 rounded">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Train Tickets Section -->
  <section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6">
      <h2 class="text-4xl font-bold text-gray-800 mb-12 text-center">Tiket Kereta</h2>
      
      <!-- Train Class Tabs -->
      <div class="flex justify-center space-x-2 mb-8">
        <button class="px-6 py-3 bg-teal-600 text-white rounded-lg font-medium">Ekonomi</button>
        <button class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg font-medium hover:bg-gray-300">Eksekutif</button>
      </div>

      <div class="flex space-x-6 overflow-x-auto pb-4">
        <!-- Train Card 1 -->
        <div class="flex-shrink-0 w-80 bg-white rounded-2xl shadow-lg p-6 border">
          <h3 class="text-lg font-semibold text-gray-800 mb-4">Sancaka (81)</h3>
          <div class="space-y-3 mb-4">
            <div class="flex items-center text-sm text-gray-600">
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              07:00 Surabaya Gubeng (SGU)
            </div>
            <div class="flex items-center text-sm text-gray-600">
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              10:07 Solo Balapan (SLO)
            </div>
            <div class="flex items-center text-sm text-gray-600">
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
              </svg>
              Harga tersedia mulai dari Rp 250.000
            </div>
          </div>
        </div>

        <!-- Train Card 2 -->
        <div class="flex-shrink-0 w-80 bg-white rounded-2xl shadow-lg p-6 border">
          <h3 class="text-lg font-semibold text-gray-800 mb-4">Argo Bromo Anggrek (9)</h3>
          <div class="space-y-3 mb-4">
            <div class="flex items-center text-sm text-gray-600">
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              08:30 Jakarta Gambir (GMR)
            </div>
            <div class="flex items-center text-sm text-gray-600">
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              14:45 Surabaya Gubeng (SGU)
            </div>
            <div class="flex items-center text-sm text-gray-600">
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
              </svg>
              Harga tersedia mulai dari Rp 450.000
            </div>
          </div>
        </div>

        <!-- Train Card 3 -->
        <div class="flex-shrink-0 w-80 bg-white rounded-2xl shadow-lg p-6 border">
          <h3 class="text-lg font-semibold text-gray-800 mb-4">Taksaka (60)</h3>
          <div class="space-y-3 mb-4">
            <div class="flex items-center text-sm text-gray-600">
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              19:00 Yogyakarta (YK)
            </div>
            <div class="flex items-center text-sm text-gray-600">
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              22:30 Jakarta Gambir (GMR)
            </div>
            <div class="flex items-center text-sm text-gray-600">
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
              </svg>
              Harga tersedia mulai dari Rp 350.000
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@include('partials.footer')

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
          tab.classList.remove('bg-green-50', 'text-green-600');
          tab.classList.add('text-gray-500');
        });
        
        // Add active state to clicked tab
        clickedTab.classList.remove('text-gray-500');
        clickedTab.classList.add('bg-green-50', 'text-green-600');
        
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
        const isActive = toggle.classList.contains('bg-green-500');
        
        if (isActive) {
          // Turn off round trip
          toggle.classList.remove('bg-green-500');
          toggle.classList.add('bg-gray-200');
          toggle.querySelector('span').classList.remove('translate-x-6');
          toggle.querySelector('span').classList.add('translate-x-1');
          returnField.classList.add('hidden');
        } else {
          // Turn on round trip
          toggle.classList.remove('bg-gray-200');
          toggle.classList.add('bg-green-500');
          toggle.querySelector('span').classList.remove('translate-x-1');
          toggle.querySelector('span').classList.add('translate-x-6');
          returnField.classList.remove('hidden');
        }
      }
    </script>
</body>

