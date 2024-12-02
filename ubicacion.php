<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubicacion</title>
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
    width: 150vh;
background-color: #979090;
  color: #000000;
  margin-top:150px;
  text-align:center;
  justify-self: center;

}

p{
    color:white;
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

  .ubicacion {
    background-color: white;
    border: 1px solid #ccc;
    border-radius: 8px;
    padding: 20px;
    width: 150vh;
    text-align: center;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }

  .ubicacion h1{
    font-size: 45px;
    color:#28a745;
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
<center>
    
    <div class="ubicacion">
      <h1>Ubicacion</h1>
        <br><br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.4466593406682!2d-66.94688032645267!3d10.465411464856523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a5f7bc868a9fd%3A0x11c8054ee1c529f0!2sEscuela%20Nacional%20Los%20Naranjos!5e0!3m2!1ses!2sve!4v1732609179316!5m2!1ses!2sve" width="500" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </center>
</body>
</html>