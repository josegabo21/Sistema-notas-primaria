-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-06-2024 a las 21:44:40
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `conexion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes_cuartogrado`
--

CREATE TABLE `estudiantes_cuartogrado` (
  `ID` int(11) NOT NULL COMMENT 'ID del estuduante',
  `nombre` text NOT NULL COMMENT 'nombre del usuario',
  `edad` varchar(10) NOT NULL COMMENT 'edad del estudiante',
  `direccion` text NOT NULL COMMENT 'dirección estudiante',
  `fecha_nacimiento` text NOT NULL COMMENT 'fecha de nacimiento',
  `fecha_registro` text NOT NULL COMMENT 'fecha de registro '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiantes_cuartogrado`
--

INSERT INTO `estudiantes_cuartogrado` (`ID`, `nombre`, `edad`, `direccion`, `fecha_nacimiento`, `fecha_registro`) VALUES
(2, 'williams', '9', 'qwert', '2024-06-20', '2024-07-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes_primergrado`
--

CREATE TABLE `estudiantes_primergrado` (
  `ID` int(11) NOT NULL COMMENT 'ID del estuduante',
  `nombre` text NOT NULL COMMENT 'nombre del estudiante',
  `edad` varchar(15) NOT NULL COMMENT 'edad del estudiante',
  `direccion` text NOT NULL COMMENT 'dirección estudiante',
  `fecha_nacimiento` text NOT NULL COMMENT 'fecha de nacimiento',
  `fecha_registro` text NOT NULL COMMENT 'fecha de registro '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiantes_primergrado`
--

INSERT INTO `estudiantes_primergrado` (`ID`, `nombre`, `edad`, `direccion`, `fecha_nacimiento`, `fecha_registro`) VALUES
(3, 'rivas jose ', '7', 'colombia', '2024-06-05', '2024-06-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes_quintogrado`
--

CREATE TABLE `estudiantes_quintogrado` (
  `ID` int(11) NOT NULL COMMENT 'ID del estuduante',
  `nombre` text NOT NULL COMMENT 'nombre del estudiante',
  `edad` varchar(10) NOT NULL COMMENT 'edad del estudiante',
  `direccion` text NOT NULL COMMENT 'dirección estudiante',
  `fecha_nacimiento` text NOT NULL COMMENT 'fecha de nacimiento',
  `fecha_registro` text NOT NULL COMMENT 'fecha de registro '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiantes_quintogrado`
--

INSERT INTO `estudiantes_quintogrado` (`ID`, `nombre`, `edad`, `direccion`, `fecha_nacimiento`, `fecha_registro`) VALUES
(2, 'ashly', '10', 'su casa', '2024-05-27', '2024-07-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes_segundogrado`
--

CREATE TABLE `estudiantes_segundogrado` (
  `ID` int(11) NOT NULL COMMENT 'ID del estuduante',
  `nombre` text NOT NULL COMMENT 'nombre del usuario',
  `edad` varchar(10) NOT NULL COMMENT 'edad del estudiante',
  `direccion` text NOT NULL COMMENT 'dirección estudiante',
  `fecha_nacimiento` text NOT NULL COMMENT 'fecha de nacimiento',
  `fecha_registro` text CHARACTER SET utf8 NOT NULL COMMENT 'fecha de registro '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiantes_segundogrado`
--

INSERT INTO `estudiantes_segundogrado` (`ID`, `nombre`, `edad`, `direccion`, `fecha_nacimiento`, `fecha_registro`) VALUES
(2, 'sebastian', '8', 'venezuela', '2024-06-05', '2024-06-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes_sextogrado`
--

CREATE TABLE `estudiantes_sextogrado` (
  `ID` int(11) NOT NULL COMMENT 'ID del estuduante',
  `nombre` text CHARACTER SET utf8 NOT NULL COMMENT 'nombre del estudiante',
  `edad` varchar(10) NOT NULL COMMENT 'edad del estudiante',
  `direccion` text NOT NULL COMMENT 'dirección estudiante',
  `fecha_nacimiento` text NOT NULL COMMENT 'fecha de nacimiento',
  `fecha_registro` text NOT NULL COMMENT 'fecha de registro '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiantes_sextogrado`
--

INSERT INTO `estudiantes_sextogrado` (`ID`, `nombre`, `edad`, `direccion`, `fecha_nacimiento`, `fecha_registro`) VALUES
(1, 'adrian ', '11', 'rgrge', '2024-06-03', '2024-07-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes_tercergrado`
--

CREATE TABLE `estudiantes_tercergrado` (
  `ID` int(11) NOT NULL COMMENT 'ID del estuduante',
  `nombre` text CHARACTER SET utf8 NOT NULL COMMENT 'nombre del estudiante',
  `edad` varchar(10) NOT NULL COMMENT 'edad del estudiante',
  `direccion` text CHARACTER SET utf8 NOT NULL COMMENT 'dirección estudiante',
  `fecha_nacimiento` text NOT NULL COMMENT 'fecha de nacimiento',
  `fecha_registro` text NOT NULL COMMENT 'fecha de registro '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiantes_tercergrado`
--

INSERT INTO `estudiantes_tercergrado` (`ID`, `nombre`, `edad`, `direccion`, `fecha_nacimiento`, `fecha_registro`) VALUES
(1, 'jose', '7', 'cvb', '2024-06-05', '2024-06-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` varchar(10) NOT NULL COMMENT 'ID del usuario',
  `nombre` text NOT NULL COMMENT 'nombre del usuario',
  `usuario` text NOT NULL COMMENT 'usuario',
  `pass` varchar(20) NOT NULL COMMENT 'contraseña del usuario',
  `rol` int(10) NOT NULL COMMENT 'rol del usuario',
  `estado` int(10) NOT NULL COMMENT 'estado del usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `nombre`, `usuario`, `pass`, `rol`, `estado`) VALUES
('1', 'Jose Gabriel', 'jose', '123', 1, 0),
('2', 'Jose Rivas', 'rivas', '456', 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_administrador`
--

CREATE TABLE `usuarios_administrador` (
  `ID` int(11) NOT NULL COMMENT 'ID del usuario',
  `usuario` varchar(50) NOT NULL COMMENT 'nombre del usuario',
  `pass` varchar(50) NOT NULL COMMENT 'password del usuario',
  `nombre` varchar(50) NOT NULL COMMENT 'nombre del usuario',
  `rol` varchar(50) NOT NULL COMMENT 'rol del usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios_administrador`
--

INSERT INTO `usuarios_administrador` (`ID`, `usuario`, `pass`, `nombre`, `rol`) VALUES
(21, 'Jose ', '123', 'Jose Rivas', 'Administrador'),
(25, 'Gabriel', '456', 'abuela jose', 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_profesor`
--

CREATE TABLE `usuarios_profesor` (
  `ID` int(11) NOT NULL COMMENT 'ID del usuario',
  `usuario` varchar(50) NOT NULL COMMENT 'nombre del usuario',
  `pass` varchar(50) NOT NULL COMMENT 'password del usuario',
  `nombre` varchar(50) NOT NULL COMMENT 'nombre del usuario',
  `rol` varchar(50) NOT NULL COMMENT 'rol del usuario',
  `edad` varchar(11) NOT NULL COMMENT 'edad del profesor',
  `cedula` varchar(11) NOT NULL COMMENT 'cedula del profesor',
  `direccionCorreo` text NOT NULL COMMENT 'correo del profesor',
  `telefono` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT 'telefono del profesor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios_profesor`
--

INSERT INTO `usuarios_profesor` (`ID`, `usuario`, `pass`, `nombre`, `rol`, `edad`, `cedula`, `direccionCorreo`, `telefono`) VALUES
(1, '29639466', '123', 'Gil', 'Profesor', '29', '20543213', 'gil67@gmail.com', '0412-5678903'),
(2, '10367800', '456', 'Nelmar', 'Profesor', '22', '29765432', 'nel31@gmail.com', '0424-5467890'),
(3, '33590', '456', 'sebas', 'Profesor', '15', '33590619', 'josega@gmail.com', '0414-5167643');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes_cuartogrado`
--
ALTER TABLE `estudiantes_cuartogrado`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `estudiantes_primergrado`
--
ALTER TABLE `estudiantes_primergrado`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `estudiantes_quintogrado`
--
ALTER TABLE `estudiantes_quintogrado`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `estudiantes_segundogrado`
--
ALTER TABLE `estudiantes_segundogrado`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `estudiantes_sextogrado`
--
ALTER TABLE `estudiantes_sextogrado`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `estudiantes_tercergrado`
--
ALTER TABLE `estudiantes_tercergrado`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios_administrador`
--
ALTER TABLE `usuarios_administrador`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios_profesor`
--
ALTER TABLE `usuarios_profesor`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes_cuartogrado`
--
ALTER TABLE `estudiantes_cuartogrado`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID del estuduante', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estudiantes_primergrado`
--
ALTER TABLE `estudiantes_primergrado`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID del estuduante', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estudiantes_quintogrado`
--
ALTER TABLE `estudiantes_quintogrado`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID del estuduante', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estudiantes_segundogrado`
--
ALTER TABLE `estudiantes_segundogrado`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID del estuduante', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estudiantes_sextogrado`
--
ALTER TABLE `estudiantes_sextogrado`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID del estuduante', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estudiantes_tercergrado`
--
ALTER TABLE `estudiantes_tercergrado`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID del estuduante', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios_administrador`
--
ALTER TABLE `usuarios_administrador`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID del usuario', AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `usuarios_profesor`
--
ALTER TABLE `usuarios_profesor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID del usuario', AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
