<?php 

include('connexionBDD.inc.php');

if(isset($_GET["link"]) && isset($_GET["desc"])){

    $sql = "INSERT INTO galerie (image,description) VALUES (?,?)";
    $sql= $conn->prepare($sql);
    $sql->execute([$_GET["link"], $_GET["desc"]]);


    header('Location: ../src/admin.php?added=1');


}
    
    

?>