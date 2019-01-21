-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2019 at 08:47 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `familyplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `familyplus`
--

CREATE TABLE `familyplus` (
  `id` int(255) NOT NULL,
  `first_name` varchar(225) NOT NULL,
  `last_name` varchar(225) NOT NULL,
  `other_name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `marital_status` varchar(11) NOT NULL,
  `phone_number` int(255) NOT NULL,
  `age_range` int(11) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `familyplus`
--

INSERT INTO `familyplus` (`id`, `first_name`, `last_name`, `other_name`, `email`, `gender`, `marital_status`, `phone_number`, `age_range`, `religion`, `occupation`, `password`) VALUES
(1, 'abdulraasheed', 'dada', 'Abiola', 'habehola18@gmail.com', 'male', 'Unmarried', 2147483647, 0, 'Islam', 'Computer Progammer', '11111111'),
(2, 'Raji', 'Olanihun', 'Abiola', 'aisha@gmail.com', 'male', 'Unmarried', 2147483647, 0, 'Islam', 'Doctor', '2222222222'),
(3, 'Islamiyat', 'Aremu', 'Modupeore', 'islamiyatmodupe@gmail.com', 'female', 'Unmarried', 2147483647, 0, 'Islam', 'Others', 'dupzydupzy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `familyplus`
--
ALTER TABLE `familyplus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `familyplus`
--
ALTER TABLE `familyplus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
