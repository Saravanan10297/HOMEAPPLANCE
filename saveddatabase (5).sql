-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 25, 2024 at 12:20 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saveddatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `BrandName` varchar(100) NOT NULL,
  `CertifiedId` varchar(100) NOT NULL,
  `SupplyBranch` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `BrandName`, `CertifiedId`, `SupplyBranch`, `Status`) VALUES
(1, 'SamSung', '001,002', 'Chennai & Madurai', '1'),
(2, 'LG', '002', 'Madurai', '1'),
(3, 'WhirlPool', '003', 'Salem', '1'),
(4, 'Dell', '004', 'Erode', '1'),
(5, 'Onido', '005', 'Coimbatore', '1'),
(25, 'Nokia', '008', 'Madurai', '1'),
(24, 'Samsung', '006', 'Ooty ', '1'),
(26, 'Samsung', 'CI-003', 'Salem', '1');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `Model_Name` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Colour` varchar(100) NOT NULL,
  `Capacity` varchar(100) NOT NULL,
  `Brand_id` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Quantity` varchar(100) NOT NULL,
  `User_id` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `Model_Name`, `Price`, `Colour`, `Capacity`, `Brand_id`, `Image`, `Quantity`, `User_id`, `Status`) VALUES
(1, '', '', '', '', '', '', '', '', '0'),
(2, 'Tv', '10000', 'Black', '43inch', '1', 'tv.jfif', '1', '1', '3'),
(3, '', '', '', '', '', '', '', '', '0'),
(4, 'Laptop', '65000', 'Purple', '512GB', '5', 'hp.jpg', '1', '1', '3'),
(5, '', '', '', '', '', '', '', '', '0'),
(6, 'Tv', '10000', 'Black', '43inch', '1', 'tv.jfif', '1', '1', '2'),
(7, 'Tv', '10000', 'Black', '43inch', '1', 'tv.jfif', '1', '1', '3'),
(8, '', '', '', '', '', '', '', '', '0'),
(9, 'Tv', '10000', 'Black', '43inch', '1', 'tv.jfif', '1', '1', '3'),
(10, '', '', '', '', '', '', '', '', '0'),
(11, '', '', '', '', '', '', '', '', '0'),
(12, '', '', '', '', '', '', '', '', '0'),
(13, 'Laptop', '35000', 'Black', '512GB', '24', 'laptop.png', '1', '2', '1'),
(14, 'Laptop', '35000', 'Black', '512GB', '24', 'laptop.png', '1', '2', '2'),
(15, '', '', '', '', '', '', '', '', '0'),
(16, 'Tv', '10000', 'Black', '43inch', '1', 'tv.jfif', '1', '1', '1'),
(17, '', '', '', '', '', '', '', '', '0'),
(18, '', '', '', '', '', '', '', '', '0'),
(19, '', '', '', '', '', '', '', '', '0'),
(20, 'Laptop', '35000', 'Black', '512GB', '4', 'laptop.png', '1', '1', '1'),
(21, '', '', '', '', '', '', '', '', '0'),
(22, '', '', '', '', '', '', '', '', '0'),
(23, 'Fan', '8000', 'Blue', '55-100WT', '1', 'Fann.jfif', '1', '1', '1'),
(24, '', '', '', '', '', '', '', '', '0'),
(25, 'Air Cooler', '15000', 'White', '2liter', '2', 'Air.jfif', '1', '1', '1'),
(26, '', '', '', '', '', '', '', '', '0'),
(27, 'Air Cooler', '15000', 'White', '2liter', '2', 'Air.jfif', '1', '1', '3'),
(28, '', '', '', '', '', '', '', '', '0'),
(29, 'Tv', '10000', 'Black', '43inch', '1', 'tv.jfif', '1', '1', '3'),
(30, '', '', '', '', '', '', '', '', '0'),
(31, 'Laptop', '35000', 'Black', '512GB', '24', 'laptop.png', '1', '1', '3'),
(32, '', '', '', '', '', '', '', '', '0'),
(33, 'Water Bottle', '1000', 'Gray', '2 liter', '3', 'water bottle.jfif', '1', '12', '1'),
(34, 'Water Bottle', '1000', 'Gray', '2 liter', '3', 'water bottle.jfif', '1', '12', '1'),
(35, '', '', '', '', '', '', '', '', '0'),
(36, 'Water Bottle', '1000', 'Gray', '2 liter', '3', 'water bottle.jfif', '1', '1', '3'),
(37, '', '', '', '', '', '', '', '', '0'),
(38, 'AC', '30000', 'White', '1.5ton', '1', 'Ac.png', '1', '1', '3'),
(39, '', '', '', '', '', '', '', '', '0'),
(40, 'Laptop', '35000', 'Black', '512GB', '24', 'laptop.png', '1', '1', '1'),
(41, '', '', '', '', '', '', '', '', '0'),
(42, 'Mixer', '20000', 'Blue', 'jar 4.5 liter', '3', 'mixer.jfif', '1', '1', '1'),
(43, '', '', '', '', '', '', '', '', '0'),
(44, 'Air Cooler', '15000', 'White', '2liter', '2', 'Air.jfif', '1', '1', '1'),
(45, '', '', '', '', '', '', '', '', '0'),
(46, 'Tv', '10000', 'Black', '43inch', '1', 'tv.jfif', '1', '1', '3'),
(47, '', '', '', '', '', '', '', '', '0'),
(48, 'Fridge', '35000', 'Gray', '120-130 Cubic feet', '3', 'frideg.jfif', '1', '1', '2'),
(49, '', '', '', '', '', '', '', '', '0'),
(50, 'AC', '30000', 'White', '1.5ton', '1', 'Ac.png', '1', '1', '2'),
(51, '', '', '', '', '', '', '', '', '0'),
(52, 'Fridge', '35000', 'Gray', '120-130 Cubic feet', '3', 'frideg.jfif', '1', '1', '1'),
(53, '', '', '', '', '', '', '', '', '0'),
(54, 'Key Board', '8000', 'Black', '103 keys', '5', 'key.jfif', '1', '14', '1'),
(55, '', '', '', '', '', '', '', '', '0'),
(56, '', '', '', '', '', '', '', '', '0'),
(57, '', '', '', '', '', '', '', '', '0'),
(58, 'Ac', '30000', 'White', '2ton', '5', 'images.jfif', '1', '14', '0'),
(59, '', '', '', '', '', '', '', '', '0'),
(60, 'Stove', '14000', 'Black', '1000Wt', '3', 'stove.jfif', '1', '14', '2'),
(61, '', '', '', '', '', '', '', '', '0'),
(62, 'Fridge', '35000', 'Gray', '120-130 Cubic feet', '3', 'frideg.jfif', '1', '6', '1'),
(63, '', '', '', '', '', '', '', '', '0'),
(64, 'Tv', '10000', 'Black', '43inch', '1', 'tv.jfif', '1', '15', '3'),
(65, '', '', '', '', '', '', '', '', '0'),
(66, 'Laptop', '35000', 'Black', '512GB', '24', 'laptop.png', '1', '1', '1'),
(67, '', '', '', '', '', '', '', '', '0'),
(68, 'Laptop', '65000', 'Purple', '512GB', '5', 'hp.jpg', '1', '1', '1'),
(69, '', '', '', '', '', '', '', '', '0'),
(70, 'Laptop', '35000', 'Black', '512GB', '4', 'laptop.png', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

DROP TABLE IF EXISTS `model`;
CREATE TABLE IF NOT EXISTS `model` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `Model_Name` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Colour` varchar(100) NOT NULL,
  `Capacity` varchar(100) NOT NULL,
  `Brand_id` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`id`, `Model_Name`, `Price`, `Colour`, `Capacity`, `Brand_id`, `Image`, `Status`) VALUES
(1, 'Tv', '10000', 'Black', '43inch', '1', 'tv.jfif', '1'),
(2, 'Heater', '10000', 'White', '2pounds Heat', '1', 'heater.png', '1'),
(3, 'Fan', '8000', 'Blue', '55-100WT', '1', 'Fann.jfif', '1'),
(4, 'AC', '30000', 'White', '1.5ton', '1', 'Ac.png', '1'),
(5, 'Mobile', '35000', 'White', '5G', '1', 'mobile.jpg', '2'),
(6, 'Air Cooler', '15000', 'White', '2liter', '2', 'Air.jfif', '1'),
(7, 'Laptop', '30000', 'Black', '512GB', '2', 'laptop.png', '1'),
(8, 'Dish Washer', '35000', 'Gray', '120-150 things', '2', 'dish wasg.jfif', '1'),
(9, 'Washing Machine', '35000', 'Gray', '5-6 liter', '2', 'machine.png', '2'),
(10, 'Laptop', '65000', 'Purple', '512GB', '2', 'hp.jpg', '2'),
(11, 'Fridge', '35000', 'Gray', '120-130 Cubic feet', '3', 'frideg.jfif', '1'),
(12, 'Cooker', '10000', 'Gray', '2 liter', '3', 'cooker.jfif', '2'),
(13, 'Stove', '14000', 'Black', '1000Wt', '3', 'stove.jfif', '1'),
(14, 'Mixer', '20000', 'Blue', 'jar 4.5 liter', '3', 'mixer.jfif', '1'),
(15, 'Laptop', '35000', 'Black', '512GB', '4', 'laptop.png', '1'),
(16, 'Speaker', '15000', 'Black', '25HZ', '4', 'Speaker.jfif', '1'),
(17, 'juicer', '14000', 'Orange', '1.1 liter', '4', 'juicer.jfif', '1'),
(18, 'Air Cooler', '20000', 'White', '3liter', '4', 'Airr.jfif', '1'),
(19, 'Laptop', '65000', 'Purple', '512GB', '5', 'hp.jpg', '1'),
(20, 'Ac', '30000', 'White', '2ton', '5', 'images.jfif', '1'),
(21, 'Key Board', '8000', 'Black', '103 keys', '5', 'key.jfif', '1'),
(22, 'Computer ', '55000', 'Black', '512GB', '5', 'computer.jfif', '2'),
(23, 'Water Bottle', '1000', 'Gray', '2 liter', '3', 'water bottle.jfif', '1'),
(24, 'Laptop', '35000', 'Black', '512GB', '24', 'laptop.png', '1'),
(25, 'swedas', 'dsdcsad', 'asdasd', 'addsda', '5', 'heater.png', '1'),
(26, 'Laptop', '65000', 'Black', '512GB', '4', 'laptop.png', '1'),
(27, 'Mobile', '40000', 'White', '5G ,4G', '25', 'mobile.jpg', '2'),
(28, 'laptop', '65000', 'Black', '512GB', '25', 'laptop.png', '1'),
(29, 'Tv', '10000', 'Black', '43inch', '26', 'tv.jfif', '2'),
(30, 'Ac', '15000', 'White', '1.5ton', '1', 'Ac.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `registerform`
--

DROP TABLE IF EXISTS `registerform`;
CREATE TABLE IF NOT EXISTS `registerform` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `PhoneNumber` varchar(100) NOT NULL,
  `Gender` varchar(1000) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `LandMark` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registerform`
--

INSERT INTO `registerform` (`id`, `Name`, `Email`, `PhoneNumber`, `Gender`, `Address`, `LandMark`, `City`, `State`, `UserName`, `Password`, `Status`) VALUES
(1, 'Sangami S', 'ssangami469@gmail.com', '9025670528', 'female', 'Tharamangalam', 'Post Office', 'Salem ', 'Tamilnadu', 'SANGAMIS', 'kutty@123', '1'),
(2, 'Mohanapriya S', 'kuttysss2610@gmail.com', '8438857211', 'female', 'Tharamangalam', 'Post Office', 'Salem ', 'Tamilnadu', 'MohanaS', 'Mohana123', '1'),
(3, 'Pooja SP', 'poojasp06070378@gmail.com', '8870947718', 'female', 'Kanchipuram', 'Kovil', 'Kanchipuram ', 'Tamilnadu', 'Pooja', 'Pooja123', '1'),
(4, 'Sibiraj S', 'senthilsibi03@gmail.com', '6382578297', 'male', 'Tiruchengode', 'Bus Stand', 'Namakkal ', 'Tamilnadu', 'Sibi', 'Sibi123', '1'),
(5, 'Aruna', 'arunadevivma@gmail.com', '8220997823', 'female', 'Surandai', 'River', 'Tenkasi ', 'Tamilnadu', 'Aruna', 'Aruna123', '1'),
(6, 'Saran K', 'saranking31215@gmail.com', '9994233413', 'male', 'Tiruchengode', 'Post Office', 'Namakkal ', 'Tamilnadu', 'Saran', 'Saran123', '1'),
(7, 'ShaliniM', 'shalubabs9@gmail.com', '9344298430', 'female', 'Bhavani', 'Hospital', 'Erode ', 'Tamilnadu', 'Shalini', 'Shalu123', '1'),
(8, 'Praveen', 'pravincodedev@gmail.com', '9360201761', 'male', 'Raameshwaram', 'Sea', 'Ramanadhapuram ', 'Tamilnadu', 'Praveen', 'Praveen123', '1'),
(9, 'DivyaK', 'dhivyakumar842@gmail.com', '6385607741', 'female', 'Panrudi', 'Kovil', 'Cuddalore ', 'Tamilnadu', 'Divya', 'Divya123', '1'),
(10, ' iouiojo45647', 'hyiugop', '8925647874', 'male', 'kuig8ogougol', 'hoihooh', 'uhguh ', 'bbubukkui', 'tdr56e5647', 'a123', '1'),
(11, 'SangamiS', 'ssangami469@gmail.com', '9025670528', 'female', 'Tharamangalam', 'Post Office', 'Salem ', 'Tamilnadu', 'SANGAMIS', 'kutty', '1'),
(12, 'VijiK', 'vijikali98@gmail.com', '7358521699', 'female', 'Chennai', 'SBOA School', 'Chennai ', 'Tamilnadu', 'Viji', 'Viji123', '1'),
(13, 'SangamiS', 'ssangami469@gmail.com', '9025670528', 'female', 'Tharamangalam', 'Kovil', 'Salem ', 'Tamilnadu', 'Dhanush', 'Dhanush', '1'),
(14, 'susmitha', 'atigaddasusmitha789@gmail.com', '9492760216', 'female', 'chittoor', 'Post Office', 'chittoor ', 'ap', 'susmitha78', 'Susmitha@789', '1'),
(15, 'SandhiyaN', 'ssangami469@gmail.com', '9025670528', 'female', 'Rasipuram', 'School', 'Salem ', 'Tamilnadu', 'Sandhiya', 'Sandhiya', '1');

-- --------------------------------------------------------

--
-- Table structure for table `save`
--

DROP TABLE IF EXISTS `save`;
CREATE TABLE IF NOT EXISTS `save` (
  `email` varchar(50) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `save`
--

INSERT INTO `save` (`email`, `dob`, `phone`, `password`) VALUES
('sarp@gmail.com', '10-02-1997', '8925647874', 'kutty@123'),
('saro@gmail.com', '20-02-2003', '9025670528', 'kutty@343'),
('sangami!123', '13-09-2003', '9025670528', 'kutty@123'),
('ssangami469@gmail.com', '13-09-2003', '6382578297', 'kutty@343'),
('fhdffg', '112554', '5544414251', 'kutty'),
('madhu123', '15-02-2020', '6352489697', 'madhu456');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `DOB` varchar(20) DEFAULT NULL,
  `PhoneNum` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=250 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `NAME`, `EMAIL`, `DOB`, `PhoneNum`, `PASSWORD`) VALUES
(1, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(2, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kitty123'),
(3, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(4, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@'),
(6, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'sangami'),
(7, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@'),
(237, 'Sangami S', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(16, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kitty'),
(249, 'praveen', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(18, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(19, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'jackkutty@343'),
(20, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(248, 'praveen', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(238, 'Sangami S', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(24, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'ssss123'),
(215, 'Shalini M', 'Shalini@gmail.com', '20-02-2003', '9025670528', 'jack@123'),
(27, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(29, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(30, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(220, 'Shalini M', 'Shalini@gmail.com', '20-02-2003', '9025670528', 'jack@123'),
(217, 'Shalini M', 'Shalini@gmail.com', '20-02-2003', '9025670528', 'jack@123'),
(218, 'Shalini M', 'Shalini@gmail.com', '20-02-2003', '9025670528', 'jack@123'),
(35, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(36, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '6382578297', 'kutty@343'),
(37, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(38, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(40, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(41, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(43, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(44, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(45, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(236, 'Sangami S', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(47, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(48, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty222'),
(49, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(50, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(51, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(52, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(53, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(54, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(216, 'Shalini M', 'Shalini@gmail.com', '20-02-2003', '9025670528', 'jack@123'),
(56, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'sangami@123'),
(57, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(58, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(59, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(213, 'Shalini M', 'Shalini@gmail.com', '20-02-2003', '9025670528', 'jack@123'),
(61, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(62, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(63, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(64, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(65, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(66, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(219, 'Shalini M', 'Shalini@gmail.com', '20-02-2003', '9025670528', 'jack@123'),
(69, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(70, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(71, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(72, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(235, 'Sangami S', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(75, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(76, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(77, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(78, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(79, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(80, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(81, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(82, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(83, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(84, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(85, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(86, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(87, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(88, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(89, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(90, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(135, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(134, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(198, 'sankar M', 'ssangami469@gmail.com', '13-09-2003', '6382578297', 'kutty@343'),
(221, 'Shalini M', 'Shalini@gmail.com', '20-02-2003', '9025670528', 'jack@123'),
(103, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(104, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(105, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(106, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(107, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(108, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(109, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(110, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(111, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(112, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(113, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(114, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(115, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(116, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(117, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(118, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(119, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(120, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(121, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(122, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(123, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(124, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(125, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(126, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(127, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(128, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(129, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(130, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(131, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(132, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(133, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(136, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(137, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(138, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(139, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(140, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(141, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(142, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(143, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(144, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(145, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(146, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(147, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(148, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(149, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(150, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(151, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(152, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(153, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(154, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(155, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(156, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(157, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(158, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(159, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(160, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(161, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(162, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(163, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(164, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(165, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(166, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(167, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(168, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(169, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(170, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(171, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(172, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(173, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(174, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(175, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(176, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(177, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(178, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(179, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(180, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(181, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(182, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(183, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(184, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(185, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(186, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(187, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(188, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(189, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(190, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(191, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(192, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(193, 'sangami', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(224, 'Sangami S', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(225, 'Sangami S', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343'),
(226, 'saro', 'saro@gmail.com', '08-11-2004', '9025670528', 'kutty@343'),
(247, 'praveen', 'ssangami469@gmail.com', '13-09-2003', '9025670528', 'kutty@343');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
