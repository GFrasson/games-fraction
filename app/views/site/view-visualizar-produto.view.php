<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Zen+Maru+Gothic&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../../public/css/view-visualizar-produto.css">
  <link rel="stylesheet" href="../../../public/css/navbar.css">
  <link rel="stylesheet" href="../../../public/css/footer.css">

  <script src="../../../public/js/view-visualizar-produto.js" defer></script>
  <script type="text/javascript" src="../../../public/js/navbar.js"></script>
</head>
<title>Visualizar Produto</title>
</head>

<body>
  <header class="navBar">

    <div class="logoMain">
      <a href="#default" class="logo"> <img src="../../../public/assets/logo.svg" height="70px" width="70px"></a>
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

      <label for="checkbox-menu" onclick="openNav()">
        <span></span>
        <span></span>
        <span></span>
      </label>
    </div>

  </header>
  <div class="principal">
    <div class="card">

      <div class="produtos-imgs">
        <div class="img-display">
          <div class="mostruario">
            <img class=fotoprincipal src="../../../public/img/gta5.jpg" class="img-fluid" alt="Jogo Gta V">
            <img src="../../../public/img/paisagem1.jpg" alt="">
            <img src="../../../public/img/paisagem2.jpg" alt="">
            <img src="../../../public/img/paisagem3.jpg" alt="">
            <img class="foto2" src="../../../public/img/gta5.jpg" alt="">

          </div>
        </div>
        <div class="img-selecao">
          <div class="img-item">
            <a href="#" data-id="1">
              <img src="../../../public/img/paisagem1.jpg" alt="paisagem">
            </a>
          </div>
          <div class="img-item">
            <a href="#" data-id="2">
              <img src="../../../public/img/paisagem2.jpg" alt="paisagem">
            </a>
          </div>
          <div class="img-item">
            <a href="#" data-id="3">
              <img src="../../../public/img/paisagem3.jpg" alt="paisagem">
            </a>

          </div>
          <div class="img-item">
            <a href="#" data-id="4">
              <img src="../../../public/img/gta5.jpg" alt="paisagem">
            </a>

          </div>

        </div>
      </div>

      <div class="produto-conteudo">
        <h2 class="produto-titulo">GTA V</h2>



        <div class="produto-preco">
          <p class="ultimo-preco">De: <span>R$XXX.XX</span></p>
          <p class="preco-novo">Para: <span>R$XXX.XX (X%)</span></p>
        </div>

        <div class="produto-detalhe">
          <h2>Sobre esse produto: </h2>
          <p>Entre nas vidas de três criminosos muito diferentes, Michael, Franklin e Trevor, enquanto eles arriscam
            tudo
            em uma série de assaltos ousados que podem garantir o resto de suas vidas. Explore o deslumbrante mundo de
            Los Santos e Blaine County na experiência definitiva de Grand Theft Auto V, apresentando amplas atualizações
            e melhorias técnicas tanto para jogadores novos quanto para os que estão retornando. Além de distâncias
            maiores de renderização e melhor resolução, os jogadores podem esperar diversas adições e melhorias.</p>
          <ul>

            <li>Disponível: <span>Em estoque</span></li>
            <li>Categoria: <span>Jogos eletrônicos</span></li>

          </ul>
        </div>

        <div class="informacao-compra">
          <input type="number" min="0" value="1">
          <button type="button" class="btn">
            Comprar <i class="botaocomprar"></i>
          </button>

        </div>


      </div>
    </div>
  </div>
  <footer class="rodapes">

    <div class="item1"><img src="../../../public/assets/logo.svg"></div>

    <div class="item2">Contato:<br> Tel: 4002-8922<br>E-mail: gamesfraction@contato.com.br<br><br><br>
      CODEJRGamesFraction2021.2LTDA<br>Todos os direitos reservados.
    </div>

    <div class="item3">Fique por dentro das novidades do site<br> nos seguindo em nossas redes sociais!<br><br>
      <img src="../../../public/assets/facebookIcon.png" height="50px" width="50px">
      <img src="../../../public/assets/isntaIcon.png" height="50px" width="50px">
      <img src="../../../public/assets/zapIcon.png" height="50px" width="50px"> <br>
      <img src="../../../public/assets/twitterIcon.png" height="50px" width="50px">
      <img src="../../../public/assets/linkedinIcon.png" height="50px" width="50px">


    </div>

    <div class="item4"><iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7410.180362620558!2d-43.3699111!3d-21.7767705!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x989b9f99b33491%3A0xd9b48a8f80341c0d!2sUniversidade%20Federal%20de%20Juiz%20de%20Fora!5e0!3m2!1spt-BR!2sbr!4v1636227153122!5m2!1spt-BR!2sbr"
        width="100%" height="100%"></iframe></div>



  </footer>



</body>

</html>