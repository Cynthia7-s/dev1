<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    private $view ='';

    private function cargar_datos(){
        $datos = array();

        return $datos;
    }
    private function crear_vista($nombre_vista = '', $contenido = array()){
        return view('welcome_message');
    }

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
