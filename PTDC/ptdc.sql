-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2019 at 08:37 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptdc`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(250) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `l_name` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `comment` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `l_name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `country` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `f_name`, `l_name`, `address`, `email`, `mobile`, `sex`, `country`, `password`) VALUES
(1, '', '', 'Pondicherry University, SRK HOSTEL ROOM NUMBER-59', 'Nikesh Jha', '9487810674', 'male', '', '12345'),
(2, 'DHIRAJ', 'KUMAR', 'Pondicherry University, SRK HOSTEL ROOM NUMBER-59, R.V.NAGAR KALAPET, PONDICHERRY (PUDUCHERRY)', 'Nikesh Jha', '8903079750', 'male', '', '12345'),
(3, 'Sandeep', 'Kumar', 'Bihar,Patna', 'sandeep123@', '8734237680', 'male', '', '11111'),
(4, 'MANISH', 'KUMAR', 'Bihar,Patna', 'manish231@', '8734237680', 'male', '', '22222'),
(5, 'Ashutosh', 'Kumar', 'Delhi, Utter pradesh', 'ashu123@', '7689045321', 'male', 'india', '00000'),
(8, 'Sandeep', 'Kumar', 'Bihar, Gopalganj', 'sandeep123@', '7689045321', 'male', 'india', '333333'),
(9, '', '', '', '', '', '', '', ''),
(10, 'Raunak', 'Kumar', 'Pune, Maharasta', 'rkj342@gmail.com', '7689045321', '', 'india', '555555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
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
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
