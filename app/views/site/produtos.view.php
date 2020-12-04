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
                                    <a class="dropdown-item" href="/produtos?Categoria=<?= $categoria->name ?>"><?= $categoria->name ?></a>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                    <div class="produto-config-computador">
                        <h3>Pesquisa por: </h3>
                        <h1><?= $pesquisa ?></h1>
                        <h3>Resultados: </h3>
                        <h2><?= $quantidade ?> resultados</h2>
                        <h6>Estilos</h6>

                        <?php

                        function unset_uri_var($variable, $uri)
                        {
                            $parseUri = parse_url($uri);
                            $arrayUri = array();
                            parse_str($parseUri['query'], $arrayUri);
                            unset($arrayUri[$variable]);
                            $newUri = http_build_query($arrayUri);
                            $newUri = $parseUri['path'] . '?' . $newUri;
                            return $newUri;
                        }

                        ?>

                        <?php foreach ($categorias as $categoria) : ?>

                            <?php if (isset($_GET) && !empty($_GET) && ((isset($_GET['Pesquisa']) && !empty($_GET['Pesquisa'])) || (isset($_GET['Pagina']) && !empty($_GET['Pagina'])))) :
                                $url = unset_uri_var('Categoria', basename($_SERVER['REQUEST_URI']));
                            ?>
                                <?php if (isset($_GET['Categoria']) && !empty($_GET['Categoria']) && $_GET['Categoria'] == $categoria->name) : ?>
                                    <span class="thisPage dropdown-item"><?= $categoria->name ?></span>
                                <?php else : ?>
                                    <a class="dropdown-item" href="<?= $url ?>&Categoria=<?= $categoria->name ?>"><?= $categoria->name ?></a>
                                <?php endif; ?>
                            <?php else : ?>
                                <?php if (isset($_GET['Categoria']) && !empty($_GET['Categoria']) && $_GET['Categoria'] == $categoria->name) : ?>
                                    <span class="thisPage dropdown-item"><?= $categoria->name ?></span>
                                <?php else : ?>
                                    <a class="dropdown-item" href="/produtos?Categoria=<?= $categoria->name ?>"><?= $categoria->name ?></a>
                                <?php endif; ?>
                            <?php endif; ?>

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
                    <?php
                    $produtoQNT = 0;
                    foreach ($produtos as $produto) :
                        if ($produtoQNT < $pagina * 9 && $produtoQNT >= ($pagina-1) * 9):?>
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
                        <?php endif;
                        $produtoQNT++; ?>
                    <?php endforeach ?>

                </div>
            </div>
        </div>

        <?php
        //Anterior e posterior
        $anterior = $pagina - 1;
        $posterior = $pagina + 1;
        ?>

        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center produtos-navigation">
                <?php if ($anterior != 0) : ?>

                    <?php if (isset($_GET) && !empty($_GET) && ((isset($_GET['Pesquisa']) && !empty($_GET['Pesquisa'])) || (isset($_GET['pagina']) && !empty($_GET['pagina'])))) :
                        $url = unset_uri_var('pagina', basename($_SERVER['REQUEST_URI']));
                    ?>
                        <a class="page-link produtos-paginas" href="<?= $url ?>&pagina=<?= $anterior ?>" tabindex="-1"><i class="fas fa-arrow-left"></i> Anterior</a>
                    <?php endif; ?>

                <?php endif ?>

                <?php for ($i = 0; $i < $totalDeLinks; $i++) { ?>

                    <?php if (isset($_GET) && !empty($_GET) && ((isset($_GET['Pesquisa']) && !empty($_GET['Pesquisa'])) || (isset($_GET['pagina']) && !empty($_GET['pagina'])))) :
                        $url = unset_uri_var('pagina', basename($_SERVER['REQUEST_URI']));
                    ?>
                        <li class="page-item produtos-paginas-clicado"><a class="page-link produtos-paginas-clicado" href="<?= $url ?>&pagina=<?= $i + 1 ?>"><?= $i + 1 ?></a></li>
                    <?php else : ?>
                        <li class="page-item produtos-paginas-clicado"><a class="page-link produtos-paginas-clicado" href="/produtos?pagina=<?= $i + 1 ?>"><?= $i + 1 ?></a></li>
                    <?php endif; ?>

                <?php } ?>

                <?php if ($posterior <= $totalDeLinks) : ?>


                    <?php if (isset($_GET) && !empty($_GET) && ((isset($_GET['Pesquisa']) && !empty($_GET['Pesquisa'])) || (isset($_GET['pagina']) && !empty($_GET['pagina'])))) :
                        $url = unset_uri_var('pagina', basename($_SERVER['REQUEST_URI']));
                    ?>
                        <a class="page-link produtos-paginas" href="<?= $url ?>&pagina=<?= $posterior ?>" tabindex="-1">Próxima<i class="fas fa-arrow-right"></i></a>
                    <?php else : ?>
                        <a class="page-link produtos-paginas" href="/produtos?&pagina=<?= $posterior ?>" tabindex="-1">Próxima<i class="fas fa-arrow-right"></i></a>
                    <?php endif; ?>

                <?php endif ?>

            </ul>
        </nav>
    </div>
</main>

<?php require('app/views/partials/footer.php') ?>