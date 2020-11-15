 <?php

$router->get('', 'PagesController@home');
$router->get('contato', 'PagesController@contato');
$router->get('quem-somos', 'PagesController@quemsomos');
$router->get('produtos', 'PagesController@produtos');
$router->get('login', 'PagesController@login');
$router->get('administrativo', 'PagesController@administrativo');
$router->get('administrativo/categoria', 'PagesController@administrativocategoria');
$router->get('administrativo/usuario', 'PagesController@administrativousuario');

$router->get('administrativo/produto', 'ProdutosAdminController@index');
$router->post('administrativo/produto/create', 'ProdutosAdminController@create');
$router->post('administrativo/produto/delete', 'ProdutosAdminController@delete');
$router->post('administrativo/produto/edit', 'ProdutosAdminController@edit');