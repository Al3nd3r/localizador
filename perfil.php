<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
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
  margin-top:120px;
  text-align:center;

}

.container-user {
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    padding: 10px;
    max-width: 500px;
    margin-right:200px;
    margin-left: 435px;
    height: auto;
    text-align: center;
    margin-top:140px; 
  box-align:center;
}

.container-user h1 {
    color: #28a745;
    margin-bottom: 20px;
    font-size:2.0em;
}

.container-user img {
    width: 70px;
    height: auto;
    border-radius: 50%;
    margin-right: 0;
}

.container-user .nombre {
    vertical-align: middle; 
    font-size: 1.9em;
    color: #333;
}

.container-user h2 {
    margin-top: 20px;
    color: #28a745;
    font-size:1.7em;
}

.container-user p {
    font-size: 1.2em;
    color: #333;
    margin: 5px 0;
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
      <img src="dibujos/logo.png" alt="logo">
        </div>
      </div>
    </header>

    <div class="container-user">
        <h1>Perfil</h1>
        <img src="dibujos/usuario.png" alt="usuario">
        <div class="nombre">Alender Guerra</div>
            <h2>Grado</h2>
            <p>1er Grado</p>
            <h2>Datos Personales</h2>
            <p><strong>Codigo de Usuario:</strong> 001</p>
            <p><strong>Nombre:</strong> Alender</p>
            <p><strong>Apellido:</strong> Guerra</p>
            <p><strong>Fecha de Nacimiento:</strong> 26/08/2007</p>
            <p><strong>Cédula:</strong> 32.145.610</p>
            <p><strong>Correo:</strong> alender@gmail.com</p>
            <p><strong>Teléfono:</strong> 0414-0199343</p>
        </div>
</body>
</html>
