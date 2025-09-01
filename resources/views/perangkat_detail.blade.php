@extends('layouts.app')
@section('content')
<div class="max-w-2xl mx-auto py-10 px-4">
    <div class="bg-white rounded-xl shadow-lg overflow-hidden" data-aos="fade-up">
        <div class="flex flex-col items-center p-8">
            <img src="{{ asset('storage/' . $perangkat->gambar) ?? 'https://via.placeholder.com/200x200?text=No+Image' }}" alt="Foto Perangkat" class="w-40 h-40 object-cover rounded-full shadow mb-4" data-aos="zoom-in">
            <h1 class="text-2xl font-bold mb-2 text-blue-700">{{ $nama ?? 'Nama Perangkat' }}</h1>
            <span class="text-sm text-gray-500 mb-2">{{ $jabatan ?? 'Jabatan' }}</span>
            <span class="text-xs text-gray-400 mb-4 block">Mulai Kerja: {{ $mulai_kerja ?? '-' }}</span>
            <div class="mb-4 text-center">
                <p class="text-gray-700">{{ $deskripsi ?? 'Deskripsi perangkat desa.' }}</p>
            </div>
            <div class="flex gap-4 mb-4">
                @if(!empty($sosmed['facebook']))
                <a href="{{ $sosmed['facebook'] }}" target="_blank" class="text-blue-600 hover:text-blue-800 transition"><i class="fab fa-facebook fa-2x"></i></a>
                @endif
                @if(!empty($sosmed['instagram']))
                <a href="{{ $sosmed['instagram'] }}" target="_blank" class="text-pink-500 hover:text-pink-700 transition"><i class="fab fa-instagram fa-2x"></i></a>
                @endif
                @if(!empty($sosmed['twitter']))
                <a href="{{ $sosmed['twitter'] }}" target="_blank" class="text-blue-400 hover:text-blue-600 transition"><i class="fab fa-twitter fa-2x"></i></a>
                @endif
                @if(!empty($sosmed['linkedin']))
                <a href="{{ $sosmed['linkedin'] }}" target="_blank" class="text-blue-700 hover:text-blue-900 transition"><i class="fab fa-linkedin fa-2x"></i></a>
                @endif
            </div>
            <a href="{{ route('perangkat') }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-blue-700 transition">Kembali ke Daftar Perangkat</a>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
    });
</script>
@endsection