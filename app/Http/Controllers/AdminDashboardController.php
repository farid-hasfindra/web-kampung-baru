<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Aspirasi;
use App\Models\Berita;
use App\Models\Perangkat;
use App\Models\Potensi;
use App\Models\Galeri;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $pengaduanCount = Pengaduan::count();
        $pengaduanToday = Pengaduan::whereDate('created_at', now())->count();
        $pengaduanLatest = Pengaduan::latest()->take(5)->get();

        $aspirasiCount = Aspirasi::count();
        $aspirasiToday = Aspirasi::whereDate('created_at', now())->count();
        $aspirasiLatest = Aspirasi::latest()->take(5)->get();

        $beritaCount = Berita::count();
        $beritaToday = Berita::whereDate('created_at', now())->count();

        $perangkatCount = Perangkat::count();
        $perangkatToday = Perangkat::whereDate('created_at', now())->count();

        $potensiCount = Potensi::count();
        $potensiToday = Potensi::whereDate('created_at', now())->count();

        $galeriCount = Galeri::count();
        $galeriToday = Galeri::whereDate('created_at', now())->count();

        return view('admin.dashboard', compact(
            'pengaduanCount',
            'pengaduanToday',
            'pengaduanLatest',
            'aspirasiCount',
            'aspirasiToday',
            'aspirasiLatest',
            'beritaCount',
            'beritaToday',
            'perangkatCount',
            'perangkatToday',
            'potensiCount',
            'potensiToday',
            'galeriCount',
            'galeriToday'
        ));
    }
}
