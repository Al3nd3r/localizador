<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Configuracion</title>
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
    margin: 0;
    background-color: #979090;
    color: #000000;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    text-align: center;   
     max-width: 250vh;
}

h1 {
    color: #007bff;
    margin-bottom: 20px;
    font-size: 2.5em;
}

p {
    font-size: 1.2em;
    color: #333;
}

form {

    margin: 0 auto;
    text-align: center;
    display: inline-block;
    background: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
}


select {
    text-align: center;
    border: 1px solid #007bff;
    border-radius: 5px;
    font-size: 1em;
    margin-bottom: 20px;
}

select:hover {
    border-color: #0056b3;
}

input[type="submit"] {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 1.2em;
    cursor
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
          <a href="menu.php">
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
    	
		<form method="POST">
			<center>
            <h1>Configuracion</h1>
            <br>
        </center>
<p>Seleccione si desea modificar o eliminar usuario:

<select name="confi">
    <option>Seleccione</option>
    <option value="modificar.php">Modificar</option>
    <option value="eliminar.php">Eliminar</option>
</select>

    <br><br>
	<input type="submit" value="Ingresar">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #979090;
            text-align: center;
        }
        h1 {
            color: #28a745;
            margin-bottom: 20px;
            font-size: 2.5em;
        }
        p {
            font-size: 1.2em;
            color: #333;
        }
        form {
            display: inline-block;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        select {
            padding: 10px;
            border: 1px solid #28a745;
            border-radius: 5px;
            font-size: 1em;
            margin-bottom: 20px;
            transition: border-color 0.3s;
        }
        select:hover {
            border-color: #28a745;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #28a745;
            transform: translateY(-2px);
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #28a745;
            font-size: 1.2em;
            transition: color 0.3s;
        }
        a:hover {
            color: #28a745;
        }
    </style>

    <?php
if (isset($_POST['confi'])) {
    $confi = $_POST['confi'];

 $paginas_validas = ['modificar.php', 'eliminar.php'];

	
		if ($paginas_validas) {
        header("Location: $confi");
        exit();
    } 
} 
?>
</form>


</body>
</html>