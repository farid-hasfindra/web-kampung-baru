@extends('layouts.app')

@section('content')
<div class="container mx-auto py-16">
    <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-lg p-8 text-center">
        <img src="{{ asset('storage/' . $galeri->gambar) }}" alt="{{ $galeri->judul }}" class="w-full h-auto rounded-lg mb-6" style="max-height:500px;object-fit:contain;">
        <a href="{{ asset('storage/' . $galeri->gambar) }}" download class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold shadow hover:bg-blue-800 transition mb-6">Download Gambar</a>
    </div>
</div>
@endsection