<?php

namespace App\Controllers\Usuarios;
use App\Controllers\BaseController;

class Login extends BaseController{

    private $view='usuario/login-d';

    private function cargar_datos(){
        $datos=array();
        $datos['nombre_pagina']='Login';
        return $datos; 
    }//end cargar datos

    private function crear_vista($nombre_vista = '',$contenido=array()){
        return view($nombre_vista, $contenido);

    }//end vista

    public function index(){
        return $this->crear_vista($this->view,$this->cargar_datos());
    }//end index
}

?>
