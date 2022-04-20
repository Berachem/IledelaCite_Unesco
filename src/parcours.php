<?php
$page = 'Parcours';
include('../php/header.inc.php');

?>
        <br>
        <br>
        <br>

      <div class="description" >
          <p style="color:white">
          Nous vous proposons un <b style='color: #ea5c0d;'> parcours </b> pour votre visite qui vous permettra de passer devant des <b style='color: #f7af3e;'>lieux magnifiques et iconiques</b>  !
          
          <br>
          <br>
      Vous pourrez réaliser ce parcours en <b style='color: #f7af3e;'> 2 heures </b> ou en <b style='color: #f7af3e;'>une journée entière</b> si vous êtes curieux. <img src="../img/question.png"  width="45" height="45" alt="parcours">
      </p>
    </div>
    <br>

    <p>
      <a class="btn btn-primary" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1">
        PArcours Promenade
      </a>
      <a class="btn btn-primary" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
        Parcours Marathon
      </a>
  </p>
  <div class="collapse" id="collapse1">
    <div class="card card-body">
      <iframe id= "Rallye_map" width="100%" height="600px" frameborder="0" allowfullscreen src="https://www.google.com/maps/d/u/0/embed?mid=1vSrjAa3AV4QliLCg__vC7r_eriF9yZ2I&ehbc=2E312F"></iframe>
    </div>
  </div>
  <div class="collapse" id="collapse2">
    <div class="card card-body">
     <iframe id= "Rallye_map" width="100%" height="600px" frameborder="0" allowfullscreen src="https://www.google.com/maps/d/u/0/edit?mid=1SgylBzEgvyETxx28E5v391zrw_n1Hsj7&usp=sharing"></iframe>
    </div>
  </div>


    <br>

      



    <br>


    <?php

include('../php/footer.inc.php');

?>