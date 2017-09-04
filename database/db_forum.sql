-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2017 at 05:07 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `as_admin`
--

CREATE TABLE IF NOT EXISTS `as_admin` (
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
-- Dumping data for table `as_admin`
--

INSERT INTO `as_admin` (`user_id`, `username`, `password`, `full_name`, `email`, `phone`, `level`, `blocked`, `created_date`, `created_userid`, `modified_date`, `modified_userid`) VALUES
(1, 'admin', 'a', 'admin', 'aluminku@smkblabla.sch.id', '', '1', 'N', '0000-00-00 00:00:00', 0, '2017-09-03 18:41:12', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

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
(21, 8, 35, 'menurut gw sih worth banget broo..', '2017-08-29 04:32:30'),
(22, 8, 36, 'beli dah beli beli tar review di mari', '2017-08-29 04:32:55'),
(23, 10, 36, 'dsadasda', '2017-08-29 05:03:36');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `as_frm_categories`
--

INSERT INTO `as_frm_categories` (`frm_category_id`, `category_name`, `category_seo`, `image`, `status`, `description`, `created_date`, `created_userid`, `modified_date`, `modified_userid`) VALUES
(1, 'Pojok Alumni', 'Bisnis', '20140320081847_business.png', 'Y', 'Ngerumpi bareng sahabat lamamu! ya di sini tempatnya. mulai rumpi yuk cin...', '2014-03-04 18:23:06', 1, '2014-03-20 20:18:50', 1),
(2, 'Mata Pelajaran', 'Pelajaran', '20140320082000_computer.png', 'Y', 'Kesulitan memahami penjelasan guru di kelas? mungkin temen-temenmu lebih paham, jadi ayo mulai posmu.', '2014-03-18 21:56:40', 1, '2014-03-20 20:20:47', 1),
(3, 'Ekstra Kulikuler', 'Ekstra+Kulikuler', '20140320082158_games.png', 'Y', 'Bulu tangkis, lukis, pramuka? ikut ekstra kulikuler ga ada ruginya makin untung kalo saling berbagi di sini.', '2014-03-18 21:56:55', 1, '2014-03-20 20:22:01', 1),
(4, 'Loker', 'Lowongan+Kerja', '20140320082258_handphone.png', 'Y', 'Mungkin sahabatmu sulit mendapatkan pekerjaan. bantu dia dengan bebagai lowongan pekerjaan.', '2014-03-18 22:08:56', 1, '2014-03-20 20:23:01', 1),
(5, 'Pengumuman', 'pengumuman', '20140320082657_lifestyle.png', 'Y', 'Kategori ini khusus untuk pemberitahuan aktivitas sekolah.', '2014-03-18 22:09:35', 1, '2014-03-20 20:26:59', 1),
(6, 'Bebas', 'bebas', '20140320082657_lifestyle.png', 'Y', 'kategori khusus untuk ekspresikan kreativitasmu.', '2014-03-18 22:09:35', 1, '2014-03-20 20:26:59', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `as_frm_messages`
--

INSERT INTO `as_frm_messages` (`message_id`, `msgfrom`, `sendto`, `subject`, `message`, `status`, `created_date`) VALUES
(3, 30, 32, 'sdadsad', '&lt;p&gt;sadasasda&lt;/p&gt;', 1, '2017-08-09 03:10:26'),
(4, 32, 30, 'sdadsad', 'ok', 1, '2017-08-09 03:11:02');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `as_frm_messages_sent`
--

INSERT INTO `as_frm_messages_sent` (`message_id`, `msgfrom`, `sendto`, `subject`, `message`, `created_date`) VALUES
(3, 30, 32, 'sdadsad', '&lt;p&gt;sadasasda&lt;/p&gt;', '2017-08-09 03:10:26'),
(4, 32, 30, 'sdadsad', 'ok', '2017-08-09 03:11:02');

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
  `modified_date` datetime NOT NULL,
  `tentang` text NOT NULL,
  `bantuan` text NOT NULL,
  `tlp` varchar(12) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `as_identity`
--

INSERT INTO `as_identity` (`identity_id`, `website_name`, `email`, `url`, `facebook`, `meta_description`, `meta_keyword`, `modified_date`, `tentang`, `bantuan`, `tlp`) VALUES
(1, 'Alumniku', 'aluminku@smkblabla.sch.id', 'http://smkablabla.com', 'http://facebook.com/smkblabla', 'forum yang menghubungkan alumni smk blabla', 'forum+yang+menghubungkan+alumni+smk+blabla', '2014-02-19 19:03:06', 'Aluminku merupakan Portal Web forum khusus alumni SMK N 1 bla bla bla. cari tahu selengkapnya halaman.', 'Untuk  menggunakan website, mulailah dengan mendaftar. selanjutnya lakukan hal yang kamu suka..', '0211274');

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
  `province_name` varchar(100) NOT NULL,
  `cellphone` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `biografi` text NOT NULL,
  `status` char(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  `hits` int(11) NOT NULL,
  `last_login` datetime NOT NULL,
  `ip` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `as_member`
--

INSERT INTO `as_member` (`member_id`, `email`, `username`, `password`, `photo`, `first_name`, `last_name`, `province_name`, `cellphone`, `address`, `biografi`, `status`, `created_date`, `modified_date`, `hits`, `last_login`, `ip`) VALUES
(1, 'jiwantoko@gmail.com', 'Jiwantoko', 'arifin123', 'jiwantoko@gmail.com_Luffy.jpg', 'Arifin', 'jiwantoko', 'Jawa Tengah', '085700093787', 'All Around The World', 'Simple is Perfect', 'Y', '2017-07-28 17:00:31', '2017-08-30 17:36:28', 0, '2017-09-03 05:15:12', '::1'),
(35, 'a@a', 'a', 'a', 'a@a_bepo.jpg', 'a', 'a', 'Aceh', '0812312312', 'aaa', 'aaaaa', 'Y', '2017-08-22 04:30:58', '2017-08-22 04:58:46', 0, '2017-08-29 04:32:03', '::1'),
(36, 'c@c', 'chopper', 'c', 'c@c_variable-action-heroes-one-piece-prepainted-action-figure-tony-t-439637.1.jpg', 'Chopper', '', 'Papua', '0', 'Greenline', 'Suka permen kapas', 'Y', '2017-08-23 17:29:51', '2017-08-23 17:30:38', 0, '2017-08-29 05:03:30', '::1');

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
  `description` text NOT NULL,
  `image` varchar(150) DEFAULT NULL,
  `member_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  `hits` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `as_topics`
--

INSERT INTO `as_topics` (`topic_id`, `topic_ref`, `title`, `title_seo`, `category_id`, `description`, `image`, `member_id`, `created_date`, `modified_date`, `hits`) VALUES
(7, 2147483647, 'Game seru', 'seru', 3, '<p>Ada game baru lho bro .. namanya rise of tomb raider lu mesti coba</p>', NULL, 1, '2017-08-22 04:30:12', '0000-00-00 00:00:00', 152),
(8, 2147483647, 'Rx 480 worth it ga ya?', 'rx+480+worth+it+ga+ya', 2, '<p>jadi gini bro, gw mau rakit pc pake vga amd rx 480 yang versi 4gb. kira-kira worth it ga ya terus performance to moneynya gmn?<br />&nbsp;</p>', 'jiwantoko@gmail.com_20170829043132_index.jpg', 1, '2017-08-29 04:31:33', '0000-00-00 00:00:00', 27),
(11, 2147483647, 'asfsaf', 'asfsaf', 1, '<p>fafasfs</p>', NULL, 1, '2017-08-29 05:05:58', '0000-00-00 00:00:00', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `as_admin`
--
ALTER TABLE `as_admin`
  ADD PRIMARY KEY (`user_id`);

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
-- Indexes for table `as_topics`
--
ALTER TABLE `as_topics`
  ADD PRIMARY KEY (`topic_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `as_admin`
--
ALTER TABLE `as_admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `as_comments`
--
ALTER TABLE `as_comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `as_frm_categories`
--
ALTER TABLE `as_frm_categories`
  MODIFY `frm_category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `as_frm_messages`
--
ALTER TABLE `as_frm_messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `as_frm_messages_sent`
--
ALTER TABLE `as_frm_messages_sent`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `as_identity`
--
ALTER TABLE `as_identity`
  MODIFY `identity_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `as_member`
--
ALTER TABLE `as_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `as_topics`
--
ALTER TABLE `as_topics`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
