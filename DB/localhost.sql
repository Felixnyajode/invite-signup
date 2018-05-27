-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 04, 2018 at 02:24 AM
-- Server version: 5.7.21
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fickle500`
--
CREATE DATABASE IF NOT EXISTS `palasekx_fickle500` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `palasekx_fickle500`;

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `ID` int(6) NOT NULL,
  `NAME` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `PHNO` varchar(20) DEFAULT NULL,
  `UNIQLINK` varchar(50) DEFAULT NULL,
  `DATELOG` date DEFAULT NULL,
  `STATUS` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `applicationdetail`
--

CREATE TABLE `applicationdetail` (
  `ID` int(11) NOT NULL,
  `Age` int(11) DEFAULT NULL,
  `Sex` varchar(1) DEFAULT NULL,
  `CountryOrigin` varchar(150) DEFAULT NULL,
  `Profession` varchar(150) DEFAULT NULL,
  `MediaOrNo` varchar(1) DEFAULT NULL,
  `Portfolio` varchar(500) DEFAULT NULL,
  `AnnualIncome` text,
  `SocialMedia` varchar(300) DEFAULT NULL,
  `Passion` varchar(250) DEFAULT NULL,
  `CountriesTravelled` int(3) DEFAULT NULL,
  `UniqueTrait` varchar(500) DEFAULT NULL,
  `Offer` varchar(500) DEFAULT NULL,
  `HouseParty` varchar(250) DEFAULT NULL,
  `FriendsThink` varchar(500) DEFAULT NULL,
  `EmbarassingMoment` varchar(500) DEFAULT NULL,
  `Achievement` varchar(500) DEFAULT NULL,
  `OutFit` varchar(500) DEFAULT NULL,
  `SadActivity` varchar(500) DEFAULT NULL,
  `MostCrazyAdven` varchar(500) DEFAULT NULL,
  `FavSocialActivity` varchar(500) DEFAULT NULL,
  `datelog` date DEFAULT NULL,
  `uniqlink` varchar(50) DEFAULT NULL,
  `submitted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `applicationdetaildev`
--

CREATE TABLE `applicationdetaildev` (
  `ID` int(11) NOT NULL,
  `Age` int(11) DEFAULT NULL,
  `Sex` varchar(1) DEFAULT NULL,
  `CountryOrigin` varchar(150) DEFAULT NULL,
  `Profession` varchar(150) DEFAULT NULL,
  `MediaOrNo` varchar(1) DEFAULT NULL,
  `Portfolio` varchar(500) DEFAULT NULL,
  `AnnualIncome` text,
  `SocialMedia` varchar(300) DEFAULT NULL,
  `Passion` varchar(250) DEFAULT NULL,
  `CountriesTravelled` int(3) DEFAULT NULL,
  `UniqueTrait` varchar(500) DEFAULT NULL,
  `Offer` varchar(500) DEFAULT NULL,
  `HouseParty` varchar(250) DEFAULT NULL,
  `FriendsThink` varchar(500) DEFAULT NULL,
  `EmbarassingMoment` varchar(500) DEFAULT NULL,
  `Achievement` varchar(500) DEFAULT NULL,
  `OutFit` varchar(500) DEFAULT NULL,
  `SadActivity` varchar(500) DEFAULT NULL,
  `MostCrazyAdven` varchar(500) DEFAULT NULL,
  `FavSocialActivity` varchar(500) DEFAULT NULL,
  `datelog` date DEFAULT NULL,
  `uniqlink` varchar(50) DEFAULT NULL,
  `submitted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applicationdetaildev`
--

INSERT INTO `applicationdetaildev` (`ID`, `Age`, `Sex`, `CountryOrigin`, `Profession`, `MediaOrNo`, `Portfolio`, `AnnualIncome`, `SocialMedia`, `Passion`, `CountriesTravelled`, `UniqueTrait`, `Offer`, `HouseParty`, `FriendsThink`, `EmbarassingMoment`, `Achievement`, `OutFit`, `SadActivity`, `MostCrazyAdven`, `FavSocialActivity`, `datelog`, `uniqlink`, `submitted`) VALUES
(8, 27, 'F', 'Indi', '1', '1', '1', '1', '1', '11', 1, '1', '1', '1', '1', '1', '11', '1', '1', '1', '1', '2018-05-04', '8QRwCU', 1);

-- --------------------------------------------------------

--
-- Table structure for table `applicationdev`
--

CREATE TABLE `applicationdev` (
  `ID` int(6) NOT NULL,
  `NAME` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `PHNO` varchar(20) DEFAULT NULL,
  `UNIQLINK` varchar(50) DEFAULT NULL,
  `DATELOG` date DEFAULT NULL,
  `STATUS` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applicationdev`
--

INSERT INTO `applicationdev` (`ID`, `NAME`, `EMAIL`, `PHNO`, `UNIQLINK`, `DATELOG`, `STATUS`) VALUES
(21, 'Palash', 'p@abc.com', '98908', '8QRwCU', '2018-05-04', 'APP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `applicationdetail`
--
ALTER TABLE `applicationdetail`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `applicationdetaildev`
--
ALTER TABLE `applicationdetaildev`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `applicationdev`
--
ALTER TABLE `applicationdev`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `applicationdetail`
--
ALTER TABLE `applicationdetail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `applicationdetaildev`
--
ALTER TABLE `applicationdetaildev`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `applicationdev`
--
ALTER TABLE `applicationdev`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
