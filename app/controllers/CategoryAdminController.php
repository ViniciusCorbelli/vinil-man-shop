<?php

namespace App\Controllers;

use App\Core\App;

class CategoryAdminController
{
    public function index()
    {
        $category = App::get('database')->selectAll('category');

        return view('/admin/category', [
            'category' => $category,
        ]);
    }

    public function create()
    {
        session_start();
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
