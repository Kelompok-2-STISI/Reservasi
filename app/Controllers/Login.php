<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function user()
    {
        $user = "customer";

        if ($user = "admin") {
            # code...
            $user = "admin";
            return view($user);
        } else {
            return view('customer');
        }
    }
}
