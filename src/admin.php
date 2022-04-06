<?php
$page = 'Admin';
include('../php/header.inc.php');

?>
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
            <form class="form-example" action="" method="post">
                <h1>Connectez vous...</h1>
                <!-- Input f-ields -->
                <div class="form-group">
                    <label for="if">idenifiant:</label>
                    <input type="text" class="form-control username" id="username" placeholder="identifiant..." name="username">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe:</label>
                    <input type="password" class="form-control password" id="password" placeholder="motdepasse..." name="password">
                </div>
                <button type="submit" class="btn btn-warning btn-customized">Connexion</button>
            </form>
            <!-- Form end -->
        </div>
    </div>
</div>





<?php

include('../php/footer.inc.php');

?>