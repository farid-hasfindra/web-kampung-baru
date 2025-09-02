<?php

namespace App\Http\Controllers;

use App\Models\Potensi;
use Illuminate\Http\Request;

class PotensiController extends Controller
{
    public function show($id)
    {
        $potensi = Potensi::findOrFail($id);
        return view('potensi_detail', compact('potensi'));
    }
    public function index()
    {
        $potensis = Potensi::all();
        return view('admin.potensi.index', compact('potensis'));
    }

    public function create()
    {
        return view('admin.potensi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $data = [
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ];

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('potensi', 'public');
        }

        Potensi::create($data);
        return redirect()->route('potensi.index')->with('success', 'Potensi berhasil ditambahkan');
    }

    public function edit($id)
    {
        $potensi = Potensi::findOrFail($id);
        return view('admin.potensi.edit', compact('potensi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,gif',
        ]);
        $potensi = Potensi::findOrFail($id);

        $data = [
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ];

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('potensi', 'public');
        }

        $potensi->update($data);
        return redirect()->route('potensi.index')->with('success', 'Potensi berhasil diupdate');
    }

    public function destroy($id)
    {
        $potensi = Potensi::findOrFail($id);
        $potensi->delete();
        return redirect()->route('potensi.index')->with('success', 'Potensi berhasil dihapus');
    }
}
