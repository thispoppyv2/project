-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2024 at 07:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdb_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `booked_hotel` varchar(99) DEFAULT NULL,
  `customer_name` varchar(99) DEFAULT NULL,
  `contact_number` int(11) DEFAULT NULL,
  `booked_date` datetime DEFAULT NULL,
  `booked_room` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `booked_hotel`, `customer_name`, `contact_number`, `booked_date`, `booked_room`) VALUES
(1, '1', 'asdad', 12312313, '2024-11-23 12:48:50', 'King Size');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `name` varchar(99) DEFAULT NULL,
  `address` varchar(99) DEFAULT NULL,
  `contact_number` varchar(99) DEFAULT NULL,
  `img_link` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `address`, `contact_number`, `img_link`) VALUES
(1, 'Hotel1', 'Jan Lang', '09212121221', 'https://www.newworldhotels.com/wp-content/uploads/2014/05/Mobile-NWHBR-Exterior.jpg'),
(2, 'Hotel1', 'Jan Lang', '09212121221', 'https://www.newworldhotels.com/wp-content/uploads/2014/05/Mobile-NWHBR-Exterior.jpg'),
(3, 'Hotel1', 'Jan Lang', '09212121221', 'https://www.newworldhotels.com/wp-content/uploads/2014/05/Mobile-NWHBR-Exterior.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(99) DEFAULT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `password` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `fname`, `lname`, `password`) VALUES
(1, NULL, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(2, NULL, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(3, NULL, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(4, NULL, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(5, NULL, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(6, NULL, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(7, NULL, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(8, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(9, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(10, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(11, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(12, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(13, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(14, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(15, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(16, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(17, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(18, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(19, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(20, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(21, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(22, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(23, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(24, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(25, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(26, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(27, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(28, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(29, 'markevancoc@gmail.com', 'Mark Evan', 'Delos Reyes', 'd41d8cd98f00b204e9800998ecf8427e'),
(30, 'markevancoc@gmail.com', 'Mark Evan', 'Delos Reyes', '4297f44b13955235245b2497399d7a93'),
(31, 'markevancoc@gmail.com', 'Mark Evan', 'Delos Reyes', '4297f44b13955235245b2497399d7a93'),
(32, 'markevancoc@gmail.com', 'Mark Evan', 'Delos Reyes', '4297f44b13955235245b2497399d7a93'),
(33, 'markevancoc@gmail.com', 'Mark Evan', 'Delos Reyes', '4297f44b13955235245b2497399d7a93'),
(34, 'markevancoc@gmail.com', 'Mark Evan', 'Delos Reyes', '4297f44b13955235245b2497399d7a93'),
(35, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(36, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
