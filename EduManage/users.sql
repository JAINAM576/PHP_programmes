-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jan 06, 2025 at 07:16 AM
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
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_education`
--

CREATE TABLE `user_education` (
  `order_id` int(11) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `institution_name` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `Grade` varchar(50) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_education`
--

INSERT INTO `user_education` (`order_id`, `degree`, `institution_name`, `start_date`, `end_date`, `Grade`, `uid`) VALUES
(2, 'Grad', 'insti', '2024-10-09', '2024-10-27', '8', 3),
(14, 'jainam1', 'gt', '2024-10-18', '2024-10-31', 'coll', 6),
(15, 'jainam1', 'gt1jbkkhb', '2024-10-04', '2024-10-19', 'coll', 8),
(16, 'jainam1', 'gt', '2024-10-18', '2024-10-31', 'haihkih', 8);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `uId` int(11) NOT NULL,
  `firstname` varchar(56) NOT NULL,
  `lastname` varchar(56) NOT NULL,
  `email` varchar(56) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`uId`, `firstname`, `lastname`, `email`, `password`) VALUES
(3, 'jainam', 'sanghavi', 'jainam@gmail.com', 'n'),
(6, 'Jainam', 'Sanghavi', 'root@gmail.com', '$2y$10$uh5fFY8KEbn1TFBtBJIFxuC2T2k1G53j0.SiXXg4Wkfno0M/wh74u'),
(7, 'Jainam', 'Sanghavi', 'sanghavijainam86@gmail.com', '$2y$10$J.ynyM.ueVbgXWmmSc9Rn.9AMGhLtsg6TEjUmmyYnYOc1l8vO2YRS'),
(8, 'Jainam12', 'Sanghavi1', 'jainamsanghavi008@gmail.com', '$2y$10$Pmf8orF.aUYE/OuK0Wd9MurAtDSb/8EIjn2CPJpKpJEsu3wxmVr1q');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_education`
--
ALTER TABLE `user_education`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`uId`),
  ADD KEY `uId` (`uId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_education`
--
ALTER TABLE `user_education`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `uId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_education`
--
ALTER TABLE `user_education`
  ADD CONSTRAINT `user_education_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user_info` (`uId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
