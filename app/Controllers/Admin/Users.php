<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\user;
use App\Models\Admin;
use App\Models\Negara;

class Users extends BaseController
{
    protected $userModel;
    protected $adminModel;
    protected $negaraModel;
    public function __construct()
    {
        $this->userModel = new \App\Models\user();
        $this->adminModel = new \App\Models\Admin();
        $this->negaraModel = new \App\Models\Negara();
    }
    public function index()
    {
        $data = [
            'admin' => $this->adminModel->getAdmin(),
            'customer' => $this->userModel->select('customer.*, negara.country_name')
                ->join('negara', 'customer.id_negara=negara.id_country', 'LEFT')
                ->findAll()

        ];
        return view('user/index', $data);
    }
    public function tambah()
    {

        return view('user/tambah');
    }

    public function save()
    {
        $this->userModel->save([
            'nama' => $this->request->getPost('nama'),
            'username' => $this->request->getPost('uname'),
            'nik' => $this->request->getPost('nik'),
            'kewarganegaraan' => $this->request->getPost('negara'),
            'email' => $this->request->getPost('email'),
            'no_hp' => $this->request->getPost('noHp'),
            'tipe' => $this->request->getPost('tipe')

        ]);

        return redirect()->to('/users');
    }
}
