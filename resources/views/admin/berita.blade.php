@extends('admin.layout')
@section('content')
<div class="max-w-3xl mx-auto py-10 px-4">
    <h1 class="text-3xl font-bold mb-8 text-yellow-600 text-center" data-aos="fade-down">Kelola Berita Kampung</h1>
    <div class="bg-white rounded-xl shadow-lg p-8" data-aos="fade-up">
        <div class="flex justify-between items-center mb-6">
            <span class="font-bold text-lg">Daftar Berita</span>
            <a href="#" class="bg-yellow-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-yellow-700 transition">Tambah Berita</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full text-left">
                <thead>
                    <tr class="text-gray-600 border-b">
                        <th class="py-2">Judul</th>
                        <th class="py-2">Tanggal</th>
                        <th class="py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b hover:bg-yellow-50">
                        <td class="py-2">Contoh Berita Kampung</td>
                        <td class="py-2">2025-08-30</td>
                        <td class="py-2 flex gap-2">
                            <a href="#" class="bg-blue-500 text-white px-2 py-1 rounded text-xs hover:bg-blue-600 transition">Edit</a>
                            <a href="#" class="bg-red-500 text-white px-2 py-1 rounded text-xs hover:bg-red-600 transition">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
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