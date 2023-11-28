<?php
// Archivo que, en caso de disponer de un servidor de bases de datos remoto, se encargaría
// de conectar con el mismo.
$servidor=$_REQUEST['servidor'];
$usuario=$_REQUEST['nombre_usuario'];
$clave=$_REQUEST['clave'];

@$mysqli = new mysqli($servidor,$usuario,$clave);
if ($mysqli->connect_errno)
{
  echo "Fallo conexión a Mysql: ".$mysqli->connect_errno." ".$mysqli->connect_error;
  die ("Salida del programa. Error acceso BBDD");
}
else{
   echo "Se ha conectado al servidor<br>";
   header("Location: inicio_sesion/inicio_sesion.php");
}


?>