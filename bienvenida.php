<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Control de Notas</title>    
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
    padding: 0;
    background-color: white;
    color: black;
    font-family: "Montserrat Alternates", sans-serif;
    text-align:center;
    display: flex;
    align-items: center;
    justify-content: center;
}

.header {
      width: 100%;
      height: 130px;
      position: fixed;
      top: 0;
      left: 0;
      background: #333;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
      z-index: 20;
      align-items: center;
      justify-content: center;
    }

.header h1 {
    width: 100%;
    margin-top:20px;
    color: white;
}


h1 {
    font-size: 4.5em;
    color: #28a745;
    margin: 0px;
}

h2 {
    font-size: 1.8em;
    color:#28a745;
    margin: 0px;
}

h3 {
    font-size: 1.2em;
    color: black;
    margin: 0px;
}

img {
    max-width: 200vh;
    height: auto;
    margin-top: 70px;
    transition: all 0.5s ease;
}

img:hover{
    transform: translateY(-20px);
}

.button {
    display: inline-block;
    padding: 15px 30px;
    margin: 20px 0;
    background-color: #28a745;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s, transform 0.3s;
}

.button:hover {
    background-color: #28a745;
    transform: scale(1.05);
}

p {
    margin: 0;
}
    </style>
</head>
<body>
    <div class="header">
    <div class="container">
        <h1 p align="center">B i e n v e n i d @ s!</h1>
        </div>     
        <img src="dibujos/logo1.png" alt="logo">
        <br><br>
        <h3>Sistema Automatizado para el Registro y Control de las Calificaciones de los Estudiantes<br><br>©SICE 2024</h3>
        <br>
        <a href="ingresar.php" class="button"><p align="center">Ingresar</p></a>
    </div>

</body>
</html>
