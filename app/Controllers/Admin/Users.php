<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\user;

class Users extends BaseController
{
    protected $userModel;
    protected $negaraModel;
    public function __construct()
    {
        $this->userModel = new \App\Models\user();
    }
    public function index()
    {
        $data = [
            'user' => $this->userModel->getUser()
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
