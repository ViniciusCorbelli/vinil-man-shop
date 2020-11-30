<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PagesController
{
    /*Funções de Login*/
    /*Estou usando essas funções como base https://www.todoespacoonline.com/w/2014/07/login-simples-com-php/ */
    public function makeLogin()
    {
        session_start();
        $_SESSION['erros'] = ([]);

        try {
            if (!isset($_POST['email']) && !empty($_POST['email'])) {
                $_SESSION['erros'][] = "O Campo email não pode ficar vazio ou ter um valor inválido";
                return redirect('login');
            } else if (!isset($_POST['password']) && !empty($_POST['password'])) {
                $_SESSION['erros'][] = "O Campo senha não pode ficar vazio ou ter um valor inválido";
                return redirect('login');
            } else {
                $user = App::get('database')->search('users', ['email' => $_POST['email']]);
                
                if (count(array_keys($user)) == 0) {
                    die(var_dump($user));
                    $_SESSION['erros'][] = "Não existe usuário cadastrado com este email";
                    return view('login');
                } else {

                    $user = $user[0];
                    if (password_verify($_POST['password'], $user->password)) {
                        
                        $this->sessionStart($user);
                        if(isset($_SESSION['logged']) && $_SESSION['logged'])
                        {
                            return redirect('admin');
                        }

                    } else {
                        $_SESSION['erros'][] = "As senhas não coincidem";
                        return redirect('login');
                    }
                }
            }
        } catch (Exception $e) {
            $_SESSION['erros'][] = "{$e->getMessage()}";
        }
    }

    private function sessionStart($user)
    {
        session_cache_expire(180);

        session_start();

        $_SESSION['logged'] = True;

        $_SESSION['name'] = $user->name;
        $_SESSION['email'] = $user->email;
        $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];

        $_SESSION['hash'] = md5($_SERVER['REMOTE_ADDR']);
    }

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
