<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="Je m'appelle Maxime Randazzo, je suis un photographe basé en Corse, entre Corte et Ajaccio. J'étudie le développement web." />
<meta name="keywords" content="photographe, photographie, Ajaccio, Corte, Corse, photo, photos, expérience, images, mariage, baptême, bapteme, prestations, premium, portrait, paysage, évenements, event, Corsica" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="assets/icons/Logo.png" />
  <link rel="stylesheet" type="text/css" href="css/photo.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css" />
  <link rel="stylesheet" type="text/css" href="css/icons.css" />
  <link rel="stylesheet" type="text/css" href="css/burger.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>

  <link href="css/nanogallery2.min.css" rel="stylesheet" type="text/css">

  <script type="text/javascript" src="js/jquery.nanogallery2.min.js"></script>

  <title></title>
</head>
<body >  
 
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
      <a class="MenuTitle" href="propos.html"><li>Mes compétences web</li></a>
      <a class="MenuTitle" href="photographie.php"><li>Photographie</li></a>
    </ul>
  </div>
      </header>

      <!-- Fin du header -->

    

    <div class="title"><h1>Mon travail</h1></div>
  
<div class="portfoliogallery" data-nanogallery2='{
        "itemsBaseURL": "https://maximerandazzo.fr/",
        "thumbnailWidth":   "auto",
        "thumbnailHeight":  "1000",
        "thumbnailDisplayOutsideScreen" : "false",
        "eventsDebounceDelay" : "20",
        "thumbnailGutterWidth" : "0",
        "thumbnailGutterHeight" : "0",
        "thumbnailBorderHorizontal" : "0",
        "thumbnailBorderVertical" : "0",
        "thumbnailDisplayInterval" : "20",
        "thumbnailHoverEffect2" : "imageScaleIn80",
        "thumbnailLabel": {
          "position": "overImageOnBottom"
        },
        "thumbnailAlignment": "center",
   "viewerTools":     {
        "topLeft":    "pageCounter",
        "topRight":   "previousButton, nextButton, fullscreenButton, closeButton"
      },   
        "thumbnailOpenImage": true
      }'>

<?php
$files = glob('assets/photos/portfolio/*.{jpg,png}', GLOB_BRACE);
$fichiers = array();
$i=0;
foreach($files as $file) {
$fichiers[$i]=$file;
 $i++;
}

   rsort($fichiers);

foreach($fichiers as $file)
{
  

  echo "<a href='".$file."' data-ngthumb='".$file."' loading='lazy'></a>";
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

<script type="text/javascript">
//Changement de couleur du logo au déploiement
      function color() {
      var checkBox = document.getElementById("check");
  if (checkBox.checked == true) {
    document.getElementById("logo").style.fill = "black";
  } else {
    document.getElementById("logo").style.fill = "white";
  }
}
</script>

</body>
</html>
