<?php session_start();
require('app/views/partials/head.admin.php') ?>

<div id="main" class="container-fluid">
  <main>
    <h1 class="mt-4 mx-auto non-space">Listagem de Categorias</h1>

    <button class="mt-4 mb-4 btn btn-warning btn-lg non-space" data-toggle="modal" data-target="#new">Adicionar Nova Categoria</button>

    <?php
    if (isset($_SESSION['sucessos']))
      foreach ($_SESSION['sucessos'] as $sucesso) : ?>
      <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Sucesso!</strong> <?= $sucesso ?>
      </div>
    <?php endforeach ?>

    <?php
    if (isset($_SESSION['erros']))
      foreach ($_SESSION['erros'] as $erro) : ?>
      <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Erro!</strong> <?= $erro ?>
      </div>
    <?php endforeach ?>

    <?php
    unset($_SESSION['sucessos']);
    unset($_SESSION['erros']);
    ?>

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
              <label style="font-size: larger;" for="">Pesquisar
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
                <th>Categoria</th>
                <th>Ação</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Categoria</th>
                <th>Ação</th>
              </tr>
            </tfoot>
            <tbody>

              <?php foreach ($category as $categoria) : ?>

                <tr>
                  <td><?= $categoria->name; ?></td>

                  <td>
                    <button type="button" class="btn" data-toggle="modal" data-target="#view-category-<?= $categoria->id; ?>"><i class="fas fa-eye"></i></button>
                    <button type="button" class="btn" data-toggle="modal" data-target="#edit-<?= $categoria->id; ?>"><i class="fas fa-edit"></i></button>
                    <button type="button" class="btn" data-toggle="modal" data-target="#delete-<?= $categoria->id; ?>"><i class="fas fa-trash"></i></button>
                  </td>
                </tr>


                <!--MODAIS DO BOOTSTRAP-->
                <!--deletar-->
                <div class="modal" id="delete-<?= $categoria->id; ?>" tabindex="-1" role="dialog">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Confirmação para deletar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Você confirma que deseja deletar a categoria: <?= $categoria->name; ?></p>
                        <p>Esta ação é irrevessível</p>
                      </div>
                      <div class="modal-footer">
                        <form action="/admin/categoria/delete" method="POST" enctype="multipart/form-data">
                          <input type="hidden" name="id" value="<?= $categoria->id; ?>">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                          <button type="submit" class="btn btn-danger">Confirmar</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

                <!--view-categoria-->
                <div class="modal" id="view-category-<?= $categoria->id; ?>" tabindex="-1" role="dialog">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Visualizar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="view-category-container">

                          <?= $categoria->name; ?>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                  </div>
                </div>


                <!--Edit-->
                <div class="modal" id="edit-<?= $categoria->id; ?>" tabindex="-1" role="dialog">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Editar Categoria</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <form action="/admin/categoria/edit" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                            <input type="hidden" name="id" value="<?= $categoria->id; ?>">
                            <h4>Nome da categoria</h4>
                            <input type="text" name="name" class="form-control" value="<?= $categoria->name; ?>">
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button class="btn btn-success">Editar</button>
                          </div>
                        </form>
                      </div>
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
        <h5 class="modal-title">Adicionando nova categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="/admin/categoria/create" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <h4>Insira o nome da categoria</h4>
            <input type="text" name="name" class="form-control" placeholder="Nome da categoria">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-success">Criar novo</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php require('app/views/partials/footer.admin.php') ?>