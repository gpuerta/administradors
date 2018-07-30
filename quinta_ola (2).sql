-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-07-2018 a las 23:41:52
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `quinta_ola`
--
CREATE DATABASE IF NOT EXISTS `quinta_ola` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `quinta_ola`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id_articulo` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `detalle` mediumtext NOT NULL,
  `fecha_creado` datetime NOT NULL,
  `fk_imagen` int(11) NOT NULL,
  `fk_seccion` int(11) NOT NULL,
  `fk_autor` int(11) NOT NULL,
  `fk_estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id_articulo`, `titulo`, `detalle`, `fecha_creado`, `fk_imagen`, `fk_seccion`, `fk_autor`, `fk_estatus`) VALUES
(1, 'Prueba 1', '<p>Esto es una prueba</p>', '2018-07-16 17:29:06', 1, 1, 1, 2),
(2, 'Prueba 2', 'Esto es una prueba', '2018-07-16 16:59:10', 2, 1, 1, 1),
(3, 'Prueba 1', 'Esto es una prueba', '2018-07-16 17:01:20', 3, 2, 1, 1),
(4, 'Prueba 1', 'Esto es una prueba', '2018-07-16 17:03:00', 4, 6, 1, 1),
(5, 'Prueba 1', 'Esto es una pruebo', '2018-07-16 17:03:18', 5, 4, 1, 1),
(6, 'Prueba 1', 'Esto es una prueba', '2018-07-16 17:03:33', 6, 5, 1, 1),
(7, 'Prueba 3', 'Esto es una prueba&nbsp;', '2018-07-16 17:17:49', 7, 1, 1, 1),
(8, 'Prueba 2', 'Esto es una prueba', '2018-07-16 17:23:18', 8, 2, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `audiovisual`
--

CREATE TABLE `audiovisual` (
  `id_audiovisual` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `referencia` varchar(500) NOT NULL,
  `ruta` varchar(10000) NOT NULL,
  `fk_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `audiovisual`
--

INSERT INTO `audiovisual` (`id_audiovisual`, `titulo`, `referencia`, `ruta`, `fk_categoria`) VALUES
(1, 'Diana de Gales-Documental', 'A 30 aÃ±os de su partida', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/5zJXlzl5mS8\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `biblioteca`
--

CREATE TABLE `biblioteca` (
  `id_libro` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `autor` varchar(60) NOT NULL,
  `fk_categoria` int(11) NOT NULL,
  `url` varchar(10000) NOT NULL,
  `imagen` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `biblioteca`
--

INSERT INTO `biblioteca` (`id_libro`, `titulo`, `autor`, `fk_categoria`, `url`, `imagen`) VALUES
(1, 'Las Mariposas', 'Germaine Puerta', 3, 'https://github.com/gpuerta', '../../images/biblioteca/farn.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `categoria`) VALUES
(1, 'Social'),
(2, 'Político'),
(3, 'Cultural'),
(4, 'Autoayuda'),
(5, 'Biográfica'),
(6, 'Investigación'),
(7, 'Hogar'),
(8, 'Enciclopedia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus_articulo`
--

CREATE TABLE `estatus_articulo` (
  `id_estatus_articulo` int(11) NOT NULL,
  `estatus_articulo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estatus_articulo`
--

INSERT INTO `estatus_articulo` (`id_estatus_articulo`, `estatus_articulo`) VALUES
(1, 'Privado'),
(2, 'Publicado'),
(3, 'Principal\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus_usuario`
--

CREATE TABLE `estatus_usuario` (
  `id_estatus_usuario` int(11) NOT NULL,
  `estatus_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estatus_usuario`
--

INSERT INTO `estatus_usuario` (`id_estatus_usuario`, `estatus_usuario`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hero`
--

CREATE TABLE `hero` (
  `id_hero` int(11) NOT NULL,
  `referencia` varchar(500) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `ruta` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_articulo`
--

CREATE TABLE `imagen_articulo` (
  `id_imagen_articulo` int(11) NOT NULL,
  `referencia` varchar(500) NOT NULL,
  `ruta` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `imagen_articulo`
--

INSERT INTO `imagen_articulo` (`id_imagen_articulo`, `referencia`, `ruta`) VALUES
(1, 'Prueba_imagen 1', '../../../images/articulo/tribu_urquia/favicon.png'),
(2, 'Prueba imagen2', '../../../images/articulo/tribu_urquia/farn.jpg'),
(3, 'Prueba_imagen 1', '../../../images/articulo/tribu_urquia/farmm.jpg'),
(4, 'Prueba_imagen 1', '../../../images/articulo/tribu_urquia/farn.jpg'),
(5, 'Prueba_imagen 1', '../../../images/articulo/tribu_urquia/farn.jpg'),
(6, 'Prueba_imagen 1', '../../../images/articulo/tribu_urquia/farn.jpg'),
(7, 'Prueba imagen3', '../../../images/articulo/tribu_urquia/farn.jpg'),
(8, 'Prueba imagen2', '../../../images/articulo/tribu_urquia/farn.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL,
  `nombres` varchar(60) NOT NULL,
  `cedula` varchar(11) NOT NULL,
  `correo` varchar(500) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `fk_usuario` int(11) NOT NULL,
  `fk_tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `nombres`, `cedula`, `correo`, `telefono`, `fk_usuario`, `fk_tipo_usuario`) VALUES
(1, 'Germaine Puerta', '21535824', 'germaine_puerta@hotmail.com', '4262149962', 1, 1),
(2, 'Mauricio Delgado', '18933323', 'germaine@hotmail.com', '4262149962', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE `seccion` (
  `id_seccion` int(11) NOT NULL,
  `seccion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`id_seccion`, `seccion`) VALUES
(1, 'La Tribu de Urquía'),
(2, 'Ultravioleta'),
(3, 'Proyectate'),
(4, 'Opinión Feminista'),
(5, 'Nosotras en el mundo'),
(6, 'Ni una menos\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL,
  `tipo_usuario` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo_usuario`, `tipo_usuario`) VALUES
(1, 'Administrador'),
(2, 'estandar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(60) NOT NULL,
  `clave` varchar(10000) NOT NULL,
  `fk_pregunta` varchar(500) NOT NULL,
  `respuesta` varchar(500) NOT NULL,
  `fk_estatus_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `clave`, `fk_pregunta`, `respuesta`, `fk_estatus_usuario`) VALUES
(1, 'gpuerta', '202cb962ac59075b964b07152d234b70', '1', 'anubis', 1),
(2, 'mdelgado', '202cb962ac59075b964b07152d234b70', '1', 'anubis', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id_articulo`);

--
-- Indices de la tabla `audiovisual`
--
ALTER TABLE `audiovisual`
  ADD PRIMARY KEY (`id_audiovisual`);

--
-- Indices de la tabla `biblioteca`
--
ALTER TABLE `biblioteca`
  ADD PRIMARY KEY (`id_libro`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `estatus_articulo`
--
ALTER TABLE `estatus_articulo`
  ADD PRIMARY KEY (`id_estatus_articulo`);

--
-- Indices de la tabla `estatus_usuario`
--
ALTER TABLE `estatus_usuario`
  ADD PRIMARY KEY (`id_estatus_usuario`);

--
-- Indices de la tabla `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`id_hero`);

--
-- Indices de la tabla `imagen_articulo`
--
ALTER TABLE `imagen_articulo`
  ADD PRIMARY KEY (`id_imagen_articulo`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD PRIMARY KEY (`id_seccion`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `audiovisual`
--
ALTER TABLE `audiovisual`
  MODIFY `id_audiovisual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `biblioteca`
--
ALTER TABLE `biblioteca`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `estatus_articulo`
--
ALTER TABLE `estatus_articulo`
  MODIFY `id_estatus_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estatus_usuario`
--
ALTER TABLE `estatus_usuario`
  MODIFY `id_estatus_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `hero`
--
ALTER TABLE `hero`
  MODIFY `id_hero` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagen_articulo`
--
ALTER TABLE `imagen_articulo`
  MODIFY `id_imagen_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `seccion`
--
ALTER TABLE `seccion`
  MODIFY `id_seccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
