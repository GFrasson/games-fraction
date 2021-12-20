<?php

namespace App\Controllers;

use App\Core\App;
use Exception;
use App\Controllers\LoginController;

class CategoriesController
{
    public function index()
    {
        LoginController::verifySession();

        if(isset($_GET['pesquisa']) && !empty($_GET['pesquisa'])){
            $pesquisa = $_GET['pesquisa'];
            $categorias = App::get('database')->searchCategorias('categorias', $pesquisa);
        }else{
            $categorias = App::get('database')->selectAll('categorias');
        }

        $tables = [

            'categorias' => $categorias, 
        ]; 

        return view('admin/viewADMcategorias', $tables); 
        //header('location: /viewADMcategorias'); 
        
    }


    public function create()
    {
        LoginController::verifySession();
        
        $parameters = [ 

            'nome_categoria' => $_POST['nome_categoria']
        
        ];
        if (trim($parameters['nome_categoria'])){ 
    
        app::get('database')->insert('categorias', $parameters); 
    
        }
    
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
        LoginController::verifySession();

        $parameters = [ 

            'nome_categoria' => $_POST['nome_categoria'] 
    
        ]; 

        if (trim($parameters['nome_categoria'])){

            app::get('database')->edit('categorias', $parameters, $_POST['id']);

        }
        header('location: /categorias'); 
    }

    public function delete()
    {
        LoginController::verifySession();

        app::get('database')->delete('categorias', $_POST['id']); 

        header('location: /categorias'); 


    }
}