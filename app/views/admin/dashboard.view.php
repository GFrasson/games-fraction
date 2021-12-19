<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamesFraction | Dashboards</title>

    <link rel="stylesheet" href="../../../public/css/dashboard.css">
    <script src="https://kit.fontawesome.com/c0e1d625a9.js" crossorigin="anonymous"></script>

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
            <a href="categorias"><img class="icon-nav" src="../../../public/assets/rede.svg"><br>Categorias</a> 
            <a href="#GerenciarProdutos"><img class="icon-nav" src="../../../public/assets/cubo.svg"><br>Produtos</a> 
            <a href="admUsuarios"><img class="icon-nav" src="../../../public/assets/usuario-de-comentarios.svg"><br>Usuários</a>
            <a href=""><img class="icon-nav" src="../../../public/assets/kisspng-computer-icons-exit-sign-emergency-exit-logo-downl-5b383e15c54734.9298414015304125658081.png"><br>Log-out</a>
        </div>
    </header> 


    <div class="titulo">
        <h2>Dashboard Administrativa</h2>
    </div>
    <main>
        <div class="container">
            <div class="card">
                <a href="admUsuarios">

                    <div class="header">
                        <i class="fas fa-user usuario icon"></i>
                    </div>
                    <div class="body">
                        <span>Dashboard Usuarios</span>
                    </div>

                </a>
            </div>

            <div class="card">
                <a href="categorias">

                    <div class="header">
                        <i class="fas fa-clipboard-list icon"></i>
                    </div>
                    <div class="body">
                        <span>Dashboard Categorias</span>
                    </div>

                </a>
            </div>

            <div class="card">
                <a href="/">

                    <div class="header">
                        <i class="fas fa-shopping-bag icon"></i>
                    </div>
                    <div class="body">
                        <span>Dashboard Produtos</span>
                    </div>

                </a>
            </div>

            <div class="card">
                <a href="">
                    <div class="header">
                        <i class="fas fa-sign-out-alt icon"></i>
                    </div>
                    <div class="body">
                        <span>Sair</span>
                    </div>
                </a>
            </div>
        </div>
    </main>
</body>

</html>