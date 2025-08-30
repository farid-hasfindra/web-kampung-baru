<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desa Sei Lala</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>

<body class="bg-white text-gray-900 min-h-screen flex flex-col">
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
            <li><a href="{{ route('beranda') }}" class="hover:text-blue-600 transition-colors duration-300 relative group">
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
    <main class="flex-1">
        @yield('content')
    </main>
    <!-- Footer -->
    {{-- <footer class="bg-blue-600 text-white py-6 mt-10">
        <div class="max-w-5xl mx-auto flex flex-col md:flex-row justify-between items-center px-4">
            <div class="mb-2 md:mb-0">
                <span class="font-bold text-lg">Desa Sei Lala</span> <br>
                <span class="text-sm">Kabupaten Indragiri Hulu, Riau</span>
            </div>
            <div class="flex gap-4">
                <a href="{{ route('beranda') }}" class="hover:text-blue-200 transition">Beranda</a>
    <a href="{{ route('tentang') }}" class="hover:text-blue-200 transition">Tentang Desa</a>
    <a href="#" class="hover:text-blue-200 transition">Kontak</a>
    </div>
    <div class="text-sm mt-2 md:mt-0">&copy; 2025 Desa Sei Lala. All rights reserved.</div>
    </div>
    </footer> --}}
</body>

</html>