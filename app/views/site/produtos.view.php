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

    <?php include ('./app/views/includes/navbar.php') ?>
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
            <?php foreach($produtos as $produto): ?> 
                <div class="card">
                    <a href="view-visualizar-produto?produto=<?= $produto->id?>" class="link-card">
                        <div class="image-left">
                        <?php for ($i = 0; $i < 1; $i++) : ?>
                            <img
                                src="<?php echo "../../../../public/img/" . $produto->imagens[0]->nome_imagem ?>">
                        <?php endfor; ?>
                        </div>
                        <div class="body-right">
                            <p id="nome"><?= $produto -> nome_produto ?></p>
                            <p id="categoria">Categoria:<br><?php echo  $produto->categorias[0]->nome_categoria ?> </p>
                            <p id="preco">Preço:<br> R$<?= $produto -> preco ?></</p>

                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
               
            
               

            </div>
        </div>
    
    <?php include "./app/views/includes/paginacao.php" ?>

    </main>
    <!-- Footer -->
    <footer class="rodapes">
        
        <div class="item1"><img src="../../../public/assets/logo.svg"></div>

        <div class="item2">Contato:<br> Tel: 4002-8922<br>E-mail: gamesfraction@contato.com.br<br><br><br> CODEJRGamesFraction2021.2LTDA<br>Todos os direitos reservados.
        </div>
        
        <div class="item3">Fique por dentro das novidades do site<br> nos seguindo em nossas redes sociais!<br><br>
            <a href="https://www.facebook.com/">
                <img src="../../../public/assets/facebookIcon.png" height="50px" width="50px"> 
            </a>

            <a href="https://www.instagram.com/">    
                <img src="../../../public/assets/isntaIcon.png" height="50px" width="50px">  
            </a>  
            
            <a href="https://web.whatsapp.com/">
                <img src="../../../public/assets/zapIcon.png" height="50px" width="50px">    
            </a>

            <br>

            <a href="https://twitter.com/">
                <img src="../../../public/assets/twitterIcon.png" height="50px" width="50px">    
            </a>
            
            <a href="https://www.linkedin.com/">
                <img src="../../../public/assets/linkedinIcon.png" height="50px" width="50px">
            </a>
            
        
        </div>
        
        <div class="item4"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7410.180362620558!2d-43.3699111!3d-21.7767705!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x989b9f99b33491%3A0xd9b48a8f80341c0d!2sUniversidade%20Federal%20de%20Juiz%20de%20Fora!5e0!3m2!1spt-BR!2sbr!4v1636227153122!5m2!1spt-BR!2sbr" width="100%" height="100%"></iframe></div>
            
        
        
    </footer>
</body>

</html>