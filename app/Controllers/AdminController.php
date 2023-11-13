<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/super_admin');
    }

    public function daftar_warga()
    {
        return view('admin/daftar_warga');
    }
}
