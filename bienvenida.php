<?php

    session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido </title>
    <link rel="stylesheet" href="css/estilos.css">
  
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>

   <header>
		<div class="contenedor">
			<h2 class="logotipo">Jhovana Chura </h2>
			<nav>
				<a href="#" class="activo">Inicio</a>
				<a href="#">Programas</a>
				<a href="#">Películas</a>
				<a href="#">Más Recientes</a>
				<a href="#">Mi lista</a>
				<a href="cerrar-sesion.php" class="close-sesion">Cerrar Sesión</a>
			</nav>
		</div>
		<div class="ctn-welcome">
       
      
       <h1 class="title-welcome">Bienvenido lo has <b>LOGRADOOOOOO!</b></h1>
 
       
   </div>

	</header>

	<main>
		<div class="pelicula-principal">
			<div class="contenedor">
				<h3 class="titulo">GAME OF THRONES</h3>
				<p class="descripcion">
				es una serie de televisión de drama y fantasía medieval creada por David Benioff y D. B. Weiss y producida por la cadena HBO. Su argumento está inspirado en la serie de novelas Canción de hielo y fuego, escrita por el estadounidense George R. R. Martin, y relata las vivencias de un grupo de personajes de distintas casas nobiliarias en el continente ficticio de Poniente para tener el control del Trono de Hierro y gobernar los siete reinos que conforman el territorio.
				</p>
				<button role="button" class="boton"><i class="fas fa-play"></i>Reproducir</button>
				<button role="button" class="boton"><i class="fas fa-info-circle"></i>Más información</button>
			</div>
		</div>

		<div class="peliculas-recomendadas contenedor">
			<div class="contenedor-titulo-controles">
				<h3>Películas Recomendadas</h3>
				<div class="indicadores"></div>
			</div>

			<div class="contenedor-principal">
				<button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>

				<div class="contenedor-carousel">
					<div class="carousel">
						<div class="pelicula">
							<a href="#"><img src="images/9.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/10.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/11.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/12.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/13.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/14.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/15.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/16.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/GRINCH.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/3.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/1.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/2.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/3.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/4.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/5.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/6.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/7.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/1.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/2.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/3.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/4.png" alt=""></a>
						</div>
					</div>
				</div>

				<button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
			</div>
		</div>
	</main>
	
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
   
    
</body>
</html>