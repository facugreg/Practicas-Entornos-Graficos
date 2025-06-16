<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre=$_POST["nombre"];
setcookie("nombre",$nombre,time()+84600);
}
?>