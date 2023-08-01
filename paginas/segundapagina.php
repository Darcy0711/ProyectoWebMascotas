<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProyectoWeb</title>

    <!--CS BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!--MIS ESTILOS-->
    <link rel="stylesheet" href="../estilos/estilos.css">
    <link rel="stylesheet" href="../css/estilos.css">
    
    
    <!--ICONO-->
    <link rel="icon" type="images/png" href="imagenes/iconos.webp">
</head>
<body>

    <!--TITULO PAGINA-->
    <div class=" text-center display-1 contenedor_titulo"  style="background-image: url(imagenes/fondo.jpg)">
        <h1 class="titulo">TODO LO QUE NECESITAS SABER DEL ALIMENTO DE TU PELUDO</h1>
    </div>

    <!--SECCION GRILLAS-->
    <div class="row text-center m-1">
        <div class="col-md-3 p-2 border border-primary grilla">
            <a href="../paginas/index.php" class="text-dark button" style="text-decoration:none">Inicio</a>
        </div>
        <div class="col-md-3 p-2 border border-primary grilla">
            <a href="../paginas/tercerapagina.php" class="text-dark button" style="text-decoration:none">Accesorios</a>
        </div>
        <div class="col-md-3 p-2 border border-primary grilla">
            <a href="../paginas/cuartapagina.php" class="text-dark button" style="text-decoration:none">Servicios</a>
        </div>
        <div class="col-md-3 p-2 border border-primary grilla">
            <a href="../paginas/contactame.php" class="text-dark button" style="text-decoration:none">Contactame</a>
        </div>
    </div>

    <!--SECCION COMIDA PERROS-->
    <section class="seccion_perros" style="background-image: url(imagenes/fondo1.jpeg);">
        <div class="text-center">
            <h1 class="display-1 titulo_perros">Alimentos Perros</h1>
        </div>
    <seccion class="seccion_tarjetas">
        <div class="flexbox">
                
                    <div class="card m-4 tarjeta" style="width: 22rem;">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/Monello.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/dog-chow.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/excellent.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Concentrado Seco Perros</h5>
                            <p class="card-text">El pienso seco es el tipo de alimento para perros en 
                                                 forma de bolitas secas que más se consume por la facilidad 
                                                 de almacenamiento y conservación que tiene, además de una 
                                                 enorme variedad de marcas según la raza y el peso del perro.
                            </p>
                            <a href="https://www.agrocampo.com.co/perros/comida/concentrados" class="btn btn-secondary">Conoce Mas</a>
                        </div>
                    </div>
                    
                    <div class="card m-4 tarjeta" style="width: 22rem;">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/nupec.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/pedigree.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Alimento Humedo Perros</h5>
                            <p class="card-text">La comida húmeda para perros se caracteriza por tener un 
                                                 aroma y una textura mucho más apetitosa para tu perro que 
                                                 los concentrados secos comunes. 
                            </p>
                            <a href="https://laika.com.co/category/bog/dog/alimento/humedo/todos/entrega-hoy-mismo/1" class="btn btn-danger">Conoce Mas</a>
                        </div>
                    </div>

                    <div class="card m-4 tarjeta" style="width: 22rem;">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/Hills.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/equilibrio.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Concentrado medicado Perros</h5>
                            <p class="card-text">Son hechas con ingredientes especialmente seleccionados 
                                                 para proteger el sistema afectado por la enfermedad, y 
                                                 sirven como apoyo al tratamiento médico recomendado por 
                                                 el veterinario.
                            </p>
                            <a href="https://www.agrocampo.com.co/alimento-medicado?cat=3" class="btn btn-warning">Conoce Mas</a>
                        </div>
                    </div>

                    <div class="card m-4 tarjeta" style="width: 22rem;">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/chunky.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/frikies.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Snacks Perros </h5>
                            <p class="card-text">Es importante no dar más de un 10% de las calorías diarias 
                                                 como extras en golosinas.
                            </p>
                            <a href="https://www.puppis.com.co/perros/snacks" class="btn btn-primary">Conoce Mas</a>
                        </div>
                    </div>

        </div>
    </seccion>
    </section>

    <!--SECCION COMIDA GATOS-->
    <section class="seccion_gatos" style="background-image: url(imagenes/fondo1.jpeg);">
        <div class="text-center">
            <h1 class="display-1 titulo_gatos">Alimentos Gatos</h1>
        </div>
    <seccion class="seccion_tarjetas">
        <div class="flexbox">
                
                    <div class="card m-4 tarjeta" style="width: 22rem;">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/wiskasjpg.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/proplan.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/cat-chow.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Concentrado Seco Gatos</h5>
                            <p class="card-text">Los mejores alimentos secos para gatos son 
                                                 ricos en proteínas
                            </p>
                            <a href="https://www.agrocampo.com.co/" class="btn btn-info">Conoce Mas</a>
                        </div>
                    </div>
                    
                    <div class="card m-4 tarjeta" style="width: 22rem;">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/kitekatpng.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/chunkyjpg.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Alimento Humedo Gatos</h5>
                            <p class="card-text">La comida húmeda para gatos es conocida por ser mucho más 
                                                 sabrosa y apetitosa debido a su aroma. 
                            </p>
                            <a href="https://laika.com.co/" class="btn btn-dark">Conoce Mas</a>
                        </div>
                    </div>

                    <div class="card m-4 tarjeta" style="width: 22rem;">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/hills1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/hills2.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Concentrado medicado Gatos</h5>
                            <p class="card-text">formulados para ser consumidoso administrados bajo supervisión 
                                                 médica y los cuales son destinados para el manejo dietético 
                                                 específico de una enfermedad.
                            </p>
                            <a href="https://laika.com.co/" class="btn btn-success">Conoce Mas</a>
                        </div>
                    </div>
                    
                    <div class="card m-4 tarjeta" style="width: 22rem;">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/snack.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/creamy.jpeg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Snacks Gatos</h5>
                            <p class="card-text">Al ser carnívoros, la carne es el snack por excelencia 
                                                 con el que triunfarás seguro.
                            </p>
                            <a href="https://laika.com.co/" class="btn btn-primary">Conoce Mas</a>
                        </div>
                    </div>
        </div>
    </seccion>
    </section>

    <!--PIE DE PAGINA-->
    <footer class="bg-dark text-danger text-center">Pagina Creada por Darcy Novoa Daza</footer>
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
