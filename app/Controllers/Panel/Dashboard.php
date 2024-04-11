<?php

namespace App\Controllers\Panel;
use App\Controllers\BaseController;


class Dashboard extends BaseController
{
    private $view ='panel/dashboard';

    private function cargar_datos(){
        $datos = array();

        // $datos['titulo_pagina'] = 'Dashboard';
        // $datos['Mensaje'] = '';
        // Informacion general
        $datos['titulo_pagina'] = 'Dashboard | CI4Base';
        $datos['nombre_pagina'] = 'Ejemplo';
        $datos['nombre_usuario'] = 'Dashboard';

        //Breadcrumb
        $breadcrumb = array(
            array(
               'href'=> route_to('hh'),
               'titulo'=> 'Ejemplo A',
            ),
            array(
                'href'=> '#',
                'titulo'=> 'Modulo ACTUAL',
            )

        );
        $datos['breadcrumb_pagina'] = breadcrumb_panel($breadcrumb, $datos['nombre_pagina']);

        return $datos;
    }
    private function crear_vista($nombre_vista = '', $contenido = array()){
        $contenido["menu_lateral"] = crear_menu_panel();
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
