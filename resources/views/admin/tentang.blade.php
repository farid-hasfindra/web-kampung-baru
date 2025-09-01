@extends('admin.layout')
@section('content')
<div class="max-w-3xl mx-auto py-10 px-4">
    <h1 class="text-3xl font-bold mb-8 text-gray-700 text-center" data-aos="fade-down">Kelola Tentang Kampung</h1>
    <div class="bg-white rounded-xl shadow-lg p-8" data-aos="fade-up">
        <div class="flex justify-between items-center mb-6">
            <span class="font-bold text-lg">Profil Kampung</span>
            <a href="{{ route('admin.tentang.edit') }}" class="bg-gray-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-gray-700 transition">Edit Profil</a>
        </div>
        <div class="mb-4">
            <div class="text-gray-700">{{ $profil->isi ?? 'Belum ada profil kampung.' }}</div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script>
    AOS.init({
        duration: 1000,
        once: true,
    });
</script>
@endsection