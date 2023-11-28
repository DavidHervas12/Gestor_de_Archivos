<?php
// Archivo para crear la base de datos con sus respectivas tablas.
mysqli_report(MYSQLI_REPORT_ERROR);
require("conexion.php");

$consulta="CREATE DATABASE IF NOT EXISTS bdlibros;";
crearConsulta($consulta, $mysqli);

$basedatos="bdlibros";
$mysqli->select_db($basedatos);

$consulta="CREATE TABLE IF NOT EXISTS usuarios ";
$consulta.="(username VARCHAR(12) PRIMARY KEY,";
$consulta.="nombre VARCHAR(16) NOT NULL, ";
$consulta.="email VARCHAR(255) NOT NULL, ";
$consulta.="contraseña VARCHAR(32) NOT NULL, ";
$consulta.="direccion VARCHAR(200) NOT NULL, ";
$consulta.="telefono VARCHAR(200) NOT NULL); ";

crearConsulta($consulta, $mysqli);

$consulta="CREATE TABLE IF NOT EXISTS libros ";
$consulta.="(isbn VARCHAR(100) PRIMARY KEY,";
$consulta.="nombre VARCHAR(100) NOT NULL, ";
$consulta.="genero VARCHAR(45) NOT NULL, ";
$consulta.="num_pags INT NOT NULL, ";
$consulta.="idioma VARCHAR(45) NOT NULL, ";
$consulta.="fecha_publicacion VARCHAR(100) NOT NULL, ";
$consulta.="precio DECIMAL NOT NULL, ";
$consulta.="vendido BOOL DEFAULT(0) NOT NULL, ";
$consulta.="username_vendedor VARCHAR(12) NOT NULL, ";
$consulta.="username_comprador VARCHAR(12) NULL, ";
$consulta.="FOREIGN KEY(username_vendedor) REFERENCES usuarios(username), ";
$consulta.="FOREIGN KEY(username_comprador) REFERENCES usuarios(username) ON DELETE SET NULL);";

crearConsulta($consulta, $mysqli);


echo "<a href='index.php'>Volver</a>";
?>