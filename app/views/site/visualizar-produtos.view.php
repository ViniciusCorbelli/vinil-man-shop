<?php
$nomePage = $titulo;
require('app/views/partials/head.php');
?>

<?php foreach ($produtosID as $produtoID) : ?>
    <?php
    $id = $produtoID->id;
    $name = $produtoID->name;
    $description = $produtoID->description;
    $price = $produtoID->price;
    $stock = $produtoID->stock;
    $id_category = $produtoID->id_category;
    $image = $produtoID->image;
    ?>
<?php endforeach; ?>

<?php foreach ($categorias as $categoriaa) : ?>
    <?php if ($categoriaa->id == $id_category) : ?>
        <?php $categoria = $categoriaa->name; ?>
    <?php endif; ?>
<?php endforeach; ?>

<div class="visualizar-produto-main">
    <nav class="nav nav-pills nav-justified visualizar-produto-nav">
        <a class="nav-link active visualizar-produto-voltar" href="/produtos"><i class="fas fa-home"></i> Voltar à lista</a>
        <a class="nav-link disabled visualizar-produto-caminho">|</a>
        <a class="nav-link visualizar-produto-caminho" href="/produtos">Produtos</a>
        <a class="nav-link disabled visualizar-produto-caminho"></a>
        <a class="nav-link visualizar-produto-caminho" href="/produtos">Vinil</a>
        <a class="nav-link disabled visualizar-produto-caminho"></a>
        <a class=" nav-link visualizar-produto-caminho" href="/produtos?category=<?= $categoria  ?>"><?= $categoria  ?></a>
    </nav>

    <div class="row visualizar-produto-pagina">
        <div class="col-lg-8 visualizar-produto-img">
            <img class="card-img-top card-img visualizar-produto-img-principal " src="<?= $image; ?>" alt="Vinil ">
        </div>
        <div class="col-lg-4 visualizar-produto-inf">
            <h1><?= $name ?></h1>
            <i class="fas fa-star visualizar-produto-estrela "></i>
            <i class="fas fa-star visualizar-produto-estrela "></i>
            <i class="fas fa-star visualizar-produto-estrela "></i>
            <i class="fas fa-star visualizar-produto-estrela "></i>
            <i class="fas fa-star visualizar-produto-estrela "></i>
            <h2>R$ <?= $price; ?></h2>
            <h6>1x R$ <?= $price; ?> sem juros</h6>
            <h4>Estoque dispoível</h4>
            <h5>Quantidade: <?= $stock; ?> dísponivel</h5>
            <a href="produto?id=<?= $id; ?>" class="btn btn-primary btn-lg visualizar-produto-button-comprar " role="button " aria-disabled="true ">Comprar agora</a>
            <a href="produto?id=<?= $id; ?>" class="btn btn-primary btn-lg visualizar-produto-button-carrinho " role="button " aria-disabled="true ">Adicionar ao carrinho</a>
        </div>

        <div class="visualizar-produto-relacionados">
            <h1>Produtos relacionados</h1>
            <div class="row">


                <?php
                $i = 0;
                foreach ($produtos as $produto) : ?>
                    <?php if ($i <= 3) : ?>
                        <div class="col-xs-3 col-sm-3 col-md-3 produtos-cards produto-listagem-margin">
                            <a href="/produto?id=<?= $produto->id ?>">
                                <div class="card h-100 ">
                                    <img class="card-img-top card-img " src="<?= $produto->image; ?>" alt="Vinil ">
                                    <div class="card-body ">
                                        <h4 class="card-title visualizar-produto-cards-titulo ">
                                            <a class="visualizar-produto-cards-titulo " href="/produto?id=<?= $produto->id ?>"><?= $produto->name; ?></a>
                                        </h4>
                                        <h5>R$ <?= $produto->price; ?></h5>
                                        <p class="card-text"><?= $produto->description; ?></p>
                                    </div>
                                    <div class="card-footer ">
                                        <small class="text-muted "><?= $produto->stock ?> unid. disponível</small>
                                    </div>
                                </div>
                            </a>
                        </div>

                    <?php endif; ?>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="visualizar-produto-caracteristicas">
            <h1>Características principais</h1>
            <table class="table table-striped ">
                <tbody>
                    <tr>
                        <th scope="row ">Nome do Vinil</th>
                        <td><?= $name; ?></td>
                    </tr>
                    <tr>
                        <th scope="row ">Categoria</th>
                        <td><?= $categoria; ?></td>
                    </tr>
                    <tr>
                        <th scope="row ">Preço</th>
                        <td>R$ <?= $price; ?></td>
                    </tr>
                    <tr>
                </tbody>
            </table>


            <h2>Descrição</h2>
            <p><?= $description; ?></p>
        </div>
    </div>
</div>

<?php require('app/views/partials/footer.php') ?>