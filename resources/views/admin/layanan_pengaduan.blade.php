@extends('admin.layout')
@section('content')
<div class="max-w-3xl mx-auto py-10 px-4">
    <h1 class="text-3xl font-bold mb-8 text-blue-700 text-center" data-aos="fade-down">Kelola Pengaduan Masyarakat</h1>
    <div class="bg-white rounded-xl shadow-lg p-8" data-aos="fade-up">
        <div class="flex justify-between items-center mb-6">
            <span class="font-bold text-lg">Daftar Pengaduan</span>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full text-left">
                <thead>
                    <tr class="text-gray-600 border-b">
                        <th class="py-2">Nama</th>
                        <th class="py-2">Isi</th>
                        <th class="py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pengaduan as $item)
                    <tr class="border-b hover:bg-blue-50">
                        <td class="py-2">{{ $item->nama }}</td>
                        <td class="py-2">{{ $item->isi }}</td>
                        <td class="py-2 flex gap-2">
                            <form action="{{ route('admin.layanan.pengaduan.delete', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus pengaduan ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded text-xs hover:bg-red-600 transition">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="py-4 text-center text-gray-500">Belum ada pengaduan.</td>
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