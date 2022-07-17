-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 01:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hein`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `psw` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `psw`) VALUES
(1, 'admin@admin.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(200) NOT NULL,
  `name` varchar(400) NOT NULL,
  `mail` varchar(400) NOT NULL,
  `msm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(200) NOT NULL,
  `name` varchar(400) NOT NULL,
  `year` year(4) NOT NULL,
  `category` text NOT NULL,
  `duration` varchar(200) NOT NULL,
  `director` varchar(400) NOT NULL,
  `operator` varchar(400) NOT NULL,
  `language` varchar(200) NOT NULL,
  `legtype` varchar(400) NOT NULL,
  `client` varchar(400) NOT NULL,
  `thumbnail` varchar(400) NOT NULL,
  `linkarchive` varchar(400) NOT NULL,
  `publicvisible` int(1) NOT NULL,
  `publichightlight` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `year`, `category`, `duration`, `director`, `operator`, `language`, `legtype`, `client`, `thumbnail`, `linkarchive`, `publicvisible`, `publichightlight`) VALUES
(9, 'Lion King', 1994, 'animation', '', 'Roger Allers', 'Jose antopn', 'English', '', '', 'images/lion_king.jpg', '', 0, 0),
(10, 'Toy Story', 1997, 'Crime', '120', 'Francisco', 'Pedro', 'Portugues', '', '', 'images/toy_story.jpg', '', 0, 0),
(11, 'King Kong', 2000, 'Crime', '122', 'Pedro', 'Francisco', 'English', '', '', 'images/king_kong.jpg', '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
