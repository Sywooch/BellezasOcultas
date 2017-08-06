-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-07-2017 a las 14:34:56
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bellezas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `ID_CATEGORIA` int(11) NOT NULL,
  `NOMBRE` varchar(120) DEFAULT NULL,
  `ACTIVOS` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`ID_CATEGORIA`, `NOMBRE`, `ACTIVOS`) VALUES
(1, 'Pago', 1),
(2, 'Gratis', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `ID_COMEN` int(11) NOT NULL,
  `ID_LUGAR` int(11) DEFAULT NULL,
  `ID_USUARIO` int(11) DEFAULT NULL,
  `DESCRIPCION_COM` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`ID_COMEN`, `ID_LUGAR`, `ID_USUARIO`, `DESCRIPCION_COM`) VALUES
(1, 1, 2, 'me encanto'),
(2, 2, 1, 'buen lugar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

CREATE TABLE `estatus` (
  `ID_ESTA` int(11) NOT NULL,
  `DESCRIPCION` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estatus`
--

INSERT INTO `estatus` (`ID_ESTA`, `DESCRIPCION`) VALUES
(1, 'buen lugar centrico '),
(2, 'excelente lugar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `ID` int(11) NOT NULL,
  `ID_LUGAR` int(11) DEFAULT NULL,
  `UBICACION` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugares`
--

CREATE TABLE `lugares` (
  `ID_LUGAR` int(11) NOT NULL,
  `ID_USUARIO` int(11) DEFAULT NULL,
  `ID_CATEGORIA` int(11) DEFAULT NULL,
  `NOMBRE` varchar(120) DEFAULT NULL,
  `GRATUITO` tinyint(1) DEFAULT NULL,
  `PRECIO_APROX` decimal(20,0) DEFAULT NULL,
  `DIRECCION` text,
  `CONCACTO` text,
  `TELEFONO` char(15) DEFAULT NULL,
  `E_MAIL` varchar(50) DEFAULT NULL,
  `ACTIVOS` tinyint(1) DEFAULT NULL,
  `DESCRIPCION` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lugares`
--

INSERT INTO `lugares` (`ID_LUGAR`, `ID_USUARIO`, `ID_CATEGORIA`, `NOMBRE`, `GRATUITO`, `PRECIO_APROX`, `DIRECCION`, `CONCACTO`, `TELEFONO`, `E_MAIL`, `ACTIVOS`, `DESCRIPCION`) VALUES
(1, 1, 2, 'Pisinas chanito', 1, '0', 'buen lugar', 'Con chanito toledo', '1234567899', 'Correo@correo', 1, 'cenote y pisinas'),
(2, 2, 1, 'xelha', 0, '1200', 'Buen lugar', 'experiencias xcaret', '9876543211', 'experiencias@xcaret.com', 1, 'buen lugar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar_detalle`
--

CREATE TABLE `lugar_detalle` (
  `ID_LUGAR_DET` int(11) NOT NULL,
  `ID_LUGAR` int(11) DEFAULT NULL,
  `ACCESO_DIS` tinyint(1) DEFAULT NULL,
  `EMBARAZADA` tinyint(1) DEFAULT NULL,
  `MENOR_EDAD` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lugar_detalle`
--

INSERT INTO `lugar_detalle` (`ID_LUGAR_DET`, `ID_LUGAR`, `ACCESO_DIS`, `EMBARAZADA`, `MENOR_EDAD`) VALUES
(1, 2, 1, 1, 1),
(2, 1, 0, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sugerencias`
--

CREATE TABLE `sugerencias` (
  `ID_SUGER` int(11) NOT NULL,
  `ID_USUARIO` int(11) DEFAULT NULL,
  `ID_ESTA` int(11) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `NOMBRE` varchar(120) DEFAULT NULL,
  `DESCRIPCION` text,
  `UBICACION` varchar(255) DEFAULT NULL,
  `FOTO` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_usuarios`
--

CREATE TABLE `tipos_usuarios` (
  `ID` int(11) NOT NULL,
  `TIPO` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipos_usuarios`
--

INSERT INTO `tipos_usuarios` (`ID`, `TIPO`) VALUES
(1, 'Administrador'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicaciones`
--

CREATE TABLE `ubicaciones` (
  `ID_UBICACION` int(11) NOT NULL,
  `ID_LUGAR` int(11) DEFAULT NULL,
  `LONGITUD` varchar(100) DEFAULT NULL,
  `LATITUD` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ubicaciones`
--

INSERT INTO `ubicaciones` (`ID_UBICACION`, `ID_LUGAR`, `LONGITUD`, `LATITUD`) VALUES
(1, 1, '912631096\r\n', '854012+52105063'),
(2, 2, '906510653165', '05132+1526301546');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_USUARIO` int(11) NOT NULL,
  `ID` int(11) DEFAULT NULL,
  `NOMBRE` varchar(120) DEFAULT NULL,
  `APELLIDO_P` varchar(100) DEFAULT NULL,
  `APELLIDO_M` varchar(100) DEFAULT NULL,
  `CORREO` varchar(150) DEFAULT NULL,
  `CONTRASENA` varchar(150) DEFAULT NULL,
  `TELEFONO` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIO`, `ID`, `NOMBRE`, `APELLIDO_P`, `APELLIDO_M`, `CORREO`, `CONTRASENA`, `TELEFONO`) VALUES
(1, 1, 'Javier ', 'Cano ', 'Coutiño', 'CanoJAvier08@gmail.com', '123456789', '9841387213'),
(2, 1, 'Sandy', 'Pech', 'colli ', 'Sand@gmail.com', '987654321', '9841561542');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`ID_CATEGORIA`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`ID_COMEN`),
  ADD KEY `FK_RELATIONSHIP_4` (`ID_USUARIO`),
  ADD KEY `FK_RELATIONSHIP_5` (`ID_LUGAR`);

--
-- Indices de la tabla `estatus`
--
ALTER TABLE `estatus`
  ADD PRIMARY KEY (`ID_ESTA`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_RELATIONSHIP_10` (`ID_LUGAR`);

--
-- Indices de la tabla `lugares`
--
ALTER TABLE `lugares`
  ADD PRIMARY KEY (`ID_LUGAR`),
  ADD KEY `FK_RELATIONSHIP_2` (`ID_CATEGORIA`),
  ADD KEY `FK_RELATIONSHIP_9` (`ID_USUARIO`);

--
-- Indices de la tabla `lugar_detalle`
--
ALTER TABLE `lugar_detalle`
  ADD PRIMARY KEY (`ID_LUGAR_DET`),
  ADD KEY `FK_RELATIONSHIP_3` (`ID_LUGAR`);

--
-- Indices de la tabla `sugerencias`
--
ALTER TABLE `sugerencias`
  ADD PRIMARY KEY (`ID_SUGER`),
  ADD KEY `FK_RELATIONSHIP_6` (`ID_USUARIO`),
  ADD KEY `FK_RELATIONSHIP_7` (`ID_ESTA`);

--
-- Indices de la tabla `tipos_usuarios`
--
ALTER TABLE `tipos_usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `ubicaciones`
--
ALTER TABLE `ubicaciones`
  ADD PRIMARY KEY (`ID_UBICACION`),
  ADD KEY `FK_RELATIONSHIP_8` (`ID_LUGAR`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_USUARIO`),
  ADD KEY `FK_RELATIONSHIP_11` (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `ID_CATEGORIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `ID_COMEN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `estatus`
--
ALTER TABLE `estatus`
  MODIFY `ID_ESTA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `lugares`
--
ALTER TABLE `lugares`
  MODIFY `ID_LUGAR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `lugar_detalle`
--
ALTER TABLE `lugar_detalle`
  MODIFY `ID_LUGAR_DET` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `sugerencias`
--
ALTER TABLE `sugerencias`
  MODIFY `ID_SUGER` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipos_usuarios`
--
ALTER TABLE `tipos_usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `ubicaciones`
--
ALTER TABLE `ubicaciones`
  MODIFY `ID_UBICACION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`),
  ADD CONSTRAINT `FK_RELATIONSHIP_5` FOREIGN KEY (`ID_LUGAR`) REFERENCES `lugares` (`ID_LUGAR`);

--
-- Filtros para la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `FK_RELATIONSHIP_10` FOREIGN KEY (`ID_LUGAR`) REFERENCES `lugares` (`ID_LUGAR`);

--
-- Filtros para la tabla `lugares`
--
ALTER TABLE `lugares`
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`ID_CATEGORIA`) REFERENCES `categorias` (`ID_CATEGORIA`),
  ADD CONSTRAINT `FK_RELATIONSHIP_9` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`);

--
-- Filtros para la tabla `lugar_detalle`
--
ALTER TABLE `lugar_detalle`
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`ID_LUGAR`) REFERENCES `lugares` (`ID_LUGAR`);

--
-- Filtros para la tabla `sugerencias`
--
ALTER TABLE `sugerencias`
  ADD CONSTRAINT `FK_RELATIONSHIP_6` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`),
  ADD CONSTRAINT `FK_RELATIONSHIP_7` FOREIGN KEY (`ID_ESTA`) REFERENCES `estatus` (`ID_ESTA`);

--
-- Filtros para la tabla `ubicaciones`
--
ALTER TABLE `ubicaciones`
  ADD CONSTRAINT `FK_RELATIONSHIP_8` FOREIGN KEY (`ID_LUGAR`) REFERENCES `lugares` (`ID_LUGAR`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `FK_RELATIONSHIP_11` FOREIGN KEY (`ID`) REFERENCES `tipos_usuarios` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
