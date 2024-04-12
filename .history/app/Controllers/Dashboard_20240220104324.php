<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    private $view ='';
    public function index()
    {
        return view('welcome_message');
    }

    public function funcion_pro()
    {
        return view('ejemplovista_pro');
    }

    public function login()
    {
        return view('login');
    }
}
