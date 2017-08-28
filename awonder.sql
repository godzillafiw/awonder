-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2017 at 08:01 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `awonder`
--

-- --------------------------------------------------------

--
-- Table structure for table `aw_categories`
--

CREATE TABLE `aw_categories` (
  `cat_id` int(15) NOT NULL,
  `cat_name` varchar(150) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aw_categories`
--

INSERT INTO `aw_categories` (`cat_id`, `cat_name`, `create_at`) VALUES
(1, 'Solar street series', '2017-08-13 00:00:00'),
(2, 'Solar home system', '0000-00-00 00:00:00'),
(3, 'Solar traffic light', '2017-08-13 00:00:00'),
(4, 'Solar module and PV station accessory', '2017-08-13 00:00:00'),
(5, 'Solar water hoter', '2017-08-13 00:00:00'),
(6, 'LED display module', '2017-08-13 00:00:00'),
(7, 'LED light Part1', '2017-08-13 00:00:00'),
(8, 'LED light Part2', '2017-08-13 00:00:00'),
(9, 'Crystal light', '2017-08-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `aw_contacts`
--

CREATE TABLE `aw_contacts` (
  `con_id` int(15) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(155) NOT NULL,
  `messages` text NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aw_contacts`
--

INSERT INTO `aw_contacts` (`con_id`, `fullname`, `email`, `subject`, `messages`, `create_at`) VALUES
(1, 'test', 'godzillafiw@gmail.com', 'test', 'test', '0000-00-00 00:00:00'),
(2, 'test', 'godzillafiw@gmail.com', 'test', 'test', '2017-08-27 11:07:19'),
(3, 'test', 'godzillafiw@gmail.com', 'test', 'test', '2017-08-27 11:09:15');

-- --------------------------------------------------------

--
-- Table structure for table `aw_image`
--

CREATE TABLE `aw_image` (
  `img_id` int(15) NOT NULL,
  `img_name` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aw_orders`
--

CREATE TABLE `aw_orders` (
  `order_id` int(11) NOT NULL COMMENT 'รหัส',
  `order_date` datetime NOT NULL COMMENT 'วันที่สั่งซื้อ',
  `total` decimal(8,2) NOT NULL DEFAULT '0.00' COMMENT 'ราคารวม',
  `user_id` int(11) NOT NULL COMMENT 'ผู้สั่งซื้อ',
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อผู้สั่งซื้อ',
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'อีเมล์',
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ที่อยู่ผู้รับสินค้า',
  `district` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'อำเภอ',
  `province` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'จังหวัด',
  `postcode` varchar(5) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รหัสไปรษณีย์',
  `order_status` enum('pending','payments','shipping','delivery') CHARACTER SET utf8 NOT NULL DEFAULT 'pending' COMMENT 'สถานะการสั่งซื้อสินค้า'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `aw_orders`
--

INSERT INTO `aw_orders` (`order_id`, `order_date`, `total`, `user_id`, `fullname`, `email`, `phone`, `address`, `district`, `province`, `postcode`, `order_status`) VALUES
(10, '2015-01-07 17:24:44', '100420.00', 2, 'สมชาย ใจดี', 'somchai@itoffside.com', '0822234419', '67 หมู่ 20 ตำบล ไอที', 'ไอทีออฟไซต์', 'ดอทคอม', '12110', 'pending'),
(11, '2015-11-20 21:15:15', '171900.00', 2, 'จันทิรา', 'juntira_bo@hotmail.com', '999999999', '369/2 ม.4 ต.สินเจริญ', 'พระแสง', 'สุราษฏร์ธานี', '84210', 'pending'),
(12, '2015-11-20 22:13:53', '6990.00', 2, 'อนุชา บัวตุม', 'anuchar_4@hotmail.com', '0872669863', '59/8', 'เมือง', 'สุราษฏร์ธานี', '84000', 'pending'),
(13, '2015-11-22 22:13:52', '24500.00', 2, 'สมพล', 'godzillafiw@gmail.com', '88888888', '669', 'สุขใจ', 'เบิกบาน', '77777', 'pending'),
(14, '2016-01-13 11:23:39', '78100.00', 2, 'ใจสิงห์ เด็ดเดี่ยว', 'gfte@hotmail.com', '157896485', '15/87', 'ราดยาง', 'ยางมะตอย', '08795', 'pending'),
(15, '2016-01-13 11:26:49', '127740.00', 2, 'บรรชิต จิตแจ่มใส', 'jkiopr@gmail.com', '023697857', '256/7', 'ทุ่งนา', 'กรุงเทพฯ', '03678', 'pending'),
(16, '2016-01-13 11:28:52', '24579.00', 2, 'กระจง หูตั้ง', 'pojhyy@gmail.com', '0874569845', '336/77', 'ป่าสัก', 'กรุงเทพฯ', '58749', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `aw_order_detail`
--

CREATE TABLE `aw_order_detail` (
  `or_id` int(11) NOT NULL COMMENT 'รหัสชำระเงิน',
  `pay_money` decimal(8,2) NOT NULL DEFAULT '0.00' COMMENT 'จำนวนโอน',
  `pay_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'วันเวลาโอน',
  `detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT '0.00' COMMENT 'รายละเอียด',
  `order_id` int(11) NOT NULL DEFAULT '0' COMMENT 'รหัสใบสั่งซื้อ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aw_payments`
--

CREATE TABLE `aw_payments` (
  `pay_id` int(15) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `transaction_number` int(30) NOT NULL,
  `slip_file` varchar(60) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aw_payments`
--

INSERT INTO `aw_payments` (`pay_id`, `fullname`, `transaction_number`, `slip_file`, `create_at`) VALUES
(1, 'anucha', 12535238, '8bb81c86ce1b0a7ada2cd9f18a4765f8', '2017-08-27 11:56:07'),
(2, 'anucha', 12535238, 'aa6c68e0d5899d52c30e42c62636373a', '2017-08-27 11:56:19'),
(3, 'anucha', 12535238, '1310459a2fa0ca107d', '2017-08-27 11:57:48'),
(4, 'jatira', 12535238, '708159a2fc4131b16', '2017-08-28 12:07:13'),
(5, 'อนุชา', 12535238, '1710259a2fc944cddf', '2017-08-28 12:08:36'),
(6, 'anucha', 12535238, '', '2017-08-28 12:09:20');

-- --------------------------------------------------------

--
-- Table structure for table `aw_price`
--

CREATE TABLE `aw_price` (
  `price_id` int(15) NOT NULL,
  `price` decimal(8,2) NOT NULL DEFAULT '0.00',
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aw_product`
--

CREATE TABLE `aw_product` (
  `p_id` int(15) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_detail` text NOT NULL,
  `c_id` int(15) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aw_product`
--

INSERT INTO `aw_product` (`p_id`, `product_name`, `product_detail`, `c_id`, `create_at`) VALUES
(1, 'สินค้า', '<p>ฟหกหก</p>\r\n', 0, '2017-08-27 03:16:39'),
(2, 'sdsad', '', 0, '2017-08-27 05:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `aw_quotation`
--

CREATE TABLE `aw_quotation` (
  `q_id` int(15) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aw_quotation`
--

INSERT INTO `aw_quotation` (`q_id`, `fullname`, `company_name`, `email`, `phone`, `address`, `detail`, `create_at`) VALUES
(2, 'test', 'test', 'test', 'test', 'test', 'test', '0000-00-00 00:00:00'),
(3, 'test', 'test', 'test', 'test', 'test', 'test', '0000-00-00 00:00:00'),
(4, 'test', 'test', 'test@test.com', 'test', 'test', 'test', '2017-08-27 06:05:25');

-- --------------------------------------------------------

--
-- Table structure for table `aw_users`
--

CREATE TABLE `aw_users` (
  `u_id` int(11) NOT NULL COMMENT 'รหัสสมาชิก',
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อจริง',
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'นามสกุล',
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อเข้าใช้',
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รหัสผ่าน',
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'อีเมล์',
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'ที่อยู่',
  `district` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'อำเภอ',
  `province` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'จังหวัด',
  `postcode` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'รหัสไปรษณีย์',
  `create_at` datetime NOT NULL COMMENT 'วันที่สร้าง',
  `user_type` enum('user','admin') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user' COMMENT 'ประเภทสมาชิก',
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `aw_users`
--

INSERT INTO `aw_users` (`u_id`, `firstname`, `lastname`, `username`, `password`, `email`, `phone`, `address`, `district`, `province`, `postcode`, `create_at`, `user_type`, `salt`) VALUES
(1, 'อนุชา', 'บัวตุม', 'admin', '7492be5d996e4c9facddcaad92001d27c1003bb4', 'godzillafiw@hotmail.com', '0923135938', '16 ม.4 ต.สินเจริญ', 'พระแสง', 'สุราษฏร์ธานี', '84210', '2015-07-31 22:02:36', 'admin', 'hZLWRpr1BzuOTMr6AiodTe');

-- --------------------------------------------------------

--
-- Table structure for table `system_config`
--

CREATE TABLE `system_config` (
  `config_key` varchar(255) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `system_config`
--

INSERT INTO `system_config` (`config_key`, `value`) VALUES
('local_latitude', '13.7732834'),
('local_longitude', '100.5739178'),
('site_author', 'Sailian Media LTD.'),
('site_desc', 'บริษัทรับทำเว็บไซต์ทุกรูปแบบ ราคาถูกที่สุด วิเคราะห์ระบบ ออกแบบเว็บ พัฒนาระบบ ออกแบบ website รับออกแบบเว็บ domain design webdesign web application web development webhosting host hosting SEO'),
('site_email', 'godzillafiw@gmail.com'),
('site_keyword', 'รับทำเว็บไซต์, บริษัทรับทำเว็บ, ทำเว็บไซต์ราคาถูก, บริษัทรับทำเว็บไซต์, รับทำเว็บ, รับทำเว็บราคาถูก, เขียนเว็บไซต์,โฮสติ้ง, เว็บโฮสติ้ง, บริษัทรับทำเวป, ไทยเว็บ, ออกแบบเว็บไซต์, webdesign,  บริษัทรับทำเว็บราคาถูก,  รับทำเว็บดี, บริษัททำเว็บดี, บริษัทดีๆที่รับทำเว็บ, แนะนำบริษัทรับทำเว็บ, ออกแบบ web บริษัท, รับโปรโมทเว็บไซต์, รับออกแบบเว็บไซต์, รับจ้างทำเว็บไซต์, web application, พัฒนาระบบ, บริษัทรับทำเว็บไซต์, บริษัทออกแบบเว็บไซต์, ราคา ออกแบบ เว็บไซต์, ราคา รับ ออกแบบ เว็บ, เขียน php, รับทำเว็บ, จัดทำเว็บไซต์, จัดทำเว็บ, รับออกแบบเว็บ,ออกแบบเว็บ,จดโดเมน,พื้นที่เว็บ,โปรโมทเว็บ, เว็บไซต์ราคาถูก,รับทำเว็บทุกรูปแบบ, รับทำเว็บทั่วประเทศ, เขียน html ,เขียน css, เว็บบนมือถือ, ออกแบบบนโทรศัพท์, Responsive Smart Phone'),
('website_name', 'Sailian Media Co., LTD.');

-- --------------------------------------------------------

--
-- Table structure for table `system_users`
--

CREATE TABLE `system_users` (
  `u_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `permiss` enum('staff','admin') NOT NULL,
  `status` enum('0','1') NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_image` varchar(250) DEFAULT NULL,
  `salt` varchar(255) NOT NULL,
  `username` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `system_users`
--

INSERT INTO `system_users` (`u_id`, `first_name`, `last_name`, `permiss`, `status`, `password`, `user_image`, `salt`, `username`) VALUES
(1, 'Anucha', 'Buatum', 'admin', '1', '02635592c1ec2b5bc5c21a77e2e8b83b2292c923', 'anucha.jpg', 'jkiwkM3SdhN1dxfePPIhXe', 'admin'),
(2, 'Jaruphan', 'U-krit', 'admin', '1', '70ee77d2158102f0e7be4a3c5377c2406c0d9ef6', 'anucha.jpg', 'qVzn533qFxUuXJDXn.ZK5u', 'poopae');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aw_categories`
--
ALTER TABLE `aw_categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `aw_contacts`
--
ALTER TABLE `aw_contacts`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `aw_image`
--
ALTER TABLE `aw_image`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `aw_orders`
--
ALTER TABLE `aw_orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `aw_payments`
--
ALTER TABLE `aw_payments`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `aw_price`
--
ALTER TABLE `aw_price`
  ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `aw_product`
--
ALTER TABLE `aw_product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `aw_quotation`
--
ALTER TABLE `aw_quotation`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `aw_users`
--
ALTER TABLE `aw_users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `system_config`
--
ALTER TABLE `system_config`
  ADD PRIMARY KEY (`config_key`);

--
-- Indexes for table `system_users`
--
ALTER TABLE `system_users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aw_categories`
--
ALTER TABLE `aw_categories`
  MODIFY `cat_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `aw_contacts`
--
ALTER TABLE `aw_contacts`
  MODIFY `con_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `aw_image`
--
ALTER TABLE `aw_image`
  MODIFY `img_id` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aw_orders`
--
ALTER TABLE `aw_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส', AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `aw_payments`
--
ALTER TABLE `aw_payments`
  MODIFY `pay_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `aw_price`
--
ALTER TABLE `aw_price`
  MODIFY `price_id` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aw_product`
--
ALTER TABLE `aw_product`
  MODIFY `p_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `aw_quotation`
--
ALTER TABLE `aw_quotation`
  MODIFY `q_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `aw_users`
--
ALTER TABLE `aw_users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสสมาชิก', AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `system_users`
--
ALTER TABLE `system_users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
