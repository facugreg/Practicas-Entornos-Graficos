<?php 
session_start();
if(isset($_SESSION["nombre"])){
  echo "¡Bienvenido al sitio!";

}
else{

  echo "No puede visitar esta pagina...";
}

?>