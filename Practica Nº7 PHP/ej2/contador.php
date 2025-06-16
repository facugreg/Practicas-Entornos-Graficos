<?php
if(!isset($_COOKIE["visitas"])){
  $visitas=1;
  setcookie("visitas",$visitas,time()+86400);
}
else{
  $visitas=$_COOKIE["visitas"]+1;
  setcookie("visitas","$visitas",time()+86400);
  
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  if ($visitas==1){
    echo "¡Bienvenido al sitio!";
  }
  else{
    echo "Usted ha ingresado un total de ", $_COOKIE["visitas"], " veces";
  }
  ?>
  
</body>
</html>