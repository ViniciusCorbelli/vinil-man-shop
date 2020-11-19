<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{

    public function home()
    {
        return view('/site/index');
    }

    public function contato()
    {
        return view('/site/contato');
    }

    public function quemsomos()
    {
        return view('/site/quem-somos');
    }

    public function produtos()
    {
        $categorias = App::get('database')->selectAll('category');
        $produtos = App::get('database')->selectAll('product');

        $titulo = 'produtos';
        return view('/site/produtos',[
            'categorias' => $categorias,
            'produtos' => $produtos,
            'titulo' => $titulo
        ]);
    }

    public function login()
    {
        return view('/site/login');
    }

    /*Página referente ao acesso administrativo */
    public function administrativo()
    {
        return view('admin/home');
    }
}
