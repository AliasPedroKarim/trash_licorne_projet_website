-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 02 mai 2018 à 11:31
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `trash_licorne`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_principal` varchar(255) NOT NULL DEFAULT '0',
  `nom` varchar(255) NOT NULL DEFAULT '0',
  `prix` float NOT NULL,
  `prix_normal` int(11) NOT NULL,
  `détails_produits` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom_principal`, `nom`, `prix`, `prix_normal`, `détails_produits`) VALUES
(1, 'Robe', 'Robe licorne', 150.85, 1000, 'trtklurhfisunlqgkybsngkj:bqshliyh'),
(2, 'Pyjama', 'Pyjama d\'été Lico', 85.66, 251, 'h,bgfqjbgfukqybnfomugqukydnqifyb');

-- --------------------------------------------------------

--
-- Structure de la table `produit_old`
--

DROP TABLE IF EXISTS `produit_old`;
CREATE TABLE IF NOT EXISTS `produit_old` (
  `idProduit` int(10) NOT NULL AUTO_INCREMENT,
  `nomProduit` varchar(255) NOT NULL DEFAULT '0',
  `prixProduit` int(10) NOT NULL,
  `typeProduit` varchar(255) NOT NULL,
  `imgProduits` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `categorie` int(1) NOT NULL,
  `detailProduits` varchar(1000) NOT NULL,
  PRIMARY KEY (`idProduit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mot_de_passe` varchar(250) DEFAULT NULL,
  `telephone` varchar(11) NOT NULL,
  `nom` varchar(250) DEFAULT NULL,
  `civilite` varchar(250) DEFAULT NULL,
  `grade` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `pseudo`, `email`, `mot_de_passe`, `telephone`, `nom`, `civilite`, `grade`) VALUES
(1, 'Axel', 'axel.demaretzsio@gmail.com', '51abb9636078defbf888d8457a7c76f85c8f114c', '787899158', 'Demaretz', 'Homme', 0),
(2, 'Axel', 'axel.demareeetzsio@gmail.com', '51abb9636078defbf888d8457a7c76f85c8f114c', '0787899158', 'Demaretz', 'Homme', 0),
(3, 'test', 'test@test.fr', '3e28f077a380655659d01194382f7fea02ded8c3', '0808080808', 'test', 'Femme', 0),
(4, 'Axel', 'axel@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '0787899158', 'Demaretz', 'Homme', 0),
(5, 'jean', 'billyjean@gmail.com', '14e94d2f42e392eb7ee99aa475c94bcba94cd16b', '0606070708', 'billy', 'Femme', 0),
(6, 'admin', 'admin@admin.fr', 'd033e22ae348aeb5660fc2140aec35850c4da997', '0787899158', 'admin', 'Homme', 1),
(7, 'demaretz', 'test@test.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '0787899158', 'axel', 'Homme', 0),
(8, 'Axelle', 'axelle@gmail.com', '6c3e1d599608369f972bd7e58f4f0a3ddfb59c4a', '36248406', 'Navarro', 'Femme', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
