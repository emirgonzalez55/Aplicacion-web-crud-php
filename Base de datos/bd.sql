-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2021 a las 02:41:58
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
-- Base de datos: `bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chipsets`
--

CREATE TABLE `chipsets` (
  `id` int(11) NOT NULL,
  `marca` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modelo` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rendimiento` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `chipsets`
--

INSERT INTO `chipsets` (`id`, `marca`, `modelo`, `rendimiento`) VALUES
(1, 'Qualcomm', 'snapdragon 450', '90'),
(2, 'Qualcomm', 'snapdragon 650', '90'),
(3, 'Qualcomm', 'snapdragon 636', '90'),
(4, 'Qualcomm', 'snapdragon 888', '90'),
(5, 'Qualcomm', 'snapdragon 650', '90'),
(6, 'Qualcomm', 'snapdragon 425', '90'),
(8, 'MediaTek', 'MediaTek', '90'),
(9, 'MediaTek', 'MediaTek', '90'),
(10, 'MediaTek', 'MediaTek', '90'),
(11, 'MediaTek', 'MediaTek', '90'),
(12, 'Exynos', 'Exynos', '90'),
(13, 'Exynos', 'Exynos', '90'),
(14, 'Exynos', 'Exynos', '90'),
(15, 'Exynos', 'Exynos', '90'),
(16, 'Exynos', 'Exynos', '90');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `graficas`
--

CREATE TABLE `graficas` (
  `id` int(11) NOT NULL,
  `marca` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modelo` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rendimiento` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `graficas`
--

INSERT INTO `graficas` (`id`, `marca`, `modelo`, `rendimiento`) VALUES
(1, 'AMD', 'Radeon RX 6900 XT', '90'),
(2, 'AMD', 'Radeon RX 6800 XT', '90'),
(3, 'AMD', 'Radeon RX 6800', '90'),
(4, 'AMD', 'Radeon RX 6700 XT', '90'),
(5, 'AMD', 'Radeon RX 6600 XT', '90'),
(6, 'NVIDIA', 'RTX 3050', '90'),
(7, 'NVIDIA', 'RTX 3060', '90'),
(8, 'NVIDIA', 'RTX 3070', '90'),
(9, 'NVIDIA', 'RTX 3080', '90'),
(10, 'NVIDIA', 'RTX 3090', '90');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesadores`
--

CREATE TABLE `procesadores` (
  `id` int(11) NOT NULL,
  `marca` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modelo` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rendimiento` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `procesadores`
--

INSERT INTO `procesadores` (`id`, `marca`, `modelo`, `rendimiento`) VALUES
(2, 'AMD', 'Ryzen 5 3600', '90'),
(3, 'AMD', 'Ryzen 5 3600X', '90'),
(4, 'AMD', 'Ryzen 7 3700', '90'),
(5, 'AMD', 'Ryzen 5 1600', '70'),
(6, 'AMD', 'Ryzen 5 3900x', '90'),
(7, 'AMD', 'Ryzen 5 3950x', '90'),
(14, 'INTEL', 'i5 7400', '60'),
(15, 'INTEL', 'I7 7700K', '80'),
(119, 'INTEL', 'I7 8700K', '80'),
(120, 'INTEL', 'I5 6600', '80');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `password`) VALUES
(28, 'emir', '$2y$10$6UZQxvFBHKB9miwoRr8bceYg4rBcMt6R3y0x0d8lmC0yg6YBLV.ky'),
(29, 'admin', '$2y$10$Aq3Km/zNLiJ0nPsrKhnUhuNwNIt9V0te8.xCmNc8nLyef1KzcoxNu');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chipsets`
--
ALTER TABLE `chipsets`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `graficas`
--
ALTER TABLE `graficas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `procesadores`
--
ALTER TABLE `procesadores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chipsets`
--
ALTER TABLE `chipsets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT de la tabla `graficas`
--
ALTER TABLE `graficas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `procesadores`
--
ALTER TABLE `procesadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=623;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
