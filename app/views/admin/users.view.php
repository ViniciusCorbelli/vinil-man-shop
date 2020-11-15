<?php require('app/views/partials/head-adm.php') ?>
<div class="wrapper">
  <div id="sidenav" class="sidenav">

    <!--Icone para fechar a sidebar em casos de tela menor que 414px-->
    <a class="closeBtn cool-link mb-2 mb-6" onclick="closeBtn()">
      <i class="far fa-times-circle"></i>
    </a>

    <a class="cool-link mb-2" href="admin/home">
      <i class="fas fa-home"></i>
      <span class="ml-1">Home</span>
    </a>
    <a class="cool-link mb-2" href="admin/users">
      <i class="fas fa-users"></i>
      <span class="ml-1">Usuários</span>
    </a>
    <a class="cool-link mb-2" href="admin/category">
      <i class="fas fa-table"></i>
      <span class="ml-1">Categorias</span>
    </a>
    <a class="cool-link mb-2" href="admin/product">
      <i class="fas fa-record-vinyl"></i>
      <span class="ml-1">Produtos</span>
    </a>
  </div>

  <div id="main" class="container-fluid">
    <main>
      <h1 class="mt-4 mx-auto non-space">Listagem de Usuários</h1>

      <button class="mt-4 mb-4 btn btn-warning btn-lg non-space" data-toggle="modal" data-target="#new">Criar Novo Usuário</button>

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
                <select class="ml-2 custom-select custom-select">
                  <option selected>Seven</option>
                </select>
              </form>
            </div>
            <div class="col-sm-8">
              <div class="form-inline">
                <label style="font-size: larger;" for="">Seach</label>
                <input type="text" class="ml-3 mt-1 mb-1 form-control form-control w-75">
              </div>
            </div>
          </div>
        </div>

        <div class="card-body non-space">
          <div class="table-responsive">
            <table class="table table-bordered w-100" id="dataTable" cellspacing="0">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Ações</th>
                </tr>
              </tfoot>
              <tbody>

                <?php foreach ($users as $user) : ?>

                  <tr>
                    <td>
                      <p><?= $user->name ?></p>
                    </td>
                    <td>
                      <p class="email-php"><?= $user->email ?></p>
                    </td>
                    <td>
                      <button type="button" class="btn" data-toggle="modal" data-target="#view-user-<?= $user->id ?>"><i class="fas fa-eye"></i></button>
                      <button type="button" class="btn" data-toggle="modal" data-target="#edit-<?= $user->id ?>"><i class="fas fa-edit"></i></button>
                      <button type="button" class="btn" data-toggle="modal" data-target="#delete-<?= $user->id ?>"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>


                  <!--MODAL PARA DELETAR-->
                  <div class="modal" id="delete-<?= $user->id ?>" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Confirmação para deletar</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Você confirma que deseja deletar o usuário: <?= $user->name ?>?</p>
                          <p>Esta ação é irrevessível</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                          <button type="button" class="btn btn-danger" href="user/delete">Confirmar</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!--Edit-->
                  <div class="modal" id="edit-<?= $user->id ?>" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Editar <?= $user->name ?></h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" placeholder="<?= $user->name ?>"><br>
                            <label>Email</label><br>
                            <input type="text" class="form-control" placeholder="<?= $user->email ?>"><br>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                          <button type="button" class="btn btn-success">Editar</button>
                        </div>
                      </div>
                    </div>
</div>

                  <!--Modal de visualizar usuário-->
                  <div class="modal" id="view-user-<?= $user->id ?>" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Vizualizar Usuário</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label>
                              <p class="nome-php"><?= $user->name ?></p>
                            </label>
                            <label>
                              <p class="email-php"><?= $user->email ?></p>
                            </label><br>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                      </div>
                    </div>
                  </div>

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

<!--criar novo-->
<div class="modal" id="new" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Criando novo usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form" class="form-group" action="/user/create" method="POST">
          <label>Nome</label>
          <input type="text" name="name" class="form-control" placeholder="Nome do Usuário"><br>
          <label>Email</label><br>
          <input type="text" name="email" class="form-control" placeholder="exempo@exemplo.com"><br>
          <label>Password</label><br>
          <input type="text" name="password" class="form-control" placeholder="*****">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-success" data-target="form">Criar novo Usuário</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<?php require('app/views/partials/footer-adm.php') ?>