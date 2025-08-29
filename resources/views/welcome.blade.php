<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Travelling</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      safelist: [
        'opacity-100'
      ],
      theme: {
        extend: {
          fontFamily: {
            poppins: ["Poppins", "ui-sans-serif", "system-ui", "-apple-system", "Segoe UI", "Roboto", "Helvetica Neue", "Arial", "Noto Sans", "sans-serif"],
          },
        },
      },
    }
  </script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="relative bg-white font-poppins opacity-0 transition-opacity duration-700 ">

  <!-- Background Image Section -->
  <section class="relative bg-cover" style="background-image: url(/background.png);">
    <!-- Overlay (optional for better text contrast) -->
    <div class="absolute inset-0 bg-black/60"></div>

    <!-- Nav Bar -->
    <nav class="relative z-10 flex items-center justify-between w-full pl-12 pr-4 py-6 text-white">
      <a href="#" class="text-[64px] font-semibold tracking-wide shrink-0">.travelling</a>

      <ul class="hidden md:flex absolute left-1/2 -translate-x-1/2 items-center space-x-8 text-[20px] font-normal">
        <li><a href="#" class="hover:underline">Home</a></li>
        <li><a href="#" class="hover:underline">About</a></li>
        <li><a href="#" class="hover:underline">Offers</a></li>
        <li><a href="#" class="hover:underline">Our Contact</a></li>
      </ul>

      <div class="hidden md:flex space-x-6 text-sm shrink-0 pr-12">
        <a href="#" class="text-[24px] font-normal hover:underline">Login</a>
        <a href="#" class="text-[24px] font-normal hover:underline">Trip Now</a>
      </div>
    </nav>

    <!-- Main Content -->
    <div class="relative z-10 flex flex-col items-center justify-center h-[calc(100vh-72px)] max-w-4xl mx-auto px-6 text-white text-center -translate-y-6 md:-translate-y-8 ">
      <h1 class="text-[64px] font-normal leading-tight tracking-wide drop-shadow-md max-w-4xl">
        Start Your Journey Here.
      </h1>
      <button class="mt-6 bg-[#7FD9FD]/10 hover:bg-[#7FD9FD]/30 transition rounded-full px-5 py-2 sm:px-6 sm:py-2.5 md:px-8 md:py-3 text-sm md:text-base font-medium backdrop-blur-[1px] transition duration-700 ease-in-out">
        Find your best destination
      </button>
    </div>

    <!-- Bottom wave shape
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-[0] rotate-180" style="height: 112px;">
      <svg class="relative block w-full h-[112px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
        <path fill="#ffffff" fill-opacity="1" d="M0,96L48,90.7C96,85,192,75,288,74.7C384,75,480,85,576,96C672,107,768,117,864,122.7C960,128,1056,128,1152,117.3C1248,107,1344,85,1392,74.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
      </svg>
    </div> -->

  </section>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      document.body.classList.add('opacity-100');
    });
  </script>

</body>
</html>
