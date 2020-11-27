<?php

namespace App\Controllers;

use App\Core\App;

class ProdutosAdminController
{
    public function index()
    {
        $category = App::get('database')->selectAll('category');
        $produtos = App::get('database')->selectAll('product');

        return view('/admin/produto', [
            'categorias' => $category,
            'produtos' => $produtos,
        ]);
    }

    public function create()
    {
        session_start();
        $_SESSION['sucessos'] = ([]);
        $_SESSION['erros'] = ([]);

        $arquivo_tmp = $_FILES['item_image']['tmp_name'];
        $nome = $_FILES['item_image']['name'];

        $extensao = pathinfo($nome, PATHINFO_EXTENSION);
        $extensao = strtolower($extensao);

        if (empty($_POST["item_name"])) {
            $_SESSION['erros'][] = "Você deve inserir um nome!";
        }
        if (empty($_POST["item_description"])) {
            $_SESSION['erros'][] = "Você deve inserir uma descrição!";
        }
        if (empty($_POST["item_price"])) {
            $_SESSION['erros'][] = "Você deve inserir um preço!";
        } else {
            if (!(is_numeric($_POST["item_price"]))) {
                $_SESSION['erros'][] = "Você deve colocar preço com apenas números";
            }
        }
        if (empty($_POST["item_stock"])) {
            $_SESSION['erros'][] = "Você deve inserir uma quantidade em estoque!";
        } else {
            if (!(is_numeric($_POST["item_stock"]))) {
                $_SESSION['erros'][] = "Você deve colocar estoque com apenas números";
            }
        }
        if (empty($_POST["item_category"])) {
            $_SESSION['erros'][] = "Você deve inserir uma categoria!";
        }

        if (empty($_SESSION['erros'])) {
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
                        $_SESSION['sucessos'][] = "Produto criado com sucesso!";
                    } catch (Exception $e) {
                        $_SESSION['erros'][] = "Algo inesperado ocorreu!";
                    }
                }
            }
        }
        header('Location: /admin/produto');
    }

    public function edit()
    {
        session_start();
        $_SESSION['sucessos'] = ([]);
        $_SESSION['erros'] = ([]);

        $arquivo_tmp = $_FILES['item_image']['tmp_name'];
        $nome = $_FILES['item_image']['name'];

        $extensao = pathinfo($nome, PATHINFO_EXTENSION);
        $extensao = strtolower($extensao);

        if (empty($_POST["item_name"])) {
            $_SESSION['erros'][] = "Você deve inserir um nome!";
        }
        if (empty($_POST["item_description"])) {
            $_SESSION['erros'][] = "Você deve inserir uma descrição!";
        }
        if (empty($_POST["item_price"])) {
            $_SESSION['erros'][] = "Você deve inserir um preço!";
        } else {
            if (!(is_numeric($_POST["item_price"]))) {
                $_SESSION['erros'][] = "Você deve colocar preço com apenas números";
            }
        }
        if (empty($_POST["item_stock"])) {
            $_SESSION['erros'][] = "Você deve inserir uma quantidade em estoque!";
        } else {
            if (!(is_numeric($_POST["item_stock"]))) {
                $_SESSION['erros'][] = "Você deve colocar estoque com apenas números";
            }
        }
        if (empty($_POST["item_category"])) {
            $_SESSION['erros'][] = "Você deve inserir uma categoria!";
        }

        if (empty($_SESSION['erros'])) {
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
                        $_SESSION['sucessos'][] = "Produto editado com sucesso!";
                    } catch (Exception $e) {
                        $_SESSION['erros'][] = "Algo inesperado ocorreu!";
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
                    $_SESSION['sucessos'][] = "Produto editado com sucesso!";
                } catch (Exception $e) {
                    $_SESSION['erros'][] = "Algo inesperado ocorreu!";
                }
            }
        }

        header('Location: /admin/produto');
    }

    public function delete()
    {
        session_start();
        $_SESSION['sucessos'] = ([]);
        $_SESSION['erros'] = ([]);

        try {
            App::get('database')->delete('product', $_POST['id']);
            $_SESSION['sucessos'][] = "Produto deletado com sucesso!";
        } catch (Exception $e) {
            $_SESSION['erros'][] = "Algo inesperado ocorreu!";
        }

        $destino = $_SERVER['DOCUMENT_ROOT'] . $_POST['foto'];

        if (file_exists($destino)) {
            unlink($destino);
        }

        header('Location: /admin/produto');
    }
}
