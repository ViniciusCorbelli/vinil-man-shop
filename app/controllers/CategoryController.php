<?php

namespace App\Controllers;

use App\Core\App;

class CategoryAdminController
{
    public function index()
    {
        $category = App::get('database')->selectAll('category');
        return viewadmin('category', compact('categorys'));
    }

    public function create()
    {
        $dados = ([
            'name' => $_POST['item_name'],
        ]);

        App::get('database')->insert('category', $dados);
        header('Location: /administrativo/category');
    }

    public function edit()
    {
        $dados = ([
            'name' => $_POST['item_name'],
        ]);

        App::get('database')->update('category', $dados);
        header('Location: /administrativo/category');
    }


    public function delete()
    {
        App::get('database')->delete('category', $_POST['id']);
        header('Location: /administrativo/category');
    }
}