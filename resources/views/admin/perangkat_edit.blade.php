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
            <label class="block mb-1 font-semibold">Tempat dan Tanggal Lahir</label>
            <input type="text" name="tempat_tanggal_lahir" value="{{ old('tempat_tanggal_lahir', $perangkat->tempat_tanggal_lahir) }}" class="w-full border rounded px-3 py-2" placeholder="Contoh: Pekanbaru, 18 Oktober 1994" required>
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
            <label class="block mb-1 font-semibold">Histori Pendidikan</label>
            <textarea name="histori_pendidikan" class="w-full border rounded px-3 py-2" rows="4" placeholder="Contoh:\nSDN 010 Tualang : Tahun 2001-2006\nSMPN 2 Tualang : Tahun 2007-2009\nSMAN 2 Tualang : Tahun 2010-2012">{{ old('histori_pendidikan', $perangkat->histori_pendidikan) }}</textarea>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Hobi</label>
            <input type="text" name="hobi" value="{{ old('hobi', $perangkat->hobi) }}" class="w-full border rounded px-3 py-2" placeholder="Contoh: Membaca, Sepak Bola">
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Akun Sosmed (JSON)</label>
            <textarea name="akun_sosmed" class="w-full border rounded px-3 py-2" rows="3" placeholder='{"facebook": "url", "instagram": "url", "twitter": "url", "linkedin": "url"}'>{{ old('akun_sosmed', $perangkat->akun_sosmed) }}</textarea>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Gambar</label>
            <input type="file" name="gambar" class="w-full border rounded px-3 py-2">
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Deskripsi</label>
            <textarea name="deskripsi" class="w-full border rounded px-3 py-2" rows="3">{{ old('deskripsi', $perangkat->deskripsi) }}</textarea>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan Perubahan</button>
    </form>
</div>

// ...existing code...
@endsection