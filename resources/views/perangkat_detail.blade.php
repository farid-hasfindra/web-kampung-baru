@extends('layouts.app')
@section('content')
<div class="max-w-2xl mx-auto py-10 px-4">
    <div class="bg-gradient-to-br from-blue-50 via-white to-blue-100 rounded-2xl shadow-2xl overflow-hidden flex flex-col items-center p-10 animate__animated animate__fadeIn">
        <div class="relative mb-6">
            <img src="{{ $perangkat->gambar ? asset('storage/' . $perangkat->gambar) : 'https://via.placeholder.com/200x200?text=No+Image' }}" alt="Foto Perangkat" class="w-44 h-44 object-cover rounded-full shadow-lg border-4 border-white transition-transform duration-500 hover:scale-105" data-aos="zoom-in">
            <span class="absolute -bottom-3 left-1/2 transform -translate-x-1/2 bg-blue-600 text-white px-4 py-1 rounded-full text-xs font-semibold shadow animate__animated animate__fadeInUp">Perangkat Kampung</span>
        </div>
        <h1 class="text-3xl font-extrabold mb-2 text-blue-700 animate__animated animate__fadeInDown">{{ $perangkat->nama ?? 'Nama Perangkat' }}</h1>
        <span class="text-base text-gray-700 mb-1 block animate__animated animate__fadeIn">{{ $perangkat->tempat_tanggal_lahir ?? '-' }}</span>
        <span class="text-lg text-blue-500 mb-2 font-semibold animate__animated animate__fadeIn">{{ $perangkat->jabatan ?? 'Jabatan' }}</span>
        <div class="mb-6 w-full animate__animated animate__fadeIn">
            <h2 class="text-xl font-bold text-gray-800 mb-2">Histori Pendidikan</h2>
            <ul class="text-left text-gray-700 list-disc list-inside">
                @php
                $pendidikan = $perangkat->histori_pendidikan ? explode("\n", $perangkat->histori_pendidikan) : [];
                @endphp
                @forelse($pendidikan as $item)
                <li class="transition-all duration-300 hover:text-blue-600">{{ $item }}</li>
                @empty
                <li>-</li>
                @endforelse
            </ul>
        </div>
        <div class="mb-6 w-full animate__animated animate__fadeIn">
            <h2 class="text-xl font-bold text-gray-800 mb-2">Hobi</h2>
            <p class="text-gray-700">{{ $perangkat->hobi ?? '-' }}</p>
        </div>
        <div class="flex gap-4 mb-6 animate__animated animate__fadeIn">
            @php
            $sosmed = $perangkat->akun_sosmed ? json_decode($perangkat->akun_sosmed, true) : [];
            @endphp
            @if(!empty($sosmed['facebook']))
            <a href="{{ $sosmed['facebook'] }}" target="_blank" class="text-blue-600 hover:text-blue-800 transition transform hover:scale-110"><i class="fab fa-facebook fa-2x"></i></a>
            @endif
            @if(!empty($sosmed['instagram']))
            <a href="{{ $sosmed['instagram'] }}" target="_blank" class="text-pink-500 hover:text-pink-700 transition transform hover:scale-110"><i class="fab fa-instagram fa-2x"></i></a>
            @endif
            @if(!empty($sosmed['twitter']))
            <a href="{{ $sosmed['twitter'] }}" target="_blank" class="text-blue-400 hover:text-blue-600 transition transform hover:scale-110"><i class="fab fa-twitter fa-2x"></i></a>
            @endif
            @if(!empty($sosmed['linkedin']))
            <a href="{{ $sosmed['linkedin'] }}" target="_blank" class="text-blue-700 hover:text-blue-900 transition transform hover:scale-110"><i class="fab fa-linkedin fa-2x"></i></a>
            @endif
        </div>
        <a href="{{ route('perangkat') }}" class="inline-block bg-gradient-to-r from-blue-500 to-blue-700 text-white px-6 py-3 rounded-full font-bold shadow-lg hover:from-blue-700 hover:to-blue-900 transition-all duration-300 animate__animated animate__fadeInUp">Kembali</a>
    </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
    });
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
    });
</script>
@endsection