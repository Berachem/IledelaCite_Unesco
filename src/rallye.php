<?php
$page = 'Rallye';
include('../php/header.inc.php');

?>
    
    <div id="TitrePage">
      <img src="../img/titre.png" alt="">
      <h1>Endroits à visiter</h1>
    </div>
    <div class="description">
      <p>
        L'Île de la Cité, outre le fait que ce patrimoine française regorge de monuments iconiques, on peut y trouver beaucoup d'emplacements cachés et magnifiques.
      </p>
    </div>

    <p class="presentation">
      Rendez-vous là où se trouvent les points <i class="fas fa-map-marker-alt" style="color: #ea5c0d;"></i> sur la carte et admirez la beauté ! :)
    </p>
    <br>
    <br>
      
    <iframe id= "Rallye_map" width="100%" height="600px" frameborder="0" allowfullscreen src="http://u.osmfr.org/m/705947/?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=false&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=false&onLoadPanel=undefined&captionBar=false"></iframe>

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
      </div>   
    </footer>
  </body>
</html>