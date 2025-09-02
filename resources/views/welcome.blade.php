<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
    <nav class="fixed w-full top-0 left-0 z-20 py-6 flex items-center justify-around">
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
    </nav>
    <!-- Hero Section -->
    <section class="relative w-full min-h-screen flex items-center justify-center mt-0">
        <div class="absolute inset-0 w-full h-full">
            <img src="/images/kantor-desa.jpg" alt="Kantor Desa" class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        </div>
        <div class="relative z-10 w-full flex flex-col items-center justify-center text-center py-20">
            <span class="inline-block bg-white text-green-800 px-4 py-2 rounded-full mb-4 font-bold text-lg shadow" data-aos="fade-down" data-aos-duration="1000">Selamat Datang di Website</span>
            <h1 class="text-4xl md:text-5xl font-bold mb-2 text-white drop-shadow-lg" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1200">Kampung Tualang Timur</h1>
            <h2 class="text-xl md:text-2xl mb-6 font-medium text-white drop-shadow-lg" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1400">Kabupaten Siak, Provinsi Riau</h2>
        </div>
    </section>

    <!-- ...existing code... -->
    <!-- Informasi Berita Terbaru -->
    <section class="w-full py-16 relative" id="berita" style="background: linear-gradient(135deg, #cfe2ff 0%, #e3f0ff 100%);">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center" data-aos="fade-up">Berita Kampung</h2>
            <div class="grid md:grid-cols-3 gap-8 relative z-10">
                @foreach($beritas as $berita)
                <a href="{{ route('berita.detail', $berita->id) }}" class="block bg-blue-50 rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl border border-blue-100" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2 text-black-700">{{ $berita->judul }}</h3>
                        <p class="text-gray-500 text-sm mb-2">{{ $berita->created_at->format('d M Y') }}</p>
                        <p class="text-gray-700 mb-2">{{ Str::limit($berita->isi, 100) }}</p>
                        <span class="text-blue-600 font-semibold mt-2 inline-block hover:underline">Baca Selengkapnya</span>
                    </div>
                </a>
                @endforeach
            </div>
            <!-- Hiasan SVG sudut kanan bawah -->
            <svg width="140" height="140" style="position: absolute; bottom: 0; right: 0; z-index: 1;" viewBox="0 0 140 140" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="120" cy="120" r="20" fill="#b3d8ff" fill-opacity="0.5" />
                <circle cx="100" cy="130" r="10" fill="#90caf9" fill-opacity="0.4" />
                <rect x="110" y="110" width="15" height="15" rx="4" fill="#e3f0ff" fill-opacity="0.7" />
                <path d="M130 130 Q120 110 140 110" stroke="#90caf9" stroke-width="2" fill="none" />
            </svg>
        </div>
    </section>

    <!-- Jumlah Penduduk Kampung -->
    <section class="w-full py-12 bg-green-50" id="penduduk">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center" data-aos="fade-up">Administasi Penduduk</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white rounded-xl shadow-lg p-8 text-center flex flex-col justify-center" data-aos="fade-up">
                    <h2 class="text-2xl font-bold mb-4 text-green-700">Jumlah Penduduk Kampung</h2>
                    @if($penduduk)
                    <p class="text-4xl font-extrabold text-green-800 mb-2">{{ number_format($penduduk->jumlah) }} Jiwa</p>
                    <p class="text-gray-600">Tahun: {{ $penduduk->tahun }}</p>
                    @else
                    <p class="text-gray-500">Data jumlah penduduk belum tersedia.</p>
                    @endif
                </div>
                <div class="bg-white rounded-xl shadow-lg p-8 text-center flex flex-col justify-center" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="text-2xl font-bold mb-4 text-blue-700">Jumlah Kepala Keluarga</h2>
                    @if($kepala_keluarga)
                    <p class="text-4xl font-extrabold text-blue-800 mb-2">{{ number_format($kepala_keluarga->jumlah) }} KK</p>
                    <p class="text-gray-600">Tahun: {{ $kepala_keluarga->tahun }}</p>
                    @else
                    <p class="text-gray-500">Data jumlah kepala keluarga belum tersedia.</p>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Potensi Kampung -->
    <section class="w-full py-16 bg-gray-50" id="potensi">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center" data-aos="fade-up">Potensi Kampung</h2>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach($potensis as $potensi)
                <a href="{{ route('potensi.show', $potensi->id) }}" class="block bg-gray-50 rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('storage/' . $potensi->gambar) }}" alt="{{ $potensi->judul }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2">{{ $potensi->judul }}</h3>
                        <p class="text-gray-600 text-sm mb-2">{{ $potensi->created_at->format('d M Y') }}</p>
                        <p class="text-gray-700">{{ Str::limit($potensi->isi, 100) }}</p>
                    </div>
                    <h3 class="font-bold text-xl mb-2 text-black-700">{{ $potensi->nama }}</h3>
                    <span class="text-blue-600 font-semibold mt-2 inline-block hover:underline">Baca Selengkapnya</span>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Galeri Kampung -->
    <section class="w-full py-16 bg-white" id="galeri">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center" data-aos="fade-up">Galeri Kampung</h2>
            <div class="grid md:grid-cols-4 gap-6">
                @foreach($galeris as $galeri)
                <a href="{{ route('galeri.show', $galeri->id) }}" class="p-8 block rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition" data-aos="zoom-in-up" data-aos-delay="200">
                    <img src="{{ asset('storage/' . $galeri->gambar) }}" alt="{{ $galeri->judul }}" class="w-full h-40 object-cover">
                    <h2 class="text-lg font-bold text-blue-700 mb-1 pt-2">{{ $galeri->judul }}</h2>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
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
    </main>
</body>

</html>