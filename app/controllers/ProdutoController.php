<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ProdutoController
{
    public function index() //Listar todos itens da página
    {
        $produtos = App::get('database')->selectAll('produtos');

        for ($i = 0; $i < count($produtos); $i++) {
            $produto_imagens = App::get('database')->select_produto_imagem($produtos[$i]->id);

            $produtos[$i]->imagens = $produto_imagens;
        }

        $categorias = App::get('database')->categorias('categorias');

        $tables = [
            'produtos' => $produtos,
            'categorias' => $categorias
        ];

        return view('admin/adm-produtos', $tables);
    }

    public function show() //Mostrar 1 item da página
    {
        $verifica = 0;

        $pesquisa = $_GET['pesquisa'];

        $produtos = App::get('database')->searchprodutos('produtos', $pesquisa);

        $categorias = App::get('database')->categorias('categorias');

        $verifica = count($produtos);
        
        if($verifica == 0){
            session_start();
            $_SESSION['erro'] = 'Nenhum resultado encontrado';
            
            return view('admin/adm-produtos');
        }
        else{
            for ($i = 0; $i < count($produtos); $i++) {
                $produto_imagens = App::get('database')->select_produto_imagem($produtos[$i]->id);
    
                $produtos[$i]->imagens = $produto_imagens;
                $tables = [
                    'produtos' => $produtos,
                    'categorias' => $categorias
                ];
            }
            
            $tables = [
                'produtos' => $produtos,    
                'categorias' => $categorias  
            ];
            return view('admin/adm-produtos', $tables);
        }
    }

    public function create()
    {

        $parameters = [
            'nome_produto' => $_POST['nome'],
            'descricao' => $_POST['descricao'],
            'preco' => $_POST['preco'],
            'categoria_idcategoria' => $_POST['categoria']
        ];

        app::get('database')->insert('produtos', $parameters);

        $produto_id = app::get('database')->select_produto();

        $produto_id = $produto_id[0]->id;

        $coluna = $_FILES["txtimagem"]['name'];

        for ($i = 0; $i < count($_FILES["txtimagem"]['name']); $i++) {
            $imagens = [
                'produto_idproduto' => $produto_id,
                'nome_imagem' => $coluna[$i]
            ];

            app::get('database')->insert('imagens', $imagens);
        }


        header('location: /adm-produtos');

        // $imagem = $_FILES["txtimagem"]["name"];

        //enviar a imagem
        // if ($_FILES["txtimagem"]["error"] != 0) {
        //    echo "Não foi possível processar a imagem";
        //    die();
        // } else {
        //     move_uploaded_file($imagem, "../../../../public/img/" . $imagem);
        // }
    }
    public function store() //Salvar item no banco
    {
    }

    public function edit()
    {
    }

    public function update() //Editar algum item no BD
    {
        $parameters = [
            'nome_produto' => $_POST['nome'],
            'descricao' => $_POST['descricao'],
            'preco' => $_POST['preco'],
            'categoria_idcategoria' => $_POST['categoria']
        ];

        app::get('database')->edit('produtos', $parameters, $_POST['id']);

        $contador_imagem = 0;

        if ($_FILES["txtimagem"]) {
            $contador_imagem = count($_FILES["txtimagem"]['name']);
        }
        if ($contador_imagem > 0) {
            app::get('database')->delete_imagens('imagens', $_POST['id']);

            for ($i = 0; $i < count($_FILES["txtimagem"]['name']); $i++) {

                $imagens = [
                    'produto_idproduto' => $_POST['id'],
                    'nome_imagem' => $_FILES["txtimagem"]['name'][$i]
                ];
                
                app::get('database')->insert('imagens', $imagens);
            }
        }

        header('location: /adm-produtos');
    }

    public function delete()
    {
        App::get('database')->delete('produtos', $_POST['id']);
        header('Location: /adm-produtos');
    }


}
