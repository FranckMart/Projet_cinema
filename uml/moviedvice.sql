-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 22, 2020 at 04:00 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `moviedvice`
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
-- Table structure for table `administrer`
--

CREATE TABLE `administrer` (
  `id_admin` int(11) NOT NULL,
  `id_news` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ajouter`
--

CREATE TABLE `ajouter` (
  `id_admin` int(11) NOT NULL,
  `id_video` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `completer`
--

CREATE TABLE `completer` (
  `id_admin` int(11) NOT NULL,
  `id_video` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consulter`
--

CREATE TABLE `consulter` (
  `id_user` int(11) NOT NULL,
  `id_video` int(11) NOT NULL,
  `id_participant` int(11) NOT NULL
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
-- Table structure for table `joindre`
--

CREATE TABLE `joindre` (
  `id_admin` int(11) NOT NULL,
  `id_participant` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jouer`
--

CREATE TABLE `jouer` (
  `id_participant` int(11) NOT NULL,
  `id_video` int(11) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_image` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_video` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_titrePresentation` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_titreContenu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_titreConclusion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_micro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_textePresentation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_textContenu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_textConclusion` text COLLATE utf8mb4_unicode_ci,
  `news_editeur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `trier`
--

CREATE TABLE `trier` (
  `id_genre` int(11) NOT NULL,
  `id_video` int(11) NOT NULL
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
  `video_titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_genre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_synopsis` text COLLATE utf8mb4_unicode_ci,
  `video_dateSortie` date DEFAULT NULL,
  `video_duree` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_boxOffice` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_realisateur` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_acteurPrincipal` text COLLATE utf8mb4_unicode_ci,
  `video_note` int(5) DEFAULT NULL,
  `video_origine` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_couleur` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_distributeur` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_media` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_image` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_casting` text COLLATE utf8mb4_unicode_ci,
  `video_online` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visualiser`
--

CREATE TABLE `visualiser` (
  `id_user` int(11) NOT NULL,
  `id_news` int(11) NOT NULL,
  `id_video` int(11) NOT NULL
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
-- Indexes for table `administrer`
--
ALTER TABLE `administrer`
  ADD PRIMARY KEY (`id_admin`,`id_news`),
  ADD KEY `admin_news` (`id_news`);

--
-- Indexes for table `ajouter`
--
ALTER TABLE `ajouter`
  ADD PRIMARY KEY (`id_admin`,`id_video`,`id_user`),
  ADD KEY `news_ajout` (`id_video`),
  ADD KEY `user_ajout` (`id_user`);

--
-- Indexes for table `completer`
--
ALTER TABLE `completer`
  ADD PRIMARY KEY (`id_admin`,`id_video`,`id_user`),
  ADD KEY `video_complete` (`id_video`),
  ADD KEY `user_completeV` (`id_user`);

--
-- Indexes for table `consulter`
--
ALTER TABLE `consulter`
  ADD PRIMARY KEY (`id_user`,`id_video`,`id_participant`),
  ADD KEY `video_consult` (`id_video`),
  ADD KEY `participant_consult` (`id_participant`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `joindre`
--
ALTER TABLE `joindre`
  ADD PRIMARY KEY (`id_admin`,`id_participant`,`id_user`),
  ADD KEY `participant` (`id_participant`),
  ADD KEY `user` (`id_user`);

--
-- Indexes for table `jouer`
--
ALTER TABLE `jouer`
  ADD PRIMARY KEY (`id_participant`,`id_video`,`id_role`),
  ADD KEY `video_jouer` (`id_video`),
  ADD KEY `role_jouer` (`id_role`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

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
-- Indexes for table `trier`
--
ALTER TABLE `trier`
  ADD PRIMARY KEY (`id_genre`,`id_video`),
  ADD KEY `video_trie` (`id_video`);

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
-- Indexes for table `visualiser`
--
ALTER TABLE `visualiser`
  ADD PRIMARY KEY (`id_user`,`id_news`,`id_video`),
  ADD KEY `news_visualise` (`id_news`),
  ADD KEY `video_visualise` (`id_video`);

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
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT;

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrer`
--
ALTER TABLE `administrer`
  ADD CONSTRAINT `admin_administrateur` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`admin_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `admin_news` FOREIGN KEY (`id_news`) REFERENCES `news` (`news_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ajouter`
--
ALTER TABLE `ajouter`
  ADD CONSTRAINT `admin_ajout_VN` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`admin_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_ajout` FOREIGN KEY (`id_user`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `video_ajout` FOREIGN KEY (`id_video`) REFERENCES `video` (`video_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `completer`
--
ALTER TABLE `completer`
  ADD CONSTRAINT `admin_completeV` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`admin_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_completeV` FOREIGN KEY (`id_user`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `video_complete` FOREIGN KEY (`id_video`) REFERENCES `video` (`video_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `consulter`
--
ALTER TABLE `consulter`
  ADD CONSTRAINT `participant_consult` FOREIGN KEY (`id_participant`) REFERENCES `participant` (`participant_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_consult` FOREIGN KEY (`id_user`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `video_consult` FOREIGN KEY (`id_video`) REFERENCES `video` (`video_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `joindre`
--
ALTER TABLE `joindre`
  ADD CONSTRAINT `admin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`admin_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `participant` FOREIGN KEY (`id_participant`) REFERENCES `participant` (`participant_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user` FOREIGN KEY (`id_user`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `jouer`
--
ALTER TABLE `jouer`
  ADD CONSTRAINT `participant_jouer` FOREIGN KEY (`id_participant`) REFERENCES `participant` (`participant_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `role_jouer` FOREIGN KEY (`id_role`) REFERENCES `role` (`role_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `video_jouer` FOREIGN KEY (`id_video`) REFERENCES `video` (`video_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `trier`
--
ALTER TABLE `trier`
  ADD CONSTRAINT `genre_trie` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`genre_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `video_trie` FOREIGN KEY (`id_video`) REFERENCES `video` (`video_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `visualiser`
--
ALTER TABLE `visualiser`
  ADD CONSTRAINT `news_visualise` FOREIGN KEY (`id_news`) REFERENCES `news` (`news_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_visualise` FOREIGN KEY (`id_user`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `video_visualise` FOREIGN KEY (`id_video`) REFERENCES `video` (`video_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
