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
}
