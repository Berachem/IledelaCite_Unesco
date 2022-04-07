<?php
$page = 'Admin';
include('../php/header.inc.php');
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
            Tous les messages reçus<img src="../img/message.png"  width="45" height="45" alt="contact">
        </p>
    </div>

    <div class="container">
  <h2>Liste</h2>        
  <table class="table table-bordered">
    <thead>
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



<br>





        </div>
    </div>
</div>





<?php

include('../php/footer.inc.php');

?>