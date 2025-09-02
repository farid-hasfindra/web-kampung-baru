@extends('admin.layout')
@section('content')
<div class="p-8">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Dashboard Admin</h1>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-blue-600 text-white rounded-xl p-6 shadow-lg flex flex-col items-center transform transition duration-300 hover:scale-105 hover:shadow-2xl" data-aos="fade-up">
            <span class="material-icons text-4xl mb-2 animate-bounce">report</span>
            <div class="text-2xl font-bold mb-2">Pengaduan</div>
            <div class="text-4xl font-bold mb-1">{{ $pengaduanCount ?? 0 }}</div>
            <div class="text-sm">{{ $pengaduanToday ?? 0 }} hari ini</div>
        </div>
        <div class="bg-purple-600 text-white rounded-xl p-6 shadow-lg flex flex-col items-center transform transition duration-300 hover:scale-105 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="100">
            <span class="material-icons text-4xl mb-2 animate-bounce">campaign</span>
            <div class="text-2xl font-bold mb-2">Aspirasi</div>
            <div class="text-4xl font-bold mb-1">{{ $aspirasiCount ?? 0 }}</div>
            <div class="text-sm">{{ $aspirasiToday ?? 0 }} hari ini</div>
        </div>
        <div class="bg-yellow-500 text-white rounded-xl p-6 shadow-lg flex flex-col items-center transform transition duration-300 hover:scale-105 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="200">
            <span class="material-icons text-4xl mb-2 animate-bounce">article</span>
            <div class="text-2xl font-bold mb-2">Berita</div>
            <div class="text-4xl font-bold mb-1">{{ $beritaCount ?? 0 }}</div>
            <div class="text-sm">{{ $beritaToday ?? 0 }} hari ini</div>
        </div>
        <div class="bg-green-600 text-white rounded-xl p-6 shadow-lg flex flex-col items-center transform transition duration-300 hover:scale-105 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="300">
            <span class="material-icons text-4xl mb-2 animate-bounce">groups</span>
            <div class="text-2xl font-bold mb-2">Perangkat</div>
            <div class="text-4xl font-bold mb-1">{{ $perangkatCount ?? 0 }}</div>
            <div class="text-sm">{{ $perangkatToday ?? 0 }} hari ini</div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <div class="bg-indigo-600 text-white rounded-xl p-6 shadow-lg flex flex-col items-center transform transition duration-300 hover:scale-105 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="400">
            <span class="material-icons text-4xl mb-2 animate-bounce">landscape</span>
            <div class="text-2xl font-bold mb-2">Potensi</div>
            <div class="text-4xl font-bold mb-1">{{ $potensiCount ?? 0 }}</div>
            <div class="text-sm">{{ $potensiToday ?? 0 }} hari ini</div>
        </div>
        <div class="bg-pink-600 text-white rounded-xl p-6 shadow-lg flex flex-col items-center transform transition duration-300 hover:scale-105 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="500">
            <span class="material-icons text-4xl mb-2 animate-bounce">photo_library</span>
            <div class="text-2xl font-bold mb-2">Galeri</div>
            <div class="text-4xl font-bold mb-1">{{ $galeriCount ?? 0 }}</div>
            <div class="text-sm">{{ $galeriToday ?? 0 }} hari ini</div>
        </div>
    </div>
    <div class="bg-white rounded-xl shadow-lg p-6 mt-8 transition duration-300 hover:shadow-2xl" data-aos="fade-up">
        <h2 class="text-xl font-bold mb-4">Pengaduan Terbaru</h2>
        <table class="w-full text-left">
            <thead>
                <tr class="text-gray-600 border-b">
                    <th class="py-2">Nama</th>
                    <th class="py-2">Isi</th>
                    <th class="py-2">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pengaduanLatest ?? [] as $pengaduan)
                <tr class="border-b hover:bg-blue-50 transition-all duration-300">
                    <td class="py-2">{{ $pengaduan->nama }}</td>
                    <td class="py-2">{{ $pengaduan->isi }}</td>
                    <td class="py-2">{{ $pengaduan->created_at->format('d M Y H:i') }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="py-4 text-center text-gray-400">Belum ada data pengaduan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="bg-white rounded-xl shadow-lg p-6 mt-8 transition duration-300 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="100">
        <h2 class="text-xl font-bold mb-4">Aspirasi Terbaru</h2>
        <table class="w-full text-left">
            <thead>
                <tr class="text-gray-600 border-b">
                    <th class="py-2">Nama</th>
                    <th class="py-2">Isi</th>
                    <th class="py-2">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @forelse($aspirasiLatest ?? [] as $aspirasi)
                <tr class="border-b hover:bg-purple-50 transition-all duration-300">
                    <td class="py-2">{{ $aspirasi->nama }}</td>
                    <td class="py-2">{{ $aspirasi->isi }}</td>
                    <td class="py-2">{{ $aspirasi->created_at->format('d M Y H:i') }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="py-4 text-center text-gray-400">Belum ada data aspirasi.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script>
    AOS.init({
        duration: 1000,
        once: true,
    });
</script>
@endsection