<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <!--Para que se pueda ver en cualquier dispositivo-->
    <!--<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> -->
    <title>Peliculas</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/estilos.css" />
    <link rel="stylesheet" href="css/estrellas.css" />
    <?php include 'libs.php' ?>
</head>

<body>
    <?php
    $param = "select title from Pelicula where  ";
    $film = $_GET['Pelicula'];
    @header_index($_SESSION['email']);
    ?>

    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-top: 20px; width: 60%;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container collapse navbar-collapse" id="navbarText">
                <form class="btn-dark" method="post">
                    <input id="F" type="submit" name="option[]" value='Ficha' class="btn btn-dark" />
                    <input id="F1" type="submit" name="option[]" value='Criticas' class="btn btn-dark" />
                    <input id="F2" type="submit" name="option[]" value='Trailer' class="btn btn-dark" />
                </form>
            </div>
        </nav>
        <?php
        $option = 'Ficha';
        $j = @$_POST['option'];
        if (isset($j)) {
            foreach ($j as $key) {
                $option = $key;
            }
        }

        switch ($option) {
            case 'Ficha':
                printInfo($film['nombre']);
                break;
            case 'Criticas':
                printCommnet("select * from critica inner join usuario on critica.user = usuario.user where title like '{$film['nombre']}'");
                break;
            case 'Trailer':
                $row = mysqli_fetch_array(mysqli_query($_SESSION['conn'], "select * from pelicula where title like '{$film['nombre']}'"), 1);
                $ytf = "https://www.youtube.com/embed/";
                $src = str_replace('https://www.youtube.com/watch?v=', '', $row['YT']);
                $ytf .= $src;
                echo "<br><div class=\"embed-responsive embed-responsive-16by9\">   
                <iframe class=\"embed-responsive-item\" width=\"560\" height=\"315\" src=\"{$ytf}\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe></div>";
                break;
        }
        ?>
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