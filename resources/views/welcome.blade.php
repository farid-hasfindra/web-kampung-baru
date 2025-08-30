<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kampung Tualang Timur</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 min-h-screen flex flex-col">
    <!-- Navbar -->
    <nav class="bg-white shadow-sm py-2 px-4 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <img src="{{ asset('images/logo/logo-siak.png') }}" alt="Logo" class="h-12 w-12 object-contain"
                style="max-width:3rem; max-height:3rem;">
            <div>
                <span class="font-bold text-lg text-gray-800 block leading-tight">Kampung Tualang Timur</span>
                <span class="text-xs text-gray-500">Kabupaten Siak</span>
            </div>
        </div>
        <ul class="hidden md:flex gap-6 text-base font-semibold text-gray-700">
            <li><a href="#" class="hover:text-blue-600 transition-colors duration-300 relative group">
                    Beranda
                    <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full"></span>
                </a></li>
            <li><a href="{{ route('layanan') }}" class="hover:text-blue-600 transition-colors duration-300 relative group">
                    Layanan Kampung
                    <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full"></span>
                </a></li>
            <li><a href="{{ route('berita') }}" class="hover:text-blue-600 transition-colors duration-300 relative group">
                    Berita
                    <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full"></span>
                </a></li>
            <li><a href="{{ route('perangkat') }}" class="hover:text-blue-600 transition-colors duration-300 relative group">
                    Perangkat Kampung
                    <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full"></span>
                </a></li>
            <li><a href="{{ route('potensi') }}" class="hover:text-blue-600 transition-colors duration-300 relative group">
                    Potensi Kampung
                    <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full"></span>
                </a></li>
            <li><a href="{{ route('galeri') }}" class="hover:text-blue-600 transition-colors duration-300 relative group">
                    Galeri
                    <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full"></span>
                </a></li>
            <li><a href="{{ route('tentang') }}" class="hover:text-blue-600 transition-colors duration-300 relative group">
                    Tentang Kampung
                    <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full"></span>
                </a></li>
        </ul>
        <div class="flex gap-2">
            <a href="{{ route('login') }}" class="bg-blue-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-blue-700 transition">Login Admin</a>
        </div>
    </nav>
    <!-- Hero Section -->
    <section class="relative py-16 px-4 md:px-0">
        <div class="absolute inset-0 w-full h-full">
            <img src="/images/kantor-desa.jpeg" alt="Kantor Desa" class="w-full h-full object-cover object-center opacity-70" />
        </div>
        <div class="relative z-10 max-w-3xl mx-auto flex flex-col items-center justify-center text-center py-16">
            <span class="inline-block bg-white bg-opacity-80 text-blue-600 px-4 py-2 rounded mb-4 font-medium text-lg shadow">Selamat Datang di Website Desa</span>
            <h1 class="text-4xl md:text-5xl font-bold mb-2 text-white drop-shadow">Kampung Tualang Timur</h1>
            <h2 class="text-xl md:text-2xl mb-6 font-medium text-white drop-shadow">Kabupaten Siak, Provinsi Riau</h2>
        </div>
    </section>
    <!-- Content Section -->
    <main class="flex-grow">
        <div class="max-w-6xl mx-auto px-4 py-8">
            @yield('content')
        </div>
    </main>
    <!-- Footer -->
    <footer class="bg-white py-4">
        <div class="max-w-6xl mx-auto px-4">
            <div class="border-t border-gray-200 pt-4">
                <p class="text-center text-sm text-gray-500">&copy; 2023 Kampung Tualang Timur. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
        });
    </script>
</body>

</html>