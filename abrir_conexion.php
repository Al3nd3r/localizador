<?php  

$host="localhost";
$basededatos="estudiantes";
$usuariodb="josueph";
$clavedb="Osita3003*";

$tabla_db1="registro";
$tabla_db2="estudi";

error_reporting(0);

$conexion=new mysqli ($host, $usuariodb, $clavedb, $basededatos);

if ($conexion->connect_errno) {
 	echo "Nuestro sitio experimenta fallos...";
 	exit();
 } 
?>