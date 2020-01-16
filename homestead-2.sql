-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `appartements`;
CREATE TABLE `appartements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(150) DEFAULT NULL,
  `superficie` varchar(150) DEFAULT NULL,
  `reference` varchar(25) DEFAULT NULL,
  `commentaire` varchar(25) DEFAULT NULL,
  `statut` varchar(25) DEFAULT NULL,
  `prix` decimal(15,3) DEFAULT NULL,
  `reference_logement` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `appartement_logement_FK` (`reference_logement`),
  CONSTRAINT `appartement_logement_FK` FOREIGN KEY (`reference_logement`) REFERENCES `logements` (`reference`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `appartements` (`id`, `libelle`, `superficie`, `reference`, `commentaire`, `statut`, `prix`, `reference_logement`) VALUES
(2,	'deed',	'ddwdw',	'dwdwdw',	'dwdwdw',	'dwdw',	4433.000,	'log1test');

DROP TABLE IF EXISTS `chambre`;
CREATE TABLE `chambre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(150) DEFAULT NULL,
  `reference` varchar(25) DEFAULT NULL,
  `prix` decimal(15,3) DEFAULT NULL,
  `reference_hopital` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `chambre_hopital_FK` (`reference_hopital`),
  CONSTRAINT `chambre_hopital_FK` FOREIGN KEY (`reference_hopital`) REFERENCES `hopital` (`reference`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `Client`;
CREATE TABLE `Client` (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(150) DEFAULT NULL,
  `prenom` varchar(150) DEFAULT NULL,
  `raison_social` varchar(50) DEFAULT NULL,
  `rue` varchar(150) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `ville` varchar(75) NOT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `fax` varchar(15) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `days`;
CREATE TABLE `days` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `days` (`id`, `created_at`, `updated_at`, `name`) VALUES
(1,	NULL,	NULL,	'Lundi'),
(2,	NULL,	NULL,	'Mardi'),
(3,	NULL,	NULL,	'Mercredi'),
(4,	NULL,	NULL,	'Jeudi'),
(5,	NULL,	NULL,	'Vendredi'),
(6,	NULL,	NULL,	'Samedi'),
(7,	NULL,	NULL,	'Dimanche');

DROP TABLE IF EXISTS `departements`;
CREATE TABLE `departements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `departements` (`id`, `nom`) VALUES
(1,	'Ille et Vilaine'),
(2,	'Cotes d\'Amor'),
(3,	'Finistere'),
(4,	'Morbhian'),
(5,	'Loire Atlantique');

DROP TABLE IF EXISTS `Fournisseur`;
CREATE TABLE `Fournisseur` (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(150) DEFAULT NULL,
  `prenom` varchar(150) DEFAULT NULL,
  `raison_social` varchar(50) DEFAULT NULL,
  `rue` varchar(150) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `ville` varchar(75) NOT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `fax` varchar(15) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `site_web` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Fournisseur` (`code`, `nom`, `prenom`, `raison_social`, `rue`, `cp`, `ville`, `tel`, `fax`, `email`, `site_web`) VALUES
(1,	'ass',	'yann',	NULL,	'5 allee de la croix',	'35700',	'rennes',	'0752756613',	NULL,	NULL,	NULL);

DROP TABLE IF EXISTS `hopital`;
CREATE TABLE `hopital` (
  `reference` varchar(25) NOT NULL,
  `designation` varchar(250) DEFAULT NULL,
  `localisaion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`reference`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `logements`;
CREATE TABLE `logements` (
  `reference` varchar(25) NOT NULL,
  `designation` varchar(250) DEFAULT NULL,
  `description_simp` text,
  `description_compl` text,
  `id_quartier` int(11) NOT NULL,
  PRIMARY KEY (`reference`),
  KEY `id_quartier` (`id_quartier`),
  CONSTRAINT `logements_ibfk_1` FOREIGN KEY (`id_quartier`) REFERENCES `quartiers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `logements` (`reference`, `designation`, `description_simp`, `description_compl`, `id_quartier`) VALUES
('log1test',	'Residence Kley',	'Vivez la Happy Performance \r\nchez Kley\r\nDécouvrez nos résidences Kley mixant des espaces privés conçus pour offrir d’excellentes conditions de travail et des espaces de vie dédiés à tous vos besoins et favorisant les échanges : un lieu de vie où les études cohabitent avec le partage, le confort, le bien-être et le fun ! Sélectionnez votre école pour avoir toutes les informations utiles et personnalisées.',	'#HAPPY CONCENTRATION\r\nChez Kley, nous proposons une diversité de logements étudiants et de tailles : du studio et co-living (nouvelle génération de colocations : du T3 au T9) neufs et tout équipés avec lumière naturelle, isolation phonique, rangements, salle de bain spacieuse et grand lit pour un confort maxi. Restez connecté chez Kley avec la connexion Wi-Fi en fibre haut débit partout dans chaque résidence étudiante ! Nos logements étudiants Kley vous offrent un happy cadre de travail et un accès sécurisé pour que les parents eux aussi dorment tranquilles.\r\n\r\n\r\n\r\n#HAPPY SERVICES\r\nKley, c’est plein de services inclus ou à la carte pour vous simplifier la vie : ménage, maintenance, prêt de matériel, livraison panier fruits et légumes, parking vélo & voiture… L’équipe sur place vous déniche des bons plans et des jobs, organise des cours de sport et favorise les échanges entre étudiants. Le kit d’accueil vous donne les clés d’une happy intégration que ce soit dans la résidence étudiante Kley à Marseille, Rennes, Saclay (Palaiseau), Caen, Champs-sur-Marne, Gentilly, Gennevilliers, Toulouse ou Angers.\r\n\r\n\r\n\r\n#HAPPY DÉTENTE\r\nIl n’y a pas que le travail dans la vie d’un étudiant. Rendez-vous sur le Rooftop, sur la terrasse ou dans le Patio de nos résidences étudiantes pour vous relaxer au soleil, au Kosy pour regarder un film, au Squat pour jouer à FIFA entre amis ou vous défouler au baby-foot. Toute l’année, l’équipe crée une happy ambiance avec des événements, concerts, cours de cuisine et diverses animations.\r\n\r\n\r\n\r\n#HAPPY CO-WORKING\r\nNos résidences étudiantes sont toutes conçues avec des espaces de travail innovants. Le Lab est un espace convivial, connecté et accessible 24h/24. Organisez votre travail seul ou en groupe. Imprimez, partagez, projetez. Travaillez également au soleil dans nos espaces extérieurs ou dans nos espaces de vie design.\r\n',	1),
('log20d',	'RÉSIDENCE DOMITYS LE GRIFFON D\'OR',	'Saint-Brieuc, une ville qui offre des visages divers et variés\r\n\r\nLa ville de Saint-Brieuc est reconnue pour sa qualité de vie, en particulier par les seniors ; elle offre des visages divers et variés et à ses portes se succèdent falaises, criques, pointes, dunes, plages...\r\nElle forme alors un lieu de vie privilégié, où il fait bon vivre !',	'Saint-Brieuc, une ville qui offre des visages divers et variés\r\n\r\nLa ville de Saint-Brieuc est reconnue pour sa qualité de vie, en particulier par les seniors ; elle offre des visages divers et variés et à ses portes se succèdent falaises, criques, pointes, dunes, plages...\r\nElle forme alors un lieu de vie privilégié, où il fait bon vivre !\r\n\r\nUn centre historique mêlant pierre typique et maisons à pans de bois autour de sa cathédrale du XIIème siècle un patrimoine Art Déco, des rues piétonnes et des places animées, des espaces verts, ou encore le Port du Légué avec ses plaisanciers et ses pêcheurs... \r\n\r\n\r\nLes atouts de la résidence Le Griffon d\'Or\r\n\r\n132 logements du studio au 3 pièces, avec balcon, terrasse ou jardin privatif\r\nCuisine équipée\r\nSalle de bain avec douche ultra-plate\r\nParkings couverts\r\n+ de 1000 m² d\'espaces Club\r\nUn restaurant de qualité, une cuisine à base de produits frais, préparée par un chef\r\n\r\n\r\nLa Résidence bénéficie d\'un emplacement privilégié proche des commodités, au cœur de la ville de Saint-Brieuc, entre le centre historique et des quartiers résidentiels récents.\r\n\r\nLes résidents peuvent profiter des deux arrêts de bus desservant 3 lignes qui se situent à proximité de la Résidence.',	2),
('log20dcopy',	'RÉSIDENCE DOMITYS LE GRIFFON D\'OR',	'Saint-Brieuc, une ville qui offre des visages divers et variés\r\n\r\nLa ville de Saint-Brieuc est reconnue pour sa qualité de vie, en particulier par les seniors ; elle offre des visages divers et variés et à ses portes se succèdent falaises, criques, pointes, dunes, plages...\r\nElle forme alors un lieu de vie privilégié, où il fait bon vivre !',	'Saint-Brieuc, une ville qui offre des visages divers et variés\r\n\r\nLa ville de Saint-Brieuc est reconnue pour sa qualité de vie, en particulier par les seniors ; elle offre des visages divers et variés et à ses portes se succèdent falaises, criques, pointes, dunes, plages...\r\nElle forme alors un lieu de vie privilégié, où il fait bon vivre !\r\n\r\nUn centre historique mêlant pierre typique et maisons à pans de bois autour de sa cathédrale du XIIème siècle un patrimoine Art Déco, des rues piétonnes et des places animées, des espaces verts, ou encore le Port du Légué avec ses plaisanciers et ses pêcheurs... \r\n\r\n\r\nLes atouts de la résidence Le Griffon d\'Or\r\n\r\n132 logements du studio au 3 pièces, avec balcon, terrasse ou jardin privatif\r\nCuisine équipée\r\nSalle de bain avec douche ultra-plate\r\nParkings couverts\r\n+ de 1000 m² d\'espaces Club\r\nUn restaurant de qualité, une cuisine à base de produits frais, préparée par un chef\r\n\r\n\r\nLa Résidence bénéficie d\'un emplacement privilégié proche des commodités, au cœur de la ville de Saint-Brieuc, entre le centre historique et des quartiers résidentiels récents.\r\n\r\nLes résidents peuvent profiter des deux arrêts de bus desservant 3 lignes qui se situent à proximité de la Résidence.',	2),
('log20dcopy2',	'RÉSIDENCE DOMITYS LE GRIFFON D\'OR',	'Saint-Brieuc, une ville qui offre des visages divers et variés\r\n\r\nLa ville de Saint-Brieuc est reconnue pour sa qualité de vie, en particulier par les seniors ; elle offre des visages divers et variés et à ses portes se succèdent falaises, criques, pointes, dunes, plages...\r\nElle forme alors un lieu de vie privilégié, où il fait bon vivre !',	'Saint-Brieuc, une ville qui offre des visages divers et variés\r\n\r\nLa ville de Saint-Brieuc est reconnue pour sa qualité de vie, en particulier par les seniors ; elle offre des visages divers et variés et à ses portes se succèdent falaises, criques, pointes, dunes, plages...\r\nElle forme alors un lieu de vie privilégié, où il fait bon vivre !\r\n\r\nUn centre historique mêlant pierre typique et maisons à pans de bois autour de sa cathédrale du XIIème siècle un patrimoine Art Déco, des rues piétonnes et des places animées, des espaces verts, ou encore le Port du Légué avec ses plaisanciers et ses pêcheurs... \r\n\r\n\r\nLes atouts de la résidence Le Griffon d\'Or\r\n\r\n132 logements du studio au 3 pièces, avec balcon, terrasse ou jardin privatif\r\nCuisine équipée\r\nSalle de bain avec douche ultra-plate\r\nParkings couverts\r\n+ de 1000 m² d\'espaces Club\r\nUn restaurant de qualité, une cuisine à base de produits frais, préparée par un chef\r\n\r\n\r\nLa Résidence bénéficie d\'un emplacement privilégié proche des commodités, au cœur de la ville de Saint-Brieuc, entre le centre historique et des quartiers résidentiels récents.\r\n\r\nLes résidents peuvent profiter des deux arrêts de bus desservant 3 lignes qui se situent à proximité de la Résidence.',	2),
('log20dcopy3',	'RÉSIDENCE DOMITYS LE GRIFFON D\'OR',	'Saint-Brieuc, une ville qui offre des visages divers et variés\r\n\r\nLa ville de Saint-Brieuc est reconnue pour sa qualité de vie, en particulier par les seniors ; elle offre des visages divers et variés et à ses portes se succèdent falaises, criques, pointes, dunes, plages...\r\nElle forme alors un lieu de vie privilégié, où il fait bon vivre !',	'Saint-Brieuc, une ville qui offre des visages divers et variés\r\n\r\nLa ville de Saint-Brieuc est reconnue pour sa qualité de vie, en particulier par les seniors ; elle offre des visages divers et variés et à ses portes se succèdent falaises, criques, pointes, dunes, plages...\r\nElle forme alors un lieu de vie privilégié, où il fait bon vivre !\r\n\r\nUn centre historique mêlant pierre typique et maisons à pans de bois autour de sa cathédrale du XIIème siècle un patrimoine Art Déco, des rues piétonnes et des places animées, des espaces verts, ou encore le Port du Légué avec ses plaisanciers et ses pêcheurs... \r\n\r\n\r\nLes atouts de la résidence Le Griffon d\'Or\r\n\r\n132 logements du studio au 3 pièces, avec balcon, terrasse ou jardin privatif\r\nCuisine équipée\r\nSalle de bain avec douche ultra-plate\r\nParkings couverts\r\n+ de 1000 m² d\'espaces Club\r\nUn restaurant de qualité, une cuisine à base de produits frais, préparée par un chef\r\n\r\n\r\nLa Résidence bénéficie d\'un emplacement privilégié proche des commodités, au cœur de la ville de Saint-Brieuc, entre le centre historique et des quartiers résidentiels récents.\r\n\r\nLes résidents peuvent profiter des deux arrêts de bus desservant 3 lignes qui se situent à proximité de la Résidence.',	2),
('log20dcopy4',	'RÉSIDENCE DOMITYS LE GRIFFON D\'OR',	'Saint-Brieuc, une ville qui offre des visages divers et variés\r\n\r\nLa ville de Saint-Brieuc est reconnue pour sa qualité de vie, en particulier par les seniors ; elle offre des visages divers et variés et à ses portes se succèdent falaises, criques, pointes, dunes, plages...\r\nElle forme alors un lieu de vie privilégié, où il fait bon vivre !',	'Saint-Brieuc, une ville qui offre des visages divers et variés\r\n\r\nLa ville de Saint-Brieuc est reconnue pour sa qualité de vie, en particulier par les seniors ; elle offre des visages divers et variés et à ses portes se succèdent falaises, criques, pointes, dunes, plages...\r\nElle forme alors un lieu de vie privilégié, où il fait bon vivre !\r\n\r\nUn centre historique mêlant pierre typique et maisons à pans de bois autour de sa cathédrale du XIIème siècle un patrimoine Art Déco, des rues piétonnes et des places animées, des espaces verts, ou encore le Port du Légué avec ses plaisanciers et ses pêcheurs... \r\n\r\n\r\nLes atouts de la résidence Le Griffon d\'Or\r\n\r\n132 logements du studio au 3 pièces, avec balcon, terrasse ou jardin privatif\r\nCuisine équipée\r\nSalle de bain avec douche ultra-plate\r\nParkings couverts\r\n+ de 1000 m² d\'espaces Club\r\nUn restaurant de qualité, une cuisine à base de produits frais, préparée par un chef\r\n\r\n\r\nLa Résidence bénéficie d\'un emplacement privilégié proche des commodités, au cœur de la ville de Saint-Brieuc, entre le centre historique et des quartiers résidentiels récents.\r\n\r\nLes résidents peuvent profiter des deux arrêts de bus desservant 3 lignes qui se situent à proximité de la Résidence.',	2),
('log20dcopy5',	'RÉSIDENCE DOMITYS LE GRIFFON D\'OR',	'Saint-Brieuc, une ville qui offre des visages divers et variés\r\n\r\nLa ville de Saint-Brieuc est reconnue pour sa qualité de vie, en particulier par les seniors ; elle offre des visages divers et variés et à ses portes se succèdent falaises, criques, pointes, dunes, plages...\r\nElle forme alors un lieu de vie privilégié, où il fait bon vivre !last',	'Saint-Brieuc, une ville qui offre des visages divers et variés\r\n\r\nLa ville de Saint-Brieuc est reconnue pour sa qualité de vie, en particulier par les seniors ; elle offre des visages divers et variés et à ses portes se succèdent falaises, criques, pointes, dunes, plages...\r\nElle forme alors un lieu de vie privilégié, où il fait bon vivre !\r\n\r\nUn centre historique mêlant pierre typique et maisons à pans de bois autour de sa cathédrale du XIIème siècle un patrimoine Art Déco, des rues piétonnes et des places animées, des espaces verts, ou encore le Port du Légué avec ses plaisanciers et ses pêcheurs... \r\n\r\n\r\nLes atouts de la résidence Le Griffon d\'Or\r\n\r\n132 logements du studio au 3 pièces, avec balcon, terrasse ou jardin privatif\r\nCuisine équipée\r\nSalle de bain avec douche ultra-plate\r\nParkings couverts\r\n+ de 1000 m² d\'espaces Club\r\nUn restaurant de qualité, une cuisine à base de produits frais, préparée par un chef\r\n\r\n\r\nLa Résidence bénéficie d\'un emplacement privilégié proche des commodités, au cœur de la ville de Saint-Brieuc, entre le centre historique et des quartiers résidentiels récents.\r\n\r\nLes résidents peuvent profiter des deux arrêts de bus desservant 3 lignes qui se situent à proximité de la Résidence.',	2);

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2016_03_09_151448_create_days_table',	1),
(2,	'2016_03_09_151448_create_restaurants_table',	1),
(3,	'2016_03_09_151448_create_workhours_table',	1),
(4,	'2016_03_09_151458_create_foreign_keys',	1);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('yannassoumou@gmail.com',	'$2y$10$atMsAF9p7G94LR7rnTaI5OHHDHHLPRQSS4aIsHUhKew2LTazNio52',	'2020-01-13 11:50:09');

DROP TABLE IF EXISTS `proposerhopital`;
CREATE TABLE `proposerhopital` (
  `reference` varchar(25) NOT NULL,
  `code` int(11) NOT NULL,
  PRIMARY KEY (`reference`,`code`),
  KEY `proposerhopital_Fournisseur0_FK` (`code`),
  CONSTRAINT `proposerhopital_Fournisseur0_FK` FOREIGN KEY (`code`) REFERENCES `Fournisseur` (`code`),
  CONSTRAINT `proposerhopital_hopital_FK` FOREIGN KEY (`reference`) REFERENCES `hopital` (`reference`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `proposerlogement`;
CREATE TABLE `proposerlogement` (
  `reference` varchar(25) NOT NULL,
  `code` int(11) NOT NULL,
  PRIMARY KEY (`reference`,`code`),
  KEY `proposerlogement_Fournisseur0_FK` (`code`),
  CONSTRAINT `proposerlogement_Fournisseur0_FK` FOREIGN KEY (`code`) REFERENCES `Fournisseur` (`code`),
  CONSTRAINT `proposerlogement_logement_FK` FOREIGN KEY (`reference`) REFERENCES `logements` (`reference`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `proposerlogement` (`reference`, `code`) VALUES
('log1test',	1);

DROP TABLE IF EXISTS `proposerrestaurant`;
CREATE TABLE `proposerrestaurant` (
  `reference` varchar(25) NOT NULL,
  `code` int(11) NOT NULL,
  PRIMARY KEY (`reference`,`code`),
  KEY `proposerrestaurant_0Fournisseur_FK` (`code`),
  CONSTRAINT `proposerrestaurant_0Fournisseur_FK` FOREIGN KEY (`code`) REFERENCES `Fournisseur` (`code`),
  CONSTRAINT `proposerrestaurant_ibfk_1` FOREIGN KEY (`reference`) REFERENCES `restaurant` (`reference`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `proposerrestaurant` (`reference`, `code`) VALUES
('jadis',	1);

DROP TABLE IF EXISTS `quartiers`;
CREATE TABLE `quartiers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `rue` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `id_dep` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_dep` (`id_dep`),
  CONSTRAINT `quartiers_ibfk_1` FOREIGN KEY (`id_dep`) REFERENCES `departements` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `quartiers` (`id`, `nom`, `rue`, `adresse`, `id_dep`) VALUES
(1,	'5 allee de la croix des hetres',	'5',	'allee de la croix des hetres',	1),
(2,	'15, Rue de la Corderie',	'15',	'Rue de la Corderie',	2);

DROP TABLE IF EXISTS `reserver_appartements`;
CREATE TABLE `reserver_appartements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(10) unsigned NOT NULL,
  `id_workhours` int(10) unsigned NOT NULL,
  `id_app` int(11) NOT NULL,
  `statut` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_client` (`id_client`),
  KEY `id_workhours` (`id_workhours`),
  KEY `id_app` (`id_app`),
  CONSTRAINT `reserver_appartements_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `users` (`id`) ON DELETE NO ACTION,
  CONSTRAINT `reserver_appartements_ibfk_2` FOREIGN KEY (`id_workhours`) REFERENCES `workhours` (`id_workhours`) ON DELETE NO ACTION,
  CONSTRAINT `reserver_appartements_ibfk_3` FOREIGN KEY (`id_app`) REFERENCES `appartements` (`id`) ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `reserver_appartements` (`id`, `id_client`, `id_workhours`, `id_app`, `statut`) VALUES
(1,	1,	2,	2,	'test'),
(2,	1,	2,	2,	'test'),
(3,	1,	1,	2,	'test'),
(4,	1,	1,	2,	'test'),
(5,	1,	2,	2,	'test'),
(6,	1,	1,	2,	'test'),
(7,	1,	1,	2,	'test'),
(8,	1,	1,	2,	'test'),
(9,	1,	1,	2,	'test'),
(10,	1,	1,	2,	'test'),
(11,	1,	1,	2,	'test'),
(12,	1,	1,	2,	'test'),
(13,	1,	1,	2,	'test'),
(14,	1,	1,	2,	'test'),
(15,	1,	1,	2,	'test'),
(16,	1,	1,	2,	'test'),
(17,	1,	1,	2,	'test'),
(18,	2,	2,	2,	'test'),
(19,	3,	2,	2,	'test');

DROP TABLE IF EXISTS `reserver_chambre`;
CREATE TABLE `reserver_chambre` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `id_workhours` int(10) unsigned NOT NULL,
  `STATUT` varchar(50) NOT NULL,
  PRIMARY KEY (`id`,`code`),
  KEY `reserver_chambre_Client0_FK` (`code`),
  KEY `id_workhours` (`id_workhours`),
  CONSTRAINT `reserver_chambre_ibfk_1` FOREIGN KEY (`id_workhours`) REFERENCES `workhours` (`id_workhours`) ON DELETE NO ACTION,
  CONSTRAINT `reserver_chambre_ibfk_2` FOREIGN KEY (`id`) REFERENCES `chambre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `reserver_chambre_ibfk_3` FOREIGN KEY (`code`) REFERENCES `Client` (`code`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `restaurant`;
CREATE TABLE `restaurant` (
  `reference` varchar(25) NOT NULL,
  `designation` varchar(250) DEFAULT NULL,
  `localisation` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`reference`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `restaurant` (`reference`, `designation`, `localisation`) VALUES
('jadis',	'hswhsw',	'jdedwj'),
('red',	'de',	'dd');

DROP TABLE IF EXISTS `restaurants`;
CREATE TABLE `restaurants` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `restaurants` (`id`, `created_at`, `updated_at`, `name`) VALUES
(2,	NULL,	NULL,	'Restaurant 1'),
(3,	NULL,	NULL,	'Restaurant 2'),
(4,	NULL,	NULL,	'Restaurant 3'),
(5,	NULL,	NULL,	'Restaurant 4'),
(6,	NULL,	NULL,	'Restaurant 5'),
(7,	NULL,	NULL,	'Restaurant 6'),
(8,	NULL,	NULL,	'Restaurant 7');

DROP TABLE IF EXISTS `tabler`;
CREATE TABLE `tabler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(150) DEFAULT NULL,
  `reference` varchar(25) DEFAULT NULL,
  `prix` decimal(15,3) DEFAULT NULL,
  `reference_restaurant` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `table_restaurant_FK` (`reference_restaurant`),
  CONSTRAINT `table_restaurant_FK` FOREIGN KEY (`reference_restaurant`) REFERENCES `restaurant` (`reference`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'default',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'ass',	'yannassoumou@gmail.com',	'$2y$10$bzjgq07guUJqBum79oLfu.K/EG3OD/11EFWu61kMPKS/iW8EdMx2i',	'admin',	'94tstX9rH9TCOpHxtEs4vxD2I39iOTRYLaEfiqoADefHwCOr81XIaripe3Ek',	'2019-12-27 12:08:39',	'2020-01-13 04:44:36'),
(2,	'mutqf',	'neilteamgangs@hotmail.fr',	'$2y$10$H4wQgQTd3h8yFWNXxu3i/ugdKQv4bcwBZs.QLpLJLQSDn.TT0GPcu',	'default',	'w87Kt3Xs8APd5oC8cYc4xy9jBcz39XVVdRjNmdJIuL7qjvw6Gsl4ctPo8KIN',	'2020-01-13 04:48:17',	'2020-01-13 04:48:17'),
(3,	'yann test',	'testemail@gmail.com',	'$2y$10$rFoRcYz3QMI/ZIDYHpK5n.hh/E9XmU3HeME7YGd.VFl06GrLnp5Q6',	'default',	'EBBvGcsZyP2aEIACI5iA76OQkKrwE2dGpEqIBw1rSuI0x7dUwUEzrr1PbRiR',	'2020-01-14 11:13:56',	'2020-01-14 11:13:56');

DROP TABLE IF EXISTS `workhours`;
CREATE TABLE `workhours` (
  `id_workhours` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `appart_id` int(11) NOT NULL,
  `day_id` int(10) unsigned NOT NULL,
  `start_time` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `end_time` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_workhours`),
  KEY `workhours_restaurant_id_foreign` (`appart_id`),
  KEY `workhours_day_id_foreign` (`day_id`),
  CONSTRAINT `workhours_day_id_foreign` FOREIGN KEY (`day_id`) REFERENCES `days` (`id`),
  CONSTRAINT `workhours_ibfk_1` FOREIGN KEY (`appart_id`) REFERENCES `appartements` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `workhours` (`id_workhours`, `created_at`, `updated_at`, `appart_id`, `day_id`, `start_time`, `end_time`) VALUES
(1,	NULL,	NULL,	2,	2,	'10:10',	'12:30'),
(2,	NULL,	NULL,	2,	4,	'22:12',	'23:20');

-- 2020-01-16 06:30:25
