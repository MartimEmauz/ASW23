DROP TABLE IF EXISTS Transacao;
DROP TABLE IF EXISTS Mensagem;
DROP TABLE IF EXISTS Peca;
DROP TABLE IF EXISTS Utilizador_Preferencia;
DROP TABLE IF EXISTS Utilizador;

CREATE TABLE Utilizador (
  id INT(10) PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  passe VARCHAR(255) NOT NULL,
  localidade VARCHAR(255) NOT NULL,
  morada VARCHAR(255) NOT NULL,
  codigo_postal VARCHAR(8) NOT NULL,
  genero CHAR(1) NOT NULL,
  data_nascimento DATE NOT NULL,
  email VARCHAR(255) UNIQUE NOT NULL
);


CREATE TABLE Peca (
  id INT(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  id_utilizador INT(10),
  titulo VARCHAR(255) NOT NULL,
  preco DECIMAL(10, 2) NOT NULL,
  imagem VARCHAR(255) NOT NULL,
  data_registo DATE NOT NULL,
  descricao TEXT NOT NULL,
  genero CHAR(1) NOT NULL,
  estado CHAR(50) NOT NULL,
  cor CHAR(50) NOT NULL,
  marca CHAR(50) NOT NULL,
  tipo CHAR(50) NOT NULL,
  tamanho CHAR(2) NOT NULL,
  categoria CHAR(50) NOT NULL,
  FOREIGN KEY (id_utilizador) REFERENCES Utilizador(id) ON DELETE CASCADE
);

CREATE TABLE Mensagem (
  id INT(10) PRIMARY KEY,
  id_chat INT(10) REFERENCES Chat(id),
  id_utilizador INT(10) REFERENCES Utilizador(id),
  mensagem TEXT,
  data_envio TIMESTAMP
);

CREATE TABLE Transacao (
  id INT PRIMARY KEY,
  id_peca INT REFERENCES Peca(id),
  id_comprador INT REFERENCES Utilizador(id),
  id_vendedor INT REFERENCES Utilizador(id)
);

CREATE TABLE Preferencia_Estado (
  id INT(10) PRIMARY KEY AUTO_INCREMENT,
  id_utilizador INT(10),
  estado VARCHAR(50),
  FOREIGN KEY (id_utilizador) REFERENCES Utilizador(id) ON DELETE CASCADE
);

CREATE TABLE Preferencia_Cor (
  id INT(10) PRIMARY KEY AUTO_INCREMENT,
  id_utilizador INT(10),
  cor VARCHAR(50),
  FOREIGN KEY (id_utilizador) REFERENCES Utilizador(id) ON DELETE CASCADE
);

CREATE TABLE Preferencia_Marca (
  id INT(10) PRIMARY KEY AUTO_INCREMENT,
  id_utilizador INT(10),
  marca VARCHAR(50),
  FOREIGN KEY (id_utilizador) REFERENCES Utilizador(id) ON DELETE CASCADE
);


CREATE TABLE Preferencia_Tipo (
  id INT(10) PRIMARY KEY AUTO_INCREMENT,
  id_utilizador INT(10),
  tipo VARCHAR(50),
  FOREIGN KEY (id_utilizador) REFERENCES Utilizador(id) ON DELETE CASCADE
);


CREATE TABLE Preferencia_Tamanho (
  id INT(10) PRIMARY KEY AUTO_INCREMENT,
  id_utilizador INT(10),
  tamanho VARCHAR(2),
  FOREIGN KEY (id_utilizador) REFERENCES Utilizador(id) ON DELETE CASCADE
);

CREATE TABLE Preferencia_Categoria (
  id INT(10) PRIMARY KEY AUTO_INCREMENT,
  id_utilizador INT(10),
  categoria VARCHAR(50),
  FOREIGN KEY (id_utilizador) REFERENCES Utilizador(id) ON DELETE CASCADE
);

CREATE TABLE utilizador_favoritos (
  id INT(10) PRIMARY KEY AUTO_INCREMENT,
  id_utilizador INT(10) NOT NULL,
  id_peca INT(10) NOT NULL,
  FOREIGN KEY (id_utilizador)  REFERENCES Utilizador(id) ON DELETE CASCADE,
  FOREIGN KEY (id_peca)  REFERENCES Peca(id) ON DELETE CASCADE
);


CREATE TABLE utilizador_carrinho (
  id INT(10) PRIMARY KEY AUTO_INCREMENT,
  id_utilizador INT(10) NOT NULL,
  id_peca INT(10) NOT NULL,
  FOREIGN KEY (id_utilizador)  REFERENCES Utilizador(id) ON DELETE CASCADE,
  FOREIGN KEY (id_peca)  REFERENCES Peca(id) ON DELETE CASCADE
);