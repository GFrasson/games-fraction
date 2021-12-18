<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PagesController
{


    public function index()
    {
        
    
        $produtos = App::get('database')->selectAll('produtos');
        echo count($produtos);
        die();
        for ($i = 0; $i < count($produtos); $i++) {
            $produto_imagens = App::get('database')->select_produto_imagem($produtos[$i]->id);

            $produtos[$i]->imagens = $produto_imagens;
        }
        // var_dump($produtos);
        // die();

        $tables = [
            'produtos' => $produtos,
        ];

        return view('site/index', $tables); 
        
    }

    public function quemSomos()
    {
        
        return view('site/quemSomos'); 
       
        
    }

    public function produtos()
    {
        $produto = App::get('database')->selectAll('produtos');
        return view('site/produtos', compact("produtos"));
        
        
    }

    public function viewProduto()
    {
        $produto = App::get('database')->selectAll('produtos');

        return view('site/view-visualizar-produto', compact("produtos"));
        
    }

    public function dashboardAdimin()
    {
        
        return view('admin/dashboard'); 
         
        
    }


    

        

       


    

    
}