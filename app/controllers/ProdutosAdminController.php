<?php

namespace App\Controllers;

use App\Core\App;

class ProdutosAdminController
{
    public function index()
    {
        $produtos = App::get('database')->selectAll('product');
        return view('/admin/produto', compact('produtos'));
    }

    public function create()
    {
        $dados = ([
            'name' => $_POST['item_name'],
            'description' => $_POST['item_description'],
            'price' => $_POST['item_price'],
            'stock' => $_POST['item_stock'],
            'id_category' => $_POST['item_category'],
        ]);

        $uploaddir = 'public/img/product/';
        $uploadfile = $uploaddir . basename("{$dados['name']}.jpg");

        move_uploaded_file($_FILES['item_image']['tmp_name'], $uploadfile);

        App::get('database')->insert('product', $dados);
        header('Location: /admin/produto');
    }

    public function edit()
    {
        $uploaddir = 'public/img/product/';
        $uploadfile = $uploaddir . basename("{$_POST['item_name']}.jpg");

        move_uploaded_file($_FILES['item_image']['tmp_name'], $uploadfile);

        App::get('database')->edit('product','name', $_POST['item_name'], $_POST['item_id']);
        App::get('database')->edit('product','description', $_POST['item_description'], $_POST['item_id']);
        App::get('database')->edit('product','price', $_POST['item_price'], $_POST['item_id']);
        App::get('database')->edit('product','stock', $_POST['item_stock'], $_POST['item_id']);
        App::get('database')->edit('product','category', $_POST['item_category'], $_POST['item_id']);
        header('Location: /administrativo/produto');
    }

    public function delete()
    {
        App::get('database')->delete('product', $_POST['id']);
        header('Location: /administrativo/produto');
    }
}
