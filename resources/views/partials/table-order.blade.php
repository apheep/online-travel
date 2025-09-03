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
              <th class="px-6 py-5 text-center text-xs font-bold text-gray-700 uppercase tracking-wider">Aksi</th>
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
                <!-- <div class="flex items-center">
                  <div class="h-12 w-12 bg-gradient-to-br from-red-100 to-red-200 rounded-full flex items-center justify-center mr-4 shadow-sm">
                    <span class="text-red-700 font-bold text-sm">JS</span>
                  </div>
                  <div> -->
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
                </a>                 
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
                </a>                 
                        <button class="inline-flex items-center px-3 py-2 bg-gray-100 text-gray-600 text-xs font-medium rounded-lg hover:bg-gray-200 transition-all duration-200">
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
        <div class="mt-6 flex items-center justify-between" id="orders-pager">
      <div class="text-sm text-gray-700" id="orders-summary">
        Showing <span class="font-medium">1</span> to <span class="font-medium">4</span> of <span class="font-medium">4</span> results
      </div>
      <div class="flex items-center space-x-2" id="orders-pagination"></div>
    </div>

    <script>
      (function () {
        const tbody = document.getElementById('orders-tbody');
        if (!tbody) return;
        const rows = Array.from(tbody.querySelectorAll('tr'));
        const pager = document.getElementById('orders-pager');
        const summary = document.getElementById('orders-summary');
        const pagination = document.getElementById('orders-pagination');
        const pageSize = 4; // items per page
        const total = rows.length;
        const totalPages = Math.max(1, Math.ceil(total / pageSize));
        let current = 1;

        function renderSummary() {
          const start = total === 0 ? 0 : (current - 1) * pageSize + 1;
          const end = Math.min(current * pageSize, total);
          summary.innerHTML = `Showing <span class="font-medium">${start}</span> to <span class="font-medium">${end}</span> of <span class="font-medium">${total}</span> results`;
        }

        function renderRows() {
          rows.forEach((tr, i) => {
            const pageIndex = Math.floor(i / pageSize) + 1;
            tr.style.display = (pageIndex === current) ? '' : 'none';
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

          // Prev
          pagination.appendChild(
            makeBtn('<i class="fas fa-chevron-left"></i>', {
              disabled: current === 1,
              onClick: () => { current = Math.max(1, current - 1); update(); }
            })
          );

          // Numbered pages (simple 1..N)
          for (let p = 1; p <= totalPages; p++) {
            pagination.appendChild(
              makeBtn(String(p), {
                active: p === current,
                onClick: () => { current = p; update(); }
              })
            );
          }

          // Next
          pagination.appendChild(
            makeBtn('<i class="fas fa-chevron-right"></i>', {
              disabled: current === totalPages,
              onClick: () => { current = Math.min(totalPages, current + 1); update(); }
            })
          );
        }

        function update() {
          renderRows();
          renderSummary();
          renderPagination();
        }

        update();
      })();
    </script>

