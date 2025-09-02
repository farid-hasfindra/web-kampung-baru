@extends('admin.layout')
@section('content')
<div class="max-w-3xl mx-auto py-10 px-4">
    <h1 class="text-3xl font-bold mb-8 text-green-600 text-center" data-aos="fade-down">Kelola Perangkat Kampung</h1>
    <div class="bg-white rounded-xl shadow-lg p-8" data-aos="fade-up">
        <div class="flex justify-between items-center mb-6">
            <span class="font-bold text-lg">Daftar Perangkat</span>
            <a href="{{ route('admin.perangkat.create') }}" class="bg-green-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-green-700 transition">Tambah Perangkat</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full text-left">
                <thead>
                    <tr class="text-gray-600 border-b">
                        <th class="py-2">Nama</th>
                        <th class="py-2">Tempat & Tanggal Lahir</th>
                        <th class="py-2">Jabatan</th>
                        <th class="py-2">Hobi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($perangkats as $perangkat)
                    <tr class="border-b hover:bg-green-50">
                        <td class="py-2">{{ $perangkat->nama }}</td>
                        <td class="py-2">{{ $perangkat->tempat_tanggal_lahir }}</td>
                        <td class="py-2">{{ $perangkat->jabatan }}</td>
                        <td class="py-2">{{ $perangkat->hobi }}</td>
                        <td class="py-2 flex gap-2">
                            <a href="{{ route('admin.perangkat.edit', $perangkat->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded text-xs hover:bg-blue-600 transition">Edit</a>
                            <form action="{{ route('admin.perangkat.delete', $perangkat->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded text-xs hover:bg-red-600 transition">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center text-gray-500">Belum ada perangkat.</td>
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