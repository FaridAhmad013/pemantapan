<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return "Halo";
});

Route::get('nama-framework/{nama}/{tahunRilis}', function ($nama, $tahunRilis) {
    return "Nama Framework : ".$nama."<br> Tahun Rilis : ".$tahunRilis;
});

Route::get('/nama/{nama?}', function ($nama = null) {
    return "Nama saya adalah ".$nama;
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
