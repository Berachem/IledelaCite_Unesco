<?php

//include("connexionBDD.inc.php");
session_start();



    if ($_POST["id"]=='Unesco' && $_POST["password"]=='Unesco2003'){ // Si les codes sont bons.
        $_SESSION["id"] = $_POST["id"];
        $_SESSION["password"] = $_POST["password"];
        
        header("Location: ../src/admin.php");

    }else{
        header("Location: ../src/admin_connect.php?error=1");
    }
    
?>