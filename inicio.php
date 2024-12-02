<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
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
  margin: 60px;
  padding: 0;
  background-color: #333;
  display: flex;
  justify-content: center;
  align-items: center;
  height: calc(100vh - 160px);
}

.logo {
  display: flex;
  flex-direction: column;
  align-items: center;
  transition: all 0.5s ease;
}

.logo:hover {
    transform: translateY(-20px);
}

.logo h1 {
    color:white;
  text-align: center;
  margin-top: 10px;
}

.logo img {
  max-width: 300vh;
  height: 350px;
  margin-top: 70px;
}

    </style>
</head>
<body>

<div class="logo">
<a href="bienvenida.php"><img src="dibujos/logo1.png"></a>
<h1>Sistema Integral de <br>Control de Estudio</h1>
    </div>
</body>
</html>