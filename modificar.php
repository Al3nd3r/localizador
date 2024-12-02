<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Usuario</title>
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
  margin-top:350px;
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
          <a href="configuracion.php">
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
    	<center>
            <h1>Modificar Usuario</h1>
            <br>
        </center>
    	<form method="POST" action="modificar.php">

        <center>
	<div class ="form-group">
			<label for="codi">Ingrese su Codigo de Usuario</label>
			<input type="text/num" name="codi" class="form-control" id="codi">
		</div>
		<br>
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
		<br>
		<div class ="form-group">
			<label for="cedu">Cedula</label>
			<input type="text/num" name="cedu" class="form-control" id="cedu">
		</div>
		<br>
		<div class ="form-group">
			<label for="cor">Correo Electronico</label>
			<input type="email" name="cor" class="form-control" id="cor">
		</div>
		<br>
		<div class ="form-group">
			<label for="contra">Contraseña</label>
			<input type="text/num" name="contra" class="form-control" id="contra">
		</div>
		<br>
		<div class ="form-group">
			<label for="tel">Telefono</label>
			<input type="num" name="tel" class="form-control" id="tel">
		</div>
		<br>
		</center>
		<br>
		<center>
			<input type="submit" value="Actualizar" class="btn btn-info" name="btn3">
		</center>
    </form>

	<br><br>
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

	if (isset($_POST['btn3']))
	{ 
		$codi = $_POST['codi'];
		$nomb = $_POST['nomb'];
		$apel  = $_POST['apel'];
		$naci = $_POST['naci'];
		$cedu  = $_POST['cedu'];
		$cor  = $_POST['cor'];
		$contra  = $_POST['contra'];
		$tel = $_POST['tel'];


	if ($codi=="" || $nomb =="")

	{
		echo "Los campos son obligatorios";
	}
	{
		$_UPDATE_SQL="UPDATE $tabla_db1 Set 
		codi='$codi',
		nomb='$nomb', 
		apel='$apel',
		naci='$naci',
		cedu='$cedu',
		cor='$cor',
		contra='$contra',
		tel='$tel'

		WHERE codi='$codi'"; 
	  
		mysqli_query($conexion,$_UPDATE_SQL); 

	  echo "Se actualizaron los datos con exito!";
	}
	}
?>

    <?php

	if  (isset($_POST['btn1']))
	{
		include ("abrir_conexion.php");

		$codi = $_POST['codi'];
		$nomb = $_POST['nomb'];
		$apel  = $_POST['apel'];
		$naci = $_POST['naci'];
		$cedu  = $_POST['cedu'];
		$cor  = $_POST['cor'];
		$contra  = $_POST['contra'];
		$tel = $_POST['tel'];

 		$conexion->query ("INSERT INTO $tabla_db1 (codi, nomb, apel, naci, cedu, cor, contra, tel) values ('$codi', '$nomb', '$apel', '$naci', '$cedu', '$cor', '$contra', '$tel')");
 		
		include ("cerrar_conexion.php");
	}
  
	?>

	</div>
	<div class="col-md-4"></div>
	</div>

</body>
</html>