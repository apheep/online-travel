@include('partials.head')

@section('title', 'Checkout Train - Online Travel')

@include('partials.navigation')
<body class="font-poppins">
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-gray-100 py-4 sm:py-8 px-3 sm:px-4">
    <div class="max-w-6xl mx-auto">
        <!-- Back Navigation -->
        <div class="flex items-center mb-4 sm:mb-6">
            <button onclick="goBack()" class="flex items-center text-blue-600 hover:text-blue-800 transition-colors duration-200">
                 <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                 </svg>
                 <span class="text-sm font-medium">Apakah ingin kembali?</span>
            </button>
        </div>

        <!-- Container utama: sesuaikan max-w jika mau lebih lebar/small -->
        <div class="max-w-6xl mx-auto px-4">

        <!-- train-summary card (atas) -->
        <div class="relative bg-white rounded-2xl shadow-lg p-4 sm:p-6 lg:p-8 mb-6">
            <div class="flex flex-col items-center">
            <div class="flex items-center space-x-3">
                <img src="/KAI.png" alt="KAI Logo" class="w-12 h-auto">
                <h2 class="text-lg sm:text-xl font-semibold text-gray-500">Sancaka 81</h2>
                <span class="text-lg sm:text-xl font-semibold text-gray-500">•</span>
                <span class="text-lg sm:text-xl font-semibold text-gray-500">Ekonomi</span>
            </div>

            <div class="mt-3"></div>

            <div class="flex items-center gap-4">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium text-white"
                    style="background: linear-gradient(90deg,#0d8596,#36AE7E);">
                Pergi
                </span>
                <div class="text-sm text-gray-600">
                <span class="font-medium text-gray-800">Sen, 1 Sep 2025</span>
                <span class="mx-2 text-gray-800">•</span>
                <span class="font-medium text-gray-800">07:00 - 10:07</span>
                </div>
            </div>

            <div class="mt-4 w-full text-center">
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-800">
                Surabaya Gubeng <span class="mx-2 text-gray-400">→</span> Solo Balapan
                </h1>
            </div>
            </div>

            <div class="mt-6 border-t border-gray-200"></div>

            <div class="mt-4 flex items-center justify-between">
            <div class="text-sm text-gray-500 font-semibold">Total Harga</div>
            <div class="text-right">
                <div class="text-lg sm:text-xl font-semibold text-gray-800">IDR 265.000</div>
            </div>
            </div>
        </div>

        <!-- BAWAH: dua kolom (kiri 50% = detail + dokumen, kanan 50% = kursi) -->
        <div class="flex flex-col lg:flex-row gap-6 items-stretch">
            <!-- KIRI: 50% (stacked) -->
            <div class="w-full lg:w-1/2 flex flex-col gap-6">
            <!-- Detail Pemesanan -->
            <div class="bg-white rounded-2xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Detail Pemesanan</h2>
                <p class="text-gray-600 text-sm mb-6">Detail kontak ini akan digunakan untuk pengiriman e-tiket</p>

                <form id="booking-form">
                <div class="space-y-4">
                    <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-200 transition"
                            placeholder="Masukkan nama lengkap">
                    </div>

                    <div>
                    <label for="telepon" class="block text-sm font-medium text-gray-700 mb-2">Nomor Telpon</label>
                    <input type="tel" id="telepon" name="telepon"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-200 transition"
                            placeholder="Masukkan nomor telepon">
                    </div>

                    <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Alamat Email</label>
                    <input type="email" id="email" name="email"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-200 transition"
                            placeholder="Masukkan alamat email">
                    </div>
                </div>
                </form>
            </div>

            <!-- Dokumen Pendukung -->
            <div class="bg-white rounded-2xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Dokumen Pendukung</h2>
                <p class="text-gray-600 text-sm mb-6">KTP dan surat dinas diperlukan untuk memproses e-tiket Anda</p>

                <div class="space-y-4">
                <!-- Upload KTP -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Upload KTP</label>
                    <div
                    class="upload-box border-2 border-dashed border-gray-200 rounded-xl p-4 hover:border-blue-300 transition-colors duration-200 cursor-pointer flex items-center gap-4"
                    onclick="triggerFile('ktp')">
                    <img src="{{ asset('folder.png') }}" alt="icon" class="w-8 h-8">
                    <div class="flex-1 text-left">
                        <div class="text-gray-700">Klik untuk upload atau tarik file ke sini</div>
                        <div id="ktp-filename" class="text-sm text-gray-400">Format: PDF (maks 5MB)</div>
                    </div>
                    <input type="file" id="ktp" name="ktp" accept=".pdf" class="hidden" onchange="handleFileChange(event, 'ktp-filename')">
                    </div>
                </div>

                <!-- Upload Surat Dinas -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Upload Surat Dinas</label>
                    <div
                    class="upload-box border-2 border-dashed border-gray-200 rounded-xl p-4 hover:border-blue-300 transition-colors duration-200 cursor-pointer flex items-center gap-4"
                    onclick="triggerFile('surat_dinas')">
                    <img src="{{ asset('folder.png') }}" alt="icon" class="w-8 h-8">
                    <div class="flex-1 text-left">
                        <div class="text-gray-700">Klik untuk upload atau tarik file ke sini</div>
                        <div id="surat_dinas-filename" class="text-sm text-gray-400">Format: PDF (maks 5MB)</div>
                    </div>
                    <input type="file" id="surat_dinas" name="surat_dinas" accept=".pdf" class="hidden" onchange="handleFileChange(event, 'surat_dinas-filename')">
                    </div>
                </div>
                </div>
            </div>
            </div>

            <!-- KANAN: 50% (Detail Kursi) - flex sehingga tinggi mengikuti kiri -->
            <div class="w-full lg:w-1/2 flex">
            <div class="bg-white rounded-2xl shadow-lg p-6 flex-1 flex flex-col">
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Detail Kursi</h3>
                <p class="text-gray-600 text-sm mb-4">Nomor kursi yang dipilih tidak dapat diubah setelah pembayaran.</p>

                <!-- Selected seat box -->
                <div class="mb-4 p-4 bg-gray-50 rounded-xl border border-gray-100">
                <div class="text-sm text-gray-500">Kursi dipilih</div>
                <div id="selected-seat" class="text-2xl font-semibold text-gray-800 mt-2">Tidak ada</div>
                </div>

                <div class="mb-4 bg-white rounded-xl border border-gray-100 p-4 shadow-sm flex-1 flex flex-col">
                <h4 class="font-semibold text-gray-800 mb-2">Pilih Kursi</h4>
                <p class="text-xs text-gray-400 mb-3">Nomor kursi yang dipilih tidak dapat diubah setelah pembayaran</p>

                <form id="seat-form" class="space-y-3 flex-1 flex flex-col" onsubmit="return false;">
                    <!-- Stasiun -->
                    <div class="flex items-center gap-3 mb-2">
                    <input type="radio" name="station" id="stg" value="Surabaya Gubeng" class="h-4 w-4 text-teal-600" checked onchange="onStationChange()">
                    <label for="stg" class="text-sm text-gray-700">Surabaya Gubeng</label>

                    <input type="radio" name="station" id="sol" value="Solo Balapan" class="h-4 w-4 text-teal-600 ml-4" onchange="onStationChange()">
                    <label for="sol" class="text-sm text-gray-700">Solo Balapan</label>
                    </div>

                    <!-- Gerbong dropdown + legend -->
                    <div class="mb-3">
                    <label class="block text-xs text-gray-400 mb-2">Gerbong kereta</label>
                    <select id="carriage-select" class="w-full border rounded-lg px-3 py-2 text-sm">
                        <option>Premium 5 (72 kursi tersedia)</option>
                        <option>Ekonomi 3 (60 kursi tersedia)</option>
                    </select>
                    </div>

                    <div class="flex items-center gap-3 text-xs text-gray-500 mb-3">
                    <div class="flex items-center gap-2"><div class="w-3 h-3 rounded-sm bg-gradient-to-r from-teal-600 to-emerald-400 border"></div> Dipilih</div>
                    <div class="flex items-center gap-2"><div class="w-3 h-3 rounded-sm border bg-white"></div> Tersedia</div>
                    <div class="flex items-center gap-2"><div class="w-3 h-3 rounded-sm bg-gray-200 border"></div> Tidak tersedia</div>
                    </div>

                    <!-- Seat map container (flex-1 supaya mengisi ruang yang tersisa) -->
                    <div class="mt-2 border rounded-lg p-4 bg-white flex-1 flex flex-col">
                    <div class="w-full h-56 overflow-auto bg-gray-50 rounded-md flex items-center justify-center p-4">
                        <!-- Seat grid (generated by JS) -->
                        <div id="seat-grid" class="inline-block"></div>
                    </div>

                    <!-- status -->
                    <div class="mt-4 flex items-center justify-between">
                        <div class="text-sm text-gray-500">Pilih satu kursi</div>
                        <div class="text-sm text-gray-500">Status: <span id="seat-status" class="font-medium text-gray-700 ml-1">Belum dipilih</span></div>
                    </div>
                    </div>

                    <!-- Simpan button -->
                    <div class="mt-4">
                    <button id="save-seat-btn" type="button" onclick="saveSeat()"
                            class="w-full py-3 rounded-lg font-semibold text-white bg-gradient-to-r from-teal-600 to-emerald-400 hover:from-teal-700 hover:to-emerald-500 transition">
                        Simpan kursi
                    </button>
                    </div>
                </form>
                </div>

            </div>
            </div>
        </div>
        </div>

        <!-- JS (file upload + seat map interactions) -->
        <script>
        function triggerFile(id) { document.getElementById(id).click(); }
        function handleFileChange(e, labelId) {
            const file = e.target.files[0];
            const label = document.getElementById(labelId);
            if (!file) { label.textContent = e.target.accept === '.pdf' ? 'Format: PDF (maks 5MB)' : ''; return; }
            const name = file.name.length > 40 ? file.name.slice(0,37) + '...' : file.name;
            label.textContent = name;
        }

        // ----- seat map interaction (sama seperti sebelumnya) -----
        const rows = 9;
        const leftCols = ['A','B'];
        const rightCols = ['C','D'];
        const unavailableSeats = new Set(['B3','C5','A7','D2']); // contoh, bisa dari backend
        let currentlySelected = null;

        const seatGrid = () => document.getElementById('seat-grid');
        const selectedSeatEl = () => document.getElementById('selected-seat');
        const seatStatusEl = () => document.getElementById('seat-status');

        function buildSeatGrid() {
            const container = document.createElement('div');
            container.className = 'inline-block px-2 py-3';

            for (let r = 1; r <= rows; r++) {
            const rowWrap = document.createElement('div');
            rowWrap.className = 'flex items-center justify-center gap-6 mb-2';

            const leftWrap = document.createElement('div');
            leftWrap.className = 'flex flex-col gap-2 items-end';
            leftCols.forEach(col => leftWrap.appendChild(createSeatButton(col + r)));

            const rowNum = document.createElement('div');
            rowNum.className = 'w-6 text-center text-sm text-gray-500';
            rowNum.textContent = r;

            const rightWrap = document.createElement('div');
            rightWrap.className = 'flex flex-col gap-2 items-start';
            rightCols.forEach(col => rightWrap.appendChild(createSeatButton(col + r)));

            rowWrap.appendChild(leftWrap);
            rowWrap.appendChild(rowNum);
            rowWrap.appendChild(rightWrap);
            container.appendChild(rowWrap);
            }

            const g = seatGrid();
            g.innerHTML = '';
            g.appendChild(container);
        }

        function createSeatButton(seatId) {
            const btn = document.createElement('button');
            btn.type = 'button';
            btn.setAttribute('data-seat', seatId);
            btn.className = ['w-9','h-9','rounded-md','flex','items-center','justify-center','text-xs','font-medium','border'].join(' ');
            btn.classList.add('bg-white','border-gray-300','text-gray-600','hover:shadow');
            btn.textContent = '';
            if (unavailableSeats.has(seatId)) {
            btn.classList.remove('bg-white');
            btn.classList.add('bg-gray-200','border-gray-200','text-gray-400','cursor-not-allowed','opacity-80');
            btn.setAttribute('aria-disabled','true');
            } else {
            btn.addEventListener('click', () => onSeatClick(seatId, btn));
            }
            btn.title = 'Kursi ' + seatId + (unavailableSeats.has(seatId) ? ' (Tidak tersedia)' : '');
            return btn;
        }

        function onSeatClick(seatId, btnEl) {
            if (currentlySelected === seatId) { deselectCurrent(); return; }
            deselectCurrent();
            currentlySelected = seatId;
            btnEl.classList.remove('bg-white','border-gray-300','text-gray-600','hover:shadow');
            btnEl.classList.add('selected-seat','text-white','border-transparent');
            btnEl.style.background = 'linear-gradient(90deg,#0ea5a3,#34d399)';
            btnEl.style.boxShadow = '0 2px 10px rgba(16,185,129,0.12)';
            selectedSeatEl().textContent = seatId;
            seatStatusEl().textContent = 'Dipilih: ' + seatId;
        }

        function deselectCurrent() {
            if (!currentlySelected) return;
            const oldBtn = seatGrid().querySelector('[data-seat="'+currentlySelected+'"]');
            if (oldBtn) {
            oldBtn.classList.remove('selected-seat','text-white','border-transparent');
            oldBtn.style.background = '';
            oldBtn.style.boxShadow = '';
            oldBtn.classList.add('bg-white','border-gray-300','text-gray-600','hover:shadow');
            }
            currentlySelected = null;
            selectedSeatEl().textContent = 'Tidak ada';
            seatStatusEl().textContent = 'Belum dipilih';
        }

        function saveSeat() {
            if (!currentlySelected) { alert('Silakan pilih kursi terlebih dahulu.'); return; }
            alert('Kursi ' + currentlySelected + ' berhasil disimpan.');
            unavailableSeats.add(currentlySelected);
            const btn = seatGrid().querySelector('[data-seat="'+currentlySelected+'"]');
            if (btn) {
            btn.removeEventListener('click', () => {});
            btn.classList.remove('selected-seat','text-white','border-transparent','hover:shadow');
            btn.style.background = '';
            btn.style.boxShadow = '';
            btn.classList.add('bg-gray-200','border-gray-200','text-gray-400','cursor-not-allowed','opacity-80');
            btn.setAttribute('aria-disabled','true');
            }
            seatStatusEl().textContent = 'Tersimpan: ' + currentlySelected;
        }

        function onStationChange() {
            const station = document.querySelector('input[name="station"]:checked').value;
            seatStatusEl().textContent = (currentlySelected ? 'Dipilih: ' + currentlySelected : 'Belum dipilih') + ' (' + station + ')';
        }

        document.addEventListener('DOMContentLoaded', function() {
            buildSeatGrid();
            onStationChange();
        });
        </script>


        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" 
                     class="w-full max-w-md bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white font-bold py-4 px-8 rounded-xl hover:from-[#156b8a] hover:to-[#2d9a6b] transition-all duration-200 transform hover:scale-105 shadow-lg">
                 SUBMIT
            </button>
            <!-- Modal konfirmasi (paste di bawah seat map / sebelum </body>) -->
            <div id="confirm-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden">
            <div role="dialog" aria-modal="true" aria-labelledby="confirm-title"
                class="bg-white rounded-2xl p-8 max-w-lg w-full mx-4 text-center shadow-2xl">
                <h3 id="confirm-title" class="text-3xl sm:text-4xl font-bold text-gray-900 mb-2">Apakah anda yakin?</h3>
                <p id="confirm-sub" class="text-sm text-gray-600 mb-8">anda tidak dapat mengubah data setelah disubmit</p>

                <div class="flex gap-4">    
                <!-- Tombol 'tidak' -->
                <button id="confirm-no"
                        class="flex-1 py-3 rounded-xl bg-red-600 hover:bg-red-700 text-white font-semibold text-lg tracking-wide transition"
                        onclick="hideConfirmation()">
                    tidak
                </button>

                <!-- Tombol 'iya' -->
                <button id="confirm-yes"
                        class="flex-1 py-3 rounded-xl text-white font-semibold text-lg tracking-wide transition"
                        style="background: linear-gradient(90deg,#187499,#36AE7E);"
                        onclick="confirmYes()">
                    iya
                </button>
                </div>
            </div>
            </div>

            <script>
            // overlay element
            const overlay = document.getElementById('confirm-overlay');

            // ubah saveSeat() sehingga memunculkan modal konfirmasi terlebih dahulu
            // jika belum ada kursi yang dipilih -> tampilkan alert
            function saveSeat() {
                if (!currentlySelected) {
                alert('Silakan pilih kursi terlebih dahulu.');
                return;
                }
                // tampilkan modal konfirmasi dan fokus ke tombol 'iya'
                showConfirmation();
            }

            function showConfirmation() {
                overlay.classList.remove('hidden');
                document.documentElement.style.overflow = 'hidden'; // disable scroll
                // fokus ke tombol iya
                const yesBtn = document.getElementById('confirm-yes');
                if (yesBtn) yesBtn.focus();
                // opsional: tampilkan info kursi di modal subtitle
                const sub = document.getElementById('confirm-sub');
                if (sub) sub.textContent = 'Kursi yang akan disimpan: ' + currentlySelected;
            }

            function hideConfirmation() {
                overlay.classList.add('hidden');
                document.documentElement.style.overflow = '';
            }

            // ketika user tekan 'iya' -> jalankan performSave() lalu tutup modal
            function confirmYes() {
                performSave();
                hideConfirmation();
            }

            // fungsi penyimpanan nyata (ambil logika lama saveSeat() Anda)
            function performSave() {
                // currentlySelected pasti ada karena showConfirmation hanya dipanggil bila ada selection
                if (!currentlySelected) {
                alert('Tidak ada kursi yang dipilih.');
                return;
                }

                // Demo: tandai kursi sebagai tidak tersedia dan disable tombolnya
                unavailableSeats.add(currentlySelected);
                const btn = document.querySelector('[data-seat="'+currentlySelected+'"]');
                if (btn) {
                // hapus event listener (safe approach: clone node)
                const clone = btn.cloneNode(true);
                clone.classList.remove('selected-seat','text-white','border-transparent','hover:shadow');
                clone.style.background = '';
                clone.style.boxShadow = '';
                clone.classList.add('bg-gray-200','border-gray-200','text-gray-400','cursor-not-allowed','opacity-80');
                clone.setAttribute('aria-disabled','true');
                btn.parentNode.replaceChild(clone, btn);
                }

                // update UI
                const seatStatus = document.getElementById('seat-status');
                if (seatStatus) seatStatus.textContent = 'Tersimpan: ' + currentlySelected;
                const selectedSeatEl = document.getElementById('selected-seat');
                if (selectedSeatEl) selectedSeatEl.textContent = currentlySelected;

                // optional: beri notifikasi
                // alert('Kursi ' + currentlySelected + ' berhasil disimpan.');
                // jika Anda ingin "mengunci" selected state (tidak men-deselect)
                // currentlySelected = null; // atau biarkan agar user bisa lihat kursi tersimpan
            }

            // close modal saat klik backdrop
            overlay.addEventListener('click', function(e) {
                if (e.target === overlay) hideConfirmation();
            });

            // tutup modal dengan Esc
            document.addEventListener('keydown', function(e) {
                if (!overlay.classList.contains('hidden') && e.key === 'Escape') {
                hideConfirmation();
                }
            });
            </script>

        </div>
     </div>
 </div>
 
 <!-- Overlay Modal -->
 <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden">
     <div class="bg-white rounded-2xl p-8 max-w-md mx-4 text-center">
         <h3 class="text-xl font-bold text-gray-800 mb-4">Mau lihat kereta lain?</h3>
         <p class="text-gray-600 mb-6">Kalau kamu kembali ke halaman sebelumnya, semua info yang diisi dan keberangkatan yang dipilih akan hilang.</p>
         <div class="flex flex-col space-y-3">
              <button onclick="viewOtherFlights()" class="w-full px-6 py-3 bg-gradient-to-r from-blue-50 to-blue-100 text-[#36AE7E] rounded-xl hover:from-blue-100 hover:to-blue-200 transition-all duration-200 font-medium">
                  Lihat Kereta Lain
              </button>
             <button onclick="completeBooking()" class="w-full px-6 py-3 bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white rounded-xl hover:from-[#156b8a] hover:to-[#2d9a6b] transition-all duration-200 font-medium">
                 Selesaikan Pemesananmu
             </button>
         </div>
     </div>
 </div>
 
 </body>
 
 @include('partials.footer')
 
 <script>
 // Back navigation function
 function goBack() {
     // Show overlay
     showOverlay();
 }
 
 // Overlay functions
 function showOverlay() {
     const overlay = document.getElementById('overlay');
     overlay.classList.remove('hidden');
 }
 
 function hideOverlay() {
     const overlay = document.getElementById('overlay');
     if (overlay) {
         overlay.classList.add('hidden');
     }
 }
 
 function viewOtherFlights() {
      // Hide overlay and redirect to flight search page
      hideOverlay();
      alert('Redirecting to flight search page...');
      // window.location.href = '/search-flights'; // Uncomment this to actually redirect
 }
  
  function completeBooking() {
      // Hide overlay and stay on current page to complete booking
      hideOverlay();
      // User stays on current page to complete the booking
}

document.addEventListener('DOMContentLoaded', function() {
    // File upload functionality
    const fileInputs = document.querySelectorAll('input[type="file"]');
    const uploadAreas = document.querySelectorAll('.border-dashed');
    
    fileInputs.forEach((input, index) => {
        const uploadArea = uploadAreas[index];
        
        uploadArea.addEventListener('click', () => {
            input.click();
        });
        
        input.addEventListener('change', (e) => {
            if (e.target.files.length > 0) {
                const fileName = e.target.files[0].name;
                uploadArea.innerHTML = `
                    <div class="flex flex-col items-center">
                        <svg class="w-8 h-8 text-green-500 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-green-600 text-sm">${fileName}</span>
                    </div>
                `;
                uploadArea.classList.remove('border-gray-300', 'hover:border-blue-400');
                uploadArea.classList.add('border-green-400', 'bg-green-50');
            }
        });
    });
    
    // Form validation and submission
    const form = document.querySelector('form');
    const submitBtn = document.querySelector('button[type="submit"]');
    
    submitBtn.addEventListener('click', function(e) {
        e.preventDefault();
        
        // Basic validation
        const nama = document.getElementById('nama').value;
        const telepon = document.getElementById('telepon').value;
        const email = document.getElementById('email').value;
        const kursi = document.getElementById('kursi').value;
        const ktp = document.getElementById('ktp').files[0];
        const suratDinas = document.getElementById('surat_dinas').files[0];
        
        if (!nama || !telepon || !email || !kursi || !ktp || !suratDinas) {
            alert('Mohon lengkapi semua data yang diperlukan');
            return;
        }
        
        // Email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert('Format email tidak valid');
            return;
        }
        
        // Phone validation
        const phoneRegex = /^[0-9+\-\s()]+$/;
        if (!phoneRegex.test(telepon)) {
            alert('Format nomor telepon tidak valid');
            return;
        }
        
        // If all validation passes, show success message
        alert('Data berhasil disubmit! Redirecting to payment...');
        // Here you can redirect to payment page or process the form
    });
});
</script>



