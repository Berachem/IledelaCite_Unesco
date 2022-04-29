<?php
$page = 'Restaurants';
include('../php/header.inc.php');

?>
        <br>
        <br>
        <br>

      <div class="description" >
          <p style="color:white">
          <?php echo $restaurants_title[$langue] ?>
          </p>
      </div>



    <p class="presentation">
    <?php echo $restaurants_desc[$langue] ?>
     </p> 
     <br> 
      <br>
<!--
      <u> Prix moyen du repas par personne :</u>
      <b  style="color:rgba(2,136,209);"> plus de 50€</b> 
      <b style="color:green;"> moins de 50€</b> 
      <b style="color:rgba(255,234,0);"> moins de 25€</b> 
   
--> 
    
      
    <iframe id= "Rallye_map" width="100%" height="600px" frameborder="0" allowfullscreen src="https://www.google.com/maps/d/embed?mid=1FwE6TcR3ReSNk5tZK59EvPdq-GQK4-IP&ehbc=2E312F"></iframe>

    <br>


    <?php

include('../php/footer.inc.php');

?>