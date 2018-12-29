-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 12 月 29 日 03:04
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `message`
--

-- --------------------------------------------------------

--
-- 表的结构 `msg-lottery`
--

CREATE TABLE IF NOT EXISTS `msg-lottery` (
  `id` int(11) NOT NULL,
  `lotpack` int(11) NOT NULL COMMENT '福袋个数',
  `lotmember` int(11) NOT NULL COMMENT '会员个数',
  `time` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `msg-lottery`
--

INSERT INTO `msg-lottery` (`id`, `lotpack`, `lotmember`, `time`) VALUES
(1, 2, 0, '1544775287');

-- --------------------------------------------------------

--
-- 表的结构 `msg-message`
--

CREATE TABLE IF NOT EXISTS `msg-message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL COMMENT '姓名',
  `phone` text NOT NULL COMMENT '电话',
  `proname` text NOT NULL COMMENT '项目名',
  `pbrand` text NOT NULL COMMENT '品牌名',
  `address` text NOT NULL COMMENT '地址',
  `uqq` text NOT NULL COMMENT 'QQ号',
  `wchat` text NOT NULL COMMENT '微信号',
  `mesage` text NOT NULL COMMENT '留言',
  `proaddre` text NOT NULL COMMENT '项目地址',
  `msgstate` int(11) NOT NULL COMMENT '留言状态，0未审1已审2无效',
  `time` text NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

-- --------------------------------------------------------

--
-- 表的结构 `msg-test`
--

CREATE TABLE IF NOT EXISTS `msg-test` (
  `id` int(11) NOT NULL,
  `firendCount` int(11) NOT NULL COMMENT '好友数量',
  `time` text NOT NULL COMMENT '时间',
  `uname` text NOT NULL COMMENT '用户名'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `msg-user`
--

CREATE TABLE IF NOT EXISTS `msg-user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` text NOT NULL COMMENT '用户名',
  `upass` text NOT NULL COMMENT '密码',
  `proname` text NOT NULL COMMENT '所属项目',
  `utype` int(11) NOT NULL COMMENT '用户类型0管理员1用户',
  `time` text NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `msg-user`
--

INSERT INTO `msg-user` (`id`, `uname`, `upass`, `proname`, `utype`, `time`) VALUES
(1, 'admin', 'admin', 'bgdc', 1, '1232142342');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
