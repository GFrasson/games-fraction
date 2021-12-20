<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Administrativa Produtos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/adm-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Zen+Maru+Gothic&display=swap"
        rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c11bde093d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../public/css/navbarADM.css">
    <script type="text/javascript" src="../../../public/js/navbarADM.js"></script>

</head>




<body>
    <header class="navbar-adm">
        <div id="caixa" class="caixa-fechada">

            <input type="checkbox" id="checkbox-menuS" onclick="openSB()">
            <label class="label" for="checkbox-menuS"><img class="icon-nav"
                    src="../../../public/assets/configuracoes.svg"></label>


        </div>
        <div id="topicos" class="topicos-fechados">
            <a href="#GerenciarCategorias"><img class="icon-nav"
                    src="../../../public/assets/rede.svg"><br>Categorias</a>
            <a href="#GerenciarProdutos"><img class="icon-nav" src="../../../public/assets/cubo.svg"><br>Produtos</a>
            <a href="#GerenciarUsuários"><img class="icon-nav"
                    src="../../../public/assets/usuario-de-comentarios.svg"><br>Usuários</a>
            <a href="#LogOut"><img class="icon-nav"
                    src="../../../public/assets/kisspng-computer-icons-exit-sign-emergency-exit-logo-downl-5b383e15c54734.9298414015304125658081.png"><br>Log-out</a>
        </div>
    </header>

    <div>
        <h1 class="titulox">Produtos</h1>
    </div>













    <div class="container">
        <form action="">
            <input name="produto" id="produto" class="barrapesquisa" placeholder=" Digite o nome do produto:"
                type="text">


        </form>

        <div class="d-flex justify-content-between">
            <span></span>
            <button type="button" class="btn  view botaoadd" data-toggle="modal" data-target=".addProduto">
                <i class="fas fa-plus-circle"></i>
            </button>
        </div>




        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th class="price-title">Preço</th>
                    <th>Opções</th>

                </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope="row">#1</th>

                    <td>Jogo x </td>
                    <td class="price-value">R$100,00</td>
                    <td>
                        <div class="button-container d-flex flex-wrap icones">

                            <button type="button" class="  modal-button" data-toggle="modal" data-target=".viewProduto">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button type="button" class="  modal-button  " data-toggle="modal"
                                data-target=".editProduto">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            <button type="button" class="  modal-button " data-toggle="modal"
                                data-target=".deleteProduto">
                                <i class="fas fa-trash-alt"></i>
                            </button>



                        </div>
                    </td>

                </tr>

                <tr>
                    <th scope="row">#2</th>

                    <td>Jogo x </td>
                    <td class="price-value">R$100,00</td>
                    <td>
                        <div class="button-container d-flex flex-wrap icones">

                            <button type="button" class="  modal-button" data-toggle="modal" data-target=".viewProduto">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button type="button" class="  modal-button  " data-toggle="modal"
                                data-target=".editProduto">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            <button type="button" class="  modal-button " data-toggle="modal"
                                data-target=".deleteProduto">
                                <i class="fas fa-trash-alt"></i>
                            </button>



                        </div>
                    </td>

                </tr>
                <tr>
                    <th scope="row">#3</th>

                    <td>Jogo x </td>
                    <td class="price-value">R$100,00</td>
                    <td>
                        <div class="button-container d-flex flex-wrap icones">

                            <button type="button" class="  modal-button" data-toggle="modal" data-target=".viewProduto">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button type="button" class="  modal-button  " data-toggle="modal"
                                data-target=".editProduto">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            <button type="button" class="  modal-button " data-toggle="modal"
                                data-target=".deleteProduto">
                                <i class="fas fa-trash-alt"></i>
                            </button>



                        </div>
                    </td>

                </tr>
                <tr>
                    <th scope="row">#4</th>

                    <td>Jogo z </td>
                    <td class="price-value">R$100,00</td>
                    <td>
                        <div class="button-container d-flex flex-wrap icones">

                            <button type="button" class="  modal-button" data-toggle="modal" data-target=".viewProduto">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button type="button" class="  modal-button  " data-toggle="modal"
                                data-target=".editProduto">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            <button type="button" class="  modal-button " data-toggle="modal"
                                data-target=".deleteProduto">
                                <i class="fas fa-trash-alt"></i>
                            </button>



                        </div>
                    </td>

                </tr>





            </tbody>


        </table>

        <div class="modal fade viewProduto" id="modalViewProduto" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLongTitle">Visualizar produto</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5><b>Nome do produto:</b> jogox</h5>
                        <h5><b>Descrição do produto:</b> interessante</h5>
                        <h5><b>Fotos do produto:</b>
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100"
                                            src="https://media.discordapp.net/attachments/898185392023560213/916319242993954826/joaquin-rivero-98o9htjuih0-unsplash.jpg?width=709&height=473"
                                            alt="Primeiro Slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100"
                                            src="https://images-ext-2.discordapp.net/external/KxLAtXxpQlPvVOs13o1BDLfW8f4bzqK-m4fyiiaUSI0/%3Fixlib%3Drb-1.2.1%26ixid%3DMnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8%26auto%3Dformat%26fit%3Dcrop%26w%3D387%26q%3D80/https/images.unsplash.com/photo-1638091990389-7f4d9bbe8d81?width=315&height=473"
                                            alt="Segundo Slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100"
                                            src="https://media.discordapp.net/attachments/898185392023560213/916319388523700284/photo-1634655685926-944d0254af90.png?width=473&height=473"
                                            alt="Terceiro Slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Anterior</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Próximo</span>
                                </a>
                            </div>
                        </h5>
                        <h5><b>Preço do produto:</b> R$100,00</h5>
                        <h5><b>Categoria do produto:</b> Jogos Eletrônicos</h5>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>




        <!-- Modal Edit -->
        <div class="modal fade editProduto" id="editProduto" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header cabecalho">
                        <h5 class="modal-title" id="exampleModalLabel">Editar produto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>

                            <div class="form-group">
                                <label for="input-nome">Nome do produto:</label>
                                <input type="text" class="form-control" id="nome" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="input-nome">Descrição do produto:</label>
                                <input type="text" class="form-control" id="nome" required placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Fotos do produto:</label>
                                <input multiple type="file" class="form-control-file" id="exampleFormControlFile1">




                            </div>
                            <div class="form-group">
                                <label for="descricao">Preço do Produto:</label>
                                <input type="text" class="form-control" id="nome" placeholder="">
                            </div>


                            <div class="form-group">
                                <label for="descricao">Categoria:</label>
                                <input type="text" class="form-control" id="nome" placeholder="">
                            </div>



                            <p> </p>
                    </div>

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
    <!-- Fim Modal Edit -->




    <!-- Modal delete -->
    <div class="modal fade deleteProduto" id="deleteProduto" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header cabecalho">
                    <h5 class="modal-title" id="exampleModalLabel">Deletar produto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        Você tem certeza que deseja excluir?
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


    <!-- Modal Adiconar Produto -->
    <div class="modal fade addProduto" id="addProduto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adicionar Produto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>

                        <div class="form-group">
                            <label for="input-nome">Nome Produto</label>
                            <input type="text" class="form-control" id="input-nome" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <textarea class="form-control" id="descricao" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="input-nome">Preço</label>
                            <input type="number" class="form-control" id="input-nome" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Fotos do produto:</label>
                            <input multiple type="file" class="form-control-file" id="exampleFormControlFile1">




                        </div>

                        <div class="form-group">
                            <select>
                                <option value="">Nome da categoria</option>
                                <option value="">Nome da categoria</option>
                                <option value="">Nome da categoria</option>
                                <option value="">Nome da categoria</option>
                                <option value="">Nome da categoria</option>
                                <option value="">Nome da categoria</option>
                            </select>

                        </div>



                        <p> </p>

                        <button type="submit" class="btn btn-primary modbut">Enviar</button>
                    </form>

                </div>
                
                

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary modbut" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary modbut">Confirmar</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Fim Modal Adicionar Produto -->





    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>

</body>

</html>