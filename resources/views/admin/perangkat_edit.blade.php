@extends('admin.layout')
@section('content')
<div class="max-w-xl mx-auto py-10 px-4">
    <h1 class="text-2xl font-bold mb-6">Edit Perangkat Desa</h1>
    <form action="{{ route('admin.perangkat.update', $perangkat->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Nama</label>
            <input type="text" name="nama" value="{{ old('nama', $perangkat->nama) }}" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Jabatan</label>
            <input type="text" name="jabatan" value="{{ old('jabatan', $perangkat->jabatan) }}" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Mulai Kerja</label>
            <input type="date" name="mulai_kerja" value="{{ old('mulai_kerja', $perangkat->mulai_kerja) }}" class="w-full border rounded px-3 py-2">
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Gambar</label>
            <input type="text" name="gambar" value="{{ old('gambar', $perangkat->gambar) }}" class="w-full border rounded px-3 py-2" placeholder="URL gambar">
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Deskripsi</label>
            <textarea name="deskripsi" class="w-full border rounded px-3 py-2" rows="3">{{ old('deskripsi', $perangkat->deskripsi) }}</textarea>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan Perubahan</button>
    </form>
</div>
@endsection