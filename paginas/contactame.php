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
        <h1 class="titulo">ACA ME PUEDES CONTACTAR</h1>
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
            <a href="../paginas/segundapagina.php" class="text-dark button" style="text-decoration:none">Concentrado</a>
        </div>
    </div>
    
    <!--SECCION FORMULARIO-->
<section class="seccion_formulario" style="background-image: url(imagenes/productos.jpg)">
    <div class="d-flex flex-wrap row">
        <div class="container-md col-md-5 formulario" id="form-1" style="margin-top:1%">
        <h1 class="titulo display-1 m-3 text-center" style="color:blue">Quieres saber más</h1>
        <form action="./datos.php" method="post">
            <div class="mx-4 m-4">
                <label for="nombres" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombres" placeholder="Nombres">
            </div>
            <div class="mx-4 m-4">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellidos" placeholder="Apellidos">
            </div>
            
            <div class="mx-4 m-4">
            <label for="Correo" class="form-label">Correo</label>
            <input type="text" class="form-control" name="Correo" placeholder="E-Mail">
            </div>
            <div class="mx-4 m-4">
            <label for="Celular" class="form-label">Celular</label>
            <input type="text" class="form-control" name="Celular" placeholder="Movil">
            </div>
            <p class="mx-4 m-4">Que mascota tienes</p>
            <div class="form-check form-check-incline mx-4">
                <input class="form-check-input" type="radio" name="Mascota" value="Perro">
                <label class="form-check-label" for="Perro">
                    Perro
                </label> 
            </div>
            <div class="form-check form-check-incline mx-4">
            <input class="form-check-input" type="radio" name="Mascota" value="Gato">
            <label class="form-check-label" for="Gato">
                Gato
                </label>
            </div>

            <div class="mx-4 m-4">
            <label for="interes">Que te interesa</label>
            <select class="form-select form-select-ms" name="temas">
                <option selected>selecciona</option>
                <option value="concentrado">Concentrado</option>
                <option value="concentrado">Accesorios</option>
                <option value="concentrado">Servicios</option>
            </select>
            </div>
            <div class="m-4">
                <label for="mensaje" class="form-label">Dejanos un mensaje</label>
                <textarea class="form-control" name="mensaje" rows="3"></textarea>
            </div>
            <p><input type="submit" value="Comprobar el formulario"> 
            <input type="reset" value="borrar todo"></p>
        </form>

    </div>

</section>

</body>
<!--PIE DE PAGINA-->
<footer class="bg-dark text-danger text-center">Pagina Creada por Darcy Novoa Daza</footer>
<footer class="bg-dark text-primary text-end ">
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