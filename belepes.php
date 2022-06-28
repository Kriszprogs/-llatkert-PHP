<?php
    session_start();
    //$_SESSION["belepve"] = false
    if(isset($_POST["mehet"])){
        //print_r($_POST);
        $nev = $_POST["nev"];
        $jsz = $_POST["jsz"];
        if($nev == "admin" && $jsz == "admin"){
            $_SESSION["be"] = true;
            $_SESSION["nev"] = $nev;
            /*header("location:index.php");
            exit(0);*/
        }else{
            $_SESSION["be"] = false;
        }

    }
 

    if(isset($_SESSION["be"]) &&  $_SESSION["be"] == true){
        header("location:index.php");
        exit(0);
    }
    
    
    

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Belépés</title>
  </head>
  <body>
    <form action="" method="POST">
        <p>
            <label for="nev">Név:</label>
            <input type="text" name="nev" id="nev" placeholder="admin">
        </p>

        <p>
            <label for="jsz">Jelszó:</label>
            <input type="password" name="jsz" id="jsz" placeholder="admin">
        </p>

        <p>
            <input type="submit" name="mehet" value="Belépés">
        </p>
    </form>
  </body>
</html>
