<!DOCTYPE html>
<html lang="id">

<head>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .nav-anim {
            position: relative;
            transition: color 0.3s;
            padding-bottom: 4px;
        }

        .nav-anim::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0;
            height: 2px;
            background: #38bdf8;
            transition: width 0.3s cubic-bezier(.4, 0, .2, 1);
            border-radius: 2px;
        }

        .nav-anim:hover {
            color: #38bdf8;
        }

        .nav-anim:hover::after {
            width: 100%;
        }
    </style>
    <!-- Footer -->
    {{-- <footer class="bg-blue-600 text-white py-6 mt-10">
        <div class="max-w-5xl mx-auto flex flex-col md:flex-row justify-between items-center px-4">
            <div class="mb-2 md:mb-0">
                <span class="font-bold text-lg">Kampung Tualang Timur</span> <br>
                <span class="text-sm">Kabupaten Siak, Provinsi Riau</span>
            </div>
            <div class="flex gap-4">
                <a href="{{ route('beranda') }}" class="hover:text-blue-200 transition">Beranda</a>
    <a href="{{ route('tentang') }}" class="hover:text-blue-200 transition">Tentang Desa</a>
    <a href="#" class="hover:text-blue-200 transition">Kontak</a>
    </div>
    <div class="text-sm mt-2 md:mt-0">&copy; 2025 Desa Sei Lala. All rights reserved.</div>
    </div>
    </footer> --}}
    <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kampung Tualang Timur</title>
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
    <nav class="bg-green-800 shadow-sm py-6 px-4 flex items-center justify-around">
        <div class="flex items-center gap-3">
            <img src="{{ asset('images/logo/logo-siak.png') }}" alt="Logo" class="h-12 w-12 object-contain"
                style="max-width:3rem; max-height:3rem;">
            <div>
                <span class="font-bold text-lg text-white block leading-tight">Kampung Tualang Timur</span>
                <span class="text-xs text-gray-200">Kabupaten Siak</span>
            </div>
        </div>
        <!-- Hamburger menu for mobile -->
        <button id="mobile-menu-btn" class="md:hidden text-white focus:outline-none" aria-label="Menu">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <ul class="hidden md:flex gap-6 text-lg text-white">
            <li><a href="{{ route('beranda') }}" class="nav-anim">Beranda</a></li>
            <li><a href="{{ route('layanan') }}" class="nav-anim">Layanan Kampung</a></li>
            <li><a href="{{ route('berita') }}" class="nav-anim">Berita</a></li>
            <li><a href="{{ route('perangkat') }}" class="nav-anim">Perangkat Kampung</a></li>
            <li><a href="{{ route('potensi') }}" class="nav-anim">Potensi Kampung</a></li>
            <li><a href="{{ route('galeri') }}" class="nav-anim">Galeri</a></li>
            <li><a href="{{ route('tentang') }}" class="nav-anim">Tentang Kampung</a></li>
        </ul>
        <!-- Mobile menu dropdown -->
        <div id="mobile-menu" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-80 z-50 flex flex-col items-center justify-center text-white text-xl gap-8 hidden md:hidden">
            <button id="close-mobile-menu" class="absolute top-6 right-6 text-white text-3xl">&times;</button>
            <a href="{{ route('beranda') }}" class="nav-anim">Beranda</a>
            <a href="{{ route('layanan') }}" class="nav-anim">Layanan Kampung</a>
            <a href="{{ route('berita') }}" class="nav-anim">Berita</a>
            <a href="{{ route('perangkat') }}" class="nav-anim">Perangkat Kampung</a>
            <a href="{{ route('potensi') }}" class="nav-anim">Potensi Kampung</a>
            <a href="{{ route('galeri') }}" class="nav-anim">Galeri</a>
            <a href="{{ route('tentang') }}" class="nav-anim">Tentang Kampung</a>
        </div>
    </nav>
    <main class="flex-1">
        @yield('content')
        <!-- Tombol Pengaduan di pojok kanan bawah, hanya tampil jika bukan di halaman pengaduan -->
        @if (!Request::is('pengaduan'))
        <a href="{{ url('/pengaduan') }}" class="pengaduan-btn flex items-center gap-2" title="Pengaduan">
            <span class="inline-block" style="width:22px;height:22px;">
                <!-- Ikon chat/bubble SVG -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="22" height="22">
                    <path d="M21 2H3a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h4v4l5.333-4H21a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zm0 14H12.667L9 19.333V17H3V3h18v13z" />
                </svg>
            </span>
            <span>Pengaduan</span>
        </a>
        <style>
            .pengaduan-btn {
                position: fixed;
                right: 32px;
                bottom: 32px;
                z-index: 9999;
                background: red;
                color: #fff;
                padding: 14px 28px;
                border-radius: 32px;
                font-weight: bold;
                box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12);
                text-decoration: none;
                transition: transform 0.2s, box-shadow 0.2s, background 0.2s;
                font-size: 1.1rem;
            }

            .pengaduan-btn:hover {
                transform: scale(1.08) translateY(-4px);
                box-shadow: 0 8px 24px rgba(22, 163, 74, 0.18);
                background: #8B0000;
            }
        </style>
        @endif
        <script>
            // Mobile menu toggle
            document.addEventListener('DOMContentLoaded', function() {
                var mobileMenuBtn = document.getElementById('mobile-menu-btn');
                var mobileMenu = document.getElementById('mobile-menu');
                var closeMobileMenu = document.getElementById('close-mobile-menu');
                if (mobileMenuBtn && mobileMenu && closeMobileMenu) {
                    mobileMenuBtn.addEventListener('click', function() {
                        mobileMenu.classList.remove('hidden');
                    });
                    closeMobileMenu.addEventListener('click', function() {
                        mobileMenu.classList.add('hidden');
                    });
                    // Hide menu when clicking outside
                    mobileMenu.addEventListener('click', function(e) {
                        if (e.target === mobileMenu) {
                            mobileMenu.classList.add('hidden');
                        }
                    });
                }
            });
        </script>
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