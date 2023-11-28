<?php
// Archivo que se encarga de llevar a cabo el inicio de sesión.
session_start();

require("conexion_inicio_sesion.php");

$basedatos="bdlibros";
$mysqli->select_db($basedatos);

$username = $_REQUEST['nombre_usuario'];
$password = $_REQUEST['clave'];
 
$consulta = "SELECT * FROM usuarios WHERE username='$username' AND contraseña='$password'";
$result = mysqli_query($mysqli, $consulta);
 
if (mysqli_num_rows($result) == 1) {
    $_SESSION['sesion_iniciada'] = true;
    $_SESSION['username'] = $username;
    header("Location: /proyecto/index/login/inicio/inicio.php");
} else {
    echo "Nombre de usuario o contraseña incorrectos. <a href='inicio_sesion.php'>Intente de nuevo</a><br>";
    echo "Si no tienes cuenta, <a href='/proyecto/index/login/registro/registro.php'>pulsa aquí</a> para registrarte";
}
?>