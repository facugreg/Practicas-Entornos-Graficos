<?php
session_start()
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contador</title>
 </head>
 <body>
  <?php if(!isset($_SESSION["contador"])){
    $_SESSION["contador"]=1;
  }
  else{
    $_SESSION["contador"]++;
  }?>
  <a href="mostrar.php"> Ver cantidad de visitas </a>
  
 </body>
 </html>