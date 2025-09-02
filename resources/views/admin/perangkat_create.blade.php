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
                <label class="block font-semibold mb-2">Tempat dan Tanggal Lahir</label>
                <input type="text" name="tempat_tanggal_lahir" class="w-full border rounded px-3 py-2" placeholder="Contoh: Pekanbaru, 18 Oktober 1994" required>
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-2">Jabatan</label>
                <input type="text" name="jabatan" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-2">Histori Pendidikan</label>
                <textarea name="histori_pendidikan" class="w-full border rounded px-3 py-2" rows="4" placeholder="Contoh:\nSDN 010 Tualang : Tahun 2001-2006\nSMPN 2 Tualang : Tahun 2007-2009\nSMAN 2 Tualang : Tahun 2010-2012"></textarea>
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-2">Hobi</label>
                <input type="text" name="hobi" class="w-full border rounded px-3 py-2" placeholder="Contoh: Membaca, Sepak Bola">
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-2">Akun Sosmed (JSON)</label>
                <textarea name="akun_sosmed" class="w-full border rounded px-3 py-2" rows="3" placeholder='{"facebook": "url", "instagram": "url", "twitter": "url", "linkedin": "url"}'></textarea>
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-2">Gambar</label>
                <input type="file" name="gambar" class="w-full border rounded px-3 py-2">
            </div>
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-green-700 transition">Simpan Perangkat</button>
        </form>
    </div>
</div>
@endsection