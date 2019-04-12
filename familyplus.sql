-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2019 at 05:13 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `title` varchar(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role_id` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `title`, `name`, `email`, `phone_number`, `password`, `role_id`) VALUES
(1, 'Dr', 'Dada Abdulrasheed', 'habeehola18@gmail.com', '08051499523', 'dsquare', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `attachment_name` text NOT NULL,
  `file_ext` text NOT NULL,
  `mime_type` text NOT NULL,
  `message_date_time` text NOT NULL,
  `ip_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `comment_id` text NOT NULL,
  `date` text NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comunity`
--

CREATE TABLE `comunity` (
  `id` int(255) NOT NULL,
  `post_id` varchar(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `post` varchar(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `like_count` int(255) NOT NULL DEFAULT '0',
  `comment_count` int(255) NOT NULL,
  `like_users` varchar(255) NOT NULL,
  `post_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `familyplus`
--

CREATE TABLE `familyplus` (
  `id` int(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `role_id` varchar(11) NOT NULL,
  `title` varchar(11) NOT NULL,
  `first_name` varchar(225) NOT NULL,
  `last_name` varchar(225) NOT NULL,
  `other_name` varchar(225) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `email` varchar(225) NOT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `marital_status` varchar(11) DEFAULT NULL,
  `phone_number` varchar(255) NOT NULL,
  `age_range` int(11) DEFAULT NULL,
  `religion` varchar(255) NOT NULL,
  `spouse_first_name` varchar(255) NOT NULL,
  `spouse_other_name` varchar(225) DEFAULT NULL,
  `spouse_email` varchar(225) DEFAULT NULL,
  `spouse_phone_number` varchar(13) DEFAULT NULL,
  `spouse_gender` varchar(11) DEFAULT NULL,
  `spouse_age_range` int(225) DEFAULT NULL,
  `spouse_religion` varchar(225) DEFAULT NULL,
  `spouse_occupation` varchar(225) DEFAULT NULL,
  `spouse_marital_status` varchar(225) DEFAULT NULL,
  `occupation` varchar(255) NOT NULL,
  `monday` varchar(11) DEFAULT NULL,
  `tuesday` varchar(11) DEFAULT NULL,
  `wednesday` varchar(11) DEFAULT NULL,
  `thursday` varchar(11) DEFAULT NULL,
  `friday` varchar(11) DEFAULT NULL,
  `saturday` varchar(11) DEFAULT NULL,
  `sunday` varchar(11) DEFAULT NULL,
  `morning` varchar(20) DEFAULT NULL,
  `afternoon` varchar(20) DEFAULT NULL,
  `evening` varchar(20) DEFAULT NULL,
  `acct_status` varchar(255) NOT NULL DEFAULT 'pending',
  `token` varchar(255) NOT NULL,
  `date_created` text NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `familyplus`
--

INSERT INTO `familyplus` (`id`, `user_id`, `role_id`, `title`, `first_name`, `last_name`, `other_name`, `short_description`, `email`, `gender`, `marital_status`, `phone_number`, `age_range`, `religion`, `spouse_first_name`, `spouse_other_name`, `spouse_email`, `spouse_phone_number`, `spouse_gender`, `spouse_age_range`, `spouse_religion`, `spouse_occupation`, `spouse_marital_status`, `occupation`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`, `morning`, `afternoon`, `evening`, `acct_status`, `token`, `date_created`, `password`) VALUES
(1, '48qJWfxAiS', '04', '', 'abdulraasheed', 'dada', 'Abiola', 'I am a full stack dev', 'hakeem@gmail.com', 'male', 'Unmarried', '80514995233', 18, 'Islam', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Computer Progammer', '', '', '', '', '', '', '', NULL, NULL, NULL, 'pending', '', '2019-02-25 06:57:38.196323', 'bbb8aae57c104cda40c93843ad5e6db8'),
(3, 'wQAW1qUrLh', '03', '', 'olawale', 'Aremu', 'Dolapo', 'I am a full stack dev', 'toykampage1000@gmail.com', 'male', 'Married', '80514995235', 26, 'Islam', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lawyer', '', '', '', '', '', '', '', NULL, NULL, NULL, 'pending', '', '2019-02-25 06:57:38.196323', 'e11170b8cbd2d74102651cb967fa28e5'),
(5, 'PARhbcxCej', '03', '', 'olamide', 'Basirat', 'Dada', 'Am a proud muslimah', 'olamide@gmail.com', 'female', 'Married', '09087654321', 26, 'Islam', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Accountant', '', '', '', '', '', '', '', NULL, NULL, NULL, 'active', '', '2019-02-25 06:57:38.196323', 'e11170b8cbd2d74102651cb967fa28e5'),
(6, '0saXqf8QbT', '04', '', 'Yusuf', 'Olokode', 'bolo', 'Looking for better half', 'bolo@gmail.com', 'male', 'Unmarried', '80514995231', 18, 'Islam', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Computer Progammer', '', '', '', '', '', '', '', NULL, NULL, NULL, 'pending', '', '2019-02-25 06:57:38.196323', '1bbd886460827015e5d605ed44252251'),
(7, 'QU6qzIX1t7', '04', '', 'khadijat', 'Rasaki', 'Abiola', 'I am a full stack dev', 'aisha@gmail.com', 'male', 'Unmarried', '09089786756', 18, 'Islam', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Computer Progammer', '', '', '', '', '', '', '', NULL, NULL, NULL, 'active', '', '2019-04-08 20:57:03.105196', 'bae5e3208a3c700e3db642b6631e95b9'),
(11, '4TBKcJNAwn', '04', '', 'olawale', 'Aremu', 'Abiola', 'Looking for better half', 'mwork063@gmail.com', 'male', 'Unmarried', '80514995236', 26, 'Islam', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Doctor', '', '', '', '', '', '', '', NULL, NULL, NULL, 'pending', '', '2019-02-25 06:57:38.196323', '1bbd886460827015e5d605ed44252251'),
(13, 'lMWjntgRVb', '03', '', 'Raji', 'Olanihun', 'Abiola', 'A beautiful family built on the basis of islam', 'kabirtoyeeb19@gmail.com', NULL, 'Married', '80514995236', 26, 'Islam', 'adeola', 'olamide', 'ayishat@gmail.com', '80514995235', NULL, 36, 'Islam', 'Soldier', 'Married', 'Accountant', '', '', '', '', '', '', '', NULL, NULL, NULL, 'pending', '', '2019-02-25 06:57:38.196323', '1bbd886460827015e5d605ed44252251'),
(14, 'hHyl7p8EZ6', '02', '', 'Raji', 'dada', 'Abiola', 'Genecologist', 'Gene@gmail.com', 'male', NULL, '80514995233', NULL, 'Islam', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Doctor', '', '', '', '', '', '', '', NULL, NULL, NULL, 'active', '', '2019-02-25 06:57:38.196323', '1bbd886460827015e5d605ed44252251'),
(15, 'EHzMmLWyV0', '04', '', 'Bolaji', 'Omolola', 'Aderibigbe', 'Living my life without stress', 'bolaji@yahoo.com', 'female', 'Unmarried', '80514995234', 18, 'Islam', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Accountant', '', '', '', '', '', '', '', NULL, NULL, NULL, 'pending', '', '2019-02-25 06:57:38.196323', '1bbd886460827015e5d605ed44252251'),
(16, 'azG3dLs92p', '02', '', 'Abdulhammed', 'Alade', 'Kolawole', 'Imam ', 'kolawole@email.com', 'female', NULL, '80514995230', NULL, 'Islam', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Others', '', '', '', '', '', '', '', NULL, NULL, NULL, 'pending', '', '2019-02-25 06:57:38.196323', '1bbd886460827015e5d605ed44252251'),
(17, 'QpZRULVbHY', '04', '', 'Ali', 'Abiodun', 'ayinde', 'Am proud to be a muslim', 'ali@email.com', 'male', 'Unmarried', '80514995232', 18, 'Islam', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Accountant', '', '', '', '', '', '', '', NULL, NULL, NULL, 'pending', '', '2019-02-25 06:57:38.196323', '1bbd886460827015e5d605ed44252251'),
(22, 'mHtAu6Oqbx', '04', 'Mr', 'olawale', 'Adamu', 'Alade', 'All is well', 'alade1111@gmail.com', 'male', 'Unmarried', '09023432121', 18, 'Islam', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Computer Progammer', '', '', '', '', '', '', '', NULL, NULL, NULL, 'pending', '6lOpH9E7tcF8uWb0RrjksQLdJq2MAZVY', '2019-02-25 06:57:38.196323', '1bbd886460827015e5d605ed44252251'),
(23, 'ZloJ5dWROm', '04', 'Miss', 'rasheed', 'Rasaki', 'Abiola', 'Am proud to be a muslim', 'abiola121@gmail.com', 'male', 'Unmarried', '09023432121', 18, 'Islam', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Doctor', '', '', '', '', '', '', '', NULL, NULL, NULL, 'pending', 'NMrYo4GTCXjIdip790v62KZegt8LcQws', '2019-02-25 06:57:38.196323', '1bbd886460827015e5d605ed44252251'),
(24, '91fHy7ztia', '04', 'Mr', 'Abimbola', 'Rasaki', 'Abiola', 'I am a full stack dev', 'abiola11@gmail.com', 'male', 'Unmarried', '09023432121', 18, 'Islam', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Student', '', '', '', '', '', '', '', NULL, NULL, NULL, 'active', 'nsuVoiCQb4MaTt0rYUWEvZ95g2FBmSDX', '2019-02-26 11:27:39.089619', '1bbd886460827015e5d605ed44252251'),
(25, 'akDsjQl03f', '02', 'Dr', 'AbdulHakeem', 'Olawale', 'Adam', 'Mudir morkaz ul uloom wal arabiya', 'ayooola@gmail.com', 'male', NULL, '08051499523', NULL, 'Islam', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Computer Progammer', NULL, NULL, 'Wednesday', 'Thursday', 'Friday', NULL, NULL, '10am to 12am', '2pm to 4pm', NULL, 'active', '4DgxcM5YQTjHXKSqZCaNhwtIefBPVpEk', '2019-02-28 17:22:49.283917', '1bbd886460827015e5d605ed44252251'),
(31, 'fbF9NUg8zi', '04', 'Mr', 'Dada', 'Abdulrasheed', 'Abiola', 'Am proud to be a muslim', 'habeehola18@gmail.com', 'male', 'Unmarried', '08051499523', 18, 'Islam', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Computer Progammer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'b9rJlQ0sEzuodieR36wG7hPZjWaYS1BI', '2019-03-26 20:28:14.646255', '1bbd886460827015e5d605ed44252251');

-- --------------------------------------------------------

--
-- Table structure for table `maritalissues`
--

CREATE TABLE `maritalissues` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `title` varchar(225) NOT NULL,
  `article` varchar(500) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scheduler`
--

CREATE TABLE `scheduler` (
  `id` int(11) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `name` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `counsellor` varchar(225) NOT NULL,
  `counsellor_email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comunity`
--
ALTER TABLE `comunity`
  ADD PRIMARY KEY (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `familyplus`
--
ALTER TABLE `familyplus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maritalissues`
--
ALTER TABLE `maritalissues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scheduler`
--
ALTER TABLE `scheduler`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comunity`
--
ALTER TABLE `comunity`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `familyplus`
--
ALTER TABLE `familyplus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `maritalissues`
--
ALTER TABLE `maritalissues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scheduler`
--
ALTER TABLE `scheduler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comunity`
--
ALTER TABLE `comunity`
  ADD CONSTRAINT `comunity_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `familyplus` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
