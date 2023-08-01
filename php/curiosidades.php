<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Proyecto Web</title>

<link rel="stylesheet" href="../estilos/estilos.css">
<link rel="stylesheet" href="../css/estilos.css">

<!--CS BOOSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<!--TITULO PAGINA-->
<div class=" text-center display-2 contenedor_titulo"  style="background-image: url(imagenes/fondo.jpg)">
<a href="../paginas/index.php">

    <h1 class="titulo" style="background-image: url(images/fondo.jpg)">THIAGO PET</h1>
    </div>

<body data-spy="scroll" data-target="#CURIOSIDADES" data-offset="1">

	<div class="container-fluid">
		<div class="row">
			<nav class="col-sm-3 col-4" id="Curiosidades">
				<ul class="nav nav-pills flex-column">
				<h1 class="titulo" style="background-image: url(images/fondo.jpg)">Curiosidades Perros</h1>

					<li class="nav-item">
						<a class="nav-link" href="#seccion1" style="color:red">Golden Retriever</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#seccion2" style="color:red">Samoyedo</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#seccion3" style="color:red">Pator Aleman</a>
					</li>

					<h1 class="titulo" style="background-image: url(images/fondo.jpg)">Curiosidades Gatos</h1>
					<li class="nav-item">
						<a class="nav-link" href="#seccion4" style="color:blue">Bengala</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#seccion5" style="color:blue">British Shorthair</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#seccion6" style="color:blue">Siames</a>
					</li>
				</ul>
			</nav>

			
			<div class="col-sm-9 col-8">
				
				<div id="seccion1" style="background-image: url(images/huella.jpg)">
					<h1>Curiosidades Golden Retriever</h1>
					<img src="./images/golden1.jpg" width="300" height="200">
					<img src="./images/negro.jpg" width="300" height="200">
					<img src="./images/Dorado.jpg" width="300" height="200">
					<p> <?php require $_SERVER['DOCUMENT_ROOT'].'/ProyectoWeb/php/datos.php';?></p>
				</div>
                <div id="seccion2" style="background-image: url(images/huella.jpg)">
					<h1>Curiosidades Samoyedo</h1>
					<img src="./images/Samoyedo.jpg" width="300" height="200">
					<img src="./images/samoyedo1.jpg" width="300" height="200">
					<img src="./images/bebe.jpg" width="300" height="200">
					<p> <?php require $_SERVER['DOCUMENT_ROOT'].'/ProyectoWeb/php/datos1.php';?></p>
				</div>
				<div id="seccion3" style="background-image: url(images/huella.jpg)">
					<h1>Curiosidades Pastor Aleman</h1>
					<img src="./images/aleman.jpg" width="300" height="200">
					<img src="./images/pastor.jpg" width="300" height="200">
					<img src="./images/Pastornegro.jpg" width="300" height="200">
					<p> <?php require $_SERVER['DOCUMENT_ROOT'].'/ProyectoWeb/php/datos2.php';?></p>
				</div>
				<div id="seccion4" style="background-image: url(images/dibujo.jpg)">
					<h1>Curiosidades Bengala</h1>
					<img src="./images/gato.jpg" width="300" height="200">
					<img src="./images/bengala.jpg" width="300" height="200">
					<p> <?php require $_SERVER['DOCUMENT_ROOT'].'/ProyectoWeb/php/info.php';?></p>
				</div>
				<div id="seccion5" style="background-image: url(images/dibujo.jpg)">
					<h1>Curiosidades British Shorthair</h1>
					<img src="./images/British.jpg" width="300" height="200">
					<img src="./images/british1jpg.jpg" width="300" height="200">
					<p> <?php require $_SERVER['DOCUMENT_ROOT'].'/ProyectoWeb/php/info1.php';?></p>
				</div>
				<div id="seccion6" style="background-image: url(images/dibujo.jpg)">
					<h1>Curiosidades siames</h1>
					<img src="./images/siames.jpg" width="300" height="200">
					<img src="./images/siames1.jpg" width="300" height="200">
					<p> <?php require $_SERVER['DOCUMENT_ROOT'].'/ProyectoWeb/php/info2.php';?></p>
				</div>
			</div>
		</div>
	</div>
</body>

<!--PIE DE PAGINA-->
<footer class="bg-dark text-danger text-center">Pagina Creada por Darcy Novoa</footer>
<footer class="bg-dark text-primary text-end">
    <?php
        date_default_timezone_set("America/Bogota");
        $fecha = date("D, m-d y h:i:s a", time());
        echo("$fecha")
    ?>
</footer>

<!--SCRIPT BOOSTRAP-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" 
    integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" 
    integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html> 