<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    private $view = '';

    private function cargar_datos()
    {
        $datos = array();
        // Aquí puedes agregar lógica para cargar datos adicionales necesarios para tu vista
        return $datos;
    }

    public function index()
    {
        // Cargar datos para la vista
        $datos = $this->cargar_datos();
        // Renderizar la vista con los datos cargados
        return view('welcome_message', $datos);
    }

    public function funcion_pro()
    {
        // Cargar datos para la vista
        $datos = $this->cargar_datos();
        // Renderizar la vista con los datos cargados
        return view('ejemplovista_pro', $datos);
    }

    public function login()
    {
        // Cargar datos para la vista
        $datos = $this->cargar_datos();
        // Renderizar la vista con los datos cargados
        return view('login', $datos);
    }
}
