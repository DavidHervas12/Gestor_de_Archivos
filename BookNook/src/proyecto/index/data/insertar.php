<?php
// Archivo para insertar dartos de prueba en la base de datos.
mysqli_report(MYSQLI_REPORT_ERROR);

require("conexion.php");

$basedatos="bdlibros";
$mysqli->select_db($basedatos);

$consulta="INSERT INTO usuarios (username, email, contraseña, direccion, telefono) VALUES ('David', 'dhervas456@gmail.com', '1234', 'Avda. Alicante', '93049029');";

echo $consulta."<br>";

crearConsulta($consulta, $mysqli);

$consulta="INSERT INTO usuarios (username, email, contraseña, direccion, telefono) VALUES ('Jaime', 'jaime@gmail.com', '1234', 'Avda. Valencia', '63049229');";

echo $consulta."<br>";

crearConsulta($consulta, $mysqli);

$consulta="INSERT INTO usuarios (username, email, contraseña, direccion, telefono) VALUES ('Vicente', 'vicente@gmail.com', '1369', 'C/ Colón', '62247219');";

echo $consulta."<br>";

crearConsulta($consulta, $mysqli);

$consulta="INSERT INTO usuarios (username, email, contraseña, direccion, telefono) VALUES ('Julio', 'julio@gmail.com', '4321', 'Avda. Castellón', '67948249');";

echo $consulta."<br>";

crearConsulta($consulta, $mysqli);

$consulta="INSERT INTO libros (isbn, nombre, genero, num_pags, idioma, fecha_publicacion, precio, username_vendedor) 
VALUES('9781234567897', 'El problema de los tres cuerpos', 'Ciencia Ficción', 333, 'Castellano',
'2011-04-02', 15.99, 'David');";

echo $consulta."<br>";

crearConsulta($consulta, $mysqli);

$consulta="INSERT INTO libros (isbn, nombre, genero, num_pags, idioma, fecha_publicacion, precio, username_vendedor) 
VALUES('6721254572817', 'Harry Potter y la piedra filosofal', 'Fantasía', 200, 'Castellano',
'1999-11-22', 17.99, 'Jaime');";

echo $consulta."<br>";

crearConsulta($consulta, $mysqli);

$consulta="INSERT INTO libros (isbn, nombre, genero, num_pags, idioma, fecha_publicacion, precio, username_vendedor) 
VALUES('9788413147628', 'Rey Blanco', 'Policíaca', 200, 'Inglés',
'2023-05-04', 7.95, 'David');";

echo $consulta."<br>";

crearConsulta($consulta, $mysqli);

$consulta="INSERT INTO libros (isbn, nombre, genero, num_pags, idioma, fecha_publicacion, precio, username_vendedor) 
VALUES('9780571334650', 'Normal people', 'Novela', 200, 'Inglés',
'2018-10-21', 19.99, 'David');";

echo $consulta."<br>";

crearConsulta($consulta, $mysqli);

echo "<a href='index.php'>Volver</a>";

?>