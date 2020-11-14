<?php

namespace App\Controllers;

use App\Core\App;

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
    
    public function administrativo()
    {
        return viewadmin('home');
    }
}