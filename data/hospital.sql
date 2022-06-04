-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 04 juin 2022 à 21:33
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hospital`
--

-- --------------------------------------------------------

--
-- Structure de la table `dispatcher-mld`
--

CREATE TABLE `dispatcher-mld` (
  `idp` int(11) NOT NULL,
  `idl` int(11) NOT NULL,
  `idt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `equipement`
--

CREATE TABLE `equipement` (
  `ide` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `dateArrive` date NOT NULL,
  `idp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `equipement`
--

INSERT INTO `equipement` (`ide`, `type`, `dateArrive`, `idp`) VALUES
(1, 'm', '2022-05-22', 1),
(2, 'ca', '2022-05-19', 5),
(3, 'djo', '2022-06-24', 8);

-- --------------------------------------------------------

--
-- Structure de la table `fiche_clinique`
--

CREATE TABLE `fiche_clinique` (
  `Idf` int(11) NOT NULL,
  `symetrique` varchar(100) DEFAULT NULL,
  `asymetrique` varchar(100) DEFAULT NULL,
  `respecte` varchar(100) DEFAULT NULL,
  `etage_nasal_augmante` varchar(100) DEFAULT NULL,
  `etage_inferieur_augmante` varchar(100) DEFAULT NULL,
  `ena_diminue` varchar(100) DEFAULT NULL,
  `eia_diminue` varchar(100) DEFAULT NULL,
  `harmonieux` varchar(100) DEFAULT NULL,
  `dyharmonieux` varchar(100) DEFAULT NULL,
  `orthofrontal` varchar(100) DEFAULT NULL,
  `cisfrontal` varchar(100) DEFAULT NULL,
  `transfrontal` varchar(100) DEFAULT NULL,
  `presence_stomion` varchar(100) DEFAULT NULL,
  `absence_stomion` varchar(100) DEFAULT NULL,
  `jointive_sans_contraction_apparente` varchar(100) DEFAULT NULL,
  `rapport_anormal` text DEFAULT NULL,
  `droit` varchar(100) DEFAULT NULL,
  `devie` varchar(100) DEFAULT NULL,
  `bruit_douleurs_articulaires` varchar(100) DEFAULT NULL,
  `circonscrite` varchar(100) DEFAULT NULL,
  `anterieurer` varchar(100) DEFAULT NULL,
  `lateraler` varchar(100) DEFAULT NULL,
  `totaler` varchar(100) DEFAULT NULL,
  `circonscritef` varchar(100) DEFAULT NULL,
  `anterieuref` varchar(100) DEFAULT NULL,
  `lateralef` varchar(100) DEFAULT NULL,
  `totalef` varchar(100) DEFAULT NULL,
  `aucune_anomalie_visible` varchar(100) DEFAULT NULL,
  `decrire_anomalie` text DEFAULT NULL,
  `orifices_narinaires_arrondies` varchar(100) DEFAULT NULL,
  `retrecit_unilaterald` varchar(100) DEFAULT NULL,
  `retrecit_unilateraleg` varchar(100) DEFAULT NULL,
  `retrecissement_symetrique` varchar(100) DEFAULT NULL,
  `unilaterale_alternee` varchar(100) DEFAULT NULL,
  `unilaterale_dominante` varchar(100) DEFAULT NULL,
  `masseterine` varchar(100) DEFAULT NULL,
  `temporale` varchar(100) DEFAULT NULL,
  `les_palatales_normales` varchar(100) DEFAULT NULL,
  `anomaliep` varchar(100) DEFAULT NULL,
  `sibilantes_normales` varchar(100) DEFAULT NULL,
  `anomalies` varchar(100) DEFAULT NULL,
  `chuintantes_normales` varchar(100) DEFAULT NULL,
  `anomaliec` varchar(100) DEFAULT NULL,
  `fricatives_normales` varchar(100) DEFAULT NULL,
  `anomalief` varchar(100) DEFAULT NULL,
  `succion_digitale` varchar(100) DEFAULT NULL,
  `tetee` varchar(100) DEFAULT NULL,
  `bruxisme` varchar(100) DEFAULT NULL,
  `obnormal` varchar(100) DEFAULT NULL,
  `ob_augmante` varchar(100) DEFAULT NULL,
  `ob_diminue` varchar(100) DEFAULT NULL,
  `oj_normal` varchar(100) DEFAULT NULL,
  `oj_augmante` varchar(100) DEFAULT NULL,
  `oj_diminue` varchar(100) DEFAULT NULL,
  `media_incisif_respecte` varchar(100) DEFAULT NULL,
  `exp5` text DEFAULT NULL,
  `non_respecte` varchar(100) DEFAULT NULL,
  `exp1` text DEFAULT NULL,
  `occlusion_molaire` varchar(100) DEFAULT NULL,
  `exp2` text DEFAULT NULL,
  `bout_a_bout` varchar(100) DEFAULT NULL,
  `exp3` text DEFAULT NULL,
  `occlusion_inverse` varchar(100) DEFAULT NULL,
  `exp4` text DEFAULT NULL,
  `cl_l_symetrique` varchar(100) DEFAULT NULL,
  `cl_l_asymetrique` varchar(100) DEFAULT NULL,
  `cl_ll_symetrique` varchar(100) DEFAULT NULL,
  `cl_ll_asymetrique` varchar(100) DEFAULT NULL,
  `cl_lll_symetrique` varchar(100) DEFAULT NULL,
  `cl_lll_asymetriquec` varchar(100) DEFAULT NULL,
  `cl_ll_symetriquem` varchar(100) DEFAULT NULL,
  `cl_ll_asymetriquem` varchar(100) DEFAULT NULL,
  `cl_lll_symetriquem` varchar(100) DEFAULT NULL,
  `cl_lll_asymetriquem` varchar(100) DEFAULT NULL,
  `cl_l_symetriquec` varchar(100) DEFAULT NULL,
  `cl_l_asymetriquec` varchar(100) DEFAULT NULL,
  `cl_ll_symetriquec` varchar(100) DEFAULT NULL,
  `cl_ll_asymetriquec` varchar(100) DEFAULT NULL,
  `cl_lll_symetriquec` varchar(100) DEFAULT NULL,
  `cl_lll_asymetrique` varchar(100) DEFAULT NULL,
  `cl_l_symetriquem` varchar(100) DEFAULT NULL,
  `cl_l_asymetriquem` varchar(100) DEFAULT NULL,
  `interferenced` varchar(100) DEFAULT NULL,
  `protrusion_respecte` varchar(100) DEFAULT NULL,
  `non_respectee` varchar(100) DEFAULT NULL,
  `expp` text DEFAULT NULL,
  `canine` varchar(100) DEFAULT NULL,
  `antero_lateraled` varchar(100) DEFAULT NULL,
  `grouped` varchar(100) DEFAULT NULL,
  `antero_lateraleg` varchar(100) DEFAULT NULL,
  `groupeg` varchar(100) DEFAULT NULL,
  `interferenceg` varchar(100) DEFAULT NULL,
  `idm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `fiche_clinique`
--

INSERT INTO `fiche_clinique` (`Idf`, `symetrique`, `asymetrique`, `respecte`, `etage_nasal_augmante`, `etage_inferieur_augmante`, `ena_diminue`, `eia_diminue`, `harmonieux`, `dyharmonieux`, `orthofrontal`, `cisfrontal`, `transfrontal`, `presence_stomion`, `absence_stomion`, `jointive_sans_contraction_apparente`, `rapport_anormal`, `droit`, `devie`, `bruit_douleurs_articulaires`, `circonscrite`, `anterieurer`, `lateraler`, `totaler`, `circonscritef`, `anterieuref`, `lateralef`, `totalef`, `aucune_anomalie_visible`, `decrire_anomalie`, `orifices_narinaires_arrondies`, `retrecit_unilaterald`, `retrecit_unilateraleg`, `retrecissement_symetrique`, `unilaterale_alternee`, `unilaterale_dominante`, `masseterine`, `temporale`, `les_palatales_normales`, `anomaliep`, `sibilantes_normales`, `anomalies`, `chuintantes_normales`, `anomaliec`, `fricatives_normales`, `anomalief`, `succion_digitale`, `tetee`, `bruxisme`, `obnormal`, `ob_augmante`, `ob_diminue`, `oj_normal`, `oj_augmante`, `oj_diminue`, `media_incisif_respecte`, `exp5`, `non_respecte`, `exp1`, `occlusion_molaire`, `exp2`, `bout_a_bout`, `exp3`, `occlusion_inverse`, `exp4`, `cl_l_symetrique`, `cl_l_asymetrique`, `cl_ll_symetrique`, `cl_ll_asymetrique`, `cl_lll_symetrique`, `cl_lll_asymetriquec`, `cl_ll_symetriquem`, `cl_ll_asymetriquem`, `cl_lll_symetriquem`, `cl_lll_asymetriquem`, `cl_l_symetriquec`, `cl_l_asymetriquec`, `cl_ll_symetriquec`, `cl_ll_asymetriquec`, `cl_lll_symetriquec`, `cl_lll_asymetrique`, `cl_l_symetriquem`, `cl_l_asymetriquem`, `interferenced`, `protrusion_respecte`, `non_respectee`, `expp`, `canine`, `antero_lateraled`, `grouped`, `antero_lateraleg`, `groupeg`, `interferenceg`, `idm`) VALUES
(4, 'symetrique', NULL, NULL, NULL, NULL, 'ena_diminué', NULL, 'harmonieux', 'dyharmonieux', NULL, NULL, NULL, 'présence de stomion', NULL, NULL, 'hello', NULL, NULL, 'bruit,:douleurs articulaires', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, '', NULL, '', 'occlusion_inversée', '', 'classe d’angle  canines cl l symetrique', 'classe d’angle  canines cl l asymetrique', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'interférenced', NULL, NULL, '', 'latéralité D canine', NULL, NULL, NULL, NULL, NULL, 8),
(6, 'symetrique', NULL, NULL, NULL, 'Etage inférieur  augmenté ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jointive sans contraction apparente', 'afeae', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 11);

-- --------------------------------------------------------

--
-- Structure de la table `inst-anom`
--

CREATE TABLE `inst-anom` (
  `idi` int(11) NOT NULL,
  `anomalie` varchar(500) NOT NULL,
  `date anomalie` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `instrument`
--

CREATE TABLE `instrument` (
  `idi` int(11) NOT NULL,
  `type` varchar(40) NOT NULL,
  `dateArrive` date NOT NULL,
  `idp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `instrument`
--

INSERT INTO `instrument` (`idi`, `type`, `dateArrive`, `idp`) VALUES
(1, 'm', '2022-05-25', 4),
(2, 'm', '2022-05-26', 4);

-- --------------------------------------------------------

--
-- Structure de la table `liste`
--

CREATE TABLE `liste` (
  `idl` int(11) NOT NULL,
  `date-db-cons` date NOT NULL,
  `date-fn-cons` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `malade`
--

CREATE TABLE `malade` (
  `idm` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `Prenom` varchar(25) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `DateNaissance` date NOT NULL,
  `age` int(3) NOT NULL,
  `adresse` text NOT NULL,
  `telephone` int(10) NOT NULL,
  `idf` int(11) NOT NULL,
  `idp` int(6) NOT NULL,
  `workOn` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `malade`
--

INSERT INTO `malade` (`idm`, `nom`, `Prenom`, `genre`, `DateNaissance`, `age`, `adresse`, `telephone`, `idf`, `idp`, `workOn`) VALUES
(8, 'ilyes', 'bou', 'male', '2022-06-13', 23, 'fdfdf', 1131141414, 5, 1, 7),
(11, 'ha', 'bou', 'female', '2022-06-19', 14, 'fdfdf', 0, 7, 1, 7),
(12, 'djo', 'djo', 'male', '2022-06-24', 23, 'faea', 1233441124, 0, 5, 7),
(13, 'chef', 'bou', 'male', '0000-00-00', 23, 'faea', 1233441124, 0, 7, 7);

-- --------------------------------------------------------

--
-- Structure de la table `per-cong`
--

CREATE TABLE `per-cong` (
  `idp` int(6) NOT NULL,
  `idc` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `idpr` int(11) NOT NULL,
  `Nature` varchar(40) NOT NULL,
  `dateArrive` date NOT NULL,
  `quantite` int(4) NOT NULL,
  `idp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`idpr`, `Nature`, `dateArrive`, `quantite`, `idp`) VALUES
(2, 'hj', '2022-05-23', 1, 4),
(3, 'hj', '2022-05-15', 1, 4),
(4, 'hj', '2022-05-15', 1, 4),
(5, 'hj', '2022-06-16', 4, 4),
(6, 'hj', '2022-06-16', 4, 4),
(7, 'hj', '2022-06-16', 4, 4),
(8, 'hj', '2022-06-16', 4, 4);

-- --------------------------------------------------------

--
-- Structure de la table `prsnl`
--

CREATE TABLE `prsnl` (
  `idp` int(6) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(25) NOT NULL,
  `Profil` varchar(25) NOT NULL,
  `DateRecrutement` date NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `prsnl`
--

INSERT INTO `prsnl` (`idp`, `Nom`, `Prenom`, `Profil`, `DateRecrutement`, `password`) VALUES
(1, 'admin', 'admin', 'secretaire', '2000-10-25', 'admin'),
(4, 'ilyes', 'bou', 'paramedical', '2022-05-13', 'ilyes'),
(5, 'chef', 'chef', 'chef_service', '2022-05-19', 'chef'),
(6, 'resident', 'resident', 'resident', '2022-05-12', 'resident'),
(7, 'assistant', 'assistant', 'maitre_assistant', '2022-05-14', 'assistant'),
(8, 'djo', 'djo', 'secretaire', '2022-06-14', 'djo');

-- --------------------------------------------------------

--
-- Structure de la table `select-ajout`
--

CREATE TABLE `select-ajout` (
  `idp` int(11) NOT NULL,
  `idm` int(11) NOT NULL,
  `idl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `tableau`
--

CREATE TABLE `tableau` (
  `idt` int(6) NOT NULL,
  `idpt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `équip-anoma`
--

CREATE TABLE `équip-anoma` (
  `ide` int(11) NOT NULL,
  `e-anomalie` varchar(500) NOT NULL,
  `date-anomalie` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `dispatcher-mld`
--
ALTER TABLE `dispatcher-mld`
  ADD PRIMARY KEY (`idp`,`idl`,`idt`),
  ADD KEY `idp` (`idp`,`idl`,`idt`),
  ADD KEY `idl` (`idl`),
  ADD KEY `idt` (`idt`);

--
-- Index pour la table `equipement`
--
ALTER TABLE `equipement`
  ADD PRIMARY KEY (`ide`),
  ADD KEY `idp` (`idp`);

--
-- Index pour la table `fiche_clinique`
--
ALTER TABLE `fiche_clinique`
  ADD PRIMARY KEY (`Idf`);

--
-- Index pour la table `inst-anom`
--
ALTER TABLE `inst-anom`
  ADD PRIMARY KEY (`idi`,`anomalie`,`date anomalie`),
  ADD KEY `idi` (`idi`);

--
-- Index pour la table `instrument`
--
ALTER TABLE `instrument`
  ADD PRIMARY KEY (`idi`),
  ADD KEY `idp` (`idp`);

--
-- Index pour la table `liste`
--
ALTER TABLE `liste`
  ADD PRIMARY KEY (`idl`);

--
-- Index pour la table `malade`
--
ALTER TABLE `malade`
  ADD PRIMARY KEY (`idm`),
  ADD KEY `idpc` (`idf`),
  ADD KEY `idpc_2` (`idf`),
  ADD KEY `idf` (`idf`);

--
-- Index pour la table `per-cong`
--
ALTER TABLE `per-cong`
  ADD PRIMARY KEY (`idp`,`idc`),
  ADD KEY `idp` (`idp`),
  ADD KEY `idp_2` (`idp`),
  ADD KEY `idp_3` (`idp`),
  ADD KEY `idp_4` (`idp`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`idpr`),
  ADD KEY `idp` (`idp`);

--
-- Index pour la table `prsnl`
--
ALTER TABLE `prsnl`
  ADD PRIMARY KEY (`idp`);

--
-- Index pour la table `select-ajout`
--
ALTER TABLE `select-ajout`
  ADD PRIMARY KEY (`idp`,`idm`,`idl`),
  ADD KEY `idp` (`idp`,`idm`,`idl`),
  ADD KEY `idl` (`idl`),
  ADD KEY `idm` (`idm`);

--
-- Index pour la table `tableau`
--
ALTER TABLE `tableau`
  ADD PRIMARY KEY (`idt`),
  ADD KEY `idpt` (`idpt`);

--
-- Index pour la table `équip-anoma`
--
ALTER TABLE `équip-anoma`
  ADD PRIMARY KEY (`ide`,`e-anomalie`,`date-anomalie`),
  ADD KEY `ide` (`ide`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `equipement`
--
ALTER TABLE `equipement`
  MODIFY `ide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `fiche_clinique`
--
ALTER TABLE `fiche_clinique`
  MODIFY `Idf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `instrument`
--
ALTER TABLE `instrument`
  MODIFY `idi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `liste`
--
ALTER TABLE `liste`
  MODIFY `idl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `malade`
--
ALTER TABLE `malade`
  MODIFY `idm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `idpr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `prsnl`
--
ALTER TABLE `prsnl`
  MODIFY `idp` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `tableau`
--
ALTER TABLE `tableau`
  MODIFY `idt` int(6) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `dispatcher-mld`
--
ALTER TABLE `dispatcher-mld`
  ADD CONSTRAINT `dispatcher-mld_ibfk_1` FOREIGN KEY (`idp`) REFERENCES `prsnl` (`idp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dispatcher-mld_ibfk_2` FOREIGN KEY (`idl`) REFERENCES `liste` (`idl`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dispatcher-mld_ibfk_3` FOREIGN KEY (`idt`) REFERENCES `tableau` (`idt`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `equipement`
--
ALTER TABLE `equipement`
  ADD CONSTRAINT `equipement_ibfk_1` FOREIGN KEY (`idp`) REFERENCES `prsnl` (`idp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `inst-anom`
--
ALTER TABLE `inst-anom`
  ADD CONSTRAINT `inst-anom_ibfk_1` FOREIGN KEY (`idi`) REFERENCES `instrument` (`idi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `instrument`
--
ALTER TABLE `instrument`
  ADD CONSTRAINT `instrument_ibfk_1` FOREIGN KEY (`idp`) REFERENCES `prsnl` (`idp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `per-cong`
--
ALTER TABLE `per-cong`
  ADD CONSTRAINT `per-cong_ibfk_1` FOREIGN KEY (`idp`) REFERENCES `prsnl` (`idp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_ibfk_1` FOREIGN KEY (`idp`) REFERENCES `prsnl` (`idp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `select-ajout`
--
ALTER TABLE `select-ajout`
  ADD CONSTRAINT `select-ajout_ibfk_1` FOREIGN KEY (`idl`) REFERENCES `liste` (`idl`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `select-ajout_ibfk_2` FOREIGN KEY (`idm`) REFERENCES `malade` (`idm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `select-ajout_ibfk_3` FOREIGN KEY (`idp`) REFERENCES `prsnl` (`idp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tableau`
--
ALTER TABLE `tableau`
  ADD CONSTRAINT `tableau_ibfk_1` FOREIGN KEY (`idpt`) REFERENCES `prsnl` (`idp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `équip-anoma`
--
ALTER TABLE `équip-anoma`
  ADD CONSTRAINT `équip-anoma_ibfk_1` FOREIGN KEY (`ide`) REFERENCES `equipement` (`ide`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
