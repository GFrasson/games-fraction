<?php
//categorias
$router->get('categorias','CategoriesController@index'); 

$router->post('categorias/create','CategoriesController@create');

$router->post('categorias/delete','CategoriesController@delete');

$router->post('categorias/edit','CategoriesController@update');


//Usuários
$router->get('admUsuarios', 'UsuarioController@index');

$router->post('usuario/create','UsuarioController@create');

$router->post('usuario/delete','UsuarioController@delete');

$router->post('usuario/update','UsuarioController@update');


//PagesController
$router->get('login','PagesController@login');

$router->get('dashboard','PagesController@dashboardAdimin');

//Login

$router->post('fazLogin','LoginController@fazLogin');

$router->post('logout','LoginController@logout');
?>
