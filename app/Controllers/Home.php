<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {   
        // dd(in_groups('super admin'));   
        
        $path = "pengurus";
        if (in_groups("user")){
             $path = "warga";
         }else if(in_groups("super admin")){
            $path = "superadmin";
         }
         return redirect()->route($path); 
       }
    public function login(): string
    {
        return view('login');
    }
}
