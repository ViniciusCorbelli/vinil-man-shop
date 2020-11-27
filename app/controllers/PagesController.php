<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{

    public function index()
    {
        $produtos = App::get('database')->selectAll('product');
        return view('/site/index', compact('produtos'));
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
        return view('/site/produtos');
    }

    public function produto()
    {
        $produtosID = App::get('database')->read('product', $_GET['id']);
        $produtos = App::get('database')->selectAll('product');
        $categorias = App::get('database')->selectAll('category');

        return view('/site/visualizar-produtos', [
            'produtosID' => $produtosID,
            'produtos' => $produtos,
            'categorias' => $categorias,
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
