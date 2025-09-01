@extends('admin.layout')
@section('content')
<div class="max-w-3xl mx-auto py-10 px-4">
    <h1 class="text-3xl font-bold mb-8 text-gray-700 text-center" data-aos="fade-down">Edit Tentang Kampung</h1>
    <div class="bg-white rounded-xl shadow-lg p-8" data-aos="fade-up">
        <form action="{{ route('admin.tentang.update') }}" method="POST">
            @csrf
            <div class="mb-6">
                <label for="nama_kampung" class="block font-semibold mb-2">Nama Kampung</label>
                <input type="text" name="nama_kampung" id="nama_kampung" class="w-full border border-gray-300 rounded-lg px-4 py-2" value="{{ $tentang->nama_kampung ?? '' }}" required>
            </div>
            <div class="mb-6">
                <label for="sejarah" class="block font-semibold mb-2">Sejarah Kampung</label>
                <textarea name="sejarah" id="sejarah" rows="4" class="w-full border border-gray-300 rounded-lg px-4 py-2" required>{{ $tentang->sejarah ?? '' }}</textarea>
            </div>
            <div class="mb-6">
                <label for="alamat" class="block font-semibold mb-2">Alamat Kampung</label>
                <input type="text" name="alamat" id="alamat" class="w-full border border-gray-300 rounded-lg px-4 py-2" value="{{ $tentang->alamat ?? '' }}" required>
            </div>
            <div class="mb-6">
                <label for="maps_link" class="block font-semibold mb-2">Link Google Maps</label>
                <input type="text" name="maps_link" id="maps_link" class="w-full border border-gray-300 rounded-lg px-4 py-2" value="{{ $tentang->maps_link ?? '' }}" placeholder="https://maps.google.com/...">
            </div>
            <div class="mb-6">
                <label class="block font-semibold mb-2">Akun Sosial Media</label>
                <input type="text" name="facebook" class="w-full border border-gray-300 rounded-lg px-4 py-2 mb-2" placeholder="Facebook" value="{{ $tentang->facebook ?? '' }}">
                <input type="text" name="instagram" class="w-full border border-gray-300 rounded-lg px-4 py-2 mb-2" placeholder="Instagram" value="{{ $tentang->instagram ?? '' }}">
                <input type="text" name="twitter" class="w-full border border-gray-300 rounded-lg px-4 py-2 mb-2" placeholder="Twitter" value="{{ $tentang->twitter ?? '' }}">
                <input type="email" name="email" class="w-full border border-gray-300 rounded-lg px-4 py-2" placeholder="Email" value="{{ $tentang->email ?? '' }}">
            </div>
            <div class="flex gap-3 justify-center mt-6">
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg font-semibold shadow hover:bg-blue-700 transition">Simpan</button>
                <a href="{{ route('admin.tentang') }}" class="px-6 py-2 bg-gray-300 text-gray-800 rounded-lg font-semibold shadow hover:bg-gray-400 transition">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection