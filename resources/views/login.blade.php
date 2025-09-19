
@include('partials.head')

  <style>
    /* frame style di sekitar gambar (border biru-teal seperti contoh) */
    .img-frame {
      border: 3px solid #FE0004; /* teal-500 */
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 6px 18px rgba(0,0,0,0.08);
    }

    /* gradient button */
    .btn-grad {
      background: #FE0004;
    }
  </style>

<body class="min-h-screen flex items-center justify-center bg-white font-poppins">
  <div class="container mx-auto px-6">
    <div class="flex flex-col lg:flex-row items-center justify-center gap-10">

      {{-- KIRI: gambar besar --}}
      <div class="img-frame lg:w-[540px] lg:h-[720px] w-full max-w-xl">
        <img src="{{ asset('background.png') }}" alt="Pantai" class="object-cover w-full h-full">
      </div>

      {{-- KANAN: form --}}
      <div class="w-full max-w-md">
        <div class="text-center mb-8">
          <h1 class="text-4xl font-extrabold tracking-tight">Login</h1>
        </div>

        {{-- gunakan route sesuai project; kalau belum ada, ganti action sesuai kebutuhan --}}
        <form action="{{ route('login.attempt') ?? '' }}" method="POST" class="space-y-5 bg-white">
          @csrf

          {{-- menampilkan pesan error validasi (jika ada) --}}
          @if ($errors->any())
            <div class="rounded-md bg-red-50 border border-red-200 text-red-700 px-4 py-3">
              {{ $errors->first() }}
            </div>
          @endif

          <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" required
              class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-300"
              placeholder="Email">
          </div>

          <div class="relative">
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input id="password" name="password" type="password" required
              class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-300 pr-12"
              placeholder="Password">
            {{-- tombol eye untuk toggle visibility --}}
            <button type="button" id="togglePassword" class="absolute right-3 top-10 -translate-y-1/2 text-gray-600">
              <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
              </svg>
              <svg id="eyeClosed" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a10.08 10.08 0 012.223-3.455" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 3l18 18" />
              </svg>
            </button>
          </div>

          <div>
            <button name="submit" type="submit" class="hover:scale-105 transition-all duration-200 w-full py-3 rounded-md text-white font-semibold btn-grad shadow">
              Masuk
            </button>
          </div>

          <div class="flex justify-center text-gray-500 text-sm underline">
            <a href="#">Lupa password?</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  {{-- Toggle password JS --}}
  <script>
    const toggle = document.getElementById('togglePassword');
    const password = document.getElementById('password');
    const eyeOpen = document.getElementById('eyeOpen');
    const eyeClosed = document.getElementById('eyeClosed');

    if (toggle) {
      toggle.addEventListener('click', () => {
        if (password.type === 'password') {
          password.type = 'text';
          eyeOpen.classList.add('hidden');
          eyeClosed.classList.remove('hidden');
        } else {
          password.type = 'password';
          eyeOpen.classList.remove('hidden');
          eyeClosed.classList.add('hidden');
        }
      });
    }
  </script>
</body>
</html>
