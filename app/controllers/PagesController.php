<?php

namespace App\Controllers;

use App\Core\App;
use Exception;
use App\Controllers\LoginController;

class PagesController
{

    public function login()
    {

        return view('site/login'); 

    }

    public function dashboardAdimin()
    {

        LoginController::verifySession();

        return view('admin/dashboard'); 


    }

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
        $quantItens = App::get('database')->contaItens('produtos');
        $itensPorPag = 10;
        $pagina = 1;

        if(isset($_GET['pagina']) && !empty($_GET['pagina'])){
            $pagina = intval($_GET['pagina']);
        }
      
        
        $quantPaginas = ceil($quantItens/$itensPorPag);
        $limiteInicial = ($pagina*$itensPorPag)-$itensPorPag;
     
        $produtos = App::get('database')->selectAll('produtos',$limiteInicial,$itensPorPag);
      
       
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
            'quantPaginas' => $quantPaginas,
            'paginaAtual' => $pagina
        ];

        return view('site/produtos',$tables);
        
        
    }

    public function viewProduto()
    {
        if(isset($_GET['produto'])){
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
        } else {
            redirect('produtos');
        }
           
    }    
}