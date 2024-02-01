-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 07:28 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin456');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin_tb`
--

CREATE TABLE `adminlogin_tb` (
  `a_login_id` int(11) NOT NULL,
  `a_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `a_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `a_password` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `adminlogin_tb`
--

INSERT INTO `adminlogin_tb` (`a_login_id`, `a_name`, `a_email`, `a_password`) VALUES
(1, 'Ahad ', 'ahad@gmail.com', '1814'),
(2, 'Aftab', 'aftab@gmail.com', '123456'),
(3, 'hozefa', 'hozefa@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `assets_tb`
--

CREATE TABLE `assets_tb` (
  `pid` int(11) NOT NULL,
  `pname` varchar(60) COLLATE utf8_bin NOT NULL,
  `pdop` date NOT NULL,
  `pava` int(11) NOT NULL,
  `ptotal` int(11) NOT NULL,
  `poriginalcost` int(11) NOT NULL,
  `psellingcost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `assets_tb`
--

INSERT INTO `assets_tb` (`pid`, `pname`, `pdop`, `pava`, `ptotal`, `poriginalcost`, `psellingcost`) VALUES
(6, 'storage rack', '2020-02-08', 17, 20, 1500, 2000),
(7, 'tv main board', '2020-02-08', 6, 12, 2000, 2500),
(8, 'led tv panel', '2020-02-08', 8, 15, 1700, 2100),
(9, 'renque filter for washing machine ', '2020-02-08', 12, 18, 200, 250);

-- --------------------------------------------------------

--
-- Table structure for table `assignwork_tb`
--

CREATE TABLE `assignwork_tb` (
  `rno` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `request_info` text COLLATE utf8_bin NOT NULL,
  `request_desc` text COLLATE utf8_bin NOT NULL,
  `requester_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_add1` text COLLATE utf8_bin NOT NULL,
  `requester_add2` text COLLATE utf8_bin NOT NULL,
  `requester_city` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_state` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_zip` int(11) NOT NULL,
  `requester_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_mobile` bigint(11) NOT NULL,
  `assign_tech` varchar(60) COLLATE utf8_bin NOT NULL,
  `assign_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `assignwork_tb`
--

INSERT INTO `assignwork_tb` (`rno`, `request_id`, `request_info`, `request_desc`, `requester_name`, `requester_add1`, `requester_add2`, `requester_city`, `requester_state`, `requester_zip`, `requester_email`, `requester_mobile`, `assign_tech`, `assign_date`) VALUES
(12, 61, 'tv', 'not working', 'aftab', 'Barton Library', 'Barton Library', 'bhavnagar', 'gujarat', 364001, 'as@gmail.com', 1234859578, 'ahad', '2020-09-07'),
(13, 62, 'samsung J5', 'not working', 'ranveer', 'sanchit', 'shishuvihar', 'bhav', 'guj', 364001, 'rv@gmail.com', 998748965, 'tech2', '2020-09-07');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `phone` int(10) NOT NULL,
  `message` varchar(100) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'ahad', 'ahad@gmail.com', 2147483647, 'ffshaffh');

-- --------------------------------------------------------

--
-- Table structure for table `customer_tb`
--

CREATE TABLE `customer_tb` (
  `custid` int(11) NOT NULL,
  `custname` varchar(60) COLLATE utf8_bin NOT NULL,
  `custadd` varchar(60) COLLATE utf8_bin NOT NULL,
  `cpname` varchar(60) COLLATE utf8_bin NOT NULL,
  `cpquantity` int(11) NOT NULL,
  `cpeach` int(11) NOT NULL,
  `cptotal` int(11) NOT NULL,
  `cpdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `customer_tb`
--

INSERT INTO `customer_tb` (`custid`, `custname`, `custadd`, `cpname`, `cpquantity`, `cpeach`, `cptotal`, `cpdate`) VALUES
(29, 'aftab', 'Barton Library', 'refrigeration compression', 2, 10000, 20000, '2020-02-08'),
(30, 'aftab', 'Barton Library', 'storage rack', 11, 2000, 12000, '2020-09-07');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(3) NOT NULL,
  `pid` int(3) NOT NULL,
  `uid` int(3) NOT NULL,
  `pname` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `date` date NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` varchar(8) NOT NULL,
  `payment` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`id`, `pid`, `uid`, `pname`, `date`, `price`, `firstname`, `lastname`, `mobile`, `address`, `city`, `pincode`, `payment`) VALUES
(1, 1, 1, 'status', '2020-02-26', '9700.00', 'Hozefa', 'Furniturewala', '7048742925', 'Divanpara chowk', 'Bhavnagar', '364001', 'debit card'),
(2, 2, 1, 'diane', '2020-02-26', '8200.00', 'Hozefa', 'Furniturewala', '7048742925', 'Divanpara chowk', 'Bhavnagar', '364001', 'cod'),
(3, 4, 2, 'quadra', '2020-02-29', '4600.00', 'Jagat', 'Pandya', '9426451213', 'bharatnagar', 'bhavnagar', '364002', 'cod'),
(4, 1, 1, 'status', '2020-03-02', '9700.00', 'Hozefa ', 'furniturewala', '9033660440', 'DIWANPARA ROAD ', 'bhavnagar', '364001', 'cod'),
(5, 1, 3, 'status', '2020-03-05', '9700.00', 'ahad', 'sheikh', '3658941285', 'sandhiyawad', 'bhavnagar', '364001', 'debit card'),
(6, 2, 4, 'diane', '2020-03-06', '8200.00', 'rgrfgrw', 'efrerwfewfr', '9457645', 'fgergtregtret', 'gergreger', '364001', 'debit card');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(3) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `stock` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `photo`, `description`, `price`, `stock`) VALUES
(1, 'status', 'assets/img/product/11.jpg', 'Good quality product', '9700.00', 7),
(2, 'diane', 'assets/img/product/7.jpg\"', 'good quality product', '8200.00', 8),
(8, 'VERTIS', '../user/assets/img/product/new/product-detail-4.jpg', '', '6600.00', 5),
(9, 'QUADRA', '../user/assets/img/product/new/1m.jpg', '', '4600.00', 5),
(10, 'ARIQ', '../user/assets/img/product/new/product-detail-3.jpg', '', '3000.00', 6),
(11, 'CALISTA', '../user/assets/img/product/new/22.jpg', 'good quality product', '6500.00', 6);

-- --------------------------------------------------------

--
-- Table structure for table `requesterlogin_tb`
--

CREATE TABLE `requesterlogin_tb` (
  `r_login_id` int(11) NOT NULL,
  `r_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `r_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `r_password` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `requesterlogin_tb`
--

INSERT INTO `requesterlogin_tb` (`r_login_id`, `r_name`, `r_email`, `r_password`) VALUES
(15, 'aftab', 'aftab@gmail.com', '1234'),
(16, 'ahad', 'ahad@gmail.com', '1234'),
(17, 'zaid', 'zaid@1234gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `id` int(11) NOT NULL,
  `Pname` varchar(70) COLLATE utf8_bin NOT NULL,
  `brand` varchar(70) COLLATE utf8_bin NOT NULL,
  `cat` varchar(50) COLLATE utf8_bin NOT NULL,
  `price` varchar(50) COLLATE utf8_bin NOT NULL,
  `Cname` varchar(70) COLLATE utf8_bin NOT NULL,
  `address` text COLLATE utf8_bin NOT NULL,
  `city` varchar(20) COLLATE utf8_bin NOT NULL,
  `state` varchar(20) COLLATE utf8_bin NOT NULL,
  `mobileno` varchar(20) COLLATE utf8_bin NOT NULL,
  `pincode` varchar(15) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`id`, `Pname`, `brand`, `cat`, `price`, `Cname`, `address`, `city`, `state`, `mobileno`, `pincode`) VALUES
(17, 'tv', 'LG', 'tv', '15000', 'ahad', 'ghogha circle', 'bhav', 'guj', '998748965', '364001'),
(18, 'fridge', 'Whirpool', 'fridge', '100000', 'arshal', 'Barton Library', 'bhavnagar', 'gujarat', '01234859578', '364001'),
(19, 'tv', 'LG', 'tv', '16000', 'aftab', 'jamnakund', 'bhavnagar', 'gujarat', '7984300359', '364001'),
(20, 'fridge', 'Whirpool', 'fridge', '36500', 'arshal', 'jamnakund', 'bhavnagar', 'gujarat', '07984300359', '364001'),
(21, 'tv', 'Videocon', 'tv', '11000', 'vishal', 'Barton Library', 'bhavnagar', 'gujarat', '01234859578', '364001'),
(22, 'fridge', 'LG', 'fridge', '35000', 'zahir', 'shishuvihar', 'bhavnagar', 'gujarat', '01234859578', '364001'),
(23, 'tv', 'Whirpool', 'tv', '15000', 'vishal', 'jamnakund', 'bhavnagar', 'gujarat', '07984300359', '364001'),
(24, 'fridge', 'Videocon', 'fridge', '30000', 'aftab', 'Barton Library, Barton Library', 'bhavnagar', 'gujarat', '01234859578', '364001'),
(25, 'tv', 'LG', 'tv', '15000', 'zaroon', 'shishuvihar, shishuvihar', 'bhavnagar', 'gujarat', '01234859578', '364001'),
(26, 'washing_machine', 'LG', 'washing_machine', '15000', 'zahir', 'Barton Library, Barton Library', 'bhavnagar', 'gujarat', '01234859578', '364001');

-- --------------------------------------------------------

--
-- Table structure for table `submitrequest_tb`
--

CREATE TABLE `submitrequest_tb` (
  `request_id` int(11) NOT NULL,
  `request_info` text COLLATE utf8_bin NOT NULL,
  `request_desc` text COLLATE utf8_bin NOT NULL,
  `requester_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_add1` text COLLATE utf8_bin NOT NULL,
  `requester_add2` text COLLATE utf8_bin NOT NULL,
  `requester_city` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_state` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_zip` int(11) NOT NULL,
  `requester_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_mobile` bigint(11) NOT NULL,
  `request_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `submitrequest_tb`
--

INSERT INTO `submitrequest_tb` (`request_id`, `request_info`, `request_desc`, `requester_name`, `requester_add1`, `requester_add2`, `requester_city`, `requester_state`, `requester_zip`, `requester_email`, `requester_mobile`, `request_date`) VALUES
(63, 'tv', 'not working', 'aftab', 'Barton Library', 'Barton Library', 'bhavnagar', 'gujarat', 364001, 'as@gmail.com', 1234859578, '2020-09-07'),
(64, 'tv', 'tv is not working', 'ranveer', 'sanchit', 'shishuvihar', 'bhav', 'guj', 364001, 'rv@gmail.com', 998748965, '2020-09-07');

-- --------------------------------------------------------

--
-- Table structure for table `technician_tb`
--

CREATE TABLE `technician_tb` (
  `empid` int(11) NOT NULL,
  `empName` varchar(60) COLLATE utf8_bin NOT NULL,
  `empCity` varchar(60) COLLATE utf8_bin NOT NULL,
  `empMobile` bigint(11) NOT NULL,
  `empEmail` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `technician_tb`
--

INSERT INTO `technician_tb` (`empid`, `empName`, `empCity`, `empMobile`, `empEmail`) VALUES
(14, 'tech2', 'mumbai', 9954867895, 'tech2@gmail.com'),
(15, 'ahad', 'bhavnagar', 9956874217, 'ahad@gmail.com'),
(16, 'tech3@gmail.com', 'bhavnagar', 9956874178, 'tech3@gmail.com'),
(17, 'tech4@gmail.com', 'bhavnagar', 9987568425, 'tech4@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `uploadproduct`
--

CREATE TABLE `uploadproduct` (
  `id` int(11) NOT NULL,
  `product_name` varchar(150) COLLATE utf8_bin NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_image` varchar(500) COLLATE utf8_bin NOT NULL,
  `product_category` varchar(30) COLLATE utf8_bin NOT NULL,
  `Brand` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `uploadproduct`
--

INSERT INTO `uploadproduct` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_category`, `Brand`) VALUES
(42, 'tv', 15000, 1, 'Product_image/3d2e7ff725e4a069d8bac158168b2683image_search_1582549110633.jpg', 'tv', 'LG'),
(43, 'tv', 11000, 1, 'Product_image/25488cf49bc0bff735836bf89165a3c2image_search_1582549304704.jpg', 'tv', 'Videocon'),
(44, 'tv', 12500, 1, 'Product_image/425b3262f83315b8aaaba28a9c2918c6image_search_1582549331659.jpg', 'tv', 'Videocon'),
(45, 'tv', 15000, 1, 'Product_image/7d7752e440b6cca0ef106af0d598dd35image_search_1582549339151.jpg', 'tv', 'Videocon'),
(46, 'tv', 15125, 1, 'Product_image/326cf465e595d8eba982ab6878c33e0fimage_search_1582549344308.jpg', 'tv', 'Videocon'),
(47, 'fridge', 30500, 1, 'Product_image/1ac0a483963616a54f76e5c242403d87image_search_1582549400123.jpg', 'fridge', 'Videocon'),
(48, 'fridge', 100000, 1, 'Product_image/75753f05fe8699034c2a097cabdb8c62image_search_1582549440050.png', 'fridge', 'Whirpool'),
(49, 'fridge', 36500, 1, 'Product_image/02f7bd0cd99415565a944420e03390a4image_search_1582549448174.jpg', 'fridge', 'Whirpool'),
(50, 'tv', 15000, 1, 'Product_image/783eb81b837374a20925311f578e41dbp1.jpg', 'tv', 'Whirpool'),
(51, 'tv', 15000, 1, 'Product_image/8c83cda325f884bfdafd059135334d91p1.jpg', 'tv', 'LG'),
(52, 'washing_machine', 15000, 1, 'Product_image/30f5eda6482e4aad90546666b4813a96image_search_1582549480782.jpg', 'washing_machine', 'LG');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(12) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'Hozefa Furniturewala', 'Hozefa123@gmail.com', '123456'),
(2, 'jagat pandya', 'jagatpandya133@gmail.com', '123456'),
(3, 'ahad', 'ahad456@gmail.com', '123456'),
(4, 'Taher ', 'taherbasrawala52@gmail.com', 'taher@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin_tb`
--
ALTER TABLE `adminlogin_tb`
  ADD PRIMARY KEY (`a_login_id`);

--
-- Indexes for table `assets_tb`
--
ALTER TABLE `assets_tb`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `assignwork_tb`
--
ALTER TABLE `assignwork_tb`
  ADD PRIMARY KEY (`rno`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_tb`
--
ALTER TABLE `customer_tb`
  ADD PRIMARY KEY (`custid`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `requesterlogin_tb`
--
ALTER TABLE `requesterlogin_tb`
  ADD PRIMARY KEY (`r_login_id`);

--
-- Indexes for table `sell`
--
ALTER TABLE `sell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submitrequest_tb`
--
ALTER TABLE `submitrequest_tb`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `technician_tb`
--
ALTER TABLE `technician_tb`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `uploadproduct`
--
ALTER TABLE `uploadproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin_tb`
--
ALTER TABLE `adminlogin_tb`
  MODIFY `a_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `assets_tb`
--
ALTER TABLE `assets_tb`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `assignwork_tb`
--
ALTER TABLE `assignwork_tb`
  MODIFY `rno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_tb`
--
ALTER TABLE `customer_tb`
  MODIFY `custid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `requesterlogin_tb`
--
ALTER TABLE `requesterlogin_tb`
  MODIFY `r_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sell`
--
ALTER TABLE `sell`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `submitrequest_tb`
--
ALTER TABLE `submitrequest_tb`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `technician_tb`
--
ALTER TABLE `technician_tb`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `uploadproduct`
--
ALTER TABLE `uploadproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
