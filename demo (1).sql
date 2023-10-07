-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2023 at 09:01 AM
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
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contract` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `stay` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `contract`, `date`, `time`, `stay`) VALUES
(3, 'Md Tarikul Islam', '012458', '2023-10-17', '02:00:00', '7'),
(21, 'Shuvo', '465764ret6', '2023-10-13', '06:07:00', '7'),
(22, 'Zahid hasan', '4565757', '2023-10-20', '06:57:00', '6'),
(23, 'Miskat', '4537', '2023-10-18', '05:06:00', '6'),
(24, 'Raj', '567678', '2023-10-18', '17:55:00', '67'),
(25, 'Tarikul', '01793800828', '2023-10-26', '14:22:00', '6'),
(26, 'ffdg', '01793800828', '2023-10-17', '15:34:00', '6'),
(27, 'Raj', '01793800828', '2023-10-17', '16:44:00', '6'),
(29, 'Tarikul', '01793800828', '2023-10-16', '16:04:00', '6');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(50) NOT NULL,
  `room_id` int(50) NOT NULL,
  `package_id` int(50) NOT NULL,
  `service_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `hotel_id` int(50) NOT NULL,
  `payment_id` int(50) NOT NULL,
  `in_date` date NOT NULL,
  `out_date` date NOT NULL,
  `cus_name` varchar(100) NOT NULL,
  `arrival_time` varchar(100) NOT NULL,
  `booking_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotel_id` int(50) NOT NULL,
  `hotel_name` varchar(100) NOT NULL,
  `hotel_type` varchar(100) NOT NULL,
  `hotel_address` varchar(100) NOT NULL,
  `hotel_desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'mosharof vai', 'a@e.com', '$2y$10$qOlpanxGA0.uvazN15JkzO20xXaTJ5xFEAjUcu.q2D1', '2023-10-01 05:58:50'),
(2, 'mosharof vai', 'q@q.com', '$2y$10$Jd/PzNyZpdsBCwbAhR7nXepdQn0SwUCKuRedRN2Jn2O', '2023-10-01 05:59:34'),
(3, 'bisty', 'a@r.com', '1111', '2023-10-01 06:00:42'),
(4, 'mosharof vai', 'a@a.com', '$2y$10$4EcdjtE388BXOy3YuEwA1O6/1mtnH0ZWTNe0j1wr194', '2023-10-01 06:04:24'),
(5, 'bisty', 'q@q.com', '$2y$10$WOunIwusfSKzMA4OPRU2QuThJpQ.N56P/tLFWuP1OYu', '2023-10-01 06:14:34'),
(6, 'bisty', 'bri@gmail.com', '$2y$10$KFPHD1Fz92zU.mZ8.35SjuUmzD83zybZ/V5Lcnvih0D', '2023-10-02 05:58:45');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` int(50) NOT NULL,
  `service_id` int(100) NOT NULL,
  `package_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(50) NOT NULL,
  `pay_cus_id` int(50) NOT NULL,
  `pay_date` date NOT NULL,
  `pay_amount` varchar(100) NOT NULL,
  `pay_method` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(50) NOT NULL,
  `role_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(50) NOT NULL,
  `room` varchar(100) NOT NULL,
  `room_cost` varchar(100) NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `available` varchar(100) NOT NULL,
  `cost` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(50) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `service_type` varchar(100) NOT NULL,
  `service_cost` varchar(100) NOT NULL,
  `service_desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_phone` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `age`, `address`) VALUES
(10, 'bisty', 'tt@yahoo.com', 2147483647, '24', 'Bonani'),
(11, 'mosharof vai', 'tt@yahoo.com', 1793800828, '27', 'Mirpur'),
(15, 'ALAMIN', 'ala@gmail.com', 1717225284, '28', 'Mirpur'),
(17, 'bisty', 'tarikulat124@gmail.com', 1793800828, '27', 'Mirpur'),
(18, 'Md Rakibul Islam', 'rakib@gmail.com', 2147483647, '26', 'Borishal'),
(19, 'Ali hasan', 'ali@gmail.com', 74653645, '28', 'Bogura'),
(20, 'Tarikul', 'a@r.com', 1793800828, '44', 'i7yuyu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hotel_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
