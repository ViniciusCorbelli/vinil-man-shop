<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{

    public function index()
    {
        $produtos = App::get('database')->selectAll('product');


        $titulo = 'Ínicio';
        return view('/site/index', [
            'titulo' => $titulo,
            'produtos' => $produtos,
        ]);
    }

    public function contato()
    {
        $titulo = 'Contato';
        return view('/site/contato', [
            'titulo' => $titulo,
        ]);
    }

    public function quemsomos()
    {
        $titulo = 'Quem somos';
        return view('/site/quem-somos', [
            'titulo' => $titulo,
        ]);
    }

    public function produtos()
    {

        $titulo = 'Produtos';

        $categorias = App::get('database')->selectAll('category'); //Pega todas as categorias disponíveis

        $totalDeColunas = App::get('database')->getTotalRows('product'); //Pega o número de linhas
        $linhasPorPaginas = 9; //Exibir o número máximo entra na próxima sprint de paginação

        if (isset($_GET['Pesquisa']) && !empty($_GET['Pesquisa'])) {
            $pesquisa = $_GET['Pesquisa'];
            $produtos = App::get('database')->pesquisa('product', $pesquisa);
            $pesquisa = $_GET['Pesquisa'];
        } else {
            $pesquisa = 'Todos';
            $produtos = App::get('database')->selectAll('product');
        }

        $quantidade = '10';

        return view('/site/produtos', [
            'pesquisa' => $pesquisa,
            'quantidade' => $quantidade,
            'categorias' => $categorias,
            'produtos' => $produtos,
            'titulo' => $titulo,
            'totalDeColunas' => $totalDeColunas[0]
        ]);
    }

    public function produto()
    {
        $produtosID = App::get('database')->read('product', $_GET['id']);
        $produtos = App::get('database')->selectAll('product');
        $categorias = App::get('database')->selectAll('category');

        $titulo = 'Produto';
        return view('/site/visualizar-produtos', [
            'titulo' => $titulo,
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
