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
                <div class="p-3 rounded-full bg-gradient-to-r from-[#FE0004] to-[#F6B101] text-white">
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
                    <div class="w-3 h-3 bg-[#FE0004] rounded-full"></div>
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
            <div class="flex space-x-2 sm:space-x-4">
                <button id="tab-all" class="tab-button bg-gradient-to-r from-[#FE0004] to-[#F6B101] text-white px-4 py-2 sm:px-8 sm:py-3 rounded-full text-xs sm:text-sm font-semibold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    All
                </button>
                <button id="tab-diterima" class="tab-button bg-white text-gray-700 px-4 py-2 sm:px-8 sm:py-3 rounded-full text-xs sm:text-sm font-semibold shadow-lg hover:bg-gray-50 transition-all duration-300 transform hover:scale-105">
                    Diterima
                </button>
                <button id="tab-ditolak" class="tab-button bg-white text-gray-700 px-4 py-2 sm:px-8 sm:py-3 rounded-full text-xs sm:text-sm font-semibold shadow-lg hover:bg-gray-50 transition-all duration-300 transform hover:scale-105">
                    Ditolak
                </button>
            </div>
        </div>
        
        <!-- Search & Date Filter -->
        <div class="mb-8 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div class="relative w-full md:w-80">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                </div>
                <input id="search-input" type="text" class="block w-full pl-12 pr-4 py-3 border border-gray-300 rounded-xl bg-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 text-sm shadow-lg transition-all duration-300" placeholder="Search">
            </div>
            <!-- Trigger calendar modal -->
            <button id="open-calendar" class="px-4 py-3 bg-gradient-to-r from-[#FE0004] to-[#F6B101] text-white rounded-xl text-sm font-semibold shadow hover:shadow-md transition">Pilih Tanggal</button>
            @include('partials.calender')
        </div>
        
        <!-- Mail Table - Desktop View -->
        <div class="hidden md:block bg-white rounded-lg shadow-sm border border-gray-200">
            <div class="overflow-x-hidden">
                <div class="overflow-y-auto" style="max-height: 400px;">
                    <table class="w-full table-auto" style="width: 100%;">
                        <thead class="bg-gray-50 sticky top-0 z-20">
                            <tr>
                                <th class="w-12 sm:w-20 px-2 sm:px-4 py-3 sm:py-4 text-center text-[10px] sm:text-xs font-medium text-gray-500 uppercase tracking-wider border-r border-gray-200">NO</th>
                                <th class="w-20 sm:w-28 px-2 sm:px-4 py-3 sm:py-4 text-center text-[10px] sm:text-xs font-medium text-gray-500 uppercase tracking-wider border-r border-gray-200">AKSI</th>
                                <th class="w-20 sm:w-28 px-2 sm:px-4 py-3 sm:py-4 text-center text-[10px] sm:text-xs font-medium text-gray-500 uppercase tracking-wider border-r border-gray-200">STATUS</th>
                                <th class="px-2 sm:px-4 py-3 sm:py-4 text-left text-[10px] sm:text-xs font-medium text-gray-500 uppercase tracking-wider border-r border-gray-200 whitespace-normal break-words">JENIS PESANAN</th>
                                <th class="px-2 sm:px-4 py-3 sm:py-4 text-left text-[10px] sm:text-xs font-medium text-gray-500 uppercase tracking-wider border-r border-gray-200 whitespace-normal break-words">KETERANGAN DINAS</th>
                                <th class="w-24 sm:w-28 px-2 sm:px-4 py-3 sm:py-4 text-center text-[10px] sm:text-xs font-medium text-gray-500 uppercase tracking-wider">TANGGAL</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 bg-white" id="table-body-desktop">
                            <!-- Rows will be generated by JavaScript -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <!-- Mail Cards - Mobile View -->
        <div class="block md:hidden">
            <div id="card-container" class="grid grid-cols-1 gap-4">
                <!-- Cards will be generated by JavaScript -->
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
                    <button class="page-btn px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-[#FE0004] to-[#F6B101] rounded-lg shadow-lg hover:shadow-xl transition-all duration-200 transform hover:scale-105" data-page="1">
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
                        btn.classList.remove('bg-gradient-to-r', 'from-[#FE0004]', 'to-[#F6B101]', 'text-white');
                        btn.classList.add('bg-white', 'text-gray-700');
                    });
                    
                    // Add active class to clicked button
                    this.classList.remove('bg-white', 'text-gray-700');
                    this.classList.add('bg-gradient-to-r', 'from-[#FE0004]', 'to-[#F6B101]', 'text-white');
                    
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
                        btn.classList.add('text-white', 'bg-gradient-to-r', 'from-[#FE0004]', 'to-[#F6B101]', 'shadow-lg');
                    } else {
                        btn.classList.remove('text-white', 'bg-gradient-to-r', 'from-[#FE0004]', 'to-[#F6B101]', 'shadow-lg');
                        btn.classList.add('text-gray-700', 'bg-white', 'border', 'border-gray-300');
                    }
                });
                
                // Update content for both desktop and mobile views
                const tableBodyDesktop = document.getElementById('table-body-desktop');
                const cardContainer = document.getElementById('card-container');
                
                if (tableBodyDesktop) {
                    tableBodyDesktop.innerHTML = generateTableRows(currentPage, currentFilter);
                }
                
                if (cardContainer) {
                    cardContainer.innerHTML = generateCardRows(currentPage, currentFilter);
                }
                
                applyFilters();
            }
            
            // Global variables for filtering
            let currentFilter = 'all';
            
            // Filter function
            function filterTableByStatus(filter) {
                currentFilter = filter;
                const tableBodyDesktop = document.getElementById('table-body-desktop');
                const cardContainer = document.getElementById('card-container');
                
                if (tableBodyDesktop) {
                    tableBodyDesktop.innerHTML = generateTableRows(currentPage, filter);
                }
                
                if (cardContainer) {
                    cardContainer.innerHTML = generateCardRows(currentPage, filter);
                }
                
                applyFilters();
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
                
                // Sample descriptions for keterangan dinas
                const descriptions = [
                    'Perjalanan dinas ke Jakarta - Rapat klien',
                    'Monitoring proyek cabang Surabaya',
                    'Workshop internal departemen IT',
                    'Kunjungan kerja ke Yogyakarta',
                    'Rapat koordinasi dengan vendor',
                    'Audit rutin cabang Bandung',
                    'Pelatihan karyawan baru',
                    'Presentasi proposal di kantor pusat'
                ];
                
                // Case: dua pemesanan pada tanggal yang sama namun keterangan dinas berbeda
                // Kita pakai indeks global 7 dan 8 sebagai pasangan contoh
                const duplicatePairStart = 7; // menghasilkan baris 7 dan 8 (global)
                const duplicateDate = '12 Jan 2024';
                
                let addedRows = 0;
                let rowNumber = startIndex;
                
                while (addedRows < itemsPerPage && rowNumber < totalItems) {
                    rowNumber++;
                    const status = rowNumber % 2 === 0 ? 'ditolak' : 'diterima';
                    // Tentukan keterangan khusus untuk pasangan tanggal yang sama
                    let keterangan;
                    if (rowNumber === duplicatePairStart) {
                        keterangan = descriptions[0];
                    } else if (rowNumber === duplicatePairStart + 1) {
                        keterangan = descriptions[1];
                    } else {
                        keterangan = descriptions[rowNumber % descriptions.length];
                    }
                    
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
                        ? `<a href="/notifications/diterima/${rowNumber}" class="bg-gradient-to-r from-[#FE0004] to-[#F6B101] text-white px-3 py-2 rounded-xl text-xs font-medium hover:shadow-lg transition-all duration-300 transform hover:scale-105 w-full inline-block text-center flex items-center justify-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                Detail
                           </a>`
                        : `<a href="/notifications/ditolak/${rowNumber}" class="bg-gradient-to-r from-[#FE0004] to-[#F6B101] text-white px-3 py-2 rounded-xl text-xs font-medium hover:shadow-lg transition-all duration-300 transform hover:scale-105 w-full inline-block text-center flex items-center justify-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                Detail
                           </a>`;
                    
                    // Tanggal: samakan untuk baris pasangan, selain itu fallback default
                    const dateText = (rowNumber === duplicatePairStart || rowNumber === duplicatePairStart + 1)
                        ? duplicateDate
                        : `Jan ${10 + rowNumber}, 2024`;

                    rows.push(`
                        <tr class="table-row hover:bg-gray-50 transition-colors duration-200 relative" data-status="${status}" style="min-height: 80px;">
                            <td class="w-20 px-4 py-4 text-sm text-gray-900 text-center align-middle border-r border-gray-100">${rowNumber}</td>
                            <td class="w-32 px-4 py-4 align-middle border-r border-gray-100">
                                ${detailButton}
                            </td>
                            <td class="w-32 px-4 py-4 align-middle border-r border-gray-100 relative z-10">
                                <div class="relative">
                                    <span class="inline-flex items-center text-sm font-medium ${status === 'diterima' ? 'text-green-600' : 'text-red-600'} w-full">
                                        <svg class="w-3 h-3 mr-1.5" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="12" cy="12" r="4" fill="currentColor"/>
                                        </svg>
                                        ${statusText}
                                    </span>
                                </div>
                            </td>
                            <td class="px-4 py-4 align-middle border-r border-gray-100 relative z-10 whitespace-normal break-words" style="width: 300px;">
                                <div class="space-y-1 relative">
                                    ${orderTypesHTML}
                                </div>
                            </td>
                            <td class="px-4 py-4 align-middle border-r border-gray-100 whitespace-normal break-words" style="width: 280px;">
                                <div class="text-sm text-gray-700 whitespace-normal break-words">${keterangan}</div>
                            </td>
                            <td class="w-32 px-4 py-4 text-sm text-gray-900 text-center align-middle border-r border-gray-100" data-date="${dateText}">
                                <div class="text-xs text-gray-500">${dateText}</div>
                            </td>
                        </tr>
                    `);
                
                    addedRows++;
                }
                
                return rows.join('');
            }
            
            function generateCardRows(page, filter = 'all') {
                const cards = [];
                const startIndex = (page - 1) * itemsPerPage;
                
                // Define order types with icons and colors
                const orderTypes = [
                    { type: 'Pesawat', icon: '✈️', color: 'bg-blue-100 text-blue-800' },
                    { type: 'Hotel', icon: '🏨', color: 'bg-green-100 text-green-800' },
                    { type: 'Kereta', icon: '🚆', color: 'bg-purple-100 text-purple-800' }
                ];
                
                // Sample descriptions for keterangan dinas
                const descriptions = [
                    'Perjalanan dinas ke Jakarta - Rapat klien',
                    'Monitoring proyek cabang Surabaya',
                    'Workshop internal departemen IT',
                    'Kunjungan kerja ke Yogyakarta',
                    'Rapat koordinasi dengan vendor',
                    'Audit rutin cabang Bandung',
                    'Pelatihan karyawan baru',
                    'Presentasi proposal di kantor pusat'
                ];
                
                // Case: dua pemesanan pada tanggal yang sama namun keterangan dinas berbeda
                const duplicatePairStart = 7;
                const duplicateDate = '12 Jan 2024';
                
                let addedCards = 0;
                let rowNumber = startIndex;
                
                while (addedCards < itemsPerPage && rowNumber < totalItems) {
                    rowNumber++;
                    const status = rowNumber % 2 === 0 ? 'ditolak' : 'diterima';
                    
                    // Tentukan keterangan khusus untuk pasangan tanggal yang sama
                    let keterangan;
                    if (rowNumber === duplicatePairStart) {
                        keterangan = descriptions[0];
                    } else if (rowNumber === duplicatePairStart + 1) {
                        keterangan = descriptions[1];
                    } else {
                        keterangan = descriptions[rowNumber % descriptions.length];
                    }
                    
                    // Skip cards that don't match the filter
                    if (filter !== 'all' && status !== filter) {
                        continue;
                    }
                    
                    const statusText = status === 'diterima' ? 'Diterima' : 'Ditolak';
                    const statusColor = status === 'diterima' ? 'bg-green-500' : 'bg-red-500';
                    const statusBorderColor = status === 'diterima' ? 'border-green-500' : 'border-red-500';
                    
                    // Generate 1-3 random order types per card
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
                        ? `<a href="/notifications/diterima/${rowNumber}" class="bg-gradient-to-r from-[#FE0004] to-[#F6B101] text-white px-4 py-2 rounded-xl text-sm font-medium hover:shadow-lg transition-all duration-300 transform hover:scale-105 w-full inline-block text-center flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                Lihat Detail
                           </a>`
                        : `<a href="/notifications/ditolak/${rowNumber}" class="bg-gradient-to-r from-[#FE0004] to-[#F6B101] text-white px-4 py-2 rounded-xl text-sm font-medium hover:shadow-lg transition-all duration-300 transform hover:scale-105 w-full inline-block text-center flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                Lihat Detail
                           </a>`;
                    
                    // Tanggal: samakan untuk baris pasangan, selain itu fallback default
                    const dateText = (rowNumber === duplicatePairStart || rowNumber === duplicatePairStart + 1)
                        ? duplicateDate
                        : `Jan ${10 + rowNumber}, 2024`;

                    cards.push(`
                        <div class="bg-white rounded-xl shadow-md overflow-hidden border-l-4 ${statusBorderColor} hover:shadow-lg transition-shadow duration-300" data-status="${status}" data-date="${dateText}">
                            <div class="p-5">
                                <div class="flex justify-between items-start mb-4">
                                    <div class="flex items-center space-x-2">
                                        <span class="inline-flex items-center text-sm font-medium ${status === 'diterima' ? 'text-green-600' : 'text-red-600'}">
                                            <svg class="w-3 h-3 mr-1.5" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="12" cy="12" r="4" fill="currentColor"/>
                                            </svg>
                                            ${statusText}
                                        </span>
                                        <span class="text-xs text-gray-500">#${rowNumber}</span>
                                    </div>
                                    <div class="text-sm text-gray-500 font-medium">
                                        ${dateText}
                                    </div>
                                </div>
                                
                                <div class="mb-4">
                                    <h3 class="text-sm font-semibold text-gray-700 mb-2">Jenis Pesanan:</h3>
                                    <div class="space-y-2">
                                        ${orderTypesHTML}
                                    </div>
                                </div>
                                
                                <div class="mb-5">
                                    <h3 class="text-sm font-semibold text-gray-700 mb-2">Keterangan Dinas:</h3>
                                    <p class="text-sm text-gray-600">${keterangan}</p>
                                </div>
                                
                                <div class="mt-4">
                                    ${detailButton}
                                </div>
                            </div>
                        </div>
                    `);
                    
                    addedCards++;
                }
                
                return cards.join('');
            }
            
            // Apply search and date range filters on current table rows and cards
            function applyFilters() {
                const q = (document.getElementById('search-input')?.value || '').toLowerCase().trim();
                const from = document.getElementById('date-from')?.value || ''; // yyyy-mm-dd
                const to = document.getElementById('date-to')?.value || ''; // yyyy-mm-dd

                // Filter desktop table rows
                document.querySelectorAll('#table-body-desktop tr').forEach(tr => {
                    let show = true;

                    // Search text in keterangan + jenis pesanan columns
                    if (q) {
                        const text = tr.textContent.toLowerCase();
                        if (!text.includes(q)) show = false;
                    }

                    // Date filter: parse the displayed date text into yyyy-mm-dd
                    if (show && (from || to)) {
                        const td = tr.querySelector('td:last-child');
                        const dateText = td ? td.getAttribute('data-date') || td.textContent.trim() : '';
                        const parsed = parseDateToISO(dateText); // yyyy-mm-dd
                        if (from && parsed < from) show = false;
                        if (to && parsed > to) show = false;
                    }

                    tr.style.display = show ? '' : 'none';
                });
                
                // Filter mobile cards
                document.querySelectorAll('#card-container > div').forEach(card => {
                    let show = true;

                    // Search text in card content
                    if (q) {
                        const text = card.textContent.toLowerCase();
                        if (!text.includes(q)) show = false;
                    }

                    // Date filter for cards
                    if (show && (from || to)) {
                        const dateText = card.getAttribute('data-date') || '';
                        const parsed = parseDateToISO(dateText); // yyyy-mm-dd
                        if (from && parsed < from) show = false;
                        if (to && parsed > to) show = false;
                    }

                    card.style.display = show ? '' : 'none';
                });
            }

            // Helper: convert various dateText like "12 Jan 2024" or "Jan 17, 2024" to yyyy-mm-dd
            function parseDateToISO(s) {
                // Normalize commas
                s = s.replace(',', '');
                const months = {Jan:'01',Feb:'02',Mar:'03',Apr:'04',May:'05',Jun:'06',Jul:'07',Aug:'08',Sep:'09',Oct:'10',Nov:'11',Dec:'12'};
                const parts = s.split(/\s+/);
                let d, m, y;
                if (parts.length === 3 && isNaN(parts[0])) { // Jan 17 2024
                    m = months[parts[0]]; d = parts[1].padStart(2,'0'); y = parts[2];
                } else if (parts.length === 3) { // 12 Jan 2024
                    d = parts[0].padStart(2,'0'); m = months[parts[1]]; y = parts[2];
                } else {
                    return '';
                }
                return `${y}-${m}-${d}`;
            }

            // Hook up UI events
            const df = document.getElementById('date-from');
            const dt = document.getElementById('date-to');
            if (df) df.addEventListener('change', applyFilters);
            if (dt) dt.addEventListener('change', applyFilters);
            document.querySelectorAll('.preset-range')?.forEach(btn => {
                btn.addEventListener('click', () => {
                    const range = btn.getAttribute('data-range');
                    const today = new Date();
                    const yyyy = today.getFullYear();
                    const mm = String(today.getMonth()+1).padStart(2,'0');
                    const dd = String(today.getDate()).padStart(2,'0');
                    let fromISO = `${yyyy}-${mm}-${dd}`;
                    let toISO = `${yyyy}-${mm}-${dd}`;
                    if (range === '7') {
                        const past = new Date(today);
                        past.setDate(past.getDate()-6);
                        const pm = String(past.getMonth()+1).padStart(2,'0');
                        const pd = String(past.getDate()).padStart(2,'0');
                        fromISO = `${past.getFullYear()}-${pm}-${pd}`;
                    } else if (range === 'month') {
                        const start = new Date(yyyy, today.getMonth(), 1);
                        const end = new Date(yyyy, today.getMonth()+1, 0);
                        const sm = String(start.getMonth()+1).padStart(2,'0');
                        const sd = String(start.getDate()).padStart(2,'0');
                        const em = String(end.getMonth()+1).padStart(2,'0');
                        const ed = String(end.getDate()).padStart(2,'0');
                        fromISO = `${start.getFullYear()}-${sm}-${sd}`;
                        toISO = `${end.getFullYear()}-${em}-${ed}`;
                    }
                    document.getElementById('date-from').value = fromISO;
                    document.getElementById('date-to').value = toISO;
                    applyFilters();
                });
            });

            document.getElementById('clear-date-filter')?.addEventListener('click', () => {
                const dfrom = document.getElementById('date-from');
                const dto = document.getElementById('date-to');
                if (dfrom) dfrom.value = '';
                if (dto) dto.value = '';
                applyFilters();
            });
            document.getElementById('search-input').addEventListener('input', applyFilters);

            // Calendar modal open/close glue
            document.getElementById('open-calendar')?.addEventListener('click', () => {
                const modal = document.getElementById('dateModal');
                const content = document.getElementById('dateModalContent');
                if (!modal || !content) return;
                modal.classList.remove('hidden');
                setTimeout(() => { content.classList.remove('scale-95','opacity-0'); content.classList.add('scale-100','opacity-100'); }, 10);
            });
            window.closeDateModal = function() {
                const modal = document.getElementById('dateModal');
                const content = document.getElementById('dateModalContent');
                if (!modal || !content) return;
                content.classList.add('scale-95','opacity-0');
                setTimeout(() => { modal.classList.add('hidden'); }, 150);
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
            
            // Initialize table and card content
            const tableBodyDesktop = document.getElementById('table-body-desktop');
            const cardContainer = document.getElementById('card-container');
            
            if (tableBodyDesktop) {
                tableBodyDesktop.innerHTML = generateTableRows(currentPage, currentFilter);
                console.log('Table content loaded successfully');
            }
            
            if (cardContainer) {
                cardContainer.innerHTML = generateCardRows(currentPage, currentFilter);
                console.log('Card content loaded successfully');
            }
        });
        </script>
    </div>
</div>

@include('partials.footer')

