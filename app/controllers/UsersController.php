<?php

namespace App\Controllers;
use app\core\App;

class UserController{

    public function index()
    {
        $users = App::get('database')->selectAll('users');

        return view('admin/view-home-adm', compact('users'));
    }

    public function create()
    {
        /*$email = App::get('database')->findByEmail('users',[
            'email' => $_POST['email']
        ]);

        //die(var_dump($email));

        if($email == $_POST['email'])
        {
            
            header('Location: /admin/users');
        }*/

        $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $parameters = ([
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $hash
        ]);

        App::get('database')->insert('users',$parameters);

        header('Location: /admin/users');
    }

    public function delete()
    {
        $id = $_POST['id'];

        App::get('database')->delete('users', $id);

        header('Location: /admin/users');
    }

}

?>