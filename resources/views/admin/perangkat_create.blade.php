@extends('admin.layout')
@section('content')
<div class="max-w-2xl mx-auto py-10 px-4">
    <h1 class="text-2xl font-bold mb-6 text-green-600 text-center">Tambah Perangkat Kampung</h1>
    <div class="bg-white rounded-xl shadow-lg p-8">
        <form action="{{ route('admin.perangkat.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block font-semibold mb-2">Nama</label>
                <input type="text" name="nama" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-2">Jabatan</label>
                <input type="text" name="jabatan" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-2">Mulai Kerja</label>
                <input type="date" name="mulai_kerja" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-2">Deskripsi</label>
                <textarea name="deskripsi" class="w-full border rounded px-3 py-2" rows="4"></textarea>
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-2">Gambar</label>
                <input type="file" name="gambar" class="w-full border rounded px-3 py-2">
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-2">Facebook</label>
                <input type="text" name="facebook" class="w-full border rounded px-3 py-2">
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-2">Instagram</label>
                <input type="text" name="instagram" class="w-full border rounded px-3 py-2">
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-2">Twitter</label>
                <input type="text" name="twitter" class="w-full border rounded px-3 py-2">
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-2">LinkedIn</label>
                <input type="text" name="linkedin" class="w-full border rounded px-3 py-2">
            </div>
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-green-700 transition">Simpan Perangkat</button>
        </form>
    </div>
</div>
@endsection