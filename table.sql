CREATE DATABASE ecole;

USE ecole;

CREATE TABLE Prof
(
  id INT PRIMARY KEY AUTO_INCREMENT,
  nom VARCHAR(50),
  prenom VARCHAR(50),
  specialiste VARCHAR(50)
);

drop table Prof;

select * from Etudiant;

CREATE TABLE Etudiant
(
  id INT PRIMARY KEY AUTO_INCREMENT,
  nom VARCHAR(50),
  prenom VARCHAR(50),
  specialiste VARCHAR(50)
);

drop table Etudiant;

Insert into Etudiant (id,nom,prenom,specialiste) value (1,'t','u','o');