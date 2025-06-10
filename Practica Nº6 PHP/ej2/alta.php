<?php
$id=$_POST["id"];
$nombre=$_POST["nombre"];
$pais=$_POST["pais"];
$habitantes=$_POST["habitantes"];
$superficie=$_POST["superficie"];
$tieneMetro=$_POST["tieneMetro"];
include("conex.php");
$vSQL="SELECT count(id) as cant from capitales where id='$id'";
$vResult=mysqli_query($link,$vSQL) or die(mysqli_error($link));
$vCantUsuarios=mysqli_fetch_assoc($vResult);
if($vCantUsuarios["cant"]!=0){
  echo "La capital ya existe";
  
  echo ('<a href="menu.html">Volver al menu</a>'); 
}
else{
  $vSQL="INSERT INTO capitales(id, nombre, pais, habitantes, superficie, tieneMetro) VALUES($id,'$nombre','$pais',$habitantes,$superficie,'$tieneMetro')";
  mysqli_query($link,$vSQL) or die(mysqli_error($link));
  echo "La capital fue registrada con exito<br>";
  echo '<a href="menu.html"> Volver al menu ';
}
mysqli_free_result($vResult);
mysqli_close($link);
?>