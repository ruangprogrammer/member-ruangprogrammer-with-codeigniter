-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 30, 2017 at 09:21 PM
-- Server version: 10.0.32-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ruangpro_dbdownload`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(255) DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', '$2y$10$ThoYCyISbMrm679goC7S5OMoQxOQvl1i19YEGu54uD/nxjY2P2Wz.');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `download_id` int(11) NOT NULL,
  `download_code` varchar(255) DEFAULT NULL,
  `download_judul` varchar(255) DEFAULT NULL,
  `download_link_tutorial` varchar(255) DEFAULT NULL,
  `download_link_demo` varchar(255) DEFAULT NULL,
  `download_link_download` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`download_id`, `download_code`, `download_judul`, `download_link_tutorial`, `download_link_demo`, `download_link_download`) VALUES
(21, '4e6f847f310e0fbda2b83565d3912756', 'Cara membuat Image watermark dengan PHP', 'http://www.ruangprogrammer.com/2017/08/cara-membuat-image-watermark-dengan-php.html', 'http://download.ruangprogrammer.com/#', '/edisetiawan/watermark/archive/master.zip'),
(22, 'b73dac47c1ac91e73d233f6a7cd334b0', 'cetak PDF dengan Codeigniter', 'http://www.ruangprogrammer.com/2015/03/cetak-pdf-dengan-codeigniter.html', 'http://download.ruangprogrammer.com/#', '/ruangprogrammer/example_dompdfci-master/archive/master.zip'),
(23, '7ae8a9af60315577ef95615bf7dc2f30', 'Cara membuat login dengan password hash PHP', 'http://www.ruangprogrammer.com/2015/12/cara-membuat-login-dengan-password-hash.html', 'http://download.ruangprogrammer.com/#', '/edisetiawan/login-hash-php/archive/master.zip'),
(24, '251a38f9cac7ad01b0fab7ff3034d8b3', 'cetak csv dengan PHP', 'http://www.ruangprogrammer.com/2015/03/cetak-csv-dengan-php.html', 'http://demo.ruangprogrammer.com/native/cetak-csv/display.php', '/ruangprogrammer/cetak-csv-php/archive/master.zip'),
(25, 'c4dc94eda52daff28b5ecccfd2df327e', 'Search dan Paging dengan Codeigniter', 'http://www.ruangprogrammer.com/2015/03/search-dengan-codeigniter.html', 'http://demo.ruangprogrammer.com/paging-dan-searching-dengan-codeigniter/books', '/ruangprogrammer/paging-dan-searching-dengan-codeigniter/archive/master.zip'),
(26, '3a8976e84b4bcac6667b967c9f9d940a', 'Implementasi Templete Twitter Bootstrap dengan Codeigniter', 'http://www.ruangprogrammer.com/2015/03/implementasi-templete-twitter-bootstrap.html', 'http://demo.ruangprogrammer.com/implementasi-twiter-boostrap-dengan-codeigniter/', '/ruangprogrammer/implementasi-twiter-boostrap-dengan-codeigniter/archive/master.zip');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `member_username` varchar(255) DEFAULT NULL,
  `member_email` varchar(255) DEFAULT NULL,
  `member_phone` varchar(15) DEFAULT NULL,
  `member_password` varchar(255) DEFAULT NULL,
  `member_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_username`, `member_email`, `member_phone`, `member_password`, `member_date`) VALUES
(6, 'edi', 'edi2992@gmail.com', '012891218', '3123311091', '2017-07-04 15:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `member_tmp`
--

CREATE TABLE `member_tmp` (
  `tmp_id` int(11) NOT NULL,
  `tmp_username` varchar(255) DEFAULT NULL,
  `tmp_email` varchar(255) DEFAULT NULL,
  `tmp_phone` varchar(255) DEFAULT NULL,
  `tmp_password` varchar(255) DEFAULT NULL,
  `tmp_code` varchar(255) DEFAULT NULL,
  `tmp_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_tmp`
--

INSERT INTO `member_tmp` (`tmp_id`, `tmp_username`, `tmp_email`, `tmp_phone`, `tmp_password`, `tmp_code`, `tmp_date`) VALUES
(8, 'edi', 'edi2992@gmail.com', '081999758789', '3123311091', '9c94c2828df2b0033b4d79f856e4bfdf', '2017-07-04 15:12:13'),
(9, 'edi', 'edi2992@gmail.com', '081999758789', '3123311091', 'f97a7950d7709075638c92ad5dc47c25', '2017-07-04 15:15:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `oauth_provider` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profile_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `gender`, `locale`, `picture_url`, `profile_url`, `created`, `modified`) VALUES
(3, 'facebook', '837401229771372', 'Cracker', 'Intelijen', 'edi2992@gmail.com', 'male', 'id_ID', 'https://scontent.xx.fbcdn.net/v/t1.0-1/c0.0.50.50/p50x50/1456683_219885581522943_1742195500_n.jpg?oh=6a238e87752ee5c2a1461a4d82a939fb&oe=5A5D2BCB', 'https://www.facebook.com/837401229771372', '2017-08-17 07:56:34', '2017-08-30 13:58:54'),
(5, 'facebook', '1927034954225969', 'Kevin', 'Jhon Pratama', 'kosong', 'male', 'id_ID', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/14265016_1764003807195752_1168772542016420954_n.jpg?_nc_eui2=v1%3AAeF7SUgkesthQopzZ_1Zjxh90I-fU-ErPj7uLKlg-bW-Ry0K10RB-zB8yQPHfVVVATmtMMZ3u9GxF4Uk33D3WFRW&oh=7183565810edaa644bb79d435553b694&oe=5A125D52', 'https://www.facebook.com/1927034954225969', '2017-08-17 19:02:01', '2017-08-26 03:49:25'),
(6, 'facebook', '1047565545373473', 'Muhammad', 'Mustofa', 'mmustofa94@yahoo.com', 'male', 'id_ID', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/16708286_923539937776035_2606003886157785202_n.jpg?oh=b9f0842473a20593c2217ea0257b362e&oe=5A2E53E5', 'https://www.facebook.com/1047565545373473', '2017-08-20 21:51:12', '2017-08-27 14:22:03'),
(7, 'facebook', '10210550498023348', 'Bio', 'Walla', 'awaluddin12@gmail.com', 'male', 'id_ID', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/19366520_10210013485438369_6893754304070627335_n.jpg?oh=efcd587c95d76644e30c1bc26ae25af4&oe=5A1A8C70', 'https://www.facebook.com/10210550498023348', '2017-08-23 11:29:54', '2017-08-23 11:30:26'),
(10, 'facebook', '1489580244414363', 'Dwi', 'Hujianto', 'kosong', 'male', 'en_US', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/15317888_1224584717580585_3247089516420415882_n.jpg?oh=6414a4c293bd537b3bda321be793d274&oe=5A25E85A', 'https://www.facebook.com/1489580244414363', '2017-08-26 03:33:04', '2017-08-26 03:33:04'),
(14, 'facebook', '1426411384122274', 'Jim', 'Gordon', 'kosong', 'male', 'id_ID', 'https://scontent.xx.fbcdn.net/v/t1.0-1/c0.0.50.50/p50x50/1619542_687181144711972_1366141307619027643_n.jpg?_nc_eui2=v1%3AAeFO0Ca-lL9cuSQoVQy8k9gRHFljAQ2w2PTo14VlpmZ-ev1n8etatcfwD-YsnrD_GcTIgNC1pTA_yAafFEqg-BjI&oh=45ffb9e290ad447ecfeb21e98b2790b3&oe=5A5E56', 'https://www.facebook.com/1426411384122274', '2017-08-26 15:06:09', '2017-08-26 15:07:29'),
(15, 'facebook', '1454321347948673', 'Leo', 'Sefprima', 'leo.waka2@gmail.com', 'male', 'id_ID', 'https://scontent.xx.fbcdn.net/v/t1.0-1/c8.0.50.50/p50x50/15055769_1175490705831740_4830422392132994218_n.jpg?oh=82f8f4814b342ffbffaf56271276d827&oe=5A2B5436', 'https://www.facebook.com/1454321347948673', '2017-08-27 05:02:34', '2017-08-27 05:02:34'),
(16, 'facebook', '1835084486505858', 'Tri', 'Hargianto', 'trihargianto@gmail.com', 'male', 'en_US', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/16508745_1598647070149602_6204418287817558015_n.jpg?oh=627e23a7c39d0225ab24de33a2ea06a6&oe=5A5B19E1', 'https://www.facebook.com/1835084486505858', '2017-08-28 02:51:02', '2017-08-28 02:51:02'),
(17, 'facebook', '1598544320201824', 'Ali', 'Ali', 'bootstraper48@gmail.com', 'male', 'id_ID', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/21032457_1592944514095138_3528985334404954082_n.jpg?oh=2c92f4a46cd9d91161d86fd2abf58c4b&oe=5A5A7A62', 'https://www.facebook.com/1598544320201824', '2017-08-28 03:42:19', '2017-08-28 03:42:19'),
(18, 'facebook', '512235972444761', 'Muhammad', 'Hidayat', 'kosong', 'male', 'id_ID', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/21106774_511119245889767_8835399823915417520_n.jpg?oh=78c17de66c9e9861ca9708553ad4566b&oe=5A5D6E59', 'https://www.facebook.com/512235972444761', '2017-08-28 06:55:33', '2017-08-28 06:58:59'),
(19, 'facebook', '2070789863156434', 'Nhas', 'Bagenn', 'kosong', 'male', 'id_ID', 'https://scontent.xx.fbcdn.net/v/t1.0-1/c0.1.50.50/p50x50/12241378_1711321685769922_7186391755508922218_n.jpg?oh=237ff6c43bd8f478b2de95a3a6fc6054&oe=5A24F708', 'https://www.facebook.com/2070789863156434', '2017-08-28 06:56:23', '2017-08-28 07:00:47'),
(20, 'facebook', '1532172326821912', 'Edi', 'Setihawan', 'edy_setiawan592@yahoo.com', 'male', 'id_ID', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/10933786_841147045924447_887363322489015509_n.jpg?oh=eefd53c0108f7e0f1968346da1794ea7&oe=5A2A68EA', 'https://www.facebook.com/1532172326821912', '2017-08-28 09:46:48', '2017-08-29 04:42:30'),
(21, 'facebook', '1400077180110190', 'Dennis', 'Yuanita', 'denisyuanita@gmail.com', 'female', 'id_ID', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/17190640_1238505619600681_6335539267804518695_n.jpg?oh=f0798ce5c1af215819550673adc9f844&oe=5A25AE0B', 'https://www.facebook.com/1400077180110190', '2017-08-28 10:29:59', '2017-08-28 10:29:59'),
(22, 'facebook', '1541658052558591', 'Malik', 'Zain', 'abdulmalik1878@gmail.com', 'male', 'id_ID', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/10996139_992580677466334_7519613953982521937_n.jpg?oh=1fca3d4abdabb20879fe50572b077623&oe=5A19DE06', 'https://www.facebook.com/1541658052558591', '2017-08-29 03:26:51', '2017-08-29 03:26:51'),
(23, 'facebook', '1671197512890279', 'Syabdan', 'Dalimunthe', 'kosong', 'male', 'id_ID', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/15621929_1401182583225108_6455736725094957337_n.jpg?oh=2ef0ffc45216962ed30bd57ec73fedad&oe=5A5DA376', 'https://www.facebook.com/1671197512890279', '2017-08-29 04:29:42', '2017-08-29 04:30:09'),
(24, 'facebook', '1526824767382955', 'Asy\'arie', 'Asy\'arie', 'iraysaasyari@ymail.com', 'male', 'id_ID', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/294029_186964841368961_4873790_n.jpg?_nc_eui2=v1%3AAeHajdfSgMlDXvTioPfzZr_PvftmK8Ql5zv6rPn8FpogUmskUFYFhK09GIxxnwC39MCxTXL5KffiK-BeEstry-5R&oh=adaf84d57ef393dac6415121c25dbeb1&oe=5A299075', 'https://www.facebook.com/1526824767382955', '2017-08-30 00:40:45', '2017-08-30 00:43:20'),
(25, 'facebook', '1856701791012669', 'Mochamad', 'Nuv', 'azizdobeng@yahoo.co.id', 'male', 'id_ID', 'https://scontent.xx.fbcdn.net/v/t1.0-1/c90.210.540.540/s50x50/13697073_1390950257587827_7302012067779694812_n.jpg?oh=45bc8bd3128ec7515b6cf4f58f31aaef&oe=5A1E208D', 'https://www.facebook.com/1856701791012669', '2017-08-30 06:24:16', '2017-08-30 06:24:58'),
(26, 'facebook', '782357785258913', 'Muhamad', 'Sobana', 'kosong', 'male', 'id_ID', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/17021343_691311471030212_2809830225690012023_n.jpg?oh=496bb0337b30784d6128529288265be0&oe=5A1B2734', 'https://www.facebook.com/782357785258913', '2017-08-30 13:35:56', '2017-08-30 13:35:56');

-- --------------------------------------------------------

--
-- Table structure for table `users-native`
--

CREATE TABLE `users-native` (
  `id` int(11) NOT NULL,
  `oauth_provider` enum('','facebook','google','twitter') COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users-native`
--

INSERT INTO `users-native` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `gender`, `locale`, `picture`, `link`, `created`, `modified`) VALUES
(1, 'facebook', '1927034954225969', 'Kevin', 'Jhon Pratama', 'hijabjogjastore@gmail.com', 'male', 'id_ID', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/14265016_1764003807195752_1168772542016420954_n.jpg?oh=afb3b4d65134c223262cc8313745d228&oe=59EAD052', 'https://www.facebook.com/app_scoped_user_id/1927034954225969/', '2017-08-14 07:44:01', '2017-08-14 22:12:19'),
(2, 'facebook', '837401229771372', 'Cracker', 'Intelijen', 'edi2992@gmail.com', 'male', 'id_ID', 'https://scontent.xx.fbcdn.net/v/t1.0-1/c0.0.50.50/p50x50/1456683_219885581522943_1742195500_n.jpg?oh=932f48a44aadde2f59ca77be8cd7da27&oe=5A359ECB', 'https://www.facebook.com/app_scoped_user_id/837401229771372/', '2017-08-14 07:47:19', '2017-08-15 08:35:28'),
(3, 'facebook', '1426411384122274', 'Jim', 'Gordon', '', 'male', 'id_ID', 'https://scontent.xx.fbcdn.net/v/t1.0-1/c0.0.50.50/p50x50/1619542_687181144711972_1366141307619027643_n.jpg?oh=4474310890a3da20d8d37ce52e262112&oe=5A36C90F', 'https://www.facebook.com/app_scoped_user_id/1426411384122274/', '2017-08-14 07:59:01', '2017-08-14 09:05:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`download_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `member_tmp`
--
ALTER TABLE `member_tmp`
  ADD PRIMARY KEY (`tmp_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users-native`
--
ALTER TABLE `users-native`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `download_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `member_tmp`
--
ALTER TABLE `member_tmp`
  MODIFY `tmp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users-native`
--
ALTER TABLE `users-native`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
