<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tentang;

class TentangController extends Controller
{
    public function edit()
    {
        $tentang = Tentang::first();
        return view('admin.tentang_edit', compact('tentang'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama_kampung' => 'required',
            'sejarah' => 'required',
            'alamat' => 'required',
            'maps_embed' => 'nullable',
            'facebook' => 'nullable',
            'instagram' => 'nullable',
            'twitter' => 'nullable',
            'email' => 'nullable|email',
        ]);
        $tentang = Tentang::first();
        if (!$tentang) {
            $tentang = Tentang::create($request->all());
        } else {
            $tentang->update($request->all());
        }
        return redirect()->route('admin.tentang')->with('success', 'Data tentang kampung berhasil diupdate');
    }
}
