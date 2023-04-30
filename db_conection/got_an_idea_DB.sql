CREATE DATABASE gt_idea_DB;
USE gt_idea_DB;
SELECT * FROM Usuario;

CREATE TABLE Ideia (
    id int PRIMARY KEY,
    data_post date,
    filtros int,
    imagem mediumblob,
    descricao varchar(100),
    fk_Usuario_email varchar(100)
);

CREATE TABLE Usuario (
    email varchar(100) PRIMARY KEY,
    apelido varchar(25) UNIQUE,
    telefone varchar(100),
    tipo_conta int,
    senha varchar(32),
    cidade varchar(50),
    bio varchar(100),
    formacao varchar(100)
);

CREATE TABLE Projeto (
    ID int PRIMARY KEY,
    data_post date,
    descricao varchar(200),
    filtros int,
    imagem mediumblob,
    fk_Usuario_email varchar(100)
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