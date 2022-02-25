<?php
$page = 'lesponts';
include('../php/header.inc.php');

?>

    
    <!-- Barre Orange et Titre page  -->
    <div id="TitrePage">
      <img src="../img/titre.png" alt="">
      <h1>Les Ponts</h1>
    </div>

    <!-- Phrase accroche -->
    <div class="description">
        <p>
            L'île de la Cité est entouré de 9 ponts et parmi eux, certains ont une histoire magnifique.
        </p>
    </div>

    <!-- SECTION Pont neuf-->
    <div class="sous_titre">
      <h2 style="color: #f7af3e;">Le Pont Neuf</h2>
      <img src="../img/sous_titre.png" alt="" >
    </div>

    <!-- Carrousel  -->
    <div id="demo2" class="carousel slide" data-ride="carousel">

      <!-- Indicateurs -->
      <ul class="carousel-indicators">
        <li data-target="#demo2" data-slide-to="0" class="active"></li>
        <li data-target="#demo2" data-slide-to="1"></li>
        <li data-target="#demo2" data-slide-to="2"></li>
        <li data-target="#demo2" data-slide-to="3"></li>
      </ul>

      <div class="carousel-inner">
        <!-- Evenement 1 dans carrousel  -->
        <div class="carousel-item active">
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title">Un Style principalement gothique</h5>
                  <p class="card-text">
                    Clarté de la composition, équilibre des verticales et des horizontales frappent tous les visiteurs à l’approche de la façade de la cathédrale.
                  </p>
                  <span class="collapse card-text" id="viewdetails"> 
                    L’abondance du décor sculpté attire les regards par la verve et la qualité des sculptures, qu’elles soient d’origine ou issues du grand chantier de restauration mené au XIXe siècle. 
                    L’ambiance intérieure de la cathédrale ne laisse personne indifférent au regard de la monumentalité de l’espace, des roses des transepts, de la statuaire votive ou de la majesté du grand-orgue. Les grands tableaux présents dans les chapelles permettent de comprendre le rôle essentiel de la peinture religieuse aux XVIIe et XVIIIe siècles. Le trésor de la cathédrale conserve nombre d’œuvres d’intérêt majeur, affectées au culte. Notre-Dame de Paris est ainsi un édifice fondamental, tant pour l’histoire de l’architecture gothique que pour l’histoire de l’art depuis le Moyen Âge ou celle de la restauration aux XIXe et XXe siècles. 
                    Classée au titre des monuments historiques sur la liste de 1862, elle est partie intégrante du bien « Paris, rives de la Seine » inscrit sur la liste du patrimoine mondial de l’Unesco. L’espace classé comprend les grands monuments, immeubles, jardins, places et quais qui bordent la Seine, depuis l’Ile Saint-Louis, à l’est, jusqu’à l’Ile aux Cygnes, à l’ouest.
                  </span> 
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails" >En savoir plus</a>
                </div>             
              </div>
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/le-pont-neuf-by-night.jpg" class="card-img-top h-100" alt="...">
              </div>
            </div>
          </div>
        </div>


        <!-- Element 2 dans carrousel  -->
        <div class="carousel-item">
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">           
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title">Un Projet gigantesque d'une ampleur phénoménale</h5>
                  <p class="card-text" >
                      Après la forte croissance démographique et religieuse de la France, La basilique Saint-Étienne, malgré ses dimensions imposantes,
                      ne suffit plus à la ferveur des Parisiens et aux  ambitions du nouvel évêque Maurice de Sully face au rayonnement intellectuel de la ville et à son essor.
                  </p>
                  <span class="collapse card-text" id="viewdetailsb"> 
                    Ce fit donc sentir le besoin d'un édifice plus grand, plus majestieux, à la mesure de la capitale de l'évêcher et du pays, ainsi que de l'ambition du nouvel évêque Maurice de Sully.
                    S'entamme donc l'un des projet de construction les plus longs qu'aura jamais eu la France à effectuer, un projet qui a duré près de 200 ans, et qui a nécessité énormément de technique 
                    , d'organisaion et de savoi-faire pour aboutir à ce manifique résultat.
                    </span>
                  <br>
                  <br>
                  <blockquote class="blockquote">
                    <p class="mb-0">« La tête, le cœur, la moelle de la ville entière. »"</p>
                    <footer class="blockquote-footer">Gui de Bazoches, chroniqueur du XIIe siècle</footer>
                  </blockquote>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailsb" >En savoir plus</a>
                </div> 
              </div>
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/pontneuf_tableau.jpeg" class="card-img-top h-100" alt="...">
              </div>
            </div>
          </div>
        </div>

        <!-- Element 3 dans carrousel  -->
        <div class="carousel-item">
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title">Deux siècles de technique, d'archtecture et de travail</h5>
                  <p class="card-text">
                    En 1163 est posée la première pierre de Notre-Dame en présence du Pape Alexandre III.
                  </p>
                  <span class="collapse" id="viewdetailsc"> 
                    <p class = "card-text"> <!--différent des autres pour les puce soit en style par défaut du body-->
                    Elle est emblématique de l'art ogival, aussi appelé art gothique,
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
                    </ul>
                  </span>
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailsc" >En savoir plus</a>    
                </div>      
              </div>
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/evolutionNotreDame.jpg" class="card-img-top h-100" alt="...">
              </div>
            </div>
          </div>
        </div>

        <!-- Element 4 dans carrousel  -->    
        <div class="carousel-item">
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">    
              <div class="col-sm-7">
                <div class="card-body">
                    <h5 class="card-title">Deux siècles de technique, d'archtecture et de travail</h5>
                    <p class="card-text">
                      Ayant subi les outrages du temps et des Hommes, notament avec plusieurs incendits (dont un récemment), 
                    </p>
                    <span class="collapse card-text" id="viewdetailsd"> 
                      Notre-Dame aura été 
                      modifier et rénové de nombreuse fois et ce dès sa création, d'une par pour remplacer es partie romane subsistance, 
                      d'autre part pour remforcer la structure ou encore refaire une partie de la cathédrale.
                      Les architectes se sont succedé et on manque d'information sur les artisans de l'ouvrage au cours du XIIe siècle, car leurs
                      nombre devait être extrême pour un projet de cette taille, néanmoins les comptes de fabrique sont conservés à partir de 1333.
                    </span>
                    <br>
                    <br>
                    <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailsd" >En savoir plus</a>
                    
                    
                </div>
              </div>
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/Notre_dame_architecture2.jpg" class="card-img-top h-100" alt="...">
              </div>
            </div>
          </div>
        </div>


      </div>

      <!-- Left and right controless -->
      <a class="carousel-control-prev" href="#demo2" data-slide="prev" >
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo2" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>

    </div>




    <!-- SECTION Pont au Change-->
    <div class="sous_titre">
      <h2 style="color: #f7af3e;">Le Pont au Change</h2>
      <img src="../img/sous_titre.png" alt="" >
    </div>


    <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- Indicateurs -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>

      <!-- Element 1 dans carrousel  -->
      <div class="carousel-inner">
        <div class="carousel-item active">   
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/histoireNotreDame.jpg" class="card-img-top h-100" alt="...">
              </div>
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title">1163, l'année où tout a commencé...</h5>
                  <p class="card-text" >Notre-Dame de Paris, un monument d’exception 
                    Au-delà de sa vocation religieuse, la cathédrale Notre-Dame de Paris est l’un des fleurons du patrimoine culturel national et mondial. C’est l’une des plus anciennes cathédrales gothiques de France (avec Noyon, Senlis, Laon et Sens). La majeure partie de la construction débute en 1163 et s’achève en 1345. 
                  </p>
                  <span class="collapse card-text" id="viewdetails1">                     
                  En 1844, Notre-Dame est dans un état de conservation préoccupant. Privée d’une partie importante de ses sculptures décoratives au cours du XVIIIe siècle, de sa flèche (1792), de la statuaire de la galerie des Rois (1793), elle bénéficie jusqu’en 1865 d’importants travaux sous la direction d’Eugène-Emmanuel Viollet-le-Duc.  
                  Depuis cette intervention majeure, les travaux d’entretien et de restauration de ce monument appartenant à l’État n’ont pas cessé.
                    </span> 
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1" >En savoir plus</a>
              
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Element 2 dans carrousel  -->
        <div class="carousel-item">    
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/notredamepeinture2.jpeg" class="card-img-top h-100" alt="...">
              </div>
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title"><i>Notre-Dame de Paris</i>  de Victor Hugo</h5>
                  <p class="card-text" >
                    En plus d’être la cathédrale gothique la plus célèbre de France, Notre-Dame de Paris est aussi un roman majeur de Victor Hugo.
                  </p>
                  <span class="collapse card-text" id="viewdetails1b">
                    Publié en 1831, il nous conte l’histoire de Quasimodo, Esmeralda, Frollo et Phoebus. Histoire d’amour, de haine et d’indifférence, histoire de passion aussi, dont les péripéties sont surtout connues pour les nombreuses adaptations, plus que pour le texte lui-même.
                    En effet, ce roman de 940 pages est à réserver aux mains et aux yeux des lecteurs aguerris, voraces ou déterminés. Les intrigues à tiroirs sont aussi complexes que les personnages, les scènes s’étirent sur des pages et des pages d’action comme de description.
                    Et pourtant, une qualité littéraire exceptionnelle, comme une récompense, attend le lecteur qui ouvrira les pages de Notre-Dame de Paris, sans doute l’un des plus beaux romans jamais écrits en langue française.
                  </span> 
                  <br>
                  <br>
                  <blockquote class="blockquote">
                    <p class="mb-0">"La bohémienne dansait ... agile, légère, joyeuse, et ne sentant pas le poids du regard redoutable qui tombait à plomb sur sa tête."</p>
                    <footer class="blockquote-footer">Victor Hugo dans son roman <cite title="Source Title">Notre-Dame de Paris</cite></footer>
                  </blockquote>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1b" >En savoir plus</a>
               
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Element 3 dans carrousel  -->
        <div class="carousel-item">  
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">
              <div class="col-sm-5" style="background: #868e96;">
                  <img src="../img/sacrenapoleon.png" class="card-img-top h-100" alt="...">
              </div>
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title">Le sacre de Napoléon dans la cathédrale de Notre Dame, le 18 mai 1804.</h5>
                  <p class="card-text" >Le sacre de Napoléon Ier est la cérémonie d’intronisation et de couronnement qui suivit la proclamation de Napoléon Bonaparte comme empereur des Français sous le titre de Napoléon Ier du 18 mai 1804.
                  </p>
                  <span class="collapse card-text" id="viewdetails1c">
                    La cérémonie religieuse du sacre, officié par le pape Pie VII, suivie de celle du couronnement, se déroula, le dimanche 2 décembre 1804, à Notre-Dame de Paris. Elle dura près de cinq heures et le peintre Jacques-Louis David en fit deux tableaux : le Sacre de Napoléon et la Distribution des aigles.
                    Le Sacre de Napoléon (titre complet Sacre de l'empereur Napoléon Ier et couronnement de l'impératrice Joséphine dans la cathédrale Notre-Dame de Paris, le 2 décembre 1804) est un tableau peint entre 1805 et 1807 par Jacques-Louis David, peintre officiel de Napoléon Ier, qui représente une des cérémonies du couronnement. Imposante par ses dimensions, presque dix mètres sur plus de six, la toile de David est conservée au Louvre. Une réplique quasiment identique commencée en 1808 par David et terminée lors de l'exil du peintre à Bruxelles est accrochée au musée du château de Versailles dans la salle du Sacre. Le couronnement et le sacre ont eu lieu à Notre-Dame de Paris.
                    </span> 
                    <br>
                    <br>
                    <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1c" >En savoir plus</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Left and right controless -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev" >
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>

    </div>

    <!-- Section Pont Notre Dame  -->
    <div class="sous_titre">
      <h2 style="color: #f7af3e;">Le Pont de Notre Dame</h2>
      <img src="../img/sous_titre.png" alt="" >
    </div>

    <!-- Element 1 sans carrousel  -->
    <div class="card bg-dark" style="max-width: 1750px;">
      <div class="row no-gutters">
          <div class="col-sm-5" style="background: #868e96;">
              <img src="../img/incendiesNotreDame.jpg" class="card-img-top h-100" alt="...">
          </div>
          <div class="col-sm-7">
              <div class="card-body">
                  <h5 class="card-title">Les incendies de Notre Dame</h5>
                  <p class="card-text">L’incendie de Notre-Dame de Paris est un incendie majeur survenu à la cathédrale Notre-Dame de Paris, les 15 et 16 avril 2019, pendant près de 15 heures.
                    </p>
                    <span class="collapse card-text" id="viewdetails3"> 
                    Le sinistre se déclare en fin d'après midi à l'intérieur de sa charpente et prend rapidement une grande ampleur. Les flammes détruisent intégralement sa flèche, les toitures de la nef et du transept ainsi que sa charpente. En s'effondrant, la flèche provoque l'écroulement de la voûte de la croisée du transept, d'une partie de celle du bras nord et de celle d'une travée de la nef. L'intervention de centaines de pompiers, jusqu'au lever du jour, permet de sauver la structure globale de l'édifice et d'épargner les deux tours, ainsi que la façade occidentale, le trésor et l'essentiel des œuvres d'art de la cathédrale. Il s'agit du plus important sinistre subi par la cathédrale depuis sa construction.
                      L'incendie entraîne une très forte émotion, tant en France que dans le reste du monde, ainsi qu'une importante couverture médiatique. Le président de la République, Emmanuel Macron, annonce immédiatement vouloir reconstruire la cathédrale dans un délai de cinq ans. Après des débats sur la construction d'un édifice plus moderne à l'ancien emplacement de la flèche, il est finalement décidé de la reconstruire à l'identique. </span> 
                    <br>
                      
                        <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails3" >En savoir plus</a>
                 
                  
              </div>
          </div>
      </div>
    </div>


  <!-- SECTION Les autres Ponts-->
  <div class="sous_titre">
    <h2 style="color: #f7af3e;">Les autres Ponts</h2>
    <img src="../img/sous_titre.png" alt="" >
  </div>

  <!-- Carrousel  -->
  <div id="demo3" class="carousel slide" data-ride="carousel">

    <!-- Indicateurs -->
    <ul class="carousel-indicators">
      <li data-target="#demo3" data-slide-to="0" class="active"></li>
      <li data-target="#demo3" data-slide-to="1"></li>
      <li data-target="#demo3" data-slide-to="2"></li>
      <li data-target="#demo3" data-slide-to="3"></li>
    </ul>

    <div class="carousel-inner">
      <!-- Evenement 1 dans carrousel  -->
      <div class="carousel-item active">
        <div class="card bg-dark" style="max-width: 1750px;">
          <div class="row no-gutters">
            <div class="col-sm-7">
              <div class="card-body">
                <h5 class="card-title">Un Style principalement gothique</h5>
                <p class="card-text">
                  Clarté de la composition, équilibre des verticales et des horizontales frappent tous les visiteurs à l’approche de la façade de la cathédrale.
                </p>
                <span class="collapse card-text" id="viewdetails"> 
                  L’abondance du décor sculpté attire les regards par la verve et la qualité des sculptures, qu’elles soient d’origine ou issues du grand chantier de restauration mené au XIXe siècle. 
                  L’ambiance intérieure de la cathédrale ne laisse personne indifférent au regard de la monumentalité de l’espace, des roses des transepts, de la statuaire votive ou de la majesté du grand-orgue. Les grands tableaux présents dans les chapelles permettent de comprendre le rôle essentiel de la peinture religieuse aux XVIIe et XVIIIe siècles. Le trésor de la cathédrale conserve nombre d’œuvres d’intérêt majeur, affectées au culte. Notre-Dame de Paris est ainsi un édifice fondamental, tant pour l’histoire de l’architecture gothique que pour l’histoire de l’art depuis le Moyen Âge ou celle de la restauration aux XIXe et XXe siècles. 
                  Classée au titre des monuments historiques sur la liste de 1862, elle est partie intégrante du bien « Paris, rives de la Seine » inscrit sur la liste du patrimoine mondial de l’Unesco. L’espace classé comprend les grands monuments, immeubles, jardins, places et quais qui bordent la Seine, depuis l’Ile Saint-Louis, à l’est, jusqu’à l’Ile aux Cygnes, à l’ouest.
                </span> 
                <br>
                <br>
                <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails" >En savoir plus</a>
              </div>             
            </div>
            <div class="col-sm-5" style="background: #868e96;">
              <img src="../img/Notre_Dame_architecture.jpg" class="card-img-top h-100" alt="...">
            </div>
          </div>
        </div>
      </div>


      <!-- Element 2 dans carrousel  -->
      <div class="carousel-item">
        <div class="card bg-dark" style="max-width: 1750px;">
          <div class="row no-gutters">           
            <div class="col-sm-7">
              <div class="card-body">
                <h5 class="card-title">Un Projet gigantesque d'une ampleur phénoménale</h5>
                <p class="card-text" >
                    Après la forte croissance démographique et religieuse de la France, La basilique Saint-Étienne, malgré ses dimensions imposantes,
                    ne suffit plus à la ferveur des Parisiens et aux  ambitions du nouvel évêque Maurice de Sully face au rayonnement intellectuel de la ville et à son essor.
                </p>
                <span class="collapse card-text" id="viewdetailsb"> 
                  Ce fit donc sentir le besoin d'un édifice plus grand, plus majestieux, à la mesure de la capitale de l'évêcher et du pays, ainsi que de l'ambition du nouvel évêque Maurice de Sully.
                  S'entamme donc l'un des projet de construction les plus longs qu'aura jamais eu la France à effectuer, un projet qui a duré près de 200 ans, et qui a nécessité énormément de technique 
                  , d'organisaion et de savoi-faire pour aboutir à ce manifique résultat.
                  </span>
                <br>
                <br>
                <blockquote class="blockquote">
                  <p class="mb-0">« La tête, le cœur, la moelle de la ville entière. »"</p>
                  <footer class="blockquote-footer">Gui de Bazoches, chroniqueur du XIIe siècle</footer>
                </blockquote>
                <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailsb" >En savoir plus</a>
              </div> 
            </div>
            <div class="col-sm-5" style="background: #868e96;">
              <img src="../img/architecurenotredame1.jpg" class="card-img-top h-100" alt="...">
            </div>
          </div>
        </div>
      </div>

      <!-- Element 3 dans carrousel  -->
      <div class="carousel-item">
        <div class="card bg-dark" style="max-width: 1750px;">
          <div class="row no-gutters">
            <div class="col-sm-7">
              <div class="card-body">
                <h5 class="card-title">Deux siècles de technique, d'archtecture et de travail</h5>
                <p class="card-text">
                  En 1163 est posée la première pierre de Notre-Dame en présence du Pape Alexandre III.
                </p>
                <span class="collapse" id="viewdetailsc"> 
                  <p class = "card-text"> <!--différent des autres pour les puce soit en style par défaut du body-->
                  Elle est emblématique de l'art ogival, aussi appelé art gothique,
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
                  </ul>
                </span>
                <br>
                <br>
                <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailsc" >En savoir plus</a>    
              </div>      
            </div>
            <div class="col-sm-5" style="background: #868e96;">
              <img src="../img/evolutionNotreDame.jpg" class="card-img-top h-100" alt="...">
            </div>
          </div>
        </div>
      </div>

      <!-- Element 4 dans carrousel  -->    
      <div class="carousel-item">
        <div class="card bg-dark" style="max-width: 1750px;">
          <div class="row no-gutters">    
            <div class="col-sm-7">
              <div class="card-body">
                  <h5 class="card-title">Deux siècles de technique, d'archtecture et de travail</h5>
                  <p class="card-text">
                    Ayant subi les outrages du temps et des Hommes, notament avec plusieurs incendits (dont un récemment), 
                  </p>
                  <span class="collapse card-text" id="viewdetailsd"> 
                    Notre-Dame aura été 
                    modifier et rénové de nombreuse fois et ce dès sa création, d'une par pour remplacer es partie romane subsistance, 
                    d'autre part pour remforcer la structure ou encore refaire une partie de la cathédrale.
                    Les architectes se sont succedé et on manque d'information sur les artisans de l'ouvrage au cours du XIIe siècle, car leurs
                    nombre devait être extrême pour un projet de cette taille, néanmoins les comptes de fabrique sont conservés à partir de 1333.
                  </span>
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailsd" >En savoir plus</a>
                  
                  
              </div>
            </div>
            <div class="col-sm-5" style="background: #868e96;">
              <img src="../img/Notre_dame_architecture2.jpg" class="card-img-top h-100" alt="...">
            </div>
          </div>
        </div>
      </div>


    </div>

    <!-- Left and right controless -->
    <a class="carousel-control-prev" href="#demo3" data-slide="prev" >
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo3" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>

  </div>




    <footer>
      <img src="../img/logo.png" alt="Logo Unescite" id="logoIle" >

      <!-- Copyright  -->
      <div id="Credits">
        <h3 >&copy; Copyright 2022, <a href="https://www.linkedin.com/in/berachem-markria/">Berachem MARKRIA </a> & <a href="https://www.linkedin.com/in/tristan-martinez-8459a1229/"> Tristan Martinez</a> </h3> 
      </div>
        
      <!-- Réseaux Sociaux  -->
      <div id="LogosFooter"></div>
        <div class="footer-social-icons">
          <ul class="social-icons">
            <li><a href="https://www.facebook.com/profile.php?id=100075301764425" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/IleCiteParis" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
            <li><a href="" class="social-icon"> <i class="fa fa-instagram"></i></a></li>
            <li><a href="https://fr.unesco.org/" class="social-icon"> <i class="fas fa-landmark"></i></a></li>
            <li><a href="https://github.com/Berachem" class="social-icon"> <i class="fa fa-github"></i></a></li>
          </ul>
        </div>
    </footer>
  </body>
</html>