<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\AspirasiController;

Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('welcome');
})->name('beranda');
Route::get('/berita', function () {
    return view('berita');
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
    return view('darurat');
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

use App\Models\Darurat;

Route::get('/admin/layanan/darurat', function () {
    $darurat = Darurat::all();
    return view('admin.layanan_darurat', compact('darurat'));
})->name('admin.layanan.darurat');
Route::get('/berita/{id}', function ($id) {
    $berita = [
        1 => [
            'judul' => 'Pembangunan Jalan Baru',
            'gambar' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80',
            'tanggal' => '28 Agustus 2025',
            'isi' => 'Pemerintah desa memulai pembangunan jalan baru untuk meningkatkan akses warga ke pusat desa. Proyek ini diharapkan selesai dalam waktu 3 bulan dan melibatkan partisipasi aktif masyarakat.'
        ],
        2 => [
            'judul' => 'Pelatihan UMKM',
            'gambar' => 'https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=600&q=80',
            'tanggal' => '25 Agustus 2025',
            'isi' => 'Warga desa mengikuti pelatihan UMKM untuk meningkatkan keterampilan dan perekonomian lokal. Pelatihan ini diadakan selama 2 hari dan diikuti oleh 50 peserta.'
        ],
        3 => [
            'judul' => 'Festival Budaya Desa',
            'gambar' => 'https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=600&q=80',
            'tanggal' => '20 Agustus 2025',
            'isi' => 'Desa mengadakan festival budaya tahunan untuk melestarikan tradisi dan mempererat silaturahmi warga. Acara ini dimeriahkan oleh berbagai pertunjukan seni dan bazar makanan tradisional.'
        ],
    ];
    if (!isset($berita[$id])) abort(404);
    return view('berita_detail', ['berita' => $berita[$id]]);
})->name('berita.detail');
