-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2020 a las 05:23:52
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sei_sw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bienestar`
--

CREATE TABLE `bienestar` (
  `id_bienestar` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `id_especimen` int(10) UNSIGNED NOT NULL,
  `daño_quilla` enum('Recta','Desviada','Fracturada') NOT NULL,
  `relacion_hl` decimal(3,2) NOT NULL,
  `inmovilidad_tonica` tinyint(4) NOT NULL,
  `frecuencia_cardiaca` smallint(6) NOT NULL,
  `sdss` decimal(4,1) NOT NULL,
  `sdsd` decimal(4,1) NOT NULL,
  `rmssd` decimal(4,1) NOT NULL,
  `relacion_bf_af` decimal(3,2) NOT NULL,
  `temperatura` decimal(3,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bienestar`
--

INSERT INTO `bienestar` (`id_bienestar`, `fecha`, `id_especimen`, `daño_quilla`, `relacion_hl`, `inmovilidad_tonica`, `frecuencia_cardiaca`, `sdss`, `sdsd`, `rmssd`, `relacion_bf_af`, `temperatura`) VALUES
(1, '2019-12-15', 3, 'Recta', '5.27', 17, 320, '49.8', '75.2', '37.1', '7.95', '17.1'),
(2, '2019-12-15', 5, 'Desviada', '5.28', 18, 355, '47.9', '70.4', '33.2', '6.87', '19.1'),
(3, '2019-12-11', 3, 'Recta', '6.25', 18, 300, '39.8', '74.1', '39.5', '7.99', '18.0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calidad_huevo`
--

CREATE TABLE `calidad_huevo` (
  `id_calidadh` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `id_especimen` int(10) UNSIGNED NOT NULL,
  `peso_huevo` decimal(3,1) NOT NULL,
  `color_yema` tinyint(4) NOT NULL,
  `inclusiones` enum('No tiene','Carne','Sangre') NOT NULL,
  `altura_albumina` decimal(4,2) NOT NULL,
  `peso_albumina` decimal(3,2) NOT NULL,
  `u_haugh` decimal(5,2) NOT NULL,
  `color_cascara` tinyint(4) NOT NULL,
  `peso_cascara` decimal(3,1) NOT NULL,
  `ecuador` smallint(6) NOT NULL,
  `polo_ancho` smallint(6) NOT NULL,
  `polo_agudo` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `calidad_huevo`
--

INSERT INTO `calidad_huevo` (`id_calidadh`, `fecha`, `id_especimen`, `peso_huevo`, `color_yema`, `inclusiones`, `altura_albumina`, `peso_albumina`, `u_haugh`, `color_cascara`, `peso_cascara`, `ecuador`, `polo_ancho`, `polo_agudo`) VALUES
(1, '2019-12-15', 4, '53.1', 9, 'Sangre', '9.26', '9.99', '97.63', 80, '4.7', 350, 409, 250);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especimenes`
--

CREATE TABLE `especimenes` (
  `id_especimen` int(11) UNSIGNED NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `peso` decimal(6,2) NOT NULL,
  `f_nacimiento` date NOT NULL,
  `id_uexperimental` int(11) UNSIGNED NOT NULL,
  `status_especimen` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `especimenes`
--

INSERT INTO `especimenes` (`id_especimen`, `codigo`, `peso`, `f_nacimiento`, `id_uexperimental`, `status_especimen`) VALUES
(2, 'abc01', '1000.25', '2019-10-02', 1, '1'),
(3, 'abc02', '1050.36', '2019-09-11', 1, '1'),
(4, 'abc03', '966.25', '2019-10-08', 1, '1'),
(5, 'def01', '1500.54', '2019-10-07', 2, '1'),
(6, 'def02', '750.56', '2019-05-15', 2, '1'),
(7, 'def03', '985.58', '2019-07-11', 2, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id_nota` int(10) UNSIGNED NOT NULL,
  `fecha` datetime NOT NULL,
  `comentarios` varchar(255) NOT NULL,
  `id_uexperimental` int(11) UNSIGNED NOT NULL,
  `id_usuario` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`id_nota`, `fecha`, `comentarios`, `id_uexperimental`, `id_usuario`) VALUES
(1, '2019-10-07 17:25:00', 'Unidad experimental creada correctamente', 1, 2),
(2, '2019-12-15 20:12:31', 'Indicador de bienestar registrado al especimen abc02', 1, 2),
(3, '2019-12-15 20:53:26', 'Indicador de bienestar registrado al especimen def01', 2, 6),
(5, '2019-12-11 21:09:10', 'Indicador de bienestar registrado al especimen abc02', 1, 7),
(7, '2019-12-15 21:55:01', 'Indicador de calidad del huevo registrado al especimen abc03', 1, 6),
(8, '2019-12-15 23:14:51', 'Indicador de productividad registrado', 1, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productividad`
--

CREATE TABLE `productividad` (
  `id_productividad` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `id_uexperimental` int(10) UNSIGNED NOT NULL,
  `postura` enum('0','1') NOT NULL,
  `peso_huevo` decimal(4,1) NOT NULL,
  `masa_huevo` decimal(4,1) NOT NULL,
  `alimento_inicial` decimal(4,1) NOT NULL,
  `alimento_residual` decimal(4,1) NOT NULL,
  `consumo_alimento` decimal(4,1) NOT NULL,
  `eficiencia_produccion` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productividad`
--

INSERT INTO `productividad` (`id_productividad`, `fecha`, `id_uexperimental`, `postura`, `peso_huevo`, `masa_huevo`, `alimento_inicial`, `alimento_residual`, `consumo_alimento`, `eficiencia_produccion`) VALUES
(1, '2019-12-15', 1, '1', '159.3', '53.1', '330.0', '30.0', '300.0', '564.97');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamientos`
--

CREATE TABLE `tratamientos` (
  `id_tratamiento` tinyint(4) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `observaciones` varchar(200) NOT NULL,
  `status_tratamiento` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tratamientos`
--

INSERT INTO `tratamientos` (`id_tratamiento`, `nombre`, `observaciones`, `status_tratamiento`) VALUES
(1, 'tr01', 'con cercha', '1'),
(2, 'tr02', 'sin cercha', '1'),
(4, 'tr03', 'sin piso', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ue_tratamientos`
--

CREATE TABLE `ue_tratamientos` (
  `id_uexperimental` int(11) UNSIGNED NOT NULL,
  `id_tratamiento` tinyint(4) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ue_tratamientos`
--

INSERT INTO `ue_tratamientos` (`id_uexperimental`, `id_tratamiento`) VALUES
(1, 1),
(1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ue_usuarios`
--

CREATE TABLE `ue_usuarios` (
  `id_usuario` int(11) UNSIGNED NOT NULL,
  `id_uexperimental` int(11) UNSIGNED NOT NULL,
  `acceso` enum('administrador','asistente') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ue_usuarios`
--

INSERT INTO `ue_usuarios` (`id_usuario`, `id_uexperimental`, `acceso`) VALUES
(2, 1, 'administrador'),
(2, 2, 'administrador'),
(6, 1, 'asistente'),
(6, 2, 'asistente'),
(7, 1, 'asistente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) UNSIGNED NOT NULL,
  `codigoUCC` int(11) NOT NULL,
  `nombres` varchar(200) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `genero` enum('M','F') NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `privilegio` int(2) UNSIGNED NOT NULL,
  `password` varchar(100) NOT NULL,
  `status_usuario` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `codigoUCC`, `nombres`, `apellidos`, `genero`, `telefono`, `email`, `privilegio`, `password`, `status_usuario`) VALUES
(2, 485137, 'Andres', 'Triana', 'M', '3203342910', 'climaco.triana@campusucc.edu.co', 1, 'ats12+ejc', 2),
(6, 513698, 'Erica', 'Hernandez', 'F', '3132764997', 'ehernandez@campusucc.edu.co', 2, '12345', 2),
(7, 458963, 'Andres Felipe', 'Campos', 'M', '3259632145', 'andres.campos@campusucc.edu.co', 2, '12345', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `u_experimentales`
--

CREATE TABLE `u_experimentales` (
  `id_uexperimental` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `creacion` date NOT NULL,
  `status_uexperimental` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `u_experimentales`
--

INSERT INTO `u_experimentales` (`id_uexperimental`, `nombre`, `creacion`, `status_uexperimental`) VALUES
(1, 'abc-123', '2019-10-07', '1'),
(2, 'def-456', '2019-11-04', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bienestar`
--
ALTER TABLE `bienestar`
  ADD PRIMARY KEY (`id_bienestar`),
  ADD KEY `fk_esp_bie` (`id_especimen`);

--
-- Indices de la tabla `calidad_huevo`
--
ALTER TABLE `calidad_huevo`
  ADD PRIMARY KEY (`id_calidadh`),
  ADD KEY `fk_esp_cah` (`id_especimen`);

--
-- Indices de la tabla `especimenes`
--
ALTER TABLE `especimenes`
  ADD PRIMARY KEY (`id_especimen`),
  ADD KEY `fk_uex_esp` (`id_uexperimental`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id_nota`),
  ADD KEY `fk_usu_not` (`id_usuario`),
  ADD KEY `fk_uex_not` (`id_uexperimental`);

--
-- Indices de la tabla `productividad`
--
ALTER TABLE `productividad`
  ADD PRIMARY KEY (`id_productividad`),
  ADD KEY `fk_uex_pro` (`id_uexperimental`);

--
-- Indices de la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  ADD PRIMARY KEY (`id_tratamiento`),
  ADD UNIQUE KEY `uni_nom` (`nombre`);

--
-- Indices de la tabla `ue_tratamientos`
--
ALTER TABLE `ue_tratamientos`
  ADD PRIMARY KEY (`id_uexperimental`,`id_tratamiento`),
  ADD KEY `fk_tra_uet` (`id_tratamiento`);

--
-- Indices de la tabla `ue_usuarios`
--
ALTER TABLE `ue_usuarios`
  ADD PRIMARY KEY (`id_usuario`,`id_uexperimental`),
  ADD KEY `fk_uex_ueu` (`id_uexperimental`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `usu_cod` (`codigoUCC`),
  ADD KEY `fk_rol_usu` (`privilegio`);

--
-- Indices de la tabla `u_experimentales`
--
ALTER TABLE `u_experimentales`
  ADD PRIMARY KEY (`id_uexperimental`),
  ADD UNIQUE KEY `ue_nom` (`nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bienestar`
--
ALTER TABLE `bienestar`
  MODIFY `id_bienestar` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `calidad_huevo`
--
ALTER TABLE `calidad_huevo`
  MODIFY `id_calidadh` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `especimenes`
--
ALTER TABLE `especimenes`
  MODIFY `id_especimen` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id_nota` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `productividad`
--
ALTER TABLE `productividad`
  MODIFY `id_productividad` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  MODIFY `id_tratamiento` tinyint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `u_experimentales`
--
ALTER TABLE `u_experimentales`
  MODIFY `id_uexperimental` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bienestar`
--
ALTER TABLE `bienestar`
  ADD CONSTRAINT `fk_esp_bie` FOREIGN KEY (`id_especimen`) REFERENCES `especimenes` (`id_especimen`);

--
-- Filtros para la tabla `calidad_huevo`
--
ALTER TABLE `calidad_huevo`
  ADD CONSTRAINT `fk_esp_cah` FOREIGN KEY (`id_especimen`) REFERENCES `especimenes` (`id_especimen`);

--
-- Filtros para la tabla `especimenes`
--
ALTER TABLE `especimenes`
  ADD CONSTRAINT `fk_uex_esp` FOREIGN KEY (`id_uexperimental`) REFERENCES `u_experimentales` (`id_uexperimental`);

--
-- Filtros para la tabla `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `fk_uex_not` FOREIGN KEY (`id_uexperimental`) REFERENCES `u_experimentales` (`id_uexperimental`),
  ADD CONSTRAINT `fk_usu_not` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `productividad`
--
ALTER TABLE `productividad`
  ADD CONSTRAINT `fk_uex_pro` FOREIGN KEY (`id_uexperimental`) REFERENCES `u_experimentales` (`id_uexperimental`);

--
-- Filtros para la tabla `ue_tratamientos`
--
ALTER TABLE `ue_tratamientos`
  ADD CONSTRAINT `fk_tra_uet` FOREIGN KEY (`id_tratamiento`) REFERENCES `tratamientos` (`id_tratamiento`),
  ADD CONSTRAINT `fk_uex_uet` FOREIGN KEY (`id_uexperimental`) REFERENCES `u_experimentales` (`id_uexperimental`);

--
-- Filtros para la tabla `ue_usuarios`
--
ALTER TABLE `ue_usuarios`
  ADD CONSTRAINT `fk_uex_ueu` FOREIGN KEY (`id_uexperimental`) REFERENCES `u_experimentales` (`id_uexperimental`),
  ADD CONSTRAINT `fk_usu_ueu` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
