<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PagesController
{


    public function index()
    {
        $produto = App::get('database')->selectAll('produtos');

        $tables = [

            'produtos' => $produto, 
        ]; 

        return view('site/index', $tables); 
        //header('location: /admUsuarios'); 
        
    }

    public function quemSomos()
    {
        
        return view('site/quemSomos'); 
        //header('location: /admUsuarios'); 
        
    }

    public function produtos()
    {
        $produto = App::get('database')->selectAll('produtos');

        $tables = [

            'produtos' => $produto, 
        ]; 

        return view('site/produtos', $tables); 
        //header('location: /admUsuarios'); 
        
    }

    public function viewProduto()
    {
        $produto = App::get('database')->selectAll('produtos');

        $tables = [

            'produtos' => $produto, 
        ]; 

        return view('site/view-visualizar-produto', $tables); 
        //header('location: /admUsuarios'); 
        
    }

    public function dashboardAdimin()
    {
        
        return view('admin/dashboard'); 
         
        
    }


    

        

       


    

    
}