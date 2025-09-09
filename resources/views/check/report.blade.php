@include('partials.head')
    
@section('title', 'Home - Online Travel')

@include('partials.navbarcheck')

<body class="bg-[F4F7FE] min-h-screen font-poppins">
  <!-- Main Content -->
  <main id="page-main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 opacity-0 translate-y-2 transition-all duration-500 ease-out">

  @include('partials.alert')
    <!-- Page Header -->
    <div class="mb-8 pl-2">
      <h2 class="text-3xl font-bold text-gray-900">Admin</h2>
      <p class="text-gray-600 mt-1">Report Monitoring</p>
    </div>

@include('partials.table-report')


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
    // Filter tabs functionality (active styling + table filter)
    (function() {
      const FILTER_LABELS = ['All', 'Request', 'Approve', 'Reject'];
      const isFilterButton = (el) => el && el.tagName === 'BUTTON' && FILTER_LABELS.includes(el.textContent.trim());

      function setActiveButton(clicked) {
        document.querySelectorAll('button[class*="px-4 py-2"]').forEach(btn => {
          if (isFilterButton(btn)) {
            btn.className = 'px-4 py-2 bg-gray-200 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-300 transition';
          }
        });
        clicked.className = 'px-4 py-2 bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white rounded-full text-sm font-medium';
      }

      function applyFilter(filterLabel) {
        const tbody = document.getElementById('orders-tbody');
        if (!tbody) return;
        const rows = Array.from(tbody.querySelectorAll('tr'));

        rows.forEach(tr => {
          const cells = tr.querySelectorAll('td');
          // Status column is the last column based on current table layout
          const statusCell = cells[cells.length - 1];
          const statusText = statusCell ? statusCell.textContent.trim() : '';

          if (filterLabel === 'All') {
            tr.style.display = '';
          } else {
            tr.style.display = (statusText === filterLabel) ? '' : 'none';
          }
        });
      }

      document.querySelectorAll('button[class*="px-4 py-2"]').forEach(button => {
        if (!isFilterButton(button)) return;
        button.addEventListener('click', function() {
          const label = this.textContent.trim();
          setActiveButton(this);
          applyFilter(label);
        });
      });
      // Initialize default: set "All" active and apply filter on load
      const allBtn = Array.from(document.querySelectorAll('button[class*="px-4 py-2"]')).find(b => b.textContent.trim() === 'All');
      if (allBtn) {
        setActiveButton(allBtn);
        applyFilter('All');
      }
    })();
  </script>
</body>


@include('partials.footer')