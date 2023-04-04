-- Table Etudiant
CREATE TABLE `Etudiant` (
  `id_etudiant` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  PRIMARY KEY (`id_etudiant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table Cycle
CREATE TABLE `Cycle` (
  `id_cycle` int(11) NOT NULL AUTO_INCREMENT,
  `nom_cycle` varchar(255) NOT NULL,
  PRIMARY KEY (`id_cycle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table Annee
CREATE TABLE `Annee` (
  `id_annee` int(11) NOT NULL AUTO_INCREMENT,
  `annee` int(11) NOT NULL,
  `id_cycle` int(11) NOT NULL,
  PRIMARY KEY (`id_annee`),
  KEY `fk_Annee_Cycle_idx` (`id_cycle`),
  CONSTRAINT `fk_Annee_Cycle` FOREIGN KEY (`id_cycle`) REFERENCES `Cycle` (`id_cycle`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table Matiere
CREATE TABLE `Matiere` (
  `id_matiere` int(11) NOT NULL AUTO_INCREMENT,
  `nom_matiere` varchar(255) NOT NULL,
  `id_annee` int(11) NOT NULL,
  PRIMARY KEY (`id_matiere`),
  KEY `fk_Matiere_Annee_idx` (`id_annee`),
  CONSTRAINT `fk_Matiere_Annee` FOREIGN KEY (`id_annee`) REFERENCES `Annee` (`id_annee`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table Lecon
CREATE TABLE `Lecon` (
  `id_lecon` int(11) NOT NULL AUTO_INCREMENT,
  `titre_lecon` varchar(255) NOT NULL,
  `cours_pdf` varchar(255) NOT NULL,
  `exercice_pdf` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `id_matiere` int(11) NOT NULL,
  PRIMARY KEY (`id_lecon`),
  KEY `fk_Lecon_Matiere_idx` (`id_matiere`),
  CONSTRAINT `fk_Lecon_Matiere` FOREIGN KEY (`id_matiere`) REFERENCES `Matiere` (`id_matiere`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table Achat
CREATE TABLE `Achat` (
  `id_achat` int(11) NOT NULL AUTO_INCREMENT,
  `id_etudiant` int(11) NOT NULL,
  `id_lecon` int(11) NOT NULL,
  PRIMARY KEY (`id_achat`),
  KEY `fk_Achat_Etudiant_idx` (`id_etudiant`),
  KEY `fk_Achat_Lecon_idx` (`id_lecon`),
  CONSTRAINT `fk_Achat_Etudiant` FOREIGN KEY (`id_etudiant`) REFERENCES `Etudiant` (`id_etudiant`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_Achat_Lecon` FOREIGN KEY (`id_lecon`) REFERENCES `Lecon` (`id_lecon`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
