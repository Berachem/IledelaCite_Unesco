<?php 
echo isset($_POST["email"]);
echo $_POST["message"];
echo $_POST["name"];

if(isset($_POST["submit"])){
    $to = "berachem.markria@gmail.com"; // this is your Email address
    $from = $_POST["email"]; // this is the sender's Email address
    $first_name = $_POST["name"];
    $subject = "Message reçu";
    $message = $first_name  . " Vous avez envoyé :" . "\n\n" . $_POST["message"];
    $message2 = "Voici une copie de votre message " . $first_name . "\n\n" . $_POST["message"];

    $headers = "De:" . $from;
    $headers2 = "De:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,'Ile de la Cité - Médiation culturelle et numérique',$message2,$headers2); // sends a copy of the message to the sender
    //echo "Mail envoyé. Merci " . $first_name . ", nous vous contacterons dans peu de temps :)";
    header('Location: ../fr/messagerecu.html');
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
    else{
        echo "Erreur : le message n'a pas pu être envoyé :/";
    }
?>