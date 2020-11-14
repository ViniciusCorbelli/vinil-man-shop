<?php

namespace App\Controllers;
use app\core\App;

class UserController{

    public function index()
    {
        $users = App::get('database')->selectAll('users');

        return view('users', compact('users'));
    }

}

?>