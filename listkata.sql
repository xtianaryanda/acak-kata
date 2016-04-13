-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2016 at 11:10 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `listkata`
--

CREATE TABLE `listkata` (
  `word` varchar(20) NOT NULL,
  `difficulty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listkata`
--

INSERT INTO `listkata` (`word`, `difficulty`) VALUES
('buku', 1),
('roti', 1),
('paku', 1),
('duri', 1),
('mati', 1),
('saya', 1),
('muka', 1),
('tari', 1),
('mata', 1),
('alis', 1),
('rumah', 2),
('botol', 2),
('empal', 2),
('sayur', 2),
('pecah', 2),
('kolam', 2),
('kendi', 2),
('perak', 2),
('pensil', 3),
('laptop', 3),
('tombak', 3),
('kertas', 3),
('gedung', 3),
('terong', 3),
('gorden', 3),
('iphone', 3),
('kantor', 3),
('teater', 3),
('sampah', 3),
('kabel', 2),
('sisir', 2),
('putih', 2),
('biola', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
