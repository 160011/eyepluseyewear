-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2023 at 02:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dairy-pura`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Falguni Gajjar', 'aditi@gmail.com', '2b197829d548512d1d4b8bd5c773d6c3'),
(2, 'milan', 'milan@gmail.com', '83227a721a3363d2c78381664c78657f'),
(3, 'Khushi Geriya', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID` int(11) NOT NULL,
  `productid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ID`, `productid`, `userid`, `quantity`) VALUES
(27, 20, 10, 1),
(28, 22, 10, 1),
(29, 17, 10, 1),
(30, 22, 0, 1),
(31, 18, 11, 1),
(32, 19, 11, 1),
(33, 22, 11, 1),
(34, 23, 11, 1),
(35, 19, 11, 1),
(36, 21, 0, 1),
(37, 18, 0, 1),
(38, 17, 10, 1),
(39, 25, 10, 1),
(40, 22, 0, 1),
(41, 23, 10, 1),
(42, 32, 13, 1),
(43, 28, 13, 1),
(44, 31, 13, 1),
(45, 28, 14, 1),
(46, 30, 14, 1),
(47, 32, 0, 1),
(48, 33, 0, 1),
(49, 32, 0, 1),
(50, 30, 0, 1),
(51, 30, 10, 1),
(52, 29, 10, 1),
(53, 29, 0, 1),
(54, 32, 16, 1),
(55, 31, 16, 1),
(56, 33, 0, 1),
(57, 29, 10, 1),
(58, 31, 13, 1),
(59, 33, 0, 1),
(60, 31, 13, 1),
(61, 28, 18, 1),
(62, 29, 18, 1),
(63, 33, 18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(5) NOT NULL,
  `categoryname` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryname`, `image`) VALUES
(27, 'men sunglasses', '1695991316-th (8).jpg'),
(28, 'women sunglasses', '1695638288-images (2).jpg'),
(29, 'kids sunglasses', '1695991342-th (6).jpg'),
(30, 'ray ban sunglasses', '1695991357-th (4).jpg'),
(31, 'gucci', '1695638356-download (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(20) NOT NULL,
  `cartid` int(20) DEFAULT NULL,
  `userid` int(20) DEFAULT NULL,
  `productid` int(20) DEFAULT NULL,
  `quantity` int(20) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `address` text DEFAULT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `cartid`, `userid`, `productid`, `quantity`, `date`, `address`, `status`) VALUES
(63, 54, 16, 32, 1, '2023-09-26 19:26:39', 'hhhwdjdklxjxkjxk', ''),
(65, 42, 13, 32, 1, '2023-09-29 10:55:34', 'tyeuieduryurfrfr', ''),
(66, 43, 13, 28, 1, '2023-09-29 10:55:34', 'tyeuieduryurfrfr', ''),
(67, 44, 13, 31, 1, '2023-09-29 12:35:33', 'tyeuieduryurfrfr', 'delivered'),
(68, 58, 13, 31, 1, '2023-09-29 10:55:34', 'tyeuieduryurfrfr', ''),
(71, 44, 13, 31, 1, '2023-09-29 11:25:45', 'eudeudeudheudeud', ''),
(72, 58, 13, 31, 1, '2023-09-29 11:25:45', 'eudeudeudheudeud', ''),
(73, 60, 13, 31, 1, '2023-09-29 11:25:45', 'eudeudeudheudeud', ''),
(74, 61, 18, 28, 1, '2023-09-29 13:04:31', 'ashapura nivas sudama nagar jetpur', ''),
(75, 62, 18, 29, 1, '2023-09-29 13:04:31', 'ashapura nivas sudama nagar jetpur', ''),
(76, 63, 18, 33, 1, '2023-09-29 12:35:51', 'ashapura nivas sudama nagar jetpur', 'delivered');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(5) NOT NULL,
  `productname` varchar(200) NOT NULL,
  `productimage` varchar(200) NOT NULL,
  `productprice` varchar(200) NOT NULL,
  `productdesc` varchar(191) NOT NULL,
  `categoryid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productname`, `productimage`, `productprice`, `productdesc`, `categoryid`) VALUES
(28, 'Ray ban Sunglasses', '1695991437-th (4).jpg', '4400', 'It is the new branded model of Ray Ban sunglasses. It has logo too.', '28'),
(29, 'Gussi Sunglasses', '1695991695-1695614910-th (6).jpg', '3300', 'It is the new branded model of Gucci sunglasses. It has logo too.And the gucci glasses is in the top.', '29'),
(30, 'Men Sunglasses', '1695991633-th (2).jpg', '2300', 'It is the new branded model of Men sunglasses. It has logo too.', '30'),
(31, 'Women Sunglasses', '1695991488-th (7).jpg', '3500', 'It is the new branded model of Women sunglasses. It has logo too.And the gucci glasses is in the top.', '31'),
(32, 'Kids Sunglasses', '1695991503-th (6).jpg', '3300', 'It is the new branded model of  Kids sunglasses. It has logo too.And the gucci glasses is in the top.', '27'),
(33, 'Ray ban Sunglasses', '1695991521-th (1).jpg', '4560', 'It is the new branded model of Ray Ban sunglasses. It has logo too.', '27'),
(34, 'Brand Sunglasses', '1695711463-brand.jpg', '8888', 'It is the new branded model of Ray Ban sunglasses. It has logo too.It is speciLLY DESIGNED FOR JENIL', '27');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(255) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `phone` varchar(100) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `name`, `email`, `password`, `phone`, `address`) VALUES
(12, 'nups', 'nups@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', ''),
(13, 'preya', 'preya@gmail.com', '7a26eacc9811e7b76986ae9fff2ea3f2', '7897897896', 'eudeudeudheudeud'),
(14, 'ruchi', 'ruchi@gmail.com', '996c43b3df35048358e637b5f80e9954', '', ''),
(15, 'nidhi', 'nidhi@gmail.com', '64605c59ab62dbcd925af40d7de11276', '', ''),
(16, 'jenil', 'jenil@gmail.com', 'd4078b033cf97554e62a42223129939c', '7897897896', 'hhhwdjdklxjxkjxk'),
(17, 'preya', 'preya@gmail.com', 'e83ea61c536f71df8833631ed8d606f8', '', ''),
(18, 'ddjadeja', 'ddjadeja@gmail.com', 'ee5ccd1c22aafb5e01073a51e3dcaabf', '7897897896', 'ashapura nivas sudama nagar jetpur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
