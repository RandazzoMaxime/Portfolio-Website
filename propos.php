<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Maxime Randazzo | À Propos</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/propos.css" />
    <link rel="stylesheet" type="text/css" href="css/icons.css" />
    <link rel="stylesheet" type="text/css" href="css/footer.css" />

    <script type="text/javascript">
      function form(id) {
        document.getElementById(id).style.visibility = "visible";
        document.getElementById("global").style.filter = "blur(5px)";
        document.getElementById(id).style.opacity = "100%";
      }
      function closeform(id) {
        document.getElementById("submit").style.transition = "none";
        document.getElementById(id).style.opacity = "0%";
        document.getElementById(id).style.visibility = "hidden";
        document.getElementById("global").style.filter = "blur(0px)";
      }
    </script>
  </head>

  <body>
    <div id="container-form">
      <div id="formulaire">
        <img
          id="closeform"
          src="assets/icons/croix.png"
          onclick="closeform('container-form')"
        />
        <h1>Formulaire de contact</h1>
        <form action="propos.php">
          <label for="fname">Nom & prénom</label>
          <input
            type="text"
            id="fname"
            name="firstname"
            placeholder="Votre nom et prénom"
          />

          <label for="sujet">Sujet</label>
          <input
            type="text"
            id="sujet"
            name="sujet"
            placeholder="L'objet de votre message"
          />

          <label for="emailAddress">Email</label>
          <input
            id="emailAddress"
            type="email"
            name="email"
            placeholder="Votre email"
          />

          <label for="subject">Message</label>
          <textarea
            id="subject"
            name="message"
            placeholder="Votre message"
            style="height: 100px;"
          ></textarea>

          <input id="submit" type="submit" value="Envoyer" name="valider"/>
        </form>
<?php 

  

if(isset($_POST['message']))
{
  $fname=$_POST['firstname'];
  $sujet=$_POST['sujet'];
  $email=$_POST['email'];
  $message=$_POST['message'];

  if(empty($fname))
         $send='<div class="erreur">Le champ Nom & prénom est vide.</div>';
      elseif(empty($sujet))
         $message='<div class="erreur">Le sujet est vide.</div>';
      elseif(empty($email))
         $message='<div class="erreur">Veuillez renseigner un email.</div>';
      elseif(empty($message))
         $message='<div class="erreur">Vous avez indiqué un message vide.</div>';
  else{
  //on vérifie que l'adresse est correcte
  if(!preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,}$#i",$email)){
    echo "L'adresse mail entrée est incorrecte";
}
else{
include(mail.php);

  }
}

}

?>

      </div>
    </div>
    <div id="global">
      <header>
        <a id="home" href="index.html">
          <img id="logo" alt="Logo" src="assets/icons/Logo.png"
        /></a>
      </header>

      <div id="container">
        <div id="img">
          <img
            id="photo"
            src="assets/photos/profil.jpg"
            alt="Photo de profil"
          />
        </div>
        <div id="content">
          <p>
            Je m’appelle Maxime Randazzo, je souhaite devenir développeur Web et
            je suis également un passionné de photographie.<br /><br />
            Ma soif de savoir motive ma curiosité dans tous domaine !
            <br /><br />
            J’ai 18 ans et je suis basé en Corse, entre Corte et Ajaccio.
          </p>

          <div id="contact" onclick="form('container-form')">Contact</div>
        </div>
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
    </div>
  </body>
</html>
