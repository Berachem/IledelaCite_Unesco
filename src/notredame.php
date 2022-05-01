<?php
$page = 'Notre Dame';
include('../php/header.inc.php');

?>

    
      <div class="embed-responsive embed-responsive-16by9">
        <video src="../img/notredame.mp4" loop autoplay="autoplay" autoplay playsinline style="pointer-events: none;" muted></video>
                
        </div>
        <svg class="arrows">
              <path class="a1" d="M0 0 L30 32 L60 0"></path>
              <path class="a2" d="M0 20 L30 52 L60 20"></path>
              <path class="a3" d="M0 40 L30 72 L60 40"></path>
            </svg>

        <!-- Barre Orange et Titre page   -->

      <div class="description" >
          <p style="color:white">
            <?php echo $notredame_description[$langue] ?>
          </p>
      </div>

<section data-aos="fade-up">
    <!-- SECTION ARCHITECTURE-->
    <div class="sous_titre">
      <h2 style="color: #f7af3e;"><i class="fas fa-hammer"></i> <?php echo $notredame_carousel1_card_title1[$langue] ?></h2>
      <img src="../img/sous_titre.png" alt="" >
    </div>

    <!-- Carrousel  -->
    <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- Indicateurs -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
      </ul>

      <div class="carousel-inner">
        <!-- Evenement 1 dans carrousel  -->
        <div class="carousel-item active">
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $notredame_carousel1_card_title1[$langue] ?></h5>
                  <p class="card-text tovisit">
                  <?php echo $notredame_carousel1_card_text1[$langue] ?>
                  </p>
                  <span class="collapse card-text tovisit" id="viewdetails"> 
                  <?php echo $notredame_carousel1_colapse_card_text1[$langue] ?>
                  </span> 
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails" ><?php echo $savoirplus[$langue] ?></a>
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
                  <h5 class="card-title"><?php echo $notredame_carousel1_card_title2[$langue] ?></h5>
                  <p class="card-text tovisit" >
                    <?php echo $notredame_carousel1_card_title2[$langue] ?>
                  </p>
                  <span class="collapse card-text tovisit" id="viewdetailsb"> 
                    <?php echo $notredame_carousel1_colapse_card_text2[$langue] ?>
                  </span>
                  <br>
                  <br>
                  <blockquote class="blockquote">
                    <p class="mb-0"><?php echo $notredame_carousel1_colapse_card_blockquote_text[$langue] ?></p>
                    <footer class="blockquote-footer"><?php echo $notredame_carousel1_colapse_card_blockquote_footer[$langue] ?></footer>
                  </blockquote>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailsb" ><?php echo $savoirplus[$langue] ?></a>
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
                  <h5 class="card-title"><?php echo $notredame_carousel1_card_title3[$langue] ?></h5>
                  <p class="card-text tovisit">
                    <?php echo $notredame_carousel1_card_text3[$langue] ?>
                  </p>
                  <span class="collapse" id="viewdetailsc"> 
                    <p class = "card-text tovisit"> <!--différent des autres pour les puce soit en style par défaut du body-->
                      <?php echo $notredame_carousel1_colapse_card_text3[$langue] ?>
                    </p>
                  </span>
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailsc" ><?php echo $savoirplus[$langue] ?></a>    
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
                  <h5 class="card-title"><?php echo $notredame_carousel1_card_title4[$langue] ?></h5>
                  <p class="card-text tovisit">
                    <?php echo $notredame_carousel1_card_text4[$langue] ?>
                  </p>
                  <span class="collapse card-text tovisit" id="viewdetailsd"> 
                    <?php echo $palais_carousel1_colapse_card_text4[$langue] ?>
                  </span>
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailsd" ><?php echo $savoirplus[$langue] ?></a>
                    
                    
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
      <h2 style="color: #f7af3e;"><i class="fas fa-history"></i> <?php echo $notredame_carousel1_card_text4[$langue] ?></h2>
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
                  <h5 class="card-title"><?php echo $notredame_carousel2_card_title1[$langue] ?></h5>
                  <p class="card-text tovisit" >
                    <?php echo $notredame_carousel2_card_text1[$langue] ?>
                  </p>
                  <span class="collapse card-text tovisit" id="viewdetails1">                     
                    <?php echo $notredame_carousel2_colapse_card_text1[$langue] ?>
                  </span> 
                  <br>
                  <br>

                  <div style="display: flex;">
                  
                  <a class="btn btn-light"  href="https://www.youtube.com/embed/xSOtXtTXx-s">
                  <i class="fa fa-youtube"></i> Video</a>  
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1" ><?php echo $savoirplus[$langue] ?></a>
                
                  
                  </div>
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
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/Fran%C3%A7ois-Nicolas_Chifflart_-_Attaque_de_Notre-Dame.jpg/220px-Fran%C3%A7ois-Nicolas_Chifflart_-_Attaque_de_Notre-Dame.jpg" class="card-img-top h-100" alt="...">
              </div>
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title"><i><?php echo $notredame_carousel2_card_title2_i[$langue] ?></i>  <?php echo $notredame_carousel2_card_title2_h2[$langue] ?></h5>
                  <p class="card-text tovisit" >
                    <?php echo $notredame_carousel2_card_text2[$langue] ?>
                  </p>
                  <span class="collapse card-text tovisit" id="viewdetails1b">
                    <?php echo $notredame_carousel2_colapse_card_text2[$langue] ?>
                  </span> 
                  <br>
                  <br>
                  <blockquote class="blockquote">
                    <p class="mb-0"><?php echo $notredame_carousel2_colapse_card_blockquote_text[$langue] ?></p>
                    <footer class="blockquote-footer"><?php echo $notredame_carousel2_colapse_card_blockquote_footer[$langue] ?><cite title="Source Title">Notre-Dame de Paris</cite></footer>
                  </blockquote>
                  <div style="display: flex;">
                  <a class="btn btn-primary" href="https://www.fnac.com/livre-numerique/a13708073/Victor-Hugo-Notre-Dame-de-Paris?Origin=fnac_google#FORMAT=ebook%20(ePub)">
                    <i class="fas fa-book infobtn"></i> <?php echo $notredame_carousel2_colapse_card_blockquote_button[$langue] ?></a>  
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1b" ><?php echo $savoirplus[$langue] ?></a>
                 
                  </div>
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
                  <h5 class="card-title"><?php echo $notredame_carousel2_card_title3[$langue] ?></h5>
                  <p class="card-text tovisit" >
                    <?php echo $notredame_carousel2_card_text3[$langue] ?>
                  </p>
                  <span class="collapse card-text tovisit" id="viewdetails1c">
                    <?php echo $notredame_carousel2_colapse_card_text3[$langue] ?>
                  </span> 
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1c" ><?php echo $savoirplus[$langue] ?></a>
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
      <h2 style="color: #f7af3e;"><i class="fas fa-newspaper"></i> <?php echo $notredame_sous_titre_actualite[$langue] ?></h2>
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
                  <h5 class="card-title"><?php echo $notredame_carousel3_card_title1[$langue] ?></h5>
                  <p class="card-text tovisit"><?php echo $notredame_carousel3_card_text1[$langue] ?>
                  </p>
                  <span class="collapse card-text tovisit" id="viewdetails3"> 
                  <?php echo $notredame_carousel3_colapse_card_text1[$langue] ?>
                  </span>
                  <br>
                    
                  <div style="display: flex;">
                      <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails3" ><?php echo $savoirplus[$langue] ?></a>
                  
                      <a class="btn btn-success btn-annexe" href="https://www.toutsurmesfinances.com/argent/a/comment-faire-un-don-pour-rebatir-notre-dame-de-paris#:~:text=Il%20est%20aussi%20possible%20d'effectuer%20un%20don%20%3A,BIC%20de%20la%20banque%20%3A%20SOGEFRPP)">
                    <i class="fas fa-heartbeat infobtn"></i> <?php echo $notredame_carousel3_button[$langue] ?></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-5" style="background: #868e96;">
                  <img src="../img/incendiesNotreDame.jpg" class="card-img-top h-100" alt="...">
              </div>
            </div>
          </div>
        </div>

        <!-- Element 2 sans carrousel, à mettre à jour une fois la rentrer dépassé -->
        <div class="carousel-item">  
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">
             
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $notredame_carousel3_card_title2[$langue] ?></h5>
                  <p class="card-text tovisit">
                  <?php echo $notredame_carousel3_card_text2[$langue] ?>
                  </p>
                  <span class="collapse card-text tovisit" id="viewdetails3b"> 
                  <?php echo $notredame_carousel3_colapse_card_text2[$langue] ?>
                  </span>
                   <br>
                    
                   <div style="display: flex;">
                    <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails3b" ><?php echo $savoirplus[$langue] ?></a>
                  
                    <a class="btn btn-info btn-annexe" href="https://www.eternellenotredame.com">
                    <i class="fas fa-vr-cardboard"></i> <?php echo $notredame_carousel3_lien_text2[$langue] ?> </a>
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


<section data-aos="fade-up">
    <br>
        <h2 style="text-align: center; font-size: 2.5vw;">
          <?php echo $notredame_film[$langue] ?> <img src="../img/pop-corn.png" width="35" height="35">
        </h2>
    <br>
    <div class="embed-responsive embed-responsive-16by9 video" >
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/YlDXdPSEtgk"></iframe>
    </div>

</section>
    <!-- Site officiel  
    <br>
    <a class="btn btn-primary siteofficiel" href="https://www.notredamedeparis.fr/">
    <i class="fas fa-globe"></i> Consulter le Site Web officiel de la cathédrale Notre-Dame</a>
-->
    <br>

    <?php

include('../php/footer.inc.php');

?>
