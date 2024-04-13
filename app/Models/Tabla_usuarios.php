<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

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
    public function create_data($data =array()){
       if(!empty($data)){
         return $this
               ->table($this->table)
               ->insert($data);

       }//end if
       else{
             return FALSE;
       }//end else

    } //end create

    public function get_user($constraints = array()){
        return $this
        ->table($this->table)
        ->where($constraints)
         ->get()
      ->getRow();
    }//end get user


    public function get_table(){
        return $this
        ->table($this->table)
         ->get()
      ->getResult();
    }//end get_table
    
    public function update_data($id=0, $data= array()){
              if(!empty($data)){
        
                   return $this
                  ->table($this->table)
                  ->where([$this->primaryKey=>$id])
                  ->set($data)
                 ->update();
               }
               else{
                return FALSE;
               }
    }//end get_table

    public function iniciar_sesion($correo="", $password="") {
      if ($correo != NULL && $password != NULL) {
          return $this
              ->table($this->table)
              ->select("usuario.idusuario, estatus_usuario, usuario.nombre, usuario.apellido_paterno,
                  usuario.apellido_materno, usuario.sexo, usuario.correo,
                  usuario.imagen_perfil, rol.idrol, rol.rol") // Coma faltante aquí
              ->join("rol", "usuario.idrol=rol.idrol")
              ->where("usuario.correo", $correo)
              ->where("usuario.password", $password)
              ->first();
      } else {
          return array();
      }
  }
  
    

}