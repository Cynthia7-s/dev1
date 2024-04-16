<?php

namespace App\Controllers\Panel;
use App\Controllers\BaseController;


class Usuarios extends BaseController
{
    private $view ='panel/usuarios';

    private $session=NULL;
    private $permiso=TRUE;
    //contructor
   public function __construct(){
    //instancia de la variable de sesion 
    $this->session=session();
    
    //instancia de permisos helper
    helper("permisos_roles_helper");
               if (!acceso_usuario(TAREA_USUARIO, $this->session->rol_actual)) { 
                $this->permiso=FALSE;
          
     }//END 
       $this->session->tarea_actual =TAREA_USUARIO;
   }

    private function cargar_datos(){
        $datos = array();

        // $datos['titulo_pagina'] = 'Dashboard';
        // $datos['Mensaje'] = '';
        // Informacion general
        $datos['nombre_pagina'] = 'Usuarios | CI4Base';
        $datos['titulo_pagina'] = 'Usuarios';

        //--------------------------------------
        //INFORMACION DE INICIO SE SESION
        //--------------------------------------
   $datos["nombre_completo_usuario"]=$this->session->nombre_completo;
   $datos["nombre"]=$this->session->nombre;
   $datos["email"]=$this->session->email;
   $datos["imagen_perfil"]=($this->session->imagen_perfil==NULL) 
                              ? (($this->session->sexo !== MASCULINO ) ? 'icon-woman.png' : 'icon-man.png' )
                              : $this->session->imagen_perfil ;
        //Breadcrumb
        $breadcrumb = array(
          //  array(
            //   'href'=> route_to('hh'),
             //  'titulo'=> 'Ejemplo A',
            //),
            array(
                'href'=> '#',
                'titulo'=> 'Usuarios',
            )

        );
        $datos['breadcrumb_pagina'] = breadcrumb_panel($datos['titulo_pagina'],$breadcrumb);

        return $datos;
    }//end cargar datos 



    private function crear_vista($nombre_vista = '', $contenido = array()){
        $contenido["menu_lateral"] = crear_menu_panel($this->session->tarea_actual, $this->session->rol_actual);
        return view($nombre_vista,$contenido);
    }//end crear vista


    public function index(){
       if ($this->permiso) {
        return $this->crear_vista($this->view, $this->cargar_datos());

        # code...
           }else{
            crear_mensaje("No tienes permisos para acceder a este moduli, contacte al Administrador",
            "Oppss!",TOASTR_ERROR);
            return redirect()->to(route_to("administracion_acceso"));
           }
    }//end index


    public function funcion_pro(){
        return view('ejemplovista_pro');
    }///end function pro
    

    public function login(){
        return view('login');
    }///end logim
}
