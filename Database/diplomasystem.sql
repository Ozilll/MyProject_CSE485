-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 09:40 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `validation_code` int(11) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `validation_code`, `active`) VALUES
(1, 'Duc', 'Truong', 'admin', 'admin@gmail.com', 'admin', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `join_project`
--

CREATE TABLE `join_project` (
  `id_student` int(11) NOT NULL,
  `id_lecturer` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `time_begin` date NOT NULL,
  `deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `validation_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`id`, `first_name`, `last_name`, `username`, `password`, `validation_code`, `active`, `email`) VALUES
(1, 'Lacazette', 'Alex', 'lacazette', '123123', '', 1, 'lacazette@gmail.com'),
(2, 'giang', 'vien', 'giangvien', 'giangvien', '', 1, 'giangvien@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `topic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `programming_language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_upload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(7, 'Lucas', 'Torreira', 'lucastorreira', 'c0ee587728f794a79c89dde44ae39bf7', '7317b70a5526a18f338b850e269d264f', 1, 'abc', 'torreira@gmail.com'),
(8, 'Ozil', 'Mesut', 'mesutozil', 'f4e404c7f815fc68e7ce8e3c2e61e347', '55eb72e1fd21a200894f29eff9f7f38e', 1, '', 'ozil@gmail.com'),
(9, 'Cazorla', 'Santis', 'Santis Cazorla', 'af117b3c856da39750969cfb41ca6c3a', '9941bb45e1cd5d484eca5ad42f07cf78', 1, '', 'cazorla@gmail.com'),
(10, 'sinh', 'vien', 'sinhvien', '615ad206666f8086103305b8f77173f4', '0', 1, '', 'sinhvien@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `join_project`
--
ALTER TABLE `join_project`
  ADD KEY `id_student` (`id_student`),
  ADD KEY `id_lecturer` (`id_lecturer`),
  ADD KEY `id_project` (`id_project`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id_student`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id_student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `join_project`
--
ALTER TABLE `join_project`
  ADD CONSTRAINT `join_project_ibfk_1` FOREIGN KEY (`id_student`) REFERENCES `students` (`id_student`),
  ADD CONSTRAINT `join_project_ibfk_2` FOREIGN KEY (`id_lecturer`) REFERENCES `lecturers` (`id`),
  ADD CONSTRAINT `join_project_ibfk_3` FOREIGN KEY (`id_project`) REFERENCES `projects` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
