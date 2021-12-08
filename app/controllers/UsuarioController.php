<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UsuarioController
{
    public function index()
    {
        $usuario = App::get('database')->selectAll('usuarios');

        $tables = [

            'usuarios' => $usuario, 
        ]; 

        return view('admin/admUsuarios', $tables); 
        //header('location: /admUsuarios'); 
        
    }

    public function show()
    {
         

    }

    public function create()
    {
        
        $parameters = [ 

            'email' => $_POST['email'],
            'nome' => $_POST['nome'] ,
            'senha' => $_POST['senha']
    
        ]; 
    
        app::get('database')->insert('usuarios', $parameters); 
    
     
    
        header('location: /admUsuarios'); 
    
    
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

            'email' => $_POST['email'],
            'nome' => $_POST['nome'] ,
            'senha' => $_POST['senha']
    
        ]; 

        app::get('database')->update('usuarios', $parameters, $_POST['id']);
        header('location: /admUsuarios'); 
    }

    public function delete()
    {
        
        app::get('database')->delete('usuarios', $_POST['id']); 

        header('location: /admUsuarios'); 


    }
}