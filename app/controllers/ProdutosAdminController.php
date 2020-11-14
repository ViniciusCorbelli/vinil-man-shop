<?php

namespace App\Controllers;

use App\Core\App;

class ProdutosAdminController
{
    public function index()
    {
        $produtos = App::get('database')->selectAll('product');
        return viewadmin('produto', compact('produtos'));
    }

    public function create()
    {
        $image = $_FILES['item_image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        $dados = ([
            'name' => $_POST['item_name'],
            'description' => $_POST['item_description'],
            'image' => $imgContent,
            'price' => $_POST['item_price'],
            'stock' => $_POST['item_stock'],
            'id_category' => $_POST['item_category'],
        ]);

        App::get('database')->insert('product', $dados);
        header('Location: /administrativo/produto');
    }

    public function delete()
    {
        App::get('database')->delete('product', $_POST['id']);
        header('Location: /administrativo/produto');
    }
}
