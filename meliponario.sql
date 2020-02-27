-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-02-2020 a las 19:58:54
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `meliponario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `idBitacora` int(255) NOT NULL,
  `idColmena` int(255) NOT NULL,
  `idUsuario` varchar(255) NOT NULL,
  `cosecha` varchar(2500) NOT NULL,
  `revision` varchar(2500) NOT NULL,
  `lim_col` varchar(2500) NOT NULL,
  `lim_meli` varchar(2500) NOT NULL,
  `a_inicio` varchar(2500) NOT NULL,
  `a_termino` varchar(2500) NOT NULL,
  `a_cantidad` varchar(2500) NOT NULL,
  `a_numero` int(255) NOT NULL,
  `dosis` varchar(2500) NOT NULL,
  `inicio` varchar(2500) NOT NULL,
  `termino` varchar(2500) NOT NULL,
  `desarrollo` varchar(2500) NOT NULL,
  `miel` varchar(2500) NOT NULL,
  `cria` varchar(2500) NOT NULL,
  `abeja` varchar(2500) NOT NULL,
  `cera` varchar(2500) NOT NULL,
  `fecha` varchar(2500) NOT NULL,
  `ingredientes` varchar(2500) NOT NULL,
  `observacion` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`idBitacora`, `idColmena`, `idUsuario`, `cosecha`, `revision`, `lim_col`, `lim_meli`, `a_inicio`, `a_termino`, `a_cantidad`, `a_numero`, `dosis`, `inicio`, `termino`, `desarrollo`, `miel`, `cria`, `abeja`, `cera`, `fecha`, `ingredientes`, `observacion`) VALUES
(32, 160, 'admin', 'cambio4', 'df', 'df', 'df', 'wqer', 'df', 'no', 5, 'df', 'df', 'df', 'sdg', 'sdfg', 'gsdf', 'kjh', 'kjh', '2020-02-19', 'kjh', 'k'),
(35, 160, 'admin', 'sdf', 'ñlk', 'ñlk', 'ñlk', 'ñlk', 'ñlk', 'ñlkñl', 12, 'kñl', 'kñ', 'lkñl', 'k', 'ñlk', 'ñlk', 'ñlk', 'ñl', '2020-02-19', 'kñl', 'kñl'),
(36, 160, 'admin2', 'jkh', 'jkh', 'jkh', 'jk', 'hk', 'jh5', '45', 45, '45', '45', '45', '45', '4', '54', '54', '54', '2020-02-20', '54', '54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colmena`
--

CREATE TABLE `colmena` (
  `idColmena` int(255) NOT NULL,
  `procedencia` varchar(2500) NOT NULL,
  `fecha` varchar(2500) NOT NULL,
  `descripcion` varchar(2500) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `colmena`
--

INSERT INTO `colmena` (`idColmena`, `procedencia`, `fecha`, `descripcion`, `foto`) VALUES
(160, 'Mexico', '2020-02-14', 'se murio', 'C:UsersjohanPicturesProyectoMayaScreenshot_16.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(255) NOT NULL,
  `nombre` varchar(2500) NOT NULL,
  `apellidoP` varchar(2500) NOT NULL,
  `apellidoM` varchar(2500) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `apellidoP`, `apellidoM`, `tipo`, `user`, `pass`) VALUES
(2, 'david', 'moreno', 'cambranis', 'administrador', 'admin', 'admin'),
(3, 'usuario ', 'lkasjdlkj4', 'lksdjhfk4', 'editor', 'editor', 'editor'),
(5, 'safas', 'asdfasdf', 'asdfasdf', 'administrador', 'admin2', 'admin2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`idBitacora`),
  ADD KEY `idColmena` (`idColmena`) USING BTREE,
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `colmena`
--
ALTER TABLE `colmena`
  ADD PRIMARY KEY (`idColmena`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `user` (`user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `idBitacora` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD CONSTRAINT `bit-col` FOREIGN KEY (`idColmena`) REFERENCES `colmena` (`idColmena`),
  ADD CONSTRAINT `bitacora_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
