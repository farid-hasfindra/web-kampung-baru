<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index()
    {
        $penduduk = \App\Models\Penduduk::orderByDesc('tahun')->first();
        $kepala_keluarga = \App\Models\KepalaKeluarga::orderByDesc('tahun')->first();
        return view('admin.penduduk.index', compact('penduduk', 'kepala_keluarga'));
    }

    public function edit()
    {
        $penduduk = \App\Models\Penduduk::orderByDesc('tahun')->first();
        return view('admin.penduduk.edit', compact('penduduk'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'jumlah' => 'required|integer|min:0',
            'tahun' => 'required|integer|min:2000',
        ]);
        $penduduk = \App\Models\Penduduk::orderByDesc('tahun')->first();
        if ($penduduk) {
            $penduduk->update([
                'jumlah' => $request->jumlah,
                'tahun' => $request->tahun,
            ]);
        } else {
            \App\Models\Penduduk::create([
                'jumlah' => $request->jumlah,
                'tahun' => $request->tahun,
            ]);
        }
        return redirect()->route('admin.penduduk.index')->with('success', 'Data jumlah penduduk berhasil diperbarui!');
    }
}
