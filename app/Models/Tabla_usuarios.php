<?php

namespace App\Models;

use CodeIgniter\Model;

class Tabla_usuarios extends Model
{
    protected $table      = 'usuario'; 
    protected $primaryKey = 'idusuario'; 
    protected $returnType = ''; 
    protected $allowedFields = [
        'estatus_usuario','idusuario','nombre', 'apellido_paterno','apellido_materno',
         'sexo','correo','password','imagen_perfil', 'idrol'
    ]; 

    //====================================
    //consultas espceificas o basicas
    //===================================
    //create  Read Update Delete
    public function create($data =array()){
       if(!empty($data)){

       }//end if
       else{

       }//end else

    } //end function
    
}//end class
