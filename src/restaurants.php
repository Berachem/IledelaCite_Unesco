<?php
$page = 'Restaurants';
include('../php/header.inc.php');

?>
        <br>
        <br>
        <br>

      <div class="description" >
          <p style="color:white">
          Sur l'Île de la Cité et même autour, vous trouverez de <b style='color: #ea5c0d;'> nombreux endroits pour vous restaurer </b> !
          </p>
      </div>



    <p class="presentation">
      Chaque couverts sur cette carte représente un point de restauration. Vous y trouverez des restaurants de haute gastronomie française, des restaurants huppés, des fast-food.
      <br> 
      <u> Prix moyen du repas par personne :</u>
      <b  style="color:rgba(2,136,209);"> plus de 50€</b> 
      <b style="color:green;"> moins de 50€</b> 
      <b style="color:rgba(255,234,0);"> moins de 25€</b> 
    </p>
    <br>
      
    <iframe id= "Rallye_map" width="100%" height="600px" frameborder="0" allowfullscreen src="https://www.google.com/maps/d/embed?mid=1FwE6TcR3ReSNk5tZK59EvPdq-GQK4-IP&ehbc=2E312F"></iframe>

    <br>


    <?php

include('../php/footer.inc.php');

?>