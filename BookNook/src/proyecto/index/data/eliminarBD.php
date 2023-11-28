<?php
// Archivo para borrar la base de datos.
mysqli_report(MYSQLI_REPORT_ERROR);
require("conexion.php");

$consulta="DROP DATABASE IF EXISTS bdlibros;";
if (!$resultado=$mysqli->query($consulta))
{
  echo "Lo sentimos. App falla<br>";
  echo "Error en $consulta <br>";
  echo "Num.error: ".$mysqli->errno."<br>";
  echo "Error: ".$mysqli->error."<br>";
  exit;
} else{
  if ($mysqli->affected_rows > 0){
    echo "Base de datos eliminada correctamente<br>";
  }else{
    echo "La base de datos no existe";
  }
}

echo "<a href='index.php'>Volver</a>";

?>