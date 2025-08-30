@extends('admin.layout')
@section('content')
<div class="max-w-3xl mx-auto py-10 px-4">
    <h1 class="text-3xl font-bold mb-8 text-red-600 text-center" data-aos="fade-down">Kelola Layanan Darurat</h1>
    <div class="bg-white rounded-xl shadow-lg p-8" data-aos="fade-up">
        <div class="flex justify-between items-center mb-6">
            <span class="font-bold text-lg">Daftar Kontak Darurat</span>
            <a href="#" class="bg-red-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-red-700 transition">Tambah Kontak</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full text-left">
                <thead>
                    <tr class="text-gray-600 border-b">
                        <th class="py-2">Nama Instansi</th>
                        <th class="py-2">No. Kontak</th>
                        <th class="py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($darurat as $item)
                    <tr class="border-b hover:bg-red-50">
                        <td class="py-2">{{ $item->nama_instansi }}</td>
                        <td class="py-2">{{ $item->kontak }}</td>
                        <td class="py-2 flex gap-2">
                            <!-- Tombol Edit dan Hapus bisa ditambahkan di sini jika diperlukan -->
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="py-4 text-center text-gray-500">Belum ada data darurat.</td>
                    </tr>
                    @endforelse
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