<?php 
// Archivo que se encarga de agregar el usuario registrado a la base de datos.
mysqli_report(MYSQLI_REPORT_ERROR);

require("conexion_registro.php");

$basedatos="bdlibros";
$mysqli->select_db($basedatos);

$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$clave = $_REQUEST['clave'];
$direccion = $_REQUEST['direccion'];
$telefono = $_REQUEST['telefono'];

$consulta="INSERT INTO usuarios (username, email, contraseña, direccion, telefono) 
VALUES ('$username', '$email', '$clave', '$direccion', '$telefono');";

echo $consulta."<br>";

if (!$resultado=$mysqli->query($consulta))
{
  echo "Lo sentimos. App falla<br>";
  echo "Error en $consulta <br>";
  echo "Num.error: ".$mysqli->errno."<br>";
  echo "Error: ".$mysqli->error."<br>";
  exit;
}else
{ 
    echo "consulta realizada con éxito<br>";
    echo "<a href='/proyecto/index/login/inicio_sesion/inicio_sesion.php'>Haz click aquí para iniciar sesión.</a>";
}
?>