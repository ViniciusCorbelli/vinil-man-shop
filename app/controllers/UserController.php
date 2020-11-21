<?php

namespace App\Controllers;
use app\core\App;
use Exception;

class UserController{

    public function index()
    {
        $users = App::get('database')->selectAll('users');

        return view('/admin/usuarios', compact('users'));
    }

    public function create()
    {
        $user = App::get('database')->search('users',['email' => $_POST['email']]);
        
        if(count($user) > 0)
        {
            return redirect('admin/usuarios');
        } else {

        $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $parameters = ([
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $hash
        ]);

        App::get('database')->insert('users',$parameters);

            header('Location: /admin/usuarios');
        }
    }

    public function edit()
    {
        App::get('database')->edit('users','name',['value' => $_POST['name']],$_POST['id']);
        App::get('database')->edit('users','email',['value' => $_POST['email']],$_POST['id']);

        return redirect('admin/usuarios');
    }

    public function delete()
    {
        $id = $_POST['id'];

        try{
            App::get('database')->delete('users', $id);

            return redirect('admin/usuarios');
        }catch(Exception $e)
        {
            $e->getMessage();
        }

    }

}
