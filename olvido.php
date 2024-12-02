<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Olvido su Contraseña</title>	
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
    max-width: 400px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    padding: 20px;
}

h1 {
	color: #28a745;
    margin-bottom: 20px;
}

h2 {
    color: #28a745;
    margin-bottom: 20px;
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
	color: #333;
    width: 80%;
    padding: 10px;
    border: 1px solid #ced4da;
    border-radius: 5px;
    transition: border-color 0.3s;
}

input[type="email"]:focus,
input[type="password"]:focus {
	color: #333;
    border-color: #4A90E2;
    outline: none;
}

input[type="checkbox"] {
    margin-right: 5px;
}

input[type="submit"] {
    background-color: #138496;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.3s;
}

input[type="submit"]:hover {
    background-color: #138496;
    transform: scale(1.05);
}

a {
    color: #28a745;
    text-decoration: none;
    transition: color 0.3s;
}

a:hover {
    color: #357ABD;
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
    	<center>
            <h1>¿Olvido su Contraseña?</h1>
        </center>
    	<form method="POST" action="olvido.php">

	<center>
		<div class ="form-group">
			<label for="cor">Ingrese su Correo Electronico</label>
			<input type="email" name="cor" class="form-control" id="cor">
		</div>
		<br>
		<div class ="form-group">
			<label for="contra">Ingrese su Nueva Contraseña</label>
			<input type="password" name="contra" class="form-control" id="contra">
		</div>
		</center>
		<br>
		<center>
			<input type="submit" value="Actualizar" class="btn btn-info" name="btn3">
		</center>
    </form>
	<br><br>
<center><a href="ingresar.php">Volver</a></center>

	<br><br>
   <?php

	include ("abrir_conexion.php");

		$nomb = "";
		$apel = "";
		$cedu = "";
		$cor = "";
		$contra = "";

	if (isset($_POST['btn3']))
	{ 
		$cor  = $_POST['cor'];
		$contra  = $_POST['contra'];

	if ($cor=="" || $contra =="")

	{
		echo "Los campos son obligatorios";
	}
	{
		$_UPDATE_SQL="UPDATE $tabla_db1 Set 
		cor='$cor',
		contra='$contra'

		WHERE cor='$cor'"; 
	  
		mysqli_query($conexion,$_UPDATE_SQL); 

	  echo "Se actualizaron los datos con exito!";
	}
	}

?>
   <?php

	if  (isset($_POST['btn1']))
	{
		include ("abrir_conexion.php");

		$cor  = $_POST['cor'];
		$contra  = $_POST['contra'];

 		$conexion->query ("INSERT INTO $tabla_db1 (cor, contra) values ('$cor', '$contra')");
 		
		include ("cerrar_conexion.php");
	}
	?>
	</div>
	<div class="col-md-4"></div>
	</div>

</body>
</html>