<?php 

include('connexionBDD.inc.php');

if(isset($_POST["email"]) && isset($_POST["message"])){

    $entete = 'Content-type: text/html; charset=utf-8' . "\r\n";
    $entete .= 'From: ' . $_POST['email'] . "\r\n";

    $message = '
    <h1>Message envoyé depuis le site de l Île de la Cité</h1>
    <p>
        <b>Nom : </b>' . $_POST['nom'] . '<br>
        <b>Email : </b>' . $_POST['email'] . '<br>
        <b>Message : </b>' . $_POST['message'] . '
    </p>';

    $retour = mail('berachem.markria@gmail.com', 'Ile de la Cité - Médiation culturelle et numérique', $message, $entete);
    $retour = mail('tristan.martinez@sfr.fr', 'Ile de la Cité - Médiation culturelle et numérique', $message, $entete);

    $sql = "INSERT INTO messages (nom_complet,email,contenu) VALUES (?,?,?)";
    $sql= $conn->prepare($sql);
    $sql->execute([$_POST["nom"], $_POST["email"], $_POST["message"]]);


    header('Location: ../src/a_propos.php?lang='.$_GET["lang"].'&messagesent=1#sent');


}
    
    

?>