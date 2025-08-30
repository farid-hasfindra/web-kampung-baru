@extends('layouts.app')
@section('content')
<div class="max-w-6xl mx-auto py-10 px-4">
    <h1 class="text-4xl font-bold mb-8 text-gray-900 text-center">Galeri Kampung</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="zoom-in">
            <img src="https://images.unsplash.com/photo-1465101178521-c1a4c8a0f8f9?auto=format&fit=crop&w=600&q=80" alt="Kegiatan Gotong Royong" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-bold text-blue-700 mb-1">Kegiatan Gotong Royong</h2>
                <p class="text-gray-600 text-sm">Warga kampung bersama-sama membersihkan lingkungan.</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="zoom-in" data-aos-delay="100">
            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80" alt="Festival Budaya" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-bold text-green-700 mb-1">Festival Budaya</h2>
                <p class="text-gray-600 text-sm">Acara tahunan untuk melestarikan tradisi dan budaya kampung.</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="zoom-in" data-aos-delay="200">
            <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=600&q=80" alt="Wisata Alam" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-bold text-yellow-700 mb-1">Wisata Alam</h2>
                <p class="text-gray-600 text-sm">Keindahan sungai dan hutan di sekitar kampung.</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="zoom-in" data-aos-delay="300">
            <img src="https://images.unsplash.com/photo-1502086223501-7ea6ecd79368?auto=format&fit=crop&w=600&q=80" alt="Pelatihan UMKM" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-bold text-purple-700 mb-1">Pelatihan UMKM</h2>
                <p class="text-gray-600 text-sm">Warga mengikuti pelatihan usaha mikro untuk meningkatkan ekonomi.</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="zoom-in" data-aos-delay="400">
            <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=600&q=80" alt="Kegiatan Anak-anak" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-bold text-cyan-700 mb-1">Kegiatan Anak-anak</h2>
                <p class="text-gray-600 text-sm">Permainan tradisional dan edukasi untuk anak-anak kampung.</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="zoom-in" data-aos-delay="500">
            <img src="https://images.unsplash.com/photo-1500534314209-a25ddb2bd429?auto=format&fit=crop&w=600&q=80" alt="Panen Raya" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-bold text-pink-700 mb-1">Panen Raya</h2>
                <p class="text-gray-600 text-sm">Momen panen hasil pertanian yang dirayakan bersama warga.</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="zoom-in" data-aos-delay="600">
            <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=600&q=80" alt="Kerajinan Tangan" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-bold text-indigo-700 mb-1">Kerajinan Tangan</h2>
                <p class="text-gray-600 text-sm">Produk anyaman dan kerajinan lokal hasil karya warga kampung.</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="zoom-in" data-aos-delay="700">
            <img src="https://images.unsplash.com/photo-1465101178521-c1a4c8a0f8f9?auto=format&fit=crop&w=600&q=80" alt="Wisata Edukasi" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-bold text-teal-700 mb-1">Wisata Edukasi</h2>
                <p class="text-gray-600 text-sm">Kegiatan edukasi dan pelatihan keterampilan untuk warga kampung.</p>
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