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
    <!-- Kepala Desa Section -->
    <section class="max-w-5xl mx-auto px-4 py-12 flex flex-col md:flex-row items-center gap-8" data-aos="fade-up">
        <img src="/images/kepala-desa.jpg" alt="Kepala Desa" class="w-40 h-40 rounded-full shadow-lg object-cover border-4 border-blue-600 hover:scale-105 transition-transform duration-300">
        <div class="flex-1">
            <h3 class="text-2xl font-bold text-blue-700 mb-2">Kepala Desa</h3>
            <p class="text-lg font-semibold text-gray-800 mb-1">Bapak Suryadi, S.Pd</p>
            <p class="text-gray-600 mb-4">"Mari bersama membangun Kampung Tualang Timur yang maju, sejahtera, dan berbudaya!"</p>
            <div class="flex gap-4">
                <a href="https://wa.me/6281234567890" target="_blank" class="bg-green-500 text-white px-4 py-2 rounded font-semibold shadow hover:bg-green-600 transition flex items-center gap-2">
                    <img src="https://img.icons8.com/color/24/000000/whatsapp.png" alt="WA"> WhatsApp
                </a>
                <a href="mailto:kepaladesa@email.com" class="bg-blue-500 text-white px-4 py-2 rounded font-semibold shadow hover:bg-blue-600 transition">Email</a>
            </div>
        </div>
    </section>
    <!-- Fitur Section -->
    <section class="max-w-6xl mx-auto px-4 py-12 grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col items-center transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="zoom-in">
            <img src="/images/fitur-layanan.png" alt="Layanan" class="w-16 h-16 mb-4">
            <h4 class="text-xl font-bold text-blue-600 mb-2">Layanan Kampung</h4>
            <p class="text-gray-600 text-center mb-4">Pengaduan, aspirasi, surat, dan darurat online.</p>
            <a href="{{ route('layanan') }}" class="bg-blue-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-blue-700 transition transform hover:scale-105">Lihat Layanan</a>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col items-center transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="zoom-in" data-aos-delay="100">
            <img src="/images/fitur-berita.png" alt="Berita" class="w-16 h-16 mb-4">
            <h4 class="text-xl font-bold text-yellow-600 mb-2">Berita Kampung</h4>
            <p class="text-gray-600 text-center mb-4">Informasi dan berita terbaru seputar kampung.</p>
            <a href="{{ route('berita') }}" class="bg-yellow-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-yellow-700 transition transform hover:scale-105">Lihat Berita</a>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col items-center transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="zoom-in" data-aos-delay="200">
            <img src="/images/fitur-galeri.png" alt="Galeri" class="w-16 h-16 mb-4">
            <h4 class="text-xl font-bold text-pink-600 mb-2">Galeri Kampung</h4>
            <p class="text-gray-600 text-center mb-4">Foto dan dokumentasi kegiatan kampung.</p>
            <a href="{{ route('galeri') }}" class="bg-pink-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-pink-700 transition transform hover:scale-105">Lihat Galeri</a>
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