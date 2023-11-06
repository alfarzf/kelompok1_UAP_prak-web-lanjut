<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class WargaController extends BaseController
{
    public function index()
    {
        return view('warga/home_warga');
    }
}