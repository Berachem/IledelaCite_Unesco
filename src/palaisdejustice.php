<?php
$page = 'Palais de Justice';
include('../php/header.inc.php');

?>

<img class="img-fluid" src="../img/Palais_de_Justice_de_Paris.jpg" alt="" style="width: 100%; top:0">

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
                    Après la chute de la monarchie en France, le désordre était omniprésent dans Paris, la France entière était en train d'être remodeler, mais Paris était la ville la plus toucher, là où tout à commencé, là où tout doit devait être réorganiser, en digne capitale de France.
                  </p>
                  <span class="collapse card-text" id="viewdetails1b">
                    Afin de remmettre en ordre la ville et condamné les personnes contre le nouveaux gouvernement, elle à été mise en place du 10 mars 1793 jusqu'au 31 mai 1795. Ce tribunale aura grandement contribuer au règne de la terreur, avec 1500 personnes executer durant cette période, et 2 585 condamnation à mort durant son activité.
                    Appelé à l'époque "Tribunale criminel extraordinaire", il s'est installer dans la Grand-chambre du parlement de Paris rebaptisée "Salle de la Liberté". Les séances sont retranscrit dans le bulletin du tribunal révolutionnaire. Il disposait de règles spéciales en plus de celles mises en place à chaque tribunal.
                  </span> 
                  <br>
                  <br>
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
                <img src="../img/Tribunale2.jpg" class="card-img-top h-100" alt="...">
              </div>
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title">Le procès de Robespierre</h5>
                  <p class="card-text" >
                    Robespierre est devenue l'un des chefs du nouveau gouvernement après l'abolition de la monarchie en France. Mais lors du règne de terreur, il devint tyranique, 
                  </p>
                  <span class="collapse card-text" id="viewdetails1c">
                    Le jugement de Robespierre débuta le 26 juillet 1794, où il aura pu se défendre contre les accusation qu'on lui portait, à savoir sa responsabilité avec le règne de terreur, dont il en rejette la faute sur ces adversaire politique, et l'acusation de tyranie, qu'il proteste.
                    Alors qu'il est sencé être en train de se défendre, Robespierrre propose une réorganisation partiel du gouvernement, en suprimant le Comité de salut public, chargé de gérer la défense extérieur et intérieur lors des situation urgente, cet objectif ont donné à ses membre de plus en plsu de pouvoir, devenant un véritable gouvernement dictatorial et participant au règne de terreur.
                    Il dispose du soutient des Jacobins (ou du moins de la plupart), ceux qui ne l'approuve pas sont expulsé dd l'un des club les plus influant de France à l'époque. Robespierre est égalment soutenue par l'état major de la garde nationnal ainsi qu'une bonne partie de la Commune, une branche du gouvernement axer sur Paris et ses habitants.
                    Mais la plupart des hommes qui composait le gouvernement et ce tribunale était soit opposé à Robespierre, soit apeuré par le règne de terreur qui était en cour, et dans la prommesse de l'a fin de celui-ci par les principaux opposant, ils s'allient à eux afin de pouvoir organiser une obstruction telle que ni Robespierre ni ses partisans ne puissent intervenir.
                    Le procès au jour suivant fut beaucoup plus chaotique, empêchant Robespierre de se défendre, les seuls voies qui ont réussie à ce faire entendre sont celles qui ont proposé un décret d’arrestation contre Robespierre, accepter à la hâte par vote aux voix (ce qui dans la cacophonie générale n'était pas très pertinant).
                    et vote une motion d’insurrection, fait sonner le tocsin pour appeler les patriotes aux armes et interdit aux concierges des prisons d’accepter de nouveaux détenus.
                    Des hommes se masse pour tel ou tel camp, plusieurs personne qui ont été arrêter sont libéré, mais pas d'affrontement global. L'hotel de Ville qui acueillait plusieurs partisant phare de Robespierre est prise en pleine nuit, la plupart d'entre eux meurt ou son blesser dans leur tentative de se défendre.
                    Robespierre décide de réagir trop tardivement, et est arrêter dans la nuit avec ses partisans, pui executer le lendemin avec 21 d'entre eux.
                    Le procès et l'execution de Robespierre aura fait couler beaucoup d'encre et de sang, mais cela aura été une des étapes majeur de la fin du règne de terreur qui à eu lieu en France. 
                  </span> 
                  <br>
                  <br>
                  <blockquote class="blockquote">
                    <p class="mb-0">"Je suis fait pour combattre le crime, non pour le gouverner. Le temps n'est point arrivé où les hommes de biens peuvent servir impunément la patrie ; les défenseurs de la liberté ne seront que des proscrits tant que la horde des fripons dominera"</p>
                    <footer class="blockquote-footer">Fin du discours de Robespierre lors de son procès du 26 juillet</footer>
                  </blockquote>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1c" >En savoir plus</a>
         
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
                  <h5 class="card-title">L'arestation et l'execution de Robespierre</h5>
                  <p class="card-text" >
                   Dès que l’arrestation de Robespierre est connue vers 17 heures, la Commune convoque son conseil général à l’hôtel de ville.
                  </p>
                  <span class="collapse card-text" id="viewdetails1d">
                    Un vote une motion d’insurrection, fait sonner le tocsin pour appeler les patriotes aux armes et interdit aux concierges des prisons d’accepter de nouveaux détenus.
                    Des hommes se masse pour tel ou tel camp, plusieurs personne qui ont été arrêter sont libéré, mais pas d'affrontement global. L'hotel de Ville qui acueillait plusieurs partisant phare de Robespierre est prise en pleine nuit, la plupart d'entre eux meurt ou son blesser dans leur tentative de se défendre.
                    Robespierre décide de réagir trop tardivement, et est arrêter dans la nuit avec ses partisans, pui executer le lendemin avec 21 d'entre eux.
                    Le procès et l'execution de Robespierre aura fait couler beaucoup d'encre et de sang, mais cela aura été une des étapes majeur de la fin du règne de terreur qui à eu lieu en France. 
                   
                  </span> 
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1d" >En savoir plus</a>
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
                <img src="../img/proces-fleurs-du-mal.jpg" class="card-img-top h-100" alt="...">
              </div>
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title">1857 : Charles Baudelaire jugé pour son écrit "Les fleurs du mal"</h5>
                  <p class="card-text" >
                   En juin 1857 l’auteur des Fleurs du mal est condamné pour «délit d’outrage à la morale publique et aux bonnes mœurs».</p>
                  <span class="collapse card-text" id="viewdetails1e">
                   Rappelons d'abord le contexte: nous sommes en plein Second Empire sous le régime autoritaire de Napoléon III. Les auteurs y sont régulièrement victimes de la censure. L’écrivain, Gustave Flaubert, au début de l’année 1857, connaît un retentissant procès littéraire pour son Madame Bovary.
                   En ce qui concerne "Les Fleurs du Mal" de Baudelaire, le 16 juillet 1857, la justice saisit tout les exemplaire produit et Baudelaire et son associé Poulet-Malassis sont poursuivis pour outrage à la moralité.
                   Le livre est jugé trop ignoble, trop sale, trop axer sur le coté putride des sujets évoqués dedans, on doute même de la santé mental de l'auteur.
                   Le 20 août 1857, le procureur impérial Ernest Pinard condamne le livre «pour outrage à la morale publique et aux bonnes mœurs», Baudelaire et son éditeur doivent payer de lourdes amendes. L’ouvrage est mutilé de six pièces: Les Bijoux, Le Léthé, À celle qui est trop gaie, Femmes damnées, Lesbos, et Les métamorphoses du Vampire.
                    
                  </span> 
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1e" >En savoir plus</a>
         
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
                  <img src="../img/Petain.png" class="card-img-top h-100" alt="...">
              </div>
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title">Le procès du Maréchale Pétain.</h5>
                  <p class="card-text" >Le 23 juillet 1945, au Palais de justice de Paris, s'ouvre, devant la Haute Cour, le procès de Philippe Pétain, chef de l'Etat français pendant l'Occupation allemande.
                  </p>
                  <span class="collapse card-text" id="viewdetails1f">
                    Il a été accusé de complicité avec le gouvernement allemand pendant la 2ème guerre mondial, au détrimant de la sureté de l'État français.
                    Après s'être déplacé à Sigmaringen en Allemagne puis en Suisse, il refuse l'asile politique que lui propose ce pays pour aller afronté un jugement français.
                    Le GPRF (gouvernement provisoire de la République française), issu de la Résistance, et supervisé par le général de Gaulle, a réouvert une Haute Cour au Palais de justice, afin de pouvoir juger l'inculpé le 23 juillet 1945.
                    Se défendant à l'aide de ses trois avocats et avec comme argument son dévouement pour la France, ses hauts faits à Verdun, sa légitimité au plein pouvoir qu'il dit avoir acquis de manière complétement légale, et sa volonté d'utiliser ces pouvoirs pour "protéger le peuple français".
                    Pétain est poursuivi pour crime contre la sûreté intérieure et intelligence avec l'ennemi. L'accusation lui reproche sa politique de collaboration qui a "contribué au fonctionnement de la machine de guerre allemande", en particulier avec la mise en place de service du travail obligatoire, qui fera de la France l'un des principale fournisseur en homme au gouvernement nazi pour la main d'oeuvre.
                    La quasi-totalité des témoins appelés à la barre exprime la résignance du Maréchal lors de l'occupation, et le peu de résistance qu'il a démontrer au demande des Allemands 
                    n raison de son grand âge, sa peine est commuée en emprisonnement à perpétuité. Il n'est pas prouvé que l'accusé ait comploté contre le régime avant 40. Mais il a profité de son pouvoir pour l'abattre, estime la Cour. Le 23 juillet 1951, Philippe Pétain meurt à Port-Joinville.
                  </span> 
                  <br>
                  <br>
                  <blockquote class="blockquote">
                    <p class="mb-0">"Je ne ferai pas d'autre déclaration. Je ne répondrai à aucune question". "Lorsque j'ai demandé l'armistice, d'accord avec nos chefs militaires, j'ai accompli un acte nécessaire et sauveur", "Je suis demeuré à la tête d'un pays sous l'Occupation. Voudra-t-on comprendre la difficulté de gouverner dans de telles conditions ? Chaque jour, un poignard sur la gorge. J'ai lutté contre les exigences de l'ennemi. L'histoire dira tout ce que je vous ai évité".</p>
                    <footer class="blockquote-footer">Citations du Maréchal lors de son procès</footer>
                  </blockquote>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1f" >En savoir plus</a>
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
                  <h5 class="card-title">Le procès du 8 septembre 2021 </h5>
                  <p class="card-text">Le procès du 8 septembre 2021 a eu lieu pour juger les actes d'attentats commis le 13 novembre 2015.</p>
                    <span class="collapse card-text" id="viewdetails3"> 
                      Le 13 novembre 2015, plusieurs attaques simultanées conduites par des terroristes à Paris ont coûté la vie à 130 personnes. Le 8 septembre 2021, le procès des attentats s'ouvre au Palias de Justice de Paris, réouvert spécialement pour cet évênement.
                      A partir de cette date, et durant les 9 mois suivants, 20 accusés seront jugés à la cour d'assises spéciale de Paris. Face à eux, 1 800 victimes sur les bancs des parties civiles et plus de 300 avocats.
                      Une salle a été construite spécialement pour ce procès monumental sur le site du Palais. Près de 700m² d'espace pour accueillir environ 500 personnes à la fois et des caméras qui filmeront intégralement ce procès.
                      Égalment 14 autres salles seront utilisées, pour accueillir les parties civiles, les proches des accusés mais aussi les journalistes et le public.
                    </span> 
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