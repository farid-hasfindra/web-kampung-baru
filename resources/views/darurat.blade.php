@extends('layouts.app')
@section('content')
<div class="max-w-2xl mx-auto py-10 px-4">
    <h1 class="text-3xl font-bold mb-8 text-center text-red-600" data-aos="fade-down">Kontak Darurat Kampung</h1>
    <div class="grid gap-6">
        <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col md:flex-row items-center justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="fade-up">
            <div>
                <h2 class="text-xl font-semibold text-red-600 mb-1">Pemadam Kebakaran</h2>
                <p class="text-gray-700 mb-2">0852-5095-3798</p>
            </div>
            <a href="https://wa.me/6281234567890" target="_blank" class="bg-green-500 text-white px-4 py-2 rounded font-semibold shadow hover:bg-green-600 transition flex items-center gap-2">
                <img src="https://img.icons8.com/color/24/000000/whatsapp.png" alt="WA"> WhatsApp
            </a>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col md:flex-row items-center justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="100">
            <div>
                <h2 class="text-xl font-semibold text-blue-600 mb-1">Kepolisian</h2>
                <p class="text-gray-700 mb-2">0852-7400-6873</p>
            </div>
            <a href="https://wa.me/6281398765432" target="_blank" class="bg-green-500 text-white px-4 py-2 rounded font-semibold shadow hover:bg-green-600 transition flex items-center gap-2">
                <img src="https://img.icons8.com/color/24/000000/whatsapp.png" alt="WA"> WhatsApp
            </a>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col md:flex-row items-center justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="fade-up" data-aos-delay="200">
            <div>
                <h2 class="text-xl font-semibold text-green-600 mb-1">Rumah Sakit</h2>
                <p class="text-gray-700 mb-2">0812-1122-3344</p>
            </div>
            <a href="https://wa.me/6281211223344" target="_blank" class="bg-green-500 text-white px-4 py-2 rounded font-semibold shadow hover:bg-green-600 transition flex items-center gap-2">
                <img src="https://img.icons8.com/color/24/000000/whatsapp.png" alt="WA"> WhatsApp
            </a>
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