-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 Agu 2017 pada 19.59
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbforum`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_cities`
--

CREATE TABLE `as_cities` (
  `city_id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `city_code` varchar(10) DEFAULT NULL,
  `city_name` varchar(100) NOT NULL,
  `status` char(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_userid` int(11) NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_cities`
--

INSERT INTO `as_cities` (`city_id`, `province_id`, `city_code`, `city_name`, `status`, `created_date`, `created_userid`, `modified_date`, `modified_userid`) VALUES
(4, 7, 'JKS', 'Jakarta Selatan', 'Y', '2014-02-05 13:13:14', 1, '2014-02-05 13:34:20', 1),
(5, 8, 'CRB', 'Cirebon', 'Y', '2014-02-05 13:20:05', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_comments`
--

CREATE TABLE `as_comments` (
  `comment_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_comments`
--

INSERT INTO `as_comments` (`comment_id`, `topic_id`, `member_id`, `description`, `created_date`) VALUES
(1, 1, 1, 'Hmmm..ane pikir asfa solution harus mampu menerbitkan buku-buku berkualitas dengan tema yang baru (belum ada dipasaran)\n\nMisalnya EXTJs, ataupun lainnya.. jujur gan, ane sulit sekali belajar di website resminya.. ane ga bisa bahasa Inggris, ditambah kalo ada penulisnya kan ane bisa langsung tanya sama penulisnya langsung\n\nNamun so far so good gan.. ane sejauh ini puas sama buku-buku asfa solution.. pertahankan gan ', '2014-03-04 19:15:48'),
(2, 1, 13, '<p>Saya sudah punya banyak buku ASFA Solution, semuanya saya beli:\r\n\r\n1. Mega Proyek 125 Juta Sistem Informasi Akademik Kampus\r\n2. API Developer Buku Sakti Para Pengembang Web\r\n3. Proyek Membuat Website Periklanan dengan PHP\r\n4. Symfony Full Stack PHP Framework\r\n\r\nProyek-proyeknya mantab gan</p>', '2014-09-18 08:34:27'),
(3, 1, 19, 'No comment sejauh ini.. buku nya belum dibaca semua gan, just koleksi saja, siapa tahu butuh dikemudian hari', '2014-09-18 18:41:41'),
(5, 4, 1, 'ke agussaputra.com aja bang.. \r\n\r\n#numpang promo :D', '2014-09-24 10:12:18'),
(6, 5, 30, 'dsadasdadasda', '2017-08-09 02:58:31'),
(7, 5, 30, 'fdsasdfsa', '2017-08-09 02:58:35'),
(8, 5, 30, 'r2r23432423', '2017-08-09 02:58:38'),
(9, 5, 30, 'fdsfafdaa', '2017-08-09 02:58:41'),
(10, 5, 32, 'sdasda', '2017-08-09 03:01:27'),
(11, 5, 32, 'dsadasdasd', '2017-08-09 03:01:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_frm_categories`
--

CREATE TABLE `as_frm_categories` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_frm_categories`
--

INSERT INTO `as_frm_categories` (`frm_category_id`, `category_name`, `category_seo`, `image`, `status`, `description`, `created_date`, `created_userid`, `modified_date`, `modified_userid`) VALUES
(1, 'Business', 'business', '20140320081847_business.png', 'Y', 'The forum discussion about careers, the world of work and entrepreneurship, information about job openings, opportunities for cooperation and investment.', '2014-03-04 18:23:06', 1, '2014-03-20 20:18:50', 1),
(2, 'Computer Stuff', 'computer+stuff', '20140320082000_computer.png', 'Y', 'The forum to discuss and share everything about computers and the internet.', '2014-03-18 21:56:40', 1, '2014-03-20 20:20:47', 1),
(3, 'Games', 'games', '20140320082158_games.png', 'Y', 'The special forum for fans of various types of games.', '2014-03-18 21:56:55', 1, '2014-03-20 20:22:01', 1),
(4, 'Culinaries & Cultures', 'culinaries+cultures', '', 'Y', '', '2014-03-18 21:57:40', 1, '0000-00-00 00:00:00', 0),
(5, 'Handphone & PDA', 'handphone+pda', '20140320082258_handphone.png', 'Y', 'The forum for discussion and sharing about mobile phones and PDAs. Begin from the latest trends, tips and tricks, product comparison, games and applications to the consultation before buying.', '2014-03-18 22:08:56', 1, '2014-03-20 20:23:01', 1),
(6, 'Lifestyle', 'lifestyle', '20140320082657_lifestyle.png', 'Y', 'The Forum about lifestyle sundries, begin from inspirational things, fashion & lifestyle related event.', '2014-03-18 22:09:35', 1, '2014-03-20 20:26:59', 1),
(7, 'Sports', 'sports', '20140320082426_sport.png', 'Y', 'The forum for fans of sports.', '2014-03-18 22:10:03', 1, '2014-03-20 20:24:27', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_frm_messages`
--

CREATE TABLE `as_frm_messages` (
  `message_id` int(11) NOT NULL,
  `msgfrom` int(11) NOT NULL,
  `sendto` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_frm_messages`
--

INSERT INTO `as_frm_messages` (`message_id`, `msgfrom`, `sendto`, `subject`, `message`, `status`, `created_date`) VALUES
(1, 1, 27, 'Toko Buku Online Terpercaya', '&lt;p&gt;Ada juga di bukuit.com&lt;/p&gt;', 1, '2014-09-24 10:15:47'),
(2, 27, 1, 'Toko Buku Online Terpercaya', 'OK thanks infonya gan', 1, '2014-09-24 10:23:20'),
(3, 30, 32, 'sdadsad', '&lt;p&gt;sadasasda&lt;/p&gt;', 1, '2017-08-09 03:10:26'),
(4, 32, 30, 'sdadsad', 'ok', 1, '2017-08-09 03:11:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_frm_messages_sent`
--

CREATE TABLE `as_frm_messages_sent` (
  `message_id` int(11) NOT NULL,
  `msgfrom` int(11) NOT NULL,
  `sendto` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_frm_messages_sent`
--

INSERT INTO `as_frm_messages_sent` (`message_id`, `msgfrom`, `sendto`, `subject`, `message`, `created_date`) VALUES
(1, 1, 27, 'Toko Buku Online Terpercaya', '&lt;p&gt;Ada juga di bukuit.com&lt;/p&gt;', '2014-09-24 10:15:47'),
(2, 27, 1, 'Toko Buku Online Terpercaya', 'OK thanks infonya gan', '2014-09-24 10:23:20'),
(3, 30, 32, 'sdadsad', '&lt;p&gt;sadasasda&lt;/p&gt;', '2017-08-09 03:10:26'),
(4, 32, 30, 'sdadsad', 'ok', '2017-08-09 03:11:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_frm_sub_categories`
--

CREATE TABLE `as_frm_sub_categories` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_frm_sub_categories`
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
-- Struktur dari tabel `as_identity`
--

CREATE TABLE `as_identity` (
  `identity_id` int(5) NOT NULL,
  `website_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `url` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `facebook` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `meta_description` varchar(250) NOT NULL,
  `meta_keyword` varchar(250) NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_identity`
--

INSERT INTO `as_identity` (`identity_id`, `website_name`, `email`, `url`, `facebook`, `meta_description`, `meta_keyword`, `modified_date`) VALUES
(1, 'oaseast.com - Connecting Middle East Societies', 'helpdesk@oaseast.com', 'http://localhost/qlink.com/home', 'https://www.facebook.com/pages/Agus-Saputra/167451856672444', 'oaseast.com is community website where it can be used as a means of buying and selling in Middle East areas', 'oaseast.com, Middle East, Buying, Selling, Community, Qatar', '2014-02-19 19:03:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_member`
--

CREATE TABLE `as_member` (
  `member_id` int(11) NOT NULL,
  `facebook_id` varchar(20) NOT NULL,
  `twitter_id` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `province_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `cellphone` varchar(30) NOT NULL,
  `hidden_cellphone` char(1) NOT NULL,
  `ym_id` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `biografi` text NOT NULL,
  `status` char(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  `hits` int(11) NOT NULL,
  `verification_code` varchar(20) NOT NULL,
  `last_login` datetime NOT NULL,
  `ip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_member`
--

INSERT INTO `as_member` (`member_id`, `facebook_id`, `twitter_id`, `email`, `username`, `password`, `photo`, `first_name`, `last_name`, `province_id`, `city_id`, `cellphone`, `hidden_cellphone`, `ym_id`, `address`, `biografi`, `status`, `created_date`, `modified_date`, `hits`, `verification_code`, `last_login`, `ip`) VALUES
(30, '', '', 'a@a', 'a', 'a', '', '', '', 2, 0, '', '', '', '', '', 'Y', '2017-07-28 17:00:31', '2017-07-28 17:11:10', 0, 'RfmBkrLRVb', '2017-08-11 19:56:10', '::1'),
(31, '', '', 'b@b', 'b', 'b', '', '', '', 0, 0, '', '', '', '', '', 'Y', '2017-07-31 04:07:11', '0000-00-00 00:00:00', 0, 'smbXMNEkXl', '0000-00-00 00:00:00', ''),
(32, '', '', 'c@c', 'c', 'c', '', '', '', 0, 0, '', '', '', '', '', 'Y', '2017-07-31 04:10:48', '0000-00-00 00:00:00', 0, 'dWYfZZToN7', '2017-08-09 03:11:14', '::1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_provinces`
--

CREATE TABLE `as_provinces` (
  `province_id` int(11) NOT NULL,
  `province_name` varchar(100) NOT NULL,
  `status` char(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_userid` int(11) NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_provinces`
--

INSERT INTO `as_provinces` (`province_id`, `province_name`, `status`, `created_date`, `created_userid`, `modified_date`, `modified_userid`) VALUES
(1, 'West Java', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(2, 'Middle Java', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(3, 'East Java', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(4, 'Bali', 'Y', '2013-11-11 00:00:00', 1, '0000-00-00 00:00:00', 0),
(7, 'DKI Jakarta', 'Y', '2014-02-04 19:42:50', 1, '0000-00-00 00:00:00', 0),
(8, 'Jawa Barat', 'Y', '2014-02-04 19:43:14', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_topics`
--

CREATE TABLE `as_topics` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_topics`
--

INSERT INTO `as_topics` (`topic_id`, `topic_ref`, `title`, `title_seo`, `category_id`, `sub_category_id`, `description`, `image`, `member_id`, `created_date`, `modified_date`, `hits`) VALUES
(1, 2147483647, 'Apa Pendapat Anda Tentang Penerbit ASFA Solution', 'apa-pendapat-anda-tentang-penerbit-asfa-solution', 1, 3, '<p>Gan, ane minta partisipasinya donk untuk menjawab postingan ane.. <br> Apa pendapat agan terhadap penerbit ASFA Solution dan adakah saran agar asfa solution lebih baik lagi serta buku apa yang agan harap agar diterbitkan ASFA Solution? <br>Thanks Gan</p>', 'felicia.feni@gmail.com_20140304070820_logo1.jpg', 2, '2014-03-04 19:08:39', '0000-00-00 00:00:00', 155),
(4, 2147483647, 'Ada yang tahu nggak toko buku online IT terpercaya?', 'ada+yang+tahu+nggak+toko+buku+online+it+terpercaya', 1, 3, '<p>Teman-teman, mau tanya, disini ada yang tahu nggak tempat belanja buku-buku IT online terpercaya?</p>', NULL, 27, '2014-09-24 09:54:18', '0000-00-00 00:00:00', 17),
(5, 2147483647, 'aaaaaaaa', 'aaaaaaaa', 1, 2, '<p>daddsdasdsadasdsaadadadadadd</p>', 'a@a_20170809025709_bepo.jpg', 30, '2017-08-09 02:57:10', '0000-00-00 00:00:00', 23);

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_top_ads`
--

CREATE TABLE `as_top_ads` (
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `as_top_ads`
--

INSERT INTO `as_top_ads` (`top_ads_id`, `title`, `url`, `image`, `post_date`, `active`, `created_date`, `created_userid`, `modified_date`, `modified_userid`) VALUES
(37, 'jiwantoko.com', 'www.jiwantoko.com', '20140519094642_want_to_have_a_website.png', '2014-01-02', 'Y', '2014-01-02 17:51:24', 1, '2014-05-19 09:46:44', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_users`
--

CREATE TABLE `as_users` (
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `as_users`
--

INSERT INTO `as_users` (`user_id`, `username`, `password`, `full_name`, `email`, `phone`, `level`, `blocked`, `created_date`, `created_userid`, `modified_date`, `modified_userid`) VALUES
(1, 'admin', 'admin', 'Web Master', 'webmaster@eqatarlink.com', '', '1', 'N', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(6, 'agus.saputra', 'd1e565e7bb5ddd9f9d5e0eade171f7ed', 'Agus Saputra, M.Kom.', 'agus.saputra@asfasolution.com', '08562121141', '1', 'N', '2013-12-29 20:54:58', 3, '2013-12-29 21:00:35', 3),
(4, 'felicia.feni', 'd1e565e7bb5ddd9f9d5e0eade171f7ed', 'Feni Agustin, S.Kom.', 'felicia.feni@asfasolution.com', '08987300657', 'user', 'N', '2013-12-29 20:03:16', 1, '0000-00-00 00:00:00', 0),
(5, 'ubrodiyanto', 'd1e565e7bb5ddd9f9d5e0eade171f7ed', 'Ubrodiyanto, S.Pd., M.Kom.', 'ubrodiyanto@eqatarlink.com', '', '2', 'N', '2013-12-29 20:17:10', 3, '0000-00-00 00:00:00', 0),
(7, 'erwin.seriyanto', 'd1e565e7bb5ddd9f9d5e0eade171f7ed', 'Ir. Erwin Seriyanto, M.A.', 'erwin.seriyanto@eqatarlink.com', '', '2', 'N', '2013-12-29 20:56:28', 3, '0000-00-00 00:00:00', 0),
(8, 'david.mardianto', 'd1e565e7bb5ddd9f9d5e0eade171f7ed', 'David Mardianto, S.PAK., M.A.', 'david.mardianto@eqatarlink.com', '', '2', 'N', '2013-12-29 21:01:25', 3, '2013-12-29 21:01:39', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `as_cities`
--
ALTER TABLE `as_cities`
  ADD PRIMARY KEY (`city_id`);

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
-- AUTO_INCREMENT for table `as_cities`
--
ALTER TABLE `as_cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `as_comments`
--
ALTER TABLE `as_comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `as_frm_categories`
--
ALTER TABLE `as_frm_categories`
  MODIFY `frm_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `as_frm_messages`
--
ALTER TABLE `as_frm_messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `as_frm_messages_sent`
--
ALTER TABLE `as_frm_messages_sent`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `as_frm_sub_categories`
--
ALTER TABLE `as_frm_sub_categories`
  MODIFY `frm_sub_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `as_identity`
--
ALTER TABLE `as_identity`
  MODIFY `identity_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `as_member`
--
ALTER TABLE `as_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `as_provinces`
--
ALTER TABLE `as_provinces`
  MODIFY `province_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `as_topics`
--
ALTER TABLE `as_topics`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `as_top_ads`
--
ALTER TABLE `as_top_ads`
  MODIFY `top_ads_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `as_users`
--
ALTER TABLE `as_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
