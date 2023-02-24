-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2023 at 03:32 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_status`
--

-- --------------------------------------------------------

--
-- Table structure for table `comen`
--

CREATE TABLE `comen` (
  `id_comen` int(11) NOT NULL,
  `id_status` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `comen` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comen`
--

INSERT INTO `comen` (`id_comen`, `id_status`, `nama`, `comen`) VALUES
(4, 2, 'kelvin', 'apa'),
(5, 1, 'asd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `update_status`
--

CREATE TABLE `update_status` (
  `id_status` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `update_status`
--

INSERT INTO `update_status` (`id_status`, `nama`, `status`) VALUES
(1, 'andre', 'apa kabar'),
(2, 'mando', 'saya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comen`
--
ALTER TABLE `comen`
  ADD PRIMARY KEY (`id_comen`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `update_status`
--
ALTER TABLE `update_status`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comen`
--
ALTER TABLE `comen`
  MODIFY `id_comen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `update_status`
--
ALTER TABLE `update_status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comen`
--
ALTER TABLE `comen`
  ADD CONSTRAINT `comen_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `update_status` (`id_status`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
