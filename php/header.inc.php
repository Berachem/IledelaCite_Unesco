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
$nav_discover_tovisit = array('Endroits à visiter', "Places to visit");
$nav_discover_near = array('A deux pas', "Two steps away");
$nav_about = array('A propos', "About us");

/* INDEX */

$index_carousel_ileCite_subtitle = array('Un coffre de patrimoines mondiaux.', 'A chest of world heritages.');
$index_carousel_notredame_subtitle = array("Le monument iconique mondial.","The world's iconic monument.");
$index_carousel_palaisjustice_subtitle = array("Au coeur de l'histoire française.","");
$index_carousel_pontneuf_subtitle = array("Le plus ancien pont de Paris.","The oldest bridge in Paris.");
$index_carousel_Yaller = array("Y aller","Go to");
$index_subtitle = array("Un patrimoine mondial reconnu par l'Unesco.","A world heritage recognized by Unesco.");
$index_subtitle2 = array("L'Île de la Cité regroupe de nombreux monuments incontournables et iconiques qui font l'histoire de France et sont reconnus comme patrimoine mondial de l'Unesco.","The Ile de la Cité is home to many iconic monuments that make up the history of France and are recognized as Unesco World Heritage sites.");
$index_description = array("Paris ne serait pas Paris sans ses îles. Comme deux yeux au milieu du visage, l’île de la Cité et l’île Saint-Louis sont le cœur du cœur de la capitale, son exception, mais aussi et surtout la raison d’être de tous ses ponts, véritables œuvres d’art qui dessinent le paysage fluvial de la ville et dressent des traits d’union en pointillé entre les rives. Le plaisir de déambuler sur ces îles vient d’abord de là, du plaisir d’enjamber la Seine sur ces ponts en pierre de taille, historiques et majestueux, du plaisir de se savoir cerné d’eau mais les pieds au sec, de ce sentiment de se trouver au niveau du noyau.","Paris would not be Paris without its islands. Like two eyes in the middle of the face, the Ile de la Cité and the Ile Saint-Louis are the heart of the capital, its exception, but also and above all the reason for the existence of all its bridges, true works of art that draw the river landscape of the city and draw up dotted lines between the banks. The pleasure of wandering on these islands comes first of all from there, from the pleasure of spanning the Seine on these historical and majestic bridges made of cut stone, from the pleasure of knowing that one is surrounded by water but with dry feet, from the feeling of being at the core.");
$index_localisation = array("Localisation", "Location");

/* Notredame */

/* Informations */

/* About Us */

$AboutUs_title = array("Qui sommes-nous ?", "Who are we?");
$AboutUs_subtitle = array("Nous sommes un binôme d'étudiants à l'Université Gustave Eiffel qui ont pour objectif de participer à la valorisation d'un patrimoine mondial reconnu par l'UNESCO en France (kokorico ^^) qui est L' Ile de la Cité.","We are a pair of students at the University Gustave Eiffel whose objective is to participate in the development of a world heritage recognized by UNESCO in France (kokorico ^^) which is the Ile de la Cité.");
$AboutUs_berachem = array("CHEF DE PROJET ET PRINCIPAL DÉVELOPPEUR","PROJECT MANAGER AND LEAD DEVELOPER");
$AboutUs_tristan = array("DÉVELOPPEUR ET SPÉCIALISTE DE L'ÎLE", "DEVELOPER AND SPECIALIST OF THE ISLAND");
$AboutUs_name = array("Nom Complet", "Full Name");
$AboutUs_email= array("Addresse Email", "Email Address");
$AboutUs_envoyer = array("Envoyer", "Send");

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
            <li><a href="index.php?lang='.$langue.'"><i class="fas fa-home"> </i> '. $nav_home[$langue].'</a></li>

            <!-- Dropdown Monuments -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-archway"></i> Monuments
              </a>
              <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="notredame.php?lang='.$langue.'">Notre Dame</a>
                <a class="dropdown-item" href="palaisdejustice.php?lang='.$langue.'">Palais de Justice</a>
                <a class="dropdown-item" href="lesponts.php?lang='.$langue.'">Les Ponts</a>
              </div>
            </li>

            <li><a href="informations.php?lang='.$langue.'"><i class="fas fa-info"></i> Informations</a></li>

            <!-- dropdown Découvrir -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-compass"></i> '. $nav_discover[$langue].'
              </a>
              <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="restaurants.php?lang='.$langue.'"><i class="fas fa-utensils"></i> Restaurants</a>
                <a class="dropdown-item" href="endroitsAvisiter.php?lang='.$langue.'"><i class="fas fa-map-marker-alt"></i> '. $nav_discover_tovisit[$langue].'</a></a>
                <a class="dropdown-item" href="adeuxpas.php?lang='.$langue.'"><i class="fas fa-map"></i> '. $nav_discover_near[$langue].'</a>
              </div>
            </li>
            <li><a href="a_propos.php?lang='.$langue.'"><i class="fas fa-address-card"></i> '. $nav_about[$langue].'</a></li>';
            
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