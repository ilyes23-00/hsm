-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 13 juin 2022 à 13:00
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
CREATE DATABASE IF NOT EXISTS `hospital` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hospital`;

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
  `idp` int(11) NOT NULL,
  `anomalies` varchar(255) NOT NULL,
  `Dateanomalies` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `equipement`
--

INSERT INTO `equipement` (`ide`, `type`, `dateArrive`, `idp`, `anomalies`, `Dateanomalies`) VALUES
(1, 'm', '2022-05-22', 1, '', ''),
(2, 'ca', '2022-05-19', 5, '', ''),
(3, 'djo', '2022-06-24', 8, '', ''),
(4, 'm', '2022-06-09', 5, 'ae', 'dd');

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
(6, 'symetrique', NULL, NULL, NULL, 'Etage inférieur  augmenté ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jointive sans contraction apparente', 'afeae', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 11),
(8, 'symetrique', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 12);

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
  `idp` int(11) NOT NULL,
  `anomalie` varchar(200) NOT NULL,
  `Dateanomalie` varchar(200) NOT NULL,
  `QuantiteAnomalie` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `instrument`
--

INSERT INTO `instrument` (`idi`, `type`, `dateArrive`, `idp`, `anomalie`, `Dateanomalie`, `QuantiteAnomalie`) VALUES
(1, 'm', '2022-05-25', 4, '', '', ''),
(2, 'm', '2022-05-26', 4, '', '', ''),
(3, 'djo', '2022-06-09', 5, 'aef', '2022-06-05', '2'),
(4, 'djo', '2022-06-23', 5, 'aef', '2022-06-05', '1'),
(5, 'djo', '2022-06-23', 5, 'aef', '2022-06-05', '1'),
(6, 'djo', '2022-06-23', 5, 'aef', '2022-06-05', '1'),
(7, 'djo', '2022-06-23', 5, 'aef', '2022-06-05', '1'),
(8, 'djo', '2022-06-23', 5, 'aef', '2022-06-05', '1'),
(9, 'djo', '2022-06-23', 5, 'aef', '2022-06-05', '1');

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
(12, 'djo', 'djo', 'male', '2022-06-24', 23, 'faea', 1233441124, 8, 5, 7),
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
  MODIFY `ide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `fiche_clinique`
--
ALTER TABLE `fiche_clinique`
  MODIFY `Idf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `instrument`
--
ALTER TABLE `instrument`
  MODIFY `idi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
--
-- Base de données : `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Structure de la table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Structure de la table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Structure de la table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Structure de la table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Structure de la table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Structure de la table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Structure de la table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Déchargement des données de la table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"hospital\",\"table\":\"equipement\"},{\"db\":\"hospital\",\"table\":\"prsnl\"},{\"db\":\"hospital\",\"table\":\"instrument\"},{\"db\":\"hospital\",\"table\":\"malade\"}]');

-- --------------------------------------------------------

--
-- Structure de la table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Structure de la table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Structure de la table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Déchargement des données de la table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2022-06-13 10:44:57', '{\"Console\\/Mode\":\"collapse\",\"lang\":\"fr\"}');

-- --------------------------------------------------------

--
-- Structure de la table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Structure de la table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Index pour la table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Index pour la table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Index pour la table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Index pour la table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Index pour la table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Index pour la table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Index pour la table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Index pour la table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Index pour la table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Index pour la table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Index pour la table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Index pour la table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Index pour la table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Base de données : `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Base de données : `thedoctors`
--
CREATE DATABASE IF NOT EXISTS `thedoctors` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `thedoctors`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
