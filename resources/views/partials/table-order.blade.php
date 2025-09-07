    <!-- Orders Table -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
      <div class="hidden md:block overflow-x-auto -mx-4 sm:mx-0">
        <table class="min-w-[920px] sm:min-w-full">
          <thead class="bg-gradient-to-r from-gray-50 to-gray-100 border-b-2 border-gray-200">
            <tr>
              <th class="px-6 py-5 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                <div class="flex items-center space-x-1">
                  <span>No</span>
                  <i class="fas fa-sort text-gray-400 text-xs"></i>
                </div>
              </th>
              <th class="px-6 py-5 text-center text-xs font-bold text-gray-700 uppercase tracking-wider">Detail</th>
              <th class="px-6 py-5 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                <div class="flex items-center space-x-1">
                  <span>Jenis Tiket</span>
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
                  <span>Nama</span>
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
            </tr>
          </thead>
          <tbody id="orders-tbody" class="divide-y divide-gray-100 bg-white">
            <!-- Sample Row 1 -->
            <tr class="hover:bg-gradient-to-r hover:from-teal-50 hover:to-blue-50 transition-all duration-200 group">
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="h-10 w-10 bg-gradient-to-br from-teal-100 to-teal-200 rounded-xl flex items-center justify-center shadow-sm">
                    <span class="text-teal-700 font-bold text-sm">001</span>
                  </div>
                </div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap text-center">
                <div class="flex items-center justify-center">
                  <a href="{{ route('check.detail-kereta') }}" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white text-xs font-semibold rounded-lg hover:from-[#156b8a] hover:to-[#2d9a6e] transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                    <i class="fas fa-eye mr-2"></i>
                    Detail
                  </a>
                </div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-teal-50 text-teal-700 border border-teal-200">Kereta</span>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm font-semibold text-gray-900">15 Jan 2024</div>
                <div class="text-xs text-gray-500">10:30 AM</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div>
                  <div class="text-sm font-semibold text-gray-900">John Doe</div>
                  <div class="text-xs text-gray-500">john.doe@email.com</div>
                </div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm text-gray-900">+62 812-3456-7890</div>
                <div class="text-xs text-gray-500">WhatsApp</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <span class="inline-flex items-center px-3 py-2 rounded-full text-xs font-semibold bg-gradient-to-r from-yellow-100 to-orange-100 text-yellow-800 border border-yellow-200 shadow-sm">
                  <div class="h-2 w-2 bg-yellow-500 rounded-full mr-2 animate-pulse"></div>
                  Request
                </span>
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
              <td class="px-6 py-5 whitespace-nowrap text-center">
                <div class="flex items-center justify-center">
                  <button class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white text-xs font-semibold rounded-lg hover:from-[#156b8a] hover:to-[#2d9a6e] transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                    <i class="fas fa-eye mr-2"></i>
                    Detail
                  </button>
                </div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-200">Pesawat</span>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm font-semibold text-gray-900">14 Jan 2024</div>
                <div class="text-xs text-gray-500">09:15 AM</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div>
                  <div class="text-sm font-semibold text-gray-900">Jane Smith</div>
                  <div class="text-xs text-gray-500">jane.smith@email.com</div>
                </div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm text-gray-900">+62 813-9876-5432</div>
                <div class="text-xs text-gray-500">WhatsApp</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <span class="inline-flex items-center px-3 py-2 rounded-full text-xs font-semibold bg-gradient-to-r from-red-100 to-red-200 text-red-800 border border-red-200 shadow-sm">
                  <div class="h-2 w-2 bg-red-500 rounded-full mr-2"></div>
                  Reject
                </span>
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
              <td class="px-6 py-5 whitespace-nowrap text-center">
                <div class="flex items-center justify-center">
                <a href="{{ route('check.detail-hotel') }}" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white text-xs font-semibold rounded-lg hover:from-[#156b8a] hover:to-[#2d9a6e] transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                    <i class="fas fa-eye mr-2"></i>
                    Detail
                  </a>
                </div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200">Hotel</span>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm font-semibold text-gray-900">13 Jan 2024</div>
                <div class="text-xs text-gray-500">14:20 PM</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div>
                  <div class="text-sm font-semibold text-gray-900">Ahmad Budi</div>
                  <div class="text-xs text-gray-500">ahmad.budi@email.com</div>
                </div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm text-gray-900">+62 814-1234-5678</div>
                <div class="text-xs text-gray-500">WhatsApp</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <span class="inline-flex items-center px-3 py-2 rounded-full text-xs font-semibold bg-gradient-to-r from-green-100 to-emerald-100 text-green-800 border border-green-200 shadow-sm">
                  <div class="h-2 w-2 bg-green-500 rounded-full mr-2"></div>
                  Approve
                </span>
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
              <td class="px-6 py-5 whitespace-nowrap text-center">
                <div class="flex items-center justify-center">
                  <a href="{{ route('check.detail') }}" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white text-xs font-semibold rounded-lg hover:from-[#156b8a] hover:to-[#2d9a6e] transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                    <i class="fas fa-eye mr-2"></i>
                    Detail
                  </a>
                </div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-200">Pesawat</span>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm font-semibold text-gray-900">12 Jan 2024</div>
                <div class="text-xs text-gray-500">16:45 PM</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div>
                  <div class="text-sm font-semibold text-gray-900">Sari Rahayu</div>
                  <div class="text-xs text-gray-500">sari.rahayu@email.com</div>
                </div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm text-gray-900">+62 815-5678-9012</div>
                <div class="text-xs text-gray-500">WhatsApp</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <span class="inline-flex items-center px-3 py-2 rounded-full text-xs font-semibold bg-gradient-to-r from-red-100 to-red-200 text-red-800 border border-red-200 shadow-sm">
                  <div class="h-2 w-2 bg-red-500 rounded-full mr-2"></div>
                  Reject
                </span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Mobile Cards (md:hidden) -->
    <div id="orders-cards" class="md:hidden bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
      <!-- Card 1 -->
      <div class="order-card p-6 border-b border-gray-200">
        <div class="flex items-start justify-between mb-4">
          <div>
            <div class="text-sm font-medium text-gray-900">#001</div>
            <div class="text-xs text-gray-500">15 Jan 2024 • 10:30</div>
          </div>
          <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-800">
            <div class="w-1.5 h-1.5 bg-yellow-500 rounded-full mr-1 animate-pulse"></div>
            Request
          </span>
        </div>
        <div class="flex items-center mb-3">
          <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-teal-50 text-teal-700 border border-teal-200 mr-3">Kereta</span>
          <div>
            <div class="text-sm font-medium text-gray-900">John Doe</div>
            <div class="text-xs text-gray-500">john.doe@email.com</div>
          </div>
        </div>
        <div class="flex justify-between items-center mb-4">
          <div>
            <div class="text-xs text-gray-500">Kontak</div>
            <div class="text-sm text-gray-900">+62 812-3456-7890 (WhatsApp)</div>
          </div>
          <a href="{{ url('/check/detail-kereta') }}" class="ml-3 px-3 py-2 bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white text-xs font-semibold rounded-lg shadow-md">Detail</a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="order-card p-6 border-b border-gray-200">
        <div class="flex items-start justify-between mb-4">
          <div>
            <div class="text-sm font-medium text-gray-900">#002</div>
            <div class="text-xs text-gray-500">14 Jan 2024 • 09:15</div>
          </div>
          <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-semibold bg-red-100 text-red-800">
            <div class="w-1.5 h-1.5 bg-red-500 rounded-full mr-1"></div>
            Reject
          </span>
        </div>
        <div class="flex items-center mb-3">
          <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-200 mr-3">Pesawat</span>
          <div>
            <div class="text-sm font-medium text-gray-900">Jane Smith</div>
            <div class="text-xs text-gray-500">jane.smith@email.com</div>
          </div>
        </div>
        <div class="flex justify-between items-center mb-4">
          <div>
            <div class="text-xs text-gray-500">Kontak</div>
            <div class="text-sm text-gray-900">+62 813-9876-5432 (WhatsApp)</div>
          </div>
          <a href="{{ route('check.detail') }}" class="ml-3 px-3 py-2 bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white text-xs font-semibold rounded-lg shadow-md">Detail</a>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="order-card p-6 border-b border-gray-200">
        <div class="flex items-start justify-between mb-4">
          <div>
            <div class="text-sm font-medium text-gray-900">#003</div>
            <div class="text-xs text-gray-500">13 Jan 2024 • 14:20</div>
          </div>
          <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-800">
            <div class="w-1.5 h-1.5 bg-green-500 rounded-full mr-1"></div>
            Approve
          </span>
        </div>
        <div class="flex items-center mb-3">
          <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200 mr-3">Hotel</span>
          <div>
            <div class="text-sm font-medium text-gray-900">Ahmad Budi</div>
            <div class="text-xs text-gray-500">ahmad.budi@email.com</div>
          </div>
        </div>
        <div class="flex justify-between items-center mb-4">
          <div>
            <div class="text-xs text-gray-500">Kontak</div>
            <div class="text-sm text-gray-900">+62 814-1234-5678 (WhatsApp)</div>
          </div>
          <a href="{{ url('/check/detail-hotel') }}" class="ml-3 px-3 py-2 bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white text-xs font-semibold rounded-lg shadow-md">Detail</a>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="order-card p-6">
        <div class="flex items-start justify-between mb-4">
          <div>
            <div class="text-sm font-medium text-gray-900">#004</div>
            <div class="text-xs text-gray-500">12 Jan 2024 • 16:45</div>
          </div>
          <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-semibold bg-red-100 text-red-800">
            <div class="w-1.5 h-1.5 bg-red-500 rounded-full mr-1"></div>
            Reject
          </span>
        </div>
        <div class="flex items-center mb-3">
          <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-200 mr-3">Pesawat</span>
          <div>
            <div class="text-sm font-medium text-gray-900">Sari Rahayu</div>
            <div class="text-xs text-gray-500">sari.rahayu@email.com</div>
          </div>
        </div>
        <div class="flex justify-between items-center mb-4">
          <div>
            <div class="text-xs text-gray-500">Kontak</div>
            <div class="text-sm text-gray-900">+62 815-5678-9012 (WhatsApp)</div>
          </div>
          <a href="{{ route('check.detail') }}" class="ml-3 px-3 py-2 bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white text-xs font-semibold rounded-lg shadow-md">Detail</a>
        </div>
      </div>
    </div>

        <!-- Pagination -->
        <div class="mt-6 flex items-center justify-between" id="orders-pager">
      <div class="text-sm text-gray-700" id="orders-summary">
        Showing <span class="font-medium">1</span> to <span class="font-medium">4</span> of <span class="font-medium">4</span> results
      </div>
      <div class="flex items-center space-x-2" id="orders-pagination"></div>
    </div>

    <script>
      (function () {
        const tbody = document.getElementById('orders-tbody');
        const cardsContainer = document.getElementById('orders-cards');
        const summary = document.getElementById('orders-summary');
        const pagination = document.getElementById('orders-pagination');
        const pageSize = 4; // items per page
        let current = 1;
        let items = [];
        let total = 0;
        let totalPages = 1;

        function isMobile() {
          return window.matchMedia('(max-width: 767px)').matches;
        }

        function getItems() {
          if (isMobile()) {
            if (!cardsContainer) return [];
            return Array.from(cardsContainer.querySelectorAll('.order-card'));
          }
          if (!tbody) return [];
          return Array.from(tbody.querySelectorAll('tr'));
        }

        function recalc() {
          items = getItems();
          total = items.length;
          totalPages = Math.max(1, Math.ceil(total / pageSize));
          if (current > totalPages) current = totalPages; // clamp
        }

        function renderSummary() {
          const start = total === 0 ? 0 : (current - 1) * pageSize + 1;
          const end = Math.min(current * pageSize, total);
          summary.innerHTML = `Showing <span class="font-medium">${start}</span> to <span class="font-medium">${end}</span> of <span class="font-medium">${total}</span> results`;
        }

        function renderItems() {
          items.forEach((el, i) => {
            const pageIndex = Math.floor(i / pageSize) + 1;
            el.style.display = (pageIndex === current) ? '' : 'none';
          });
        }

        function makeBtn(label, { disabled = false, active = false, onClick } = {}) {
          const btn = document.createElement('button');
          btn.type = 'button';
          btn.className = [
            'px-3 py-2 text-sm rounded-md transition',
            active ? 'bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white' : 'text-gray-700 hover:bg-gray-100 hover:text-[#187499]',
            disabled ? 'text-gray-400 cursor-not-allowed opacity-50 hover:bg-transparent hover:text-gray-400' : '',
          ].join(' ');
          btn.innerHTML = label;
          if (!disabled && onClick) btn.addEventListener('click', onClick);
          return btn;
        }

        function renderPagination() {
          if (!pagination) return;
          pagination.innerHTML = '';

          pagination.appendChild(
            makeBtn('<i class="fas fa-chevron-left"></i>', {
              disabled: current === 1,
              onClick: () => { current = Math.max(1, current - 1); update(false); }
            })
          );

          for (let p = 1; p <= totalPages; p++) {
            pagination.appendChild(
              makeBtn(String(p), {
                active: p === current,
                onClick: () => { current = p; update(false); }
              })
            );
          }

          pagination.appendChild(
            makeBtn('<i class="fas fa-chevron-right"></i>', {
              disabled: current === totalPages,
              onClick: () => { current = Math.min(totalPages, current + 1); update(false); }
            })
          );
        }

        function update(recompute = true) {
          if (recompute) recalc();
          renderItems();
          renderSummary();
          renderPagination();
        }

        // Initialize
        update(true);

        // Recalculate on resize to switch between table and card pagination
        window.addEventListener('resize', () => {
          const prevTotal = total;
          recalc();
          if (total !== prevTotal) {
            // reset to first page when layout changes
            current = 1;
          }
          update(false);
        });
      })();
    </script>

