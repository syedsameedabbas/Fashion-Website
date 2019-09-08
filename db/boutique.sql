-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2018 at 12:34 PM
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
(2, 1, '5c067e988a4d3.jpg'),
(3, 1, '5c067e9894e4c.jpg'),
(4, 1, '5c067ebcb75d5.jpg'),
(5, 5, '5c067ebce214f.jpg'),
(6, 1, '5c067ebd17da0.jpg'),
(7, 1, '5c06e768c9556.jpg'),
(8, 1, '5c06e768d4a04.jpg'),
(9, 3, '5c06e768da9b0.jpg'),
(10, 1, '5c06e9794e088.jpg'),
(11, 1, '5c06e9795f8cb.jpg'),
(12, 1, '5c06e9796d064.jpg'),
(13, 1, '5c06f0588137f.jpg'),
(14, 1, '5c06f32b1b07d.jpg'),
(15, 6, '5c06f32b20915.jpg'),
(16, 4, '5c06f32b2b6b8.jpg'),
(17, 1, '5c06f4a481c2f.jpg'),
(18, 1, '5c06f4a4a2690.jpg'),
(19, 7, '5c06f4a4d9cfa.jpg'),
(20, 1, '5c07021f65514.jpg'),
(21, 1, '5c07021f6b10f.jpg'),
(22, 12, '5c07021f75484.jpg'),
(23, 9, '5c0702bc1e674.jpg'),
(24, 13, '5c0702bc36ab2.jpg'),
(25, 14, '5c0702bc51050.jpg'),
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
(52, 1, '5c07e21680038.jpg'),
(53, 24, '5c07e2168a276.jpg');

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
(2, 'lahrd', 'loands', '54445', 'lahore', 'ldkflskflsdklfk', '2018-12-04 06:28 pm', 0),
(3, 'gul ahmed', 'loan', '25000', 'men', 'djksf hf kjkjsd fnjdsnvj anjdfn vkljdfn kv an', '2018-12-05 01:45 am', 0),
(4, 'kashmiri', 'asjjsa', '5000', 'Men', 'knfjkdsn fjkdskjf djs kajsd', '2018-12-05 01:54 am', 0),
(5, 'dsjk', 'jdfb', '5442', 'Men', 'dsnafjkn sjkdnfkjnkjanfd', '2018-12-05 02:23 am', 0),
(6, 'dnfkna', 'dnfkj', '445', 'Kid', 'ndkn ndfkjn kjdsfnkdsn', '2018-12-05 02:35 am', 0),
(7, 'cxkdfs', 'nkfdnkvs', '5454', 'Kid', 'cdsnkcndksanka`', '2018-12-05 02:41 am', 0),
(8, 'd s k dsk ', 'ds kds ', '45422', 'kid', 'kdsnf kjndsfkj nskanf kjsd', '2018-12-05 03:39 am', 0),
(9, 'asadcasas', 'sdas', '20000', 'Men', ' dnkjn djfjvnfjdsn vkj dfk', '2018-12-05 03:42 am', 0),
(10, 'gul ahmed', 'ds dskj', '545', 'Men', 'ndkfn dkasn kfjna', '2018-12-05 03:43 am', 0),
(11, 'asad', 'ikhlas', '4500', 'Men', 'fhsdfkjn knsjkf nkjnask nkjnfiandvnjk', '2018-12-05 05:34 pm', 0),
(12, 'asad ikhlas', 'sndnsdk', '45220', 'Men', 'dsfjsd jfdsjkf  jksdajdsjfjdas jbf ', '2018-12-05 05:36 pm', 0),
(13, 'asad ikhlas', 'sndnsdk', '45220', 'Men', 'dsfjsd jfdsjkf  jksdajdsjfjdas jbf ', '2018-12-05 05:36 pm', 0),
(14, 'waqas', 'sdmfkl', '8000', 'Men', 'sdkf kdsa fnsdanf kjdsnkjf ', '2018-12-05 05:47 pm', 0),
(15, 'sadasd', 'sfasd', '2000', 'Men', 'nkans dn sdkjsd jsfj dskjf kjs', '2018-12-05 05:50 pm', 0),
(16, ' kjnkjn', 'jkdsndkj nds', '9390349', 'Men', 'kj kdfjknkdanvjkndknv', '2018-12-05 05:52 pm', 0),
(17, 'asad', 'ksdfklams', '8483', 'Men', 'afkdf n fkanalkfkdsfkniernkfv kav kvka s', '2018-12-05 05:59 pm', 0),
(18, 'ndsfn ksd', 'ndskjfk', '20010', 'Men', 'nfkjnasdknf ksjdnkfj ndsknfk kjdnfk skj', '2018-12-05 07:10 pm', 0),
(19, 'addy', 'asad', '555555', 'Men', 'nasd ikhlas jkndf nfdsn kjankj fd', '2018-12-05 07:13 pm', 0),
(20, 'addy d', 'mdklsf', '9000', 'Men', 'dklsf aadfkfdkgkdfsgkfsks dfg ', '2018-12-05 07:16 pm', 0),
(21, 'asad addy', 'waqas', '70000', '', 'ndskj jksdksdnfk nnfgieqri nk nfjnkjd nj', '2018-12-05 07:19 pm', 0),
(22, ' dsnfk as', 'nkjdsn kjn', '451566', 'Men', 'nfjkn ndjknfkjdn kdfnknkjfdsnkj nfd vksdfjk vkfdn vkergniren vkfd ivjnfijdknafdkniwfnd', '2018-12-05 07:21 pm', 0),
(23, 'asad', 'ikhlas', '40000', 'Women', 'sjdf kf ksdnkj nsdkjkjsdnfwiehf lksdnf aksdn sdn', '2018-12-05 07:28 pm', 0),
(24, 'dsf nsdak', 'ndknk va', '2000', 'Women', 'sdkjfn jndsnfjksndk nskdan', '2018-12-05 07:32 pm', 0),
(25, 'nsfkn', 'nkdsn', '451313', 'Women', 'fh kwejnfk nsdkjnkj sndajfnkjsd', '2018-12-05 07:35 pm', 0),
(26, 'dsjknfk', 'kdfkj', '2000', '', 'sdf ndkjnv aniehqikfnvdnfkv', '2018-12-06 04:08 pm', 0),
(27, 'ksdnksd snds dn', 'ndkfkjvn d', '20000', 'Men', 'efnjkdnifdsn kdsjf', '2018-12-06 04:09 pm', 0),
(28, 'asadad', 'sjkd', '5000', 'Men', 'sdfk andkfnadkjnjkankjafd', '2018-12-06 04:10 pm', 0),
(29, 'sdakjfn ', 'nkjdnvk ', '450', 'Men', 'sanfkndkj dniifndnvka ', '2018-12-06 04:11 pm', 0),
(30, 'sak vk', 'sd k', '5200', 'Men', 'adnvak jdjn dnknv jkfdnknf ', '2018-12-06 04:13 pm', 0),
(31, 's sdn', 'kjv kj', '200000', 'Kid', 'sfn jksdn fkjdjkf kdjafjakjdaf', '2018-12-06 04:19 pm', 0),
(32, 'dsnf kj', 'kjsdnkjs dn', '501123', 'Kid', 'dsbf djsfbjdsbf jdbfsjadbfj sdbfjabsjfbjsl', '2018-12-06 04:23 pm', 0),
(33, 'sf jkdnk js', 'kdsn jk', '25000', 'Men', 'ksjd fjsadfjasdfj jdfjabfjadfjad', '2018-12-06 04:25 pm', 0),
(34, 'abfkajsdfk', 'dbsjfljqs', '25421', 'Men', 'fnjdnfjkf bjldjfdb jfbvjfdsvjdfbvjfds', '2018-12-06 04:27 pm', 0),
(35, 'sdfnksda', 'nk dsnkj', '5156156', 'Women', 'ndvsnv ndfjkn vfkdjnbkjfngjbknfgbnkjfnjkdnjk', '2018-12-06 04:33 pm', 0),
(36, 'sdfnksda', 'nk dsnkj', '5156156', 'Women', 'ndvsnv ndfjkn vfkdjnbkjfngjbknfgbnkjfnjkdnjk', '2018-12-06 04:34 pm', 0);

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
  MODIFY `imgId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `postad`
--
ALTER TABLE `postad`
  MODIFY `postId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
