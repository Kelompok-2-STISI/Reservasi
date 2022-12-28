<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;

class Home extends BaseController
{
    protected $bookingModel;
    protected $kamarModel;

    public function __construct()
    {
        $this->kamarModel = new \App\Models\kamar();
        $this->bookingModel = new \App\Models\booking();
    }
    public function check_kamar()
    {
        $timeZone = 'Asia/Jayapura';
        $now = Time::today($timeZone);
        $bo = $this->bookingModel->findAll();

        foreach ($bo as $i) {
            if ($i['check-out'] . Time::tomorrow($timeZone) == $now) {
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

        return view('home');
    }
}
