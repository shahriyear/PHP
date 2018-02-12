-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 12, 2018 at 06:43 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

DROP TABLE IF EXISTS `blog_post`;
CREATE TABLE IF NOT EXISTS `blog_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) DEFAULT NULL,
  `category` int(11) NOT NULL,
  `blog_psot` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`id`, `title`, `category`, `blog_psot`) VALUES
(1, 'My Title asd asdas d', 2, 'sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds sad asd asa sds '),
(3, 'asd asd asdas d', 1, 'as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd as dasd asd as das dsad as dassd ');

-- --------------------------------------------------------

--
-- Table structure for table `category_info`
--

DROP TABLE IF EXISTS `category_info`;
CREATE TABLE IF NOT EXISTS `category_info` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(64) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_info`
--

INSERT INTO `category_info` (`cid`, `category_name`) VALUES
(1, 'Rajniti'),
(2, 'My Category'),
(3, 'More Caetgory');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

DROP TABLE IF EXISTS `user_table`;
CREATE TABLE IF NOT EXISTS `user_table` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) DEFAULT NULL,
  `user_password` varchar(32) DEFAULT NULL,
  `name` varchar(64) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`uid`, `username`, `user_password`, `name`, `email`) VALUES
(2, 'admin', 'admin', 'shahriyear', 'shahriyear@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
