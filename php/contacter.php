<?php 
if(isset($_POST['submit'])){
    $to = "berachem.markria@gmail.com"; // this is your Email address
    $from = $_POST['emailAddress']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $subject = "Message reçu";
    $subject2 = "Copie de votre envoie";
    $message = $first_name  . " Vous avez envoyé :" . "\n\n" . $_POST['message'];
    $message2 = "Voici une copie de votre message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "De:" . $from;
    $headers2 = "De:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail envoyé. Merci " . $first_name . ", nous vous contacterons dans peu de temps :)";
    header('Location: https://mail.google.com/mail/u/1/?ogbl#inbox');
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>