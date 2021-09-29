-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2020 at 09:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `blog`;

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `author` varchar(30) NOT NULL,
  `article` mediumtext NOT NULL,
  `title` text NOT NULL,
  `datepub` date NOT NULL,
  `display` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `author`, `article`, `title`, `datepub`, `display`) VALUES
(1, 'kmsPro', 'fbrjg f\r\nvanhfsd bvdabv\r\ndvhasdfvsd adfjha\r\nsdujasvf dfdfyahvfsdg\r\neftyewfyeqwf', 'Kenya', '2020-08-05', 'Yes'),
(3, 'kmsP', 'gajmbgf sdngsdfhajfvhasdf\r\ndfgasnhgf sdga', 'jhsfg sfgs', '2020-08-05', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `usertype` varchar(60) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(60) NOT NULL,
  `nationality` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `usertype`, `dob`, `gender`, `nationality`) VALUES
(1, 'David', 'kms', 'kms', 'kms@gmail.com', 'Administrator', '2020-08-19', 'male', 'Congolese'),
(2, 'Patient', 'Patient', 'Patient', 'patient@gmail.com', 'Administrator', '2020-08-26', 'male', 'Rwandese'),
(3, 'Salomon', 'kmsPro', 'kmsPro', 'kmsPro@gmail.com', 'Author', '2020-08-18', 'male', 'French'),
(4, 'kmsP', 'kmsP', 'kmsP', 'kmsP@gmail.com', 'Author', '2020-08-17', 'male', 'Chinese'),
(5, 'joseph', 'joseph', 'joseph', 'joseph@gmail.com', 'Editor', '2020-08-18', 'female', 'Cameroonian');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table article
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'blog', 'article', '{\"CREATE_TIME\":\"2020-08-04 13:55:18\"}', '2020-08-04 20:57:06');

--
-- Metadata for table users
--

--
-- Metadata for database blog
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
