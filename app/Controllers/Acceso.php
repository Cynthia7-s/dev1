<?php

namespace App\Controllers\Usuario;

use App\Controllers\BaseController;

class Acceso extends BaseController {

    // Función Principal
    public function index() {
        return view('login');
    }

} // Fin de la clase Acceso
