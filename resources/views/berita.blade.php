@extends('layouts.app')
@section('content')
@php use Illuminate\Support\Str; @endphp
@php use Carbon\Carbon; @endphp
<div class="max-w-5xl mx-auto py-10 px-4">
    <h1 class="text-4xl font-bold mb-6 text-gray-900 text-center">Berita Desa</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($beritas as $berita)
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl cursor-pointer" onclick="window.location='{{ route('berita.detail', ['id' => $berita->id]) }}'" data-aos="fade-up">
            <img src="{{ $berita->gambar ? asset('storage/' . $berita->gambar) : 'https://via.placeholder.com/600x300?text=No+Image' }}" alt="{{ $berita->judul }}" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-xl font-semibold mb-2 text-blue-600">{{ $berita->judul }}</h2>
                <p class="text-gray-600 mb-4">{{ Str::limit($berita->isi, 100) }}</p>
                <span class="text-xs text-gray-400">{{ Carbon::parse($berita->tanggal)->translatedFormat('d F Y') }}</span>
            </div>
        </div>
        @empty
        <div class="col-span-3 text-center text-gray-500">Belum ada berita.</div>
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