<?php

namespace App\Controllers;
use app\core\App;

class UserController{

    public function index()
    {
        $users = App::get('database')->selectAll('users');

        return view('admin/usuario', compact('users'));
    }

    public function create()
    {
        $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $parameters = ([
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $hash
        ]);

        App::get('database')->insert('users',$parameters);

        return redirect('admin/usuarios');
    }

    public function edit()
    {
        $parameters = ([
            'name' => $_POST['name'],
            'email' => $_POST['email']
        ]);

        App::get('database')->edit('users', $parameters, $_POST['id']);

        return redirect('admin/usuarios');
    }

    public function delete()
    {
        $id = $_POST['id'];

        App::get('database')->delete('users', $id);

        return redirect('admin/usuarios');
    }

}

?>