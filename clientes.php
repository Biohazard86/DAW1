<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Iniciar sesión</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/estilos.css" />
    <?php include 'libs.php' ?>

</head>

<body>
    <?php
    $user = null;
    header_index($user);
    ?>
    <br />

    <h1 style="margin-left: 45%;" class="card-title mb-4 mt-1">
        Iniciar sesión
    </h1>
    <div style="margin-left: 25%; margin-right: 25%;" class="card">
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label for="email"></label>
                    <input id="email" name="email" class="form-control" placeholder="Correo electrónico" type="email" />
                </div>
                <!-- form-group// -->
                <div class="form-group">
                    <label for="password"></label>
                    <input id="password" name="password" class="form-control" placeholder="Contraseña" type="password" />
                </div>
                <!-- form-group// -->
                <div class="form-group">
                    <label for="init"></label>
                    <button id="init" name="submit" style="margin-bottom: 2%;" type="submit" class="btn btn-primary btn-lg btn-block">
                        Iniciar sesión
                    </button>
                </div>
                <!-- form-group// -->
            </form>
            <?php
            $R = 0;
            if (isset($_POST['email']) && isset($_POST['password'])) {
                $q = "Select user from usuario where email like '{$_POST['email']}' and PASSWORD = '{$_POST['password']}'";
                $query = mysqli_query($conn, $q);
                if ($p = mysqli_fetch_array($query, 1)) {
                    $_SESSION['email'] = $_POST['email'];
                    $_SESSION['password'] = $_POST['password'];
                    $_SESSION['login'] = $p['user'];
                    header("Location: index.php");
                } else echo '<div class="alert alert-danger" role="alert">' . "Error: " . mysqli_error($_SESSION['conn']) . '</div>';
            }
            ?>
            <button class="btn btn-secondary btn-lg btn-block" onclick="window.location.href='registro.php';">
                Aún no tengo una cuenta. Registrarme
            </button>
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