@extends('admin.layout')
@section('content')
<div class="max-w-2xl mx-auto py-10 px-4">
    <h1 class="text-2xl font-bold mb-6 text-yellow-600 text-center">Edit Berita Kampung</h1>
    <div class="bg-white rounded-xl shadow-lg p-8">
        <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block font-semibold mb-2">Judul Berita</label>
                <input type="text" name="judul" class="w-full border rounded px-3 py-2" value="{{ $berita->judul }}" required>
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-2">Tanggal</label>
                <input type="date" name="tanggal" class="w-full border rounded px-3 py-2" value="{{ $berita->tanggal }}" required>
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-2">Isi Berita</label>
                <textarea name="isi" class="w-full border rounded px-3 py-2" rows="5" required>{{ $berita->isi }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-2">Gambar</label>
                @if($berita->gambar)
                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar Berita" class="mb-2 w-full h-40 object-cover rounded">
                @endif
                <input type="file" name="gambar" class="w-full border rounded px-3 py-2">
            </div>
            <button type="submit" class="bg-yellow-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-yellow-700 transition">Update Berita</button>
        </form>
    </div>
</div>
@endsection