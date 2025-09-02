<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title', 'Online Travel')</title>

<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>
<script src="{{ asset('js/tailwind-config.js') }}"></script>

<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

<!-- Custom JavaScript -->
<script src="{{ asset('js/script.js') }}"></script>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">


<!-- Additional CSS/JS can be added here -->
@stack('additional-head')
