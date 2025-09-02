@include('partials.head')

@section('title', 'Checkout Hotel - Online Travel')

@include('partials.navigation')

<body class="font-poppins">
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-gray-100 py-4 sm:py-8 px-3 sm:px-4">
	<div class="max-w-6xl mx-auto">
		<!-- Hotel Summary Card -->
		<div class="bg-white rounded-2xl shadow-lg p-4 sm:p-6 lg:p-8 mb-4 sm:mb-6">
			<div class="text-center mb-4 sm:mb-6">
				<h1 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-800">Grand Ocean Resort, Bali</h1>
				<p class="text-gray-600 mt-2">Jl. Pantai Kuta No. 88, Badung, Bali</p>
			</div>
			<div class="w-full h-px bg-gray-200 mb-4 sm:mb-6"></div>
			<div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-center">
				<div>
					<p class="text-sm text-gray-500">Check-in</p>
					<p class="text-lg font-bold text-gray-800">Sen, 1 Sep 2025</p>
				</div>
				<div>
					<p class="text-sm text-gray-500">Check-out</p>
					<p class="text-lg font-bold text-gray-800">Rab, 3 Sep 2025</p>
				</div>
				<div>
					<p class="text-sm text-gray-500">Tamu & Kamar</p>
					<p class="text-lg font-bold text-gray-800">2 Tamu · 1 Kamar</p>
				</div>
			</div>
		</div>

		<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
			<!-- Booking Details -->
			<div class="bg-white rounded-2xl shadow-lg p-6">
				<h2 class="text-xl font-bold text-gray-800 mb-2">Detail Pemesanan</h2>
				<p class="text-gray-600 text-sm mb-6">Informasi kontak untuk pengiriman voucher hotel</p>
				<form>
					<div class="space-y-4">
						<div>
							<label for="nama" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
							<input id="nama" name="nama" type="text" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200" placeholder="Masukkan nama lengkap">
						</div>
						<div>
							<label for="telepon" class="block text-sm font-medium text-gray-700 mb-2">Nomor Telepon</label>
							<input id="telepon" name="telepon" type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200" placeholder="Masukkan nomor telepon">
						</div>
						<div>
							<label for="email" class="block text-sm font-medium text-gray-700 mb-2">Alamat Email</label>
							<input id="email" name="email" type="email" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200" placeholder="Masukkan alamat email">
						</div>
					</div>
				</form>
			</div>

			<!-- Guest Details -->
			<div class="bg-white rounded-2xl shadow-lg p-6">
				<h2 class="text-xl font-bold text-gray-800 mb-2">Data Tamu & Preferensi</h2>
				<p class="text-gray-600 text-sm mb-6">Data tamu utama dan permintaan tambahan</p>
				<div class="space-y-4">
					<div>
						<label for="tamu_utama" class="block text-sm font-medium text-gray-700 mb-2">Nama Tamu Utama</label>
						<input id="tamu_utama" name="tamu_utama" type="text" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200" placeholder="Masukkan nama tamu utama">
					</div>
					<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
						<div>
							<label for="tipe_kamar" class="block text-sm font-medium text-gray-700 mb-2">Tipe Kamar</label>
							<select id="tipe_kamar" name="tipe_kamar" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200">
								<option value="Deluxe">Deluxe</option>
								<option value="Superior">Superior</option>
								<option value="Suite">Suite</option>
							</select>
						</div>
						<div>
							<label for="tipe_bed" class="block text-sm font-medium text-gray-700 mb-2">Tipe Bed</label>
							<select id="tipe_bed" name="tipe_bed" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200">
								<option value="Double">Double</option>
								<option value="Twin">Twin</option>
								<option value="King">King</option>
							</select>
						</div>
					</div>
					<div>
						<label for="permintaan" class="block text-sm font-medium text-gray-700 mb-2">Permintaan Khusus (opsional)</label>
						<textarea id="permintaan" name="permintaan" rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200" placeholder="Contoh: Kamar non-smoking, lantai tinggi, dll."></textarea>
					</div>
				</div>
			</div>
		</div>

		<!-- Submit Button -->
		<div class="text-center">
			<button type="submit" class="w-full max-w-md bg-gradient-to-r from-[#187499] to-[#36AE7E] text-white font-bold py-4 px-8 rounded-xl hover:from-[#156b8a] hover:to-[#2d9a6b] transition-all duration-200 transform hover:scale-105 shadow-lg">
				LANJUTKAN PEMBAYARAN
			</button>
		</div>
	</div>
</div>
</body>
