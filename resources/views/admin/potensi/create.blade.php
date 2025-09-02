@extends('admin.layout')

@section('content')
<div class="max-w-lg mx-auto mt-10 p-6 bg-white rounded-xl shadow">
    <h2 class="text-2xl font-bold text-blue-700 mb-6">Tambah Potensi</h2>
    <form action="{{ route('potensi.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf
        <div>
            <label for="nama" class="block font-semibold mb-2">Nama Potensi</label>
            <input type="text" name="nama" class="w-full border rounded px-4 py-2 focus:outline-blue-500" required>
        </div>
        <div>
            <label for="deskripsi" class="block font-semibold mb-2">Deskripsi</label>
            <textarea name="deskripsi" rows="4" class="w-full border rounded px-4 py-2 focus:outline-blue-500" required></textarea>
        </div>
        <div>
            <label for="gambar" class="block font-semibold mb-2">Gambar</label>
            <input type="file" name="gambar" class="w-full border rounded px-4 py-2 focus:outline-blue-500" accept="image/*">
        </div>
        <div class="flex gap-2 mt-4">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-blue-700 transition">Simpan</button>
            <a href="{{ route('potensi.index') }}" class="bg-gray-300 text-gray-800 px-4 py-2 rounded font-semibold shadow hover:bg-gray-400 transition">Kembali</a>
        </div>
    </form>
</div>
@endsection