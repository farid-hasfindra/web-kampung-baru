@extends('layouts.app')
@section('content')
<div class="max-w-3xl mx-auto py-10 px-4">
    <div class="bg-white rounded-xl shadow-lg overflow-hidden" data-aos="fade-up">
        <img src="{{ $berita['gambar'] }}" alt="{{ $berita['judul'] }}" class="w-full h-64 object-cover">
        <div class="p-8">
            <h1 class="text-3xl font-bold mb-2 text-blue-700">{{ $berita['judul'] }}</h1>
            <span class="text-sm text-gray-400 mb-4 block">{{ $berita['tanggal'] }}</span>
            <p class="text-lg text-gray-700 mb-6">{{ $berita['isi'] }}</p>
            <a href="{{ route('berita') }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-blue-700 transition">Kembali ke Berita</a>
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