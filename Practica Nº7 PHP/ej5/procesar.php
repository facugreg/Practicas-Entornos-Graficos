<?php 
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
  
  $_SESSION["nombre_usuario"]=$_POST["nombre"];
  $_SESSION["password_usuario"]=$_POST["password"];
  header("Location: mostrar.php");
  exit();
}

?>