
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listado sin paginacion</title>
  <link rel="StyleSheet" href="estilos.css" type="text/css"> 
</head>
<body>
<table  align="center"  >
  <tr   >
    <th>ID</th>
    <th>Nombre</th>
    <th>Pais</th>
    <th>Habitantes</th>
    <th>Superficie</th>
    <th>Tiene metro</th>
  </tr>

  <?php
  include("conex.php");
  $vSQL="SELECT * FROM capitales ";
  $vResult=mysqli_query($link,$vSQL);
  $total_registros=mysqli_num_rows($vResult);

  while($fila=mysqli_fetch_array($vResult)){
    ?>
    <tr>
      <td ><?php echo $fila["id"];?></td>
      <td><?php echo $fila["nombre"];?></td>
      <td><?php echo $fila["pais"];?></td>
      <td><?php echo $fila["habitantes"];?></td>
      <td><?php echo $fila["superficie"];?></td>
      <td><?php echo $fila["tieneMetro"];?></td>
    </tr>
  
    <tr>
      <td></td>
    </tr>

  <?php }
    

  mysqli_free_result($vResult);
  mysqli_close($link);?>
</table>
</body>
</html>

  




 