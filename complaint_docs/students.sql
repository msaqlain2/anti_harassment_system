-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 01:25 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anti_harrasment_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `roll_number` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `full_name`, `email`, `roll_number`, `department`, `contact_number`, `password`, `gender`, `created_at`) VALUES
(1, 'Kelly Evans', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(2, 'Connor Espinoza', 'pifol@mailinator.com', 'Quia aliquid nesciun', 'Debitis irure aut ad', '715', 'Ut sit est ad vel do', 'Male', '0000-00-00 00:00:00'),
(5, 'Rajah Burke', 'msaqlain955@gmail.com', '63', 'Minus atque temporib', '208', 'Pa$$w0rd!', 'Female', '0000-00-00 00:00:00'),
(6, 'Helen Flores', 'sijyda@mailinator.com', '23', 'Natus excepturi temp', '596', 'Pa$$w0rd!', 'Male', '0000-00-00 00:00:00'),
(8, 'Lane Stout', 'pagyxuq@mailinator.com', '75', 'Et laudantium rerum', '636', 'Pa$$w0rd!', 'Female', '0000-00-00 00:00:00'),
(9, 'Montana Ellis', 'qituwov@mailinator.com', '16', 'Lorem adipisicing an', '568', 'Pa$$w0rd!', 'Male', '0000-00-00 00:00:00'),
(11, ' Dua Fatima', 'duafatima@gmail.com', '011', 'UBIT', '103185875282548', '10101010', 'Female', '2022-11-15 04:33:06'),
(12, 'Whoopi Pate', 'cyduvuc@mailinator.com', '78', 'Modi consequat Reic', '82', 'Pa$$w0rd!', 'Male', '2022-11-15 04:35:06'),
(13, 'Wallace Hodge', 'cilibycuwi@mailinator.com', '14', 'Dolore veniam ex au', '44', 'Pa$$w0rd!', 'Female', '2022-11-15 04:36:04'),
(14, 'Jerome Rosa', 'ryma@mailinator.com', '19', 'Placeat labore plac', '758', 'Pa$$w0rd!', 'Female', '2022-11-15 04:37:05'),
(15, 'Ima Cole', 'woxuv@mailinator.com', '98', 'Officia ipsa et pro', '835', 'Pa$$w0rd!', 'Male', '2022-11-15 04:41:06'),
(17, 'Rudyard Ortiz', 'cifameriq@mailinator.com', '61', 'Fugit nisi nesciunt', '771', 'Pa$$w0rd!', 'Female', '2022-11-15 04:43:25'),
(22, 'Garrett West', 'lefifytiq@mailinator.com', '69', 'In omnis perferendis', '558', 'Pa$$w0rd!', 'Female', '2022-11-15 04:49:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD  (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL , AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
