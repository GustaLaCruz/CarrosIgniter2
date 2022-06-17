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
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::page');
$routes->match(['get','post'],'sair', 'Home::sair');
$routes->match(['get','post'],'cadastro', 'Home::cadastro');
$routes->match(['get','post'],'listaCarros', 'Home::listaCarros');
$routes->match(['get','post'], 'logar', 'Home::logar');
$routes->match(['get','post'], 'login', 'Home::login');
$routes->match(['get','post'],'excluir/(:num)', 'Home::excluir/$1');
$routes->match(['get','post'],'editar/(:num)', 'Home::editar/$1');
$routes->match(['get','post'],'gravar', 'Home::gravar');    
$routes->match(['get','post'],'editar/gravar', 'Home::gravar');
$routes->match(['get','post'],'excluirCarro/(:num)', 'Home::excluirCarro/$1');
$routes->match(['get','post'],'editarCarro/(:num)', 'Home::editarCarro/$1');
$routes->match(['get','post'],'gravarCarro', 'Home::gravarCarro');    
$routes->match(['get','post'],'editarCarro/gravarCarro', 'Home::gravarCarro');   
$routes->get('pessoa', 'Home::pessoas');
$routes->get('carros', 'Home::carros');
$routes->get('(:any)', 'Home::page/$1');

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
