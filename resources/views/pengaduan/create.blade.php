@extends('layouts.app')
@section('content')
<div class="min-h-[70vh] flex items-center justify-center bg-gradient-to-br from-blue-50 to-blue-100">
    <div class="bg-white rounded-2xl shadow-2xl p-8 w-full max-w-lg" data-aos="fade-up">
        <h1 class="text-3xl font-bold mb-6 text-center text-blue-700">Form Pengaduan Masyarakat</h1>
        @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded text-center animate-bounce">{{ session('success') }}</div>
        @endif
        <form method="POST" action="{{ route('pengaduan.store') }}" class="space-y-6">
            @csrf
            <div>
                <label class="block text-gray-700 mb-2 font-semibold" for="nama">Nama</label>
                <input type="text" id="nama" name="nama" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500 transition" placeholder="Nama Anda" required>
            </div>
            <div>
                <label class="block text-gray-700 mb-2 font-semibold" for="email">Email (opsional)</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500 transition" placeholder="Email Anda">
            </div>
            <div>
                <label class="block text-gray-700 mb-2 font-semibold" for="isi">Isi Pengaduan</label>
                <textarea id="isi" name="isi" rows="5" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500 transition" placeholder="Tuliskan pengaduan Anda di sini..." required></textarea>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded font-semibold shadow hover:bg-blue-700 transition transform hover:scale-105">Kirim Pengaduan</button>
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