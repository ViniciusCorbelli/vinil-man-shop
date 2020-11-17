 <?php

$router->get('', 'PagesController@home');
$router->get('contato', 'PagesController@contato');
$router->get('quem-somos', 'PagesController@quemsomos');
$router->get('produtos', 'PagesController@produtos');
$router->get('login', 'PagesController@login');
$router->get('admin', 'PagesController@administrativo');

$router->get('admin/produto', 'ProdutosAdminController@index');
$router->post('admin/produto/create', 'ProdutosAdminController@create');
$router->post('admin/produto/delete', 'ProdutosAdminController@delete');
$router->post('admin/produto/edit', 'ProdutosAdminController@edit');