-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 03, 2022 at 02:45 PM
-- Server version: 10.3.23-MariaDB-cll-lve
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bordesco_scoppola`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'Id de la categoria',
  `nombre` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nombre de la categoria'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Tabla para las categorias de las obras';

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'prueba'),
(2, ''),
(3, 'prueba3');

-- --------------------------------------------------------

--
-- Table structure for table `cat_event`
--

CREATE TABLE `cat_event` (
  `categorias_id` int(10) UNSIGNED NOT NULL,
  `eventos_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `curadores`
--

CREATE TABLE `curadores` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'Identificador unido de curador',
  `nombre` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `curadores`
--

INSERT INTO `curadores` (`id`, `nombre`) VALUES
(1, 'Coco'),
(2, 'Kiwi'),
(3, 'Caparo'),
(4, 'Bunny'),
(5, 'Beto');

-- --------------------------------------------------------

--
-- Table structure for table `cura_event`
--

CREATE TABLE `cura_event` (
  `curadores_id` int(10) UNSIGNED NOT NULL,
  `eventos_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eventos`
--

CREATE TABLE `eventos` (
  `id` int(10) UNSIGNED NOT NULL,
  `ano` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inicio_convocatoria` date NOT NULL,
  `fin_convocatoria` date NOT NULL,
  `festivales_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `festivales`
--

CREATE TABLE `festivales` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'Identificador unico de festivales',
  `nombre` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_creacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `festivales`
--

INSERT INTO `festivales` (`id`, `nombre`, `fecha_creacion`) VALUES
(1, 'ojito', '2022-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `ganadores`
--

CREATE TABLE `ganadores` (
  `id` int(11) NOT NULL,
  `premios_id` int(10) UNSIGNED NOT NULL,
  `inscritos_cat` int(10) UNSIGNED NOT NULL,
  `inscritos_obr` int(10) UNSIGNED NOT NULL,
  `inscritos_eve` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inscritos`
--

CREATE TABLE `inscritos` (
  `id` int(11) NOT NULL COMMENT 'Identificador unico del inscrito',
  `seleccionado` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Valor 1 si fue seleccionado',
  `cat_obra_obr` int(10) UNSIGNED NOT NULL,
  `cat_obra_cat` int(10) UNSIGNED NOT NULL,
  `cat_obra_eve` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `obras`
--

CREATE TABLE `obras` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'Identificador unico para una obra',
  `titulo` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ano` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Año de realización de la obra',
  `duracion` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'hh:mm ó mm:ss',
  `genero` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinopsis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Pueden ser varios directores',
  `produccion` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guion` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fotografia` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sonido` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `elenco` varchar(900) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fotograma` varchar(900) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'URL o path del archivo',
  `afiche` varchar(900) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'url o path del archivo',
  `enlace de descarga` varchar(900) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'URL de descarga',
  `clave_acceso` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Clave de acceso para los enlaces que estan protegidos',
  `representantes_id` int(10) UNSIGNED NOT NULL,
  `observaciones` varchar(900) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Obervaciones de la obra',
  `idioma` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieneSubitulo` tinyint(1) NOT NULL,
  `arch_subtitulo` varchar(800) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `premios`
--

CREATE TABLE `premios` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'identificador unico de premios',
  `descripcion` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Descripcion del premio o mención especial'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `representantes`
--

CREATE TABLE `representantes` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'Identificador unico para representante',
  `nombre` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `procedencia` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'Identificador de usuarios',
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clave` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `votaciones`
--

CREATE TABLE `votaciones` (
  `voto` int(11) NOT NULL,
  `cura_event_curador` int(10) UNSIGNED NOT NULL,
  `inscritos_cat` int(10) UNSIGNED NOT NULL,
  `cura_event_eve` int(10) UNSIGNED NOT NULL,
  `inscritos_obr` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat_event`
--
ALTER TABLE `cat_event`
  ADD KEY `fk_categorias_id` (`categorias_id`),
  ADD KEY `fk_eventos_id` (`eventos_id`);

--
-- Indexes for table `curadores`
--
ALTER TABLE `curadores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cura_event`
--
ALTER TABLE `cura_event`
  ADD KEY `fk_curadores_id` (`curadores_id`),
  ADD KEY `fk_cura_eventos_id` (`eventos_id`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_festivales_id` (`festivales_id`);

--
-- Indexes for table `festivales`
--
ALTER TABLE `festivales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ganadores`
--
ALTER TABLE `ganadores`
  ADD KEY `fk_inscritos_cat` (`inscritos_cat`),
  ADD KEY `fk_inscritos_eve` (`inscritos_eve`),
  ADD KEY `fk_inscritos_obr` (`inscritos_obr`),
  ADD KEY `fk_premios_id` (`premios_id`);

--
-- Indexes for table `inscritos`
--
ALTER TABLE `inscritos`
  ADD KEY `fk_cat_even_cat` (`cat_obra_cat`),
  ADD KEY `fk_cat_even_eve` (`cat_obra_eve`),
  ADD KEY `fk_obra_id` (`cat_obra_obr`);

--
-- Indexes for table `obras`
--
ALTER TABLE `obras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_representantes_id` (`representantes_id`);

--
-- Indexes for table `premios`
--
ALTER TABLE `premios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `representantes`
--
ALTER TABLE `representantes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votaciones`
--
ALTER TABLE `votaciones`
  ADD KEY `fk_cura_event_even` (`cura_event_eve`),
  ADD KEY `fk_cura_event_cura` (`cura_event_curador`),
  ADD KEY `fk_inscrito_obr` (`inscritos_obr`),
  ADD KEY `fk_inscrito_cat` (`inscritos_cat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Id de la categoria', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `curadores`
--
ALTER TABLE `curadores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Identificador unido de curador', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `festivales`
--
ALTER TABLE `festivales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Identificador unico de festivales', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `obras`
--
ALTER TABLE `obras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Identificador unico para una obra';

--
-- AUTO_INCREMENT for table `premios`
--
ALTER TABLE `premios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'identificador unico de premios';

--
-- AUTO_INCREMENT for table `representantes`
--
ALTER TABLE `representantes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Identificador unico para representante';

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Identificador de usuarios';

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cat_event`
--
ALTER TABLE `cat_event`
  ADD CONSTRAINT `fk_categorias_id` FOREIGN KEY (`categorias_id`) REFERENCES `categorias` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_eventos_id` FOREIGN KEY (`eventos_id`) REFERENCES `eventos` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `cura_event`
--
ALTER TABLE `cura_event`
  ADD CONSTRAINT `fk_cura_eventos_id` FOREIGN KEY (`eventos_id`) REFERENCES `eventos` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_curadores_id` FOREIGN KEY (`curadores_id`) REFERENCES `curadores` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `fk_festivales_id` FOREIGN KEY (`festivales_id`) REFERENCES `festivales` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `ganadores`
--
ALTER TABLE `ganadores`
  ADD CONSTRAINT `fk_inscritos_cat` FOREIGN KEY (`inscritos_cat`) REFERENCES `inscritos` (`cat_obra_cat`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_inscritos_eve` FOREIGN KEY (`inscritos_eve`) REFERENCES `inscritos` (`cat_obra_eve`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_inscritos_obr` FOREIGN KEY (`inscritos_obr`) REFERENCES `inscritos` (`cat_obra_obr`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_premios_id` FOREIGN KEY (`premios_id`) REFERENCES `premios` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `inscritos`
--
ALTER TABLE `inscritos`
  ADD CONSTRAINT `fk_cat_even_cat` FOREIGN KEY (`cat_obra_cat`) REFERENCES `cat_event` (`categorias_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cat_even_eve` FOREIGN KEY (`cat_obra_eve`) REFERENCES `cat_event` (`eventos_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_obra_id` FOREIGN KEY (`cat_obra_obr`) REFERENCES `obras` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `obras`
--
ALTER TABLE `obras`
  ADD CONSTRAINT `fk_representantes_id` FOREIGN KEY (`representantes_id`) REFERENCES `representantes` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `votaciones`
--
ALTER TABLE `votaciones`
  ADD CONSTRAINT `fk_cura_event_cura` FOREIGN KEY (`cura_event_curador`) REFERENCES `cura_event` (`curadores_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cura_event_even` FOREIGN KEY (`cura_event_eve`) REFERENCES `cura_event` (`eventos_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_inscrito_cat` FOREIGN KEY (`inscritos_cat`) REFERENCES `inscritos` (`cat_obra_cat`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_inscrito_obr` FOREIGN KEY (`inscritos_obr`) REFERENCES `inscritos` (`cat_obra_obr`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
