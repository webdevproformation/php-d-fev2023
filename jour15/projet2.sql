-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 17 fév. 2023 à 09:21
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
-- Base de données : `projet`
--
CREATE DATABASE IF NOT EXISTS `projet` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `projet`;

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `dt_creation` datetime NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pages`
--

INSERT INTO `pages` (`id`, `titre`, `slug`, `contenu`, `dt_creation`, `auteur`, `image`) VALUES
(1, 'coucou les amis', 'accueil', '<h1>Titre 1 modification du titre</h1>\n<p>Ut condimentum auctor purus, eu<strong> hendrerit ante maximus at.</strong> Cras ultricies lectus diam, eget efficitur magna dapibus a. Aenean arcu dolor, tincidunt et semper non, iaculis rutrum libero. Nullam maximus nunc vel enim laoreet fringilla. Suspendisse et mattis turpis. Vestibulum eget magna quis lorem convallis consequat. Donec et augue sed enim hendrerit tempor. Duis pulvinar quis sapien quis sodales. Mauris dictum vestibulum hendrerit. Etiam semper, sapien vitae gravida venenatis, arcu tortor tempus dolor, quis aliquam arcu lorem ac nisi. Praesent lectus lectus, finibus ut massa in, commodo ultrices nulla. Praesent placerat mattis congue. Morbi eget imperdiet ligula. Etiam consequat dictum sapien ac feugiat. Donec laoreet dui at dui ultricies, non varius felis ultricies. Vivamus non egestas sapien.</p>\n<p>Vivamus vitae nisi metus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec tempus metus quis ante efficitur viverra. Ut euismod eget mi et semper. Duis a bibendum enim. Quisque pretium magna id nisl condimentum, in fermentum dolor bibendum. Suspendisse fermentum mauris sed risus porta, ac lacinia turpis maximus. Nulla venenatis hendrerit lectus vestibulum hendrerit. Proin velit libero, mattis non laoreet ut, rhoncus quis neque. Donec iaculis volutpat tempus.&nbsp;</p>\n<h2>Du Lorem</h2>\n<p>&nbsp;Ut condimentum auctor purus, eu hendrerit ante maximus at. Cras ultricies lectus diam, eget efficitur magna dapibus a. Aenean arcu dolor, tincidunt et semper non, iaculis rutrum libero. Nullam maximus nunc vel enim laoreet fringilla. Suspendisse et mattis turpis. Vestibulum eget magna quis lorem convallis consequat. Donec et augue sed enim hendrerit tempor. Duis pulvinar quis sapien quis sodales. Mauris dictum vestibulum hendrerit. Etiam semper, sapien vitae gravida venenatis, arcu tortor tempus dolor, quis aliquam arcu lorem ac nisi. Praesent lectus lectus, finibus ut massa in, commodo ultrices nulla. Praesent placerat mattis congue. Morbi eget imperdiet ligula. Etiam consequat dictum sapien ac feugiat. Donec laoreet dui at dui ultricies, non varius felis ultricies. Vivamus non egestas sapien.</p>\n<p>Vivamus vitae nisi metus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec tempus metus quis ante efficitur viverra. Ut euismod eget mi et semper. Duis a bibendum enim. Quisque pretium magna id nisl condimentum, in fermentum dolor bibendum. Suspendisse fermentum mauris sed risus porta, ac lacinia turpis maximus. Nulla venenatis hendrerit lectus vestibulum hendrerit. Proin velit libero, mattis non laoreet ut, rhoncus quis neque. Donec iaculis volutpat tempus.&nbsp;</p>', '2023-02-14 09:42:51', 'Alain', 'https://source.unsplash.com/random/1500x300'),
(2, 'presentation', 'presentation', '<p>presentation</p>', '2023-02-14 09:46:10', 'Malik', 'https://source.unsplash.com/random/1500x401'),
(3, 'mentions légales', 'mentions-legales', '<p>orem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sagittis pulvinar ante non fringilla. Ut at arcu non enim tempor tempus. Vestibulum ullamcorper, magna at porttitor ullamcorper, arcu lacus varius orci, varius condimentum lectus purus vel felis. Nullam ac convallis metus, a molestie magna. Quisque ligula sapien, faucibus ac tempus eget, sollicitudin et lorem. Phasellus ornare nec nunc sit amet lobortis. Nulla facilisi. Nunc pulvinar nunc et felis facilisis, sit amet vulputate magna suscipit. Sed luctus enim ante, vel eleifend massa venenatis at. Aliquam a nibh porta ex imperdiet faucibus a sollicitudin justo. Phasellus sollicitudin ipsum vitae orci placerat, quis pretium eros gravida. Etiam id velit purus. Cras accumsan risus nisl, quis iaculis est tempor malesuada. Maecenas pretium fringilla mauris, vitae fringilla nibh viverra accumsan. Nunc posuere urna nec finibus tincidunt. Aliquam viverra pretium pulvinar.</p>\r\n<p>Nulla sollicitudin, ex id lobortis elementum, tortor sapien mattis dui, ut commodo orci diam a lorem. Aliquam at augue lorem. In dolor ante, dignissim a erat placerat, porttitor egestas ex. Fusce nec commodo dolor, sit amet ornare arcu. Fusce sem dolor, aliquet ut tincidunt id, vehicula quis ex. Vestibulum sit amet lacinia augue, efficitur pulvinar ante. Vestibulum est lorem, rutrum a ultricies quis, blandit sit amet libero. Donec nec erat semper, ornare libero nec, fringilla nulla. Aliquam nibh mi, vulputate eget risus vel, sollicitudin commodo diam. Pellentesque a imperdiet tellus.</p>\r\n<p>Ut condimentum auctor purus, eu hendrerit ante maximus at. Cras ultricies lectus diam, eget efficitur magna dapibus a. Aenean arcu dolor, tincidunt et semper non, iaculis rutrum libero. Nullam maximus nunc vel enim laoreet fringilla. Suspendisse et mattis turpis. Vestibulum eget magna quis lorem convallis consequat. Donec et augue sed enim hendrerit tempor. Duis pulvinar quis sapien quis sodales. Mauris dictum vestibulum hendrerit. Etiam semper, sapien vitae gravida venenatis, arcu tortor tempus dolor, quis aliquam arcu lorem ac nisi. Praesent lectus lectus, finibus ut massa in, commodo ultrices nulla. Praesent placerat mattis congue. Morbi eget imperdiet ligula. Etiam consequat dictum sapien ac feugiat. Donec laoreet dui at dui ultricies, non varius felis ultricies. Vivamus non egestas sapien.&nbsp;</p>', '2023-02-14 09:47:50', 'Alain', 'https://source.unsplash.com/random/1500x403');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dt_creation` datetime NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `email`, `password`, `dt_creation`, `status`) VALUES
(14, 'Alain', 'a@yahoo.fr', 'ab4f63f9ac65152575886860dde480a1', '2023-02-10 14:49:19', 1),
(15, 'Benoit modifié', 'benoit@yahoo.fr', 'e10adc3949ba59abbe56e057f20f883e', '2023-02-10 15:34:19', 1),
(16, 'nouveau', 'nouveau@gmail.fr', 'e10adc3949ba59abbe56e057f20f883e', '2023-02-10 16:31:42', 1),
(17, 'Céline', 'c@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2023-02-10 16:36:18', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
