<?php

namespace App\Controllers\Admin\Kamar;

use App\Controllers\BaseController;

class setKamar extends BaseController
{
    public function index()
    {
        return view('kamar/index');
    }
    public function tambah()
    {
        return view('Kamar/tambah');
    }
    public function del()
    {
    }
    public function update()
    {
    }
}
