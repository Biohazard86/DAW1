<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <!--Para que se pueda ver en cualquier dispositivo-->
    <!--<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> -->
    <title>Peliculas</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/estilos.css" />
    <?php include 'libs.php' ?>

</head>

<body>
    <?php 
     @header_index($_SESSION['email']);
    $var[] = $_GET['title'];
    @$var[] = $_GET['actor'];
    @$var[] = $_GET['director'];
    @$var[] = $_GET['order'];
    ?>
    <br />
    <h1 class="h1 container">Resultado de la búsqueda:</h1>
    <div class="container">
        <?php resultado_busqueda($var, $_SESSION['conn']) ?>
    </div>

    <footer>
        <a class="footer" href="aviso_legal.php#Aviso_legal">Aviso Legal</a> |
        <a class="footer" href="aviso_legal.php#Politica_de_privacidad">Politica de privacidad</a>
        |
        <a class="footer" href="aviso_legal.php#Politica_de_Cookies">Política de Cookies</a>

        <br />

        <p class="footerprim">
            Copyright © iMDMA 2019 | iMDMA es una página de recomendación de cine y
            series basada en la afinidad entre sus usuarios.<br />
            iMDMA es un medio independiente, y su principal prioridad es la
            privacidad, mantenimiento y seguridad de los datos de sus
            usuarios,información que no comparte fuera de la web con ninguna entidad
            y/o empresa, bajo ninguna circunstancia.<br />
            All Rights Reserved - Todos los derechos reservados
        </p>
        <p class="footer">
            Desarrollado por: Sergio Vicente San Gregorio, David Barrios Portales,
            Piero Mendoza Chang
        </p>
    </footer>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"> </script>
    <script src="js/bootstrap.min.js"> </script>
</body>

</html>