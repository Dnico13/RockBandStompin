-- Active: 1720039507195@@mysql-ndev2023.alwaysdata.net@3306
CREATE TABLE IF NOT EXISTS User (
    id INTEGER  NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(25) NOT NULL,
    prenom VARCHAR(25) NOT NULL,
    role VARCHAR(40) NOT NULL,
    password VARCHAR(80) NOT NULL
);
CREATE Table IF NOT EXISTS Disc (
    id integer NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    Titre1 VARCHAR(200) NOT NULL,
    Titre2 VARCHAR(200) NOT NULL,
    Titre3 VARCHAR(200) NOT NULL,
    Titre4 VARCHAR(200) NOT NULL,
    Titre5 VARCHAR(200),
    Titre6 VARCHAR(200),
    Titre7 VARCHAR(200),
    Titre8 VARCHAR(200),
    Titre9 VARCHAR(200),
    Titre10 VARCHAR(200),
    Titre11 VARCHAR(200),
    Titre12 VARCHAR(200),
    Titre13 VARCHAR(200),
    Photo VARCHAR(200) NOT NULL
);
CREATE TABLE IF NOT EXISTS Evenement (
    id INTEGER not null PRIMARY KEY AUTO_INCREMENT,
    event_nom VARCHAR(200) NOT NULL,
    Lieu VARCHAR(100) NOT NULL,
    Detail1 VARCHAR(255) NOT NULL,
    Detail2 VARCHAR(255) NOT NULL,
    Detail3 VARCHAR(255) NOT NULL,
    illustration VARCHAR(255) NOT NULL
);

ALTER Table User ADD  email VARCHAR(50) NOT NULL;
INSERT INTO User (nom,prenom,role,password,email) VALUES("Duvignau","Hugo","admin","Nicolas","hudu@gmail.com");
SELECT* FROM User WHERE email = "hudu@gmail.com"