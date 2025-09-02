@extends('admin.layout')

@section('content')
<div class="py-8 px-4">
    <h1 class="text-3xl font-bold mb-8 text-blue-700">Kelola Jumlah Kepala Keluarga</h1>
    @if(session('success'))
    <div class="bg-green-100 text-green-800 p-2 rounded mb-6 text-center">{{ session('success') }}</div>
    @endif
    <div class="flex justify-center">
        <div class="bg-white rounded-2xl shadow-xl p-8 w-full max-w-xl">
            @if($kepala_keluarga)
            <div class="mb-4">
                <div class="text-lg font-semibold mb-2">Jumlah Kepala Keluarga Saat Ini:</div>
                <div class="text-4xl font-extrabold text-blue-700 mb-2">{{ number_format($kepala_keluarga->jumlah) }} KK</div>
                <div class="text-gray-600 mb-4">Tahun: {{ $kepala_keluarga->tahun }}</div>
            </div>
            <a href="{{ route('admin.kepala_keluarga.edit') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded font-semibold transition">Edit Data</a>
            @else
            <div class="text-gray-500 mb-4">Data jumlah kepala keluarga belum tersedia.</div>
            <a href="{{ route('admin.kepala_keluarga.edit') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded font-semibold transition">Tambah Data</a>
            @endif
        </div>
    </div>
</div>
@endsection