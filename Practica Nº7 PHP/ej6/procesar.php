<?php 
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $correo=$_POST["correo"];
  include("conex.php");
  $vSQL="SELECT * FROM alumnos where mail='$correo'";
  $vResult=mysqli_query($link,$vSQL) or die(mysqli_error($link));
  if(mysqli_num_rows($vResult)==0){
    echo "No se encontro alumno";
  }
  else{
  $alumno=mysqli_fetch_array($vResult);
  $_SESSION["nombre"]=$alumno["nombre"];
  }
  header("Location: mostrar.php");
  exit();

}


?> 