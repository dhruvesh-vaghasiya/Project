-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 02, 2023 at 10:02 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20323457_courier123`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `Bid` char(5) NOT NULL,
  `Bname` varchar(15) NOT NULL,
  `Bcno` varchar(10) NOT NULL,
  `Bcity` varchar(10) NOT NULL,
  `Bemail` varchar(30) NOT NULL,
  `Badd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`Bid`, `Bname`, `Bcno`, `Bcity`, `Bemail`, `Badd`) VALUES
('B001', 'Nadiad', '9856985632', 'Nadiad', 'nadiadcourierguy@gmail.com', 'Nadiad');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Eid` char(5) NOT NULL,
  `Ename` varchar(15) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Ecno` varchar(10) NOT NULL,
  `Eemail` varchar(50) NOT NULL,
  `Eadd` varchar(20) NOT NULL,
  `Post` varchar(10) NOT NULL,
  `Bid` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Eid`, `Ename`, `Password`, `Ecno`, `Eemail`, `Eadd`, `Post`, `Bid`) VALUES
('E001', 'Admin', 'admin11', '7894561258', 'albertruffin639@gmail.com', 'Nadiad', 'Admin', 'B001'),
('E002', 'Rishi', 'rishi11', '7456985361', 'boosterhealth49@gmail.com', 'vvn', 'Manager', 'B001');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Pid` char(5) NOT NULL,
  `Description` varchar(15) NOT NULL,
  `Weight` varchar(5) NOT NULL,
  `Price` varchar(5) NOT NULL,
  `Date` date NOT NULL,
  `Sid` char(5) NOT NULL,
  `Rid` char(5) NOT NULL,
  `Bid` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE `receiver` (
  `Rid` char(5) NOT NULL,
  `Rname` varchar(15) NOT NULL,
  `Rcno` varchar(10) NOT NULL,
  `Rcity` varchar(10) NOT NULL,
  `Remail` varchar(30) NOT NULL,
  `Radd` varchar(20) NOT NULL,
  `Rpin` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sender`
--

CREATE TABLE `sender` (
  `Sid` char(5) NOT NULL,
  `Sname` varchar(15) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Scno` varchar(10) NOT NULL,
  `Scity` varchar(10) NOT NULL,
  `Semail` varchar(30) NOT NULL,
  `Sadd` varchar(20) NOT NULL,
  `Spin` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sender`
--

INSERT INTO `sender` (`Sid`, `Sname`, `Password`, `Scno`, `Scity`, `Semail`, `Sadd`, `Spin`) VALUES
('S0001', 'Parv', 'parv11', '9797979797', 'Nadiad', 'rohitrohan11114@gmail.com', 'Nadiad', '387002');

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE `tracking` (
  `Bid` char(5) NOT NULL,
  `Pid` char(10) NOT NULL,
  `Date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `weight`
--

CREATE TABLE `weight` (
  `Wid` char(5) NOT NULL,
  `W_from` varchar(10) NOT NULL,
  `W_to` varchar(10) NOT NULL,
  `Price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`Bid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Eid`),
  ADD UNIQUE KEY `Ename` (`Ename`),
  ADD KEY `Bid` (`Bid`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`Pid`),
  ADD KEY `Sid` (`Sid`,`Rid`,`Bid`),
  ADD KEY `bbid` (`Bid`),
  ADD KEY `rid` (`Rid`);

--
-- Indexes for table `receiver`
--
ALTER TABLE `receiver`
  ADD PRIMARY KEY (`Rid`);

--
-- Indexes for table `sender`
--
ALTER TABLE `sender`
  ADD PRIMARY KEY (`Sid`),
  ADD UNIQUE KEY `Sname` (`Sname`);

--
-- Indexes for table `tracking`
--
ALTER TABLE `tracking`
  ADD PRIMARY KEY (`Bid`,`Pid`),
  ADD KEY `Bid` (`Bid`,`Pid`),
  ADD KEY `pid` (`Pid`);

--
-- Indexes for table `weight`
--
ALTER TABLE `weight`
  ADD PRIMARY KEY (`Wid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `bid` FOREIGN KEY (`Bid`) REFERENCES `branch` (`Bid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `package`
--
ALTER TABLE `package`
  ADD CONSTRAINT `bbid` FOREIGN KEY (`Bid`) REFERENCES `branch` (`Bid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rid` FOREIGN KEY (`Rid`) REFERENCES `receiver` (`Rid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sid` FOREIGN KEY (`Sid`) REFERENCES `sender` (`Sid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tracking`
--
ALTER TABLE `tracking`
  ADD CONSTRAINT `biid` FOREIGN KEY (`Bid`) REFERENCES `branch` (`Bid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pid` FOREIGN KEY (`Pid`) REFERENCES `package` (`Pid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
