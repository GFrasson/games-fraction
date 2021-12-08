<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamesFraction | Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <!-- JS -->
    <script src="../../../public/js/navbar.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="../../../public/css/styleProduto.css">
    <link rel="stylesheet" href="../../../public/css/footer.css">
    <link rel="stylesheet" href="../../../public/css/navbar.css">
</head>

<body>
    <!-- Header -->

    <header  class="navBar">

        <div class="logoMain">
            <a href="#default" class="logo"> <img src="../../../public/assets/logo.svg" height="70px" width="70px" ></a>
        </div>
       
        <nav id="botoes" class="botoes"> 
            <a class="active" href="#home">Home</a>
            <a href="#quemSomos">Quem somos</a>
            <a href="#produtos">Produtos</a>
            <a href="#contato">Contato</a>
            <a href="#login">Login</a>
        </nav>

        <div class="container-menu">
            <input type="checkbox" id="checkbox-menu">
         
            <label  for="checkbox-menu" onclick="openNav()">
                <span></span>
                <span></span>
                <span></span>
             </label>
         </div>

    </header>
    <!-- Fim header -->
    <main>
        <div class="code-filtro">
            <form method="POST" action="#">
                <input class="input-filtro" placeholder="O que deseja?">
            </form>
        </div>
        <!-- Cards -->
        <div class="container">
            <div class="d-flex flex-wrap flex-card ">

                <div class="card">
                    <a href="/" class="link-card">
                        <div class="image-left">
                            <img
                                src="https://image.api.playstation.com/cdn/UP0001/CUSA05904_00/IKYAgcRh0k3IOklJSDoNBTk5t5MSm7KE.png">
                        </div>
                        <div class="body-right">
                            <p id="nome">Far Cry 5</p>
                            <p id="categoria">Categoria:<br> Ação</p>
                            <p id="preco">Preço:<br> R$ 57,00</p>

                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="/" class="link-card">
                        <div class="image-left">
                            <img
                                src="https://image.api.playstation.com/cdn/UP0001/CUSA05904_00/IKYAgcRh0k3IOklJSDoNBTk5t5MSm7KE.png">
                        </div>
                        <div class="body-right">
                            <p id="nome">Far Cry 5</p>
                            <p id="categoria">Categoria:<br> Ação</p>
                            <p id="preco">Preço:<br> R$ 57,00</p>

                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="/" class="link-card">
                        <div class="image-left">
                            <img
                                src="https://image.api.playstation.com/cdn/UP0001/CUSA05904_00/IKYAgcRh0k3IOklJSDoNBTk5t5MSm7KE.png">
                        </div>
                        <div class="body-right">
                            <p id="nome">Far Cry 5</p>
                            <p id="categoria">Categoria:<br> Ação</p>
                            <p id="preco">Preço:<br> R$ 57,00</p>

                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="/" class="link-card">
                        <div class="image-left">
                            <img
                                src="https://image.api.playstation.com/cdn/UP0001/CUSA05904_00/IKYAgcRh0k3IOklJSDoNBTk5t5MSm7KE.png">
                        </div>
                        <div class="body-right">
                            <p id="nome">Far Cry 5</p>
                            <p id="categoria">Categoria:<br> Ação</p>
                            <p id="preco">Preço:<br> R$ 57,00</p>

                        </div>
                    </a>
                </div>

               

            </div>
        </div>
        <nav class="paginacao" aria-label="Navegação de página exemplo">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Anterior">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Anterior</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Próximo">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </li>
            </ul>
        </nav>
    </main>
    <!-- Footer -->
    <footer class="rodapes">
        
        <div class="item1"><img src="../../../public/assets/logo.svg"></div>

        <div class="item2">Contato:<br> Tel: 4002-8922<br>E-mail: gamesfraction@contato.com.br<br><br><br> CODEJRGamesFraction2021.2LTDA<br>Todos os direitos reservados.
        </div>
        
        <div class="item3">Fique por dentro das novidades do site<br> nos seguindo em nossas redes sociais!<br><br>
            <img src="../../../public/assets/facebookIcon.png" height="50px" width="50px">     
            <img src="../../../public/assets/isntaIcon.png" height="50px" width="50px">     
            <img src="../../../public/assets/zapIcon.png" height="50px" width="50px">     <br>
            <img src="../../../public/assets/twitterIcon.png" height="50px" width="50px">     
            <img src="../../../public/assets/linkedinIcon.png" height="50px" width="50px">
            
        
        </div>
        
        <div class="item4"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7410.180362620558!2d-43.3699111!3d-21.7767705!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x989b9f99b33491%3A0xd9b48a8f80341c0d!2sUniversidade%20Federal%20de%20Juiz%20de%20Fora!5e0!3m2!1spt-BR!2sbr!4v1636227153122!5m2!1spt-BR!2sbr" width="100%" height="100%"></iframe></div>
            
        
        
    </footer>
</body>

</html>