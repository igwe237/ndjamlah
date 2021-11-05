-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 01 nov. 2021 à 07:45
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ndjamlah_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `piol`
--

DROP TABLE IF EXISTS `piol`;
CREATE TABLE IF NOT EXISTS `piol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `style_house` varchar(255) NOT NULL,
  `offre` varchar(255) NOT NULL,
  `superficie` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `quartier` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `disponibilite` varchar(255) NOT NULL,
  `nombre_de_piece` int(255) NOT NULL,
  `nombre_de_chambre` int(255) NOT NULL,
  `nombre_de_douche` int(255) NOT NULL,
  `unique_user` int(255) NOT NULL,
  `description` text NOT NULL,
  `img_1` varchar(255) NOT NULL,
  `img_2` varchar(255) NOT NULL,
  `img_3` varchar(255) NOT NULL,
  `img_4` varchar(255) NOT NULL,
  `img_5` varchar(255) NOT NULL,
  `img_6` varchar(255) NOT NULL,
  `img_7` varchar(255) NOT NULL,
  `img_8` varchar(255) NOT NULL,
  `img_9` varchar(255) NOT NULL,
  `img_10` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `phone_user` varchar(255) NOT NULL,
  `city_user` varchar(255) NOT NULL,
  `account_type` varchar(255) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `profile_picture` varchar(100) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `statuts_user` varchar(100) NOT NULL,
  `date_registration` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `email_user`, `phone_user`, `city_user`, `account_type`, `password_user`, `profile_picture`, `unique_id`, `statuts_user`, `date_registration`) VALUES
(1, 'azr', 'eeeeeeddq', 'admin@admin.com', '12345678', 'azerr', 'classic', 'sddfdfg', 'dcdfd.jpg', '122332', 'actif', '2021-10-13 05:26:16'),
(2, 'thib', 'jores', 'thib@jor.es', '690759196', 'douala', 'classic', 'zpep/eee', '../public/pictures/img-6.jpg', '1178228', 'actif', '2021-10-13 05:26:16'),
(3, 'thib', 'jores', 'thib@jor.es', '690759196', 'douala', 'classic', 'zpep/eee', '../public/pictures/img-6.jpg', '1178228', 'actif', '2021-10-13 05:26:16'),
(4, 'thib', 'jores', 'thib@jor.es', '690759196', 'douala', 'classic', 'zpep/eee', '../public/pictures/img-6.jpg', '1178228', 'actif', '2021-10-13 05:26:16'),
(5, 'thib', 'jores', 'thib@jor.es', '690759196', 'douala', 'classic', 'zpep/eee', '../public/pictures/img-6.jpg', '1178228', 'actif', '2021-10-13 05:26:16'),
(6, 'azz', 'eef', 'fzf', 'fzf', 'fz', 'zf', 'ffd', 'fdfe', '11111', 'sd', '2021-10-13 05:26:16'),
(7, 'azz', 'eef', 'fzf', 'fzf', 'fz', 'zf', 'ffd', 'fdfe', '4214134', 'sd', '2021-10-13 05:26:16'),
(8, 'azz', 'eef', 'fzf', 'fzf', 'fz', 'zf', 'ffd', 'fdfe', '255555555534', 'sd', '2021-10-13 05:26:16'),
(9, 'Zidane', 'Talla', 'eeeeyn@admin.com', '06 52 09 72 91', 'Douala', 'classic', '21232f297a57a5a743894a0e4a801fc3', '1634094579Capture dâ€™Ã©cran (3).png', '353160446', 'Active now', '2021-10-13 05:26:16'),
(10, 'Thibaut', 'Hegoue', 'admizzn@admin.com', '+237690759196', 'Douala', 'classic', '21232f297a57a5a743894a0e4a801fc3', '1634094618Capture dâ€™Ã©cran (1).png', '1166720094', 'Active now', '2021-10-13 05:26:16'),
(11, 'Thibaut', 'Hegoue', 'admizznsgt@admin.com', '+237690759196', 'Douala', 'classic', '21232f297a57a5a743894a0e4a801fc3', '1634094843Capture dâ€™Ã©cran (1).png', '1534390963', 'Active now', '2021-10-13 05:26:16'),
(12, 'Thibaut', 'Hegoue', 'admizznsgt@admin.com', '+237690759196', 'Douala', 'classic', '21232f297a57a5a743894a0e4a801fc3', '1634096029Capture dâ€™Ã©cran (1).png', '635963820', 'Active now', '2021-10-13 05:26:16'),
(13, 'Thibaut', 'Hegoue', 'admizznsgt@admin.com', '+237690759196', 'Douala', 'classic', '21232f297a57a5a743894a0e4a801fc3', '1634096071Capture dâ€™Ã©cran (1).png', '1384103636', 'Active now', '2021-10-13 05:26:16'),
(14, 'Thibaut', 'Hegoue', 'admizznsgt@admin.com', '+237690759196', 'Douala', 'classic', '21232f297a57a5a743894a0e4a801fc3', '1634096407Capture dâ€™Ã©cran (1).png', '1121653619', 'Active now', '2021-10-13 05:26:16'),
(15, 'Thibaut', 'Hegoue', 'admizznsgt@admin.com', '+237690759196', 'Douala', 'classic', '21232f297a57a5a743894a0e4a801fc3', '1634096541Capture dâ€™Ã©cran (1).png', '1492092336', 'Active now', '2021-10-13 05:26:16'),
(16, 'Thibaut', 'Hegoue', 'admizznsgt@admin.com', '+237690759196', 'Douala', 'classic', '21232f297a57a5a743894a0e4a801fc3', '1634096605Capture dâ€™Ã©cran (1).png', '126123839', 'Active now', '2021-10-13 05:26:16'),
(17, 'Thibaut', 'Hegoue', 'admizznsgt@admin.com', '+237690759196', 'Douala', 'classic', '21232f297a57a5a743894a0e4a801fc3', '1634096637Capture dâ€™Ã©cran (1).png', '883387422', 'Active now', '2021-10-13 05:26:16'),
(18, 'Thibaut', 'Hegoue', 'admin@admi.com', '+237690759196', 'Douala', 'classic', '21232f297a57a5a743894a0e4a801fc3', '1634098601Capture dâ€™Ã©cran (1).png', '1089428157', 'Active now', '2021-10-13 05:26:16'),
(19, 'Thibaut', 'Hegoue', 'admin@adi.com', '+237690759196', 'Douala', 'classic', '21232f297a57a5a743894a0e4a801fc3', '1634098726Capture dâ€™Ã©cran (1).png', '1350409496', 'Active now', '2021-10-13 05:26:16'),
(20, 'Thibaut', 'Hegoue', 'admin@ai.com', '+237690759196', 'Douala', 'classic', '21232f297a57a5a743894a0e4a801fc3', '1634098774Capture dâ€™Ã©cran (1).png', '1163717913', 'Active now', '2021-10-13 05:26:16'),
(21, 'Thibaut', 'Hegoue', 'amin@ai.com', '+237690759196', 'Douala', 'classic', 'c1af12c2f43e3c549f6b9ad785627b10', '1634099259Capture dâ€™Ã©cran (3).png', '931966700', 'Active now', '2021-10-13 05:27:39'),
(22, 'webvi', 'try', 'tchaleuthibaut@gmail.com', '456780987', 'ggjkj', 'classic', '21232f297a57a5a743894a0e4a801fc3', '16341335374.jpg', '1461257851', 'Active now', '2021-10-13 14:58:57'),
(23, 'webvi', 'try', 'tchaleuthibaut@gmail.com', '456780987', 'ggjkj', 'classic', '21232f297a57a5a743894a0e4a801fc3', '16341336564.jpg', '1086678705', 'Active now', '2021-10-13 15:00:56'),
(24, 'webvi', 'try', 'tchaleuthibaut@gmail.com', '456780987', 'ggjkj', 'classic', '21232f297a57a5a743894a0e4a801fc3', '16341336604.jpg', '769834440', 'Active now', '2021-10-13 15:01:00'),
(25, 'webvi', 'try', 'tchaleuthibaut@gmail.com', '456780987', 'ggjkj', 'classic', '21232f297a57a5a743894a0e4a801fc3', '16341336624.jpg', '855297381', 'Active now', '2021-10-13 15:01:02'),
(26, 'webvi', 'try', 'tchaleuthibaut@gmail.com', '456780987', 'ggjkj', 'classic', '21232f297a57a5a743894a0e4a801fc3', '16341336624.jpg', '496294745', 'Active now', '2021-10-13 15:01:02'),
(27, 'webvi', 'try', 'tchaleuthibaut@gmail.com', '456780987', 'ggjkj', 'classic', '21232f297a57a5a743894a0e4a801fc3', '16341336704.jpg', '1211689410', 'Active now', '2021-10-13 15:01:10'),
(28, 'webvi', 'try', 'tchaleuthibaut@gmail.com', '456780987', 'ggjkj', 'classic', '21232f297a57a5a743894a0e4a801fc3', '16341336704.jpg', '1143996975', 'Active now', '2021-10-13 15:01:10'),
(29, 'webvi', 'try', 'tchaleuthibaut@gmail.com', '456780987', 'ggjkj', 'classic', '21232f297a57a5a743894a0e4a801fc3', '16341336704.jpg', '1229428283', 'Active now', '2021-10-13 15:01:10'),
(30, 'webvi', 'try', 'tchaleuthibaut@gmail.com', '456780987', 'ggjkj', 'classic', '21232f297a57a5a743894a0e4a801fc3', '16341336714.jpg', '1382237616', 'Active now', '2021-10-13 15:01:11'),
(31, 'webvi', 'try', 'tchaleuthibaut@gmail.com', '456780987', 'ggjkj', 'classic', '21232f297a57a5a743894a0e4a801fc3', '16341336714.jpg', '1570984869', 'Active now', '2021-10-13 15:01:11'),
(32, 'webvi', 'try', 'tchaleuthibaut@gmail.com', '456780987', 'ggjkj', 'classic', '21232f297a57a5a743894a0e4a801fc3', '16341336724.jpg', '603127655', 'Active now', '2021-10-13 15:01:12'),
(33, 'webvi', 'try', 'tchaleuthibaut@gmail.com', '456780987', 'ggjkj', 'classic', '21232f297a57a5a743894a0e4a801fc3', '16341336724.jpg', '232488049', 'Active now', '2021-10-13 15:01:12'),
(34, 'webvi', 'try', 'tchaleuthibaut@gmail.com', '456780987', 'ggjkj', 'classic', '21232f297a57a5a743894a0e4a801fc3', '16341336754.jpg', '1388033159', 'Active now', '2021-10-13 15:01:15'),
(35, 'webvi', 'try', 'tchaleuthibaut@gmail.com', '34567890', 'ggjkj', 'classic', '21232f297a57a5a743894a0e4a801fc3', '16341336935.jpg', '135219545', 'Active now', '2021-10-13 15:01:33'),
(36, 'webvi', 'try', 'tchaleuthiaut@gmail.com', '34567890', 'ggjkj', 'classic', '21232f297a57a5a743894a0e4a801fc3', '16341337775.jpg', '824940040', 'Active now', '2021-10-13 15:02:57'),
(37, 'ornella', 'cynthia', 'ornella@cynthia.com', '680555604', 'Douala', 'classic', '21232f297a57a5a743894a0e4a801fc3', '1634160320Capture dâ€™Ã©cran (1).png', '199387491', 'Active now', '2021-10-13 22:25:20'),
(38, 'ornella', 'cynthia', 'ornella@cyntha.com', '680555604', 'Douala', 'classic', '$2y$10$wHTPMg/2jclwD88XIot4D.gricENrLxLghn19C9B34lUnOoDtGf1W', '1634162099Capture dâ€™Ã©cran (1).png', '545395474', 'En ligne', '2021-10-13 22:54:59'),
(39, 'ornella', 'cynthia', 'ornella@cyn.com', '680555604', 'Douala', 'classic', '$2y$10$LH18gF1aeeL/tDpi/kFza.RcPcf1CMrr0HAZLwOhazFqwkFUu0SQ2', '1634162143Capture dâ€™Ã©cran (1).png', '878777432', 'En ligne', '2021-10-13 22:55:43'),
(40, 'aze', 'zert', 'ad@admin.com', '24465768', 'azert', 'classic', '$2y$10$H07r5T8yMzE11Cou1DxNzuujFyG1Ed7.HIw1j4CExt1PO20PV4WQa', '1634162764Capture dâ€™Ã©cran (1).png', '153324823', 'En ligne', '2021-10-13 23:06:04'),
(41, 'Thibaut', 'Hegoue', 'admin@in.com', '+237690759196', 'Douala', 'classic', '21232f297a57a5a743894a0e4a801fc3', '1634162872Capture dâ€™Ã©cran (1).png', '1295276740', 'En ligne', '2021-10-13 23:07:52'),
(42, 'Thibaut', 'Hegoue', 'abc@abc.com', '+237690759196', 'Douala', 'classic', '$2y$10$x3s4QiV5e2bKsJ5t5ycZkeoInOmupLlpbZd7RTDlxtENanNBPWP4C', '1634163149Capture dâ€™Ã©cran (1).png', '650716779', 'En ligne', '2021-10-13 23:12:29'),
(43, 'Zidane', 'Talla', 'admin@gh.com', '06 52 09 72 91', 'Douala', 'classic', '21232f297a57a5a743894a0e4a801fc3', '1634166463Capture dâ€™Ã©cran (1).png', '847466416', 'Offline now', '2021-10-14 00:07:43'),
(44, 'Zidane', 'Talla', 'az@az.cn', '06 52 09 72 91', 'Douala', 'classic', '21232f297a57a5a743894a0e4a801fc3', '1634169838Capture dâ€™Ã©cran (1).png', '387556618', 'Offline now', '2021-10-14 01:03:58'),
(45, 'Thibaut', 'Hegoue', 'admi@admin.com', '+237690759196', 'Douala', 'classic', '21232f297a57a5a743894a0e4a801fc3', '1634324519Capture dâ€™Ã©cran (2).png', '817429458', 'Offline now', '2021-10-15 20:01:59');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
