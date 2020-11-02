-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2019 at 03:25 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `florist`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `adminname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `adminname`, `email`, `password`) VALUES
(1, 'Floral Bellea', 'belle@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `catId` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`catId`, `category`) VALUES
(1, 'Hand'),
(2, 'Wedding'),
(3, 'Vege'),
(4, 'Sympathy');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `user_id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `address` text NOT NULL,
  `district` char(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `postcode` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(25) NOT NULL,
  `regdate` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`user_id`, `username`, `fname`, `lname`, `address`, `district`, `state`, `postcode`, `phone`, `email`, `password`, `regdate`) VALUES
(2, 'belle93', 'Joyce', 'Florist', 'Address Kg Tunoh', 'Segama', 'Sabah', '89507', '0138816754', 'belle93@gmail.com', '123456', '2019-05-30 04:37:44.322672'),
(3, 'mon18', 'Joyce', 'Grace', 'Kg Bahang, P/S 536', 'Penampang', 'Sabah', '89507', '0138816754', 'mon18@gmail.com', 'mon18', '2019-05-28 21:55:50.140255'),
(4, 'Park89', 'Park ', 'Soo Joon', 'Taman Pelita', 'Likas', 'Sabah', '88800', '0168816754', 'park89@gmail.com', 'park89', '2019-05-28 21:55:59.805124'),
(5, 'mark_', 'Mark ', 'Ng', 'Taman Megah', 'Luyang', 'Sabah', '88100', '0118897123', 'mark88@yahoo.com', '123456', '2019-05-28 21:56:05.011454'),
(6, 'nurhodelta', 'neovic', 'devierte', 'Address ', 'District', 'Sabah', '88800', '', '', '123456', '2019-05-30 11:47:37.717694'),
(7, 'julyn', 'julyn', 'divinagracia', 'Hungab', 'Penampang', 'Sabah', '', '0138816754', 'julyn@gmail.com', 'julyn', '2019-05-30 11:48:20.818207'),
(8, 'lee09', 'lee', 'ann', '', 'District', 'Sabah', '', '', '', 'lee', '2019-05-30 11:47:57.698401'),
(9, 'tin45', 'tintin', 'demapanag', '', 'Kota Kinabalu', 'Sabah', '', '', '', '', '2019-05-30 04:34:31.042225'),
(10, 'deedee', 'dee', 'tolentino', '', 'Lido', 'Sabah', '', '', '', '', '2019-05-30 04:34:24.950096'),
(11, 'jjacinto', 'jaira', 'jacinto', '', 'Putatan', 'Sabah', '', '', '', '', '2019-05-30 04:34:37.166293'),
(12, 'tdevi', 'tetai', 'devi', '', 'Tanjung Aru', 'Sabah', '', '', '', '', '2019-05-30 04:34:44.748487'),
(14, 'ppascual', 'piolo', 'pascual', '', 'Kepayan', 'Sabah', '', '', '', '', '2019-05-30 04:34:52.560967'),
(17, '', 'Hana', 'Marie', 'Kg Tunoh', 'Penampang', 'Sabah', '88100', '0138806754', '', '', '2019-05-28 21:56:38.625008'),
(18, 'xavier', 'Jeremiah', 'Xavier', 'Kg Bahang', 'Kota Kinabalu', 'Sabah', '88800', '0138886651', 'xavier@gmail.com', 'xavierj', '2019-05-28 21:56:41.416195'),
(19, 'MONT', 'Anna', 'Montana', 'Heights ', 'Menggatal', 'Sabah', '88741', '0197564123', 'mont@gmail.com', '123456', '2019-05-28 21:56:44.584558'),
(20, '', 'Joy', 'Grace', 'Taman Indah', 'Luyang', '', '88100', '138816753', 'Joyce@gmail.com', '', '2019-05-29 00:56:36.020080'),
(21, 'Mikeo', 'Miwako', 'Gareth', 'Incheonae', 'District', '', '88810', '0147895642', 'mikeo@yahoo.com', '123456', '2019-05-30 11:28:04.494954'),
(22, '', '', '', '', '', '', '88100', '', '', '', '2019-05-30 11:49:18.314144');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `units` int(11) NOT NULL,
  `price` float(10,2) NOT NULL,
  `total` float(10,2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `b_date` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `product_code`, `product_name`, `units`, `price`, `total`, `date`, `b_date`, `email`, `status`) VALUES
(68, 'HB02', 'Zinnia', 1, 150.00, 150.00, '2019-05-15 13:13:58', '0000-00-00', '4', 'On Delivery'),
(69, 'HB17', ' Ranunculus', 1, 140.00, 140.00, '2019-05-15 13:14:41', '1970-01-01', '4', 'Complete'),
(70, 'HB17', ' Ranunculus', 1, 140.00, 140.00, '2019-05-16 13:35:19', '1970-01-01', '4', 'Pending'),
(71, 'HB02', 'Zinnia', 2, 150.00, 300.00, '2019-05-16 19:35:07', '1970-01-01', '2', 'On Delivery'),
(72, 'HB15', 'Solidago', 1, 109.00, 109.00, '2019-05-17 19:35:07', '1970-01-01', '2', 'Pending'),
(73, 'HB05', ' MisKalanchoe', 1, 100.00, 100.00, '2019-05-18 19:36:41', '1970-01-01', '5', 'Complete'),
(74, 'HB10', 'Alstroemeria', 1, 190.00, 190.00, '2019-05-19 19:36:41', '1970-01-01', '5', 'Complete'),
(75, 'HB02', 'Zinnia', 2, 150.00, 300.00, '2019-05-23 02:11:05', '1970-01-01', '2', 'On Delivery'),
(76, 'HB02', 'Zinnia', 1, 150.00, 150.00, '2019-05-28 07:08:20', '1970-01-01', '2', 'On Delivery'),
(77, 'HB03', 'Bird of Paradise', 2, 120.00, 240.00, '2019-05-28 07:08:20', '1970-01-01', '2', 'On Delivery'),
(78, 'HB02', 'Zinnia', 1, 150.00, 150.00, '2019-05-28 07:09:21', '1970-01-01', '2', 'Complete'),
(79, 'HB03', 'Bird of Paradise', 2, 120.00, 240.00, '2019-05-28 07:09:21', '1970-01-01', '2', 'Pending'),
(80, 'HB08', 'Daffodil', 1, 120.00, 120.00, '2019-05-28 07:44:40', '1970-01-01', '2', 'Complete'),
(81, 'HB08', 'Daffodil', 1, 120.00, 120.00, '2019-05-28 08:32:08', '1970-01-01', '2', 'Complete'),
(82, 'HB02', 'Zinnia', 1, 150.00, 150.00, '2019-05-28 18:12:26', '0000-00-00', '2', 'On Delivery'),
(83, 'HB02', 'Zinnia', 1, 150.00, 150.00, '2019-05-28 18:15:16', '0000-00-00', '2', 'On Delivery'),
(84, 'HB02', 'Zinnia', 1, 150.00, 150.00, '2019-05-28 19:45:47', '0000-00-00', '2', 'Pending'),
(85, 'HB04', 'Omakase dark', 1, 120.00, 120.00, '2019-05-28 19:45:47', '0000-00-00', '2', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(11) NOT NULL,
  `product_code` varchar(30) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `units` int(5) NOT NULL,
  `price` float NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `b_date` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `payed` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `product_code`, `product_name`, `units`, `price`, `total`, `date`, `b_date`, `email`, `payed`) VALUES
(1, 'HB01', 'HB17', 1, 100, 100, '2019-05-27 03:12:18', '2019-05-12', '2', 'Online_Payment'),
(2, 'HB02', 'Zinnia', 1, 150, 150, '2019-05-27 04:28:32', '2019-05-20', '2', 'Online_Payment'),
(3, 'HB09', 'Larkspur', 2, 120, 240, '2019-05-27 04:31:41', '2019-05-13', '2', 'Yet to Pay'),
(4, 'HB02', 'Zinnia', 1, 150, 150, '2019-05-27 05:47:05', '0000-00-00', '2', 'Yet to Pay'),
(5, 'HB02', 'Zinnia', 1, 150, 150, '2019-05-27 06:00:00', '0000-00-00', '2', 'Yet to Pay'),
(6, 'HB05', ' MisKalanchoe', 1, 100, 100, '2019-05-27 06:00:00', '0000-00-00', '2', 'Yet to Pay'),
(7, 'HB13', ' Gladiolus', 2, 120, 240, '2019-05-27 06:00:00', '0000-00-00', '2', 'Yet to Pay'),
(8, 'HB17', ' Ranunculus', 1, 140, 140, '2019-05-27 06:01:58', '0000-00-00', '2', 'Yet to Pay'),
(9, 'HB04', 'Omakase dark', 1, 120, 120, '2019-05-27 06:01:58', '0000-00-00', '2', 'Yet to Pay'),
(10, 'HB02', 'Zinnia', 2, 150, 300, '2019-05-27 06:02:59', '0000-00-00', '2', 'Online_Payment'),
(11, 'HB02', 'Zinnia', 2, 150, 300, '2019-05-27 19:35:14', '0000-00-00', '2', 'Yet to Pay'),
(12, 'HB15', 'Solidago', 1, 109, 109, '2019-05-27 19:35:14', '0000-00-00', '2', 'Yet to Pay'),
(13, 'HB05', ' MisKalanchoe', 1, 100, 100, '2019-05-27 19:36:49', '0000-00-00', '5', 'Online_Payment'),
(14, 'HB10', 'Alstroemeria', 1, 190, 190, '2019-05-27 19:36:49', '0000-00-00', '5', 'Online_Payment'),
(15, 'HB02', 'Zinnia', 2, 150, 300, '2019-05-28 02:11:24', '0000-00-00', '2', 'Online_Payment'),
(16, 'HB02', 'Zinnia', 1, 150, 150, '2019-05-28 19:45:53', '0000-00-00', '2', 'Yet to Pay'),
(17, 'HB04', 'Omakase dark', 1, 120, 120, '2019-05-28 19:45:53', '0000-00-00', '2', 'Yet to Pay');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(25) DEFAULT NULL,
  `product_code` varchar(60) NOT NULL,
  `catId` int(11) NOT NULL,
  `description` text,
  `price` float(10,2) NOT NULL,
  `product_qty` int(5) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_code`, `catId`, `description`, `price`, `product_qty`, `image`) VALUES
(1, 'Freesia', 'HB01', 1, 'This bouquet has a simple recipe of classic pink roses, plus a touch of peach and white colors, and is our all-time best seller.', 100.00, 5, 'hb1.jpg'),
(3, 'Bird of Paradise', 'HB03', 1, 'Lush, velvety red roses plus our selection of whites and accompanying green foliage for a handsome bouquet.\r\n', 120.00, 5, 'hb3.jpg'),
(4, 'Omakase dark', 'HB04', 1, 'Omakase is a Japanese phrase that means \"I\'ll leave it up to you\".\r\n\r\n', 120.00, 5, 'hb4.jpg'),
(5, ' MisKalanchoe', 'HB05', 1, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order. ', 100.00, 2, 'hb5.jpg'),
(6, 'Marigold', 'HB06', 1, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order. ', 130.00, 10, 'hb6.jpg'),
(7, 'Jetaime', 'HB07', 1, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order.', 100.00, 1, 'hb7.jpg'),
(8, 'Daffodil', 'HB08', 1, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order.', 120.00, 10, 'hb8.jpg'),
(9, 'Larkspur', 'HB09', 1, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order. What you receive will differ from the picture reference. ', 120.00, 10, 'hb9.jpg'),
(10, 'Alstroemeria', 'HB10', 1, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order.\r\n', 190.00, 2, 'hb10.jpg'),
(11, 'Anemone', 'HB11', 1, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order.', 100.00, 2, 'hb11.jpg'),
(12, 'Star of Bethlehem', 'HB12', 1, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order.', 100.00, 1, 'hb12.jpg'),
(13, ' Gladiolus', 'HB13', 1, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order. What you receive will differ from the picture reference.', 120.00, 2, 'hb13.jpg'),
(14, 'Jonquil', 'HB14', 1, 'Even the same flower in the same colour will have peculiarities in shade and size - such is the virtue of nature! That said, it will be in your chosen theme and our signature lush and organic style.\r\n', 109.00, 0, 'hb14.jpg'),
(15, 'Solidago', 'HB15', 1, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order.\r\n', 109.00, 2, 'hb15.jpg'),
(16, 'Trachelium', 'HB16', 3, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order.', 130.00, 2, 'sp2.jpeg'),
(17, ' Ranunculus', 'HB17', 3, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order.\r\n', 140.00, 10, 'sp3.jpeg'),
(18, 'Phalaenopsis', 'HB18', 3, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order.', 120.00, 0, 'sp4.jpg'),
(26, 'Gladiolus', 'HB19', 3, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order.', 20.00, 5, 'sp3.jpg'),
(34, 'Digitalis', 'HB20', 2, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order.', 20.00, 5, 'BP001_e.jpg'),
(35, 'Primulaceae', 'HB21', 2, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order.', 100.00, 5, 'BP002_e.jpg'),
(42, 'Delphinium', 'HB22', 2, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order.', 20.00, 5, 'BP004_e.jpg'),
(43, 'Cypripedioideae', 'HB23', 2, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order.', 0.00, 0, 'BP008_e.jpg'),
(44, 'Syringa', 'HB24', 2, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order.', 0.00, 5, 'BP010_e.jpg'),
(46, 'Hyacinthus', 'HB25', 2, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order.', 0.00, 0, 'BP011_e.jpg'),
(47, 'Erica', 'HB26', 3, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order.', 0.00, 4, 'sp6.jpg'),
(48, 'Tagetes', 'HB27', 3, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order.', 0.00, 2, 'sp8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `product_code` (`product_code`,`product_name`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `catId` (`catId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`catId`) REFERENCES `tbl_category` (`catId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
