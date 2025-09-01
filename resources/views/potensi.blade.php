@extends('layouts.app')
@section('content')
<div class="max-w-6xl mx-auto py-10 px-4">
    <h1 class="text-4xl font-bold mb-8 text-gray-900 text-center">Potensi Desa</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @forelse($potensis as $potensi)
        <a href="{{ route('potensi.detail', ['id' => $potensi->id]) }}" class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl block" data-aos="fade-up">
            <img src="{{ $potensi->gambar ? asset('storage/' . $potensi->gambar) : 'https://via.placeholder.com/400x160?text=No+Image' }}" alt="{{ $potensi->nama }}" class="w-full h-40 object-cover">
            <div class="p-6">
                <h2 class="text-lg font-bold text-blue-700 mb-2">{{ $potensi->nama }}</h2>
                <p class="text-gray-600">{{ $potensi->deskripsi }}</p>
            </div>
        </a>
        @empty
        <div class="col-span-4 text-center text-gray-500">Belum ada data potensi.</div>
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