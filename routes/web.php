<?php

use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return "Halo";
});

Route::get('nama-framework/{nama}/{tahunRilis}', function ($nama, $tahunRilis) {
    return "Nama Framework : ".$nama."<br> Tahun Rilis : ".$tahunRilis;
});


Route::get('/segitiga/alas/{alas?}/tinggi/{tinggi?}', function ($alas = 1, $tinggi= 1) {
    $luas = 0.5*$alas*$tinggi;
    return "Luas Segitiga :".$luas;
});

Route::prefix('jurusan')->group(function () {
    Route::get('/kelas/{namaKelas}', function ($namaKelas) {
        return $namaKelas;
    });
    Route::get('/walikelas/{nama}', function ($nama) {
        return $nama;
    });
});

Route::get('data-siswa', [DataSiswaController::class, 'dataSiswa']);
Route::get('data-siswi', [DataSiswaController::class, 'dataSiswi']);
Route::get('nama/{nama?}', [DataSiswaController::class, 'nama']);

Route::resource('user', UserController::class);

Route::get('/profile', function () {
    return view('profile.index', ['name' => 'farid']);
});

Route::get('/album', function () {
    return view('index');
});
