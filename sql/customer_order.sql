-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 14, 2021 at 08:50 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kiaras_pizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `pizza_type` varchar(100) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip` varchar(11) NOT NULL,
  `payment_method` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`id`, `qty`, `pizza_type`, `customer_name`, `street`, `city`, `state`, `zip`, `payment_method`) VALUES
(1, 1, 'cheese', 'sdfasdfsa', 'dsfsadfasd', 'sdfasdfasdf', '', '1234', 'cash'),
(2, 1, 'cheese', 'Bruce', '3324', 'Vantucky', '', '98685', 'cash'),
(3, 5, 'cheese', 'Bruce', '3709 NW 107th Street', 'Vancouver', '', '98685', 'credit'),
(4, 1, 'cheese', 'sdfsadfasf', 'sdfsdf', 'fsdfsa', '', '223424', 'cash'),
(5, 1, 'cheese', 'Bruce', '123 Main', 'Vanway', '', '12345', 'cash'),
(6, 5, 'meatball', 'BRUCE ELGORT', '3709 NW 107TH', 'VANCOUVER', '', '98685', 'credit'),
(7, 1, 'pepperoni', 'TUCKER ELGORT', '3709 NW 107TH', 'VANCOUVER', '', '98685', 'credit'),
(8, 2, 'meatball', 'Lisa', 'somewhere', 'Vancouver', '', '98662', 'credit'),
(9, 2, 'meatball', 'Lisa', 'somewhere', 'Vancouver', '', '98662', 'credit'),
(10, 2, 'meatball', 'Lisa', 'somewhere', 'Vancouver', '', '98662', 'credit'),
(11, 2, 'meatball', 'Lisa', 'somewhere', 'Vancouver', '', '98662', 'credit'),
(12, 3, 'pepperoni', 'Lisa New Order', '23324', 'vanwa', '', '98685', 'cash'),
(13, 5, 'meatball', 'Parker E', '123 Main St.', 'Vantucky', '', '98685', 'credit'),
(14, 1, 'cheese', 'sdfsdf', 'sdfsdfsdf', '3223432', 'wa', '4444', 'cash');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
