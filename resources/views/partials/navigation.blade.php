    <!-- NavBar -->
    <nav class="relative z-50 flex items-center justify-between w-full max-w-7xl mx-auto px-10 py-6 text-white">
      <a href="{{ route('welcome') }}" class="text-[26px] md:text-[30px] font-bold tracking-wide" style="color: #A0AAC3;">.travelling</a>

      <!-- Desktop Login -->
      <div class="hidden md:flex space-x-3 text-sm items-center">
        <!-- History Icon -->
        <div class="relative">
          <a href="{{ route('history') }}" class="p-2 text-white hover:bg-white/10 rounded-full transition-all duration-300 block">
            <img src="/history.png" alt="History" class="w-5 h-6">
          </a>
        </div>
        
        <!-- Notification Icon -->
        <div class="relative">
          <button class="p-2 text-white hover:bg-white/10 rounded-full transition-all duration-300">
            <img src="/notif.png" alt="Notifications" class="w-5 h-6">
          </button>
          <!-- Notification badge -->
          <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center font-medium">3</span>
        </div>
        
        <div class="relative">
          <button id="user-menu-btn" class="bg-gradient-to-r from-[#187499] to-[#36AE7E] px-6 py-3 rounded-full font-medium hover:from-[#156b8a] hover:to-[#2d9a6e] transition-all duration-300 shadow-lg flex items-center justify-center gap-3 text-white cursor-pointer">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
            </svg>
            <span>{{ Auth::user()->name }}</span>
            <svg id="dropdown-arrow" class="w-4 h-4 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
          <div id="user-dropdown" class="absolute right-0 mt-3 w-56 bg-white rounded-xl shadow-2xl opacity-0 invisible transition-all duration-300 z-50 border border-gray-100 transform scale-95 origin-top-right">
            <div class="p-2">
              <div class="px-4 py-3 border-b border-gray-100">
                <p class="text-sm font-medium text-gray-900">Hi, {{ Auth::user()->name }}</p>
                
              </div>
              <div class="py-2">
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-gradient-to-r hover:from-[#187499] hover:to-[#36AE7E] hover:text-white rounded-lg transition-all duration-200 group/item">
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
        <svg class="w-7 h-7" fill="none" stroke="#A0AAC3" viewBox="0 0 24 24">
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

        <div class="pt-4">
          <!-- Mobile User Profile -->
          <div class="mb-6">
            <!-- User Info Card -->
            <div class="bg-gradient-to-r from-[#187499] to-[#36AE7E] rounded-2xl p-4 text-white shadow-lg">
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
            <a href="{{ route('history') }}" class="bg-white border-2 border-gray-100 hover:border-[#187499] text-gray-700 hover:text-[#187499] py-4 px-4 rounded-2xl font-medium transition-all duration-300 flex flex-col items-center gap-2 shadow-sm hover:shadow-md">
              <div class=" flex items-center justify-center">
                <img src="/history.png" alt="History" class="w-4 h-5">
              </div>
              <span class="text-sm">Riwayat</span>
            </a>
            
            <!-- Notification Button -->
            <button class="bg-white border-2 border-gray-100 hover:border-[#36AE7E] text-gray-700 hover:text-[#36AE7E] py-4 px-4 rounded-2xl font-medium transition-all duration-300 flex flex-col items-center gap-2 shadow-sm hover:shadow-md relative">
              <div class="flex items-center justify-center">
                <img src="/notif.png" alt="Notifications" class="w-4 h-5">
              </div>
              <span class="text-sm">Notifikasi</span>
              <!-- Notification badge -->
              <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center font-medium">3</span>
            </button>
          </div>

        </div>
      </div>
    </div>
    
    <!-- Sidebar Overlay -->
    <div id="sidebar-overlay" class="fixed inset-0 bg-black/50 z-40 hidden md:hidden" onclick="closeSidebar()"></div>

    <script>
      // Mobile sidebar functionality
      document.getElementById('menu-btn').addEventListener('click', function() {
        const sidebar = document.getElementById('mobile-sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        
        sidebar.classList.remove('translate-x-full');
        overlay.classList.remove('hidden');
      });

      function closeSidebar() {
        const sidebar = document.getElementById('mobile-sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        
        sidebar.classList.add('translate-x-full');
        overlay.classList.add('hidden');
      }

      // User dropdown functionality
      document.addEventListener('DOMContentLoaded', function() {
        const userMenuBtn = document.getElementById('user-menu-btn');
        const userDropdown = document.getElementById('user-dropdown');
        const dropdownArrow = document.getElementById('dropdown-arrow');
        let isDropdownOpen = false;

        // Toggle dropdown on button click
        userMenuBtn.addEventListener('click', function(e) {
          e.preventDefault();
          e.stopPropagation();
          
          if (isDropdownOpen) {
            closeDropdown();
          } else {
            openDropdown();
          }
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
          if (!userMenuBtn.contains(e.target) && !userDropdown.contains(e.target)) {
            closeDropdown();
          }
        });

        function openDropdown() {
          userDropdown.classList.remove('opacity-0', 'invisible', 'scale-95');
          userDropdown.classList.add('opacity-100', 'visible', 'scale-100');
          dropdownArrow.classList.add('rotate-180');
          isDropdownOpen = true;
        }

        function closeDropdown() {
          userDropdown.classList.remove('opacity-100', 'visible', 'scale-100');
          userDropdown.classList.add('opacity-0', 'invisible', 'scale-95');
          dropdownArrow.classList.remove('rotate-180');
          isDropdownOpen = false;
        }
      });
    </script>
