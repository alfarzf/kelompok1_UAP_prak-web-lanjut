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
$routes->get('/admin/add_akun', [AdminController::class ,'add_akun']);
$routes->get('/admin/informasi', [AdminController::class ,'informasi']);
$routes->get('/admin/informasi/create', [AdminController::class ,'informasi_create']);
$routes->get('/admin/informasi/(:any)/edit', [AdminController::class ,'informasi_edit']);
$routes->post('/admin/informasi/store', [AdminController::class ,'informasi_store']);
$routes->put('/admin/informasi/(:any)', [AdminController::class ,'informasi_update']);
$routes->delete('/admin/informasi/(:any)', [AdminController::class ,'informasi_destroy']);
$routes->get('/admin/laporan', [AdminController::class ,'laporan']);
$routes->get('/admin/laporan/create', [AdminController::class ,'laporan_create']);
$routes->get('/admin/laporan/(:any)/edit', [AdminController::class ,'laporan_edit']);
$routes->post('/admin/laporan/store', [AdminController::class ,'laporan_store']);
$routes->put('/admin/laporan/(:any)', [AdminController::class ,'laporan_update']);
$routes->delete('/admin/laporan/(:any)', [AdminController::class ,'laporan_destroy']);
$routes->get('/admin/laporan/export', [AdminController::class ,'export']);
$routes->get('/admin/daftar_warga/(:any)/edit', [AdminController::class ,'warga_edit']);
$routes->post('/admin/daftar_warga/store', [AdminController::class ,'warga_store']);
$routes->put('/admin/daftar_warga/(:any)', [AdminController::class ,'warga_update']);
$routes->delete('/admin/daftar_warga/(:any)', [AdminController::class ,'warga_destroy']);
$routes->get('/admin/warga/create', [AdminController::class ,'warga_create']);

// Pengurus
$routes->get('/pengurus', [PengurusController::class ,'index']);
$routes->get('/pengurus/blok', [PengurusController::class ,'blok']);
$routes->get('/pengurus/blok/create', [PengurusController::class ,'blok_create']);
$routes->get('/pengurus/blok/(:any)/edit', [PengurusController::class ,'blok_edit']);
$routes->post('/pengurus/blok/store', [PengurusController::class ,'blok_store']);
$routes->put('/pengurus/blok/(:any)', [PengurusController::class ,'blok_update']);
$routes->delete('/pengurus/blok/(:any)', [PengurusController::class ,'blok_destroy']);
$routes->get('/pengurus/laporan/export', [PengurusController::class ,'export']);
$routes->get('/pengurus/informasi', [PengurusController::class ,'informasi']);
$routes->get('/pengurus/informasi/create', [PengurusController::class ,'informasi_create']);
$routes->get('/pengurus/informasi/(:any)/edit', [PengurusController::class ,'informasi_edit']);
$routes->post('


/pengurus/informasi/store', [PengurusController::class ,'informasi_store']);
$routes->put('/pengurus/informasi/(:any)', [PengurusController::class ,'informasi_update']);
$routes->delete('/pengurus/informasi/(:any)', [PengurusController::class ,'informasi_destroy']);
$routes->get('/pengurus/laporan', [PengurusController::class ,'laporan']);
$routes->get('/pengurus/laporan/create', [PengurusController::class ,'laporan_create']);
$routes->get('/pengurus/laporan/(:any)/edit', [PengurusController::class ,'laporan_edit']);
$routes->post('/pengurus/laporan/store', [PengurusController::class ,'laporan_store']);
$routes->put('/pengurus/laporan/(:any)', [PengurusController::class ,'laporan_update']);
$routes->delete('/pengurus/laporan/(:any)', [PengurusController::class ,'laporan_destroy']);
$routes->get('/pengurus/warga', [PengurusController::class ,'warga']);
$routes->get('/pengurus/warga/create', [PengurusController::class ,'warga_create']);
$routes->get('/pengurus/warga/(:any)/edit', [PengurusController::class ,'warga_edit']);
$routes->post('/pengurus/warga/store', [PengurusController::class ,'warga_store']);
$routes->put('/pengurus/warga/(:any)', [PengurusController::class ,'warga_update']);
$routes->delete('/pengurus/warga/(:any)', [PengurusController::class ,'warga_destroy']);

//Warga
$routes->get('/warga', [WargaController::class ,'index']);
$routes->get('/warga/laporan/create', [WargaController::class ,'laporan_create']);
$routes->post('/warga/laporan/create', [WargaController::class ,'laporan_save']);