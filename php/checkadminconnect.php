<?php

//include("connexionBDD.inc.php");

if (isset($_GET["id"]) && isset($_GET["password"])){
    if ($_GET["id"]==0 && $_GET["password"]==0){ // Si les codes sont bons.
        header("Refresh:0; url=../src/admin.php");
    }else{
        header("Refresh:0; url=../src/admin_connect.php?error=1");
    }
    

}


?>