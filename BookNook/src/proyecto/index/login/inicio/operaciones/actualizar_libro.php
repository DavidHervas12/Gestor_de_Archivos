<?php 
// Archivo que se encarga de realizar la consulta de actualizar el precio de un libro.
session_start();
$username_vendedor=$_SESSION['username'];

mysqli_report(MYSQLI_REPORT_ERROR);

require("conexion_inicio.php");

$basedatos="bdlibros";
$mysqli->select_db($basedatos);

$isbn = $_REQUEST['isbn'];
$precio = $_REQUEST['precio'];

$consulta="UPDATE libros SET precio=$precio WHERE isbn='$isbn' AND username_vendedor='$username_vendedor';";

echo $consulta."<br>";

crearConsulta($consulta, $mysqli);

echo "<a href='/proyecto/index/login/inicio/inicio.php'>Volver</a>";

?>