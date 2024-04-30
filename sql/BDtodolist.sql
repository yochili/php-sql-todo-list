-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 30 avr. 2024 à 22:09
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
-- Base de données : `todolist`
--

-- --------------------------------------------------------

--
-- Structure de la table `tache`
--

CREATE TABLE `tache` (
  `id` int(11) NOT NULL,
  `info` varchar(255) DEFAULT NULL,
  `date_ajout` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `finished` tinyint(1) NOT NULL DEFAULT 0,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tache`
--

INSERT INTO `tache` (`id`, `info`, `date_ajout`, `finished`, `id_user`) VALUES
(3, 'AMV shy', '2023-11-29 22:10:48', 0, 1),
(4, 'bof 4', '2023-11-19 21:38:47', 1, 2),
(8, 'bla bla', '2023-11-19 21:38:47', 1, 2),
(10, 'bof 5', '2023-11-28 09:46:56', 1, 2),
(11, 'Poster sur youtube', '2023-11-29 22:10:41', 0, 2),
(12, 'Poster sur youtube', '2023-11-29 22:10:54', 0, 1),
(14, 'manger dormir pleurer, en passant par faire le menage continuer de dormir, manger dormir pleurer, en passant par faire le menage continuer de dormir', '2023-11-29 22:11:00', 0, 1),
(18, 'ekfekjejaked,', '2023-12-03 12:22:42', 1, 1),
(19, 'efknefneneene', '2023-11-29 22:00:53', 1, 2),
(20, 'edededended', '2023-11-29 22:00:53', 1, 1),
(21, 'edede,', '2023-11-29 22:00:53', 1, 1),
(24, 'bien le bonjour', '2023-11-30 00:53:01', 0, 1),
(25, 'zdzdknz', '2023-11-30 00:53:31', 0, 1),
(26, '<script>alert(\"injection reussi\")</script>', '2023-12-03 17:19:12', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `password`) VALUES
(1, 'yochili', 'yochilipass'),
(2, 'bof', 'bofpass');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tache`
--
ALTER TABLE `tache`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tache`
--
ALTER TABLE `tache`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
