<<<<<<< HEAD
@@ -3,7 +3,7 @@
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2018 at 05:12 PM
-- Generation Time: Oct 21, 2018 at 08:42 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9
 @@ -24,78 +24,51 @@ SET time_zone = "+00:00";
 -- --------------------------------------------------------
 --
-- Table structure for table `diplomas`
--
 CREATE TABLE `diplomas` (
  `id_diplomas` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_lecturers` int(11) NOT NULL,
  `topics` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_contents` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
 -- --------------------------------------------------------
 --
-- Table structure for table `lecturers`
--
 CREATE TABLE `lecturers` (
  `id_lecturers` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
 -- --------------------------------------------------------
 --
-- Table structure for table `students`
--
 CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0'
=======
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
>>>>>>> b2be7583f49fdad43969aeae71d29d200552e314
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
<<<<<<< HEAD
 --
-- Dumping data for table `students`
--
 INSERT INTO `students` (`id`, `username`, `first_name`, `last_name`, `email`, `password`, `active`) VALUES
(1, 'ductruong', 'Duc', 'Truong', 'abc@gmail.com', '123123', 0);
=======

--
-- Dumping data for table `students`
--

>>>>>>> b2be7583f49fdad43969aeae71d29d200552e314
INSERT INTO `students` (`id_student`, `first_name_student`, `last_name_student`, `username_student`, `password_student`, `validation_code`, `active`, `project`, `email`) VALUES
(1, 'Duc', 'Nguyen', 'ducnguyen', '4297f44b13955235245b2497399d7a93', '0', 1, '', 'xyz@gmail.com'),
(2, 'Duc', 'Truong', 'ductruong', 'ductruong', '', 0, '', 'abc@gmail.com'),
(7, 'Lucas', 'Torreira', 'lucastorreira', 'c0ee587728f794a79c89dde44ae39bf7', '0', 1, '', 'torreira@gmail.com'),
(8, 'Ozil', 'Mesut', 'mesutozil', 'f4e404c7f815fc68e7ce8e3c2e61e347', '0', 1, '', 'ozil@gmail.com');
<<<<<<< HEAD
 --
-- Indexes for dumped tables
--
 --
-- Indexes for table `diplomas`
-- Indexes for table `students`
--
ALTER TABLE `diplomas`
  ADD PRIMARY KEY (`id_diplomas`);
ALTER TABLE `students`
  ADD PRIMARY KEY (`id_student`);
 --
-- Indexes for table `lecturers`
-- AUTO_INCREMENT for dumped tables
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`id_lecturers`);
 --
-- Indexes for table `students`
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);
  MODIFY `id_student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;
 /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
=======

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
>>>>>>> b2be7583f49fdad43969aeae71d29d200552e314
