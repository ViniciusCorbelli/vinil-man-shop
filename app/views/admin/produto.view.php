<?php require('app/views/partials/head.admin.php') ?>

<div id="main" class="container-fluid">
    <main>
        <h1 class="mt-4 mx-auto non-space">Listagem de produtos</h1>

        <button class="mt-4 mb-4 btn btn-warning btn-lg non-space" data-toggle="modal" data-target="#new">Adicionar Novo Produto</button>

        <?php foreach ($sucessos as $sucesso) : ?>
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Sucesso!</strong> <?= $sucesso ?>
            </div>
            <?php endforeach ?>

        <?php foreach ($erros as $erro) : ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Erro!</strong> <?= $erro ?>
            </div>
        <?php endforeach ?>



        <div class="card mb-4 w-auto">
            <div class="card-header">
                <div class="row mb-1">
                    <div class="col-sm-12">
                        <h4 class="ml-2 non-space">Categorias</h4>
                    </div>
                </div>
                <div id="second-line" class="row">
                    <div class="col-sm-4">
                        <form class="form-inline">
                            <label style="font-size: larger;" for="">Exibir
                                <select class="ml-2 custom-select">
                                    <option selected>Seven</option>
                                </select>
                        </form>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-inline">
                            <label style="font-size: larger;" for="">Pesquisar</h5>
                                <input type="text" class="ml-3 mt-1 mb-1 form-control form-control w-75">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered no-space" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nome do produto</th>
                                <th>Preço do produto</th>
                                <th>Categoria</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nome do produto</th>
                                <th>Preço do produto</th>
                                <th>Categoria</th>
                                <th>Ação</th>
                            </tr>
                        </tfoot>
                        <tbody>

                            <?php foreach ($produtos as $produto) : ?>

                                <tr>
                                    <td><?= $produto->name; ?></td>
                                    <td><?= $produto->price; ?></td>

                                    <td>
                                        <?php
                                        foreach ($categorias as $categoria) : ?>

                                            <?php if ($categoria->id == $produto->id_category) : ?>
                                                <?= $categoria->name; ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </td>

                                    <td>
                                        <button type="button" class="btn" data-toggle="modal" data-target="#view-product-<?= $produto->id; ?>"><i class="fas fa-eye"></i></button>
                                        <button type="button" class="btn" data-toggle="modal" data-target="#edit-<?= $produto->id; ?>"><i class="fas fa-edit"></i></button>
                                        <button type="button" class="btn" data-toggle="modal" data-target="#delete-<?= $produto->id; ?>"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>


                                <!--MODAIS DO BOOTSTRAP-->
                                <!--deletar-->
                                <div class="modal" id="delete-<?= $produto->id; ?>" tabindex="-1" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Confirmação para deletar</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Você confirma que deseja deletar o produto: <?= $produto->name; ?></p>
                                                <p>Esta ação é irrevessível</p>
                                            </div>
                                            <div class="modal-footer">
                                                <form action="/admin/produto/delete" method="POST">
                                                    <input type="hidden" name="id" value="<?= $produto->id; ?>">
                                                    <input type="hidden" name="foto" value="<?= $produto->image; ?>">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                    <button class="btn btn-danger">Confirmar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--view-product-->
                                <div class="modal view-product-admin" id="view-product-<?= $produto->id; ?>" tabindex="-1" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Visualizar</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="view-product-container">
                                                    <img src="<?= $produto->image; ?>" alt="Produto">
                                                    <div class="view-product-information">
                                                        <h1><?= $produto->name; ?></h1>
                                                    </div>
                                                    <div class="view-product-information">
                                                        <?php foreach ($categorias as $categoria) : ?>
                                                            <?php if ($categoria->id == $produto->id_category) : ?>
                                                                <h6><?= $categoria->name; ?></h6>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </div>
                                                    <div class="view-product-information">
                                                        <h5>R$ <?= $produto->price; ?></h4>
                                                    </div>
                                                    <div class="view-product-information">
                                                        <p><?= $produto->description; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!--Edit-->
                                <div class="modal" id="edit-<?= $produto->id; ?>" tabindex="-1" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content formulario-produto-admin">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Editar Produto</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <form action="/admin/produto/edit" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <input type="hidden" name="item_id" value="<?= $produto->id; ?>">
                                                        <input type="hidden" name="foto" value="<?= $produto->image; ?>">
                                                        <h5>Nome do produto</h5>
                                                        <input type="text" name="item_name" class="form-control" value="<?= $produto->name; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <h5>Preço(R$)</h5>
                                                        <input type="text" name="item_price" class="form-control" value="<?= $produto->price; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <h5>Estoque</h5>
                                                        <input type="text" name="item_stock" class="form-control" value="<?= $produto->stock; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <h5>Descrição</h5>
                                                        <input type="text" name="item_description" class="form-control" value="<?= $produto->description; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Categoria</h5>
                                                        <select class="form-control" name="item_category" id="exampleFormControlSelect1">
                                                            <?php
                                                            foreach ($categorias as $categoria) : ?>

                                                                <?php if ($categoria->id == $produto->id_category) : ?>
                                                                    <option value="<?= $categoria->id; ?>" selected="selected">
                                                                        <?= $categoria->name; ?>
                                                                    </option>
                                                                <?php endif; ?>

                                                                <?php if ($categoria->id != $produto->id_category) : ?>
                                                                    <option value="<?= $categoria->id; ?>">
                                                                        <?= $categoria->name; ?>
                                                                    </option>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Foto</h5>
                                                        <input class="form-control" type="file" name="item_image">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                        <button class="btn btn-success">Editar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                <?php endforeach; ?>
                        </tbody>
                    </table>
                    <nav class="nav justify-content-end">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Proximo</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </main>
</div>

<!--criar novo-->
<div class="modal" id="new" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Adicionando novo produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="/admin/produto/create" method="POST" enctype="multipart/form-data">
                    <div class="form-group formulario-produto-admin">

                        <h5>Insira o nome do produto</h5>
                        <input type="text" name="item_name" class="form-control" placeholder="Nome do produto">

                        <h5>Insira o preço do produto(R$)</h5>
                        <input type="text" name="item_price" class="form-control" placeholder="Preço do produto">

                        <h5>Insira a quantidade em estoque</h5>
                        <input type="text" name="item_stock" class="form-control" placeholder="Quantidade em estoque">

                        <h5>Insira a descrição do produto</h5>
                        <textarea class="form-control" name="item_description" aria-label="With textarea"></textarea>

                        <h5>Insira a categoria</h5>
                        <select class="form-control" name="item_category" id="exampleFormControlSelect1">
                            <?php
                            foreach ($categorias as $categoria) : ?>
                                <option value="<?= $categoria->id; ?>">
                                    <?= $categoria->name; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>

                        <h5>Foto</h5>
                        <input class="form-control" type="file" name="item_image">
                    </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button class="btn btn-success">Criar novo</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php require('app/views/partials/footer.admin.php') ?>