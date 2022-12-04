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
        $this->photoModel = new \App\Models\PhotoModel();
    }
    public function index()
    {
        $data = [
            'kamar' => $this->kamarModel->select('kamar.*, jenis_kamar.jenis_kamar, jenis_kamar.tarif, jenis_kamar.desc, jenis_kamar.id AS id_jenis_kamar')
                ->join('jenis_kamar', 'kamar.id_jenis_kamar=jenis_kamar.id', 'LEFT')
                ->findAll()
        ];
        foreach ($data['kamar'] as $key => $kamar) {
            $data['kamar'][$key]['photo'] = $this->photoModel->asObject()->where('id_jenis_kamar', $kamar['id_jenis_kamar'])->findAll();
        }
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
