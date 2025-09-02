@extends('admin.layout')


@section('content')
<div class="py-8 px-4">
    <h1 class="text-3xl font-bold mb-8 text-blue-700">Kelola Administrasi Penduduk</h1>
    @if(session('success'))
    <div class="bg-green-100 text-green-800 p-2 rounded mb-6 text-center">{{ session('success') }}</div>
    @endif
    <div class="grid md:grid-cols-2 gap-8 justify-center">
        <div class="bg-white rounded-2xl shadow-xl p-8 w-full max-w-xl mx-auto flex flex-col items-center">
            <div class="mb-4">
                <div class="text-lg font-semibold mb-2">Jumlah Penduduk Saat Ini:</div>
                @if($penduduk)
                <div class="text-4xl font-extrabold text-green-700 mb-2">{{ number_format($penduduk->jumlah) }} Jiwa</div>
                <div class="text-gray-600 mb-4">Tahun: {{ $penduduk->tahun }}</div>
                @else
                <div class="text-gray-500 mb-4">Data jumlah penduduk belum tersedia.</div>
                @endif
            </div>
            <a href="{{ route('admin.penduduk.edit') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded font-semibold transition">Kelola Data Penduduk</a>
        </div>
        <div class="bg-white rounded-2xl shadow-xl p-8 w-full max-w-xl mx-auto flex flex-col items-center">
            <div class="mb-4">
                <div class="text-lg font-semibold mb-2">Jumlah Kepala Keluarga Saat Ini:</div>
                @if(isset($kepala_keluarga) && $kepala_keluarga)
                <div class="text-4xl font-extrabold text-blue-700 mb-2">{{ number_format($kepala_keluarga->jumlah) }} KK</div>
                <div class="text-gray-600 mb-4">Tahun: {{ $kepala_keluarga->tahun }}</div>
                @else
                <div class="text-gray-500 mb-4">Data jumlah kepala keluarga belum tersedia.</div>
                @endif
            </div>
            <a href="{{ route('admin.kepala_keluarga.edit') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded font-semibold transition">Kelola Data Kepala Keluarga</a>
        </div>
    </div>
</div>
@endsection