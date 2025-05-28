<?php
session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mostrar contador</title>
</head>
<body>
  <?php 
echo "Has visitado " . ($_SESSION["contador"]) . " páginas";
 ?>
  <a href="contador.php"> Volver </a> 
</body>
</html>