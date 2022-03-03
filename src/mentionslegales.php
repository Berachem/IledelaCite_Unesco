<?php
$page = 'rallye';
include('../php/header.inc.php');

?>

    
    
    <div id="TitrePage">
      <img src="../img/titre.png" alt="">
      <h1>Mentions légales</h1>
    </div>
    <div class="description">
        <p>
          Vous pouvez consulter nos mentions légales ci-dessous.
        </p>
    </div>


    <a href="../mentionslegales.txt" download="iledelacite_mentions_legales" >
      <button type="button" id="download" class="btn btn-danger btn-lg"><i class="fas fa-cloud-download-alt"></i> Télécharger</button>
    </a>

    <br>
    <?php

include('../php/footer.inc.php');

?>