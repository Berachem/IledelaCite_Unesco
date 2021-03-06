
<img src="../img/goTop.png" alt="go Top" onclick='topFunction()' id='goTop'>


<style>
    #goTop {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  width: 50px;
}

#goTop:hover {
  background-color: #555; /* Add a dark-grey background on hover */
}
</style>



<footer>
<!-- logo-->
<img src='../img/logo_Unesco.png' alt='Logo Unescite' id='logoIle'>
<!-- Copyright-->
<div id='Credits'>
    <h3 >&copy; Copyright 2022, <a href='https://www.linkedin.com/in/berachem-markria/' style='color: #f7af3e;'>Berachem MARKRIA </a> & <a href='https://www.linkedin.com/in/tristan-martinez-8459a1229/' style='color: #f7af3e;'> Tristan Martinez</a> 
    
  </h3> 
</div>
<!-- Réseaux sociaux-->
<div id='LogosFooter'></div>
    <div class='footer-social-icons'>
        <ul class='social-icons'>
            <li><a href='https://www.facebook.com/Ile-de-la-Cit%C3%A9-Unesco-107475771919467' class='social-icon'> <i class='fa fa-facebook'></i></a></li>
            <li><a href='https://twitter.com/IleCiteParis' class='social-icon'> <i class='fa fa-twitter'></i></a></li>
            <li><a href='https://www.instagram.com/iledelaciteunesco?igshield=YmMyMTA2M2Y=' class='social-icon'> <i class='fa fa-instagram'></i></a></li>
            <li><a href='https://fr.unesco.org/' class='social-icon'> <i class='fas fa-landmark'></i></a></li>
            

            <?php
              if ($page=="A propos"){
                echo "<li><a href='https://github.com/Berachem/IledelaCite_Unesco' class='social-icon'> <i class='fa fa-github' style='color:white;'></i></a></li>";
                echo "<li><a target='_self' href='admin_connect.php' class='social-icon'> <i class='fa fa-wrench'></i></a></li>";
              }else{
                echo "<li><a href='https://github.com/Berachem/IledelaCite_Unesco' class='social-icon'> <i class='fa fa-github'></i></a></li>";
              }

              ?>

        </ul>
    </div>
  
</div>
          <br>
        <div class="link-footer row">
              <a href="../mentionslegales.txt">Mentions légales</a>
              <a href="../conditions_utilisation.txt">Conditions d’utilisation</a>
              <a href="../src/a_propos.php#sent" target="_self">Contacts</a>
        </div>
        <br>

        <style>
          .link-footer{
            display: flex;
            justify-content: center;
            font-size: small;
            color: white;
            padding-bottom: 0.5cm;
            text-align:center;
            
    
          }
          .link-footer>a{
            color: #555;
            margin: 5px;
          }

        </style>
</footer>
</body>
<script>
  AOS.init();
</script>
</html>
