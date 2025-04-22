-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 21, 2025 at 09:34 PM
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
-- Database: `Register`
--

-- --------------------------------------------------------

--
-- Table structure for table `SignUp`
--

CREATE TABLE `SignUp` (
  `fname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `usname` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `SignUp`
--

INSERT INTO `SignUp` (`fname`, `email`, `usname`, `pass`, `phone`) VALUES
('David Olapade', 'dolapade747@gmail.com', 'dolapade747@gmsil.com', '$2y$10$IYozpfdYu7AKpHo9MvYCCu0XzqY38MNghOiP1BOoWwxk65wEDFpm6', '07476321151'),
('David Olapade', 'dolapade77747@gmail.com', 'dolapade7496', '$2y$10$YUIyP/uxDsYXRKs./dwx4efZ9/Vl2Rygx3Bw0gVIdRJ0tPnBqMhPq', '07476321151'),
('David Olapade', 'michael7898@gmail.com', 'terribledaaysJ7899', '$2y$10$e52kAxwfyECbAbnE/xQM8e.D57LJQ7aolS8iJHktWRMuFOcBSDaGe', '07476321151'),
('David Olapade', 'michael@gmail.com', 'terribledaaysJ78', '$2y$10$6OAhgz.8l5umG4oWMufFJ.viZOmVvngpBdZfcHOihhl9kiVoqkv6y', '07476321151'),
('David Olapade', 'olapade747@outlook.com', 'dolapade7575', '$2y$10$tQU1/DMPN/IXbBdVp00PQ.9pIgkeCIqSWRYNZkCngY61zXalABC3K', '07476321151');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `SignUp`
--
ALTER TABLE `SignUp`
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `usname` (`usname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
