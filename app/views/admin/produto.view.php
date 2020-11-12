<?php dirname('/x');
require('C:\xampp\htdocs\app\views\partials/head.admin.php'); ?>

<div id="main" class="container-fluid">
    <main>
        <h1 class="mt-4 mx-auto non-space">Bem Vindo {{nome do usuário}}</h1>

        <button class="mt-4 mb-4 btn btn-warning btn-lg non-space" data-toggle="modal" data-target="#new">Adicionar novo produto</button>

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
                            <label style="font-size: larger;" for="">Exibir</label>
                            <select class="ml-2 custom-select">
                                <option selected>Seven</option>
                            </select>
                        </form>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-inline">
                            <label style="font-size: larger;" for="">Search</label>
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
                                <td><?= $produto->id_category; ?></td>
                                <td>
                                    <button type="button" class="btn" data-toggle="modal" data-target="#view-product"><i class="fas fa-eye"></i></button>
                                    <button type="button" class="btn" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn" data-toggle="modal" data-target="#delete"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <nav class="nav justify-content-end">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </main>
</div>
</div>

<!--MODAIS DO BOOTSTRAP-->
<!--deletar-->
<div class="modal" id="delete" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmação para deletar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Você confirma que deseja deletar o produto {{Nome do produto}}</p>
                <p>Esta ação é irrevessível</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-danger">Confirmar</button>
            </div>
        </div>
    </div>
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
                <div class="form-group">
                    <label>Insira o nome do produto</label>
                    <input type="text" class="form-control" placeholder="Nome do produto">
                </div>
                <div class="form-group">
                    <label>Insira o preço do produto(R$)</label>
                    <input type="text" class="form-control" placeholder="Preço do produto">
                </div>
                <div class="form-group">
                    <label>Insira a descrição do produto</label>
                    <input type="text" class="form-control" placeholder="Descrição do produto">
                </div>
                <div class="form-group">
                    <label>Categoria</label>
                    <select class="select-category form-control">
                        <option selected>Categoria</option>
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input type="image" src="" class="form-control" alt="Adicione a imagem do produto" style="height: 200px;">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-success">Criar novo</button>
            </div>
        </div>
    </div>
</div>

<!--view-product-->
<div class="modal" id="view-product" tabindex="-1" role="dialog">
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
                    <img src="/img/disco-teste.jpg" alt="Produto-1">
                    <div class="view-product-information">
                        <h4>Descrição</h4>
                        <p>Disco da banda Guns 'N Roses</p>
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
<div class="modal" id="edit" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nome do produto</label>
                    <input type="text" class="form-control" placeholder="Nome do produto">
                </div>
                <div class="form-group">
                    <label>Preço(R$)</label>
                    <input type="text" class="form-control" placeholder="Preço do produto">
                </div>

                <div class="form-group">
                    <label>Descrição</label>
                    <input type="text" class="form-control" placeholder="Descrição do produto">
                </div>
                <div class="form-group">
                    <label>Categoria</label>
                    <select class="select-category form-control">
                        <option selected>Categoria</option>
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input type="image" src="" class="form-control" alt="Adicione a imagem do produto" style="height: 200px;">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-success">Editar</button>
            </div>
        </div>
    </div>
</div>

<?php dirname('/x');
require('C:\xampp\htdocs\app\views\partials/footer.admin.php'); ?>