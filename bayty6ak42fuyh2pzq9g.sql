-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: bayty6ak42fuyh2pzq9g-mysql.services.clever-cloud.com:3306
-- Generation Time: Nov 16, 2022 at 02:16 PM
-- Server version: 8.0.15-5
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bayty6ak42fuyh2pzq9g`
--

-- --------------------------------------------------------

--
-- Table structure for table `makeup`
--

CREATE TABLE `makeup` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `valor` int(11) NOT NULL,
  `costo` int(11) NOT NULL,
  `stok-min` int(11) NOT NULL,
  `stok-max` int(11) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `cantidad` int(11) NOT NULL DEFAULT '0',
  `tipo` varchar(15) NOT NULL,
  `descuento` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `makeup`
--

INSERT INTO `makeup` (`codigo`, `nombre`, `marca`, `valor`, `costo`, `stok-min`, `stok-max`, `estado`, `cantidad`, `tipo`, `descuento`) VALUES
(1, 'mascarillas', 'nivea', 4000, 2500, 30, 50, 'activo', 20, 'piel', 0.05);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `makeup`
--
ALTER TABLE `makeup`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `makeup`
--
ALTER TABLE `makeup`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
