<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;

class Home extends BaseController
{
    protected $bookingModel;
    protected $kamarModel;
    protected $jenisModel;
    protected $photoModel;

    public function __construct()
    {
        $this->kamarModel = new \App\Models\kamar();
        $this->bookingModel = new \App\Models\booking();
        $this->jenisModel = new \App\Models\jenis();
        $this->photoModel = new \App\Models\PhotoModel();
    }
    public function check_kamar()
    {
        $timeZone = 'Asia/Jayapura';
        $now = Time::today($timeZone);
        $bo = $this->bookingModel->findAll();

        foreach ($bo as $i) {
            if ($now->isAfter($i['check-out'])) {
                $km = $this->kamarModel->find($i['id_kamar']);
                $data = [
                    'id' => $i['id_kamar'],
                    'nama_kamar' => $km['nama_kamar'],
                    'nomor_kamar' => $km['nomor_kamar'],
                    'id_jenis_kamar' => $km['id_jenis_kamar'],
                    'status' => 'kosong'
                ];
                $this->kamarModel->save($data);
            }
        }
    }
    public function index()
    {
        $this->check_kamar();
        $data['jenis_kamar'] = $this->jenisModel->findAll();
        foreach ($data['jenis_kamar'] as $key => $value) {
            $data['jenis_kamar'][$key]['photo'] = $this->photoModel->asObject()->where('id_jenis_kamar', $value['id'])->findAll();
        }
        return view('home', $data);
    }
}
