@extends('layouts.app')

@section('content')

<div class="max-w-xl mx-auto py-10 px-6 bg-white rounded-xl shadow-lg mt-8">
    <h2 class="text-2xl font-bold mb-6 text-center text-blue-700">Edit Potensi</h2>
    <form action="{{ route('potensi.update', $potensi->id) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf
        @method('PUT')
        <div>
            <label for="nama" class="block font-semibold mb-2">Nama Potensi</label>
            <input type="text" name="nama" id="nama" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $potensi->nama }}" required>
        </div>
        <div>
            <label for="deskripsi" class="block font-semibold mb-2">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="4" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>{{ $potensi->deskripsi }}</textarea>
        </div>
        <div>
            <label for="gambar" class="block font-semibold mb-2">Gambar</label>
            @if($potensi->gambar)
            <img src="{{ asset('storage/' . $potensi->gambar) }}" alt="Gambar Potensi" class="mb-2 rounded-lg shadow max-h-40">
            @endif
            <input type="file" name="gambar" id="gambar" class="w-full border border-gray-300 rounded-lg px-4 py-2">
            <span class="text-xs text-gray-500">Kosongkan jika tidak ingin mengubah gambar</span>
        </div>
        <div class="flex gap-3 justify-center mt-6">
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg font-semibold shadow hover:bg-blue-700 transition">Update</button>
            <a href="{{ route('potensi.index') }}" class="px-6 py-2 bg-gray-300 text-gray-800 rounded-lg font-semibold shadow hover:bg-gray-400 transition">Kembali</a>
        </div>
    </form>
</div>
@endsection