<?php

namespace App\Controllers;

use App\Core\App;

class ProdutosAdminController
{
    public function index()
    {

        $category = App::get('database')->selectAll('category');
        $produtos = App::get('database')->selectAll('product');

        $titulo = 'produtos';
        return view('/admin/produto',[
            'categorias' => $category,
            'produtos' => $produtos,
        ]);
    }

    public function create()
    {
        $arquivo_tmp = $_FILES['item_image']['tmp_name'];
        $nome = $_FILES['item_image']['name'];

        $extensao = pathinfo($nome, PATHINFO_EXTENSION);
        $extensao = strtolower($extensao);
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

                App::get('database')->insert('product', $dados);
            }
        }

        header('Location: /admin/produto');
    }

    public function edit()
    {
        $arquivo_tmp = $_FILES['item_image']['tmp_name'];
        $nome = $_FILES['item_image']['name'];

        $extensao = pathinfo($nome, PATHINFO_EXTENSION);
        $extensao = strtolower($extensao);
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

                App::get('database')->edit('product', $dados, $_POST['item_id']);

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

            App::get('database')->edit('product', $dados, $_POST['item_id']);
        }

        header('Location: /admin/produto');
    }

    public function delete()
    {
        App::get('database')->delete('product', $_POST['id']);

        $destino = $_SERVER['DOCUMENT_ROOT'] . $_POST['foto'];

        if (file_exists($destino)) {
            unlink($destino);
        }

        header('Location: /admin/produto');
    }
}
