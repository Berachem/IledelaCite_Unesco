<?php
$page = 'Les Ponts';
include('../php/header.inc.php');

?>

      <div class="embed-responsive embed-responsive-16by9">
        <video src="../img/lespontsCompressed.mp4" autoplay="autoplay" autoplay playsinline style="pointer-events: none;" muted></video>
      </div>

      <svg class="arrows">
              <path class="a1" d="M0 0 L30 32 L60 0"></path>
              <path class="a2" d="M0 20 L30 52 L60 20"></path>
              <path class="a3" d="M0 40 L30 72 L60 40"></path>
            </svg>

        <!-- Barre Orange et Titre page   -->

      <div class="description" >
          <p style="color:white">
            <?php echo $ponts_title[$langue] ?>
          </p>
      </div>
    
<section data-aos="fade-up">
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
                  <h5 class="card-title"><?php echo $ponts_carroussel1_title[$langue] ?></h5>
                  <p class="card-text">
                  <?php echo $ponts_carroussel1_text[$langue] ?>
                  </p>
                  <span class="collapse card-text" id="viewdetails"> 
                  <?php echo $ponts_carroussel1_more[$langue] ?>
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
                  <h5 class="card-title"><?php echo $ponts_carroussel1_title2[$langue] ?> </h5>
                  <p class="card-text" >
                  <?php echo $ponts_carroussel1_text2[$langue] ?>
                  </p>
                  <span class="collapse card-text" id="viewdetailsb"> 
                  <?php echo $ponts_carroussel1_more2[$langue] ?>
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


</section>

<section data-aos="fade-up">
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
                <img src="../img/pont-au-change.jpg" class="card-img-top h-100" alt="...">
              </div>
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $ponts_carroussel2_title[$langue] ?></h5>
                  <p class="card-text" >
                  <?php echo $ponts_carroussel2_text[$langue] ?>
                  </p>
               
                </div>
              </div>
            </div>
          </div>
        </div>

        

    </div>

</section>


<section data-aos="fade-up">

  <!-- SECTION Les autres Ponts-->
  <div class="sous_titre">
    <h2 style="color: #f7af3e;"><?php echo $ponts_autres_ponts[$langue] ?></h2>
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
                <?php echo $ponts_carroussel3_text[$langue] ?>
                </p>
                <span class="collapse card-text" id="viewdetailsSaintLouis"> 
                <?php echo $ponts_carroussel3_more[$langue] ?>
                </span> 
                <br>
                <br>
                <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailsSaintLouis" >En savoir plus</a>
              </div>             
            </div>
            <div class="col-sm-5" style="background: #868e96;">
              <img src="../img/pont-saint-Louis.jpg" class="card-img-top h-100" alt="...">
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
                <?php echo $ponts_carroussel3_text2[$langue] ?>
                </p>
                <span class="collapse card-text" id="viewdetailspontnotredame"> 
                <?php echo $ponts_carroussel3_more2[$langue] ?>
                  </span>
                <br>
                <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailspontnotredame" >En savoir plus</a>
              </div> 
            </div>
            <div class="col-sm-5" style="background: #868e96;">
              <img src="../img/pont-notre-dame.png" class="card-img-top h-100" alt="...">
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
                  <?php echo $ponts_carroussel3_text3[$langue] ?>
                  </p>
                  <span class="collapse card-text" id="viewdetailsd"> 
                  <?php echo $ponts_carroussel3_more3[$langue] ?>
                  </span>
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailsd" >En savoir plus</a>
                  
                  
              </div>
            </div>
            <div class="col-sm-5" style="background: #868e96;">
              <img src="../img/pont-saint-michel.jpg" class="card-img-top h-100" alt="...">
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


</section>

  <?php

include('../php/footer.inc.php');

?>