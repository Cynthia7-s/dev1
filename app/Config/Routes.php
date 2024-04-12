<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 *  //Get -mostrar o solicitar datos en especificos
 * $routes->get('/', 'Controlador::funcion')
 * //Post - Body Request
 * $routes->get('/', 'Controlador::funcion');
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

// View Example
$routes->get('cero', 'Home::funcion_pro');
//======================================================================================
//RUTAS DE LOGIN 
//========================================================================================

$routes->get('administracion_acceso', 'Usuario\Login::index', ['as' => 'administracion_acceso']);
$routes->post('validar_usuario','Usuario\Login::existe_usuario',["as"=>'validar_usuario']);
//=====================================================================================




// Login View Route
$routes->get('login', 'Home::login');

// Login View Route
$routes->get('../panel/dashboard', 'Dashboard::index');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
