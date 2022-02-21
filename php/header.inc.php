<?php 


// Il faudrait définir des arrays de 2 éléments : 
// 0 = français
// 1 = anglais

$langue = 0;
	if (isset($_GET["lang"])) {
		switch ($_GET["lang"]) {
			case 0:
				$langue = 0; break;
			case 1:
				$langue = 1; break;
		}
	}

/* Barre de Navigation */

$nav_home = array('Accueil', "Home");
$nav_discover = array('Découvrir', "Discover");
$nav_discover_tovisit = array('Endroits à visiter', "Spots to visit");
$nav_discover_near = array('A deux pas', "Near...");
$nav_about = array('A propos', "About us");

echo 
'<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Icon onglet-->
    <link rel="icon" href="../img/logo_page.png" />
    
    <!-- JS -->
    <script src="https://kit.fontawesome.com/061a20ff24.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../js/script.js" defer></script>

    <!-- CSS -->
    ';

    $decouvrirCSS = array('endroitsAvisiter', 'informations', 'lesponts','notredame','palaisdejustice');
    if ($page =='index'){
    echo '<link rel="stylesheet" href="../css/style.css">';
    }elseif (in_array($page,$decouvrirCSS,TRUE)) {
        echo '<link rel="stylesheet" href="../css/Decouvrir.css">';
    } else{
        echo '<link rel="stylesheet" href="../css/a_propos.css">';
    }
    
echo '
    <title>Ile de la Cité - Paris</title>
  </head>
  <body>
    <header>
      <!-- logo MCN -->
      <nav class="navbar sticky-top bg-dark" style="background-color: #333333;">
        <div class="brand-title">
          <a href="#"><img src="../img/mcn.png" 
          alt="logoMCN" 
          width="165"
          height="50"></a>
        </div>
        <a href="#" class="toggle-button" style="top: 25px;">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>

        <!-- Barre de navigation -->
        <div class="navbar-links">
          <ul>
            <li><a href="index.php?page='.$lang.'"><i class="fas fa-home"> </i> '. $nav_home[$langue].'</a></li>

            <!-- Dropdown Monuments -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-archway"></i> Monuments
              </a>
              <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="notredame.php?page='.$lang.'">Notre Dame</a>
                <a class="dropdown-item" href="palaisdejustice.php?page='.$lang.'">Palais de Justice</a>
                <a class="dropdown-item" href="lesponts.php?page='.$lang.'">Les Ponts</a>
              </div>
            </li>

            <li><a href="informations.php"><i class="fas fa-info"></i> Informations</a></li>

            <!-- dropdown Découvrir -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-compass"></i> '. $nav_discover[$langue].'
              </a>
              <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="restaurants.php?page='.$lang.'"><i class="fas fa-utensils"></i> Restaurants</a>
                <a class="dropdown-item" href="endroitsAvisiter.php?page='.$lang.'"><i class="fas fa-map-marker-alt"></i> '. $nav_discover_tovisit[$langue].'</a></a>
                <a class="dropdown-item" href="adeuxpas.php?page='.$lang.'"><i class="fas fa-map"></i> '. $nav_discover_near[$langue].'</a>
              </div>
            </li>
            <li><a href="a_propos.php?page='.$lang.'"><i class="fas fa-address-card"></i> '. $nav_about[$langue].'</a></li>';
            
            if ($langue == 0) {
                echo '<li><a href="'.$_SERVER["PHP_SELF"].'?lang=1" target="_self" class="ukflag"><img src="../img/eng_flag.png" alt="" width="25" height="12"></a></li>';
            } else {
                echo '<li><a href="'.$_SERVER["PHP_SELF"].'" target="_self" class="frflag"><img src="../img/Flag_of_France.svg.webp" alt="" width="25" height="12"></a></li>';
            } 

         
         echo'   </ul>
        </div>
      </nav>
    </header>';
?>