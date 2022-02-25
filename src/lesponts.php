<?php
$page = 'lesponts';
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
      <li data-target="#demo3" data-slide-to="3"></li>
    </ul>

    <div class="carousel-inner">
      <!-- Evenement 1 dans carrousel  -->
      <div class="carousel-item active">
        <div class="card bg-dark" style="max-width: 1750px;">
          <div class="row no-gutters">
            <div class="col-sm-7">
              <div class="card-body">
                <h5 class="card-title">Un Style principalement gothique</h5>
                <p class="card-text">
                  Clarté de la composition, équilibre des verticales et des horizontales frappent tous les visiteurs à l’approche de la façade de la cathédrale.
                </p>
                <span class="collapse card-text" id="viewdetails"> 
                  L’abondance du décor sculpté attire les regards par la verve et la qualité des sculptures, qu’elles soient d’origine ou issues du grand chantier de restauration mené au XIXe siècle. 
                  L’ambiance intérieure de la cathédrale ne laisse personne indifférent au regard de la monumentalité de l’espace, des roses des transepts, de la statuaire votive ou de la majesté du grand-orgue. Les grands tableaux présents dans les chapelles permettent de comprendre le rôle essentiel de la peinture religieuse aux XVIIe et XVIIIe siècles. Le trésor de la cathédrale conserve nombre d’œuvres d’intérêt majeur, affectées au culte. Notre-Dame de Paris est ainsi un édifice fondamental, tant pour l’histoire de l’architecture gothique que pour l’histoire de l’art depuis le Moyen Âge ou celle de la restauration aux XIXe et XXe siècles. 
                  Classée au titre des monuments historiques sur la liste de 1862, elle est partie intégrante du bien « Paris, rives de la Seine » inscrit sur la liste du patrimoine mondial de l’Unesco. L’espace classé comprend les grands monuments, immeubles, jardins, places et quais qui bordent la Seine, depuis l’Ile Saint-Louis, à l’est, jusqu’à l’Ile aux Cygnes, à l’ouest.
                </span> 
                <br>
                <br>
                <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails" >En savoir plus</a>
              </div>             
            </div>
            <div class="col-sm-5" style="background: #868e96;">
              <img src="../img/Notre_Dame_architecture.jpg" class="card-img-top h-100" alt="...">
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
                <h5 class="card-title">Un Projet gigantesque d'une ampleur phénoménale</h5>
                <p class="card-text" >
                    Après la forte croissance démographique et religieuse de la France, La basilique Saint-Étienne, malgré ses dimensions imposantes,
                    ne suffit plus à la ferveur des Parisiens et aux  ambitions du nouvel évêque Maurice de Sully face au rayonnement intellectuel de la ville et à son essor.
                </p>
                <span class="collapse card-text" id="viewdetailsb"> 
                  Ce fit donc sentir le besoin d'un édifice plus grand, plus majestieux, à la mesure de la capitale de l'évêcher et du pays, ainsi que de l'ambition du nouvel évêque Maurice de Sully.
                  S'entamme donc l'un des projet de construction les plus longs qu'aura jamais eu la France à effectuer, un projet qui a duré près de 200 ans, et qui a nécessité énormément de technique 
                  , d'organisaion et de savoi-faire pour aboutir à ce manifique résultat.
                  </span>
                <br>
                <br>
                <blockquote class="blockquote">
                  <p class="mb-0">« La tête, le cœur, la moelle de la ville entière. »"</p>
                  <footer class="blockquote-footer">Gui de Bazoches, chroniqueur du XIIe siècle</footer>
                </blockquote>
                <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailsb" >En savoir plus</a>
              </div> 
            </div>
            <div class="col-sm-5" style="background: #868e96;">
              <img src="../img/architecurenotredame1.jpg" class="card-img-top h-100" alt="...">
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
                <h5 class="card-title">Deux siècles de technique, d'archtecture et de travail</h5>
                <p class="card-text">
                  En 1163 est posée la première pierre de Notre-Dame en présence du Pape Alexandre III.
                </p>
                <span class="collapse" id="viewdetailsc"> 
                  <p class = "card-text"> <!--différent des autres pour les puce soit en style par défaut du body-->
                  Elle est emblématique de l'art ogival, aussi appelé art gothique,
                  style novateur récement utilisé pour la construction des églises et des cathédrales à l'époque.
                  Système de voûtes en croisées d’ogives, afin de pouvoir placé les vitraux et laisser passé la lumière.
                  Hauteur sous voûte élevée, pour être au plus près du ciel.
                  Élévation à quatre étages étayés par des tribunes afin de faire tenir le toit.
                  De nombreux arcs-boutants à l'extérieur pour contrebalancé la poussée des voûtes de grande hauteur.
                  <br>
                  Plusieurs campagne de travaux ont eu lieu, de sorte que l'on peut distinguer de étapes :
                  </p>
                  <ul>
                    <li>1163-1225 : construction du chœur et de son double déambulatoire, de la nef, des bas-côtés et des tribunes, façade élevée jusqu'à la galerie des rois</li>
                    <li>1225-1250 : galerie haute et les deux tours sur la façade, modification et agrandissements des fenêtres hautes et aménagement des chapelles latérales de la nef.</li>
                  </ul>
                </span>
                <br>
                <br>
                <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailsc" >En savoir plus</a>    
              </div>      
            </div>
            <div class="col-sm-5" style="background: #868e96;">
              <img src="../img/evolutionNotreDame.jpg" class="card-img-top h-100" alt="...">
            </div>
          </div>
        </div>
      </div>

      <!-- Element 4 dans carrousel  -->    
      <div class="carousel-item">
        <div class="card bg-dark" style="max-width: 1750px;">
          <div class="row no-gutters">    
            <div class="col-sm-7">
              <div class="card-body">
                  <h5 class="card-title">Deux siècles de technique, d'archtecture et de travail</h5>
                  <p class="card-text">
                    Ayant subi les outrages du temps et des Hommes, notament avec plusieurs incendits (dont un récemment), 
                  </p>
                  <span class="collapse card-text" id="viewdetailsd"> 
                    Notre-Dame aura été 
                    modifier et rénové de nombreuse fois et ce dès sa création, d'une par pour remplacer es partie romane subsistance, 
                    d'autre part pour remforcer la structure ou encore refaire une partie de la cathédrale.
                    Les architectes se sont succedé et on manque d'information sur les artisans de l'ouvrage au cours du XIIe siècle, car leurs
                    nombre devait être extrême pour un projet de cette taille, néanmoins les comptes de fabrique sont conservés à partir de 1333.
                  </span>
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailsd" >En savoir plus</a>
                  
                  
              </div>
            </div>
            <div class="col-sm-5" style="background: #868e96;">
              <img src="../img/Notre_dame_architecture2.jpg" class="card-img-top h-100" alt="...">
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




    <footer>
      <img src="../img/logo.png" alt="Logo Unescite" id="logoIle" >

      <!-- Copyright  -->
      <div id="Credits">
        <h3 >&copy; Copyright 2022, <a href="https://www.linkedin.com/in/berachem-markria/">Berachem MARKRIA </a> & <a href="https://www.linkedin.com/in/tristan-martinez-8459a1229/"> Tristan Martinez</a> </h3> 
      </div>
        
      <!-- Réseaux Sociaux  -->
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