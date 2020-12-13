<?php
 include "cabecalho.php";

echo '
<!-- COMEÇO CAROUSEL -->
<div class="slider-principal">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/boiserie/01.jpg" width="90" height="500" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/forros/01.jpg" width="90" height="500" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/3D/01.jpg" width="90" height="500" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
  <!-- FIM CAROUSEL -->

    <div id="index" class="card-deck">
        <div class="card">
            <img src="img/boiserie.jpg" width="100px" height="300px" class="card-img-top"
                data-toggle="modal" data-target="#exampleModal" alt="Boiserie">
            <div class="card-body">
                <h5 class="card-title" >Boiserie</h5>
                <p class="card-text">O boiserie, com a pronúncia “boaserrí”, é um revestimento francês típico do século XVII e XVIII. A técnica consiste em emoldurar as paredes através de molduras em relevo</p>
            </div>
        </div>
        <div class="card">
            <img src="img/drywall.jpg" width="100px" height="300px" class="card-img-top" alt="Drywall">
            <div class="card-body">
                <h5 class="card-title">Drywall</h5>
                <p class="card-text">O drywall é a solução prática para quem precisa dividir um ambiente, embutir iluminação, isolar barulhos ou montar uma estante. O melhor de tudo isso, é que você não vai precisar fazer grandes reformas, já que o material pode se adaptar às necessidades do ambiente com facilidade.</p>
            </div>
        </div>
        <div class="card">
            <img src="img/florao.jpg" width="100px" height="300px" class="card-img-top" alt="Florão">
            <div class="card-body">
                <h5 class="card-title">Florões</h5>
                <p class="card-text">Os Florões constituem uma nova tendência em decoração de interiores, a aplicação deste elemento decorativo não só embeleza e personaliza mas também valoriza o espaço em que é utilizado, dando um requinte de luxo.</p>
            </div>
        </div> 
    </div>
    <div id="index" class="card-deck">   
        <div class="card">
            <img src="img/forro.jpg" width="100px" height="300px" class="card-img-top" alt="Forro em gesso">
            <div class="card-body">
                <h5 class="card-title">Forro</h5>
                <p class="card-text">Prático e versátil, o forro de gesso é uma das opções de cobertura mais utilizadas em projetos arquitetônicos e de decoração, para rebaixar teto, disfarçar vigas, imperfeições, e embutir iluminação especial. Além disso, promove efeito estético permitindo a criação de formas e desenhos</p>
            </div>
        </div>
        <div class="card">
            <img src="img/moldura 3d.jpg" width="100px" height="300px" class="card-img-top" alt="Moldura 3D (alto relevo)">
            <div class="card-body">
                <h5 class="card-title">Molduras 3D</h5>
                <p class="card-text">O gesso 3D é um tipo de revestimento aplicado em placas cheias de estilo e movimento, graças aos seus desenhos em alto-relevo. Essas placas podem ser vendidas prontas ou montadas a partir de formas, que você também encontra para comprar em algumas lojas de construção e decoração.</p>
            </div>
        </div>
        <div class="card">
            <img src="img/reparos.png" width="100px" height="300px" class="card-img-top" alt="Reparos em geral">
            <div class="card-body">
                <h5 class="card-title">Reparos em geral</h5>
                <p class="card-text">Um pedacinho da moldura caiu ou aconteceu algum problema? Nós consertamos!</p>
            </div>
        </div>
        <div class="modal-livros"> <!--  -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Boiseries</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>

                    <div id="texto-modal" class="modal-body">
                    <p style="text-align: center;">
                        No auge da Segunda Guerra Mundial uma garota ganha em seu aniversário de 13 anos um caderno de autógrafos.
                        Tinha um fecho, capa dura de tecido xadrez vermelho e branco.
                        O nome da garota era Anne Frank e ela gostava muito de escrever.
                        Por isso, transforma o caderno em um diário.
                        Menos de um mês depois, Anne, a irmã Margot e os pais vão para um esconderijo secreto,
                        onde passam mais de dois anos, com outras quatro pessoas, para não serem enviados para um campo de concentração.
                    </p>
                    </div>

                    <div class="slider">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/boiserie/01.jpg" width="600px" height="300px" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/boiserie/02.jpg" width="600px" height="300px" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/boiserie/03.jpg" width="600px" height="300px" class="d-block w-100" alt="...">
                    </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
              </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
    </div>
';
 include "rodape.php";
?>
