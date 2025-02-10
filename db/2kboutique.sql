CREATE DATABASE LuxeShop;
USE LuxeShop;

-- Table Utilisateur
CREATE TABLE Utilisateur (
    idUtilisateur INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    motDePasse VARCHAR(255) NOT NULL,
    dateInscription TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table Administrateur (hérite de Utilisateur)
CREATE TABLE Administrateur (
    idAdministrateur INT PRIMARY KEY,
    FOREIGN KEY (idAdministrateur) REFERENCES Utilisateur(idUtilisateur) ON DELETE CASCADE
);

-- Table TypeProduit
CREATE TABLE TypeProduit (
    idTypeProduit INT AUTO_INCREMENT PRIMARY KEY,
    nomType VARCHAR(50) UNIQUE NOT NULL
);

-- Table Produit
CREATE TABLE Produit (
    idProduit INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    description TEXT,
    prix DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL,
    idTypeProduit INT NOT NULL,
    FOREIGN KEY (idTypeProduit) REFERENCES TypeProduit(idTypeProduit) ON DELETE CASCADE
);

-- Table Commande
CREATE TABLE Commande (
    idCommande INT AUTO_INCREMENT PRIMARY KEY,
    idUtilisateur INT NOT NULL,
    idAdministrateur INT NOT NULL,
    dateCommande TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    statut ENUM('En cours', 'Expédiée', 'Livrée', 'Annulée') DEFAULT 'En cours',
    FOREIGN KEY (idUtilisateur) REFERENCES Utilisateur(idUtilisateur) ON DELETE CASCADE,
);

-- Table Produit_Commande (relation N:N entre Produit et Commande)
CREATE TABLE Produit_Commande (
    idCommande INT NOT NULL,
    idProduit INT NOT NULL,
    quantite INT NOT NULL CHECK (quantite > 0),
    PRIMARY KEY (idCommande, idProduit),
    FOREIGN KEY (idCommande) REFERENCES Commande(idCommande) ON DELETE CASCADE,
    FOREIGN KEY (idProduit) REFERENCES Produit(idProduit) ON DELETE CASCADE
);

-- Table Paiement
CREATE TABLE Paiement (
    idPaiement INT AUTO_INCREMENT PRIMARY KEY,
    idUtilisateur INT NOT NULL,
    idCommande INT NOT NULL UNIQUE,
    montant DECIMAL(10,2) NOT NULL,
    datePaiement TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modePaiement ENUM('Carte bancaire', 'PayPal', 'Mobile Money') NOT NULL,
    FOREIGN KEY (idUtilisateur) REFERENCES Utilisateur(idUtilisateur) ON DELETE CASCADE,
    FOREIGN KEY (idCommande) REFERENCES Commande(idCommande) ON DELETE CASCADE
);

-- Table Évaluation (relation N:N entre Utilisateur et Produit)
CREATE TABLE Evaluation (
    idEvaluation INT AUTO_INCREMENT PRIMARY KEY,
    idUtilisateur INT NOT NULL,
    idProduit INT NOT NULL,
    note INT CHECK (note BETWEEN 1 AND 5),
    commentaire TEXT,
    dateEvaluation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (idUtilisateur) REFERENCES Utilisateur(idUtilisateur) ON DELETE CASCADE,
    FOREIGN KEY (idProduit) REFERENCES Produit(idProduit) ON DELETE CASCADE
);
