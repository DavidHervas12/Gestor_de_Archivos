<?php 
// Archivo que se encarga de realizar la compra de un libro
session_start();
$username_vendedor=$_SESSION['username'];

mysqli_report(MYSQLI_REPORT_ERROR);

require("conexion_inicio.php");

$basedatos="bdlibros";
$mysqli->select_db($basedatos);

$isbn = $_REQUEST['isbn'];


$consulta="UPDATE libros SET vendido=1, username_comprador = '$username_vendedor' WHERE isbn='$isbn';";

echo $consulta."<br>";

crearConsulta($consulta, $mysqli);

echo "<a href='/proyecto/index/login/inicio/inicio.php'>Volver</a>";

?>