@extends('layouts.app')
@section('content')
<div class="min-h-[70vh] flex items-center justify-center bg-gradient-to-br from-yellow-50 to-yellow-100">
    <div class="bg-white rounded-2xl shadow-2xl p-8 w-full max-w-lg" data-aos="fade-up">
        <h1 class="text-3xl font-bold mb-6 text-center text-yellow-600">Form Kirim Aspirasi</h1>
        @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded text-center animate-bounce">{{ session('success') }}</div>
        @endif
        <form method="POST" action="{{ route('aspirasi.store') }}" class="space-y-6">
            @csrf
            <div>
                <label class="block text-gray-700 mb-2 font-semibold" for="nama">Nama</label>
                <input type="text" id="nama" name="nama" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-500 transition" placeholder="Nama Anda" required>
            </div>
            <div>
                <label class="block text-gray-700 mb-2 font-semibold" for="email">Email (opsional)</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-500 transition" placeholder="Email Anda">
            </div>
            <div>
                <label class="block text-gray-700 mb-2 font-semibold" for="isi">Isi Aspirasi</label>
                <textarea id="isi" name="isi" rows="5" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-500 transition" placeholder="Tuliskan aspirasi Anda di sini..." required></textarea>
            </div>
            <button type="submit" class="w-full bg-yellow-500 text-white py-2 rounded font-semibold shadow hover:bg-yellow-600 transition transform hover:scale-105">Kirim Aspirasi</button>
        </form>
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