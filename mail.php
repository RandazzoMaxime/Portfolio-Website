<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/footer.css" />
    <link rel="stylesheet" type="text/css" href="css/icons.css" />
    <link rel="stylesheet" type="text/css" href="css/mail.css" />
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
<header>
      <a id="home" href="index.html">
        <img id="logo" alt="logo" src="assets/icons/Logo.png"
      /></a>
    </header>
    <div id="content"><?php 
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
          class="media"
          id="insta"
          href="https://www.instagram.com/maximerandazzophotos/"
        ></a>
        <a
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
</body>
</html>