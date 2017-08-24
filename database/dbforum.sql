-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2017 at 09:55 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbforum`
--

-- --------------------------------------------------------

--
-- Table structure for table `as_comments`
--

CREATE TABLE IF NOT EXISTS `as_comments` (
  `comment_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `as_comments`
--

INSERT INTO `as_comments` (`comment_id`, `topic_id`, `member_id`, `description`, `created_date`) VALUES
(13, 7, 35, 'iya bro seru gamenya..', '2017-08-22 04:35:47'),
(14, 7, 1, 'benerkan', '2017-08-23 17:09:26'),
(15, 7, 35, 'iya bener.. btw udah kelar maennya bro?', '2017-08-23 17:22:31'),
(16, 7, 1, 'wkwk belom bro haha sbenernya udah sih tapi pengen yang susah maen level high', '2017-08-23 17:23:26'),
(17, 7, 35, 'wah geblek juga bro.. gw aja baru sampe 50% progres ni ada tips bro?', '2017-08-23 17:24:21'),
(18, 7, 1, 'wah, tips ya? bigung juga harus bilang apa soalnya gw maen pake fealing sih. wkwk klo mau cari tips coba cari diyutub banyak chenel bagus', '2017-08-23 17:25:33'),
(19, 7, 35, 'wah seru boleh juga tu.. chenelnya apa ya?', '2017-08-23 17:27:13'),
(20, 7, 36, 'wah rame ni.. boleh gabung bro.. btw channel kaya tara arts bagus juga itu', '2017-08-23 17:31:24'),
(21, 7, 37, 'Yang mana dah ? gua kaga ngerti', '2017-08-24 06:22:17');

-- --------------------------------------------------------

--
-- Table structure for table `as_frm_categories`
--

CREATE TABLE IF NOT EXISTS `as_frm_categories` (
  `frm_category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_seo` varchar(120) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` char(1) NOT NULL,
  `description` text NOT NULL,
  `created_date` datetime NOT NULL,
  `created_userid` int(11) NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_userid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `as_frm_categories`
--

INSERT INTO `as_frm_categories` (`frm_category_id`, `category_name`, `category_seo`, `image`, `status`, `description`, `created_date`, `created_userid`, `modified_date`, `modified_userid`) VALUES
(1, 'Bisnis', 'Bisnis', '20140320081847_business.png', 'Y', 'Diskusi tentang karis, dunia kerja dan wirausaha. berbagi informasi tentang lapangan pekerjanan dan kesmepatan investasi.', '2014-03-04 18:23:06', 1, '2014-03-20 20:18:50', 1),
(2, 'Komputer', 'Komputer', '20140320082000_computer.png', 'Y', 'Diskusi tentang komputer, perangkat keras dan internet.', '2014-03-18 21:56:40', 1, '2014-03-20 20:20:47', 1),
(3, 'Game', 'game', '20140320082158_games.png', 'Y', 'Diskusi tentang game dan berbagai jenis game untuk penggemar game..', '2014-03-18 21:56:55', 1, '2014-03-20 20:22:01', 1),
(5, 'HP dan Smarthpone', 'handphone+smartphone', '20140320082258_handphone.png', 'Y', 'Forum diskusi tentang hp dan smartphone terbaru, berbagi tips dan trik. perbangingan perangkat terbaru dan berita terbaru.', '2014-03-18 22:08:56', 1, '2014-03-20 20:23:01', 1),
(6, 'Gaya Hidup', 'gaya+hidup', '20140320082657_lifestyle.png', 'Y', 'Diskusi tentang gaya hidup terbaru dan even yang berkaitan dengan gaya hidup.', '2014-03-18 22:09:35', 1, '2014-03-20 20:26:59', 1),
(7, 'Olahraga', 'Olahraga', '20140320082426_sport.png', 'Y', 'Diskusi semua tentang olahraga', '2014-03-18 22:10:03', 1, '2014-03-20 20:24:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `as_frm_messages`
--

CREATE TABLE IF NOT EXISTS `as_frm_messages` (
  `message_id` int(11) NOT NULL,
  `msgfrom` int(11) NOT NULL,
  `sendto` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `as_frm_messages`
--

INSERT INTO `as_frm_messages` (`message_id`, `msgfrom`, `sendto`, `subject`, `message`, `status`, `created_date`) VALUES
(3, 30, 32, 'sdadsad', '&lt;p&gt;sadasasda&lt;/p&gt;', 1, '2017-08-09 03:10:26'),
(4, 32, 30, 'sdadsad', 'ok', 1, '2017-08-09 03:11:02'),
(8, 37, 1, 'Arifin', '&lt;p&gt;Fin, Laper&lt;/p&gt;', 1, '2017-08-24 08:59:49'),
(9, 37, 1, 'Tes', '&lt;p&gt;Pengen seblak&lt;/p&gt;', 1, '2017-08-24 09:01:23'),
(10, 38, 37, 'Halo', '&lt;p&gt;DIni...&lt;/p&gt;', 1, '2017-08-24 09:06:08'),
(11, 37, 38, 'Halo', 'eh iya ? siapa', 1, '2017-08-24 09:07:44'),
(12, 37, 1, 'Bagi Duit', '&lt;p&gt;JAlan&amp;quot; kuy&lt;/p&gt;', 1, '2017-08-24 09:08:26');

-- --------------------------------------------------------

--
-- Table structure for table `as_frm_messages_sent`
--

CREATE TABLE IF NOT EXISTS `as_frm_messages_sent` (
  `message_id` int(11) NOT NULL,
  `msgfrom` int(11) NOT NULL,
  `sendto` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `as_frm_messages_sent`
--

INSERT INTO `as_frm_messages_sent` (`message_id`, `msgfrom`, `sendto`, `subject`, `message`, `created_date`) VALUES
(3, 30, 32, 'sdadsad', '&lt;p&gt;sadasasda&lt;/p&gt;', '2017-08-09 03:10:26'),
(4, 32, 30, 'sdadsad', 'ok', '2017-08-09 03:11:02'),
(9, 37, 1, 'Tes', '&lt;p&gt;Pengen seblak&lt;/p&gt;', '2017-08-24 09:01:23'),
(10, 38, 37, 'Halo', '&lt;p&gt;DIni...&lt;/p&gt;', '2017-08-24 09:06:08'),
(11, 37, 38, 'Halo', 'eh iya ? siapa', '2017-08-24 09:07:44'),
(12, 37, 1, 'Bagi Duit', '&lt;p&gt;JAlan&amp;quot; kuy&lt;/p&gt;', '2017-08-24 09:08:26');

-- --------------------------------------------------------

--
-- Table structure for table `as_frm_sub_categories`
--

CREATE TABLE IF NOT EXISTS `as_frm_sub_categories` (
  `frm_sub_category_id` int(11) NOT NULL,
  `frm_category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_seo` varchar(120) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` char(1) NOT NULL,
  `description` text NOT NULL,
  `created_date` datetime NOT NULL,
  `created_userid` int(11) NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_userid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `as_frm_sub_categories`
--

INSERT INTO `as_frm_sub_categories` (`frm_sub_category_id`, `frm_category_id`, `category_name`, `category_seo`, `image`, `status`, `description`, `created_date`, `created_userid`, `modified_date`, `modified_userid`) VALUES
(1, 1, 'Profession', 'profession', '20140320084812_profession.png', 'Y', 'The Place a variety of professions and discussion discussion about career, salary, tax, financial and sundries working world.', '2014-03-18 22:11:47', 1, '2014-03-20 20:48:15', 1),
(2, 1, 'Entrepreneur Corner', 'entrepreneur+corner', '20140320083921_entrepreneur-corner.png', 'Y', 'Place a discussion about the world of entrepreneurship. Prohibited the promotion here.', '2014-03-18 22:12:18', 1, '2014-03-20 20:39:26', 1),
(3, 1, 'The Online Business', 'the+online+business', '20140320084915_online-business.png', 'Y', 'Discussion of all forms of online business and its development. Prohibited the promotion here.', '2014-03-18 22:13:46', 1, '2014-03-20 20:49:20', 1),
(4, 2, 'Hardware Computer', 'hardware+computer', '20140320085038_hardware-computer.png', 'Y', 'The Place a discussion of computer hardware: updates, problems, drivers, peripherals, performance, upgrades, overclocking, showcase, and consulting.', '2014-03-18 22:14:42', 1, '2014-03-20 20:50:43', 1),
(5, 2, 'Internet Service & Networking', 'internet+service+networking', '20140320085213_internet-networking.png', 'Y', 'The place to discuss the internet service provider and networking (hardware & tutorials).', '2014-03-18 22:15:08', 1, '2014-03-20 20:52:37', 1),
(6, 2, 'Website, Web Programmer, Web Developer', 'website+web+programmer+web+developer', '20140320085303_website.png', 'Y', 'The Place technical discussions and reviews about websites, security, blogs, CMS, web hosting, filehoster, forums, boards, mail, SEO, templates, snippets / scripts, social bookmarking, social networks.', '2014-03-18 22:16:07', 1, '2014-03-20 20:53:51', 1),
(7, 3, 'Console & Handheld Games', 'console+handheld+games', '20140320085528_console.png', 'Y', 'The place of discussions about the games being played on consoles and handhelds. Including Xbox, Xbox 360, PS2, PS3, Gamecube, GBA / DS, Gizmondo, N-Gage and PSP.', '2014-03-18 22:16:39', 1, '2014-03-20 20:55:29', 1),
(8, 3, 'Online Games', 'online+games', '20140320085634_online-business.png', 'Y', 'The place of discussions about the games that require computer networks and the Internet.', '2014-03-18 22:17:21', 1, '2014-03-20 20:56:36', 1),
(9, 3, 'PC Games', 'pc+games', '20140320085740_pc-games.png', 'Y', 'The place of discussions about the games being played on the Personal Computer (PC)', '2014-03-18 22:18:00', 1, '2014-03-20 20:57:42', 1),
(10, 3, 'Web-base Games', 'webbase+games', '20140320085837_web-base-games.png', 'Y', 'The place of discussions about the games being played from a web browser.', '2014-03-18 22:18:49', 1, '2014-03-20 20:58:39', 1),
(11, 5, 'Android', 'android', '20140320085943_android.png', 'Y', 'The discussion place about Android.', '2014-03-18 22:19:18', 1, '2014-03-20 20:59:45', 1),
(12, 5, 'Blackberry', 'blackberry', '20140320090042_blackberry.png', 'Y', 'The discussion place about Blackberry', '2014-03-18 22:19:36', 1, '2014-03-20 21:00:45', 1),
(13, 5, 'PDA & PDA Phone', 'pda+pda+phone', '20140320090135_pda-phone.png', 'Y', 'The discussion place about Personal Digital Assistant (electronic handheld information device). Including WM, Palm, and Android.', '2014-03-18 22:20:09', 1, '2014-03-20 21:01:39', 1),
(14, 6, 'Fashion', 'fashion', '20140320090324_fashion.png', 'Y', 'The discussion place and discuss fashion trends, latest fashion information and updates.', '2014-03-18 22:20:32', 1, '2014-03-20 21:03:27', 1),
(15, 6, 'Inspiration', 'inspiration', '20140320090518_inspiration.png', 'Y', 'The Share tips and inspirational inputs, as well as the motivation too.', '2014-03-18 22:20:59', 1, '2014-03-20 21:05:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `as_identity`
--

CREATE TABLE IF NOT EXISTS `as_identity` (
  `identity_id` int(5) NOT NULL,
  `website_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `url` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `facebook` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `meta_description` varchar(250) NOT NULL,
  `meta_keyword` varchar(250) NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `as_identity`
--

INSERT INTO `as_identity` (`identity_id`, `website_name`, `email`, `url`, `facebook`, `meta_description`, `meta_keyword`, `modified_date`) VALUES
(1, 'Alumniku', 'jiwantoko@gmail.com', '', '', 'forum yang menghubungkan alumni', '', '2014-02-19 19:03:06');

-- --------------------------------------------------------

--
-- Table structure for table `as_member`
--

CREATE TABLE IF NOT EXISTS `as_member` (
  `member_id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `province_id` int(11) NOT NULL,
  `cellphone` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `biografi` text NOT NULL,
  `status` char(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  `hits` int(11) NOT NULL,
  `last_login` datetime NOT NULL,
  `ip` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `as_member`
--

INSERT INTO `as_member` (`member_id`, `email`, `username`, `password`, `photo`, `first_name`, `last_name`, `province_id`, `cellphone`, `address`, `biografi`, `status`, `created_date`, `modified_date`, `hits`, `last_login`, `ip`) VALUES
(1, 'jiwantoko@gmail.com', 'Jiwantoko', 'arifin123', 'jiwantoko@gmail.com_Luffy.jpg', 'Arifin', 'jiwantoko', 5, '085700093787', 'All Around The World', 'Simple is Perfect', 'Y', '2017-07-28 17:00:31', '2017-08-23 17:15:32', 0, '2017-08-23 17:36:43', '::1'),
(35, 'a@a', 'a', 'a', 'a@a_bepo.jpg', 'a', 'a', 7, '0812312312', 'aaa', 'aaaaa', 'Y', '2017-08-22 04:30:58', '2017-08-22 04:58:46', 0, '2017-08-23 17:33:33', '::1'),
(36, 'c@c', 'chopper', 'c', 'c@c_variable-action-heroes-one-piece-prepainted-action-figure-tony-t-439637.1.jpg', 'Chopper', '', 24, '0', 'Greenline', 'Suka permen kapas', 'Y', '2017-08-23 17:29:51', '2017-08-23 17:30:38', 0, '2017-08-23 17:29:59', '::1'),
(37, 'dini@makaryo.id', 'dini.ayu', 'qwertyuiop', 'dini@makaryo.id_bunga sepatuu2.jpg', '', '', 3, '0', '', 'memantaskan diri agar pantas untuk orang lain', 'Y', '2017-08-24 06:19:18', '2017-08-24 08:46:44', 0, '2017-08-24 09:37:42', '::1'),
(38, 'belia@makaryo.id', 'belia21', 'asdfghjkl', '', '', '', 0, '0', '', '', 'Y', '2017-08-24 08:39:04', '0000-00-00 00:00:00', 0, '2017-08-24 09:05:24', '::1'),
(39, 'admin', 'jhjhkj', 'admin', '', '', '', 0, '0', '', '', 'Y', '2017-08-24 09:35:58', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `as_provinces`
--

CREATE TABLE IF NOT EXISTS `as_provinces` (
  `province_id` int(11) NOT NULL,
  `province_name` varchar(100) NOT NULL,
  `status` char(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_userid` int(11) NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_userid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `as_provinces`
--

INSERT INTO `as_provinces` (`province_id`, `province_name`, `status`, `created_date`, `created_userid`, `modified_date`, `modified_userid`) VALUES
(1, 'Jawa Barat', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(2, 'Jawa Tengah', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(3, 'Jawa Timur', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(4, 'DKI Jakarta', 'Y', '2014-02-04 19:42:50', 1, '0000-00-00 00:00:00', 0),
(5, 'Banten', 'Y', '2014-02-04 19:43:14', 1, '0000-00-00 00:00:00', 0),
(6, 'Yogyakarta', 'Y', '2014-02-04 19:43:14', 1, '0000-00-00 00:00:00', 0),
(7, 'Aceh', 'Y', '2014-02-04 19:43:14', 1, '0000-00-00 00:00:00', 0),
(8, 'Bali', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(9, 'Bengkulu', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(10, 'Gorontalo', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(11, 'Jambi', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(12, 'Kalimantan Barat', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(13, 'Kalimantan Selatan', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(14, 'Kalimantan Tengah', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(15, 'Kalimantan Timur', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(16, 'Kalimantan Utara', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(17, 'Kepulauan Bangka Belitung', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(18, 'Kepulauan Riau', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(19, 'Lampung', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(20, 'Maluku', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(21, 'Maluku Utara', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(22, 'Nusa Tenggara Barat', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(23, 'Nusa Tenggara Timur', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(24, 'Papua', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(25, 'Papua Barat', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(26, 'Sulawesi Barat', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(27, 'Sulawesi Selatan', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(28, 'Sulawesi Tengah', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(29, 'Sulawesi Tenggara', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(30, 'Sulawesi Utara', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(31, 'Sumatra Barat', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(32, 'Sumatra Selatan', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(33, 'Sumatra Utara', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `as_topics`
--

CREATE TABLE IF NOT EXISTS `as_topics` (
  `topic_id` int(11) NOT NULL,
  `topic_ref` int(20) NOT NULL,
  `title` varchar(120) NOT NULL,
  `title_seo` varchar(150) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(150) DEFAULT NULL,
  `member_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  `hits` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `as_topics`
--

INSERT INTO `as_topics` (`topic_id`, `topic_ref`, `title`, `title_seo`, `category_id`, `sub_category_id`, `description`, `image`, `member_id`, `created_date`, `modified_date`, `hits`) VALUES
(7, 2147483647, 'Game seru', 'seru', 3, 9, '<p>Ada game baru lho bro .. namanya rise of tomb raider lu mesti coba</p>', NULL, 1, '2017-08-22 04:30:12', '0000-00-00 00:00:00', 150);

-- --------------------------------------------------------

--
-- Table structure for table `as_top_ads`
--

CREATE TABLE IF NOT EXISTS `as_top_ads` (
  `top_ads_id` int(5) NOT NULL,
  `title` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `image` text COLLATE latin1_general_ci NOT NULL,
  `post_date` date NOT NULL,
  `active` char(1) COLLATE latin1_general_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `created_userid` int(11) NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_userid` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `as_top_ads`
--

INSERT INTO `as_top_ads` (`top_ads_id`, `title`, `url`, `image`, `post_date`, `active`, `created_date`, `created_userid`, `modified_date`, `modified_userid`) VALUES
(37, 'jiwantoko.com', 'www.jiwantoko.com', '20140519094642_want_to_have_a_website.png', '2014-01-02', 'Y', '2014-01-02 17:51:24', 1, '2014-05-19 09:46:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `as_users`
--

CREATE TABLE IF NOT EXISTS `as_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `full_name` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'user',
  `blocked` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `created_date` datetime NOT NULL,
  `created_userid` int(11) NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_userid` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `as_users`
--

INSERT INTO `as_users` (`user_id`, `username`, `password`, `full_name`, `email`, `phone`, `level`, `blocked`, `created_date`, `created_userid`, `modified_date`, `modified_userid`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@admin.com', '', '1', 'N', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `as_comments`
--
ALTER TABLE `as_comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `as_frm_categories`
--
ALTER TABLE `as_frm_categories`
  ADD PRIMARY KEY (`frm_category_id`);

--
-- Indexes for table `as_frm_messages`
--
ALTER TABLE `as_frm_messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `as_frm_messages_sent`
--
ALTER TABLE `as_frm_messages_sent`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `as_frm_sub_categories`
--
ALTER TABLE `as_frm_sub_categories`
  ADD PRIMARY KEY (`frm_sub_category_id`);

--
-- Indexes for table `as_identity`
--
ALTER TABLE `as_identity`
  ADD PRIMARY KEY (`identity_id`);

--
-- Indexes for table `as_member`
--
ALTER TABLE `as_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `as_provinces`
--
ALTER TABLE `as_provinces`
  ADD PRIMARY KEY (`province_id`);

--
-- Indexes for table `as_topics`
--
ALTER TABLE `as_topics`
  ADD PRIMARY KEY (`topic_id`);

--
-- Indexes for table `as_top_ads`
--
ALTER TABLE `as_top_ads`
  ADD PRIMARY KEY (`top_ads_id`);

--
-- Indexes for table `as_users`
--
ALTER TABLE `as_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `as_comments`
--
ALTER TABLE `as_comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `as_frm_categories`
--
ALTER TABLE `as_frm_categories`
  MODIFY `frm_category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `as_frm_messages`
--
ALTER TABLE `as_frm_messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `as_frm_messages_sent`
--
ALTER TABLE `as_frm_messages_sent`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `as_frm_sub_categories`
--
ALTER TABLE `as_frm_sub_categories`
  MODIFY `frm_sub_category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `as_identity`
--
ALTER TABLE `as_identity`
  MODIFY `identity_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `as_member`
--
ALTER TABLE `as_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `as_provinces`
--
ALTER TABLE `as_provinces`
  MODIFY `province_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `as_topics`
--
ALTER TABLE `as_topics`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `as_top_ads`
--
ALTER TABLE `as_top_ads`
  MODIFY `top_ads_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `as_users`
--
ALTER TABLE `as_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
