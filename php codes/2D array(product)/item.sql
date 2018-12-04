-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-04-29 17:30:15
-- 服务器版本： 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collection`
--

-- --------------------------------------------------------

--
-- 表的结构 `item`
--

CREATE TABLE `item` (
  `ProdID` text NOT NULL,
  `Color` text NOT NULL,
  `Size` text NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `item`
--

INSERT INTO `item` (`ProdID`, `Color`, `Size`, `Price`) VALUES
('p1', 'red', 'small', 5),
('p2', 'red', 'small', 15),
('p3', 'red', 'small', 35),
('p4', 'red', 'large', 5),
('p5', 'red', 'large', 15),
('p6', 'red', 'large', 35),
('p7', 'red', 'medium', 5),
('p8', 'red', 'medium', 15),
('p9', 'red', 'medium', 35),
('p10', 'blue', 'small', 5),
('p11', 'blue', 'small', 15),
('p12', 'blue', 'small', 35),
('p13', 'blue', 'large', 5),
('p14', 'blue', 'large', 15),
('p15', 'blue', 'large', 35),
('p16', 'blue', 'medium', 5),
('p17', 'blue', 'medium', 15),
('p18', 'blue', 'medium', 35),
('p19', 'white', 'large', 5),
('p20', 'white', 'large', 15);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
