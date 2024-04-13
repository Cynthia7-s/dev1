<?php
function breadcrumb_panel($breadcrumb = array(), $nombre_breadcrumb = ''){
   // d($breadcrumb);
    $html = '';
    $html.= '  
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">' .$nombre_breadcrumb. '</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>';
                foreach ($breadcrumb as $value){
                    if($value["href"] !='#'){
                        $html.='<li class="breadcrumb-item">
                        <a href="'.$value['href'].'">'.$value['titulo'].'</a>
                        </li>';
                    }
                    else{
                    $html.='<li class="breadcrumb-item active">'.$value['titulo'].'</li>';
                    }
                }
        $html.='</ol>
        </div><!-- /.col-->
    </div><!-- /.row -->
    ';
    //dd($html);
  return $html;
}


// app/Helpers/helpers.php

if (!function_exists('crear_mensaje')) {
    function crear_mensaje($mensaje, $tipo, $toastr_type) {
        // Lógica para crear el mensaje
        // Por ejemplo, mostrar una alerta, guardar en una sesión, etc.
    }
}

//
               // 