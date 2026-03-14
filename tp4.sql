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

select * from Prof;
CREATE TABLE Etudiant
(
  id INT PRIMARY KEY AUTO_INCREMENT,
  nom VARCHAR(50),
  prenom VARCHAR(50),
  specialiste VARCHAR(50)
);
