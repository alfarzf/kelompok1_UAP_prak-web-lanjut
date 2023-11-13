<?php

use App\Controllers\SuperAdmin;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\PengurusController;
use App\Controllers\WargaController;

/**
 * @var RouteCollection $routes
 */$routes->get('/', 'Home::index');

 $routes->get('admin', 'PengurusController::index', ['filter' => 'role:admin']);

$routes->get('/pengurus', [PengurusController::class, 'index']);
$routes->get('/warga', [WargaController::class, 'index']);
$routes->get('/superadmin', [SuperAdmin::class, 'index']);