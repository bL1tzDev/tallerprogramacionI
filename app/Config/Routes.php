<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//User routes
$routes->get('/', 'Home::index');
$routes->get('/terms', 'Home::terminos');
$routes->get('/about', 'Home::nosotros');
$routes->get('/comerc', 'Home::comercializacion');
$routes->get('/products', 'Home::catalogo');
$routes->get('/contact-us', 'Home::contacto');
$routes->get('/product', 'Home::productoReview');
$routes->get('/login', 'Home::iniciarsesion');//quitar
$routes->get('quitarItem/(:any)', 'cartController::removeItem/$1');
$routes->get('producto/(:num)', 'productController::mostrarProducto/$1');
$routes->get('vaciarCarrito', 'cartController::removeAll');

//admin get routes

$routes->get('/admin', 'AdminController::index');
$routes->get('/agregarProducto', 'AdminController::nuevoProducto');
$routes->get('consultas', 'AdminController::listarConsultas');
$routes->get('listaProductos', 'AdminController::listarProductos');
$routes->get('editarProducto/(:num)', 'ProductController::editarProducto/$1');
$routes->get('actConsulta/(:num)','AdminController::actualizarEstadoConsulta/$1');


//admin post routes

$routes->post('actualizar_producto', 'ProductController::actualizarProducto');
$routes->post('agregar_producto','ProductController::agregarProducto');


$routes->get('/logout', 'UserController::cerrarSesion');


//user post routes

$routes->post('formulario_contacto','UserController::registrarConsulta');
$routes->post('registrar_usuario','UserController::registrarUsuario');
$routes->post('iniciar_sesion','UserController::inciarSesion');
$routes->post('addToCart','cartController::addItem');

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
