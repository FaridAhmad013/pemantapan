<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return "Halaman beranda";
    }

    public function create()
    {
        return "Halaman Menambahkan data";
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return "Halaman menampilka user ".$id;
    }

    public function edit($id)
    {
        return "Halaman edit data";
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
