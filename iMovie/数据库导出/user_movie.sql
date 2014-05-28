-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 05 月 27 日 01:08
-- 服务器版本: 5.6.15
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `relationship`
--

-- --------------------------------------------------------

--
-- 表的结构 `user_movie`
--

CREATE TABLE IF NOT EXISTS `user_movie` (
  `user_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user_movie`
--

INSERT INTO `user_movie` (`user_id`, `movie_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 3),
(1111, 6),
(1111, 2),
(1111, 2),
(1111, 2),
(1111, 20),
(1111, 20),
(1, 19),
(1, 19),
(1, 20),
(7, 19),
(7, 19),
(7, 27),
(7, 3),
(7, 6),
(7, 1),
(7, 44),
(7, 44),
(7, 38),
(7, 14),
(9, 34),
(9, 1),
(9, 36);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
