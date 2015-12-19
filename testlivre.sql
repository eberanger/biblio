-- phpMyAdmin SQL Dump
-- version 4.4.13.1
-- http://www.phpmyadmin.net
--
-- Client :  spartanbdbgandja.mysql.db
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
-- Base de données :  `spartanbdbgandja`
--

-- --------------------------------------------------------

--
-- Structure de la table `testlivre`
--

CREATE TABLE IF NOT EXISTS `testlivre` (
  `id` int(11) NOT NULL,
  `titre` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `id_auteur` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `testlivre`
--

INSERT INTO `testlivre` (`id`, `titre`, `img`, `description`, `id_auteur`) VALUES
(1, 'The Book of Ivy', 'http://img.over-blog-kiwi.com/0/44/17/25/20150505/ob_b7af21_the-book-of-ivy.jpg', 'Résumé :\r\nVoilà cinquante ans qu’une guerre nucléaire a décimé la population mondiale. Un groupe de survivants d’une dizaine de milliers de personnes a fini par se former, et ce qui reste des États-Unis d’Amérique s’est choisi un président. Mais des deux familles qui se sont affrontées pour obtenir le pouvoir, la mienne a perdu. Aujourd’hui, les fils et les filles des adversaires d’autrefois sont contraints de s’épouser, chaque année, lors d’une cérémonie censée assurer l’unité du peuple.\r\nJ’ai seize ans cette année, et mon tour est venu.\r\nJe m’appelle Ivy Westfall, et je n’ai qu’une seule et unique mission dans la vie : tuer le garçon qu’on me destine, Bishop, le fils du président. Depuis ma plus tendre enfance, je me prépare pour ce moment. Peu importent mes sentiments, mes désirs, mes doutes. Les espoirs de toute une communauté reposent sur moi. Le temps de la rébellion approche…\r\nBishop doit mourir. Et je serai celle qui le tuera.\r\nNée pour trahir et faite pour tuer… Sera-t-elle à la hauteur ? À la fois histoire d’amour torturée, thriller psychologique et dystopie cruelle, The Book of Ivy vous entraîne dans un compte à rebours haletant dont vous ne sortirez pas indemnes.', 1),
(2, 'The Revolution of Ivy', 'https://booksandrap.files.wordpress.com/2015/11/the-book-of-ivy-tome-2-the-revolution-of-ivy-683667.jpg?w=365&h=365&crop=1', 'Condamnée à l''exil pour ses crimes, Ivy se retrouve seule au-delà de la barrière qui protège les siens d''un monde hostile, dévasté par l''arme atomique. Trahie par sa famille, abandonnée par Bishop, elle doit quitter Westfall et s''enfonce dans la nature sauvage.', 1),
(3, 'La 5e vague', 'http://www.livrophage.com/wp-content/uploads/2015/09/81-XZcQpftL.jpg', 'Après la 1ère vague, seules restaient les ténèbres.\r\nAprès la 2ème vague, les chanceux ont pu s''enfuir.\r\nAprès la 3ème vague, les malchanceux ont survécu.\r\nAprès la 4ème vague, une seule règle s''applique : ne faire confiance à personne. \r\nDésormais, à l''aube de la 5ème vague, et sur une portion dévastée et esseulée d''autoroute, Cassie tente de Leur échapper.\r\nD''échapper à ces êtres qui ressemblent aux humains et qui parcourent le pays, tuant chaque personne qui se met en travers de Leur route. Eux, qui ont dispersé les derniers survivants sur la planète Terre.\r\nRester seule est synonyme de rester en vie pour Cassie. Enfin, c''est ce qu''elle croit jusqu''à ce qu''elle rencontre Evan Walker. Séduisant et mystérieux, Evan pourrait s''avérer être le seul espoir de Cassie pour sauver son frère - ou pour qu''elle puisse rester en vie.\r\nMais Cassie va devoir choisir.\r\nEntre la confiance et le désespoir.\r\nEntre la résistance et la capitulation.\r\nEntre la vie et la mort.\r\nEntre abandonner et se relever.', 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `testlivre`
--
ALTER TABLE `testlivre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `testlivre`
--
ALTER TABLE `testlivre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
