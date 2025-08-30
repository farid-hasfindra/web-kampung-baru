<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aspirasi;

class AspirasiController extends Controller
{
    public function create()
    {
        return view('aspirasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'isi' => 'required|max:1000',
            'email' => 'nullable|email',
        ]);

        Aspirasi::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'isi' => $request->isi,
        ]);

        return redirect()->route('aspirasi.create')->with('success', 'Aspirasi berhasil dikirim!');
    }
}
