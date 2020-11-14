 <?php

$router->get('', 'PagesController@home');
$router->get('contato', 'PagesController@contato');
$router->get('quem-somos', 'PagesController@quemsomos');
$router->get('produtos', 'PagesController@produtos');
$router->get('login', 'PagesController@login');
$router->get('administrativo', 'PagesController@administrativo');
$router->get('administrativo/categoria', 'PagesController@administrativocategoria');
$router->get('administrativo/usuario', 'PagesController@administrativousuario');

$router->get('administrativo/category', 'CategoryController@index');
$router->post('administrativo/category/create', 'CategoryController@create');
$router->post('administrativo/category/edit', 'CategoryController@edit');
$router->post('administrativo/category/delete', 'CategoryController@delete');