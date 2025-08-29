<?php

use Illuminate\Support\Facades\Route;

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
// ...existing code...
