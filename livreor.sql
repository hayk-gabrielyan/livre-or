-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 08 déc. 2022 à 13:06
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `livreor`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` text NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `commentaire`, `id_utilisateur`, `date`) VALUES
(63, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 1, '2022-12-07 15:31:43'),
(61, 'Bonjour', 1, '2022-12-07 15:00:39'),
(62, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, '2022-12-07 15:29:56'),
(64, 'test d\'apostrophe', 5, '2022-12-08 00:28:00'),
(65, 'Salut moi c\'est Julien', 10, '2022-12-08 13:51:14');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(1, 'a', '$2y$10$UhB7YNuxHN.0Pp9VTlkC3ujybBpFpTSSDNH6yHwbDn0HPfa6/sM.G'),
(2, 'hayk', '$2y$10$UhB7YNuxHN.0Pp9VTlkC3ujybBpFpTSSDNH6yHwbDn0HPfa6/sM.G'),
(3, 'b', '$2y$10$UhB7YNuxHN.0Pp9VTlkC3ujybBpFpTSSDNH6yHwbDn0HPfa6/sM.G'),
(6, 'c', '$2y$10$4Ug1ax4iWb504KgqXbvc4u4MojtMm0AO8Bn3NkSlW1X15Icw/UzmG'),
(5, 'admin', '$2y$10$XnvPxKppV9GknrXREzqeWeGt/DcPH847EawNYFgTVrJsZJD7ORlby'),
(7, 'v', '$2y$10$MPdoXzCdKJMqQRtAjc6lb.Y3r7TuTof6XojKjLRNZ/pZ3O2ap2GVe'),
(8, 'z', '$2y$10$IlKEG1lDRaG3vu5zqb0/VOgL5L/T43XhqYjTE.s/WrrRKFgcVxR16'),
(9, 'e', '$2y$10$Y5Ztx0.nCSLhYYT8q5FnpuXcTWdeWZ7YTzfewLc/2NaV8zG9vLc86');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
