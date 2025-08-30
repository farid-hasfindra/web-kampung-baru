@extends('admin.layout')
@section('content')
<div class="max-w-4xl mx-auto py-10 px-4">
    <h1 class="text-3xl font-bold mb-8 text-blue-700 text-center" data-aos="fade-down">Kelola Layanan Kampung</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <a href="{{ route('admin.layanan.pengaduan') }}" class="bg-blue-50 hover:bg-blue-100 rounded-xl shadow-lg p-6 flex flex-col items-center transition-transform duration-300 hover:-translate-y-2" data-aos="fade-up">
            <span class="material-icons text-3xl text-blue-600 mb-2">support_agent</span>
            <div class="font-bold text-lg mb-1">Pengaduan Masyarakat</div>
            <span class="bg-blue-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-blue-700 transition">Kelola Pengaduan</span>
        </a>
        <a href="{{ route('admin.layanan.aspirasi') }}" class="bg-yellow-50 hover:bg-yellow-100 rounded-xl shadow-lg p-6 flex flex-col items-center transition-transform duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
            <span class="material-icons text-3xl text-yellow-600 mb-2">lightbulb</span>
            <div class="font-bold text-lg mb-1">Aspirasi & Saran</div>
            <span class="bg-yellow-500 text-white px-4 py-2 rounded font-semibold shadow hover:bg-yellow-600 transition">Kelola Aspirasi</span>
        </a>
        <a href="{{ route('admin.layanan.surat') }}" class="bg-green-50 hover:bg-green-100 rounded-xl shadow-lg p-6 flex flex-col items-center transition-transform duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
            <span class="material-icons text-3xl text-green-600 mb-2">description</span>
            <div class="font-bold text-lg mb-1">Pembuatan Surat</div>
            <span class="bg-green-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-green-700 transition">Kelola Surat</span>
        </a>
        <a href="{{ route('admin.layanan.darurat') }}" class="bg-red-50 hover:bg-red-100 rounded-xl shadow-lg p-6 flex flex-col items-center transition-transform duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="300">
            <span class="material-icons text-3xl text-red-600 mb-2">local_fire_department</span>
            <div class="font-bold text-lg mb-1">Layanan Darurat</div>
            <span class="bg-red-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-red-700 transition">Kelola Darurat</span>
        </a>
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