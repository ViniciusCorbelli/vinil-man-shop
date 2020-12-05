<?php
$nomePage = $titulo;
require('app/views/partials/head.php');
?>
<!--Page Content-->
<main class="view-home">
    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/public/img/carrousel_1.jpg" alt="Slide de anuncio">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/public/img/carrousel_2.jpg" alt="Slide de anuncio">
            </div>
        </div>
    </div>
    <!--/.Carousel Wrapper-->

    <div class="index-destaques">
        <hr width=“2” size=“100”>
        <h2>Produtos em destaques</h2>
        <div id="demo" class="carousel slide" data-ride="carousel">

            <ul class="carousel-indicators carrousel-indicators-produtos">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <div class="container carousel-inner no-padding index-destaques">
                <div class="carousel-item active">

                    <?php
                    $i = 0;
                    foreach ($produtos as $produto) :
                    ?>
                        <?php if ($i <= 3) : ?>
                            <div class="col-xs-3 col-sm-3 col-md-3 produtos-cards produto-listagem-margin">
                                <a href="/produto?id=<?= $produto->id; ?>">
                                    <div class="card h-100">
                                        <img class="card-img-top card-img" src="<?= $produto->image; ?>" alt="Vinil">
                                        <div class="card-body">
                                            <h4 class="card-title produtos-cards-titulo">
                                                <a href="/produto?id=<?= $produto->id; ?>"><?= $produto->name; ?></a>
                                            </h4>
                                            <h5>R$ <?= $produto->price; ?></h5>
                                            <p class="card-text"><?= $produto->description; ?></p>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted"><?= $produto->stock; ?> unid. disponível</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endif; ?>

                        <?php if ($i == 3) : ?>
                </div>
                <div class="carousel-item">
                <?php endif; ?>

                <?php if ($i > 3 && $i <= 7) : ?>
                    <div class="col-xs-3 col-sm-3 col-md-3 produtos-cards produto-listagem-margin">
                        <a href="/produto?id=<?= $produto->id; ?>">
                            <div class="card h-100">
                                <img class="card-img-top" src="<?= $produto->image; ?>" alt="Vinil">
                                <div class="card-body">
                                    <h4 class="card-title produtos-cards-titulo">
                                        <a href="/produto?id=<?= $produto->id; ?>"><?= $produto->name; ?></a>
                                    </h4>
                                    <h5>R$ <?= $produto->price; ?></h5>
                                    <p class="card-text"><?= $produto->description; ?></p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted"><?= $produto->stock; ?> unid. disponível</small>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>

                <?php if ($i == 7) : ?>
                </div>
                <div class="carousel-item">
                <?php endif; ?>

                <?php if ($i > 7 && $i <= 11) : ?>
                    <div class="col-xs-3 col-sm-3 col-md-3 produtos-cards produto-listagem-margin">
                        <a href="/produto?id=<?= $produto->id; ?>">
                            <div class="card h-100">
                                <img class="card-img-top card-img" src="<?= $produto->image; ?>" alt="Vinil">
                                <div class="card-body">
                                    <h4 class="card-title produtos-cards-titulo">
                                        <a href="/produto?id=<?= $produto->id; ?>"><?= $produto->name; ?></a>
                                    </h4>
                                    <h5>R$ <?= $produto->price; ?></h5>
                                    <p class="card-text"><?= $produto->description; ?></p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted"><?= $produto->stock; ?> unid. disponível</small>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>

                <?php if ($i == 11) : ?>
                </div>
            <?php endif; ?>


            <?php $i++ ?>
        <?php endforeach; ?>
            </div>
        </div>
    </div>


    <div class="container">
        <!--Slogan-->
        <section id="slogan" class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <section>
                    <h3>Conheça a Vinil Man Shop</h3>
                        <p>Somos uma empresa de vendas de vinil que tem como objetivo democratizar o comércio oferecendo a melhor plataforma e os serviços necessários para que pessoas e empresas possam comprar com a qualidade Vinil Man Shop.
                        </p>
                        <p>Nascemos em 2020, no Brasil, e atualmente fazemos entrega para os quatro cantos do Brasil. Nosso marketplace - vinilmanshop.com.br - foi desenolvido por Trainee do processo seletivo da empresa júnior da Faculdade Federal de Juiz de
                            Fora, CodeJR.</p>
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
                        <h4>Conheça o Viniman</h4>
                        <p>Somos uma empresa de vendas de vinil que tem como objetivo democratizar o comércio oferecendo a melhor plataforma e os serviços necessários para que pessoas e empresas possam comprar com a qualidade Vinil Man Shop.
                        </p>
                        <p>Nascemos em 2020, no Brasil, e atualmente fazemos entrega para os quatro cantos do Brasil. Nosso marketplace - vinilmanshop.com.br - foi desenolvido por Trainee do processo seletivo da empresa júnior da Faculdade Federal de Juiz de
                            Fora, CodeJR.</p>
                    </section>
                </div>
            </div>
        </section>
        <!--\Sobre-->
    </div>
</main>

<?php require('app/views/partials/footer.php') ?>