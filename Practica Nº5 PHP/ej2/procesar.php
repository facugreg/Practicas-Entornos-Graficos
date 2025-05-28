<?php if($_SERVER["REQUEST_METHOD"]=="POST"){
  $cuerpo=$_POST["cuerpo"];
  $asunto=$_POST["asunto"];
  $correo=$_POST["mail"];
  $headers = "MIME-Version:1.0\r\n";
  $headers .= "Content-type:text/html; charset=iso-8859- 1\r\n";
  $headers .= "From: usuario <$correo>\r\n";
  $headers .= "Reply-To: $correo\r\n";
  $destinatario= "unejemplo@correo.com"; 

  if(mail($destinatario,$asunto,$cuerpo,$headers)){
    echo "Gracias por su consulta. Se responderá lo antes posible."; 
    

  }
  else{
  echo "Error. Por favor, intente nuevamente.";
  }

} ?>
<br/>
<a href="index.html">Volver al inicio</a>;