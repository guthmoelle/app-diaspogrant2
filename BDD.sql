-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 15 juin 2021 à 08:31
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
-- Base de données : `diaspogrant_dev`
--

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210406143442', '2021-04-06 14:36:55', 763),
('DoctrineMigrations\\Version20210504141249', '2021-05-04 14:17:25', 1015);

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE IF NOT EXISTS `entreprise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `r_social` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_activite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_affaire` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_employes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(800) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `departement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_postal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`id`, `r_social`, `s_activite`, `c_affaire`, `n_employes`, `description`, `tel`, `mail`, `adresse`, `ville`, `departement`, `c_postal`, `image_filename`) VALUES
(1, 'Agence Congolaise des Systèmes d\'Information', 'Informatique', '1 milliards de F CFA', '300', 'Bref', '+242 04 444 87 31', ' contact@acsi.cg', '16 Rue Laptot MATOUFFA, M\'Pila ', 'Brazzaville', 'Brazzaville', '00242', ''),
(2, 'MBUSINESSEUROPE', 'Conseil pour les affaires et autres conseils de gestion', '100 000,00 €', '3', 'Favorisons les solutions équitables\r\n\r\nUn processus de médiation pour gagner en sérénité et performance :\r\n1. Création des conditions d’un dialogue raisonné et créatif,\r\n2. Prise en compte des besoins de chacun,\r\n3. Recherche de solutions efficaces, pleinement satisfaisantes pour tous.', '06.95.65.42.81', 'contact@neatemys.fr', '10 Passage Meynis', 'Lyon', 'Rhône', '69003 ', 'logo-neatemys'),
(3, 'DT Solution', 'Fabrication d\'autres matériels électriques', '100 000 euros', '10', 'C’est une équipe engagée, expérimentée, proactive qui a pris le parti de mettre ses innovations au service de ses clients et de la durabilité. Sans concession sur la qualité du travail accompli comme sur la qualité environnementale des produits développés. Le tout en économie de proximité, made in France.', '+33(0)4 84 51 21 02', 'contact@dt-solution.fr', '17 boulevard Champfleury', 'Avignon', 'Vaucluse', '84000 ', 'logo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
