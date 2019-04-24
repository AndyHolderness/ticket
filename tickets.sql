-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2019 at 08:27 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service_tickets`
--

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `fault` text,
  `reporter_details` text,
  `appliance_details` text,
  `appliance_address` text,
  `residential_status` text,
  `landlord_details` text,
  `status` text,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `fault`, `reporter_details`, `appliance_details`, `appliance_address`, `residential_status`, `landlord_details`, `status`, `date_created`, `date_updated`) VALUES
(1, 'Washing machine stuck in spin cycle', 'Mr Smith', 'Electrolux M130', '1 crompton way,\r\nLowton\r\nWa31fs', 'homeowner', '', 'open', '2019-04-13 10:52:43', '0000-00-00 00:00:00'),
(2, 'Dishwasher', 'Mrs', 'Zanussiddd', '104', 'Tenant', 'Richardaaa', 'open', '2019-04-14 09:01:53', '0000-00-00 00:00:00'),
(5, 'Rubber', 'John', 'Hotpoint', '6', 'owner', 'ddd', 'open', '2019-04-14 10:24:50', '2019-04-14 10:24:50'),
(8, 'Cooker', 'Mickey Rooney', 'Benq Dual Oven', '43 Roberts Close', 'Owner', NULL, 'open', '2019-04-17 19:04:32', '2019-04-17 19:04:32'),
(9, 'Broken', 'Bob', 'Dyson', '53', 'Tenant', NULL, 'open', '2019-04-17 19:05:47', '2019-04-17 19:05:47'),
(10, 'Toaster broken', 'Mrs Jones', 'Russell Hobbs 4 Slice toaster', '3 edenhall grove, hindley', 'owner', NULL, 'open', '2019-04-20 06:11:38', '2019-04-20 06:11:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
