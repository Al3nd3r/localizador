<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrate</title>
    <link rel="icon" href="dibujos/logo1.png">
	<style>
@import url("https://fonts.googleapis.com/css?family=Montserrat|Montserrat+Alternates|Poppins&display=swap");


		body {
            font-family: "Montserrat Alternates", sans-serif;
    background-color: #333;
    margin: 20px;
    padding: 0;
	max-width: 145vh;
	display: inline;
}

img{
	text-align: center;
	width:300px; 
	height: auto;
} 

.row {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.col-md-4 {
    flex: 1;
}

.col-md-4:nth-child(2) {
    margin-top: 250px;
	padding: 20px;
    width: 200vh;
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    
}

h1 {
    color: #28a745;
    margin-bottom: 20px;
}

h2 {
    color: #333;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #333;
}

.input-group {
    position: relative;
}

.form-control {
    width: 80%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.form-control:focus {
    border-color: #007bff;
    outline: none;
}

.btn {
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    margin: 5px;
    transition: background-color 0.3s;
}

.btn-success {
    background-color: #28a745;
}

.btn-success:hover {
    background-color: #218838;
}

.btn-primary {
    background-color: #007bff;
}

.btn-primary:hover {
    background-color: #0069d9;
}

.btn-info {
    background-color: #17a2b8;
}

.btn-info:hover {
    background-color: #138496;
}

.btn-danger {
    background-color: #dc3545;
}

.btn-danger:hover {
    background-color: #c82333;
}

a {
    color: #28a745;
}
	</style>
</head>
<body>

<div class="row">
		<div class="col-md-4"></div>
    	<div class="col-md-4">
    	<center><h1>REGISTRATE</h1></center>
    	<form method="POST" action="registrar.php">

	<center>
		<div class ="form-group">
			<label for="codi">Ingrese un Codigo de Usuario</label>
			<input type="text/num" name="codi" class="form-control" id="codi">
		</div>
    	<div class ="form-group">
			<label for="nomb">Nombre</label>
			<input type="text" name="nomb" class="form-control" id="nomb">
		</div>
		<br>
		<div class ="form-group">
			<label for="apel">Apellido</label>
			<input type="text" name="apel" class="form-control" id="apel">
		</div>
		<br>
		<div class ="form-group">
			<label for="naci">Fecha de Nacimiento</label>
			<input type="text/num" name="naci" class="form-control" id="naci">
		</div>
        <div class ="form-group">
			<label for="cedu">Cedula</label>
			<input type="text" name="cedu" class="form-control" id="cedu">
		</div>
		<br>
		<div class ="form-group">
			<label for="cor">Ingrese un Correo Electronico</label>
			<input type="email" name="cor" class="form-control" id="cor">
		</div>
		<br>
		<div class ="form-group">
			<label for="contra">Ingrese una contraseña</label>
			<input type="text/num" name="contra" class="form-control" id="contra">
		</div>
		<div class ="form-group">
			<label for="tel">Telefono</label>
			<input type="text/num" name="tel" class="form-control" id="tel">
		</div>
		</center>
		<br>
		<center>
			<input type="submit" value="Registrar" class="btn btn-success" name="btn1">
			<input type="submit" value="Consultar" class="btn btn-primary" name="btn2">
		</center>
    </form>
<br>
    <?php

include ("abrir_conexion.php");

	$codi = "";
    $nomb = "";
    $apel = "";
	$naci = "";
    $cedu = "";
    $cor = "";
    $contra = "";
	$tel = "";

if (isset($_POST['btn2']))
{
    $codi  = $_POST['codi'];

    $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1 WHERE codi='$codi'");
    while($consulta = mysqli_fetch_array($resultados))
{
      echo $consulta['cor']."<br>";
}
}	
?>

<?php

if  (isset($_POST['btn1']))
{
    include ("abrir_conexion.php");

	$codi = $_POST['codi'];
    $nomb  = $_POST['nomb'];
    $apel = $_POST['apel'];
	$naci = $_POST['naci'];
    $cedu = $_POST['cedu'];
    $cor = $_POST['cor'];
    $contra = $_POST['contra'];
	$tel = $_POST['tel'];

     $conexion->query ("INSERT INTO $tabla_db1 (codi, nomb, apel, naci, cedu, cor, contra, tel) values ('$codi', '$nomb', '$apel', '$naci', '$cedu', '$cor', '$contra', '$tel')");
     
    include ("cerrar_conexion.php");
       echo "Se registraron los datos correctamente";
}
?> 
<br>
<center><a href="ingresar.php">Volver</a></center>
</div>
<div class="col-md-4"></div>
</div>

</body>
</html>