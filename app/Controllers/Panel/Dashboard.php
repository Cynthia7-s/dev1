<?php

namespace App\Controllers\Panel;
use App\Controllers\BaseController;


class Dashboard extends BaseController
{
    private $view ='panel/dashboard';

    private $session=NULL;
    private $permiso=TRUE;
    //contructor
   public function __construct(){
    //instancia de la variable de sesion 
    $this->session=session(); 
   }




    private function cargar_datos(){
        $datos = array();

        // $datos['titulo_pagina'] = 'Dashboard';
        // $datos['Mensaje'] = '';
        // Informacion general
        $datos['nombre_pagina'] = 'Dashboard | CI4Base';
        $datos['titulo_pagina'] = 'Dashboard';

        //--------------------------------------
        //INFORMACION DE INICIO SE SESION
        //--------------------------------------
   $datos["nombre_completo_usuario"]=$this->session->nombre_completo;
   $datos["nombre"]=$this->session->nombre;
   $datos["email"]=$this->session->email;
   //RECURSOS_PANEL_IMG_PROFILES_USER','imagenes/profile_user/
   $datos["imagen_perfil"]=($this->session->imagen_perfil==NULL) 
                              ? (($this->session->sexo !== MASCULINO ) ? 'icon-woman.png' : 'icon-man.png' )
                              : $this->session->imagen_perfil ;


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
    }//end cargar datos 



    private function crear_vista($nombre_vista = '', $contenido = array()){
        $contenido["menu_lateral"] = crear_menu_panel();
        return view($nombre_vista,$contenido);
    }//end crear vista


    public function index(){
        return $this->crear_vista($this->view, $this->cargar_datos());
    }//end index


    public function funcion_pro(){
        return view('ejemplovista_pro');
    }///end function pro
    

    public function login(){
        return view('login');
    }///end logim
}
