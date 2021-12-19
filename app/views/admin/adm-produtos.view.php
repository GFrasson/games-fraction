<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Administrativa Produtos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/adm-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Zen+Maru+Gothic&display=swap" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c11bde093d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../public/css/navbarADM.css">
    <script type="text/javascript" src="../../../public/js/navbarADM.js"></script>

</head>

<body>
    <header class="navbar-adm">
        <div id="caixa" class="caixa-fechada">

            <input type="checkbox" id="checkbox-menuS" onclick="openSB()">
            <label class="label" for="checkbox-menuS"><img class="icon-nav" src="../../../public/assets/configuracoes.svg"></label>

        </div>
        <div id="topicos" class="topicos-fechados">
            <a href="#GerenciarCategorias"><img class="icon-nav" src="../../../public/assets/rede.svg"><br>Categorias</a>
            <a href="#GerenciarProdutos"><img class="icon-nav" src="../../../public/assets/cubo.svg"><br>Produtos</a>
            <a href="#GerenciarUsuários"><img class="icon-nav" src="../../../public/assets/usuario-de-comentarios.svg"><br>Usuários</a>
            <a href="#LogOut"><img class="icon-nav" src="../../../public/assets/kisspng-computer-icons-exit-sign-emergency-exit-logo-downl-5b383e15c54734.9298414015304125658081.png"><br>Log-out</a>
        </div>
    </header>

    <div>
        <h1 class="titulox">Produtos</h1>
    </div>

    <div class="container">
        <form method="GET" action="adm-produtos">
            <input name="pesquisa" id="produto" class="barrapesquisa" placeholder=" Digite o nome do produto:" type="text">
        </form>

        <div class="d-flex justify-content-between">
            <span></span>
            <button type="button" class="btn  view botaoadd" data-toggle="modal" data-target=".addProduto">
                <i class="fas fa-plus-circle"></i>
            </button>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th class="price-title">Preço</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <?php

            ?>
            <?php require 'modais-produtos/adicionar.php';
            ?>

            <tbody>

                <?php
                //verifica se existe produtos  
                
                    foreach ($produtos as $produto) :

                        require 'modais-produtos/editar.php';
                        require 'modais-produtos/deletar.php';
                        require 'modais-produtos/visualizar.php';
                ?>

                        <tr>
                            <th scope="row">#<?= $produto->id; ?></th>

                            <td><?= $produto->nome_produto; ?></td>
                            <td class="price-value">R$<?= $produto->preco; ?></td>
                            <td>
                                <div class="button-container d-flex flex-wrap icones">

                                    <button type="submit" class="  modal-button" data-toggle="modal" data-target=".viewProduto-<?= $produto->id; ?>">
                                        <i class="fas fa-eye"></i>
                                    </button>

                                    <button type="button" class="  modal-button" data-toggle="modal" data-target=".editProduto-<?= $produto->id; ?>">
                                        <i class="fas fa-pencil-alt"></i>
                                    </button>
                                    <button type="button" class="  modal-button " data-toggle="modal" data-target=".deleteProduto-<?= $produto->id; ?>">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </td>

                        </tr>
                    <?php endforeach;
              ?>
            </tbody>


        </table>






        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>