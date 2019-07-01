


  <section class="main-livro">

    <div class="container" >

      <div class="row col-main-livro ">

        <div class="col-sm-3">
          <a href="#" data-toggle="modal" data-target="#abreLivroGrandePagLivro" >
            <div>
              <img src="assets/images/pret.jpeg" class="img-fluid " >
            </div>
          </a>
          <div class="modal fade" id="abreLivroGrandePagLivro" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <div>
                    <img src="assets/images/pret.jpeg" class="img-fluid " >
                  </div>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              </div>
            </div>


          </div>

        </div>
        
          

          <div class="col-sm-6" style="color: #000000">
            <h1 style="text-align: center;">O Livro</h1>

            <p style="text-align: justify; color: black;font-family: arial;font-size: 18px;">
              <strong>"</strong>
                Uma incrível história de superação. Uma luta diária, ao longo de dois anos, pela vida. Uma história de comoção que vai fazer você repensar sua vida e chegar a conclusão de que nada está ou é perdido. Não importa o que você esteja passando ou vivendo, sempre há esperança de uma mudança para melhor. Nada é fixo nem dura para sempre. Tudo isso e muito mais você vai encontrar nas páginas deste livro que foi escrito pensando exlusivamente em mostar as pessoas que medo, aflição, tristeza são sentimentos passageiros que podem roubar nossa paz e que compaixão, esperança, fé, coragem e perseverança nos trazem sempre algo mais para tocarmos nosso barco e não olharmos mais para traz.
       
              <strong>"</strong>
            </p>
                         
            </div>

            <div class="col-sm-3" style="color: #000000;">
              <div>
                <h5 style="text-align: center;">Preço Sugerido:<strike>R$ 47,00</strike></h5>
                <h1 style="text-align: center;">R$ 37,00</h1>

                <h3 style="text-align: center;">Você Economiza:R$ 10,00(22%)</h3>

              </div>
              <div class="container">
                <h1 style="color: green;font-size: 20px;text-align: center;">Em Estoque</h1>

                <a href="<?php BASE_URL ; ?>compra" style="text-decoration:  none">
                  
                  <button type="button" class="btn btn-outline-primary btn-lg btn-block" onclick="comprar()">Adicionar ao Carrinho</button>
                </a>
                
              </div>
            </div>
          



        </div>

      </div>
    </section>
    
    <section class="header-Bolso">
      <div class="container">
        <div class="row col-header-bolso">
          <div class="col-sm-3">
            <a href="#" data-toggle="modal" data-target="#livroBolso">
              <div>
                <img src="assets/images/livroBolso.jpg" class="img-fluid ">
              </div>
            </a>
            <div class="modal fade" id="livroBolso" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <div>
                      <img src="assets/images/livroBolso.jpg" class="figure-img img-fluid rounded" alt="Capa do Livro.">
                    </div>
                   
                   <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              </div>
            </div>
          </div>

        </div>
          

          <div class="col-sm-6" style="color: #000000">
            <h1 style="text-align: center;">Livro de Bolso</h1>

            <p style="text-align: justify; color: black;font-family: arial;font-size: 18px;">

            </p>

          </div>

          <div class="col-sm-3" style="color: #000000;">
            <div>
              <h5 style="text-align: center;">Preço Sugerido:<strike>R$ 47,00</strike></h5>
              <h1 style="text-align: center;">R$ 37,00</h1>

              <h3 style="text-align: center;">Você Economiza:R$ 10,00</h3>

            </div>
            <div class="container">
              <h1 style="color: green;font-size: 20px;text-align: center;">Em Estoque</h1>
               <a href="<?php BASE_URL ; ?>compra " style="text-decoration:  none">
                  
                  <button type="button" class="btn btn-outline-primary btn-lg btn-block" onclick="comprar()">Adicionar ao Carrinho</button>
                </a>
            </div>
          </div>
        </div>
      </div>

    </section>
   
    <?php require 'footer.php'; ?>




