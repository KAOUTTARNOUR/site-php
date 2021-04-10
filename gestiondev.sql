-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 10 avr. 2021 à 18:10
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestiondev`
--

-- --------------------------------------------------------

--
-- Structure de la table `developpeur`
--

DROP TABLE IF EXISTS `developpeur`;
CREATE TABLE IF NOT EXISTS `developpeur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `PRENOM` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=222 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `developpeur`
--

INSERT INTO `developpeur` (`id`, `nom`, `PRENOM`, `email`) VALUES
(184, 'jebli', 'kaouttar', 'kaouttar.nour96@gmail.com'),
(187, 'JEBLI', 'HIBA', 'kaouttar.nour96@gmail.com'),
(205, 'jebli', 'kaouttar', 'kaouttar.nour96@gmail.com'),
(206, 'jebli', 'kaouttar', 'kaouttar.nour96@gmail.com'),
(207, 'laghmam', 'bilal', 'laghmam@gmail.com'),
(208, 'laghmam', 'bilal', 'laghmam@gmail.com'),
(209, 'baztttata', 'batat', 'baztttata@gmail.com'),
(210, 'baztttata', 'batat', 'baztttata@gmail.com'),
(211, 'jebli', 'kaouttar', 'kaouttar.nour96@gmail.com'),
(212, 'jebli', 'kaouttar', 'kaouttar.nour96@gmail.com'),
(213, 'jebli', 'kaouttar', 'lkc@gmail.com'),
(214, 'test', 'test', 'lkc@gmail.com'),
(215, 'jebli', 'kaouttar', 'kaouttar.nour96@gmail.com'),
(216, 'jebli', 'kaouttar', 'kaouttar.nour96@gmail.com'),
(217, 'jebli', 'kaouttar', 'lkc@gmail.com'),
(218, '', '', ''),
(219, '', '', ''),
(221, 'huhhoihjoi', 'korssi', 'hi@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `technos`
--

DROP TABLE IF EXISTS `technos`;
CREATE TABLE IF NOT EXISTS `technos` (
  `id` int(20) NOT NULL,
  `html` int(30) NOT NULL,
  `cgi` int(30) NOT NULL,
  `ajax` int(12) NOT NULL,
  `php` int(30) NOT NULL,
  `id_dev` int(11) NOT NULL,
  `js` int(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_dev` (`id_dev`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user_table`
--

DROP TABLE IF EXISTS `user_table`;
CREATE TABLE IF NOT EXISTS `user_table` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom_user` varchar(21) DEFAULT NULL,
  `prenom_user` varchar(21) DEFAULT NULL,
  `email_user` varchar(100) DEFAULT NULL,
  `password_user` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user_table`
--

INSERT INTO `user_table` (`id_user`, `nom_user`, `prenom_user`, `email_user`, `password_user`) VALUES
(8, 'jebli', 'kaouttar', 'kaouttar.nour96@gmail.com', 'a'),
(9, 'jebli', 'kaouttar', 'kaouttar.nour96@gmail.com', 'kaouttar'),
(14, 'jebli', 'kaouttar', 'kaouttar.nour96@gmail.com', 'a'),
(15, 'jebli', 'kaouttar', 'kaouttar.nour96@gmail.com', 'q'),
(16, 'jebli', 'kaouttar', 'kaouttar.nour96@gmail.com', 'a'),
(33, 'jebli', 'kaouttar', 'kaouttar.nour96@gmail.com', 'A'),
(34, 'jebli', 'kaouttar', 'kaouttar.nour96@gmail.com', 'a'),
(35, 'ayadi', 'oussama', 'kaouttar.nour96@gmail.com', 'ji'),
(36, 'Kaoutar', 'kaouttar', 'kaouttar.nour96@gmail.com', 'AZ');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `technos`
--
ALTER TABLE `technos`
  ADD CONSTRAINT `technos_ibfk_1` FOREIGN KEY (`id_dev`) REFERENCES `developpeur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
