<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilos.css " type="text/css" >
  <title>Listado con paginacion</title>
</head>
<body>
  <?php 
  include("conex.php");
  $cantPag=2;
  $pagina=isset($_GET['pagina'])?$_GET['pagina']:null;
  if (!$pagina){
    $inicio=0;
    $pagina=1;
  }
else{
  $inicio=($pagina -1)* $cantPag;

}
$vSQL="SELECT * FROM capitales ";
$vResultado=mysqli_query($link,$vSQL);
$total_registros=mysqli_num_rows($vResultado);

$total_pag=ceil($total_registros/$cantPag);
echo "Numeros de registros encontrados: ". $total_registros ."<br>";
echo "Se muestran paginas de ". $cantPag. " registros cada una <br>";
echo "Mostrando la pagina ". $pagina." de ".$total_pag ."<br>" ;
$vSQL="SELECT * FROM capitales "." limit ".$inicio ."," .$cantPag;
$vResultado=mysqli_query($link,$vSQL);
$total_registros=mysqli_num_rows($vResultado);

  
  ?>

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
  while($fila=mysqli_fetch_array($vResultado)){
    ?>
    <tr>
      <td> <?php echo $fila["id"]; ?></td>
      <td> <?php echo $fila["nombre"]; ?></td>
      <td> <?php echo $fila["pais"]; ?></td>
      <td> <?php echo $fila["habitantes"]; ?></td>
      <td> <?php echo $fila["superficie"]; ?></td>
      <td> <?php echo $fila["tieneMetro"]; ?></td>
    </tr>
    <tr>
      <td colspan="5">
    </tr>
  
  <?php
  } 
  mysqli_free_result($vResultado);
  mysqli_close($link);
  ?>
  </td>
</tr>
</table>
<?php 
if ($total_pag>1){
  for($i=1;$i<=$total_pag;$i++){
    if($pagina==$i){
      echo $pagina."";
    }
    else{
      echo "<a  href='Listado_pag.php?pagina=" . $i ."'>" . $i . "</a> ";}}}?>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p align="center"><a href="Menu.html">Volver al menu</a></p>

    
  

</body>
</html>