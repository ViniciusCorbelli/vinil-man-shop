<?php

/*Administrativas */

$router->get('admin/category', 'CategoryController@index'); //Home de Controle de categoria

$router->post('admin/category/create', 'CategoryController@create');
$router->post('admin/category/delete', 'CategoryController@delete');
$router->post('admin/category/edit', 'CategoryController@edit');
/*Publicas*/
$router->get('', 'PagesController@home');
$router->get('contato', 'PagesController@contato');
$router->get('quem-somos', 'PagesController@quemsomos');
$router->get('produtos', 'PagesController@produtos');
$router->get('login', 'PagesController@login');

