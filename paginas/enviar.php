<!DOCTYPE html>
<html>
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

<body class="seccion_formulario" style="background-image: url(imagenes/productos.jpg)">

    <!--TITULO PAGINA-->
    <div class=" text-center display-1 contenedor_titulo"  style="background-image: url(imagenes/fondo.jpg)">
        <h1 class="titulo">THIAGO PET</h1>
    </div>
    <div>
    <h1>Tu datos se enviaron</h1>
    <p>Pronto nos comunicaremos contigo</p>
    </div>
    <!--PIE DE PAGINA-->
    <footer class="bg-dark text-danger text-center">Pagina Creada por Darcy Novoa Daza</footer>
    <footer class="bg-dark text-primary text-end ">
    <?php
        date_default_timezone_set("America/Bogota");
        $fecha = date("D, m-d y h:i:s a", time());
        echo("$fecha")
    ?>
</footer>

</body>
</html>
