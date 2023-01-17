<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/footer.css" />
    <link rel="stylesheet" type="text/css" href="css/icons.css" />
    <link rel="stylesheet" type="text/css" href="css/mail.css" />
    <link rel="stylesheet" type="text/css" href="css/burger.css" />
    <title>Contact par mail</title>
</head>

<body id="body">
 <!-- Header -->
     <header>
      <a  id="home" href="index.html">
        <svg id="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 595.28 841.89" style="fill: white;"><g id="a"/><g id="b"><g><path class="c" d="M310.93,226.65c0-2.85-2.32-5.16-5.18-5.14l-62.76,.39c-3.35,0-4.16,.91-5.03,3.39l-47.87,136.22c-.66,1.89-3.32,1.91-4.02,.04l-50.98-136.55c-1.25-3.48-5.71-4.12-9.11-4.1h-60.48c-1.18,0-2.14,.96-2.14,2.14v410.32c0,1.18,.96,2.14,2.14,2.14h61.55c1.18,0,2.14-.96,2.14-2.14v-233.79c0-2.39,3.33-2.98,4.15-.73,17.16,47.27,34.28,94.44,51.6,142.15,.68,1.87,3.32,1.88,4.01,.02,16.85-44.84,33.36-88.78,49.85-132.66l5.9,1.07,.19,224c0,1.18,.96,2.14,2.14,2.14l61.72-.03c1.18,0,2.14-.96,2.14-2.14l.02-406.74Z"/><path class="c" d="M450.39,568.79s-12.89-30.64-19.25-46c-1.9-4.58-10.04-6.17-10.04-6.17-65.17-.81-75.02,4.07-75.69-28.05-.17-8.43,.54-33.69,.54-33.69,.15-8.18,4.71-10.97,13.09-10.99,21.33-.04,42.66,.03,63.99-.03,40.75,1.78,72.43-36.44,67.62-76.03-9.54-73.56-79.23-66.41-135.69-66.11-12.05,.11-16.64-4.82-16.94-17.45-.34-14.49-.1-28.99-.06-43.49,.02-8.24,4.42-19.94,12.59-19.9h87.66c132.63,0,172.08,202.47,59.57,275.95,18.9,45.76,41.18,90.18,59.38,138.07l-78.16,.12-28.61-66.23Z"/></g></g></svg></a>
       
       <div id="menuToggle">
    <input type="checkbox" id="check" onchange="color()" />
    <span></span>
    <span></span>
    <span></span>
    <ul id="menu">
      <a class="MenuTitle" href="propos.html"><li>À propos</li></a>
      <a class="MenuTitle" href="photographie.php"><li>Photographie</li></a>
      <a class="MenuTitle" href="competences.html"><li>Mes compétences web</li></a>
    </ul>
  </div>
      </header>

      <!-- Fin du header -->
    
    <div id="content">

      <?php 
if (isset($_POST['firstname'])) {
  $fname=$_POST['firstname'];
  $sujet=$_POST['sujet'];
  $email=$_POST['email'];
  $message=$_POST['message'];

  if(empty($fname))
         echo '<p class="reponse">Le champ Nom & prénom est vide.</p>';
      elseif(empty($sujet))
         echo '<p class="reponse">Le sujet est vide.</p>';
      elseif(empty($email))
         echo '<p class="reponse">Veuillez renseigner un email.</p>';
      elseif(empty($message))
         echo '<p class="reponse">Vous avez indiqué un message vide.</p>';
 else { //on vérifie que l'adresse est correcte
  if(filter_var($email, FILTER_VALIDATE_EMAIL))
  {
    $entete  = 'MIME-Version: 1.0' . '\r\n';
    $entete .= 'Content-type: text/html; charset=utf-8' . '\r\n';
    $entete .= 'From:' . '\r\n';
    $entete .= 'Reply-to: ' . $email;
      $retour = mail('maxime.randazzopro@gmail.com', $sujet." | ".$fname , $message."\n"."\n".'Envoyé depuis : '.$email, $entete);
      if ($retour){
          echo '<p class="reponse">Votre message a bien été envoyé.</p>';  
                  }
      

      }
      else{
      echo "<p class'reponse'>L'adresse mail entrée est incorrecte</p>";
      }
    
}
}



    ?>
    </div>
     <!--Footer-->
     <div id="footer">
      <div id="social">
        <a
          title="Compte Instagram"
          class="media"
          id="insta"
          href="https://www.instagram.com/maximerandazzophotos/"
        ></a>
        <a
          title = "Chaine YouTube"
          class="media"
          id="youtube"
          href="https://www.youtube.com/channel/UC-tZa2NSHeHqNvt_giBY4Bw"
        ></a>
      </div>

      <div id="copyright">
        <p>
          © 2022 Maxime Randazzo | Tous droits réservés. |
          <a href="#" id="legals">Politique de confidentialité</a>
        </p>
      </div>
    </div>

<script type="text/javascript">
//Changement de couleur du logo au déploiement
      function color() {
      var checkBox = document.getElementById("check");
  if (checkBox.checked == true) {
    document.getElementById("logo").style.fill = "black";
    document.getElementById("body").style.position = "fixed";
  } 
  else {
    document.getElementById("logo").style.fill = "white";
    document.getElementById("body").style.position = "relative";
  }
}
</script>

</body>
</html>