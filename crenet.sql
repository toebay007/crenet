-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2022 at 09:02 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crenet`
--

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(100) NOT NULL,
  `amount` float NOT NULL,
  `usersz` int(100) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `paidOn` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `amount`, `usersz`, `purpose`, `paidOn`) VALUES
(1, 4000, 3, 'bulk', '2022-03-29'),
(2, 5000, 3, 'part', '2022-03-29'),
(3, 200, 3, 'part', '2022-03-29'),
(4, 300, 1, 'bulk', '2022-03-29'),
(5, 5000, 1, 'bulk', '2022-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `userz1`
--

CREATE TABLE `userz1` (
  `id` int(11) NOT NULL,
  `fnamez` varchar(50) NOT NULL,
  `lnamez` varchar(50) NOT NULL,
  `dob1` date NOT NULL,
  `pPhoto` varchar(100) NOT NULL,
  `terms` varchar(10) NOT NULL,
  `usernamez` varchar(50) NOT NULL,
  `newPwd` varchar(10) NOT NULL,
  `pwdsz` varchar(100) DEFAULT NULL,
  `statuss` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userz1`
--

INSERT INTO `userz1` (`id`, `fnamez`, `lnamez`, `dob1`, `pPhoto`, `terms`, `usernamez`, `newPwd`, `pwdsz`, `statuss`) VALUES
(1, 'Akpos', 'Tobe', '2022-03-17', 'images/download (5).jpg', 'on', 'TobeCrenet336', '$@HYSUPG', '2bd359543fdf09c7601626bad7cf563f', 'admin'),
(3, 'Judith', 'Akpos', '2021-05-12', 'images/download (5).jpg', 'on', 'AkposCrenet902', 'EaMwD!tF', '6eea9b7ef19179a06954edd0f6c05ceb', 'staff'),
(4, 'John', 'Thomas', '2022-03-24', 'images/images (4).jpg', 'on', 'ThomasCrenet693', 'Ere&xgy!', NULL, 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userz1`
--
ALTER TABLE `userz1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userz1`
--
ALTER TABLE `userz1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
