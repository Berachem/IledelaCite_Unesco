<?php
$page = 'Hotels';
include('../php/header.inc.php');
?>

    <br>
    <br>
    <br>

      <div class="description" >
          <p style="color:white">
          <?php echo $Hotel_description[$langue] ?>
          </p>
      </div>
<?php
$txt_file = fopen('../data_hotels.csv','r');
$a = 1;
$line = fgets($txt_file);
while ($line = fgets($txt_file)) {
 $data = explode(",",$line);

 echo '<section data-aos="fade-up">';
 echo '
      <div class="card bg-dark text-white hotel-card" >
        <img class="card-img-top" src='.$data[2].' alt="Card image">
        <div class="card-img-body" style="margin-left:15px; margin-top:10px;margin-bottom:10px">
          <h5 class="card-title">'.str_replace('"', '', $data[0]).'</h5>
          <p class="card-text" > ';
          echo "<i class='fas fa-map-marker-alt' style='color: #f7af3e;'></i> ";
          echo str_replace('"', '', $data[3]);
          echo "<br>";
         
          $prix = str_replace('€ ', '', $data[6]);
          $prix = str_replace('"', '', $prix);
          
          if ($langue==0){
            echo $prix;
            echo "<i class='fas fa-euro-sign' style='color: #f7af3e;'></i> ";
            echo"  /  <i class='fas fa-moon' style='color: #003366;'></i> ";
          }else if ($langue==1){
            echo round(intval($prix)*1.072,0);
            echo " <i class='fas fa-dollar-sign' style='color: #f7af3e;'></i> ";
            echo"  /  <i class='fas fa-moon' style='color: #003366;'></i> ";
          }else if ($langue==2){
            echo round(intval($prix)*3.94,0);
            echo " <b style='color: #f7af3e;'>AED</b> ";
            echo"  /  <i class='fas fa-moon' style='color: #003366;'></i> ";
          }else if ($langue==3){
            echo round(intval($prix)*140.25,0);
            echo " <i class='fas fa-yen-sign' style='color: #f7af3e;'></i> ";
            echo"  /  <i class='fas fa-moon' style='color: #003366;'></i> ";
          }

          echo "<br>";
          echo '<img src="../img/clients.png"  width="28" height="28" alt="clients" class="rota"> ';
          echo intval(str_replace('"', '', $data[5]))*4;
          echo' / 20  ';

          echo"
          <a style='margin-left:20px' href=".str_replace('"', '', $data[1])."><button type='button' class='btn btn-danger ' ><i class='fas fa-calendar'></i> "; echo $info_reserve[$langue]; echo"</button></a>
        </div>
      </div>";
 echo '
 </section>
 <br>
 <br>
 <br>
 <br>
 <br>';

 $a++;
}
include('../php/footer.inc.php');

?>