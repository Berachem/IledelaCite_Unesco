<?php
$page = 'restaurants';
include('../php/header.inc.php');

?>
    
    <div id="TitrePage">
      <img src="../img/titre.png" alt="">
      <h1>Restaurants</h1>
    </div>

    <div class="description">
      <p>
        Sur l'Île de la Cité et même autour, vous trouverez de nombreux endroits pour vous restaurer ! 
      </p>
    </div>

    <p class="presentation">
      Chaque couverts sur cette carte représente un point de restauration. Vous y trouverez des restaurants de haute gastronomie française, des restaurants huppés, des fast-food.
      <br> 
      <u> Prix moyen du repas par personne :</u> 
      <i class="fas fa-utensils" style="color:rgba(2,136,209);"> >50€</i> | 
      <i class="fas fa-utensils" style="color:green;"> <50€</i> | 
      <i class="fas fa-utensils" style="color:rgba(255,234,0);"> <25€</i> 
    </p>
    <br>
      
    <iframe id= "Rallye_map" width="100%" height="600px" frameborder="0" allowfullscreen src="https://www.google.com/maps/d/embed?mid=1FwE6TcR3ReSNk5tZK59EvPdq-GQK4-IP&ehbc=2E312F"></iframe>

    <br>
    <footer>
      <img src="../img/logo.png" alt="Logo Unescite" id="logoIle" >

      <div id="Credits">
          <h3 >&copy; Copyright 2022, <a href="https://www.linkedin.com/in/berachem-markria/">Berachem MARKRIA </a> & <a href="https://www.linkedin.com/in/tristan-martinez-8459a1229/"> Tristan Martinez</a> </h3> 
      </div>
      
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