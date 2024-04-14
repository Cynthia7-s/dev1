<?php

namespace App\Controllers\Usuarios;
use App\Controllers\BaseController;

class Logout extends BaseController {


    public function index(){
       $session=session();
       $session->destroy();
    
       return redirect()->to(route_to("administracion_acceso"));


    }//end index

    
}
?>
