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
              <th class="px-6 py-5 text-center text-xs font-bold text-gray-700 uppercase tracking-wider">Aksi</th>
              <th class="px-6 py-5 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                <div class="flex items-center space-x-1">
                  <span>Jenis Tiket</span>
                  <i class="fas fa-sort text-gray-400 text-xs"></i>
                </div>
              </th>
              <th class="px-6 py-5 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                <div class="flex items-center space-x-1">
                  <span>Tanggal Booking</span>
                  <i class="fas fa-sort text-gray-400 text-xs"></i>
                </div>
              </th>
              <th class="px-6 py-5 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                <div class="flex items-center space-x-1">
                  <span>Tanggal Input</span>
                  <i class="fas fa-sort text-gray-400 text-xs"></i>
                </div>
              </th>
              <th class="px-6 py-5 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                <div class="flex items-center space-x-1">
                  <span>Nama</span>
                  <i class="fas fa-sort text-gray-400 text-xs"></i>
                </div>
              </th>
              <th class="px-6 py-5 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                <div class="flex items-center space-x-1">
                  <span>Nomor Telepon</span>
                  <i class="fas fa-sort text-gray-400 text-xs"></i>
                </div>
              </th>
              <th class="px-6 py-5 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                <div class="flex items-center space-x-1">
                  <span>Email</span>
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
                  <button class="btn-open-detail inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white text-xs font-semibold rounded-lg hover:from-[#156b8a] hover:to-[#2d9a6e] transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                    <i class="fas fa-eye mr-2"></i>
                    Detail
                  </button>
                </div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap text-center">
                <input type="file" class="hidden upload-input" accept=".pdf,.jpg,.jpeg,.png" />
                <button type="button" class="upload-trigger inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-600 to-emerald-600 text-white text-xs font-semibold rounded-lg hover:from-blue-700 hover:to-emerald-700 transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                  <i class="fas fa-upload mr-2"></i>
                  Upload
                </button>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-teal-50 text-teal-700 border border-teal-200">Kereta</span>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm font-semibold text-gray-900">15 Jan 2024</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-xs text-gray-700">10:30 AM</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm font-semibold text-gray-900">John Doe</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm text-gray-900">+62 812-3456-7890</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-xs text-gray-700">john.doe@email.com</div>
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
                  <button class="btn-open-detail inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white text-xs font-semibold rounded-lg hover:from-[#156b8a] hover:to-[#2d9a6e] transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                    <i class="fas fa-eye mr-2"></i>
                     Detail
                  </button>
                </div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap text-center">
                <input type="file" class="hidden upload-input" accept=".pdf,.jpg,.jpeg,.png" />
                <button type="button" class="upload-trigger inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-600 to-emerald-600 text-white text-xs font-semibold rounded-lg hover:from-blue-700 hover:to-emerald-700 transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                  <i class="fas fa-upload mr-2"></i>
                  Upload
                </button>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-200">Pesawat</span>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm font-semibold text-gray-900">14 Jan 2024</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-xs text-gray-700">09:15 AM</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm font-semibold text-gray-900">Jane Smith</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm text-gray-900">+62 813-9876-5432</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-xs text-gray-700">jane.smith@email.com</div>
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
                  <button class="btn-open-detail inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white text-xs font-semibold rounded-lg hover:from-[#156b8a] hover:to-[#2d9a6e] transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                    <i class="fas fa-eye mr-2"></i>
                     Detail
                  </button>
                </div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap text-center">
                <input type="file" class="hidden upload-input" accept=".pdf,.jpg,.jpeg,.png" />
                <button type="button" class="upload-trigger inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-600 to-emerald-600 text-white text-xs font-semibold rounded-lg hover:from-blue-700 hover:to-emerald-700 transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                  <i class="fas fa-upload mr-2"></i>
                  Upload
                </button>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200">Hotel</span>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm font-semibold text-gray-900">13 Jan 2024</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-xs text-gray-700">14:20 PM</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm font-semibold text-gray-900">Ahmad Budi</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm text-gray-900">+62 814-1234-5678</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-xs text-gray-700">ahmad.budi@email.com</div>
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
                  <button type="button" class="btn-open-detail inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white text-xs font-semibold rounded-lg hover:from-[#156b8a] hover:to-[#2d9a6e] transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                    <i class="fas fa-eye mr-2"></i>
                     Detail
                  </button>
                </div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap text-center">
                <input type="file" class="hidden upload-input" accept=".pdf,.jpg,.jpeg,.png" />
                <button type="button" class="upload-trigger inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-600 to-emerald-600 text-white text-xs font-semibold rounded-lg hover:from-blue-700 hover:to-emerald-700 transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                  <i class="fas fa-upload mr-2"></i>
                  Upload
                </button>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-200">Pesawat</span>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm font-semibold text-gray-900">12 Jan 2024</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-xs text-gray-700">16:45 PM</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm font-semibold text-gray-900">Sari Rahayu</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm text-gray-900">+62 815-5678-9012</div>
              </td>
              <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-xs text-gray-700">sari.rahayu@email.com</div>
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
          </div>
          <div class="flex items-center space-x-2">
            <button class="btn-open-detail px-3 py-2 bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white text-xs font-semibold rounded-lg shadow-md">Detail</button>
            <input type="file" class="hidden upload-input" accept=".pdf,.jpg,.jpeg,.png" />
            <button type="button" class="upload-trigger px-3 py-2 bg-gradient-to-r from-blue-600 to-emerald-600 text-white text-xs font-semibold rounded-lg shadow-md">
              <i class="fas fa-upload mr-2"></i>Upload
            </button>
          </div>
        </div>
        <div class="flex items-center mb-3">
          <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-teal-50 text-teal-700 border border-teal-200 mr-3">Kereta</span>
          <div>
            <div class="text-sm font-medium text-gray-900">John Doe</div>
            <div class="text-xs text-gray-500">john.doe@email.com</div>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-3 text-sm mb-3">
          <div>
            <div class="text-xs text-gray-500">Tanggal Booking</div>
            <div class="text-gray-900">15 Jan 2024</div>
          </div>
          <div>
            <div class="text-xs text-gray-500">Tanggal Input</div>
            <div class="text-gray-900">10:30 AM</div>
          </div>
        </div>
        <div class="mb-1">
          <div class="text-xs text-gray-500">Nomor Telepon</div>
          <div class="text-sm text-gray-900">+62 812-3456-7890</div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="order-card p-6 border-b border-gray-200">
        <div class="flex items-start justify-between mb-4">
          <div>
            <div class="text-sm font-medium text-gray-900">#002</div>
          </div>
          <div class="flex items-center space-x-2">
            <button class="btn-open-detail px-3 py-2 bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white text-xs font-semibold rounded-lg shadow-md">Detail</button>
            <input type="file" class="hidden upload-input" accept=".pdf,.jpg,.jpeg,.png" />
            <button type="button" class="upload-trigger px-3 py-2 bg-gradient-to-r from-blue-600 to-emerald-600 text-white text-xs font-semibold rounded-lg shadow-md">
              <i class="fas fa-upload mr-2"></i>Upload
            </button>
          </div>
        </div>
        <div class="flex items-center mb-3">
          <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-200 mr-3">Pesawat</span>
          <div>
            <div class="text-sm font-medium text-gray-900">Jane Smith</div>
            <div class="text-xs text-gray-500">jane.smith@email.com</div>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-3 text-sm mb-3">
          <div>
            <div class="text-xs text-gray-500">Tanggal Booking</div>
            <div class="text-gray-900">14 Jan 2024</div>
          </div>
          <div>
            <div class="text-xs text-gray-500">Tanggal Input</div>
            <div class="text-gray-900">09:15 AM</div>
          </div>
        </div>
        <div class="mb-1">
          <div class="text-xs text-gray-500">Nomor Telepon</div>
          <div class="text-sm text-gray-900">+62 813-9876-5432</div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="order-card p-6 border-b border-gray-200">
        <div class="flex items-start justify-between mb-4">
          <div>
            <div class="text-sm font-medium text-gray-900">#003</div>
          </div>
          <div class="flex items-center space-x-2">
            <button class="btn-open-detail px-3 py-2 bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white text-xs font-semibold rounded-lg shadow-md">Detail</button>
            <input type="file" class="hidden upload-input" accept=".pdf,.jpg,.jpeg,.png" />
            <button type="button" class="upload-trigger px-3 py-2 bg-gradient-to-r from-blue-600 to-emerald-600 text-white text-xs font-semibold rounded-lg shadow-md">
              <i class="fas fa-upload mr-2"></i>Upload
            </button>
          </div>
        </div>
        <div class="flex items-center mb-3">
          <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200 mr-3">Hotel</span>
          <div>
            <div class="text-sm font-medium text-gray-900">Ahmad Budi</div>
            <div class="text-xs text-gray-500">ahmad.budi@email.com</div>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-3 text-sm mb-3">
          <div>
            <div class="text-xs text-gray-500">Tanggal Booking</div>
            <div class="text-gray-900">13 Jan 2024</div>
          </div>
          <div>
            <div class="text-xs text-gray-500">Tanggal Input</div>
            <div class="text-gray-900">14:20 PM</div>
          </div>
        </div>
        <div class="mb-1">
          <div class="text-xs text-gray-500">Nomor Telepon</div>
          <div class="text-sm text-gray-900">+62 814-1234-5678</div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="order-card p-6">
        <div class="flex items-start justify-between mb-4">
          <div>
            <div class="text-sm font-medium text-gray-900">#004</div>
          </div>
          <div class="flex items-center space-x-2">
            <button type="button" class="btn-open-detail px-3 py-2 bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white text-xs font-semibold rounded-lg shadow-md">Detail</button>
            <input type="file" class="hidden upload-input" accept=".pdf,.jpg,.jpeg,.png" />
            <button type="button" class="upload-trigger px-3 py-2 bg-gradient-to-r from-blue-600 to-emerald-600 text-white text-xs font-semibold rounded-lg shadow-md">
              <i class="fas fa-upload mr-2"></i>Upload
            </button>
          </div>
        </div>
        <div class="flex items-center mb-3">
          <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-200 mr-3">Pesawat</span>
          <div>
            <div class="text-sm font-medium text-gray-900">Sari Rahayu</div>
            <div class="text-xs text-gray-500">sari.rahayu@email.com</div>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-3 text-sm mb-3">
          <div>
            <div class="text-xs text-gray-500">Tanggal Booking</div>
            <div class="text-gray-900">12 Jan 2024</div>
          </div>
          <div>
            <div class="text-xs text-gray-500">Tanggal Input</div>
            <div class="text-gray-900">16:45 PM</div>
          </div>
        </div>
        <div class="mb-1">
          <div class="text-xs text-gray-500">Nomor Telepon</div>
          <div class="text-sm text-gray-900">+62 815-5678-9012</div>
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

    <script>
      (function () {
        // Delegated click handler for all `.btn-open-detail` buttons (desktop & mobile)
        function onOpenDetailClick(event) {
          event.preventDefault();
          try {
            if (typeof openDetail === 'function') {
              openDetail();
            } else if (window.openDetail) {
              window.openDetail();
            }
          } catch (_) { /* no-op */ }
        }

        document.addEventListener('click', function (e) {
          const btn = e.target && e.target.closest && e.target.closest('.btn-open-detail');
          if (btn) onOpenDetailClick(e);
        });
      })();
    </script>

    <script>
      (function () {
        const tbody = document.getElementById('orders-tbody');
        const cardsContainer = document.getElementById('orders-cards');

        function attachUploadHandlers(scope) {
          if (!scope) return;
          const rows = Array.from(scope.querySelectorAll('tr, .order-card'));
          rows.forEach((row) => {
            const btn = row.querySelector('button.upload-trigger');
            const input = row.querySelector('input.upload-input');
            if (!btn || !input) return;

            btn.addEventListener('click', () => input.click());

            input.addEventListener('change', () => {
              if (input.files && input.files.length > 0) {
                // Visual uploaded state only (no backend logic)
                btn.innerHTML = '<i class="fas fa-check mr-2"></i> Uploaded';
                btn.classList.remove('from-blue-600', 'to-emerald-600');
                btn.classList.add('from-emerald-600', 'to-emerald-600');
                btn.disabled = true;
                btn.classList.add('opacity-90', 'cursor-default');
              }
            });
          });
        }

        attachUploadHandlers(tbody);
        attachUploadHandlers(cardsContainer);
      })();
    </script>
    
