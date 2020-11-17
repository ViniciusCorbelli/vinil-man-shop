<?php

namespace App\Controllers;

use App\Core\App;

class IndexController
{
    public function index()
    {
        $produtos = App::get('database')->selectAll('product');
        return view('/site/index', compact('produtos'));
    }
}
