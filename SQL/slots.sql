-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2019 at 10:38 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atc_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `id` bigint(20) NOT NULL,
  `Airport` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Flightnumber` int(11) NOT NULL,
  `Source` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Destination` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DepartureTime` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ArrivalTime` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`id`, `Airport`, `Flightnumber`, `Source`, `Destination`, `DepartureTime`, `ArrivalTime`, `Date`, `created_at`, `updated_at`) VALUES
(1, 'ATL', 1029, 'ATL', 'JFK', '2:00', '5:00', '2020-03-01', NULL, NULL),
(2, 'ATL', 4320, 'DTW', 'ATL', '1:00', '5:00', '2020-03-01', NULL, NULL),
(3, 'ATL', 6248, 'MSP', 'ATL', '4:00', '8:00', '2020-03-01', NULL, NULL),
(4, 'ATL', 7522, 'ATL', 'SEA', '12:00', '16:00', '2020-03-01', NULL, NULL),
(5, 'ATL', 1243, 'ATL', 'MSP', '14:00', '19:00', '2020-03-01', NULL, NULL),
(6, 'ATL', 4320, 'ATL', 'DTW', '17:00', '18:00', '2020-03-01', NULL, NULL),
(7, 'ATL', 1029, 'JFK', 'ATL', '16:00', '19:00', '2020-03-01', NULL, NULL),
(8, 'ATL', 6248, 'ATL', 'JFK', '21:00', '23:00', '2020-03-01', NULL, NULL),
(9, 'ATL', 4320, 'DTW', 'ATL', '22:00', '23:00', '2020-03-01', NULL, NULL),
(10, 'SEA', 3675, 'SEA', 'MSP', '1:00', '7:00', '2020-03-01', NULL, NULL),
(11, 'SEA', 2300, 'JFK', 'SEA', '3:00', '5:00', '2020-03-01', NULL, NULL),
(12, 'SEA', 8699, 'SEA', 'DTW', '7:00', '12:00', '2020-03-01', NULL, NULL),
(13, 'SEA', 5413, 'DTW', 'SEA', '4:00', '11:00', '2020-03-01', NULL, NULL),
(14, 'SEA', 7522, 'ATL', 'SEA', '12:00', '16:00', '2020-03-01', NULL, NULL),
(15, 'SEA', 2300, 'SEA', 'JFK', '18:00', '20:00', '2020-03-01', NULL, NULL),
(16, 'SEA', 1317, 'MSP', 'SEA', '17:00', '19:00', '2020-03-01', NULL, NULL),
(17, 'SEA', 8699, 'DTW', 'SEA', '19:00', '21:00', '2020-03-01', NULL, NULL),
(18, 'SEA', 1436, 'JFK', 'SEA', '19:00', '22:00', '2020-03-01', NULL, NULL),
(19, 'DTW', 4320, 'DTW', 'ATL', '1:00', '5:00', '2020-03-01', NULL, NULL),
(20, 'DTW', 5413, 'DTW', 'SEA', '4:00', '11:00', '2020-03-01', NULL, NULL),
(21, 'DTW', 9455, 'DTW', 'MSP', '10:00', '15:00', '2020-03-01', NULL, NULL),
(22, 'DTW', 8699, 'SEA', 'DTW', '7:00', '12:00', '2020-03-01', NULL, NULL),
(23, 'DTW', 1167, 'JFK', 'DTW', '11:00', '15:00', '2020-03-01', NULL, NULL),
(24, 'DTW', 4320, 'ATL', 'DTW', '17:00', '18:00', '2020-03-01', NULL, NULL),
(25, 'DTW', 8699, 'DTW', 'SEA', '19:00', '21:00', '2020-03-01', NULL, NULL),
(26, 'DTW', 1167, 'DTW', 'JFK', '20:00', '22:00', '2020-03-01', NULL, NULL),
(27, 'DTW', 4320, 'DTW', 'ATL', '22:00', '23:00', '2020-03-01', NULL, NULL),
(28, 'DTW', 3675, 'MSP', 'DTW', '21:00', '23:00', '2020-03-01', NULL, NULL),
(29, 'JFK', 2300, 'JFK', 'SEA', '3:00', '5:00', '2020-03-01', NULL, NULL),
(30, 'JFK', 1029, 'ATL', 'JFK', '2:00', '5:00', '2020-03-01', NULL, NULL),
(31, 'JFK', 1157, 'JFK', 'DTW', '11:00', '15:00', '2020-03-01', NULL, NULL),
(32, 'JFK', 1011, 'MSP', 'JFK', '12:00', '15:00', '2020-03-01', NULL, NULL),
(33, 'JFK', 1029, 'JFK', 'ATL', '16:00', '19:00', '2020-03-01', NULL, NULL),
(34, 'JFK', 1436, 'JFK', 'SEA', '19:00', '22:00', '2020-03-01', NULL, NULL),
(35, 'JFK', 2300, 'SEA', 'JFK', '18:00', '20:00', '2020-03-01', NULL, NULL),
(36, 'JFK', 1011, 'JFK', 'MSP', '21:00', '23:00', '2020-03-01', NULL, NULL),
(37, 'JFK', 1167, 'DTW', 'JFK', '20:00', '22:00', '2020-03-01', NULL, NULL),
(38, 'JFK', 6248, 'ATL', 'JFK', '21:00', '23:00', '2020-03-01', NULL, NULL),
(39, 'MSP', 6248, 'MSP', 'ATL', '4:00', '8:00', '2020-03-01', NULL, NULL),
(40, 'MSP', 3675, 'SEA', 'MSP', '1:00', '7:00', '2020-03-01', NULL, NULL),
(41, 'MSP', 1011, 'MSP', 'JFK', '12:00', '15:00', '2020-03-01', NULL, NULL),
(42, 'MSP', 9455, 'DTW', 'MSP', '10:00', '15:00', '2020-03-01', NULL, NULL),
(43, 'MSP', 1317, 'MSP', 'SEA', '17:00', '19:00', '2020-03-01', NULL, NULL),
(44, 'MSP', 3675, 'MSP', 'DTW', '21:00', '23:00', '2020-03-01', NULL, NULL),
(45, 'MSP', 1011, 'JFK', 'MSP', '21:00', '23:00', '2020-03-01', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
