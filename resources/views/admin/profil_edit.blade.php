@extends('admin.layout')
@section('content')
<div class="max-w-3xl mx-auto py-10 px-4">
    <h1 class="text-3xl font-bold mb-8 text-gray-700 text-center" data-aos="fade-down">Edit Profil Kampung</h1>
    <div class="bg-white rounded-xl shadow-lg p-8" data-aos="fade-up">
        <form action="{{ route('admin.tentang.update') }}" method="POST">
            @csrf
            <div class="mb-6">
                <label for="isi" class="block font-semibold mb-2">Isi Profil Kampung</label>
                <textarea name="isi" id="isi" rows="6" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>{{ $profil->isi ?? '' }}</textarea>
            </div>
            <div class="flex gap-3 justify-center mt-6">
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg font-semibold shadow hover:bg-blue-700 transition">Simpan</button>
                <a href="{{ route('admin.tentang') }}" class="px-6 py-2 bg-gray-300 text-gray-800 rounded-lg font-semibold shadow hover:bg-gray-400 transition">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection