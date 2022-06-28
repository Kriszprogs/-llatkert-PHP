<?php
    session_start();

    if($_SESSION["be"] == false){
        header("location:belepes.php?hiba='Be kell jelentkezni'");
        exit(0);
    }
    print_r($_POST);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Beléptél</title>
  </head>
  <body>
    <h1>Szűcs Krisztián</h1>
      <p>Beléptél</p>
      <nav>
        <ul>
          <li><a href="leiras.inc.php" target="_blank">leírás</a></li>
          <li><a href="jelentkezes.inc.php" target="_blank">jelentkezés</a></li>
          <li><a href="partnerek.inc.php" target="_blank">partnerek</a></li>
          <li><a href="kilepes.php" target="_blank">kilépés</a></li>
        </ul>
      </nav>
      <?php

      include("leiras.inc.php");
      include("jelentkezes.inc.php");
      include("partnerek.inc.php");
      ?>
  </body>
</html>
