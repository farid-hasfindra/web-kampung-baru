@extends('layouts.app')
@section('content')
<div class="max-w-5xl mx-auto py-10 px-4">
    <h1 class="text-4xl font-bold mb-6 text-gray-900 text-center">Berita Desa</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="fade-up">
            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80" alt="Berita 1" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-xl font-semibold mb-2 text-blue-600">Pembangunan Jalan Baru</h2>
                <p class="text-gray-600 mb-4">Pemerintah desa memulai pembangunan jalan baru untuk meningkatkan akses warga ke pusat desa.</p>
                <span class="text-xs text-gray-400">28 Agustus 2025</span>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="100">
            <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=600&q=80" alt="Berita 2" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-xl font-semibold mb-2 text-green-600">Pelatihan UMKM</h2>
                <p class="text-gray-600 mb-4">Warga desa mengikuti pelatihan UMKM untuk meningkatkan keterampilan dan perekonomian lokal.</p>
                <span class="text-xs text-gray-400">25 Agustus 2025</span>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="200">
            <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=600&q=80" alt="Berita 3" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-xl font-semibold mb-2 text-yellow-600">Festival Budaya Desa</h2>
                <p class="text-gray-600 mb-4">Desa mengadakan festival budaya tahunan untuk melestarikan tradisi dan mempererat silaturahmi warga.</p>
                <span class="text-xs text-gray-400">20 Agustus 2025</span>
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