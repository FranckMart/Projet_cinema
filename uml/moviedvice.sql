-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 01, 2020 at 01:57 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `moviedvice`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrer`
--

CREATE TABLE `administrer` (
  `id_user` int(11) NOT NULL,
  `id_news` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ajouter`
--

CREATE TABLE `ajouter` (
  `id_video` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `completer`
--

CREATE TABLE `completer` (
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

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_id`, `genre_nom`) VALUES
(1, 'Action'),
(2, 'Aventure'),
(3, 'Drame'),
(4, 'Animation'),
(5, 'Arts Martiaux'),
(6, 'Biopic'),
(7, 'Comédie'),
(8, 'Comédie dramatique'),
(9, 'Comédie musical'),
(10, 'Fantastique');

-- --------------------------------------------------------

--
-- Table structure for table `joindre`
--

CREATE TABLE `joindre` (
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
  `news_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_video` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_titrePresentation` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_titreContenu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_titreConclusion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_micro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_textPresentation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_textContenu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_textConclusion` text COLLATE utf8mb4_unicode_ci,
  `news_editeur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_image`, `news_video`, `news_titrePresentation`, `news_titreContenu`, `news_titreConclusion`, `news_micro`, `news_textPresentation`, `news_textContenu`, `news_textConclusion`, `news_editeur`, `news_date`) VALUES
(4, '../include/uploads/soul_pixar.jpg', NULL, 'Le nouveau pixar aura du retard ! ', 'Un pixar qui s\'annonce envoutant ! ', 'Le cinéma en perte de vitesse ?', 'C\'est un fais le covid-19 change les plans de l\'industrie du cinéma le film n\'a pas encore de nouvelle date ', 'C\'est un fais le covid-19 change les plans de l\'industrie du cinéma le film n\'a pas encore de nouvelle date \r\nC\'est un fais le covid-19 change les plans de l\'industrie du cinéma le film n\'a pas encore de nouvelle date \r\nC\'est un fais le covid-19 change les plans de l\'industrie du cinéma le film n\'a pas encore de nouvelle date ', 'C\'est un fais le covid-19 change les plans de l\'industrie du cinéma le film n\'a pas encore de nouvelle date \r\nC\'est un fais le covid-19 change les plans de l\'industrie du cinéma le film n\'a pas encore de nouvelle date \r\nC\'est un fais le covid-19 change les plans de l\'industrie du cinéma le film n\'a pas encore de nouvelle date ', 'C\'est un fais le covid-19 change les plans de l\'industrie du cinéma le film n\'a pas encore de nouvelle date \r\nC\'est un fais le covid-19 change les plans de l\'industrie du cinéma le film n\'a pas encore de nouvelle date \r\nC\'est un fais le covid-19 change les plans de l\'industrie du cinéma le film n\'a pas encore de nouvelle date ', 'Franck Martinez', '2020-04-22 18:51:53');

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
  `user_mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_pseudo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_born` date DEFAULT NULL,
  `user_dateInscription` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_droit` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_mail`, `user_password`, `user_pseudo`, `user_born`, `user_dateInscription`, `user_droit`) VALUES
(4, 'VieuxFou@gmail.com', '$2y$10$QxrK6oxbPfnejQ4u6Mrbp.jqf.5njl2l1aQH4zOw/hXlCoXBBQ0U.', 'Le vieu fou', '1890-09-22', '2020-04-23 18:38:38', 1),
(5, 'axelu@gmail.com', '$2y$10$ezGzZ2D3ZymyDCssSxu0zOchkU6FDl3byNjn2yPA//qR3iPs6C5/O', 'axelu', '1990-04-28', '2020-04-23 18:38:46', 0),
(6, 'ameli@hotmail.fr', '$2y$10$DMwZkcpgzgGpfFtFGY.QAuAOINA3y1Ou/YTucAxMpH1YRn5q9DZ8C', 'ameliz', '1999-04-21', '2020-04-23 18:40:21', 0),
(7, 'sophie@hotmail.fr', '$2y$10$GDM35JLtKhP7N7tATT7iKOanqQFxpn32Bkfc7vZAxrjMKkuwVdsua', 'soso', '1999-04-21', '2020-04-23 18:41:13', 0),
(8, 'franckmartinez22@gmail.com', '$2y$10$OtegDiCEWFfrB1Eot3RUau/hPTvguAc67o/F3iYytk6DgvA2GQsTq', 'franckmart22', '1997-09-22', '2020-04-24 11:35:11', 1),
(9, 'sophie_Lorent@hotmail.fr', '$2y$10$h2SuflEng7wLzAK6SmU9A.9Sz61/pHpLfQQOWEuaRfz/8iUt5YRwe', 'sosof', '1998-07-22', '2020-04-26 12:09:09', 0),
(10, 'alison_peppers@hotmail.com', '$2y$10$nWsz5p2RfRetT770sGsaWOcvS3LrD.Xsfqi8nyaRXz8q8ea6kvhkS', 'ali', '1998-05-29', '2020-04-26 12:11:20', 0),
(11, 'aros@hotmail.com', '$2y$10$TDG02jBaExnIrY14.LF0BON4ljqnJKy5VTqvZiX244nj8zSrjGxyC', 'roro', '1998-05-29', '2020-04-26 12:12:19', 0),
(12, 'roland123@gmail.fr', '$2y$10$IawvNA0U/Sm5lFjyq5cNP.TrcZdjjKBSLDBbK1nwwE4LvBpHwSUsS', 'roland', '1955-09-22', '2020-04-26 12:15:30', 0),
(13, 'soufia@gmail.com', '$2y$10$Oq/ArGQ0Y3ALS9gR4FGquet3cPa9iY.M11Co7EZmsHs/2BzK02T0G', 'sousou3b', '1998-09-22', '2020-05-14 16:17:27', 1),
(14, 'gg@gmail.com', '$2y$10$vkLoZehzWC16JRPEsilgu.bdysJknSBUWDCTETVSvfn4vcB/uES/G', 'GG', '1980-03-22', '2020-05-06 08:48:24', 0),
(15, 'gege@hotmail.fr', '$2y$10$K2/zB7HTuX5lqnVSzEenEO5RQwwNlhBj9cZqDh.X1kDQ6dxRPqsRK', 'G2G2', '1979-08-22', '2020-05-09 13:17:37', 0),
(16, 'FF@gmail.com', '$2y$10$cjHMYeW14AkKzpDP4rcpyO34F8S2d4u/bacKf7p/9UpDnkLUUZAMW', 'FF', '2011-11-11', '2020-05-14 16:14:32', 0),
(17, 'hero@gmail.com', '$2y$10$TvMwVBUiEDTbTGZ4wWT5quRWenh4Ss6XF3qKIVKMxcOEDuvQFxEDK', 'hero22', '2020-06-03', '2020-06-22 12:22:56', 0),
(18, 'lora@hotmail.fr', '$2y$10$mkx2Q.r0PANDMx/hGWK2B.vnbO66ho4NFx03HfLd/qH4tRbxvndoC', 'lora12', '2004-08-10', '2020-06-22 12:24:19', 0),
(19, 'certif@gmail.com', '$2y$10$W2QRdAPeNBMjnq/yBvmzvO2x4APB6J8AI6iDdbgrrZzabBMBh43jW', 'CertifICS', '1987-07-22', '2020-07-01 11:13:00', 1),
(21, 'stephane10@hotmail.fr', '$2y$10$Xu9s4zqVlqP0ccMShWG2Ru.EJFiEZeoWXD.EkCWtpj7ri0R3DHHNO', 'stephaneMax', '1974-07-23', '2020-07-01 11:15:07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `video_titre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_synopsis` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_dateSortie` date NOT NULL,
  `video_duree` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_boxOffice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_realisateur` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_acteurPrincipal` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_note` int(1) NOT NULL,
  `video_origine` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_couleur` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_distributeur` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_media` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_casting` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_online` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `video_trailer` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `video_titre`, `video_genre`, `video_synopsis`, `video_dateSortie`, `video_duree`, `video_boxOffice`, `video_realisateur`, `video_acteurPrincipal`, `video_note`, `video_origine`, `video_couleur`, `video_distributeur`, `video_media`, `video_image`, `video_casting`, `video_online`, `video_trailer`) VALUES
(9, 'Collateral', 'thriller, Policier', 'Max est taxi de nuit à Los Angeles. Un soir, il se lie d\'amitié avec une dénommée Annie Farrell, une belle femme procureur montée à l\'arrière de son véhicule. Quelques minutes plus tard, c\'est au tour d\'un homme prénommé Vincent de monter dans le taxi. Un businessman, selon toute apparence, avec un emploi du temps chargé : pas moins de cinq rendez-vous à tenir dans la nuit. Max accepte de lui louer ses services jusqu\'au petit matin, en échange de 600 dollars. Premier arrêt. Vincent entre dans un immeuble. Un coup de feu éclate aussitôt, un corps plonge dans le vide, s\'écrasant sur le toit du taxi. Vincent redescend et, sous la menace de son arme, oblige Max à dissimuler le cadavre dans le coffre et à reprendre son mortel périple. Un chauffeur de taxi, un tueur implacable, cinq \"cibles\" à éliminer, des agents des stups et une équipe du FBI... Leurs destins se joueront cette nuit... ', '2004-09-29', '2h00', '', 'Michael Mann', 'Tom Cruise', 5, 'Amerique', 'oui', '', 'Film', '../uploads_movie/5eb7f625c2b559.17408303.jpg', 'Jamie Foxx, , ', '2020-05-10 12:40:05', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/h2eY-V1OOMc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(10, 'Mad max Fury Road', 'Action', 'Hanté par un lourd passé, Mad Max estime que le meilleur moyen de survivre est de rester seul. Cependant, il se retrouve embarqué par une bande qui parcourt la Désolation à bord d\'un véhicule militaire piloté par l\'Imperator Furiosa. Ils fuient la Citadelle où sévit le terrible Immortan Joe qui s\'est fait voler un objet irremplaçable. Enragé, ce Seigneur de guerre envoie ses hommes pour traquer les rebelles impitoyablement…', '2015-05-14', '2h00', '', 'George Miller', ' Tom Hardy', 5, 'Amérique', 'oui', '', 'Film', '../uploads_movie/5eb7f7ea21ed76.15302511.jpg', ', , ', '2020-05-10 12:47:38', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/A-1lj-Vq2wo\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(12, 'Les Indestructibles 2', 'Action, Aventure', 'Notre famille de super-héros préférée est de retour! Cette fois c’est Hélène qui se retrouve sur le devant de la scène laissant à Bob le soin de mener à bien les mille et une missions de la vie quotidienne et de s’occuper de Violette, Flèche et de bébé Jack-Jack. C’est un changement de rythme difficile pour la famille d’autant que personne ne mesure réellement l’étendue des incroyables pouvoirs du petit dernier… Lorsqu’un nouvel ennemi fait surface, la famille et Frozone vont devoir s’allier comme jamais pour déjouer son plan machiavélique. ', '2018-07-04', '1h58', '', 'Brad Bird', ' Gérard Lanvin', 4, 'Amérique', 'oui', '', 'Film', '../uploads_movie/5eb7fa2493d941.89992180.jpg', ', , ', '2020-05-10 12:57:08', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/sXsr_7Una_A\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(13, 'king kong', 'Aventure', 'New York, 1933. Ann Darrow est une artiste de music-hall dont la carrière a été brisée net par la Dépression. Se retrouvant sans emploi ni ressources, la jeune femme rencontre l\'audacieux explorateur-réalisateur Carl Denham et se laisse entraîner par lui dans la plus périlleuse des aventures... Ce dernier a dérobé à ses producteurs le négatif de son film inachevé. Il n\'a que quelques heures pour trouver une nouvelle star et l\'embarquer pour Singapour avec son scénariste, Jack Driscoll, et une équipe réduite. Objectif avoué : achever sous ces cieux lointains son génial film d\'action. Mais Denham nourrit en secret une autre ambition, bien plus folle : être le premier homme à explorer la mystérieuse Skull Island et à en ramener des images. Sur cette île de légende, Denham sait que \"quelque chose\" l\'attend, qui changera à jamais le cours de sa vie... ', '2005-12-10', '3h00', '', 'Peter Jackson', 'Naomi Watts', 5, 'Amérique', NULL, '', 'Film', '../uploads_movie/5eb8472d6d6b88.88939615.jpg', 'Adrien Brody,  Jack Black, ', '2020-05-10 18:25:49', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/lBmYKaJHhas\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(15, 'Gemini Man', 'Action', 'Henry Brogan, un tueur professionnel, est soudainement pris pour cible et poursuivi par un mystérieux et jeune agent qui peut prédire chacun de ses mouvements. ', '2019-10-02', '1h57', '', 'Ang Lee', 'Will Smith', 3, 'Amérique', 'oui', '', 'Film', '../uploads_movie/5edb71d87c2675.22837156.jpg', ', , ', '2020-06-06 10:37:12', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/nItsPkNbS84\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(17, 'Snowpiercer', 'Drame, thriller, Science-Fiction', 'Sept ans après que le monde soit devenu une vaste étendue glacée, les survivants ont trouvé refuge dans un train en perpétuel mouvement. Composé de 1001 wagons, l\'engin fait le tour du globe à toute vitesse. A bord, la guerre des classes, l’injustice sociale et la politique interne sèment le trouble.  Adaptation télévisée de la série de romans graphiques \"Le Transperceneige\" et du film Snowpiercer de Bong Joon-Ho (2013).', '2020-05-17', '1 saison', '', 'Josh Friedman', ' Jennifer Connelly', 3, 'USA', 'oui', '', 'Série', '../uploads_movie/5ee72a130afc26.98854766.png', ' Daveed Diggs,  Roberto Urbina, ', '2020-06-15 07:58:11', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/lGcJL6TG5cA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(18, 'Curon', 'Drame, thriller, Horreur', 'Une femme retourne dans son village pour la première fois depuis 17 ans. Mais lorsqu\'elle disparaît mystérieusement, ses enfants doivent affronter un sombre héritage. ', '2020-06-10', '1 saison', '', 'Ezio Abbate', ' Valeria Bilello', 4, 'Italie', 'oui', '', 'Série', '../uploads_movie/5ee74cbf5c6195.32796929.png', ' Luca Lionello,  Federico Russo, ', '2020-06-15 10:26:07', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/XUg_lpDHN8o\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(20, 'Vikings', 'Drame, Aventure', 'Scandinavie, à la fin du 8ème siècle. Ragnar Lodbrok, un jeune guerrier viking, est avide d\'aventures et de nouvelles conquêtes. Lassé des pillages sur les terres de l\'Est, il se met en tête d\'explorer l\'Ouest par la mer. Malgré la réprobation de son chef, Haraldson, il se fie aux signes et à la volonté des dieux, en construisant une nouvelle génération de vaisseaux, plus légers et plus rapides...', '2013-03-03', '6 saisons', '', 'Michael Hirst', ' Katheryn Winnick', 4, 'Irlande', 'oui', '', 'Série', '../uploads_movie/5ee874637f8435.03634689.jpg', ' Alexander Ludwig,  Alex Høgh Andersen, ', '2020-06-16 07:27:31', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Y7d0A5re7-0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(47, '13 Reasons Why', 'Drame', 'Inspirée des best-sellers de Jay Asher, 13 Reasons Why suit Clay Jensen, un adolescent qui découvre sous son porche au retour du lycée une mystérieuse boîte portant son nom. À l\'intérieur, des cassettes enregistrées par Hannah Baker, une camarade de classe qui s\'est tragiquement suicidée deux semaines auparavant. Les enregistrements révèlent que la jeune fille, dont il était amoureux, a décidé de mettre fin à ses jours pour treize raisons. Clay est-il l\'une de ces raisons ? ', '2017-03-31', '4 saisons', '', ' Brian Yorkey', ' Dylan Minnette', 4, 'USA', 'oui', '', 'Série', '../uploads_movie/5ee88a29c3fc55.06553027.png', ' Grace Saif,  Christian Navarro, ', '2020-06-16 09:00:25', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7121njw1clg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(52, 'Les Evadés', 'Drame', 'En 1947, Andy Dufresne, un jeune banquier, est condamné à la prison à vie pour le meurtre de sa femme et de son amant. Ayant beau clamer son innocence, il est emprisonné à Shawshank, le pénitencier le plus sévère de l\'Etat du Maine. Il y fait la rencontre de Red, un Noir désabusé, détenu depuis vingt ans. Commence alors une grande histoire d\'amitié entre les deux hommes... ', '1995-03-01', '2H20', '', 'Frank Darabont', 'Tim Robbins', 5, 'USA', 'oui', '', 'Film', '../uploads_movie/5ee8ba4f169509.86719869.jpg', ' Morgan Freeman, Bob Gunton, ', '2020-06-16 12:25:51', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/dSL2Ec_0fUs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(65, 'Roubaix, une lumière', 'Drame, thriller', 'À Roubaix, un soir de Noël, Daoud le chef de la police locale et Louis, fraîchement diplômé, font face au meurtre d’une vieille femme. Les voisines de la victime, deux jeunes femmes, Claude et Marie, sont arrêtées. Elles sont toxicomanes, alcooliques, amantes… ', '2019-08-21', '1h59', '208 981 entrées (France)', 'Arnaud Desplechin', 'Roschdy Zem', 4, 'FRANCE', 'oui', 'Le Pacte', 'Film', '../uploads_movie/5eea5337873424.03365918.jpg', 'Léa Seydoux, Sara Forestier', '2020-06-17 17:30:31', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ir6Nycpu5-o\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

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
-- Indexes for table `administrer`
--
ALTER TABLE `administrer`
  ADD PRIMARY KEY (`id_user`,`id_news`),
  ADD KEY `user_news` (`id_news`);

--
-- Indexes for table `ajouter`
--
ALTER TABLE `ajouter`
  ADD PRIMARY KEY (`id_video`,`id_user`),
  ADD KEY `user_ajout` (`id_user`);

--
-- Indexes for table `completer`
--
ALTER TABLE `completer`
  ADD PRIMARY KEY (`id_video`,`id_user`),
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
  ADD PRIMARY KEY (`id_participant`,`id_user`),
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
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrer`
--
ALTER TABLE `administrer`
  ADD CONSTRAINT `user_administrateur` FOREIGN KEY (`id_user`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_news` FOREIGN KEY (`id_news`) REFERENCES `news` (`news_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ajouter`
--
ALTER TABLE `ajouter`
  ADD CONSTRAINT `user_ajout` FOREIGN KEY (`id_user`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `video_ajout` FOREIGN KEY (`id_video`) REFERENCES `video` (`video_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `completer`
--
ALTER TABLE `completer`
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
