CREATE DATABASE gt_idea_DB;
USE gt_idea_DB;

CREATE TABLE Ideia (
    id int NOT NULL AUTO_INCREMENT,
    data_post varchar(13),
    filtros varchar(50),
    titulo varchar(100),
    imagem mediumblob,
    descricao varchar(100),
    fk_Usuario_email varchar(100),
    nome varchar(100),
    PRIMARY KEY(id)
);

CREATE TABLE Usuario (
    email varchar(100) PRIMARY KEY,
    nome varchar(100),
    apelido varchar(25) UNIQUE,
    telefone varchar(100),
    imagem mediumblob,
    tipo_conta int,
    senha varchar(32),
    cidade varchar(50),
    bio varchar(100),
    formacao varchar(100)
);

CREATE TABLE Projeto (
    id int NOT NULL AUTO_INCREMENT,
    data_post varchar(13),
    filtros varchar(50),
    titulo varchar(100),
    imagem mediumblob,
    descricao varchar(100),
    fk_Usuario_email varchar(100),
    nome varchar(100),
    PRIMARY KEY(id)
);

CREATE TABLE Trabalha_projeto (
    fk_Usuario_email varchar(100),
    fk_Projeto_ID int
);

CREATE TABLE Comenta_projeto (
    fk_Usuario_email varchar(100),
    fk_Projeto_ID int
);

CREATE TABLE Comenta_ideia (
    fk_Ideia_id int,
    fk_Usuario_email varchar(100)
);

CREATE TABLE Seguir_projeto (
    fk_Usuario_email varchar(100),
    fk_Projeto_ID int
);

CREATE TABLE Conectar_ideia (
    fk_Usuario_email varchar(100),
    fk_Ideia_id int
);

CREATE TABLE Doacao_projeto (
    valor float,
    data_post date,
    fk_Usuario_email varchar(100),
    fk_Projeto_ID int
);
 
ALTER TABLE Ideia ADD CONSTRAINT FK_Ideia_2
    FOREIGN KEY (fk_Usuario_email)
    REFERENCES Usuario (email)
    ON DELETE CASCADE;
 
ALTER TABLE Projeto ADD CONSTRAINT FK_Projeto_2
    FOREIGN KEY (fk_Usuario_email)
    REFERENCES Usuario (email)
    ON DELETE CASCADE;
 
ALTER TABLE Trabalha_projeto ADD CONSTRAINT FK_Trabalha_projeto_1
    FOREIGN KEY (fk_Usuario_email)
    REFERENCES Usuario (email);
 
ALTER TABLE Trabalha_projeto ADD CONSTRAINT FK_Trabalha_projeto_2
    FOREIGN KEY (fk_Projeto_ID)
    REFERENCES Projeto (ID);
 
ALTER TABLE Comenta_projeto ADD CONSTRAINT FK_Comenta_projeto_1
    FOREIGN KEY (fk_Usuario_email)
    REFERENCES Usuario (email);
 
ALTER TABLE Comenta_projeto ADD CONSTRAINT FK_Comenta_projeto_2
    FOREIGN KEY (fk_Projeto_ID)
    REFERENCES Projeto (ID);
 
ALTER TABLE Comenta_ideia ADD CONSTRAINT FK_Comenta_ideia_1
    FOREIGN KEY (fk_Ideia_id)
    REFERENCES Ideia (id);
 
ALTER TABLE Comenta_ideia ADD CONSTRAINT FK_Comenta_ideia_2
    FOREIGN KEY (fk_Usuario_email)
    REFERENCES Usuario (email);
 
ALTER TABLE Seguir_projeto ADD CONSTRAINT FK_Seguir_projeto_1
    FOREIGN KEY (fk_Usuario_email)
    REFERENCES Usuario (email);
 
ALTER TABLE Seguir_projeto ADD CONSTRAINT FK_Seguir_projeto_2
    FOREIGN KEY (fk_Projeto_ID)
    REFERENCES Projeto (ID);
 
ALTER TABLE Conectar_ideia ADD CONSTRAINT FK_Conectar_ideia_1
    FOREIGN KEY (fk_Usuario_email)
    REFERENCES Usuario (email);
 
ALTER TABLE Conectar_ideia ADD CONSTRAINT FK_Conectar_ideia_2
    FOREIGN KEY (fk_Ideia_id)
    REFERENCES Ideia (id);
 
ALTER TABLE Doacao_projeto ADD CONSTRAINT FK_Doacao_projeto_1
    FOREIGN KEY (fk_Usuario_email)
    REFERENCES Usuario (email);
 
ALTER TABLE Doacao_projeto ADD CONSTRAINT FK_Doacao_projeto_2
    FOREIGN KEY (fk_Projeto_ID)
    REFERENCES Projeto (ID);