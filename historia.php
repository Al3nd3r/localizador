<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historia</title>
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
    color:black;
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
  max-width: 290px;
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

    .cuadro {
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            width: 150vh;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .cuadro h1 {
          color:#28a745;
        }

        .cuadro img {
          width: 500px;
          height:400px;
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
    <div class="cuadro">
<h1><center> Reseña historica de la E.B.N.B Los Naranjos</center></h1>
<br><br>
<p>La Escuela Básica Nacional Bolivariana &ldquo;Los Naranjos&rdquo; nació en el año 1961, en un espacio reducido, ubicado en una casita 
tipo galpón de 3 salones y un cuarto para la Dirección, donde se comenzó con 6 grados. En el año 1986, el pequeño galpón se hizo insuficiente
 y se gestionó la construcción de un edificio de 4 pisos y 6 aulas. Nadie creía que en tan pequeño espacio eso fuera posible, pero sí se 
 logró, mejorando el servicio, ya que se fueron incorporando poco a poco a través de los años, especialidades de diferentes áreas culturales 
 y deportivas: Educación Física, Biblioteca, Computación, Música (Coro, Piano, Banda seca), Cultura Tradicional, Teatro, Educación para el 
 Trabajo y Artes Plásticas. Sin embargo, no paró de crecer. La Escuela Los Naranjos, así como los árboles crecen y dan frutos, en el año 1994,
  nació otro local que cariñosamente se le llama &ldquo;Los Naranjitos&rdquo; en un edificio similar en capacidad y características, que 
  pertenece a un preescolar de baja matrícula, mientras que en Los Naranjos había una excelente demanda de cupos para los estudiantes.</p>
  <br><br>
<p>Actualmente es una Escuela que satisface las carencias de su población estudiantil constituyéndose en el año 2006 como una Escuela 
    Bolivariana que asegura la atención integral en alimentación, pedagógico, cultural, deportivo, recreativo y avances tecnológicos. 
    Aunado a su participación en todos los programas y proyectos que promueven el desarrollo y conciencia social en las niñas y niños de 
    la comunidad circundante y hoy con orgullo podemos decir que somos sede de la Misión Ribas y Robinson, Escuela pionera del Programa 
    Nacional Simón Rodríguez (PNSR), Escuela Asociada a la UNESCO, Escuela Piloto del Programa Canaima Educativo (Primero y segundo grado), 
    Sede de Formación del taller &ldquo;Asesores y Asesoras Comunitarias en la Prevención Integral Social del Consumo de alcohol, tabaco y 
    otras drogas&rdquo; (ONA), Participantes del Programa Jugando Sano con los Alimentos (MPPE y INN), del Programa el Agua en Nuestras 
    Vidas de Hidrocapital, y Programa AGROVENEZUELA, Participes del Programa de Prevención de MPPE y Protección Civil, Sede de Formación 
    Permanente de Nuevas Tecnologías a través del Centro Bolivariano de Informática y Telemática (CBIT), Pioneros en el Programa de 
    Orientación Vocacional (POV) de Quinto y Sexto Grado con el apoyo de la Escuela Técnica Robinsoniana José de San Martín y la U.E. 
    Escuela Canaima, Participantes de los Talleres de la Asociación de Promoción de la Educación Popular (APEP), Sede de formación 
    Comunitaria a representantes y comunidad adyacente, Sede de atención en la Tecnología de la Información a los Planteles adyacentes 
    que no poseen CBIT, Sede de reunión del Consejo Comunal Los Herederos del 58 y la Comuna Calle Zulia Hijos de Venezuela, sede de las 
    12 Consejos Comunales, Sede de Estudio Marxista del Pueblo Pedro Lozada (Los días Domingo), y Centro de Acopio de Estadística y 
    Matrícula Inicial en apoyo a la Coordinación Parroquial La Vega, Sede Censo 2011, de la Misión Hijos de Venezuela, sede del Diplomado 
    de Gestión Social en Nutrición y Diplomado de Comida Soberana dictado por la Escuela Venezolana de Alimentación y Nutrición (EVAN); 
    escuela participante del Programa.</p>
    <br><br>
<p>Cocuyitos Comunitarios de Corporación Eléctrica Nacional (Corpoelec) escuela creadora de la Defensoría &quot;El Arañero&quot; y El 
espacio para la Atención de la Diversidad Funcional. Igualmente ha establecido alianzas con múltiples organizaciones nacionales y 
privadas de tipo local, estatal o nacional, que siempre aportan y traen beneficios para las y los estudiantes.</p>
<br><br>
<p>De 8 docentes y casi 220 estudiantes en sus inicios, ahora la gran familia Los Naranjos tiene 81 personas entre personal directivo, 
docentes, especialistas, administrativos, aula integrada, madres de la patria SAE; personal de mantenimiento y consejo educativo; y 
395 estudiantes de 1º a 6º grado dispuestos en sus dos (2) edificios. Niños y niñas que han brillado a los largo de la vida de la 
Escuela, en las distintas olimpiadas celebradas a nivel parroquial, en los festivales culturales infantiles distritales, zonales y 
hasta nacionales, el excelente papel en los juegos intercursos y distritales, en las muestras de talento y virtudes de nuestros 
estudiantes.</p>
<br><br>
<p data-sourcepos="9:1-9:342">Los árboles que inicialmente crecieron en éste espacio, dieron vida a una maravillosa escuela, que cumple 
    53 años de labor educativa dando frutos a granel, es decir, niñas, niños, jóvenes y adultos formados en el amor al semejante, a la 
    Parroquia La Vega, a la Patria, para el presente y el futuro de la ciudad y de nuestra querida Venezuela.</p>
 

<center><img src="dibujos/bandera.png"></center>
 </div>
</body>
</html>