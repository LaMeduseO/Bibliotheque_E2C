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


/* Supprimer Des données */
DELETE FROM user WHERE pseudo = "motsdepasse";

/* modification de table */
ALTER TABLE user
DROP COLUMN avatar; /* DROP -> supprimer une colonne mais peut être autre chose */

ALTER TABLE user
ADD COLUMN is_admin BOOLEAN NOT NULL DEFAULT 0; /* ADD -> ajouter une colonne ou autre, il faut définir les élément
de la colonne, comme quand on créé une table */

ALTER TABLE user MODIFY id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY; /* Change les propriété d'une colonne */

ALTER TABLE user CHANGE pseudo user_name VARCHAR(120) NOT NULL UNIQUE; /* Change le nom et les propriété d'une colonne */

/* Modifier les données */
UPDATE user
SET is_admin = 1
WHERE id = 2;

CREATE TABLE IF NOT EXISTS site (
    id TINYINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    ville VARCHAR(50) NOT NULL UNIQUE
)ENGINE=InnoDB;

INSERT INTO site (ville)
    VALUES ("Roubaix"),("Lille"),("Armentières"),("St Omer");

/* Créer une relation */
ALTER TABLE user
ADD COLUMN site_id TINYINT UNSIGNED NOT NULL DEFAULT 1;

ALTER TABLE user
ADD CONSTRAINT fk_user_site
FOREIGN KEY (site_id)
REFERENCES site(id);

UPDATE user 
SET site_id = 2
WHERE id = 3;

/* Jointure */

CREATE VIEW user_vw AS (SELECT user.pseudo AS utilisateur, user.mail, site.ville 
FROM user INNER JOIN site 
ON user.site_id = site.id
);

SELECT user.pseudo AS utilisateur, user.mail, site.ville FROM user INNER JOIN site ON user.site_id = site.id;

/* On s'attaque aux livres */

CREATE TABLE IF NOT EXISTS genre (
    id TINYINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL UNIQUE
)ENGINE=InnoDB;

INSERT INTO genre (name)
VALUES ("Roman"),("Fantasy"),("Manga"),("Science Fiction"),("Horreur"),("Romance"),("Policier"),("Magazine"),("BD"),("Histoire"),("Biographie"),("Politique"),("Scolaire");

CREATE TABLE IF NOT EXISTS livres(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL DEFAULT "Inconnu",
    auteur VARCHAR(100) NOT NULL DEFAULT "Inconnu",
    synopsis TEXT,
    page SMALLINT NOT NULL,
    year SMALLINT NOT NULL DEFAULT "0",
    genre_id TINYINT UNSIGNED NOT NULL DEFAULT 1,
    site_id TINYINT UNSIGNED NOT NULL DEFAULT 1,
    user_id SMALLINT UNSIGNED,
    CONSTRAINT fk_livres_genre
        FOREIGN KEY (genre_id)
        REFERENCES genre(id),
    CONSTRAINT fk_livres_site
        FOREIGN KEY (site_id)
        REFERENCES site(id),
    CONSTRAINT fk_livres_user
        FOREIGN KEY (user_id)
        REFERENCES user(id)
)ENGINE=InnoDB;