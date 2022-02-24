-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 24 fév. 2022 à 10:05
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fripe`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id_an` int(11) NOT NULL,
  `titre_an` varchar(2000) DEFAULT NULL,
  `prix_an` double DEFAULT NULL,
  `description_an` longtext DEFAULT NULL,
  `date_pub_an` varchar(20) DEFAULT NULL,
  `couleur_an` varchar(200) DEFAULT NULL,
  `region_an` varchar(20) DEFAULT NULL,
  `id_marque` int(11) DEFAULT NULL,
  `id_categorie` int(11) DEFAULT NULL,
  `taille` varchar(50) DEFAULT NULL,
  `id_pers` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id_an`, `titre_an`, `prix_an`, `description_an`, `date_pub_an`, `couleur_an`, `region_an`, `id_marque`, `id_categorie`, `taille`, `id_pers`, `status`) VALUES
(70, 'pull', 20, 'Votre description ici !\r\n                                        ', '2022-01-09', 'rouge', '1 - Ain', 2, 1, 'L', 1, 'Accepte'),
(72, 't-shert', 10, 'Votre description ici !\r\n                                        ', '2022-01-10', 'noir', '1 - Ain', 1, 1, 'S', 1, 'Accepte'),
(73, 'test', 20, 'Votre description ici !\r\n                                        ', '2022-01-10', 'kjbkj', '1 - Ain', 1, 1, 'S', 1, 'Accepte'),
(74, 'Robe pour fille', 6, 'Votre description ici !\r\n                                        ', '2022-01-18', 'noire et blanche', '75 - Paris', 1, 5, 'S', 1, 'Accepte'),
(75, 'T-shirt kenzo', 25, 'Votre description ici !\r\n                                        ', '2022-01-18', 'noir', '38 - Isère', 16, 1, 'S', 1, 'Accepte'),
(76, 'Débardeur Kenzo', 43, 'Votre description ici !\r\n                                        ', '2022-01-18', 'gris', '1 - Ain', 16, 4, 'M', 1, 'Accepte'),
(77, 'Pantalon h&m', 5, 'Votre description ici !\r\n                                        ', '2022-01-18', 'Bleu / Ciel', '1 - Ain', 1, 4, 'XS', 1, 'Accepte'),
(78, 'Jupes H&M', 3, 'Votre description ici !\r\n                                        ', '2022-01-18', 'noir marron gris', '75 - Paris', 1, 4, 'XXL', 1, 'Accepte'),
(79, 'Salopette H&M', 12, 'Votre description ici !\r\n                                        ', '2022-01-18', 'noir', '38 - Isère', 1, 5, 'XS', 1, 'Accepte'),
(80, 'Chaussure Adidas', 30, 'Votre description ici !\r\n                                        ', '2022-01-18', 'Blanc', '1 - Ain', 3, 1, 'S', 1, 'Accepte'),
(81, 'Chaussure Adidas', 20, 'Votre description ici !\r\n                                        ', '2022-01-18', 'Bleu / Ciel', '1 - Ain', 1, 4, 'S', 1, 'Accepte'),
(82, 'Basquette Nike', 10, 'Votre description ici !\r\n                                        ', '2022-02-23', 'Noir', '1 - Ain', 2, 1, 'S', 1, 'Accepte'),
(83, 'Basquette Nike', 25, 'Votre description ici !\r\n                                        ', '2022-02-23', 'Noir', '1 - Ain', 2, 1, 'S', 1, 'Accepte'),
(84, 'Jogging Nike', 18, 'Votre description ici !\r\n                                        ', '2022-02-23', 'Noir', '1 - Ain', 2, 1, 'S', 1, 'Accepte'),
(85, 'Adidas', 17, 'Un pull est un teeshirt blanc adidas', '2022-02-23', 'Noir', '75 - Paris', 1, 4, 'XS', 16, 'non accepte'),
(86, '3 Adidas', 30, 'Votre description ici !\r\n                                        ', '2022-02-23', 'Gris / Anthracite', '1 - Ain', 3, 5, 'XS', 1, 'Accepte');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom_cat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom_cat`) VALUES
(1, 'Homme'),
(4, 'Femme'),
(5, 'Enfant');

-- --------------------------------------------------------

--
-- Structure de la table `contient`
--

CREATE TABLE `contient` (
  `id_cat` int(11) NOT NULL,
  `id_sous` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contient`
--

INSERT INTO `contient` (`id_cat`, `id_sous`) VALUES
(1, 4),
(1, 5),
(1, 6),
(4, 4),
(4, 5),
(4, 6),
(4, 7),
(5, 5),
(5, 7);

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE `marque` (
  `id` int(11) NOT NULL,
  `nom_marq` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`id`, `nom_marq`) VALUES
(1, 'HM'),
(2, 'Nike'),
(3, 'Adidas'),
(4, 'Gant'),
(5, 'The North Face'),
(16, 'Kenzo');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id` int(11) NOT NULL,
  `id_role` int(11) DEFAULT NULL,
  `nom_pers` varchar(200) DEFAULT NULL,
  `prenom_pers` varchar(100) DEFAULT NULL,
  `email_pers` varchar(100) DEFAULT NULL,
  `mdp_pers` varchar(200) DEFAULT NULL,
  `tel_pers` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id`, `id_role`, `nom_pers`, `prenom_pers`, `email_pers`, `mdp_pers`, `tel_pers`, `status`) VALUES
(1, 1, 'ABDELKEFI', 'Alaeddine', 'alaeddine@gmail.com', '123', '0628636730', 'Accepte'),
(14, 2, 'Martin', 'Pierre', 'pierre@gmail.com', '123', '0620418520', 'Accepte'),
(15, 2, 'Bernard', 'Philippe', 'philippe@fgdg.fr', '123', '0651279631', 'Accepte'),
(16, 2, 'Thomas', 'Alain', 'alain@gmail.com', '123', '0671546687', 'Accepte'),
(17, 2, 'Robert', 'Nathalie', 'nathalie@gmail.com', '123', '0655472210', 'non accepte'),
(18, 2, 'Richard', 'Monique', 'monique@gmail.com', '123', '0699974123', 'non accepte'),
(19, 2, 'Durand', 'Sylvie', 'sylvie@gmail.com', '123', '0630478210', 'Accepte');

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `nom_photo` varchar(2000) NOT NULL,
  `id_an` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `photo`
--

INSERT INTO `photo` (`id`, `nom_photo`, `id_an`) VALUES
(35, 'photo_22OjHQ87.jpg', 70),
(38, 'photo_sL62BHrL.jpg', 72),
(39, 'photo_d00lI192.jpg', 72),
(40, 'photo_fW4vZ2dI.jpg', 73),
(41, 'photo_xRZr7Z5B.jpg', 74),
(42, 'photo_1QA8FS8A.jpg', 74),
(43, 'photo_xI5eXNkI.jpg', 75),
(44, 'photo_45Ps3RaH.jpg', 75),
(45, 'photo_5TJbJ8dQ.jpg', 75),
(46, 'photo_m6Ms1PfW.jpg', 75),
(47, 'photo_p8A0F6jK.jpg', 75),
(48, 'photo_r0XqFIjY.jpg', 76),
(49, 'photo_bHShYUmN.jpg', 76),
(50, 'photo_7KT6T1rR.jpg', 76),
(51, 'photo_aJM24GbB.jpg', 77),
(52, 'photo_kWZk5ZhQ.jpg', 77),
(53, 'photo_88AvDJkU.jpg', 78),
(54, 'photo_uD3kO8hG.jpg', 78),
(55, 'photo_6OZwTVb9.jpg', 78),
(56, 'photo_s0ViO8s9.jpg', 79),
(57, 'photo_pYXeWMjU.jpg', 79),
(58, 'photo_549g7CvZ.jpg', 79),
(59, 'photo_2XCpYS42.jpg', 80),
(60, 'photo_fLUt0CnM.jpg', 80),
(61, 'photo_sCY4QUrW.jpg', 80),
(62, 'photo_6Z1xMEdH.jpg', 81),
(63, 'photo_mA9eM0aM.jpg', 81),
(64, 'photo_sP34ER1Q.jpg', 81),
(65, 'photo_e8CdN7wD.jpg', 82),
(66, 'photo_kB8d62wK.jpg', 82),
(67, 'photo_lAW9RVpS.jpg', 83),
(68, 'photo_rYC4VEb6.jpg', 83),
(69, 'photo_v47mITa9.jpg', 83),
(70, 'photo_hBO4V1h9.jpg', 84),
(71, 'photo_24Vt54h4.jpg', 84),
(72, 'photo_c8RaETxD.jpg', 85),
(73, 'photo_a8WmJ0a0.jpg', 85),
(74, 'photo_vB0v4VkP.jpg', 86),
(75, 'photo_j5CiQRnS.jpg', 86),
(76, 'photo_8IMnK1xX.jpg', 86);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `type_role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `type_role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Structure de la table `sous_categorie`
--

CREATE TABLE `sous_categorie` (
  `id_sous` int(11) NOT NULL,
  `nom_sous_cat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sous_categorie`
--

INSERT INTO `sous_categorie` (`id_sous`, `nom_sous_cat`) VALUES
(4, 'pull'),
(5, 'pantalon'),
(6, 'basquette'),
(7, 'Robe');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id_an`),
  ADD KEY `id_categorie` (`id_categorie`),
  ADD KEY `annonce_ibfk_2` (`id_marque`),
  ADD KEY `annonce_ibfk_3` (`id_pers`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contient`
--
ALTER TABLE `contient`
  ADD PRIMARY KEY (`id_cat`,`id_sous`),
  ADD KEY `id_sous` (`id_sous`);

--
-- Index pour la table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_role` (`id_role`);

--
-- Index pour la table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_an` (`id_an`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sous_categorie`
--
ALTER TABLE `sous_categorie`
  ADD PRIMARY KEY (`id_sous`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id_an` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `marque`
--
ALTER TABLE `marque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `sous_categorie`
--
ALTER TABLE `sous_categorie`
  MODIFY `id_sous` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `annonce_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `annonce_ibfk_2` FOREIGN KEY (`id_marque`) REFERENCES `marque` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `annonce_ibfk_3` FOREIGN KEY (`id_pers`) REFERENCES `personne` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `contient`
--
ALTER TABLE `contient`
  ADD CONSTRAINT `contient_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `categorie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contient_ibfk_2` FOREIGN KEY (`id_sous`) REFERENCES `sous_categorie` (`id_sous`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `personne`
--
ALTER TABLE `personne`
  ADD CONSTRAINT `personne_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`);

--
-- Contraintes pour la table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`id_an`) REFERENCES `annonce` (`id_an`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
