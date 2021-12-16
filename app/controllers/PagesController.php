<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PagesController
{
    public function index()
    {
        $total_reg = 10;
        $produto = App::get('database')->selectAll('produtos');

        $tables = [

            'produtos' => $produto, 
        ]; 

        return view('site/index', $tables);
    }



}