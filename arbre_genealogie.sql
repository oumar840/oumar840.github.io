-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 26 déc. 2020 à 01:52
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `arbre_genealogie`
--

-- --------------------------------------------------------

--
-- Structure de la table `mere`
--

CREATE TABLE `mere` (
  `mere` varchar(10) NOT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `sexe` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `mere`
--

INSERT INTO `mere` (`mere`, `prenom`, `nom`, `sexe`) VALUES
(' Mbackein ', 'Sokhna Asta Wâlo', ' Mbackein', 'F'),
('Bint Ibrah', 'Aishah', 'bint Ibrahim', 'F'),
('Diarra Bou', 'Diarra', 'Bousso', 'F'),
('Fatimata', 'Fatimata', 'ka', 'F'),
('Faty Diakh', 'Sokhna', 'Faty Diakhate', 'F'),
('Sylla Sokh', 'Sokhna Khadidiatou', 'Sylla', 'F');

-- --------------------------------------------------------

--
-- Structure de la table `pere`
--

CREATE TABLE `pere` (
  `pere` varchar(10) NOT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `sexe` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `pere`
--

INSERT INTO `pere` (`pere`, `prenom`, `nom`, `sexe`) VALUES
('Abdoulaye ', 'Abdoulaye', 'Niass', 'M'),
('Asssane', 'Assane', 'ka', 'M'),
('Cheickouna', 'Cheickouna', 'Dielany', 'M'),
('Hamadou Ba', 'Hamadou', 'Bamba', 'M'),
('Momar Anta', 'Momar Anta', 'Sali', 'M'),
('Mouhamadou', 'Mouhamadou', 'Bousso', 'M');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `idpersonne` int(4) NOT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `sexe` varchar(1) DEFAULT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `pere` varchar(10) DEFAULT NULL,
  `mere` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`idpersonne`, `prenom`, `nom`, `sexe`, `date_naissance`, `lieu_naissance`, `description`, `photo`, `pere`, `mere`) VALUES
(1, 'Hamadou', 'Bamba', 'M', '1853-05-07', 'Mbacké,Touba,sénégal', ' le fondateur de la confrérie des Mourides.', 'bamba.jpg', 'Momar Anta', 'Diarra Bou'),
(2, 'Baye', 'Niass', 'M', '1900-03-08', 'Taïba Niassène,kaolack,sénégal', 'Il est le détenteur de la Faydha tidiannya', 'baye.jpg', 'Abdoulaye ', 'Bint Ibrah'),
(3, 'Serigne Saliou', 'Mbacké', 'M', '1915-09-10', 'Touba,touba,sénégal', 'il est le 5e khalife des mourides', 'saliou.jpg', 'Hamadou Ba', 'Faty Diakh'),
(4, 'Samba', 'Diallo', 'M', '1972-02-28', 'Sagne,kaolack,sénégal', 'El hadji Samba Diallo était un érudit et un homme de science de dimension exceptionnelle', 'samba.jpg', 'Cheickouna', 'Sylla Sokh'),
(5, 'Diarra', 'Bousso', 'F', '1833-05-18', 'Nioro,kaolack,sénégal', 'Elle est la troisième épouse du marabout Momar Anta Sali Mbacké et la mère de cheikh Ahmadou Bamba', 'diarra.jpg', 'Mouhamadou', ' Mbackein ');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `idUser` int(5) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `etat` varchar(1) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`idUser`, `login`, `email`, `role`, `etat`, `pwd`) VALUES
(1, 'Oumar', 'oumar.ka1@uvs.edu.sn', 'ADMIN', '1', '202cb962ac59075b964b07152d234b70'),
(2, 'Nafy', 'nafy@gmail.com', 'VISITEUR', '0', '202cb962ac59075b964b07152d234b70'),
(3, 'Ndeye Anta', 'ndeyeanta@gmail.com', 'VISITEUR', '1', '202cb962ac59075b964b07152d234b70'),
(4, 'Samba ', 'samba@gmail.com', 'VISITEUR', '0', '202cb962ac59075b964b07152d234b70');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `mere`
--
ALTER TABLE `mere`
  ADD PRIMARY KEY (`mere`);

--
-- Index pour la table `pere`
--
ALTER TABLE `pere`
  ADD PRIMARY KEY (`pere`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`idpersonne`),
  ADD KEY `pere` (`pere`),
  ADD KEY `mere` (`mere`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `idpersonne` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `idUser` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `personne`
--
ALTER TABLE `personne`
  ADD CONSTRAINT `personne_ibfk_1` FOREIGN KEY (`pere`) REFERENCES `pere` (`pere`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `personne_ibfk_2` FOREIGN KEY (`mere`) REFERENCES `mere` (`mere`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
