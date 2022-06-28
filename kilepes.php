<?php
session_start();
//$_SESSION["belepve"] = false;
session_destroy();
header("location:belepes.php?nev=admin");
exit(0);

?>