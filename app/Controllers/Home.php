<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {   
        // dd(in_groups('super admin'));
        $path = "warga";
        if (in_groups("user")){
            $path = "warga";
        }else if(in_groups("super admin")){
            $path = "admin";
        }else if(in_groups("admin")){
            $path = "pengurus";
        }
            return redirect()->route($path); 
    }
    public function login(): string
    {
        return view('login');
    }
}
