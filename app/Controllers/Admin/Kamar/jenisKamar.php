<?php

namespace App\Controllers\Admin\Kamar;

use App\Controllers\BaseController;
use App\Models\jenis;
use App\Models\PhotoModel;

class jenisKamar extends BaseController
{
    protected $jenisModel;
    public function __construct()
    {
        $this->jenisModel = new \App\Models\jenis();
        $this->photoModel = new \App\Models\PhotoModel();
    }
    public function index()
    {
        $data['jenis_kamar'] = $this->jenisModel->findAll();
        foreach ($data['jenis_kamar'] as $key => $value) {
            $data['jenis_kamar'][$key]['photo'] = $this->photoModel->where('id_jenis_kamar', $value['id'])->findAll();
        }
        return view('jenis/index', $data);
    }
    public function tambah()
    {
        return view('jenis/tambah');
    }
    public function save()
    {
        $this->jenisModel->save([
            'jenis' => $this->request->getPost('jenis'),
            'tarif' => $this->request->getPost('tarif'),
            'desc' => $this->request->getPost('desc'),
            'foto' => $this->request->getPost('foto')
        ]);

        return redirect()->to('/jenis');
    }
    public function del()
    {
    }
    public function update()
    {
        return view('jenis/edit');
    }
}
