<?php

    $router->get('categorias','CategoriesController@index'); 

    $router->post('categorias/create','CategoriesController@create');

    $router->post('categorias/delete','CategoriesController@delete');

    $router->post('categorias/edit','CategoriesController@update');

    $router->get('admUsuarios', 'UsuarioController@index');

    $router->post('usuario/create','UsuarioController@create');

    $router->post('usuario/delete','UsuarioController@delete');

    $router->post('usuario/update','UsuarioController@update');

    $router->get('index','PagesController@index'); 

    $router->get('quemSomos','PagesController@quemSomos'); 

    $router->get('produtos','PagesController@produtos'); 

    $router->get('view-visualizar-produto','PagesController@viewProduto'); 

    $router->get('dashboard','PagesController@dashboardAdimin');
    
    $router->get('adm-produtos','ProdutoController@index');

    $router->get('produtos/pesquisa','ProdutoController@show');

    $router->post('produtos/delete','ProdutoController@delete');

    $router->post('produtos/create','ProdutoController@create');

    $router->post('produtos/editar','ProdutoController@update');

    $router->post('produtos/visualizar','ProdutoController@imagem')

?>
