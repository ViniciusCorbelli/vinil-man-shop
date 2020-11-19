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
                        <div class="dropdown show produtos-relevantes">
                            <a class="btn btn-secondary dropdown-toggle produtos-relevantes-background" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ordenar anúncios</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Mais relevantes</a>
                                <a class="dropdown-item" href="#">Menor preço</a>
                                <a class="dropdown-item" href="#">Maior preço</a>
                            </div>
                        </div>



                        <div class="dropdown show produtos-relevantes ">
                            <a class="btn btn-secondary dropdown-toggle produtos-relevantes-background" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Estilo</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <?php foreach ($categorias as $categoria) : ?>
                                    <a class="dropdown-item" href="#"><?= $categoria->name ?></a>
                                <?php endforeach ?>
                            </div>
                        </div>

                        <div class="dropdown show produtos-relevantes">
                            <a class="btn btn-secondary dropdown-toggle produtos-relevantes-background" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Preço</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Até R$ 35 (204.889)</a>
                                <a class="dropdown-item" href="#">R$ 35 a R$ 65 (204.889)</a>
                                <a class="dropdown-item" href="#">Mais R$ 65 (204.889)</a>
                            </div>
                        </div>
                    </div>
                    <div class="produto-config-computador">
                        <h3>Tipo de produto</h3>
                        <h1>Pesquisa</h1>
                        <h2>1.0245.245 resultados</h2>
                        <h4>Ordenar anúncios</h4>
                        <div class="dropdown show produtos-relevantes">
                            <a class="btn btn-secondary dropdown-toggle produtos-relevantes-background" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                mais relevantes
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Mais relevantes</a>
                                <a class="dropdown-item" href="#">Menor preço</a>
                                <a class="dropdown-item" href="#">Maior preço</a>
                            </div>
                        </div>
                        <h6>Estilos</h6>
                        <?php foreach ($categorias as $categoria) : ?> <a class="dropdown-item" href="#"><?= $categoria->name ?></a>
                        <?php endforeach ?>
                        <h6>Preço</h6>
                        <form>
                            <div class="form-group">
                                <input type="range" class="form-control-range" id="formControlRange">
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="col-lg-9">

                <div id="carouselExampleIndicators" class="carousel slide my-4 produtos-carrosel-margin" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="" data-slide-to="0" class="active"></li>
                        <li data-target="" data-slide-to="1"></li>
                        <li data-target="" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner produtos-carrosel-animation" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid produtos-carrosel" src="http://placehold.it/900x350" alt="Carossel de promoções">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid produtos-carrosel" src="http://placehold.it/900x350" alt="Carossel de promoções">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid produtos-carrosel" src="http://placehold.it/900x350" alt="Carossel de promoções">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="row produto-listagem-margin">

                    <?php foreach ($produtos as $produto): ?>
                    <div class="col-lg-4 col-md-6 mb-4 produtos-cards">
                        <a href="produtos/<?= $produto->id ?>">
                            <div class="card h-100">
                                <img class="card-img-top card-img" src="/public/img/product/<?= $produto->name; ?>" alt="Vinil">
                                <div class="card-body">
                                    <h4 class="card-title produtos-cards-titulo">
                                        <a class="produtos-cards-titulo" href="produtos/<?= $produto->id ?>">"><?= $produto->name ?></a>
                                    </h4>
                                    <h5><?= $produto->price ?></h5>
                                    <p class="card-text"><?= $produto->description ?></p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted"><?= $produto->stock ?></small>
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