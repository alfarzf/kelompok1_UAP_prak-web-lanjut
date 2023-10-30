<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\PengurusController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');

// Pengurus
$routes->get('/pengurus', [PengurusController::class ,'index']);