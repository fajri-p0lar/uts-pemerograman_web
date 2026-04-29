<?php

use Illuminate\Support\Facades\Route;
use App\Models\Major; // Tambahkan ini

Route::get('/', function () {
    $jurusans = Major::all(); // Mengambil semua data dari tabel majors
    return view('welcome', compact('jurusans')); // Kirim datanya ke welcome.blade.php
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/jurusan/{slug}', function ($slug) {
    $jurusan = App\Models\Major::where('slug', $slug)->firstOrFail();
    return view('detail_jurusan', compact('jurusan'));
});