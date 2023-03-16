-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 11, 2022 at 02:51 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `artworks`
--

CREATE TABLE `artworks` (
  `id` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  `artname` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  `price` int(11) NOT NULL,
  `author` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  `exhibition` varchar(60) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `artworks`
--

INSERT INTO `artworks` (`id`, `artname`, `price`, `author`, `exhibition`) VALUES
('A1', 'THE STARRY NIGHT', 1, 'Vincent van Gogh', 'E1'),
('A2', 'Girl with an E11 Blaster', 2, 'Johannes vermmer', 'E2'),
('A3', 'Scream', 3, 'Edvard Munch', 'E3'),
('A4', 'The Kiss', 4, 'Edward Hopper', 'E4');

-- --------------------------------------------------------

--
-- Table structure for table `bookform`
--

CREATE TABLE `bookform` (
  `name` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `ticket` int(11) NOT NULL,
  `exhibition` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `exhibition`
--

CREATE TABLE `exhibition` (
  `id` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  `price` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  `ename` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  `edate` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  `gallery` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  `artworks` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  `bookname` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `exhibition`
--

INSERT INTO `exhibition` (`id`, `price`, `ename`, `edate`, `gallery`, `artworks`, `bookname`) VALUES
('E1', '100', 'VIVID DELIGHT', '1 Dec 2022', 'G1', 'A1', 0),
('E2', '200', 'I present', '2 Dec 2022', 'G2', 'A2', 0),
('E3', '300', 'Paper Threads', '3 Dec 2022', 'G3', 'A3', 0),
('E4', '400', 'Context House', '4 Dec 2022', 'G4', 'A4', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  `country` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  `city` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  `exhibition` varchar(60) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `country`, `city`, `name`, `exhibition`) VALUES
('G1', 'Ireland', 'Dublin', 'Hart Galley', 'E1'),
('G2', 'UK', 'London', 'Tate Britain', 'E2'),
('G3', 'Spain', 'Madrid', 'Picasso Gallery', 'E3'),
('G4', 'France', 'Paris', 'Lafayette Nice', 'E4');

-- --------------------------------------------------------

--
-- Table structure for table `onnn`
--

CREATE TABLE `onnn` (
  `ondate` varchar(11) COLLATE utf8mb4_bin NOT NULL,
  `Suitable` varchar(60) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `onnn`
--

INSERT INTO `onnn` (`ondate`, `Suitable`) VALUES
('1 Dec 2022', 'Friends'),
('2 Dec 2022', 'Parents without kids'),
('3 Dec 2022', 'Couple'),
('4 Dec 2022', 'Kids');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artworks`
--
ALTER TABLE `artworks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exhibition` (`exhibition`);

--
-- Indexes for table `bookform`
--
ALTER TABLE `bookform`
  ADD PRIMARY KEY (`name`),
  ADD KEY `exhibition` (`exhibition`);

--
-- Indexes for table `exhibition`
--
ALTER TABLE `exhibition`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`edate`),
  ADD KEY `gallery` (`gallery`),
  ADD KEY `ename` (`ename`),
  ADD KEY `edate` (`edate`),
  ADD KEY `artworks` (`artworks`),
  ADD KEY `bookname` (`bookname`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exhibition` (`exhibition`);

--
-- Indexes for table `onnn`
--
ALTER TABLE `onnn`
  ADD PRIMARY KEY (`ondate`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exhibition`
--
ALTER TABLE `exhibition`
  ADD CONSTRAINT `exhibition_ibfk_1` FOREIGN KEY (`gallery`) REFERENCES `gallery` (`id`),
  ADD CONSTRAINT `exhibition_ibfk_2` FOREIGN KEY (`edate`) REFERENCES `onnn` (`ondate`),
  ADD CONSTRAINT `exhibition_ibfk_3` FOREIGN KEY (`artworks`) REFERENCES `artworks` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
