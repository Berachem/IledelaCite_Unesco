<?php

//include("connexionBDD.inc.php");

if (isset($_GET["id"]) && isset($_GET["password"])){
    if ($_GET["id"]==123456 && $_GET["password"]=='admin'){ // Si les codes sont bons.
        header("Refresh:0; url=../src/admin.php");
    }else{
        header("Refresh:0; url=../src/admin_connect.php?error=1");
    }
    

}


?>