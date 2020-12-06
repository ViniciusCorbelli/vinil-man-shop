<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class CategoryAdminController extends LoginController
{
    public function index()
    {
        session_start();
        $this->verifyLogged();

        $category = App::get('database')->selectAll('category');
        if (isset($_GET['Pesquisa']) && !empty($_GET['Pesquisa'])) {
            $pesquisa = $_GET['Pesquisa'];
            $category = App::get('database')->pesquisaName('category', $pesquisa);
        } else {
            $category = App::get('database')->selectAll('category');
        }

        $totalDeRegistros = 9;
        $quantidade = count($category);
        $totalLinks = ceil($quantidade / $totalDeRegistros);

        $pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;

        if ($pagina == 0)
            $pagina = 1;
        if ($pagina == 0)
            $pagina = 1;

        return view('/admin/category', [
            'category' => $category,
            'pagina' => $pagina,
            'totalDeLinks' => $totalLinks
        ]);
    }

    public function create()
    {
        session_start();
        $this->verifyLogged();

        $_SESSION['sucessos'] = ([]);
        $_SESSION['erros'] = ([]);

        if (empty($_POST["name"])) {
            $_SESSION['erros'][] = "Você deve inserir um nome!";
        }

        if (empty($_SESSION['erros'])) {
            $parameters = ([
                'name' => $_POST['name']
            ]);

            try {
                App::get('database')->insert('category', $parameters);
                $_SESSION['sucessos'][] = "Categoria criado com sucesso!";
            } catch (Exception $e) {
                $_SESSION['erros'][] = "Algo inesperado ocorreu!";
            }
        }

        header('Location: /admin/categoria');
    }

    public function edit()
    {
        session_start();
        $this->verifyLogged();

        $_SESSION['sucessos'] = ([]);
        $_SESSION['erros'] = ([]);

        if (empty($_POST["name"])) {
            $_SESSION['erros'][] = "Você deve inserir um nome!";
        }

        if (empty($_SESSION['erros'])) {

            $parameters = ([
                'name' => $_POST['name']
            ]);


            try {
                App::get('database')->edit('category', $parameters, $_POST['id']);
                $_SESSION['sucessos'][] = "Categoria editada com sucesso!";
            } catch (Exception $e) {
                $_SESSION['erros'][] = "Algo inesperado ocorreu!";
            }
        }

        header('Location: /admin/categoria');
    }

    public function delete()
    {
        session_start();
        $this->verifyLogged();
        
        $_SESSION['sucessos'] = ([]);
        $_SESSION['erros'] = ([]);

        try {
            App::get('database')->delete('category', $_POST['id']);
            $_SESSION['sucessos'][] = "Categoria deletado com sucesso!";
        } catch (Exception $e) {
            $_SESSION['erros'][] = "Algo inesperado ocorreu!";
        }

        header('Location: /admin/categoria');
    }
}
