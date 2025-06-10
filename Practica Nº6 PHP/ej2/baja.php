<?php
$vid=$_POST["id"];
include("conex.php");
$vSQL="SELECT * FROM capitales where id=$vid";
$vResult=mysqli_query($link,$vSQL);
if(mysqli_num_rows($vResult)==0){
  echo "La capital no existe...<br>";
  echo '<a href="formBaja.html">Volver</a>';
}
else{
  $vSQL="DELETE FROM capitales where id='$vid'";
  mysqli_query($link,$vSQL);
  echo "La capital fue borrada <br>";
  echo "<a href=menu.html> Volver al menu </a>";

}
mysqli_free_result($vResult);
mysqli_close($link);

?>