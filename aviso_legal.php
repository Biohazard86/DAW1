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

    <article style="margin: 3% 15% 5% 15%; text-align: left;color: rgba(12, 1, 1, 0.883);
    background-color: rgba(240, 233, 243, 0.034);">
        <h2 class="display-4" style="color: #007bff; margin-bottom: 1%; margin-top: 3%; padding-top: 1%;
      background-color: rgba(255, 255, 255, 0); font-size:40px" id="Aviso_legal">
            Aviso legal
        </h2>
        <p>
            iMDMA (informatic Movies Dictionary Management App) no pertenece a
            ninguna empresa ni tiene asociación con otras empresas del sector que
            puedan tener nombres parecidos o tiendan a confusión.
        </p>

        <p>
            Desde nuestra creación en 2019 en iMDMA nuestra máxima prioridad es
            proteger los datos de nuestros usuarios.
        </p>

        <p>
            Nuestra política de privacidad ha sido actualizada, de acuerdo a la
            entrada en vigor en la UE de la nueva Ley de Protección de Datos GDPR
            (General Data Protection Regulation).
        </p>

        <p>
            Filmaffinity no se hace responsable de las opiniones vertidas por los
            usuarios en esta página, y se reserva el derecho de eliminar cualquier
            comentario total o parcial que pueda considerar ofensivo o inapropiado.
            Del mismo modo, en ningún caso Filmaffinity garantizará la publicación
            de las críticas, listados y puntuaciones recibidas, y se reserva el
            derecho de eliminarlas sin tener que dar aviso previo o explicación
            alguna, así como de editarlas y/o hacer uso de ellas como crea
            conveniente. Además Filmaffinity se reserva el derecho de eliminar
            cualquier votación, listado, crítica o registro parcial o completo de
            cualquier usuario, en especial las críticas consideradas ofensivas o
            inapropiadas, así como las votaciones que se consideren que tienen un
            inequívoco intento de manipulación o distorsión de las puntuaciones
            medias. Se adjunta información más precisa en las Condiciones de uso.
        </p>

        <h2 class="display-4" style="color: #007bff; margin-bottom: 1%; margin-top: 3%; padding-top: 1%;
        background-color: rgba(255, 255, 255, 0.144); font-size:40px" id="Politica_de_privacidad">
            Política de privacidad
        </h2>
        <p>
            Tu privacidad es extremadamente importante para nosotros. En
            Filmaffinity, nos hacemos responsables de mantener la privacidad de los
            usuarios de nuestra web y de cumplir de forma estricta con la legalidad
            vigente. Por favor, lee la siguiente información para saber más sobre
            nuestra política de privacidad.
        </p>

        <p>
            iMDMA es un portal independiente sigue fiel a su espíritu original de
            ser una web al servicio de los internautas amantes del cine para
            recomendarse películas y series, y no pertenece ni tiene vinculación
            alguna con ningún grupo mediático. Más allá de insertar publicidad de
            empresas y marcas anunciantes en los espacios reservados al efecto como
            cualquier otra web, no tiene ningún tipo de vinculación societaria con
            ninguna empresa propietaria o relacionada con los contenidos del portal,
            garantizando así la independencia e imparcialidad de todos sus
            contenidos.
        </p>

        <p>
            Todos los datos de carácter personal facilitados de forma voluntaria por
            los usuarios de Filmaffinity a través de los formularios de la web
            pueden ser objeto de tratamiento en un fichero de datos de carácter
            personal, y del que será responsable iMDMA. Todos los datos serán
            utilizados en la forma y con las limitaciones y derechos que concede la
            Ley Orgánica 15/1999, de 13 de diciembre de Protección de Datos de
            Carácter Personal (LOPD), por lo que el titular de los datos tendrá en
            todo momento el derecho de acceder a los ficheros y podrá ejercitar los
            derechos de rectificación, cancelación y oposición en los términos
            establecidos por la normativa en materia de protección de datos. El
            consentimiento del usuario para el tratamiento de sus datos podrá ser
            revocado en cualquier momento, también mediante comunicación al
            responsable del fichero.
        </p>

        <p>
            El tratamiento y gestión de los datos cumple lo estipulado en el Real
            Decreto 994/1999, del 11 de Junio, por el que se aprueba el Reglamento
            de medidas de seguridad de los ficheros automatizados que contengan
            datos de carácter personal.
        </p>

        <h2 class="display-4" style="color: #007bff; margin-bottom: 1%; margin-top: 3%; padding-top: 1%; background-color: rgba(0, 0, 0, 0); font-size:40px" id="Politica_de_Cookies">
            Política de Cookies
        </h2>
        <p>Estamos totalmente a favor de esas galletas.</p>
    </article>

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