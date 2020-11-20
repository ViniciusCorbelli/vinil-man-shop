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
        $categorias = App::get('database')->selectAll('category'); //Pega todas as categorias disponíveis
        
        $totalDeColunas = App::get('database')->getTotalRows('product'); //Pega o número de linhas
        $linhasPorPaginas = 9;
        
        $produtos = App::get('database')->selectAll('product');

        $titulo = 'produtos';
        return view('/site/produtos',[
            'categorias' => $categorias,
            'produtos' => $produtos,
            'titulo' => $titulo,
            'totalDeColunas' => $totalDeColunas[0]
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
