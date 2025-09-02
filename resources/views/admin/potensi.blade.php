@extends('admin.layout')
@section('content')
<div class="ml-64 py-10 px-8">
    <h1 class="text-3xl font-bold mb-8 text-indigo-600" data-aos="fade-down">Kelola Potensi Kampung</h1>
    <div class="flex justify-between items-center mb-6">
        <span class="font-bold text-lg">Daftar Potensi</span>
        <a href="#" class="bg-indigo-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-indigo-700 transition">Tambah Potensi</a>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full text-left bg-white rounded-xl shadow-lg">
            <thead>
                <tr class="text-gray-600 border-b">
                    <th class="py-2">Nama Potensi</th>
                    <th class="py-2">Kategori</th>
                    <th class="py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b hover:bg-indigo-50">
                    <td class="py-2">Contoh Potensi</td>
                    <td class="py-2">Pertanian</td>
                    <td class="py-2 flex gap-2">
                        <a href="#" class="bg-blue-500 text-white px-2 py-1 rounded text-xs hover:bg-blue-600 transition">Edit</a>
                        <a href="#" class="bg-red-500 text-white px-2 py-1 rounded text-xs hover:bg-red-600 transition">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
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