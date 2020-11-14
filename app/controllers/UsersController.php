<?php

namespace App\Controllers;
use app\core\App;

class UserController{

    public function index()
    {
        $users = App::get('database')->selectAll('users');

        return view('admin/users', compact('users'));
    }

    public function create()
    {
        if($_POST['email'])

        $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $parameters = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $hash
        ];

        App::get('database')->insert('users',$parameters);

        header('Location: /admin/users');
    }

}

?>