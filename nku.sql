-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2019-07-10 09:07:13
-- 服务器版本： 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nku`
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
-- 表的结构 `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1562685802),
('m130524_201442_init', 1562685806);

-- --------------------------------------------------------

--
-- 表的结构 `nku_activity`
--

CREATE TABLE `nku_activity` (
  `activity_date` date NOT NULL COMMENT '活动日期',
  `activity_num` int(11) NOT NULL COMMENT '活动编号',
  `activity_name` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '活动名',
  `activity_type` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '活动种类',
  `activity_position` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '活动地点'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='活动（日期，编号，名称，种类，地点）';

--
-- 转存表中的数据 `nku_activity`
--

INSERT INTO `nku_activity` (`activity_date`, `activity_num`, `activity_name`, `activity_type`, `activity_position`) VALUES
('2019-09-10', 2, '百年开学大典', '纪念活动', '南开大学体育馆'),
('2019-10-08', 2, '南开未来的智能发展', '学术活动', '南开大学计算机学院'),
('2019-10-08', 3, '南开大学计控校友会', '校友活动', '南开大学软件学院'),
('2019-10-17', 1, '百年纪念日', '纪念活动', '南开大学体育场');

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
(1711398, 4);

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
('校徽'),
('校歌'),
('百年纪念标志'),
('校庆吉祥物'),
('校训');

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
  `guest_job` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '嘉宾职业'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `nku_guest`
--

INSERT INTO `nku_guest` (`guest_id`, `guest_name`, `guest_job`) VALUES
(5731, '张建国', '公务员'),
(7533, '李建堂', '企业家'),
(7842, '习近平', '公务员');

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
  `news_ifpassed` tinyint(1) NOT NULL COMMENT '是否通过审核'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='新闻（日期，编号，标题，是否通过审核）';

--
-- 转存表中的数据 `nku_news`
--

INSERT INTO `nku_news` (`news_date`, `news_num`, `news_headline`, `news_ifpassed`) VALUES
('2019-09-11', 2, '南开大学百年开学大典成功举办', 1),
('2019-10-11', 1, '计控学院校友会圆满举办', 0),
('2019-10-17', 1, '习近平总书记参加南开大学百年校庆', 1);

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
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(1711394, '2019-09-11', 2),
(1711395, '2019-10-17', 1),
(1711401, '2019-10-11', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `associate_withactivity`
--
ALTER TABLE `associate_withactivity`
  ADD PRIMARY KEY (`activity_date`,`activity_num`,`news_date`,`news_num`),
  ADD KEY `news_date` (`news_date`,`news_num`);

--
-- Indexes for table `audit_byadmin`
--
ALTER TABLE `audit_byadmin`
  ADD PRIMARY KEY (`admin_id`,`news_date`,`news_num`),
  ADD KEY `news_date` (`news_date`,`news_num`);

--
-- Indexes for table `join_guest`
--
ALTER TABLE `join_guest`
  ADD PRIMARY KEY (`guest_id`,`activity_date`,`activity_num`),
  ADD KEY `activity_date` (`activity_date`,`activity_num`);

--
-- Indexes for table `join_teacher`
--
ALTER TABLE `join_teacher`
  ADD PRIMARY KEY (`teacher_workid`,`activity_date`,`activity_num`),
  ADD KEY `activity_date` (`activity_date`,`activity_num`);

--
-- Indexes for table `join_volunteer`
--
ALTER TABLE `join_volunteer`
  ADD PRIMARY KEY (`volunteer_id`,`activity_date`,`activity_num`),
  ADD KEY `activity_date` (`activity_date`,`activity_num`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `nku_activity`
--
ALTER TABLE `nku_activity`
  ADD PRIMARY KEY (`activity_date`,`activity_num`);

--
-- Indexes for table `nku_admin`
--
ALTER TABLE `nku_admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_num` (`admin_num`);

--
-- Indexes for table `nku_alumni`
--
ALTER TABLE `nku_alumni`
  ADD PRIMARY KEY (`alumi_id`),
  ADD KEY `alumi_college` (`alumi_college`);

--
-- Indexes for table `nku_college`
--
ALTER TABLE `nku_college`
  ADD PRIMARY KEY (`college_name`);

--
-- Indexes for table `nku_events`
--
ALTER TABLE `nku_events`
  ADD PRIMARY KEY (`events_time`,`events_name`);

--
-- Indexes for table `nku_guest`
--
ALTER TABLE `nku_guest`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `nku_leader`
--
ALTER TABLE `nku_leader`
  ADD PRIMARY KEY (`leader_id`);

--
-- Indexes for table `nku_news`
--
ALTER TABLE `nku_news`
  ADD PRIMARY KEY (`news_date`,`news_num`);

--
-- Indexes for table `nku_organization`
--
ALTER TABLE `nku_organization`
  ADD PRIMARY KEY (`organi_name`);

--
-- Indexes for table `nku_student`
--
ALTER TABLE `nku_student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `nku_teacher`
--
ALTER TABLE `nku_teacher`
  ADD PRIMARY KEY (`teacher_workid`),
  ADD KEY `teacher_college` (`teacher_college`);

--
-- Indexes for table `nku_volunteer`
--
ALTER TABLE `nku_volunteer`
  ADD PRIMARY KEY (`volunteer_id`);

--
-- Indexes for table `undertaken_bycollege`
--
ALTER TABLE `undertaken_bycollege`
  ADD PRIMARY KEY (`college_name`,`activity_date`,`activity_num`),
  ADD KEY `activity_date` (`activity_date`,`activity_num`);

--
-- Indexes for table `undertaken_byorgani`
--
ALTER TABLE `undertaken_byorgani`
  ADD PRIMARY KEY (`organi_name`,`activity_date`,`activity_num`),
  ADD KEY `activity_date` (`activity_date`,`activity_num`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `write_bystu`
--
ALTER TABLE `write_bystu`
  ADD PRIMARY KEY (`student_id`,`news_date`,`news_num`),
  ADD KEY `news_date` (`news_date`,`news_num`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
