<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área administrativa - Usuarios </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Zen+Maru+Gothic:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/efe53d977f.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/stylesAdmUsuario.css"> 

    <link rel="stylesheet" href="../../../public/css/navbarADM.css">
    <script type="text/javascript" src="../../../public/js/navbarADM.js"></script>
    
</head>

<body>
  
  <header class="navbar-adm">

    <div id="caixa" class="caixa-fechada">
        
        <input type="checkbox" id="checkbox-menuS" onclick="openSB()">   
        <label class="label" for="checkbox-menuS"><img class="icon-nav" src="../../../public/assets/configuracoes.svg"></label>

     
    </div>

    <div id="topicos" class="topicos-fechados">
        <a href="#GerenciarCategorias"><img class="icon-nav" src="../../../public/assets/rede.svg"><br>Categorias</a> 
        <a href="#GerenciarProdutos"><img class="icon-nav" src="../../../public/assets/cubo.svg"><br>Produtos</a> 
        <a href="#GerenciarUsuários"><img class="icon-nav" src="../../../public/assets/usuario-de-comentarios.svg"><br>Usuários</a>
        <a href="#LogOut"><img class="icon-nav" src="../../../public/assets/kisspng-computer-icons-exit-sign-emergency-exit-logo-downl-5b383e15c54734.9298414015304125658081.png"><br>Log-out</a>
    </div>

  </header> 
    
  <h1>Usuários</h1>
    

  <div class="container tabela"> 

    <div class="cabecalhoUm">

      <button type="button" class="btn btn-primary adicionar" data-toggle="modal" data-target=".addUsuario">
        <i class="fas fa-plus"></i>
      </button>

      <div class="pesquisa-container">

        <input type="text" id="searchBar" class="barraDePesquisa" name="searchBar">

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search lupa" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg> 

          
      </div>

    </div>

    <table class="table table-hover table-responsive{-sm|-md|-lg|-xl}">

      <thead class="thead cabecalho-tabela">

        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
        </tr>
        
      </thead>

      <tbody>
        <?php
       
        foreach ($usuarios as $usuario): ?>

          <!-- Modais: -->

          <!-- Modal Edit -->
          <div class="modal fade editUsuario" id="edtUsuario-<?= $usuario->id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header cabecalho">
                  <h5 class="modal-title" id="exampleModalLabel">Editar Usuário</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>

                          <div class="form-group">
                            <label for="input-nome">Nome:</label>
                            <input type="text" class="form-control" id="nome" placeholder="Fulaninho da Silva">
                          </div>

                          <div class="form-group">
                            <label for="input-nome" >Email:</label>
                            <input type="text" class="form-control" id="nome" required placeholder="Fulaninho@gmail.com">
                          </div>

                          <div class="form-group">
                            <label for="descricao">Senha</label>
                            <input type="password" class="form-control" id="senha" placeholder="***">
                          </div>

                          <p> </p>
                  </form>

                </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary modbut" data-dismiss="modal">Fechar</button>
                      <button type="submit" class="btn btn-primary modbut">Confirmar</button>
                    </div>
              </div>

            </div>
          </div>
          <!-- Fim Modal Edit -->

          <!-- Modal View -->
          <div class="modal fade viewUsuario" id="viewUsuario-<?= $usuario->id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header cabecalho">
                  <h5 class="modal-title" id="exampleModalLabel">Visualizar Usuário</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!-- <form> -->

                    <div class="form-group">
                      <label for="input-nome">Nome:</label>
                      <input type="text" class="form-control" id="nome" disabled placeholder="<?= $usuario->nome ?>">
              
                    </div>

                    <div class="form-group">
                      <label for="input-nome" >Email:</label>
                      <input type="text" class="form-control" id="nome" disabled placeholder="<?= $usuario->email ?>">
                    </div>

                    <p> </p>

                  <!-- </form> -->

                </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-secondary modbut" data-dismiss="modal">Fechar</button>
                    </div>
              </div>

            </div>
          </div>
          <!-- Fim Modal view -->

          <!-- Modal delete -->
          <div class="modal fade deleteUsuario" id="deleteUsuario-<?= $usuario->id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header cabecalho">
                  <h5 class="modal-title" id="exampleModalLabel">Deletar Usuário</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    Certeza que deseja excluir?
                    <p> </p>
                  </form>

                </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary modbut" data-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-primary modbut">Confirmar</button>
                    </div>
              </div>

            </div>
          </div>
          <!-- Fim Modal delete -->

          <tr class="colunaacoes">
          
            <th class="roxo" scope="row">

              <div class="btn-grop icones d-flex flex-wrap"> 
                <button type="button" class="btn btn-primary botaoacao" data-toggle="modal" data-target="#viewUsuario-<?= $usuario->id ?>">
                  <i class="fas fa-eye iconebotao"></i>
                </button>

                <button type="button" class="btn btn-primary botaoacao" data-toggle="modal" data-target="#edtUsuario-<?= $usuario->id ?>">
                  <i class="far fa-edit iconebotao"></i> 
                </button>
                
                <button type="button" class="btn btn-primary botaoacao" data-toggle="modal" data-target="#deleteUsuario-<?= $usuario->id ?>">
                  <i class="fas fa-trash iconebotao"></i>
                </button>
              </div>

            </th>

            
            <td class="nome"><?= $usuario->nome ?></td>
            <td class="email"><?= $usuario->email ?></td>

          </tr>


        <?php endforeach; ?>

        <!-- <tr>
          <th class="roxo" scope="row">
          
          <div class="btn-grop icones d-flex flex-wrap"> 
            <button type="button" class="btn btn-primary botaoacao" data-toggle="modal" data-target=".viewUsuario">
              <i class="fas fa-eye iconebotao"></i>
            </button>

            <button type="button" class="btn btn-primary botaoacao" data-toggle="modal" data-target=".editUsuario">
              <i class="far fa-edit iconebotao"></i> 
            </button>
            
            <button type="button" class="btn btn-primary botaoacao" data-toggle="modal" data-target=".deleteUsuario">
              <i class="fas fa-trash iconebotao"></i>
            </button>
          </div>

          </th>
          <td>Jacob</td>
          <td>jacob.01@gmail.com</td>
          
        </tr>

        <tr>
          <th class="roxo" scope="row">
          <div class="btn-grop icones d-flex flex-wrap"> 
            <button type="button" class="btn btn-primary botaoacao" data-toggle="modal" data-target=".viewUsuario">
              <i class="fas fa-eye iconebotao"></i>
            </button>

            <button type="button" class="btn btn-primary botaoacao" data-toggle="modal" data-target=".editUsuario">
              <i class="far fa-edit iconebotao"></i> 
            </button> 
            
            <button type="button" class="btn btn-primary botaoacao" data-toggle="modal" data-target=".deleteUsuario">
              <i class="fas fa-trash iconebotao"></i>
            </button>
          </div> 
          </th>
          <td>Larry</td>
          <td>bird@gmail.com</td>
          
        </tr> -->
      </tbody>
    </table>
  </div> 
  

  <!-- Modal Adiconar usuario -->
  <div class="modal fade addUsuario" id="addUsuario" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header cabecalho">
          <h5 class="modal-title" id="exampleModalLabel">Adicionar Usuário</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="usuario/create">

            <div class="form-group">
              <label for="input-nome" >Nome:</label>
              <input type="text" name="nome" class="form-control" id="nome" required placeholder="Fulaninho da Silva">
            </div>

            <div class="form-group">
              <label for="input-nome" >Email:</label>
              <input type="text" name="email" class="form-control" id="email" required placeholder="Fulaninho@gmail.com">
            </div>

            <div class="form-group">
              <label for="descricao">Senha</label>
              <input type="password" name="senha" class="form-control" id="senha" required placeholder="***">
            </div>

            <p> </p>
          

        </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary modbut" data-dismiss="modal">Fechar</button>
              <button type="submit" class="btn btn-primary modbut">Confirmar</button>
            </div>
       </div>
       </form>
    </div>
  </div>
  <!-- Fim Modal Adicionar Usuario -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>