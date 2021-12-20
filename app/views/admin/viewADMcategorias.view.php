<!DOCTYPE html>

<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="../../../public/css/viewADMcategorias.css">

  <link rel="stylesheet" href="../../../public/css/navbarADM.css">
  <script type="text/javascript" src="../../../public/js/navbarADM.js"></script>
  

  <title>Games Fraction</title>
</head>

<body>

  <?php require('./app/views/includes/sidebarAdmin.php') ?> 

  <h1><strong>Categorias</strong></h1>

  <form action="categorias" method="GET">
    <div class="barraProcuraCategorias"><input type="text" name="pesquisa" placeholder="Pesquisar categorias..."></div>

  </form>

  <div class="container envelope">
    <table class="table">
      <thead class="thead">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Categoria</th>
          <th scope="col"><button type="button" class="btn btn-primary botaoacao verCateg" data-toggle="modal"
              data-target=".addCategoria">
              <a href="#addCateg"><img src="../../../public/assets/add.png" height="40px" width="40px"></a>
            </button></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php foreach ($categorias as $categoria):?>
          <th scope="row"><?= $categoria-> id ?>

            <div class="icones d-flex flex-wrap">

              <button type="button" class="btn btn-primary botaoacao verCateg" data-toggle="modal"
                data-target=".viewCategoria-<?= $categoria-> id ?>">
                <img src="../../../public/assets/olho.png">
              </button>
              <button type="button" class="btn btn-primary botaoacao editCateg" data-toggle="modal"
                data-target=".editCategoria-<?= $categoria-> id ?>">
                <img src="../../../public/assets/lapis.png">
              </button>
              <button type="button" class="btn btn-primary botaoacao deleteCateg" data-toggle="modal"
                data-target=".deleteCategoria-<?= $categoria-> id ?>">
                <img src="../../../public/assets/lixo.png">
              </button>


            </div>

          </th>
          <td><?= $categoria-> nome_categoria ?></td>
        </tr>
        <?php endforeach ;?>
      </tbody>
    </table>

  </div>

  <?php foreach ($categorias as $categoria):?>
    <div class="modal fade viewCategoria-<?= $categoria-> id ?>" id="modalViewCateg" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLongTitle">Visualizar categoria</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          
          <?= $categoria-> nome_categoria ?>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
          </div>
        </div>
      </div>
    </div>
  

  
  <div class="modal fade editCategoria-<?= $categoria-> id ?>" id="modalEditCateg" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLongTitle">Editar categoria</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="categorias/edit" method="POST">
          <div class="modal-body">
            Novo nome da categoria:<br>
            <input type="text" name="nome_categoria" value="<?= $categoria-> nome_categoria ?>">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <input type="hidden" value="<?= $categoria->id ?>" name="id">
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade deleteCategoria-<?= $categoria-> id ?>" id="modalDelCateg" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLongTitle">Deletar categoria</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="categorias/delete" method="POST">
          <div class="modal-body">
            <h4>Tem certeza que deseja deletar essa categoria?</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <input type="hidden" value="<?= $categoria->id ?>" name="id">
            <button type="submit" class="btn btn-primary">Sim, quero deletar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php endforeach ;?>

  <div class="modal fade addCategoria" id="modalAddCateg" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLongTitle">Adicionar nova categoria</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="categorias/create" method="POST">
          <div class="modal-body">
            Nome da nova categoria:<br>
            <input type="text" name="nome_categoria" placeholder="Escreva aqui o nome da nova categoria...">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Adicionar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
    crossorigin="anonymous"></script>
</body>

</html>