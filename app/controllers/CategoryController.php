<?php

namespace App\Controllers;

use App\Core\App;

class CategoryController
{
    public function index()
    {
        $category = App::get('database')->selectAll('category');
        return view('admin/category', compact('category'));
    }

    public function create()
    {
        $parameters = ([
            'name' => $_POST['name']
        ]);

        App::get('database')->insert('category',$parameters);
        return redirect('admin/categoria');
    }

    public function edit()
    {
        $parameters = ([
            'name' => $_POST['name']
        ]);
        
        App::get('database')->edit('category',$parameters, $_POST['id']);
        
        return redirect('admin/categoria');
    }

    public function delete()
    {
        App::get('database')->delete('category', $_POST['id']);
        header('Location: /admin/categoria');
    }
}