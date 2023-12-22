<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/try_login', 'CustomerController::try_login');

$routes->get('/login', 'LoginController::login');

$routes->get('/CustomerHome', 'CustomerController::index');
$routes->get('CustomerRecords', 'CustomerController::record');
$routes->get('addrecords', 'CustomerController::addrecord');
$routes->post('addrecords', 'CustomerController::save');

