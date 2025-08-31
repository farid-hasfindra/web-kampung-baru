@extends('admin.layout')
@section('content')
<div class="max-w-2xl mx-auto py-10 px-4">
    <h1 class="text-2xl font-bold mb-6 text-yellow-600 text-center">Tambah Berita Kampung</h1>
    <div class="bg-white rounded-xl shadow-lg p-8">
        <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block font-semibold mb-2">Judul Berita</label>
                <input type="text" name="judul" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-2">Tanggal</label>
                <input type="date" name="tanggal" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-2">Isi Berita</label>
                <textarea name="isi" class="w-full border rounded px-3 py-2" rows="5" required></textarea>
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-2">Gambar</label>
                <input type="file" name="gambar" class="w-full border rounded px-3 py-2">
            </div>
            <button type="submit" class="bg-yellow-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-yellow-700 transition">Simpan Berita</button>
        </form>
    </div>
</div>
@endsection