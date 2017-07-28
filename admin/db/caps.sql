-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2017 at 07:40 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `caps`
--

-- --------------------------------------------------------

--
-- Table structure for table `delete_items`
--

CREATE TABLE IF NOT EXISTS `delete_items` (
  `id` int(11) NOT NULL,
  `item_name` varchar(200) NOT NULL,
  `ip_address` varchar(200) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delete_items`
--

INSERT INTO `delete_items` (`id`, `item_name`, `ip_address`, `date`) VALUES
(1, 'gff', '192.168.2.7', '2017-05-22 15:55:31'),
(2, 'Honda Fit', '192.168.2.7', '2017-05-24 17:25:51'),
(3, '', '192.168.2.7', '2017-07-06 15:38:07'),
(4, '', '192.168.2.7', '2017-07-06 15:38:41'),
(5, '', '192.168.2.7', '2017-07-06 15:38:45'),
(6, '', '192.168.2.7', '2017-07-06 15:38:49'),
(7, '', '192.168.2.7', '2017-07-06 15:39:08'),
(8, '', '192.168.2.7', '2017-07-06 15:39:48'),
(9, '', '192.168.2.7', '2017-07-06 15:39:55'),
(10, 'hero', '192.168.2.7', '2017-07-06 15:44:17'),
(11, 'demo3', '192.168.2.7', '2017-07-06 15:47:14'),
(12, 'demo', '192.168.2.7', '2017-07-06 15:47:19');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `login_id` int(11) NOT NULL,
  `last_login` varchar(500) NOT NULL,
  `login_ip` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `last_login`, `login_ip`) VALUES
(1, '2017-05-15 11:39:54', '::1'),
(2, '2017-05-15 11:40:46', '::1'),
(3, '2017-05-15 11:40:56', '::1'),
(4, '2017-05-15 11:42:01', '::1'),
(5, '2017-05-15 11:42:28', '::1'),
(6, '2017-05-15 11:43:34', '::1'),
(7, '2017-05-15 11:44:53', '::1'),
(8, '2017-05-15 11:45:51', '::1'),
(9, '2017-05-15 11:46:31', '::1'),
(10, '2017-05-15 11:46:46', '::1'),
(11, '2017-05-15 11:47:28', '::1'),
(12, '2017-05-15 02:35:51', '::1'),
(13, '2017-05-15 02:54:52', '192.168.1.8'),
(14, '2017-05-15 06:33:45', '192.168.1.10'),
(15, '2017-05-16 10:56:11', '::1'),
(16, '2017-05-17 10:22:50', '::1'),
(17, '2017-05-18 11:49:34', '::1'),
(18, '2017-05-18 12:22:58', '192.168.1.8'),
(19, '2017-05-18 02:41:40', '::1'),
(20, '2017-05-19 10:52:00', '::1'),
(21, '2017-05-19 02:35:30', '::1'),
(22, '2017-05-19 03:39:25', '::1'),
(23, '2017-05-19 04:04:52', '192.168.1.5'),
(24, '2017-05-19 05:03:45', '::1'),
(25, '2017-05-19 05:07:55', '192.168.1.5'),
(26, '2017-05-20 11:43:37', '::1'),
(27, '2017-05-20 03:16:35', '::1'),
(28, '2017-05-22 11:04:29', '::1'),
(29, '2017-05-22 11:59:31', '192.168.1.4'),
(30, '2017-05-22 02:57:51', '::1'),
(31, '2017-05-22 04:29:04', '::1'),
(32, '2017-05-23 12:32:59', '::1'),
(33, '2017-05-24 11:09:19', '::1'),
(34, '2017-05-25 10:19:08', '::1'),
(35, '2017-05-25 12:26:35', '::1'),
(36, '2017-05-25 03:36:02', '::1'),
(37, '2017-05-25 04:51:47', '::1'),
(38, '2017-05-25 05:23:46', '::1'),
(39, '2017-05-31 04:08:30', '::1'),
(40, '2017-05-31 05:32:09', '::1'),
(41, '2017-06-02 04:06:43', '::1'),
(42, '2017-06-03 11:39:02', '::1'),
(43, '2017-06-03 11:48:17', '192.168.1.7'),
(44, '2017-06-03 06:00:23', '::1'),
(45, '2017-06-05 11:55:16', '::1'),
(46, '2017-06-09 02:01:53', '192.168.1.6'),
(47, '2017-06-09 02:03:21', '::1'),
(48, '2017-06-20 12:44:54', '::1'),
(49, '2017-06-20 05:23:23', '::1'),
(50, '2017-06-21 11:22:04', '::1'),
(51, '2017-06-21 12:38:19', '::1'),
(52, '2017-06-21 05:41:59', '::1'),
(53, '2017-07-01 05:02:31', '::1'),
(54, '2017-07-03 11:44:37', '::1'),
(55, '2017-07-06 11:26:29', '::1'),
(56, '2017-07-06 12:32:18', '::1'),
(57, '2017-07-06 03:01:56', '::1'),
(58, '2017-07-06 04:56:33', '::1'),
(59, '2017-07-07 11:04:43', '::1'),
(60, '2017-07-08 01:40:37', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `opt_login`
--

CREATE TABLE IF NOT EXISTS `opt_login` (
  `login_id` int(11) NOT NULL,
  `last_login` varchar(500) NOT NULL,
  `login_ip` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opt_login`
--

INSERT INTO `opt_login` (`login_id`, `last_login`, `login_ip`) VALUES
(1, '2017-05-29 03:09:59', '::1'),
(2, '2017-05-30 01:20:50', '::1'),
(3, '2017-05-31 04:04:38', '::1'),
(4, '2017-05-31 04:30:06', '::1'),
(5, '2017-06-02 02:59:41', '::1'),
(6, '2017-06-03 11:39:51', '::1'),
(7, '2017-06-03 11:44:58', '::1'),
(8, '2017-06-03 11:47:16', '::1'),
(9, '2017-06-21 12:33:12', '::1'),
(10, '2017-06-21 03:31:33', '::1'),
(11, '2017-06-21 05:45:16', '::1'),
(12, '2017-07-05 12:24:05', '::1'),
(13, '2017-07-05 02:56:38', '::1'),
(14, '2017-07-05 04:29:04', '::1'),
(15, '2017-07-05 06:04:00', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `opt_user`
--

CREATE TABLE IF NOT EXISTS `opt_user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `comp_name` varchar(100) NOT NULL,
  `title` enum('Mr','Mrs','Miss') NOT NULL DEFAULT 'Mr',
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `old_pass` text NOT NULL,
  `landline` varchar(20) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  `pan` varchar(20) NOT NULL,
  `caf_form` varchar(225) NOT NULL,
  `kyc_form` text NOT NULL,
  `balance` double(10,2) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Inactive',
  `userType` varchar(255) NOT NULL,
  `services` varchar(100) NOT NULL,
  `permissions` varchar(255) NOT NULL,
  `assignTo` varchar(100) NOT NULL,
  `added_by` int(11) NOT NULL,
  `firm_logo` varchar(100) NOT NULL,
  `online_status` enum('Online','Offline') NOT NULL DEFAULT 'Offline',
  `activationCode` varchar(200) NOT NULL,
  `deleteFlag` enum('Yes','No') NOT NULL DEFAULT 'No',
  `login_ip` varchar(50) NOT NULL,
  `last_login` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opt_user`
--

INSERT INTO `opt_user` (`id`, `user_id`, `comp_name`, `title`, `fname`, `lname`, `full_name`, `password`, `old_pass`, `landline`, `mobile`, `email`, `address1`, `address2`, `country`, `state`, `city`, `pincode`, `pan`, `caf_form`, `kyc_form`, `balance`, `status`, `userType`, `services`, `permissions`, `assignTo`, `added_by`, `firm_logo`, `online_status`, `activationCode`, `deleteFlag`, `login_ip`, `last_login`) VALUES
(1, 'admin', 'GHARPE KIRANA', 'Mr', 'Admin', 'ajjjjj', 'jivika ggg', '123456', '', '', 1212121212, 'jiks.gujarkar@gmail.com', 'Nagpur', 'jjjjjj', '', 21, '360', 232332, '', 'assets/images/caf-1.jpg', 'assets/images/kyc-1.jpg', 0.00, 'Active', 'ADMIN', '', '', '', 0, '', 'Online', '', 'No', '::1', '2017-07-05 06:04:00'),
(2, 'employee', 'Gharpekirana', 'Mr', 'A', 'B', '', '123456789', '', '', 0, '', '', '', '', 0, '', 0, '', '', '', 0.00, 'Active', 'EMP', '', '', '', 0, '', 'Online', '', 'No', '103.220.215.73', '2016-10-15 03:30:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bill`
--

CREATE TABLE IF NOT EXISTS `tbl_bill` (
  `bill_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `distance` varchar(200) NOT NULL,
  `base_fare` varchar(200) NOT NULL,
  `0_to_10_km` varchar(200) NOT NULL,
  `after_10_km` varchar(200) NOT NULL,
  `time_charges` varchar(200) NOT NULL,
  `min_fare` varchar(200) NOT NULL,
  `peak_time_charges` varchar(200) NOT NULL,
  `service_tax` varchar(200) NOT NULL,
  `bill_amt` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bill`
--

INSERT INTO `tbl_bill` (`bill_id`, `booking_id`, `distance`, `base_fare`, `0_to_10_km`, `after_10_km`, `time_charges`, `min_fare`, `peak_time_charges`, `service_tax`, `bill_amt`) VALUES
(1, 1, '3', '120', '30', '50', '20', '60', '', '', '200');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE IF NOT EXISTS `tbl_booking` (
  `booking_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `start_date` varchar(200) NOT NULL,
  `time` varchar(100) NOT NULL,
  `end_time` varchar(100) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `ope_id` int(11) NOT NULL,
  `source` text NOT NULL,
  `destination` text NOT NULL,
  `ride_status` enum('Waiting','Started','Completed') NOT NULL DEFAULT 'Waiting'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `cust_id`, `date`, `start_date`, `time`, `end_time`, `vehicle_id`, `cat_id`, `ope_id`, `source`, `destination`, `ride_status`) VALUES
(1, 1, '05/10/2017', '', '10:00:00 am', '01:00:00 pm', 4, 0, 1, 'Mate Square,nagpur,maharashtra', 'trimurti nagar,nagpur,maharashtra', 'Waiting'),
(2, 2, '05/18/2017', '', '10:00:00 am', '01:00:00 pm', 3, 0, 2, 'Mate Square,nagpur,maharashtra', 'trimurti nagar,nagpur,maharashtra', 'Completed'),
(3, 1, '05/20/2017', '', '10:00:00 am', '01:00:00 pm', 2, 0, 1, 'Mate Square,nagpur,maharashtra', 'trimurti nagar,nagpur,maharashtra', 'Started'),
(4, 0, 'jjj', '', 'jjj', '', 0, 2, 0, 'jjjj', 'jjjj', 'Waiting'),
(5, 16, 'kk', '', 'kkkk', '', 0, 5, 10, 'kkk', 'kkk', 'Waiting');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(200) NOT NULL,
  `cat_img` varchar(235) NOT NULL,
  `tagline` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`, `cat_img`, `tagline`) VALUES
(1, 'Medical Vehicales', 'assets/images/vehicle/medical.jpg', '<p>Nobody calls us cause they did something smart!</p>\r\n'),
(2, 'Mini Cab', 'assets/images/vehicle/mini.jpg', 'Ride Smart. Live Large.'),
(3, 'Sedan', 'assets/images/vehicle/sedan.jpg', 'The road will never be the same.'),
(4, 'SUV', 'assets/images/vehicle/suv.png', 'A car for everyone.'),
(5, 'Traveler', 'assets/images/vehicle/traveler.jpg', 'Journey at its luxurious best.'),
(6, 'Bus', 'assets/images/vehicle/bus.jpg', 'Go anywhere anytime.'),
(7, 'Truck', 'assets/images/vehicle/truck.jpg', 'Delivery unlimited.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE IF NOT EXISTS `tbl_complaint` (
  `complaint_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `dr_id` int(11) NOT NULL,
  `complaint` text NOT NULL,
  `added_date` varchar(100) NOT NULL,
  `replied` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`complaint_id`, `cust_id`, `dr_id`, `complaint`, `added_date`, `replied`) VALUES
(1, 1, 1, 'unprofessional driving', '04-05-2015', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(500) NOT NULL,
  `mob` varchar(32) NOT NULL,
  `otp` int(11) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email_id` varchar(96) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Inactive',
  `added_date` varchar(100) NOT NULL,
  `last_login` varchar(100) NOT NULL,
  `login_ip` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`cust_id`, `cust_name`, `mob`, `otp`, `password`, `email_id`, `status`, `added_date`, `last_login`, `login_ip`) VALUES
(1, 'Ganesh Rajput', '7865932645', 4228, '12345', 'grajput@gmail.com', 'Inactive', '2017-05-05', '04-12-2015', ''),
(2, 'piyush Rajput', '7841961533', 4228, '12345', 'grajput@gmail.com', 'Active', '2017-03-16', '04-12-2015', ''),
(3, '', '1212121212', 172504, '', '', 'Inactive', '2017-06-29', '', ''),
(6, 'hhhhh', '2323232323', 292733, '292733', '', 'Active', '2017-06-29', '', ''),
(7, 'klklk', '6363636363', 352892, '352892', '', 'Active', '2017-06-29', '', ''),
(8, '', '7218557650', 179781, '179781', '', 'Active', '2017-06-30', '', ''),
(15, '', '7890889088', 442504, '', '', 'Inactive', '2017-07-08', '', ''),
(16, '', '9090909090', 475375, '', '', 'Inactive', '2017-07-08', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_driver`
--

CREATE TABLE IF NOT EXISTS `tbl_driver` (
  `dr_id` int(11) NOT NULL,
  `dr_name` varchar(500) NOT NULL,
  `dr_add` text NOT NULL,
  `licence_no` varchar(200) NOT NULL,
  `doi` varchar(100) NOT NULL,
  `valid_date` varchar(100) NOT NULL,
  `type_licence` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `dr_mob` varchar(32) NOT NULL,
  `age` int(50) NOT NULL,
  `photo_id` varchar(255) NOT NULL,
  `ride_count` int(11) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Inactive'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_driver`
--

INSERT INTO `tbl_driver` (`dr_id`, `dr_name`, `dr_add`, `licence_no`, `doi`, `valid_date`, `type_licence`, `dob`, `dr_mob`, `age`, `photo_id`, `ride_count`, `status`) VALUES
(1, 'Hero Gajbhiye', 'Ramnagar,Nagpur', 'MH34 20235678945', '04-02-2013', '03-02-2033', 'LMV', '10-09-1995', '7852895623', 25, '', 0, 'Inactive'),
(2, 'sanju gajbe', 'Ramnagar,Nagpur', 'MH34 20965678945', '04-02-2013', '03-02-2033', 'LMV', '10-09-1995', '7852895623', 25, '', 0, 'Active'),
(6, 'Shivek', 'Chandrapur', 'MH 32 45623897512', '12/04/2015', '12/04/2025', 'LMV', '12-05-2017', '7885523256', 20, '', 0, 'Inactive'),
(8, 'jio', 'vcc', 'MH 32 45781245789', '12-05-2017', '12-05-2031', 'LMV', '12-05-2017', '2356566565', 23, 'assets/images/driver/1-1495445650.jpg', 0, 'Inactive'),
(9, 'sk', 'sk', 'MH 32 45623897512', '06/17/1992', '06/17/1932', 'LMV', '06/17/1992', '1212121212', 24, 'assets/images/driver/1-1495624093.jpg', 0, 'Inactive'),
(10, 'ABC', 'ABC', 'mhg-36434', '07/11/2001', '06/16/2017', 'MVC', '08/05/1976', '2525252525', 40, 'assets/images/driver/1-1496471106.jpg', 0, 'Inactive'),
(11, 'ABC', 'Dharampeth', 'MH-34MKKKH35', '07/02/2006', '08/07/2020', 'LMV-Transport', '07/09/1982', '8149555192', 34, 'assets/images/driver/1-1496998788.PNG', 0, 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_driver_complaint`
--

CREATE TABLE IF NOT EXISTS `tbl_driver_complaint` (
  `complaint_id` int(11) NOT NULL,
  `dr_id` int(11) NOT NULL,
  `complaint` text NOT NULL,
  `added_date` varchar(100) NOT NULL,
  `replied` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_driver_complaint`
--

INSERT INTO `tbl_driver_complaint` (`complaint_id`, `dr_id`, `complaint`, `added_date`, `replied`) VALUES
(1, 1, 'unprofessional driving', '04-05-2015', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_operater`
--

CREATE TABLE IF NOT EXISTS `tbl_operater` (
  `ope_id` int(11) NOT NULL,
  `ope_name` varchar(500) NOT NULL,
  `mob` varchar(32) NOT NULL,
  `email_id` varchar(96) NOT NULL,
  `opt` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `add_date` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `photo_id` varchar(255) NOT NULL,
  `online_status` enum('Online','Offline') NOT NULL DEFAULT 'Offline',
  `last_login` varchar(200) NOT NULL,
  `login_ip` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_operater`
--

INSERT INTO `tbl_operater` (`ope_id`, `ope_name`, `mob`, `email_id`, `opt`, `password`, `add_date`, `dob`, `photo_id`, `online_status`, `last_login`, `login_ip`) VALUES
(1, 'dhanu', '9669359132', 'draut2211@gmail.com', '0', '', '05/25/2017', '05/24/2017', '', 'Offline', '', ''),
(2, 'dhanu', '9669359132', 'draut2211@gmail.com', '0', '', '05/25/2017', '05/24/2017', '', 'Offline', '', ''),
(3, 'jivika', '7218557650', 'jiks.gujarkar@gmail.com', '', '', '07/27/2017', '12/17/1994', '', 'Offline', '', ''),
(4, 'jp', '7841961533', 'jiks.gujarkar@gmail.com', '', '', '07/21/2017', '07/01/2017', '', 'Offline', '', ''),
(10, 'kiran', '8989898989', 'kiran@gmail.com', '285578', '11111', '07/25/2017', '07/20/2017', 'assets/images/operater/Lighthouse.jpg', 'Offline', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ratecard`
--

CREATE TABLE IF NOT EXISTS `tbl_ratecard` (
  `ratecard_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `base_fare` varchar(100) NOT NULL,
  `0_to_10_km` varchar(100) NOT NULL,
  `after_10_km` varchar(100) NOT NULL,
  `time_charges` varchar(100) NOT NULL,
  `minimum_fare` varchar(100) NOT NULL,
  `peak_time_charges` varchar(100) NOT NULL,
  `service_tax` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `update_date` varchar(235) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ratecard`
--

INSERT INTO `tbl_ratecard` (`ratecard_id`, `cat_id`, `base_fare`, `0_to_10_km`, `after_10_km`, `time_charges`, `minimum_fare`, `peak_time_charges`, `service_tax`, `desc`, `update_date`) VALUES
(1, 2, '40', '6 per Km', '12 per Km', '1 per min', '50', '', '', '', '2017-02-27'),
(2, 1, '30', '6 per Km', '12 per Km', '1 per min', '50', '', '', '', '2017-05-05'),
(3, 3, '70', '6 per Km', '12 per Km', '1 per min', '50', '', '', '', ''),
(4, 4, '70', '6 per Km', '12 per Km', '1 per min', '50', '', '', '', ''),
(5, 5, '60', '6 per Km', '12 per Km', '1 per min', '50', '', '', '', ''),
(6, 6, '80', '6 per Km', '12 per Km', '1 per min', '50', '', '', '', ''),
(7, 7, '110', '6 per Km', '12 per Km', '1 per min', '50', '', '', '', ''),
(9, 2, '10', '1', '10', '10', '10', '10', '10', '', '2017-05-18'),
(10, 3, '78', '9', '0', '88', '', '89', '89', '', '2017-05-18'),
(11, 3, '78', '9', '0', '88', '', '89', '89', '', '2017-05-18'),
(12, 1, '10', '50', '10', '1', '40', '3', '10', '', '2017-05-23'),
(13, 3, '60', '7', '10', '1', '70', '10', '20', '', '2017-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE IF NOT EXISTS `tbl_rating` (
  `rating_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `dr_id` int(11) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE IF NOT EXISTS `tbl_review` (
  `review_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `feedback` text NOT NULL,
  `added_date` varchar(100) NOT NULL,
  `replied_review` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`review_id`, `cust_id`, `feedback`, `added_date`, `replied_review`) VALUES
(1, 2, 'good services', '05-03-2016', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `comp_name` varchar(100) NOT NULL,
  `title` enum('Mr','Mrs','Miss') NOT NULL DEFAULT 'Mr',
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `old_pass` text NOT NULL,
  `landline` varchar(20) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  `pan` varchar(20) NOT NULL,
  `caf_form` varchar(225) NOT NULL,
  `kyc_form` text NOT NULL,
  `balance` double(10,2) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Inactive',
  `userType` varchar(255) NOT NULL,
  `services` varchar(100) NOT NULL,
  `permissions` varchar(255) NOT NULL,
  `assignTo` varchar(100) NOT NULL,
  `added_by` int(11) NOT NULL,
  `firm_logo` varchar(100) NOT NULL,
  `online_status` enum('Online','Offline') NOT NULL DEFAULT 'Offline',
  `activationCode` varchar(200) NOT NULL,
  `deleteFlag` enum('Yes','No') NOT NULL DEFAULT 'No',
  `login_ip` varchar(50) NOT NULL,
  `last_login` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `comp_name`, `title`, `fname`, `lname`, `full_name`, `password`, `old_pass`, `landline`, `mobile`, `email`, `address1`, `address2`, `country`, `state`, `city`, `pincode`, `pan`, `caf_form`, `kyc_form`, `balance`, `status`, `userType`, `services`, `permissions`, `assignTo`, `added_by`, `firm_logo`, `online_status`, `activationCode`, `deleteFlag`, `login_ip`, `last_login`) VALUES
(1, 'admin', 'GHARPE KIRANA', 'Mr', 'Admin', 'ajjjjj', 'jivika ggg', '123456', '', '', 1212121212, 'jiks.gujarkar@gmail.com', 'Nagpur', 'jjjjjj', '', 21, '360', 232332, '', 'assets/images/caf-1.jpg', 'assets/images/kyc-1.jpg', 0.00, 'Active', 'ADMIN', '', '', '', 0, '', 'Online', '', 'No', '::1', '2017-07-08 01:40:37'),
(2, 'employee', 'Gharpekirana', 'Mr', 'A', 'B', '', '123456789', '', '', 0, '', '', '', '', 0, '', 0, '', '', '', 0.00, 'Active', 'EMP', '', '', '', 0, '', 'Online', '', 'No', '103.220.215.73', '2016-10-15 03:30:24');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
  `vehicle_id` int(11) NOT NULL,
  `vehicle_name` varchar(200) NOT NULL,
  `vehicle_model` varchar(200) NOT NULL,
  `model_no` varchar(100) NOT NULL,
  `vehicle_no` varchar(200) NOT NULL,
  `vehicle_img` varchar(235) NOT NULL,
  `vehicle_cat_id` int(11) NOT NULL,
  `dr_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehicle_id`, `vehicle_name`, `vehicle_model`, `model_no`, `vehicle_no`, `vehicle_img`, `vehicle_cat_id`, `dr_id`) VALUES
(2, 'Honda Fit', 'mahindra', '45788888', 'mh 34 7896', '', 1, 1),
(3, 'Honda Fit', 'Honda', '444555', 'MH-32 8421', 'assets/images/model/honda_fit.jpg', 3, 1),
(4, 'Honda Fit', 'Honda', '', 'MH-32 8421', 'assets/images/model/honda_fit.jpg', 4, 2),
(5, 'Honda Fit', 'Honda', '', 'MH-32 8421', 'assets/images/model/honda_fit.jpg', 5, 2),
(6, 'Honda Fit', 'Honda', '', 'MH-32 8421', 'assets/images/model/honda_fit.jpg', 6, 2),
(7, 'Honda Fit', 'Honda', '', 'MH-32 8421', 'assets/images/model/honda_fit.jpg', 7, 1),
(8, 'alto', 'mahindra', '455678923', 'MH 34 1245', 'assets/images/vehicle/1-1495626606.jpg', 2, 0),
(9, 'demo', 'demo', '898989', 'MH 34 1245', 'assets/images/vehicle/1-1496232233.jpg', 2, 0),
(10, 'Lenia', 'Fiat', '2015', 'MH 31 AC 2544', 'assets/images/vehicle/1-1496470934.jpg', 3, 0),
(11, 'Linea', 'Fiat', 'XYZ', 'MH 34 AD 3452', 'assets/images/vehicle/1-1496998551.png', 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delete_items`
--
ALTER TABLE `delete_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `opt_login`
--
ALTER TABLE `opt_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `opt_user`
--
ALTER TABLE `opt_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bill`
--
ALTER TABLE `tbl_bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `tbl_driver`
--
ALTER TABLE `tbl_driver`
  ADD PRIMARY KEY (`dr_id`);

--
-- Indexes for table `tbl_driver_complaint`
--
ALTER TABLE `tbl_driver_complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `tbl_operater`
--
ALTER TABLE `tbl_operater`
  ADD PRIMARY KEY (`ope_id`);

--
-- Indexes for table `tbl_ratecard`
--
ALTER TABLE `tbl_ratecard`
  ADD PRIMARY KEY (`ratecard_id`);

--
-- Indexes for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delete_items`
--
ALTER TABLE `delete_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `opt_login`
--
ALTER TABLE `opt_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `opt_user`
--
ALTER TABLE `opt_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_bill`
--
ALTER TABLE `tbl_bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_driver`
--
ALTER TABLE `tbl_driver`
  MODIFY `dr_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_driver_complaint`
--
ALTER TABLE `tbl_driver_complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_operater`
--
ALTER TABLE `tbl_operater`
  MODIFY `ope_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_ratecard`
--
ALTER TABLE `tbl_ratecard`
  MODIFY `ratecard_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
