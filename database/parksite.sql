-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2023 at 09:51 PM
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
-- Database: `parksite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `seid` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`seid`, `email`, `pass`, `designation`) VALUES
(1, 'admin@gmail.com', 'adminadmin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingid` int(11) NOT NULL,
  `bStartTime` varchar(20) NOT NULL,
  `bEndTime` varchar(20) NOT NULL,
  `bDate` varchar(20) NOT NULL,
  `booktype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingid`, `bStartTime`, `bEndTime`, `bDate`, `booktype`) VALUES
(1, 'ased', 'ad', 'ad', 'ad'),
(4, '18:20', '22:20', '2023-09-12', 'Motorcycle'),
(5, '14:51', '16:55', '2023-09-02', 'Motorcycle');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `clientid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `nid` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `ctype` varchar(100) NOT NULL,
  `vo` int(11) DEFAULT NULL,
  `go` int(11) DEFAULT NULL,
  `s` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`clientid`, `name`, `email`, `pass`, `nid`, `phone`, `ctype`, `vo`, `go`, `s`) VALUES
(1, 'Anannya Preeta', 'preeta@gmail.com', 'anannyapreeta', 'AJ099234H89', '01937088321', 'Garage Owner', NULL, 1, NULL),
(2, 'Fardin Ahsan Shafi', 'fshafi@gmail.com', 'fardinshafi2020', 'AJ095634M62', '01983491729', 'Garage Owner', NULL, 2, NULL),
(3, 'Shanjidul Hasan Shajid', 'shajid.ascended@gmail.com', 'shajidhasan', 'AP028936M90', '01980485829', 'Garage Owner', NULL, 3, NULL),
(4, 'William Jefferson', 'wjefferson@gmail.com', 'wjefferson123', 'AK04924M92', '01739287290', 'Vehicle Owner', 1, NULL, NULL),
(5, 'Ayatullah Arefin', 'ayatarefin@gmail.com', 'ayatullah490', 'AK04709N34', '01846729639', 'Vehicle Owner', 2, NULL, NULL),
(6, 'Tamim Fatema', 'tfatemma@gmail.com', 'tamiiim134', 'AK04424R92', '01673829402', 'Supervisor', NULL, NULL, 1),
(7, 'Aktar Ali', 'ali@gmail.com', 'ali', '1234567834', '01111111111', 'Vehicle Owner', 3, NULL, NULL),
(8, 'Muktar Ali', 'ali@gmail.com', 'doldolmondol', '1234567891', '01111111111', 'Garage Owner', NULL, 4, NULL),
(9, 'Kala Jahangir', 'kalagolarmala@gmail.com', 'wfwfwf', '1234567834', '01111111111', 'Supervisor', NULL, NULL, 2),
(10, 'Sadio Mane', 'mane@gmail.com', 'werfgerfg', '1234567891', '01111111111', 'Garage Owner', NULL, 5, NULL),
(11, 'Mo Salah', 'salahgolarmala@gmail.com', 'doldolmondol', '1234567891', '01111111111', 'Vehicle Owner', 4, NULL, NULL),
(12, 'Joshna Halder', 'bdrmyjsna@gmail.com', 'doldolmondol', '1234567891', '01111111111', 'Supervisor', NULL, NULL, 3),
(13, 'Anannya Preeta', 'preeta@gmail.com', 'anannyapreeta', 'AJ099234H89', '01937088321', 'Garage Owner', NULL, 6, NULL),
(14, 'William Jefferson', 'wjefferson@gmail.com', 'wjefferson123', 'AK04924M92', '01739287290', 'Vehicle Owner', 5, NULL, NULL),
(15, 'Tamim Fatema', 'tfatemma@gmail.com', 'tamiiim134', 'AK04424R92', '01673829402', 'Supervisor', NULL, NULL, 4),
(16, 'Fardin Ahsan Shafi', 'fardin467@gmail.com', 'password', '1234567890', '1234567890', 'Supervisor', NULL, NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `phone`, `message`) VALUES
('William Jefferson Mondol', 'shovon2k2k@gmail.com', '01730138692', 'help me, im under the water'),
('Fardin Ahsan Shafi', 'fardin467@gmail.com', '0191199222', 'attention pickpockeeeeet'),
('Shanjidul Hasan Shajid', 'karode4067@khaxan.com', '0191199222', 'my thoughts are as empty as my ass');

-- --------------------------------------------------------

--
-- Table structure for table `earnings`
--

CREATE TABLE `earnings` (
  `user` varchar(20) NOT NULL,
  `cut` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `earnings`
--

INSERT INTO `earnings` (`user`, `cut`) VALUES
('company', 15),
('supervisor', 30),
('Garage Owner', 50);

-- --------------------------------------------------------

--
-- Table structure for table `garage`
--

CREATE TABLE `garage` (
  `garageid` int(11) NOT NULL,
  `garsize` varchar(100) NOT NULL,
  `garcap` varchar(100) NOT NULL,
  `garadr` varchar(100) NOT NULL,
  `aStartTime` varchar(100) DEFAULT NULL,
  `aEndTime` varchar(100) DEFAULT NULL,
  `aDate` varchar(100) DEFAULT NULL,
  `caraccept` int(11) DEFAULT NULL,
  `bikeaccept` int(11) DEFAULT NULL,
  `pickupaccept` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `garage`
--

INSERT INTO `garage` (`garageid`, `garsize`, `garcap`, `garadr`, `aStartTime`, `aEndTime`, `aDate`, `caraccept`, `bikeaccept`, `pickupaccept`) VALUES
(1, '300', '3', 'House number 22, Road number 4/A, Block C, Sector 15, Uttara, Dhaka Bangladesh ', '11:59', '11:59', '2023-09-26', NULL, NULL, NULL),
(2, '700', '7', 'House number 5, Road number 3, Taltola, Khilgaon, Dhaka ', '01:14', '02:14', '2023-09-08', NULL, NULL, NULL),
(3, '122', '1', 'House number 3, Road number 7/A, Dhupkhola, Gendaria, Dhaka', '11:17', '11:16', '2023-09-26', NULL, NULL, NULL),
(4, '200', '2', 'House number 4, Road number 8/V, Paltan, Dhaka', '01:55', '23:58', '2023-09-20', NULL, NULL, NULL),
(5, '400', '2', 'House 3, Road 6, Jahanginagar', '13:00', '18:00', '2023-09-02', NULL, NULL, NULL),
(6, '500', '5', 'House 6, Area 7', '01:00', '02:57', '2023-09-05', NULL, NULL, NULL),
(7, '800', '8', 'House 8, Nigarnagar', '22:28', '00:28', '2023-09-22', NULL, NULL, NULL),
(8, '200', '2', 'a road, Dhaka, Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL),
(9, '200', '2', 'a road, Dhaka, Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Uttara', '876 sqkm', 'House number 22, Road number 4/A, Block C, Sector 15, Uttara, Dhaka Bangladesh ', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `go`
--

CREATE TABLE `go` (
  `goid` int(11) NOT NULL,
  `supnid` varchar(30) NOT NULL,
  `garageid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `go`
--

INSERT INTO `go` (`goid`, `supnid`, `garageid`) VALUES
(1, 'BT098492H67', 1),
(2, 'BH045622H69', 2),
(3, 'BJ42069H54', 3),
(4, '1234567891', 8),
(5, '1234567891', 9),
(6, 'BT098492H67', 10);

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `city` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `base` float NOT NULL,
  `hourly` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`city`, `area`, `base`, `hourly`) VALUES
('Dhaka', 'Taltola', 100, 20),
('Dhaka', 'Komlapur', 100, 20),
('Dhaka', 'Dhupkhola', 100, 20),
('Dhaka', 'Shahajadpur', 100, 20),
('Dhaka', 'Bosundhara', 100, 20),
('Dhaka', 'Titipara', 100, 20),
('Dhaka', 'Golapbag', 100, 20),
('Dhaka', 'Basabo', 100, 20),
('Rajshahi', 'abc', 100, 20),
('Rajshahi', 'abc', 100, 20),
('Rajshahi', 'def', 100, 20),
('Rajshahi', 'hij', 100, 20),
('Rajshahi', 'klm', 100, 20);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `regid` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `regdate` date NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `nid` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `vtype` varchar(200) DEFAULT NULL,
  `vmodel` varchar(200) DEFAULT NULL,
  `vreg` varchar(200) DEFAULT NULL,
  `vlisc` varchar(200) DEFAULT NULL,
  `garsize` varchar(200) DEFAULT NULL,
  `garcap` varchar(200) DEFAULT NULL,
  `garadr` varchar(200) DEFAULT NULL,
  `supnid` varchar(200) DEFAULT NULL,
  `type` varchar(200) NOT NULL,
  `seid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`regid`, `status`, `regdate`, `name`, `email`, `pass`, `nid`, `phone`, `vtype`, `vmodel`, `vreg`, `vlisc`, `garsize`, `garcap`, `garadr`, `supnid`, `type`, `seid`) VALUES
(1, 1, '2023-08-31', 'Anannya Preeta', 'preeta@gmail.com', 'anannyapreeta', 'AJ099234H89', '01937088321', '', '', '', '', 'Uttara', '876 sqkm', 'House number 22, Road number 4/A, Block C, Sector 15, Uttara, Dhaka Bangladesh ', 'BT098492H67', 'Garage Owner', 1),
(3, 1, '2023-08-31', 'Fardin Ahsan Shafi', 'fshafi@gmail.com', 'fardinshafi2020', 'AJ095634M62', '01983491729', '', '', '', '', 'Taltola', '700sqkm', 'House number 5, Road number 3, Taltola, Khilgaon, Dhaka ', 'BH045622H69', 'Garage Owner', 1),
(4, 1, '2023-08-31', 'Shanjidul Hasan Shajid', 'shajid.ascended@gmail.com', 'shajidhasan', 'AP028936M90', '01980485829', '', '', '', '', 'Dhupkhola', '500sqkm', 'House number 3, Road number 7/A, Dhupkhola, Gendaria, Dhaka', 'BJ42069H54', 'Garage Owner', 1),
(5, 1, '2023-08-31', 'William Jefferson', 'wjefferson@gmail.com', 'wjefferson123', 'AK04924M92', '01739287290', 'Car', 'Toyota Corolla X', 'AH098V87MM', '123 456 789', '', '', '', '', 'Vehicle Owner', 1),
(6, 1, '2023-08-31', 'Ayatullah Arefin', 'ayatarefin@gmail.com', 'ayatullah490', 'AK04709N34', '01846729639', 'Motorcycle', 'Honda SP160', 'AH891J45MX', '234 678 123', '', '', '', '', 'Vehicle Owner', 1),
(7, 1, '2023-08-31', 'Tamim Fatema', 'tfatemma@gmail.com', 'tamiiim134', 'AK04424R92', '01673829402', '', '', '', '', '', '', '', '', 'Supervisor', 1),
(8, 1, '2023-09-01', 'Aktar Ali', 'ali@gmail.com', 'ali', '1234567834', '01111111111', 'Car', 'Pajero', '1234567890', '1234567890', '', '', '', '', 'Vehicle Owner', 1),
(9, 1, '2023-09-01', 'Muktar Ali', 'ali@gmail.com', 'doldolmondol', '1234567891', '01111111111', '', '', '', '', '200', '2', 'a road, Dhaka, Bangladesh', '1234567891', 'Garage Owner', 1),
(10, 1, '2023-09-01', 'Kala Jahangir', 'kalagolarmala@gmail.com', 'wfwfwf', '1234567834', '01111111111', '', '', '', '', '', '', '', '', 'Supervisor', 1),
(11, 1, '2023-09-01', 'Sadio Mane', 'mane@gmail.com', 'werfgerfg', '1234567891', '01111111111', '', '', '', '', '200', '2', 'a road, Dhaka, Bangladesh', '1234567891', 'Garage Owner', 1),
(12, 1, '2023-09-01', 'Mo Salah', 'salahgolarmala@gmail.com', 'doldolmondol', '1234567891', '01111111111', 'Car', 'Pajero', '1234567890', '1234567890', '', '', '', '', 'Vehicle Owner', 1),
(13, 1, '2023-09-01', 'Joshna Halder', 'bdrmyjsna@gmail.com', 'doldolmondol', '1234567891', '01111111111', '', '', '', '', '', '', '', '', 'Supervisor', 1),
(14, 1, '2023-09-01', 'Fardin Ahsan Shafi', 'fardin467@gmail.com', 'password', '1234567890', '1234567890', '', '', '', '', '', '', '', '', 'Supervisor', 1);

-- --------------------------------------------------------

--
-- Table structure for table `super`
--

CREATE TABLE `super` (
  `sid` int(11) NOT NULL,
  `workhrs` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `super`
--

INSERT INTO `super` (`sid`, `workhrs`) VALUES
(1, '2'),
(2, '2'),
(3, '2'),
(4, '2'),
(5, '2');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicleid` int(11) NOT NULL,
  `vehicleType` varchar(100) NOT NULL,
  `vehicleModel` varchar(32) NOT NULL,
  `vehicleReg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehicleid`, `vehicleType`, `vehicleModel`, `vehicleReg`) VALUES
(1, 'Car', 'Toyota Corolla X', 'AH098V87MM'),
(2, 'Motorcycle', 'Honda SP160', 'AH891J45MX'),
(3, 'Car', 'Pajero', '1234567890'),
(4, 'Car', 'Pajero', '1234567890'),
(5, 'Car', 'Toyota Corolla X', 'AH098V87MM');

-- --------------------------------------------------------

--
-- Table structure for table `vo`
--

CREATE TABLE `vo` (
  `void` int(11) NOT NULL,
  `licenseNo` varchar(30) NOT NULL,
  `vehicleid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vo`
--

INSERT INTO `vo` (`void`, `licenseNo`, `vehicleid`) VALUES
(1, '123 456 789', 1),
(2, '234 678 123', 2),
(3, '1234567890', 3),
(4, '1234567890', 4),
(5, '123 456 789', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`seid`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`clientid`),
  ADD KEY `fk_vo_void` (`vo`),
  ADD KEY `fk_go_goid` (`go`),
  ADD KEY `fk_s_sid` (`s`);

--
-- Indexes for table `garage`
--
ALTER TABLE `garage`
  ADD PRIMARY KEY (`garageid`);

--
-- Indexes for table `go`
--
ALTER TABLE `go`
  ADD PRIMARY KEY (`goid`),
  ADD KEY `fk_garageid_garageid` (`garageid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`regid`),
  ADD KEY `fk_seid_seid` (`seid`);

--
-- Indexes for table `super`
--
ALTER TABLE `super`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicleid`);

--
-- Indexes for table `vo`
--
ALTER TABLE `vo`
  ADD PRIMARY KEY (`void`),
  ADD KEY `fk_vehicleid_vehicleid` (`vehicleid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `seid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `clientid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `garage`
--
ALTER TABLE `garage`
  MODIFY `garageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `go`
--
ALTER TABLE `go`
  MODIFY `goid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `regid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `super`
--
ALTER TABLE `super`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vehicleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vo`
--
ALTER TABLE `vo`
  MODIFY `void` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `fk_go_goid` FOREIGN KEY (`go`) REFERENCES `go` (`goid`),
  ADD CONSTRAINT `fk_s_sid` FOREIGN KEY (`s`) REFERENCES `super` (`sid`),
  ADD CONSTRAINT `fk_vo_void` FOREIGN KEY (`vo`) REFERENCES `vo` (`void`);

--
-- Constraints for table `go`
--
ALTER TABLE `go`
  ADD CONSTRAINT `fk_garageid_garageid` FOREIGN KEY (`garageid`) REFERENCES `garage` (`garageid`);

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `fk_seid_seid` FOREIGN KEY (`seid`) REFERENCES `admin` (`seid`);

--
-- Constraints for table `vo`
--
ALTER TABLE `vo`
  ADD CONSTRAINT `fk_vehicleid_vehicleid` FOREIGN KEY (`vehicleid`) REFERENCES `vehicle` (`vehicleid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
