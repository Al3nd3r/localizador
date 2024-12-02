<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educacion Fisica</title>
    <link rel="icon" href="dibujos/logo1.png">
	<style>
@import url("https://fonts.googleapis.com/css?family=Montserrat|Montserrat+Alternates|Poppins&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Montserrat Alternates", sans-serif;
  
}
body {
background-color: #979090;
  color: #000000;
  display: block;
  margin-top:130px;
  text-align:center;
  max-width: 250vh;
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
	display: block;
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
.capa {
  position: fixed;
  width: 100%;
  height: 100vh;
  background: rgba(0, 0, 0, 0.6);
  z-index: 10;
  top: 0;
  left: 0;
  opacity: 0;
  transition: opacity 0.3s ease;
}
.header {
  width: 100%;
  height: 100px;
  position: fixed;
  top: 0;
  left: 0;
  background: #333;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
  z-index: 20;
  display: flex;
  align-items: center;
  justify-content: center;
}

.imagen {
  display: flex;
  justify-content: center;
  align-items: center;
}

.imagen img {
  max-width: 300px;
  height: auto;
}


.container {
  width: 90%;
  max-width: 1200px;
  margin: auto;
}

.container .btn-menu,
.logo {
  float: left;
  line-height: 100px;
}

.container .btn-menu label {
  color: #fff;
  font-size: 25px;
  cursor: pointer;
  transition: color 0.3s;
}

.container .btn-menu label:hover {
  color: #c7c7c7;
}

.logo h1 {
  color: #fff;
  font-weight: 200;
  font-size: 22px;
  margin-left: 10px;
  margin-top: 0;
}

.container .menu {
  float: right;
  line-height: 100px;
}

.container .menu a {
  display: inline-block;
  padding: 15px;
  text-decoration: none;
  color: #fff;
  transition: all 0.3s ease;
  border-bottom: 2px solid transparent;
  font-size: 15px;
  margin-right: 15px;
}

.container .menu a:hover {
  border-bottom: 2px solid #c7c7c7;
  padding-bottom: 5px;
  transform: translateY(-2px);
}

#btn-menu {
  display: none;
}

.container-menu {
  position: fixed;
  background: rgba(0, 0, 0, 0.8);
  width: 100%;
  height: 100vh;
  top: 0;
  left: 0;
  transition: all 0.5s ease;
  opacity: 0;
  visibility: hidden;
  z-index: 15;
}

#btn-menu:checked ~ .container-menu {
  opacity: 1;
  visibility: visible;
}

.cont-menu {
  width: 250px;
  background: #1c1c1c;
  height: 100vh;
  position: fixed, top 0, left 0;
  left: -250px;
  transition: all 0.5s ease;
  box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
}

#btn-menu:checked ~ .container-menu .cont-menu {
  left: 0;
}

.cont-menu nav {
  padding-top: 100px;
}

.cont-menu nav a {
  display: block;
  text-decoration: none;
  padding: 20px;
  color: #c7c7c7;
  border-left: 5px solid transparent;
  transition: all 0.4s ease;
  margin-top: 0;
  position: fixed, top 0, left 0;
}

.cont-menu nav a:hover {
  border-left: 5px solid #c7c7c7;
  background: #1f1f1f;
  transform: translateX(5px);
}

.cont-menu label {
  position: absolute;
  right: 10px;
  top: 10px;
  color: #fff;
  cursor: pointer;
  font-size: 18px;
  transition: color 0.3s;
}

.cont-menu label:hover {
  color: #c7c7c7;
}

.menu img {
      width: 50px;
      height: 50px;
    }
	</style>
</head>
<body>

<header class="header">
      <div class="container">
        <div class="logo">
          <h1>E.B.N.B "Los Naranjos"</h1>
        </div>

        <nav class="menu">
          <a href="configuracion.php">
            <img src="dibujos/configuracion.png" alt="Configuracion">
          </a>
          <a href="areas.php">
            <img src="dibujos/salir.png" alt="Salir">
          </a>
        </nav>
        <div class="imagen">
      <img src="dibujos/logo.png">
        </div>
      </div>
    </header>

<div class="row">
		<div class="col-md-4"></div>
    	<div class="col-md-4">
    	<center><h1>Educacion Fisica</h1></center>
    	<form method="POST" action="educacion_fisica1.php">

	<center>
    	<div class ="form-group">
			<label for="nombrei">Nombre</label>
			<input type="text" name="nombrei" class="form-control" id="nombrei">
		</div>
		<br>
        <div class ="form-group">
			<label for="apellidoi">Apellido</label>
			<input type="text" name="apellidoi" class="form-control" id="apellidoi">
		</div>
		<br>
    <div class ="form-group">
			<label for="actividadi">Actividad</label>
			<input type="text" name="actividadi" class="form-control" id="actividadi">
		</div>
		<br>
		<div class ="form-group">
			<label for="notae">Nota</label>
			<input type="text" name="notae" class="form-control" id="notae">
		</div>
		<br>
    </center>
    <br>
		<center>
			<input type="submit" value="Registrar" class="btn btn-success" name="btn1">
			<input type="submit" value="Consultar" class="btn btn-primary" name="btn2">
			<input type="submit" value="Actualizar" class="btn btn-info" name="btn3">
			<input type="submit" value="Eliminar" class="btn btn-danger" name="btn4">
		</center>
    </form>

	<br><br>
    
   <?php

	include ("abrir_conexion1.php");

		$nombrei = "";
        $apellidoi = "";
        $actividadi ="";
		$notae = "";

	if (isset($_POST['btn2']))
	{
		$nombrei  = $_POST['nombrei'];

		$resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db5 WHERE nombrei='$nombrei'");
		while($consulta = mysqli_fetch_array($resultados))
	{
		  echo $consulta['notae'];
	}
	}	

	if (isset($_POST['btn3']))
	{ 
		$nombrei = $_POST['nombrei'];
        $apellidoi = $_POST['apellidoi'];
        $actividadi = $_POST['actividadi'];
		$notae  = $_POST['notae'];

	if ($nombrei=="")

	{
		echo "Los campos son obligatorios";
	}
	{
		$_UPDATE_SQL="UPDATE $tabla_db5 Set 
		nombrei='$nombrei', 
        apellidoi='$apellidoi',
        actividadi='$actividadi',
		notae='$notae'

		WHERE nombrei='$nombrei'"; 
	  
		mysqli_query($conexion,$_UPDATE_SQL); 

	  echo "Se actualizaron las notas con exito!";
	}
	}

	if (isset($_POST['btn4']))
	{
		$nombrei = $_POST['nombrei'];
		$existe=0;

		if ($nombrei=="")
		{
			echo "El campo es obligatorio";
		}
		else
		{
			$resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db5 WHERE nombrei='$nombrei'");
			while($consulta = mysqli_fetch_array($resultados))
			{
				$existe++;
			}
			if ($existe==0)
			{echo "El documento no existe";}
			else
			{
		$_DELETE_SQL =  "DELETE FROM $tabla_db5 WHERE nombrei = '$nombrei'";
		mysqli_query($conexion,$_DELETE_SQL); 

		echo "Se eliminaron las notas con exito!";
			}
	  	}
	}

?>
   <?php

	if  (isset($_POST['btn1']))
	{
		include ("abrir_conexion1.php");

		$nombrei = $_POST['nombrei'];
        $apellidoi = $_POST['apellidoi'];
        $actividadi = $_POST['actividadi'];
		$notae  = $_POST['notae'];

 		$conexion->query ("INSERT INTO $tabla_db5 (nombrei, apellidoi, actividadi, notae) values ('$nombrei', '$apellidoi', '$actividadi', '$notae')");
 		
		include ("cerrar_conexion1.php");
        echo "Se cargaron las notas con exito!";
	}
  
	?>

	</div>
	<div class="col-md-4"></div>
	</div>

</body>
</html>
