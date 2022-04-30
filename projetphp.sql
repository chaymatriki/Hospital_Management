-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 11 juin 2019 à 07:28
-- Version du serveur :  10.1.40-MariaDB
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetphp`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `id_cham` int(11) NOT NULL,
  `num_cham` int(11) NOT NULL,
  `type` varchar(45) NOT NULL,
  `disponibilite` varchar(10) NOT NULL,
  `id_ser` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`id_cham`, `num_cham`, `type`, `disponibilite`, `id_ser`) VALUES
(1, 1, 'privee', 'oui', 2),
(2, 2, 'commune', 'oui', 6),
(3, 4, 'commune', 'non', 3),
(4, 5, 'privee', 'oui', 2);

-- --------------------------------------------------------

--
-- Structure de la table `equipement`
--

CREATE TABLE `equipement` (
  `id_equi` int(11) NOT NULL,
  `id_cham` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `equipement`
--

INSERT INTO `equipement` (`id_equi`, `id_cham`, `nom`, `quantite`, `prix`) VALUES
(2, 4, 'irm', 10, 0),
(3, 1, 'scanner', 6, 5555),
(7, 1, 'equip', 9, 0);

-- --------------------------------------------------------

--
-- Structure de la table `medicament`
--

CREATE TABLE `medicament` (
  `id_med` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `stock` int(11) NOT NULL,
  `prix` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `medicament`
--

INSERT INTO `medicament` (`id_med`, `nom`, `stock`, `prix`) VALUES
(1, 'maxilase', 7, 1200),
(2, 'doliprane', 5, 75),
(3, 'panadol', 25, 60),
(8, 'qq', 56, 3000);

-- --------------------------------------------------------

--
-- Structure de la table `operation`
--

CREATE TABLE `operation` (
  `id_op` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `operation`
--

INSERT INTO `operation` (`id_op`, `nom`, `prix`) VALUES
(1, 'op1', 8500),
(2, 'op2', 5000),
(3, 'op3', 4000);

-- --------------------------------------------------------

--
-- Structure de la table `ordonance`
--

CREATE TABLE `ordonance` (
  `id_ord` int(11) NOT NULL,
  `id_pat` int(11) NOT NULL,
  `facture` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `id_pat` int(11) NOT NULL,
  `nom` varchar(42) NOT NULL,
  `prenom` varchar(42) NOT NULL,
  `age` int(11) NOT NULL,
  `antecedant` varchar(42) NOT NULL,
  `numss` int(11) NOT NULL,
  `id_pers` int(11) NOT NULL,
  `id_cham` int(11) DEFAULT NULL,
  `date_entree` date DEFAULT NULL,
  `date_sortie` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`id_pat`, `nom`, `prenom`, `age`, `antecedant`, `numss`, `id_pers`, `id_cham`, `date_entree`, `date_sortie`) VALUES
(1, 'ptest3', 'ptest3', 45, '', 147258, 3, 2, '2019-06-02', '2019-06-08'),
(4, 'ugyu2', 'pt', 44, '', 54865, 3, 4, '2019-05-14', '2019-07-16'),
(12, '8jhhj', 'jhgjhyfj', 22, '', 64865, 30, 4, '2019-02-12', '2019-05-23'),
(9, 'kjhgfd', 'dfgh', 55, '', 45644, 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `patient_med`
--

CREATE TABLE `patient_med` (
  `id_pat` int(11) NOT NULL,
  `id_med` int(11) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `patient_med`
--

INSERT INTO `patient_med` (`id_pat`, `id_med`, `quantite`) VALUES
(1, 1, 3),
(1, 2, 4),
(4, 3, 5),
(1, 3, 9),
(9, 2, 66),
(5, 2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `patient_op`
--

CREATE TABLE `patient_op` (
  `id_pat` int(11) NOT NULL,
  `id_op` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `patient_op`
--

INSERT INTO `patient_op` (`id_pat`, `id_op`) VALUES
(1, 1),
(1, 2),
(1, 3),
(4, 1),
(5, 2);

-- --------------------------------------------------------

--
-- Structure de la table `personelles`
--

CREATE TABLE `personelles` (
  `id_pers` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `id_ser` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personelles`
--

INSERT INTO `personelles` (`id_pers`, `nom`, `prenom`, `type`, `id_ser`, `id_user`) VALUES
(115, 'test8', 'test8', 'medecin', 1, 8),
(114, 'test9', 'test9', 'medecin', 1, 9),
(113, 'pers1', 'gjhnurf', 'Financier', 8, 6),
(112, 'ikjed', 'dfghu', 'medecin', 4, 3),
(110, 'uzfhf', 'uzrhf', 'agent d\'acceuil', 9, 1);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `id_ser` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `specialite` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`id_ser`, `nom`, `specialite`) VALUES
(1, 'Cardiologie', 'test'),
(6, 'Chirurgie', 'Braven'),
(2, 'chimiothérapie', 'Scoffins'),
(3, 'neurologie', 'Corneliussen'),
(4, 'radiologie', 'Blissett'),
(5, 'psychiatrie', 'Gounod'),
(7, 'pharmacie', 'kjhgf'),
(8, 'finance', 'ghjk'),
(9, 'réception', 'loikgsf');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nom_user` varchar(50) NOT NULL,
  `prenom_user` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `login` varchar(45) NOT NULL,
  `password` varchar(32) NOT NULL,
  `accepte` varchar(10) NOT NULL,
  `id_pers` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom_user`, `prenom_user`, `type`, `login`, `password`, `accepte`, `id_pers`) VALUES
(3, 'ikjed', 'dfghu', 'medecin', 'test3', 'test3', 'oui', 3),
(2, '', '', 'gestionnaire', 'test2', 'test2', 'oui', 2),
(1, 'uzfhf', 'uzrhf', 'agent d\'acceuil', 'test1', 'test1', 'oui', 1),
(6, 'ruorgfbjr', 'gjhnurf', 'financier', 'test6', 'test6', 'oui', 0),
(8, 'test8', 'test8', 'medecin', 'test8', 'test8', 'oui', 0),
(9, 'test9', 'test9', 'medecin', 'test9', 'test9', 'oui', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`id_cham`),
  ADD KEY `id_ser` (`id_ser`);

--
-- Index pour la table `equipement`
--
ALTER TABLE `equipement`
  ADD PRIMARY KEY (`id_equi`),
  ADD KEY `id_cham` (`id_cham`);

--
-- Index pour la table `medicament`
--
ALTER TABLE `medicament`
  ADD PRIMARY KEY (`id_med`);

--
-- Index pour la table `operation`
--
ALTER TABLE `operation`
  ADD PRIMARY KEY (`id_op`);

--
-- Index pour la table `ordonance`
--
ALTER TABLE `ordonance`
  ADD PRIMARY KEY (`id_ord`),
  ADD KEY `id_pat` (`id_pat`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id_pat`),
  ADD KEY `id_pers` (`id_pers`),
  ADD KEY `id_cham` (`id_cham`);

--
-- Index pour la table `patient_med`
--
ALTER TABLE `patient_med`
  ADD PRIMARY KEY (`id_pat`,`id_med`),
  ADD KEY `id_med` (`id_med`);

--
-- Index pour la table `patient_op`
--
ALTER TABLE `patient_op`
  ADD PRIMARY KEY (`id_pat`,`id_op`),
  ADD KEY `id_op` (`id_op`);

--
-- Index pour la table `personelles`
--
ALTER TABLE `personelles`
  ADD PRIMARY KEY (`id_pers`),
  ADD KEY `id_ser` (`id_ser`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_ser`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_pers` (`id_pers`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `id_cham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `equipement`
--
ALTER TABLE `equipement`
  MODIFY `id_equi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `medicament`
--
ALTER TABLE `medicament`
  MODIFY `id_med` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `operation`
--
ALTER TABLE `operation`
  MODIFY `id_op` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `ordonance`
--
ALTER TABLE `ordonance`
  MODIFY `id_ord` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `id_pat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `personelles`
--
ALTER TABLE `personelles`
  MODIFY `id_pers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `id_ser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
