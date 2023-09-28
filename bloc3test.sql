-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 09 juin 2023 à 11:22
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bloc3test`
--

-- --------------------------------------------------------

--
-- Structure de la table `texts`
--

CREATE TABLE `texts` (
  `id_text` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `texts`
--

INSERT INTO `texts` (`id_text`, `title`, `text`, `created_at`, `id_user`) VALUES
(1, 'Mon premier texte', 'Ceci est une histoire géniale. ', '2023-06-06 09:22:30', 1),
(2, 'Mon dexieme texte', 'Ceci est une autre histoire géniale', '2023-06-06 09:24:00', 1),
(8, 'sgdfsd', 'drfgdg', '2023-06-07 11:27:46', 4);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `name_user`, `password`, `create_at`) VALUES
(1, 'aaa', 'aaa', '2023-06-06 09:14:44'),
(2, 'bbb', 'bbb', '2023-06-06 09:42:12'),
(3, 'ccc', 'ccc', '2023-06-06 13:03:18'),
(4, 'florian', 'flo', '2023-06-07 11:22:00'),
(5, 'guillaume', 'gui', '2023-06-07 11:43:44'),
(6, 'zzz', 'zzz', '2023-06-07 11:45:27'),
(7, 'chris', 'chris', '2023-06-07 11:48:54'),
(8, 'aaaa', 'aaaa', '2023-06-07 11:49:58'),
(9, 'adeu', 'adeu', '2023-06-07 11:52:07'),
(10, 'eeee', 'eeee', '2023-06-07 11:53:17'),
(11, 'fffff', 'fffff', '2023-06-07 11:57:40'),
(12, 'aaaaa', 'aaaaa', '2023-06-07 11:59:54'),
(13, 'bbbbb', 'bbbbb', '2023-06-07 12:01:09'),
(14, 'bbbbb', 'bbbbb', '2023-06-07 12:01:42'),
(15, 'bbbbb', 'bbbbb', '2023-06-07 12:03:13'),
(16, 'qqq', 'qqq', '2023-06-07 12:04:28'),
(17, 'qqqq', 'qqqq', '2023-06-07 12:04:53'),
(18, 'sss', 'sss', '2023-06-07 12:05:13');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `texts`
--
ALTER TABLE `texts`
  ADD PRIMARY KEY (`id_text`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `texts`
--
ALTER TABLE `texts`
  MODIFY `id_text` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
