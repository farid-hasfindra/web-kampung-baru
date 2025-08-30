@extends('layouts.app')
@section('content')
<div class="max-w-6xl mx-auto py-10 px-4">
    <h1 class="text-4xl font-bold mb-8 text-gray-900 text-center">Potensi Desa</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="fade-up">
            <img src="https://images.unsplash.com/photo-1519864600265-abb23847ef2c?auto=format&fit=crop&w=600&q=80" alt="Kerajinan Tangan" class="w-full h-40 object-cover">
            <div class="p-6">
                <h2 class="text-lg font-bold text-blue-700 mb-2">Kerajinan Tangan</h2>
                <p class="text-gray-600">Produk anyaman bambu, rotan, dan kerajinan lokal yang menjadi kebanggaan desa.</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="100">
            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=600&q=80" alt="Aneka Olahan" class="w-full h-40 object-cover">
            <div class="p-6">
                <h2 class="text-lg font-bold text-green-700 mb-2">Aneka Olahan</h2>
                <p class="text-gray-600">Makanan khas desa seperti keripik singkong, dodol, dan olahan hasil pertanian.</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="200">
            <img src="https://images.unsplash.com/photo-1465101178521-c1a4c8a0f8f9?auto=format&fit=crop&w=600&q=80" alt="Wisata Alam" class="w-full h-40 object-cover">
            <div class="p-6">
                <h2 class="text-lg font-bold text-yellow-700 mb-2">Wisata Alam</h2>
                <p class="text-gray-600">Destinasi wisata alam seperti sungai, hutan, dan area camping yang menarik wisatawan.</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="300">
            <img src="https://images.unsplash.com/photo-1502086223501-7ea6ecd79368?auto=format&fit=crop&w=600&q=80" alt="UMKM Kreatif" class="w-full h-40 object-cover">
            <div class="p-6">
                <h2 class="text-lg font-bold text-purple-700 mb-2">UMKM Kreatif</h2>
                <p class="text-gray-600">Usaha mikro kreatif seperti sablon, konveksi, dan produk inovatif dari warga desa.</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="400">
            <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=600&q=80" alt="Pertanian" class="w-full h-40 object-cover">
            <div class="p-6">
                <h2 class="text-lg font-bold text-cyan-700 mb-2">Pertanian Unggulan</h2>
                <p class="text-gray-600">Hasil pertanian seperti padi, jagung, dan sayuran yang menjadi sumber ekonomi utama desa.</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="500">
            <img src="https://images.unsplash.com/photo-1500534314209-a25ddb2bd429?auto=format&fit=crop&w=600&q=80" alt="Peternakan" class="w-full h-40 object-cover">
            <div class="p-6">
                <h2 class="text-lg font-bold text-pink-700 mb-2">Peternakan</h2>
                <p class="text-gray-600">Usaha peternakan ayam, sapi, dan kambing yang dikelola oleh kelompok tani desa.</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="600">
            <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=600&q=80" alt="Budidaya Ikan" class="w-full h-40 object-cover">
            <div class="p-6">
                <h2 class="text-lg font-bold text-indigo-700 mb-2">Budidaya Ikan</h2>
                <p class="text-gray-600">Kolam ikan dan tambak yang menjadi sumber protein dan usaha warga desa.</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="700">
            <img src="https://images.unsplash.com/photo-1465101178521-c1a4c8a0f8f9?auto=format&fit=crop&w=600&q=80" alt="Wisata Edukasi" class="w-full h-40 object-cover">
            <div class="p-6">
                <h2 class="text-lg font-bold text-teal-700 mb-2">Wisata Edukasi</h2>
                <p class="text-gray-600">Wisata edukasi seperti taman baca, kebun edukasi, dan pelatihan keterampilan untuk anak-anak desa.</p>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
    });
</script>
@endsection