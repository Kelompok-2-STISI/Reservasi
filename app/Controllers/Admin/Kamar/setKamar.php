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
    protected $cek;

    public function __construct()
    {
        $this->kamarModel = new \App\Models\kamar();
        $this->jenisModel = new \App\Models\jenis();
        $this->photoModel = new \App\Models\PhotoModel();
        $this->cek = new \App\Controllers\Home;
    }
    // index
    public function index()
    {
        $this->cek->check_kamar();

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
    // tambah
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
    // edit
    public function editKamar($id)
    {
        # code...
        $data = [
            'kamar' => $this->kamarModel->find($id),
            'jenis' => $this->jenisModel->findAll()
        ];
        return view('kamar/edit', $data);
    }
    public function updateKamar($id)
    {
        # code...
        $this->kamarModel->save([
            'id'  => $id,
            'nama_kamar' => $this->request->getPost('nama_kamar'),
            'nomor_kamar' => $this->request->getPost('nomor_kamar'),
            'id_jenis_kamar' => $this->request->getPost('id_jenis_kamar'),
            'status' => $this->request->getPost('status'),
        ]);
        return redirect()->to(base_url('kamar'));
    }
    // hapus
    public function hapusKamar($id)
    {
        # code...
        $this->kamarModel->delete($id);
        return redirect()->to(base_url('kamar'));
    }
}
