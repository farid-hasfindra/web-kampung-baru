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

Route::resource('galeri', GaleriController::class);

Route::get('/galeri', function () {
$galeris = Galeri::all();
return view('galeri', compact('galeris'));
})->name('galeri');

// Kelola jumlah kepala keluarga
Route::prefix('admin')->group(function () {
    Route::get('/kepala-keluarga', [KepalaKeluargaController::class, 'index'])->name('admin.kepala_keluarga.index');
    Route::get('/kepala-keluarga/edit', [KepalaKeluargaController::class, 'edit'])->name('admin.kepala_keluarga.edit');
    Route::post('/kepala-keluarga/update', [KepalaKeluargaController::class, 'update'])->name('admin.kepala_keluarga.update');
});

// Kelola jumlah penduduk
Route::prefix('admin')->group(function () {
    Route::get('/penduduk', [PendudukController::class, 'index'])->name('admin.penduduk.index');
    Route::get('/penduduk/edit', [PendudukController::class, 'edit'])->name('admin.penduduk.edit');
    Route::post('/penduduk/update', [PendudukController::class, 'update'])->name('admin.penduduk.update');
});

Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

Route::get('/potensi/{id}', function ($id) {
    $potensi = Potensi::findOrFail($id);
    return view('potensi_detail', compact('potensi'));
})->name('potensi.detail');

Route::resource('admin/potensi', PotensiController::class);
Route::get('/', function () {
    $beritas = \App\Models\Berita::orderBy('tanggal', 'desc')->get();
    $potensis = Potensi::all();
    $galeris = \App\Models\Galeri::all();
    $penduduk = \App\Models\Penduduk::orderByDesc('tahun')->first();
    $kepala_keluarga = \App\Models\KepalaKeluarga::orderByDesc('tahun')->first();
    return view('welcome', compact('beritas', 'potensis', 'galeris', 'penduduk', 'kepala_keluarga'));
})->name('beranda');

use App\Models\Berita;
use App\Http\Controllers\PerangkatController;

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

use App\Models\Perangkat;

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

Route::get('/admin/dashboard', function () {
    if (!session('admin_logged_in')) {
        return redirect()->route('login');
    }
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/kelola-konten', function () {
    return view('admin.konten');
})->name('admin.konten');
Route::get('/admin/layanan', function () {
    return view('admin.layanan');
})->name('admin.layanan');
Route::get('/admin/berita', function () {
    return view('admin.berita');
})->name('admin.berita');
Route::get('/admin/perangkat', [PerangkatController::class, 'index'])->name('admin.perangkat');
Route::get('/admin/perangkat/create', [PerangkatController::class, 'create'])->name('admin.perangkat.create');
Route::post('/admin/perangkat', [PerangkatController::class, 'store'])->name('admin.perangkat.store');
Route::get('/admin/perangkat/{id}/edit', [PerangkatController::class, 'edit'])->name('admin.perangkat.edit');
Route::put('/admin/perangkat/{id}', [PerangkatController::class, 'update'])->name('admin.perangkat.update');
Route::delete('/admin/perangkat/{id}', [PerangkatController::class, 'destroy'])->name('admin.perangkat.delete');

Route::resource('admin/galeri', GaleriController::class, [
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

use App\Models\Profil;

Route::get('/admin/tentang', function () {
    $profil = Profil::first();
    return view('admin.tentang', compact('profil'));
})->name('admin.tentang');
Route::get('/admin/tentang/edit', [TentangController::class, 'edit'])->name('admin.tentang.edit');
Route::post('/admin/tentang/update', [TentangController::class, 'update'])->name('admin.tentang.update');

Route::get('/pengaduan', [PengaduanController::class, 'create'])->name('pengaduan.create');
Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');

Route::get('/aspirasi', [AspirasiController::class, 'create'])->name('aspirasi.create');
Route::post('/aspirasi', [AspirasiController::class, 'store'])->name('aspirasi.store');


Route::get('/darurat', function () {
    $darurats = Darurat::all();
    return view('darurat', compact('darurats'));
})->name('darurat');

use App\Models\Pengaduan;


Route::get('/admin/layanan/pengaduan', function () {
    $pengaduan = Pengaduan::all();
    return view('admin.layanan_pengaduan', compact('pengaduan'));
})->name('admin.layanan.pengaduan');

Route::delete('/admin/layanan/pengaduan/{id}', function ($id) {
    $pengaduan = \App\Models\Pengaduan::find($id);
    if ($pengaduan) {
        $pengaduan->delete();
        return redirect()->route('admin.layanan.pengaduan')->with('success', 'Pengaduan berhasil dihapus');
    }
    return redirect()->route('admin.layanan.pengaduan')->with('error', 'Pengaduan tidak ditemukan');
})->name('admin.layanan.pengaduan.delete');

use App\Models\Aspirasi;

Route::get('/admin/layanan/aspirasi', function () {
    $aspirasi = Aspirasi::all();
    return view('admin.layanan_aspirasi', compact('aspirasi'));
})->name('admin.layanan.aspirasi');
Route::delete('/admin/layanan/aspirasi/{id}', function ($id) {
    $aspirasi = Aspirasi::find($id);
    if ($aspirasi) {
        $aspirasi->delete();
        return redirect()->route('admin.layanan.aspirasi')->with('success', 'Aspirasi berhasil dihapus');
    }
    return redirect()->route('admin.layanan.aspirasi')->with('error', 'Aspirasi tidak ditemukan');
})->name('admin.layanan.aspirasi.delete');
Route::get('/admin/layanan/surat', function () {
    return view('admin.layanan_surat');
})->name('admin.layanan.surat');

use Illuminate\Http\Request;
// Route untuk tambah kontak darurat
Route::post('/admin/layanan/darurat', function (Request $request) {
    Darurat::create([
        'nama_instansi' => $request->nama_instansi,
        'kontak' => $request->kontak,
    ]);
    return redirect()->route('admin.layanan.darurat');
})->name('admin.layanan.darurat.store');

// Route untuk update kontak darurat
Route::put('/admin/layanan/darurat/{id}', function (Request $request, $id) {
    $darurat = Darurat::findOrFail($id);
    $darurat->update([
        'nama_instansi' => $request->nama_instansi,
        'kontak' => $request->kontak,
    ]);
    return redirect()->route('admin.layanan.darurat');
})->name('admin.layanan.darurat.update');

// Route untuk hapus kontak darurat
Route::delete('/admin/layanan/darurat/{id}', function ($id) {
    $darurat = Darurat::findOrFail($id);
    $darurat->delete();
    return redirect()->route('admin.layanan.darurat');
})->name('admin.layanan.darurat.delete');

use App\Http\Controllers\BeritaController;

Route::get('/admin/berita', [BeritaController::class, 'index'])->name('admin.berita');
Route::get('/admin/berita/create', [BeritaController::class, 'create'])->name('admin.berita.create');
Route::post('/admin/berita', [BeritaController::class, 'store'])->name('admin.berita.store');
Route::get('/admin/berita/{id}/edit', [BeritaController::class, 'edit'])->name('admin.berita.edit');
Route::put('/admin/berita/{id}', [BeritaController::class, 'update'])->name('admin.berita.update');
Route::delete('/admin/berita/{id}', [BeritaController::class, 'destroy'])->name('admin.berita.delete');
Route::get('/admin/layanan/darurat', function () {
    $darurats = Darurat::all();
    return view('admin.layanan_darurat', compact('darurats'));
})->name('admin.layanan.darurat');
Route::get('/berita/{id}', function ($id) {
    $berita = Berita::findOrFail($id);
    return view('berita_detail', compact('berita'));
})->name('berita.detail');
