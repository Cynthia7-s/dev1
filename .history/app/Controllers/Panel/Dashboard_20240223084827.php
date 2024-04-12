<?php

use App\Controllers\BaseController;
// namespace App\Controllers\Panel;


class Dashboard extends BaseController
{
    private $view ='panel/dashboard';

    private function cargar_datos(){
        $datos = array();

        $datos['titulo_pagina'] = 'Dashboard';
        $datos['Mensaje'] = '';

        return $datos;
    }
    private function crear_vista($nombre_vista = '', $contenido = array()){
        return view($nombre_vista,$contenido);
    }

    public function index()
    {
        return $this->crear_vista($this->view, $this->cargar_datos());
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
