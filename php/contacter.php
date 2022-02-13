<?php 

if(isset($_POST["submit"])){
    if (!empty($_POST["email"]) && !empty($_POST["name"]) && !empty($_POST["message"]) ){
    $to = "berachem.markria@gmail.com"; // this is your Email address
    $from = $_POST["email"]; // this is the sender's Email address
    $first_name = $_POST["name"];
    $subject = "Message reçu";
    $message = $first_name  . " Vous avez envoyé :" . "\n\n" . $_POST["message"];
    $message2 = "Voici une copie de votre message " . $first_name . "\n\n" . $_POST["message"];

    $headers = "De:" . $from;
    $headers2 = "De:" . $to;
    $this_mail = mail($to,$subject,$message,$headers);
    mail($from,'Ile de la Cité - Médiation culturelle et numérique',$message2,$headers2); // sends a copy of the message to the sender
    //echo "Mail envoyé. Merci " . $first_name . ", nous vous contacterons dans peu de temps :)";
    if ($this_mail) header('Location: ../fr/messagerecu.html');
    else {
    header('Location: ../fr/a_propos.php?error=1');
    }
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
    else {
    
    $error = "email or/and name";
    header('Location: ../fr/a_propos.php?error=2');
    }
}
?>