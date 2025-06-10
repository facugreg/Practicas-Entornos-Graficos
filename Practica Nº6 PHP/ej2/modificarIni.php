<?php
$vID=$_POST["id"];
include("conex.php");
$vSQL="SELECT *  FROM capitales where id=$vID";
$vResult=mysqli_query($link,$vSQL);
$fila=mysqli_fetch_array($vResult);
if(mysqli_num_rows($vResult)==0){
  echo "No existe capital con ese id<br>";
  echo '<a href="formModificar.html">Volver</a>';
}
else{
  ?>
    <form action="modificar.php" method="post">
      <input type="hidden" id="id" name="id" value="<?php echo $fila["id"] ?>">
      <label for="nombre">Ingresar nombre de la ciudad</label>
      <input type="text" id="nombre" name="nombre" required value="<?php echo$fila["nombre"] ?>" />
      <br />
      <label for="pais">Ingresar pais de la capital</label>
      <input type="text" id="pais" name="pais" required value="<?php echo $fila["pais"] ?>" />
      <br />
      <label for="habitantes"> Ingresar cantidad de habitantes</label>
      <input type="number" id="habitantes" name="habitantes" value="<?php echo $fila["habitantes"] ?>" required />
      <br />
      <label for="superficie"> Ingresar superficie</label>
      <input type="number" id="superficie" name="superficie" value="<?php echo $fila["superficie"] ?>" required />
      <br />
      <label for="tieneMetro"> Ingresar si tiene metro o no</label>
      <input type="hidden" name="tieneMetro" value="no tiene" />
      <input
        type="checkbox"
        id="tieneMetro"
        value="tiene"
        name="tieneMetro"
        
      />
      <br />
      <input type="submit" value="Modificar" />
      <br />
    </form>
<?php
}
mysqli_free_result($vResult);
mysqli_close($link);

?>