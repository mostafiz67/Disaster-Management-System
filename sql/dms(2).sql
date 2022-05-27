-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2014 at 03:35 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dms`
--
CREATE DATABASE IF NOT EXISTS `dms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dms`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `post_code` int(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `phone` int(15) NOT NULL,
  `present_address` varchar(100) NOT NULL,
  `permanent_address` varchar(100) NOT NULL,
  `national_id` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `name`, `post_code`, `gender`, `password`, `dob`, `phone`, `present_address`, `permanent_address`, `national_id`) VALUES
(1, 'admin', 'Md.Mostafizur Rahman', 2002, 'male', '12345', '1992-11-1', 1935688732, '', '', '12121212121');

-- --------------------------------------------------------

--
-- Table structure for table `aff_area`
--

CREATE TABLE IF NOT EXISTS `aff_area` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `area` text NOT NULL,
  `destruction_level` text NOT NULL,
  `p_died` varchar(100) NOT NULL,
  `amount_d` text NOT NULL,
  `p_injur` varchar(100) NOT NULL,
  `amount_i` text NOT NULL,
  `l_asset` varchar(100) NOT NULL,
  `amount_a` text NOT NULL,
  `date` date NOT NULL,
  `n_org` varchar(30) NOT NULL,
  `vis` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `aff_area`
--

INSERT INTO `aff_area` (`id`, `area`, `destruction_level`, `p_died`, `amount_d`, `p_injur`, `amount_i`, `l_asset`, `amount_a`, `date`, `n_org`, `vis`) VALUES
(3, 'Karanigong', 'High', '10', 'People', '1', 'Thousand', '2', 'Million', '2014-04-13', 'SDO', 0),
(5, 'Shariatpur', 'Low', '0', 'People', '13', 'People', '20', 'Thousand', '2014-04-20', 'SDO', 0),
(6, 'CoxBazar', 'High', '1', 'Thousand', '10', 'Thousand', '1', 'Million', '2007-11-07', 'SDO', 0),
(7, 'Faridpur', 'Medium', '76', 'People', '123', 'People', '19', 'Million', '2007-11-07', 'ASHA', 0),
(8, 'Faridpur', 'Medium', '45', 'People', '79', 'People', '12', 'Million', '2007-11-08', 'BRAC', 0),
(9, 'Faridpur', 'Medium', '89', 'People', '154', 'People', '26', 'Hundred', '2007-11-09', 'SDO', 0),
(10, 'Narangong', 'Medium', '32', 'People', '89', 'People', '13', 'Million', '2012-05-16', 'ASHA', 0),
(11, 'Narangong', 'Medium', '56', 'People', '143', 'People', '34', 'Million', '2012-05-17', 'SDO', 0),
(12, 'Narangong', 'Medium', '45', 'People', '87', 'People', '23', 'Hundred', '2012-05-17', 'BRAC', 0),
(13, 'Moheskhali', 'High', '123', 'People', '209', 'People', '45', 'Million', '2012-05-16', 'ASHA', 0),
(14, 'Moheskhali', 'High', '76', 'People', '134', 'People', '23', 'Million', '2012-05-17', 'SDO', 0),
(15, 'Moheskhali', 'High', '43', 'People', '76', 'People', '32', 'Hundred', '2012-05-18', 'BRAC', 0),
(16, 'CoxBazar', 'High', '23', 'People', '78', 'People', '23', 'Million', '2012-05-16', 'ASHA', 0),
(17, 'CoxBazar', 'High', '43', 'People', '128', 'People', '43', 'Million', '2012-05-18', 'BRAC', 0),
(18, 'Banderban', 'Medium', '27', 'People', '76', 'People', '23', 'Thousand', '2012-06-27', 'ASHA', 0),
(19, 'Banderban', 'High', '106', 'People', '187', 'People', '54', 'Thousand', '2012-06-28', 'BRAC', 0),
(20, 'Netrakona', 'Low', '4', 'People', '2', 'People', '20', 'Thousand', '2014-04-28', 'ASHA', 0),
(21, 'Netrakona', 'Low', '4', 'People', '1', 'People', '15', 'Thousand', '2014-04-28', 'BRAC', 0);

-- --------------------------------------------------------

--
-- Table structure for table `aid`
--

CREATE TABLE IF NOT EXISTS `aid` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `position` text NOT NULL,
  `message` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `vis` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `aid`
--

INSERT INTO `aid` (`id`, `position`, `message`, `date`, `vis`) VALUES
(1, 'admin', 'i sent 5000 tk in your account number', '2014-04-27', 0),
(2, 'admin', 'i sent 500 tk in your account number', '2014-07-10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `area_name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `area_name`) VALUES
(1, 'Dhaka'),
(2, 'Shariatpur'),
(3, 'Faridpur'),
(4, 'Narangong'),
(5, 'Karanigong'),
(9, 'CoxBazar'),
(10, 'Netrakona'),
(11, 'Moheskhali'),
(12, 'Banderban');

-- --------------------------------------------------------

--
-- Table structure for table `disister`
--

CREATE TABLE IF NOT EXISTS `disister` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `catagorry` varchar(20) NOT NULL,
  `amount` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `disister`
--

INSERT INTO `disister` (`id`, `catagorry`, `amount`) VALUES
(1, 'fire', '1000'),
(2, 'bc', '1200');

-- --------------------------------------------------------

--
-- Table structure for table `missing_person_info`
--

CREATE TABLE IF NOT EXISTS `missing_person_info` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `national_id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `confirm_password` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `post_code` varchar(30) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `present_address` varchar(50) NOT NULL,
  `shortbio` varchar(200) NOT NULL,
  `img` longblob NOT NULL,
  `situation` text NOT NULL,
  `gender` text NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `permanent_address` varchar(150) NOT NULL,
  `found` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Dumping data for table `missing_person_info`
--

INSERT INTO `missing_person_info` (`id`, `national_id`, `password`, `confirm_password`, `city`, `post_code`, `phone`, `present_address`, `shortbio`, `img`, `situation`, `gender`, `name`, `username`, `permanent_address`, `found`) VALUES
(30, '', '12345', '12345', 'feni', '2002', '8801859343274', 'sholoshahar,Chittagong', 'Height:5.5"; Color:black', 0x70726f66696c655f70696374757265732f44534330313530392e4a5047, 'missing', 'male', 'Prashanto Kumar', ' Kumar', 'Magura,Bangladesh', 0),
(31, '', 'Samim', 'Samim', 'banderban', '2002', '8801859343274', 'sholoshahar,Chittagong', 'Height:5.5"; Color:black', 0x70726f66696c655f70696374757265732f44534330313537312e4a5047, 'missing', 'male', 'Samim Reza', 'Samim', 'Kulna,Bangladesh', 0),
(32, '', 'Kabir', 'Kabir', 'banderban', '2002', '8801859343274', 'sholoshahar,Chittagong', 'Height:5.5"; Color:black', 0x70726f66696c655f70696374757265732f44534330313832332e4a5047, 'missing', 'male', 'Anamul Kabir', 'Kabir', 'Feni,Bangladesh', 0),
(33, 'maruf', 'maruf', 'maruf', 'banderban', '4300', '8801858348298', 'Anoara,Chittagong', 'Height:5.5"; Color:black', 0x70726f66696c655f70696374757265732f44534330313532382e4a5047, 'finding', 'male', 'Maruf Hossain', 'maruf', 'Anoara,Chittagong', 1),
(34, '111111111111144442421', '12345', '12345', 'rangamaty', '4300', '8801858348298', 'Satkania,Chittagong', 'Height:5.8"; Color:white', 0x70726f66696c655f70696374757265732f44534330313739362e4a5047, 'finding', 'male', 'Ali Azam', 'Azam', 'Netrokona,Bangladesh', 0),
(35, '111111111111144442421', 'meraj', 'meraj', 'chittagong', '4300', '8801858348293', 'Satkania,Chittagong', 'Height:5.8"; Color:white', 0x70726f66696c655f70696374757265732f44534330313832302e4a5047, 'finding', 'male', 'M.D. Meraj', 'meraj', 'Netrokona,Bangladesh', 0),
(99, '111111111111144442421', '12345', '12345', 'chittagong', '111111', '01935688732', 'Parul vaban,CU', 'Height:5.5"; Color:black', 0x70726f66696c655f70696374757265732f44534330313438372e4a5047, 'finding', 'male', 'Md. Mostafizur Rahman', 'mostafiz', 'Sariatpur,Bangladesh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `position` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  `n_org` varchar(30) NOT NULL,
  `vis` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `position`, `message`, `date`, `n_org`, `vis`) VALUES
(3, 'volunteer', 'We need some volunteer for help people & affected area.', '0000-00-00', '', 0),
(5, 'admin', 'hi i am new orgnization Auther', '2014-04-20', 'SDO', 0),
(6, 'admin', 'hellow how are u', '2014-04-20', 'SDO', 0),
(7, 'org_aut', 'I think that u must be work right and give us data correct', '0000-00-00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `org_aut_info`
--

CREATE TABLE IF NOT EXISTS `org_aut_info` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name_org` varchar(50) NOT NULL,
  `city_org` text NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL,
  `birth_date` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(13) NOT NULL,
  `fax` varchar(15) NOT NULL,
  `emergency_contact` int(15) NOT NULL,
  `gender` text NOT NULL,
  `status` text NOT NULL,
  `present_address` varchar(150) NOT NULL,
  `permanent_address` varchar(150) NOT NULL,
  `photo` int(10) NOT NULL,
  `national_id` varchar(15) NOT NULL,
  `post_code` varchar(10) NOT NULL,
  `active` int(2) NOT NULL,
  `img` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `org_aut_info`
--

INSERT INTO `org_aut_info` (`id`, `name_org`, `city_org`, `name`, `username`, `password`, `confirm_password`, `birth_date`, `email`, `phone`, `fax`, `emergency_contact`, `gender`, `status`, `present_address`, `permanent_address`, `photo`, `national_id`, `post_code`, `active`, `img`) VALUES
(22, 'jarnna', 'feni.', 'jarnna', 'jarnna', 'jarnna', 'jarnna', '2000-10-10', 'mostafiz.cu.cse@gmail.com', 1935688732, '', 1935688732, 'female', 'manager', 'ddddddddddd', 'dddddddddddddddddddd', 1, '111111111111111', '1111', 0, ''),
(26, 'Ezzitech', 'chittagong', 'Md. Manirul Islam', 'johncu', '123456', '123456', '1990-01-01', 'john_cu_cse@live.com', 1859343274, '', 1678180141, 'male', 'manager', 'Taherabad, Chittagong', 'Govindapur.Comilla,  ', 0, '111111111111144', '4000', 1, 0x70726f66696c655f70696374757265732f44534330313530312e4a5047),
(30, 'ASHA', 'chittagong', 'Md. Manirul Islam', ' Maniru', ' Maniru', ' Maniru', '1990-01-01', 'john_cu_cse@live.com', 2147483647, '', 2147483647, 'male', 'md', 'Taherabat,Hathazari,Chittagong', 'Comilla,Bangladesh', 0, '111111111111144', '4000', 1, 0x70726f66696c655f70696374757265732f44534330313733352e4a5047),
(31, 'BRAC', 'chittagong', 'Kutub Uddin', 'kutub', 'kutub', 'kutub', '1990-01-09', 'john_cu_cse9@live.com', 2147483647, '', 2147483647, 'male', 'md', 'Aman Bazar,Hathazari,Chittagong', 'Aman Bazar,Hathazari,Chittagong', 0, '111111111111144', '4000', 0, 0x70726f66696c655f70696374757265732f44534330313533322e4a5047);

-- --------------------------------------------------------

--
-- Table structure for table `person_info`
--

CREATE TABLE IF NOT EXISTS `person_info` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `national_id` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `birth_date` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `fax` varchar(11) NOT NULL,
  `post_code` varchar(20) NOT NULL,
  `phi_carrier` varchar(20) NOT NULL,
  `policy_number` varchar(20) NOT NULL,
  `emergency_contact` varchar(11) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `present_address` varchar(300) NOT NULL,
  `permanent_address` varchar(300) NOT NULL,
  `shortbio` varchar(150) NOT NULL,
  `img` longblob NOT NULL,
  `city` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `person_info`
--

INSERT INTO `person_info` (`id`, `national_id`, `name`, `username`, `password`, `birth_date`, `email`, `phone`, `fax`, `post_code`, `phi_carrier`, `policy_number`, `emergency_contact`, `gender`, `blood`, `status`, `present_address`, `permanent_address`, `shortbio`, `img`, `city`) VALUES
(1, '0123456789', 'Md. Mostaf', 'mostafiz67', '12345', '1-11-1992', 'mostafiz.cu.cse', '01935688732', '01935688732', '4004', '', '', '01935688732', 'male', 'AB+', 'Student', 'parul bavhan', 'shariatpur,banhladesh', '', '', 'Sent-Martin'),
(4, '111111111111111111', 'Md. Mostafizur Rahman', 'mostafiz', '12345', '1-12-1992', 'mostafiz.cu.cse@gmail.com', '01825568589', '', '2004', '22222222', '11111111', '01935688732', 'male', 'O+', 'Teacher', 'ssssssssssssssssssssss', 'sssssssssssssssss', '', '', 'Chittagong'),
(5, '111111111111111112', 'mahedi hasan', 'mahedi', '12345', '1-11-1992', 'mostafiz.cu.cse@gmail.com', '01935688732', '', '2001', '', '', '01935688732', 'male', 'O+', 'Student', 'ddddddddddddd', 'dddddddddddddddd', '', '', 'chittagong'),
(6, '1111111111111111112345', 'emuuuu', 'emuuuu', 'emuuuu', '2000-10-10', 'mostafiz.cu.cse@gmail.com', '01935688732', '', '111111', '', '', '01935688732', 'male', 'AB+', 'Employee', '11111111111111111111111111111', '11111111111111111111111111', '', '', 'rangamaty'),
(7, '', 'Md. Mostafizur Rahman', 'mostafiz', '123456', '2000-10-10', 'mostafiz.cu.cse@gmail.com', '01935688732', '', '2002', '', '', '01678180141', 'male', 'O+', 'Employee', 'shariatpur chittagong', 'shariatpur', '', 0x70726f66696c655f70696374757265732f44534330313438332e4a5047, 'rangamaty'),
(13, '111111111111144442421', 'Md. Manirul Islam', 'johncu', '123456', '2000-10-10', 'john_cu_cse@live.com', '8801859343274', '', '111111', '', '', '88019356887', 'male', 'AB+', 'Business', 'pakuria chitagong', 'commilla bangladesh', '', 0x70726f66696c655f70696374757265732f44534330313438332e4a5047, 'feni'),
(14, '', 'Md. Mostafizur Rahman', 'johncu', '12345', '2000-10-10', 'mostafiz.cu.cse@gmail.com', '8801859343274', '', '2002', '', '', '88019356887', 'male', 'O+', 'Business', '222222222222222222222', '222222222222222222222', '', 0x70726f66696c655f70696374757265732f4453435f303131362e4a5047, 'cox-bazar'),
(16, '', 'Najim Uddin', 'najim', 'najim', '1988-01-30', 'najimuddin@gmail.com', '8801859343274', '', '2002', '', '', '88019356887', 'male', 'AB+', 'Other', 'Horizon;Hathazari,Hathazari,Chittagong', 'Horizon;Hathazari,Hathazari,Chittagong', 'Height:5.3"; Color:white', 0x70726f66696c655f70696374757265732f44534330313438372e4a5047, 'cox-bazar'),
(17, '', 'Mehedi Hasan', 'mehedi', 'mehedi', '1988-02-30', 'mehedihasan@gmail.com', '8801859343275', '', '2002', '', '', '88018593432', 'male', 'AB+', 'Employee', 'Fateyabat,Hathazari,Chittagong', 'Fateyabat,Hathazari,Chittagong', 'Height:5.3"; Color:white', 0x70726f66696c655f70696374757265732f44534330313437342e4a5047, 'cox-bazar'),
(18, '', 'Torikul Islam', 'torikul', 'torikul', '1988-02-23', 'torikulislam@gmail.com', '8801859348275', '', '2003', '', '', '88018593482', 'male', 'O+', 'Employee', 'Fateyabat,Hathazari,Chittagong', 'Fateyabat,Hathazari,Chittagong', 'Height:5.7"; Color:Medium white', 0x70726f66696c655f70696374757265732f44534330313437362e4a5047, 'banderban'),
(19, '', 'Adib Ahmed', 'ahmed', 'ahmed', '1988-05-23', 'adibahmed@gmail.com', '8801858348275', '', '2003', '', '', '88018583482', 'male', 'O+', 'Business', 'Aman Bazar,Hathazari,Chittagong', 'Aman Bazar,Hathazari,Chittagong', 'Height:5.7"; Color:Medium white', 0x70726f66696c655f70696374757265732f44534330313531302e4a5047, 'banderban');

-- --------------------------------------------------------

--
-- Table structure for table `success`
--

CREATE TABLE IF NOT EXISTS `success` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `	post_code` varchar(30) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `situation` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_info`
--

CREATE TABLE IF NOT EXISTS `volunteer_info` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirm_password` varchar(20) NOT NULL,
  `birth_date` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `fax` varchar(15) NOT NULL,
  `phi_carrier` varchar(30) NOT NULL,
  `policy_number` varchar(30) NOT NULL,
  `national_id` varchar(30) NOT NULL,
  `emergency_contact` varchar(30) NOT NULL,
  `gender` text NOT NULL,
  `blood` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `present_address` varchar(40) NOT NULL,
  `permanent_address` varchar(40) NOT NULL,
  `img` longblob NOT NULL,
  `post_code` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `volunteer_info`
--

INSERT INTO `volunteer_info` (`id`, `title`, `name`, `username`, `password`, `confirm_password`, `birth_date`, `email`, `phone`, `fax`, `phi_carrier`, `policy_number`, `national_id`, `emergency_contact`, `gender`, `blood`, `status`, `present_address`, `permanent_address`, `img`, `post_code`, `city`) VALUES
(3, 'Mr.', 'mahedi hasan', 'mahedi', '123456', '123456', '1-11-1992', 'mostafiz.cu.cse@gmail.com', '01935688732', '10000000000000', '', '', '0987654321', '01935688732', 'male', 'AB+', 'Student', 'dddddddddddddddddddddddddddddddd', 'dddddddddddddddddddddddddddddddd', '', '2002', 'chittagong'),
(4, 'Mr.', 'sdsa', 'sdass', 'sdass', 'sdass', '1-11-1992', 'mostafiz.cu.cse@gmail.com', '01935688732', '', '', '', '0123456789', '014567788908', 'male', 'O+', 'Bussinessm', '00000000000', '000000000000', '', '000', 'sent-marti'),
(5, 'Mr.', 'ssssss', 'sssss', 'sssss', 'sssss', '1-11-1992', 'mostafiz.cu.cse@gmail.com', '01935688732', '', '', '', '111111111111111111', '01935688732', 'male', 'AB+', 'Student', '11111111111111111', '1111111111111111', '', '111111', 'banderban'),
(6, 'Mr.', 'qqqqqqqqqq', 'qqqqqqqqq', 'aaaaaa', 'aaaaaa', 'qq', 'mostafiz.cu.cse@gmail.com', '01825568589', '', '', '', '1111111111111444444', '01935688732', 'female', 'AB+', 'Teacher', '22222222222', '22222222222222222222222', '', '22222', 'rangamaty'),
(7, '', 'rokib', 'rokib', 'rokib', 'rokib', '1-11-1992', 'mostafiz.cu.cse@gmail.com', '01935688732', '', '', '', '111111111111111111', '01935688732', 'male', 'O+', 'Student', '11111111111111', '111111111111111', '', '123', 'banderban'),
(8, '', 'Md. Manirul Islam', 'johncu', '123456', '123456', '2000-10-10', 'john_cu_cse@live.com', '01935688732', '', '', '', '111111111111144442421', '01678180141', 'male', 'O-', 'Student', '222222222222222222222222222', '222222222222222222222222222222', 0x70726f66696c655f70696374757265732f44534330313438342e4a5047, '2002', 'banderban'),
(9, '', 'Abdur Rahman', 'abdur', 'abdur', 'abdur', '1987-10-10', 'abajimuddin@gmail.com', '8801858348298', '', '', '', '19887654273564', '8801858348298', 'male', 'O-', 'Teacher', 'Abdur rab hall,CU', 'Hatia,Naokhali', 0x70726f66696c655f70696374757265732f44534330313735392e4a5047, '4300', 'feni'),
(10, '', 'Md.Mamun Hossain', 'mamun', 'mamun', 'mamun', '1987-10-10', 'abajimuddin@gmail.com', '8801858348298', '', '', '', '19887654273564', '8801858348298', 'male', 'AB+', 'Student', 'Abdur rab hall,CU', 'Hatia,Naokhali', 0x70726f66696c655f70696374757265732f44534330313736352e4a5047, '4300', 'feni'),
(11, '', 'Md.Shoib Ahmed', 'Shoib', 'Shoib', 'Shoib', '1987-10-10', 'abajimuddin@gmail.com', '8801858348298', '', '', '', '19887654273564', '8801858348298', 'male', 'AB+', 'Student', 'South Campus,CU', 'Netrokona.Bangladesh', 0x70726f66696c655f70696374757265732f44534330313539372e4a5047, '4300', 'cox-bazar');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
