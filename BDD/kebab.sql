CREATE TABLE UTILISATEUR(
   idUtilisateur VARCHAR(60),
   nomUtilisateur VARCHAR(30) NOT NULL,
   prenomUtilisateur VARCHAR(30) NOT NULL,
   imageUtilisateur VARCHAR(255) NOT NULL,
   adresseMail VARCHAR(60) NOT NULL,
   motPasse VARCHAR(255) NOT NULL,
   RGPD VARCHAR(60) NOT NULL,
   PRIMARY KEY(idUtilisateur)
);

CREATE TABLE CATEGORIE(
   idCate INT,
   dateCo DATE NOT NULL,
   heureCo TIME NOT NULL,
   nomCate VARCHAR(60) NOT NULL,
   PRIMARY KEY(idCate)
);

CREATE TABLE SUJET(
   idSujet INT,
   nomSujet VARCHAR(60) NOT NULL,
   idCate INT NOT NULL,
   idUtilisateur VARCHAR(60) NOT NULL,
   PRIMARY KEY(idSujet),
   FOREIGN KEY(idCate) REFERENCES CATEGORIE(idCate),
   FOREIGN KEY(idUtilisateur) REFERENCES UTILISATEUR(idUtilisateur)
);

CREATE TABLE MESSAGE(
   idMessage INT,
   message VARCHAR(60) NOT NULL,
   idSujet INT NOT NULL,
   idUtilisateur VARCHAR(60) NOT NULL,
   PRIMARY KEY(idMessage),
   FOREIGN KEY(idSujet) REFERENCES SUJET(idSujet),
   FOREIGN KEY(idUtilisateur) REFERENCES UTILISATEUR(idUtilisateur)
);

CREATE TABLE consulte(
   idUtilisateur VARCHAR(60),
   idCate INT,
   PRIMARY KEY(idUtilisateur, idCate),
   FOREIGN KEY(idUtilisateur) REFERENCES UTILISATEUR(idUtilisateur),
   FOREIGN KEY(idCate) REFERENCES CATEGORIE(idCate)
);
