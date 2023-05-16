-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2022 at 03:22 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcm`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `ID` int(11) NOT NULL,
  `motto` text NOT NULL,
  `About` text NOT NULL,
  `Address` text NOT NULL,
  `email` text NOT NULL,
  `contact` text NOT NULL,
  `year` int(11) NOT NULL,
  `company_description` text NOT NULL,
  `company_motto` text NOT NULL,
  `company_vision` text NOT NULL,
  `theme` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`ID`, `motto`, `About`, `Address`, `email`, `contact`, `year`, `company_description`, `company_motto`, `company_vision`, `theme`) VALUES
(1, 'Quality and Affordable', 'We sale phones, laptops and different other assessories which are afforadable and of high quality.', 'P.o Box 530138 35345', 'mwanzamaxwell.mm@gmail.com', '+260977399513', 2022, 'Maxcity merchandise is a public utility that provides phone services. We supply phones and all phone accessories. We offer quality products for less budget, and also perform public services at a lower price.', 'come for the phone, stay for the price ', 'To supply quality phones with the best network to our customers at all times as well as to assist them in having better phones.', 'light');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `admin` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `admin`, `password`) VALUES
(123, 'chileshe', 'abraham');

-- --------------------------------------------------------

--
-- Table structure for table `airpods`
--

CREATE TABLE `airpods` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` text NOT NULL,
  `latest` text NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `tname` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airpods`
--

INSERT INTO `airpods` (`ID`, `name`, `price`, `latest`, `description`, `img`, `tname`) VALUES
(3, 'Airpods', '134', 'New', 'Since We Have A Square Root Assigned To The Numerator, It Means That The Possible Values Of X That We Can Use Is Any Number That Will Result In The Evaluations Of The Inside Expression Being Equal To 0 Or Greater. So Possible Values Of X Will Be 6 To Infinity Âˆž', 'images/airpods/airpods-32430 (1).png', 'airpods');

-- --------------------------------------------------------

--
-- Table structure for table `assessories`
--

CREATE TABLE `assessories` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `latest` text NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `tname` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assessories`
--

INSERT INTO `assessories` (`ID`, `name`, `price`, `latest`, `description`, `img`, `tname`) VALUES
(4, 'Usb C', 200, 'New', 'Usb', 'images/assessories/pngegg.png', 'assessories');

-- --------------------------------------------------------

--
-- Table structure for table `cameras`
--

CREATE TABLE `cameras` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` text NOT NULL,
  `latest` text NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `tname` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cameras`
--

INSERT INTO `cameras` (`ID`, `name`, `price`, `latest`, `description`, `img`, `tname`) VALUES
(3, 'Hd Camera', '2233', 'Brand New', 'Hd', 'images/cameras/24673-5-photo-camera.png', 'cameras');

-- --------------------------------------------------------

--
-- Table structure for table `gaming`
--

CREATE TABLE `gaming` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `latest` text NOT NULL,
  `img` text NOT NULL,
  `tname` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gaming`
--

INSERT INTO `gaming` (`ID`, `name`, `price`, `description`, `latest`, `img`, `tname`) VALUES
(7, 'X-box 360', 2233, 'Xbox', 'New', 'images/gaming/xbox.png', 'gaming'),
(6, 'Ps4', 5000, 'Ps4', 'New', 'images/gaming/ps4.png', 'gaming'),
(8, 'Controller', 2233, 'Hel', 'Brand New', 'images/gaming/c.png', 'gaming');

-- --------------------------------------------------------

--
-- Table structure for table `iphone_batteries`
--

CREATE TABLE `iphone_batteries` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` text NOT NULL,
  `latest` text NOT NULL,
  `img` text NOT NULL,
  `tname` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iphone_batteries`
--

INSERT INTO `iphone_batteries` (`ID`, `name`, `description`, `price`, `latest`, `img`, `tname`) VALUES
(5, 'Iphone 6 Battery', 'Since We Have A Square Root Assigned To The Numerator, It Means That The Possible Values Of X That We Can Use Is Any Number That Will Result In The Evaluations Of The Inside Expression Being Equal To 0 Or Greater. So Possible Values Of X Will Be 6 To Infinity Âˆž', '400', 'New', 'images/iphone_batteries/i6bat.png', 'iphone_batteries');

-- --------------------------------------------------------

--
-- Table structure for table `iwatches`
--

CREATE TABLE `iwatches` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `latest` text NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `tname` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iwatches`
--

INSERT INTO `iwatches` (`ID`, `name`, `price`, `latest`, `description`, `img`, `tname`) VALUES
(12, 'Iwatch 2', 400, 'New', 'Since We Have A Square Root Assigned To The Numerator, It Means That The Possible Values Of X That We Can Use Is Any Number That Will Result In The Evaluations Of The Inside Expression Being Equal To 0 Or Greater. So Possible Values Of X Will Be 6 To Infinity Âˆž', 'images/iwatches/iwatch2.png', 'iwatches'),
(11, 'Iwatch 5', 600, 'New', 'Since We Have A Square Root Assigned To The Numerator, It Means That The Possible Values Of X That We Can Use Is Any Number That Will Result In The Evaluations Of The Inside Expression Being Equal To 0 Or Greater. So Possible Values Of X Will Be 6 To Infinity Âˆž', 'images/iwatches/iwatch1.png', 'iwatches'),
(13, 'Iwatch 3', 500, 'Brand New', 'Since We Have A Square Root Assigned To The Numerator, It Means That The Possible Values Of X That We Can Use Is Any Number That Will Result In The Evaluations Of The Inside Expression Being Equal To 0 Or Greater. So Possible Values Of X Will Be 6 To Infinity Âˆž', 'images/iwatches/iwatch3.png', 'iwatches');

-- --------------------------------------------------------

--
-- Table structure for table `laptops`
--

CREATE TABLE `laptops` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `latest` text NOT NULL,
  `img` text NOT NULL,
  `tname` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptops`
--

INSERT INTO `laptops` (`ID`, `name`, `description`, `price`, `latest`, `img`, `tname`) VALUES
(9, 'Toshiba', 'Asus', 2233, 'New', 'images/laptops/acer.png', 'laptops'),
(8, 'Predator X', 'Dell', 2233, 'Brand New', 'images/laptops/dell.png', 'laptops'),
(7, 'Acer', 'Thje', 2000, 'Brand New', 'images/laptops/toshiba.png', 'laptops');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `date` text NOT NULL,
  `new` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE `phones` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `latest` text NOT NULL,
  `RAM` int(11) NOT NULL,
  `Memory` int(11) NOT NULL,
  `img` text NOT NULL,
  `tname` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`ID`, `name`, `price`, `description`, `latest`, `RAM`, `Memory`, `img`, `tname`) VALUES
(42, 'Iphone 12', 12000, 'Since We Have A Square Root Assigned To The Numerator, It Means That The Possible Values Of X That We Can Use Is Any Number That Will Result In The Evaluations Of The Inside Expression Being Equal To 0 Or Greater. So Possible Values Of X Will Be 6 To Infinity Âˆž', 'Brand New', 1231, 123, 'images/phones/iphone 12.png', 'phones'),
(41, 'Iphone 11', 6000, 'Since We Have A Square Root Assigned To The Numerator, It Means That The Possible Values Of X That We Can Use Is Any Number That Will Result In The Evaluations Of The Inside Expression Being Equal To 0 Or Greater. So Possible Values Of X Will Be 6 To Infinity Âˆž', 'Old', 123, 123, 'images/phones/iphone 11.png', 'phones'),
(38, 'Iphone 6', 3000, 'Since We Have A Square Root Assigned To The Numerator, It Means That The Possible Values Of X That We Can Use Is Any Number That Will Result In The Evaluations Of The Inside Expression Being Equal To 0 Or Greater. So Possible Values Of X Will Be 6 To Infinity Âˆž', 'New', 123, 123, 'images/phones/iphone 11.png', 'phones'),
(39, 'Iphone 8', 4000, 'Since We Have A Square Root Assigned To The Numerator, It Means That The Possible Values Of X That We Can Use Is Any Number That Will Result In The Evaluations Of The Inside Expression Being Equal To 0 Or Greater. So Possible Values Of X Will Be 6 To Infinity Âˆž', 'Brand New', 123, 123, 'images/phones/iphone 8.png', 'phones');

-- --------------------------------------------------------

--
-- Table structure for table `reserves`
--

CREATE TABLE `reserves` (
  `ID` int(11) NOT NULL,
  `cname` text NOT NULL,
  `cemail` text NOT NULL,
  `cphone` text NOT NULL,
  `cdescription` text NOT NULL,
  `Proname` text NOT NULL,
  `proprice` text NOT NULL,
  `prodescription` text NOT NULL,
  `date` text NOT NULL,
  `new` text NOT NULL,
  `img` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserves`
--

INSERT INTO `reserves` (`ID`, `cname`, `cemail`, `cphone`, `cdescription`, `Proname`, `proprice`, `prodescription`, `date`, `new`, `img`) VALUES
(23, 'Chileshe', 'chileshemwape@gmail.com', '2723923', 'H', 'Controller', ' 2233', ' Hel', 'Sunday, Feb-06-2022, 16:24 ', '0', 'images/gaming/c.png'),
(24, 'Abtaham Chileshe', 'achileshe2@gmail.come', '0962510753', 'Hdd', 'Iphone 12', ' 12000', ' Since We Have A Square Root Assigned To The Numerator, It Means That The Possible Values Of X That We Can Use Is Any Number That Will Result In The Evaluations Of The Inside Expression Being Equal To 0 Or Greater. So Possible Values Of X Will Be 6 To Infinity Âˆž', 'Tuesday, Feb-08-2022, 4:44 ', '0', 'images/phones/iphone 12.png'),
(22, 'Chileshe', 'chileshemwape@gmail.com', '2723923', '', 'Iphone 8', ' 4000', ' Since We Have A Square Root Assigned To The Numerator, It Means That The Possible Values Of X That We Can Use Is Any Number That Will Result In The Evaluations Of The Inside Expression Being Equal To 0 Or Greater. So Possible Values Of X Will Be 6 To Infinity Âˆž', 'Sunday, Feb-06-2022, 16:03 ', '0', 'images/phones/iphone 8.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `year` (`year`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `airpods`
--
ALTER TABLE `airpods`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `assessories`
--
ALTER TABLE `assessories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cameras`
--
ALTER TABLE `cameras`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gaming`
--
ALTER TABLE `gaming`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `iphone_batteries`
--
ALTER TABLE `iphone_batteries`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `iwatches`
--
ALTER TABLE `iwatches`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `laptops`
--
ALTER TABLE `laptops`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
--
-- AUTO_INCREMENT for table `airpods`
--
ALTER TABLE `airpods`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `assessories`
--
ALTER TABLE `assessories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cameras`
--
ALTER TABLE `cameras`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gaming`
--
ALTER TABLE `gaming`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `iphone_batteries`
--
ALTER TABLE `iphone_batteries`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `iwatches`
--
ALTER TABLE `iwatches`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `laptops`
--
ALTER TABLE `laptops`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `phones`
--
ALTER TABLE `phones`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `reserves`
--
ALTER TABLE `reserves`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
