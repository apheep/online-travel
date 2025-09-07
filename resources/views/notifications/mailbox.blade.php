@include('partials.head')

@section('title', 'Mailbox - Online Travel')

@include('partials.navigation')
<body class="font-poppins">
<div class="min-h-screen bg-[F4F7FE]">
    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Table Container -->
        <!-- Header Section -->
        <div class="mb-8 flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <div class="p-3 rounded-full bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Mailbox</h1>
                </div>
            </div>
            <div class="hidden md:flex items-center space-x-6 text-sm">
                <div class="flex items-center space-x-2">
                    <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                    <span class="text-gray-600">15 Diterima</span>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                    <span class="text-gray-600">15 Ditolak</span>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-3 h-3 bg-gray-400 rounded-full"></div>
                    <span class="text-gray-600">30 Total</span>
                </div>
            </div>
        </div>
        
        <!-- Tabs -->
        <div class="mb-8">
            <div class="flex space-x-4">
                <button id="tab-all" class="tab-button bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white px-8 py-3 rounded-full text-sm font-semibold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    All
                </button>
                <button id="tab-diterima" class="tab-button bg-white text-gray-700 px-8 py-3 rounded-full text-sm font-semibold shadow-lg hover:bg-gray-50 transition-all duration-300 transform hover:scale-105">
                    Diterima
                </button>
                <button id="tab-ditolak" class="tab-button bg-white text-gray-700 px-8 py-3 rounded-full text-sm font-semibold shadow-lg hover:bg-gray-50 transition-all duration-300 transform hover:scale-105">
                    Ditolak
                </button>
            </div>
        </div>
        
        <!-- Search Bar -->
        <div class="mb-8">
            <div class="relative w-80">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                </div>
                <input type="text" class="block w-full pl-12 pr-4 py-3 border border-gray-300 rounded-xl bg-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500 text-sm shadow-lg transition-all duration-300" placeholder="Search">
            </div>
        </div>
        
        <!-- Mail Table -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200">
            <div class="overflow-x-auto">
                <div class="overflow-y-auto" style="max-height: 400px;">
                    <table class="min-w-full table-fixed" style="width: 800px;">
                        <thead class="bg-gray-50 sticky top-0 z-20">
                            <tr>
                                <th class="w-20 px-4 py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider border-r border-gray-200">NO</th>
                                <th class="w-32 px-4 py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider border-r border-gray-200">AKSI</th>
                                <th class="w-32 px-4 py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider border-r border-gray-200">STATUS</th>
                                <th class="px-4 py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider border-r border-gray-200" style="width: 300px;">JENIS PESANAN</th>
                                <th class="w-32 px-4 py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">TANGGAL</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 bg-white" id="table-body">
                            <!-- Rows will be generated by JavaScript -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-8 flex flex-col sm:flex-row items-center justify-between">
            <!-- Results Info -->
            <div class="text-sm text-gray-700 mb-4 sm:mb-0">
                Showing <span id="showing-range" class="font-medium">1-10</span> of <span id="total-results" class="font-medium">30</span> results
            </div>
            
            <!-- Pagination Controls -->
            <div class="flex items-center space-x-2">
                <!-- Previous Button -->
                <button id="prev-btn" class="flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 hover:text-gray-700 transition-all duration-200 disabled:opacity-50 disabled:cursor-not-allowed" disabled>
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Previous
                </button>
                
                <!-- Page Numbers -->
                <div id="page-numbers" class="flex items-center space-x-1">
                    <button class="page-btn px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-[#187499] to-[#36AE7E] rounded-lg shadow-lg hover:shadow-xl transition-all duration-200 transform hover:scale-105" data-page="1">
                        1
                    </button>
                    <button class="page-btn px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 hover:text-gray-900 transition-all duration-200 transform hover:scale-105" data-page="2">
                        2
                    </button>
                    <button class="page-btn px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 hover:text-gray-900 transition-all duration-200 transform hover:scale-105" data-page="3">
                        3
                    </button>
                </div>
                
                <!-- Next Button -->
                <button id="next-btn" class="flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 hover:text-gray-700 transition-all duration-200 disabled:opacity-50 disabled:cursor-not-allowed">
                    Next
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</body>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabButtons = document.querySelectorAll('.tab-button');
            const tableRows = document.querySelectorAll('.table-row');
            const tableContainer = document.querySelector('.bg-white.rounded-lg');
            
            // Pagination variables
            let currentPage = 1;
            const totalPages = 3;
            const itemsPerPage = 10;
            const totalItems = 30;
            
            // Tab functionality
            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    tabButtons.forEach(btn => {
                        btn.classList.remove('bg-gradient-to-r', 'from-[#187499]', 'to-[#36AE7E]', 'text-white');
                        btn.classList.add('bg-white', 'text-gray-700');
                    });
                    
                    // Add active class to clicked button
                    this.classList.remove('bg-white', 'text-gray-700');
                    this.classList.add('bg-gradient-to-r', 'from-[#187499]', 'to-[#36AE7E]', 'text-white');
                    
                    const filter = this.id.replace('tab-', '');
                    
                    // Filter table rows based on selected tab
                    filterTableByStatus(filter);
                });
            });
            
            // Pagination functionality
            function updatePagination() {
                const showingRange = document.getElementById('showing-range');
                const totalResults = document.getElementById('total-results');
                const prevBtn = document.getElementById('prev-btn');
                const nextBtn = document.getElementById('next-btn');
                const pageButtons = document.querySelectorAll('.page-btn');
                
                // Update showing range
                const startItem = (currentPage - 1) * itemsPerPage + 1;
                const endItem = Math.min(currentPage * itemsPerPage, totalItems);
                showingRange.textContent = `${startItem}-${endItem}`;
                totalResults.textContent = totalItems;
                
                // Update previous button
                prevBtn.disabled = currentPage === 1;
                if (currentPage === 1) {
                    prevBtn.classList.add('opacity-50', 'cursor-not-allowed');
                    prevBtn.classList.remove('hover:bg-gray-50', 'hover:text-gray-700');
                } else {
                    prevBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                    prevBtn.classList.add('hover:bg-gray-50', 'hover:text-gray-700');
                }
                
                // Update next button
                nextBtn.disabled = currentPage === totalPages;
                if (currentPage === totalPages) {
                    nextBtn.classList.add('opacity-50', 'cursor-not-allowed');
                    nextBtn.classList.remove('hover:bg-gray-50', 'hover:text-gray-900');
                } else {
                    nextBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                    nextBtn.classList.add('hover:bg-gray-50', 'hover:text-gray-900');
                }
                
                // Update page buttons
                pageButtons.forEach(btn => {
                    const page = parseInt(btn.getAttribute('data-page'));
                    if (page === currentPage) {
                        btn.classList.remove('text-gray-700', 'bg-white', 'border', 'border-gray-300');
                        btn.classList.add('text-white', 'bg-gradient-to-r', 'from-[#187499]', 'to-[#36AE7E]', 'shadow-lg');
                    } else {
                        btn.classList.remove('text-white', 'bg-gradient-to-r', 'from-[#187499]', 'to-[#36AE7E]', 'shadow-lg');
                        btn.classList.add('text-gray-700', 'bg-white', 'border', 'border-gray-300');
                    }
                });
                
                // Simulate page content change
                const tableBody = document.getElementById('table-body');
                tableBody.innerHTML = generateTableRows(currentPage, currentFilter);
            }
            
            // Global variables for filtering
            let currentFilter = 'all';
            
            // Filter function
            function filterTableByStatus(filter) {
                currentFilter = filter;
                const tableBody = document.getElementById('table-body');
                tableBody.innerHTML = generateTableRows(currentPage, filter);
            }

            function generateTableRows(page, filter = 'all') {
                const rows = [];
                const startIndex = (page - 1) * itemsPerPage;
                
                // Define order types with icons and colors
                const orderTypes = [
                    { type: 'Pesawat', icon: '✈️', color: 'bg-blue-100 text-blue-800' },
                    { type: 'Hotel', icon: '🏨', color: 'bg-green-100 text-green-800' },
                    { type: 'Kereta', icon: '🚆', color: 'bg-purple-100 text-purple-800' }
                ];
                
                let addedRows = 0;
                let rowNumber = startIndex;
                
                while (addedRows < itemsPerPage && rowNumber < totalItems) {
                    rowNumber++;
                    const status = rowNumber % 2 === 0 ? 'ditolak' : 'diterima';
                    
                    // Skip rows that don't match the filter
                    if (filter !== 'all' && status !== filter) {
                        continue;
                    }
                    
                    const statusText = status === 'diterima' ? 'Diterima' : 'Ditolak';
                    const statusColor = status === 'diterima' ? 'bg-green-500' : 'bg-red-500';
                    
                    // Generate 1-3 random order types per row
                    const numTypes = Math.floor(Math.random() * 3) + 1;
                    const selectedTypes = [];
                    const usedIndices = [];
                    
                    for (let j = 0; j < numTypes; j++) {
                        let randomIndex;
                        do {
                            randomIndex = Math.floor(Math.random() * orderTypes.length);
                        } while (usedIndices.includes(randomIndex));
                        
                        usedIndices.push(randomIndex);
                        selectedTypes.push(orderTypes[randomIndex]);
                    }
                    
                    const orderTypesHTML = selectedTypes.map(type => `
                        <div class="flex items-center space-x-2 mb-2 last:mb-0">
                            <div class="w-8 h-8 rounded-full ${type.color} flex items-center justify-center text-sm">
                                ${type.icon}
                            </div>
                            <span class="text-sm font-medium text-gray-700">${type.type}</span>
                        </div>
                    `).join('');
                    
                    const detailButton = status === 'diterima' 
                        ? `<a href="/notifications/diterima/${rowNumber}" class="bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white px-2 py-1 rounded text-xs font-medium hover:shadow-lg transition-shadow duration-200 w-full inline-block text-center">
                               Lihat Detail
                           </a>`
                        : `<a href="/notifications/ditolak/${rowNumber}" class="bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white px-2 py-1 rounded text-xs font-medium hover:shadow-lg transition-shadow duration-200 w-full inline-block text-center">
                               Lihat Detail
                           </a>`;
                    
                    rows.push(`
                        <tr class="table-row hover:bg-gray-50 transition-colors duration-200 relative" data-status="${status}" style="min-height: 80px;">
                            <td class="w-20 px-4 py-4 text-sm text-gray-900 text-center align-middle border-r border-gray-100">${rowNumber}</td>
                            <td class="w-32 px-4 py-4 align-middle border-r border-gray-100">
                                ${detailButton}
                            </td>
                            <td class="w-32 px-4 py-4 align-middle border-r border-gray-100 relative z-10">
                                <div class="relative">
                                    <span class="inline-flex px-2 py-1 text-xs rounded-md ${statusColor} text-white w-full justify-center">
                                        ${statusText}
                                    </span>
                                </div>
                            </td>
                            <td class="px-4 py-4 align-middle border-r border-gray-100 relative z-10" style="width: 300px;">
                                <div class="space-y-1 relative">
                                    ${orderTypesHTML}
                                </div>
                            </td>
                            <td class="w-32 px-4 py-4 text-sm text-gray-900 text-center align-middle border-r border-gray-100">
                                <div class="text-xs text-gray-500">Jan ${10 + rowNumber}, 2024</div>
                            </td>
                        </tr>
                    `);
                    
                    addedRows++;
                }
                
                return rows.join('');
            }
            
            // Previous button click
            document.getElementById('prev-btn').addEventListener('click', function() {
                if (currentPage > 1) {
                    currentPage--;
                    updatePagination();
                }
            });
            
            // Next button click
            document.getElementById('next-btn').addEventListener('click', function() {
                if (currentPage < totalPages) {
                    currentPage++;
                    updatePagination();
                }
            });
            
            // Page number clicks
            document.querySelectorAll('.page-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const page = parseInt(this.getAttribute('data-page'));
                    currentPage = page;
                    updatePagination();
                });
            });
            
            // Initialize pagination
            updatePagination();
        });
        </script>
    </div>
</div>

@include('partials.footer')

