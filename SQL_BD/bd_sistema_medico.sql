-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-08-2019 a las 08:17:31
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_sistema_medico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `ID_DEPARTAMENTO` int(11) NOT NULL,
  `DESCRI_:DEPARTAMENTO` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento_medico`
--

CREATE TABLE `departamento_medico` (
  `ID_DEPARTAMENTO_MEDICO` int(11) NOT NULL,
  `DESCRI_DEPARTAMENTO_MEDICO` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `ID_DIRECCION` int(11) NOT NULL,
  `DESCRI_DIRECCION` varchar(45) NOT NULL,
  `RELA_LOCALIDAD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_sanguinio`
--

CREATE TABLE `grupo_sanguinio` (
  `ID_GRUPO_SANGUINEO` int(11) NOT NULL,
  `DESCRI_GRUPO_SANGUINEO` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_medico`
--

CREATE TABLE `historial_medico` (
  `ID_HISTORIAL_MEDICO` int(11) NOT NULL,
  `RELA_DEPARTAMENTO_MEDICO` int(11) NOT NULL,
  `DESCRI_TIPO_ESTUDIO` varchar(45) NOT NULL,
  `FECHA_HISTORIAL_MEDICO` date NOT NULL,
  `ARCHIVO_ADJ_HISTORIAL_MEDICO` blob,
  `RELA_INSTITUCION_MEDICA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion_medica`
--

CREATE TABLE `institucion_medica` (
  `ID_INSTITUCION_MEDICA` int(11) NOT NULL,
  `DESCRI_INTITUCION_MEDICA` varchar(45) NOT NULL,
  `RELA_DIRECCION` int(11) NOT NULL,
  `RELA_TELEFONO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `ID_LOCALIDAD` int(11) NOT NULL,
  `DESCRI_LOCALIDAD` varchar(45) NOT NULL,
  `RELA_DEPARTAMENTO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico_asociado`
--

CREATE TABLE `medico_asociado` (
  `ID_MEDICO_ASOCIADO` int(11) NOT NULL,
  `NOMBRE_MEDICO` varchar(45) NOT NULL,
  `APELLIDO_MEDICO` varchar(45) NOT NULL,
  `MATRICULA_MEDICO` int(10) NOT NULL,
  `ESPECIALIDAD_MEDICO` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medico_asociado`
--

INSERT INTO `medico_asociado` (`ID_MEDICO_ASOCIADO`, `NOMBRE_MEDICO`, `APELLIDO_MEDICO`, `MATRICULA_MEDICO`, `ESPECIALIDAD_MEDICO`) VALUES
(1, 'Juan ', 'Perez', 48596, 'Medico Cirujano'),
(2, 'Josefina', 'Ramirez', 98324, 'Radiología '),
(3, 'Tomas ', 'Caporal', 78165, 'Kinesiología '),
(4, 'Agustina ', 'Delgado', 58469, 'Ginecología '),
(5, 'Gastón Francisco', 'Lovera ', 84695, 'Cardiología '),
(6, 'René', 'Favaloro', 65987, 'Medico Cirujano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `ID_PERSONA` int(11) NOT NULL,
  `NOMBRE_PERSONA` varchar(45) NOT NULL,
  `APELLIDO_PERSONA` varchar(45) NOT NULL,
  `FECHA_NAC_PERSONA` date NOT NULL,
  `RELA_DIRECCION` int(11) NOT NULL,
  `RELA_GRUPO_SANGUINEO` int(11) NOT NULL,
  `DESCRI_ALERGIAS` varchar(45) NOT NULL,
  `DONANTE_PERSONA` varchar(1) NOT NULL,
  `RELA_HISTORIAL_MEDICO` int(11) NOT NULL,
  `RELA_TELEFONO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

CREATE TABLE `telefono` (
  `ID_TELEFONO` int(11) NOT NULL,
  `NRO_TELEFONO` int(11) NOT NULL,
  `RELA_TIPO_TELEFONO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_telefono`
--

CREATE TABLE `tipo_telefono` (
  `ID_TIPO_TELEFONO` int(11) NOT NULL,
  `DESCRI_TIPO_TELEFONO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_USUARIO` int(10) NOT NULL,
  `NOMBRE_USUARIO` varchar(10) NOT NULL,
  `APELLIDO_USUARIO` varchar(20) NOT NULL,
  `CORREO_USUARIO` varchar(30) NOT NULL,
  `PASSWORD_USUARIO` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_USUARIO`, `NOMBRE_USUARIO`, `APELLIDO_USUARIO`, `CORREO_USUARIO`, `PASSWORD_USUARIO`) VALUES
(1, 'Alejandro', 'Bernal', 'alebernalmatias@gmail.com', '1234'),
(2, 'Anabel', 'Arguello', 'anabel@gmail.com', '1234'),
(3, 'Alejandro', 'Sanabria', 'aalesann@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_USUARIOS` int(11) NOT NULL,
  `NOMBRE_USUARIOS` varchar(45) NOT NULL,
  `PASSWORD_USUARIOS` varchar(45) NOT NULL,
  `RELA_TIPO_USUARIO` int(11) NOT NULL,
  `CORREO_USUARIO` varchar(45) NOT NULL,
  `RELA_PERSONA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`ID_DEPARTAMENTO`);

--
-- Indices de la tabla `departamento_medico`
--
ALTER TABLE `departamento_medico`
  ADD PRIMARY KEY (`ID_DEPARTAMENTO_MEDICO`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`ID_DIRECCION`);

--
-- Indices de la tabla `grupo_sanguinio`
--
ALTER TABLE `grupo_sanguinio`
  ADD PRIMARY KEY (`ID_GRUPO_SANGUINEO`);

--
-- Indices de la tabla `historial_medico`
--
ALTER TABLE `historial_medico`
  ADD PRIMARY KEY (`ID_HISTORIAL_MEDICO`);

--
-- Indices de la tabla `institucion_medica`
--
ALTER TABLE `institucion_medica`
  ADD PRIMARY KEY (`ID_INSTITUCION_MEDICA`);

--
-- Indices de la tabla `medico_asociado`
--
ALTER TABLE `medico_asociado`
  ADD PRIMARY KEY (`ID_MEDICO_ASOCIADO`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`ID_PERSONA`);

--
-- Indices de la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD PRIMARY KEY (`ID_TELEFONO`);

--
-- Indices de la tabla `tipo_telefono`
--
ALTER TABLE `tipo_telefono`
  ADD PRIMARY KEY (`ID_TIPO_TELEFONO`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_USUARIO`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_USUARIOS`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `medico_asociado`
--
ALTER TABLE `medico_asociado`
  MODIFY `ID_MEDICO_ASOCIADO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_USUARIO` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
