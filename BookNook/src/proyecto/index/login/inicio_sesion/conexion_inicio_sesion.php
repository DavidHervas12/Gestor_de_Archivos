<?php
// Se encarga de conectar con el localhost.
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


?>