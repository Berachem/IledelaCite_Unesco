<?php
$page = 'A propos';
include('../php/header.inc.php');

?>



<br>
    <br>
    <br>
  
    <div class='description'>
        <p style="color:white" >
        Nous sommes un <b style="color: #ea5c0d;"> binôme d'étudiants </b> à l'Université Gustave Eiffel qui ont pour objectif de <b style="color: #f7af3e;">participer à la valorisation d'un patrimoine mondial reconnu par l'UNESCO </b> en France ( kokorico <img src="../img/poule.png" width="25" height="25" alt=""> ) qui est L' Ile de la Cité. 

        </p>
    </div>




<!-- Présentation de l'équipe -->
<section class="team-section text-center my-5">
  
    <div class="row">
  
      <!-- Berachem MARKRIA -->
      <div class="col-lg-7 col-md-6 mb-md-0 mb-5">
        <div class="avatar mx-auto">
          <img src="../img/moi.jpg" width="250" height="250" class="rounded-circle z-depth-1 berachem"
            alt="Berachem" data-toggle="tooltip" data-placement="top" title="Enlevez votre souris d'ici svp ;)">
        </div>
        <h5 class="font-weight-bold mt-4 mb-3">Berachem MARKRIA</h5>
        <p class="text-uppercase blue-text"><strong>Chef de Projet et Principal Développeur</strong></p>
        <p class="grey-text"></p>
        <ul class="list-unstyled mb-0">
          <!-- Github -->
          <a class="p-2 fa-lg ins-ic" href="https://github.com/Berachem">
            <i class="fab fa-github"> </i>
          </a>
          <!-- Linkedin -->
          <a class="p-2 fa-lg ins-ic" href="https://github.com/Berachem">
            <i class="fab fa-linkedin"> </i>
          </a>

          
        </ul>
      </div>
  
      <!-- Tristan MARTINEZ -->
      <div class="col-lg-2 col-md-6">
        <div class="avatar mx-auto">
          <img src="../img/tristan.png" width="250" height="250" class="rounded-circle z-depth-1 tristan"
            alt="Tristan" data-toggle="tooltip" data-placement="top" title="Enlevez votre souris d'ici svp ;)">
        </div>
        <h5 class="font-weight-bold mt-4 mb-3">Tristan MARTINEZ</h5>
        <p class="text-uppercase blue-text"><strong>Développeur et Spécialiste de l'Île</strong></p>
        <p class="grey-text"></p>
        <ul class="list-unstyled mb-0">
          <!-- Github -->
          <a class="p-2 fa-lg ins-ic" href="https://github.com/Berachem">
            <i class="fab fa-github"> </i>
          </a>
          <!-- Linkedin -->
          <a class="p-2 fa-lg ins-ic" href="https://github.com/Berachem">
            <i class="fab fa-linkedin"> </i>
          </a>

        </ul>
      </div>
  
    </div>
  
  </section>





    <p class="presentation">
    
    Nous sommes deux étudiants motivés, soucieux de notre réussite et qui mènent un projet magnifique en lien avec la Culture française.
    <br>
    <br>
    Nous remercions

    <br>
    <br>

        
          <b style="color: #ea5c0d;">ETTAYEB Tewfik </b> Responsable du Forum UNESCO - UGE
          <b style="color: #ea5c0d;">CESSY David </b> Chef du département Informatique de l'IUT
          <b style="color: #ea5c0d;">REBY Yann </b> Enseignant en Anglais
				

          <br>
          <br>
          Vous souhaitez nous contacter ?
    </p>


<?php
if (isset($_GET["messagesent"])){
  echo '<div class="alert alert-success" role="alert"> <img src="../img/succes.png"  width="25" height="25" alt="succès">
  '.$message_thankyou[$langue].'
</div>';
}

?>
    
          
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




<!-- Wrapper container -->
<div class="container py-4">

  <!-- Formulaire de Contacte -->
  <form id="contactForm" action="../php/contacter.php?lang=".$_GET[$lang] method="post" target="_self">

    <!-- Nom input -->
    <div class="mb-3">
      <label class="form-label" for="nom"><img src="../img/user.png"  width="25" height="25" alt="nom"> Nom</label>
      <input class="form-control" id="nom" type="text" placeholder="Nom" />
    </div>

    <!-- Addresse email input -->
    <div class="mb-3">
      <label class="form-label" for="email"><img src="../img/email.png"  width="25" height="25" alt="email"> Adresse Email</label>
      <input class="form-control" id="email" type="email" placeholder="bidule@exemple.com" />
    </div>

    <!-- Message input -->
    <div class="mb-3">
      <label class="form-label" for="message"><img src="../img/message.png"  width="25" height="25" alt="message"> Message</label>
      <textarea class="form-control" id="message" type="text" placeholder="Bonjour,..." style="height: 10rem;"></textarea>
    </div>

    <!-- Formulaire boutton submit -->
    <div class="d-grid">
      <button class="btn btn-danger btn-lg" name="submit" type="submit">Envoyer</button>
    </div>

  </form>

</div>


<?php

include('../php/footer.inc.php');

?>