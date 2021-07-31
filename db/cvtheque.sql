-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 31 juil. 2021 à 18:56
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cvtheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id_admin` int(11) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id_admin`, `nom`, `prenom`, `email`, `pass`) VALUES
(1, 'admin', 'admin', 'admin-dxc@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `certificat`
--

CREATE TABLE `certificat` (
  `id_certif` int(11) NOT NULL,
  `id_emp` int(11) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `date_de_certif` date NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `certificat`
--

INSERT INTO `certificat` (`id_certif`, `id_emp`, `nom`, `date_de_certif`, `description`) VALUES
(3, 16, 'ceh', '2021-07-05', 'ethical hacking');

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

CREATE TABLE `competence` (
  `id_competence` int(11) NOT NULL,
  `id_emp` int(11) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `competence`
--

INSERT INTO `competence` (`id_competence`, `id_emp`, `nom`, `description`) VALUES
(4, 16, 'html', 'je maitrise bien html'),
(5, 16, 'css', 'je maitrise bien css');

-- --------------------------------------------------------

--
-- Structure de la table `employeur`
--

CREATE TABLE `employeur` (
  `id_emp` int(11) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `metier` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `addresse` varchar(255) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `date_depot_cv` date DEFAULT NULL,
  `desactiver` varchar(6) NOT NULL,
  `image` varchar(255) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `nume_tel` varchar(14) NOT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `disadmin` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employeur`
--

INSERT INTO `employeur` (`id_emp`, `nom`, `prenom`, `metier`, `email`, `addresse`, `date_de_naissance`, `date_depot_cv`, `desactiver`, `image`, `pass`, `nume_tel`, `cv`, `disadmin`) VALUES
(16, 'zafati', 'salah', 'dev ops', 'salaheddineudemy@gmail.com', 'wifaq', '2000-08-06', '2021-07-22', 'true', 'php/empfiles/anthony.jpg', '1234', '0123456789', 'php/empfiles/rapport salah eddin zafati.docx', 'true'),
(18, '', '', 'dev', '', '', '0000-00-00', NULL, '', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `experience_professionel`
--

CREATE TABLE `experience_professionel` (
  `id_exp` int(11) NOT NULL,
  `id_emp` int(11) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `entreprise` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `experience_professionel`
--

INSERT INTO `experience_professionel` (`id_exp`, `id_emp`, `nom`, `entreprise`, `description`, `date_debut`, `date_fin`) VALUES
(3, 16, 'dev ops', 'dxc', 'jai hhhh jjjj kkk llll', '2018-06-06', '2021-07-23'),
(6, 18, 'salah', 'dxc', 'ccccccccccccccc', '2017-05-12', '2021-07-21');

-- --------------------------------------------------------

--
-- Structure de la table `filtre`
--

CREATE TABLE `filtre` (
  `id_recruteur` int(11) NOT NULL,
  `id_profile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `filtre`
--

INSERT INTO `filtre` (`id_recruteur`, `id_profile`) VALUES
(9, 9),
(9, 10);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id_formation` int(11) NOT NULL,
  `id_emp` int(11) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `ecole` varchar(40) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id_formation`, `id_emp`, `nom`, `ecole`, `date_debut`, `date_fin`) VALUES
(5, 16, 'bac', 'galelio', '2017-05-12', '2018-07-05');

-- --------------------------------------------------------

--
-- Structure de la table `langue`
--

CREATE TABLE `langue` (
  `id_langue` int(11) NOT NULL,
  `id_emp` int(11) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `niveau` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `langue`
--

INSERT INTO `langue` (`id_langue`, `id_emp`, `nom`, `niveau`) VALUES
(4, 16, 'arabe', 'courant'),
(5, 16, 'anglais', 'courant');

-- --------------------------------------------------------

--
-- Structure de la table `profile`
--

CREATE TABLE `profile` (
  `id_profile` int(11) NOT NULL,
  `nom` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `profile`
--

INSERT INTO `profile` (`id_profile`, `nom`) VALUES
(9, 'dev'),
(10, 'dev ops');

-- --------------------------------------------------------

--
-- Structure de la table `recruteur`
--

CREATE TABLE `recruteur` (
  `id_recruteur` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `desactiver` varchar(6) NOT NULL,
  `post` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `numero_tele` varchar(14) NOT NULL,
  `disadmin` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `recruteur`
--

INSERT INTO `recruteur` (`id_recruteur`, `id_admin`, `nom`, `prenom`, `email`, `desactiver`, `post`, `image`, `pass`, `numero_tele`, `disadmin`) VALUES
(9, 1, 'zafati', 'salah', 'salah07bom@gmail.com', 'true', 'rh', 'php/rec/imageprofile.jpg', '123', '123456', 'true'),
(10, 1, 'sss', 'sss', 'salah@gmail.com', 'false', 'ppp', 'C:/xamp/htdocs/cvte/php/rec/Screenshot_(22).png', '123', '123456', 'true');

-- --------------------------------------------------------

--
-- Structure de la table `voir`
--

CREATE TABLE `voir` (
  `id_recruteur` int(11) NOT NULL,
  `id_emp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `certificat`
--
ALTER TABLE `certificat`
  ADD PRIMARY KEY (`id_certif`),
  ADD KEY `FK_ajouter_certif` (`id_emp`);

--
-- Index pour la table `competence`
--
ALTER TABLE `competence`
  ADD PRIMARY KEY (`id_competence`),
  ADD KEY `FK_ajouter_competence` (`id_emp`);

--
-- Index pour la table `employeur`
--
ALTER TABLE `employeur`
  ADD PRIMARY KEY (`id_emp`);

--
-- Index pour la table `experience_professionel`
--
ALTER TABLE `experience_professionel`
  ADD PRIMARY KEY (`id_exp`),
  ADD KEY `FK_ajoute_experience` (`id_emp`);

--
-- Index pour la table `filtre`
--
ALTER TABLE `filtre`
  ADD PRIMARY KEY (`id_recruteur`,`id_profile`),
  ADD KEY `FK_filtre` (`id_profile`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id_formation`),
  ADD KEY `FK_ajoute_formation` (`id_emp`);

--
-- Index pour la table `langue`
--
ALTER TABLE `langue`
  ADD PRIMARY KEY (`id_langue`),
  ADD KEY `FK_ajoute_langue` (`id_emp`);

--
-- Index pour la table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_profile`),
  ADD UNIQUE KEY `nom` (`nom`);

--
-- Index pour la table `recruteur`
--
ALTER TABLE `recruteur`
  ADD PRIMARY KEY (`id_recruteur`),
  ADD KEY `FK_creer` (`id_admin`);

--
-- Index pour la table `voir`
--
ALTER TABLE `voir`
  ADD PRIMARY KEY (`id_recruteur`,`id_emp`),
  ADD KEY `FK_voir` (`id_emp`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `certificat`
--
ALTER TABLE `certificat`
  MODIFY `id_certif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `competence`
--
ALTER TABLE `competence`
  MODIFY `id_competence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `employeur`
--
ALTER TABLE `employeur`
  MODIFY `id_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `experience_professionel`
--
ALTER TABLE `experience_professionel`
  MODIFY `id_exp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id_formation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `langue`
--
ALTER TABLE `langue`
  MODIFY `id_langue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `profile`
--
ALTER TABLE `profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `recruteur`
--
ALTER TABLE `recruteur`
  MODIFY `id_recruteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `certificat`
--
ALTER TABLE `certificat`
  ADD CONSTRAINT `FK_ajouter_certif` FOREIGN KEY (`id_emp`) REFERENCES `employeur` (`id_emp`);

--
-- Contraintes pour la table `competence`
--
ALTER TABLE `competence`
  ADD CONSTRAINT `FK_ajouter_competence` FOREIGN KEY (`id_emp`) REFERENCES `employeur` (`id_emp`);

--
-- Contraintes pour la table `experience_professionel`
--
ALTER TABLE `experience_professionel`
  ADD CONSTRAINT `FK_ajoute_experience` FOREIGN KEY (`id_emp`) REFERENCES `employeur` (`id_emp`);

--
-- Contraintes pour la table `filtre`
--
ALTER TABLE `filtre`
  ADD CONSTRAINT `FK_filtre` FOREIGN KEY (`id_profile`) REFERENCES `profile` (`id_profile`),
  ADD CONSTRAINT `FK_filtre2` FOREIGN KEY (`id_recruteur`) REFERENCES `recruteur` (`id_recruteur`);

--
-- Contraintes pour la table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `FK_ajoute_formation` FOREIGN KEY (`id_emp`) REFERENCES `employeur` (`id_emp`);

--
-- Contraintes pour la table `langue`
--
ALTER TABLE `langue`
  ADD CONSTRAINT `FK_ajoute_langue` FOREIGN KEY (`id_emp`) REFERENCES `employeur` (`id_emp`);

--
-- Contraintes pour la table `recruteur`
--
ALTER TABLE `recruteur`
  ADD CONSTRAINT `FK_creer` FOREIGN KEY (`id_admin`) REFERENCES `administrateur` (`id_admin`);

--
-- Contraintes pour la table `voir`
--
ALTER TABLE `voir`
  ADD CONSTRAINT `FK_voir` FOREIGN KEY (`id_emp`) REFERENCES `employeur` (`id_emp`),
  ADD CONSTRAINT `FK_voir2` FOREIGN KEY (`id_recruteur`) REFERENCES `recruteur` (`id_recruteur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
