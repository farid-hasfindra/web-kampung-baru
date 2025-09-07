<?php

use App\Http\Controllers\KepalaKeluargaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PendudukController;
use App\Models\Potensi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\PotensiController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\TentangController;
use App\Models\Darurat;
use App\Models\Galeri;
use App\Http\Controllers\AdminDashboardController;
use App\Models\Berita;
use App\Http\Controllers\PerangkatController;
use App\Models\Perangkat;
use App\Models\Profil;
use App\Models\Pengaduan;
use App\Models\Aspirasi;
use Illuminate\Http\Request;
use App\Http\Controllers\BeritaController;


Route::resource('galeri', GaleriController::class);


// Route::get('/layanan/pengaduan/export', function () {
//     return Excel::download(new PengaduanExport, 'rekap_pengaduan.xlsx');
// })->name('admin.layanan.pengaduan.export');

Route::get('/galeri', function () {
    $galeris = Galeri::all();
    return view('galeri', compact('galeris'));
})->name('galeri');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');
    Route::get('/account/edit', [AdminAuthController::class, 'editAccount'])->name('admin.account.edit');
    Route::post('/account/update', [AdminAuthController::class, 'updateAccount'])->name('admin.account.update');

// Kelola jumlah kepala keluarga
Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/kepala-keluarga', [KepalaKeluargaController::class, 'index'])->name('admin.kepala_keluarga.index');
    Route::get('/kepala-keluarga/edit', [KepalaKeluargaController::class, 'edit'])->name('admin.kepala_keluarga.edit');
    Route::post('/kepala-keluarga/update', [KepalaKeluargaController::class, 'update'])->name('admin.kepala_keluarga.update');

    // Kelola jumlah penduduk
    Route::get('/penduduk', [PendudukController::class, 'index'])->name('admin.penduduk.index');
    Route::get('/penduduk/edit', [PendudukController::class, 'edit'])->name('admin.penduduk.edit');
    Route::post('/penduduk/update', [PendudukController::class, 'update'])->name('admin.penduduk.update');

    // Fitur ubah username & password

    Route::resource('potensi', PotensiController::class);

    Route::get('/kelola-konten', function () {
    return view('admin.konten');
    })->name('admin.konten');

    Route::get('/layanan', function () {
    return view('admin.layanan');
    })->name('admin.layanan');

    Route::get('/berita', function () {
    return view('admin.berita');
    })->name('admin.berita');

    
    Route::get('/perangkat', [PerangkatController::class, 'index'])->name('admin.perangkat');
    Route::get('/perangkat/create', [PerangkatController::class, 'create'])->name('admin.perangkat.create');
    Route::post('/perangkat', [PerangkatController::class, 'store'])->name('admin.perangkat.store');
    Route::get('/perangkat/{id}/edit', [PerangkatController::class, 'edit'])->name('admin.perangkat.edit');
    Route::put('/perangkat/{id}', [PerangkatController::class, 'update'])->name('admin.perangkat.update');
    Route::delete('/perangkat/{id}', [PerangkatController::class, 'destroy'])->name('admin.perangkat.delete');

    Route::resource('/galeri', GaleriController::class, [
        'names' => [
            'index' => 'admin.galeri.index',
            'create' => 'admin.galeri.create',
            'store' => 'admin.galeri.store',
            'edit' => 'admin.galeri.edit',
            'update' => 'admin.galeri.update',
            'destroy' => 'admin.galeri.destroy',
            'show' => 'admin.galeri.show',
        ]
    ]);

    Route::get('/layanan/pengaduan', function () {
        $pengaduan = Pengaduan::all();
        return view('admin.layanan_pengaduan', compact('pengaduan'));
    })->name('admin.layanan.pengaduan');

    Route::delete('/layanan/pengaduan/{id}', function ($id) {
        $pengaduan = \App\Models\Pengaduan::find($id);
        if ($pengaduan) {
            $pengaduan->delete();
            return redirect()->route('admin.layanan.pengaduan')->with('success', 'Pengaduan berhasil dihapus');
        }
        return redirect()->route('admin.layanan.pengaduan')->with('error', 'Pengaduan tidak ditemukan');
    })->name('admin.layanan.pengaduan.delete');

    Route::get('/tentang', function () {
        $profil = Profil::first();
        return view('admin.tentang', compact('profil'));
    })->name('admin.tentang');
    Route::get('/tentang/edit', [TentangController::class, 'edit'])->name('admin.tentang.edit');
    Route::post('/tentang/update', [TentangController::class, 'update'])->name('admin.tentang.update');

    Route::get('/layanan/aspirasi', function () {
        $aspirasi = Aspirasi::all();
        return view('admin.layanan_aspirasi', compact('aspirasi'));
    })->name('admin.layanan.aspirasi');
    Route::delete('/layanan/aspirasi/{id}', function ($id) {
        $aspirasi = Aspirasi::find($id);
        if ($aspirasi) {
            $aspirasi->delete();
            return redirect()->route('admin.layanan.aspirasi')->with('success', 'Aspirasi berhasil dihapus');
        }
        return redirect()->route('admin.layanan.aspirasi')->with('error', 'Aspirasi tidak ditemukan');
    })->name('admin.layanan.aspirasi.delete');
    Route::get('/layanan/surat', function () {
        return view('admin.layanan_surat');
    })->name('admin.layanan.surat');

    // Route untuk tambah kontak darurat
    Route::post('/layanan/darurat', function (Request $request) {
        Darurat::create([
            'nama_instansi' => $request->nama_instansi,
            'kontak' => $request->kontak,
        ]);
        return redirect()->route('admin.layanan.darurat');
    })->name('admin.layanan.darurat.store');

    // Route untuk update kontak darurat
    Route::put('/layanan/darurat/{id}', function (Request $request, $id) {
        $darurat = Darurat::findOrFail($id);
        $darurat->update([
            'nama_instansi' => $request->nama_instansi,
            'kontak' => $request->kontak,
        ]);
        return redirect()->route('admin.layanan.darurat');
    })->name('admin.layanan.darurat.update');

    // Route untuk hapus kontak darurat
    Route::delete('/layanan/darurat/{id}', function ($id) {
        $darurat = Darurat::findOrFail($id);
        $darurat->delete();
        return redirect()->route('admin.layanan.darurat');
    })->name('admin.layanan.darurat.delete');

    Route::get('/berita', [BeritaController::class, 'index'])->name('admin.berita');
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('admin.berita.create');
    Route::post('/berita', [BeritaController::class, 'store'])->name('admin.berita.store');
    Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('admin.berita.edit');
    Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('admin.berita.update');
    Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('admin.berita.delete');
    Route::get('/layanan/darurat', function () {
        $darurats = Darurat::all();
        return view('admin.layanan_darurat', compact('darurats'));
    })->name('admin.layanan.darurat');

});

Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
Route::post('/authenticateLogin', [AdminAuthController::class, 'authenticateLogin'])->name('login.submit');
Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

Route::get('/potensi/{id}', function ($id) {
    $potensi = Potensi::findOrFail($id);
    return view('potensi_detail', compact('potensi'));
})->name('potensi.detail');

Route::get('/', function () {
    $beritas = \App\Models\Berita::orderBy('tanggal', 'desc')->paginate(3);
    $potensis = Potensi::paginate(3);
    $galeris = \App\Models\Galeri::paginate(4);
    $penduduk = \App\Models\Penduduk::orderByDesc('tahun')->first();
    $kepala_keluarga = \App\Models\KepalaKeluarga::orderByDesc('tahun')->first();
    return view('welcome', compact('beritas', 'potensis', 'galeris', 'penduduk', 'kepala_keluarga'));
})->name('beranda');

Route::get('/berita', function () {
    $beritas = Berita::orderBy('tanggal', 'desc')->get();
    return view('berita', compact('beritas'));
})->name('berita');
Route::get('/agenda', function () {
    return view('agenda');
})->name('agenda');
Route::get('/potensi', function () {
    $potensis = App\Models\Potensi::all();
    return view('potensi', compact('potensis'));
})->name('potensi');
Route::get('/layanan', function () {
    return view('layanan');
})->name('layanan');


Route::get('/perangkat', function () {
    $perangkats = Perangkat::all();
    return view('perangkat', compact('perangkats'));
})->name('perangkat');

// Route detail perangkat dari database
Route::get('/perangkat/{id}', function ($id) {
    $perangkat = Perangkat::find($id);
    if (!$perangkat) abort(404);
    return view('perangkat_detail', compact('perangkat'));
})->name('perangkat.detail');
Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/pengaduan', [PengaduanController::class, 'create'])->name('pengaduan.create');
Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');

Route::get('/aspirasi', [AspirasiController::class, 'create'])->name('aspirasi.create');
Route::post('/aspirasi', [AspirasiController::class, 'store'])->name('aspirasi.store');


Route::get('/darurat', function () {
    $darurats = Darurat::all();
    return view('darurat', compact('darurats'));
})->name('darurat');


Route::get('/berita/{id}', function ($id) {
    $berita = Berita::findOrFail($id);
    return view('berita_detail', compact('berita'));
})->name('berita.detail');
