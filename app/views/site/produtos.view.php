<?php
$nomePage = $titulo;
require('app/views/partials/head.php');
?>

<main>
    <div class="produtos-cabecalho">
        <img src="/public/img/background.jpg">
        <div class="produtos-titulo">
            <h1>Produtos</h1>
        </div>
    </div>

    <div class="produtos-main">

        <div class="row">
            <div class="col-lg-3">

                <div class="list-group produtos-buscador">
                    <div class="produto-config-celular">


                        <div class="dropdown show produtos-relevantes ">
                            <a class="btn btn-secondary dropdown-toggle produtos-relevantes-background" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Estilo</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <?php foreach ($categorias as $categoria) : ?>
                                    <a class="dropdown-item" href="/produtos?category=<?= $categoria->name ?>"><?= $categoria->name ?></a>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                    <div class="produto-config-computador">
                        <h1><?=$pesquisa?></h1>
                        <h2><?=$quantidade?> resultados</h2>
                        <h6>Estilos</h6>
                        <?php foreach ($categorias as $categoria) : ?> <a class="dropdown-item" href="/produtos?category=<?= $categoria->name ?>"><?= $categoria->name ?></a>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>


            <div class="col-lg-9">

                <div id="carouselExampleIndicators" class="carousel slide my-4 produtos-carrosel-margin" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="" data-slide-to="0" class="active"></li>
                        <li data-target="" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner produtos-carrosel-animation" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid produtos-carrosel" src="/public/img/carrousel_1.jpg" alt="Carossel de promoções">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid produtos-carrosel" src="/public/img/carrousel_2.jpg" alt="Carossel de promoções">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Proximo</span>
                    </a>
                </div>

                <div class="row produto-listagem-margin">

                    <?php foreach ($produtos as $produto) : ?>
                        <div class="col-lg-4 col-md-6 mb-4 produtos-cards">
                            <a href="produto?id=<?= $produto->id ?>">
                                <div class="card h-100">
                                    <img class="card-img-top card-img" src="<?= $produto->image; ?>" alt="Vinil">
                                    <div class="card-body">
                                        <h4 class="card-title produtos-cards-titulo">
                                            <a class="produtos-cards-titulo" href="produto?id=<?= $produto->id ?>"><?= $produto->name ?></a>
                                        </h4>
                                        <h5>R$ <?= $produto->price ?></h5>
                                        <p class="card-text"><?= $produto->description ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted"><?= $produto->stock ?> unid. disponível</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach ?>

                </div>
            </div>
        </div>

        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center produtos-navigation">
                <!--<li class="page-item produtos-paginas">
                        <a class="page-link produtos-paginas" href="#" tabindex="-1"><i class="fas fa-arrow-left"></i> Anterior</a>
                        </li>-->
                <li class="page-item produtos-paginas-clicado"><a class="page-link produtos-paginas-clicado" href="#">1</a></li>
                <li class="page-item produtos-paginas"><a class="page-link produtos-paginas" href="#">2</a></li>
                <li class="page-item produtos-paginas"><a class="page-link produtos-paginas" href="#">3</a></li>
                <li class="page-item produtos-paginas"><a class="page-link produtos-paginas" href="#">4</a></li>
                <li class="page-item produtos-paginas">
                    <a class="page-link" href="#">Próxima <i class="fas fa-arrow-right"></i></a>
                </li>
            </ul>
        </nav>
</main>

<?php require('app/views/partials/footer.php') ?>