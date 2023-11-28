<?php
// Archivo encargado de conectar con el servidor en localhost.
$servidor="localhost";
$usuario="root";
$clave="";

@$mysqli = new mysqli($servidor,$usuario,$clave);
if ($mysqli->connect_errno)
{
  echo "Fallo conexión a Mysql: ".$mysqli->connect_errno." ".$mysqli->connect_error;
  die ("Salida del programa. Error acceso BBDD");
}
else echo "Se ha conectado al servidor<br>";

function crearConsulta($consulta, $mysqli){
    if (!$resultado=$mysqli->query($consulta))
{
  echo "Lo sentimos. App falla<br>";
  echo "Error en $consulta <br>";
  echo "Num.error: ".$mysqli->errno."<br>";
  echo "Error: ".$mysqli->error."<br>";
  exit;
}else echo "consulta realizada con éxito<br>";
}
?>