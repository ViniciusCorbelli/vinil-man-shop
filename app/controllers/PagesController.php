<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PagesController extends LoginController
{
    public function index()
    {
        session_start();
        $produtos = App::get('database')->selectAll('product');


        $titulo = 'Ínicio';
        return view('/site/index', [
            'titulo' => $titulo,
            'produtos' => $produtos,
        ]);
    }

    public function contato()
    {
        session_start();
        $titulo = 'Contato';
        return view('/site/contato', [
            'titulo' => $titulo,
        ]);
    }

    public function quemsomos()
    {
        session_start();
        $titulo = 'Quem somos';
        return view('/site/quem-somos', [
            'titulo' => $titulo,
        ]);
    }

    public function produtos()
    {
        session_start();
        $categorias = App::get('database')->selectAll('category'); //Pega todas as categorias disponíveis

        $totalDeColunas = App::get('database')->getTotalRows('product'); //Pega o número de linhas
        $linhasPorPaginas = 9; //Exibir o número máximo entra na próxima sprint de paginação

        $produtos = App::get('database')->selectAll('product');

        $titulo = 'Produtos';
        return view('/site/produtos', [
            'categorias' => $categorias,
            'produtos' => $produtos,
            'titulo' => $titulo,
            'totalDeColunas' => $totalDeColunas[0]
        ]);
    }

    public function produto()
    {
        session_start();
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
        session_start();
        $_SESSION['erros'] = ([]);
        
        //die(var_dump($_SESSION));
        if(isset($_SESSION) && isset($_SESSION['logged']))
        {
            if($_SESSION['logged'])
            {
                return redirect('admin');
            }
            //die(var_dump($_SESSION));
        }
            

        return view('/site/login');
    }

    public function loginAlert()
    {
        session_start();
        $_SESSION['erros'] = ([]);

        $_SESSION['erros'][] = "Você precisa estar logado para acessar páginas administrativas";
        return redirect('login');
    }

    /*Página referente ao acesso administrativo */
    public function administrativo()
    {
        session_start();
        $this->verifyLogged();

        return view('admin/home');
    }
}
