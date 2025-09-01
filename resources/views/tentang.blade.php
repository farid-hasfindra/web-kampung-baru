@extends('layouts.app')
@section('content')
@php
use App\Models\Tentang;
$tentang = Tentang::first();
@endphp
<div class="max-w-4xl mx-auto py-10 px-4">
    <h1 class="text-4xl font-bold mb-6 text-gray-900 text-center" data-aos="fade-down">Tentang Kampung Tualang Timur</h1>
    <div class="bg-white rounded-xl shadow-lg p-8 mb-8" data-aos="fade-up">
        <h2 class="text-2xl font-semibold mb-2 text-blue-700">Nama Kampung</h2>
        <p class="text-gray-700 mb-4">{{ $tentang->nama_kampung ?? '-' }}</p>
        <h2 class="text-2xl font-semibold mb-2 text-green-700">Sejarah Kampung</h2>
        <p class="text-gray-700">{{ $tentang->sejarah ?? '-' }}</p>
    </div>
    <div class="bg-white rounded-xl shadow-lg p-8 mb-8" data-aos="fade-up" data-aos-delay="100">
        <h2 class="text-2xl font-semibold mb-2 text-yellow-700">Lokasi Kampung (Maps)</h2>
        <div class="w-full h-64 rounded-lg overflow-hidden mb-2">
            @if(!empty($tentang->maps_link))
            <iframe src="https://www.google.com/maps?q={{ urlencode($tentang->maps_link) }}&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            @endif
        </div>
        <p class="text-gray-600">Alamat: {{ $tentang->alamat ?? '-' }}</p>
    </div>
    <div class="bg-white rounded-xl shadow-lg p-8" data-aos="fade-up" data-aos-delay="200">
        <h2 class="text-2xl font-semibold mb-2 text-indigo-700">Akun Sosial Media</h2>
        <div class="flex gap-6 mt-2">
            @if(!empty($tentang->facebook))
            <a href="{{ $tentang->facebook }}" target="_blank" class="flex items-center gap-2 text-blue-600 hover:underline">
                <img src="https://img.icons8.com/color/32/facebook-new.png" alt="Facebook" /> Facebook
            </a>
            @endif
            @if(!empty($tentang->instagram))
            <a href="{{ $tentang->instagram }}" target="_blank" class="flex items-center gap-2 text-pink-600 hover:underline">
                <img src="https://img.icons8.com/color/32/instagram-new.png" alt="Instagram" /> Instagram
            </a>
            @endif
            @if(!empty($tentang->twitter))
            <a href="{{ $tentang->twitter }}" target="_blank" class="flex items-center gap-2 text-blue-400 hover:underline">
                <img src="https://img.icons8.com/color/32/twitter--v1.png" alt="Twitter" /> Twitter
            </a>
            @endif
            @if(!empty($tentang->email))
            <a href="mailto:{{ $tentang->email }}" class="flex items-center gap-2 text-gray-700 hover:underline">
                <img src="https://img.icons8.com/color/32/gmail-new.png" alt="Email" /> Email
            </a>
            @endif
        </div>
    </div>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
    });
</script>
@endsection