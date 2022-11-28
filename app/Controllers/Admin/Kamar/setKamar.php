<?php

namespace App\Controllers\Admin\Kamar;

use App\Controllers\BaseController;
use App\Models\kamar;
use App\Models\jenis;
use App\Models\PhotoModel;

class setKamar extends BaseController
{
    protected $kamarModel;
    protected $jenisModel;
    protected $photoModel;

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
                ->findAll(),
            'foto' => $this->photoModel->select('photo.*, photo.id, photo.foto')
                ->join('jenis_kamar', 'photo.id_jenis_kamar=jenis_kamar.id', 'LEFT')
        ];
        return view('kamar/index', $data);
    }
    public function tambah()
    {
        $data['jenisKamar'] = $this->jenisModel->findAll();
        return view('Kamar/tambah', $data);
    }

    public function save()
    {
        $data = $this->request->getPost();
        $this->kamarModel->save($data);
        return redirect()->to(base_url('kamar'));
    }
    public function del()
    {
    }
    public function update()
    {
    }
}
