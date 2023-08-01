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
        <h1 class="titulo">ACA ENCONTRARAS TODO EL CUIDADO QUE TU PERRO Y GATO REQUIEREN"</h1>
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
            <a href="../paginas/segundapagina.php" class="text-dark button" style="text-decoration:none">Concentrado</a>
        </div>
        <div class="col-md-3 p-2 border border-primary grilla">
            <a href="../paginas/contactame.php" class="text-dark button" style="text-decoration:none">Contactame</a>
        </div>
    </div>

    <div class="d-flex justify-content-center carrusel">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./imagenes/vet.jpg" class="d-block w-100" alt="error">
            </div>
            <div class="carousel-item">
                <img src="./imagenes/spa.jpg" class="d-block w-100" alt="error">
            </div>
            <div class="carousel-item">
                <img src="./imagenes/cat1.jpg" class="d-block w-100" alt="error">
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!--SECCION VETERINARIA-->
    <section id="seccion_veterinaria" class="seccion_veterinaria border border-success" style="background-image: url(imagenes/fondo1.jpeg)">
        <div class="text-center">
            <h1 class="display-1 titulo_veterinaria">Veterinaria Perros y Gatos</h1>
        </div>
    <seccion class="seccion_tarjetas">
        <div class="flexbox">
                
                    <div class="card m-4 tarjeta" style="width: 20rem">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/cachorro.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/gato2.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Control de Vacunación</h5>
                            <p class="card-text">La vacunación evita en nuestras mascotas enfermedades 
                                                 mortales y en el ser humano algunas enfermedades como 
                                                 la rabia y la leptospira que son transmisibles. El objetivo 
                                                 de las vacunas es la formación de anticuerpos para que el 
                                                 animal sea inmune ante ciertas enfermedades.
                            </p>
                            <a href="https://www.ciudaddemascotas.com/blog/esquema-vacunacion-perros/" class="btn btn-primary">Mas Info Vacunación</a>
                        </div>
                    </div>

                    <div class="card m-4 tarjeta" style="width: 20rem">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/des1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/Des2.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Desparacitación</h5>
                            <p class="card-text">Es un procedimiento mediante el cual se eliminan los 
                                                 parásitos que nuestra mascota puede albergar al interior 
                                                 de su cuerpo o entre su pelaje. También sirve como medida 
                                                 preventiva, de esta forma evitaremos que se deteriore la 
                                                 salud de nuestro perro o gato. 
                            </p>
                            <a href="https://ocicopetcare.wordpress.com/2017/01/12/desparasitacion-perros-gatos/" class="btn btn-primary">Mas Info Desparacitación</a>
                        </div>
                    </div>

                    <div class="card m-4 tarjeta" style="width: 20rem">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/eco1.jpeg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/ecog2.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Ecografias</h5>
                            <p class="card-text">Es un método diagnóstico complementario para ayudar al 
                                                 clínico veterinario en el diagnóstico de la enfermedad y 
                                                 en la elección del mejor tratamiento, permite la evaluación 
                                                 de los órganos abdominales y sus particularidades anatómicas.
                            </p>
                            <a href="https://animalscenter.com/19-ecografia-veterinaria" class="btn btn-primary">Mas Info Ecografias</a>
                        </div>
                    </div>

                    <div class="card m-4 tarjeta" style="width: 20rem;">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/cirugia.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/ciru1.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Cirugias</h5>
                            <p class="card-text">Dependiendo de la condición de tu mascota puede llegar a 
                                                 requerir cualquiera de las cirugías anteriormente 
                                                 clasificadas.
                            </p>
                            <a href="https://www.clinicaraza.com/blog/lo-que-debes-saber-sobre-cirug%C3%ADas-de-mascotas" class="btn btn-primary">Ma Info Cirugias</a>
                        </div>
                    </div>
        </div>
    </seccion>
    </section>

    <!--SECCION PELUQUERIA-->
    <section class="seccion_peluqueria" style="background-image: url(imagenes/fondo1.jpeg)">
        <div class="text-center">
            <h1 class="display-1 titulo_peluqueria">Peluqueria Perros y Gatos</h1>
        </div>
    <seccion class="seccion_tarjetas">
        <div class="flexbox">
                
                    <div class="card m-4 tarjeta" style="width: 20rem">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/pelu.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/spa1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/spas.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">SPA Perros</h5>
                            <p class="card-text">Jacuzzi y terapia de hidromasaje</p>
                            </p>
                            <a href="https://nubika.es/noticias/spa-para-perros" class="btn btn-primary">Mas Info Spa</a>
                        </div>
                    </div>
                    
                    <div class="card m-4 tarjeta" style="width: 20rem">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/pelu2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/pelu3.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">SPA gatos</h5>
                            <p class="card-text">Es un baño tipo spa (difusor de aromas para realizar 
                                                 aromaterapia con aceites esenciales para relajar.
                            </p>
                            <a href="https://www.spatuperrospatugato.com/" class="btn btn-primary">Conoce Mas</a>
                        </div>
                    </div>

                    <div class="card m-4 tarjeta" style="width: 20rem">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/cepillo.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/cepillo1.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Cepillado Dientes Perros</h5>
                            <p class="card-text">Lo ideal es limpiarle los dientes a tu perro con 
                                                 un cepillo dental a diario y por las dos caras 
                                                 del diente. 
                            </p>
                            <a href="https://www.affinity-petcare.com/advance/es/perro/como-limpiar-los-dientes-de-tu-perro-paso-paso" class="btn btn-primary">Mas Info</a>
                        </div>
                    </div>
                    
                    <div class="card m-4 tarjeta" style="width: 20rem;">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/cepg.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/cep1.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Cepillado Dientes Gatos</h5>
                            <p class="card-text">Puedes enseñar a tu gato a aceptar gustosamente que le 
                                                 cepillos los dientes siempre que lo hagas con delicadeza 
                                                 y paciencia.
                            </p>
                            <a href="https://www.purina-latam.com/mx/purina/nota/gatos/cuidar-los-dientes-de-gatos" class="btn btn-primary">Mas Info</a>
                        </div>
                    </div>
        </div>
    </seccion>
    </section>

    <!--SECCION GUARDERIA-->
    <section class="seccion_guarderia" style="background-image: url(imagenes/fondo1.jpeg);">
        <div class="text-center">
            <h1 class="display-1 titulo_guarderia">Guarderia Perros y Gatos</h1>
        </div>
    <seccion class="seccion_tarjetas">
        <div class="flexbox">
                
                    <div class="card m-4 tarjeta" style="width: 19rem;">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/guarderia.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/guar1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/guarderia.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Guarderia Perros</h5>
                            <p class="card-text">Es un establecimiento en el que puedes dejar a tu perro de 
                                                 forma habitual por ejemplo todas las mañanas, mientras estás 
                                                 en el trabajo</p>
                            </p>
                            <a href="https://www.mitiendademascotas.com/web/blog/guarderias-caninas-lo-que-hay-que-saber/" class="btn btn-primary">Mas Info Guarderia</a>
                        </div>
                    </div>

                    <div class="card m-4 tarjeta" style="width: 19rem;">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/cat4.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/cat2.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Guarderia Gatos</h5>
                            <p class="card-text">Una gran variedad de gimnasios, múltiples rascadores, 
                                                 bebederos automáticos, feromonas que facilitan la adaptación 
                                                 y disminuyen el estrés.
                            </p>
                            <a href="https://ocicopetcare.wordpress.com/2017/01/12/desparasitacion-perros-gatos/" class="btn btn-primary">Mas Info Guarderia</a>
                        </div>
                    </div>
                </div>
            </div>
    </seccion>
    </section>

    <footer class="bg-dark text-danger text-center">Pagina Creada Por Darcy Novoa Daza</footer>
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