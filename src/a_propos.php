<?php
$page = 'A propos';
include('../php/header.inc.php');

?>



<br>
    <br>
    <br>
  
    <div class='description'>
        <p style="color:white" >
        <?php echo $AboutUs_title[$langue] ?>

        </p>
    </div>




<!-- Présentation de l'équipe -->
<section class="team-section text-center my-5">
  
    <div class="row">
  
      <!-- Berachem MARKRIA -->
      <div class="col-lg-7 col-md-6 mb-md-0 mb-5">
        <div class="avatar mx-auto">
          <img src="../img/moi_bg.png" width="250" height="250" class="rounded-circle z-depth-1 berachem"
            alt="Berachem" data-toggle="tooltip" data-placement="top" title="Enlevez votre souris d'ici svp ;)">
        </div>
        <h5 class="font-weight-bold mt-4 mb-3">Berachem MARKRIA</h5>
        <p class="text-uppercase blue-text"><strong>
          <?php echo $AboutUs_berachem[$langue] ?>
        </strong></p>
        <p class="grey-text"></p>
        <ul class="list-unstyled mb-0">
          <!-- Github -->
          <a class="p-2 fa-lg ins-ic" href="https://github.com/Berachem">
            <i class="fab fa-github icones-contact"> </i>
          </a>
          <!-- Linkedin -->
          <a class="p-2 fa-lg ins-ic" href="https://github.com/Berachem">
            <i class="fab fa-linkedin icones-contact"> </i>
          </a>
          <a class="p-2 fa-lg ins-ic" href="mailto:berachem.markria@gmail.com">
            <i class="fa fa-envelope icones-contact"> </i>
          </a>

          
        </ul>
      </div>
  
      <!-- Tristan MARTINEZ -->
      <div class="col-lg-3 col-md-6">
        <div class="avatar mx-auto">
          <img src="../img/tristan_bg.jpg" width="250" height="250" class="rounded-circle z-depth-1 tristan"
            alt="Tristan" data-toggle="tooltip" data-placement="top" title="Enlevez votre souris d'ici svp ;)">
        </div>
        <h5 class="font-weight-bold mt-4 mb-3">Tristan MARTINEZ</h5>
        <p class="text-uppercase blue-text"><strong>
        <?php echo $AboutUs_tristan[$langue] ?>
        </strong></p>
        <p class="grey-text"></p>
        <ul class="list-unstyled mb-0">
          <!-- Github -->
          <a class="p-2 fa-lg ins-ic" href="https://github.com/CaptainTortue">
            <i class="fab fa-github icones-contact"> </i>
          </a>
          <!-- Linkedin -->
          <a class="p-2 fa-lg ins-ic" href="https://www.linkedin.com/in/tristan-martinez-8459a1229/">
            <i class="fab fa-linkedin icones-contact"> </i>
          </a>
          <a class="p-2 fa-lg ins-ic" href="mailto:tristan.martinez@sfr">
            <i class="fa fa-envelope icones-contact"> </i>
          </a>

        </ul>
      </div>
  
    </div>
  
  </section>

  <p class="presentation">
    
  <?php echo $AboutUs_presentation[$langue] ?>
    <br>
    <br>
    </p>


    <div class='description'>
        <p style="color:white" >
        <?php echo $AboutUs_maitriseOuvrage[$langue] ?> <img src="../img/merci.png"  width="45" height="45" alt="merci">
        </p>
    </div>


  <!-- Présentation du corps enseignants -->
<section class="team-section text-center my-6" data-aos="fade-up">
  
  <div class="row justify-content-md-center">

    <!-- ETTAYEB Tewfik -->
    <div class="col col-lg-2">
      <div class="avatar mx-auto">
        <img src="../img/ETTAYEB.jpg" width="100" height="100" class="rounded-circle z-depth-1"
          alt="ETTAYEB" data-toggle="tooltip" data-placement="top" title="Enlevez votre souris d'ici svp ;)">
      </div>
      <h5 class="font-weight-bold mt-4 mb-3"><b style="color: #ea5c0d;">ETTAYEB Tewfik </b></h5>
      <p class="text-uppercase blue-text"><strong>
      <?php echo $AboutUs_ETTAYEB[$langue] ?>
      </strong></p>
      <p class="grey-text" style="font-style: italic;color:bisque">
      <?php echo $AboutUs_ETTAYEB_help[$langue] ?>
    </p>
      <p class="grey-text"></p>
      <ul class="list-unstyled mb-0">
        <!-- Linkedin -->
        <a class="p-2 fa-lg ins-ic" href="https://www.linkedin.com/in/tewfikettayeb/">
          <i class="fab fa-linkedin icones-contact"> </i>
        </a>

        
      </ul>
    </div>

    <!-- CESSY David -->
    <div class="col-md-auto">
      <div class="avatar mx-auto">
        <img src="../img/CESSY.jpg" width="100" height="100" class="rounded-circle z-depth-1"
          alt="CESSY" data-toggle="tooltip" data-placement="top" title="01000101 01101110 01101100 01100101 01110110 01100101 01111010 00100000 01110110 01101111 01110100 01110010 01100101 00100000 01110011 01101111 01110101 01110010 01101001 01110011 00100000 01100100 00100111 01101001 01100011 01101001 00100000 01110011 01110110 01110000 00100000 00111011 00101001">
      </div>
      <h5 class="font-weight-bold mt-4 mb-3"><b style="color: #ea5c0d;">CESSY David </b></h5>
      <p class="text-uppercase blue-text"><strong>
      <?php echo $AboutUs_CESSY[$langue] ?>
      </strong></p>
      <p class="grey-text" style="font-style: italic;color:bisque">
      <?php echo $AboutUs_CESSY_help[$langue] ?>
    </p>
      <p class="grey-text"></p>
      <ul class="list-unstyled mb-0">
        <!-- Linkedin -->
        <a class="p-2 fa-lg ins-ic" href="https://www.linkedin.com/in/david-cessy-b8042239/">
          <i class="fab fa-linkedin icones-contact"> </i>
        </a>  
      </ul>
    </div>
    




      <!-- REBY Yann -->
      <div class="col col-lg-2">
      <div class="avatar mx-auto">
        <img src="../img/REBY.jpg" width="100" height="100" class="rounded-circle z-depth-1"
          alt="REBY" data-toggle="tooltip" data-placement="top" title="Please take your mouse away from here ;)">
      </div>
      <h5 class="font-weight-bold mt-4 mb-3"><b style="color: #ea5c0d;">REBY Yann </b></h5>
      <p class="text-uppercase blue-text"><strong>
      <?php echo $AboutUs_REBY[$langue] ?>
      </strong></p>
      <p class="grey-text" style="font-style: italic;color:bisque">
      <?php echo $AboutUs_REBY_help[$langue] ?>
    </p>
      <ul class="list-unstyled mb-0">
        <!-- Linkedin -->
        <a class="p-2 fa-lg ins-ic" href="https://www.linkedin.com/in/yann-reby/">
          <i class="fab fa-linkedin icones-contact"> </i>
        </a>

        
      </ul>
    </div>
    </div>

</section>

<br>


<div class='description'>
        <p style="color:white" >
        <?php echo $AboutUs_partners[$langue] ?> <img src="../img/partenaires.png"  width="45" height="45" alt="partenaires">
        </p>
    </div>

<br>

  <!-- Présentation de nos partenaires -->
<section class="team-section text-center my-6" data-aos="fade-up">
  
  <div class="row justify-content-md-center">

    <!-- UNESCO -->
    <div class="col col-lg-2">
      <div class="avatar mx-auto">
        <img src="../img/UNESCO-logo.jpg" width="100" height="100" class="rounded-circle z-depth-1">
      </div>
      <h5 class="font-weight-bold mt-4 mb-3"><b style="color: #f7af3e;"> <i class="fa fa-star checked"></i> l'UNESCO</b></h5>
      <p class="text-uppercase blue-text"><strong>
      <?php echo $AboutUs_Unesco[$langue] ?>
      </strong></p>
      <p class="grey-text"></p>
       <a class="btn btn-primary" href="https://www.unesco.org/fr"><?php echo $AboutUs_SITEOFFICIEL[$langue] ?></a>
    </div>

    <!-- Investissement d'avenir -->
    <div class="col col-lg-2">
      <div class="avatar mx-auto">
        <img src="../img/investissementavenir.png" width="100" height="100" class="rounded-circle z-depth-1">
      </div>
      <h5 class="font-weight-bold mt-4 mb-3"><b style="color: #f7af3e;">Investissement d'avenir</b></h5>
      <p class="text-uppercase blue-text"><strong>
      <?php echo $AboutUs_investissementAvenir[$langue] ?>
      </strong></p>
      <p class="grey-text"></p>
      
        <a class="btn btn-primary" href="https://www.gouvernement.fr/le-programme-d-investissements-d-avenir"><?php echo $AboutUs_SITEOFFICIEL[$langue] ?></a>
    </div>

        <!-- MCN -->
        <div class="col col-lg-2">
      <div class="avatar mx-auto">
        <img src="../img/anr.jpg" width="100" height="100" class="rounded-circle z-depth-1">
      </div>
      <h5 class="font-weight-bold mt-4 mb-3"><b style="color: #f7af3e;">Agence nationale de la recherche</b></h5>
      <p class="text-uppercase blue-text"><strong>
      <?php echo $AboutUs_agenceNationale[$langue] ?>
      </strong></p>
      <p class="grey-text"></p>
      
        <a class="btn btn-primary" href="https://www.gouvernement.fr/le-programme-d-investissements-d-avenir"><?php echo $AboutUs_SITEOFFICIEL[$langue] ?></a>
    </div>

      <!-- université Gustave Eiffel -->
      <div class="col col-lg-2">
      <div class="avatar mx-auto">
        <img src="../img/univ-eiffel.png" width="100" height="100" class="rounded-circle z-depth-1">
      </div>
      <h5 class="font-weight-bold mt-4 mb-3"><b style="color: #f7af3e;">L'université Gustave Eiffel </b></h5>
      <p class="text-uppercase blue-text"><strong>
      <?php echo $AboutUs_Univ[$langue] ?>
      </strong></p>
      <p class="grey-text"></p>
      
      <a class="btn btn-primary" href="https://www.univ-gustave-eiffel.fr/"><?php echo $AboutUs_SITEOFFICIEL[$langue] ?></a>
    </div>
    </div>

</section>

<br>
<br>


<div class='description'>
        <p style="color:white" >
        <?php echo $AboutUs_sources[$langue] ?> <img src="../img/helpers.png"  width="45" height="45" alt="helpers">
        </p>
    </div>

<br>

  <!-- Présentation de nos sources -->
<section class="team-section text-center my-6" data-aos="fade-up">
  
  <div class="row justify-content-md-center">

    <!-- Dronalist -->
    <div class="col col-lg-2">
      <div class="avatar mx-auto">
        <img src="../img/dronalist.jpg" width="100" height="100" class="rounded-circle z-depth-1">
      </div>
      <h5 class="font-weight-bold mt-4 mb-3"><b style="color: #f7af3e;">the Dronalist</b></h5>
      <p class="text-uppercase blue-text"><strong>
      <?php echo $AboutUs_dronalist[$langue] ?>
      </strong></p>
      <p class="grey-text"></p>
       <a class="btn btn-danger" href="https://www.youtube.com/c/theDronalist/featured" style="background-color: red;">YouTube</a>
    </div>

      <!-- Michelin -->
      <div class="col col-lg-2">
      <div class="avatar mx-auto">
        <img src="../img/michelin.jpg" width="100" height="100" class="rounded-circle z-depth-1">
      </div>
      <h5 class="font-weight-bold mt-4 mb-3"><b style="color: #f7af3e;">Michelin Voyage </b></h5>
      <p class="text-uppercase blue-text"><strong>
      <?php echo $AboutUs_michelin[$langue] ?>
      </strong></p>
      <p class="grey-text"></p>
      
      <a class="btn btn-info" href="https://voyages.michelin.fr/">Site</a>
    </div>

    <!-- paristoric -->
    <div class="col col-lg-2">
      <div class="avatar mx-auto">
        <img src="../img/paristoric.png" width="100" height="100" class="rounded-circle z-depth-1">
      </div>
      <h5 class="font-weight-bold mt-4 mb-3"><b style="color: #f7af3e;">Paristoric</b></h5>
      <p class="text-uppercase blue-text"><strong>
      <?php echo $AboutUs_paristoric[$langue] ?>
      </strong></p>
      <p class="grey-text"></p>
      
        <a class="btn btn-danger" href="https://www.paristoric.com/index.php/transports-et-voirie/quartiers/1285-l-ile-de-la-cite">Site</a>
      
    </div>

     <!-- Centre des monuments nationaux -->
     <div class="col col-lg-2">
      <div class="avatar mx-auto">
        <img src="../img/centremonuments.jpg" width="100" height="100" class="rounded-circle z-depth-1">
      </div>
      <h5 class="font-weight-bold mt-4 mb-3"><b style="color: #f7af3e;">Centre des monuments nationaux</b></h5>
      <p class="text-uppercase blue-text"><strong>
      <?php echo $AboutUs_CentreMonu[$langue] ?>
      </strong></p>
      <p class="grey-text"></p>
      
        <a class="btn btn-light" href="https://www.youtube.com/channel/UCD17G4L4xmn4VNWU0EIWqAw">Site</a>
      
    </div>


  </div>

</section>
       
<!--
        <ul id="rendus" style="display: table;
        margin: 0 auto; color: #b94503;">
            <li><a href="https://drive.google.com/file/d/1ufXikjAdby91y1vJ3hdcCJlk_LJlJAvp/view?usp=sharing">Notre Cahier des charges</a></li>
            <li><a href="https://docs.google.com/spreadsheets/d/1Uu_FN-dI_TsON0gRM2Dm1qxLaYe4tMg8N_0ckn63UeU/edit?usp=sharing">Notre gestion du temps (Diagramme de Gannt)</a></li>
            <li><a href="https://forms.gle/RrXoTaFJDkTe6Spo7">Notre Formulaire</a></li>
            <li><a href="https://drive.google.com/file/d/1nF47YLWuoG14jeyvY79VX0reXbWcyyIa/view?usp=sharing">Notre Logo</a></li>
            <li><a href="https://docs.google.com/presentation/d/1OCCp0vcvR3E19sUMQa7DWcqVKIV4muDZ/edit?usp=sharing&ouid=112273246261310129380&rtpof=true&sd=true">Notre Diaporama de présentation du Projet</a></li>
        </ul>

-->


<br>
<br>


<div class='description'>
        <p style="color:white" >
        <?php echo $AboutUs_contact[$langue] ?> <img src="../img/message.png"  width="45" height="45" alt="contact">
        </p>
    </div>

<br>



<!-- Wrapper container -->
<div class="container py-4">
<?php
if (isset($_GET["messagesent"])){
  echo '<div class="alert alert-success" role="alert" id="sent"> <img src="../img/succes.png"  width="25" height="25" alt="succès">
  '.$message_thankyou[$langue].'
</div>';
}

?>
<section data-aos="fade-up">
  <!-- Formulaire de Contacte -->
  <form id="contactForm" action="../php/contacter.php?lang=".$_GET[$lang] method="post" target="_self">

    <!-- Nom input -->
    <div class="mb-3">
      <label class="form-label" for="nom"><img src="../img/user.png"  width="25" height="25" alt="nom"> <?php echo $AboutUs_nom[$langue] ?></label>
      <input class="form-control" id="nom" type="text" name="nom" placeholder="<?php echo $AboutUs_nom[$langue] ?>" />
    </div>

    <!-- Addresse email input -->
    <div class="mb-3">
      <label class="form-label" for="email"><img src="../img/email.png"  width="25" height="25" alt="email"> <?php echo $AboutUs_mail[$langue] ?></label>
      <input class="form-control" id="email" name="email" type="email" placeholder="bidule@exemple.com" />
    </div>

    <!-- Message input -->
    <div class="mb-3">
      <label class="form-label" for="message"><img src="../img/message.png"  width="25" height="25" alt="message"> <?php echo $AboutUs_message[$langue] ?></label>
      <textarea class="form-control" id="message" type="text" name="message" placeholder="Bonjour,..." style="height: 10rem;"></textarea>
    </div>

    <!-- Formulaire boutton submit -->
    <div class="d-grid">
      <button class="btn btn-danger btn-lg" name="submit" type="submit"><?php echo $AboutUs_envoyer[$langue] ?></button>
    </div>

  </form>

</div>
</section>

<?php

include('../php/footer.inc.php');

?>
