 <?php

$router->get('', 'PagesController@home');
$router->get('contato', 'PagesController@contato');
$router->get('quem-somos', 'PagesController@quemsomos');
$router->get('produtos', 'PagesController@produtos');
$router->get('login', 'PagesController@login');
$router->get('administrativo', 'PagesController@administrativo');
$router->get('administrativo/categoria', 'PagesController@administrativocategoria');
$router->get('administrativo/usuario', 'PagesController@administrativousuario');

$router->get('administrativo/produto', 'PagesController@administrativoproduto');