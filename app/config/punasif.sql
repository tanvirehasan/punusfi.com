-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 12:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `punasif`
--

-- --------------------------------------------------------

--
-- Table structure for table `cash_in_out`
--

CREATE TABLE `cash_in_out` (
  `id` int(11) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `sent_id` varchar(111) DEFAULT NULL,
  `recvied_id` varchar(111) DEFAULT NULL,
  `trnx_amount` double DEFAULT NULL,
  `trnx_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cash_in_out`
--

INSERT INTO `cash_in_out` (`id`, `user_id`, `sent_id`, `recvied_id`, `trnx_amount`, `trnx_datetime`) VALUES
(1, 0, '0', '1', 100, '2023-01-23 22:46:43'),
(2, 0, '0', '1', 20, '2023-01-23 22:46:43');

-- --------------------------------------------------------

--
-- Table structure for table `investments`
--

CREATE TABLE `investments` (
  `inv_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `pack_id` int(10) NOT NULL,
  `pack_buy_date` datetime NOT NULL,
  `refer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `investments`
--

INSERT INTO `investments` (`inv_id`, `user_id`, `pack_id`, `pack_buy_date`, `refer_id`) VALUES
(1, 1, 1, '2023-01-24 05:38:39', 0);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(255) DEFAULT NULL,
  `package_info` varchar(400) DEFAULT NULL,
  `package_price` double DEFAULT NULL,
  `package_roi` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `package_name`, `package_info`, `package_price`, `package_roi`) VALUES
(1, 'Start up', '<li>10 users included</li>\r\n<li>2 GB of storage</li>\r\n<li>Email support</li>\r\n<li>Help center access</li>', 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `refer_id` varchar(255) DEFAULT NULL,
  `name` varchar(55) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `email_id` varchar(255) DEFAULT NULL,
  `phone_no` varchar(55) DEFAULT NULL,
  `password` varchar(55) DEFAULT NULL,
  `pin` varchar(55) DEFAULT NULL,
  `country` varchar(55) DEFAULT NULL,
  `gender` varchar(55) DEFAULT NULL,
  `placemnet_id` varchar(55) DEFAULT NULL,
  `placement` int(2) DEFAULT 0,
  `join_date` datetime(6) DEFAULT NULL,
  `stutas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `refer_id`, `name`, `user_name`, `email_id`, `phone_no`, `password`, `pin`, `country`, `gender`, `placemnet_id`, `placement`, `join_date`, `stutas`) VALUES
(1, 'asdfas', 'asdf', 'tanvir', 'Tanvir@gmail.com', '24234234234', '1234', '123', 'United States', 'Male', 'moon', 0, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cash_in_out`
--
ALTER TABLE `cash_in_out`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investments`
--
ALTER TABLE `investments`
  ADD PRIMARY KEY (`inv_id`),
  ADD KEY `inv_id` (`inv_id`,`user_id`),
  ADD KEY `packgerid` (`pack_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cash_in_out`
--
ALTER TABLE `cash_in_out`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `investments`
--
ALTER TABLE `investments`
  MODIFY `inv_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `investments`
--
ALTER TABLE `investments`
  ADD CONSTRAINT `investments_ibfk_1` FOREIGN KEY (`pack_id`) REFERENCES `packages` (`package_id`),
  ADD CONSTRAINT `investments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
