<?php

use App\Controllers\SuperAdmin;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\PengurusController;
use App\Controllers\WargaController;
use App\Controllers\AdminController;


/**
 * @var RouteCollection $routes
 */$routes->get('/', 'Home::index');

 $routes->get('admin', 'PengurusController::index', ['filter' => 'role:admin']);

// warga
$routes->get('/warga', [WargaController::class ,'index']);

// super admin
$routes->get('/admin', [AdminController::class ,'index']);

// daftar warga
$routes->get('/daftar_warga', [AdminController::class ,'daftar_warga']);
$routes->get('/pengurus', [PengurusController::class, 'index']);
$routes->get('/superadmin', [SuperAdmin::class, 'index']);

