<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KepalaKeluargaController extends Controller
{
    public function index()
    {
        $kepala_keluarga = \App\Models\KepalaKeluarga::orderByDesc('tahun')->first();
        return view('admin.kepala_keluarga.index', compact('kepala_keluarga'));
    }

    public function edit()
    {
        $kepala_keluarga = \App\Models\KepalaKeluarga::orderByDesc('tahun')->first();
        return view('admin.kepala_keluarga.edit', compact('kepala_keluarga'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'jumlah' => 'required|integer|min:0',
            'tahun' => 'required|integer|min:2000',
        ]);
        $kepala_keluarga = \App\Models\KepalaKeluarga::orderByDesc('tahun')->first();
        if ($kepala_keluarga) {
            $kepala_keluarga->update([
                'jumlah' => $request->jumlah,
                'tahun' => $request->tahun,
            ]);
        } else {
            \App\Models\KepalaKeluarga::create([
                'jumlah' => $request->jumlah,
                'tahun' => $request->tahun,
            ]);
        }
        return redirect()->route('admin.kepala_keluarga.index')->with('success', 'Data jumlah kepala keluarga berhasil diperbarui!');
    }
}
