-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 10 fév. 2020 à 09:06
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
-- Base de données :  `security`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `titre` varchar(80) NOT NULL,
  `resume` varchar(150) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `resume`, `content`) VALUES
(1, 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id lobortis ipsum, vitae fermentum dui. Maecenas nisi diam, hendrerit a vehicula sed, venenatis non nisl. Fusce turpis odio, ullamcorper a vehicula id, placerat ac nibh. In gravida ac est ac scelerisque. Vivamus quis rhoncus neque. Curabitur in augue vulputate, viverra enim at, convallis nulla. Cras sodales nibh in odio sollicitudin blandit. Aliquam dignissim eros vitae quam convallis consequat volutpat vehicula ligula. Donec ut nulla pellentesque enim lobortis sagittis. Vestibulum vestibulum egestas tellus, tempus facilisis ipsum luctus ac. Aliquam scelerisque dui eget tellus ultrices imperdiet. Curabitur fringilla sodales neque, sit amet viverra magna. Morbi vitae vehicula lacus. Vivamus non accumsan mi. Vestibulum tincidunt interdum ex at pharetra.'),
(2, 'Vivamus commodo', 'Vivamus commodo justo efficitur, vulputate leo sit amet, iaculis turpis. Nulla condimentum mauris vel lacus rutrum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id lobortis ipsum, vitae fermentum dui. Maecenas nisi diam, hendrerit a vehicula sed, venenatis non nisl. Fusce turpis odio, ullamcorper a vehicula id, placerat ac nibh. In gravida ac est ac scelerisque. Vivamus quis rhoncus neque. Curabitur in augue vulputate, viverra enim at, convallis nulla. Cras sodales nibh in odio sollicitudin blandit. Aliquam dignissim eros vitae quam convallis consequat volutpat vehicula ligula. Donec ut nulla pellentesque enim lobortis sagittis. Vestibulum vestibulum egestas tellus, tempus facilisis ipsum luctus ac. Aliquam scelerisque dui eget tellus ultrices imperdiet. Curabitur fringilla sodales neque, sit amet viverra magna. Morbi vitae vehicula lacus. Vivamus non accumsan mi. Vestibulum tincidunt interdum ex at pharetra.'),
(3, 'Morbi facilisis', 'Morbi facilisis, elit ac elementum pulvinar, libero diam finibus augue, vel malesuada ipsum magna at nibh. Sed a egestas felis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id lobortis ipsum, vitae fermentum dui. Maecenas nisi diam, hendrerit a vehicula sed, venenatis non nisl. Fusce turpis odio, ullamcorper a vehicula id, placerat ac nibh. In gravida ac est ac scelerisque. Vivamus quis rhoncus neque. Curabitur in augue vulputate, viverra enim at, convallis nulla. Cras sodales nibh in odio sollicitudin blandit. Aliquam dignissim eros vitae quam convallis consequat volutpat vehicula ligula. Donec ut nulla pellentesque enim lobortis sagittis. Vestibulum vestibulum egestas tellus, tempus facilisis ipsum luctus ac. Aliquam scelerisque dui eget tellus ultrices imperdiet. Curabitur fringilla sodales neque, sit amet viverra magna. Morbi vitae vehicula lacus. Vivamus non accumsan mi. Vestibulum tincidunt interdum ex at pharetra.'),
(4, 'Praesent pretium', 'Praesent pretium massa vel est pharetra, ac maximus ex consectetur. Donec commodo leo magna, facilisis blandit felis tristique.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id lobortis ipsum, vitae fermentum dui. Maecenas nisi diam, hendrerit a vehicula sed, venenatis non nisl. Fusce turpis odio, ullamcorper a vehicula id, placerat ac nibh. In gravida ac est ac scelerisque. Vivamus quis rhoncus neque. Curabitur in augue vulputate, viverra enim at, convallis nulla. Cras sodales nibh in odio sollicitudin blandit. Aliquam dignissim eros vitae quam convallis consequat volutpat vehicula ligula. Donec ut nulla pellentesque enim lobortis sagittis. Vestibulum vestibulum egestas tellus, tempus facilisis ipsum luctus ac. Aliquam scelerisque dui eget tellus ultrices imperdiet. Curabitur fringilla sodales neque, sit amet viverra magna. Morbi vitae vehicula lacus. Vivamus non accumsan mi. Vestibulum tincidunt interdum ex at pharetra.'),
(5, 'Ut ut ex non sem', 'Ut ut ex non sem placerat suscipit. Nullam suscipit purus eget nibh interdum, sit amet consequat nisi sollicitudin. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id lobortis ipsum, vitae fermentum dui. Maecenas nisi diam, hendrerit a vehicula sed, venenatis non nisl. Fusce turpis odio, ullamcorper a vehicula id, placerat ac nibh. In gravida ac est ac scelerisque. Vivamus quis rhoncus neque. Curabitur in augue vulputate, viverra enim at, convallis nulla. Cras sodales nibh in odio sollicitudin blandit. Aliquam dignissim eros vitae quam convallis consequat volutpat vehicula ligula. Donec ut nulla pellentesque enim lobortis sagittis. Vestibulum vestibulum egestas tellus, tempus facilisis ipsum luctus ac. Aliquam scelerisque dui eget tellus ultrices imperdiet. Curabitur fringilla sodales neque, sit amet viverra magna. Morbi vitae vehicula lacus. Vivamus non accumsan mi. Vestibulum tincidunt interdum ex at pharetra.'),
(6, 'Vestibulum semper', 'Vestibulum semper, massa sed porta dictum, lacus risus porta ipsum, at scelerisque nisl ipsum vitae massa.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id lobortis ipsum, vitae fermentum dui. Maecenas nisi diam, hendrerit a vehicula sed, venenatis non nisl. Fusce turpis odio, ullamcorper a vehicula id, placerat ac nibh. In gravida ac est ac scelerisque. Vivamus quis rhoncus neque. Curabitur in augue vulputate, viverra enim at, convallis nulla. Cras sodales nibh in odio sollicitudin blandit. Aliquam dignissim eros vitae quam convallis consequat volutpat vehicula ligula. Donec ut nulla pellentesque enim lobortis sagittis. Vestibulum vestibulum egestas tellus, tempus facilisis ipsum luctus ac. Aliquam scelerisque dui eget tellus ultrices imperdiet. Curabitur fringilla sodales neque, sit amet viverra magna. Morbi vitae vehicula lacus. Vivamus non accumsan mi. Vestibulum tincidunt interdum ex at pharetra.');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `idArticle` int(11) NOT NULL,
  `nom` varchar(80) NOT NULL,
  `message` text NOT NULL,
  `dtcree` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `nom` varchar(80) NOT NULL,
  `message` text NOT NULL,
  `dtcree` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(6) NOT NULL,
  `first_name` varchar(15) DEFAULT NULL,
  `last_name` varchar(15) DEFAULT NULL,
  `user` varchar(15) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `avatar` varchar(70) DEFAULT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `failed_login` int(3) DEFAULT NULL,
  `super_admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `user`, `password`, `avatar`, `last_login`, `failed_login`, `super_admin`) VALUES
(1, 'admin', 'admin', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'http://localhost/dvwa/hackable/users/admin.jpg', '2019-11-16 20:06:30', 0, 0),
(2, 'Gordon', 'Brown', 'gordonb', '0f98df87c7440c045496f705c7295344', 'http://localhost/dvwa/hackable/users/gordonb.jpg', '2019-11-16 20:06:30', 0, 0),
(3, 'Hack', 'Me', '1337', '8d3533d75ae2c3966d7e0d4fcc69216b', 'http://localhost/dvwa/hackable/users/1337.jpg', '2019-11-16 20:06:30', 0, 0),
(4, 'Pablo', 'Picasso', 'pablo', '0d107d09f5bbe40cade3de5c71e9e9b7', 'http://localhost/dvwa/hackable/users/pablo.jpg', '2019-11-16 20:06:30', 0, 0),
(5, 'Bob', 'Smith', 'smithy', '5f4dcc3b5aa765d61d8327deb882cf99', 'http://localhost/dvwa/hackable/users/smithy.jpg', '2019-11-16 20:06:30', 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idArticle` (`idArticle`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`idArticle`) REFERENCES `article` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
