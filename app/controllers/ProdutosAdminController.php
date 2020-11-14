<?php

namespace App\Controllers;

use App\Core\App;

class ProdutosAdminController
{
    public function index()
    {
        $produtos = App::get('database')->selectAll('product');
        return viewadmin('produto', compact('produtos'));
    }
}

