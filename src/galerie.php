<?php
$page = 'gallerie';
include('../php/header.inc.php');




echo "
 <!-- Barre Orange et Titre page  -->
    <div id='TitrePage'>
      <img src='../img/titre.png' alt=''>
      <h1>".$nav_gallery[$langue]."</h1>
    </div>
  ";
  ?>

<!-- Phrase accroche -->
<div class="description">
        <p>
          L'Île de la Cité a toujours été une grande inspiration pour les artistes de toutes les époques. <i class="fas fa-paint-brush"></i>
        </p>
    </div>
    <br>

  <div class="container">
        <div class="row d-flex flex-wrap align-items-center" data-toggle="modal" data-target="#lightbox">
          <div class="col-12 col-md-6 col-lg-3">
            
        <img src="../img/galerie/1.jpg" data-target="#indicators" data-slide-to="0" alt="" data-toggle="tooltip" data-placement="top" title="The Quai Saint-Michel and Notre-Dame, Maximilien Luce, 1901"/> 
          </div>
          <div class="col-12 col-md-6 col-lg-3">
              <img src="../img/galerie/2.jpg" data-target="#indicators" data-slide-to="1" alt="" data-toggle="tooltip" data-placement="top" title="Frank Boggs, Quai à la Seinie, Paris, au Clair de Lune, 1898"/>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <img src="../img/galerie/3.jpeg" data-target="#indicators" data-slide-to="2"  alt="" />
          </div>
          <div class="col-12 col-md-6 col-lg-3">
              <img src="../img/galerie/4.jpg" data-target="#indicators" data-slide-to="3" alt="" />
          </div>
          <div class="col-12 col-md-6 col-lg-3">
              <img src="../img/galerie/5.jpg" data-target="#indicators" data-slide-to="3"  alt="" />
          </div>
          <div class="col-12 col-md-6 col-lg-3">
              <img src="../img/galerie/6.jpg" data-target="#indicators" data-slide-to="4" alt="" />
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="lightbox" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close text-right p-2" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              <div id="indicators" class="carousel slide" data-interval="false">
          <ol class="carousel-indicators">
            <li data-target="#indicators" data-slide-to="0" class="active"></li>
            <li data-target="#indicators" data-slide-to="1"></li>
            <li data-target="#indicators" data-slide-to="2"></li>
            <li data-target="#indicators" data-slide-to="3"></li>
            <li data-target="#indicators" data-slide-to="4"></li>
            <li data-target="#indicators" data-slide-to="5"></li>
          </ol>
          <div class="carousel-inner">
            
            <div class="carousel-item active">
              
              <img class="d-block w-100" src="../img/galerie/1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../img/galerie/2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../img/galerie/3.jpeg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../img/galerie/4.jpg" alt="Fourth slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../img/galerie/5.jpg" alt="Fifth slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../img/galerie/6.jpg" alt="Sixth slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#indicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#indicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

            </div>
          </div>
        </div>
</div>


    <footer>
      <img src='../img/logo.png' alt='Logo Unescite' id='logoIle' >

      <!-- Copyright  -->
      <div id='Credits'>
        <h3 >&copy; Copyright 2022, <a href='https://www.linkedin.com/in/berachem-markria/'>Berachem MARKRIA </a> & <a href='https://www.linkedin.com/in/tristan-martinez-8459a1229/'> Tristan Martinez</a> </h3> 
      </div>
        
      <!-- Réseaux Sociaux  -->
      <div id='LogosFooter'></div>
        <div class='footer-social-icons'>
          <ul class='social-icons'>
            <li><a href='https://www.facebook.com/profile.php?id=100075301764425' class='social-icon'> <i class='fa fa-facebook'></i></a></li>
            <li><a href='https://twitter.com/IleCiteParis' class='social-icon'> <i class='fa fa-twitter'></i></a></li>
            <li><a href='' class='social-icon'> <i class='fa fa-instagram'></i></a></li>
            <li><a href='https://fr.unesco.org/' class='social-icon'> <i class='fas fa-landmark'></i></a></li>
            <li><a href='https://github.com/Berachem' class='social-icon'> <i class='fa fa-github'></i></a></li>
          </ul>
        </div>
    </footer>
  </body>
</html>"

