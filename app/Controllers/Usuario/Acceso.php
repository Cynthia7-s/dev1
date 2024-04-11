<?php

namespace App\Controllers;

class Acceso extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function funcion_pro(){
        return view('xd');
    }
}