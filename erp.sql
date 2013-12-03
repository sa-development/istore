-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 19, 2012 at 01:57 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT '',
  `foreign_key` int(10) unsigned DEFAULT NULL,
  `alias` varchar(255) DEFAULT '',
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, '', NULL, 'controllers', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT '',
  `foreign_key` int(10) unsigned DEFAULT NULL,
  `alias` varchar(255) DEFAULT '',
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 2, '', 1, 6),
(3, 1, 'User', 5, '', 2, 3),
(4, 1, 'User', 6, '', 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) unsigned NOT NULL,
  `aco_id` int(10) unsigned NOT NULL,
  `_create` char(2) NOT NULL DEFAULT '0',
  `_read` char(2) NOT NULL DEFAULT '0',
  `_update` char(2) NOT NULL DEFAULT '0',
  `_delete` char(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `fax`, `active`) VALUES
(1, 'TestCustomer', '(555) 555-1212', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_contacts`
--

CREATE TABLE IF NOT EXISTS `customer_contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) unsigned NOT NULL,
  `type` varchar(64) NOT NULL,
  `name` varchar(256) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Customer_Id` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`) VALUES
(2, 'Conformal Coating'),
(3, 'Slideline'),
(1, 'Staging');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `can_issue_kits` tinyint(1) NOT NULL,
  `can_transfer_products` tinyint(1) NOT NULL,
  `can_create_products` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `can_issue_kits`, `can_transfer_products`, `can_create_products`) VALUES
(2, 'NormalUsers', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kitparts`
--

CREATE TABLE IF NOT EXISTS `kitparts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `part_id` int(10) unsigned NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Product_Id` (`product_id`),
  KEY `Part_Id` (`part_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mfgparts`
--

CREATE TABLE IF NOT EXISTS `mfgparts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mfgr` varchar(256) NOT NULL,
  `pref` int(10) unsigned NOT NULL,
  `mfg_part_no` varchar(256) NOT NULL,
  `part_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mfg_part_no` (`mfg_part_no`),
  KEY `part_id` (`part_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `operations`
--

CREATE TABLE IF NOT EXISTS `operations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `department_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `department_id` (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `operations`
--

INSERT INTO `operations` (`id`, `name`, `department_id`) VALUES
(1, 'Conformal Coat', 2),
(2, 'Slideline', 3);

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE IF NOT EXISTS `parts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `part_no` varchar(11) NOT NULL,
  `rev` varchar(4) NOT NULL,
  `class` varchar(64) NOT NULL,
  `type` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `material_type` varchar(64) NOT NULL,
  `source` varchar(64) NOT NULL,
  `unit_cost` double NOT NULL,
  `note` text NOT NULL,
  `package` varchar(64) NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Part_No` (`part_no`,`rev`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`id`, `part_no`, `rev`, `class`, `type`, `description`, `material_type`, `source`, `unit_cost`, `note`, `package`, `active`) VALUES
(1, '000-0000', 'A', 'CAP-SMT', 'RADIAL', '33pF,200V,CER,10%', '', 'BUY', 0.0029, '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_no` varchar(11) NOT NULL,
  `rev` varchar(4) NOT NULL,
  `class` varchar(64) NOT NULL,
  `type` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `note` text NOT NULL,
  `customer_product_number` varchar(64) NOT NULL,
  `customer_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Cust_Product_Number` (`customer_product_number`),
  UNIQUE KEY `Product_No` (`product_no`,`rev`),
  KEY `Customer_Id` (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_no`, `rev`, `class`, `type`, `description`, `note`, `customer_product_number`, `customer_id`) VALUES
(1, '123-456', 'A', 'Widget', 'Widgety', 'A widget', '', 'blah-1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_operations`
--

CREATE TABLE IF NOT EXISTS `product_operations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `operation_id` int(10) unsigned NOT NULL,
  `associated_document` varchar(64) NOT NULL,
  `process_priority` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Operation_Id` (`operation_id`),
  KEY `Product_Id` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `product_operations`
--

INSERT INTO `product_operations` (`id`, `product_id`, `operation_id`, `associated_document`, `process_priority`) VALUES
(1, 1, 2, '', 1),
(2, 1, 1, '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `stock_items`
--

CREATE TABLE IF NOT EXISTS `stock_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `warehouse` varchar(64) NOT NULL,
  `on_hand` int(10) unsigned NOT NULL,
  `mfg_part_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mfg_part_id` (`mfg_part_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `middle_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  `department_id` int(10) unsigned NOT NULL,
  `superadmin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `group_id` (`group_id`),
  KEY `department_id` (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `middle_name`, `last_name`, `group_id`, `department_id`, `superadmin`) VALUES
(5, 'phaz', '9c682479c0b875fbb1989b4f014dde2d5504e84b', '', '', '', 2, 1, 1),
(6, 'phazn', '9c682479c0b875fbb1989b4f014dde2d5504e84b', '', '', '', 2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `work_orders`
--

CREATE TABLE IF NOT EXISTS `work_orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `work_order_no` varchar(10) NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `total_qty` int(10) unsigned NOT NULL,
  `qty_complete` int(11) NOT NULL,
  `release_date` date NOT NULL,
  `due_date` date NOT NULL,
  `high_priority` tinyint(1) NOT NULL,
  `prototype` tinyint(1) NOT NULL,
  `rework` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `work_order_no` (`work_order_no`),
  KEY `Product_Id` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `work_orders`
--

INSERT INTO `work_orders` (`id`, `work_order_no`, `product_id`, `total_qty`, `qty_complete`, `release_date`, `due_date`, `high_priority`, `prototype`, `rework`) VALUES
(1, '0020028522', 1, 1, 0, '2012-08-05', '2012-08-05', 0, 0, 0),
(2, '111', 1, 2, 2, '2012-08-05', '2012-08-05', 0, 0, 0),
(3, '122111', 1, 2, 1, '2012-08-05', '2012-08-05', 0, 0, 0),
(4, '11', 1, 1, 1, '2012-08-05', '2012-08-05', 0, 0, 0),
(5, '221', 1, 2, 1, '2012-08-05', '2012-08-05', 0, 0, 0),
(7, '2212', 1, 2, 1, '2012-08-05', '2012-08-05', 0, 0, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_contacts`
--
ALTER TABLE `customer_contacts`
  ADD CONSTRAINT `customer_contacts_ibfk_1` FOREIGN KEY (`Customer_Id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `customer_contacts_ibfk_2` FOREIGN KEY (`customer_Id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `kitparts`
--
ALTER TABLE `kitparts`
  ADD CONSTRAINT `kitparts_ibfk_2` FOREIGN KEY (`Product_Id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `kitparts_ibfk_3` FOREIGN KEY (`Part_Id`) REFERENCES `parts` (`id`),
  ADD CONSTRAINT `kitparts_ibfk_4` FOREIGN KEY (`product_Id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `kitparts_ibfk_5` FOREIGN KEY (`part_Id`) REFERENCES `parts` (`id`),
  ADD CONSTRAINT `kitparts_ibfk_6` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `kitparts_ibfk_7` FOREIGN KEY (`part_id`) REFERENCES `parts` (`id`);

--
-- Constraints for table `mfgparts`
--
ALTER TABLE `mfgparts`
  ADD CONSTRAINT `mfgparts_ibfk_1` FOREIGN KEY (`Part_Id`) REFERENCES `parts` (`id`),
  ADD CONSTRAINT `mfgparts_ibfk_2` FOREIGN KEY (`part_id`) REFERENCES `parts` (`id`);

--
-- Constraints for table `operations`
--
ALTER TABLE `operations`
  ADD CONSTRAINT `operations_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`Customer_Id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `product_operations`
--
ALTER TABLE `product_operations`
  ADD CONSTRAINT `product_operations_ibfk_2` FOREIGN KEY (`Product_Id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_operations_ibfk_3` FOREIGN KEY (`Operation_Id`) REFERENCES `operations` (`Id`),
  ADD CONSTRAINT `product_operations_ibfk_4` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_operations_ibfk_5` FOREIGN KEY (`operation_id`) REFERENCES `operations` (`id`);

--
-- Constraints for table `stock_items`
--
ALTER TABLE `stock_items`
  ADD CONSTRAINT `stock_items_ibfk_1` FOREIGN KEY (`mfg_part_id`) REFERENCES `mfgparts` (`Id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `work_orders`
--
ALTER TABLE `work_orders`
  ADD CONSTRAINT `work_orders_ibfk_1` FOREIGN KEY (`Product_Id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `work_orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
