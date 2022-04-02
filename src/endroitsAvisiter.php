<?php
$page = 'Endroits à visiter';
include('../php/header.inc.php');

?>

    <br>
    <br>
    <br>

      <div class="description" >
          <p style="color:white">
          <?php echo $Avisiter_description[$langue] ?>
          </p>
      </div>


    <!-- Spot 1 -->
    <div class='card bg-dark' style='max-width: 1000px;'>
      <div class='row no-gutters'>
        <!-- Caroussel Images -->
        <div id='marchefleurs' class='carousel slide col-sm-5' data-ride='carousel'>
 
          <div class='carousel-inner'>
            <div class='carousel-item active'>
              <img class='d-block w-100' src='../img/marchefleurs.png' alt='Marché aux fleurs'>
            </div>
            <div class='carousel-item'>
              <img class='d-block w-100' src='../img/map_marchefleur.png' alt='Map Marché aux fleurs'>
            </div>
          </div>

        </div>

        <!-- Textes Spot -->
          <div class='col-sm-7'>
              <div class='card-body'>
                  <h5 class='card-title'>Le marché aux fleurs</h5>
                  <p class='card-text tovisit'>
                    
                    <i class='fas fa-map-marker-alt' style='color: #f7af3e;'></i> Place Louis Lépine - Quai de la Corse - 75004 Paris
                    <br>
                    <i class='fas fa-clock' style='color: #f7af3e;'></i>  <?php echo $Avisiter_marchefleurs_time[$langue] ?>
                    <br>
                    <i class='fas fa-comment-dots' style='color: #f7af3e;'></i> 
                     <?php echo $Avisiter_marchefleurs_phrase[$langue] ?>
                  </p>
              </div> 
          </div>
      </div>
    </div>

<br>

        <!-- Spot 2 -->
    <div class='card bg-dark' style='max-width: 1000px;'>
      <div class='row no-gutters'>
        <!-- Caroussel Images -->
        <div id='carouselExampleIndicators' class='carousel slide col-sm-5' data-ride='carousel'>
  
          <div class='carousel-inner'>
            <div class='carousel-item active'>
              <img class='d-block w-100' src='../img/crypte.png' alt='Crypte'>
            </div>
            <div class='carousel-item'>
              <img class='d-block w-100' src='../img/map_crypte.png' alt='Map Crypte'>
            </div>
          </div>

        </div>
        <!-- Textes Spot -->
          <div class='col-sm-7'>
              <div class='card-body'>
                  <h5 class='card-title'>Crypte de Notre-Dame</h5>
                  <p class='card-text tovisit'>
                    
                    <i class='fas fa-map-marker-alt' style='color: #f7af3e;'></i>  <?php echo $Avisiter_crypte_lieu[$langue] ?>
                    <br>
                    <i class='fas fa-clock' style='color: #f7af3e;'></i>  <?php echo $Avisiter_crypte_time[$langue] ?>
                    <br>
                    <i class='fas fa-comment-dots' style='color: #f7af3e;'></i>  <?php echo $Avisiter_crypte_phrase[$langue] ?>
                  </p>
              </div> 
          </div>
      </div>
    </div>

    <br>
        <!-- Spot 3 -->
        <div class='card bg-dark' style='max-width: 1000px;'>
          <div class='row no-gutters'>
            <!-- Caroussel Images -->
            <div id='carouselExampleIndicators' class='carousel slide col-sm-5' data-ride='carousel'>
     
              <div class='carousel-inner'>
                <div class='carousel-item active'>
                  <img class='d-block w-100' src='../img/Square-Vert.png' alt='Square Vert-Galant'>
                </div>
                <div class='carousel-item'>
                  <img class='d-block w-100' src='../img/map_square.png' alt='Map Square Vert-Galant'>
                </div>
              </div>
   
            </div>
            
            <!-- Textes Spot -->
              <div class='col-sm-7'>
                  <div class='card-body'>
                      <h5 class='card-title'>Square du Vert-Galant</h5>
                      <p class='card-text tovisit'>
                        
                        <i class='fas fa-map-marker-alt' style='color: #f7af3e;'></i> 15 Pl. du Pont Neuf, 75001 Paris
                        <br>
                        <i class='fas fa-clock' style='color: #f7af3e;'></i>  <?php echo $Avisiter_Square_time[$langue] ?>
                        <br>
                        <i class='fas fa-comment-dots' style='color: #f7af3e;'></i>  <?php echo $Avisiter_Square_phrase[$langue] ?>
                      </p>
                  </div> 
              </div>
          </div>
        </div>       
        
        <br>

        <!-- Spot 4 -->
        <div class='card bg-dark' style='max-width: 1000px;'>
          <div class='row no-gutters'>
            <!-- Caroussel Images -->
            <div id='carouselExampleIndicators' class='carousel slide col-sm-5' data-ride='carousel'>
      
              <div class='carousel-inner'>
                <div class='carousel-item active'>
                  <img class='d-block w-100' src='../img/faussemaison.jfif' alt='Fausse Maison'>
                </div>
                <div class='carousel-item'>
                  <img class='d-block w-100' src='../img/map_faussemaison.png' alt='Map Fausse Maison'>
                </div>
              </div>
      
            </div>

            <!-- Textes Spot -->
              <div class='col-sm-7'>
                  <div class='card-body'>
                      <h5 class='card-title'> <?php echo $Avisiter_maison_title[$langue] ?> </h5>
                      <p class='card-text tovisit'>
                        
                        <i class='fas fa-map-marker-alt' style='color: #f7af3e;'></i> 1-3 rue des Ursins, 75004
                        <br>
                        <i class='fas fa-clock' style='color: #f7af3e;'></i>  <?php echo $Avisiter_maison_time[$langue] ?>
                        <br>
                        <i class='fas fa-comment-dots' style='color: #f7af3e;'></i> 
                         <?php echo $Avisiter_maison_phrase[$langue] ?>
                      </p>
                  </div> 
              </div>
          </div>
        </div>
 

<?php
include('../php/footer.inc.php');

?>