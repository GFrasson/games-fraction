<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Zen+Maru+Gothic&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../../../public/css/contato.css">
    <link rel="stylesheet" href="../../../public/css/navbar.css">
    <link rel="stylesheet" href="../../../public/css/footer.css">

    <script type="text/javascript" src="../../../public/js/navbar.js"></script>
</head>

<body>

<?php include ('./app/views/includes/navbar.php') ?>

    <div class="titulo">
        <h1>Como podemos ajudar?</h1>
    </div>
    



    <div class="site">
        <h3>contato@fractiongames.com.br</h3>
    </div>
    


    <div class="box">
        <form name="form-contato" method="POST" action="contato/enviar">
            <fieldset>
                <legend><strong> Contato</strong></legend>
                
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>

                    <label for="nome" class="labelinput">Nome completo</label>
                </div>
                

                <div class="inputbox">
                    <input type="email" name="email" id="email" class="inputUser" required>

                    <label for="email" class="labelinput">Email</label>
                </div>
               

                <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>

                    <label for="telefone" class="labelinput">Telefone</label>
                </div>

                

                <div class="inputbox">
                    <input type="text" name="assunto" id="assunto" class="inputUser" required>

                    <label for="assunto" class="labelinput">Assunto</label>
                </div>
                
                <div class="inputbox">
                    <textarea class="inputUser"  name="mensagem" id="mensagem" cols="30" rows="5" required ></textarea>

                    <label for="mensagem" class="labelinput">Mensagem</label>
                </div>
                
                
                
            </fieldset>
            
            <button class = "submit-form" type="submit">Enviar</button>
            

        </form>

    </div>
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=code jr&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
            </iframe>
            <a href="https://www.fnfgo.com/">FNF Online Mods</a>
        </div>
     
    </div>    
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

</div>
</html>


