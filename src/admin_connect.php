<?php
$page = 'Admin';
include('../php/header.inc.php');

?>

<style>
body{
    background-image: url("https://wallpaperaccess.com/full/1427184.jpg") !important;

}

</style>

        <br>
        <br>
        <br>

      <div class="description" >
          <p style="color:white">
          Si vous êtes ici, c'est que vous êtes un <b style='color: #ea5c0d;'> administrateur </b>
          ainsi vous pourrez <b style='color: #f7af3e;'> modifier des éléments </b> et <b style='color: #f7af3e;'> gérer la base de données</b>. <img src="../img/bdd.png"  width="45" height="45" alt="BDD">
  
        </p>
      </div>

        <br>
        <br>

        <div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <!-- Form -->
            <form class="form-example" action="../php/checkadminconnect.php" method="GET">
                <h1>Connectez vous...</h1>
                <!-- Input f-ields -->
                <div class="form-group">
                    <label for="if">idenifiant:</label>
                    <input type="text" class="form-control username" id="username" placeholder="Identifiant..." name="id">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe:</label>
                    <input type="password" class="form-control password" id="password" placeholder="Mot de passe..." name="password">
                </div>
                <button type="submit" class="btn btn-warning btn-customized">Connexion</button>
            </form>
            <!-- Form end -->
            <br>
<?php
    if (isset($_GET["error"]) && $_GET["error"]==1){
        echo '
        <div class="alert alert-danger" role="alert">
            Erreur de connexion :/
        </div>';
    }

?>

        </div>
    </div>
</div>





<?php

include('../php/footer.inc.php');

?>