<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\I18n\Time;

class Reservasi extends BaseController
{
    protected $kamarModel;
    protected $jenisModel;
    protected $negaraModel;
    protected $customerModel;
    protected $photoModel;
    protected $bookingModel;

    public function __construct()
    {
        $this->kamarModel = new \App\Models\kamar();
        $this->jenisModel = new \App\Models\jenis();
        $this->negaraModel = new \App\Models\Negara();
        $this->customerModel = new \App\Models\customer();
        $this->photoModel = new \App\Models\PhotoModel();
        $this->bookingModel = new \App\Models\booking();
    }
    public function index()
    {
        $data = [
            'negara' => $this->negaraModel->findAll(),
            'kamar' => $this->kamarModel->select('kamar.*, jenis_kamar.jenis_kamar, jenis_kamar.tarif, jenis_kamar.desc, jenis_kamar.id AS id_jenis_kamar')
                ->join('jenis_kamar', 'kamar.id_jenis_kamar=jenis_kamar.id', 'LEFT')
                ->where('status', 'none')
                ->findAll(),
            'jenis' => $this->jenisModel->findAll()
        ];
        foreach ($data['jenis'] as $key => $j) {
            $data['jenis'][$key]['photo'] = $this->photoModel->asObject()->where('id_jenis_kamar', $j['id'])->findAll();
        }
        // dd($data);
        return view('reservasi/index', $data);
    }
    // step 1
    public function step1_save()
    {
        $customer = [
            'nama' => $this->request->getPost('nama'),
            'nik' => $this->request->getPost('nik'),
            'no_hp' => $this->request->getPost('no_hp'),
            'id_negara' => $this->request->getPost('negara')
        ];
        $this->customerModel->save($customer);
        $id_c = $this->customerModel->getInsertID();
        $id_k = $this->request->getPost('kamar');
        // dd($pass);
        return redirect('/reservasi/step-2/' . $id_c . '/' . $id_k);
    }
    // step 2
    public function step2($id_c, $id_k)
    {
        $data = [
            'id_c' => $id_c,
            '$id_k' => $id_k
        ];
        dd($data);
        // return view('reservasi/step2', $data);
    }
    // step  3
    public function step3()
    {
        $id_kamar = $this->request->getPost('id_kamar');
        $id_customer = $this->customerModel->getInsertID();
        # Detail Reservasi
        $data = [
            'kamar' => $this->kamarModel->find($id_kamar),
            'customer' => $id_customer
        ];
        dd($data);
        // return view('/reservasi/step3');
    }
}
