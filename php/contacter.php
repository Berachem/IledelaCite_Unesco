<?php 

if(!empty($_POST["email"]) && !empty($_POST["message"])){

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

    
    $error = "email or/and name";
}
    header('Location: ../fr/messagerecu.html');
    

?>