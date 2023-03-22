CREATE DATABASE;
USE KikaSite;
DROP TABLE IF EXISTS Utilizador;
DROP TABLE IF EXISTS Leituras;

CREATE TABLE Utilizador (
    id int(10) AUTO_INCREMENT,
    email varchar(40) UNIQUE,
    pass varchar(40),
    nome char(40),
    PRIMARY KEY (id)
);