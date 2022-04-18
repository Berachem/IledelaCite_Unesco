<?php

//include("connexionBDD.inc.php");
session_start();

$_SESSION["id"] = $_GET["id"];
$_SESSION["password"] = $_GET["password"];


    if ($_SESSION["id"]=='0' && $_SESSION["password"]=='0'){ // Si les codes sont bons.


        header("Location: ../src/admin.php");

    }else{
        header("Location: ../src/admin_connect.php?error=1");
    }
    
?>