<?php

namespace App\Controllers\Usuario;
use App\Controllers\BaseController;
//use const App\Constants\ESTATUS_DESHABILITADO;
//use const App\Constants\TOASTR_SUCCESS;

class Login extends BaseController {

    private $view='usuario/login';

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

    //funcion en especifica
    public function existe_usuario(){
      //  dd("Validando credenciales.... :)");

        $correo=$this->request->getPost("correo_electronico");
        $password=$this->request->getPost("password");
      //  d($correo);
        //d($password);

        //instancia del modelo
        $tabla_usuario =new  \App\Models\Tabla_usuarios;

        //Query
        $usuarios = $tabla_usuario->iniciar_sesion($correo, hash("sha256", $password));
       // d($usuarios);

          if(!empty($usuarios)){

            if($usuarios->estatus_usuario == ESTATUS_DESHABILITADO){
                crear_mensaje("Este usuario ha sido deshabilitado. Comunícate con el Administrador", "Error", TOASTR_ERROR);
                return redirect()->to(route_to("administracion_acceso"));
            }
    
            // Variables de sesión
            $session = session();
            $session->set("session_iniciada", TRUE);
            $session->set("idusuario", $usuarios->idusuario);
            $session->set("nombre", $usuarios->nombre);
            $session->set("nombre_completo", $usuarios->nombre . " " . $usuarios->apellido_paterno . " " . $usuarios->apellido_materno);
            $session->set("sexo", $usuarios->sexo);
            $session->set("correo", $usuarios->correo);
            $session->set("imagen_perfil", $usuarios->imagen_perfil);
            $session->set("rol_actual", $usuarios->idrol);
            $session->set("tarea_actual", TAREA_DASHBOARD);
    
           // d($session);


            crear_mensaje("Hola de nuevo " . $session->nombre . " al panel de administración", "¡Bienvenido!", TOASTR_INFO);
            return redirect()->to(route_to("administracion_dashbord"));
 
          }
          else{
            crear_mensaje("El usuario y/o contraseñas son incorrectas", "Error", TOASTR_ERROR);
                return redirect()->to(route_to("administracion_acceso"));
          } 
    }
}
?>
