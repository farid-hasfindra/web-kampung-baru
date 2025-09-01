@extends('admin.layout')
@section('content')
<div class="max-w-3xl mx-auto py-10 px-4">
    <h1 class="text-3xl font-bold mb-8 text-pink-600 text-center" data-aos="fade-down">Kelola Galeri Kampung</h1>
    <div class="bg-white rounded-xl shadow-lg p-8" data-aos="fade-up">
        <div class="flex justify-between items-center mb-6">
            <span class="font-bold text-lg">Daftar Foto</span>
            <a href="{{ route('admin.galeri.create') }}" class="bg-pink-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-pink-700 transition">Tambah Foto</a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <div class="bg-gray-100 rounded-lg overflow-hidden shadow hover:shadow-lg transition-all duration-300" data-aos="zoom-in">
                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80" alt="Foto Kampung" class="w-full h-32 object-cover">
                <div class="p-2 flex justify-between items-center">
                    <span class="text-sm font-semibold">Kantor Desa</span>
                    <div class="flex gap-1">
                        <a href="{{ route('admin.galeri.edit', 1) }}" class="bg-blue-500 text-white px-2 py-1 rounded text-xs hover:bg-blue-600 transition">Edit</a>
                        <form action="{{ route('admin.galeri.destroy', 1) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded text-xs hover:bg-red-600 transition">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
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