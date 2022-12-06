<?php

namespace App\Controllers\Admin\Kamar;

use App\Controllers\BaseController;
use App\Models\jenis;
use App\Models\PhotoModel;

class jenisKamar extends BaseController
{
    protected $jenisModel;
    protected $photoModel;
    public function __construct()
    {
        $this->jenisModel = new \App\Models\jenis();
        $this->photoModel = new \App\Models\PhotoModel();
    }
    // index
    public function index()
    {
        $data['jenis_kamar'] = $this->jenisModel->findAll();
        foreach ($data['jenis_kamar'] as $key => $value) {
            $data['jenis_kamar'][$key]['photo'] = $this->photoModel->asObject()->where('id_jenis_kamar', $value['id'])->findAll();
        }
        return view('jenis/index', $data);
    }
    // tambah
    public function tambah()
    {
        return view('jenis/tambah');
    }
    public function save()
    {
        $data = [
            'jenis_kamar' => $this->request->getPost('jenis'),
            'tarif' => $this->request->getPost('tarif'),
            'desc' => $this->request->getPost('desc'),
        ];
        $this->jenisModel->save($data);
        $data_id = [
            'id' => $this->jenisModel->getInsertID()
        ];
        return view('jenis/tambahFoto', $data_id);
    }
    // tambah foto
    public function simpanFoto($id)
    {
        # code...
        $data = [
            'id_jenis_kamar' => $id,
            'foto' => $this->request->getPost('foto')
        ];
        $this->photoModel->save($data);
        return redirect()->to('/jenis');
    }
    // hapus
    public function hapus($id)
    {
        $data = $this->photoModel->asArray()->where('id_jenis_kamar', $id)->delete();
        $this->jenisModel->delete($id);

        return redirect()->to('/jenis');
    }
    // edit
    public function edit($id)
    {
        $data = [
            'jenis' => $this->jenisModel->find($id),
        ];
        return view('jenis/edit', $data);
    }
    public function update($id)
    {
        # code...
        $data = [
            'id' => $id,
            'jenis_kamar' => $this->request->getPost('jenis'),
            'tarif' => $this->request->getPost('tarif'),
            'desc' => $this->request->getPost('desc')
        ];
        $this->jenisModel->save($data);
        return redirect()->to('/jenis');
    }
}
