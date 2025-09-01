@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto mt-8 p-6 bg-white rounded-xl shadow">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-blue-700">Kelola Potensi Kampung</h2>
        <a href="{{ route('potensi.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-blue-700 transition">Tambah Potensi</a>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border rounded-lg">
            <thead class="bg-blue-50">
                <tr>
                    <th class="py-2 px-4 text-left font-semibold">Nama Potensi</th>
                    <th class="py-2 px-4 text-left font-semibold">Deskripsi</th>
                    <th class="py-2 px-4 text-left font-semibold">Gambar</th>
                    <th class="py-2 px-4 text-left font-semibold">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($potensis as $potensi)
                <tr class="border-b hover:bg-blue-50">
                    <td class="py-2 px-4">{{ $potensi->nama }}</td>
                    <td class="py-2 px-4">{{ $potensi->deskripsi }}</td>
                    <td class="py-2 px-4">
                        @if($potensi->gambar)
                        <img src="{{ asset('storage/' . $potensi->gambar) }}" alt="Gambar Potensi" class="h-12 w-12 object-cover rounded">
                        @else
                        <span class="text-gray-400">-</span>
                        @endif
                    </td>
                    <td class="py-2 px-4">
                        <a href="{{ route('potensi.edit', $potensi->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded shadow hover:bg-yellow-600 transition text-sm">Edit</a>
                        <form action="{{ route('potensi.destroy', $potensi->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded shadow hover:bg-red-700 transition text-sm ml-1">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="py-4 px-4 text-center text-gray-500">Belum ada data potensi.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection