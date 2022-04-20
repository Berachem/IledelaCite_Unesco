<?php
$page = 'Parcours';
include('../php/header.inc.php');

?>
        <br>
        <br>
        <br>

      <div class="description" >
          <p style="color:white">
          Nous vous proposons <b style='color: #ea5c0d;'>deux parcours </b> pour votre visite qui vous permettront de passer devant des <b style='color: #f7af3e;'>lieux magnifiques et iconiques</b>  !
          
          <br>
          <br>
      Vous pourrez réaliser ces parcours de <b style='color: #f7af3e;'> durées différentes</b>. Profitez bien et surtout soyez curieux !  <img src="../img/question.png"  width="45" height="45" alt="parcours">

    <br>

    <p>
      <a class="btn btn-primary btn-lg" id ="Parcours1" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1 collapse2">
      <img src="../img/promenade.png"  width="45" height="45" alt="premonade"> 
        Parcours Promenade
      </a>
      <a class="btn btn-primary btn-lg" id ="Parcours2" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2 collapse1">
      <img src="../img/marathon.png"  width="45" height="45" alt="marathon"> 
      Parcours Marathon
      </a>
  </p>
  <div class="collapse" id="collapse1">
    <div class="card card-body bg-dark" style="color: white;">
      Prévoyez une journée entière...
      <br>
      <br>
    <iframe id= "Rallye_map" width="100%" height="600px" frameborder="0" allowfullscreen src="https://www.google.com/maps/d/u/1/embed?mid=1SgylBzEgvyETxx28E5v391zrw_n1Hsj7&ehbc=2E312F&z=15"></iframe>
    </div>
  </div>
  <div class="collapse" id="collapse2">
    <div class="card card-body bg-dark" style="color: white;">
      Prévoyez 2 à 4 heures...
      <br>
      <br>
    <iframe id= "Rallye_map" width="100%" height="600px" frameborder="0" allowfullscreen src="https://www.google.com/maps/d/u/0/embed?mid=1vSrjAa3AV4QliLCg__vC7r_eriF9yZ2I&ehbc=2E312F&z=16"></iframe>

    </div>
  </div>

  </p>
    </div>
    <br>

      



    <br>


    <?php

include('../php/footer.inc.php');

?>