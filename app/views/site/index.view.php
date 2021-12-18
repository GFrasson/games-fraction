<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <title>GamesFraction</title>
    <!-- JS -->
    <script src="../../../public/js/navbar.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="../../../public/css/index.css">
    <link rel="stylesheet" href="../../../public/css/footer.css">
    <link rel="stylesheet" href="../../../public/css/navbar.css">
   
    <!-- Jquery do Carrosel dos cards -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
</head>

<body>
    <!-- NavBar -->
    <header  class="navBar">

        <div class="logoMain">
            <a href="#default" class="logo"> <img src="../../../public/assets/logo.svg" height="70px" width="70px" ></a>
        </div>
       
        <nav id="botoes" class="botoes"> 
            <a class="active" href="index">Home</a>
            <a href="quemSomos">Quem somos</a>
            <a href="produtos">Produtos</a>
            <a href="projetoContato">Contato</a>
            <a href="login">Login</a>
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
    <!-- Fim NavBar -->
    <main>
        <!-- Carrosel -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../../../public/img/Foto 1.png" class="d-block w-100 image-carousel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../../../public/img/Foto 2.png" class="d-block w-100 image-carousel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../../../public/img/foto 3.png" class="d-block w-100 image-carousel" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        
        <!-- Fim carrosel -->
        <!-- Cards -->
        <div class="responsividade">
            <div class="box-geral-esquerda">
                <div class="box-texto">
                    <div class="row">
                        <div class="col-md-1">
                            <h3>Novidades</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider owl-carousel">
                
                <div class="card carousel-card">
                    <a href="view-visualizar-produto">
                        <div class="img"><img src="../../../public/img/gta v.png" alt="Card image cap"></div>
                    </a>
                </div>
                <div class="card carousel-card">
                    <a href="view-visualizar-produto">
                        <div class="img"><img src="https://images.tcdn.com.br/img/img_prod/906426/opus_collection_the_day_we_found_earth_rocket_of_whispers_switch_7431_1_008249e8a8905920f640b78aedd2127d.jpg" alt="Card image cap"></div>
                    </a>
                </div>
           
            </div>
            <script>
                $(".slider").owlCarousel({
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsiveClass: true,
                    responsive: {
                        
                        0: {
                            items: 1,
                            nav: true
                            
                        },
                        600: {
                            items: 2,
                            nav: true
                        },
                        800:{
                            items: 2,
                            nav: true
                        },
                        1100: {
                            items: 3,
                            nav: true,
                           
                        }
                    }
                });
            </script>
        </div>
        <!-- Fim  -->
        <!-- Saiba mais -->
        <div class="code-information">
            <div class="title-code-information">
                <h3>Saiba mais:</h3>
            </div>
            <div class="frame">
                <div class="icon-contato">
                    <a href="#" class="btn">
                        <i class="fas fa-address-book" style="color: #ea4c89;"></i>
                    </a>
                    <span>Contato</span>

                </div>
                <div class="icon-contato">
                    <a href="quemSomos" class="btn">
                        <i class="fas fa-user-friends" style="color:#0e76a8;"></i>
                    </a>
                    <span>Sobre nós</span>

                </div>
               
            </div>
        </div>
        <div class="code-servicos">
            <div class="box-geral-esquerda">
                <div class="box-texto">
                    <div class="row">
                        <div class="col-md-1">
                            <h3>Recomendados:</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-wrap">

               
                <!-- <div class="card" style="width: 18rem;">
                    <a href="view-visualizar-produto">
                        <img class="card-img-top" src="" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"> <= $produto->nome_produto ?> </h5>
                            <p class="card-text-preco"><= $produto->preco ?></p>
                            <p class="card-text"><= $produto->descricao ?>.</p>
                        </div>
                    </a>
                </div> -->
                

                <div class="card" style="width: 18rem;">
                <a href="#">
                    <img class="card-img-top" src="../../../public/img/gta v.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Gta V</h5>
                        <p class="card-text-preco">R$ 96,00</p>
                        <p class="card-text">Lorem ipsum dolor sit amet. Et commodi cumque ex soluta nulla non
                            voluptates unde et minima possimus hic fugiat consequatur. Ab aliquid neque sed
                            voluptate
                            dolorem ut ducimus fuga.</p>
                    </div>
                </a>
            </div> 
                <!-- <div class="card" style="width: 18rem;">
                    <a href="#">
                        <img class="card-img-top" src="../../../public/img/gta v.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Gta V</h5>
                            <p class="card-text-preco">R$ 96,00</p>
                            <p class="card-text">Lorem ipsum dolor sit amet. Et commodi cumque ex soluta nulla non
                                voluptates unde et minima possimus hic fugiat consequatur. Ab aliquid neque sed
                                voluptate
                                dolorem ut ducimus fuga.</p>
                        </div>
                    </a>
                </div> -->
                <!-- <div class="card" style="width: 18rem;">
                    <a href="#">
                        <img class="card-img-top" src="../../../public/img/gta v.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Gta V</h5>
                            <p class="card-text-preco">R$ 96,00</p>
                            <p class="card-text">Lorem ipsum dolor sit amet. Et commodi cumque ex soluta nulla non
                                voluptates unde et minima possimus hic fugiat consequatur. Ab aliquid neque sed
                                voluptate
                                dolorem ut ducimus fuga.</p>
                        </div>
                    </a>
                </div>
                <div class="card" style="width: 18rem;">
                    <a href="#">
                        <img class="card-img-top" src="../../../public/img/gta v.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Gta V</h5>
                            <p class="card-text-preco">R$ 96,00</p>
                            <p class="card-text">Lorem ipsum dolor sit amet. Et commodi cumque ex soluta nulla non
                                voluptates unde et minima possimus hic fugiat consequatur. Ab aliquid neque sed
                                voluptate
                                dolorem ut ducimus fuga.</p>
                        </div>
                    </a>
                </div> -->
                <!-- <div class="card" style="width: 18rem;">
                    <a href="#">
                        <img class="card-img-top" src="../../../public/img/gta v.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Gta V</h5>
                            <p class="card-text-preco">R$ 96,00</p>
                            <p class="card-text">Lorem ipsum dolor sit amet. Et commodi cumque ex soluta nulla non
                                voluptates unde et minima possimus hic fugiat consequatur. Ab aliquid neque sed
                                voluptate
                                dolorem ut ducimus fuga.</p>
                        </div>
                    </a>
                </div>
                <div class="card" style="width: 18rem;">
                    <a href="#">
                        <img class="card-img-top" src="../../../public/img/gta v.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Gta V</h5>
                            <p class="card-text-preco">R$ 96,00</p>
                            <p class="card-text">Lorem ipsum dolor sit amet. Et commodi cumque ex soluta nulla non
                                voluptates unde et minima possimus hic fugiat consequatur. Ab aliquid neque sed
                                voluptate
                                dolorem ut ducimus fuga.</p>
                        </div>
                    </a>
                </div> -->
                <!-- <div class="card" style="width: 18rem;">
                    <a href="#">
                        <img class="card-img-top" src="../../../public/img/gta v.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Gta V</h5>
                            <p class="card-text-preco">R$ 96,00</p>
                            <p class="card-text">Lorem ipsum dolor sit amet. Et commodi cumque ex soluta nulla non
                                voluptates unde et minima possimus hic fugiat consequatur. Ab aliquid neque sed
                                voluptate
                                dolorem ut ducimus fuga.</p>
                        </div>
                    </a>
                </div>
                <div class="card" style="width: 18rem;">
                    <a href="#">
                        <img class="card-img-top" src="../../../public/img/gta v.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Gta V</h5>
                            <p class="card-text-preco">R$ 96,00</p>
                            <p class="card-text">Lorem ipsum dolor sit amet. Et commodi cumque ex soluta nulla non
                                voluptates unde et minima possimus hic fugiat consequatur. Ab aliquid neque sed
                                voluptate
                                dolorem ut ducimus fuga.</p>
                        </div>
                    </a>
                </div> -->
                <!-- <div class="card" style="width: 18rem;">
                    <a href="#">
                        <img class="card-img-top" src="../../../public/img/gta v.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Gta V</h5>
                            <p class="card-text-preco">R$ 96,00</p>
                            <p class="card-text">Lorem ipsum dolor sit amet. Et commodi cumque ex soluta nulla non
                                voluptates unde et minima possimus hic fugiat consequatur. Ab aliquid neque sed
                                voluptate
                                dolorem ut ducimus fuga.</p>
                        </div>
                    </a>
                </div>
                <div class="card" style="width: 18rem;">
                    <a href="#">
                        <img class="card-img-top" src="../../../public/img/gta v.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Gta V</h5>
                            <p class="card-text-preco">R$ 96,00</p>
                            <p class="card-text">Lorem ipsum dolor sit amet. Et commodi cumque ex soluta nulla non
                                voluptates unde et minima possimus hic fugiat consequatur. Ab aliquid neque sed
                                voluptate
                                dolorem ut ducimus fuga.</p>
                        </div>
                    </a>
                </div> -->
                <!-- <div class="card" style="width: 18rem;">
                    <a href="#">
                        <img class="card-img-top" src="../../../public/img/gta v.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Gta V</h5>
                            <p class="card-text-preco">R$ 96,00</p>
                            <p class="card-text">Lorem ipsum dolor sit amet. Et commodi cumque ex soluta nulla non
                                voluptates unde et minima possimus hic fugiat consequatur. Ab aliquid neque sed
                                voluptate
                                dolorem ut ducimus fuga.</p>
                        </div>
                    </a>
                </div> -->
            </div>
        </div>
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

    <!-- Java Script -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>