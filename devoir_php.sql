-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 11 avr. 2023 à 23:13
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `devoir_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_cat` int(11) NOT NULL,
  `lib_cat` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `lib_cat`) VALUES
(1, 'Automobile');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nom_client` varchar(128) NOT NULL,
  `tel_client` varchar(15) NOT NULL,
  `autreinfo_client` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `detailler`
--

CREATE TABLE `detailler` (
  `id_prod` varchar(5) NOT NULL,
  `id_fact` int(11) NOT NULL,
  `qte_det` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `id_fact` int(11) NOT NULL,
  `id_four` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `date_fact` date NOT NULL,
  `remise_fact` int(11) DEFAULT NULL,
  `livraison_fact` datetime DEFAULT NULL,
  `obserb_fact` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `id_four` int(11) NOT NULL,
  `sigle_four` varchar(10) NOT NULL,
  `lib_four` varchar(255) NOT NULL,
  `tel_four` varchar(15) NOT NULL,
  `email_four` varchar(255) DEFAULT NULL,
  `autreinfo_four` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `information`
--

CREATE TABLE `information` (
  `nom` varchar(30) NOT NULL,
  `prenoms` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mdp` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `information`
--

INSERT INTO `information` (`nom`, `prenoms`, `email`, `mdp`) VALUES
('clara', 'ficti', 'sozi@gmail.com', '0'),
('fakir', 'titi', 'titir@gmail.com', '$2y$10$ISB7wzOMw7yxtRKSpGdnCu7zoEQCwVyd9YexJg88pxymA4RljuM86'),
('GOMEZ', 'Joseph', 'justfortest@gmail.com', '0');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_prod` varchar(5) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `lib_prod` varchar(128) NOT NULL,
  `pu_prod` int(11) NOT NULL,
  `info_prod` text DEFAULT NULL COMMENT 'informations supplementaires du produit',
  `img_prod` varchar(255) NOT NULL COMMENT 'une image du produit'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `detailler`
--
ALTER TABLE `detailler`
  ADD PRIMARY KEY (`id_prod`,`id_fact`),
  ADD KEY `fk_detailler2` (`id_fact`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`id_fact`),
  ADD KEY `fk_gerer` (`id_four`),
  ADD KEY `fk_soumettre` (`id_client`);

--
-- Index pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`id_four`);

--
-- Index pour la table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`nom`,`prenoms`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_prod`),
  ADD KEY `fk_contenir` (`id_cat`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `id_fact` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  MODIFY `id_four` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `detailler`
--
ALTER TABLE `detailler`
  ADD CONSTRAINT `fk_detailler` FOREIGN KEY (`id_prod`) REFERENCES `produit` (`id_prod`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_detailler2` FOREIGN KEY (`id_fact`) REFERENCES `facture` (`id_fact`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `fk_gerer` FOREIGN KEY (`id_four`) REFERENCES `fournisseur` (`id_four`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_soumettre` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `fk_contenir` FOREIGN KEY (`id_cat`) REFERENCES `categorie` (`id_cat`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
