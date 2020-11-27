<?php require('app/views/partials/head.php') ?>
<!--Page Content-->
<main class="view-home">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/public/img/carrousel_1.jpg" alt="Carrousel">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>

    <div class="container">
        <!--Slogan-->
        <section id="slogan" class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <section>
                    <h3>Sintonize na vinil man.</h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </section>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div id="animation">
                    <div class="vitrola-base"></div>
                    <div class="disco">
                        <div class="agulha"></div>
                    </div>
                    <div class="furo"></div>
                </div>
            </div>
        </section>
        <!--\Slogan-->

        <!--Sobre-->
        <section id="sobre" class="mt-5 mb-5">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div id="viniman" class="d-flex justify-content-center">
                        <img src="/public/img/vini-profile.jpg" alt="Foto de Viniman">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                    <section>
                        <h4>Quem é Viniman?</h4>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </section>
                </div>
            </div>
        </section>
        <!--\Sobre-->

        <div class="index-destaques">
            <hr width=“2” size=“100”>
            <h2>Produtos em destaques</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 produtos-cards produto-listagem-margin">
                    <a href="#">
                        <div class="card h-100">
                            <img class="card-img-top card-img" src="http://placehold.it/750x450" alt="Vinil">
                            <div class="card-body">
                                <h4 class="card-title produtos-cards-titulo">
                                    <a class="produtos-cards-titulo" href="#">Nome do vinil</a>
                                </h4>
                                <h5>R$ 230,00</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">5 unid. disponível</small>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="index-promo">
            <hr width=“2” size=“100”>
            <h2>Promoções</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 produtos-cards produto-listagem-margin">
                    <a href="#">
                        <div class="card h-100">
                            <img class="card-img-top card-img" src="http://placehold.it/750x450" alt="Vinil">
                            <div class="card-body">
                                <h4 class="card-title produtos-cards-titulo">
                                    <a class="produtos-cards-titulo" href="#">Nome do vinil</a>
                                </h4>
                                <h5>R$ 230,00</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">5 unid. disponível</small>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> CRUD-gerenciamento-categoria


    </div>
</main>
<!--\Page Content-->

<<<<<<< HEAD
<?php require('app/views/partials/footer.php') ?>
=======
<?php require('app/views/partials/footer.php') ?>
=======
    </main>

<?php 
    include ('partials/footer.php');
?>
>>>>>>> 96c864d206c260b701fd0d77c5e17fbe386ddccf
>>>>>>> CRUD-gerenciamento-categoria
