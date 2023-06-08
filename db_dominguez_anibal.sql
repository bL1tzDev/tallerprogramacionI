-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2023 a las 04:55:59
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_dominguez_anibal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `descripcion`) VALUES
(1, 'Remeras'),
(2, 'Buzos'),
(3, 'Camperas'),
(4, 'Pantalones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE `mensaje` (
  `id_mesaje` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `asunto` varchar(50) NOT NULL,
  `consulta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mensaje`
--

INSERT INTO `mensaje` (`id_mesaje`, `nombre`, `mail`, `telefono`, `asunto`, `consulta`) VALUES
(1, 'Anibal Dominguez', 'benjad971.bd@gmail.com', 1424124, 'Prueba', 'Msj prueba'),
(2, 'Anibal Dominguez', 'benjad971.bd@gmail.com', 1424124, 'Prueba2 ', 'Msj prueba 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` int(11) NOT NULL,
  `descripcion_perfil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `descripcion_perfil`) VALUES
(1, 'usuario'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `titulo_producto` varchar(100) NOT NULL,
  `descripcion_producto` varchar(300) NOT NULL,
  `imagen_producto` varchar(300) NOT NULL,
  `precio_producto` float NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `estado_producto` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `apellido_usuario` varchar(50) NOT NULL,
  `email_usuario` varchar(50) NOT NULL,
  `contrasena_usuario` varchar(100) NOT NULL,
  `estado_usuario` tinyint(1) NOT NULL,
  `id_perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `apellido_usuario`, `email_usuario`, `contrasena_usuario`, `estado_usuario`, `id_perfil`) VALUES
(4, 'Anibal ', 'Dominguez', 'benjad971.bd@gmail.com', '$2y$10$SsAx6qQ/H9ZaiYkD74pa.eXRBo6bpgXo8jHJ8aZXiOvpAp/GMhE6y', 1, 1),
(5, 'Anibal ', 'Dominguez', 'dsad@ewqe.com', '$2y$10$CTCkvVW0PBYMZe0muK9hnewhL.l6s5S83uWWBXhBk5gDyFqLRN9xa', 1, 1),
(6, 'Anibal', 'Dominguez', 'admin@gmail.com', '$2y$10$A4K4I.vXalFvIhaj7dUZpu7RB2VgsNk//4c2mwY7BYSi5YjOeXNsy', 1, 2),
(7, 'Juan', 'Perez', 'user@gmail.com', '$2y$10$p6MkaSAH1QyhUddzwOIBzOH2iVhYURoqWMNcFJGE24mj.N83hKrVq', 1, 1),
(8, 'Pepito', 'Salas', 'pepe@gmail.com', '$2y$10$q2n0LSyYAqEYyc3hHmV6ROuubCI0H88dJQR8ZiA7BumMOYcpdwhU6', 1, 1),
(9, 'Pepito', 'Salas', 'pepe@hotmail.com', '$2y$10$PNKAj4hRF0WrBangNxXPsOUYev6Rjd3xA3skHRRV1VwgZEHHaYCue', 1, 1),
(10, 'Anibal', 'Dominguez', 'admin1@gmail.com', '$2y$10$mG08nYXeo/vpEUVUb8aURug7VsCfJOLSZnMDRXxNR6h/TiOM.TGA2', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`id_mesaje`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_perfil` (`id_perfil`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `id_mesaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_perfil`) REFERENCES `perfil` (`id_perfil`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
