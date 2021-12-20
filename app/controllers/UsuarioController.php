<?php

namespace App\Controllers;

use App\Core\App;
use Exception;
use App\Controllers\LoginController;

class UsuarioController
{


    public function index()
    {
        LoginController::verifySession();

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
        LoginController::verifySession();

        $parameters = [ 

            'email' => $_POST['email'],
            'nome' => $_POST['nome'] ,
            'senha' => $_POST['senha']
    
        ]; 

        
    
        if ($parameters['email'] && $parameters['nome'] && $parameters['senha']) {
            $parameters['senha'] = md5($parameters['senha']);
            app::get('database')->insert('usuarios', $parameters); 
        }
    
    
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
        LoginController::verifySession();
        
        $parameters = [ 

            'email' => $_POST['email'],
            'nome' => $_POST['nome'] ,
            'senha' => $_POST['senha']
    
        ]; 

        if(empty($parameters['senha'])){
            unset($parameters['senha']);
        } else {
            $parameters['senha'] = md5($parameters['senha']);
        }
        
        if ($parameters['email'] && $parameters['nome'] ) {
            app::get('database')->edit('usuarios', $parameters, $_POST['id']); 
        } 
        header('location: /admUsuarios');
    }

    public function delete()
    {
        LoginController::verifySession();

        app::get('database')->delete('usuarios', $_POST['id']); 

        header('location: /admUsuarios'); 


    }
}