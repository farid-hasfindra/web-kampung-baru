@extends('layouts.app')
@section('content')
<div class="max-w-6xl mx-auto py-10 px-4">
    <h1 class="text-4xl font-bold mb-8 text-gray-900 text-center">Perangkat Desa</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        @forelse($perangkats as $perangkat)
        <a href="{{ route('perangkat.detail', ['id' => $perangkat->id]) }}" class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl cursor-pointer" data-aos="fade-up">
            <img src="{{ asset('storage/' . $perangkat->gambar) ?? 'https://via.placeholder.com/150' }}" alt="{{ $perangkat->nama }}" class="w-24 h-24 rounded-full mb-4 object-cover">
            <h2 class="text-lg font-bold text-gray-700 mb-1">{{ $perangkat->nama }}</h2>
            <span class="text-sm text-gray-600">{{ $perangkat->jabatan }}</span>
        </a>
        @empty
        <div class="col-span-5 text-center text-gray-500">Belum ada data perangkat desa.</div>
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