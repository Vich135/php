-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-05-15 12:14:28
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
-- 表的结构 `food`
--

CREATE TABLE `food` (
  `FoodID` text NOT NULL,
  `Kind` text NOT NULL,
  `Size` text NOT NULL,
  `WaitTime` text NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `food`
--

INSERT INTO `food` (`FoodID`, `Kind`, `Size`, `WaitTime`, `Price`) VALUES
('f1', 'beef hamburger', 'small', '10 mins', 35),
('f2', 'beef hamburger', 'medium', '10 mins', 15),
('f3', 'beef hamburger', 'large', '10 mins', 5),
('f4', 'beef hamburger', 'small', '12 mins', 5),
('f5', 'beef hamburger', 'medium', '12 mins', 15),
('f6', 'beef hamburger', 'large', '12 mins', 35),
('f7', 'beef hamburger', 'small', '14 mins', 35),
('f8', 'beef hamburger', 'medium', '14 mins', 15),
('f9', 'beef hamburger', 'large', '14 mins', 5),
('f10', 'chicken hamburger', 'small', '10 mins', 5),
('f11', 'chicken hamburger', 'medium', '10 mins', 15),
('f12', 'chicken hamburger', 'large', '10 mins', 35),
('f13', 'chicken hamburger', 'small', '12 mins', 35),
('f14', 'chicken hamburger', 'medium', '12 mins', 15),
('f15', 'chicken hamburger', 'large', '12 mins', 5),
('f16', 'chicken hamburger', 'small', '14 mins', 5),
('f17', 'chicken hamburger', 'medium', '14 mins', 15),
('f18', 'chicken hamburger', 'large', '14 mins', 35),
('f19', 'chicken hamburger', 'small', '16 mins', 35),
('f20', 'chicken hamburger', 'medium', '16 mins', 15),
('f21', 'chicken hamburger', 'large', '16 mins', 5),
('f22', 'beef fried rice', 'small', '10 mins', 5),
('f23', 'beef fried rice', 'medium', '10 mins', 15),
('f24', 'beef fried rice', 'large', '10 mins', 35),
('f25', 'beef fried rice', 'small', '12 mins', 35),
('f26', 'beef fried rice', 'medium', '12 mins', 15),
('f27', 'beef fried rice', 'large', '12 mins', 5),
('f28', 'beef fried rice', 'small', '14 mins', 5),
('f29', 'beef fried rice', 'medium', '14 mins', 15),
('f30', 'beef fried rice', 'large', '14 mins', 35),
('f31', 'chicken fried rice', 'small', '10 mins', 35),
('f32', 'chicken fried rice', 'medium', '10 mins', 15),
('f33', 'chicken fried rice', 'large', '10 mins', 5),
('f34', 'chicken fried rice', 'small', '12 mins', 5),
('f35', 'chicken fried rice', 'medium', '12 mins', 15),
('f36', 'chicken fried rice', 'large', '12 mins', 35),
('f37', 'chicken fried rice', 'small', '14 mins', 35),
('f38', 'chicken fried rice', 'medium', '14 mins', 15),
('f39', 'chicken fried rice', 'large', '14 mins', 5),
('f40', 'chicken fried rice', 'small', '16 mins', 5),
('f41', 'chicken fried rice', 'medium', '16 mins', 15),
('f42', 'chicken fried rice', 'large', '16 mins', 35),
('f43', 'beef noodles', 'small', '10 mins', 35),
('f44', 'beef noodles', 'medium', '10 mins', 15),
('f45', 'beef noodles', 'large', '10 mins', 5),
('f46', 'beef noodles', 'small', '12 mins', 5),
('f47', 'beef noodles', 'medium', '12 mins', 15),
('f48', 'beef noodles', 'large', '12 mins', 35),
('f49', 'beef noodles', 'small', '14 mins', 35),
('f50', 'beef noodles', 'medium', '14 mins', 15);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
