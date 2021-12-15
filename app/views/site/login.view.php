<!DOCTYPE html>
    <html lang="pt-br">


    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

       
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Zen+Maru+Gothic:wght@300&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="../../../public/css/login.css">
        <link rel="stylesheet" href="../../../public/css/navbar.css">
        
        <script src="https://kit.fontawesome.com/efe53d977f.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../../../public/js/navbar.js"></script>
        <script src="../../../public/js/login.js"></script>

        <title>Login</title>
    </head>

    <body>
        <header  class="navBar">

            <div class="logoMain">
                <a href="#default" class="logo"> <img src="../../../public/assets/logo.svg" height="70px" width="70px" ></a>
            </div>
           
            <nav id="botoes" class="botoes"> 
                <a class="active" href="index">Home</a>
                <a href="quemSomos">Quem somos</a>
                <a href="produtos">Produtos</a>
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

        <div class="titulo">
            <h1>Login</h1>
        </div>
        
        <main>

            <form action="/pagina-processa-dados-do-form" method="post">

                <div class="quadrados">
                    <div class="email">
                        <span class="linha"><label for="email">E-mail:</label></span>
                        <input type="email" id="email" name="email" placeholder="exemplo@gmail.com">
                    </div>

                    <div class="senha">
                        <span class="linha"><label for="senha">Senha:</label></span>
                        <input type="password" id="senha" name="senha" placeholder="******">
                        <i class="fas fa-eye hidden" id="aberto" onclick="mostrarSenha()"></i>
                        <i class="fas fa-eye-slash" id="fechado" onclick="mostrarSenha()"></i>
                    </div>

                    <div class="botao">
                        <button type="submit">Login</button>
                    </div>

                </div>


            </form>  
        </main>

    </body>
</html>