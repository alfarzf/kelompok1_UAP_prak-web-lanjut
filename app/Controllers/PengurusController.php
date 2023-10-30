<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class PengurusController extends BaseController
{
    public function index()
    {
        return view('pengurus/home');
    }
}
