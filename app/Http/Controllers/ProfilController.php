<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;

class ProfilController extends Controller
{
    public function edit()
    {
        $profil = Profil::first();
        return view('admin.profil_edit', compact('profil'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'isi' => 'required',
        ]);
        $profil = Profil::first();
        if (!$profil) {
            $profil = Profil::create(['isi' => $request->isi]);
        } else {
            $profil->update(['isi' => $request->isi]);
        }
        return redirect()->route('admin.tentang')->with('success', 'Profil berhasil diupdate');
    }
}
