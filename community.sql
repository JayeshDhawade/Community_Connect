-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 08:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `community`
--

-- --------------------------------------------------------

--
-- Table structure for table `organisation_register`
--

CREATE TABLE `organisation_register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `hobbies` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organisation_register`
--

INSERT INTO `organisation_register` (`id`, `name`, `email`, `password`, `hobbies`) VALUES
(5, 'TCS', 'tcs@gmail.com', '$2y$10$1RgUexVtNm18mcRoDJtLAO/mbMc6z7gefFAUiCFq8NuzPw8ourbrq', 'technical'),
(6, 'Infosys', 'infosys@gmail.com', '$2y$10$a4lhrze4TlDJ0imNC21NjOoMl5x9Rn3cHFRkMCZWKKqYn2MbiNYB.', 'technical'),
(7, 'BCCI', 'bcci@gmail.com', '$2y$10$iydsP7qur50tAYNETd/T5O1q5QuRrZHXTW9orKMuFtRG/hhlttH2u', 'sports'),
(8, 'ICC', 'icc@gmail.com', '$2y$10$Gex4PcmahVea2TidjOlepu7nqE6PDl.D2M3tJajWI5HqpgTbvteJG', 'sports'),
(9, 'SBI', 'sbi@gmail.com', '$2y$10$hE9M4L3CDBXWyXbqToj7ZOLx0WFOpYbBFTZ0L8skCY1vfpkOym/ra', 'tally'),
(10, 'ICICI', 'icici@gmail.com', '$2y$10$YfYgMmMKCyQRvKrVG/CBrehQAnLJo/xCyvj.xzGZy/1BKgPqxTSmq', 'tally');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_register`
--

CREATE TABLE `volunteer_register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `hobbies` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `volunteer_register`
--

INSERT INTO `volunteer_register` (`id`, `name`, `email`, `password`, `hobbies`) VALUES
(3, 'JD', 'jd@gamil.com', '$2y$10$NgyN.t4qSfaompuJw1WcQO/73.CU9I7USPc/vrgB0k1FM7iqr6cpS', 'sports'),
(4, 'jayesh', 'jayesh@gmail.com', '$2y$10$i4Wm2rUvvf2O8h6N5uEO/.wqrLjqyOJq9F7G8nLa0qWZwQmZL9ede', 'technical'),
(5, 'ashu', 'ashu@gmail.com', '$2y$10$9hkSs5X5TSgyEMYN6ISTyuRZF0xrJ3.FX0Wn7vLvCG8Ow1WchOnW.', 'tally');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `organisation_register`
--
ALTER TABLE `organisation_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer_register`
--
ALTER TABLE `volunteer_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `organisation_register`
--
ALTER TABLE `organisation_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `volunteer_register`
--
ALTER TABLE `volunteer_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
