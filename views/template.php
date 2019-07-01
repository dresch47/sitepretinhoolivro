<!DOCTYPE html>
<html lang="pt-br">
<head>
 
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

 



  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container">


      <div class="logo_assinatura">
        <a class="navbar-brand" href="<?php echo BASE_URL; ?>home"><img src="assets/images/logoPretinho.png" class="img_logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
          <span class="navbar-toggler-icon"></span>
        </button>

      </div>


      <div class="collapse navbar-collapse" id="navbarSite">

        <ul class="navbar-nav " >
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL;?>">Home</a>
          </li>
               
          <li class="nav-item">
            <a class="nav-link" href=" <?php echo BASE_URL; ?>livro ">O Livro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL; ?>cofre">Casinha de Economia</a>
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
                    <h3>(27)  99692-6624</h3>
                    <h3>(27)  98897-1491 </h3>  
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

  <?php $this->loadViewInTemplate($viewName, $viewData); ?>