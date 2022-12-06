-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2022 at 06:18 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `racedata`
--

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` int(11) NOT NULL,
  `winner` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `winner`, `date`) VALUES
(1, 'reddd', '2022-12-09 00:00:00'),
(2, 'bluee', '2022-12-30 00:00:00'),
(3, 's', '2022-12-09 00:00:00'),
(4, 'sddsd', '0000-00-00 00:00:00'),
(5, 'qqq', '2022-12-30 00:00:00'),
(6, 'qwqw', '2022-12-15 00:00:00'),
(7, 'sasasas', '2022-12-17 00:00:00'),
(8, 'sasasasasas', '2022-12-23 00:00:00'),
(9, '', '2022-12-05 00:00:00'),
(10, '', '2022-12-05 00:00:00'),
(11, '', '2022-12-05 00:00:00'),
(12, '', '2022-12-05 00:00:00'),
(13, 'player2', '2022-12-05 00:00:00'),
(14, 'player4', '2022-12-05 00:00:00'),
(15, 'player1', '2022-12-05 00:00:00'),
(16, 'player2', '2022-12-05 22:58:00'),
(17, 'player4', '2022-12-05 22:58:12'),
(18, 'player2', '2022-12-05 23:17:05'),
(19, 'player4', '2022-12-05 23:17:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
