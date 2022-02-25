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

$notredame_titrePage = array("Notre-Dame", "Notre-Dame");
$notredame_description = array("La cathédrale Notre-Dame de Paris, chef d’œuvre de l’architecture gothique, est le monument le plus visité de France.", "The Notre-Dame de Paris cathedral, a masterpiece of Gothic architecture, is the most visited monument in France.");
$notredame_sous_titre_architecture = array("Architecture", "Architecture");
/* element 1 */
$notredame_carousel1_card_title1 = array("Un Style principalement gothique", "A mainly gothic style");
$notredame_carousel1_card_text1 = array("Clarté de la composition, équilibre des verticales et des horizontales frappent tous les visiteurs à l’approche de la façade de la cathédrale.", "The clarity of the composition and the balance of the verticals and horizontals strike all visitors as they approach the cathedral's façade.");
$notredame_carousel1_colapse_card_text1 = array("L’abondance du décor sculpté attire les regards par la verve et la qualité des sculptures, qu’elles soient d’origine ou issues du grand chantier de restauration mené au XIXe siècle. 
L’ambiance intérieure de la cathédrale ne laisse personne indifférent au regard de la monumentalité de l’espace, des roses des transepts, de la statuaire votive ou de la majesté du grand-orgue. Les grands tableaux présents dans les chapelles permettent de comprendre le rôle essentiel de la peinture religieuse aux XVIIe et XVIIIe siècles. Le trésor de la cathédrale conserve nombre d’œuvres d’intérêt majeur, affectées au culte. Notre-Dame de Paris est ainsi un édifice fondamental, tant pour l’histoire de l’architecture gothique que pour l’histoire de l’art depuis le Moyen Âge ou celle de la restauration aux XIXe et XXe siècles. 
Classée au titre des monuments historiques sur la liste de 1862, elle est partie intégrante du bien « Paris, rives de la Seine » inscrit sur la liste du patrimoine mondial de l’Unesco. L’espace classé comprend les grands monuments, immeubles, jardins, places et quais qui bordent la Seine, depuis l’Ile Saint-Louis, à l’est, jusqu’à l’Ile aux Cygnes, à l’ouest.
", "The abundance of the sculpted decoration attracts the eye by the verve and quality of the sculptures, whether they are original or from the great restoration work carried out in the 19th century. 
The interior atmosphere of the cathedral leaves no one indifferent to the monumentality of the space, the roses of the transepts, the votive statuary or the majesty of the great organ. The large paintings in the chapels allow us to understand the essential role of religious painting in the 17th and 18th centuries. The cathedral's treasury contains a number of works of major interest, used in worship. Notre-Dame de Paris is thus a fundamental building, as much for the history of Gothic architecture as for the history of art since the Middle Ages or the history of restoration in the 19th and 20th centuries. 
Classified as a historical monument on the 1862 list, it is an integral part of the property 'Paris, banks of the Seine' listed as a World Heritage Site by UNESCO. The classified area includes the major monuments, buildings, gardens, squares and quays that border the Seine, from the Ile Saint-Louis in the east to the Ile aux Cygnes in the west.
Translated with www.DeepL.com/Translator (free version)");
/* element 2 */
$notredame_carousel1_card_title2 = array("Un Projet gigantesque d'une ampleur phénoménale", "A gigantic project of phenomenal scope");
$notredame_carousel1_card_text2 = array("Après la forte croissance démographique et religieuse de la France, La basilique Saint-Étienne, malgré ses dimensions imposantes,
ne suffit plus à la ferveur des Parisiens et aux  ambitions du nouvel évêque Maurice de Sully face au rayonnement intellectuel de la ville et à son essor.", "After the strong demographic and religious growth of France, the Saint-Etienne basilica, in spite of its imposing dimensions
was no longer sufficient to satisfy the fervor of the Parisians and the ambitions of the new bishop Maurice de Sully with regard to the intellectual influence of the city and its growth.");
$notredame_carousel1_colapse_card_text2 = array("Ce fit donc sentir le besoin d'un édifice plus grand, plus majestieux, à la mesure de la capitale de l'évêcher et du pays, ainsi que de l'ambition du nouvel évêque Maurice de Sully.
S'entamme donc l'un des projet de construction les plus longs qu'aura jamais eu la France à effectuer, un projet qui a duré près de 200 ans, et qui a nécessité énormément de technique 
, d'organisaion et de savoi-faire pour aboutir à ce manifique résultat.", "The need for a larger, more majestic building was felt, in keeping with the capital of the bishopric and the country, as well as the ambition of the new bishop Maurice de Sully.
Thus began one of the longest construction projects that France has ever had to carry out, a project that lasted nearly 200 years, and which required a great deal of technique, organization and time. 
It required a lot of technique, organization and know-how to achieve this remarkable result.");
$notredame_carousel1_colapse_card_blockquote_text = array("« La tête, le cœur, la moelle de la ville entière. »", "« La tête, le cœur, la moelle de la ville entière. »");
$notredame_carousel1_colapse_card_blockquote_footer = array("Gui de Bazoches, chroniqueur du XIIe siècle", "Gui de Bazoches, chronicler of the XIIth century");
/* element 3 */
$notredame_carousel1_card_title3 = array("Deux siècles de technique, d'archtecture et de travail", "Two centuries of technique, architecture and work");
$notredame_carousel1_card_text3 = array("En 1163 est posée la première pierre de Notre-Dame en présence du Pape Alexandre III.", "In 1163, the first stone of Notre-Dame was laid in the presence of Pope Alexander III.");
$notredame_carousel1_colapse_card_text3 = array("Elle est emblématique de l'art ogival, aussi appelé art gothique,
style novateur récement utilisé pour la construction des églises et des cathédrales à l'époque.
Système de voûtes en croisées d’ogives, afin de pouvoir placé les vitraux et laisser passé la lumière.
Hauteur sous voûte élevée, pour être au plus près du ciel.
Élévation à quatre étages étayés par des tribunes afin de faire tenir le toit.
De nombreux arcs-boutants à l'extérieur pour contrebalancé la poussée des voûtes de grande hauteur.
<br>
Plusieurs campagne de travaux ont eu lieu, de sorte que l'on peut distinguer de étapes :
</p>
<ul>
  <li>1163-1225 : construction du chœur et de son double déambulatoire, de la nef, des bas-côtés et des tribunes, façade élevée jusqu'à la galerie des rois</li>
  <li>1225-1250 : galerie haute et les deux tours sur la façade, modification et agrandissements des fenêtres hautes et aménagement des chapelles latérales de la nef.</li>
</ul>", "It is emblematic of the ogival art, also called Gothic art, an innovative style recently used for the construction of churches and cathedrals at the time.
The vaulting system is made of ribbed vaults, in order to place the stained glass windows and let the light through.
High vault height, to be as close as possible to the sky.
Four-story elevation supported by galleries to hold the roof.
Numerous buttresses on the outside to counterbalance the thrust of the high vaults.
<br>
Several campaigns of work have taken place, so that we can distinguish stages :
</p>
<ul>
  <li>1163-1225 : construction of the choir and its double ambulatory, the nave, the aisles and the tribunes, elevated facade to the gallery of kings</li>
  <li>1225-1250 : high gallery and the two towers on the facade, modification and enlargement of the high windows and arrangement of the side chapels of the nave.</li>
</ul>");


/* Informations */

$info_description=array("Vous trouverez sur cette pages les informations utiles pour vous aider à préparer votre visite sur l'Île telles que les horaires des monuments, le prix d'entrée et enfin les transports en commun à proximité.","You will find on this page useful information to help you prepare your visit to the island such as the schedules of the monuments, the entrance fees and finally the public transport in the vicinity." );
$info_horaires=array("HORAIRES","SCHEDULE");

$info_notredame_status = array("Suspendue (Covid et travaux)", "Suspended (Covid and works)");
$info_notredame_description = array("Nous n'avons pas plus d'informations malheureusement :/", "We do not have more information unfortunately :/");

$info_palaisjustice_status = array("Suspendue (Covid)","Suspended (Covid)");
$info_palaisjustice_description = $info_notredame_description;

$info_conciergerie_status = array("Ouvert au public","Open to public");
$info_conciergerie_description = array("Vous pouvez réserver pour tous les jours de l'année sauf exceptions.","");

$info_pontneuf_status = array("Ouvert au grand public","Open to public");
$info_pontneuf_description = array("La visite ne nécessite aucun achat de billet ou autre.","");

$info_crypte_status = $info_palaisjustice_status;
$info_crypte_description = $info_notredame_description;

$info_chapelle_status = $info_conciergerie_status;
$info_chapelle_description = array("Vous pouvez réserver pour tous les jours de l'année sauf exceptions.","");

$info_reserve = array("Réserver", "Book");
$info_VR = array("Visiter en VR", "Visit in VR");


$info_prix = array("PRIX","PRICES");
$info_tarifnormal = array("Tarif Normal","Normal rate");
$info_tarifreduit = array("Tarif Réduit","Reduced rate");
$info_gratuit = array("Gratuit","Free");

$info_trajetGPS = array("Vous souhaitez connaître le chemin exact depuis une adresse précise ?", "Do you want to know the exact route from a specific address?");
$info_cliquer = array("Cliquez ici", "Click here");

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

    
    if ($page =='index'){
    echo '<link rel="stylesheet" href="../css/style.css">';
    }elseif ($page=='apropos') {
        echo '<link rel="stylesheet" href="../css/a_propos.css">';
    } else{
        echo '<link rel="stylesheet" href="../css/Decouvrir.css">';
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