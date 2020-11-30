<?php

/*Administrativas */

use App\Controllers\PagesController;

$router->get('admin','PagesController@administrativo'); //Home do Administrativo
$router->get('admin/usuarios','UserController@index'); //Home de Controle de usuários
$router->get('admin/produto', 'ProdutosAdminController@index'); //Home de Controle de Produtos
$router->get('admin/categoria', 'CategoryAdminController@index'); //Home de Controle de Categoria

/*Métodos de post */
$router->post('admin/usuario/create', 'UserController@create');
$router->post('admin/usuario/edit', 'UserController@edit');
$router->post('admin/usuario/delete', 'UserController@delete');
$router->post('admin/produto/create', 'ProdutosAdminController@create');
$router->post('admin/produto/delete', 'ProdutosAdminController@delete');
$router->post('admin/produto/edit', 'ProdutosAdminController@edit');
$router->post('admin/categoria/create', 'CategoryAdminController@create');
$router->post('admin/categoria/delete', 'CategoryAdminController@delete');
$router->post('admin/categoria/edit', 'CategoryAdminController@edit');

/*Publicas*/
$router->get('', 'PagesController@index');
$router->get('contato', 'PagesController@contato');
$router->get('quem-somos', 'PagesController@quemsomos');
$router->get('produtos', 'PagesController@produtos');
$router->get('login', 'PagesController@login');
$router->get('produto', 'PagesController@produto');
/*Rota para o envio do email*/
$router->post('contato/send-message', 'ContatoController@sendMail');

/*Rota para o Login */
$router->get('login', 'PagesController@login');
$router->post('logout', 'LoginController@makeLogout');
$router->get('login-alert', 'PagesController@loginAlert');
$router->post('login-acess', 'PagesController@makeLogin');

