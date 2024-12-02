<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar Sesion</title>
    <link rel="icon" href="dibujos/logo1.png">
    <style>
@import url("https://fonts.googleapis.com/css?family=Montserrat|Montserrat+Alternates|Poppins&display=swap");

body {
    font-family: "Montserrat Alternates", sans-serif;
    margin: 0;
    padding: 0;
    background: #333;
    color: #333;
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
    font-family: "Montserrat Alternates", sans-serif;
    max-width: 400px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    padding: 20px;
}

.row h2 {
    font-size:2.0em;
    color: #28a745;
    margin-bottom: 20px;
    margin-top:10px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="email"],
input[type="password"] {
    width: 80%;
    padding: 10px;
    border: 1px solid #ced4da;
    border-radius: 5px;
    transition: border-color 0.3s;
}

input[type="email"]:focus,
input[type="password"]:focus {
    border-color: #4A90E2;
    outline: none;
}

input[type="checkbox"] {
    margin-right: 5px;
}

input[type="submit"] {
    background-color: #28a745;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.3s;
}

input[type="submit"]:hover {
    background-color: #28a745;
    transform: scale(1.05);
}

a {
    color: #007bff;
    text-decoration: none;
    transition: color 0.3s;
}

a:hover {
    color: #007bff;
}

.center {
    text-align: center;
}

	</style>
</head>
<body>

<div class="row">
		<div class="col-md-4"></div>
    	<div class="col-md-4">
    	<center><h2>Iniciar Sesion</h2></center>
    	<form method="POST" action="ingresar.php">
<br>
	<center>
    	<div class ="form-group">
			<label for="cor">Ingrese su Correo Electronico</label>
			<input type="email" name="cor" class="form-control" id="cor" required>
		</div>
    <br>
    <div class ="form-group">
			<label for="contra">Ingrese su Contraseña</label>
			<input type="password" name="contra" class="form-control" id="contra" required>
		</div>
		</center>
		<br>
		<center>
		<a href="terminos.php">Acepta los términos y condiciones</a> <input type="checkbox" name="chiquin" required>
		<br><br>
		<input type="submit" value="Ingresar" name="btn1">&nbsp; &nbsp; &nbsp; &nbsp; <a href="olvido.php">¿Olvidó su Contraseña?</a>

	  <br>
	  
		</center>
 </form>
 <br>
    <center>Si no tienes una cuenta: <a href="registrar.php">Registrate</a></center>
  
	<br>
   		<center><p><b>Todos los Derechos Reservados <br><br>©SICE 2024</b></p></center>
	</div>
	<div class="col-md-4"></div>
	</div>

	<?php

include 'abrir_conexion.php';
 
$cor = $_POST['cor'];
$contra = $_POST['contra'];

$validar_ingreso = mysqli_query($conexion, "SELECT * FROM registro WHERE cor='$cor' 
and contra='$contra'");

if (mysqli_num_rows($validar_ingreso) > 0){
    header("location: menu.php");
    exit;
}
else{
    echo "Usuario no existe, por favor verifique los datos introducidos";
}
?>
</body>
</html>