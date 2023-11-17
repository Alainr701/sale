-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2023 at 02:40 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema_prestamos`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambiente`
--

CREATE TABLE `ambiente` (
  `id_ambiente` int(11) NOT NULL,
  `nombre_ambiente` varchar(255) DEFAULT NULL,
  `aula` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ambiente`
--

INSERT INTO `ambiente` (`id_ambiente`, `nombre_ambiente`, `aula`, `estado`) VALUES
(1, 'Aula 101', '101', 'Disponible'),
(2, 'Laboratorio 1', 'Lab1', 'En uso'),
(3, 'Aula 102', '102', 'Disponible');

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `IdCliente` int(11) NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Apellidos` varchar(255) DEFAULT NULL,
  `Direccion` varchar(255) DEFAULT NULL,
  `NumeroCelular` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `equipo`
--

CREATE TABLE `equipo` (
  `id_equipo` int(11) NOT NULL,
  `nombre_equipo` varchar(255) DEFAULT NULL,
  `marca` varchar(255) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `equipo`
--

INSERT INTO `equipo` (`id_equipo`, `nombre_equipo`, `marca`, `estado`) VALUES
(1, 'Datashow 1', 'MarcaA', 'Disponible'),
(2, 'Datashow 2', 'MarcaB', 'En uso'),
(3, 'PC 1', 'MarcaX', 'Disponible'),
(4, 'PC 2', 'MarcaY', 'En reparación');

-- --------------------------------------------------------

--
-- Table structure for table `formulario`
--

CREATE TABLE `formulario` (
  `id_formulario` int(11) NOT NULL,
  `dato_docente` varchar(255) DEFAULT NULL,
  `asignatura` varchar(255) DEFAULT NULL,
  `entregado_por` varchar(255) DEFAULT NULL,
  `fecha_hora` datetime DEFAULT NULL,
  `equipo` int(11) DEFAULT NULL,
  `ambiente` int(11) DEFAULT NULL,
  `carrera` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `formulario`
--

INSERT INTO `formulario` (`id_formulario`, `dato_docente`, `asignatura`, `entregado_por`, `fecha_hora`, `equipo`, `ambiente`, `carrera`) VALUES
(3, 'Profesor C', 'Ciencias', 'Secretaria 3', '2023-11-15 09:45:00', 4, 2, 'Biología'),
(4, 'Rocha', 'Progra', 'Alain', '2022-12-01 00:22:00', 1, 1, 'Ingeniería de Sistemas'),
(8, 'Rocha', 'Programacikon', 'Docente', '2023-11-16 18:59:00', 2, 3, 'Derecho'),
(9, 'Rocha', 'ANALISI', 'Giovanna', '2023-11-16 20:14:00', 2, 3, 'Ingeniería de Sistemas');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `ci` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `telefono`, `password`, `usuario`, `ci`) VALUES
(1, 'Giovanna', 'De Los Rios', 'giovanna@example.com', '63253127', '1234567', 'giovanna', 13343690);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ambiente`
--
ALTER TABLE `ambiente`
  ADD PRIMARY KEY (`id_ambiente`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`IdCliente`);

--
-- Indexes for table `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indexes for table `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`id_formulario`),
  ADD KEY `equipo` (`equipo`),
  ADD KEY `ambiente` (`ambiente`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ambiente`
--
ALTER TABLE `ambiente`
  MODIFY `id_ambiente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `IdCliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `formulario`
--
ALTER TABLE `formulario`
  MODIFY `id_formulario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `formulario`
--
ALTER TABLE `formulario`
  ADD CONSTRAINT `formulario_ibfk_1` FOREIGN KEY (`equipo`) REFERENCES `equipo` (`id_equipo`),
  ADD CONSTRAINT `formulario_ibfk_2` FOREIGN KEY (`ambiente`) REFERENCES `ambiente` (`id_ambiente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
