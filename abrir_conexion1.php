<?php  

$host="localhost";
$basededatos="1grado";
$usuariodb="guerra";
$clavedb="Osita3003*";

$tabla_db1="lengua";
$tabla_db2="matematica";
$tabla_db3="ciencias_naturales";
$tabla_db4="ciencias_sociales";
$tabla_db5="educacion_fisica";

error_reporting(0);

$conexion=new mysqli ($host, $usuariodb, $clavedb, $basededatos);

if ($conexion->connect_errno) {
 	echo "Nuestro sitio experimenta fallos...";
 	exit();
 } 
?>