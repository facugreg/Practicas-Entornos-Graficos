<?php
include("conex.php");
$vID=$_POST["id"];
$vNombre=$_POST["nombre"];
$vPais=$_POST["pais"];
$vHabitantes=$_POST["habitantes"];
$vSuperficie=$_POST["superficie"];
$vSQL="UPDATE capitales set id='$vID', nombre='$vNombre', pais='$vPais', habitantes='$vHabitantes', superficie='$vSuperficie' where id='$vID'";
mysqli_query($link,$vSQL) or die (mysqli_error($link));
echo "La capital fue modificada";
echo '<a href="menu.html">Volver al menu </a>';
mysqli_close($link);
?>