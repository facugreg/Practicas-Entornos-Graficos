<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $destinatario=$_POST["correo"];
  $asunto="Recomendacion de un sitio web";
  $nombre=$_POST["nombre"];
  $cuerpo="Tu amigo $nombre te recomienda este sitio: direccion del sitio";
  $headers = "MIME-Version:1.0\r\n";
  $headers .= "Content-type:text/html; charset=iso-8859- 1\r\n";
  $headers .= "From:  <correositio@correo.com>\r\n";
  $headers .= "Reply-To: correositio@correo.com\r\n";

  if(mail($destinatario,$asunto,$cuerpo,$headers)){
    echo "Recomendacion realizada de manera exitosa";
  }
  else {
    echo "Error. Por favor, intente nuevamente";
  }
}

?>