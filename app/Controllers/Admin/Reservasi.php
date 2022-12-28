<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\kamar;
use CodeIgniter\I18n\Time;

class Reservasi extends BaseController
{
    protected $kamarModel;
    protected $jenisModel;
    protected $negaraModel;
    protected $customerModel;
    protected $photoModel;
    protected $bookingModel;
    protected $cek;

    public function __construct()
    {
        $this->kamarModel = new \App\Models\kamar();
        $this->jenisModel = new \App\Models\jenis();
        $this->negaraModel = new \App\Models\Negara();
        $this->customerModel = new \App\Models\customer();
        $this->photoModel = new \App\Models\PhotoModel();
        $this->bookingModel = new \App\Models\booking();
        $this->cek = new \App\Controllers\Home;
    }
    // step 1
    public function index()
    {
        $this->cek->check_kamar();
        $data = [
            'negara' => $this->negaraModel->findAll(),
            'jenis' => $this->jenisModel->findAll()
        ];
        // dd($data);
        return view('reservasi/index', $data);
    }
    public function step1_save()
    {
        $id_jk = $this->request->getPost('kamar');
        $customer = [
            'nama' => $this->request->getPost('nama'),
            'nik' => $this->request->getPost('nik'),
            'no_hp' => $this->request->getPost('no_hp'),
            'id_negara' => $this->request->getPost('negara')
        ];
        $this->customerModel->save($customer);
        $id_cs = $this->customerModel->getInsertID();

        $data = [
            'customer' => $this->customerModel->find($id_cs),
            'kamar' => $this->kamarModel->where('id_jenis_kamar', $id_jk)->where('status', 'kosong')->first(),
            'tanggal' => Time::today('Asia/Jayapura')
        ];
        // dd($data);
        return view('reservasi/step2', $data);
    }
    // step 2
    public function step2_save()
    {
        $save = [
            'id_customer' => $this->request->getPost('customer'),
            'id_user' => $this->request->getPost('user'),
            'id_kamar' => $this->request->getPost('kamar'),
            'check-in' => $this->request->getPost('in'),
            'check-out' => $this->request->getPost('out')
        ];
        $this->bookingModel->save($save);
        $id_bo = $this->bookingModel->getInsertID();

        $data = [
            'bo' => $this->bookingModel->select('booking.*, booking.id AS id_bo, customer.*, kamar.*, jenis_kamar.*')
                ->join('customer', 'customer.id = booking.id_customer')
                ->join('kamar', 'kamar.id = booking.id_kamar')
                ->join('jenis_kamar', 'jenis_kamar.id = kamar.id_jenis_kamar')
                ->find($id_bo)
        ];
        // dd(
        //     $data
        // );
        return view('reservasi/step3', $data);
    }
    // step  3
    public function step3_save()
    {
        $id = $this->request->getPost('id_km');
        $data = [
            'id' => $id,
            'nama_kamar' => $this->request->getPost('nm_km'),
            'nomor_kamar' => $this->request->getPost('no_km'),
            'id_jenis_kamar' => $this->request->getPost('id_jk'),
            'status' => 'penuh'
        ];
        $this->kamarModel->save($data);
        return redirect()->to('/reservasi');
    }
}
// , customer.nama, customer.id AS id_cs, kamar.id AS id_km, kamar.nomor_kamar, kamar.id_jenis_kamar, kamar.status
