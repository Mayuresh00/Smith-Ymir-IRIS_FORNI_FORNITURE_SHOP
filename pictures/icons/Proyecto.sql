-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2022 a las 20:29:14
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprobante`
--

CREATE TABLE `comprobante` (
  `cod_comprobante` int(10) NOT NULL,
  `fecha` datetime(6) NOT NULL,
  `valor_total` int(10) NOT NULL,
  `id_cliente` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_comprobante`
--

CREATE TABLE `detalle_comprobante` (
  `id_detalle` int(10) NOT NULL,
  `cod_producto` int(10) NOT NULL,
  `valor_uni` int(10) NOT NULL,
  `cod_comprobante` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura`
--

CREATE TABLE `detalle_factura` (
  `id_detalle` int(10) NOT NULL,
  `cod_producto` int(10) NOT NULL,
  `cod_factura` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `valor_uni` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_temporal`
--

CREATE TABLE `detalle_temporal` (
  `id_detalle` int(10) NOT NULL,
  `cod_producto` int(10) NOT NULL,
  `valor_uni` int(10) NOT NULL,
  `cod_comprobante` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `cod_factura` int(10) NOT NULL,
  `id_admin` int(10) NOT NULL,
  `id_cliente` int(10) NOT NULL,
  `fecha` datetime(6) NOT NULL,
  `valor_total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `cod_producto` int(10) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `materiales` varchar(150) NOT NULL,
  `precio` int(10) NOT NULL,
  `garantia` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `cod_rol` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`cod_rol`, `nombre`) VALUES
(1, 'administrador'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre_usuario` varchar(40) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `telefono` int(10) NOT NULL,
  `cod_rol` int(10) NOT NULL,
  `ciudad` varchar(40) NOT NULL,
  `contrasena` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usuario`, `direccion`, `telefono`, `cod_rol`, `ciudad`, `contrasena`) VALUES
(1001, 'Smith', 'calle 1', 31429022, 1, 'Ibagué', '1234'),
(1002, 'Lina', 'calle 2', 315623, 2, 'Ibagué', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comprobante`
--
ALTER TABLE `comprobante`
  ADD PRIMARY KEY (`cod_comprobante`);

--
-- Indices de la tabla `detalle_comprobante`
--
ALTER TABLE `detalle_comprobante`
  ADD PRIMARY KEY (`id_detalle`);

--
-- Indices de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD PRIMARY KEY (`id_detalle`);

--
-- Indices de la tabla `detalle_temporal`
--
ALTER TABLE `detalle_temporal`
  ADD PRIMARY KEY (`id_detalle`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`cod_factura`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`cod_producto`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`cod_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
