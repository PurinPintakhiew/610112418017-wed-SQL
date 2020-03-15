-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2020 at 04:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `motorcycle`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `Mo_Id` char(10) NOT NULL COMMENT 'รหัสรถมอเตอร์ไซต์',
  `Mo_Name` varchar(20) NOT NULL COMMENT 'ชื่อรถมอเตอร์ไซต์',
  `Mo_Type` varchar(15) NOT NULL COMMENT 'ประเภทรถมอเตอร์ไซต์',
  `Mo_Brand` varchar(10) DEFAULT NULL COMMENT 'ยี่ห้อรถมอเตอร์ไซต์',
  `Mo_Price` int(5) NOT NULL COMMENT 'ราคารถมอเตอร์ไซต์'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`Mo_Id`, `Mo_Name`, `Mo_Type`, `Mo_Brand`, `Mo_Price`) VALUES
('mo001', 'Yamaha FINN', '114 cc', 'Yamaha', 40200),
('mo002', 'Zoomer-X', '125 cc', 'Honda', 41500),
('mo003', 'Honda Wave', '110cc', 'Honda', 43200),
('mo004', 'Yamaha Fino', '125 cc', 'Yamaha', 46400),
('mo005', 'Honda ADV', '150 cc', 'Honda', 87000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`Mo_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
