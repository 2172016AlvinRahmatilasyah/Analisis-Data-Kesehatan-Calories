-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2024 at 11:22 AM
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
-- Database: `calories`
--

-- --------------------------------------------------------

--
-- Table structure for table `catatanmakanan`
--

CREATE TABLE `catatanmakanan` (
  `nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `namaMakanan` varchar(1000) NOT NULL,
  `kalori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catatanmakanan`
--

INSERT INTO `catatanmakanan` (`nama`, `tanggal`, `namaMakanan`, `kalori`) VALUES
('2172016', '2024-01-25', 'Sushi', 250),
('2172016', '2024-01-24', 'Jagung Rebus', 91),
('2172016', '2024-01-24', 'Kentang Rebus', 166),
('2172016', '2023-12-14', 'Salmon Panggang', 180),
('2172016', '2023-12-09', 'Salmon Panggang', 180),
('2172016', '2023-12-08', 'Bakso', 200),
('2172016', '2023-11-03', 'Sate Ayam', 150),
('2172016', '2023-11-09', 'Es Krim Vanilla', 250),
('2172016', '2023-11-03', 'Salmon Panggang', 180),
('2172016', '2024-01-17', 'Salmon Panggang', 180),
('2172016', '2024-01-13', 'Bakso', 200),
('2172016', '2024-01-18', 'Sayur Lodeh', 120),
('2172016', '2024-01-25', 'Sushi', 250),
('2172016', '2024-01-27', 'Bakso', 200),
('2172016', '2024-01-27', 'Salmon Panggang', 180),
('2172016', '2024-01-27', 'Sate Ayam', 150),
('2172016', '2024-01-27', 'Sate Ayam', 150),
('2172016', '2024-01-27', 'Spaghetti Bolognese', 300),
('', '0000-00-00', 'Spaghetti Bolognese', 300),
('', '2024-01-27', 'Spaghetti Bolognese', 300),
('', '2024-01-27', 'Ayam Panggang', 250),
('2172016', '2023-10-26', 'Sate Ayam', 150),
('2172016', '2023-10-13', 'Capcay', 180),
('2172016', '2023-10-27', 'Sushi', 250),
('2172016', '2024-01-28', 'Jagung Rebus', 91);

-- --------------------------------------------------------

--
-- Table structure for table `daftarkalori`
--

CREATE TABLE `daftarkalori` (
  `NamaMakanan` varchar(1000) NOT NULL,
  `Kalori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftarkalori`
--

INSERT INTO `daftarkalori` (`NamaMakanan`, `Kalori`) VALUES
('Jagung Rebus', 91),
('Kentang Rebus', 166),
('Caesar Salad', 150),
('Ayam Panggang', 250),
('Spaghetti Bolognese', 300),
('Ikan Bakar', 200),
('Sayur Lodeh', 120),
('Nasi Goreng', 400),
('Tahu Goreng', 80),
('Bebek Goreng', 350),
('Mie Goreng', 300),
('Salmon Panggang', 180),
('Bubur Ayam', 250),
('Sate Ayam', 150),
('Bakso', 200),
('Sushi', 250),
('Capcay', 180),
('Tom Yum', 120),
('Es Krim Vanilla', 250),
('Pisang Goreng', 120),
('Sambal Goreng Kentang', 180),
('Steak', 450);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`) VALUES
('2172016', '12345'),
('2172001', '12345678'),
('1212', '123'),
('123', '123'),
('', ''),
('', ''),
('alvinlasyah', '123'),
('alvinlasyah', '123'),
('alvinlasyah', '1234'),
('easymoneycode', '12345'),
('', ''),
('alvinlasyah', '12345'),
('alvin', ''),
('alvinakun', '12345'),
('2172016', '12345'),
('2172016', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
