@extends('admin.layout')
@section('content')
<div class="min-h-screen bg-gray-50 flex flex-col items-center justify-center">
    <div class="max-w-5xl w-full mx-auto p-8 bg-white rounded-2xl shadow-2xl" data-aos="fade-up">
        <h1 class="text-3xl font-bold text-center mb-8 text-blue-700">Kelola Konten Website Kampung</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <a href="{{ route('admin.layanan') }}" class="bg-blue-50 hover:bg-blue-100 rounded-xl shadow-lg p-6 flex flex-col items-center transition-transform duration-300 hover:-translate-y-2" data-aos="fade-up">
                <span class="material-icons text-4xl text-blue-600 mb-2">support_agent</span>
                <div class="font-bold text-lg mb-1">Layanan Kampung</div>
                <div class="text-gray-600 text-center mb-2">Kelola pengaduan, aspirasi, surat, dan darurat.</div>
                <span class="bg-blue-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-blue-700 transition">Kelola</span>
            </a>
            <a href="{{ route('admin.berita') }}" class="bg-yellow-50 hover:bg-yellow-100 rounded-xl shadow-lg p-6 flex flex-col items-center transition-transform duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                <span class="material-icons text-4xl text-yellow-600 mb-2">article</span>
                <div class="font-bold text-lg mb-1">Berita</div>
                <div class="text-gray-600 text-center mb-2">Kelola seluruh berita kampung.</div>
                <span class="bg-yellow-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-yellow-700 transition">Kelola</span>
            </a>
            <a href="{{ route('admin.perangkat') }}" class="bg-green-50 hover:bg-green-100 rounded-xl shadow-lg p-6 flex flex-col items-center transition-transform duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                <span class="material-icons text-4xl text-green-600 mb-2">groups</span>
                <div class="font-bold text-lg mb-1">Perangkat Kampung</div>
                <div class="text-gray-600 text-center mb-2">Kelola data perangkat kampung.</div>
                <span class="bg-green-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-green-700 transition">Kelola</span>
            </a>
            <a href="{{ route('potensi.index') }}" class="bg-indigo-50 hover:bg-indigo-100 rounded-xl shadow-lg p-6 flex flex-col items-center transition-transform duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="300">
                <span class="material-icons text-4xl text-indigo-600 mb-2">landscape</span>
                <div class="font-bold text-lg mb-1">Potensi Kampung</div>
                <div class="text-gray-600 text-center mb-2">Kelola potensi dan sumber daya kampung.</div>
                <span class="bg-indigo-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-indigo-700 transition">Kelola</span>
            </a>
            <a href="{{ route('admin.galeri.index') }}" class="bg-pink-50 hover:bg-pink-100 rounded-xl shadow-lg p-6 flex flex-col items-center transition-transform duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="400">
                <span class="material-icons text-4xl text-pink-600 mb-2">photo_library</span>
                <div class="font-bold text-lg mb-1">Galeri</div>
                <div class="text-gray-600 text-center mb-2">Kelola foto dan dokumentasi kampung.</div>
                <span class="bg-pink-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-pink-700 transition">Kelola</span>
            </a>
            <a href="{{ route('admin.tentang') }}" class="bg-gray-100 hover:bg-gray-200 rounded-xl shadow-lg p-6 flex flex-col items-center transition-transform duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="500">
                <span class="material-icons text-4xl text-gray-600 mb-2">info</span>
                <div class="font-bold text-lg mb-1">Tentang Kampung</div>
                <div class="text-gray-600 text-center mb-2">Kelola profil dan informasi kampung.</div>
                <span class="bg-gray-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-gray-700 transition">Kelola</span>
            </a>
        </div>
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