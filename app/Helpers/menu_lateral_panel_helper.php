<?php
    /**
     * Nos va a permitir la creacón  e instacia de
     * nuestro menu panel lateral de manera dinámica
     * [menu]
     * [Opción A]
     * 
     * [Opción B]
     *   [Opción B1]
     *   [Opción B2]
     * 
     * [Opción C]
     *   [Opción C1]
     *   [Opción C2]
     */

     function configurar_menu_panel(){
         //Permite aalmacenar todas las opciones dentro del menu 
         $menu = array();
         //Permite identificar las caracteristicas de la opcion
         $menu_opcion = array();
         //Permite identificar las caracteristicas de la subopcion que se encuentra en la opcion principal
         $menu_sub_opcion = array();

         //TAREA dashboard
         $menu_opcion = array();
         $menu_opcion['is_active'] = FALSE;
         $menu_opcion['href'] = route_to("dashboard");
         $menu_opcion['text'] = 'Dashboard';
         $menu_opcion['icon'] = 'fa fa-area-chart';
             $menu_opcion['submenu'] = array();
         $menu['dashboard'] = $menu_opcion;

        //EJEMPLO CON OPCIONES
        $menu_opcion = array();
        $menu_opcion['is_active'] = FALSE;
        $menu_opcion['href'] = "#";
        $menu_opcion['text'] = 'Opcion B';
        $menu_opcion['icon'] = 'fa fa-battery-full';
        
            $menu_opcion['submenu'] = array();
                $menu_sub_opcion = array();
                $menu_sub_opcion['is_active'] = FALSE;
                $menu_sub_opcion['href'] = route_to('dashboard');
                $menu_sub_opcion['text'] = 'Opción B1';
                $menu_sub_opcion['icon'] = 'fa fa-battery-three-quarters';
        $menu_opcion['submenu'] ['opcionb1']= $menu_sub_opcion;

            $menu_opcion['submenu'] = array();
                $menu_sub_opcion = array();
                $menu_sub_opcion['is_active'] = FALSE;
                $menu_sub_opcion['href'] = route_to('dashboard');
                $menu_sub_opcion['text'] = 'Opción B2';
                $menu_sub_opcion['icon'] = 'fa fa-battery-half';
            $menu_opcion['submenu'] ['opcionb2']= $menu_sub_opcion;
        $menu['opcionB'] = $menu_opcion;



    return $menu;
 }//end configurar_menu_panel

     function crear_menu_panel(){
        $menu = configurar_menu_panel();
       // dd($menu);
        $html = '';
        $html.='
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-header">Menú lateral</li>';
            foreach($menu as $opcion) {
               // dd($opcion);
                if($opcion["href"] != "#"){
                    $html.='
                         <li class="nav-item">
                            <a href="'.$opcion["href"].'" class="nav-link '.(($opcion["is_active"] == TRUE) ? "active" : "" ).'">
                                <i class="'.$opcion["icon"].'"></i>
                                <p>'.$opcion["text"].'</p>
                             </a>
                         </li>
                    ';
                }//end if
                else{
                    $html.='
                    <li class="nav-item">
                    <a href="#" class="nav-link '.(($opcion["is_active"] == TRUE) ? "active" : "" ).'">
                      <i class="nav-icon '.$opcion["icon"].'"></i>
                      <p>
                      '.$opcion["text"].'
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>';
                    if(sizeof($opcion["submenu"]) > 0){
                        $html.= '<ul class="nav nav-treeview">';
                    foreach($opcion["submenu"] as $sub_opcion_menu){
                        $html.='
                             <li class="nav-item">
                                 <a href="#" class="nav-link '.(($sub_opcion_menu["is_active"] == TRUE) ? "active" : "" ).'">
                                     <i class="'.$sub_opcion_menu["icon"].' nav-icon"></i>
                                     <p>'.$sub_opcion_menu["text"].'</p>
                                 </a>
                             </li>
                        ';
                    }//end foreach subopcion
                    $html.='</ul>';
                }// end if sizeof
                  $html.'</li>
                    ';
                }//end 
            }
      $html.='</ul>';
      return $html;
     }//end crear_menu_panel
