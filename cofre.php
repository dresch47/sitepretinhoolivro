<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142120884-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-142120884-1');
</script>

  <title> Página do Pretinho</title>
  <meta name="author" content="Carlos Dresch">
  <meta charset="UTF-8"  />
  <meta http-equiv="cache-control" content="public">
  <meta http-equiv="cache-control" content="no-cache">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" >
  <meta name="copyright" content="@ 2019 Pretinhoolivro" >
  <meta name="description" content="História de superação do Pretinho" >
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalaber=no,shrink-to-fit=no" />
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
  <script src="assets/js/script.js"></script>
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>

  <!-- Menu -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container">


      <div class="logo_assinatura">
        <a class="navbar-brand" href="index.php"><img src="assets/images/logoPretinho.png" class="img_logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
          <span class="navbar-toggler-icon"></span>
        </button>

      </div>


      <div class="collapse navbar-collapse" id="navbarSite">

        <ul class="navbar-nav " >
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="livro.php"> O Livro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cofre.php">Casinha da Economia</a>
          </li>

        </ul>

        <div class="contato">

          <a class="nav-link" href="#"  >
            <!-- Botão para acionar modal -->
            <a style="color: #80bfff;font-size: 20px;" href="#" data-toggle="modal" data-target="#modalExemplo">
              Contato
            </a>

            <!-- Modal -->
            <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Meus contatos</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                      <span aria-hidden="true">&times;</span>Fechar
                    </button>
                  </div>
                  <div class="modal-body">
                    <h3>(27) 9 9900-1122 </h3>
                    <h3>(27) 9 9911-2233 </h3>  
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

                  </div>
                </div>
              </div>
            </div>
          </a>

        </div>



      </div>

      <div class="links_redes">
        <a href="https://www.facebook.com/walmir.coelho.37" target="_blank"><img src="assets/images/face.png" border="0" width="30" height="30"></a> 
        <a href="#"><img src="assets/images/insta.png" border="0" width="30" height="30"></a>
        <a href="https://www.youtube.com/channel/UCjEELJpfZYSFJ26sUewJLwA" target="_blank"><img src="assets/images/youtube.png" border="0" width="30" height="30"></a>

      </div>





    </div>

  </nav>



  <!-- <div class="video-cofre">
    <video width="600" height="400" controls class="video-cofre-int">
      <source src="assets/videos/casEcono.mp4" type="video/mp4">
        
          Your browser does not support the video tag.
        </video>
  </div> -->


  <section class="main-carousel">
    <div id="carouselImgCofre" class="carousel slide" data-ride="carousel" >
      <ol class="carousel-indicators">
        <li data-target="#carouselImgCofre" data-slide-to="0" class="active"></li>
        <li data-target="#carouselImgCofre" data-slide-to="1"></li>
        <li data-target="#carouselImgCofre" data-slide-to="2"></li>
        <li data-target="#carouselImgCofre" data-slide-to="3"></li>
        <li data-target="#carouselImgCofre" data-slide-to="4"></li>
      </ol>



      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/images/cofre/cofre.jpg" alt="" width="500">
        </div>
        <div class="carousel-item">
          <img src="assets/images/cofre/IMG_2324.jpg" alt="" width="500">
        </div>
        <div class="carousel-item ">
          <img src="assets/images/cofre/IMG_2325.jpg" alt="" width="500">
        </div>
        <div class="carousel-item">
          <img src="assets/images/cofre/IMG_2328.jpg" alt="" width="500">
        </div>
        <div class="carousel-item">
          <img src="assets/images/cofre/IMG_2332.jpg" alt="" width="500">
        </div>

        <a class="carousel-control-prev" href="#carouselImgCofre" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselImgCofre" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>

      </div>



    </div>

  </section>


  <hr>

  <section>         
    <div class="header-buy">
      <div class="jumbotron">
        <h1 style="text-align: center;">Casinha da Economia</h1>

        <p id="kit">Leve também esse Maravilhoso Kit 3 em 1.</p>
        <p id="kit">Um exemplar de Bolso do Livro</p>
        <p id="kit">Um DVD </p>
        <p id="kit">Casinha da Economia</p>
      </div>

      <div class="jumbotron">
        <h5 style="text-align: center;">Preço Sugerido:<strike>R$ 199,00</strike></h5>
        <h1 style="text-align: center;">R$ 99,00</h1>
        <h3 style="text-align: center;">Você Economiza:R$ 100,00(50%)</h3>


        <div>
          <h1 style="color: green;font-size: 20px;text-align: center;">Em Estoque</h1>
          <a href="pages/compra.php"  style="text-decoration:none">
            <button type="button" class="btn btn-outline-primary btn-lg btn-block" onclick="comprar()">Adicionar ao Carrinho</button>
          </a>

        </div>

      </div>

    </div>


  </section>

  <hr>

  <section class="img-site">
    <div class="thanks">
      <h1>Obrigado por visitar nosso site.</h1>

    </div>
  </section>


  <section class="footer-site">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <address>
            <p>@Todos os direitos reservados.</p>
          </address>


        </div>
      </div>
    </div>
  </section>


  <script src="https://code.jquery.com/jquery-3.4.1.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
    <script src="assets/js/bootstrap.min.js" ></script>




</body>



</html>
























































