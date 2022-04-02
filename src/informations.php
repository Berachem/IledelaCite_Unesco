<?php
$page = 'Informations';
include('../php/header.inc.php');

?>


    <br>
    <br>


    <br>
  
    <div class='description'>
        <p style="color:white" >
             <?php echo $info_description[$langue] ?>
        </p>
    </div>

 
    <div class='sous_titre'>
        <h2 style='color: #f7af3e;'><i class='fas fa-clock'></i>  <?php echo $info_horaires[$langue] ?></h2>
        <img src='../img/sous_titre.png' alt='' >
    </div>
    
    <div class='card-group justify-content-center'>
      <div class='row'>
        <div class='card bg-dark CardEffectHover' style='width: 18rem;'>
            <img src='../img/card_notredame.jpg' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Notre Dame</h5>
              <h6 class='card-subtitle mb-2 '><i class='fas fa-hourglass-start' style='color: orange;'></i>  <?php echo $info_notredame_status[$langue] ?></h6>
              <p class='card-text'> <?php echo $info_notredame_description[$langue] ?></p>
              <a href='https://www.notredamedeparis.fr/visiter/'><button type='button' class='btn btn-danger' > <?php echo $info_reserve[$langue] ?></button></a>
              <a href='https://eternellenotredame.placeminute.com/event/musees-expositions-visites-guidees/eternelle-notre-dame-une-expedition-immersive-en-realite-virtuelle,37026.html?sl=2618&_locale=fr&gclid=Cj0KCQiAip-PBhDVARIsAPP2xc2svLy0Y_tW93XHb50H2AoorjYxKL1Yi218uYl-vVnQmkyleP9Yt8caAqbGEALw_wcB'></a><button type='button' class='btn btn-danger'  > <?php echo $info_VR[$langue] ?> <i class='fas fa-vr-cardboard'></i></button></a>
            </div>
        </div>

        <div class='card bg-dark CardEffectHover' style='width: 18rem;'>
            <img src='../img/card_palaisjustice.jpg' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Palais de Justice</h5>
              <h6 class='card-subtitle mb-2 '><i class='fas fa-hourglass-start' style='color: orange;'></i>  <?php echo $info_palaisjustice_status[$langue] ?></h6>
              <p class='card-text'> <?php echo $info_palaisjustice_description[$langue] ?></p>
              <a href='https://tickets.monuments-nationaux.fr/fr-FR/familles?site=2035140822090400170'><button type='button' class='btn btn-danger' > <?php echo $info_reserve[$langue] ?></button></a>
            </div>
        </div>

        <div class='card bg-dark CardEffectHover' style='width: 18rem;'>
            <img src='../img/card_conciergerie.jpg' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Conciergerie</h5>
              <h6 class='card-subtitle mb-2 '><i class='fas fa-check' style='color: green;'></i>  <?php echo $info_conciergerie_status[$langue] ?></h6>
              <p class='card-text'> <?php echo $info_conciergerie_description[$langue] ?></p>
              <a href='https://tickets.monuments-nationaux.fr/fr-FR/familles?site=2035140822090400170' <button type='button' class='btn btn-danger' href='https://exploreparis.com/fr/2776-palais-justice-paris.html'> <?php echo $info_reserve[$langue] ?></button></a>
            </div>
        </div>
    

      
        <div class='card bg-dark CardEffectHover' style='width: 18rem;'>
            <img src='../img/card_pontneuf.jpg' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Pont Neuf</h5>
              <h6 class='card-subtitle mb-2 '><i class='fas fa-check' style='color: green;'></i>  <?php echo $info_pontneuf_status[$langue] ?></h6>
              <p class='card-text'> <?php echo $info_pontneuf_description[$langue] ?></p>
            </div>
        </div>

        <div class='card bg-dark CardEffectHover' style='width: 18rem;'>
            <img src='../img/card_crypte.jpg' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Crypte de Notre Dame</h5>
              <h6 class='card-subtitle mb-2 '><i class='fas fa-hourglass-start' style='color: orange;'></i>  <?php echo $info_crypte_status[$langue] ?></h6>
              <p class='card-text'> <?php echo $info_crypte_description[$langue] ?></p>
              <a href='https://www.crypte.paris.fr/fr/votre-visite/tarifs-individuels'><button type='button' class='btn btn-danger' > <?php echo $info_reserve[$langue] ?></button></a>
            </div>
        </div>

        <div class='card bg-dark CardEffectHover' style='width: 18rem;'>
            <img src='../img/card_conciergerie.jpg' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Sainte Chapelle</h5>
              <h6 class='card-subtitle mb-2 '><i class='fas fa-check' style='color: green;'></i>  <?php echo $info_chapelle_status[$langue] ?></h6>
              <p class='card-text'> <?php echo $info_chapelle_description[$langue] ?></p>
              <a href='https://tickets.monuments-nationaux.fr/fr-FR/produits-seances'><button type='button' class='btn btn-danger' > <?php echo $info_reserve[$langue] ?></button></a>
            </div>
        </div>
      </div> 
    </div>

    <div class='sous_titre'>
        <h2 style='color: #f7af3e;'><i class='fas fa-money-bill'></i> Prix</h2>
        <img src='../img/sous_titre.png' alt=''>
    </div>
    
    <table class='table table-bordered table-hover table-responsive-sm' style='text-align: center;'>
      <thead>
        <tr>
          <th scope='col'>Monument</th>
          <th scope='col'> <?php echo $info_tarifnormal[$langue] ?></th>
          <th scope='col'> <?php echo $info_tarifreduit[$langue] ?><span class='badge rounded-pill bg-primary' data-toggle='tooltip' data-placement='top' title=' <?php echo $info_gratuitrequis[$langue] ?>'>?</span></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope='row'>Notre Dame</th>
          <td>10€</td>
          <td class='bg-success'> <?php echo $info_gratuit[$langue] ?></td>
        </tr>
        <tr>
          <th scope='row'>Palais de Justice</th>
          <td>18€</td>
          <td class='bg-success'> <?php echo $info_gratuit[$langue] ?></td>
        </tr>
        <tr>
          <th scope='row'>Conciergerie</th>
          <td>9.50€</td>
          <td class='bg-success'> <?php echo $info_gratuit[$langue] ?></td>
        </tr>
        <tr>
          <th scope='row'>Pont Neuf</th>
          <td class='bg-success' colspan='2' style='text-align: center;'> <?php echo $info_gratuit[$langue] ?></td>
        </tr>
        <tr>
          <th scope='row'>Crypte de Notre Dame</th>
          <td>9€</td>
          <td>7€</td>
        </tr>
        <tr>
          <th scope='row'>Sainte Chapelle</th>
          <td>10€</td>
          <td class='bg-success'> <?php echo $info_gratuit[$langue] ?></td>
        </tr>
      </tbody>
    </table>

    <div class='sous_titre'>
      <h2 style='color: #f7af3e;'><i class='fas fa-bus'></i> | <i class='fas fa-train'></i> Transports</h2>
      <img src='../img/sous_titre.png' alt=''>
    </div>

    <p class = 'transport'>
      <img class='rota' src='../img/train.png' alt='' width='25' height='25'>
      <b>Train :</b>  L, N <br>
      <img class='rota' src='../img/rer.png' alt='' width='25' height='25'>
      <b>RER :</b>  B, C <br>
      <img class='rota' src='../img/metro.png' alt='' width='25' height='25'>
      <b>Métro :</b>  1, 10, 4 <br>
      <img class='rota' src='../img/bus.png' alt='' width='25' height='25'>
      <b>Bus :</b>  21, 38 ,47 ,63, 72 <br> <br>

       <?php echo $info_trajetGPS[$langue] ?> <a href='https://moovitapp.com/paris-662/poi/%C3%8Ele%20de%20la%20Cit%C3%A9,%20Paris/t/fr?tll=48.854847_2.347469&customerId=4908&ref=1&poiType=efsite' data-toggle='tooltip' data-placement='top' title='Moovit GPS'> <?php echo $info_cliquer[$langue] ?></a>
    </p>
      
   
    <?php
    include('../php/footer.inc.php');
    
    ?>

