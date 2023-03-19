CREATE DATABASE;
USE asw2023;
DROP TABLE IF EXISTS Utilizador;

CREATE TABLE Utilizador (
    id int(10) AUTO_INCREMENT,
    email varchar(40) UNIQUE,
    pass varchar(40),
    nome char(40),
    PRIMARY KEY (id)
);