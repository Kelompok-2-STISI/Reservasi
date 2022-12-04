<?php

namespace App\Controllers;

use App\Models\Negara;

class Home extends BaseController
{
    protected $negaraModel;
    public function __construct()
    {
        $this->negaraModel = new \App\Models\Negara();
    }
    public function index()
    {
        return view('home');
    }
    public function masuk()
    {
        return view('login');
    }
    // public function daftar()
    // {
    //     return view('signup');
    // }
    public function daftar()
    {
        $data = [
            'negara' => $this->negaraModel->getNegara()
        ];
        return view('signup', $data);
    }
}
