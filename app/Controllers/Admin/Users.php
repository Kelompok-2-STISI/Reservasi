<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\user;
use App\Models\Admin;
use App\Models\Negara;

class Users extends BaseController
{
    // Deklarasi variabel untuk model
    protected $userModel;
    protected $adminModel;
    protected $negaraModel;
    // konstruktor
    public function __construct()
    {
        $this->userModel = new \App\Models\user();
        $this->adminModel = new \App\Models\Admin();
        $this->negaraModel = new \App\Models\Negara();
    }
    // controller untuk view utama menu user
    public function index()
    {
        $data = [
            'admin' => $this->adminModel->getAdmin(),
            'customer' => $this->userModel->select('customer.*, negara.country_name')
                ->join('negara', 'customer.id_negara=negara.id_country
                
                ', 'LEFT')
                ->findAll()

        ];
        return view('user/index', $data);
    }
    public function tambahCustomer()
    {
        $data = [
            'negara' => $this->negaraModel->getNegara()
        ];
        return view('user/tambahCustomer', $data);
    }

    public function tambahAdmin()
    {
        return view('user/tambahAdmin');
    }

    public function saveAdmin()
    {
        $this->adminModel->save([
            'nama' => $this->request->getPost('nama'),
            'username' => $this->request->getPost('uname'),
            'email' => $this->request->getPost('email'),
            'no_hp' => $this->request->getPost('noHp'),
            'password' => $this->request->getPost('password'),
        ]);

        return redirect()->to('/users');
    }
    public function saveCustomer()
    {
        $this->userModel->save([
            'nama' => $this->request->getPost('nama'),
            'username' => $this->request->getPost('uname'),
            'nik' => $this->request->getPost('nik'),
            'id_negara' => $this->request->getPost('negara'),
            'email' => $this->request->getPost('email'),
            'no_hp' => $this->request->getPost('noHp'),
            'password' => $this->request->getPost('password'),
        ]);

        return redirect()->to('/users');
    }
}
