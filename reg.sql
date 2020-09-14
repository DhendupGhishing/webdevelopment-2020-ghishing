-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 01, 2020 at 01:42 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg_record`
--

CREATE TABLE `reg_record` (
  `std_num` varchar(250) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_record`
--

INSERT INTO `reg_record` (`std_num`, `name`, `password`) VALUES
('12190042', 'bik ram ', '1234'),
('1219004665', 'Dhendup Ghishing', 'gfhj'),
('12190048', 'Dhendup Ghishing', 'crepee@pop5'),
('1219004844', 'Dhendup Ghishing', 'dsfzdgfcgnm'),
('123', 'Nywang', '123'),
('2345456', 'Dhendup Ghishing', '2543546'),
('243', 'Dhendup Ghishing', '3124533'),
('3456789', 'Dhendup Ghishing', '34567890'),
('afsd', 'eqrwgrdhgnf', 'afbgdhgf'),
('asdnj', 'Dhendup Ghishing', 'sdcfvgbhnj'),
('AXCzvx', 'sasdvfcv', 'Czvxfbcng'),
('efqr', 'qewr', 'qwfg'),
('fwagesgrdhtyu', 'qewr', 'AVSFdsfdgf'),
('zxdcfvgh', '34567890-', 'sxdcfvghbjnkm,');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg_record`
--
ALTER TABLE `reg_record`
  ADD PRIMARY KEY (`std_num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
