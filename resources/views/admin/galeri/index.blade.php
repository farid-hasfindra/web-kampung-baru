@extends('admin.layout')

@section('content')
<div class="max-w-3xl mx-auto mt-8 p-6 bg-white rounded-xl shadow">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-pink-600">Kelola Galeri Kampung</h2>
        <a href="{{ route('admin.galeri.create') }}" class="bg-pink-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-pink-700 transition">Tambah Foto</a>
    </div>
    <div>
        <h3 class="font-bold text-lg mb-3">Daftar Foto</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @forelse($galeris as $galeri)
            <div class="bg-gray-50 rounded-lg shadow p-4 flex flex-col items-center">
                <img src="{{ asset('storage/' . $galeri->gambar) }}" alt="{{ $galeri->judul }}" class="h-40 w-full object-cover rounded mb-2">
                <div class="font-bold mb-2">{{ $galeri->judul }}</div>
                <div class="flex gap-2">
                    <a href="{{ route('admin.galeri.edit', $galeri->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded shadow hover:bg-blue-600 transition text-sm">Edit</a>
                    <form action="{{ route('admin.galeri.destroy', $galeri->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded shadow hover:bg-red-700 transition text-sm">Hapus</button>
                    </form>
                </div>
            </div>
            @empty
            <div class="col-span-2 text-center text-gray-500">Belum ada foto galeri.</div>
            @endforelse
        </div>
    </div>
</div>
@endsection