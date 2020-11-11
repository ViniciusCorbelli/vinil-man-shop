<?php

namespace App\Controllers;

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
}
