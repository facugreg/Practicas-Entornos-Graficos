<?php 
session_start();
extract($_REQUEST);
include("conex.php");
if(!isset($cantidad)){
  $cantidad=1;
}
$vSQL="SELECT * FROM catalogo where id=$id";
$vResult=mysqli_query($link,$vSQL);
$row=mysqli_fetch_array($vResult);
if(isset($_SESSION["carro"])){
  $carro=$_SESSION["carro"];

}
$carro[md5($id)]=array('identificador'=>md5($id),'cantidad'=>$cantidad,'producto'=>$row['producto'],'precio'=>$row['precio'],'id'=>$id); 
$_SESSION["carro"]=$carro;
mysqli_free_result($vResult);
mysqli_close($link);
header("Location:catalogo.php?".SID); 


?>