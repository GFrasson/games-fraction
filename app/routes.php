<?php
    $router->get('adm-produtos','ProdutoController@index');

    $router->post('produtos/delete','ProdutoController@delete');

    $router->post('produtos/create','ProdutoController@create');

    $router->post('produtos/editar','ProdutoController@update');

    $router->post('produtos/visualizar','ProdutoController@imagem')
?>