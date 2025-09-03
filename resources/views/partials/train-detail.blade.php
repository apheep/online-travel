<!-- Train Detail Modal (light timeline style) -->
<div id="trainDetailModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl shadow-xl max-w-2xl w-full max-h-[85vh] overflow-y-auto">
        <div class="p-6">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-xl font-bold text-gray-900 mb-1">Detail Perjalanan Kereta</h3>
                <button onclick="closeTrainDetailModal()" class="text-gray-500 hover:text-gray-700 transition duration-200 p-2 hover:bg-gray-100 rounded-full">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Timeline -->
            <div class="grid grid-cols-[16px,96px,1fr] gap-4">
                <!-- Column 1: Dots + line -->
                <div class="relative pt-1">
                    <div class="w-3 h-3 rounded-full border-2 border-blue-500 bg-white mt-1"></div>
                    <div class="absolute left-[5px] top-4 w-0.5 h-24 bg-gray-300"></div>
                    <div class="w-3 h-3 rounded-full bg-blue-600 mt-24"></div>
                </div>

                <!-- Column 2: Times & dates -->
                <div>
                    <div class="text-base font-extrabold text-gray-900 leading-5">07:00</div>
                    <div class="text-xs text-gray-500">04 September 2025</div>
                    <div class="text-xs text-gray-500 mt-6">3j 7m</div>
                    <div class="text-base font-extrabold text-gray-900 leading-5 mt-6">10:07</div>
                    <div class="text-xs text-gray-500">04 September 2025</div>
                </div>

                <!-- Column 3: Stations -->
                <div>
                    <div class="text-base font-semibold text-gray-900">Surabaya Gubeng (SGU)</div>
                    <div class="text-sm text-gray-500">Surabaya</div>
                    <div class="text-base font-semibold text-gray-900 mt-6">Solo Balapan (SLO)</div>
                    <div class="text-sm text-gray-500">Solo</div>
                </div>
            </div>

            <div class="flex space-x-3 mt-8">
                <button onclick="closeTrainDetailModal()" class="flex-1 px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-all duration-200 font-medium">Tutup</button>
                <button onclick="selectTrain()" class="flex-1 px-4 py-2 text-white rounded-lg font-medium transition-all duration-200" style="background: linear-gradient(135deg, #187499 0%, #36AE7E 100%);">Pilih Kereta</button>
            </div>
        </div>
    </div>
</div>

<script>
    function openTrainDetailModal() {
        document.getElementById('trainDetailModal').classList.remove('hidden');
    }
    function closeTrainDetailModal() {
        document.getElementById('trainDetailModal').classList.add('hidden');
    }
    function selectTrain() {
        alert('Kereta dipilih!');
    }
</script>
