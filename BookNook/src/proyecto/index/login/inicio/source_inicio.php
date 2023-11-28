<?php  
// Archivo que se encarga redireccionar a una página dependiendo del botón que se haya seleccionado.
$vender="";
$eliminar="";
$actualizar="";
$comprar="";


if(isset($_REQUEST['agregar-libro'])) $vender=$_REQUEST['agregar-libro'];
if(isset($_REQUEST['eliminar-libro'])) $eliminar=$_REQUEST['eliminar-libro'];
if(isset($_REQUEST['actualizar-libro'])) $actualizar=$_REQUEST['actualizar-libro'];
if(isset($_REQUEST['comprar-libro'])) $comprar=$_REQUEST['comprar-libro'];



if($vender) require("venta.php");
if($eliminar) require("eliminacion.php");
if($actualizar) require("actualizacion.php");
if($comprar) require("compra.php");

?>