-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 15, 2020 at 05:16 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `daily_report`
--

DROP TABLE IF EXISTS `daily_report`;
CREATE TABLE IF NOT EXISTS `daily_report` (
  `id` int(11) NOT NULL,
  `product` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `vendor_name` varchar(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily_report`
--

INSERT INTO `daily_report` (`id`, `product`, `quantity`, `vendor_name`, `date`) VALUES
(10001, 'Carrot', 100, 'ABC', '2020-01-25'),
(20001, 'Apple', 100, 'XYZ', '2020-01-25'),
(30001, 'Samba Rice', 1000, 'PQR', '2020-01-25'),
(40001, 'Maliban', 200, 'ABC', '2020-01-26'),
(50001, 'Lux', 200, 'XYZ', '2020-01-26'),
(60001, 'Cadbury', 50, 'DJP', '2020-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `prod_code` varchar(20) NOT NULL,
  `prod_name` varchar(20) NOT NULL,
  `start_stock` int(10) NOT NULL,
  `max_stock` varchar(20) NOT NULL,
  PRIMARY KEY (`prod_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`prod_code`, `prod_name`, `start_stock`, `max_stock`) VALUES
('10001', 'Carrot', 11, '100'),
('20001', 'Apple', 10, '100'),
('30001', 'Samba', 10, '100'),
('40001', 'Maliban', 10, '100'),
('50001', 'Lux', 10, '100'),
('60001', 'Cadbury', 10, '100'),
('70001', 'Prima', 10, '100'),
('10005', 'Beans', 12, '15'),
('10006', 'Leeks', 10, '10');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

DROP TABLE IF EXISTS `seller`;
CREATE TABLE IF NOT EXISTS `seller` (
  `seller_code` int(10) NOT NULL,
  `seller_name` varchar(50) NOT NULL,
  `seller_ad` varchar(50) NOT NULL,
  `seller_phone` varchar(10) NOT NULL,
  PRIMARY KEY (`seller_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_code`, `seller_name`, `seller_ad`, `seller_phone`) VALUES
(1001, 'ABC', 'dkkfee', '0988392');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(20) NOT NULL,
  `id` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `telephone` int(10) NOT NULL,
  `gender` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `id`, `username`, `password`, `telephone`, `gender`) VALUES
('ucsc', '1234', 'ucsc', 'ucsc', 774117792, 'male'),
('Prameeth', '2018is049', 'prameeth', '1234', 774117792, 'male');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
