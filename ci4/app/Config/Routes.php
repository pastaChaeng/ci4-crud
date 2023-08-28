<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Student's route
$routes->get('/studs', 'StudController::index');
$routes->get('/studs/create', 'StudController::createStuds');
