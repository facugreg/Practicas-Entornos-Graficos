<?php
$mostrarTodos=false;


if(!isset($_COOKIE["titular"])){

$mostrarTodos=true;


  

}
else{
  $tipo=$_COOKIE["titular"];
  
}
if(isset($_POST["Tipo"])){
  $tipo=$_POST["Tipo"];
  setcookie("titular",$tipo,time()+86400);
  $mostrarTodos=false;} 
  
  $titulares=["Politica"=> "Israel e Irán intercambian ataques y se reportan explosiones en Tel Aviv, Jerusalén y Teherán","Economica"=>"En abril, el Sector Público Nacional volvió a registrar superávit financiero, por $572.341 millones, después del pago de intereses por $ 273.608 millones","Deportiva"=>"El mundial de clubes comienza con un empate"];
if($mostrarTodos){
  foreach($titulares as $clave=>$valor){
    echo "$clave: $valor"."</br></br>";
  }}
else {
  echo "$tipo: $titulares[$tipo]";
}

  
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3>Seleccionar tipo de noticia a mostrar</h3>
  <form action="" method="post">
  <input type="radio" id="Politica" name="Tipo" value="Politica">
  <label for="Politica">Politica</label>
  <input type="radio" id="Economica" name="Tipo" value="Economica">
  <label for="Economica">Economica</label>
  <input type="radio" id="Deportiva" name="Tipo" value="Deportiva">
  <label for="Deportiva">Deportiva</label>   </br>
  <input type="submit">
  
</form>
<p>¿Desea eliminar sus prefencias? <a href="borrar.php">Click aqui</a></p>
</body>
</html>