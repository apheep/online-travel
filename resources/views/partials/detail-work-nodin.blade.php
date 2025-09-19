            <div class="bg-white rounded-2xl shadow-lg p-4 sm:p-6 mb-4 sm:mb-6">
                <div class="flex flex-col gap-6">
                     <!-- Detail Pekerjaan -->
                    <div class="flex gap-4 flex-1">
                        <img src="{{ asset('detaildinas.png') }}" 
                            alt="Detail Dinas" 
                            class="w-12 h-12 self-center" loading="lazy">
                        <div class="flex flex-col w-full">
                            <label class="block text-gray-800 font-medium mb-2">Detail Dinas</label>
                            <input type="text" 
                                class="w-full px-4 py-10 border border-gray-300 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-transparent transition-all duration-200"
                                placeholder="Masukkan detail dinas">
                        </div>
                    </div>
                    
                    <!-- Detail Dinas -->
                    <div class="flex gap-4 flex-1">
                        <img src="{{ asset('detailpekerjaan.png') }}" 
                            alt="Detail Pekerjaan" 
                            class="w-12 h-12 self-center" loading="lazy">
                        <div class="flex flex-col w-full">
                            <label class="block text-gray-800 font-medium mb-2">Detail Pekerjaan</label>
                            <input type="text" 
                                class="w-full px-4 py-10 border border-gray-300 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-transparent transition-all duration-200"
                                placeholder="Masukkan detail pekerjaan">
                        </div>
                    </div>
                </div>
            </div>