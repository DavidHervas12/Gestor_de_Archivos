<?php 
// Archivo que se encarga de agregar un libro a la base de datos.
session_start();
$username_vendedor=$_SESSION['username'];

mysqli_report(MYSQLI_REPORT_ERROR);

require("conexion_inicio.php");

$basedatos="bdlibros";
$mysqli->select_db($basedatos);

$isbn = $_REQUEST['isbn'];
$nombre = $_REQUEST['nombre'];
$genero = $_REQUEST['genero'];
$num_pag = $_REQUEST['num_pag'];
$idioma = $_REQUEST['idioma'];
$fecha = $_REQUEST['fecha'];
$precio = $_REQUEST['precio'];

$consulta="INSERT INTO libros (isbn, nombre, genero, num_pags, idioma, fecha_publicacion, precio, username_vendedor) 
VALUES ('$isbn', '$nombre', '$genero', '$num_pag', '$idioma', '$fecha', '$precio', '$username_vendedor');";

echo $consulta."<br>";

crearConsulta($consulta, $mysqli);

echo "<a href='/proyecto/index/login/inicio/inicio.php'>Volver</a>";

?>