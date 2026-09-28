<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
});

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: '.$param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: '.$param1;
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

Route::get('/about', function () {
    return view('halaman-about');
});

use App\Http\Controllers\MatakuliahController;

// Route khusus untuk menangani /matakuliah/show/{kode?}
Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);

// Route sisanya untuk resource Matakuliah
Route::resource('matakuliah', MatakuliahController::class)->except(['show']);