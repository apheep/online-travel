@include('partials.head')
    
@section('title', 'Home - Online Travel')

@include('partials.navbarcheck')

<body class="bg-gray-50 min-h-screen font-poppins">
  <!-- Main Content -->
  <main id="page-main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 opacity-0 translate-y-2 transition-all duration-500 ease-out">
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

    <!-- Orders Table -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
      <div class="overflow-x-auto -mx-4 sm:mx-0">
        <table class="min-w-[920px] sm:min-w-full">
          <thead class="bg-gradient-to-r from-gray-50 to-gray-100 border-b-2 border-gray-200">
            <tr>
              <th class="px-6 py-5 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                <div class="flex items-center space-x-1">
                  <span>No</span>
                  <i class="fas fa-sort text-gray-400 text-xs"></i>
                </div>
              </th>
              <th class="px-6 py-5 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                <div class="flex items-center space-x-1">
                  <span>Tanggal</span>
                  <i class="fas fa-sort text-gray-400 text-xs"></i>
                </div>
              </th>
              <th class="px-6 py-5 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                <div class="flex items-center space-x-1">
                  <span>Pelanggan</span>
                  <i class="fas fa-sort text-gray-400 text-xs"></i>
                </div>
              </th>
              <th class="px-6 py-5 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">Kontak</th>
              <th class="px-6 py-5 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                <div class="flex items-center space-x-1">
                  <span>Status</span>
                  <i class="fas fa-sort text-gray-400 text-xs"></i>
                </div>
              </th>
              <th class="px-6 py-5 text-center text-xs font-bold text-gray-700 uppercase tracking-wider">Aksi</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-100 bg-white">
            <!-- Sample Row 1 -->
            <tr class="hover:bg-gradient-to-r hover:from-teal-50 hover:to-blue-50 transition-all duration-200 group">
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="h-10 w-10 bg-gradient-to-br from-teal-100 to-teal-200 rounded-xl flex items-center justify-center shadow-sm">
                    <span class="text-teal-700 font-bold text-sm">001</span>
                  </div>
                </div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm font-semibold text-gray-900">15 Jan 2024</div>
                <div class="text-xs text-gray-500">10:30 AM</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="h-12 w-12 bg-gradient-to-br from-teal-100 to-teal-200 rounded-full flex items-center justify-center mr-4 shadow-sm">
                    <span class="text-teal-700 font-bold text-sm">JD</span>
                  </div>
                  <div>
                    <div class="text-sm font-semibold text-gray-900">John Doe</div>
                    <div class="text-xs text-gray-500">john.doe@email.com</div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm text-gray-900">+62 812-3456-7890</div>
                <div class="text-xs text-gray-500">WhatsApp</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <span class="inline-flex items-center px-3 py-2 rounded-full text-xs font-semibold bg-gradient-to-r from-yellow-100 to-orange-100 text-yellow-800 border border-yellow-200 shadow-sm">
                  <div class="h-2 w-2 bg-yellow-500 rounded-full mr-2 animate-pulse"></div>
                  Menunggu
                </span>
              </td>
              <td class="px-6 py-5 whitespace-nowrap text-center">
                <div class="flex items-center justify-center space-x-2">
                  <button class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white text-xs font-semibold rounded-lg hover:from-[#156b8a] hover:to-[#2d9a6e] transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                    <i class="fas fa-eye mr-2"></i>
                    Detail
                  </button>
                  <button class="inline-flex items-center px-3 py-2 bg-gray-100 text-gray-600 text-xs font-medium rounded-lg hover:bg-gray-200 transition-all duration-200">
                    <i class="fas fa-ellipsis-v"></i>
                  </button>
                </div>
              </td>
            </tr>

            <!-- Sample Row 2 -->
            <tr class="hover:bg-gradient-to-r hover:from-red-50 hover:to-pink-50 transition-all duration-200 group">
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="h-10 w-10 bg-gradient-to-br from-red-100 to-red-200 rounded-xl flex items-center justify-center shadow-sm">
                    <span class="text-red-700 font-bold text-sm">002</span>
                  </div>
                </div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm font-semibold text-gray-900">14 Jan 2024</div>
                <div class="text-xs text-gray-500">09:15 AM</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="h-12 w-12 bg-gradient-to-br from-red-100 to-red-200 rounded-full flex items-center justify-center mr-4 shadow-sm">
                    <span class="text-red-700 font-bold text-sm">JS</span>
                  </div>
                  <div>
                    <div class="text-sm font-semibold text-gray-900">Jane Smith</div>
                    <div class="text-xs text-gray-500">jane.smith@email.com</div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm text-gray-900">+62 813-9876-5432</div>
                <div class="text-xs text-gray-500">WhatsApp</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <span class="inline-flex items-center px-3 py-2 rounded-full text-xs font-semibold bg-gradient-to-r from-red-100 to-red-200 text-red-800 border border-red-200 shadow-sm">
                  <div class="h-2 w-2 bg-red-500 rounded-full mr-2"></div>
                  Tolak
                </span>
              </td>
              <td class="px-6 py-5 whitespace-nowrap text-center">
                <div class="flex items-center justify-center space-x-2">
                  <button class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white text-xs font-semibold rounded-lg hover:from-[#156b8a] hover:to-[#2d9a6e] transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                    <i class="fas fa-eye mr-2"></i>
                    Detail
                  </button>
                  <button class="inline-flex items-center px-3 py-2 bg-gray-100 text-gray-600 text-xs font-medium rounded-lg hover:bg-gray-200 transition-all duration-200">
                    <i class="fas fa-ellipsis-v"></i>
                  </button>
                </div>
              </td>
            </tr>

            <!-- Sample Row 3 -->
            <tr class="hover:bg-gradient-to-r hover:from-green-50 hover:to-emerald-50 transition-all duration-200 group">
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="h-10 w-10 bg-gradient-to-br from-green-100 to-green-200 rounded-xl flex items-center justify-center shadow-sm">
                    <span class="text-green-700 font-bold text-sm">003</span>
                  </div>
                </div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm font-semibold text-gray-900">13 Jan 2024</div>
                <div class="text-xs text-gray-500">14:20 PM</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="h-12 w-12 bg-gradient-to-br from-blue-100 to-blue-200 rounded-full flex items-center justify-center mr-4 shadow-sm">
                    <span class="text-blue-700 font-bold text-sm">AB</span>
                  </div>
                  <div>
                    <div class="text-sm font-semibold text-gray-900">Ahmad Budi</div>
                    <div class="text-xs text-gray-500">ahmad.budi@email.com</div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm text-gray-900">+62 814-1234-5678</div>
                <div class="text-xs text-gray-500">WhatsApp</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <span class="inline-flex items-center px-3 py-2 rounded-full text-xs font-semibold bg-gradient-to-r from-green-100 to-emerald-100 text-green-800 border border-green-200 shadow-sm">
                  <div class="h-2 w-2 bg-green-500 rounded-full mr-2"></div>
                  Selesai
                </span>
              </td>
              <td class="px-6 py-5 whitespace-nowrap text-center">
                <div class="flex items-center justify-center space-x-2">
                  <button class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white text-xs font-semibold rounded-lg hover:from-[#156b8a] hover:to-[#2d9a6e] transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                    <i class="fas fa-eye mr-2"></i>
                    Detail
                  </button>
                  <button class="inline-flex items-center px-3 py-2 bg-gray-100 text-gray-600 text-xs font-medium rounded-lg hover:bg-gray-200 transition-all duration-200">
                    <i class="fas fa-ellipsis-v"></i>
                  </button>
                </div>
              </td>
            </tr>

            <!-- Sample Row 4 -->
            <tr class="hover:bg-gradient-to-r hover:from-purple-50 hover:to-pink-50 transition-all duration-200 group">
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="h-10 w-10 bg-gradient-to-br from-purple-100 to-purple-200 rounded-xl flex items-center justify-center shadow-sm">
                    <span class="text-purple-700 font-bold text-sm">004</span>
                  </div>
                </div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm font-semibold text-gray-900">12 Jan 2024</div>
                <div class="text-xs text-gray-500">16:45 PM</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="h-12 w-12 bg-gradient-to-br from-purple-100 to-purple-200 rounded-full flex items-center justify-center mr-4 shadow-sm">
                    <span class="text-purple-700 font-bold text-sm">SR</span>
                  </div>
                  <div>
                    <div class="text-sm font-semibold text-gray-900">Sari Rahayu</div>
                    <div class="text-xs text-gray-500">sari.rahayu@email.com</div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm text-gray-900">+62 815-5678-9012</div>
                <div class="text-xs text-gray-500">WhatsApp</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <span class="inline-flex items-center px-3 py-2 rounded-full text-xs font-semibold bg-gradient-to-r from-red-100 to-red-200 text-red-800 border border-red-200 shadow-sm">
                  <div class="h-2 w-2 bg-red-500 rounded-full mr-2"></div>
                  Tolak
                </span>
              </td>
              <td class="px-6 py-5 whitespace-nowrap text-center">
                <div class="flex items-center justify-center space-x-2">
                <a href="{{ route('check.detail') }}" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white text-xs font-semibold rounded-lg hover:from-[#156b8a] hover:to-[#2d9a6e] transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
  <i class="fas fa-eye mr-2"></i>
  Detail
</a>                  <button class="inline-flex items-center px-3 py-2 bg-gray-100 text-gray-600 text-xs font-medium rounded-lg hover:bg-gray-200 transition-all duration-200">
                    <i class="fas fa-ellipsis-v"></i>
                  </button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Pagination -->
    <div class="mt-6 flex items-center justify-between">
      <div class="text-sm text-gray-700">
        Showing <span class="font-medium">1</span> to <span class="font-medium">4</span> of <span class="font-medium">12</span> results
      </div>
      <div class="flex items-center space-x-2">
        <button class="px-3 py-2 text-sm text-gray-500 hover:text-gray-700 disabled:opacity-50" disabled>
          <i class="fas fa-chevron-left"></i>
        </button>
        <button class="px-3 py-2 text-sm bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white rounded-md">1</button>
        <button class="px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-[#187499] rounded-md">2</button>
        <button class="px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-[#187499] rounded-md">3</button>
        <button class="px-3 py-2 text-sm text-gray-500 hover:text-[#187499]">
          <i class="fas fa-chevron-right"></i>
        </button>
      </div>
    </div>
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