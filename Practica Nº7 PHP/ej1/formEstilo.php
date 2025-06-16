<?php
if(isset($_POST["estilos"])){
  $estilo=$_POST["estilos"];
  setcookie("estilo",$estilo,time()+86400);
}
else{
  if(isset($_COOKIE["estilo"])){
    $estilo=$_COOKIE["estilo"];
  }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />  
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Estilo</title>
    <?php
if (isset($estilo)){
echo '<link rel="stylesheet" type="text/css" href="' . $estilo . '.css">';
}
?>
  </head>
  <body>
    <form action="formEstilo.php" method="post">
      <label for="estilos">Ingresar color del fondo del sitio</label>

      <select name="estilos">
        <option value="rojo">Rojo</option>
        <option value="verde">Verde</option>
        <option value="azul">Azul</option>
      </select>
      <input type="submit" value="Actualizar color de fondo" />
    </form>
  </body>
</html>
