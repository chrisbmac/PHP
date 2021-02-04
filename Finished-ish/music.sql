-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 17, 2017 at 12:29 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music`
--

-- --------------------------------------------------------

--
-- Table structure for table `my_music`
--

CREATE TABLE `my_music` (
  `id` int(5) DEFAULT NULL,
  `format` char(2) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `artist_fn` varchar(150) DEFAULT NULL,
  `artist_ln` varchar(150) DEFAULT NULL,
  `rec_label` varchar(50) DEFAULT NULL,
  `my_notes` text,
  `date_acq` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_music`
--

INSERT INTO `my_music` (`id`, `format`, `title`, `artist_fn`, `artist_ln`, `rec_label`, `my_notes`, `date_acq`) VALUES
(2, 'CD', 'Nevermind', 'Nirvana', '', 'DGC', 'freferfer', '2001-02-20'),
(3, 'CD', 'Nevermind 2', 'Nirvana', '', 'DGC', 'eafrgvsrfvbsfg', '2001-02-20'),
(4, 'CD', 'Nevermind 3', 'Nirvana', 't', 'DGC', 'htyhtyjhtyjhtyhj', '2001-02-19'),
(5, 'CD', 'Xnevermind', 'X Nirvana', 't', 'DGC', 'htyhtyjhtyjhtyhj', '2001-02-17');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE `musicLogin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `musicLogin`(`email`, `password`) VALUES
('chris-mac.06@hotmail.com', '$2y$09$gNQbkUwBY4GyM96y09ug2uleoU2Yi8VSwrx6exzRogMoGix/Yb6Se');

/*ALTER TABLE `musicLogin` ADD CONSTRAINT MY*/