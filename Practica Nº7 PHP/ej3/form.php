<?php 
if(isset($_COOKIE["nombre"])){
echo "El nombre del ultimo usuario es ",$_COOKIE["nombre"];
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="procesar.php" method="post">
      <label for="nombre">Ingresar nombre</label>
      <input type="text" id="nombre" name="nombre" required />
      <br />
      <input type="submit" />
    </form>
  </body>
</html>
