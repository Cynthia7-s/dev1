<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function funcion_pro()
    {
        return view('ejemplovista_pro');
    }

    public function Login()
    {
        return view('Login');
    }
}
