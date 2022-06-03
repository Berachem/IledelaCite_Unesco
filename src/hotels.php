<?php
$page = 'Hotels';
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
<?php
$txt_file = fopen('../data_hotels.csv','r');
$a = 1;
$line = fgets($txt_file);
while ($line = fgets($txt_file)) {
 $data = explode(",",$line);

 echo '<section data-aos="fade-up">';
print_r($data);

 echo '
      <div class="card bg-dark text-white">
        <img class="card-img" src='.$data[2].' alt="Card image">
        <div class="card-img-overlay">
          <h5 class="card-title">'.str_replace('"', '', $data[0]).'</h5>
          <p class="card-text"> ';
          echo "<i class='fas fa-map-marker-alt' style='color: #f7af3e;'></i> ";
          echo str_replace('"', '', $data[3]);
          echo "<br>";
          echo "<i class='fas fa-euro-sign' style='color: #f7af3e;'></i> ";
          $prix = str_replace('€ ', '', $data[6]);
          $prix = str_replace('"', '', $prix);
          echo $prix;
          echo"  /  <i class='fas fa-moon' style='color: #f7af3e;'></i> ";
          echo "<br>";
          echo "<i class='fas fa-star' style='color: #f7af3e;'></i> ";
          echo str_replace('"', '', $data[5]);
          echo "<br>";
          echo '</p>;
        </div>
      </div>';
 echo '
 </section>
 
 <br>';

 $a++;
}
include('../php/footer.inc.php');

?>