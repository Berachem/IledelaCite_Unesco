<?php
$page = 'gallerie';
include('../php/header.inc.php');




echo "
 <!-- Barre Orange et Titre page  -->
    <div id='TitrePage'>
      <img src='../img/titre.png' alt=''>
      <h1>Notre Dame</h1>
    </div>
  ";
    //try to connect to your database.
    $conn = mysql_connect(...);
    
    //handle errors if connection failed.
    if (! $conn){
        echo '<div class="alert alert-warning" role="alert">
        MySQL bug...
      </div>';
    }   
    
    // (try to) run your query.
    $resultset = mysql_query('SELECT photo, description from ImagesUnesco');

    while($row = mysql_fetch_assoc($resultset)){
        //do something with the contents of $row
        echo "SALUT";
    }




echo "
    <footer>
      <img src='../img/logo.png' alt='Logo Unescite' id='logoIle' >

      <!-- Copyright  -->
      <div id='Credits'>
        <h3 >&copy; Copyright 2022, <a href='https://www.linkedin.com/in/berachem-markria/'>Berachem MARKRIA </a> & <a href='https://www.linkedin.com/in/tristan-martinez-8459a1229/'> Tristan Martinez</a> </h3> 
      </div>
        
      <!-- Réseaux Sociaux  -->
      <div id='LogosFooter'></div>
        <div class='footer-social-icons'>
          <ul class='social-icons'>
            <li><a href='https://www.facebook.com/profile.php?id=100075301764425' class='social-icon'> <i class='fa fa-facebook'></i></a></li>
            <li><a href='https://twitter.com/IleCiteParis' class='social-icon'> <i class='fa fa-twitter'></i></a></li>
            <li><a href='' class='social-icon'> <i class='fa fa-instagram'></i></a></li>
            <li><a href='https://fr.unesco.org/' class='social-icon'> <i class='fas fa-landmark'></i></a></li>
            <li><a href='https://github.com/Berachem' class='social-icon'> <i class='fa fa-github'></i></a></li>
          </ul>
        </div>
    </footer>
  </body>
</html>";

?>