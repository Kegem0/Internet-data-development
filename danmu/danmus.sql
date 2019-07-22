-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2019-07-22 16:31:34
-- 服务器版本： 10.3.16-MariaDB
-- PHP 版本： 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `yii2advanced`
--

-- --------------------------------------------------------

--
-- 表的结构 `danmus`
--

CREATE TABLE `danmus` (
  `id` int(11) NOT NULL,
  `words` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `danmus`
--

INSERT INTO `danmus` (`id`, `words`) VALUES
(1, '祝nku100周年快乐！'),
(2, '20191017'),
(3, '允公允能日新月异！'),
(4, '我要发弹幕(≧▽≦)'),
(5, '预祝南开大学百年校庆圆满成功～'),
(109, '啊啊啊啊啊啊终于可以发了'),
(110, '呜呜呜呜都发了一百多条了'),
(111, '我要使劲发'),
(112, '我要使劲发'),
(113, 'sdasdk'),
(114, '啊啊啊啊啊啊好快乐'),
(115, '啊啊啊啊啊啊终于可以发了'),
(116, '啊啊啊啊啊啊终于可以发了'),
(119, '说点啥好呢'),
(127, '快来为百年南开送上你的祝福吧( ゜- ゜)つロ~'),
(128, '快来为百年南开送上你的祝福吧( ゜- ゜)つロ~'),
(129, '阿斯顿健康撒娇的；时间到啦；手机的'),
(130, '哩哩啦啦哩哩啦啦哩哩啦啦哩哩啦啦哩哩啦啦了');

--
-- 转储表的索引
--

--
-- 表的索引 `danmus`
--
ALTER TABLE `danmus`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `danmus`
--
ALTER TABLE `danmus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
