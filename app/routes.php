<?php

 $router->get('categorias','CategoriesController@index'); 

 $router->post('categorias/create','CategoriesController@create');

 $router->post('categorias/delete','CategoriesController@delete');

 $router->post('categorias/edit','CategoriesController@update');