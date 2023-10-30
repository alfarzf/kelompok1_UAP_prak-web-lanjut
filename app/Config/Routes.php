<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\PengurusController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Pengurus
$routes->get('/pengurus', [PengurusController::class ,'index']);