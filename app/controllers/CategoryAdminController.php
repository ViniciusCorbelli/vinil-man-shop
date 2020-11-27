<?php

namespace App\Controllers;

use App\Core\App;

class CategoryAdminController
{
    public function index()
    {

        $sucessos = ([]);
        $erros = ([]);

        $category = App::get('database')->selectAll('category');

        return view('/admin/category', [
            'erros' => $erros,
            'sucessos' => $sucessos,
            'category' => $category,
        ]);
    }

    public function create()
    {

        $sucessos = ([]);
        $erros = ([]);

        if (empty($_POST["name"])) {
            $erros[] = "Você deve inserir um nome!";
        }

        if (empty($erros)) {
            $parameters = ([
                'name' => $_POST['name']
            ]);

            try {
                App::get('database')->insert('category', $parameters);
                $sucessos[] = "Categoria criado com sucesso!";
            } catch (Exception $e) {
                $erros[] = "Algo inesperado ocorreu!";
            }
        }

        $category = App::get('database')->selectAll('category');

        return view('/admin/category', [
            'erros' => $erros,
            'sucessos' => $sucessos,
            'category' => $category,
        ]);
    }

    public function edit()
    {

        $sucessos = ([]);
        $erros = ([]);

        if (empty($_POST["name"])) {
            $erros[] = "Você deve inserir um nome!";
        }

        if (empty($erros)) {

            $parameters = ([
                'name' => $_POST['name']
            ]);


            try {
                App::get('database')->edit('category', $parameters, $_POST['id']);
                $sucessos[] = "Categoria editada com sucesso!";
            } catch (Exception $e) {
                $erros[] = "Algo inesperado ocorreu!";
            }
        }

        $category = App::get('database')->selectAll('category');

        return view('/admin/category', [
            'erros' => $erros,
            'sucessos' => $sucessos,
            'category' => $category,
        ]);
    }

    public function delete()
    {

        $sucessos = ([]);
        $erros = ([]);

        try {
            App::get('database')->delete('category', $_POST['id']);
            $sucessos[] = "Categoria deletado com sucesso!";
        } catch (Exception $e) {
            $erros[] = "Algo inesperado ocorreu!";
        }

        $category = App::get('database')->selectAll('category');

        return view('/admin/category', [
            'erros' => $erros,
            'sucessos' => $sucessos,
            'category' => $category,
        ]);
    }
}
