<?php
$page = 'endroitsAvisiter';
include('../php/header.inc.php');

?>
     <!-- Barre Orange et titre principal-->
    <div id="TitrePage">
        <img src="../img/titre.png" alt="">
        <h1>Endroits à visiter</h1>
    </div>

    <!-- Phrase accroche-->
    <div class="description">
        <p>
          L'Île de la Cité, outre le fait que ce patrimoine française regorge de monuments iconiques, on peut y trouver beaucoup d'emplacements cachés et magnifiques.
        </p>
    </div>

    <!-- Spot 1 -->
    <div class="card bg-dark" style="max-width: 700px;">
      <div class="row no-gutters">
        <!-- Caroussel Images -->
        <div id="marchefleurs" class="carousel slide col-sm-5" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#marchefleurs" data-slide-to="0" class="active"></li>
            <li data-target="#marchefleurs" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="../img/marchefleurs.png" alt="Marché aux fleurs">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../img/map_marchéfleur.png" alt="Map Marché aux fleurs">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <!-- Textes Spot -->
          <div class="col-sm-7">
              <div class="card-body">
                  <h5 class="card-title">Le fameux marché aux fleurs</h5>
                  <p class="card-text">
                    
                    <i class="fas fa-map-marker-alt" style="color: #f7af3e;"></i> Place Louis Lépine - Quai de la Corse - 75004 Paris
                    <br>
                    <i class="fas fa-clock" style="color: #f7af3e;"></i> Du lundi au Samedi, de 8h00 à 19h30
                    <br>
                    <i class="fas fa-comment-dots" style="color: #f7af3e;"></i> Respirez les roses, les tulipes et beaucoup plus d'espèces florales au Marché aux fleurs au bord de quai.
                  </p>
              </div> 
          </div>
      </div>
    </div>

<br>

        <!-- Spot 2 -->
    <div class="card bg-dark" style="max-width: 700px;">
      <div class="row no-gutters">
        <!-- Caroussel Images -->
        <div id="carouselExampleIndicators" class="carousel slide col-sm-5" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="../img/crypte.png" alt="Crypte">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../img/map_crypte.png" alt="Map Crypte">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- Textes Spot -->
          <div class="col-sm-7">
              <div class="card-body">
                  <h5 class="card-title">Crypte de Notre-Dame</h5>
                  <p class="card-text">
                    
                    <i class="fas fa-map-marker-alt" style="color: #f7af3e;"></i> En-dessous de la Cathédrale Notre Dame
                    <br>
                    <i class="fas fa-clock" style="color: #f7af3e;"></i> du Mardi au Dimanche, de 10h à 18h
                    <br>
                    <i class="fas fa-comment-dots" style="color: #f7af3e;"></i> Visitez la plus importante crypte archéologique d’Europe et offre une vision unique de l’évolution urbaine et architecturale de l’île de la Cité.
                  </p>
              </div> 
          </div>
      </div>
    </div>

    <br>
        <!-- Spot 3 -->
        <div class="card bg-dark" style="max-width: 700px;">
          <div class="row no-gutters">
            <!-- Caroussel Images -->
            <div id="carouselExampleIndicators" class="carousel slide col-sm-5" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="../img/Square-Vert.png" alt="Square Vert-Galant">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../img/map_square.png" alt="Map Square Vert-Galant">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            
            <!-- Textes Spot -->
              <div class="col-sm-7">
                  <div class="card-body">
                      <h5 class="card-title">Square du Vert-Galant</h5>
                      <p class="card-text">
                        
                        <i class="fas fa-map-marker-alt" style="color: #f7af3e;"></i> 15 Pl. du Pont Neuf, 75001 Paris
                        <br>
                        <i class="fas fa-clock" style="color: #f7af3e;"></i> Pas d'horaires
                        <br>
                        <i class="fas fa-comment-dots" style="color: #f7af3e;"></i> Le square offre une faune et une flore impressionnante pour un parc se trouvant au centre de la capitale. 
                        Il donne sur une vue magnifique de la Seine, du Musée du Louvre et de l'Hôtel de la Monnaie.
                      </p>
                  </div> 
              </div>
          </div>
        </div>       
        
        <br>

        <!-- Spot 4 -->
        <div class="card bg-dark" style="max-width: 700px;">
          <div class="row no-gutters">
            <!-- Caroussel Images -->
            <div id="carouselExampleIndicators" class="carousel slide col-sm-5" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="../img/faussemaison.jfif" alt="Fausse Maison">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../img/map_faussemaison.png" alt="Map Fausse Maison">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

            <!-- Textes Spot -->
              <div class="col-sm-7">
                  <div class="card-body">
                      <h5 class="card-title">La fausse maison médiévale de l’île de la Cité </h5>
                      <p class="card-text">
                        
                        <i class="fas fa-map-marker-alt" style="color: #f7af3e;"></i> 1-3 rue des Ursins, 75004
                        <br>
                        <i class="fas fa-clock" style="color: #f7af3e;"></i> Pas d'horaires
                        <br>
                        <i class="fas fa-comment-dots" style="color: #f7af3e;"></i> 
                        Une maison du millieu du XXe s ressemblant aux maison de l'époque de la construction de la cathédrale
                      </p>
                  </div> 
              </div>
          </div>
        </div>
 


    <footer>
      <!-- Logo-->
        <img src="../img/logo.png" alt="Logo Unescite" id="logoIle" >

        <!-- Copyright-->
        <div id="Credits">
            <h3 >&copy; Copyright 2022, <a href="https://www.linkedin.com/in/berachem-markria/">Berachem MARKRIA </a> & <a href="https://www.linkedin.com/in/tristan-martinez-8459a1229/"> Tristan Martinez</a> </h3> 
        </div>
       
        <!-- Réseaux Sociaux-->
        <div id="LogosFooter"></div>
            <div class="footer-social-icons">
                <ul class="social-icons">
                    <li><a href="https://www.facebook.com/profile.php?id=100075301764425" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/IleCiteParis" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
                    <li><a href="" class="social-icon"> <i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://fr.unesco.org/" class="social-icon"> <i class="fas fa-landmark"></i></a></li>
                    <li><a href="https://github.com/Berachem" class="social-icon"> <i class="fa fa-github"></i></a></li>
                </ul>
        </div>
            
       
    </footer>
</body>
</html>