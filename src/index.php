<?php
$page = 'Ile de la Cité';
include('../php/header.inc.php');

?>


    <!-- Carousel-->
    <div id='demo' class='carousel slide' data-ride='carousel'>

      <!-- Indicateurs -->
      <ul class='carousel-indicators'>
        <li data-target='#demo' data-slide-to='0' class='active'></li>
        <li data-target='#demo' data-slide-to='1'></li>
        <li data-target='#demo' data-slide-to='2'></li>
        <li data-target='#demo' data-slide-to='3'></li>
        <li data-target='#demo' data-slide-to='4'></li>
      </ul>
  
      <!-- Carousel Ile de la Cité-->
      <div class='carousel-inner'>
        <div class='carousel-item active'>
          <img src='../img/background.jpg' class='img-fluid' alt='Ile de la cité'>
          <div class='carousel-caption'>
            <h2>L'Île de la Cité</h2>
            <p> <?php echo $index_carousel_ileCite_subtitle[$langue] ?></p>
          </div>
        </div>
        <!-- Carousel Notre Dame-->
        <div class='carousel-item'>
          <img src='../img/notredame.jpg' class='img-fluid' alt='Notre dame'>
          <div class='carousel-caption'>
            <h2>Notre Dame</h2>
            <p> <?php echo $index_carousel_notredame_subtitle[$langue] ?></p>
            <a target="_self" href='notredame.php'><button type='button' class='btn btn-primary'><i class='fas fa-arrow-right'></i> <?php echo $index_carousel_Yaller[$langue] ?></button></a>
          </div>
        </div>

        <!-- Carousel Saintechapelle-->
        <div class='carousel-item'>
          <img src='../img/saintechapelle.jpg' class='img-fluid'  alt='sainte chapelle'>
          <div class='carousel-caption'>
            <h2>La Sainte Chapelle</h2>
            <p> <?php echo $index_carousel_chapelle_subtitle[$langue] ?></p>
            <a target="_self" href='saintechapelle.php'><button type='button' class='btn btn-primary'><i class='fas fa-arrow-right'></i> <?php echo $index_carousel_Yaller[$langue] ?></button></a>
          </div>
        </div>

        <!-- Carousel Palais de Justice-->
        <div class='carousel-item'>
          <img src='../img/Palais_de_Justice.jpg' class='img-fluid'  alt='Palais de justice'>
          <div class='carousel-caption'>
            <h2>Le Palais de Justice</h2>
            <p> <?php echo $index_carousel_palaisjustice_subtitle[$langue] ?></p>
            <a target="_self" href='palaisdejustice.php'><button type='button' class='btn btn-primary'><i class='fas fa-arrow-right'></i> <?php echo $index_carousel_Yaller[$langue] ?></button></a>
          </div>
        </div>
        <!-- Carousel Pont Neuf-->
        <div class='carousel-item'>
          <img src='../img/pont-neuf.jpg' class='img-fluid'  alt='Pont neuf'>
          <div class='carousel-caption'>
            <h2>Le Pont Neuf</h2>
            <p> <?php echo $index_carousel_pontneuf_subtitle[$langue] ?></p>
            <a target="_self" href='lesponts.php'><button type='button' class='btn btn-primary'><i class='fas fa-arrow-right'></i> <?php echo $index_carousel_Yaller[$langue] ?></button></a>
          </div>
        </div>

      </div>
      
      <!-- Left and right controls -->
      <a class='carousel-control-prev' href='#demo' data-slide='prev'>
        <span class='carousel-control-prev-icon'></span>
      </a>
      <a class='carousel-control-next' href='#demo' data-slide='next'>
        <span class='carousel-control-next-icon'></span>
      </a>

    </div>

<section data-aos="fade-up">
    <!-- Phrase d'accroche en orange-->
    <h2 id='PhraseUnesco'>
     <?php echo $index_subtitle[$langue] ?> <img src='../img/unesco_emoji.png' class='rota' width='35' height='35' alt='unesco'>
    </h2>

    <!-- Texte -->
    <h2 style='padding: 1cm; text-align: center;'>
     <?php echo $index_subtitle2[$langue] ?>
    </h2>
    <p style='padding: 1cm; text-align: center;font-family: cicle; font-size: 3vh;'>
     <?php echo $index_description[$langue] ?>
    </p>

    <!-- Vidéo -->
    <div class='embed-responsive embed-responsive-16by9 center-block' id='Video'>
      <iframe class='embed-responsive-item' src="
      <?php echo $index_video[$langue]?>"
      controls=0 
      ></iframe>
    </div>

</section>

<section data-aos="fade-up">
    <!-- Carte localisation-->
    <hr style='margin-top: 6em;'>
    <h2 id='Contact'> <img src='../img/localisation.png'  class='rota' width='35' height='35' alt='localisation'> <?php echo $index_localisation[$langue] ?></h2>
    <iframe src='https://www.google.com/maps/d/u/1/embed?mid=1zvLOOu0uRy-fJ94OVHyyFzAQ8y3Kx8zZ&ehbc=2E312F' 
        id='Carte' 
        width='640' 
        height='480' 
        frameborder='0'
        style='border:0'></iframe>

</section>

<?php
include('../php/footer.inc.php');


?>