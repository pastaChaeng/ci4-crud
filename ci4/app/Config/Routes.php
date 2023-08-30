<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Student's route
$routes->get('/studs', 'StudController::index');
$routes->get('/studs/create', 'StudController::createStuds');
$routes->post('/studs/store', 'StudController::storeStuds');
$routes->get('/studs/edit/(:num)', 'StudController::editStuds/$1');
$routes->post('/studs/update/(:num)', 'StudController::updateStuds/$1');
$routes->get('/studs/delete/(:num)', 'StudController::deleteStuds/$1');