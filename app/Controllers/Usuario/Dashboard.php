<?php

namespace App\Controllers;

class Dashboard extends BaseController
{

    private $view = "dashboard";
    
    private function cargar_datos()
    {
        $datos = array();
        //--------------
        //Informacion basica
        //--------------
        $datos['titulo_pagina'] = 'Dashboard';
        $datos['Mensaje'] = 'No lloren por favor';
        return $datos;
    }//end cargar datos

    private function crear_vista($nombre_vista = '', $contenido = array()){
        return view($nombre_vista, $contenido);
    }//end crear vista



    //Función principal de un modulo
    public function index()
    {
        return $this->crear_vista($this->view, $this->cargar_datos());
        
    }//end index

    
}//end Dashboard