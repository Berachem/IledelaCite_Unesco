<?php
$page = 'Admin';
include('../php/header.inc.php');
session_start();

if (!isset($_SESSION["id"]) || !isset($_SESSION["password"]) || $_SESSION["id"]!='0' || $_SESSION["password"]!='0'){ // Si les codes sont bons.

  header("Location: ../src/admin_connect.php?error=1");
}
include('../php/connexionBDD.inc.php');


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

            <div class="alert alert-success" role="alert"> <img src="../img/succes.png"  width="25" height="25" alt="succès">
            Vous êtes connecté...
            </div>

    <div class='description'>
        <p style="color:white" >
            Tous les messages reçus <img src="../img/message.png"  width="45" height="45" alt="contact">
        </p>
    </div>

<section>
        <div class="container">
          <h2>Liste</h2>        
          <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th>Nom complet</th>
                <th>Email</th>
                <th>Message</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                $statement = $conn->prepare("SELECT * from messages");
                $statement->execute(array());
                while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                    $nom = $row['nom_complet'];
                    $email = $row['email'];
                    $contenu = $row['contenu'];

                    echo "<td>".$nom ."</td>";
                    echo "<td>". $email ."</td>";
                    echo "<td> ".$contenu ."</td>";
                    echo '</tr>';
                }
                ?>
            </tbody>
          </table>
        </div>
</section>

<br>
<br>


<div class='description'>
        <p style="color:white" >
            Tous les tableaux de la galerie <img src="../img/tableau.png"  width="45" height="45" alt="contact">
        </p>
    </div>

<section>
        <div class="container">
          <h2>Liste</h2>        
          <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th>Lien Tableau</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                $statement = $conn->prepare("SELECT * from galerie");
                $statement->execute(array());
                while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                    $img = $row['image'];
                    $desc = $row['description'];

                    echo "<td>".$img ."</td>";
                    echo "<td>". $desc ."</td>";
                    echo '</tr>';
                }
                ?>
            </tbody>
          </table>
        </div>
</section>


<br>
<br>


<div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
        <?php
        if (isset($_GET["added"])){
          echo '<div class="alert alert-success" role="alert" id="sent"> <img src="../img/succes.png"  width="25" height="25" alt="succès">
          Tableau ajouté avec succès :)
        </div>';
        }

        ?>

            <!-- Form -->
            <form class="form-example" action="../php/ajouterTableau.php" method="GET">
                
                <!-- Input f-ields -->
                <div class="form-group">
                <h1>Rajoutez un tableau</h1>
                    <label for="if">lien du tableau</label>
                    <input type="text" class="form-control username" id="username" placeholder="https://LienDeLimage.quelquechose" name="link">
                </div>
                <div class="form-group">
                    <label for="password">Description</label>
                    <input type="text" class="form-control" id="password" placeholder="La Joconde, Léonard de Vinci..." name="desc">
                </div>
                <button type="submit" class="btn btn-info btn-customized">Rajouter</button>
            </form>
            <!-- Form end -->
            <br>

        </div>


<br>





        </div>
    </div>
</div>





<?php

include('../php/footer.inc.php');

?>