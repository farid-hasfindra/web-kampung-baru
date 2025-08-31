@extends('layouts.app')
@section('content')
<div class="max-w-2xl mx-auto py-10 px-4">
    <h1 class="text-3xl font-bold mb-8 text-center text-red-600" data-aos="fade-down">Kontak Darurat Kampung</h1>
    <div class="grid gap-6">
        @forelse($darurats as $darurat)
        <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col md:flex-row items-center justify-between transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="fade-up">
            <div>
                <h2 class="text-xl font-semibold mb-1">{{ $darurat->nama_instansi }}</h2>
                <p class="text-gray-700 mb-2">{{ $darurat->kontak }}</p>
            </div>
            @if(!empty($darurat->kontak))
            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $darurat->kontak) }}" target="_blank" class="bg-green-500 text-white px-4 py-2 rounded font-semibold shadow hover:bg-green-600 transition flex items-center gap-2">
                <img src="https://img.icons8.com/color/24/000000/whatsapp.png" alt="WA"> WhatsApp
            </a>
            @endif
        </div>
        @empty
        <div class="text-center text-gray-500">Belum ada kontak darurat yang tersedia.</div>
        @endforelse
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