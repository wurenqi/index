-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 
-- 服务器版本: 5.5.53
-- PHP 版本: 7.1.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `test`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`Id`, `username`, `password`) VALUES
(1, 'admin', 'c3284d0f94606de1fd2af172aba15bf3');

-- --------------------------------------------------------

--
-- 表的结构 `example`
--

CREATE TABLE IF NOT EXISTS `example` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `subtitle` varchar(255) DEFAULT NULL COMMENT '副标题',
  `img` varchar(255) DEFAULT NULL COMMENT '图片地址',
  `content` varchar(255) DEFAULT NULL COMMENT '内容',
  `cate` varchar(255) DEFAULT NULL COMMENT '分类',
  `open` tinyint(3) DEFAULT '1' COMMENT '是否展示，1为展示',
  `time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='合作例子' AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `example`
--

INSERT INTO `example` (`Id`, `title`, `subtitle`, `img`, `content`, `cate`, `open`, `time`) VALUES
(1, '项目标题', '项目副标题', 'images/upload/402f2816687f0065e9a83a4c9da5590d.jpg', '这是一个很牛的项目', 'web项目123', 1, '1536302608'),
(2, '项目标题', '项目副标题', 'images/portfolio-2.jpg', '项目内容', 'ios项目', 1, NULL),
(3, '项目标题', '项目副标题', 'images/portfolio-3.jpg', '项目内容', 'Android项目', 1, '1536287908'),
(4, '项目标题', '项目副标题', 'images/portfolio-4.jpg', '项目内容', 'web项目', 1, '1536288355'),
(5, '项目标题', '项目副标题', 'images/portfolio-5.jpg', '项目内容', '微信项目', 1, '1536290142'),
(6, '项目标题', '项目副标题', 'images/portfolio-6.jpg', '项目内容', '微信项目', 1, '1536290144'),
(7, '项目标题', '项目副标题', 'images/portfolio-7.jpg', '项目内容', 'web项目', 1, NULL),
(9, '项目标题', '项目副标题', 'images/portfolio-9.jpg', '项目内容', 'ios项目', 1, NULL),
(10, '项目标题', '项目副标题', 'images/portfolio-10.jpg', '项目内容', 'Android项目', 1, NULL),
(11, '项目标题', '项目副标题', 'images/portfolio-11.jpg', '项目内容', '微信项目', 1, '1536302795'),
(12, '项目标题', '项目副标题', 'images/portfolio-12.jpg', '项目内容', 'web项目', 1, NULL),
(17, 'APP开发', '1', 'images/upload/2eb8684890d413f29cbe941821a4df2a.jpg', '123', 'web项目1', 0, '1536301354');

-- --------------------------------------------------------

--
-- 表的结构 `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '公司名',
  `url` varchar(255) DEFAULT NULL COMMENT '网址',
  `home_subtitle` varchar(255) DEFAULT NULL COMMENT '主页，副标题',
  `about_subtitle` varchar(255) DEFAULT NULL COMMENT '关于我们，副标题',
  `address` varchar(255) DEFAULT NULL COMMENT '地址',
  `phone` varchar(255) DEFAULT NULL COMMENT '固定电话',
  `telphone` varchar(255) DEFAULT NULL COMMENT '手机',
  `email` varchar(255) DEFAULT NULL COMMENT '电子邮箱',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `info`
--

INSERT INTO `info` (`Id`, `name`, `url`, `home_subtitle`, `about_subtitle`, `address`, `phone`, `telphone`, `email`) VALUES
(1, '全心科技', 'qxkj.index.com', '你敢想，我们敢做', '生命不息，开发不止', '北京市-朝阳区-望京-中国锦-1808', '010-12345678', '13456781234', 'qxkj@qxkj.com');

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `message` text,
  `phone` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `open` tinyint(3) DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`Id`, `name`, `title`, `message`, `phone`, `time`, `open`) VALUES
(9, '闵工顶', 'IOS开发', '啦啦啦啦', '13712345678', '1536222274', 1),
(13, '五人齐~~', 'APP开发', '1', '15611885166', '1536298479', 1),
(14, '五人齐~~~', 'IOS开发', '1233', '13812345678', '1536302792', 1),
(11, '测试', '测试', '测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试', '测试', '1536231509', 1),
(12, '五人齐~~', 'IOS开发', '~~', '15611885166', '1536287438', 0),
(15, '五人齐~~~', 'IOS开发', '1233', '13812345678', '1536298730', 1),
(16, '五人齐~~', 'APP开发', '1', '15611885166', '1536302618', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
