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
    <link rel="icon" type="images/png" href="./imagenes/iconos.webp">
</head>
<body class="seccion_formulario" style="background-image: url(imagenes/productos.jpg)">

    <!--TITULO PAGINA-->
    <div class=" text-center display-1 contenedor_titulo"  style="background-image: url(imagenes/fondo.jpg)">
        <h1 class="titulo">THIAGO PET</h1>
    </div>
    
    <h1>Tus Datos son:</h1>
    <?php
    echo "Nombres: "; echo $_POST['nombres']; echo "<br/>";
    echo "Apellidos: "; echo $_POST['apellidos']; echo "<br/>";
    echo "correo: "; echo $_POST['Correo'];  echo "<br/>";
    echo "celular: "; echo $_POST['Celular'];  echo "<br/>";
    echo "mascota: "; echo $_POST['Mascota'];  echo "<br/>";
    echo "temas: "; echo $_POST['temas'];  echo "<br/>";
    echo "mensaje: "; echo $_POST['mensaje'];  echo "<br/>";
    ?>
    <p>Comprueba tus datos antes de enviarlos, si no están bien vuelve a escribirlos.</p>
    <p>Los datos son correctos: <a href="../paginas/enviar.php">Enviar</a>
    <p>Los datos son incorrectos: <a href="../paginas/contactame.php">Volver a escribirlos</a>

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