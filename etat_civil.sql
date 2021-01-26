-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 26 jan. 2021 à 13:58
-- Version du serveur :  10.1.34-MariaDB
-- Version de PHP :  7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `etat_civil`
--

-- --------------------------------------------------------

--
-- Structure de la table `adoption`
--

CREATE TABLE `adoption` (
  `id` int(11) NOT NULL,
  `pere_adoptif_id` int(11) DEFAULT NULL,
  `mere_adoptif_id` int(11) DEFAULT NULL,
  `enfant_adopte_id` int(11) NOT NULL,
  `date_adoption` date NOT NULL,
  `date_enregistrement` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `adoption`
--

INSERT INTO `adoption` (`id`, `pere_adoptif_id`, `mere_adoptif_id`, `enfant_adopte_id`, `date_adoption`, `date_enregistrement`, `status`) VALUES
(1, 18, 20, 16, '2021-01-07', '2021-01-22', 'validé');

-- --------------------------------------------------------

--
-- Structure de la table `colline`
--

CREATE TABLE `colline` (
  `id` int(11) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `colline`
--

INSERT INTO `colline` (`id`, `zone_id`, `nom`) VALUES
(1, 2, 'Adams Ranch'),
(2, 1, 'Watsica Run'),
(3, 2, 'Johnston Wells'),
(4, 1, 'Amira Valley'),
(5, 2, 'Lebsack Squares'),
(6, 4, 'Medhurst Flat');

-- --------------------------------------------------------

--
-- Structure de la table `commune`
--

CREATE TABLE `commune` (
  `id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commune`
--

INSERT INTO `commune` (`id`, `province_id`, `nom`, `code`) VALUES
(1, 4, 'Muha', '2'),
(2, 4, 'Mukaza', '0'),
(3, 1, 'Rugazi', '0'),
(4, 1, 'Musigati', '5'),
(5, 2, 'Bukinanyana', '3');

-- --------------------------------------------------------

--
-- Structure de la table `deces`
--

CREATE TABLE `deces` (
  `id` int(11) NOT NULL,
  `personne_id` int(11) NOT NULL,
  `date_deces` date NOT NULL,
  `lieu_deces` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_enregistrement_deces` date NOT NULL,
  `cause_deces` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_complet_demandeur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse_demandeur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_demandeur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copie_certificat_deces` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_acte_deces` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_volume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `deces`
--

INSERT INTO `deces` (`id`, `personne_id`, `date_deces`, `lieu_deces`, `date_enregistrement_deces`, `cause_deces`, `nom_complet_demandeur`, `adresse_demandeur`, `phone_demandeur`, `copie_certificat_deces`, `numero_acte_deces`, `numero_volume`, `status`) VALUES
(1, 6, '2021-01-06', 'Kugikwa', '2021-01-18', 'Accident', 'Ndarusanze Déogratias', '11 Kinama, Ntahangwa', '65745551', NULL, 'test-254', 'test-1', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `id` int(11) NOT NULL,
  `date_demande` date NOT NULL,
  `lieu_demande` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frais_total_demande` double DEFAULT NULL,
  `numero_recu_paiement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_demande` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personne_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`id`, `date_demande`, `lieu_demande`, `frais_total_demande`, `numero_recu_paiement`, `status_demande`, `personne_id`) VALUES
(1, '2021-01-06', 'Bwiza', 0, 'R-5644', 'encours', 1),
(2, '2021-01-06', 'Bwiza', 19000, 'R-5644', 'encours', 1),
(3, '2021-01-12', 'Bwiza', 7500, 'K5544', 'validé', 1),
(4, '2021-01-07', 'Gihosha', 2500, 'R-5644jk', 'encours', 2),
(5, '2021-01-01', 'Ngozi', 3000, 'NG-6555', 'encours', 1),
(6, '2021-01-06', 'Bwiza', 5000, 'R-5644', 'encours', 1);

-- --------------------------------------------------------

--
-- Structure de la table `detail_demande`
--

CREATE TABLE `detail_demande` (
  `id` int(11) NOT NULL,
  `demande_id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `frais_unitaire` double NOT NULL,
  `ligne` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_acte` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_volume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `detail_demande`
--

INSERT INTO `detail_demande` (`id`, `demande_id`, `document_id`, `quantite`, `frais_unitaire`, `ligne`, `numero_acte`, `numero_volume`) VALUES
(1, 1, 1, 1, 2000, '1', NULL, NULL),
(2, 2, 1, 1, 2000, '1', NULL, NULL),
(3, 2, 2, 2, 2500, '2', NULL, NULL),
(4, 2, 2, 2, 2500, '3', NULL, NULL),
(5, 2, 2, 2, 2500, '4', NULL, NULL),
(6, 2, 3, 1, 2000, '5', NULL, NULL),
(7, 3, 3, 3, 2500, '1', NULL, NULL),
(8, 4, 2, 1, 2500, '1', NULL, NULL),
(9, 5, 3, 1, 3000, '1', '2018-05', '465'),
(10, 6, 2, 1, 3000, '1', '2018-05', '469'),
(11, 6, 7, 1, 2000, '2', '2019-05', '467');

-- --------------------------------------------------------

--
-- Structure de la table `divorce`
--

CREATE TABLE `divorce` (
  `id` int(11) NOT NULL,
  `mariage_id` int(11) NOT NULL,
  `date_divorce` date NOT NULL,
  `lieu_decision_divorce` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_enregistrement_divorce` date NOT NULL,
  `nombre_enfants_issus_mariage` int(11) DEFAULT NULL,
  `profession_epoux` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession_epouse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_decision_divorce` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `divorce`
--

INSERT INTO `divorce` (`id`, `mariage_id`, `date_divorce`, `lieu_decision_divorce`, `date_enregistrement_divorce`, `nombre_enfants_issus_mariage`, `profession_epoux`, `profession_epouse`, `reference_decision_divorce`) VALUES
(1, 2, '2021-01-15', 'Ngozi', '2021-01-17', 3, 'Business man', 'Médécin', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210114232926', '2021-01-15 00:29:44', 6434),
('DoctrineMigrations\\Version20210114233637', '2021-01-15 00:36:54', 833),
('DoctrineMigrations\\Version20210115165130', '2021-01-15 17:51:50', 1401),
('DoctrineMigrations\\Version20210115171118', '2021-01-15 18:12:30', 870),
('DoctrineMigrations\\Version20210115171822', '2021-01-15 18:18:37', 406),
('DoctrineMigrations\\Version20210115225946', '2021-01-16 00:00:09', 4341),
('DoctrineMigrations\\Version20210116201910', '2021-01-16 21:19:23', 1596),
('DoctrineMigrations\\Version20210116225820', '2021-01-16 23:58:36', 1509),
('DoctrineMigrations\\Version20210117150806', '2021-01-17 16:08:21', 808),
('DoctrineMigrations\\Version20210117233721', '2021-01-18 00:37:37', 654),
('DoctrineMigrations\\Version20210118080945', '2021-01-18 09:10:10', 695),
('DoctrineMigrations\\Version20210118095221', '2021-01-18 10:56:38', 2105),
('DoctrineMigrations\\Version20210118185755', '2021-01-18 19:58:13', 4413),
('DoctrineMigrations\\Version20210118191723', '2021-01-18 20:18:07', 1330),
('DoctrineMigrations\\Version20210121202912', '2021-01-21 21:29:28', 1218),
('DoctrineMigrations\\Version20210124231933', '2021-01-25 00:27:33', 834);

-- --------------------------------------------------------

--
-- Structure de la table `document`
--

CREATE TABLE `document` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frais_unitaire` double NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `document`
--

INSERT INTO `document` (`id`, `type`, `frais_unitaire`, `description`) VALUES
(1, 'Attestation de naissance', 2000, 'Une attestation originale'),
(2, 'Extrait d\'acte de naissance', 2500, 'Extrait naissance'),
(3, 'Extrait d\'acte de mariage', 3000, 'Extrait mariage'),
(4, 'Extrait d\'acte de décès', 2450, ''),
(5, 'Attestation d\'adoption', 3500, ''),
(6, 'Extrait de divorce', 5000, ''),
(7, 'Attestation composition familiale', 3000, ''),
(8, 'Copie intégrale mariage', 3000, '');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `sexe` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id`, `sexe`) VALUES
(1, 'féminin'),
(2, 'masculin');

-- --------------------------------------------------------

--
-- Structure de la table `mariage`
--

CREATE TABLE `mariage` (
  `id` int(11) NOT NULL,
  `personne_epoux_id` int(11) NOT NULL,
  `personne_epouse_id` int(11) NOT NULL,
  `date_mariage` date NOT NULL,
  `commune_mariage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_mariage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colline_residence_epoux` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colline_residence_epouse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone_residence_epoux` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone_residence_epouse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commune_residence_epoux` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commune_residence_epouse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_residence_epoux` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_residence_epouse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation_epoux` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation_epouse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_acte_mariage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_volume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom_complet_pere_epoux` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_complet_mere_epoux` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_complet_pere_epouse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_complet_mere_epouse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_complet_temoin_epoux` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_complet_temoin_epouse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse_temoin_epoux` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse_temoin_epouse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession_temoin_epoux` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession_temoin_epouse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_preuve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `mariage`
--

INSERT INTO `mariage` (`id`, `personne_epoux_id`, `personne_epouse_id`, `date_mariage`, `commune_mariage`, `province_mariage`, `colline_residence_epoux`, `colline_residence_epouse`, `zone_residence_epoux`, `zone_residence_epouse`, `commune_residence_epoux`, `commune_residence_epouse`, `province_residence_epoux`, `province_residence_epouse`, `occupation_epoux`, `occupation_epouse`, `numero_acte_mariage`, `numero_volume`, `nom_complet_pere_epoux`, `nom_complet_mere_epoux`, `nom_complet_pere_epouse`, `nom_complet_mere_epouse`, `nom_complet_temoin_epoux`, `nom_complet_temoin_epouse`, `adresse_temoin_epoux`, `adresse_temoin_epouse`, `profession_temoin_epoux`, `profession_temoin_epouse`, `photo_preuve`, `status`) VALUES
(1, 1, 19, '2020-12-10', 'Mukaza', 'Mairie', 'Q5', 'Gihosha', 'Ngagara', 'Gihosha', 'Ntahangwa', 'Ntahangwa', 'Mairie', 'Mairie', 'TIC', 'Cadre de banque', '54-kk', '55', 'Muhizi Gérard', 'Munezero Landrine', 'Rugori André', 'Ndikuriyo Annonciate', 'Kiganahe James', 'Kaneza Vicky', '55 av kiniga, Mutanga Sud', '12 Gikoma, Mutanga Nord', 'IT', 'TIC', NULL, NULL),
(2, 9, 10, '2000-01-05', 'Ngozi', 'Ngozi', 'Mugomere', 'Kirema', 'Mparamirundi', 'Kayanza', 'Muha', 'Kayanza', 'Bujumbura Mairie', 'kayanza', 'Commerçant', 'enseignante', '54-kk', NULL, 'Banyuzuriyeko André', 'Maniranzi Béatrice', 'Miburo Pontien', 'Ndacasaba Consolate', 'Nindaba Ferdinand', 'Kwizera Digne', 'Ngozi, kinyami', 'Ngozi, Rubavu', 'Agronome', 'Infirmière', NULL, NULL),
(3, 7, 11, '2020-11-07', 'Gihogazi', 'Karusi', 'Bweru', 'Bwiza', 'Karusi centre', 'Gikomero', 'Buhiga', 'Bugenyuzi', 'Karusi', 'Ruyigi', 'vente', 'enseignante', 'K254/g5321', '15', 'Makana Paul', 'munoni Béatrice', 'Minani Zacharie', 'Bakundwa Léa', 'Ndayikunze Jimmy', 'Mukamwiza Jeanne', 'Kibamba, karusi', 'Kumuco, Gitega', 'Enseignant', 'Vétarinare', NULL, NULL),
(4, 4, 8, '2020-12-19', 'Buraza', 'Gitega', 'Gihinga', 'Matara', 'Bukato', 'Bukato', 'Bukirasazi', 'Bukirasazi', 'Gitega', 'Gitega', 'Tailleur', 'Ensseignante', '54-M5654', '233', 'Kabura Siméon', 'Gwajekera Marie', 'Fatiro Manasse', 'Ndayishimiye Caritas', 'Habarugira Jérôme', 'Mukasewabo Joella', 'Kibatu, Bukirasazi', 'Hanga, Bukirasazi', 'Enseignant', 'Enseignante', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `naissance`
--

CREATE TABLE `naissance` (
  `id` int(11) NOT NULL,
  `personne_id` int(11) NOT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colline_naissance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone_naissance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commune_naissance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_naissance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays_naissance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_inscription` date NOT NULL,
  `profession_pere` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse_pere` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profession_mere` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse_mere` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_acte_naissance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_volume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_complet_temoin_un` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse_temoin_un` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession_temoin_un` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_complet_temoin_deux` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse_temoin_deux` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession_temoin_deux` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `naissance`
--

INSERT INTO `naissance` (`id`, `personne_id`, `date_naissance`, `lieu_naissance`, `colline_naissance`, `zone_naissance`, `commune_naissance`, `province_naissance`, `pays_naissance`, `date_inscription`, `profession_pere`, `adresse_pere`, `profession_mere`, `adresse_mere`, `numero_acte_naissance`, `numero_volume`, `nom_complet_temoin_un`, `adresse_temoin_un`, `profession_temoin_un`, `nom_complet_temoin_deux`, `adresse_temoin_deux`, `profession_temoin_deux`, `status`) VALUES
(1, 69, '2021-01-07', 'Bunga', 'Mabanza', 'Muyama', 'Burambi', 'Rumonge', 'Burundi', '2021-01-16', NULL, NULL, 'Commerçante', 'adresseMere', 'hhg-5524', 'kjg-56', 'Ndikumwami Charles', 'Busagara, Kimera', 'commerçant', 'Hakiza Lazare', 'Mugomere, Burambi', 'Enseignant', NULL),
(2, 72, '2021-01-06', 'Cijima', 'Rohero 1', 'Rohero', 'Muha', 'Bujumbura Mairie', 'Burundi', '2021-01-25', 'Commerçant', 'Rohero 1', 'Commerçante', 'Rohero 1', 'Mh-55255', 'Mh-56', 'mazameza Luc', 'Asiatique, av Ntwarante, 45', 'Journaliste', 'Kankindi Didacienne', 'Kinindo, Q. OUA, 50', 'Technicienne Télécoms', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id` int(11) NOT NULL,
  `pere_id` int(11) DEFAULT NULL,
  `mere_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `colline_naissance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zone_naissance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commune_naissance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_naissance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pays_naissance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_vital` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colline_residence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone_residence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commune_residence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_residence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationalite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_carte_nationale_identite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id`, `pere_id`, `mere_id`, `nom`, `prenom`, `date_naissance`, `colline_naissance`, `zone_naissance`, `commune_naissance`, `province_naissance`, `pays_naissance`, `status_vital`, `sexe`, `colline_residence`, `zone_residence`, `commune_residence`, `province_residence`, `nationalite`, `numero_carte_nationale_identite`, `profession`, `photo`, `pin`) VALUES
(1, 6, 9, 'Franck', 'Nduwimana', '2016-09-23', 'Kigeni', 'Mungwa', 'Ryansoro', 'Gitega', 'Burundi', 'en vie', 'feminin', 'Kigozi', 'Butemba', 'Gitega', 'Gitega', 'Burundaise', NULL, 'Umurimyi', NULL, NULL),
(2, NULL, NULL, 'Nduwayo', 'Jeanne', '1980-05-30', 'Higiro', 'Makaba', 'Mugamba', 'Bururi', 'Burundi', 'en vie', 'masculin', 'Heha', 'Ijenda', 'Mugongomanga', 'Bujumbura', 'Burundaise', NULL, 'Umudandaza', NULL, NULL),
(3, NULL, NULL, 'Bigirindavyi', 'Laurent', '1955-06-22', 'Kinazi', 'Gatara', 'Gatara', 'Kayanza', 'Burundi', 'en vie', 'feminin', 'Kinazi', 'Gatara', 'Gatara', 'Kayanza', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(4, NULL, NULL, 'Gatoto', 'Diomède', '1998-12-06', 'Musanze', 'Mugwiza', 'Mugwi', 'Cibitoke', 'Burundi', 'en vie', 'feminin', 'Buringa', 'Buringa', 'Gihanga', 'Bubanza', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(5, NULL, NULL, 'Baransata', 'Lin', '2009-05-26', 'Kizu', 'Murango', 'Ngozo', 'Province', 'Burundi', 'en vie', 'masculin', 'Kinyami', 'Ngozi', 'Ngozi', 'Ngozi', 'Burundaise', NULL, 'Commercant', NULL, NULL),
(6, NULL, NULL, 'Karikera', 'Générose', '1987-03-17', 'Mbizi', 'Gobero', 'Rutana', 'Rutana', 'Burundi', 'en vie', 'feminin', 'Munazi', 'Mubirizi', 'Bukemba', 'Rutana', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(7, NULL, NULL, 'Nahimana', 'Gaspard', '1984-07-07', 'Ruboza', 'Ruzibazi', 'Kabezi', 'Bujumbura', 'Burundi', 'en vie', 'masculin', 'Q3', 'Ngagara', 'Ntahangwa', 'Bujumbura Mairie', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(8, NULL, NULL, 'Gakobwa', 'Anne', '1996-04-22', 'Heha', 'Mukomezwa', 'Mukike', 'Bujumbura', 'Burundi', 'en vie', 'masculin', 'Ijenda', 'Ijenda', 'Mugongomanga', 'Bujumbura ', 'Burundaise', NULL, 'Commerçant', NULL, NULL),
(9, NULL, NULL, 'Harimenshi', 'Hilaire', '1984-03-25', 'Zuba', 'Musobo', 'Busiga', 'Ngozi', 'Burundi', 'en vie', 'feminin', 'Kinyami', 'Ngozi', 'Ngozi', 'Ngozi', 'Burundaise', NULL, 'Agronome', NULL, NULL),
(10, NULL, NULL, 'Ndayisaba', 'Kamille', '1987-01-31', 'Gozi', 'Mutumba', 'Mwakiro', 'Ruyigi', 'Burundi', 'en vie', 'masculin', 'kazina', 'Mukoni', 'Muyinga', 'Muyinga', 'Burundaise', NULL, 'Commerçant', NULL, NULL),
(11, NULL, NULL, 'Maggio', 'Shawna', '2017-11-04', 'Lebsack Squares', 'Idellachester', 'Lake Novella', 'Iowa', 'Burundi', 'en vie', 'masculin', 'Lebsack Squares', 'Idellachester', 'Lake Novella', 'Iowa', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(12, NULL, NULL, 'Bogan', 'Savannah', '2005-06-07', 'Johnston Wells', 'Idellachester', 'Lake Novella', 'Pennsylvania', 'Burundi', 'en vie', 'masculin', 'Johnston Wells', 'Idellachester', 'Lake Novella', 'Pennsylvania', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(13, NULL, NULL, 'Greenholt', 'Vince', '1996-09-14', 'Adams Ranch', 'Port Geraldshire', 'Fadelfurt', 'Pennsylvania', 'Burundi', 'en vie', 'masculin', 'Adams Ranch', 'Port Geraldshire', 'Fadelfurt', 'Pennsylvania', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(14, NULL, NULL, 'Shanahan', 'Rolando', '2012-03-25', 'Medhurst Flat', 'Port Geraldshire', 'North Sabryna', 'Bujumbura mairie', 'Burundi', 'en vie', 'feminin', 'Medhurst Flat', 'Port Geraldshire', 'North Sabryna', 'Arkansas', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(15, NULL, NULL, 'Barrows', 'Bell', '1986-07-31', 'Medhurst Flat', 'Reillymouth', 'East Raina', 'Washington', 'Burundi', 'en vie', 'masculin', 'Medhurst Flat', 'Reillymouth', 'East Raina', 'Washington', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(16, NULL, NULL, 'Upton', 'Ceasar', '2001-09-11', 'Johnston Wells', 'Reillymouth', 'North Sabryna', 'Iowa', 'Burundi', 'en vie', 'masculin', 'Johnston Wells', 'Reillymouth', 'North Sabryna', 'Iowa', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(17, NULL, NULL, 'Rau', 'Isadore', '2011-02-05', 'Medhurst Flat', 'Idellachester', 'Lake Novella', 'Nevada', 'Burundi', 'en vie', 'feminin', 'Medhurst Flat', 'Idellachester', 'Lake Novella', 'Nevada', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(18, NULL, NULL, 'Skiles', 'Nasir', '2011-03-10', 'Watsica Run', 'Idellachester', 'Lake Novella', 'Iowa', 'Burundi', 'en vie', 'masculin', 'Watsica Run', 'Idellachester', 'Lake Novella', 'Iowa', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(19, NULL, NULL, 'Gisèle', 'Barbara', '2001-03-02', 'Lebsack Squares', 'Reillymouth', 'Port Lucile', 'Bujumbura mairie', 'Burundi', 'en vie', 'masculin', 'Lebsack Squares', 'Reillymouth', 'Port Lucile', 'Arkansas', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(20, NULL, NULL, 'Beahan', 'Lorenzo', '1994-08-03', 'Watsica Run', 'Port Geraldshire', 'Fadelfurt', 'Bujumbura mairie', 'Burundi', 'en vie', 'feminin', 'Watsica Run', 'Port Geraldshire', 'Fadelfurt', 'Arkansas', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(21, NULL, NULL, 'Cummings', 'Lucio', '2000-02-13', 'Adams Ranch', 'Parkerstad', 'North Sabryna', 'Washington', 'Burundi', 'en vie', 'feminin', 'Adams Ranch', 'Parkerstad', 'North Sabryna', 'Washington', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(22, NULL, NULL, 'Mitchell', 'Taurean', '2004-03-12', 'Medhurst Flat', 'Port Geraldshire', 'East Raina', 'Bujumbura mairie', 'Burundi', 'en vie', 'masculin', 'Medhurst Flat', 'Port Geraldshire', 'East Raina', 'Arkansas', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(23, NULL, NULL, 'Green', 'Bridie', '2017-04-10', 'Amira Valley', 'Parkerstad', 'Lake Novella', 'Pennsylvania', 'Burundi', 'en vie', 'masculin', 'Amira Valley', 'Parkerstad', 'Lake Novella', 'Pennsylvania', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(24, NULL, NULL, 'Stamm', 'Yadira', '1994-12-28', 'Lebsack Squares', 'Port Geraldshire', 'East Raina', 'Pennsylvania', 'Burundi', 'en vie', 'masculin', 'Lebsack Squares', 'Port Geraldshire', 'East Raina', 'Pennsylvania', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(25, NULL, NULL, 'Konopelski', 'Retta', '2019-10-06', 'Adams Ranch', 'Reillymouth', 'Port Lucile', 'Nevada', 'Burundi', 'en vie', 'feminin', 'Adams Ranch', 'Reillymouth', 'Port Lucile', 'Nevada', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(26, NULL, NULL, 'Dicki', 'Horacio', '1992-06-05', 'Medhurst Flat', 'Reillymouth', 'Fadelfurt', 'Bujumbura mairie', 'Burundi', 'en vie', 'masculin', 'Medhurst Flat', 'Reillymouth', 'Fadelfurt', 'Arkansas', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(27, NULL, NULL, 'Smitham', 'Tyreek', '2017-11-04', 'Johnston Wells', 'Reillymouth', 'North Sabryna', 'Washington', 'Burundi', 'en vie', 'feminin', 'Johnston Wells', 'Reillymouth', 'North Sabryna', 'Washington', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(28, NULL, NULL, 'Rohan', 'Alexandre', '1999-12-26', 'Adams Ranch', 'Reillymouth', 'Fadelfurt', 'Nevada', 'Burundi', 'en vie', 'feminin', 'Adams Ranch', 'Reillymouth', 'Fadelfurt', 'Nevada', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(29, NULL, NULL, 'Bogan', 'Joanne', '1994-08-05', 'Adams Ranch', 'Parkerstad', 'East Raina', 'Bujumbura mairie', 'Burundi', 'en vie', 'masculin', 'Adams Ranch', 'Parkerstad', 'East Raina', 'Arkansas', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(30, NULL, NULL, 'Bode', 'Lesley', '2017-04-22', 'Adams Ranch', 'Idellachester', 'Lake Novella', 'Nevada', 'Burundi', 'en vie', 'feminin', 'Adams Ranch', 'Idellachester', 'Lake Novella', 'Nevada', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(31, NULL, NULL, 'Bahringer', 'Abraham', '2014-05-29', 'Adams Ranch', 'Parkerstad', 'East Raina', 'Nevada', 'Burundi', 'en vie', 'masculin', 'Adams Ranch', 'Parkerstad', 'East Raina', 'Nevada', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(32, NULL, NULL, 'Schaden', 'Jennings', '2020-03-20', 'Lebsack Squares', 'Idellachester', 'North Sabryna', 'Pennsylvania', 'Burundi', 'en vie', 'feminin', 'Lebsack Squares', 'Idellachester', 'North Sabryna', 'Pennsylvania', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(33, NULL, NULL, 'Senger', 'Esmeralda', '1990-04-12', 'Watsica Run', 'Parkerstad', 'Fadelfurt', 'Washington', 'Burundi', 'en vie', 'masculin', 'Watsica Run', 'Parkerstad', 'Fadelfurt', 'Washington', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(34, NULL, NULL, 'O\'Connell', 'Reginald', '1986-10-20', 'Johnston Wells', 'Parkerstad', 'Fadelfurt', 'Iowa', 'Burundi', 'en vie', 'masculin', 'Johnston Wells', 'Parkerstad', 'Fadelfurt', 'Iowa', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(35, NULL, NULL, 'Dare', 'Vincenza', '2008-06-27', 'Johnston Wells', 'Reillymouth', 'Fadelfurt', 'Bujumbura mairie', 'Burundi', 'en vie', 'feminin', 'Johnston Wells', 'Reillymouth', 'Fadelfurt', 'Arkansas', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(36, NULL, NULL, 'Quitzon', 'Delilah', '1994-11-25', 'Lebsack Squares', 'Parkerstad', 'Fadelfurt', 'Pennsylvania', 'Burundi', 'en vie', 'feminin', 'Lebsack Squares', 'Parkerstad', 'Fadelfurt', 'Pennsylvania', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(37, NULL, NULL, 'D\'Amore', 'Eldora', '2013-09-28', 'Lebsack Squares', 'Reillymouth', 'North Sabryna', 'Bujumbura mairie', 'Burundi', 'en vie', 'masculin', 'Lebsack Squares', 'Reillymouth', 'North Sabryna', 'Arkansas', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(38, NULL, NULL, 'Johnson', 'Anissa', '2020-04-17', 'Adams Ranch', 'Parkerstad', 'East Raina', 'Nevada', 'Burundi', 'en vie', 'feminin', 'Adams Ranch', 'Parkerstad', 'East Raina', 'Nevada', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(39, NULL, NULL, 'Considine', 'Louie', '1994-11-30', 'Medhurst Flat', 'Reillymouth', 'Port Lucile', 'Bujumbura mairie', 'Burundi', 'en vie', 'masculin', 'Medhurst Flat', 'Reillymouth', 'Port Lucile', 'Arkansas', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(40, NULL, NULL, 'Ortiz', 'Willard', '2011-06-01', 'Lebsack Squares', 'Idellachester', 'Port Lucile', 'Iowa', 'Burundi', 'en vie', 'feminin', 'Lebsack Squares', 'Idellachester', 'Port Lucile', 'Iowa', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(41, NULL, NULL, 'Rempel', 'Clyde', '2006-01-03', 'Adams Ranch', 'Parkerstad', 'North Sabryna', 'Pennsylvania', 'Burundi', 'en vie', 'feminin', 'Adams Ranch', 'Parkerstad', 'North Sabryna', 'Pennsylvania', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(42, NULL, NULL, 'Kertzmann', 'Zackery', '1999-09-27', 'Amira Valley', 'Idellachester', 'North Sabryna', 'Nevada', 'Burundi', 'en vie', 'masculin', 'Amira Valley', 'Idellachester', 'North Sabryna', 'Nevada', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(43, NULL, NULL, 'Predovic', 'Karson', '2009-01-06', 'Lebsack Squares', 'Port Geraldshire', 'East Raina', 'Nevada', 'Burundi', 'en vie', 'masculin', 'Lebsack Squares', 'Port Geraldshire', 'East Raina', 'Nevada', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(44, NULL, NULL, 'Johnson', 'Ashlynn', '1993-04-29', 'Adams Ranch', 'Port Geraldshire', 'North Sabryna', 'Pennsylvania', 'Burundi', 'en vie', 'feminin', 'Adams Ranch', 'Port Geraldshire', 'North Sabryna', 'Pennsylvania', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(45, NULL, NULL, 'Brakus', 'Esta', '1995-07-18', 'Johnston Wells', 'Port Geraldshire', 'Port Lucile', 'Pennsylvania', 'Burundi', 'en vie', 'feminin', 'Johnston Wells', 'Port Geraldshire', 'Port Lucile', 'Pennsylvania', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(46, NULL, NULL, 'Bogisich', 'Gabe', '2020-06-03', 'Lebsack Squares', 'Idellachester', 'East Raina', 'Bujumbura mairie', 'Burundi', 'en vie', 'feminin', 'Lebsack Squares', 'Idellachester', 'East Raina', 'Arkansas', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(47, NULL, NULL, 'Luettgen', 'Allen', '1996-09-01', 'Lebsack Squares', 'Idellachester', 'Port Lucile', 'Bujumbura mairie', 'Burundi', 'en vie', 'feminin', 'Lebsack Squares', 'Idellachester', 'Port Lucile', 'Arkansas', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(48, NULL, NULL, 'Rodriguez', 'Margarita', '1995-09-11', 'Watsica Run', 'Parkerstad', 'Port Lucile', 'Washington', 'Burundi', 'en vie', 'feminin', 'Watsica Run', 'Parkerstad', 'Port Lucile', 'Washington', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(49, NULL, NULL, 'Boyle', 'Walton', '1989-10-10', 'Lebsack Squares', 'Reillymouth', 'East Raina', 'Washington', 'Burundi', 'en vie', 'masculin', 'Lebsack Squares', 'Reillymouth', 'East Raina', 'Washington', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(50, NULL, NULL, 'Johnston', 'Karina', '2009-01-23', 'Watsica Run', 'Idellachester', 'Lake Novella', 'Bujumbura mairie', 'Burundi', 'en vie', 'masculin', 'Watsica Run', 'Idellachester', 'Lake Novella', 'Arkansas', 'Burundaise', NULL, 'Cultivateur', NULL, NULL),
(51, 9, 17, 'Nimpagaritse', 'Francis', '2016-01-17', 'Banda', 'Muzenga', 'Buyengeroo', 'Rumonge', 'Burundi', 'Vivant', 'Masculin', 'Carama', 'Kinama', 'Ntahangwa', 'Bujumbura Mairie', 'Burundaise', '0303/05322', 'IT', NULL, NULL),
(67, NULL, NULL, 'Nono', 'Claude', '2021-01-06', 'Kimera', 'Mudende', 'comm test', 'prov test', 'Burundi', 'en vie', 'Homme', 'Muzenga', 'Muzenga', 'comm test', 'prov test', 'Burundaise', NULL, 'Cultivateur', 'jj', 'kkj'),
(68, NULL, NULL, 'test1', 'test', '2021-01-14', 'Kobero', 'Kinanzi', 'comm test', 'prov test', 'Burundi', 'en vie', 'Femme', 'Buzimba', 'Higiro', 'comm test', 'prov test', 'Burundaise', NULL, 'Commerçante', '522', 'ooo'),
(69, 67, 68, 'Nono', 'Jean Junior', '2021-01-07', 'Mabanza', 'Muyama', 'Burambi', 'Rumonge', 'Burundi', 'en vie', 'Homme', 'Carama', 'Kinama', 'Ntahangwa', 'Bujumbura mairie', 'Burundaise', NULL, '', '-', '-'),
(70, NULL, NULL, 'Duduye', 'Pamphile', '1977-01-14', 'Buhama', 'Ciya', 'Rugazi', 'Bubanza', 'Burundi', 'en vie', 'Homme', 'Rohero 1', 'Rohero', 'Muha', 'Bujumbura Mairie', 'Burundaise', NULL, 'Commerçant', 'mll', 'kk'),
(71, NULL, NULL, 'Kabeza', 'Alica', '1982-01-07', 'Zuba', 'Kinanzi', 'Musigati', 'Bubanza', 'Burundi', 'en vie', 'Femme', 'Rohero 1', 'Rohero', 'Muha', 'Bujumbura Mairie', 'Burundaise', NULL, 'Commerçante', 'kk', 'kk'),
(72, 70, 71, 'ndaba', 'jean Micky', '2021-01-06', 'Rohero 1', 'Rohero', 'Muha', 'Bujumbura Mairie', 'Burundi', 'en vie', 'masculin', 'Rohero 1', 'Rohero', 'Muha', 'Bujumbura Mairie', 'Burundaise', NULL, '', 'mll', 'kk');

-- --------------------------------------------------------

--
-- Structure de la table `province`
--

CREATE TABLE `province` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `province`
--

INSERT INTO `province` (`id`, `nom`, `code`) VALUES
(1, 'Bubanza', '5'),
(2, 'Cibitoke', '5'),
(3, 'Gitega', '4'),
(4, 'Bujumbura Mairie', '0'),
(5, 'Rumonge', '4');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `title`) VALUES
(1, 'ROLE_ADMIN'),
(2, 'ROLE_OFFICER');

-- --------------------------------------------------------

--
-- Structure de la table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(1, 1),
(1, 5),
(2, 5),
(2, 6),
(2, 7),
(2, 8);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commune` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `hash`, `commune`, `province`) VALUES
(1, 'Gigi', 'Paul', 'gpaul@gmail.com', '$2y$13$NXwn47addJB6zfChC86X.uAPMGg.YM4WWLk97RFNwJggDxZG0CTUi', 'Mukaza', 'Mairie'),
(2, 'Ciza', 'Pablo', 'cpablo@yahoo.bi', '$2y$13$NXwn47addJB6zfChC86X.uAPMGg.YM4WWLk97RFNwJggDxZG0CTUi', 'Giheta', 'Gitega'),
(3, 'Nimpa', 'Francis', 'franimpa@yahoo.fr', '$2y$13$NXwn47addJB6zfChC86X.uAPMGg.YM4WWLk97RFNwJggDxZG0CTUi', 'Bukinanyana', 'Gitega'),
(5, 'testuser', 'test', 'test@test.com', '12345', 'Muha', 'Bubanza'),
(6, 'Nathan', 'test', 'ntathan@test.com', '1234', 'Musigati', 'Cibitoke'),
(7, 'Diridiri', 'Bebeto', 'dbebeto@gmail.com', '$2y$13$73TrQgWO/fotzBioA0Fhj./5G5laWdXUh6EIC5jaAFC1o9fflOTxm', 'Bukinanyana', 'Bubanza'),
(8, 'Habayo', 'Domitien', 'hdom@gmail.com', '$2y$13$7O7XuokPAEs4h21cZn.Tp.euW//MHNqtVkE5u0PCgApYHb1c7aLM.', 'Muha', 'Bubanza');

-- --------------------------------------------------------

--
-- Structure de la table `zone`
--

CREATE TABLE `zone` (
  `id` int(11) NOT NULL,
  `commune_id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `zone`
--

INSERT INTO `zone` (`id`, `commune_id`, `nom`) VALUES
(1, 5, 'Rweza'),
(2, 2, 'Rohero'),
(3, 1, 'Kanyosha'),
(4, 1, 'Kinindo'),
(5, 4, 'Zina');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adoption`
--
ALTER TABLE `adoption`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_EDDEB6A990DC95C3` (`enfant_adopte_id`),
  ADD KEY `IDX_EDDEB6A913BF0F6` (`pere_adoptif_id`),
  ADD KEY `IDX_EDDEB6A9B9571DB5` (`mere_adoptif_id`);

--
-- Index pour la table `colline`
--
ALTER TABLE `colline`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7202C52F9F2C3FAB` (`zone_id`);

--
-- Index pour la table `commune`
--
ALTER TABLE `commune`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E2E2D1EEE946114A` (`province_id`);

--
-- Index pour la table `deces`
--
ALTER TABLE `deces`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_3D7FEBBCA21BD112` (`personne_id`);

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2694D7A5A21BD112` (`personne_id`);

--
-- Index pour la table `detail_demande`
--
ALTER TABLE `detail_demande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_415B577080E95E18` (`demande_id`),
  ADD KEY `IDX_415B5770C33F7837` (`document_id`);

--
-- Index pour la table `divorce`
--
ALTER TABLE `divorce`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_FCC40AAD192813B` (`mariage_id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mariage`
--
ALTER TABLE `mariage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2FE8EC222D88E6B9` (`personne_epoux_id`),
  ADD KEY `IDX_2FE8EC22574307B9` (`personne_epouse_id`);

--
-- Index pour la table `naissance`
--
ALTER TABLE `naissance`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_F1D8D904A21BD112` (`personne_id`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_FCEC9EF3FD73900` (`pere_id`),
  ADD KEY `IDX_FCEC9EF39DEC40E` (`mere_id`);

--
-- Index pour la table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`role_id`,`user_id`),
  ADD KEY `IDX_332CA4DDD60322AC` (`role_id`),
  ADD KEY `IDX_332CA4DDA76ED395` (`user_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_A0EBC007131A4F72` (`commune_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adoption`
--
ALTER TABLE `adoption`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `colline`
--
ALTER TABLE `colline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `commune`
--
ALTER TABLE `commune`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `deces`
--
ALTER TABLE `deces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `detail_demande`
--
ALTER TABLE `detail_demande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `divorce`
--
ALTER TABLE `divorce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `document`
--
ALTER TABLE `document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `mariage`
--
ALTER TABLE `mariage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `naissance`
--
ALTER TABLE `naissance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT pour la table `province`
--
ALTER TABLE `province`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `zone`
--
ALTER TABLE `zone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `adoption`
--
ALTER TABLE `adoption`
  ADD CONSTRAINT `FK_EDDEB6A913BF0F6` FOREIGN KEY (`pere_adoptif_id`) REFERENCES `personne` (`id`),
  ADD CONSTRAINT `FK_EDDEB6A990DC95C3` FOREIGN KEY (`enfant_adopte_id`) REFERENCES `personne` (`id`),
  ADD CONSTRAINT `FK_EDDEB6A9B9571DB5` FOREIGN KEY (`mere_adoptif_id`) REFERENCES `personne` (`id`);

--
-- Contraintes pour la table `colline`
--
ALTER TABLE `colline`
  ADD CONSTRAINT `FK_7202C52F9F2C3FAB` FOREIGN KEY (`zone_id`) REFERENCES `zone` (`id`);

--
-- Contraintes pour la table `commune`
--
ALTER TABLE `commune`
  ADD CONSTRAINT `FK_E2E2D1EEE946114A` FOREIGN KEY (`province_id`) REFERENCES `province` (`id`);

--
-- Contraintes pour la table `deces`
--
ALTER TABLE `deces`
  ADD CONSTRAINT `FK_3D7FEBBCA21BD112` FOREIGN KEY (`personne_id`) REFERENCES `personne` (`id`);

--
-- Contraintes pour la table `demande`
--
ALTER TABLE `demande`
  ADD CONSTRAINT `FK_2694D7A5A21BD112` FOREIGN KEY (`personne_id`) REFERENCES `personne` (`id`);

--
-- Contraintes pour la table `detail_demande`
--
ALTER TABLE `detail_demande`
  ADD CONSTRAINT `FK_415B577080E95E18` FOREIGN KEY (`demande_id`) REFERENCES `demande` (`id`),
  ADD CONSTRAINT `FK_415B5770C33F7837` FOREIGN KEY (`document_id`) REFERENCES `document` (`id`);

--
-- Contraintes pour la table `divorce`
--
ALTER TABLE `divorce`
  ADD CONSTRAINT `FK_FCC40AAD192813B` FOREIGN KEY (`mariage_id`) REFERENCES `mariage` (`id`);

--
-- Contraintes pour la table `mariage`
--
ALTER TABLE `mariage`
  ADD CONSTRAINT `FK_2FE8EC222D88E6B9` FOREIGN KEY (`personne_epoux_id`) REFERENCES `personne` (`id`),
  ADD CONSTRAINT `FK_2FE8EC22574307B9` FOREIGN KEY (`personne_epouse_id`) REFERENCES `personne` (`id`);

--
-- Contraintes pour la table `naissance`
--
ALTER TABLE `naissance`
  ADD CONSTRAINT `FK_F1D8D904A21BD112` FOREIGN KEY (`personne_id`) REFERENCES `personne` (`id`);

--
-- Contraintes pour la table `personne`
--
ALTER TABLE `personne`
  ADD CONSTRAINT `FK_FCEC9EF39DEC40E` FOREIGN KEY (`mere_id`) REFERENCES `personne` (`id`),
  ADD CONSTRAINT `FK_FCEC9EF3FD73900` FOREIGN KEY (`pere_id`) REFERENCES `personne` (`id`);

--
-- Contraintes pour la table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `FK_332CA4DDA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_332CA4DDD60322AC` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `zone`
--
ALTER TABLE `zone`
  ADD CONSTRAINT `FK_A0EBC007131A4F72` FOREIGN KEY (`commune_id`) REFERENCES `commune` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
