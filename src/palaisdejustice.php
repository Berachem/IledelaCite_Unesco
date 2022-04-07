<?php
$page = 'Palais de Justice';
include('../php/header.inc.php');

?>

      <div class="embed-responsive embed-responsive-16by9">
        <video src="../img/palais-justice.mp4" loop autoplay="autoplay" autoplay playsinline style="pointer-events: none;" muted></video>
                
        </div>

        <!-- Barre Orange et Titre page   -->

      <div class="description" >
          <p style="color:white">
            Le <b style="color: #ea5c0d;">Palais de justice</b> est le monument qui prend en compte la plus grande partie de l'île, sa superficie correspond à 1 cinquème de l'île, et comprend plusieurs batiments tous plus impressionnant les uns que les autres.

          </p>
      </div>

    <!-- SECTION Histoire-->
    <div class="sous_titre">
      <h2 style="color: #f7af3e;"><i class="fas fa-history"></i> Histoire</h2>
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
        <li data-target="#demo2" data-slide-to="4"></li>
      </ul>

      <div class="carousel-inner">
        <!-- Evenement 1 dans carrousel  -->
        <div class="carousel-item active">
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title">Centre du pouvoir royal et de la justice en France durant plus de 8 siècles</h5>
                  <p class="card-text">
                    Robert II le Pieux fut le premier souverain au alentour du Xe siècle à entreprendre des travaux conséquents
                    mais ce n’est qu’à partir du XIIIe siècle que les rois commençaient à établir leur sièges au Palais.
                  </p>
                  <span class="collapse card-text" id="viewdetails"> 
                      N'ayant aucun domicile vraiment fixe parmis les nombreux chateaux, palais et autre lieux de résidence auquel les rois avait accès ,
                      le Palais de justice est donc la première "demeure royal", occupé par la ligné des Mérovingien set des Capétiens comme le grand Philippe Auguste (1180-1226).
                      Elle aura servit de lieu de vie pour les rois pendant un peu moins de 3 siècles. Jusqu'à ce que Charles V (1338-1380)
                      le délaisse comme résidence au profit du Louvre, de l’Hôtel Saint-Pol et du château de Vincennes. Il devient le siège de la justice souveraine du Parlement
                      de Paris et de l’administration du royaume.
                  </span> 
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails" >En savoir plus</a>
                </div>             
              </div>
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/Palais_de_justice2.jpg" class="card-img-top h-100" alt="...">
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
                  <h5 class="card-title">Une construction en plusieurs étapes</h5>
                  <p class="card-text" >
                      Chaque roi a apporté sa touche personnel à la zone, rendant l'édifice de plus en plus grand, polyvalent et complet.
                  </p>
                  <span class="collapse card-text" id="viewdetailsb"> 
                    L'un des changement majeur à été effectuer par Saint Louis (1226-1270) qui érigea la Sainte Chapelle ainsi 
                    que la galerie mercière, la salle sur l’eau et la tour Bonbec.
                    Philippe le Bel (1285-1314) remodèle et agrandit le palais pour y rassembler les institutions judiciaires
                    et financières du royaume. Centralisant le plus en plus la gouvernance et le pouvoir au Palais.
                    Dès le XVe siècle, la cour souveraine est dotée d’une prison : la Conciergerie. Dont il reste encore quelque vestige. 
                  </span>
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailsb" >En savoir plus</a>
                </div> 
              </div>
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/Palais_de_justice3.jpg" class="card-img-top h-100" alt="...">
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
                  <h5 class="card-title">Un site qui aura subit beaucoup d'épreuve au cour de son existence</h5>
                  <p class="card-text">
                    Même si la royauté avait délaisser la zone comme lieux de résidence, le Palais de justice et ces environ était une cible de choix pour les pyromans,
                    et toute les rénovation et reconstruction qui ont eu lieux ne se sont pas faite sans mal.
                  </p>
                  <span class="collapse" id="viewdetailsc"> 
                    <p class = "card-text">
                    En effet plusieurs institution de justice avaient encore maintenue leur activité après le départ des monarques, notament le Parlement de Paris, la Chambre des comptes ou encore la Chancellerie.
                    Ces instances furent des cibles privilégié par ceux qui voulait atteindre le gouvernement de l'époque, et plusieurs incendis, dont certains non-accidentel, ont été déclarer.
                    <br>
                    Parmis ces incendit on peut trouver :
                    </p>
                    <ul>
                      <li>1601 : incendit de la salle des pas perdus, qui servait de grande salle d'attente</li>
                      <li>1618 : la Grande Salle fut ravagé par un incendit</li>
                      <li>1630 : la flèche de la Sainte Chapelle connu le même sort</li>
                      <li>1737 : la Cour de s compte est égalment incendié</li>
                      <li>1776 : un incendit a eu lieu entre la Consiergerie et la Sainte Chapelle, <br> probablement le plus grand incendit parmis tous ceux citer</li>
                    </ul>
                  </span>
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailsc" >En savoir plus</a>    
                </div>      
              </div>
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/Palais_de_justice4.jpg" class="card-img-top h-100" alt="...">
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
                  <h5 class="card-title">Changement de décor pour le Palais de justice</h5>
                  <p class="card-text">
                    A partir de l'époque de la Restauration, le palais passe d'une dimension politique à une dimension judiciaire.
                  </p>
                  <span class="collapse card-text" id="viewdetailsd"> 
                    C'est lors du retour de la monarchie en France que de nouveaux changement au Palais ont eu lieu, notament par la création de plusieurs nouveaux postes et l'agrandissement du Palais pour pouvoir supporter le nombre croissant d'affire à régler.
                    Ces travaux ont été lancé pour de bon par la Monarchie de Juillet, juste après la l'époque de la Restauration.
                    Le chantier prendra énormément de retard et d'arrêt temporaire, du à plusieurs incendit (en particulier le multi-incendit de 1871), aux guerres et refonte des plans, 
                    La consiergerie ne sera restauré qu'en 1883, et la plupart des batiments auront soit été abondonné, soit restauré les années qui suivent.
                    Depuis 1914, nous n'avons plus eu de restaurations à grandes échelles comme celles-ci. 
                  </span>
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailsd" >En savoir plus</a>
                    
                    
                </div>
              </div>
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/Palais_de_justice5.jpg" class="card-img-top h-100" alt="...">
              </div>
            </div>
          </div>
        </div>
        <!-- Element 5 dans carrousel  -->    
        <div class="carousel-item">
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">    
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title">Le Palais de justice au début du XXie siècle</h5>
                  <p class="card-text">
                    En 2018, une nouvelle page de l’histoire du Palais de justice s’est tournée, avec le déménagement du Tribunal de grande instance sur le nouveau site des Batignolles, dans un palais neuf, inauguré pour l’occasion.
                  </p>
                  <span class="collapse card-text" id="viewdetailse"> 
                    Mais de récent éléments ont forcer à réouvrir temporairement plusieurs salle pour des cours de cassation et d'appel. Des études et des travaux sont mis en oeuvre pour la restauration de la zone.
                    Les services et les batiment sont peu à peu réouvert de 2018 à 2021. Ces réaménagement ont pour but de mettre aux normes les batiments et d'accentuer l'aspect du patrimoine et de 'histoire par rapport à la justice.'
                  </span>
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailse" >En savoir plus</a>
                    
                    
                </div>
              </div>
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/Palais_de_justice6.jpg" class="card-img-top h-100" alt="...">
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




    <!-- SECTION Procès-->
    <div class="sous_titre">
      <h2 style="color: #f7af3e;"><i class="fa fa-balance-scale"></i> Procès iconiques</h2>
      <img src="../img/sous_titre.png" alt="" >
    </div>


    <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- Indicateurs -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
        <li data-target="#demo" data-slide-to="4"></li>
        <li data-target="#demo" data-slide-to="5"></li>
      </ul>

      <!-- Element 1 dans carrousel  -->
      <div class="carousel-inner">
        <div class="carousel-item active">   
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/Tribunale.jpg" class="card-img-top h-100" alt="...">
              </div>
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title">Plusieurs procès iconique ont eu lieu ici.</h5>
                  <p class="card-text" >
                    Le Palais de Justice, une fois que les rois l'ont désertés, à servie de tribunal, l'un des plus imposant de France.
                  </p>
                  <span class="collapse card-text" id="viewdetails1">                     
                  Parmis ces incendit on peut trouver :
                    <ul>
                      <li>1793-1795 : Acueille le tribunale révolutionnaire</li>
                      <li>27 Juillet 1794 : Robespierre fut arrêter par le tribunale, puis condamné à mort le lendemin</li>
                      <li>1857 : Gustave Flaubert est jugé pour son écrit "Madame Bovary", et Charles Baudelaire pour "Les Fleurs du mal".</li>
                      <li>1945 : le maréchal Pétain, puis le chef du gouvernement Pierre Laval sont condamnés</li>
                      <li>8 septembre 2021 : Le procès des attentats du 13 novembre 2015</li>
                    </ul>
                  </span> 
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1" >En savoir plus</a>
                
                  <a class="btn btn-danger" href="https://www.youtube.com/watch?v=UoXD4S3DqNI" style="background-color:red;">
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
                <img src="../img/Tribunale1.jpg" class="card-img-top h-100" alt="...">
              </div>
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title">Le tribunale révolutionnaire</h5>
                  <p class="card-text" >
                    Après la chute de la monarchie en France, le désordre était omniprésent dans Paris, la France netière était en train d'être remodeler, mais Paris était la ville la plus toucher, là où tout à commencé, là où tout doit être organiser, en digne capitale de France.
                  </p>
                  <span class="collapse card-text" id="viewdetails1b">
                    Afin de remmettre en ordre la ville est condamné les personnes contre le nouveaux gouvernement, elle à été mise en place du 10 mars 1793 jusqu'au 31 mai 1795. Ce tribunale aura grandement contribuer au règne de la terreur, avec 1500 personnes executer durant cette période, et 2 585 condamnation à mort durant sa création.
                  </span> 
                  <br>
                  <br>
                  <blockquote class="blockquote">
                    <p class="mb-0">"La bohémienne dansait ... agile, légère, joyeuse, et ne sentant pas le poids du regard redoutable qui tombait à plomb sur sa tête."</p>
                    <footer class="blockquote-footer">Victor Hugo dans son roman <cite title="Source Title">Notre-Dame de Paris</cite></footer>
                  </blockquote>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1b" >En savoir plus</a>
                  <a class="btn btn-primary" href="https://www.google.com/aclk?sa=l&ai=DChcSEwjajLv0--31AhXZjWgJHRPQCKQYABAFGgJ3Zg&sig=AOD64_1f_vO3rbt3pkaOVGohTvt-0pX0TA&ctype=46&q=&ved=0ahUKEwjMlK30--31AhUyzIUKHUd-A9wQqygIvQg&adurl=">
                    <i class="fas fa-book infobtn"></i> Acheter le roman</a>           
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
                <img src="../img/Tribunale2.jpg" class="card-img-top h-100" alt="...">
              </div>
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title"><i>Notre-Dame de Paris</i>  de Victor Hugo</h5>
                  <p class="card-text" >
                    En plus d’être la cathédrale gothique la plus célèbre de France, Notre-Dame de Paris est aussi un roman majeur de Victor Hugo.
                  </p>
                  <span class="collapse card-text" id="viewdetails1c">
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
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1c" >En savoir plus</a>
                  <a class="btn btn-primary" href="https://www.google.com/aclk?sa=l&ai=DChcSEwjajLv0--31AhXZjWgJHRPQCKQYABAFGgJ3Zg&sig=AOD64_1f_vO3rbt3pkaOVGohTvt-0pX0TA&ctype=46&q=&ved=0ahUKEwjMlK30--31AhUyzIUKHUd-A9wQqygIvQg&adurl=">
                    <i class="fas fa-book infobtn"></i> Acheter le roman</a>           
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Element 4 dans carrousel  -->
        <div class="carousel-item">    
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/Tribunale3.jpg" class="card-img-top h-100" alt="...">
              </div>
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title"><i>Notre-Dame de Paris</i>  de Victor Hugo</h5>
                  <p class="card-text" >
                    En plus d’être la cathédrale gothique la plus célèbre de France, Notre-Dame de Paris est aussi un roman majeur de Victor Hugo.
                  </p>
                  <span class="collapse card-text" id="viewdetails1d">
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
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1d" >En savoir plus</a>
                  <a class="btn btn-primary" href="https://www.google.com/aclk?sa=l&ai=DChcSEwjajLv0--31AhXZjWgJHRPQCKQYABAFGgJ3Zg&sig=AOD64_1f_vO3rbt3pkaOVGohTvt-0pX0TA&ctype=46&q=&ved=0ahUKEwjMlK30--31AhUyzIUKHUd-A9wQqygIvQg&adurl=">
                    <i class="fas fa-book infobtn"></i> Acheter le roman</a>           
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Element 5 dans carrousel  -->
        <div class="carousel-item">    
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">
              <div class="col-sm-5" style="background: #868e96;">
                <img src="../img/Tribunale4.jpg" class="card-img-top h-100" alt="...">
              </div>
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title"><i>Notre-Dame de Paris</i>  de Victor Hugo</h5>
                  <p class="card-text" >
                    En plus d’être la cathédrale gothique la plus célèbre de France, Notre-Dame de Paris est aussi un roman majeur de Victor Hugo.
                  </p>
                  <span class="collapse card-text" id="viewdetails1e">
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
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1be" >En savoir plus</a>
                  <a class="btn btn-primary" href="https://www.google.com/aclk?sa=l&ai=DChcSEwjajLv0--31AhXZjWgJHRPQCKQYABAFGgJ3Zg&sig=AOD64_1f_vO3rbt3pkaOVGohTvt-0pX0TA&ctype=46&q=&ved=0ahUKEwjMlK30--31AhUyzIUKHUd-A9wQqygIvQg&adurl=">
                    <i class="fas fa-book infobtn"></i> Acheter le roman</a>           
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Element 6 dans carrousel  -->
        <div class="carousel-item">  
          <div class="card bg-dark" style="max-width: 1750px;">
            <div class="row no-gutters">
              <div class="col-sm-5" style="background: #868e96;">
                  <img src="../img/Tribunale5.png" class="card-img-top h-100" alt="...">
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

    <!-- Section Actualité  -->
    <div class="sous_titre">
      <h2 style="color: #f7af3e;"><i class="fas fa-newspaper"></i> Actualité</h2>
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
                  <a class="btn btn-success" href="https://www.toutsurmesfinances.com/argent/a/comment-faire-un-don-pour-rebatir-notre-dame-de-paris#:~:text=Il%20est%20aussi%20possible%20d'effectuer%20un%20don%20%3A,BIC%20de%20la%20banque%20%3A%20SOGEFRPP)">
                    <i class="fas fa-heartbeat infobtn"></i> Faire un don pour aider Notre Dame</a>
                  
              </div>
          </div>
      </div>
    </div>


    <!-- Site officiel  -->
    <br>
    <a class="btn btn-primary siteofficiel" href="https://www.notredamedeparis.fr/">
    <i class="fas fa-globe"></i> Consulter le Site Web officiel de la cathédrale Notre-Dame</a>

    <br>


    <?php

include('../php/footer.inc.php');

?>