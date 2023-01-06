<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/photo.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css" />
  <link rel="stylesheet" type="text/css" href="css/icons.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>

  <link href="css/nanogallery2.min.css" rel="stylesheet" type="text/css">

  <script type="text/javascript" src="js/jquery.nanogallery2.min.js"></script>

  <title></title>
</head>
<body >  
 <!--Bandeau non clickable pour stopper animation-->
    <header>
      <a class="section textsec" href="competences.html">Mes compétences</a>
      <a class="section" id="home" href="index.html">
        <img id="logo" alt="logo" src="assets/icons/Logo.png"
      /></a>
      <a class="section textsec" href="propos.html">À propos</a>
    </header>
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
  

  echo "<a href='".$file."' data-ngthumb='".$file."'></a>";
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
