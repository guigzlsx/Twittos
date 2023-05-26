-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 26 mai 2023 à 19:51
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int NOT NULL,
  `titre` varchar(140) COLLATE utf8mb4_general_ci NOT NULL,
  `contenu` text COLLATE utf8mb4_general_ci NOT NULL,
  `date` datetime NOT NULL,
  `tag` text COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `date`, `tag`, `img`) VALUES
(8, 'Mars', 'mars', '2023-03-27 14:05:06', '', ''),
(22, 'Lorem', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2023-04-13 21:52:25', '', ''),
(23, 'La Lune', 'La Lune, ou Terre I, est l\'unique satellite naturel permanent de la planète Terre. Il s\'agit du cinquième plus grand satellite naturel du Système solaire, et du plus grand des satellites planétaires par rapport à la taille de la planète autour de laquelle il orbite.', '2023-04-16 15:25:18', '', ''),
(24, 'La Reunion', 'La Réunion est une île située dans l\'ouest de l\'océan Indien, à l\'est de l\'Afrique, dans l\'hémisphère sud. Elle constitue à la fois un département et une région d\'outre-mer français (DROM).\r\n\r\nD\'une superficie de 2 512 km2, l\'île de La Réunion est située dans l\'archipel des Mascareignes à 172 km à l\'ouest-sud-ouest de l\'île Maurice et à 679 km à l\'est-sud-est de Madagascar. Il s\'agit d\'une île volcanique créée par un point chaud. Le point culminant est à une altitude de 3 070 mètres au piton des Neiges2, elle présente un relief escarpé travaillé par une érosion très marquée. Le piton de la Fournaise (2 632 mètres), situé dans le sud-est de l\'île, est un des volcans les plus actifs du monde. Bénéficiant d\'un climat tropical d\'alizé maritime et située sur la route des cyclones, La Réunion abrite un endémisme exceptionnel. ', '2023-04-16 15:26:17', '', ''),
(26, 'Hello', 'test', '2023-05-12 17:51:33', 'world', ''),
(27, 'boucle', 'for i in range ', '2023-05-17 18:05:45', 'for', ''),
(28, 'eeeee', 'eeeeee', '2023-05-17 18:26:17', 'rouge', ''),
(29, 'ffff', 'fffff', '2023-05-17 18:27:14', 'rouge', ''),
(30, 'test', 'test', '2023-05-22 14:13:48', 'rouge', ''),
(31, 'ds ds', ' gds g s', '2023-05-22 15:17:11', 'vert', ''),
(32, ' gsg ', 'g s g s ', '2023-05-22 15:17:20', 'bleu', ''),
(33, 'rvtvt', 'ttvttv', '2023-05-22 15:53:08', 'rouge', ''),
(34, 'dddd', 'dddd', '2023-05-22 17:30:01', 'rouge', ''),
(35, 'sss', 'sss', '2023-05-26 00:58:51', 'rouge', ''),
(36, 'cccc', 'cccc', '2023-05-26 14:03:22', 'vert', ''),
(37, 'test img', 'test img', '2023-05-26 14:46:52', 'rouge', 'animation_course.gif'),
(38, 'iim', 'iim', '2023-05-26 14:50:31', 'vert', 'Array'),
(39, 'image ', 'image', '2023-05-26 15:18:24', 'rouge', 'Capture d\'écran_20221112_171820.png'),
(40, 'test img', 'test img', '2023-05-26 15:37:58', 'rouge', 'Capture d\'écran_20221112_171820.png'),
(43, 'ffff', 'ffff', '2023-05-26 15:56:19', 'rouge', 'Batman.png'),
(46, 'test ', 'test', '2023-05-26 17:25:11', 'bleu', 'Batman.png'),
(47, 'test', 'test', '2023-05-26 17:47:47', 'rouge', 'Batman.png'),
(48, 'Bmw e30', 'bmw e30', '2023-05-26 21:19:18', 'rouge', 'elle-incarne-la-berline-chic-et-sportive-1616151977.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` text COLLATE utf8mb4_general_ci NOT NULL,
  `password` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'Luffy ', '4fca4866b55210d8701d07aad72ed14295fd6337'),
(3, 'Alex', '60c6d277a8bd81de7fdde19201bf9c58a3df08f4'),
(5, 'Guillaume', '640ab2bae07bedc4c163f679a746f7ab7fb5d1fa'),
(12, 'Bastien', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
(14, 'Garfield ', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
(15, 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
(16, 'hello', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d'),
(17, 'Guillaume', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
(18, 'Test', 'caa81338f4f6b16c5c96378f974a2850b96adfe6'),
(19, 'Anglais', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
(20, 'Espagnol', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
(21, 'cecec', '2797b614261cd25a372d8e268603544a1ead5b73'),
(22, 'cecec', '2797b614261cd25a372d8e268603544a1ead5b73'),
(23, 'zd eQ', '6ee1deea03e4d36480ec3b22745bb551cf368906'),
(24, 'dc d d', '11087faabb46acd00650beb2aa92a808d95d10b2'),
(25, 'creole', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
(26, 'lol', '403926033d001b5279df37cbbe5287b7c7c267fa'),
(27, 'bjr', '7398e2fbf06e86dd1a949ce97a4734dfcdadaddd');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
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
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
