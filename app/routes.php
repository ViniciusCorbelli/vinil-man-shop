 <?php



$router->get('admin/home','PagesController@administrativo');
$router->get('admin/users','UserController@index');
$router->get('admin/category','PagesController@administrativocategoria');
$router->get('admin/product','PagesController@administrativoproduto');
$router->post('user/create', 'UserController@create');
$router->post('user/delete', 'UserController@delete');
