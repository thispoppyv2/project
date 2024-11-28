-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2024 at 05:52 PM
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
  `customer_name` varchar(99) DEFAULT NULL,
  `date_arriving` datetime DEFAULT NULL,
  `date_departure` datetime DEFAULT NULL,
  `room_type` varchar(99) DEFAULT NULL,
  `booked_hotel` int(11) DEFAULT NULL,
  `contact_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `customer_name`, `date_arriving`, `date_departure`, `room_type`, `booked_hotel`, `contact_number`) VALUES
(1, 'Carla Rubia', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', NULL, NULL),
(2, 'Carla Rubia', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', NULL, NULL),
(3, 'Carla Rubia', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', NULL, NULL),
(4, 'Mark Evan Provido Delos Reyes', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', NULL, NULL),
(5, 'Mark Evan Provido Delos Reyes', '2024-11-28 22:31:00', '2024-12-06 22:31:00', 'king_room', 2, NULL),
(6, 'Mark Evan Provido Delos Reyes', '2024-11-28 22:42:00', '2024-11-23 22:42:00', 'Standard Room', 0, 2147483647),
(7, 'Mark Evan Provido Delos Reyes', '2024-11-27 23:52:00', '2024-11-22 23:52:00', 'Premium Room', 0, 2147483647),
(21, 'Mark Evan Provido Delos Reyes', '2024-11-30 00:13:00', '2024-11-30 00:13:00', 'Standard Room', 4, 2147483647),
(22, 'Mark Evan Provido Delos Reyes', '2024-11-30 00:13:00', '2024-11-30 00:13:00', 'Standard Room', 4, 2147483647),
(23, 'Mark Evan Provido Delos Reyes', '2024-11-30 00:13:00', '2024-11-30 00:13:00', 'Standard Room', 0, 2147483647),
(24, 'Mark Evan Provido Delos Reyes123123', '2024-12-07 00:10:00', '2024-11-23 00:10:00', 'Standard Room', 0, 2147483647),
(25, 'Mark Evan Provido Delos Reyes', '2024-11-29 06:38:00', '2024-12-06 00:38:00', 'Premium Room', 0, 2147483647),
(26, 'Mark Evan Provido Delos Reyes', '2024-11-29 06:38:00', '2024-12-06 00:38:00', 'Premium Room', 0, 2147483647);

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
(4, 'Link Hotel', 'Singaporea', '12312312', 'https://images.trvl-media.com/lodging/2000000/1750000/1747400/1747350/a242db56.jpg?impolicy=resizec');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(22) NOT NULL,
  `email` varchar(99) DEFAULT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `password` varchar(99) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `fname`, `lname`, `password`, `role_id`) VALUES
(3, 'carlamaxine@gmail.com', 'Carla', 'Rubia', '$2y$10$NCNQYOdFlz/YRMUCL0vgReiWPx3kGeRaB.e66RVnTJR33ORBqAIbK', 2),
(5, 'admin_hotel@gmail.com', 'John', 'Doe', '$2y$10$Ji1ssa9bVdLbxudr1pQw7uJ9NwH45RYzL9xOjYPBrdB2jAZTiN8Nu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_role`
--

CREATE TABLE `users_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_role`
--

INSERT INTO `users_role` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Customer');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `users_role`
--
ALTER TABLE `users_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `users_role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
