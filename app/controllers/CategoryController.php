<?php

namespace App\Controllers;
use app\core\App;

class UserController{

    public function index()
    {
        $users = App::get('database')->selectAll('category');

        return view('/admin/category', compact('category'));
    }

    public function create()
    {
       
        

        $parameters = ([
            'name' => $_POST['name'],
            
            
        ]);

        App::get('database')->insert('category',$parameters);

        header('Location: /admin/category');
    }

    public function delete()
    {
        $id = $_POST['id'];

        App::get('database')->delete('category', $id);

        header('Location: /admin/category');
    }

}

?>