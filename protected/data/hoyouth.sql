-- phpMyAdmin SQL Dump
-- version 3.4.8
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 09 月 24 日 17:40
-- 服务器版本: 5.5.45
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `hoyouth`
--

-- --------------------------------------------------------

--
-- 表的结构 `hy_user`
--

CREATE TABLE IF NOT EXISTS `hy_user` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `groupid` tinyint(4) NOT NULL,
  `regdate` int(10) unsigned NOT NULL,
  `password` varchar(32) NOT NULL,
  `salt` varchar(6) NOT NULL,
  `verify` tinyint(3) unsigned NOT NULL COMMENT '0:未验证，1:邮箱，2:手机，3:ALL',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`username`,`email`,`phone`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
