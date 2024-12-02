<?php

function generarCalendario($mes, $año) {
    $diasDelMes = cal_days_in_month(CAL_GREGORIAN, $mes, $año);
    $primerDiaDelMes = mktime(0, 0, 0, $mes, 1, $año);
    $nombresMeses = [
        1 => 'Enero', 2 => 'Febrero', 3 => 'Marzo', 4 => 'Abril',
        5 => 'Mayo', 6 => 'Junio', 7 => 'Julio', 8 => 'Agosto',
        9 => 'Septiembre', 10 => 'Octubre', 11 => 'Noviembre', 12 => 'Diciembre'
    ];
    $nombreMes = $nombresMeses[$mes];
    $diaDeLaSemana = date('w', $primerDiaDelMes);


    $diaDeLaSemana = ($diaDeLaSemana + 6) % 7;

    $calendario = "<h2>$nombreMes $año</h2>";
    $calendario .= "<table class='calendario'>";
    $calendario .= "<tr><th>Lun</th><th>Mar</th><th>Mié</th><th>Jue</th><th>Vie</th><th>Sáb</th><th>Dom</th></tr><tr>";


    for ($i = 0; $i < $diaDeLaSemana; $i++) {
        $calendario .= "<td></td>";
    }


    for ($dia = 1; $dia <= $diasDelMes; $dia++) {
        $calendario .= "<td contenteditable='true' class='dia'>$dia</td>";
        if (($dia + $diaDeLaSemana) % 7 == 0) {
            $calendario .= "</tr><tr>";
        }
    }

    $calendario .= "</tr></table>";
    return $calendario;
}

$mes = date('n');
$año = date('Y');

if (isset($_POST['mes']) && isset($_POST['año'])) {
    $mes = $_POST['mes'];
    $año = $_POST['año'];
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
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
  margin:150px;
  text-align:center;
}

h1 {
    color: black;
    margin-bottom: 20px;
}

.calendario {
    margin: 0 auto;
    border-collapse: collapse;
    width: 90%;
    max-width: 800px;
    background-color: #fff;
    border-color:black;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
}

.calendario th, .calendario td {
    border: 1px solid #ddd;
    padding: 15px;
    font-size: 1.5em;
    transition: background-color 0.3s, transform 0.2s;
}

.calendario th {
    background-color: #28a745;
    color: white;
}

.dia {
    cursor: text;
    transition: background-color 0.3s, transform 0.2s;
}

.dia:hover {
    background-color: #e0e0e0;
    transform: scale(1.05);
}

form {
    margin-bottom: 20px;
}

input[type="number"] {
    width: 80px;
    padding: 10px;
    margin: 0 5px;
    font-size: 1.2em;
    border: 1px solid #ddd;
    border-radius: 5px;
    transition: border-color 0.3s;
}

input[type="number"]:focus {
    border-color: #28a745;
    outline: none;
}

input[type="submit"] {
    padding: 10px 20px;
    font-size: 1.2em;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
}

input[type="submit"]:hover {
    background-color: #28a745;
    transform: scale(1.05);
}

@media (max-width: 600px) {
    .calendario th, .calendario td {
        font-size: 1.2em;
        padding: 10px;
    }

    input[type="number"], input[type="submit"] {
        font-size: 1em;
        padding: 8px;
    }
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

    <h1>Calendario de Actividades</h1>
    
    <form method="POST">
        <input type="number" name="mes" min="1" max="12" value="<?php echo $mes; ?>" required>
        <input type="number" name="año" min="1900" max="2100" value="<?php echo $año; ?>" required>
        <input type="submit" value="Cambiar Fecha">
    </form>

    <?php echo generarCalendario($mes, $año); ?>

</body>
</html>
