<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perangkat;

class PerangkatController extends Controller
{
    public function index()
    {
        $perangkats = Perangkat::all();
        return view('admin.perangkat', compact('perangkats'));
    }

    public function create()
    {
        return view('admin.perangkat_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'gambar' => 'nullable',
            'tempat_tanggal_lahir' => 'required',
            'histori_pendidikan' => 'nullable',
            'hobi' => 'nullable',
            'akun_sosmed' => 'nullable',
        ]);
        $data = $request->only(['nama', 'jabatan', 'gambar', 'tempat_tanggal_lahir', 'histori_pendidikan', 'hobi', 'akun_sosmed']);
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('perangkat', 'public');
            $data['gambar'] = $gambar;
        } elseif ($request->filled('gambar')) {
            $data['gambar'] = $request->input('gambar');
        }
        Perangkat::create($data);
        return redirect()->route('admin.perangkat')->with('success', 'Perangkat berhasil ditambahkan');
    }

    public function edit($id)
    {
        $perangkat = Perangkat::findOrFail($id);
        return view('admin.perangkat_edit', compact('perangkat'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'gambar' => 'nullable',
            'tempat_tanggal_lahir' => 'required',
            'histori_pendidikan' => 'nullable',
            'hobi' => 'nullable',
            'akun_sosmed' => 'nullable',
        ]);
        $perangkat = Perangkat::findOrFail($id);
        $data = $request->only(['nama', 'jabatan', 'gambar', 'tempat_tanggal_lahir', 'histori_pendidikan', 'hobi', 'akun_sosmed']);
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('perangkat', 'public');
            $data['gambar'] = $gambar;
        } elseif ($request->filled('gambar')) {
            $data['gambar'] = $request->input('gambar');
        }
        $perangkat->update($data);
        return redirect()->route('admin.perangkat')->with('success', 'Perangkat berhasil diupdate');
    }

    public function destroy($id)
    {
        $perangkat = Perangkat::findOrFail($id);
        $perangkat->delete();
        return redirect()->route('admin.perangkat')->with('success', 'Perangkat berhasil dihapus');
    }
}
