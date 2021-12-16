<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PagesController
{
    public function index()
    {
        $usuario = App::get('database')->selectAll('produtos');

        $tables = [

            'produtos' => $produto, 
        ]; 

        return view('site/index', $tables); //quando vc voltar pra terminar isso, começe com o for na view para mostrar os produtos do bd em vez dos itens estaticos;
        
    }



}