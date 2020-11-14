<?php dirname('/x');
require('C:\xampp\htdocs\app\views\partials/head.admin.php'); ?>

<div id="main" class="container-fluid">
  <main>
    <h1 class="mt-4 mx-auto non-space">Listagem de Usuários</h1>

    <button class="mt-4 mb-4 btn btn-warning btn-lg non-space" data-toggle="modal" data-target="#new">Adicionar Nova Categoria</button>

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
              <label style="font-size: larger;" for="">Pesquisar</label>
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
                <th>Telefone</th>
                <th>Email</th>
                <th>Endereço</th>
                <th>Nível</th>
                <th>Status</th>
                <th>Ação</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Endereço</th>
                <th>Nível</th>
                <th>Status</th>
                <th>Ação</th>
              </tr>
            </tfoot>
            <tbody>
              <tr>
                <td>Marco Silveira</td>
                <td>(21) 97264-8310</td>
                <td>marcosilveirad@gmail.com</td>
                <td>Avenida Prefeito Rolando Moreira 336, Brasiléia, AC</td>
                <td>Administrador</td>
                <td>Ativo</td>
                <td>
                  <button type="button" class="btn" data-toggle="modal" data-target="#see"><i class="fas fa-eye"></i></button>
                  <button type="button" class="btn" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button>
                  <button type="button" class="btn" data-toggle="modal" data-target="#delete"><i class="fas fa-trash"></i></button>
                </td>
              </tr>
              <tr>
                <td>Paulo Marques</td>
                <td>(21) 93487-2347</td>
                <td>paulo2020@gmail.com</td>
                <td>Rua Paulo Ramos 62, Morros, MA</td>
                <td>Administrador</td>
                <td>Ativo</td>
                <td>
                  <button type="button" class="btn" data-toggle="modal" data-target="#see"><i class="fas fa-eye"></i></button>
                  <button type="button" class="btn" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button>
                  <button type="button" class="btn" data-toggle="modal" data-target="#delete"><i class="fas fa-trash"></i></button>
                </td>
              </tr>
              <tr>
                <td>Guilherme Antônio</td>
                <td>(21) 90583-1029</td>
                <td>guilhermeantonio@hotmail.com</td>
                <td>Rua Victoria Dudek, Curitiba, PR </td>
                <td>Usuário</td>
                <td>Inativo</td>
                <td>
                  <button type="button" class="btn" data-toggle="modal" data-target="#see"><i class="fas fa-eye"></i></button>
                  <button type="button" class="btn" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button>
                  <button type="button" class="btn" data-toggle="modal" data-target="#delete"><i class="fas fa-trash"></i></button>
                </td>
              </tr>
              <tr>
                <td>Joana Fagundes</td>
                <td>(21) 96489-3417</td>
                <td>Joana_Fagundes@gmail.com</td>
                <td>Rua Muniz Freire, Guarapari, ES</td>
                <td>Administrador</td>
                <td>Ativo</td>
                <td>
                  <button type="button" class="btn" data-toggle="modal" data-target="#see"><i class="fas fa-eye"></i></button>
                  <button type="button" class="btn" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button>
                  <button type="button" class="btn" data-toggle="modal" data-target="#delete"><i class="fas fa-trash"></i></button>
                </td>
              </tr>
              <tr>

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

<div class="modal" id="see" tabindex="-1" role="dialog">
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
          <label>Nome do Usuário</label>
          <label>Telefone</label><br>
          <label>Email</label><br>
          <label>Endereço</label><br>
          <label>Nível</label><br>
          <label>Status</label><br>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

      </div>
    </div>
  </div>
</div>

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
        <p>Você confirma que deseja deletar esse usuário?</p>
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
        <h5 class="modal-title">Criando novo usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Nome do Usuário</label>
          <input type="text" class="form-control" placeholder="Nome do Usuário"><br>
          <label>Telefone</label><br>
          <input type="text" class="form-control" placeholder="Nome do Telefone"><br>
          <label>Email</label><br>
          <input type="text" class="form-control" placeholder="Nome do Email"><br>
          <label>Endereço</label><br>
          <input type="text" class="form-control" placeholder="Endereço"><br>
          <label>Nível</label><br>
          <input type="text" class="form-control" placeholder="Nível do Usuário"><br>
          <label>Status</label><br>
          <input type="text" class="form-control" placeholder="Status do Usuário"><br>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-success">Criar novo Usuário</button>
      </div>
    </div>
  </div>
</div>

<!--Edit-->
<div class="modal" id="edit" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar Usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Nome do Usuário</label>
          <input type="text" class="form-control" placeholder="Nome do Usuário"><br>
          <label>Telefone</label><br>
          <input type="text" class="form-control" placeholder="Nome do Telefone"><br>
          <label>Email</label><br>
          <input type="text" class="form-control" placeholder="Nome do Email"><br>
          <label>Endereço</label><br>
          <input type="text" class="form-control" placeholder="Endereço"><br>
          <label>Nível</label><br>
          <input type="text" class="form-control" placeholder="Nível do Usuário"><br>
          <label>Status</label><br>
          <input type="text" class="form-control" placeholder="Status do Usuário"><br>
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