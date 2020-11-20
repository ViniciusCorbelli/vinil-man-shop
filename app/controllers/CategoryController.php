<?php

namespace App\Controllers;

use App\Core\App;

class CategoryController
{
    public function index()
    {
        $categorias = App::get('database')->selectAll('category');
        return view('admin/category', compact('categorias'));
    }

    public function create()
    {
        $parameters = ([
            'name' => $_POST['name']
        ]);

        App::get('database')->insert('category',$parameters);
        return redirect('admin/category');
    }

    public function edit()
    {
        App::get('database')->edit('category','name', $_POST['name'], $_POST['id']);
        
        return redirect('admin/category');
    }

    public function delete()
    {
        $id = $_POST['id'];

        App::get('database')->delete('category', $id);

        return redirect('admin/category');
    }
}