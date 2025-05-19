-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2022 at 05:55 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waterbilling`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `owners_id` int(10) NOT NULL,
  `prev` varchar(20) NOT NULL,
  `pres` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `owners_id`, `prev`, `pres`, `price`, `date`) VALUES
(1, 1, '12', '12', '10', '14/03/22'),
(6, 10, '4', '9', '10', '14/03/22'),
(4, 2, '12', '23', '10', '14/03/22 '),
(5, 9, '12', '322', '10', '14/03/22'),
(7, 2, '100', '101', '10', '14/03/22'),
(9, 1, '12', '20', '10', '14/03/22'),
(10, 1, '65', '23', '10', '14/03/22'),
(11, 11, '1', '5', '10', '14/03/22'),
(13, 1, '1', '5', '10', '14/03/22'),
(14, 2, '12', '12', '10', '14/03/22'),
(15, 1, '20', '50', '10', '14/03/22'),
(16, 10, '10', '50', '3', '22/03/20 19:37:31'),
(17, 11, '0', '56', '200', '22/03/23 05:27:29'),
(18, 12, '20', '30', '10', '22/03/23 06:11:00'),
(19, 9, '10', '20', '10', '22/03/24 03:13:24'),
(20, 9, '20', '40', '10', '22/03/24 03:16:41'),
(21, 16, '20', '55', '5', '22/03/26 06:07:41'),
(22, 8, '50', '70', '10', '22/03/29 19:20:29'),
(23, 17, '80', '110', '50', '22/03/29 19:28:51');

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `id` int(10) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `mi` varchar(2) NOT NULL,
  `address` varchar(60) NOT NULL,
  `contact` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`id`, `lname`, `fname`, `mi`, `address`, `contact`) VALUES
(1, 'ruturaj', 'parmar', '14', 'fsf', '629'),
(2, 'Harsh', 'Sapra', '12', 'sddf', '8585852503'),
(3, 'ruturaj', 'parmar', '14', 'fsf', '629'),
(4, 'ruturaj', 'parmar', '14', 'fsf', '629'),
(16, 'digvijay', 'chavda', '52', 'ddfvs', '4885'),
(6, 'ferfv', 'regf', '56', 'rtg', '5275'),
(7, 'piyush', 'patel', '12', 'vdfg', '855'),
(8, 'pithva', 'shruti', '23', 'jgkuhi;lj', '9057474970'),
(17, 'Manish', 'kumar', '10', 'Marwadi University', '5659');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`) VALUES
(1, 'Admin', '123', 'Harsh'),
(2, 'harsh', '123', 'harsh'),
(4, 'Test', '123', 'Test_demo'),
(6, 'Harsh', '123', 'Harsh'),
(7, 'manish', '321', 'Manish');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
