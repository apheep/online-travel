@include('partials.head')
    
@section('title', 'Home - Online Travel')

@include('partials.navbarcheck')

<body class="bg-gray-50 min-h-screen font-poppins">
  <!-- Main Content -->
  <main id="page-main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 opacity-0 translate-y-2 transition-all duration-500 ease-out">

  @include('partials.alert')
    <!-- Page Header -->
    <div class="mb-8 pl-2">
      <h2 class="text-3xl font-bold text-gray-900">Admin</h2>
      <p class="text-gray-600 mt-1">Order Management</p>
    </div>

    <!-- Filter Tabs -->
    <div class="mb-6">
      <div class="flex flex-wrap gap-2">
        <button class="px-4 py-2 bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white rounded-full text-sm font-medium">
          Menunggu
        </button>
        <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-300 transition">
          Tolak
        </button>
        <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-300 transition">
          Selesai
        </button>
      </div>
    </div>

<!-- Search and Filter -->
<div class="mb-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
  <!-- Search Bar -->
  <div class="w-full sm:max-w-sm">
    <div class="relative">
      <input type="text" placeholder="Search"
             class="w-full pl-3 pr-10 py-2 border-2 border-gray-200 rounded-full text-sm focus:outline-none focus:ring-0 hover:border-[#187499] focus:border-[#36AE7E] transition-all duration-200">
      <button class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700 transition-colors duration-200">
        <i class="fas fa-search"></i>
      </button>
    </div>
  </div>

  <!-- Date Filter -->
  <div class="flex flex-col sm:flex-row sm:items-center gap-3 w-full sm:w-auto">
    <div class="flex items-center gap-2 w-full sm:w-auto">
      <input type="date"
             class="flex-1 px-4 py-2 border-2 border-gray-200 rounded-full text-gray-700 focus:outline-none focus:ring-0 focus:border-[#36AE7E] transition-all duration-200">
      <span class="text-gray-500 text-sm text-center">to</span>
      <input type="date"
             class="flex-1 px-4 py-2 border-2 border-gray-200 rounded-full text-gray-700 focus:outline-none focus:ring-0 focus:border-[#36AE7E] transition-all duration-200">
    </div>
    <button class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-full transition-colors duration-200 flex items-center justify-center space-x-2 focus:outline-none w-full sm:w-auto">
      <i class="fas fa-filter text-sm"></i>
      <span class="text-sm font-medium">Filter</span>
    </button>
  </div>
</div>

@include('partials.table-order')


</main>

  <script>
    // Smooth page enter transition
    document.addEventListener('DOMContentLoaded', function() {
      const mainEl = document.getElementById('page-main');
      if (mainEl) {
        requestAnimationFrame(() => {
          mainEl.classList.remove('opacity-0', 'translate-y-2');
        });
      }
    });
    // Filter tabs functionality
    document.querySelectorAll('button[class*="px-4 py-2"]').forEach(button => {
      if (button.textContent.trim() === 'Menunggu' || button.textContent.trim() === 'Tolak' || button.textContent.trim() === 'Selesai') {
        button.addEventListener('click', function() {
          // Remove active class from all filter buttons
          document.querySelectorAll('button[class*="px-4 py-2"]').forEach(btn => {
            if (btn.textContent.trim() === 'Menunggu' || btn.textContent.trim() === 'Tolak' || btn.textContent.trim() === 'Selesai') {
              btn.className = 'px-4 py-2 bg-gray-200 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-300 transition';
            }
          });
          
          // Add active class to clicked button
          this.className = 'px-4 py-2 bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white rounded-full text-sm font-medium';
        });
      }
    });
  </script>
</body>


@include('partials.footer')