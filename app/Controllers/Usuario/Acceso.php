<?php

namespace App\Controllers;

class Acceso extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function funcion_pro()
    {
        return view('xd');
    }

    public function Login()
    {
        // Redireccionar al usuario a la página de inicio de sesión
        return redirect()->to('Usuarios/Login');
    }
}
