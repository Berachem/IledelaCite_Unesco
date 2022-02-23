<?php
$page = 'index';
include('../php/header.inc.php');

?>
<?php
echo"
    <!-- Carousel-->
    <div id='demo' class='carousel slide' data-ride='carousel'>

      <!-- Indicateurs -->
      <ul class='carousel-indicators'>
        <li data-target='#demo' data-slide-to='0' class='active'></li>
        <li data-target='#demo' data-slide-to='1'></li>
        <li data-target='#demo' data-slide-to='2'></li>
        <li data-target='#demo' data-slide-to='3'></li>
      </ul>
  
      <!-- Carousel Ile de la Cité-->
      <div class='carousel-inner'>
        <div class='carousel-item active'>
          <img src='../img/background.jpg' class='img-fluid' alt='Ile de la cité'>
          <div class='carousel-caption'>
            <h2>L'Île de la Cité</h2>
            <p>".$index_carousel_ileCite_subtitle[$langue]."</p>
          </div>
        </div>
        <!-- Carousel Notre Dame-->
        <div class='carousel-item'>
          <img src='../img/notredame.jpg' class='img-fluid' alt='Notre dame'>
          <div class='carousel-caption'>
            <h2>Notre Dame</h2>
            <p>".$index_carousel_notredame_subtitle[$langue]."</p>
            <a href='notredame.html'><button type='button' class='btn btn-primary'>Y Aller</button></a>
          </div>
        </div>
        <!-- Carousel Palais de Justice-->
        <div class='carousel-item'>
          <img src='../img/Palais_de_Justice.jpg' class='img-fluid'  alt='Palais de justice'>
          <div class='carousel-caption'>
            <h2>Le Palais de Justice</h2>
            <p>".$index_carousel_palaisjustice_subtitle[$langue]."</p>
            <a href='#palaisjustice'><button type='button' class='btn btn-primary'>Y Aller</button></a>
          </div>
        </div>
        <!-- Carousel Pont Neuf-->
        <div class='carousel-item'>
          <img src='../img/pont-neuf.jpg' class='img-fluid'  alt='Pont neuf'>
          <div class='carousel-caption'>
            <h2>Le Pont Neuf</h2>
            <p>".$index_carousel_pontneuf_subtitle[$langue]."</p>
            <a href='#pontneuf.html'><button type='button' class='btn btn-primary'>Y Aller</button></a>
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

    <!-- Barre Orange et Titre Principal-->
    <div id='TitrePage'>
      <img src='../img/titre.png' alt=''>
      <h1>l'Île de la Cité</h1>
    </div>

    <!-- Phrase d'accroche en orange-->
    <h2 id='PhraseUnesco'>
    ".$index_subtitle[$langue]."
    </h2>

    <!-- Texte -->
    <h2 style='padding-top: 1cm; text-align: center;'>
    ".$index_subtitle2[$langue]."
    </h2>
    <p style='padding: 1cm; text-align: center;font-family: cicle; font-size: 3vh;'>
    ".$index_description[$langue]."
    </p>


    <!-- Vidéo -->
    <div class='embed-responsive embed-responsive-16by9 center-block' id='Video'>
      <iframe class='embed-responsive-item' src='https://www.youtube.com/embed/k4EddzPXeIY'></iframe>
    </div>


    <!-- Carte localisation-->
    <hr style='margin-top: 6em;'>
    <h2 id='Contact'>".$index_localisation[$langue]."</h2>
    <iframe src='https://www.google.com/maps/d/u/1/embed?mid=1zvLOOu0uRy-fJ94OVHyyFzAQ8y3Kx8zZ&ehbc=2E312F' 
        id='Carte' 
        width='640' 
        height='480' 
        frameborder='0'
        style='border:0'></iframe>
    <footer>
      <!-- logo-->
      <img src='../img/logo.png' alt='Logo Unescite' id='logoIle' >
      <!-- Copyright-->
      <div id='Credits'>
          <h3 >&copy; Copyright 2022, <a href='https://www.linkedin.com/in/berachem-markria/'>Berachem MARKRIA </a> & <a href='https://www.linkedin.com/in/tristan-martinez-8459a1229/'> Tristan Martinez</a> </h3> 
      </div>
      <!-- Réseaux sociaux-->
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
</html>";
?>