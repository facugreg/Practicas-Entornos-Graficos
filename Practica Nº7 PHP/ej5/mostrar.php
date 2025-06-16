<?php 
session_start();
if(isset($_SESSION["nombre_usuario"]) && isset($_SESSION["password_usuario"])){
echo "El nombre de usuario ingresado fue ", $_SESSION["nombre_usuario"]. "</br></br>";
echo "La contraseña de usuario ingresada fue ", $_SESSION["password_usuario"];}
else{
  echo "No se encontraron variables de sesion...";
}
session_destroy();

?>