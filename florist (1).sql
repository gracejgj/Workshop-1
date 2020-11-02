-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2019 at 10:46 PM
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
(1, 'Belle Florist', 'belle@admin.com', 'admin');

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
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `contact`, `message`, `status`, `date`) VALUES
(2, 'md.alvi islam', 'customer@gmail.com', '1622425286', 'szzss', 1, '2018-08-05 23:23:25');

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
  `country` varchar(30) NOT NULL,
  `postcode` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(25) NOT NULL,
  `regdate` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`user_id`, `username`, `fname`, `lname`, `address`, `district`, `country`, `postcode`, `phone`, `email`, `password`, `regdate`) VALUES
(1, '', 'mappy', 'map', '', '', 'Malaysia', '', '', '', '123456', '2019-05-25 06:51:40.069976'),
(2, 'belle93', 'Grace', 'Florist', 'Kg Tunoh', 'Segama', 'Malaysia', '89507', '', 'belle93@gmail.com', '123456', '2019-05-25 17:08:56.632195'),
(3, 'mon18', 'Joyce', 'Grace', 'Kg Bahang, P/S 536', 'Penampang', 'Malaysia', '89507', '0138816754', 'mon18@gmail.com', 'mon18', '2019-05-27 18:33:21.038547'),
(4, 'Park89', 'Park ', 'Soo Joon', 'Taman Pelita', 'Likas', 'Malaysia', '88800', '0168816754', 'park89@gmail.com', 'park89', '2019-05-12 03:07:18.220130'),
(5, 'mark_', 'Mark ', 'Ng', 'Taman Megah', 'Luyang', 'Malaysia', '88100', '0118897123', 'mark88@yahoo.com', '123456', '2019-05-08 02:12:26.114438'),
(6, 'nurhodelta', 'neovic', 'devierte', '', '', '', '', '', '', '', '2019-05-25 07:21:00.859946'),
(7, 'julyn', 'julyn', 'divinagracia', '', '', '', '', '', '', '', '2019-05-25 07:21:00.859946'),
(8, 'lee09', 'lee', 'ann', '', '', '', '', '', '', '', '2019-05-25 07:21:00.859946'),
(9, 'tin45', 'tintin', 'demapanag', '', '', '', '', '', '', '', '2019-05-25 07:21:00.859946'),
(10, 'deedee', 'dee', 'tolentino', '', '', '', '', '', '', '', '2019-05-25 07:21:00.859946'),
(11, 'jjacinto', 'jaira', 'jacinto', '', '', '', '', '', '', '', '2019-05-25 07:21:00.859946'),
(12, 'tdevi', 'tetai', 'devi', '', '', '', '', '', '', '', '2019-05-25 07:21:00.859946'),
(13, 'tinhermosa', 'tintin', 'hermosa', '', '', '', '', '', '', '', '2019-05-25 07:21:00.859946'),
(14, 'ppascual', 'piolo', 'pascual', '', '', '', '', '', '', '', '2019-05-25 07:21:00.859946'),
(17, '', 'Hana', 'Marie', 'Kg Tunoh', 'Penampang', '', '88100', '0138806754', '', '', '2019-05-27 18:26:34.355140'),
(18, 'xavier', 'Jeremiah', 'Xavier', 'Kg Bahang', 'Kota Kinabalu', '', '88800', '0138886651', 'xavier@gmail.com', 'xavierj', '2019-05-27 18:30:17.179017');

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
  `total` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `booking_date` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `product_code`, `product_name`, `units`, `price`, `total`, `date`, `booking_date`, `email`, `fname`, `status`) VALUES
(68, 'HB02', 'Zinnia', 1, 150.00, 150, '2019-05-27 13:13:58', '0000-00-00', '4', '4', 'Pending'),
(69, 'HB17', ' Ranunculus', 1, 140.00, 140, '2019-05-27 13:14:41', '1970-01-01', '4', '4', 'Pending'),
(70, 'HB17', ' Ranunculus', 1, 140.00, 140, '2019-05-27 13:35:19', '1970-01-01', '4', '4', 'Pending'),
(71, 'HB02', 'Zinnia', 2, 150.00, 300, '2019-05-27 19:35:07', '1970-01-01', '2', '2', ''),
(72, 'HB15', 'Solidago', 1, 109.00, 109, '2019-05-27 19:35:07', '1970-01-01', '2', '2', ''),
(73, 'HB05', ' MisKalanchoe', 1, 100.00, 100, '2019-05-27 19:36:41', '1970-01-01', '5', '5', ''),
(74, 'HB10', 'Alstroemeria', 1, 190.00, 190, '2019-05-27 19:36:41', '1970-01-01', '5', '5', '');

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
  `booking_date` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `payed` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `product_code`, `product_name`, `units`, `price`, `total`, `date`, `booking_date`, `email`, `fname`, `payed`) VALUES
(1, 'HB01', 'HB17', 1, 100, 100, '2019-05-27 03:12:18', '2019-05-12', '2', '2', 'Online_Payment'),
(2, 'HB02', 'Zinnia', 1, 150, 150, '2019-05-27 04:28:32', '2019-05-20', '2', '2', 'Online_Payment'),
(3, 'HB09', 'Larkspur', 2, 120, 240, '2019-05-27 04:31:41', '2019-05-13', '2', '2', 'Yet to Pay'),
(4, 'HB02', 'Zinnia', 1, 150, 150, '2019-05-27 05:47:05', '0000-00-00', '2', '2', 'Yet to Pay'),
(5, 'HB02', 'Zinnia', 1, 150, 150, '2019-05-27 06:00:00', '0000-00-00', '2', '2', 'Yet to Pay'),
(6, 'HB05', ' MisKalanchoe', 1, 100, 100, '2019-05-27 06:00:00', '0000-00-00', '2', '2', 'Yet to Pay'),
(7, 'HB13', ' Gladiolus', 2, 120, 240, '2019-05-27 06:00:00', '0000-00-00', '2', '2', 'Yet to Pay'),
(8, 'HB17', ' Ranunculus', 1, 140, 140, '2019-05-27 06:01:58', '0000-00-00', '2', '2', 'Yet to Pay'),
(9, 'HB04', 'Omakase dark', 1, 120, 120, '2019-05-27 06:01:58', '0000-00-00', '2', '2', 'Yet to Pay'),
(10, 'HB02', 'Zinnia', 2, 150, 300, '2019-05-27 06:02:59', '0000-00-00', '2', '2', 'Online_Payment'),
(11, 'HB02', 'Zinnia', 2, 150, 300, '2019-05-27 19:35:14', '0000-00-00', '2', '2', 'Yet to Pay'),
(12, 'HB15', 'Solidago', 1, 109, 109, '2019-05-27 19:35:14', '0000-00-00', '2', '2', 'Yet to Pay'),
(13, 'HB05', ' MisKalanchoe', 1, 100, 100, '2019-05-27 19:36:49', '0000-00-00', '5', '5', 'Online_Payment'),
(14, 'HB10', 'Alstroemeria', 1, 190, 190, '2019-05-27 19:36:49', '0000-00-00', '5', '5', 'Online_Payment');

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
  `image` varchar(255) NOT NULL,
  `trn_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_code`, `catId`, `description`, `price`, `product_qty`, `image`, `trn_date`) VALUES
(1, 'Freesia', 'HB01', 1, 'This bouquet has a simple recipe of classic pink roses, plus a touch of peach and white colors, and is our all-time best seller.\r\n', 100.00, 100, 'hb1.jpg', '0000-00-00 00:00:00'),
(2, 'Zinnia', 'HB02', 1, 'Pure whites and breezy blues to distract, calm and please.', 150.00, 95, 'hb2.jpg', '2019-05-27 19:35:07'),
(3, 'Bird of Paradise', 'HB03', 1, 'Lush, velvety red roses plus our selection of whites and accompanying green foliage for a handsome bouquet.\r\n', 120.00, 100, 'hb3.jpg', '0000-00-00 00:00:00'),
(4, 'Omakase dark', 'HB04', 1, 'Omakase is a Japanese phrase that means \"I\'ll leave it up to you\".\r\n\r\n', 120.00, 102, 'hb4.jpg', '0000-00-00 00:00:00'),
(5, ' MisKalanchoe', 'HB05', 1, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order. ', 100.00, 109, 'hb5.jpg', '2019-05-27 19:36:41'),
(6, 'Marigold', 'HB06', 1, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order. ', 130.00, 0, 'hb6.jpg', '0000-00-00 00:00:00'),
(7, 'Jetaime', 'HB07', 2, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order.', 100.00, 5, 'hb7.jpg', '2019-05-27 15:57:45'),
(8, 'Daffodil', 'HB08', 2, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order.', 120.00, 46, 'hb8.jpg', '0000-00-00 00:00:00'),
(9, 'Larkspur', 'HB09', 2, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order. What you receive will differ from the picture reference. ', 120.00, 39, 'hb9.jpg', '0000-00-00 00:00:00'),
(10, 'Alstroemeria', 'HB10', 2, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order.\r\n', 190.00, 9, 'hb10.jpg', '2019-05-27 19:36:41'),
(11, 'Anemone', 'HB11', 2, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order.', 100.00, 151, 'hb11.jpg', '0000-00-00 00:00:00'),
(12, 'Star of Bethlehem', 'HB12', 2, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order.', 100.00, 114, 'hb12.jpg', '0000-00-00 00:00:00'),
(13, ' Gladiolus', 'HB13', 3, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order. What you receive will differ from the picture reference.', 120.00, 100, 'hb13.jpg', '0000-00-00 00:00:00'),
(14, 'Jonquil', 'HB14', 3, 'Even the same flower in the same colour will have peculiarities in shade and size - such is the virtue of nature! That said, it will be in your chosen theme and our signature lush and organic style.\r\n', 109.00, 0, 'hb14.jpg', '0000-00-00 00:00:00'),
(15, 'Solidago', 'HB15', 3, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order.\r\n', 109.00, 135, 'hb15.jpg', '2019-05-27 19:35:07'),
(16, 'Trachelium', 'HB16', 3, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order.', 130.00, 141, 'sp2.jpeg', '0000-00-00 00:00:00'),
(17, ' Ranunculus', 'HB17', 3, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order.\r\n', 140.00, 41, 'sp3.jpeg', '0000-00-00 00:00:00'),
(18, 'Phalaenopsis', 'HB18', 3, 'Our selection of fresh flowers vary every day due to season, occasion, and inspiration, and so will your order.', 120.00, 0, 'sp4.jpg', '0000-00-00 00:00:00'),
(19, 'Miwakosan', 'HB19', 3, NULL, 102.00, 10, '', '0000-00-00 00:00:00'),
(21, 'Miwakosan', 'HB19', 3, NULL, 12.00, 2, '', '0000-00-00 00:00:00'),
(22, 'Satriana', 'HB20', 2, NULL, 12.00, 2, '', '0000-00-00 00:00:00'),
(23, 'Mariana', 'HB21', 1, NULL, 115.00, 40, '', '0000-00-00 00:00:00');

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
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
