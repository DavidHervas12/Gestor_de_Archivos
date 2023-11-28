<?php 
// Archivo encargado de eliminar un libro, que ha sido puesto a la venta por este vendedor.
session_start();
$username_vendedor=$_SESSION['username'];

mysqli_report(MYSQLI_REPORT_ERROR);

require("conexion_inicio.php");

$basedatos="bdlibros";
$mysqli->select_db($basedatos);

$isbn = $_REQUEST['isbn'];

$consulta="DELETE FROM libros WHERE isbn='$isbn' AND username_vendedor='$username_vendedor';";

echo $consulta."<br>";

if (!$resultado=$mysqli->query($consulta))
{  
  echo "Lo sentimos. App falla<br>";
  echo "Error en $consulta <br>";
  echo "Num.error: ".$mysqli->errno."<br>";
  echo "Error: ".$mysqli->error."<br>";
  exit;
}else {
    $rows_affected=mysqli_affected_rows($mysqli);
    if($rows_affected>0)echo "El libro con isbn $isbn ha sido eliminado.<br>";
    else echo "El libro con el isbn $isbn no se encuentra en la base de datos o este usuario no es su propietario.<br>";
}

echo "<a href='/proyecto/index/login/inicio/inicio.php'>Volver</a>";

?>