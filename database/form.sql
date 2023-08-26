-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2023 at 07:52 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_forms`
--

CREATE TABLE `ci_forms` (
  `id` int(255) NOT NULL,
  `evidence` varchar(255) NOT NULL,
  `appendix` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `dcustody` varchar(255) NOT NULL,
  `scustody` varchar(255) NOT NULL,
  `fofficer` varchar(255) NOT NULL,
  `aofficer` varchar(255) NOT NULL,
  `custodian` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `dnaanalysis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ci_forms`
--

INSERT INTO `ci_forms` (`id`, `evidence`, `appendix`, `item`, `dcustody`, `scustody`, `fofficer`, `aofficer`, `custodian`, `branch`, `description`, `dnaanalysis`) VALUES
(110, 'New Evidence', 'Case 2', 'Weapon', '08/15/2023', 'critical', 'Juan', 'Juan', 'Secretary', '001-999', 'none', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_forms`
--
ALTER TABLE `ci_forms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ci_forms`
--
ALTER TABLE `ci_forms`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
