<?php

namespace App\Controllers\Admin\Kamar;

use App\Controllers\BaseController;

class jenisKamar extends BaseController
{
    public function index()
    {
        return view('jenis/index');
    }
    public function tambah()
    {
        return view('jenis/tambah');
    }
    public function del()
    {
    }
    public function update()
    {
        return view('jenis/edit');
    }
}
