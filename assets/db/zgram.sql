-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 11:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zgram`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_article`, `title`, `content`, `author`, `date`) VALUES
(1, 'Cara instal windows ghost spec', '<p><strong>Halo selamat datang</strong> di article tutorial instal ulang ghost spectre&nbsp;</p><p>1. buat bootable</p>', 'dzant', '2022-06-01'),
(2, 'Cara membuat website berbasis ', 'instal yii menggunakan composer', 'dwiwijaya', '2022-06-02'),
(5, 'tutorial root hp', 'download magisk', 'Dwi Wijiaya', '0000-00-00'),
(10, 'cara custom rom', '<p><strong>download rom</strong></p><p>&nbsp;</p>', 'dzant', '0000-00-00'),
(12, 'asfddafadsfsadfsadfsadfsad', '<p>asfsdafsadfsafasdasdfasdfasdfasdf</p>', 'author', '0000-00-00'),
(13, 'asdf', '<blockquote><p>cara membuat article</p></blockquote>', 'author', '0000-00-00'),
(14, 'asdfas', '<h3><strong>hoashdfasdfasdf</strong></h3><p>asdfasdfsafsa</p>', 'dwii', '0000-00-00'),
(16, 'Membuat article', '<p>asfsdaf</p>', 'author', '0000-00-00'),
(17, 'personal website', '<p><a href=\"11Dwiwijaya.github.io.co\">11wiwijaya.github.io.co</a></p>', 'dwii', '2020-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1656643630),
('m130524_201442_init', 1656647976),
('m190124_110200_add_verification_token_column_to_user_table', 1656647976),
('m220701_024804_user', 1656643877);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(5) NOT NULL,
  `role` varchar(30) NOT NULL,
  `role_code` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`, `role_code`) VALUES
(1, 'Admin', 11),
(2, 'Author', 78);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `authKey` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `accessToken` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 10,
  `time_updated` datetime NOT NULL,
  `time_created` datetime NOT NULL,
  `roles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `authKey`, `accessToken`, `status`, `time_updated`, `time_created`, `roles`) VALUES
(1, 'dwii', '123', 'Dwiwijaya', 'asdfasdf', '', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(4, 'dzant', '123', 'dwizant', 'adsf', '', 0, '2022-07-01 09:22:43', '0000-00-00 00:00:00', 1),
(6, 'andin', '123', 'Andin', '', '', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(7, 'albert', '1', 'albert', '', '', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(8, 'admin', '123', 'Dwi Admin', '', '', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(9, 'dwi', '123', 'Andin', '', '', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(11, 'gita', '123', 'gita', '', '', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(12, 'ZZZ', 'zzz', 'zzz', '', '', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(13, 'author', '123', 'author', '', '', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
