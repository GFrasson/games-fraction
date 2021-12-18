<?php
    $router->get('adm-produtos','ProdutoController@index');

    $router->get('produtos/pesquisa','ProdutoController@show');

    $router->post('produtos/delete','ProdutoController@delete');

    $router->post('produtos/create','ProdutoController@create');

    $router->post('produtos/editar','ProdutoController@update');

    $router->post('produtos/visualizar','ProdutoController@imagem')
?>