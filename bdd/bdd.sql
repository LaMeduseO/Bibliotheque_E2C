/*
Se Connecter en root Windows
mysql -h localhost -u root -p

En root sous Linux
sudo mysql

Se connecter avec un compte utilisateur
mysql -h localhost -u pn_livres_admin -p

Quitter mysql 
exit;
*/


SHOW DATABASES
CREATE DATABASE nom_bdd;            /* crée la database */
DROP DATABASE nom_bdd;              /* Supprimer la database */
USE nom_bdd                         /* Utiliser une base de données */


CREATE USER 'pn_livres_admin'@'localhost' IDENTIFIED BY "9!5v*SgVtW$64n";       /* Créer un utilisateur */

GRANT ALL PRIVILEGES ON pn_livres.* TO 'pn_livres_admin'@'localhost';            /* Lui Donner Les Droits */

/* Une fois qu'on est dans une base de donnees */

/* Voir les tables */
SHOW TABLES;

/* Création de table */

CREATE TABLE IF NOT EXISTS user  (
    id SMALLINT UNSIGNED NOT NULL  AUTO_INCREMENT PRIMARY KEY,
    pseudo VARCHAR(24) NOT NULL UNIQUE,
    mdp VARCHAR(27) NOT NULL,
    avatar VARCHAR(255),
    mail VARCHAR(255) NOT NULL UNIQUE
)ENGINE=InnoDB;

INSERT INTO user (mdp, pseudo, mail)
VALUES ("azerty", "motsdepasse", "noreply@nowhere.fr");

INSERT INTO user (mdp, pseudo, mail)
VALUES  ("00000", "Admin", "admin@nowhere.fr"),
        ("La Méduse", "Groaaaar", "me@LaMeduse.com"),
        ("Tacos", "3viande", "tacos@escalope.Hallah");

/* Pour voir tout les user */
SELECT * FROM user;

/* pour enlever les mdp , ID de la liste*/
SELECT pseudo, mail, avatar FROM user;

/*Cibler un user en connaisant son pseudo*/
SELECT pseudo, mail FROM user WHERE pseudo="3viande";

/* N'importe qu'elle chaine de caractere qui continent un a */
SELECT pseudo, mail, mdp FROM user WHERE pseudo LIKE "%a%";

/* Organiser par ordre alphabetique (ASC , DESC) */
SELECT pseudo, mail, avatar FROM user ORDER BY mail ASC;