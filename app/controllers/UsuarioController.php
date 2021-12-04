<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UsuarioController
{
    public function index()
    {
        $usuario = App::get('database')->selectAll('usuario');

        $tables = [

            'usuario' => $usuario, 
        ]; 

        return view('admUsuarios', $tables); 
    }

    public function show()
    {
         

    }

    public function create()
    {
        
        $parameters = [ 

            'nome' => $_POST['nome'] ,
            'email' => $_POST['email'],
            'senha' => $_POST['senha'],
    
        ]; 
    
        app::get('database')->insert('usuario', $parameters); 
    
     
    
        header('Location: /admUsuarios'); 
    
    
    }

    public function store()
    {

    }

    public function edit()
    {
  
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
        app::get('database')->delete('usuarios', $_POST['id']); 

        header('Location: /admUsuarios'); 


    }
}