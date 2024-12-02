<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
 <link rel="icon" href="dibujos/logo1.png">
  <style>
    @import url("https://fonts.googleapis.com/css?family=Montserrat|Montserrat+Alternates|Poppins&display=swap");

    * {
      margin: 0px;
      padding: 0;
      box-sizing: border-box;
      font-family: "Montserrat Alternates", sans-serif;
    }

    body {
      background-color: #979090;
      color: #000000;
      display: block;
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
      transition: all 0.2s ease;
    }

    .imagen img:hover {
      transform: translateY(-5px);
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
      transform: translateY(-3px);
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
      position: fixed;
      top: 0;
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
      transition: all 0.2s ease;
      margin-top: 0;
    }

    .cont-menu nav a:hover {
      border-left: 5px solid #c7c7c7;
      background: #1f1f1f;
      transform: translateX(5px);
    }

    .menu img {
      width: 50px;
      height: 50px;
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

    h1 {
      text-align: center;
      color: #333;
      margin: 20px 0;
    }

    p {
      text-align: justify;
      margin: 20px 0;
      line-height: 1.6;
      padding: 0 15px;
    }

    ul {
      list-style-type: disc;
      margin: 20px 0;
      padding-left: 40px;
    }

    ul li {
      margin: 10px 0;
    }

    h2 {
      font-size: 50px; 
      text-align: center;
      animation: moveDown 2.5s forwards;
    }

    @keyframes moveDown {
      0% {
        transform: translateY(0);
      }
      100% {
        transform: translateY(20px); 
      }
    }

    hr {
      border: none;
      height: 7px; 
      background-color: #1c1c1c; 
      margin: 20px 0;
      width: 80%; 
      margin-left: auto; 
      margin-right: auto;
    }

    h3 {
      font-size: 25px; 
      text-align: right;
      margin-right: 25px;
    }

    .slider-frame {
      width: 980px;
      height: auto;
      margin: 50px auto 0;
      overflow: hidden;
    }

    .slider-frame ul {
      display: flex;
      padding: 0;
      width: 400%;
      animation: slide 20s infinite alternate ease-in-out;
    }

    .slider-frame li {
      width: 100%;
      list-style: none;
    }

    .slider-frame img {
      width: 100%;
    }

    .container-cuadro {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 50px;
        }
        .cuadro {
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            width: 350px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

    .cuadro h1 {
      font-size: 3.0em;
    }

    .cuadro img{
      width: 60px;
      height: 60px;
      transition: all 0.5s ease;
    }

    .cuadro img:hover{
      transform: translateY(-5px);
    }

    @keyframes slide {
      0% {margin-left: 0;}
      20% {margin-left: 0;}
      25% {margin-left: -100%;}
      45% {margin-left: -100%;}
      50% {margin-left: -200%;}
      70% {margin-left: -200%;}
      75% {margin-left: -300%;}
      100% {margin-left: -300%;}
    }
  </style>
</head>
<body>
    <header class="header">
      <div class="container">
        <div class="btn-menu">
          <label for="btn-menu">☰</label>
        </div>
        <div class="logo">
          <h1>E.B.N.B "Los Naranjos"</h1>
        </div>

        <nav class="menu">
          <a href="configuracion.php">
            <img src="dibujos/configuracion.png" alt="Configuracion">
          </a>
          <a href="inicio.html">
            <img src="dibujos/salir.png" alt="Salir">
          </a>
        </nav>

        <div class="imagen">
          <img src="dibujos/logo.png">
        </div>
      </div>
    </header>
    <input type="checkbox" id="btn-menu" />
    <div class="container-menu">
      <div class="cont-menu">
        <nav>
          <a href="perfil.php">Perfil</a>
          <a href="estudiantes.php">Estudiantes</a>
          <a href="planificacion.php">Planificación</a>
          <a href="areas.php">Calificacion</a>
          <a href="#"></a>
          <a href="#"></a>
          <a href="#"></a>
          <a href="#"></a>
          <a href="#"></a>
          <a href="inicio.php"><font color="red"></font>Cerrar Sesion</a>
        </nav>
        <label for="btn-menu">✖️</label>
      </div>
    </div>
    <br><br><br><br><br><br>
    <main>
      <div class="php">
      <h3>Fecha de hoy:<br> 
      <?php
        date_default_timezone_set('America/Caracas');
        echo date('d-m-Y');
        ?>
        </h3>
      </div>
      <h2>Menú Principal</h2>
      <br>
      <hr>
    <div class="container-cuadro">
            <div class="cuadro">
                <h1>Historia</h1>
                <a href="historia.php">
                    <img src="dibujos/enter.png" alt="Historia">
                </a>
            </div>
            <div class="cuadro">
                <h1>Ubicación</h1>
                <a href="ubicacion.php">
                    <img src="dibujos/enter.png" alt="Ubicacion">
                </a>
            </div>
        </div>
    </main>
    <br><br>
    <hr>
    
    <div class="slider-frame">
      <ul>
        <li><img src="dibujos/imagen1.jpg" alt=""></li>
        <li><img src="dibujos/imagen2.jpg" alt=""></li>
        <li><img src="dibujos/imagen3.png" alt=""></li>
        <li><img src="dibujos/imagen4.jpg" alt=""></li>
      </ul>
    </div>      

</body>
</html>

