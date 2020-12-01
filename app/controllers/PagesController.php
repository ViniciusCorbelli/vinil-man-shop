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
        //die($totalDeColunas["COUNT(*)"]);
        $totalDeColunas = intval($totalDeColunas["COUNT(*)"]);
        //die(var_dump($totalDeColunas));
        $totalDeRegistros = 9; //Exibir o número máximo
        $totalLinks = ceil($totalDeColunas / $totalDeRegistros);
        //die(var_dump($totalLinks));

        $pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;

        if($pagina == 0)
                $pagina = 1;
        //die(var_dump($pagina));
        if (isset($_GET['Pesquisa']) && !empty($_GET['Pesquisa'])) {
            $pesquisa = $_GET['Pesquisa'];
            
            $produtos = App::get('database')->pesquisa('product',$pesquisa);

            return view('/site/produtos', [
                'categorias' => $categorias,
                'produtos' => $produtos,
                'titulo' => $titulo,
                'totalDeLinks' => $totalLinks,
                'pagina' => $pagina
            ]);
        } if (isset($_GET['category']) && !empty($_GET['category'])){

            $categoria = $_GET['category'];
            $produtos = App::get('database')->pesquisa('product',$categoria);

            return view('/site/produtos', [
                'categorias' => $categorias,
                'produtos' => $produtos,
                'titulo' => $titulo,
                'totalDeLinks' => $totalLinks,
                'pagina' => $pagina
            ]);

        } if (isset($_GET['order']) && !empty($_GET['order'])){
            
            $begin = ($pagina-1)*$totalDeRegistros;
            
            if($_GET['order'] == 'menorpreco')
            {
                $produtos = App::get('database')->selectLimit('product', [
                    'begin' => $begin,
                    'quantidade' => $totalDeRegistros
                ], [
                    'asc' => 'price'
                ]);

                //die(var_dump($produtos));
                return view('/site/produtos', [
                    'categorias' => $categorias,
                    'produtos' => $produtos,
                    'titulo' => $titulo,
                    'totalDeLinks' => $totalLinks,
                    'pagina' => $pagina
                ]);
            } else if($_GET['order'] == 'maiorpreco')
            {
                $produtos = App::get('database')->selectLimit('product', [
                    'begin' => $begin,
                    'quantidade' => $totalDeRegistros
                ], [
                    'desc' => 'price'
                ]);

                //die(var_dump($produtos));
                return view('/site/produtos', [
                    'categorias' => $categorias,
                    'produtos' => $produtos,
                    'titulo' => $titulo,
                    'totalDeLinks' => $totalLinks,
                    'pagina' => $pagina
                ]);
            } else if ($_GET['order'] == 'recentes')
            {
                $produtos = App::get('database')->selectLimit('product', [
                    'begin' => $begin,
                    'quantidade' => $totalDeRegistros
                ], [
                    'asc' => 'id'
                ]);

                //die(var_dump($produtos));
                return view('/site/produtos', [
                    'categorias' => $categorias,
                    'produtos' => $produtos,
                    'titulo' => $titulo,
                    'totalDeLinks' => $totalLinks,
                    'pagina' => $pagina
                ]);
            }
        }else {
            $begin = ($pagina-1)*$totalDeRegistros;

            $produtos = App::get('database')->selectLimit('product', [
                'begin' => $begin,
                'quantidade' => $totalDeRegistros
            ], []);

            //die(var_dump($produtos));
            return view('/site/produtos', [
                'categorias' => $categorias,
                'produtos' => $produtos,
                'titulo' => $titulo,
                'totalDeLinks' => $totalLinks,
                'pagina' => $pagina
            ]);
        }
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
