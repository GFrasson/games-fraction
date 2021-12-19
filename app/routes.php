<?php
    
    $router->get('projetoContato', 'ControllerContato@index');

    $router->post('contato/enviar','ControllerContato@enviar');
    

$router->get('categorias','CategoriesController@index'); 

$router->post('categorias/create','CategoriesController@create');

$router->post('categorias/delete','CategoriesController@delete');

$router->post('categorias/edit','CategoriesController@update');

$router->get('admUsuarios', 'UsuarioController@index');

$router->post('usuario/create','UsuarioController@create');

$router->post('usuario/delete','UsuarioController@delete');

$router->post('usuario/update','UsuarioController@update');

?>
