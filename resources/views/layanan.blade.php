@extends('layouts.app')
@section('content')
<div class="max-w-5xl mx-auto py-10 px-4">
    <h1 class="text-4xl font-bold mb-6 text-gray-900 text-center">Layanan Kampung</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col items-center transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="fade-up">
            <img src="https://img.icons8.com/fluency/64/000000/complaint.png" class="mb-4" alt="Pengaduan" />
            <h2 class="text-xl font-semibold mb-2 text-blue-600">Pengaduan Masyarakat</h2>
            <p class="text-gray-600 text-center mb-4">Laporkan masalah atau keluhan Anda secara online dengan mudah dan cepat.</p>
            <a href="{{ route('pengaduan.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-blue-700 transition">Ajukan Pengaduan</a>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col items-center transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="100">
            <img src="https://img.icons8.com/fluency/64/000000/document.png" class="mb-4" alt="Surat" />
            <h2 class="text-xl font-semibold mb-2 text-green-600">Pembuatan Surat</h2>
            <p class="text-gray-600 text-center mb-4">Ajukan permohonan surat keterangan, domisili, dan lainnya secara online.</p>
            <a href="#" onclick="event.preventDefault(); showSuratNotif();" class="bg-green-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-green-700 transition">Buat Surat</a>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col items-center transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="200">
            <img src="https://img.icons8.com/fluency/64/000000/idea.png" class="mb-4" alt="Aspirasi" />
            <h2 class="text-xl font-semibold mb-2 text-yellow-600">Layanan Aspirasi & Saran</h2>
            <p class="text-gray-600 text-center mb-4">Sampaikan aspirasi, ide, dan saran Anda untuk kemajuan kampung.</p>
            <a href="{{ route('aspirasi.create') }}" class="bg-yellow-500 text-white px-4 py-2 rounded font-semibold shadow hover:bg-yellow-600 transition">Kirim Aspirasi</a>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col items-center transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="300">
            <img src="https://img.icons8.com/fluency/64/000000/emergency.png" class="mb-4" alt="Darurat" />
            <h2 class="text-xl font-semibold mb-2 text-red-600">Layanan Darurat</h2>
            <p class="text-gray-600 text-center mb-4">Informasi kontak darurat: pemadam, polisi, rumah sakit terdekat.</p>
            <a href="{{ route('darurat') }}" class="bg-red-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-red-700 transition">Lihat Kontak Darurat</a>
        </div>
    </div>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
    });

    function showSuratNotif() {
        if (document.getElementById('surat-notif')) return;
        const notif = document.createElement('div');
        notif.id = 'surat-notif';
        notif.className = 'fixed top-6 left-1/2 transform -translate-x-1/2 bg-yellow-100 text-yellow-800 px-6 py-3 rounded shadow-lg text-lg font-semibold z-50 animate-bounce';
        notif.innerText = 'Fitur ini masih dalam tahap pengembangan';
        document.body.appendChild(notif);
        setTimeout(() => {
            notif.classList.add('animate-fadeOut');
            setTimeout(() => notif.remove(), 800);
        }, 2000);
    }
</script>
<style>
    @keyframes fadeOut {
        to {
            opacity: 0;
            transform: translateY(-20px);
        }
    }

    .animate-fadeOut {
        animation: fadeOut 0.8s forwards;
    }
</style>
@endsection