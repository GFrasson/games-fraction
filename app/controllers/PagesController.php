<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PagesController
{


    public function index()
    {
        
    
        $produtos = App::get('database')->selectAll('produtos');
        
        for ($i = 0; $i < count($produtos); $i++) {
            $produto_imagens = App::get('database')->select_produto_imagem($produtos[$i]->id);

            $produtos[$i]->imagens = $produto_imagens;
        }
       
         

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
        
        $produtos = App::get('database')->selectAll('produtos');
        for ($i = 0; $i < count($produtos); $i++) {
            $produto_categorias = App::get('database')->produtoCategoria($produtos[$i]->categoria_idcategoria);

            $produtos[$i]->categorias = $produto_categorias;
        }
        //var_dump($produto_categorias);
    //    var_dump($produtos);
    //     die();
        
        for ($i = 0; $i < count($produtos); $i++) {
            $produto_imagens = App::get('database')->select_produto_imagem($produtos[$i]->id);

            $produtos[$i]->imagens = $produto_imagens;
        }


        $tables = [
            'produtos' => $produtos
        ];
        return view('site/produtos',$tables);
        
        
    }

    public function viewProduto()
    {
        $produtos = App::get('database') -> select('produtos', $_GET['produto']);
        for ($i = 0; $i < count($produtos); $i++) {
            $produto_categorias = App::get('database')->produtoCategoria($produtos[$i]->categoria_idcategoria);

            $produtos[$i]->categorias = $produto_categorias;
        }

        for ($i = 0; $i < count($produtos); $i++) {
            $produto_imagens = App::get('database')->select_produto_imagem($produtos[$i]->id);

            $produtos[$i]->imagens = $produto_imagens;
        }

        $tables = [
            'produtos' => $produtos,
        ];

        return view('site/view-visualizar-produto', $tables);
        
    }

    public function dashboardAdimin()
    {
        
        return view('admin/dashboard'); 
         
        
    }


    

        

       


    

    
}