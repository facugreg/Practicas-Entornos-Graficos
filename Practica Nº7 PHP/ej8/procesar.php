<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php 
include("conex.php");
$palabra=$_POST["palabra"];
$vSQL="SELECT * FROM canciones where nombre like '%".$palabra."%'";
$vResult=mysqli_query($link,$vSQL) or die(mysqli_error($link));
if(mysqli_num_rows($vResult)==0){
  echo "No hay resultados";

}
else{
  echo "<center>Resultados</center>";
  while($cat=mysqli_fetch_array($vResult)){
    ?>
    <td><?php echo $cat["nombre"];?></td>
  </br>
    <tr>
      <td colspan="5"></td>
    </tr>
    <?php
  }
}



?>
  
</body>
</html>