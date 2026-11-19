-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2026 at 06:23 PM
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
-- Database: `udustay_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `guest_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `unit_type` varchar(50) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `booking_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `guest_name`, `email`, `phone`, `unit_type`, `check_in`, `check_out`, `booking_date`) VALUES
(1, 'Kimberly Tariro Tandi', 'kimberlytariro04@gmail.com', '0788252527', 'Standard Chalet', '2026-11-25', '2026-11-29', '2026-11-17 20:31:07'),
(2, 'Kimberly Tariro Tandi', 'kimberlytariro04@gmail.com', '0788252527', 'Standard Chalet', '2026-11-25', '2026-11-27', '2026-11-17 21:03:18'),
(3, 'Kimberly Tariro Tandi', 'kimberlytariro04@gmail.com', '0788252527', 'Standard Chalet', '2026-12-22', '2026-12-27', '2026-11-19 13:12:39'),
(4, 'Kimberly Tariro Tandi', 'kimberlytariro04@gmail.com', '0788252527', 'Standard Chalet', '2026-11-19', '2026-11-23', '2026-11-19 15:48:22'),
(5, 'Kimberly Tariro Tandi', 'kimberlytariro04@gmail.com', '0788252527', 'Family Cottage', '2026-11-20', '2026-11-24', '2026-11-19 15:55:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
