-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-01-2020 a las 12:14:18
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `trabajo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `critica`
--

CREATE TABLE `critica` (
  `user` varchar(25) NOT NULL,
  `title` varchar(30) NOT NULL,
  `dropyear` int(4) NOT NULL,
  `critica` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `critica`
--

INSERT INTO `critica` (`user`, `title`, `dropyear`, `critica`) VALUES
('PMC', 'Joker', 2019, 'esto mola'),
('sergiovsg99', 'Knives Out', 2019, 'Entretenimiento de calidad, con excelentes actores, con un guión bien urdido, que sobrevuela la trama clásica de las novelas de Agatha Christie, que se sigue sin demasiada dificultad por más que contenga algún que otro doble tirabuzón; todo en un tono fresco, ligero. Bien dirigida, con un ritmo cadencioso que deja respirar al espectador, pero al mismo tiempo con la conveniente agilidad. Con unos diálogos brillantes, no demasiado recargados, componiendo algunos aforismos que cualquier escritor de renombre firmaría, con un humor fino. Una película que no te reporta más de lo que cabría esperar de las de su género, pero tampoco te ofrece menos de lo que promete, ya que está realizada con mimo, con artesanía, con buen gusto.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `nombre` varchar(25) NOT NULL,
  `Fnac` varchar(10) NOT NULL,
  `nacionalidad` varchar(11) DEFAULT NULL,
  `apellido` varchar(25) NOT NULL,
  `apodo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`nombre`, `Fnac`, `nacionalidad`, `apellido`, `apodo`) VALUES
('Ana', '1988-04-30', 'Cuba/España', 'De Armas', 'Ana De Armas'),
('Anjelica', '1951-07-08', 'EEUU', 'Huston', 'Anjelica Huston'),
('Arnold', '1947-07-30', 'EEUU', 'Schwarzenegger', 'Arnold Schwarzenegger'),
('Barry', '1953-04-01', 'EEUU', 'Sonnerfeld', 'Barry Sonnerfeld'),
('Brett', '1956-08-26', 'EEUU', 'Cullen', 'Brett Cullen'),
('Chris', '1981-06-13', 'EEUU', 'Evans', 'Chris Evans'),
('Christopher', '1938-10-22', 'EEUU', 'Lloyd', 'Christopher Lloyd'),
('Cristina', '1980-02-12', 'EEUU', 'Ricci', 'Cristina Ricci'),
('Daniel', '1968-03-02', 'EEUU', 'Craig', 'Daniel Craig'),
('Danny', '1944-11-17', 'EEUU', 'DeVito', 'Danny DeVito'),
('Dwayne', '1972-05-02', 'EEUU', 'Johnson', 'Dwayne Johnson'),
('Enrique', '1972-10-08', 'España', 'Arce', 'Enrique Arce'),
('Frances', '1953-11-13', 'EEUU', 'Conroy', 'Frances Conroy'),
('Idina', '1982-06-29', 'EEUU', 'Menzel', 'Idina Menzel'),
('Jack', '1969-08-28', 'EEUU', 'Black', 'Jack Black'),
('Jake', '1974-10-28', 'EEUU', 'Kasdan', 'Jake Kasdan'),
('Jamie', '1958-11-22', 'EEUU', 'Lee Curtis', 'Jamie Lee Curtis'),
('Jennifer', '1971-10-22', 'EEUU', 'Lee', 'Jennifer Lee'),
('Joaquin', '1974-10-28', 'EEUU', 'Phoenix', 'Joaquin Phoenix'),
('Jonathan', '1985-03-26', 'EEUU', 'Groff', 'Jonathan Groff'),
('Josh', '1981-02-23', 'EEUU', 'Gad', 'Josh Gad'),
('Karen', '1987-11-28', 'Escocia', 'Gillan', 'Karen Gillan'),
('Kevin', '1979-07-06', 'EEUU', 'Hart', 'Kevin Hart'),
('Kristen', '1982-07-18', 'EEUU', 'Anne Bell', 'Kristen Anne Bell'),
('Linda', '1956-09-26', 'EEUU', 'Hamilton', 'Linda Hamilton'),
('Mackenzie', '1987-04-01', 'EEUU', 'Davis', 'Mackenzie Davis'),
('Michael', '1974-08-07', 'EEUU', 'Shannon', 'Michael Shannon'),
('Natalia', '1987-02-06', 'Colombia', 'Reyes', 'Natalia Reyes'),
('Raul', '1940-03-09', 'EEUU', 'Julia', 'Raul Julia'),
('Rian', '1973-12-17', 'EEUU', 'Johnson', 'Rian Johnson'),
('Robert', '1943-08-17', 'EEUU', 'De Niro', 'Robert De Niro'),
('Tim', '1964-10-10', 'EEUU', 'Miller', 'Tim Miller'),
('Todd', '1970-12-20', 'EEUU', 'Philips', 'Todd Philips'),
('Zazie', '1991-06-01', 'EEUU', 'Beetz', 'Zazie Beetz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `title` varchar(30) NOT NULL,
  `gener` varchar(9) DEFAULT NULL,
  `dropyear` int(4) NOT NULL,
  `length` int(3) DEFAULT NULL,
  `sipnosis` text DEFAULT NULL,
  `src` varchar(24) DEFAULT NULL,
  `pais` varchar(25) DEFAULT NULL,
  `musica` varchar(46) DEFAULT NULL,
  `productora` varchar(27) DEFAULT NULL,
  `YT` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`title`, `gener`, `dropyear`, `length`, `sipnosis`, `src`, `pais`, `musica`, `productora`, `YT`) VALUES
('Frozen II', 'animacion', 2019, 103, 'La reina Elsa, su hermana Anna, Kristoff, Olaf y Sven se embarcan en un nuevo viaje en lo profundo del bosque, más allá de su tierra natal de Arendelle, para descubrir la verdad sobre un antiguo misterio de su reino. Su objetivo principal es descubrir por qué Elsa oye voces procedentes del Bosque encantado, donde desde hace tiempo nadie puede entrar ni salir. De no lograrlo su reino estaría en peligro.', 'img/frozen.jpg', 'EEUU', 'Kristen Anderson-Lopez', 'Walt Disney Pictures', 'https://www.youtube.com/watch?v=I-oJ5QjrX9M'),
('Joker', 'Drama', 2019, 122, 'En 1981, Arthur Fleck (Joaquin Phoenix) trabaja como payaso a sueldo y vive con su madre enferma, Penny (Frances Conroy), en Gotham City. La ciudad se derrumba bajo el desempleo, el crimen y la ruina financiera, dejando segmentos de la población privados de sus derechos y empobrecidos. Arthur sufre de un trastorno neurológico que lo hace reír en momentos inapropiados, y visita regularmente a una trabajadora de los servicios sociales para obtener su medicación. Después de que un grupo de jóvenes de la calle lo atacaran en un callejón, el compañero de trabajo de Arthur, Randall (Glenn Fleshler), le presta un arma para protegerse. Arthur también conoce a Sophie (Zazie Beetz), una madre soltera que vive en un apartamento vecino, y la invita a su rutina de comedia.', 'img/joker.jpg', 'EEUU', 'Hildur Guðnadóttir', 'DC Films', 'https://www.youtube.com/watch?v=ygUHhImN98w'),
('Jumanji: The Next Level', 'Aventuras', 2019, 123, 'En esta ocasión, los \'jugadores\' vuelven al juego, pero sus personajes se han intercambiado entre sí, lo que ofrece un curioso plantel: los mismos héroes con distinta apariencia. Pero, ¿dónde está el resto de la gente? Los participantes sólo tienen una opción: jugar una vez más a esta peligrosa partida para descubrir qué es realmente lo que está sucediendo.', 'img/proximos/jumanji.jpg', 'EEUU', 'Henry JackmanSony Pictures Entertainment (SPE)', 'Sony Pictures Entertainment', 'https://www.youtube.com/watch?v=YOpySpo2Kig'),
('Knives Out', 'Suspense', 2019, 130, 'El rico novelista del crimen Harlan Thrombey invita a su familia a su mansión para su fiesta de cumpleaños número 85. A la mañana siguiente, el ama de llaves de Harlan, Fran, lo encuentra muerto, aparentemente habiéndose cortado la garganta. Un personaje anónimo contrata al detective privado Benoit Blanc para investigar el caso. Blanc se entera de que Harlan había enajenado a muchos de la familia: había amenazado con exponer a su yerno Richard por tener una aventura; recortó la asignación de su nuera Joni por robar dinero destinado a la matrícula de su nieta; despidió a su hijo menor, Walt, de su editorial; y retiró a su perezoso nieto Ransom de su testamento.', 'img/proximos/knives.jpg', 'EEUU', 'Thomas Newman', 'FilmNation Entertainment', 'https://www.youtube.com/watch?v=xi-1NchUqMA'),
('La familia Addams', 'Comedia', 2019, 105, 'The Addams Family (La familia Addams en España y Los locos Addams en Hispanoamérica) es una película estadounidense de comedia animada por computadora basada en los cómics de The Addams Family de Charles Addams. La película es dirigida por Conrad Vernon y Greg Tiernan, y cuenta con las voces de Oscar Isaac, Charlize Theron, Chloë Grace Moretz, Finn Wolfhard, Nick Kroll, Bette Midler, Aimee Garcia, Elsie Fisher, Chelsea Frei, Allison Janney y Haley Tju. Fue estrenada el 11 de octubre de 2019 por United Artists en Estados Unidos y por Universal Pictures internacionalmente.', 'img/addams.jpg', 'EEUU', 'Mychael Danna', 'Metro-Goldwyn-Mayer', 'https://www.youtube.com/watch?v=F7Ug863S8dQ'),
('Terminator: Dark Fate', 'Acción', 2019, 128, 'En 1998, tres años después de anular la amenaza de Skynet, Sarah y John Connor viven una vida tranquila después de eliminar a varios Terminators que Skynet había enviado a través del tiempo antes de ser borrada de la existencia. Sin saberlo, un Terminator T-800 los localiza en Livingston, Guatemala, atacándolos sorpresivamente en un restaurante en la playa y asesina brutalmente a John Connor antes de desaparecer, dejando a Sarah totalmente devastada.', 'img/terminator.jpg', 'EEUU', 'Junkie XL', 'Paramount Pictures', 'https://www.youtube.com/watch?v=jCyEX6u-Yhs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula_usuario`
--

CREATE TABLE `pelicula_usuario` (
  `title` varchar(30) NOT NULL,
  `dropYear` int(4) NOT NULL,
  `user` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pelicula_usuario`
--

INSERT INTO `pelicula_usuario` (`title`, `dropYear`, `user`) VALUES
('Jumanji: The Next Level', 2019, 'sergiovsg99');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rating`
--

CREATE TABLE `rating` (
  `title` varchar(30) NOT NULL,
  `dropYear` varchar(8) NOT NULL,
  `user` varchar(25) NOT NULL,
  `rate` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rating`
--

INSERT INTO `rating` (`title`, `dropYear`, `user`, `rate`) VALUES
('Frozen II', '08/21/19', 'PMC', 6),
('Joker', '08/31/19', 'PMC', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabaja`
--

CREATE TABLE `trabaja` (
  `title_film` varchar(30) NOT NULL,
  `dropyear` int(4) NOT NULL,
  `rol` varchar(8) DEFAULT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `Fnac` varchar(10) NOT NULL,
  `apellido_empleado` varchar(25) DEFAULT NULL,
  `apodo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trabaja`
--

INSERT INTO `trabaja` (`title_film`, `dropyear`, `rol`, `nombre`, `Fnac`, `apellido_empleado`, `apodo`) VALUES
('Frozen II', 2019, 'director', 'Jennifer', '1971-10-22', 'Lee', 'Jennifer Lee'),
('Frozen II', 2019, 'actor', 'Josh', '1981-02-23', 'Gad', 'Josh Gad'),
('Frozen II', 2019, 'actor', 'Idina', '1982-06-29', 'Menzel', 'Idina Menzel'),
('Frozen II', 2019, 'actor', 'Kristen', '1982-07-18', 'Anne Bell', 'Kristen Anne Bell'),
('Frozen II', 2019, 'actor', 'Jonathan', '1985-03-26', 'Groff', 'Jonathan Groff'),
('Joker', 2019, 'actor', 'Robert', '1943-08-17', 'De Niro', 'Robert De Niro'),
('Joker', 2019, 'actor', 'Frances', '1953-11-13', 'Conroy', 'Frances Conroy'),
('Joker', 2019, 'actor', 'Brett', '1956-08-26', 'Cullen', 'Brett Cullen'),
('Joker', 2019, 'director', 'Todd', '1970-12-20', 'Philips', 'Todd Philips'),
('Joker', 2019, 'actor', 'Joaquin', '1974-10-28', 'Phoenix', 'Joaquin Phoenix'),
('Joker', 2019, 'actor', 'Zazie', '1991-06-01', 'Beetz', 'Zazie Beetz'),
('Jumanji: The Next Level', 2019, 'actor', 'Danny', '1944-11-17', 'DeVito', 'Danny DeVito'),
('Jumanji: The Next Level', 2019, 'actor', 'Jack', '1969-08-28', 'Black', 'Jack Black'),
('Jumanji: The Next Level', 2019, 'actor', 'Dwayne', '1972-05-02', 'Johnson', 'Dwayne Johnson'),
('Jumanji: The Next Level', 2019, 'director', 'Jake', '1974-10-28', 'Kasdan', 'Jake Kasdan'),
('Jumanji: The Next Level', 2019, 'actor', 'Kevin', '1979-07-06', 'Hart', 'Kevin Hart'),
('Jumanji: The Next Level', 2019, 'actor', 'Karen', '1987-11-28', 'Gillan', 'Karen Gillan'),
('Knives Out', 2019, 'actor', 'Jamie', '1958-11-22', 'Lee Curtis', 'Jamie Lee Curtis'),
('Knives Out', 2019, 'actor', 'Daniel', '1968-03-02', 'Craig', 'Daniel Craig'),
('Knives Out', 2019, 'director', 'Rian', '1973-12-17', 'Johnson', 'Rian Johnson'),
('Knives Out', 2019, 'actor', 'Michael', '1974-08-07', 'Shannon', 'Michael Shannon'),
('Knives Out', 2019, 'actor', 'Chris', '1981-06-13', 'Evans', 'Chris Evans'),
('Knives Out', 2019, 'actor', 'Ana', '1988-04-30', 'De Armas', 'Ana De Armas'),
('La familia Addams', 2019, 'actor', 'Christopher', '1938-10-22', 'Lloyd', 'Christopher Lloyd'),
('La familia Addams', 2019, 'actor', 'Raul', '1940-03-09', 'Julia', 'Raul Julia'),
('La familia Addams', 2019, 'actor', 'Anjelica', '1951-07-08', 'Huston', 'Anjelica Huston'),
('La familia Addams', 2019, 'director', 'Barry', '1953-04-01', 'Sonnerfeld', 'Barry Sonnerfeld'),
('La familia Addams', 2019, 'actor', 'Cristina', '1980-02-12', 'Ricci', 'Cristina Ricci'),
('Terminator: Dark Fate', 2019, 'actor', 'Arnold', '1947-07-30', 'Schwarzenegger', 'Arnold Schwarzenegger'),
('Terminator: Dark Fate', 2019, 'actor', 'Linda', '1956-09-26', 'Hamilton', 'Linda Hamilton'),
('Terminator: Dark Fate', 2019, 'director', 'Tim', '1964-10-10', 'Miller', 'Tim Miller'),
('Terminator: Dark Fate', 2019, 'actor', 'Enrique', '1972-10-08', 'Arce', 'Enrique Arce'),
('Terminator: Dark Fate', 2019, 'actor', 'Natalia', '1987-02-06', 'Reyes', 'Natalia Reyes'),
('Terminator: Dark Fate', 2019, 'actor', 'Mackenzie', '1987-04-01', 'Davis', 'Mackenzie Davis');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `user` varchar(25) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `apellido` varchar(25) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `Fnac` varchar(10) DEFAULT NULL,
  `admin` int(1) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  `foto_perfil` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`user`, `nombre`, `apellido`, `email`, `Fnac`, `admin`, `password`, `foto_perfil`) VALUES
('abgr', 'Ana Belen', 'Gonzalez Rogado', 'abgr@usal.es', '2020-01-01', 0, 'profesor', NULL),
('davidbarrios', 'David', 'Barrios', 'davidbarrios@usal.es', '1997-05-26', 1, '1111', NULL),
('PMC', 'piero', 'MC', 'p@usal.es', '1998-07-02', 1, '1111', NULL),
('sergiovsg99', 'Sergio', 'Vicente', 'sergiovsg99@usal.es', '1999-07-14', 1, '1111', NULL),
('tomas.rb', 'Tomas', 'Rodriguez Barrios', 'tomas.rb@usal.es', '2020-01-01', 0, 'profesor', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `critica`
--
ALTER TABLE `critica`
  ADD PRIMARY KEY (`user`,`title`,`dropyear`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`nombre`,`Fnac`,`apellido`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`title`,`dropyear`);

--
-- Indices de la tabla `pelicula_usuario`
--
ALTER TABLE `pelicula_usuario`
  ADD PRIMARY KEY (`title`,`dropYear`,`user`);

--
-- Indices de la tabla `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`title`,`dropYear`,`user`);

--
-- Indices de la tabla `trabaja`
--
ALTER TABLE `trabaja`
  ADD PRIMARY KEY (`title_film`,`dropyear`,`Fnac`,`apodo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`user`,`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
