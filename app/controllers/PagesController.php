<?php

namespace App\Controllers;

use App\Core\App;
use Exception;
use App\Controllers\LoginController;

class PagesController
{

    public function login()
    {

        return view('site/login'); 

    }

    public function dashboardAdimin()
    {

        LoginController::verifySession();

        return view('admin/dashboard'); 


    }
    
}