@extends('layouts.app')
@section('content')

<div class="max-w-3xl mx-auto py-12 px-6 bg-white rounded-xl shadow-lg mt-8">
    <h1 class="text-4xl font-extrabold mb-6 text-center text-blue-700">{{ $potensi->nama }}</h1>
    <div class="mb-8 flex justify-center">
        @if($potensi->gambar)
        <img src="{{ asset('storage/' . $potensi->gambar) }}" alt="{{ $potensi->nama }}" class="rounded-lg shadow-lg max-h-80 w-full object-cover">
        @else
        <img src="https://via.placeholder.com/400x250?text=Potensi+Desa" alt="Potensi Desa" class="rounded-lg shadow-lg max-h-80 w-full object-cover">
        @endif
    </div>
    <div class="text-lg text-gray-800 leading-relaxed mb-6">
        {!! nl2br(e($potensi->deskripsi)) !!}
    </div>
    <div class="flex justify-center">
        <a href="{{ route('potensi') }}" class="px-6 py-2 bg-blue-600 text-white rounded-lg font-semibold shadow hover:bg-blue-700 transition">Kembali ke Potensi Desa</a>
    </div>
</div>
@endsection