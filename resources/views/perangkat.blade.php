@extends('layouts.app')
@section('content')
<div class="max-w-6xl mx-auto py-10 px-4">
    <h1 class="text-4xl font-bold mb-8 text-gray-900 text-center">Perangkat Desa</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        <!-- Card perangkat desa -->
        <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="fade-up">
            <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Kepala Desa" class="w-24 h-24 rounded-full mb-4 object-cover">
            <h2 class="text-lg font-bold text-blue-700 mb-1">Budi Santoso</h2>
            <span class="text-sm text-gray-600">Kepala Desa</span>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="50">
            <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="Sekretaris Desa" class="w-24 h-24 rounded-full mb-4 object-cover">
            <h2 class="text-lg font-bold text-green-700 mb-1">Andi Pratama</h2>
            <span class="text-sm text-gray-600">Sekretaris Desa</span>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="100">
            <img src="https://randomuser.me/api/portraits/women/3.jpg" alt="Bendahara" class="w-24 h-24 rounded-full mb-4 object-cover">
            <h2 class="text-lg font-bold text-yellow-700 mb-1">Siti Aminah</h2>
            <span class="text-sm text-gray-600">Bendahara</span>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="150">
            <img src="https://randomuser.me/api/portraits/men/4.jpg" alt="Kasi Pemerintahan" class="w-24 h-24 rounded-full mb-4 object-cover">
            <h2 class="text-lg font-bold text-red-700 mb-1">Rudi Hartono</h2>
            <span class="text-sm text-gray-600">Kasi Pemerintahan</span>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="200">
            <img src="https://randomuser.me/api/portraits/women/5.jpg" alt="Kasi Kesejahteraan" class="w-24 h-24 rounded-full mb-4 object-cover">
            <h2 class="text-lg font-bold text-purple-700 mb-1">Dewi Lestari</h2>
            <span class="text-sm text-gray-600">Kasi Kesejahteraan</span>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="250">
            <img src="https://randomuser.me/api/portraits/men/6.jpg" alt="Kasi Pelayanan" class="w-24 h-24 rounded-full mb-4 object-cover">
            <h2 class="text-lg font-bold text-cyan-700 mb-1">Fajar Nugroho</h2>
            <span class="text-sm text-gray-600">Kasi Pelayanan</span>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="300">
            <img src="https://randomuser.me/api/portraits/women/7.jpg" alt="Kaur Umum" class="w-24 h-24 rounded-full mb-4 object-cover">
            <h2 class="text-lg font-bold text-pink-700 mb-1">Maya Sari</h2>
            <span class="text-sm text-gray-600">Kaur Umum</span>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="350">
            <img src="https://randomuser.me/api/portraits/men/8.jpg" alt="Kaur Keuangan" class="w-24 h-24 rounded-full mb-4 object-cover">
            <h2 class="text-lg font-bold text-indigo-700 mb-1">Agus Salim</h2>
            <span class="text-sm text-gray-600">Kaur Keuangan</span>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="400">
            <img src="https://randomuser.me/api/portraits/women/9.jpg" alt="Kaur Perencanaan" class="w-24 h-24 rounded-full mb-4 object-cover">
            <h2 class="text-lg font-bold text-teal-700 mb-1">Rina Wulandari</h2>
            <span class="text-sm text-gray-600">Kaur Perencanaan</span>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="450">
            <img src="https://randomuser.me/api/portraits/men/10.jpg" alt="Staf Desa" class="w-24 h-24 rounded-full mb-4 object-cover">
            <h2 class="text-lg font-bold text-gray-700 mb-1">Deni Saputra</h2>
            <span class="text-sm text-gray-600">Staf Desa</span>
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