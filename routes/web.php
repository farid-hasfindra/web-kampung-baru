
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\AspirasiController;
use App\Models\Darurat;

Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('welcome');
})->name('beranda');

use App\Models\Berita;

Route::get('/berita', function () {
    $beritas = Berita::orderBy('tanggal', 'desc')->get();
    return view('berita', compact('beritas'));
})->name('berita');
Route::get('/agenda', function () {
    return view('agenda');
})->name('agenda');
Route::get('/potensi', function () {
    return view('potensi');
})->name('potensi');
Route::get('/layanan', function () {
    return view('layanan');
})->name('layanan');
Route::get('/perangkat', function () {
    return view('perangkat');
})->name('perangkat');
Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');
// Route detail perangkat
Route::get('/perangkat/{id}', function ($id) {
    // Anda bisa mengganti ini dengan controller jika sudah ada
    return view('perangkat_detail', ['id' => $id]);
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
Route::get('/admin/perangkat', function () {
    return view('admin.perangkat');
})->name('admin.perangkat');
Route::get('/admin/potensi', function () {
    return view('admin.potensi');
})->name('admin.potensi');
Route::get('/admin/galeri', function () {
    return view('admin.galeri');
})->name('admin.galeri');
Route::get('/admin/tentang', function () {
    return view('admin.tentang');
})->name('admin.tentang');

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
