@extends('admin.layout')

@section('content')
<div class="py-8 px-4">
    <h1 class="text-3xl font-bold mb-8 text-blue-700">Edit Jumlah Kepala Keluarga</h1>
    <div class="flex justify-center">
        <div class="bg-white rounded-2xl shadow-xl p-8 w-full max-w-xl">
            <form method="POST" action="{{ route('admin.kepala_keluarga.update') }}">
                @csrf
                <div class="mb-6">
                    <label for="jumlah" class="block font-semibold mb-2 text-lg">Jumlah Kepala Keluarga</label>
                    <input type="number" name="jumlah" id="jumlah" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-400" value="{{ old('jumlah', $kepala_keluarga ? $kepala_keluarga->jumlah : '') }}" required min="0">
                    @error('jumlah')
                    <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="tahun" class="block font-semibold mb-2 text-lg">Tahun</label>
                    <input type="number" name="tahun" id="tahun" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-400" value="{{ old('tahun', $kepala_keluarga ? $kepala_keluarga->tahun : date('Y')) }}" required min="2000">
                    @error('tahun')
                    <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex items-center gap-4 mt-4">
                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded font-semibold transition">Simpan</button>
                    <a href="{{ route('admin.kepala_keluarga.index') }}" class="text-gray-600 hover:text-gray-800">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection