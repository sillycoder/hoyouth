-- phpMyAdmin SQL Dump
-- version 3.4.8
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 09 月 25 日 14:50
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
-- 表的结构 `hy_order`
--

CREATE TABLE IF NOT EXISTS `hy_order` (
  `orderid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL,
  `dateline` int(10) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL,
  `rmb` decimal(10,2) NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `hy_order_bf_detail`
--

CREATE TABLE IF NOT EXISTS `hy_order_bf_detail` (
  `orderid` bigint(20) unsigned NOT NULL,
  `color` varchar(4) NOT NULL,
  `position` varchar(4) NOT NULL,
  `orderNum` varchar(30) NOT NULL,
  `designStyle` int(11) NOT NULL,
  `picColor` int(11) NOT NULL,
  `descTitle` varchar(30) NOT NULL,
  `descDetail` varchar(200) NOT NULL,
  `upload` varchar(100) NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `hy_order_common`
--

CREATE TABLE IF NOT EXISTS `hy_order_common` (
  `orderid` bigint(20) unsigned NOT NULL,
  `privance` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `county` varchar(20) NOT NULL,
  `add_detail` varchar(100) NOT NULL,
  `zipcode` varchar(6) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `receiver` varchar(20) NOT NULL,
  `invoice` tinyint(4) NOT NULL COMMENT '1为电子发票，2为个人发票，3为单位发票',
  `invoiceTitle` varchar(120) NOT NULL,
  `payType` int(11) NOT NULL,
  `deliveryType` int(11) NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- 表的结构 `hy_user_address`
--

CREATE TABLE IF NOT EXISTS `hy_user_address` (
  `index` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL,
  `privance` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `county` varchar(20) NOT NULL,
  `detail` varchar(120) NOT NULL,
  `zipcode` varchar(6) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `receiver` varchar(20) NOT NULL,
  `default` tinyint(4) NOT NULL,
  `dateline` int(10) unsigned NOT NULL,
  PRIMARY KEY (`index`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
