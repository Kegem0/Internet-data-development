-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2019-07-25 17:45:17
-- 服务器版本： 10.3.16-MariaDB
-- PHP 版本： 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `chenyin`
--

-- --------------------------------------------------------

--
-- 表的结构 `associate_withactivity`
--

CREATE TABLE `associate_withactivity` (
  `activity_date` date NOT NULL COMMENT '活动日期',
  `activity_num` int(11) NOT NULL COMMENT '活动编号',
  `news_date` date NOT NULL COMMENT '新闻日期',
  `news_num` int(11) NOT NULL COMMENT '新闻编号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='联系（活动日期，活动编号，新闻日期，新闻编号）';

--
-- 转存表中的数据 `associate_withactivity`
--

INSERT INTO `associate_withactivity` (`activity_date`, `activity_num`, `news_date`, `news_num`) VALUES
('2019-09-10', 2, '2019-09-11', 2),
('2019-10-08', 3, '2019-10-11', 1),
('2019-10-17', 1, '2019-10-17', 1);

-- --------------------------------------------------------

--
-- 表的结构 `audit_byadmin`
--

CREATE TABLE `audit_byadmin` (
  `admin_id` int(11) NOT NULL COMMENT '管理员id',
  `news_date` date NOT NULL COMMENT '新闻日期',
  `news_num` int(11) NOT NULL COMMENT '新闻编号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='审核（管理员id，新闻日期，新闻编号）';

--
-- 转存表中的数据 `audit_byadmin`
--

INSERT INTO `audit_byadmin` (`admin_id`, `news_date`, `news_num`) VALUES
(1711395, '2019-09-11', 2),
(1711395, '2019-10-11', 1),
(1711395, '2019-10-17', 1);

-- --------------------------------------------------------

--
-- 表的结构 `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '1711405', 1562918045),
('admin', '2', 1562915419);

-- --------------------------------------------------------

--
-- 表的结构 `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/*', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/activity/*', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/activity/create', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/activity/delete', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/activity/index', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/activity/update', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/activity/view', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/*', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/assignment/*', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/assignment/assign', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/assignment/index', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/assignment/revoke', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/assignment/view', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/default/*', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/default/index', 2, NULL, NULL, NULL, 1562736888, 1562736888),
('/admin/menu/*', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/menu/create', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/menu/delete', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/menu/index', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/menu/update', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/menu/view', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/permission/*', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/permission/assign', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/permission/create', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/permission/delete', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/permission/index', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/permission/remove', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/permission/update', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/permission/view', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/role/*', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/role/assign', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/role/create', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/role/delete', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/role/index', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/role/remove', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/role/update', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/role/view', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/route/*', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/route/assign', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/route/create', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/route/index', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/route/refresh', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/route/remove', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/rule/*', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/rule/create', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/rule/delete', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/rule/index', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/rule/update', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/rule/view', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/user/*', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/user/activate', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/user/change-password', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/user/delete', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/user/index', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/user/login', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/user/logout', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/user/request-password-reset', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/user/reset-password', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/user/signup', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/admin/user/view', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/debug/*', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/debug/default/*', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/debug/default/db-explain', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/debug/default/download-mail', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/debug/default/index', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/debug/default/toolbar', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/debug/default/view', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/debug/user/*', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/debug/user/reset-identity', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/debug/user/set-identity', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/gii/*', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/gii/default/*', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/gii/default/action', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/gii/default/diff', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/gii/default/index', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/gii/default/preview', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/gii/default/view', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/site/*', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/site/error', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/site/index', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/site/login', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('/site/logout', 2, NULL, NULL, NULL, 1562737030, 1562737030),
('admin', 1, '管理员', '新闻管理', NULL, 1562915349, 1562915349),
('普通用户', 1, '普通用户', '新闻管理', NULL, 1562915489, 1562915489);

-- --------------------------------------------------------

--
-- 表的结构 `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', '/*'),
('admin', '/activity/*'),
('admin', '/activity/create'),
('admin', '/activity/delete'),
('admin', '/activity/index'),
('admin', '/activity/update'),
('admin', '/activity/view'),
('admin', '/admin/*'),
('admin', '/admin/assignment/*'),
('admin', '/admin/assignment/assign'),
('admin', '/admin/assignment/index'),
('admin', '/admin/assignment/revoke'),
('admin', '/admin/assignment/view'),
('admin', '/admin/default/*'),
('admin', '/admin/default/index'),
('admin', '/admin/menu/*'),
('admin', '/admin/menu/create'),
('admin', '/admin/menu/delete'),
('admin', '/admin/menu/index'),
('admin', '/admin/menu/update'),
('admin', '/admin/menu/view'),
('admin', '/admin/permission/*'),
('admin', '/admin/permission/assign'),
('admin', '/admin/permission/create'),
('admin', '/admin/permission/delete'),
('admin', '/admin/permission/index'),
('admin', '/admin/permission/remove'),
('admin', '/admin/permission/update'),
('admin', '/admin/permission/view'),
('admin', '/admin/role/*'),
('admin', '/admin/role/assign'),
('admin', '/admin/role/create'),
('admin', '/admin/role/delete'),
('admin', '/admin/role/index'),
('admin', '/admin/role/remove'),
('admin', '/admin/role/update'),
('admin', '/admin/role/view'),
('admin', '/admin/route/*'),
('admin', '/admin/route/assign'),
('admin', '/admin/route/create'),
('admin', '/admin/route/index'),
('admin', '/admin/route/refresh'),
('admin', '/admin/route/remove'),
('admin', '/admin/rule/*'),
('admin', '/admin/rule/create'),
('admin', '/admin/rule/delete'),
('admin', '/admin/rule/index'),
('admin', '/admin/rule/update'),
('admin', '/admin/rule/view'),
('admin', '/admin/user/*'),
('admin', '/admin/user/activate'),
('admin', '/admin/user/change-password'),
('admin', '/admin/user/delete'),
('admin', '/admin/user/index'),
('admin', '/admin/user/login'),
('admin', '/admin/user/logout'),
('admin', '/admin/user/request-password-reset'),
('admin', '/admin/user/reset-password'),
('admin', '/admin/user/signup'),
('admin', '/admin/user/view'),
('admin', '/debug/*'),
('admin', '/debug/default/*'),
('admin', '/debug/default/db-explain'),
('admin', '/debug/default/download-mail'),
('admin', '/debug/default/index'),
('admin', '/debug/default/toolbar'),
('admin', '/debug/default/view'),
('admin', '/debug/user/*'),
('admin', '/debug/user/reset-identity'),
('admin', '/debug/user/set-identity'),
('admin', '/gii/*'),
('admin', '/gii/default/*'),
('admin', '/gii/default/action'),
('admin', '/gii/default/diff'),
('admin', '/gii/default/index'),
('admin', '/gii/default/preview'),
('admin', '/gii/default/view'),
('admin', '/site/*'),
('admin', '/site/error'),
('admin', '/site/index'),
('admin', '/site/login'),
('admin', '/site/logout'),
('普通用户', '/*'),
('普通用户', '/activity/*'),
('普通用户', '/activity/create'),
('普通用户', '/activity/delete'),
('普通用户', '/activity/index'),
('普通用户', '/activity/update'),
('普通用户', '/activity/view'),
('普通用户', '/admin/*'),
('普通用户', '/admin/assignment/*'),
('普通用户', '/admin/assignment/assign'),
('普通用户', '/admin/assignment/index'),
('普通用户', '/admin/assignment/revoke'),
('普通用户', '/admin/assignment/view'),
('普通用户', '/admin/default/*'),
('普通用户', '/admin/default/index'),
('普通用户', '/admin/menu/*'),
('普通用户', '/admin/menu/create'),
('普通用户', '/admin/menu/delete'),
('普通用户', '/admin/menu/index'),
('普通用户', '/admin/menu/update'),
('普通用户', '/admin/menu/view'),
('普通用户', '/admin/permission/*'),
('普通用户', '/admin/permission/assign'),
('普通用户', '/admin/permission/create'),
('普通用户', '/admin/permission/delete'),
('普通用户', '/admin/permission/index'),
('普通用户', '/admin/permission/remove'),
('普通用户', '/admin/permission/update'),
('普通用户', '/admin/permission/view'),
('普通用户', '/admin/role/*'),
('普通用户', '/admin/role/assign'),
('普通用户', '/admin/role/create'),
('普通用户', '/admin/role/delete'),
('普通用户', '/admin/role/index'),
('普通用户', '/admin/role/remove'),
('普通用户', '/admin/role/update'),
('普通用户', '/admin/role/view'),
('普通用户', '/admin/route/*'),
('普通用户', '/admin/route/assign'),
('普通用户', '/admin/route/create'),
('普通用户', '/admin/route/index'),
('普通用户', '/admin/route/refresh'),
('普通用户', '/admin/route/remove'),
('普通用户', '/admin/rule/*'),
('普通用户', '/admin/rule/create'),
('普通用户', '/admin/rule/delete'),
('普通用户', '/admin/rule/index'),
('普通用户', '/admin/rule/update'),
('普通用户', '/admin/rule/view'),
('普通用户', '/admin/user/*'),
('普通用户', '/admin/user/activate'),
('普通用户', '/admin/user/change-password'),
('普通用户', '/admin/user/delete'),
('普通用户', '/admin/user/index'),
('普通用户', '/admin/user/login'),
('普通用户', '/admin/user/logout'),
('普通用户', '/admin/user/request-password-reset'),
('普通用户', '/admin/user/reset-password'),
('普通用户', '/admin/user/signup'),
('普通用户', '/admin/user/view'),
('普通用户', '/debug/*'),
('普通用户', '/debug/default/*'),
('普通用户', '/debug/default/db-explain'),
('普通用户', '/debug/default/download-mail'),
('普通用户', '/debug/default/index'),
('普通用户', '/debug/default/toolbar'),
('普通用户', '/debug/default/view'),
('普通用户', '/debug/user/*'),
('普通用户', '/debug/user/reset-identity'),
('普通用户', '/debug/user/set-identity'),
('普通用户', '/gii/*'),
('普通用户', '/gii/default/*'),
('普通用户', '/gii/default/action'),
('普通用户', '/gii/default/diff'),
('普通用户', '/gii/default/index'),
('普通用户', '/gii/default/preview'),
('普通用户', '/gii/default/view'),
('普通用户', '/site/*'),
('普通用户', '/site/error'),
('普通用户', '/site/index'),
('普通用户', '/site/login'),
('普通用户', '/site/logout');

-- --------------------------------------------------------

--
-- 表的结构 `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `auth_rule`
--

INSERT INTO `auth_rule` (`name`, `data`, `created_at`, `updated_at`) VALUES
('新闻管理', 0x4f3a33303a226261636b656e645c636f6d706f6e656e74735c41727469636c6552756c65223a333a7b733a343a226e616d65223b733a31323a22e696b0e997bbe7aea1e79086223b733a393a22637265617465644174223b693a313536323931353331393b733a393a22757064617465644174223b693a313536323931353331393b7d, 1562915319, 1562915319);

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
(130, '哩哩啦啦哩哩啦啦哩哩啦啦哩哩啦啦哩哩啦啦了'),
(131, 'ddd'),
(132, '11111'),
(133, '222222'),
(134, 'dddddd'),
(135, '我杨铭很厉害'),
(136, '3333'),
(137, '1111'),
(138, '南开大学超级牛牛牛牛牛'),
(139, '南开大学牛逼'),
(140, 'lllllllllllllll'),
(141, 'mmmmmmmmmmmm'),
(142, '我杨铭很厉害'),
(143, '超级无敌南开大学'),
(144, '为什么输入不了了啊'),
(145, 'ffffffffffff'),
(146, 'ffffffffffff'),
(147, 'dddddd'),
(148, '新闻咋就上传不了呢'),
(149, '真的牛逼');

-- --------------------------------------------------------

--
-- 表的结构 `join_guest`
--

CREATE TABLE `join_guest` (
  `guest_id` int(11) NOT NULL COMMENT '宾客id',
  `activity_date` date NOT NULL COMMENT '活动日期',
  `activity_num` int(11) NOT NULL COMMENT '活动编号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='参加（宾客id，活动日期，活动编号）';

--
-- 转存表中的数据 `join_guest`
--

INSERT INTO `join_guest` (`guest_id`, `activity_date`, `activity_num`) VALUES
(5731, '2019-09-10', 2),
(7533, '2019-10-08', 2),
(7533, '2019-10-08', 3),
(7842, '2019-10-17', 1);

-- --------------------------------------------------------

--
-- 表的结构 `join_teacher`
--

CREATE TABLE `join_teacher` (
  `teacher_workid` int(11) NOT NULL COMMENT '老师工作id',
  `activity_date` date NOT NULL COMMENT '活动日期',
  `activity_num` int(11) NOT NULL COMMENT '活动编号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='参加（老师工作id，活动日期，活动编号）';

--
-- 转存表中的数据 `join_teacher`
--

INSERT INTO `join_teacher` (`teacher_workid`, `activity_date`, `activity_num`) VALUES
(108621, '2019-10-08', 2),
(930073, '2019-09-10', 2),
(930073, '2019-10-08', 2),
(930073, '2019-10-17', 1);

-- --------------------------------------------------------

--
-- 表的结构 `join_volunteer`
--

CREATE TABLE `join_volunteer` (
  `volunteer_id` int(11) NOT NULL COMMENT '志愿者学号',
  `activity_date` date NOT NULL COMMENT '活动日期',
  `activity_num` int(11) NOT NULL COMMENT '活动编号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='参与（志愿者id，活动日期，活动编号）';

--
-- 转存表中的数据 `join_volunteer`
--

INSERT INTO `join_volunteer` (`volunteer_id`, `activity_date`, `activity_num`) VALUES
(1711394, '2019-09-10', 2),
(1711401, '2019-10-08', 2),
(1711401, '2019-10-17', 1);

-- --------------------------------------------------------

--
-- 表的结构 `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `menu`
--

INSERT INTO `menu` (`id`, `name`, `parent`, `route`, `order`, `data`) VALUES
(1, '权限管理', NULL, '/admin/default/index', 0, NULL),
(2, '权限', NULL, '/admin/route/index', 1, NULL),
(3, '角色', NULL, '/admin/permission/index', 1, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1562223261),
('m130524_201442_init', 1562223265),
('m140506_102106_rbac_init', 1562410054),
('m140602_111327_create_menu_table', 1562409791),
('m160312_050000_create_user', 1562409791),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1562410055),
('m180523_151638_rbac_updates_indexes_without_prefix', 1562410055),
('m190124_110200_add_verification_token_column_to_user_table', 1562223265);

-- --------------------------------------------------------

--
-- 表的结构 `nku_activity`
--

CREATE TABLE `nku_activity` (
  `activity_date` date NOT NULL COMMENT '活动日期',
  `activity_num` int(11) NOT NULL COMMENT '活动编号',
  `activity_name` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '活动名',
  `activity_type` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '活动种类',
  `activity_position` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '活动地点',
  `activity_url` char(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '活动链接'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='活动（日期，编号，名称，种类，地点）';

--
-- 转存表中的数据 `nku_activity`
--

INSERT INTO `nku_activity` (`activity_date`, `activity_num`, `activity_name`, `activity_type`, `activity_position`, `activity_url`) VALUES
('2019-07-24', 1, '计控社会实践', '校友活动', '佳木斯公园', '0'),
('2019-09-10', 2, '百年开学大典', '纪念活动', '南开大学体育馆', ''),
('2019-10-08', 2, '南开未来的智能发展', '学术活动', '南开大学计算机学院', ''),
('2019-10-08', 3, '南开大学计控校友会', '校友活动', '南开大学软件学院', ''),
('2019-10-17', 1, '百年纪念日', '纪念活动', '南开大学体育场', '');

-- --------------------------------------------------------

--
-- 表的结构 `nku_admin`
--

CREATE TABLE `nku_admin` (
  `admin_id` int(11) NOT NULL COMMENT '管理员学号',
  `admin_num` int(11) NOT NULL COMMENT '管理员编号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='管理员/学生子类（管理员学号，管理员编号）';

--
-- 转存表中的数据 `nku_admin`
--

INSERT INTO `nku_admin` (`admin_id`, `admin_num`) VALUES
(1711395, 1),
(1711398, 4),
(12, 12);

-- --------------------------------------------------------

--
-- 表的结构 `nku_alumni`
--

CREATE TABLE `nku_alumni` (
  `alumi_id` int(11) NOT NULL COMMENT '校友id',
  `alumi_graduyear` year(4) NOT NULL COMMENT '校友毕业年份',
  `alumi_degree` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '校友学位',
  `alumi_college` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '校友毕业院校'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='知名校友（id，毕业年份，学位，学院）';

--
-- 转存表中的数据 `nku_alumni`
--

INSERT INTO `nku_alumni` (`alumi_id`, `alumi_graduyear`, `alumi_degree`, `alumi_college`) VALUES
(7533, 1998, '本科生', '计算机学院');

-- --------------------------------------------------------

--
-- 表的结构 `nku_college`
--

CREATE TABLE `nku_college` (
  `college_name` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '学院名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='学院（学院名称）';

--
-- 转存表中的数据 `nku_college`
--

INSERT INTO `nku_college` (`college_name`) VALUES
('人工智能学院'),
('网络空间安全学院'),
('计算机学院');

-- --------------------------------------------------------

--
-- 表的结构 `nku_element`
--

CREATE TABLE `nku_element` (
  `element_type` char(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `nku_element`
--

INSERT INTO `nku_element` (`element_type`) VALUES
('校庆吉祥物'),
('校徽'),
('校歌'),
('校训'),
('百年纪念标志');

-- --------------------------------------------------------

--
-- 表的结构 `nku_events`
--

CREATE TABLE `nku_events` (
  `events_time` year(4) NOT NULL COMMENT '事件时间',
  `events_name` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '事件名称'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='重大事件（时间，名称）';

--
-- 转存表中的数据 `nku_events`
--

INSERT INTO `nku_events` (`events_time`, `events_name`) VALUES
(1919, '南开大学建校'),
(1951, '周总理视察南开大学');

-- --------------------------------------------------------

--
-- 表的结构 `nku_guest`
--

CREATE TABLE `nku_guest` (
  `guest_id` int(11) NOT NULL COMMENT '嘉宾id',
  `guest_name` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '嘉宾姓名',
  `guest_job` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '嘉宾职业',
  `guest_url` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '嘉宾链接'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `nku_guest`
--

INSERT INTO `nku_guest` (`guest_id`, `guest_name`, `guest_job`, `guest_url`) VALUES
(5731, '张建国', '公务员', ''),
(7533, '李建堂', '企业家', ''),
(7842, '习近平', '公务员', '');

-- --------------------------------------------------------

--
-- 表的结构 `nku_leader`
--

CREATE TABLE `nku_leader` (
  `leader_id` int(11) NOT NULL COMMENT '领导id',
  `leader_position` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '领导职位',
  `leader_unit` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '领导单位'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='领带/宾客子类（id，职位，单位）';

--
-- 转存表中的数据 `nku_leader`
--

INSERT INTO `nku_leader` (`leader_id`, `leader_position`, `leader_unit`) VALUES
(5731, '局长', '天津市财政局'),
(7842, '主席', '中央政治局');

-- --------------------------------------------------------

--
-- 表的结构 `nku_news`
--

CREATE TABLE `nku_news` (
  `news_date` date NOT NULL COMMENT '新闻日期',
  `news_num` int(11) NOT NULL COMMENT '新闻编号',
  `news_headline` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '新闻标题',
  `news_ifpassed` tinyint(1) NOT NULL COMMENT '是否通过审核',
  `news_url` int(11) DEFAULT NULL COMMENT '新闻网页地址',
  `news_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '新闻内容'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='新闻（日期，编号，标题，是否通过审核）';

--
-- 转存表中的数据 `nku_news`
--

INSERT INTO `nku_news` (`news_date`, `news_num`, `news_headline`, `news_ifpassed`, `news_url`, `news_text`) VALUES
('2019-07-08', 0, '我再试试能不能上传', 0, 3, '真的可以上传了哦！'),
('2019-09-11', 2, '南开大学百年开学大典成功举办', 1, 2, '南开大学牛逼'),
('2019-10-11', 1, '计控学院校友会圆满举办', 1, 1, '计控校友会圆满举办，随便写点什么以示鼓励'),
('2019-10-17', 1, '习近平总书记参加南开大学百年校庆', 1, 0, '     由中宣部、中央网信办等10国家部委和天津市人民政府共同主办的2019年国家网络安全宣传周活动将于9月中旬在我市举办。为贯彻落实习近平总书记视察南开大学时强调的“加强基础研究，力争在原始创新和自主创新上出更多成果”重要指示精神，我市将以开展2019年国家网络安全宣传周活动为契机，举办面向全国高校学生和网络安全从业人员的“‘第五空间’网络安全创新能力大赛”，发现和培养网络安全人才，促进网络安全技术交流，打造健康良好产业生态圈，赋能经济社会高质量发展。');

-- --------------------------------------------------------

--
-- 表的结构 `nku_organization`
--

CREATE TABLE `nku_organization` (
  `organi_name` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '组织名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='组织（组织名）';

--
-- 转存表中的数据 `nku_organization`
--

INSERT INTO `nku_organization` (`organi_name`) VALUES
('南开大学学生会'),
('南开大学宣传部');

-- --------------------------------------------------------

--
-- 表的结构 `nku_student`
--

CREATE TABLE `nku_student` (
  `student_id` int(11) NOT NULL COMMENT '学号',
  `student_name` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '学生姓名',
  `college_name` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '学生所属学院'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='学生（学号，姓名，所属学院）';

--
-- 转存表中的数据 `nku_student`
--

INSERT INTO `nku_student` (`student_id`, `student_name`, `college_name`) VALUES
(12, '12', '计算机学院'),
(1711390, '熊路阳', '计算机学院'),
(1711392, '闫桐', '计算机学院'),
(1711394, '杨俊辉', '网络空间安全学院'),
(1711395, '杨铭', '计算机学院'),
(1711398, '仪德智', '网络空间安全学院'),
(1711401, '于胜龙', '计算机学院');

-- --------------------------------------------------------

--
-- 表的结构 `nku_teacher`
--

CREATE TABLE `nku_teacher` (
  `teacher_workid` int(11) NOT NULL COMMENT '工作id',
  `teacher_name` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '老师姓名',
  `teacher_position` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '老师职位',
  `teacher_college` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '老师所属学院'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='老师（工作id，姓名，职位，学院）';

--
-- 转存表中的数据 `nku_teacher`
--

INSERT INTO `nku_teacher` (`teacher_workid`, `teacher_name`, `teacher_position`, `teacher_college`) VALUES
(108621, '李岳', '副教授', '计算机学院'),
(930073, '袁晓洁', '教授', '计算机学院');

-- --------------------------------------------------------

--
-- 表的结构 `nku_volunteer`
--

CREATE TABLE `nku_volunteer` (
  `volunteer_id` int(11) NOT NULL COMMENT '志愿者学号',
  `volunteer_type` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '志愿者种类'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='志愿者/学生子类（志愿者学号，志愿者种类）';

--
-- 转存表中的数据 `nku_volunteer`
--

INSERT INTO `nku_volunteer` (`volunteer_id`, `volunteer_type`) VALUES
(1711394, '场务人员'),
(1711401, '迎宾人员');

-- --------------------------------------------------------

--
-- 表的结构 `undertaken_bycollege`
--

CREATE TABLE `undertaken_bycollege` (
  `college_name` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '学院名',
  `activity_date` date NOT NULL COMMENT '活动日期',
  `activity_num` int(11) NOT NULL COMMENT '活动编号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='承办（学院名，活动日期，活动编号）';

--
-- 转存表中的数据 `undertaken_bycollege`
--

INSERT INTO `undertaken_bycollege` (`college_name`, `activity_date`, `activity_num`) VALUES
('人工智能学院', '2019-10-08', 2),
('人工智能学院', '2019-10-08', 3),
('网络空间安全学院', '2019-10-08', 3),
('计算机学院', '2019-10-08', 2),
('计算机学院', '2019-10-08', 3);

-- --------------------------------------------------------

--
-- 表的结构 `undertaken_byorgani`
--

CREATE TABLE `undertaken_byorgani` (
  `organi_name` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '组织名',
  `activity_date` date NOT NULL COMMENT '活动日期',
  `activity_num` int(11) NOT NULL COMMENT '活动编号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='承办（组织，日期，编号）';

--
-- 转存表中的数据 `undertaken_byorgani`
--

INSERT INTO `undertaken_byorgani` (`organi_name`, `activity_date`, `activity_num`) VALUES
('南开大学学生会', '2019-09-10', 2),
('南开大学学生会', '2019-10-17', 1),
('南开大学宣传部', '2019-10-17', 1);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(12, '12', 'FUrNaIlwzKEIETkcsFBYCYw5KiPu7rQP', '$2y$13$Yr1HJRszNXBnPfVBYKvuo.OslJUC4kiMJ10HSFHDUNo2GTqGNqWEa', NULL, '12@qq.com', 10, 1562922978, 1562922978, 'aVwCgeioOCSjtvfIbELRuh4guSoMHxER_1562922978'),
(123, '123', '07oUE9X5LG04UINDOjWdEbQeI4zsG9ZW', '$2y$13$dRc2Dy5JiL912kY0sW.xkeYObbMYLKKgIvK4EqI35bc8tq/D4pKoS', NULL, '12323@qq.com', 10, 1562923694, 1562923694, 'Z43ebEuF0j9ccZbjd_mov4E_yQSXXY-k_1562923694'),
(1711390, '熊路阳', '75dctY31qi5kGQGZF_6xP6gnxlv3d9Uq', '$2y$13$8MGPSMM4CaXyh8p9xWvID.NmlVb0yxK70coTeon5sEr4z9oUsSrCO', NULL, '434495696@qq.com', 9, 1563131315, 1563131315, 'MewiEN9P-Ig7M7zkx3vbMndPu3Qbxqgl_1563131315'),
(1711392, '闫桐', 'TA0gDbOD6ZvI51R3zb9cBVjNUoYlfOb9', '$2y$13$jq59bWsZu357UtcGRcGvYeZ.StGroBJAT4d77IlIOlaJ8k2r0LtWy', NULL, '4344996@qq.com', 10, 1564058298, 1564058298, 'H7TZ7akr35E2B5JO-q-Bhk2vC9INWpg2_1564058298');

-- --------------------------------------------------------

--
-- 表的结构 `write_bystu`
--

CREATE TABLE `write_bystu` (
  `student_id` int(11) NOT NULL COMMENT '学号',
  `news_date` date NOT NULL COMMENT '新闻日期',
  `news_num` int(11) NOT NULL COMMENT '新闻编号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='撰写（学号，新闻日期，新闻编号）';

--
-- 转存表中的数据 `write_bystu`
--

INSERT INTO `write_bystu` (`student_id`, `news_date`, `news_num`) VALUES
(1711392, '2019-07-08', 0),
(1711394, '2019-09-11', 2),
(1711395, '2019-10-17', 1),
(1711401, '2019-10-11', 1);

--
-- 转储表的索引
--

--
-- 表的索引 `associate_withactivity`
--
ALTER TABLE `associate_withactivity`
  ADD PRIMARY KEY (`activity_date`,`activity_num`,`news_date`,`news_num`),
  ADD KEY `news_date` (`news_date`,`news_num`);

--
-- 表的索引 `audit_byadmin`
--
ALTER TABLE `audit_byadmin`
  ADD PRIMARY KEY (`admin_id`,`news_date`,`news_num`),
  ADD KEY `news_date` (`news_date`,`news_num`);

--
-- 表的索引 `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `idx-auth_assignment-user_id` (`user_id`);

--
-- 表的索引 `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- 表的索引 `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- 表的索引 `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- 表的索引 `danmus`
--
ALTER TABLE `danmus`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `join_guest`
--
ALTER TABLE `join_guest`
  ADD PRIMARY KEY (`guest_id`,`activity_date`,`activity_num`),
  ADD KEY `activity_date` (`activity_date`,`activity_num`);

--
-- 表的索引 `join_teacher`
--
ALTER TABLE `join_teacher`
  ADD PRIMARY KEY (`teacher_workid`,`activity_date`,`activity_num`),
  ADD KEY `activity_date` (`activity_date`,`activity_num`);

--
-- 表的索引 `join_volunteer`
--
ALTER TABLE `join_volunteer`
  ADD PRIMARY KEY (`volunteer_id`,`activity_date`,`activity_num`),
  ADD KEY `activity_date` (`activity_date`,`activity_num`);

--
-- 表的索引 `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`);

--
-- 表的索引 `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- 表的索引 `nku_activity`
--
ALTER TABLE `nku_activity`
  ADD PRIMARY KEY (`activity_date`,`activity_num`);

--
-- 表的索引 `nku_admin`
--
ALTER TABLE `nku_admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_num` (`admin_num`);

--
-- 表的索引 `nku_alumni`
--
ALTER TABLE `nku_alumni`
  ADD PRIMARY KEY (`alumi_id`),
  ADD KEY `alumi_college` (`alumi_college`);

--
-- 表的索引 `nku_college`
--
ALTER TABLE `nku_college`
  ADD PRIMARY KEY (`college_name`);

--
-- 表的索引 `nku_element`
--
ALTER TABLE `nku_element`
  ADD PRIMARY KEY (`element_type`);

--
-- 表的索引 `nku_events`
--
ALTER TABLE `nku_events`
  ADD PRIMARY KEY (`events_time`,`events_name`);

--
-- 表的索引 `nku_guest`
--
ALTER TABLE `nku_guest`
  ADD PRIMARY KEY (`guest_id`);

--
-- 表的索引 `nku_leader`
--
ALTER TABLE `nku_leader`
  ADD PRIMARY KEY (`leader_id`);

--
-- 表的索引 `nku_news`
--
ALTER TABLE `nku_news`
  ADD PRIMARY KEY (`news_date`,`news_num`);

--
-- 表的索引 `nku_organization`
--
ALTER TABLE `nku_organization`
  ADD PRIMARY KEY (`organi_name`);

--
-- 表的索引 `nku_student`
--
ALTER TABLE `nku_student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `college_name` (`college_name`);

--
-- 表的索引 `nku_teacher`
--
ALTER TABLE `nku_teacher`
  ADD PRIMARY KEY (`teacher_workid`),
  ADD KEY `teacher_college` (`teacher_college`);

--
-- 表的索引 `nku_volunteer`
--
ALTER TABLE `nku_volunteer`
  ADD PRIMARY KEY (`volunteer_id`);

--
-- 表的索引 `undertaken_bycollege`
--
ALTER TABLE `undertaken_bycollege`
  ADD PRIMARY KEY (`college_name`,`activity_date`,`activity_num`),
  ADD KEY `activity_date` (`activity_date`,`activity_num`);

--
-- 表的索引 `undertaken_byorgani`
--
ALTER TABLE `undertaken_byorgani`
  ADD PRIMARY KEY (`organi_name`,`activity_date`,`activity_num`),
  ADD KEY `activity_date` (`activity_date`,`activity_num`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- 表的索引 `write_bystu`
--
ALTER TABLE `write_bystu`
  ADD PRIMARY KEY (`student_id`,`news_date`,`news_num`),
  ADD KEY `news_date` (`news_date`,`news_num`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `danmus`
--
ALTER TABLE `danmus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- 使用表AUTO_INCREMENT `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 限制导出的表
--

--
-- 限制表 `associate_withactivity`
--
ALTER TABLE `associate_withactivity`
  ADD CONSTRAINT `associate_withactivity_ibfk_1` FOREIGN KEY (`activity_date`,`activity_num`) REFERENCES `nku_activity` (`activity_date`, `activity_num`),
  ADD CONSTRAINT `associate_withactivity_ibfk_2` FOREIGN KEY (`news_date`,`news_num`) REFERENCES `nku_news` (`news_date`, `news_num`);

--
-- 限制表 `audit_byadmin`
--
ALTER TABLE `audit_byadmin`
  ADD CONSTRAINT `audit_byadmin_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `nku_admin` (`admin_id`),
  ADD CONSTRAINT `audit_byadmin_ibfk_2` FOREIGN KEY (`news_date`,`news_num`) REFERENCES `nku_news` (`news_date`, `news_num`);

--
-- 限制表 `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- 限制表 `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `join_guest`
--
ALTER TABLE `join_guest`
  ADD CONSTRAINT `join_guest_ibfk_1` FOREIGN KEY (`activity_date`,`activity_num`) REFERENCES `nku_activity` (`activity_date`, `activity_num`),
  ADD CONSTRAINT `join_guest_ibfk_2` FOREIGN KEY (`guest_id`) REFERENCES `nku_guest` (`guest_id`);

--
-- 限制表 `join_teacher`
--
ALTER TABLE `join_teacher`
  ADD CONSTRAINT `join_teacher_ibfk_1` FOREIGN KEY (`teacher_workid`) REFERENCES `nku_teacher` (`teacher_workid`),
  ADD CONSTRAINT `join_teacher_ibfk_2` FOREIGN KEY (`activity_date`,`activity_num`) REFERENCES `nku_activity` (`activity_date`, `activity_num`);

--
-- 限制表 `join_volunteer`
--
ALTER TABLE `join_volunteer`
  ADD CONSTRAINT `join_volunteer_ibfk_1` FOREIGN KEY (`volunteer_id`) REFERENCES `nku_volunteer` (`volunteer_id`),
  ADD CONSTRAINT `join_volunteer_ibfk_2` FOREIGN KEY (`activity_date`,`activity_num`) REFERENCES `nku_activity` (`activity_date`, `activity_num`);

--
-- 限制表 `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- 限制表 `nku_admin`
--
ALTER TABLE `nku_admin`
  ADD CONSTRAINT `nku_admin_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `nku_student` (`student_id`);

--
-- 限制表 `nku_alumni`
--
ALTER TABLE `nku_alumni`
  ADD CONSTRAINT `nku_alumni_ibfk_1` FOREIGN KEY (`alumi_id`) REFERENCES `nku_guest` (`guest_id`),
  ADD CONSTRAINT `nku_alumni_ibfk_2` FOREIGN KEY (`alumi_college`) REFERENCES `nku_college` (`college_name`);

--
-- 限制表 `nku_leader`
--
ALTER TABLE `nku_leader`
  ADD CONSTRAINT `nku_leader_ibfk_1` FOREIGN KEY (`leader_id`) REFERENCES `nku_guest` (`guest_id`);

--
-- 限制表 `nku_student`
--
ALTER TABLE `nku_student`
  ADD CONSTRAINT `nku_student_ibfk_1` FOREIGN KEY (`college_name`) REFERENCES `nku_college` (`college_name`);

--
-- 限制表 `nku_teacher`
--
ALTER TABLE `nku_teacher`
  ADD CONSTRAINT `nku_teacher_ibfk_1` FOREIGN KEY (`teacher_college`) REFERENCES `nku_college` (`college_name`);

--
-- 限制表 `nku_volunteer`
--
ALTER TABLE `nku_volunteer`
  ADD CONSTRAINT `nku_volunteer_ibfk_1` FOREIGN KEY (`volunteer_id`) REFERENCES `nku_student` (`student_id`);

--
-- 限制表 `undertaken_bycollege`
--
ALTER TABLE `undertaken_bycollege`
  ADD CONSTRAINT `undertaken_bycollege_ibfk_1` FOREIGN KEY (`activity_date`,`activity_num`) REFERENCES `nku_activity` (`activity_date`, `activity_num`),
  ADD CONSTRAINT `undertaken_bycollege_ibfk_2` FOREIGN KEY (`college_name`) REFERENCES `nku_college` (`college_name`);

--
-- 限制表 `undertaken_byorgani`
--
ALTER TABLE `undertaken_byorgani`
  ADD CONSTRAINT `undertaken_byorgani_ibfk_1` FOREIGN KEY (`organi_name`) REFERENCES `nku_organization` (`organi_name`),
  ADD CONSTRAINT `undertaken_byorgani_ibfk_2` FOREIGN KEY (`activity_date`,`activity_num`) REFERENCES `nku_activity` (`activity_date`, `activity_num`);

--
-- 限制表 `write_bystu`
--
ALTER TABLE `write_bystu`
  ADD CONSTRAINT `write_bystu_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `nku_student` (`student_id`),
  ADD CONSTRAINT `write_bystu_ibfk_2` FOREIGN KEY (`news_date`,`news_num`) REFERENCES `nku_news` (`news_date`, `news_num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
