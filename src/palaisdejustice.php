<?php
$page = 'Palais de Justice';
include('../php/header.inc.php');

?>

<img class="img-fluid" src="../img/Palais_de_Justice_de_Paris.jpg" alt="" style="width: 100%; top:0">

<svg class="arrows">
              <path class="a1" d="M0 0 L30 32 L60 0"></path>
              <path class="a2" d="M0 20 L30 52 L60 20"></path>
              <path class="a3" d="M0 40 L30 72 L60 40"></path>
            </svg>
        <!-- Barre Orange et Titre page   -->

      <div class="description" >
          <p style="color:white">
            Le <b style="color: #ea5c0d;">Palais de justice</b> est le monument qui prend en compte la plus grande partie de l'île, sa superficie correspond à 1 cinquème de l'île, et comprend plusieurs batiments tous plus impressionnant les uns que les autres.

          </p>
      </div>

<section data-aos="fade-up">
    <!-- SECTION Histoire-->
    <div class="sous_titre">
      <h2 style="color: #f7af3e;"><i class="fas fa-history"></i><?php echo $palais_histoire[$langue] ?></h2>
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
                  <h5 class="card-title"><?php echo $palais_carousel1_card_title1[$langue] ?></h5>
                  <p class="card-text">
                    <?php echo $palais_carousel1_card_text1[$langue] ?>
                  </p>
                  <span class="collapse card-text" id="viewdetails"> 
                    <?php echo $palais_carousel1_colapse_card_text1[$langue] ?>
                  </span> 
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails" ><?php echo $savoirplus[$langue] ?></a>
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
                  <h5 class="card-title"><?php echo $palais_carousel1_card_title2[$langue] ?></h5>
                  <p class="card-text" >
                  <?php echo $palais_carousel1_card_text2[$langue] ?>
                  </p>
                  <span class="collapse card-text" id="viewdetailsb"> 
                  <?php echo $palais_carousel1_card_colapse_card_text2[$langue] ?>
                  </span>
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailsb" ><?php echo $savoirplus[$langue] ?></a>
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
                  <h5 class="card-title"><?php echo $palais_carousel1_card_title3[$langue] ?></h5>
                  <p class="card-text">
                  <?php echo $palais_carousel1_card_text3[$langue] ?>
                  </p>
                  <span class="collapse" id="viewdetailsc"> 
                    <?php echo $palais_carousel1_colapse_card_text3[$langue] ?>
                  </span>
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailsc" ><?php echo $savoirplus[$langue] ?></a>    
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
                  <h5 class="card-title"><?php echo $palais_carousel1_card_title4[$langue] ?></h5>
                  <p class="card-text">
                    <?php echo $palais_carousel1_card_text4[$langue] ?>
                  </p>
                  <span class="collapse card-text" id="viewdetailsd"> 
                    <?php echo $palais_carousel1_colapse_card_text4[$langue] ?>
                  </span>
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailsd" ><?php echo $savoirplus[$langue] ?></a>
                    
                    
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
                  <h5 class="card-title"><?php echo $palais_carousel1_card_title5[$langue] ?></h5>
                  <p class="card-text">
                    <?php echo $palais_carousel1_card_text5[$langue] ?>
                  </p>
                  <span class="collapse card-text" id="viewdetailse"> 
                    <?php echo $palais_carousel1_colapse_card_text5[$langue] ?>
                  </span>
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetailse" ><?php echo $savoirplus[$langue] ?></a>
                    
                    
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


</section>


<section data-aos="fade-up">
    <!-- SECTION Procès-->
    <div class="sous_titre">
      <h2 style="color: #f7af3e;"><i class="fa fa-balance-scale"></i><?php echo $palais_proces[$langue] ?></h2>
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
                  <h5 class="card-title"><?php echo $palais_carousel2_card_title1[$langue] ?></h5>
                  <p class="card-text" >
                    <?php echo $palais_carousel2_card_text1[$langue] ?>
                  </p>
                  <span class="collapse card-text" id="viewdetails1">                     
                   <?php echo $palais_carousel2_colapse_card_text1[$langue] ?>
                  </span> 
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1" ><?php echo $savoirplus[$langue] ?></a>
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
                  <h5 class="card-title"><?php echo $palais_carousel2_card_title2[$langue] ?></h5>
                  <p class="card-text" >
                    <?php echo $palais_carousel2_card_text2[$langue] ?>
                  </p>
                  <span class="collapse card-text" id="viewdetails1b">
                    <?php echo $palais_carousel2_colapse_card_text2[$langue] ?>
                  </span> 
                  <br>
                  <br>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1b" ><?php echo $savoirplus[$langue] ?></a>
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
                  <h5 class="card-title"><?php echo $palais_carousel2_card_title3[$langue] ?></h5>
                  <p class="card-text" >
                    <?php echo $palais_carousel2_card_text3[$langue] ?>
                  </p>
                  <span class="collapse card-text" id="viewdetails1c">
                    <?php echo $palais_carousel2_colapse_card_text3[$langue] ?>  
                  </span> 
                  <br>
                  <br>
                  <blockquote class="blockquote">
                    <p class="mb-0"><?php echo $palais_carousel2_card_quote3[$langue] ?></p>
                    <footer class="blockquote-footer"><?php echo $palais_carousel2_card_footer3[$langue] ?></footer>
                  </blockquote>
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1c" ><?php echo $savoirplus[$langue] ?></a>
         
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
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1d" ><?php echo $savoirplus[$langue] ?></a>
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
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1e" ><?php echo $savoirplus[$langue] ?></a>
         
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
                  <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails1f" ><?php echo $savoirplus[$langue] ?></a>
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

</section>

<section data-aos="fade-up">
    <!-- Section Actualité  -->
    <div class="sous_titre">
      <h2 style="color: #f7af3e;"><i class="fas fa-newspaper"></i> Actualité</h2>
      <img src="../img/sous_titre.png" alt="" >
    </div>
    <div id="demo3" class="carousel slide" data-ride="carousel">

      <!-- Indicateurs -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
      </ul>
      <!-- Element 1 dans carrousel  -->
      <div class="carousel-item active">  
        <div class="card bg-dark" style="max-width: 1750px;">
          <div class="row no-gutters">
              <div class="col-sm-5" style="background: #868e96;">
                  <img src="../img/incendiesNotreDame.jpg" class="card-img-top h-100" alt="...">
              </div>
              <div class="col-sm-7">
                  <div class="card-body">
                      <h5 class="card-title">L'état procès du 8 septembre 2021 </h5>
                      <p class="card-text">Le procès du 8 septembre 2021 a eu lieu pour juger les actes d'attentats commis le 13 novembre 2015.</p>
                        <span class="collapse card-text" id="viewdetails3"> 
                          Le 13 novembre 2015, plusieurs attaques simultanées conduites par des terroristes à Paris ont coûté la vie à 130 personnes. Le 8 septembre 2021, le procès des attentats s'ouvre au Palias de Justice de Paris, réouvert spécialement pour cet évênement.
                          A partir de cette date, et durant les 9 mois suivants, 20 accusés seront jugés à la cour d'assises spéciale de Paris. Face à eux, 1 800 victimes sur les bancs des parties civiles et plus de 300 avocats.
                          Une salle a été construite spécialement pour ce procès monumental sur le site du Palais. Près de 700m² d'espace pour accueillir environ 500 personnes à la fois et des caméras qui filmeront intégralement ce procès.
                          Égalment 14 autres salles seront utilisées, pour accueillir les parties civiles, les proches des accusés mais aussi les journalistes et le public.
                        </span> 
                        <br>
                          
                            <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails3" ><?php echo $savoirplus[$langue] ?></a>
                      <a class="btn btn-success" href="https://www.toutsurmesfinances.com/argent/a/comment-faire-un-don-pour-rebatir-notre-dame-de-paris#:~:text=Il%20est%20aussi%20possible%20d'effectuer%20un%20don%20%3A,BIC%20de%20la%20banque%20%3A%20SOGEFRPP)">
                        <i class="fas fa-heartbeat infobtn"></i> Faire un don pour aider Notre Dame</a>
                      
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
                          
                            <a href="#" class="btn btn-danger stretched-link learnmore" data-toggle="collapse" data-target="#viewdetails3" ><?php echo $savoirplus[$langue] ?></a>
                      <a class="btn btn-success" href="https://www.toutsurmesfinances.com/argent/a/comment-faire-un-don-pour-rebatir-notre-dame-de-paris#:~:text=Il%20est%20aussi%20possible%20d'effectuer%20un%20don%20%3A,BIC%20de%20la%20banque%20%3A%20SOGEFRPP)">
                        <i class="fas fa-heartbeat infobtn"></i> Faire un don pour aider Notre Dame</a>
                      
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

</section>
    <!-- Site officiel  -->
    <br>
    <a class="btn btn-primary siteofficiel" href="https://www.notredamedeparis.fr/">
    <i class="fas fa-globe"></i> Consulter le Site Web officiel de la cathédrale Notre-Dame</a>

    <br>


    <?php

include('../php/footer.inc.php');

?>