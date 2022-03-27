<?php
$page = 'Les Ponts';
include('../php/header.inc.php');

?>

    
    <!-- Barre Orange et Titre page  -->
    <div id="TitrePage">
      <img src="../img/titre.png" alt="">
      <h1>Les Ponts</h1>
    </div>

    <!-- Phrase accroche -->
    <div class="description">
        <p>
            L'île de la Cité est entouré de 9 ponts et parmi eux, certains ont une histoire magnifique.
        </p>
    </div>

    <!-- SECTION Pont neuf-->
    <div class="sous_titre">
      <h2 style="color: #f7af3e;"><i class="fas fa-star"></i>  Le Pont Neuf</h2>
      <img src="../img/sous_titre.png" alt="" >
    </div>

    <!-- Carrousel  -->
    <div id="demo2" class="carousel slide" data-ride="carousel">

      <!-- Indicateurs -->
      <ul class="carousel-indicators">
        <li data-target="#demo2" data-slide-to="0" class="active"></li>
        <li data-target="#demo2" data-slide-to="1"></li>
      </ul>

      <div class="carousel-inner">
        <!-- Evenement 1 dans carrousel  -->
        <div class="carousel-item active">
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title">La naissance du Pont-neuf</h5>
                  <p class="card-text">
                  Le Pont-Neuf est sans doute le pont le plus célèbre de Paris, mais également le plus vieux, et pour cause : il voit le jour entre la fin du XVIe siècle et le début du XVIIe siècle.
                  </p>
                  <span class="collapse card-text" id="viewdetails"> 
                    
                  Le Pont-Neuf devait, comment c’était le cas de tous les ponts existants à Paris à l’époque, accueillir des maisons et des échoppes de tout son long. Mais Henri IV en décidera autrement : pour la première fois, il décide de faire un pont dépourvu de bâtisses, mais composé de trottoirs pour protéger les piétons de la boue et des chevaux. 
                  </span> 
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails" >En savoir plus</a>
                </div>             
              </div>
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/le-pont-neuf-by-night.jpg" class="card-img-top h-100" alt="...">
              </div>
            </div>
          </div>
        </div>


        <!-- Element 2 dans carrousel  -->
        <div class="carousel-item">
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">           
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title">Une architecture extraordinaire </h5>
                  <p class="card-text" >
                  Son architecture en pierre magnifique, constituée de 12 arches parées chacune d’un balcon en demi-cercle, nous offre un décor splendide digne d’une carte postale avec l’île de la Cité en fond. 
                  </p>
                  <span class="collapse card-text" id="viewdetailsb"> 
                  Son histoire et son architecture lui ont permis d’être classé Monument historique dès 1889, tandis que son  esthétique a inspiré une foule de peintres et artistes de renom comme Auguste Renoir qui en a fait, en 1872, une oeuvre intitulée « Le Pont Neuf », aujourd’hui visible au National Gallery Of Art de Washington.
                    </span>
                  <br>
            
                
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailsb" >En savoir plus</a>
                </div> 
              </div>
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/pontneuf_tableau.jpeg" class="card-img-top h-100" alt="...">
              </div>
            </div>
          </div>
        </div>

       


      </div>

      <!-- Left and right controless -->
      <a class="carousel-control-prev" href="#demo2" data-slide="prev" >
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo2" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>

    </div>




    <!-- SECTION Pont au Change-->
    <div class="sous_titre">
      <h2 style="color: #f7af3e;">Le Pont au Change</h2>
      <img src="../img/sous_titre.png" alt="" >
    </div>


    <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- Element 1 dans carrousel  -->
      <div class="carousel-inner">
        <div class="carousel-item active">   
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/pontchange.jpeg" class="card-img-top h-100" alt="...">
              </div>
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title">Le pont au change : une ancienne zone de commerce dans Paris</h5>
                  <p class="card-text" >
                  Le change, c’est la référence à l’argent et aux monnaies. Paris était en effet zone de commerce et nombreuses monnaies s’y déferlaient en venant de la Seine. C’est dans ce contexte que les changeurs intervenaient. Ils avaient établis leur banc et boutique sur ce pont.
                  </p>
               
                </div>
              </div>
            </div>
          </div>
        </div>

        

    </div>


  <!-- SECTION Les autres Ponts-->
  <div class="sous_titre">
    <h2 style="color: #f7af3e;">Les autres Ponts</h2>
    <img src="../img/sous_titre.png" alt="" >
  </div>

  <!-- Carrousel  -->
  <div id="demo3" class="carousel slide" data-ride="carousel">

    <!-- Indicateurs -->
    <ul class="carousel-indicators">
      <li data-target="#demo3" data-slide-to="0" class="active"></li>
      <li data-target="#demo3" data-slide-to="1"></li>
      <li data-target="#demo3" data-slide-to="2"></li>

    </ul>

    <div class="carousel-inner">
      <!-- Evenement 1 dans carrousel  -->
      <div class="carousel-item active">
        <div class="card bg-dark" style="max-width: 1750px;">
          <div class="row no-gutters">
            <div class="col-sm-7">
              <div class="card-body">
                <h5 class="card-title">Le pont Saint Louis</h5>
                <p class="card-text">
                Le pont Saint-Louis, d'une longueur de 67 mètres et d'une largeur de 16 mètres, a été construit en 1970 par les ingénieurs Coste et Long-Depaquit et les ingénieurs Creuzot et Jabouille. Il comporte une travée unique d'une grande sobriété, réservé aux piétons mais peut permettre exceptionnellement le passage des voitures.

                Il  relie la pointe ouest de l'île Saint-Louis à l'est de l'île de la Cité près du square Jean XXIII et du square de l'île de France .
                </p>
                <span class="collapse card-text" id="viewdetailsSaintLouis"> 
                Imaginé par les architectes Jabouille et Creuzot puis réalisé par les ingénieurs Long-Depaquit et Coste, ce pont en poutre, tout en acier, est commencé en 1969 et terminé en 1970 sous la maîtrise d'ouvrage de la Ville de Paris1.

Depuis 2014, il est interdit à toute circulation motorisée et réservé aux piétons et cyclistes. Il est très fréquenté par les touristes, et des artistes de rue l'animent souvent à la belle saison.
                </span> 
                <br>
                <br>
                <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailsSaintLouis" >En savoir plus</a>
              </div>             
            </div>
            <div class="col-sm-5" style="background: #868e96;">
              <img src="../img/saintlouis.jpeg" class="card-img-top h-100" alt="...">
            </div>
          </div>
        </div>
      </div>


      <!-- Element 2 dans carrousel  -->
      <div class="carousel-item">
        <div class="card bg-dark" style="max-width: 1750px;">
          <div class="row no-gutters">           
            <div class="col-sm-7">
              <div class="card-body">
                <h5 class="card-title">Le Pont de Notre Dame</h5>
                <p class="card-text" >
                Le pont Notre-Dame est un pont situé à Paris et traversant le grand bras de la Seine, reliant le quai de Gesvres au quai de la Corse sur l'île de la Cité.

L'actuel pont, construit en 1853, lors des transformations haussmanniennes, mesure 105 m de longueur pour une largeur de 20 m, ses cinq arches initiales ayant été réduites à trois en 1912, dont une arche centrale métallique de 60 m
                </p>
                <span class="collapse card-text" id="viewdetailspontnotredame"> 
                C'est à sa place que le premier pont de Paris, appelé Grand-Pont franchissait la Seine sur son grand bras dès l'Antiquité, dans le prolongement du Petit-Pont. En 886, le siège de Paris et les attaques normandes le condamnent, et il est remplacé par un pont de planches justement nommé pont des Planches de Milbray, qui tiendra jusqu'aux inondations de 1406.
                  </span>
                <br>
                <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailspontnotredame" >En savoir plus</a>
              </div> 
            </div>
            <div class="col-sm-5" style="background: #868e96;">
              <img src="../img/pontnotredame.jpeg" class="card-img-top h-100" alt="...">
            </div>
          </div>
        </div>
      </div>

      <!-- Element 3 dans carrousel  -->    
      <div class="carousel-item">
        <div class="card bg-dark" style="max-width: 1750px;">
          <div class="row no-gutters">    
            <div class="col-sm-7">
              <div class="card-body">
                  <h5 class="card-title">Le Pont Saint-Michel</h5>
                  <p class="card-text">
                  Ce pont construit initialement en 1378 fut reconstruit plusieurs fois, en dernier lieu en 1857. Avant le milieu du xixe siècle, il débouchait du côté de la Rive gauche sur la place du Pont-Saint-Michel et du côté de l'île de la Cité sur la rue de la Barillerie.
                  </p>
                  <span class="collapse card-text" id="viewdetailsd"> 
                  Il doit son nom au voisinage de l'ancienne chapelle Saint-Michel du Palais qui existait dans le Palais royal.

Pendant de nombreux siècles, Paris s’est structurée entre la Cité et la rive gauche. Aussi, le pont Saint Michel représenta à partir du XIVe siècle, le deuxième point de passage sur la Seine au niveau du petit bras.

Il fut décidé par le Parlement de Paris en 1353, qui siégeait alors au niveau du Palais, en concertation avec le puissant chapitre de Notre Dame de Paris, le prévôt, qui dirigeait la police au Châtelet. Ce premier pont, en pierre, fut construit entre 1379 et 1387, dans l’axe de la rue Saint Denis, située sur la rive droite.

Petit pont neuf, par opposition au petit pont situé légèrement plus en amont. Puis pont Saint Michel !
                  </span>
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailsd" >En savoir plus</a>
                  
                  
              </div>
            </div>
            <div class="col-sm-5" style="background: #868e96;">
              <img src="../img/pontsaintmichel.jpeg" class="card-img-top h-100" alt="...">
            </div>
          </div>
        </div>
      </div>


    </div>

    <!-- Left and right controless -->
    <a class="carousel-control-prev" href="#demo3" data-slide="prev" >
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo3" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>

  </div>




  <?php

include('../php/footer.inc.php');

?>