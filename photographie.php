<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/photo.css">
  <link rel="stylesheet" type="text/css" href="css/simple-lightbox.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css" />
  <link rel="stylesheet" type="text/css" href="css/icons.css" />
  <title></title>
  <script type="text/javascript">document.oncontextmenu = function() {
    alert('La protection des images est activé sur cette page');
  return false;
  </script>
</head>
<body>  
 <!--Bandeau non clickable pour stopper animation-->
    <header>
      <a id="home" href="index.html">
        <img id="logo" alt="logo" src="assets/icons/Logo.png"
      /></a>
    </header>
<div class="gallery">

<?php
$files = glob('assets/photos/portfolio/*.{jpg,png}', GLOB_BRACE);
foreach($files as $file) {

 echo "<a data-fslightbox href='".$file."'><div class='contain-img'><img class='img-portfolio' src=".$file."></div></a>";
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

<script src="js/fslightbox.js"></script>
</body>
</html>
