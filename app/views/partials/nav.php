<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light navbar-color navbar">
    <!-- Logo -->
    <a class="navbar-brand" href="/">
        <img src="/public/img/logo_name.png" id="logo" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse barra-navegacao" id="conteudoNavbarSuportado">
        <!-- Barra de pesquisa -->
        <div class="mr-auto barra-pesquisa">
            <form action="/produtos" method="GET" class="form-group form-navbar">
                <div class="input-group">
                    <input type="text" name="Pesquisa" class="form-control" placeholder="Pesquisar">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- NAV -->
        <div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link item-navbar" href="/">Home<span class="sr-only">(página atual)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link item-navbar" href="quem-somos">Quem Somos</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle item-navbar" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Produtos
                    </a>
                    <div class="dropdown-menu menu-suspenso" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="produtos">Todos os produtos</a>
                        <div class="dropdown-divider"></div>

                        <?php

                        use App\Core\App;

                        $category = App::get('database')->selectAll('category');

                        foreach ($category as $categoria) : ?>
                            <a class="dropdown-item" href="produtos?Categoria=<?= $categoria->name; ?>"><?= $categoria->name; ?></a>
                        <?php endforeach ?>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link item-navbar" href="contato">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link item-navbar" href="login"><i class="fas fa-users-cog"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>