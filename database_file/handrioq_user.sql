-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 02:17 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `handrioq_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_tb`
--

CREATE TABLE `add_tb` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `alname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_tb`
--

INSERT INTO `add_tb` (`id`, `user_id`, `alname`) VALUES
(1, 1, 'Asad'),
(2, 4, 'album_1'),
(3, 3, 'album_2'),
(4, 5, 'Asad');

-- --------------------------------------------------------

--
-- Table structure for table `admin_logintb`
--

CREATE TABLE `admin_logintb` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passwrd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_logintb`
--

INSERT INTO `admin_logintb` (`id`, `name`, `email`, `passwrd`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `songs_tb`
--

CREATE TABLE `songs_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `artname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `artist_album` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `song_file` blob NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songs_tb`
--

INSERT INTO `songs_tb` (`id`, `name`, `sname`, `artname`, `email`, `artist_album`, `title`, `song_file`, `user_id`, `status`) VALUES
(3, 'asad', 'asad', 'asad', 'asad@gmail.com', 'Asad', 'monti_cristo.mp3', 0x6d6f6e74695f63726973746f2e6d7033, 5, 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `artname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`id`, `name`, `sname`, `artname`, `email`, `address`, `city`, `code`, `country`, `pass`) VALUES
(5, 'asad', 'asad', 'asad', 'asad@gmail.com', 'asad', 'asa', 'asad', 'asa', 'asad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_tb`
--
ALTER TABLE `add_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_logintb`
--
ALTER TABLE `admin_logintb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songs_tb`
--
ALTER TABLE `songs_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_tb`
--
ALTER TABLE `add_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_logintb`
--
ALTER TABLE `admin_logintb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `songs_tb`
--
ALTER TABLE `songs_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
