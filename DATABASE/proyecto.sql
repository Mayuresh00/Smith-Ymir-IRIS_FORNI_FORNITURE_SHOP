-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2022 a las 07:13:43
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

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
  `cod_producto` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `telefono` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `ciudad` varchar(40) NOT NULL,
  `codigo_postal` int(10) NOT NULL,
  `info_adicional` text NOT NULL,
  `nombre_producto` varchar(40) NOT NULL,
  `cantidad_compra` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `estado` int(10) NOT NULL,
  `fecha` varchar(200) NOT NULL,
  `img_producto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comprobante`
--

INSERT INTO `comprobante` (`cod_comprobante`, `cod_producto`, `id_user`, `nombre`, `apellido`, `telefono`, `email`, `direccion`, `departamento`, `ciudad`, `codigo_postal`, `info_adicional`, `nombre_producto`, `cantidad_compra`, `total`, `estado`, `fecha`, `img_producto`) VALUES
(118, 10, 1004, 'Smith', 'Rodríguez', 31429022, 'smith@gmail.com', 'Calle 12', 'Tolima', 'Ibagué', 0, '', 'Cama Queen', 2, 890000, 1, '0000-00-00 00:00:00.000000', '../pictures/section/camas/cama9_1.jpg'),
(119, 1, 1004, 'Smith', 'Rodríguez', 31429022, 'smith@gmail.com', 'Calle 12', 'Tolima', 'Ibagué', 0, '', 'Cama gris', 2, 4000000, 1, '0000-00-00 00:00:00.000000', '../pictures/section/camas/foto1.jpg'),
(120, 1, 1004, 'Smith', 'Rodríguez', 31429022, 'smith@gmail.com', 'Calle 12', 'Tolima', 'Ibagué', 0, '', 'Cama gris', 2, 4000000, 1, '0000-00-00 00:00:00.000000', '../pictures/section/camas/foto1.jpg'),
(121, 1, 1004, 'Smith', 'Rodríguez', 31429022, 'smith@gmail.com', 'Calle 12', 'Tolima', 'Ibagué', 0, '', 'Cama gris', 2, 4000000, 1, '0000-00-00 00:00:00.000000', '../pictures/section/camas/foto1.jpg'),
(122, 1, 1004, 'Smith', 'Rodríguez', 31429022, 'smith@gmail.com', 'Calle 12', 'Tolima', 'Ibagué', 0, '', 'Cama gris', 2, 4000000, 1, '0000-00-00 00:00:00.000000', '../pictures/section/camas/foto1.jpg'),
(123, 1, 1004, 'Smith', 'Rodríguez', 31429022, 'smith@gmail.com', 'Calle 12', 'Tolima', 'Ibagué', 0, '', 'Cama gris', 2, 4000000, 1, '0000-00-00 00:00:00.000000', '../pictures/section/camas/foto1.jpg'),
(124, 1, 1004, 'Smith', 'Rodríguez', 31429022, 'smith@gmail.com', 'Calle 12', 'Tolima', 'Ibagué', 0, '', 'Cama gris', 2, 4000000, 3, '0000-00-00 00:00:00.000000', '../pictures/section/camas/foto1.jpg'),
(125, 1, 1004, 'Smith', 'Rodríguez', 31429022, 'smith@gmail.com', 'Calle 12', 'Tolima', 'Ibagué', 0, '', 'Cama gris', 3, 6000000, 2, '0000-00-00 00:00:00.000000', '../pictures/section/camas/foto1.jpg'),
(126, 32, 1003, 'Pabla', 'Mendes', 555, 'pabla@gmail.com', 'Calle 3', 'Tolima', 'Ibagué', 0, 'Cerca a la iglesia.', 'Silla gris reclinada', 2, 860000, 3, '0000-00-00 00:00:00.000000', '../pictures/section/sillas/11.jpeg'),
(127, 30, 98, 'Lina', 'Rivera', 31429024, 'Lina1@gmail.com', 'Mza A C8', 'Tolima', 'Ibagué', 0, 'Cerca a la iglesia.', 'Silla Gris', 3, 1020000, 3, '0000-00-00 00:00:00.000000', '../pictures/section/sillas/5.jpeg'),
(128, 40, 98, 'Lina', 'Rivera', 31429024, 'Lina1@gmail.com', 'Mza A C8', 'Tolima', 'Ibagué', 0, 'Cerca a la iglesia.', 'Silla azul celeste', 3, 2100000, 1, '0000-00-00 00:00:00.000000', '../pictures/section/sillas/36.jpeg'),
(129, 35, 98, 'Lina', 'Rivera', 31429024, 'Lina1@gmail.com', 'Mza A C8', 'Tolima', 'Ibagué', 0, 'Cerca a la iglesia.', 'Silla tradicional', 1, 600000, 3, '13 de Diciembre de 2022', '../pictures/section/sillas/20.jpeg'),
(130, 7, 98, 'Lina', 'Rivera', 31429024, 'Lina1@gmail.com', 'Mza A C8', 'Tolima', 'Ibagué', 0, 'Cerca a la iglesia.', 'Cama king gris', 1, 3560000, 1, '13 de Diciembre de 2022', '../pictures/section/camas/cama7_1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `cod_estado` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`cod_estado`, `nombre`) VALUES
(1, 'Bodega'),
(2, 'Despachado'),
(3, 'Cancelado');

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
  `garantia` varchar(20) NOT NULL,
  `categoria` varchar(40) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `dimensiones` varchar(40) NOT NULL,
  `tapizado` varchar(40) NOT NULL,
  `relleno` varchar(40) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`cod_producto`, `nombre`, `materiales`, `precio`, `garantia`, `categoria`, `cantidad`, `dimensiones`, `tapizado`, `relleno`, `descripcion`) VALUES
(1, 'Cama gris', 'Madera', 2000000, '3 años', 'camas', 15, '200cm x 200cm', 'terciopelo', 'espuma', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'),
(2, 'Cama beige tablero redondo', 'Roble', 3500000, '5 años', 'camas', 21, '200cm x 200cm', 'Cuero sintético', 'Espuma', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(3, 'cama King', 'Roble', 4500000, '10 años', 'camas', 21, '200cm x 200cm', 'Cuero sintético', 'Espuma', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(4, 'Cama Rosa', 'Pino', 5000000, '5 años', 'camas', 21, '140cm x 190cm', 'Terciopelo', 'Espuma', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(5, 'Cama King azúl', 'Roble', 5400000, '6 años', 'camas', 21, '200cm x 200cm', 'Terciopelo azul', 'Espuma', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi'),
(6, 'Cama King beige', 'Madera', 3560000, '8 años', 'camas', 21, '200cm x 200cm', 'Cuero sintético', 'Espuma', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi'),
(7, 'Cama king gris', 'Madera', 3560000, '8 años', 'camas', 20, '200cm x 200cm', 'Terciopelo Gris', 'Espuma', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi'),
(8, 'Cama King', 'Roble', 5332198, '8 años', 'camas', 21, '	200cm x 200cm', 'Terciopelo Negro', 'Espuma', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi'),
(9, 'Cama Queen', 'Madera', 4000000, '8 años', 'camas', 21, '160cm x 190cm', 'Algodón Gris', 'Espuma', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation'),
(10, 'Cama Queen', 'Madera', 445000, '8 años', 'camas', 21, '160cm x 190cm', 'Cuero sintético', 'Goma', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation'),
(11, 'Cama Queen blanca', 'Pino', 7000000, '3 años', 'camas', 21, '	160cm x 190cm', 'Terciopelo blanco', 'Espuma', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation'),
(12, 'Cama King Gris', 'Roble', 4500000, '6 años', 'camas', 21, '200cm x 200cm', 'Terciopelo gris', 'Espuma', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation'),
(13, 'Cama King Negra', 'Pino', 5600000, '7 años', 'camas', 21, '200cm x 200cm', 'Algodón', 'Espuma', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation'),
(14, 'Cama Queen gris', 'Roble', 3400000, '5 años', 'camas', 21, '160cm x 190cm', 'Cuero, estilo francés', 'Espuma', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation'),
(15, 'Cama Queen Gris', 'Madera', 5000000, '5 años', 'camas', 21, '160cm x 190cm', 'Cuero sintético', 'Goma', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation'),
(16, 'Cama Kign Negra', 'Madera, cuero', 6799000, '10 años', 'camas', 21, '200cm x 200cm', 'Cuero negro', 'Espuma', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation'),
(17, 'Escritorio blanco', 'MDF', 600000, '2 años', 'escritorios', 21, '70 cm x 130 cm', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation'),
(18, 'Escritorio blanco, café', 'MDP', 670000, '3  años', 'escritorios', 21, '70 cm x 140 cm', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation'),
(19, 'Escritorio elevable', 'Hierro', 1500000, '6 años', 'escritorios	', 21, '70 - 141 cm x 140 cm', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation'),
(20, 'Escritorio café', 'MDF', 700000, '3 años', 'escritorios', 21, '150 cm x 140 cm', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation'),
(21, 'Escritorio blanco pequeño', 'Madera', 670000, '5 años', 'escritorios', 21, '70 cm x 100cm', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation'),
(22, 'Escritorio café, 1 cajón', 'MDF', 670000, '5 años', 'escritorios', 21, '70 cm x 150cm', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation'),
(23, 'Escritorio de esquina', 'MDP', 760000, '3 años', 'escritorios', 21, '70 cm x 150cm', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation'),
(24, 'Escritorio negro, oficina', 'MDP', 760000, '3 años', 'escritorios', 21, '70 cm x 150cm', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation'),
(25, 'Escritorio femenino', 'Madera', 500000, '4 años', 'escritorios', 21, '	70 cm x 150cm', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation'),
(26, 'Escritorio plateado', 'Madera, vidrio', 345000, '3 años', 'escritorios', 21, '70 cm x 150cm', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation'),
(27, 'Escritorio café claro', 'MDF', 300000, '2 años', 'escritorios', 21, '70 cm x 150cm', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation'),
(28, 'Escritorio esquienro, femenino', 'Madera', 900000, '4 años', 'escritorios', 21, '	70 cm x 150cm', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation'),
(29, 'Silla verde oliva', 'Madera, algodón', 350000, '4 años', 'sillas', 21, '60cm x 50cm', 'Terciopelo verde', 'Espuma', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation'),
(30, 'Silla Gris', 'Madera, algodón', 340000, '3 años', 'sillas', 18, '60cm x 50cm', 'Algodón', 'Espuma', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation'),
(31, 'Silla verde, espiral', 'Madera, terciopelo', 500000, '3 años', 'sillas', 21, '60cm x 50cm', 'Terciopelo verde', 'Espuma', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation'),
(32, 'Silla gris reclinada', 'Madera, algodón', 430000, '3 años', 'sillas', 19, '60cm x 50cm', 'Algodón', 'Espuma', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'),
(33, 'Silla sencilla azul', 'Madera, políester', 200000, '3 años', 'sillas', 21, '60cm x 50cm', 'Políestrer', 'Espuma', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'),
(34, 'Silla amarilla moderna', 'Madera, políester', 500000, '3 años', 'sillas', 21, '70cm x 50cm', 'Algodón', 'Espuma', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'),
(35, 'Silla tradicional', 'Madera, algodón', 600000, '4 años', 'sillas', 20, '70cm x 50cm', 'Sin tapizar', 'Sin relleno', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'),
(36, 'Silla blanca moderna', 'Madera, algodón', 600000, '4 años', 'sillas', 21, '70cm x 50cm', 'Algodón', 'Espuma', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'),
(37, 'Silla verde esmeralda', 'Madera, terciopelo', 560000, '4 años', 'sillas', 21, '60 cm x 50 cm', 'Terciopelo verde', 'Espuma', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'),
(38, 'Silla negra elegante', 'Madera, algodón', 430000, '5 años', 'sillas', 21, '60 cm x 50 cm', 'Algodón', 'Espuma', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'),
(39, 'Sila roja clara, alta', 'Madera, metal', 650000, '3 años', 'sillas', 21, '60 cm x 50 cm', 'Terciopelo', 'Espuma', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'),
(40, 'Silla azul celeste', 'Madera, metal', 700000, '6 años', 'sillas', 18, '65 cm x 60 cm', 'Terciopelo celeste', 'Espuma', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco ');

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
  `id_user` int(10) NOT NULL,
  `nombre_usuario` varchar(40) NOT NULL,
  `apellido_usuario` varchar(40) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `telefono` int(10) NOT NULL,
  `cod_rol` int(10) NOT NULL,
  `departamento` varchar(40) NOT NULL,
  `ciudad` varchar(40) NOT NULL,
  `codigo_postal` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contrasena` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `nombre_usuario`, `apellido_usuario`, `direccion`, `telefono`, `cod_rol`, `departamento`, `ciudad`, `codigo_postal`, `email`, `contrasena`) VALUES
(39, 'Camila', 'Mendes', 'Cra 13', 31429022, 2, 'Tolima', 'Ibagué', 730002, 'cami@gmail.com', '$2y$12$pRrorbSbs4TYkuX35TLQaeWT6yzXyEF4on4up8stKDvarSxKsBBIu'),
(98, 'Lina', 'Rivera', 'Mza A C8', 31429024, 2, 'Tolima', 'Ibagué', 730001, 'Lina1@gmail.com', '$2y$12$RJwjOq6J.kPsPkRlOxM8deJQfx1XEsgI5/UneKP5Hq9mNVr6bjeqO'),
(1003, 'Pabla', 'Mendes', 'Calle 3', 8888, 2, 'Tolima', 'Ibagué', 730001, 'pabla@gmail.com', '$2y$12$gt8wH/q5aTD4jUtdzaCap.1vaBhT/GWeyCpEbP5V8m4OrXSo5V/OC'),
(1004, 'Smith', 'Rodríguez', 'Calle 12', 31429022, 1, 'Tolima', 'Ibagué', 0, 'smith@gmail.com', '$2y$12$R4ZSQi3PVlc8iNkzcdgrL.Qoa0kPi1FPY/zfPWUvO.TIETr7QsoZG');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comprobante`
--
ALTER TABLE `comprobante`
  ADD PRIMARY KEY (`cod_comprobante`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`cod_estado`);

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
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comprobante`
--
ALTER TABLE `comprobante`
  MODIFY `cod_comprobante` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
