-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 12 Mars 2015 à 17:27
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `pegitu`
--
CREATE DATABASE IF NOT EXISTS `pegitu` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `pegitu`;

-- --------------------------------------------------------

--
-- Structure de la table `attribut`
--

DROP TABLE IF EXISTS `attribut`;
CREATE TABLE IF NOT EXISTS `attribut` (
  `Attr_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Attr_Nom` varchar(50) NOT NULL,
  `Attr_Desc` varchar(50) NOT NULL,
  PRIMARY KEY (`Attr_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `attribut`
--

INSERT INTO `attribut` (`Attr_ID`, `Attr_Nom`, `Attr_Desc`) VALUES
(1, 'Force', 'Comme un boeuf !'),
(2, 'Bio', 'Comme un jardinier !'),
(3, 'Agilité', 'Comme une fouine !'),
(4, 'Géologie', 'Comme un fossoyeur !'),
(5, 'Physiologie', 'Comme un saint !'),
(6, 'Autonomie', 'Comme un chef !'),
(7, 'Endurance', 'Comme un cheval !'),
(8, 'Motricité', 'Comme un singe !');

-- --------------------------------------------------------

--
-- Structure de la table `bank`
--

DROP TABLE IF EXISTS `bank`;
CREATE TABLE IF NOT EXISTS `bank` (
  `Bank_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Bank_ItemID` int(10) NOT NULL,
  `Bank_ItemNb` int(4) NOT NULL,
  PRIMARY KEY (`Bank_ID`),
  KEY `Bank_ItemID` (`Bank_ItemID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `bank`
--

INSERT INTO `bank` (`Bank_ID`, `Bank_ItemID`, `Bank_ItemNb`) VALUES
(1, 1, 2),
(2, 2, 5),
(3, 3, 1),
(4, 4, 6),
(5, 5, 2);

-- --------------------------------------------------------

--
-- Structure de la table `chat_accounts`
--

DROP TABLE IF EXISTS `chat_accounts`;
CREATE TABLE IF NOT EXISTS `chat_accounts` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_login` varchar(30) CHARACTER SET latin1 COLLATE latin1_german1_ci NOT NULL,
  `account_pass` varchar(255) CHARACTER SET latin1 COLLATE latin1_german1_ci NOT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `chat_annonce`
--

DROP TABLE IF EXISTS `chat_annonce`;
CREATE TABLE IF NOT EXISTS `chat_annonce` (
  `annonce_id` int(11) NOT NULL AUTO_INCREMENT,
  `annonce_text` varchar(300) CHARACTER SET latin1 COLLATE latin1_german1_ci NOT NULL,
  PRIMARY KEY (`annonce_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `chat_messages`
--

DROP TABLE IF EXISTS `chat_messages`;
CREATE TABLE IF NOT EXISTS `chat_messages` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `message_user` int(11) NOT NULL,
  `message_time` bigint(20) NOT NULL,
  `message_text` varchar(255) CHARACTER SET latin1 COLLATE latin1_german1_ci NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=99 ;

--
-- Contenu de la table `chat_messages`
--

INSERT INTO `chat_messages` (`message_id`, `message_user`, `message_time`, `message_text`) VALUES
(1, 1, 1419850002, 'test'),
(2, 1, 1419850136, 'main'),
(3, 1, 1419850170, 'tstz'),
(4, 1, 1419850536, 'test'),
(5, 1, 1419862012, ''),
(6, 1, 1419862014, ''),
(7, 1, 1419862038, ''),
(8, 1, 1419862038, ''),
(9, 1, 1419862039, ''),
(10, 1, 1419862039, ''),
(11, 1, 1419862039, ''),
(12, 1, 1419862039, ''),
(13, 1, 1419862040, ''),
(14, 1, 1419862042, 't'),
(15, 1, 1419862043, 'tt'),
(16, 1, 1419862066, 'g''rg'),
(17, 1, 1419862068, 'g''(g'),
(18, 1, 1419862073, 'g''(g(''g('''),
(19, 1, 1419862075, 'g(''g('),
(20, 1, 1419862362, 'zadaz'),
(21, 1, 1419862365, 'dazsqdc'),
(22, 1, 1419862369, 'azdezgf'),
(23, 1, 1419862371, 'azdezgf'),
(24, 1, 1419862374, ''),
(25, 1, 1419862504, 'tes'),
(26, 1, 1419862655, 'dazda'),
(27, 1, 1419862660, 'dfghgjt'),
(28, 1, 1419862669, 'dazfze'),
(29, 1, 1419862703, 'fdz"f'),
(30, 1, 1419862748, 'çujh'),
(31, 1, 1419862784, 'yihouyh'),
(32, 1, 1419863104, 'terst'),
(33, 3, 1419864749, 'ezfd'),
(34, 3, 1419864921, 'tset'),
(35, 3, 1419865039, 'test'),
(36, 3, 1419865043, 'et alors'),
(37, 3, 1419865046, 'et alors'),
(38, 3, 1419865048, 'et alors'),
(39, 3, 1419865051, 'et alors'),
(40, 3, 1419865060, 'test'),
(41, 3, 1419865104, 'test'),
(42, 3, 1419865112, 'teyre'),
(43, 3, 1419865198, 'tst'),
(44, 3, 1419865207, 'erzt'),
(45, 3, 1419865405, 'erzef'),
(46, 3, 1419865845, 'test'),
(47, 3, 1419865854, 'tutu'),
(48, 3, 1419865947, 'test'),
(49, 3, 1419865967, 'tst'),
(50, 3, 1419866042, 'toto> hello'),
(51, 1, 1419866266, 'tset'),
(52, 1, 1419866417, 'tzest'),
(53, 1, 1419866639, 'test'),
(54, 1, 1419866663, 'test'),
(55, 1, 1419866676, 'il était un petit navire qui savait anvigueru'),
(56, 1, 1419866684, 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee'),
(57, 3, 1419867230, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(58, 3, 1419867377, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(59, 3, 1419867542, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(60, 3, 1419867547, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(61, 3, 1419867743, 'azazazazazazazeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee'),
(62, 3, 1419867781, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(63, 1, 1419867962, 'nan'),
(64, 1, 1419867970, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(65, 3, 1419868028, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(66, 3, 1419868269, 'hrt'),
(67, 1, 1419868565, 'tst'),
(68, 3, 1419868568, 'aeaeae'),
(69, 1, 1419868575, 'dazfdae'),
(70, 3, 1419868579, 'dazda'),
(71, 1, 1419868792, 'fergr'),
(72, 1, 1419868794, 'czecze'),
(73, 1, 1419868798, 'czecze'),
(74, 1, 1419868799, 'czecze'),
(75, 1, 1419868799, 'czecze'),
(76, 1, 1419868802, 'czecze'),
(77, 1, 1419868802, 'czecze'),
(78, 1, 1419868803, 'czecze'),
(79, 1, 1419868803, 'czecze'),
(80, 1, 1419868803, 'czecze'),
(81, 3, 1419869303, 'vrtjzrthuyzrbrqzgv'),
(82, 3, 1419869561, 'toto> czet'),
(83, 3, 1419869570, ''),
(84, 3, 1419869687, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(85, 3, 1419869802, 'dxazfrzag'),
(86, 3, 1419869808, 'dazdaz'),
(87, 3, 1419869815, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(88, 3, 1419928946, 'czec'),
(89, 3, 1419929026, 'test'),
(90, 3, 1419929124, 'te'),
(91, 3, 1419932102, 'http://test.com'),
(92, 3, 1419932118, 'www.test.com'),
(93, 3, 1419932208, ':magicien:'),
(94, 3, 1419932271, ':colere:'),
(95, 3, 1419932278, '^^'),
(96, 3, 1419932337, '^^'),
(97, 1, 1422651831, 'cucu'),
(98, 1, 1425337018, 'cucu');

-- --------------------------------------------------------

--
-- Structure de la table `chat_online`
--

DROP TABLE IF EXISTS `chat_online`;
CREATE TABLE IF NOT EXISTS `chat_online` (
  `online_id` int(11) NOT NULL AUTO_INCREMENT,
  `online_ip` varchar(100) CHARACTER SET latin1 COLLATE latin1_german1_ci NOT NULL,
  `online_user` int(11) NOT NULL,
  `online_status` enum('0','1','2') CHARACTER SET latin1 COLLATE latin1_german1_ci NOT NULL,
  `online_time` bigint(21) NOT NULL,
  PRIMARY KEY (`online_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `chat_online`
--

INSERT INTO `chat_online` (`online_id`, `online_ip`, `online_user`, `online_status`, `online_time`) VALUES
(22, '127.0.0.1', 1, '2', 1425863195);

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

DROP TABLE IF EXISTS `competence`;
CREATE TABLE IF NOT EXISTS `competence` (
  `Comp_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Comp_Nom` varchar(50) NOT NULL,
  `Comp_Description` varchar(50) NOT NULL,
  `Comp_Type` varchar(50) NOT NULL,
  `Comp_PointRequis` int(4) NOT NULL,
  PRIMARY KEY (`Comp_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `Item_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Item_Nom` varchar(50) NOT NULL,
  `Item_Desc` varchar(50) NOT NULL,
  PRIMARY KEY (`Item_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `item`
--

INSERT INTO `item` (`Item_ID`, `Item_Nom`, `Item_Desc`) VALUES
(1, 'Petit morceau de bois', 'Pour construire des batîments'),
(2, 'Chute de métal', 'Nécessaire pour consolider des structures'),
(3, 'Ficelle', 'Pour attacher tout et n''importe quoi'),
(4, 'Baie', 'Faut bien manger'),
(5, 'Poisson', 'Attention aux arrêtes !');

-- --------------------------------------------------------

--
-- Structure de la table `mva_attrpersid`
--

DROP TABLE IF EXISTS `mva_attrpersid`;
CREATE TABLE IF NOT EXISTS `mva_attrpersid` (
  `MVA_ID` int(10) NOT NULL AUTO_INCREMENT,
  `MVA_ATTRID` int(10) NOT NULL,
  `MVA_PERSID` int(10) NOT NULL,
  `MVA_ATTRVAL` int(4) NOT NULL,
  PRIMARY KEY (`MVA_ID`),
  KEY `MVA_ATTRID` (`MVA_ATTRID`,`MVA_PERSID`),
  KEY `MVA_PERSID` (`MVA_PERSID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=294 ;

--
-- Contenu de la table `mva_attrpersid`
--

INSERT INTO `mva_attrpersid` (`MVA_ID`, `MVA_ATTRID`, `MVA_PERSID`, `MVA_ATTRVAL`) VALUES
(5, 1, 1, 5),
(6, 3, 1, 3),
(7, 2, 1, 2),
(8, 4, 1, 4),
(9, 5, 1, 3),
(10, 6, 1, 5),
(11, 7, 1, 2),
(12, 8, 1, 4),
(14, 1, 5, 2),
(15, 2, 5, 0),
(16, 3, 5, 1),
(17, 4, 5, 2),
(18, 5, 5, 2),
(19, 6, 5, 2),
(20, 7, 5, 2),
(21, 8, 5, 2),
(22, 1, 6, 2),
(23, 2, 6, 1),
(24, 3, 6, 1),
(25, 4, 6, 2),
(26, 5, 6, 3),
(27, 6, 6, 1),
(28, 7, 6, 3),
(29, 8, 6, 2),
(30, 1, 7, 3),
(31, 2, 7, 1),
(32, 3, 7, 3),
(33, 4, 7, 1),
(34, 5, 7, 3),
(35, 6, 7, 3),
(36, 7, 7, 3),
(37, 8, 7, 2),
(38, 1, 8, 2),
(39, 2, 8, 1),
(40, 3, 8, 1),
(41, 4, 8, 1),
(42, 5, 8, 3),
(43, 6, 8, 2),
(44, 7, 8, 2),
(45, 8, 8, 2),
(46, 1, 9, 2),
(47, 2, 9, 1),
(48, 3, 9, 2),
(49, 4, 9, 1),
(50, 5, 9, 2),
(51, 6, 9, 2),
(52, 7, 9, 3),
(53, 8, 9, 2),
(54, 1, 10, 2),
(55, 2, 10, 2),
(56, 3, 10, 2),
(57, 4, 10, 1),
(58, 5, 10, 2),
(59, 6, 10, 1),
(60, 7, 10, 2),
(61, 8, 10, 2),
(62, 1, 11, 2),
(63, 2, 11, 1),
(64, 3, 11, 4),
(65, 4, 11, 1),
(66, 5, 11, 1),
(67, 6, 11, 1),
(68, 7, 11, 3),
(69, 8, 11, 2),
(70, 1, 12, 2),
(71, 2, 12, 2),
(72, 3, 12, 2),
(73, 4, 12, 1),
(74, 5, 12, 3),
(75, 6, 12, 1),
(76, 7, 12, 4),
(77, 8, 12, 2),
(78, 1, 13, 2),
(79, 2, 13, 1),
(80, 3, 13, 1),
(81, 4, 13, 2),
(82, 5, 13, 2),
(83, 6, 13, 3),
(84, 7, 13, 2),
(85, 8, 13, 2),
(86, 1, 14, 2),
(87, 2, 14, 1),
(88, 3, 14, 1),
(89, 4, 14, 2),
(90, 5, 14, 1),
(91, 6, 14, 3),
(92, 7, 14, 2),
(93, 8, 14, 2),
(94, 1, 15, 2),
(95, 2, 15, 2),
(96, 3, 15, 2),
(97, 4, 15, 2),
(98, 5, 15, 1),
(99, 6, 15, 2),
(100, 7, 15, 3),
(101, 8, 15, 2),
(102, 1, 16, 2),
(103, 2, 16, 2),
(104, 3, 16, 2),
(105, 4, 16, 1),
(106, 5, 16, 1),
(107, 6, 16, 3),
(108, 7, 16, 2),
(109, 8, 16, 2),
(110, 1, 17, 2),
(111, 2, 17, 2),
(112, 3, 17, 2),
(113, 4, 17, 3),
(114, 5, 17, 3),
(115, 6, 17, 1),
(116, 7, 17, 4),
(117, 8, 17, 2),
(118, 1, 18, 2),
(119, 2, 18, 2),
(120, 3, 18, 2),
(121, 4, 18, 1),
(122, 5, 18, 1),
(123, 6, 18, 3),
(124, 7, 18, 4),
(125, 8, 18, 2),
(126, 1, 19, 2),
(127, 2, 19, 1),
(128, 3, 19, 2),
(129, 4, 19, 1),
(130, 5, 19, 1),
(131, 6, 19, 1),
(132, 7, 19, 4),
(133, 8, 19, 2),
(134, 1, 20, 2),
(135, 2, 20, 1),
(136, 3, 20, 2),
(137, 4, 20, 1),
(138, 5, 20, 1),
(139, 6, 20, 2),
(140, 7, 20, 2),
(141, 8, 20, 2),
(142, 1, 21, 3),
(143, 2, 21, 1),
(144, 3, 21, 4),
(145, 4, 21, 2),
(146, 5, 21, 3),
(147, 6, 21, 3),
(148, 7, 21, 4),
(149, 8, 21, 2),
(150, 1, 22, 2),
(151, 2, 22, 1),
(152, 3, 22, 3),
(153, 4, 22, 3),
(154, 5, 22, 1),
(155, 6, 22, 3),
(156, 7, 22, 3),
(157, 8, 22, 2),
(158, 1, 23, 2),
(159, 2, 23, 3),
(160, 3, 23, 3),
(161, 4, 23, 1),
(162, 5, 23, 1),
(163, 6, 23, 2),
(164, 7, 23, 4),
(165, 8, 23, 2),
(166, 1, 24, 2),
(167, 2, 24, 2),
(168, 3, 24, 1),
(169, 4, 24, 1),
(170, 5, 24, 3),
(171, 6, 24, 3),
(172, 7, 24, 2),
(173, 8, 24, 2),
(174, 1, 25, 2),
(175, 2, 25, 1),
(176, 3, 25, 3),
(177, 4, 25, 3),
(178, 5, 25, 1),
(179, 6, 25, 2),
(180, 7, 25, 3),
(181, 8, 25, 2),
(182, 1, 26, 2),
(183, 2, 26, 1),
(184, 3, 26, 4),
(185, 4, 26, 2),
(186, 5, 26, 1),
(187, 6, 26, 2),
(188, 7, 26, 3),
(189, 8, 26, 2),
(190, 1, 27, 2),
(191, 2, 27, 1),
(192, 3, 27, 3),
(193, 4, 27, 1),
(194, 5, 27, 3),
(195, 6, 27, 2),
(196, 7, 27, 4),
(197, 8, 27, 2),
(198, 1, 28, 2),
(199, 2, 28, 1),
(200, 3, 28, 4),
(201, 4, 28, 1),
(202, 5, 28, 3),
(203, 6, 28, 2),
(204, 7, 28, 4),
(205, 8, 28, 2),
(206, 1, 29, 3),
(207, 2, 29, 1),
(208, 3, 29, 4),
(209, 4, 29, 1),
(210, 5, 29, 1),
(211, 6, 29, 2),
(212, 7, 29, 2),
(213, 8, 29, 2),
(214, 1, 30, 2),
(215, 2, 30, 1),
(216, 3, 30, 3),
(217, 4, 30, 1),
(218, 5, 30, 3),
(219, 6, 30, 3),
(220, 7, 30, 4),
(221, 8, 30, 2),
(222, 1, 31, 2),
(223, 2, 31, 1),
(224, 3, 31, 1),
(225, 4, 31, 1),
(226, 5, 31, 3),
(227, 6, 31, 2),
(228, 7, 31, 3),
(229, 8, 31, 2),
(230, 1, 32, 2),
(231, 2, 32, 2),
(232, 3, 32, 1),
(233, 4, 32, 1),
(234, 5, 32, 3),
(235, 6, 32, 2),
(236, 7, 32, 3),
(237, 8, 32, 2),
(238, 1, 33, 2),
(239, 2, 33, 1),
(240, 3, 33, 2),
(241, 4, 33, 1),
(242, 5, 33, 3),
(243, 6, 33, 3),
(244, 7, 33, 4),
(245, 8, 33, 2),
(246, 1, 34, 2),
(247, 2, 34, 1),
(248, 3, 34, 2),
(249, 4, 34, 1),
(250, 5, 34, 1),
(251, 6, 34, 2),
(252, 7, 34, 3),
(253, 8, 34, 2),
(254, 1, 35, 2),
(255, 2, 35, 1),
(256, 3, 35, 3),
(257, 4, 35, 1),
(258, 5, 35, 1),
(259, 6, 35, 2),
(260, 7, 35, 3),
(261, 8, 35, 2),
(262, 1, 36, 2),
(263, 2, 36, 1),
(264, 3, 36, 1),
(265, 4, 36, 1),
(266, 5, 36, 1),
(267, 6, 36, 1),
(268, 7, 36, 3),
(269, 8, 36, 2),
(270, 1, 37, 2),
(271, 2, 37, 1),
(272, 3, 37, 1),
(273, 4, 37, 1),
(274, 5, 37, 2),
(275, 6, 37, 2),
(276, 7, 37, 3),
(277, 8, 37, 3),
(278, 1, 38, 2),
(279, 2, 38, 1),
(280, 3, 38, 4),
(281, 4, 38, 1),
(282, 5, 38, 3),
(283, 6, 38, 1),
(284, 7, 38, 4),
(285, 8, 38, 2),
(286, 1, 2, 5),
(287, 2, 2, 5),
(288, 3, 2, 5),
(289, 4, 2, 5),
(290, 5, 2, 5),
(291, 6, 2, 5),
(292, 7, 2, 5),
(293, 8, 2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `mva_comppersid`
--

DROP TABLE IF EXISTS `mva_comppersid`;
CREATE TABLE IF NOT EXISTS `mva_comppersid` (
  `MVA_ID` int(10) NOT NULL AUTO_INCREMENT,
  `MVA_COMPID` int(10) NOT NULL,
  `MVA_PERSID` int(10) NOT NULL,
  PRIMARY KEY (`MVA_ID`),
  KEY `MVA_COMPID` (`MVA_COMPID`,`MVA_PERSID`),
  KEY `MVA_PERSID` (`MVA_PERSID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `personnage`
--

DROP TABLE IF EXISTS `personnage`;
CREATE TABLE IF NOT EXISTS `personnage` (
  `Pers_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Pers_User` int(10) NOT NULL,
  `Pers_Pseudo` varchar(50) NOT NULL,
  `Pers_classe` varchar(50) NOT NULL,
  `Pers_Depl` int(1) NOT NULL,
  `Pers_Action` int(1) NOT NULL,
  `Pers_faim` int(3) NOT NULL,
  `Pers_soif` int(3) NOT NULL,
  `Pers_sante` int(3) NOT NULL,
  PRIMARY KEY (`Pers_ID`),
  KEY `Pers_User` (`Pers_User`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Contenu de la table `personnage`
--

INSERT INTO `personnage` (`Pers_ID`, `Pers_User`, `Pers_Pseudo`, `Pers_classe`, `Pers_Depl`, `Pers_Action`, `Pers_faim`, `Pers_soif`, `Pers_sante`) VALUES
(1, 1, 'Bigi boss', 'explo_dude', 0, 0, 0, 0, 0),
(2, 2, 'Wizard The Freak', 'explo_dude', 0, 0, 0, 0, 0),
(5, 5, '', '', 0, 0, 0, 0, 0),
(6, 6, '', '', 0, 0, 0, 0, 0),
(7, 7, '', 'indiana_dude', 0, 0, 0, 0, 0),
(8, 8, '', '', 0, 0, 0, 0, 0),
(9, 9, '', '', 0, 0, 0, 0, 0),
(10, 10, '', '', 0, 0, 0, 0, 0),
(11, 11, '', '', 0, 0, 0, 0, 0),
(12, 12, '', '', 0, 0, 0, 0, 0),
(13, 13, '', '', 0, 0, 0, 0, 0),
(14, 14, '', '', 0, 0, 0, 0, 0),
(15, 15, '', '', 0, 0, 0, 0, 0),
(16, 16, '', '', 0, 0, 0, 0, 0),
(17, 17, '', '', 0, 0, 0, 0, 0),
(18, 18, '', '', 0, 0, 0, 0, 0),
(19, 19, '', '', 0, 0, 0, 0, 0),
(20, 20, '', '', 0, 0, 0, 0, 0),
(21, 21, '', 'indiana_girl', 0, 0, 0, 0, 0),
(22, 22, '', '', 0, 0, 0, 0, 0),
(23, 23, '', '', 0, 0, 0, 0, 0),
(24, 24, '', '', 0, 0, 0, 0, 0),
(25, 25, '', '', 0, 0, 0, 0, 0),
(26, 26, '', '', 0, 0, 0, 0, 0),
(27, 27, '', '', 0, 0, 0, 0, 0),
(28, 28, '', '', 0, 0, 0, 0, 0),
(29, 29, '', 'explo_dude', 0, 0, 0, 0, 0),
(30, 30, '', '', 0, 0, 0, 0, 0),
(31, 31, '', '', 0, 0, 0, 0, 0),
(32, 32, '', '', 0, 0, 0, 0, 0),
(33, 33, '', '', 0, 0, 0, 0, 0),
(34, 34, '', '', 0, 0, 0, 0, 0),
(35, 35, '', '', 0, 0, 0, 0, 0),
(36, 36, '', '', 0, 0, 0, 0, 0),
(37, 37, '', 'guerisso_dude', 0, 0, 0, 0, 0),
(38, 38, '', '', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `plateau`
--

DROP TABLE IF EXISTS `plateau`;
CREATE TABLE IF NOT EXISTS `plateau` (
  `Plat_ID` int(1) NOT NULL AUTO_INCREMENT,
  `Plat_X` varchar(1) COLLATE latin1_general_ci NOT NULL,
  `Plat_Y` int(1) NOT NULL,
  `Plat_PersID` int(1) NOT NULL,
  PRIMARY KEY (`Plat_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `plateau`
--

INSERT INTO `plateau` (`Plat_ID`, `Plat_X`, `Plat_Y`, `Plat_PersID`) VALUES
(1, 'I', 14, 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `User_ID` int(10) NOT NULL AUTO_INCREMENT,
  `User_Login` varchar(50) NOT NULL,
  `User_Password` varchar(50) NOT NULL,
  `User_Nom` varchar(50) NOT NULL,
  `User_Prenom` varchar(50) NOT NULL,
  `User_Mail` varchar(50) NOT NULL,
  `User_Tel` varchar(50) NOT NULL,
  `User_init` int(1) NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`User_ID`, `User_Login`, `User_Password`, `User_Nom`, `User_Prenom`, `User_Mail`, `User_Tel`, `User_init`) VALUES
(1, 'admin', 'f71dbe52628a3f83a77ab494817525c6', '', '', '', '', 1),
(2, 'nibor', 'bffd9b9315b3ecd309e6a85030bd85bf', 'Delahaie', 'Robin', '', '', 0),
(3, 'toto', 'f71dbe52628a3f83a77ab494817525c6', '', '', '', '', 0),
(4, 'user1', 'f71dbe52628a3f83a77ab494817525c6', 'Cary', 'Ben', 'letsider@gmail.com', '', 0),
(5, 'BADETZ.Aude', '56bb0cde843703c1ce86b3401c45b990', 'BADETZ', 'Aude', '', '', 0),
(6, 'BELLEVILLE.Maëlle', '99c5a6346c7623437da3a7bdec6aa3a6', 'BELLEVILLE ', 'Maëlle', '', '', 0),
(7, 'BLANCHETON.Lucas', '352403acec2d002351a5b5ca1c9a25ce', 'BLANCHETON ', 'Lucas', '', '', 1),
(8, 'BOITARD.Dorian', '20587e5cac32079ee7cb8c98fcf41a0a', 'BOITARD ', 'Dorian', '', '', 0),
(9, 'BRANDAO.NUNES.Joao', '1e6fdd7742ab61b06a52fe76c3507593', 'BRANDAO NUNES ', 'Joao', '', '', 0),
(10, 'CHILLA.Pauline', '420ae0786ab2548e75943f4be0c1423f', 'CHILLA ', 'Pauline', '', '', 0),
(11, 'DIRE.Camille', 'ad43b892fcf1aa9100f334b4251d5aee', 'DIRE ', 'Camille', '', '', 0),
(12, 'FEUILLADE.Charlotte', '989da6a5d411a409940794ea0809d10d', 'FEUILLADE ', 'Charlotte', '', '', 0),
(13, 'FRADIN.Flora', 'b6d41ee66056f5e29f1352ddd95879b7', 'FRADIN ', 'Flora', '', '', 0),
(14, 'FRAILLON.Lucas', '4ab2947be90dd8af105407d429dedbba', 'FRAILLON ', 'Lucas', '', '', 0),
(15, 'GUENAULT.Melissa', '1c48bf8bc95d1b48b69879ae7cd1afe9', 'GUENAULT ', 'Melissa', '', '', 0),
(16, 'GUILLEN.Emeric', 'fc0d4b3b28e92adf8e5de9d521a611a8', 'GUILLEN ', 'Emeric', '', '', 0),
(17, 'HANGARD.Clémence', 'b21f7ab821c86655b34330057a1dc6f1', 'HANGARD ', 'Clémence', '', '', 0),
(18, 'HARDY.Solène', '5a4d067bd162ac77029594a89776afd7', 'HARDY ', 'Solène', '', '', 0),
(19, 'JACQUELIN.Jean-Marie', '3bd538b6f90f201970b20d2582449335', 'JACQUELIN ', 'Jean-Marie', '', '', 0),
(20, 'JULIEN.Kilian', 'f2525da18cdf3a7af901c94f6c9ecaca', 'JULIEN ', 'Kilian', '', '', 0),
(21, 'LABURTHE.Johanna', '15c58e80d51ae48f09c4b6b25d045a0d', 'LABURTHE ', 'Johanna', '', '', 1),
(22, 'LAFAILLE.Ugo', 'a5cfd4edf48c622b902979bd508d0c9c', 'LAFAILLE ', 'Ugo', '', '', 0),
(23, 'LE ROUX.Juliette', '9389f44fce3eaa43e4a2a46e8b52e0ce', 'LE ROUX ', 'Juliette', '', '', 0),
(24, 'LOUWARD.Marine', '467e46df4b84235520e8785d246c87de', 'LOUWARD ', 'Marine', '', '', 0),
(25, 'MARZIN.Léo', '6108ebd1a1dcdbe5ece95da10a45ce7e', 'MARZIN ', 'Léo', '', '', 0),
(26, 'MICHENET.Gaetan', 'f7f134279d4d3230046c6ee82898cef3', 'MICHENET ', 'Gaetan', '', '', 0),
(27, 'NZECKO.Gilles.Christ', 'f14322488ca718ddd0b08e20622a2a5e', 'NZECKO ', 'Gilles Christ', '', '', 0),
(28, 'PERRIN.Maxence', '5546c0fa8f3c234d02e0253cae8d1f14', 'PERRIN ', 'Maxence', '', '', 0),
(29, 'PREVOST.Lago', '4d7a5cb0868182151d5d81f1589def4e', 'PREVOST ', 'Lago', '', '', 1),
(30, 'OURSIN.Victor', 'a1b6035de8201f7bbd796258186e712a', 'OURSIN ', 'Victor', '', '', 0),
(31, 'RIGNAULT.Manon', '1c430cce966c25ff5bce73f2ba87333f', 'RIGNAULT ', 'Manon', '', '', 0),
(32, 'ROQUES.Clémence', '838ecdf8b0a270506184d57754b57047', 'ROQUES ', 'Clémence', '', '', 0),
(33, 'ROUER.Thomas', 'cbed418956b030b467531c09f887f3bb', 'ROUER ', 'Thomas', '', '', 0),
(34, 'SOUVILLE-CHASSAING.Samuel', '59f001eef55145bc5477b47b00761455', 'SOUVILLE-CHASSAING ', 'Samuel', '', '', 0),
(35, 'TOURNIER.Lise', '7ac137faa0d4ca2bb55083b31c4643d4', 'TOURNIER ', 'Lise', '', '', 0),
(36, 'TRAN.Olivier', '55fdbd5db6a8d4b285470c20e5ba1916', 'TRAN ', 'Olivier', '', '', 0),
(37, 'VALLI.Mathis', 'a497ff39a0b06c24c4cc0cd51c3363d7', 'VALLI ', 'Mathis', '', '', 1),
(38, 'VARENNES.Tanguy', 'd617a41e4b13502d57fd8e7920cff8d6', 'VARENNES ', 'Tanguy', '', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `village`
--

DROP TABLE IF EXISTS `village`;
CREATE TABLE IF NOT EXISTS `village` (
  `vil_id` int(10) NOT NULL AUTO_INCREMENT,
  `vil_init` int(1) NOT NULL,
  `vil_exp` int(10) NOT NULL,
  PRIMARY KEY (`vil_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `village`
--

INSERT INTO `village` (`vil_id`, `vil_init`, `vil_exp`) VALUES
(1, 0, 0);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `bank`
--
ALTER TABLE `bank`
  ADD CONSTRAINT `bank_ibfk_1` FOREIGN KEY (`Bank_ItemID`) REFERENCES `item` (`Item_ID`);

--
-- Contraintes pour la table `mva_attrpersid`
--
ALTER TABLE `mva_attrpersid`
  ADD CONSTRAINT `mva_attrpersid_ibfk_1` FOREIGN KEY (`MVA_ATTRID`) REFERENCES `attribut` (`Attr_ID`),
  ADD CONSTRAINT `mva_attrpersid_ibfk_2` FOREIGN KEY (`MVA_PERSID`) REFERENCES `personnage` (`Pers_ID`);

--
-- Contraintes pour la table `mva_comppersid`
--
ALTER TABLE `mva_comppersid`
  ADD CONSTRAINT `mva_comppersid_ibfk_1` FOREIGN KEY (`MVA_COMPID`) REFERENCES `competence` (`Comp_ID`),
  ADD CONSTRAINT `mva_comppersid_ibfk_2` FOREIGN KEY (`MVA_PERSID`) REFERENCES `personnage` (`Pers_ID`);

--
-- Contraintes pour la table `personnage`
--
ALTER TABLE `personnage`
  ADD CONSTRAINT `personnage_ibfk_1` FOREIGN KEY (`Pers_User`) REFERENCES `utilisateur` (`User_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
