<?php  
// Archivo que se encarga redireccionar a una página dependiendo del botón que se haya seleccionado.
$btn1="";
$btn2="";
$btn3="";
$btn4="";

if(isset($_REQUEST['crear'])) $btn1=$_REQUEST['crear'];
if(isset($_REQUEST['insertar'])) $btn2=$_REQUEST['insertar'];
if(isset($_REQUEST['eliminar'])) $btn3=$_REQUEST['eliminar'];
if(isset($_REQUEST['conectar'])) $btn4=$_REQUEST['conectar'];


if($btn1) require("data/crearBD.php");
if($btn2) require("data/insertar.php");
if($btn3) require("data/eliminarBD.php");
if($btn4) header("Location: login/login.php");
?>