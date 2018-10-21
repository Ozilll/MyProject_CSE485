-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2018 at 08:42 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diplomasystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id_student` int(11) NOT NULL,
  `first_name_student` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name_student` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_student` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_student` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `validation_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `project` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id_student`, `first_name_student`, `last_name_student`, `username_student`, `password_student`, `validation_code`, `active`, `project`, `email`) VALUES
(1, 'Duc', 'Nguyen', 'ducnguyen', '4297f44b13955235245b2497399d7a93', '0', 1, '', 'xyz@gmail.com'),
(2, 'Duc', 'Truong', 'ductruong', 'ductruong', '', 0, '', 'abc@gmail.com'),
(7, 'Lucas', 'Torreira', 'lucastorreira', 'c0ee587728f794a79c89dde44ae39bf7', '0', 1, '', 'torreira@gmail.com'),
(8, 'Ozil', 'Mesut', 'mesutozil', 'f4e404c7f815fc68e7ce8e3c2e61e347', '0', 1, '', 'ozil@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id_student`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id_student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
