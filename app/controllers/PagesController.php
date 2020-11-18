<?php

namespace App\Controllers;
use app\core\App;

class PagesController
{
    public function home()
    {
        return view('index');
    }

    public function contato()
    {
        return view('contato');
    }

    public function quemsomos()
    {
        return view('quem-somos');
    }

    public function produtos()
    {
        return view('produtos');
    }

    public function login()
    {
        return view('login');
    }

    /*Página referente ao acesso administrativo */
    public function administrativo()
    {
        return view('admin/home');
    }

    public function administrativocategoria()
    {
        return view('admin/category');
    }

    public function administrativoproduto()
    {
        return view('admin/product');
    }

    public function administrativousuario()
    {
        return view('admin/users');
    }
}