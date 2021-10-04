<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
        public function dataSiswa()
        {
            $nama = "Farid Ahmad";
            return $nama;
        }

        public function dataSiswi()
        {
            $nama = "Fadhilah";
            return $nama;
        }

        public function nama($nama)
        {
            return "Nama Anda Adalah ".$nama;
        }

}
