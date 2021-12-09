<?php



$router->get('admUsuarios', 'UsuarioController@index');

$router->post('usuario/create','UsuarioController@create');
$router->post('usuario/delete','UsuarioController@delete');
$router->post('usuario/update','UsuarioController@update');

?>