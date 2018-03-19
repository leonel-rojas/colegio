-- phpMyAdmin SQL Dump
-- version 4.5.5.1deb2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-07-2016 a las 20:53:24
-- Versión del servidor: 5.6.28-1
-- Versión de PHP: 5.6.19-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `colegio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `persona_id` int(11) DEFAULT NULL,
  `representant_id` int(11) DEFAULT NULL,
  `eliminado` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `persona_id`, `representant_id`, `eliminado`) VALUES
(2, 26, 5, 1),
(3, 39, 5, 0),
(4, 42, 7, 0),
(5, 44, 8, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bancos`
--

CREATE TABLE `bancos` (
  `id` int(11) NOT NULL,
  `total` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bancos`
--

INSERT INTO `bancos` (`id`, `total`) VALUES
(7, 58450.00),
(8, 58750.00),
(9, 59550.00),
(10, 59550.00),
(11, 49550.00),
(12, 54550.00),
(13, 9550.00),
(14, 56550.00),
(15, 56450.00),
(16, 60550.00),
(17, 60450.00),
(18, 60650.00),
(19, 60750.00),
(20, 61150.00),
(21, 61250.00),
(22, 63250.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacoras`
--

CREATE TABLE `bitacoras` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `modulo` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `accion` mediumtext COLLATE utf8_spanish_ci,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bitacoras`
--

INSERT INTO `bitacoras` (`id`, `user_id`, `modulo`, `accion`, `created`) VALUES
(2, 13, 'Login', 'Acceso al Sistema', '2016-07-06 21:52:23'),
(3, 13, 'Login', 'Salio del Sistema', '2016-07-06 21:59:26'),
(4, 13, 'Login', 'Acceso al Sistema', '2016-07-06 22:22:55'),
(5, 13, 'Login', 'Salio del Sistema', '2016-07-06 22:33:09'),
(6, 14, 'Login', 'Acceso al Sistema', '2016-07-06 22:33:14'),
(7, 14, 'Login', 'Salio del Sistema', '2016-07-06 22:35:21'),
(8, 14, 'Login', 'Acceso al Sistema', '2016-07-06 22:36:45'),
(9, 13, 'Login', 'Acceso al Sistema', '2016-07-10 17:09:48'),
(10, 13, 'Login', 'Acceso al Sistema', '2016-07-10 21:16:32'),
(11, 13, 'Login', 'Acceso al Sistema', '2016-07-14 19:38:42'),
(12, 13, 'Login', 'Salio del Sistema', '2016-07-14 19:42:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id`, `nombre`) VALUES
(1, 'Director'),
(2, 'Sub - Director'),
(3, 'Obrero'),
(4, 'Docente'),
(5, 'Personal Administrativo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `nombre`) VALUES
(1, '7mo'),
(2, '8vo'),
(3, '9no'),
(4, '4to'),
(5, '5to');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egresos`
--

CREATE TABLE `egresos` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `tipoegreso_id` int(11) DEFAULT NULL,
  `detalle` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `monto` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `egresos`
--

INSERT INTO `egresos` (`id`, `fecha`, `tipoegreso_id`, `detalle`, `monto`) VALUES
(2, '2016-06-06', 1, '', 1000.00),
(3, '2016-08-06', 1, '', 35000.00),
(4, '2016-06-08', 1, '', 20000.00),
(5, '2016-06-08', 1, '', 20000.00),
(6, '2016-06-08', 1, '', 10000.00),
(7, '2016-06-08', 1, '', 5000.00),
(8, '2016-06-08', 1, '', 50000.00),
(9, '2016-06-08', 1, '', 3000.00),
(10, '2016-06-09', 2, 'Luz', 100.00),
(11, '2016-06-28', 2, 'Aseo', 100.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE `ingresos` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `periodo_id` int(11) NOT NULL,
  `tipo` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `detalle` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `alumno_id` int(11) DEFAULT NULL,
  `monto` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ingresos`
--

INSERT INTO `ingresos` (`id`, `fecha`, `periodo_id`, `tipo`, `detalle`, `alumno_id`, `monto`) VALUES
(6, '2016-06-08', 1, 'Mensualidad', '', 2, 500.00),
(7, '2016-06-08', 1, 'Mensualidad', '', 2, 500.00),
(8, '2016-06-08', 1, 'Mensualidad', '', 2, 200.00),
(9, '2016-06-14', 1, 'Mensualidad', '', 3, 1000.00),
(40, '2016-06-28', 1, 'Mensualidad', '', 3, 400.00),
(41, '2016-06-28', 1, 'Mensualidad', '', 3, 100.00),
(42, '2016-06-28', 1, 'Mensualidad', '', 3, 300.00),
(43, '2016-07-06', 1, 'Aranceles', 'Constancia de Estudio', 5, 100.00),
(44, '2016-07-06', 1, 'InscripciÃ³n', '', 5, 2000.00),
(45, '2016-07-06', 1, 'Mensualidad', '', 5, 200.00),
(46, '2016-07-06', 1, 'Mensualidad', '', 5, 400.00),
(47, '2016-07-06', 1, 'Mensualidad', '', 5, 350.00),
(48, '2016-07-10', 1, 'Aranceles', 'Constancia de Estudio', 3, 200.00);

--
-- Disparadores `ingresos`
--
DELIMITER $$
CREATE TRIGGER `sumar_ganancias` AFTER INSERT ON `ingresos` FOR EACH ROW update bancos set total=total+new.monto WHERE id=id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcions`
--

CREATE TABLE `inscripcions` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `periodo_id` int(11) DEFAULT NULL,
  `curso_id` int(11) DEFAULT NULL,
  `seccion_id` int(11) DEFAULT NULL,
  `turno_id` int(11) DEFAULT NULL,
  `alumno_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `inscripcions`
--

INSERT INTO `inscripcions` (`id`, `fecha`, `periodo_id`, `curso_id`, `seccion_id`, `turno_id`, `alumno_id`) VALUES
(1, '2016-06-01', 1, 1, 1, 1, 2),
(2, '2016-06-09', 1, 1, 1, 1, 3),
(3, '2016-06-27', 1, 1, 1, 1, 4),
(4, '2016-07-06', 1, 1, 1, 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesespagos`
--

CREATE TABLE `mesespagos` (
  `id` int(11) NOT NULL,
  `mesesyear_id` int(11) NOT NULL,
  `tarjeta_id` int(11) DEFAULT NULL,
  `ingreso_id` int(11) DEFAULT NULL,
  `condicion` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mesespagos`
--

INSERT INTO `mesespagos` (`id`, `mesesyear_id`, `tarjeta_id`, `ingreso_id`, `condicion`) VALUES
(1, 1, 1, NULL, 'Pendiente'),
(2, 2, 1, NULL, 'Pendiente'),
(3, 3, 1, NULL, 'Pendiente'),
(4, 4, 1, NULL, 'Pendiente'),
(5, 5, 1, NULL, 'Pendiente'),
(6, 6, 1, NULL, 'Pendiente'),
(7, 7, 1, NULL, 'Pendiente'),
(8, 8, 1, NULL, 'Pendiente'),
(9, 9, 1, NULL, 'Pendiente'),
(10, 10, 1, NULL, 'Pendiente'),
(11, 11, 1, NULL, 'Pendiente'),
(12, 12, 1, NULL, 'Pendiente'),
(49, 1, 6, NULL, 'Pendiente'),
(50, 2, 6, NULL, 'Pendiente'),
(51, 3, 6, NULL, 'Pendiente'),
(52, 4, 6, NULL, 'Pendiente'),
(53, 5, 6, NULL, 'Pendiente'),
(54, 6, 6, NULL, 'Pendiente'),
(55, 7, 6, NULL, 'Pendiente'),
(56, 8, 6, NULL, 'Pendiente'),
(57, 9, 6, NULL, 'Pendiente'),
(58, 10, 6, NULL, 'Pendiente'),
(59, 11, 6, NULL, 'Pendiente'),
(60, 12, 6, NULL, 'Pendiente'),
(61, 1, 7, 40, 'Cancelado'),
(62, 2, 7, 41, 'Cancelado'),
(63, 3, 7, 42, 'Cancelado'),
(64, 4, 7, NULL, 'Pendiente'),
(65, 5, 7, NULL, 'Pendiente'),
(66, 6, 7, NULL, 'Pendiente'),
(67, 7, 7, NULL, 'Pendiente'),
(68, 8, 7, NULL, 'Pendiente'),
(69, 9, 7, NULL, 'Pendiente'),
(70, 10, 7, NULL, 'Pendiente'),
(71, 11, 7, NULL, 'Pendiente'),
(72, 12, 7, NULL, 'Pendiente'),
(73, 1, 8, NULL, 'Pendiente'),
(74, 2, 8, NULL, 'Pendiente'),
(75, 3, 8, NULL, 'Pendiente'),
(76, 4, 8, NULL, 'Pendiente'),
(77, 5, 8, NULL, 'Pendiente'),
(78, 6, 8, NULL, 'Pendiente'),
(79, 7, 8, NULL, 'Pendiente'),
(80, 8, 8, NULL, 'Pendiente'),
(81, 9, 8, NULL, 'Pendiente'),
(82, 10, 8, NULL, 'Pendiente'),
(83, 11, 8, NULL, 'Pendiente'),
(84, 12, 8, NULL, 'Pendiente'),
(85, 1, 9, 45, 'Cancelado'),
(86, 2, 9, 46, 'Cancelado'),
(87, 3, 9, 47, 'Cancelado'),
(88, 4, 9, NULL, 'Pendiente'),
(89, 5, 9, NULL, 'Pendiente'),
(90, 6, 9, NULL, 'Pendiente'),
(91, 7, 9, NULL, 'Pendiente'),
(92, 8, 9, NULL, 'Pendiente'),
(93, 9, 9, NULL, 'Pendiente'),
(94, 10, 9, NULL, 'Pendiente'),
(95, 11, 9, NULL, 'Pendiente'),
(96, 12, 9, NULL, 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesesyears`
--

CREATE TABLE `mesesyears` (
  `id` int(11) NOT NULL,
  `nombre` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mesesyears`
--

INSERT INTO `mesesyears` (`id`, `nombre`) VALUES
(1, 'Septiembre'),
(2, 'Octubre'),
(3, 'Noviembre'),
(4, 'Diciembre'),
(5, 'Enero'),
(6, 'Febrero'),
(7, 'Marzo'),
(8, 'Abril'),
(9, 'Mayo'),
(10, 'Junio'),
(11, 'Julio'),
(12, 'Agosto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodos`
--

CREATE TABLE `periodos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `desde` date DEFAULT NULL,
  `hasta` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `periodos`
--

INSERT INTO `periodos` (`id`, `nombre`, `desde`, `hasta`) VALUES
(1, '2015-2016', '2015-09-01', '2016-08-31'),
(2, '2016-2017', '2016-09-01', '2017-08-31'),
(3, '2017-2018', '2017-09-01', '2018-08-31'),
(4, '2018-2019', '2018-09-01', '2019-08-31'),
(5, '2019-2020', '2019-09-01', '2020-08-31'),
(6, '2020-2021', '2020-09-01', '2021-08-31'),
(7, '2021-2022', '2021-09-01', '2022-08-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cedula` varchar(8) COLLATE utf8_spanish_ci DEFAULT NULL,
  `celular` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nacimiento` date DEFAULT NULL,
  `direccion` mediumtext COLLATE utf8_spanish_ci,
  `foto` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `foto_dir` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombre`, `apellido`, `cedula`, `celular`, `nacimiento`, `direccion`, `foto`, `foto_dir`) VALUES
(9, 'Admin', 'Admin', '1111111', '04123332211', '1981-11-10', 'DirecciÃ³n Admin', '', NULL),
(26, 'Miguel', 'Cabrera', '28776889', '0412445887', '1994-03-10', 'San Juan', '', NULL),
(30, 'Jose', 'Cabrera', '10444777', '04123339900', '1991-03-08', 'asds', NULL, NULL),
(36, 'Nina', 'Zeoli', '23629615', '04243779297', '1993-10-29', 'Santa Cruz', '', NULL),
(37, 'MarÃ­a', 'Garcia', '20527384', '04123322211', '1993-06-17', 'San Juan', '', NULL),
(38, 'Alexis', 'ChacÃ³n', '20988126', '04123332244', '1994-10-14', 'Cagua', '', NULL),
(39, 'Engimar', 'Cabrera', '28998998', '0412993228', '2016-06-09', 'Maracay', '', NULL),
(40, 'Elba', 'Campos', '28999333', '04123339988', '1998-02-05', 'San Fco', NULL, NULL),
(41, 'Jose', 'Mark', '19888123', '04123332233', '2005-07-15', 'Asda', NULL, NULL),
(42, 'Mark', 'GonzÃ¡les', '29993322', '04249998833', '1998-01-01', 'Aragua', '', NULL),
(43, 'Carlos', 'GonzÃ¡les', '19000990', '04123332211', '1986-02-06', 'Maracay', NULL, NULL),
(44, 'Diveana', 'Rodriguez', '24390080', '04241444442', '1995-12-23', 'Villa de Cura', '', NULL),
(45, 'Angel', 'Rodriguez', '15777888', '04122223344', '1957-03-13', 'Villa de Cura', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesions`
--

CREATE TABLE `profesions` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `profesions`
--

INSERT INTO `profesions` (`id`, `nombre`) VALUES
(1, 'Ingeniero'),
(2, 'Contador'),
(3, 'Administrador'),
(4, 'Medico'),
(5, 'Docente'),
(6, 'Ninguna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representants`
--

CREATE TABLE `representants` (
  `id` int(11) NOT NULL,
  `persona_id` int(11) DEFAULT NULL,
  `profesion_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `representants`
--

INSERT INTO `representants` (`id`, `persona_id`, `profesion_id`) VALUES
(5, 30, 6),
(7, 43, 1),
(8, 45, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rols`
--

CREATE TABLE `rols` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rols`
--

INSERT INTO `rols` (`id`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Normal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccions`
--

CREATE TABLE `seccions` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `seccions`
--

INSERT INTO `seccions` (`id`, `nombre`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjetas`
--

CREATE TABLE `tarjetas` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `alumno_id` int(11) DEFAULT NULL,
  `periodo_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tarjetas`
--

INSERT INTO `tarjetas` (`id`, `codigo`, `alumno_id`, `periodo_id`) VALUES
(1, 'CJFR-1516-0000002', 2, 1),
(6, 'CJFR-1617-0000002', 2, 2),
(7, 'CJFR-1516-0000003', 3, 1),
(8, 'CJFR-1516-0000004', 4, 1),
(9, 'CJFR-1516-0000005', 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoegresos`
--

CREATE TABLE `tipoegresos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipoegresos`
--

INSERT INTO `tipoegresos` (`id`, `nombre`) VALUES
(1, 'Pago de Personal'),
(2, 'Servicios Publicos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadors`
--

CREATE TABLE `trabajadors` (
  `id` int(11) NOT NULL,
  `persona_id` int(11) DEFAULT NULL,
  `cargo_id` int(11) DEFAULT NULL,
  `profesion_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `trabajadors`
--

INSERT INTO `trabajadors` (`id`, `persona_id`, `cargo_id`, `profesion_id`) VALUES
(1, 36, 3, 6),
(2, 9, 5, 1),
(3, 37, 5, 5),
(4, 38, 5, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadors_egresos`
--

CREATE TABLE `trabajadors_egresos` (
  `id` int(11) NOT NULL,
  `trabajador_id` int(11) NOT NULL,
  `egreso_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `trabajadors_egresos`
--

INSERT INTO `trabajadors_egresos` (`id`, `trabajador_id`, `egreso_id`) VALUES
(1, 2, 2),
(2, 1, 3),
(3, 2, 4),
(4, 1, 5),
(5, 1, 6),
(6, 1, 7),
(7, 1, 8),
(8, 1, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE `turnos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`id`, `nombre`) VALUES
(1, 'Diurno'),
(2, 'Vespertino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `persona_id` int(11) DEFAULT NULL,
  `username` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL,
  `status` varchar(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `eliminado` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `persona_id`, `username`, `password`, `rol_id`, `status`, `created`, `modified`, `eliminado`) VALUES
(13, 9, 'admin@colegio.com', '$2a$10$e3CsjyOEIGHi6HX.YYzZX.yasDkyrub.Ap2QNUdxJMBmHIyHK66f6', 1, 'A', '2016-05-25 08:40:44', '2016-06-08 14:08:28', 0),
(14, 37, 'maria@colegio.com', '$2a$10$ZH150jXj.Z9PLnI8J2M4luSWtj.9Zg3oWWbJEp0USobk3uP2E.IL.', 2, 'A', '2016-06-08 22:25:05', '2016-07-06 22:31:58', 0),
(15, 38, 'alexis@colegio.com', '$2a$10$kL5rqFw6gnL9W5oYGw8nu.YM5AHlM/aexF6g8JsSccLOeAJl1nBnG', 1, 'A', '2016-06-08 22:26:22', '2016-06-08 22:26:22', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `persona_id` (`persona_id`),
  ADD KEY `representante_id` (`representant_id`);

--
-- Indices de la tabla `bancos`
--
ALTER TABLE `bancos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bitacoras`
--
ALTER TABLE `bitacoras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `egresos`
--
ALTER TABLE `egresos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipoegreso_id` (`tipoegreso_id`);

--
-- Indices de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alumno_id` (`alumno_id`);

--
-- Indices de la tabla `inscripcions`
--
ALTER TABLE `inscripcions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `periodo_id` (`periodo_id`),
  ADD KEY `curso_id` (`curso_id`),
  ADD KEY `seccion_id` (`seccion_id`),
  ADD KEY `turno_id` (`turno_id`),
  ADD KEY `alumno_id` (`alumno_id`);

--
-- Indices de la tabla `mesespagos`
--
ALTER TABLE `mesespagos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tarjeta_id` (`tarjeta_id`),
  ADD KEY `ingreso_id` (`ingreso_id`),
  ADD KEY `mesesyear_id` (`mesesyear_id`);

--
-- Indices de la tabla `mesesyears`
--
ALTER TABLE `mesesyears`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `periodos`
--
ALTER TABLE `periodos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesions`
--
ALTER TABLE `profesions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `representants`
--
ALTER TABLE `representants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `persona_id` (`persona_id`),
  ADD KEY `profesion_id` (`profesion_id`);

--
-- Indices de la tabla `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seccions`
--
ALTER TABLE `seccions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tarjetas`
--
ALTER TABLE `tarjetas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alumno_id` (`alumno_id`),
  ADD KEY `periodo_id` (`periodo_id`);

--
-- Indices de la tabla `tipoegresos`
--
ALTER TABLE `tipoegresos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trabajadors`
--
ALTER TABLE `trabajadors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `persona_id` (`persona_id`),
  ADD KEY `cargo_id` (`cargo_id`),
  ADD KEY `profesion_id` (`profesion_id`);

--
-- Indices de la tabla `trabajadors_egresos`
--
ALTER TABLE `trabajadors_egresos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `persona_id` (`persona_id`),
  ADD KEY `rol_id` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `bancos`
--
ALTER TABLE `bancos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `bitacoras`
--
ALTER TABLE `bitacoras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `egresos`
--
ALTER TABLE `egresos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT de la tabla `inscripcions`
--
ALTER TABLE `inscripcions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `mesespagos`
--
ALTER TABLE `mesespagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT de la tabla `mesesyears`
--
ALTER TABLE `mesesyears`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `periodos`
--
ALTER TABLE `periodos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT de la tabla `profesions`
--
ALTER TABLE `profesions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `representants`
--
ALTER TABLE `representants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `rols`
--
ALTER TABLE `rols`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `seccions`
--
ALTER TABLE `seccions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tarjetas`
--
ALTER TABLE `tarjetas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `tipoegresos`
--
ALTER TABLE `tipoegresos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `trabajadors`
--
ALTER TABLE `trabajadors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `trabajadors_egresos`
--
ALTER TABLE `trabajadors_egresos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `turnos`
--
ALTER TABLE `turnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`),
  ADD CONSTRAINT `alumnos_ibfk_2` FOREIGN KEY (`representant_id`) REFERENCES `representants` (`id`);

--
-- Filtros para la tabla `bitacoras`
--
ALTER TABLE `bitacoras`
  ADD CONSTRAINT `bitacoras_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `egresos`
--
ALTER TABLE `egresos`
  ADD CONSTRAINT `egresos_ibfk_1` FOREIGN KEY (`tipoegreso_id`) REFERENCES `tipoegresos` (`id`);

--
-- Filtros para la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD CONSTRAINT `ingresos_ibfk_1` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`id`);

--
-- Filtros para la tabla `inscripcions`
--
ALTER TABLE `inscripcions`
  ADD CONSTRAINT `inscripcions_ibfk_1` FOREIGN KEY (`periodo_id`) REFERENCES `periodos` (`id`),
  ADD CONSTRAINT `inscripcions_ibfk_2` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`),
  ADD CONSTRAINT `inscripcions_ibfk_3` FOREIGN KEY (`seccion_id`) REFERENCES `seccions` (`id`),
  ADD CONSTRAINT `inscripcions_ibfk_4` FOREIGN KEY (`turno_id`) REFERENCES `turnos` (`id`),
  ADD CONSTRAINT `inscripcions_ibfk_5` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`id`);

--
-- Filtros para la tabla `mesespagos`
--
ALTER TABLE `mesespagos`
  ADD CONSTRAINT `mesespagos_ibfk_1` FOREIGN KEY (`tarjeta_id`) REFERENCES `tarjetas` (`id`),
  ADD CONSTRAINT `mesespagos_ibfk_2` FOREIGN KEY (`ingreso_id`) REFERENCES `ingresos` (`id`);

--
-- Filtros para la tabla `representants`
--
ALTER TABLE `representants`
  ADD CONSTRAINT `representants_ibfk_1` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`),
  ADD CONSTRAINT `representants_ibfk_2` FOREIGN KEY (`profesion_id`) REFERENCES `profesions` (`id`);

--
-- Filtros para la tabla `tarjetas`
--
ALTER TABLE `tarjetas`
  ADD CONSTRAINT `tarjetas_ibfk_1` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`id`),
  ADD CONSTRAINT `tarjetas_ibfk_2` FOREIGN KEY (`periodo_id`) REFERENCES `periodos` (`id`);

--
-- Filtros para la tabla `trabajadors`
--
ALTER TABLE `trabajadors`
  ADD CONSTRAINT `trabajadors_ibfk_1` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`),
  ADD CONSTRAINT `trabajadors_ibfk_2` FOREIGN KEY (`cargo_id`) REFERENCES `cargos` (`id`),
  ADD CONSTRAINT `trabajadors_ibfk_3` FOREIGN KEY (`profesion_id`) REFERENCES `profesions` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`rol_id`) REFERENCES `rols` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
