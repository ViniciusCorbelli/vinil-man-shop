<?php

/*Administrativas */
$router->get('admin','PagesController@administrativo'); //Home do Administrativo
$router->get('admin/usuarios','UserController@index'); //Home de Controle de usuários
$router->get('admin/produto', 'ProdutosAdminController@index'); //Home de Controle de Produtos
$router->get('admin/category', 'CategoryController@index'); //Home de Controle de categoria

/*Métodos de post */
$router->post('admin/usuario/create', 'UserController@create');
$router->post('admin/usuario/edit', 'UserController@edit');
$router->post('admin/usuario/delete', 'UserController@delete');
$router->post('admin/produto/create', 'ProdutosAdminController@create');
$router->post('admin/produto/delete', 'ProdutosAdminController@delete');
$router->post('admin/produto/edit', 'ProdutosAdminController@edit');
$router->post('admin/category/create', 'CategoryController@create');
$router->post('admin/category/delete', 'CategoryController@delete');
$router->post('admin/category/edit', 'CategoryController@edit');
/*Publicas*/
$router->get('', 'PagesController@home');
$router->get('contato', 'PagesController@contato');
$router->get('quem-somos', 'PagesController@quemsomos');
$router->get('produtos', 'PagesController@produtos');
$router->get('login', 'PagesController@login');

