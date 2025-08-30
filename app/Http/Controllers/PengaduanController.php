<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    public function create()
    {
        return view('pengaduan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'isi' => 'required|max:1000',
            'email' => 'nullable|email',
        ]);

        Pengaduan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'isi' => $request->isi,
        ]);

        return redirect()->route('pengaduan.create')->with('success', 'Pengaduan berhasil dikirim!');
    }
}
