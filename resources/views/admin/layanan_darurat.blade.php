@extends('admin.layout')
@section('content')
<div class="max-w-3xl mx-auto py-10 px-4">
    <h1 class="text-3xl font-bold mb-8 text-red-600 text-center" data-aos="fade-down">Kelola Layanan Darurat</h1>
    <div class="bg-white rounded-xl shadow-lg p-8" data-aos="fade-up">
        <div class="flex justify-between items-center mb-6">
            <span class="font-bold text-lg">Daftar Kontak Darurat</span>
            <!-- Tombol Tambah Kontak membuka modal/form -->
            <button onclick="document.getElementById('modal-tambah').style.display='block'" class="bg-red-600 text-white px-4 py-2 rounded font-semibold shadow hover:bg-red-700 transition">Tambah Kontak</button>
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
                    @foreach($darurats as $darurat)
                    <tr class="border-b hover:bg-red-50">
                        <td class="py-2">{{ $darurat->nama_instansi }}</td>
                        <td class="py-2">{{ $darurat->kontak }}</td>
                        <td class="py-2 flex gap-2">
                            <!-- Tombol Edit -->
                            <button onclick="editKontak({{ $darurat->id }}, '{{ $darurat->nama_instansi }}', '{{ $darurat->kontak }}')" class="bg-blue-500 text-white px-2 py-1 rounded text-xs hover:bg-blue-600 transition">Edit</button>
                            <!-- Tombol Hapus -->
                            <form action="{{ route('admin.layanan.darurat.delete', $darurat->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Yakin ingin menghapus kontak ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded text-xs hover:bg-red-600 transition">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Modal Tambah Kontak -->
            <div id="modal-tambah" style="display:none;" class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50">
                <div class="bg-white rounded-xl p-8 shadow-lg w-full max-w-md mx-auto" style="position:relative; top:0; left:0; transform:none;">
                    <h2 class="text-xl font-bold mb-4 text-red-600">Tambah Kontak Darurat</h2>
                    <form method="POST" action="{{ route('admin.layanan.darurat.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label class="block mb-2 font-semibold">Nama Instansi</label>
                            <input type="text" name="nama_instansi" class="w-full border rounded px-3 py-2" required>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 font-semibold">No. Kontak</label>
                            <input type="text" name="kontak" class="w-full border rounded px-3 py-2" required>
                        </div>
                        <div class="flex gap-2 justify-end">
                            <button type="button" onclick="document.getElementById('modal-tambah').style.display='none'" class="px-4 py-2 rounded bg-gray-300">Batal</button>
                            <button type="submit" class="px-4 py-2 rounded bg-red-600 text-white font-semibold">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Modal Edit Kontak -->
            <div id="modal-edit" style="display:none;" class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50">
                <div class="bg-white rounded-xl p-8 shadow-lg w-full max-w-md">
                    <h2 class="text-xl font-bold mb-4 text-blue-600">Edit Kontak Darurat</h2>
                    <form id="form-edit" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label class="block mb-2 font-semibold">Nama Instansi</label>
                            <input type="text" name="nama_instansi" id="edit-nama" class="w-full border rounded px-3 py-2" required>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 font-semibold">No. Kontak</label>
                            <input type="text" name="kontak" id="edit-kontak" class="w-full border rounded px-3 py-2" required>
                        </div>
                        <div class="flex gap-2 justify-end">
                            <button type="button" onclick="document.getElementById('modal-edit').style.display='none'" class="px-4 py-2 rounded bg-gray-300">Batal</button>
                            <button type="submit" class="px-4 py-2 rounded bg-blue-600 text-white font-semibold">Update</button>
                        </div>
                    </form>
                </div>
            </div>

            <script>
                function editKontak(id, nama, kontak) {
                    document.getElementById('modal-edit').style.display = 'flex';
                    document.getElementById('edit-nama').value = nama;
                    document.getElementById('edit-kontak').value = kontak;
                    document.getElementById('form-edit').action = '/admin/layanan/darurat/' + id;
                }
            </script>
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