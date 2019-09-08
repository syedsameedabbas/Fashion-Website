-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2018 at 03:35 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boutique`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AID` int(11) NOT NULL,
  `adminName` varchar(250) NOT NULL,
  `adminPass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `adminName`, `adminPass`) VALUES
(1, 'admin', 'asad');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CID` int(11) NOT NULL,
  `categoryName` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `imgId` int(10) NOT NULL,
  `postId` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`imgId`, `postId`, `image`) VALUES
(1, 1, '5c067e9871daf.jpg'),
(2, 2, '5c067e988a4d3.jpg'),
(3, 1, '5c067e9894e4c.jpg'),
(4, 1, '5c067ebcb75d5.jpg'),
(5, 5, '5c067ebce214f.jpg'),
(7, 6, '5c06e768c9556.jpg'),
(8, 1, '5c06e768d4a04.jpg'),
(9, 3, '5c06e768da9b0.jpg'),
(10, 1, '5c06e9794e088.jpg'),
(11, 7, '5c06e9795f8cb.jpg'),
(12, 1, '5c06e9796d064.jpg'),
(13, 1, '5c06f0588137f.jpg'),
(14, 1, '5c06f32b1b07d.jpg'),
(15, 6, '5c06f32b20915.jpg'),
(17, 1, '5c06f4a481c2f.jpg'),
(18, 1, '5c06f4a4a2690.jpg'),
(19, 7, '5c06f4a4d9cfa.jpg'),
(20, 1, '5c07021f65514.jpg'),
(21, 1, '5c07021f6b10f.jpg'),
(22, 12, '5c07021f75484.jpg'),
(23, 9, '5c0702bc1e674.jpg'),
(24, 13, '5c0702bc36ab2.jpg'),
(26, 1, '5c07032840177.jpg'),
(27, 1, '5c07032848679.jpg'),
(28, 1, '5c07c5ce1ce7b.jpg'),
(29, 1, '5c07c5ce227d0.jpg'),
(30, 1, '5c07c5ce45be4.jpg'),
(31, 1, '5c07c6658e0c4.jpg'),
(32, 1, '5c07c8fce1d61.jpg'),
(33, 1, '5c07c995d2f74.jpg'),
(34, 1, '5c07c995d86af.jpg'),
(35, 1, '5c07c995dfcdb.jpg'),
(36, 1, '5c07dc450c294.jpg'),
(37, 1, '5c07dc45117e3.jpg'),
(38, 1, '5c07dc451c2cc.jpg'),
(39, 1, '5c07dd23def3b.jpg'),
(40, 1, '5c07dd23ee87a.jpg'),
(41, 1, '5c07dd2407e2a.jpg'),
(42, 1, '5c07de7e139d1.jpg'),
(43, 1, '5c07de7e22ebf.jpg'),
(44, 1, '5c07de7e30981.jpg'),
(45, 1, '5c07e08058fea.jpg'),
(46, 1, '5c07e08065b99.jpg'),
(47, 1, '5c07e08073cf4.jpg'),
(48, 1, '5c07e1949df82.jpg'),
(49, 1, '5c07e194a56bb.jpg'),
(50, 25, '5c07e194b76b9.jpg'),
(51, 1, '5c07e2167a8ed.jpg'),
(52, 8, '5c07e21680038.jpg'),
(53, 24, '5c07e2168a276.jpg'),
(54, 42, '5c090da9bb285.jpg'),
(55, 42, '5c090da9c10fb.jpg'),
(56, 42, '5c090da9c85cc.jpg'),
(57, 43, '5c090face05f1.jpg'),
(58, 43, '5c090facebc44.jpg'),
(59, 43, '5c090fad04ebe.jpg'),
(60, 43, '5c090fad1530a.jpg'),
(61, 45, '5c0914f58f66c.jpg'),
(62, 45, '5c0914f59b5a3.jpg'),
(63, 45, '5c0914f5ac7fc.jpg'),
(64, 45, '5c0914f5b3b98.jpg'),
(65, 46, '5c0915908415e.jpg'),
(66, 46, '5c09159089aee.jpg'),
(67, 46, '5c09159093943.jpg'),
(68, 47, '5c0e62aee3793.jpg'),
(69, 47, '5c0e62aeee1b4.jpg'),
(70, 47, '5c0e62af04a09.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `postad`
--

CREATE TABLE `postad` (
  `postId` int(11) NOT NULL,
  `postName` varchar(250) NOT NULL,
  `postType` varchar(250) NOT NULL,
  `postPrice` varchar(250) NOT NULL,
  `postCategory` varchar(250) NOT NULL,
  `postDesc` varchar(250) NOT NULL,
  `postDate` varchar(25) NOT NULL,
  `postViews` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postad`
--

INSERT INTO `postad` (`postId`, `postName`, `postType`, `postPrice`, `postCategory`, `postDesc`, `postDate`, `postViews`) VALUES
(2, 'lahrd', 'loands', '54445', 'lahore', 'ldkflskflsdklfk', '2018-12-04 06:28 pm', 4),
(5, 'dsjk', 'jdfb', '5442', 'women', 'dsnafjkn sjkdnfkjnkjanfd', '2018-12-05 02:23 am', 18),
(6, 'dnfkna', 'dnfkj', '445', '', 'ndkn ndfkjn kjdsfnkdsn', '2018-12-05 02:35 am', 4),
(7, 'cxkdfs', 'nkfdnkvs', '5454', 'Kid', 'cdsnkcndksanka`', '2018-12-05 02:41 am', 2),
(8, 'd s k dsk ', 'ds kds ', '45422', 'kid', 'kdsnf kjndsfkj nskanf kjsd', '2018-12-05 03:39 am', 17),
(9, 'asadcasas', 'sdas', '20000', '', ' dnkjn djfjvnfjdsn vkj dfk', '2018-12-05 03:42 am', 1),
(12, 'asad ikhlas', 'sndnsdk', '45220', 'Men', 'dsfjsd jfdsjkf  jksdajdsjfjdas jbf ', '2018-12-05 05:36 pm', 10),
(13, 'asad ikhlas', 'sndnsdk', '45220', 'Men', 'dsfjsd jfdsjkf  jksdajdsjfjdas jbf ', '2018-12-05 05:36 pm', 1),
(24, 'gul khan', 'cotton silk', '25000', '', 'kjdn kjnfjksndk nskdan', '2018-12-05 07:32 pm', 0),
(25, 'nsfkn', 'nkdsn', '451313', 'Women', 'fh kwejnfk nsdkjnkj sndajfnkjsd', '2018-12-05 07:35 pm', 8),
(42, 'sddskj ', 'djb jdfs', '123123', 'Women', 'sdknfkj dnskjf jd vjdfjk sjkn kj', '2018-12-06 04:53 pm', 4),
(43, 'dsknf lkas', 'kdnlk ', '5112132', 'Men', 'sdkj nsdkfnksdnfksanfksndfk nj;ks', '2018-12-06 05:01 pm', 1),
(45, 'asadkf', 'cottom', '250000', 'Men', 'sdnfskd sdnf knskfnadks ksjnf kjn kdf', '2018-12-06 05:24 pm', 1),
(46, 'asaad kas', 'cotton silk', '485120', 'Kid', 'jfbfsdkj kj jkdfvbj fd jvadfkjvadjk', '2018-12-06 05:26 pm', 1),
(47, 'asada ', 'jkvkj', '215112', 'Kid', 'sdj sbjsdbv jbcjx uafibfjbv abvb uafiuhwiu jvbsjsd bisn', '2018-12-10 05:57 pm', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imgId`);

--
-- Indexes for table `postad`
--
ALTER TABLE `postad`
  ADD PRIMARY KEY (`postId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imgId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `postad`
--
ALTER TABLE `postad`
  MODIFY `postId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
