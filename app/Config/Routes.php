<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\PengurusController;
use App\Controllers\WargaController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');

// Pengurus
$routes->get('/pengurus', [PengurusController::class ,'index']);

// warga
$routes->get('/warga', [WargaController::class ,'index']);