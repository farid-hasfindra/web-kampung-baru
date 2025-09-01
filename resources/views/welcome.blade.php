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
    <nav class="fixed w-full top-0 left-0 z-20 py-6 px-4 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <img src="{{ asset('images/logo/logo-siak.png') }}" alt="Logo" class="h-12 w-12 object-contain" style="max-width:3rem; max-height:3rem;">
            <div>
                <span class="font-bold text-lg text-white block leading-tight">Kampung Tualang Timur</span>
                <span class="text-xs text-gray-200">Kabupaten Siak</span>
            </div>
        </div>
        <ul class="hidden md:flex gap-6 text-base font-semibold text-white">
            <li><a href="#" class="hover:text-blue-300 transition-colors duration-300 relative group">Beranda</a></li>
            <li><a href="{{ route('layanan') }}" class="hover:text-blue-300 transition-colors duration-300 relative group">Layanan Kampung</a></li>
            <li><a href="{{ route('berita') }}" class="hover:text-blue-300 transition-colors duration-300 relative group">Berita</a></li>
            <li><a href="{{ route('perangkat') }}" class="hover:text-blue-300 transition-colors duration-300 relative group">Perangkat Kampung</a></li>
            <li><a href="{{ route('potensi') }}" class="hover:text-blue-300 transition-colors duration-300 relative group">Potensi Kampung</a></li>
            <li><a href="{{ route('galeri') }}" class="hover:text-blue-300 transition-colors duration-300 relative group">Galeri</a></li>
            <li><a href="{{ route('tentang') }}" class="hover:text-blue-300 transition-colors duration-300 relative group">Tentang Kampung</a></li>
        </ul>
        <div class="flex gap-2">
            <a href="{{ route('login') }}" class="bg-green-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-red-900 transition">Login Admin</a>
        </div>
    </nav>
    <!-- Hero Section -->
    <section class="relative w-full min-h-screen flex items-center justify-center">
        <div class="absolute inset-0 w-full h-full">
            <img src="/images/kantor-desa.jpg" alt="Kantor Desa" class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        </div>
        <div class="relative z-10 w-full flex flex-col items-center justify-center text-center py-20">
            <span class="inline-block bg-white text-green-760 px-4 py-2 rounded-full mb-4 font-bold text-lg shadow">Selamat Datang di Website</span>
            <h1 class="text-4xl md:text-5xl font-bold mb-2 text-white drop-shadow-lg">Kampung Tualang Timur</h1>
            <h2 class="text-xl md:text-2xl mb-6 font-medium text-white drop-shadow-lg">Kabupaten Siak, Provinsi Riau</h2>
        </div>
    </section>