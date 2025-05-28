
<?php if($_SERVER["REQUEST_METHOD"]=="POST"){
  $destinatario=$_POST["destinatario"];
  $asunto=$_POST["asunto"];
  $cuerpo=$_POST["cuerpo"];
  $headers = "MIME-Version:1.0\r\n";
  $headers .= "Content-type:text/html; charset=iso-8859- 1\r\n";
  $headers .= "From: facu <gregoretfacu@gmail.com>\r\n";
  $headers .= "Reply-To: gregoretfacu18@gmail.com\r\n";

 
if( mail($destinatario,$asunto,$cuerpo,$headers)){
  echo "Mail enviado";

                                                }
else{
  echo"El mail no se ha enviado";
};
};
?>






 