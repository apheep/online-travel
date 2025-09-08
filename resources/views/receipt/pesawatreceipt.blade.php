@include('partials.head')

@section('title', 'PesawatReceipt - Online Travel')

@include('partials.navigation')

<body class="bg-[F4F7FE] font-poppins">

    <div class="min-h-screen py-8 px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Header -->
            <div class="bg-gradient-to-r from-[#187499] to-[#36AE7E] rounded-2xl shadow-lg p-8 mb-6 text-white">
                <div class="text-center">
                    <div class="mb-4">
                        <svg class="w-16 h-16 mx-auto mb-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                        </svg>
                    </div>
                    <h1 class="text-4xl font-bold mb-3">Pemesanan Pesawat Berhasil!</h1>
                    <p class="text-green-100 text-lg">Tiket pesawat Anda telah berhasil dipesan</p>
                    <div class="mt-6 bg-white bg-opacity-20 rounded-lg p-4 inline-block">
                        <p class="text-sm font-medium">Tanggal Pemesanan</p>
                        <p class="text-lg font-bold">{{ date('d F Y') }}</p>
                    </div>
                </div>
            </div>

            <!-- Flight Information -->
            <div class="bg-white rounded-2xl shadow-lg p-6 mb-6">
                <h2 class="text-xl font-bold text-gray-900 mb-4">Detail Penerbangan</h2>
                <div class="space-y-4">
                    <h3 class="text-lg font-bold text-gray-900">Garuda Indonesia</h3>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 text-sm">
                        <div>
                            <span class="text-gray-600 font-medium">Kelas:</span>
                            <p class="text-gray-900">Ekonomi</p>
                        </div>
                        <div>
                            <span class="text-gray-600 font-medium">Penumpang:</span>
                            <p class="text-gray-900">3 Dewasa</p>
                        </div>
                        <div>
                            <span class="text-gray-600 font-medium">Bandara Asal:</span>
                            <p class="text-gray-900">CGK - Soekarno-Hatta</p>
                        </div>
                        <div>
                            <span class="text-gray-600 font-medium">Bandara Tujuan:</span>
                            <p class="text-gray-900">DPS - Ngurah Rai</p>
                        </div>
                        <div>
                            <span class="text-gray-600 font-medium">Nomor Penerbangan:</span>
                            <span class="bg-teal-100 text-teal-700 px-2 py-1 rounded text-xs">GA 308</span>
                        </div>
                        <div>
                            <span class="text-gray-600 font-medium">Harga:</span>
                            <p class="text-lg font-bold text-red-600">IDR 600.000</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Passengers Information -->
            <div class="bg-white rounded-2xl shadow-lg p-4 sm:p-6 mb-6">
                <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center mb-6 gap-4">
                    <h2 class="text-xl sm:text-2xl font-bold text-gray-900">Data Diri Penumpang</h2>
                    <div class="flex flex-wrap gap-2" id="guestTabs">
                        <!-- Dynamic guest tabs will be generated here -->
                    </div>
                </div>
                
                <!-- Passenger 1 Data -->
                <div id="guest1Data" class="guest-data">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap</label>
                                <div class="p-3 bg-gray-50 rounded-lg text-gray-900">John Doe</div>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
                                <div class="p-3 bg-gray-50 rounded-lg text-gray-900">john.doe@email.com</div>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">No. Telepon</label>
                                <div class="p-3 bg-gray-50 rounded-lg text-gray-900">+62 812-3456-7890</div>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Keberangkatan</label>
                                <div class="p-3 bg-gray-50 rounded-lg text-gray-900">15 September 2025 • 08:00 WIB</div>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Kedatangan</label>
                                <div class="p-3 bg-gray-50 rounded-lg text-gray-900">15 September 2025 • 12:30 WIB</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Passenger 2 Data -->
                <div id="guest2Data" class="guest-data hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap</label>
                                <div class="p-3 bg-gray-50 rounded-lg text-gray-900">Jane Smith</div>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
                                <div class="p-3 bg-gray-50 rounded-lg text-gray-900">jane.smith@email.com</div>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">No. Telepon</label>
                                <div class="p-3 bg-gray-50 rounded-lg text-gray-900">+62 812-9876-5432</div>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Keberangkatan</label>
                                <div class="p-3 bg-gray-50 rounded-lg text-gray-900">15 September 2025 • 08:00 WIB</div>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Kedatangan</label>
                                <div class="p-3 bg-gray-50 rounded-lg text-gray-900">15 September 2025 • 12:30 WIB</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Passenger 3 Data -->
                <div id="guest3Data" class="guest-data hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap</label>
                                <div class="p-3 bg-gray-50 rounded-lg text-gray-900">Bob Johnson</div>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
                                <div class="p-3 bg-gray-50 rounded-lg text-gray-900">bob.johnson@email.com</div>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">No. Telepon</label>
                                <div class="p-3 bg-gray-50 rounded-lg text-gray-900">+62 812-1111-2222</div>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Keberangkatan</label>
                                <div class="p-3 bg-gray-50 rounded-lg text-gray-900">15 September 2025 • 08:00 WIB</div>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Kedatangan</label>
                                <div class="p-3 bg-gray-50 rounded-lg text-gray-900">15 September 2025 • 12:30 WIB</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Document Information -->
            <div class="bg-white rounded-2xl shadow-lg p-8 mb-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Dokumen Pendukung</h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">KTP/Identitas</h3>
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
                            <svg class="w-12 h-12 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <p class="text-gray-600 font-medium mb-3">KTP_JohnDoe.pdf</p>
                            <p class="text-sm text-gray-500 mb-3">Uploaded ✓</p>
                            <button onclick="window.open('/documents/KTP_JohnDoe.pdf', '_blank')" class="px-4 py-2 text-white rounded-lg text-sm font-medium transition duration-200" style="background: linear-gradient(135deg, #187499 0%, #36AE7E 100%);">
                                View 
                            </button>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Boarding Pass</h3>
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
                            <svg class="w-12 h-12 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <p class="text-gray-600 font-medium mb-3">BoardingPass_GA308.pdf</p>
                            <p class="text-sm text-gray-500 mb-3">Uploaded ✓</p>
                            <button onclick="window.open('/documents/BoardingPass_GA308.pdf', '_blank')" class="px-4 py-2 text-white rounded-lg text-sm font-medium transition duration-200" style="background: linear-gradient(135deg, #187499 0%, #36AE7E 100%);">
                                View 
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center py-8">
                <button onclick="window.location.href='/pesanan/pesawat'" class="px-8 py-4 border-2 border-gray-300 rounded-xl text-gray-700 hover:bg-gray-50 transition duration-200 font-semibold">
                    Kembali ke Pemesanan
                </button>
                <button onclick="window.location.href='/welcome'" class="px-8 py-4 text-white rounded-xl font-semibold transition duration-200 shadow-lg hover:shadow-xl" style="background: linear-gradient(135deg, #187499 0%, #36AE7E 100%);">
                    Kembali ke Beranda
                </button>
            </div>

        </div>
    </div>


    <script>
        // Guest data configuration - easily customizable
        const guestData = [
            {
                name: "John Doe",
                email: "john.doe@email.com", 
                phone: "+62 812-3456-7890",
                address: "CGK - Soekarno-Hatta",
                checkin: "15 September 2025 • 08:00 WIB",
                checkout: "15 September 2025 • 12:30 WIB"
            },
            {
                name: "Jane Smith",
                email: "jane.smith@email.com",
                phone: "+62 812-9876-5432", 
                address: "CGK - Soekarno-Hatta",
                checkin: "15 September 2025 • 08:00 WIB",
                checkout: "15 September 2025 • 12:30 WIB"
            },
            {
                name: "Bob Johnson",
                email: "bob.johnson@email.com",
                phone: "+62 812-1111-2222",
                address: "CGK - Soekarno-Hatta", 
                checkin: "15 September 2025 • 08:00 WIB",
                checkout: "15 September 2025 • 12:30 WIB"
            }
        ];

        // Initialize guest tabs and data dynamically
        function initializeGuests() {
            const tabsContainer = document.getElementById('guestTabs');
            
            // Generate tabs based on available guest data
            guestData.forEach((guest, index) => {
                const guestNumber = index + 1;
                const button = document.createElement('button');
                button.id = `guest${guestNumber}Btn`;
                button.className = guestNumber === 1 ? 
                    'px-2 sm:px-3 py-1 text-white rounded-lg text-xs sm:text-sm font-medium transition-colors duration-200' : 
                    'px-2 sm:px-3 py-1 bg-gray-300 text-gray-700 rounded-lg text-xs sm:text-sm font-medium hover:bg-gray-400 transition-colors duration-200';
                
                if (guestNumber === 1) {
                    button.style.background = 'linear-gradient(135deg, #187499 0%, #36AE7E 100%)';
                }
                button.textContent = `Penumpang ${guestNumber}`;
                button.onclick = () => showGuest(guestNumber);
                tabsContainer.appendChild(button);
            });
        }

        function showGuest(guestNumber) {
            // Hide all guest data with smooth transition
            document.querySelectorAll('.guest-data').forEach(function(element) {
                element.classList.add('hidden');
            });
            
            // Remove active state from all buttons
            document.querySelectorAll('[id$="Btn"]').forEach(function(button) {
                button.classList.remove('text-white');
                button.classList.add('bg-gray-300', 'text-gray-700');
                button.style.background = '';
            });
            
            // Show selected guest data
            const targetData = document.getElementById('guest' + guestNumber + 'Data');
            if (targetData) {
                targetData.classList.remove('hidden');
            }
            
            // Set active state for selected button
            const activeButton = document.getElementById('guest' + guestNumber + 'Btn');
            if (activeButton) {
                activeButton.classList.remove('bg-gray-300', 'text-gray-700');
                activeButton.classList.add('text-white');
                activeButton.style.background = 'linear-gradient(135deg, #187499 0%, #36AE7E 100%)';
            }
        }

        // Initialize when page loads
        document.addEventListener('DOMContentLoaded', function() {
            initializeGuests();
        });
    </script>
</body>

@include('partials.footer')
