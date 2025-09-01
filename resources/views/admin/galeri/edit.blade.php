@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto mt-10 p-6 bg-white rounded-xl shadow">
    <h2 class="text-2xl font-bold text-pink-600 mb-6">Edit Foto</h2>
    @if ($errors->any())
    <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
        <ul class="list-disc pl-5">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('admin.galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf
        @method('PUT')
        <div>
            <label for="judul" class="block font-semibold mb-2">Judul Foto</label>
            <input type="text" name="judul" class="w-full border rounded px-4 py-2 focus:outline-pink-500" value="{{ $galeri->judul }}" required>
        </div>
        <div>
            <label for="gambar" class="block font-semibold mb-2">Gambar</label>
            <input type="file" name="gambar" class="w-full border rounded px-4 py-2 focus:outline-pink-500" accept="image/*">
            @if($galeri->gambar)
            <img src="{{ asset('storage/' . $galeri->gambar) }}" alt="Gambar" class="h-24 w-24 object-cover rounded mt-2">
            @endif
        </div>
        <div class="flex gap-2 mt-4">
            <button type="submit" class="bg-pink-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-pink-700 transition">Update</button>
            <a href="{{ route('admin.galeri.index') }}" class="bg-gray-300 text-gray-800 px-4 py-2 rounded font-semibold shadow hover:bg-gray-400 transition">Kembali</a>
        </div>
    </form>
</div>
@endsection