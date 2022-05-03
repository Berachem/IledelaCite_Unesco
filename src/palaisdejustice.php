<?php
$page = 'Palais de Justice';
include('../php/header.inc.php');

?>

<img class="img-fluid" src="../img/Palais_de_Justice_de_Paris.jpg" alt="" style="width: 100%; top:0">

<svg class="arrows">
              <path class="a1" d="M0 0 L30 32 L60 0"></path>
              <path class="a2" d="M0 20 L30 52 L60 20"></path>
              <path class="a3" d="M0 40 L30 72 L60 40"></path>
            </svg>
        <!-- Barre Orange et Titre page   -->

      <div class="description" >
          <p style="color:white">
            
            <?php echo $palais_description[$langue] ?>
          </p>
      </div>

<section data-aos="fade-up">
    <!-- SECTION Histoire-->
    <div class="sous_titre">
      <h2 style="color: #f7af3e;"><i class="fas fa-history"></i> <?php echo $palais_histoire[$langue] ?></h2>
      <img src="../img/sous_titre.png" alt="" >
    </div>

    <!-- Carrousel  -->
    <div id="demo2" class="carousel slide" data-ride="carousel">

      <!-- Indicateurs -->
      <ul class="carousel-indicators">
        <li data-target="#demo2" data-slide-to="0" class="active"></li>
        <li data-target="#demo2" data-slide-to="1"></li>
        <li data-target="#demo2" data-slide-to="2"></li>
        <li data-target="#demo2" data-slide-to="3"></li>
        <li data-target="#demo2" data-slide-to="4"></li>
      </ul>

      <div class="carousel-inner">
        <!-- Evenement 1 dans carrousel  -->
        <div class="carousel-item active">
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $palais_carousel1_card_title1[$langue] ?></h5>
                  <p class="card-text">
                    <?php echo $palais_carousel1_card_text1[$langue] ?>
                  </p>
                  <span class="collapse card-text" id="viewdetails"> 
                    <?php echo $palais_carousel1_colapse_card_text1[$langue] ?>
                  </span> 
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails" ><?php echo $savoirplus[$langue] ?></a>
                </div>             
              </div>
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/Palais_de_justice2.jpg" class="card-img-top h-100" alt="...">
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
                  <h5 class="card-title"><?php echo $palais_carousel1_card_title2[$langue] ?></h5>
                  <p class="card-text" >
                  <?php echo $palais_carousel1_card_text2[$langue] ?>
                  </p>
                  <span class="collapse card-text" id="viewdetailsb"> 
                  <?php echo $palais_carousel1_colapse_card_text2[$langue] ?>
                  </span>
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailsb" ><?php echo $savoirplus[$langue] ?></a>
                </div> 
              </div>
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/Palais_de_justice3.jpg" class="card-img-top h-100" alt="...">
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
                  <h5 class="card-title"><?php echo $palais_carousel1_card_title3[$langue] ?></h5>
                  <p class="card-text">
                  <?php echo $palais_carousel1_card_text3[$langue] ?>
                  </p>
                  <span class="collapse" id="viewdetailsc"> 
                    <?php echo $palais_carousel1_colapse_card_text3[$langue] ?>
                  </span>
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailsc" ><?php echo $savoirplus[$langue] ?></a>    
                </div>      
              </div>
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/Palais_de_justice4.jpg" class="card-img-top h-100" alt="...">
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
                  <h5 class="card-title"><?php echo $palais_carousel1_card_title4[$langue] ?></h5>
                  <p class="card-text">
                    <?php echo $palais_carousel1_card_text4[$langue] ?>
                  </p>
                  <span class="collapse card-text" id="viewdetailsd"> 
                    <?php echo $palais_carousel1_colapse_card_text4[$langue] ?>
                  </span>
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailsd" ><?php echo $savoirplus[$langue] ?></a>
                    
                    
                </div>
              </div>
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/Palais_de_justice5.jpg" class="card-img-top h-100" alt="...">
              </div>
            </div>
          </div>
        </div>
        <!-- Element 5 dans carrousel  -->    
        <div class="carousel-item">
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">    
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $palais_carousel1_card_title5[$langue] ?></h5>
                  <p class="card-text">
                    <?php echo $palais_carousel1_card_text5[$langue] ?>
                  </p>
                  <span class="collapse card-text" id="viewdetailse"> 
                    <?php echo $palais_carousel1_colapse_card_text5[$langue] ?>
                  </span>
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailse" ><?php echo $savoirplus[$langue] ?></a>
                    
                    
                </div>
              </div>
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/Palais_de_justice6.jpg" class="card-img-top h-100" alt="...">
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


</section>


<section data-aos="fade-up">
    <!-- SECTION Procès-->
    <div class="sous_titre">
      <h2 style="color: #f7af3e;"><i class="fa fa-balance-scale"></i> <?php echo $palais_proces[$langue] ?></h2>
      <img src="../img/sous_titre.png" alt="" >
    </div>


    <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- Indicateurs -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
        <li data-target="#demo" data-slide-to="4"></li>
        <li data-target="#demo" data-slide-to="5"></li>
      </ul>

      <!-- Element 1 dans carrousel  -->
      <div class="carousel-inner">
        <div class="carousel-item active">   
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/Tribunale.jpg" class="card-img-top h-100" alt="...">
              </div>
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $palais_carousel2_card_title1[$langue] ?></h5>
                  <p class="card-text" >
                    <?php echo $palais_carousel2_card_text1[$langue] ?>
                  </p>
                  <span class="collapse card-text" id="viewdetails1">                     
                   <?php echo $palais_carousel2_colapse_card_text1[$langue] ?>
                  </span> 
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1" ><?php echo $savoirplus[$langue] ?></a>
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
                <img src="../img/Tribunale1.jpg" class="card-img-top h-100" alt="...">
              </div>
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $palais_carousel2_card_title2[$langue] ?></h5>
                  <p class="card-text" >
                    <?php echo $palais_carousel2_card_text2[$langue] ?>
                  </p>
                  <span class="collapse card-text" id="viewdetails1b">
                    <?php echo $palais_carousel2_colapse_card_text2[$langue] ?>
                  </span> 
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1b" ><?php echo $savoirplus[$langue] ?></a>
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
                <img src="../img/Tribunale2.jpg" class="card-img-top h-100" alt="...">
              </div>
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $palais_carousel2_card_title3[$langue] ?></h5>
                  <p class="card-text" >
                    <?php echo $palais_carousel2_card_text3[$langue] ?>
                  </p>
                  <span class="collapse card-text" id="viewdetails1c">
                    <?php echo $palais_carousel2_colapse_card_text3[$langue] ?>  
                  </span> 
                  <br>
                  <br>
                  <blockquote class="blockquote">
                    <p class="mb-0"><?php echo $palais_carousel2_card_quote3[$langue] ?></p>
                    <footer class="blockquote-footer"><?php echo $palais_carousel2_card_footer3[$langue] ?></footer>
                  </blockquote>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1c" ><?php echo $savoirplus[$langue] ?></a>
         
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Element 4 dans carrousel  -->
        <div class="carousel-item">    
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/Tribunale3.jpg" class="card-img-top h-100" alt="...">
              </div>
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $palais_carousel2_card_title4[$langue] ?></h5>
                  <p class="card-text" >
                  <?php echo $palais_carousel2_card_text4[$langue] ?>
                  </p>
                  <span class="collapse card-text" id="viewdetails1d">
                    <?php echo $palais_carousel2_colapse_card_text4[$langue] ?>
                  </span> 
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1d" ><?php echo $savoirplus[$langue] ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Element 5 dans carrousel  -->
        <div class="carousel-item">    
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/proces-fleurs-du-mal.jpg" class="card-img-top h-100" alt="...">
              </div>
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $palais_carousel2_card_title5[$langue] ?></h5>
                  <p class="card-text" >
                  <?php echo $palais_carousel2_card_text5[$langue] ?>
                  </p>
                  <span class="collapse card-text" id="viewdetails1e">
                  <?php echo $palais_carousel2_colapse_card_text5[$langue] ?>
                  </span> 
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1e" ><?php echo $savoirplus[$langue] ?></a>
         
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Element 6 dans carrousel  -->
        <div class="carousel-item">  
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">
              <div class="col-sm-5" style="background: #868e96;">
                  <img src="../img/Petain.png" class="card-img-top h-100" alt="...">
              </div>
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $palais_carousel2_card_title6[$langue] ?></h5>
                  <p class="card-text" >
                  <?php echo $palais_carousel2_card_text6[$langue] ?>
                  </p>
                  <span class="collapse card-text" id="viewdetails1f">
                  <?php echo $palais_carousel2_colapse_card_text6[$langue] ?>
                  </span> 
                  <br>
                  <br>
                  <blockquote class="blockquote">
                    <p class="mb-0"><?php echo $palais_carousel2_card_quote6[$langue] ?></p>
                    <footer class="blockquote-footer"><?php echo $palais_carousel2_card_footer6[$langue] ?></footer>
                  </blockquote>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1f" ><?php echo $savoirplus[$langue] ?></a>
                </div>
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
    <!-- Section Actualité  -->
    <div class="sous_titre">
      <h2 style="color: #f7af3e;"><i class="fas fa-newspaper"></i> <?php echo $palais_actu[$langue] ?></h2>
      <img src="../img/sous_titre.png" alt="" >
    </div>
    <div id="demo3" class="carousel slide" data-ride="carousel">

      <!-- Element 1 dans carrousel  -->
      <div class="carousel-item active">  
        <div class="card bg-dark" style="max-width: 1750px;">
          <div class="row no-gutters">
              <div class="col-sm-5" style="background: #868e96;">
                  <img src="../img/Palais_de_justice_actu.jpg" class="card-img-top h-100" alt="...">
              </div>
              <div class="col-sm-7">
                  <div class="card-body">
                      <h5 class="card-title"><?php echo $palais_carousel3_card_title1[$langue] ?></h5>
                      <p class="card-text"><?php echo $palais_carousel3_card_text1[$langue] ?></p>
                      <span class="collapse card-text" id="viewdetails3b">
                        <?php echo $palais_carousel3_colapse_card_text1[$langue] ?>
                      </span> 
                      <br>
                        
                          <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails3b" ><?php echo $savoirplus[$langue] ?></a>
                  </div>
              </div>
          </div>
        </div>
      </div>
    
    </div>

</section>


    <?php

include('../php/footer.inc.php');

?>