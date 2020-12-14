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
 
    <div class="container">
        <h1 class="display-4" style="color: #007bff; margin-bottom: 1%; margin-top: 3%; padding-top: 1%;background-color: rgba(255, 255, 255, 0.144); font-size:40px">
            Sus criticas mas recientes
        </h1>
        <?php
            viewCritic("select * from critica where user like '{$_SESSION['login']}'");
        ?>        
    </div>

    <footer>
    <a class="footer" href="aviso_legal_admin.php#Aviso_Legal">Aviso Legal</a>
    |
    <a class="footer" href="aviso_legal_admin.php#Politica_de_privacidad">Política de privacidad</a>
    |
    <a class="footer" href="aviso_legal_admin.php#Politica_de_Cookies">Política de Cookies</a>

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