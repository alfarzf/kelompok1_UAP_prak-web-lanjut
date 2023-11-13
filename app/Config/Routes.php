<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\PengurusController;
use App\Controllers\WargaController;
use App\Controllers\AdminController;


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');

// Pengurus
$routes->get('/pengurus', [PengurusController::class ,'index']);

// warga
$routes->get('/warga', [WargaController::class ,'index']);

// super admin
$routes->get('/admin', [AdminController::class ,'index']);

// daftar warga
$routes->get('/daftar_warga', [AdminController::class ,'daftar_warga']);