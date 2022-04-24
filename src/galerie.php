<?php
$page = 'Galerie';
include('../php/header.inc.php');
include('../php/connexionBDD.inc.php');
?>


<img class="img-fluid" src="../img/galerie.jpg" alt="" style="width: 100%; top:0">
        
<svg class="arrows">
              <path class="a1" d="M0 0 L30 32 L60 0"></path>
              <path class="a2" d="M0 20 L30 52 L60 20"></path>
              <path class="a3" d="M0 40 L30 72 L60 40"></path>
            </svg>

<!-- Barre Orange et Titre page   -->

<div class="description" >
  <p style="color:white">
  
  <?php echo $Gallery_title[$langue] ?>

  </p>
</div>

<section>

  <div class="container" id="galerie">
        <div class="row d-flex flex-wrap align-items-center" data-toggle="modal" data-target="#lightbox" >
          <div class="col-12 col-md-6 col-lg-3">
            <img src="../img/galerie/1.jpg" data-target="#indicators" data-slide-to="0" alt="" data-toggle="tooltip" data-placement="top" title="The Quai Saint-Michel and Notre-Dame, Maximilien Luce, 1901"/> 
          </div>
          <div class="col-12 col-md-6 col-lg-3">
              <img src="../img/galerie/2.jpg" data-target="#indicators" data-slide-to="1" alt="" data-toggle="tooltip" data-placement="top" title="Frank Boggs, Quai à la Seinie, Paris, au Clair de Lune, 1898"/>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <img src="../img/galerie/3.jpg" data-target="#indicators" data-slide-to="2"  alt="" data-toggle="tooltip" data-placement="top" title="Démolition de l'église Saint-Barthelemy en 1791"/>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
              <img src="../img/galerie/4.jpg" data-target="#indicators" data-slide-to="3" alt="" data-toggle="tooltip" data-placement="top" title="Le palace est le Palais de la Cité avec la Sainte Chapelle" />
          </div>
          <div class="col-12 col-md-6 col-lg-3">
              <img src="../img/galerie/5.jpg" data-target="#indicators" data-slide-to="4" alt="" data-toggle="tooltip" data-placement="top" title="Le Sacre de Napoléon, tableau de David, 1805-1808" />
          </div>
          <div class="col-12 col-md-6 col-lg-3">
              <img src="../img/galerie/6.jpg" data-target="#indicators" data-slide-to="5" alt="" data-toggle="tooltip" data-placement="top" title="Les Très Riches Heures du duc de Berry, 1411-1416" />
          </div>
          <div class="col-12 col-md-6 col-lg-3">
              <img src="../img/galerie/7.jpg" data-target="#indicators" data-slide-to="6" alt="" data-toggle="tooltip" data-placement="top" title="Pierre-Denis Martin, Louis XV sortant du lit de justice tenu au parlement en septembre 1715." />
          </div>
          <div class="col-12 col-md-6 col-lg-3">
              <img src="../img/galerie/8.jpg" data-target="#indicators" data-slide-to="7" alt="" data-toggle="tooltip" data-placement="top" title="Plan dit de Bâle de l'île de la Cité en 1550" />
          </div>
          
          <?php
          $count = 8;
                $statement = $conn->prepare("SELECT * from galerie");
                $statement->execute(array());
                while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                    $img = $row['image'];
                    $desc = $row['description'];

                    echo '<div class="col-12 col-md-6 col-lg-3">';

                    echo '<img src="'.$img.'" data-target="#indicators" data-slide-to="'.$count.'"  alt="" data-toggle="tooltip" data-placement="top" title="'.str_replace("'", ' ', $desc).'"  />';

                    echo '</div>';

                    $count++;
                }
                ?>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="lightbox" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close text-right p-2" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              <div id="indicators" class="carousel slide" data-interval="false">
          <ol class="carousel-indicators">
            <li data-target="#indicators" data-slide-to="0" class="active"></li>
            <li data-target="#indicators" data-slide-to="1"></li>
            <li data-target="#indicators" data-slide-to="2"></li>
            <li data-target="#indicators" data-slide-to="3"></li>
            <li data-target="#indicators" data-slide-to="4"></li>
            <li data-target="#indicators" data-slide-to="5"></li>
            <li data-target="#indicators" data-slide-to="6"></li>
            <li data-target="#indicators" data-slide-to="7"></li>
            <?php
              $count = 8;
                  $statement = $conn->prepare("SELECT * from galerie");
                  $statement->execute(array());
                  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                      $img = $row['image'];
                      $desc = $row['description'];

                      echo '<li data-target="#indicators" data-slide-to="'.$count.'"></li>';

                      $count++;
                }
                ?>
          </ol>
          <div class="carousel-inner">
            
            <div class="carousel-item active">
              
              <img class="d-block w-100" src="../img/galerie/1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../img/galerie/2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../img/galerie/3.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../img/galerie/4.jpg" alt="Fourth slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../img/galerie/5.jpg" alt="5 slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../img/galerie/6.jpg" alt="6 slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../img/galerie/7.jpg" alt="6 slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../img/galerie/8.jpg" alt="6 slide">
            </div>

            <?php
                $statement = $conn->prepare("SELECT * from galerie");
                $statement->execute(array());
                while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                    $img = $row['image'];
                    $desc = $row['description'];

                    echo '<div class="carousel-item">';

                    echo '<img src="'.$img.'" class="d-block w-100"  alt=" slide" />';

                    echo '</div>';
                    
                }
                ?>
          </div>
          <a class="carousel-control-prev" href="#indicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#indicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

            </div>
          </div>
        </div>
</div>

</section>
<?php

include('../php/footer.inc.php');

?>

