 <?php

/*Páginas administrativas*/
$router->get('admin/home','PagesController@administrativo');
$router->get('admin/users','PagesController@administrativousuario');
$router->get('admin/category','PagesController@administrativocategoria');
$router->get('admin/product','PagesController@administrativoproduto');
