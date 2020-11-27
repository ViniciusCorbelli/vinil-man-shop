<?php

namespace App\Controllers;

use App\Core\App;

class ProdutosAdminController
{
    public function index()
    {

        $category = App::get('database')->selectAll('category');
        $produtos = App::get('database')->selectAll('product');

        $sucessos = ([]);
        $erros = ([]);

        return view('/admin/produto', [
            'erros' => $erros,
            'sucessos' => $sucessos,
            'categorias' => $category,
            'produtos' => $produtos,
        ]);
    }

    public function create()
    {
        $sucessos = ([]);
        $erros = ([]);

        $arquivo_tmp = $_FILES['item_image']['tmp_name'];
        $nome = $_FILES['item_image']['name'];

        $extensao = pathinfo($nome, PATHINFO_EXTENSION);
        $extensao = strtolower($extensao);

        if (empty($_POST["item_name"])) {
            $erros[] = "Você deve inserir um nome!";
        }
        if (empty($_POST["item_description"])) {
            $erros[] = "Você deve inserir uma descrição!";
        }
        if (empty($_POST["item_price"])) {
            $erros[] = "Você deve inserir um preço!";
        } else {
            if (!(is_numeric($_POST["item_price"]))) {
                $erros[] = "Você deve colocar preço com apenas números";
            }
        }
        if (empty($_POST["item_stock"])) {
            $erros[] = "Você deve inserir uma quantidade em estoque!";
        } else {
            if (!(is_numeric($_POST["item_stock"]))) {
                $erros[] = "Você deve colocar estoque com apenas números";
            }
        }
        if (empty($_POST["item_category"])) {
            $erros[] = "Você deve inserir uma categoria!";
        }

        if (empty($erros)) {
            if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {
                $novoNome = uniqid(time()) . '.' . $extensao;

                $destino = $_SERVER['DOCUMENT_ROOT'] . "/public/img/product/" . $novoNome;


                if (@move_uploaded_file($arquivo_tmp, $destino)) {
                    $dados = ([
                        'name' => $_POST['item_name'],
                        'description' => $_POST['item_description'],
                        'price' => $_POST['item_price'],
                        'stock' => $_POST['item_stock'],
                        'id_category' => $_POST['item_category'],
                        'image' => "/public/img/product/{$novoNome}"
                    ]);

                    try {
                        App::get('database')->insert('product', $dados);
                        $sucessos[] = "Produto criado com sucesso!";
                    } catch (Exception $e) {
                        $erros[] = "Algo inesperado ocorreu!";
                    }
                }
            }
        }

        $category = App::get('database')->selectAll('category');
        $produtos = App::get('database')->selectAll('product');

        return view('/admin/produto', [
            'erros' => $erros,
            'sucessos' => $sucessos,
            'categorias' => $category,
            'produtos' => $produtos,
        ]);
    }

    public function edit()
    {
        $sucessos = ([]);
        $erros = ([]);

        $arquivo_tmp = $_FILES['item_image']['tmp_name'];
        $nome = $_FILES['item_image']['name'];

        $extensao = pathinfo($nome, PATHINFO_EXTENSION);
        $extensao = strtolower($extensao);

        if (empty($_POST["item_name"])) {
            $erros[] = "Você deve inserir um nome!";
        }
        if (empty($_POST["item_description"])) {
            $erros[] = "Você deve inserir uma descrição!";
        }
        if (empty($_POST["item_price"])) {
            $erros[] = "Você deve inserir um preço!";
        } else {
            if (!(is_numeric($_POST["item_price"]))) {
                $erros[] = "Você deve colocar preço com apenas números";
            }
        }
        if (empty($_POST["item_stock"])) {
            $erros[] = "Você deve inserir uma quantidade em estoque!";
        } else {
            if (!(is_numeric($_POST["item_stock"]))) {
                $erros[] = "Você deve colocar estoque com apenas números";
            }
        }
        if (empty($_POST["item_category"])) {
            $erros[] = "Você deve inserir uma categoria!";
        }

        if (empty($erros)) {
            if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {
                $novoNome = uniqid(time()) . '.' . $extensao;

                $destino = $_SERVER['DOCUMENT_ROOT'] . "/public/img/product/" . $novoNome;


                if (@move_uploaded_file($arquivo_tmp, $destino)) {
                    $dados = ([
                        'name' => $_POST['item_name'],
                        'description' => $_POST['item_description'],
                        'price' => $_POST['item_price'],
                        'stock' => $_POST['item_stock'],
                        'id_category' => $_POST['item_category'],
                        'image' => "/public/img/product/{$novoNome}"
                    ]);

                    try {
                        App::get('database')->insert('product', $dados);
                        $sucessos[] = "Produto editado com sucesso!";
                    } catch (Exception $e) {
                        $erros[] = "Algo inesperado ocorreu!";
                    }

                    $destino = $_SERVER['DOCUMENT_ROOT'] . $_POST['foto'];

                    if (file_exists($destino)) {
                        unlink($destino);
                    }
                }
            } else {
                $dados = ([
                    'name' => $_POST['item_name'],
                    'description' => $_POST['item_description'],
                    'price' => $_POST['item_price'],
                    'stock' => $_POST['item_stock'],
                    'id_category' => $_POST['item_category'],
                ]);

                try {
                    App::get('database')->insert('product', $dados);
                    $sucessos[] = "Produto editado com sucesso!";
                } catch (Exception $e) {
                    $erros[] = "Algo inesperado ocorreu!";
                }
            }
        }

        $category = App::get('database')->selectAll('category');
        $produtos = App::get('database')->selectAll('product');
        return view('/admin/produto', [
            'erros' => $erros,
            'sucessos' => $sucessos,
            'categorias' => $category,
            'produtos' => $produtos,
        ]);
    }

    public function delete()
    {

        $sucessos = ([]);
        $erros = ([]);

        try {
            App::get('database')->delete('product', $_POST['id']);
            $sucessos[] = "Produto deletado com sucesso!";
        } catch (Exception $e) {
            $erros[] = "Algo inesperado ocorreu!";
        }

        $destino = $_SERVER['DOCUMENT_ROOT'] . $_POST['foto'];

        if (file_exists($destino)) {
            unlink($destino);
        }

        $category = App::get('database')->selectAll('category');
        $produtos = App::get('database')->selectAll('product');

        var_dump($erros);

        return view('/admin/produto', [
            'erros' => $erros,
            'sucessos' => $sucessos,
            'categorias' => $category,
            'produtos' => $produtos,
        ]);
    }
}
