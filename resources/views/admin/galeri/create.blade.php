@extends('admin.layout')

@section('content')
<div class="max-w-lg mx-auto mt-10 p-6 bg-white rounded-xl shadow">
    <h2 class="text-2xl font-bold text-pink-600 mb-6">Tambah Foto</h2>
    <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf
        <div>
            <label for="gambar" class="block font-semibold mb-2">Gambar</label>
            <input type="file" name="gambar" class="w-full border rounded px-4 py-2 focus:outline-pink-500" accept="image/*" required>
        </div>
        <div class="flex gap-2 mt-4">
            <button type="submit" class="bg-pink-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-pink-700 transition">Simpan</button>
            <a href="{{ route('admin.galeri.index') }}" class="bg-gray-300 text-gray-800 px-4 py-2 rounded font-semibold shadow hover:bg-gray-400 transition">Kembali</a>
        </div>
    </form>
</div>
@endsection