<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class CategoriesController
{
    public function index()
    {
        $categorias = App::get('database')->selectAll('categorias');

        $tables = [

            'categorias' => $categorias, 
        ]; 

        return view('admin/viewADMcategorias', $tables); 
        //header('location: /viewADMcategorias'); 
        
    }

    public function show()
    {
         

    }

    public function create()
    {
        
        $parameters = [ 

            'nome_categoria' => $_POST['nome_categoria']
        
        ]; 
    
        app::get('database')->insert('categorias', $parameters); 
    
     
    
        header('location: /categorias'); 
    
    
    }

    public function store()
    {

    }

    public function edit()
    {
  
    }

    public function update()
    {
        $parameters = [ 

            'nome_categoria' => $_POST['nome_categoria'] 
    
        ]; 

        app::get('database')->edit('categorias', $parameters, $_POST['id']);
        header('location: /categorias'); 
    }

    public function delete()
    {
        
        app::get('database')->delete('categorias', $_POST['id']); 

        header('location: /categorias'); 


    }
}