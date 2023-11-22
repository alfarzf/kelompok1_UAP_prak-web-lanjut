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

//Admin
$routes->get('/admin', [AdminController::class ,'index']);
$routes->get('/admin/daftar_warga', [AdminController::class ,'daftar_warga']);

// Pengurus
$routes->get('/pengurus', [PengurusController::class ,'index']);
$routes->get('/pengurus/blok', [PengurusController::class ,'blok']);
$routes->get('/pengurus/blok/create', [PengurusController::class ,'blok_create']);
$routes->get('/pengurus/blok/(:any)/edit', [PengurusController::class ,'blok_edit']);
$routes->post('/pengurus/blok/store', [PengurusController::class ,'blok_store']);
$routes->put('/pengurus/blok/(:any)', [PengurusController::class ,'blok_update']);
$routes->delete('/pengurus/blok/(:any)', [PengurusController::class ,'blok_destroy']);

$routes->get('/pengurus/informasi', [PengurusController::class ,'informasi']);
$routes->get('/pengurus/informasi/create', [PengurusController::class ,'informasi_create']);
$routes->get('/pengurus/informasi/(:any)/edit', [PengurusController::class ,'informasi_edit']);
$routes->post('/pengurus/informasi/store', [PengurusController::class ,'informasi_store']);
$routes->put('/pengurus/informasi/(:any)', [PengurusController::class ,'informasi_update']);
$routes->delete('/pengurus/informasi/(:any)', [PengurusController::class ,'informasi_destroy']);

$routes->get('/pengurus/laporan', [PengurusController::class ,'laporan']);
// $routes->get('/pengurus/laporan/create', [PengurusController::class ,'laporan_create']);
$routes->get('/pengurus/laporan/(:any)/edit', [PengurusController::class ,'laporan_edit']);
// $routes->post('/pengurus/laporan/store', [PengurusController::class ,'laporan_store']);
$routes->put('/pengurus/laporan/(:any)', [PengurusController::class ,'laporan_update']);
// $routes->delete('/pengurus/laporan/(:any)', [PengurusController::class ,'laporan_destroy']);

//Warga
$routes->get('/warga', [WargaController::class ,'index']);