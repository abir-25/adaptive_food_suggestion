-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 04, 2017 at 10:10 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE IF NOT EXISTS `tbl_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `temp` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `image`, `temp`) VALUES
(1, 'images/gallery/1/first.jpeg', 1),
(2, 'images/gallery/1/2.jpg', 1),
(3, 'images/gallery/1/3.jpg', 1),
(4, 'images/gallery/1/4.jpg', 1),
(5, 'images/gallery/1/5.jpg', 1),
(6, 'images/gallery/1/second.jpg', 1),
(7, 'images/gallery/2/first.jpg', 2),
(8, 'images/gallery/2/1.jpg', 2),
(9, 'images/gallery/2/2.jpg', 2),
(10, 'images/gallery/2/3.jpg', 2),
(11, 'images/gallery/2/4.jpg', 2),
(12, 'images/gallery/2/5.jpg', 2),
(13, 'images/gallery/3/first.jpg', 3),
(14, 'images/gallery/3/1.jpg', 3),
(15, 'images/gallery/3/2.jpg', 3),
(16, 'images/gallery/3/3.jpg', 3),
(17, 'images/gallery/3/4.jpg', 3),
(18, 'images/gallery/3/5.jpg', 3),
(19, 'images/gallery/4/first.jpg', 4),
(20, 'images/gallery/4/1.jpg', 4),
(21, 'images/gallery/4/2.jpg', 4),
(22, 'images/gallery/4/3.jpg', 4),
(23, 'images/gallery/4/4.jpg', 4),
(24, 'images/gallery/4/5.jpg', 4),
(25, 'images/gallery/5/first.jpg', 5),
(26, 'images/gallery/5/1.jpg', 5),
(27, 'images/gallery/5/2.jpg', 5),
(28, 'images/gallery/5/3.jpg', 5),
(29, 'images/gallery/5/4.jpg', 5),
(30, 'images/gallery/5/5.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_restaurant`
--

CREATE TABLE IF NOT EXISTS `tbl_restaurant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `env` varchar(255) NOT NULL,
  `budget1` varchar(255) NOT NULL,
  `budget2` varchar(255) NOT NULL,
  `budget3` varchar(255) NOT NULL,
  `taste1` varchar(255) NOT NULL,
  `taste2` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_restaurant`
--

INSERT INTO `tbl_restaurant` (`id`, `name`, `image`, `address`, `env`, `budget1`, `budget2`, `budget3`, `taste1`, `taste2`, `review`) VALUES
(1, 'The Exchange Restaurant', 'images/rest/the-exchange.jpg', 'Biddyanogor, Candanaish, Chittagong', 'Casual', 'Low(200-500)', 'High(500-1000)', '', 'Sweet', 'Spicy', '9/10'),
(2, 'Baburchi Restaurant', 'images/rest/baburci.jpg', 'Gachbariya, Candanaish, Chittagong', 'Normal', 'Low(100-200)', 'Mid(200-400)', 'High(400-600)', 'Spicy', '', '8/10'),
(3, 'Tava Restaurant', 'images/rest/tava-restaurant.jpg', 'Komol Munshir hat, Candanaish, Chittagong', 'Normal', 'Low(10-100)', 'Mid(100-300)', 'High(300-700)', 'Sweet', 'Spicy', '8/10'),
(4, 'Basmati Restaurant', 'images/rest/basmati-restaurant.jpg', 'Patiya, Candanaish, Chittagong', 'Casual', 'Low(100-200)', 'High(200-500)', '', 'Spicy', '', '8/10'),
(5, 'Shawarma House Chittagong', 'images/rest/sarma.jpg', 'Patiya Thana, Candanaish, Chittagong', 'Normal', 'Low(80-150)', 'High(150-300)', '', 'Sweet', 'Spicy', '8/10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
