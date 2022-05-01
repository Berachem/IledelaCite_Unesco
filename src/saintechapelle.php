<?php
$page = 'Sainte Chapelle';
include('../php/header.inc.php');

?>

    
<img class="img-fluid" src="../img/saintechapelle.jpg" alt="" style="width: 100%; top:0">

<svg class="arrows">
              <path class="a1" d="M0 0 L30 32 L60 0"></path>
              <path class="a2" d="M0 20 L30 52 L60 20"></path>
              <path class="a3" d="M0 40 L30 72 L60 40"></path>
            </svg>
        <!-- Barre Orange et Titre page   -->

      <div class="description" >
          <p style="color:white">
          <?php echo $chapelle_description[$langue] ?>
          </p>
      </div>

<section data-aos="fade-up">
    <!-- SECTION ARCHITECTURE-->
    <div class="sous_titre">
      <h2 style="color: #f7af3e;"><i class="fas fa-hammer"></i><?php echo $chapelle_sous_titre_architecture[$langue] ?></h2>
      <img src="../img/sous_titre.png" alt="" >
    </div>

    <!-- Carrousel  -->
    <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- Indicateurs -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>

      <div class="carousel-inner">
        <!-- Evenement 1 dans carrousel  -->
        <div class="carousel-item active">
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $chapelle_carousel1_card_title1[$langue] ?></h5>
                  <p class="card-text tovisit">
                  <?php echo $chapelle_carousel1_card_text1[$langue] ?>
                  </p>
                  <span class="collapse card-text tovisit" id="viewdetails"> 
                  <?php echo $chapelle_carousel1_colapse_card_text1[$langue] ?>
                  </span> 
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails" >En savoir plus</a>
                </div>             
              </div>
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/Chapelle1.jpg" class="card-img-top h-100" alt="...">
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
                  <h5 class="card-title"><?php echo $chapelle_carousel1_card_title2[$langue] ?></h5>
                  <p class="card-text tovisit" >
                  <?php echo $chapelle_carousel1_card_text2[$langue] ?>
                  </p>
                  <span class="collapse card-text tovisit" id="viewdetailsb"> 
                  <?php echo $chapelle_carousel1_colapse_card_text2[$langue] ?>
                  </span>
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailsb" >En savoir plus</a>
                </div> 
              </div>
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/Chapelle2.jpg" class="card-img-top h-100" alt="...">
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
                  <h5 class="card-title"><?php echo $chapelle_carousel1_card_title3[$langue] ?></h5>
                  <p class="card-text tovisit">
                  <?php echo $chapelle_carousel1_card_text3[$langue] ?>
                  </p>
                </div>      
              </div>
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/Chapelle3.jpg" class="card-img-top h-100" alt="...">
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Left and right controless -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev" >
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>

    </div>


</section>

<section data-aos="fade-up">
    <!-- SECTION HISTOIRE-->
    <div class="sous_titre">
      <h2 style="color: #f7af3e;"><i class="fas fa-history"></i><?php echo $chapelle_sous_titre_histoire[$langue] ?></h2>
      <img src="../img/sous_titre.png" alt="" >
    </div>


    <div id="demo2" class="carousel slide" data-ride="carousel">

      <!-- Indicateurs -->
      <ul class="carousel-indicators">
        <li data-target="#demo2" data-slide-to="0" class="active"></li>
        <li data-target="#demo2" data-slide-to="1"></li>
        <li data-target="#demo2" data-slide-to="2"></li>
      </ul>

      <!-- Element 1 dans carrousel  -->
      <div class="carousel-inner">
        <div class="carousel-item active">   
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/histoireNotreDame.jpg" class="card-img-top h-100" alt="...">
              </div>
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $chapelle_carousel2_card_title1[$langue] ?></h5>
                  <p class="card-text tovisit" >
                    <?php echo $chapelle_carousel2_card_text1[$langue] ?>
                  </p>
                  <span class="collapse card-text tovisit" id="viewdetails1">                     
                  <?php echo $chapelle_carousel2_colapse_card_text1[$langue] ?>
                  </span> 
                  <br>
                  <br>

                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1" >En savoir plus</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Element 2 dans carrousel  -->
        <div class="carousel-item">    
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/notredamepeinture2.jpeg" class="card-img-top h-100" alt="...">
              </div>
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $chapelle_carousel2_card_title2[$langue] ?></h5>
                  <p class="card-text tovisit" >
                  <?php echo $chapelle_carousel2_card_text2[$langue] ?>
                  </p>
                  <span class="collapse card-text tovisit" id="viewdetails1b">
                  <?php echo $chapelle_carousel2_colapse_card_text2[$langue] ?>
                  </span> 
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1b" >En savoir plus</a>
                    <br>
                    <br>
                             
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Element 3 dans carrousel  -->
        <div class="carousel-item">  
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">
              <div class="col-sm-5" style="background: #868e96;">
                  <img src="../img/sacrenapoleon.png" class="card-img-top h-100" alt="...">
              </div>
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title">Le sacre de Napoléon dans la cathédrale de Notre Dame, le 18 mai 1804.</h5>
                  <p class="card-text tovisit" >Le sacre de Napoléon Ier est la cérémonie d’intronisation et de couronnement qui suivit la proclamation de Napoléon Bonaparte comme empereur des Français sous le titre de Napoléon Ier du 18 mai 1804.
                  </p>
                  <span class="collapse card-text tovisit" id="viewdetails1c">
                    La cérémonie religieuse du sacre, officié par le pape Pie VII, suivie de celle du couronnement, se déroula, le dimanche 2 décembre 1804, à Notre-Dame de Paris. Elle dura près de cinq heures et le peintre Jacques-Louis David en fit deux tableaux : le Sacre de Napoléon et la Distribution des aigles.
                    Le Sacre de Napoléon (titre complet Sacre de l'empereur Napoléon Ier et couronnement de l'impératrice Joséphine dans la cathédrale Notre-Dame de Paris, le 2 décembre 1804) est un tableau peint entre 1805 et 1807 par Jacques-Louis David, peintre officiel de Napoléon Ier, qui représente une des cérémonies du couronnement. Imposante par ses dimensions, presque dix mètres sur plus de six, la toile de David est conservée au Louvre. Une réplique quasiment identique commencée en 1808 par David et terminée lors de l'exil du peintre à Bruxelles est accrochée au musée du château de Versailles dans la salle du Sacre. Le couronnement et le sacre ont eu lieu à Notre-Dame de Paris.
                  </span> 
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1c" >En savoir plus</a>
                </div>
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

    <br>
    

</section>

<section data-aos="fade-up">
    <!-- Section Actualité  -->
    <div class="sous_titre">
      <h2 style="color: #f7af3e;"><i class="fas fa-newspaper"></i> Actualité</h2>
      <img src="../img/sous_titre.png" alt="" >
    </div>
    <div id="demo3" class="carousel slide" data-ride="carousel">

      <!-- Indicateurs -->
      <ul class="carousel-indicators">
        <li data-target="#demo3" data-slide-to="0" class="active"></li>
        <li data-target="#demo3" data-slide-to="1"></li>
      </ul>

      <!-- Element 1 sans carrousel  -->
      <div class="carousel-inner">
        <div class="carousel-item active">  
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title">Les incendies de Notre Dame</h5>
                  <p class="card-text tovisit">L’incendie de Notre-Dame de Paris est un incendie majeur survenu à la cathédrale Notre-Dame de Paris, les 15 et 16 avril 2019, pendant près de 15 heures.
                  </p>
                  <span class="collapse card-text tovisit" id="viewdetails3"> 
                  Le sinistre se déclare en fin d'après midi à l'intérieur de sa charpente et prend rapidement une grande ampleur. Les flammes détruisent intégralement sa flèche, les toitures de la nef et du transept ainsi que sa charpente. En s'effondrant, la flèche provoque l'écroulement de la voûte de la croisée du transept, d'une partie de celle du bras nord et de celle d'une travée de la nef. L'intervention de centaines de pompiers, jusqu'au lever du jour, permet de sauver la structure globale de l'édifice et d'épargner les deux tours, ainsi que la façade occidentale, le trésor et l'essentiel des œuvres d'art de la cathédrale. Il s'agit du plus important sinistre subi par la cathédrale depuis sa construction.
                    L'incendie entraîne une très forte émotion, tant en France que dans le reste du monde, ainsi qu'une importante couverture médiatique. Le président de la République, Emmanuel Macron, annonce immédiatement vouloir reconstruire la cathédrale dans un délai de cinq ans. Après des débats sur la construction d'un édifice plus moderne à l'ancien emplacement de la flèche, il est finalement décidé de la reconstruire à l'identique. </span> 
                  <br>
                    
                  <div style="display: flex;">
                      <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails3" >En savoir plus</a>
                  
                      <a class="btn btn-success btn-annexe" href="https://www.toutsurmesfinances.com/argent/a/comment-faire-un-don-pour-rebatir-notre-dame-de-paris#:~:text=Il%20est%20aussi%20possible%20d'effectuer%20un%20don%20%3A,BIC%20de%20la%20banque%20%3A%20SOGEFRPP)">
                    <i class="fas fa-heartbeat infobtn"></i> Faire un don pour aider Notre Dame</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-5" style="background: #868e96;">
                  <img src="../img/incendiesNotreDame.jpg" class="card-img-top h-100" alt="...">
              </div>
            </div>
          </div>
        </div>

        <!-- Element 2 sans carrousel, à mettre à jour une fois le 14 avril dépassé -->
        <div class="carousel-item">  
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">
             
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title">Comment visiter Notre Dame ?</h5>
                  <p class="card-text tovisit">
                    Aujourd'hui la reconstruction est toujours en cour, et une réouverture complète n'est pas à prévoir avant 2024, mais l'on peut encore visiter le monument grace à un méthode inédite, la réalité virtuel.
                  </p>
                  <span class="collapse card-text tovisit" id="viewdetails3b"> 
                    Visite immersive proposée sous le parvis de Notre Dame et dans la Défence, elle vous fait voir la cathédrale sous différents angles et à différentes époques, vous permettant de marcher à l'intérieur comme si vous y étiez.
                    Disposible jusqu'au 14 avril, c'est une expérience à ne pas manquer qui vous permet de traverser les âges et de découvrir le passé avec les technologies du présent, en attendant de pourvoir remettre un pied dans la cathédrâle dans un future proche. 
                  </span>
                   <br>
                    
                   <div style="display: flex;">
                    <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails3b" >En savoir plus</a>
                  
                    <a class="btn btn-info btn-annexe" href="https://www.eternellenotredame.com">
                    <i class="fas fa-vr-cardboard"></i> Site officiel de <i>éternelle notre dame</i> </a>
                    </div>
                </div>
              </div>
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/realite_virtuel.jpg" class="card-img-top h-100" alt="...">
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
    </div>
</section>
    <br>
        <h2 style="text-align: center; font-size: 2.5vw;">
          Nous vous conseillons cette vidéo... <img src="../img/pop-corn.png" width="35" height="35">
        </h2>
    <br>
    <div class="embed-responsive embed-responsive-16by9 video" >
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/iiU9s3vHhi4"></iframe>
    </div>

    <br>

    <?php

include('../php/footer.inc.php');

?>
