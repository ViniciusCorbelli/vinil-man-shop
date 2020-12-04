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
        $titulo = 'Produtos';
        $categorias = App::get('database')->selectAll('category'); //Pega todas as categorias disponíveis

        $totalDeColunas = App::get('database')->getTotalRows('product'); //Pega o número de linhas 
        
        $totalDeColunas = intval($totalDeColunas["COUNT(*)"]);
        
        $totalDeRegistros = 9; //Exibir o número máximo
        $totalLinks = ceil($totalDeColunas / $totalDeRegistros);
        

        $pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;

        if($pagina == 0)
                $pagina = 1;

        if (isset($_GET['Pesquisa']) && !empty($_GET['Pesquisa']) && isset($_GET['Categoria']) && !empty($_GET['Categoria'])) {
            $pesquisa = $_GET['Pesquisa'];
            $category = $_GET['Categoria'];

            $pesquisas = App::get('database')->pesquisa('product', $pesquisa);
            $category = App::get('database')->pesquisaCategoria('product', $category);

            $produtos = ([]);

            foreach ($pesquisas as $x) {
                foreach ($category as $y) {
                    if ($x == $y) {
                        $produtos[] = $x;
                    }
                }
            }
        } else if (isset($_GET['Pesquisa']) && !empty($_GET['Pesquisa'])) {
            $pesquisa = $_GET['Pesquisa'];
            $produtos = App::get('database')->pesquisa('product', $pesquisa);
        } else if (isset($_GET['Categoria']) && !empty($_GET['Categoria'])) {
            $pesquisa = $_GET['Categoria'];
            $produtos = App::get('database')->pesquisaCategoria('product', $pesquisa);
        } else {
            $pesquisa = 'Nenhum';
            $produtos = App::get('database')->selectAll('product');
        }

        $quantidade = count($produtos);

        if ($quantidade > 0) {
            return view('/site/produtos', [
                'pesquisa' => $pesquisa,
                'quantidade' => $quantidade,
                'categorias' => $categorias,
                'produtos' => $produtos,
                'titulo' => $titulo,
                'totalDeLinks' => $totalLinks,
                'pagina' => $pagina
            ]);
        } else {
            return view('site/produtos.vazio', [
                'titulo' => $titulo
            ]);
        }
    }

    public function produto()
    {
        session_start();
        $produtosID = App::get('database')->read('product', $_GET['id']);
        $produtos = App::get('database')->selectAll('product');
        $categorias = App::get('database')->selectAll('category');

        $titulo = 'Produto';

        if (count($produtosID) > 0) {
            return view('/site/visualizar-produtos', [
                'titulo' => $titulo,
                'produtosID' => $produtosID,
                'produtos' => $produtos,
                'categorias' => $categorias,
            ]);
        } else {
            return view('/site/erro', [
                'titulo' => $titulo,
            ]);
        }
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
