-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 16, 2020 at 05:12 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
SET NAMES UTF8;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_droit` int(11) NOT NULL,
  `admin_dateInscription` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `completer`
--

CREATE TABLE `completer` (
  `admin_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consulter`
--

CREATE TABLE `consulter` (
  `video_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `participant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(11) NOT NULL,
  `genre_nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `incarner`
--

CREATE TABLE `incarner` (
  `participant_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `joindre`
--

CREATE TABLE `joindre` (
  `admin_id` int(11) NOT NULL,
  `participant_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_image` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_titre` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_micro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_texte` text COLLATE utf8mb4_unicode_ci,
  `news_editeur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_image`, `news_titre`, `news_micro`, `news_texte`, `news_editeur`, `news_date`) VALUES
(1, 'batman_2021', 'Batman est de retour !', 'Le film batman va étre dans toutes les salles en 2021', 'Le film batman va étre dans toutes les salles en 2021Le film batman va étre dans toutes les salles en 2021Le film batman va étre dans toutes les salles en 2021Le film batman va étre dans toutes les salles en 2021Le film batman va étre dans toutes les salles en 2021', 'Martinez Franck', '2020-04-13 22:00:00'),
(2, 'soul_pixar', 'Le nouveau pixar aura du retard ! ', 'C\'est un fais le covid-19 change les plans de l\'industrie du cinéma le film n\'a pas encore de nouvelle date ', 'C\'est un fais le covid-19 change les plans de l\'industrie du cinéma le film n\'a pas encore de nouvelle date \r\nC\'est un fais le covid-19 change les plans de l\'industrie du cinéma le film n\'a pas encore de nouvelle date \r\nC\'est un fais le covid-19 change les plans de l\'industrie du cinéma le film n\'a pas encore de nouvelle date ', 'Martinez Franck', '2020-04-13 22:00:00'),
(3, 'dune_2021', 'Dune est de retour ! ', 'Voici une des premières images de Dune, le film sera dans nos salles en 2021', 'Voici une des premières images de Dune, le film sera dans nos salles en 2021Voici une des premières images de Dune, le film sera dans nos salles en 2021Voici une des premières images de Dune, le film sera dans nos salles en 2021Voici une des premières images de Dune, le film sera dans nos salles en 2021', 'Telheb Manu ', '2020-04-14 22:00:00'),
(4, 'leo_scorcese_trophy', 'un rôle offert pour le prochain Scorsese?', 'En échange d’un don à des associations, un donateur sera tiré au sort et pourra également passer la journée avec le réalisateur et les deux pointures du cinéma. ', 'On fait difficilement plus cool. Afin de lever des fonds destinés à aider les populations les plus défavorisées en pleine crise de Covid-19, Robert De Niro et Leonardo DiCaprio ont imaginé un jeu concours qui devrait enchanter les cinéphiles. En échange d’un don aux associations américaines \"All in Challenge\", \"America’s Food Fund\", \"Meals on Wheels\" et \"No Kid Hungry\", l’un des donateurs sera tiré au sort et aura la chance de se voir offrir un rôle de figurant dans le prochain film de Martin Scorsese, Killers of the Flower Moon. L’heureux élu pourra passer la journée sur le plateau en compagnie du réalisateur et des deux acteurs, et sera même invité à la première du film. Le jeu a été annoncé dans une vidéo publiée sur le compte Instagram de Leonardo DiCaprio. Tour à tour, les deux acteurs y prennent la parole depuis leur lieu de confinement. \"Bob et moi allons être à l’affiche d’un film qui s’appelle Killers of the Flower Moon. Si vous vous êtes déjà demandé ce que ça fait de travailler avec le grand Martin Scorsese, c’est votre chance\", explique la star de Once Upon a Time… in Hollywood, avant d’encourager les internautes à se rendre sur la page allinchallenge.com pour faire un don et avoir peut-être la chance d’être tiré au sort. \r\n\r\nCette initiative s\'inscrit dans le cadre du #AllInChallenge, lancé ce mardi. Les célébrités de l’industrie du cinéma, de la musique et du sport qui y participent invitent les internautes à faire un don en échange d’une expérience unique, et mettent aux défis d’autres personnalités. À ce titre, les deux pointures du cinéma ont challengé Jamie Foxx, la présentatrice Ellen DeGeneres et Matthew McConaughey. Les bénéfices seront reversés aux associations citées plus haut, chargées de fournir des repas aux personnes dans le besoin pendant le confinement. Les organisateurs de la campagne se sont fixés comme objectif de réunir 100 millions de dollars. ', 'Martinez Franck', '2020-04-15 22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `participant_id` int(11) NOT NULL,
  `participant_nom` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `participant_prenom` int(11) DEFAULT NULL,
  `participant_dateNaissance` date NOT NULL,
  `participant_filmographie` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_titre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_password` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_pseudo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_dateNaissance` date NOT NULL,
  `user_dateInscription` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `video_titre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_synopsis` text COLLATE utf8mb4_unicode_ci,
  `video_dateCreationVideo` date DEFAULT NULL,
  `video_duree` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_boxOffice` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_realisateur` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_acteurPrincipal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_note` int(5) NOT NULL,
  `video_origine` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_couleur` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_distributeur` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_contenu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD UNIQUE KEY `news_titre` (`news_titre`);

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`participant_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_pseudo` (`user_pseudo`),
  ADD UNIQUE KEY `user_mail` (`user_mail`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `participant_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT;
