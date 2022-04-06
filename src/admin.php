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
      Vous pourrez <b style='color: #f7af3e;'> modifier des éléments </b> et gérer la base de données.
    <br>
      
    <br>
    <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Identifiant</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre identifiant">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mot de passe</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Rester connecté</label>
        </div>
        <button type="submit" class="btn btn-primary">Connexion</button>
    </form>


    <?php

include('../php/footer.inc.php');

?>