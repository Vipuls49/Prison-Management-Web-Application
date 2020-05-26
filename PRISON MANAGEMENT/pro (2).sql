-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2019 at 07:32 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('Pinkman', 'METH123'),
('Omkar1802', 'OKT123');

-- --------------------------------------------------------

--
-- Table structure for table `prisoner`
--

CREATE TABLE `prisoner` (
  `Rid` int(11) NOT NULL,
  `p_name` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `doe` date DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `crimes` varchar(255) DEFAULT NULL,
  `dur` int(11) DEFAULT NULL,
  `wt` int(11) DEFAULT NULL,
  `ht` int(11) DEFAULT NULL,
  `addr` varchar(255) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prisoner`
--

INSERT INTO `prisoner` (`Rid`, `p_name`, `age`, `doe`, `dob`, `gender`, `crimes`, `dur`, `wt`, `ht`, `addr`, `country`, `state`) VALUES
(4153, 'kk', 45, '2019-09-24', '2019-09-24', 'm', 'robbery', 56, 67, 89, 'sandhurst Rd.\r\nMumbai', 'aus', 'goa'),
(8949, 'hitesh bangar', 67, '2019-09-23', '2019-09-23', 'm', '420', 12, 67, 67, 'Juinagar', 'usa', 'mh'),
(9886, 'Ayush Shetty', 20, '2019-09-02', '2019-09-01', 'm', 'low attendance', 78, 65, 143, 'Bhandup', 'in', 'mh');

-- --------------------------------------------------------

--
-- Table structure for table `relatives`
--

CREATE TABLE `relatives` (
  `Rid` int(11) NOT NULL,
  `Lawyer` varchar(50) DEFAULT NULL,
  `family_mem` varchar(255) DEFAULT NULL,
  `contact` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relatives`
--

INSERT INTO `relatives` (`Rid`, `Lawyer`, `family_mem`, `contact`) VALUES
(8949, 'Saul goodman', 'modre \r\npadre', '12345678'),
(4153, 'Nikhil Mandlik', 'Mother\r\nFather\r\nBrother', '2563148970'),
(9886, 'Saul goodman', 'mother \r\nfather', '8569321470');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Sid` int(11) NOT NULL,
  `s_name` varchar(255) DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `addr` varchar(255) DEFAULT NULL,
  `post` varchar(50) DEFAULT NULL,
  `shift` varchar(50) DEFAULT NULL,
  `contact` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `prisoner`
--
ALTER TABLE `prisoner`
  ADD PRIMARY KEY (`Rid`);

--
-- Indexes for table `relatives`
--
ALTER TABLE `relatives`
  ADD KEY `Rid` (`Rid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Sid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `relatives`
--
ALTER TABLE `relatives`
  ADD CONSTRAINT `relatives_ibfk_1` FOREIGN KEY (`Rid`) REFERENCES `prisoner` (`Rid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
