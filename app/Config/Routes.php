<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//la ruta esta compuesta por ruta, controlador::metodo
$routes->get('planes','PlanesController::index');
$routes->get('clientes','ClientesController::index');
$routes->get('lineas','LineasTelefonicasController::index');