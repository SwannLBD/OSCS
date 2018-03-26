-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 15 fév. 2018 à 12:12
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `formulaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `bar`
--

CREATE TABLE `bar` (
  `ID_bar` int(11) NOT NULL,
  `nomBar` text COLLATE utf8_bin NOT NULL,
  `adresseBar` text COLLATE utf8_bin NOT NULL,
  `latitudeBar` text COLLATE utf8_bin NOT NULL,
  `longitudeBar` text COLLATE utf8_bin NOT NULL,
  `horraireOuvBar` time NOT NULL,
  `horraireFermBar` time NOT NULL,
  `noteBar` text COLLATE utf8_bin NOT NULL,
  `avisBar` text COLLATE utf8_bin NOT NULL,
  `descBar` text COLLATE utf8_bin NOT NULL,
  `photoBar` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `bar`
--

INSERT INTO `bar` (`ID_bar`, `nomBar`, `adresseBar`, `latitudeBar`, `longitudeBar`, `horraireOuvBar`, `horraireFermBar`, `noteBar`, `avisBar`, `descBar`, `photoBar`) VALUES
(1, 'La cave de la Trinquette', '21 Boulevard Carnot, 49100 Angers', '0', '0', '00:00:17', '00:00:21', '5/5', 'Superbe ambiance, Jadore le concepte familiale de la trinquette.', 'Vin', 'images_bdd/Bars/LaTrinquette.jpeg'),
(2, 'Le Ti bar', '45 Rue du Mail, 49100 Angers', '0', '0', '00:00:18', '00:00:02', '4/5', 'Très bon bar où l\'ambiance est sympa et les shooters sont variés et originaux.', 'Shooters', 'images_bdd/Bars/LeTiBar.jpeg'),
(3, 'Le BerThoM', '88 Rue Boreau, 49100 Angers', '0', '0', '00:00:17', '00:00:01', '4/5', ' Un cadre très agréable et un beau choix de bières pression et bouteille. ', 'Bières', 'images_bdd/Bars/LeBerThoms.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `concert`
--

CREATE TABLE `concert` (
  `ID_concert` int(11) NOT NULL,
  `nomConcert` text COLLATE utf8_bin NOT NULL,
  `adresseConcert` text COLLATE utf8_bin NOT NULL,
  `latitudeConcert` text COLLATE utf8_bin NOT NULL,
  `longitudeConcert` text COLLATE utf8_bin NOT NULL,
  `noteConcert` text COLLATE utf8_bin NOT NULL,
  `avisConcert` text COLLATE utf8_bin NOT NULL,
  `descConcert` text COLLATE utf8_bin NOT NULL,
  `photoConcert` text COLLATE utf8_bin NOT NULL,
  `lienConcert` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `concert`
--

INSERT INTO `concert` (`ID_concert`, `nomConcert`, `adresseConcert`, `latitudeConcert`, `longitudeConcert`, `noteConcert`, `avisConcert`, `descConcert`, `photoConcert`, `lienConcert`) VALUES
(1, 'Le Chabada', '56 Boulevard du Doyenné, 49100 Angers', '0', '0', '5/5', 'Une bonne programmation variée.', '', 'images_bdd/Concerts/LeChabada.jpg', 'http://www.lechabada.com'),
(2, 'Salle Amphitea 4000', 'Parc des expos, Angers', '0', '0', '4/5', 'Salle de spectacle conviviale et moderne !', '', 'images_bdd/Concerts/Amphitea.jpg', 'http://www.infoconcert.com/salle/salle-amphitea-4000--parc-des-expos-dangers-1699/concerts.html');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `ID_membre` int(250) NOT NULL,
  `nomMembre` text COLLATE utf8_bin NOT NULL,
  `prenomMembre` text COLLATE utf8_bin NOT NULL,
  `emailMembre` text COLLATE utf8_bin NOT NULL,
  `passwordMembre` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`ID_membre`, `nomMembre`, `prenomMembre`, `emailMembre`, `passwordMembre`) VALUES
(1, 'LAMBARD', 'Swann', 'lambard.swann@icloud.com', 'JPOMDS'),
(2, 'LAMBARD', 'Swann', 'lambard.swann@icloud.com', 'MDS');

-- --------------------------------------------------------

--
-- Structure de la table `theatre`
--

CREATE TABLE `theatre` (
  `ID_theatre` int(11) NOT NULL,
  `nomTheatre` text COLLATE utf8_bin NOT NULL,
  `adresseTheatre` text COLLATE utf8_bin NOT NULL,
  `latitudeTheatre` text COLLATE utf8_bin NOT NULL,
  `longitudeTheatre` text COLLATE utf8_bin NOT NULL,
  `noteTheatre` text COLLATE utf8_bin NOT NULL,
  `avisTheatre` text COLLATE utf8_bin NOT NULL,
  `descTheatre` text COLLATE utf8_bin NOT NULL,
  `photoTheatre` text COLLATE utf8_bin NOT NULL,
  `lienTheatre` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `theatre`
--

INSERT INTO `theatre` (`ID_theatre`, `nomTheatre`, `adresseTheatre`, `latitudeTheatre`, `longitudeTheatre`, `noteTheatre`, `avisTheatre`, `descTheatre`, `photoTheatre`, `lienTheatre`) VALUES
(1, 'Le Grand Theatre', 'Place du Ralliement, 49000 Angers', '0', '0', '5/5', 'Salle confortable pour aller voir les differents spectacles proposés.', '', 'images_bdd/Theatres/GrandThéâtre.jpg', 'http://www.angers.fr/vivre-a-angers/culture/theatre/grand-theatre/index.html'),
(2, 'Theatre Chanzy', '30 Avenue de Chanzy, 49000 Angers', '0', '0', '4/5', 'Salle intime et conviviale.', '', 'images_bdd/Theatres/ThéâtreChanzy.jpeg', 'https://www.spectacles.carrefour.fr/salles/angers/theatre-chanzy'),
(3, 'Le Quai', 'Cale de la Savette, 49000 Angers', '0', '0', '4/5', 'Salle agréable, recommande pour les familles', '', 'images_bdd/Theatres/LeQuai.jpg', 'http://www.lequai-angers.eu');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bar`
--
ALTER TABLE `bar`
  ADD PRIMARY KEY (`ID_bar`);

--
-- Index pour la table `concert`
--
ALTER TABLE `concert`
  ADD PRIMARY KEY (`ID_concert`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`ID_membre`);

--
-- Index pour la table `theatre`
--
ALTER TABLE `theatre`
  ADD PRIMARY KEY (`ID_theatre`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bar`
--
ALTER TABLE `bar`
  MODIFY `ID_bar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `concert`
--
ALTER TABLE `concert`
  MODIFY `ID_concert` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `ID_membre` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `theatre`
--
ALTER TABLE `theatre`
  MODIFY `ID_theatre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
