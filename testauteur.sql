-- phpMyAdmin SQL Dump
-- version 4.4.13.1
-- http://www.phpmyadmin.net
--
-- Client : 
-- Généré le :  Sam 19 Décembre 2015 à 18:01
-- Version du serveur :  5.5.46-0+deb7u1-log
-- Version de PHP :  5.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données : 
--

-- --------------------------------------------------------

--
-- Structure de la table `testauteur`
--

CREATE TABLE IF NOT EXISTS `testauteur` (
  `id` int(11) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `testauteur`
--

INSERT INTO `testauteur` (`id`, `prenom`, `nom`, `img`, `description`) VALUES
(1, 'Amy', 'Engel', 'http://amyengel.net/wp-content/uploads/2014/02/Amy-Amy-Edited-0007-199x300.jpg', 'Nationalité : États-Unis \r\nNé(e) à : Kansas \r\nBiographie : \r\n\r\nAmy Engel a passé son enfance dans divers pays du monde (Iran, Taïwan) et vécu un peu partout aux États-Unis, de la Californie à Washington D.C. \r\n\r\nAvant de se consacrer à plein temps à l''écriture, elle a exercé le métier d''avocate – qui s''est avéré moins trépidant au final que dans les séries télévisées. \r\n\r\nDès qu''elle a un moment de libre, elle se plonge dans un bon bouquin, ou se livre à son péché mignon : l''achat compulsif de chaussures. \r\n\r\nThe Book of Ivy (2014) est son premier roman.\r\n\r\nElle vit à Kansas City en Missouri avec son mari et ses deux enfants. \r\n\r\nsite de l''auteure:\r\nhttp://amyengel.net/'),
(2, 'Rick', 'Yancey', 'http://static.tumblr.com/walqejv/Hbxnba8n5/author-thumb.jpg', 'Nationalité : États-Unis \r\nNé(e) à : Miami, Floride \r\nBiographie : \r\n\r\nRick Yancey vit en compagnie de sa femme, ses trois fils, ses deux chiens et son iguane. Il a été diplômé de l''université de Yale en 1987.\r\n\r\nIl décide en 2004 de se consacrer à sa passion, l''écriture, après des études de langue anglaise à l''université de Chicago. \r\nCette passion pour les livres et plus particulièrement pour les légendes arthuriennes remonte à son plus jeune âge (il écrit son premier roman à quatorze ans!), à l’époque où il dévorait "Charlie et la chocolaterie" de Roald Dahl.\r\n\r\nIl est déjà l''auteur de nombreuses pièces de théâtre et de deux romans pour adultes, qui connaissent un vif succès aux États-Unis. "Les Extraordinaires Aventures d’Alfred Kropp" est son premier roman d''une trilogie pour adolescents.\r\n\r\nVoici son site http://www.rickyancey.com/ ');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `testauteur`
--
ALTER TABLE `testauteur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `testauteur`
--
ALTER TABLE `testauteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
