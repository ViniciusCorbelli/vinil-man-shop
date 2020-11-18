<?php require('app/views/partials/head-adm.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <title>Vinilman - admin</title>
        <link rel="icon" type="image/png" href="img/logo.png">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://kit.fontawesome.com/f74eef7211.js" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="/public/css/styles.css">
        <link rel="stylesheet" href="/public/css/bootstrap.min.css">
        
    </head>
    <body>

        
            
            <button class="btn mb-2 mr-auto ml-3" type="button" onclick="toggleButton()">
                <i class="fas fa-bars"></i>
            </button>

            <button id="sign-out"  class="btn mb-2 ml-auto mr-3">
                <i class="fas fa-sign-out-alt fa-lg"></i>
            </button>
        </nav>

        <div class="wrapper">
            <div id="sidenav" class="sidenav">
                
                <!--Icone para fechar a sidebar em casos de tela menor que 414px-->
                <a class="closeBtn mb-6" onclick="closeBtn()">
                    <i class="far fa-times-circle"></i>
                </a>

                <a class="cool-link mb-2" href="#">
                    <i class="fas fa-home"></i>
                    <span class="ml-1">Home</span>
                </a>
                <a class="cool-link mb-2" href="#">
                    <i class="fas fa-users"></i>
                    <span class="ml-1">Usuários</span>
                </a>
                <a class="cool-link mb-2" href="#">
                    <i class="fas fa-table"></i>
                    <span class="ml-1">Categorias</span>
                </a>
                <a class="cool-link mb-2" href="#">
                    <i class="fas fa-record-vinyl"></i>
                    <span class="ml-1">Produtos</span>
                </a>
            </div>
    
            <div id="main" class="container-fluid">
                <main>
                    <h1 class="mt-4 mx-auto non-space">Bem Vindo </h1>
                    
                    <button id="create-new-btn" class="mt-4 mb-4 btn btn-warning btn-lg non-space" data-toggle="modal" data-target="#new">criar nova categoria</button>

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
                            </div>
                        </div>

                        <div class="card-body non-space">
                            <div class="table-responsive">
                                <table class="table table-bordered w-100" id="dataTable" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Ação</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Musica Popular Brasileira</td>
                                            <td>
                                                <button type="button" class="btn" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn" data-toggle="modal" data-target="#delete"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Rock</td>
                                            <td>
                                                <button type="button" class="btn" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn" data-toggle="modal" data-target="#delete"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sertanejo</td>
                                            <td>
                                                <button type="button" class="btn" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn" data-toggle="modal" data-target="#delete"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Forró</td>
                                            <td>
                                                <button type="button" class="btn" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn" data-toggle="modal" data-target="#delete"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Funk</td>
                                            <td>
                                                <button type="button" class="btn" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn" data-toggle="modal" data-target="#delete"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Pop</td>
                                            <td>
                                                <button type="button" class="btn" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn" data-toggle="modal" data-target="#delete"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Pagode</td>
                                            <td>
                                                <button type="button" class="btn" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn" data-toggle="modal" data-target="#delete"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
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
                  <p>Você confirma que deseja deletar a {{nome da categoria}}</p>
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
                  <h5 class="modal-title">Criando nova categoria</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Insira o nome da Categoria</label>
                        <input type="text" class="form-control" placeholder="nome da categoria">
                      </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <button type="button" class="btn btn-success">Criar novo</button>
                </div>
              </div>
            </div>
          </div>

        <!--Edit-->
        <div class="modal" id="edit" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Editar Categoria</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nome da Categoria</label>
                        <input type="text" class="form-control" placeholder="<nome da categoria>">
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <button type="button" class="btn btn-success">Editar</button>
                </div>
              </div>
            </div>
          </div>
          
<?php require('app/views/partials/footer-adm.php') ?>