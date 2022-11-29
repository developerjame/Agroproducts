-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 03:47 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agroculture1`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogdata`
--

CREATE TABLE `blogdata` (
  `blogId` int(10) NOT NULL,
  `blogUser` varchar(256) NOT NULL,
  `blogTitle` varchar(256) NOT NULL,
  `blogContent` longtext NOT NULL,
  `blogTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `likes` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogdata`
--

INSERT INTO `blogdata` (`blogId`, `blogUser`, `blogTitle`, `blogContent`, `blogTime`, `likes`) VALUES
(19, 'Haron', 'First Blog', 'The website is interactive \r\n', '2022-02-15 13:09:41', 6),
(20, 'peter', 'The First Test', '', '2022-02-26 11:31:16', 2);

-- --------------------------------------------------------

--
-- Table structure for table `blogfeedback`
--

CREATE TABLE `blogfeedback` (
  `blogId` int(10) NOT NULL,
  `comment` varchar(256) NOT NULL,
  `commentUser` varchar(256) NOT NULL,
  `commentPic` varchar(256) NOT NULL,
  `commentTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogfeedback`
--

INSERT INTO `blogfeedback` (`blogId`, `comment`, `commentUser`, `commentPic`, `commentTime`) VALUES
(19, 'Interactive indeed', 'mary', '', '2022-04-26 14:10:43'),
(20, 'Really', 'haron', 'profile0.png', '2022-04-22 19:11:25');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `hash` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `active` int(100) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id`, `name`, `uname`, `pass`, `hash`, `email`, `mobile`, `address`, `active`) VALUES
(3, 'John Mwangi', 'test', '$2y$10$K3hqd6.lRZbRjl5ZAzkN8eGpGmvR3Mf/MF1SaAGorxLkx37.n9iUK', '', 'test@gmail.com', '8603456789', '12345', 0),
(4, 'Dancan Mwangi', 'dancan', '$2y$10$18KOnQxSxvi6gRFp2DtM9uoMpasfkX24qQp32iwpCwF05OnM8Ghty', '', 'test1@gmail.com', '0701234568', '1235', 0),
(5, 'Mary Wanjiku', 'mary', '$2y$10$CVTe2YyIIOTZGQM6m/kePuv4PFqVJvt3HVI.2ltPuPAEr2ThBKlFG', '', 'mary@gmail.com', '701234568', '3211', 0),
(7, 'Eric Waithanji', 'eric', '$2y$10$MVkbOEJmuKFVS2D/H/FMYOuCpRgupXyVO4FGHwDmT/QvApyaHnXce', '', 'eric@gmail.com', '723454412', '65323', 0);

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `fid` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `fusername` varchar(255) NOT NULL,
  `fpassword` varchar(255) NOT NULL,
  `fhash` varchar(255) NOT NULL,
  `femail` varchar(255) NOT NULL,
  `fmobile` varchar(255) NOT NULL,
  `faddress` text NOT NULL,
  `factive` int(255) NOT NULL DEFAULT 0,
  `frating` int(11) NOT NULL DEFAULT 0,
  `picExt` varchar(255) NOT NULL DEFAULT 'png',
  `picStatus` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`fid`, `fname`, `fusername`, `fpassword`, `fhash`, `femail`, `fmobile`, `faddress`, `factive`, `frating`, `picExt`, `picStatus`) VALUES
(3, 'Kaivalya Hemant Mendki', 'ThePhenom', '$2y$10$22ezmzHRa9c5ycHmVm5RpOnlT4LwFaDZar1XhmLRJQKGrcVRhPgti', '61b4a64be663682e8cb037d9719ad8cd', 'kmendki98@gmail.com', '8600611198', 'abcde', 0, 0, 'png', 0),
(4, 'Peter Maina', 'peter', '$2y$10$t2TJfGvXb5ro8Y.oNXImoeJc7//cyce16ZTQeFrTuF9UrfRkFefAG', '9461cce28ebe3e76fb4b931c35a169b0', 'peter@gmail.com', '8601234567', '123', 0, 0, 'png', 0),
(5, 'Dennis Mwangi', 'dennis', '$2y$10$O8p.cCo.XdCMDd/TH6Owi.V0FsfZTNSjax6dBUbKeGSGZcYqhMBA2', 'e44fea3bec53bcea3b7513ccef5857ac', 'dennis@gmail.com', '8601234567', '1234', 0, 0, 'png', 0),
(7, 'Haron Mureithi', 'haron', '$2y$10$27TLd1Yo5N9Ja5q/jjS6LunzkDdqz3HNE237vIdzd0/I0EEqhtuym', 'c0e190d8267e36708f955d7ab048990d', 'haron@gmail.com', '0703456789', '12344', 0, 0, 'png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fproduct`
--

CREATE TABLE `fproduct` (
  `fid` int(255) NOT NULL,
  `pid` int(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `pcat` varchar(255) NOT NULL,
  `pinfo` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `pimage` varchar(255) NOT NULL DEFAULT 'blank.png',
  `picStatus` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fproduct`
--

INSERT INTO `fproduct` (`fid`, `pid`, `product`, `pcat`, `pinfo`, `price`, `quantity`, `pimage`, `picStatus`) VALUES
(4, 31, 'Orange', 'Fruit', '<p>The Orange from my farm</p>\r\n', 5, 4, 'Orange4.jpg', 1),
(7, 33, 'A tray of Eggs', 'poultry', 'Quality eggs', 300, 5, 'A tray of Eggs7.jpg', 1),
(7, 35, 'sheep', 'Livestock( for meat)', 'Dorper breed', 5000, 3, 'sheep7.jpg', 1),
(7, 36, 'Pumpkin', 'Vegetable', '<p>Fresh Product</p>\r\n', 20, 20, 'Pumpkin7.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `likedata`
--

CREATE TABLE `likedata` (
  `blogId` int(10) NOT NULL,
  `blogUserId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likedata`
--

INSERT INTO `likedata` (`blogId`, `blogUserId`) VALUES
(19, 3),
(20, 4),
(19, 4),
(19, 7),
(20, 5);

-- --------------------------------------------------------

--
-- Table structure for table `mycart`
--

CREATE TABLE `mycart` (
  `bid` int(10) NOT NULL,
  `pid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mycart`
--

INSERT INTO `mycart` (`bid`, `pid`) VALUES
(3, 27),
(3, 30),
(0, 30),
(0, 31),
(3, 28),
(3, 31);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `pid` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rating` int(10) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `pid`, `name`, `rating`, `comment`) VALUES
(1, 31, 'Mary Wanjiku', 10, 'A fresh product');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `id` int(11) NOT NULL,
  `fid` int(20) NOT NULL,
  `product` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `sales_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`id`, `fid`, `product`, `price`, `quantity`, `total_price`, `sales_time`) VALUES
(2, 4, 'Orange', '5', 3, 15, '2022-05-02 08:01:34'),
(4, 7, 'Orange', '5', 3, 15, '2022-05-02 08:01:21'),
(7, 4, 'Orange', '5', 2, 10, '2022-05-02 07:59:40'),
(9, 4, 'Orange', '5', 3, 15, '2022-05-02 08:45:21');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `tid` int(10) NOT NULL,
  `fid` int(11) NOT NULL,
  `bid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `orderdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`tid`, `fid`, `bid`, `pid`, `quantity`, `product`, `name`, `city`, `mobile`, `email`, `pincode`, `addr`, `orderdate`) VALUES
(17, 4, 4, 31, 3, '', 'Dancan Mwangi', 'Nairobi', '8601234567', 'test@gmail.com', 'nairobi', '123', '2021-11-04 15:36:31'),
(18, 7, 4, 32, 5, '', 'Dancan Mwangi', 'Nairobi', '8601234567', 'test@gmail.com', 'nairobi', '123', '2021-11-06 11:43:20'),
(19, 4, 5, 31, 2, '', 'Mary Wanjiku', 'Nairobi', '0701234568', 'mary@gmail.com', 'nairobi', '3211', '2021-11-06 15:24:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogdata`
--
ALTER TABLE `blogdata`
  ADD PRIMARY KEY (`blogId`);

--
-- Indexes for table `blogfeedback`
--
ALTER TABLE `blogfeedback`
  ADD PRIMARY KEY (`blogId`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bid` (`id`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`fid`),
  ADD UNIQUE KEY `fid` (`fid`);

--
-- Indexes for table `fproduct`
--
ALTER TABLE `fproduct`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `likedata`
--
ALTER TABLE `likedata`
  ADD KEY `blogId` (`blogId`),
  ADD KEY `blogUserId` (`blogUserId`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogdata`
--
ALTER TABLE `blogdata`
  MODIFY `blogId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `fid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `fproduct`
--
ALTER TABLE `fproduct`
  MODIFY `pid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `tid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buyer`
--
ALTER TABLE `buyer`
  ADD CONSTRAINT `buyer_ibfk_1` FOREIGN KEY (`id`) REFERENCES `farmer` (`fid`);

--
-- Constraints for table `likedata`
--
ALTER TABLE `likedata`
  ADD CONSTRAINT `likedata_ibfk_1` FOREIGN KEY (`blogId`) REFERENCES `blogdata` (`blogId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
