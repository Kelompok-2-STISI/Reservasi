<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\user;

class Users extends BaseController
{
    protected $userModel;
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
}
