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
    ?>

    <h1 class="display-3 container" style="margin-left: 25%; margin-right: 25%;">Búsqueda</h1>
    <div style="margin-left: 25%; margin-top: 2%; margin-right: 25%;" class="card">
        <div class="card-body">
            <div class="col-md-12">
                <form class="form-horizontal" action="resultado_busqueda_admin.php">
                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input class="form-control" type="text" id="title" name="title" />
                    </div>
                    <form action="resultado_busqueda_admin.php" method="get">
                    <div class="form-group" style="padding-top: 10px">
                        <label for="select">Ordenar por:</label>
                        <select class="form-control" id="select" name="order">
                            <option value="0" selected>Orden por defecto</option>
                            <option value="1">Mejor valoradas primero</option>
                              <option value="2">Las cuales he valorado</option>
                        </select>
                    </div>
                        <div class="form-group">
                            <label for="actor">Actor</label>
                            <input class="form-control" type="text" id="actor" name="actor" />
                        </div>
                        <div class="form-group">
                            <label for="director">Director</label>
                            <input class="form-control" type="text" id="director" name="director" />
                        </div>
                          <button type="submit" style="margin-left: 45%;" class="btn btn-outline-success">
                            Buscar
                        </button>
                    </form>
                </form>
            </div>
        </div>
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
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>