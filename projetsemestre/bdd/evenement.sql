-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 22 Mars 2018 à 14:09
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ou_sortir_ce_soir`
--

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `idEvenement` int(11) NOT NULL,
  `nomEvenement` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `libelleCourtEvenement` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `descriptionEvenement` varchar(510) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `dateEvenement` date DEFAULT NULL,
  `prixEvenement` decimal(10,2) NOT NULL,
  `telephoneEvenement` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `siteEvenement` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `lieuEvenement` varchar(255) NOT NULL,
  `numeroVoieEvenement` decimal(10,0) DEFAULT NULL,
  `typeVoieEvenement` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `nomVoieEvenement` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `codePostalEvenement` decimal(10,0) DEFAULT NULL,
  `nomVilleEvenement` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `heureEvenement` decimal(10,2) NOT NULL,
  `latitudeEvenement` decimal(10,6) NOT NULL,
  `longitudeEvenement` decimal(10,6) NOT NULL,
  `idType` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `evenement`
--

INSERT INTO `evenement` (`idEvenement`, `nomEvenement`, `libelleCourtEvenement`, `descriptionEvenement`, `dateEvenement`, `prixEvenement`, `telephoneEvenement`, `siteEvenement`, `lieuEvenement`, `numeroVoieEvenement`, `typeVoieEvenement`, `nomVoieEvenement`, `codePostalEvenement`, `nomVilleEvenement`, `heureEvenement`, `latitudeEvenement`, `longitudeEvenement`, `idType`) VALUES
(1, 'Wallaby\'s', ' ♥ Soirée du 14 février ♥ ', '♥ Soirée folle alliant le romantisme de la saint Valentin et le plaisir d\'un match de foot entre le Real-Madrid - PSG ♥', '2018-02-14', '0.00', '02 41 87 98 18', '', 'Wallaby\'s', '60', 'Boulevard', 'du Maréchal Foch', '49100', 'Angers', '19.50', '47.467164', '-0.552456', 1),
(2, 'Orelsan', 'Concert d\'Orelsan', 'Orelsan repart en solo pour une tournée qui se déroulera partout en France dès le mois de février 2018.', '2018-03-20', '36.00', '02 40 48 97 34', 'https://www.spectacles.ca', 'Arena Loire', '131', 'rue', 'Ferdinand Vest', '49800', 'Trélazé', '20.25', '47.442416', '-0.477215', 2),
(3, 'Le temps qui reste', 'Pièce de Philippe Lellouche', 'Sophie, Sébastien, Paul et Frank, quatre amis d\'enfance se retrouvent à l\'enterrement du cinquième inséparable de la bande, disparu subitement.', '2018-02-16', '22.00', ' 02 41 05 40 00', 'https://www.ticketmaster.fr', 'Grand théâtre', NULL, 'Place', 'du Ralliement', '49100', 'Angers', '20.00', '47.470998', '-0.552234', 3);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`idEvenement`),
  ADD KEY `foreignKey` (`idType`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
