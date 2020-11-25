<nav id="navbar" class="nav navbar-fixed-top navbar-expand-sm navbar-color-bg shadow">
    <a class="navbrand ml-3" href="/">
        <img src="/public/img/logo.png" alt="logo">
    </a>

    <button class="btn mb-2 mr-auto ml-3" type="button" onclick="toggleButton()">
        <i class="fas fa-bars"></i>
    </button>

    <button id="sign-out" class="btn mb-2 ml-auto mr-3">
        <i class="fas fa-sign-out-alt fa-lg"></i>
    </button>
</nav>

<div class="wrapper">
    <div id="sidenav" class="sidenav">

        <!--Icone para fechar a sidebar em casos de tela menor que 414px-->
        <a class="closeBtn mb-6" onclick="closeBtn()">
            <i class="far fa-times-circle"></i>
        </a>

        <a class="cool-link mb-2" href="/admin">
            <i class="fas fa-home"></i>
            <span class="ml-1">Home</span>
        </a>
        <a class="cool-link mb-2" href="/admin/usuarios">
            <i class="fas fa-users"></i>
            <span class="ml-1">Usuários</span>
        </a>
        <a class="cool-link mb-2" href="/admin/categoria">
            <i class="fas fa-table"></i>
            <span class="ml-1">Categorias</span>
        </a>
        <a class="cool-link mb-2" href="/admin/produto">
            <i class="fas fa-record-vinyl"></i>
            <span class="ml-1">Produtos</span>
        </a>
    </div>