<?php
$page = 'Restaurants';
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


    <?php

include('../php/footer.inc.php');

?>