-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2022 at 10:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `academies`
--

CREATE TABLE `academies` (
  `id` int(11) NOT NULL,
  `marketing` varchar(50) NOT NULL,
  `design` varchar(50) NOT NULL,
  `programming` varchar(50) NOT NULL,
  `data` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academies`
--

INSERT INTO `academies` (`id`, `marketing`, `design`, `programming`, `data`) VALUES
(1, 'Студенти од маркетинг', 'Студенти од дизајн', 'Студенти од програмирање', 'Студенти од data science');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `student` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `company`, `email`, `phone`, `student`) VALUES
(1, 'Anastazija Ristomanova', 'Brainster', 'ristomanovaanastazija@gmail.com', '+38978366890', 'Студенти од програмирање'),
(2, 'Katerina Ristomanova', 'Ernst & Young', 'katerina@gmail.com', '+38972260256', 'Студенти од data science'),
(3, 'Igor Ristomanov', 'Siemens', 'igor@gmail.com', '+38978366890', 'Студенти од дизајн'),
(4, 'Gordana Ristomanova', 'Bosh', 'gordana@gmail.com', '+38972260256', 'Студенти од маркетинг'),
(5, 'Marika Risteska', 'Leoron', 'marika@gmail.com', '+38978366890', 'Студенти од маркетинг'),
(6, 'Ivan Sharovikj', 'Al Rajhi Bank', 'ivan@gmail.com', '+38972260256', 'Студенти од дизајн'),
(7, 'Veton Iljazi', 'Nesma & Partners Contracting', 'veton@gmail.com', '+38978366890', 'Студенти од програмирање'),
(8, 'Oliver Efremov', 'Alinma Bank', 'oliver@gmail.com', '+38972260256', 'Студенти од data science'),
(9, 'Filip Ordevski', 'Diriyah Gate', 'filip@gmail.com', '+38972260256', 'Студенти од дизајн'),
(10, 'Katerina Dineva', 'Leoron Institute', 'katerina@gmail.com', '+38978366890', 'Студенти од дизајн'),
(11, 'Sanja Milenkovska', 'Sipchem', 'sanja@gmail.com', '+38978366890', 'Студенти од програмирање');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academies`
--
ALTER TABLE `academies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academies`
--
ALTER TABLE `academies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
