<?php
$page = 'Admin';
include('../php/header.inc.php');

?>
        <br>
        <br>
        <br>

      <div class="description" >
          <p style="color:white">
          Si vous êtes ici, c'est que vous êtes un <b style='color: #ea5c0d;'> administrateur </b>.
          </p>
      </div>



    <p class="presentation">
        Vous pourrez <b style='color: #f7af3e;'> modifier des éléments </b> et <b style='color: #f7af3e;'> gérer la base de données</b>. <img src="../img/bdd.png"  width="45" height="45" alt="BDD">
      
        <br>
        <br>

        <form>
          <div class="form-group" action="../php/adminlogin.php" method="POST">
            <label for="email">Identifiant</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre identifiant">
            <small id="emailHelp" class="form-text text-muted">Entrez les 6 chiffres...</small>
          </div>
          <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Rester connecté</label>
          </div>
          <button type="submit" class="btn btn-primary">Connexion</button>
      </form>

    </p>



<?php

include('../php/footer.inc.php');

?>