-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2023 at 09:05 AM
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
  `address` varchar(100) NOT NULL,
  `roomtype` varchar(100) NOT NULL,
  `guests` varchar(100) NOT NULL,
  `first` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `contract` varchar(100) NOT NULL,
  `arridate` date DEFAULT NULL,
  `arritime` time DEFAULT NULL,
  `depdate` date DEFAULT NULL,
  `deptime` time DEFAULT NULL,
  `stay` int(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `address`, `roomtype`, `guests`, `first`, `last`, `contract`, `arridate`, `arritime`, `depdate`, `deptime`, `stay`, `status`) VALUES
(34, 'Dhanmundi', '3', '4', 'Tanvir', 'Hasan', '01793800828', '2023-10-28', '10:33:00', '2023-10-27', '10:33:00', 7, ''),
(36, 'Mirpur-2', '1', '3', 'Tanvir', 'Hasan', '01793800828', '2023-10-19', '10:38:00', '2023-10-19', '10:38:00', 67, ''),
(37, 'Dhanmundi', '2', '2', 'Tanvir', 'Hasan', '01793800828', '2023-10-18', '10:50:00', '2023-10-12', '22:48:00', 67, ''),
(38, 'Mirpur-2', '2', '3', 'Rakib', 'Hasan', '01793800828', '2023-10-10', '09:36:00', '2023-10-10', '09:36:00', 67, '');

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
-- Table structure for table `employs`
--

CREATE TABLE `employs` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(3, '2023-10-11-042902', 'App\\Database\\Migrations\\CreatePostTable', 'default', 'App', 1697002873, 1),
(4, '2023-10-11-053902', 'App\\Database\\Migrations\\CreateProductsTable', 'default', 'App', 1697002873, 1);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room`, `room_cost`, `room_type`, `category`, `available`, `cost`) VALUES
(1, '14', 'jlu', 'ioyu', 'iuoo', 'uiouo', 'uiou'),
(2, '14', 'jlu', 'ioyu', 'iuoo', 'uiouo', 'uiou'),
(3, '44', '', '', 'Deluxe Room', 'Unavailable', '44'),
(4, '', '', '', 'Family ROOM', 'Available', ''),
(5, '44', '', '', 'Family ROOM', 'Unavailable', '343'),
(6, '44', '', '', 'Family ROOM', 'Unavailable', '343'),
(7, '44', '', '', 'Family ROOM', 'Unavailablecf', '343'),
(8, '44hjk', '', '', 'Family ROOM', 'Unavailablehjkhkjhh', '343hgjhg');

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
(11, 'mosharof vai', 'tt@yahoo.com', 1793800828, '28', 'Mirpur'),
(15, 'ALAMIN', 'ala@gmail.com', 1717225284, '28', 'Mirpur'),
(17, 'bisty', 'tarikulat124@gmail.com', 1793800828, '27', 'Mirpur'),
(18, 'Md Rakibul Islam', 'rakib@gmail.com', 2147483647, '26', 'Borishal'),
(19, 'Ali hasan', 'ali@gmail.com', 74653645, '28', 'Bogura'),
(20, 'Tarikul', 'a@r.com', 1793800828, '44', 'i7yuyu hfg'),
(22, 'sm vai', 'a@r.com', 1793800828, '44', 'Dhanmundi 111');

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
-- Indexes for table `employs`
--
ALTER TABLE `employs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employs`
--
ALTER TABLE `employs`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
