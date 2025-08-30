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
