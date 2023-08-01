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
    <link rel="icon" type="images/png" href="../paginas/imagenes/iconos.webp">
</head>
<body>

    <!--TITULO PAGINA-->
    <div class=" text-center display-1 contenedor_titulo"  style="background-image: url(imagenes/fondo.jpg)">
        <h1 class="titulo">"ACA ENCONTRARAS TODO LO QUE TU PERRO Y GATO NECESITA"</h1>
    </div>
    
    <!--SECCION GRILLAS-->
    <div class="row text-center m-1">
        <div class="col-md-3 p-2 border border-primary grilla">
            <a href="../paginas/index.php" class="text-dark button" style="text-decoration:none">Inicio</a>
        </div>
        <div class="col-md-3 p-2 border border-primary grilla">
            <a href="../paginas/segundapagina.php" class="text-dark button" style="text-decoration:none">Concentrado</a>
        </div>
        <div class="col-md-3 p-2 border border-primary grilla">
            <a href="../paginas/cuartapagina.php" class="text-dark button" style="text-decoration:none">Servicios</a>
        </div>
        <div class="col-md-3 p-2 border border-primary grilla">
            <a href="../paginas/contactame.php" class="text-dark button" style="text-decoration:none">Contactame</a>
        </div>
    </div>

    <!--SECCION JUGUETERIA-->
    <section id="seccion_jugueteria" class="seccion_jugueteria border border-success" style="background-image: url(imagenes/fondo1.jpeg)">
        <div class="text-center">
            <h1 class="display-1 titulo_jugueteria">JUGUETES PERROS Y GATOS</h1>
        </div>
    <seccion class="seccion_tarjetas">
            <div class="flexbox">
                    
                        <div class="card m-4 tarjeta" style="width: 20rem" >
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="./imagenes/juguete.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./imagenes/juguete1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Variedad Juguetes</h5>
                                <p class="card-text">Juguetes Para Masticar Goma Para Cachorros, 
                                                    Resistente A Morder, Dientes Entrenamiento.
                                </p>
                                <a href="https://www.youtube.com/watch?v=wOQeVGTfFjU" class="btn btn-primary">Mas Info Juguetes</a>
                            </div>
                        </div>

                        <div class="card m-4 tarjeta" style="width: 20rem;">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="./imagenes/juguete3.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./imagenes/pelota.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Pelotas Perros</h5>
                                <p class="card-text">Pelota Dura Yogo Yogo Juguete Perros Sonido 
                                                    Dispensadora Golosinas,luz Intermitente, Cambio de Color, 
                                                    Bola de Erizo, para Interior y Exterior, Juguete para Mascotas
                                </p>
                                <a href="https://www.youtube.com/watch?v=ebNKbnz3tUc" class="btn btn-primary">Mas Info Pelotas</a>
                            </div>
                        </div>

                        <div class="card m-4 tarjeta" style="width: 20rem;">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="./imagenes/jugue.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./imagenes/jugue1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Variedad Juguetes Gatos</h5>
                                <p class="card-text">Juguete Interactivo con Plumas para Gatos, 
                                                    Ratóns y Bolas Varias para Gatos.
                                </p>
                                <a href="https://www.youtube.com/watch?v=XJxN_uFQvRE" class="btn btn-primary">Mas Info Juguetes</a>
                            </div>
                        </div>

                        <div class="card m-4 tarjeta" style="width: 20rem;">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="./imagenes/jugue2.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./imagenes/jugue3.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Juguetes Gatos Interactivo</h5>
                                <p class="card-text">rompecabezas de madera con agujeros 
                                                    para interior, asiento de ratón, 
                                                    rascador.
                                </p>
                                <a href="https://www.youtube.com/watch?v=XHbO-qwae4o" class="btn btn-primary">Ma Info juguetes</a>
                            </div>
                        </div>
            </div>  
        </seccion>
        </section>

    <!--SECCION COMEDEROS-->
    <section class="seccion_comederos"  style="background-image: url(imagenes/fondo1.jpeg);">
        <div class="text-center">
            <h1 class="display-1 titulo_comederos">Comederos Perros y Gatos</h1>
        </div>
    <seccion class="seccion_tarjetas">
        <div class="flexbox">
                
                    <div class="card m-4 tarjeta" style="width: 20rem;">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/come1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/come5.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/come3.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Comedero Perros</h5>
                            <p class="card-text">Regálale a tu mascota grandes momentos de 
                                                 comodidad y diversión mientras se alimenta,
                                                 Tazón de acero inoxidable para mascotas, 
                                                 plato portátil para perros.
                            </p>
                        </div>
                    </div>
                    
                    <div class="card m-4 tarjeta" style="width: 20rem;">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/come2jpg.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/come4.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Comederos con medicición Perros</h5>
                            <p class="card-text">En estos comederos se garantiza que reciba 
                                                 la cantidad de alimento sugerido y evitar 
                                                 su desperdicio.
                            </p>
                        </div>
                    </div>

                    <div class="card m-4 tarjeta" style="width: 20rem;">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/come1.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/come5.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Comederos Gatos</h5>
                            <p class="card-text">Este comedero se ajusta a ti. Un deleite para tu gatito 
                                                 comer y beber de esta forma. Hermoso diseño y colores 
                                                 para que puedas ponerlo en cualquier espacio.
                            </p>
                        </div>
                    </div>
                    
                    <div class="card m-4 tarjeta" style="width: 20rem;">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/voz.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/voz1.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Comederos con voz Gatos</h5>
                            <p class="card-text">Puedes enseñar a tu gato a aceptar gustosamente que le 
                                                 cepillos los dientes siempre que lo hagas con delicadeza 
                                                 y paciencia.
                            </p>
                        </div>
                    </div>
        </div>
    </seccion>
    </section>

    <!--SECCION BEBEDEROS-->
    <section class="seccion_bebederos" style="background-image: url(imagenes/fondo1.jpeg);">
        <div class="text-center">
            <h1 class="display-1 titulo_bebederos">Bebederos Perros y Gatos</h1>
        </div>
    <seccion class="seccion_tarjetas">
        <div class="flexbox">
                
                    <div class="card m-4 tarjeta" style="width: 20rem">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/bebedero.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/Bebedero1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/bebedero2.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Bebederos Portatil Perros</h5>
                            <p class="card-text">Evita que tengas que llevar demasiados elementos 
                                                 para darle de tomar a tu mascota. Hidrata tu mascota 
                                                 en cualquier momento del dia.
                            </p>
                        </div>
                    </div>
                    
                    <div class="card m-4 tarjeta" style="width: 20rem">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/bebed1jpg.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/bebed2.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Bebederos Perros</h5>
                            <p class="card-text">Ideal para que tus mascotas pequeñas, 
                                                 medianas o grandes puedan beber agua limpia 
                                                 y fría cuando ellos apetezcan.
                            </p>
                        </div>
                    </div>

                    <div class="card m-4 tarjeta" style="width: 20rem">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/electrico.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/electrico1.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Bebederos Automatico Gatos</h5>
                            <p class="card-text">Silenciosa, Bebedero Gatos Automática con Agua Nivel 
                                                 LED Indicadora, Filtro de Carbón Activadoy 4 Juguetes, 
                                                 Fuente para Gatos.
                            </p>
                        </div>
                    </div>
                    
                    <div class="card m-4 tarjeta" style="width: 20rem">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/agua.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/agua1jpg.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Bebederos Gatos</h5>
                            <p class="card-text">Es muy importante que tu gato tenga un recipiente 
                                                 para beber agua ya que es muy importante que 
                                                 este hidratado.
                            </p>
                        </div>
                    </div>
        </div>
    </seccion>
    </section>

    <!--SECCION CAMAS-->
    <section class="seccion_camas"  style="background-image: url(imagenes/fondo1.jpeg);">
        <div class="text-center">
            <h1 class="display-1 titulo_camas">Camas Perros y Gatos</h1>
        </div>
    <seccion class="seccion_tarjetas">
        <div class="flexbox">
                
                    <div class="card m-4 tarjeta" style="width: 20rem;">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/cama1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/cam2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/cam3.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Camas Adulto Perros</h5>
                            <p class="card-text">Este sofá para perros tiene bordes levantados para 
                                                 que tu perro se apoye en él y lo proteja de las 
                                                 corrientes de aire frío.
                            </p>
                        </div>
                    </div>
                    
                    <div class="card m-4 tarjeta" style="width: 20rem;">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/cama4.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/cama6.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Camas Cachorros Perros</h5>
                            <p class="card-text">Comodo para que tu cachorrito tenga una siesta 
                                                 calientica y no sienta frio en las noches.
                            </p>
                        </div>
                    </div>

                    <div class="card m-4 tarjeta" style="width: 20rem;">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/cama9.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/camac1.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Camas Gatos</h5>
                            <p class="card-text">Cama para gatos para montar en la pared, 
                                                 permite a los gatos subir y dormir en una 
                                                 percha alta.
                            </p>
                        </div>
                    </div>
                    
                    <div class="card m-4 tarjeta" style="width: 20rem;">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./imagenes/cama8.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imagenes/camagatos.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Camas Gatos bebes</h5>
                            <p class="card-text">Cama acogedora para mascotas de Hollypet 
                                                 con forma de gatito.
                            </p>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" 
    integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" 
    integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>