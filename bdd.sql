-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mer. 19 juin 2019 à 11:12
-- Version du serveur :  5.7.25
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `champagne`
--

-- --------------------------------------------------------

--
-- Structure de la table `bouteilles`
--

CREATE TABLE `bouteilles` (
  `id` int(11) NOT NULL,
  `domaine` varchar(255) NOT NULL,
  `millesime` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` double NOT NULL,
  `note` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bouteilles`
--

INSERT INTO `bouteilles` (`id`, `domaine`, `millesime`, `quantite`, `prix`, `note`) VALUES
(6, 'Beaujolais', 1999, 0, 1, 10),
(10, 'Bordeaux', 1987, 6, 18, 8),
(11, 'ss', 11, 11, 11, 10);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bouteilles`
--
ALTER TABLE `bouteilles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bouteilles`
--
ALTER TABLE `bouteilles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
