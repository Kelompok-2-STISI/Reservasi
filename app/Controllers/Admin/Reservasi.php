<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\booking;
use App\Models\user;
use App\Models\kamar;
use App\Models\jenis;


class Reservasi extends BaseController
{
    protected $kamarModel;
    protected $jenisModel;

    public function __construct()
    {
        $this->kamarModel = new \App\Models\kamar();
        $this->jenisModel = new \App\Models\jenis();
    }
    public function index()
    {
        $data = [
            'kamar' => $this->kamarModel->select('kamar.*, jenis_kamar.jenis_kamar, jenis_kamar.tarif')
                ->join('jenis_kamar', 'kamar.id_jenis_kamar=jenis_kamar.id', 'LEFT')
                ->findAll()
        ];
        return view('reservasi/index', $data);
    }
    public function tambah()
    {
    }
    public function del()
    {
    }
    public function update()
    {
    }
}
