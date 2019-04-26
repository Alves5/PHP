CREATE SCHEMA IF NOT EXISTS JavaWe;
use JavaWe;
CREATE TABLE IF NOT EXISTS Usuario(
    id  INT AUTO_INCREMENT NOT NULL,
    cpf_user varchar(200) NOT NULL,
    nome varchar(200) NOT NULL,
    email varchar(40) NOT NULL,
    idade int NOT NULL,
    contato int NOT NULL,
    PRIMARY KEY(id)
);
CREATE TABLE IF NOT EXISTS Conta(
    cpf varchar(200) NOT NULL ,
    usuario varchar(20) NOT NULL,
    senha varchar(200) NOT NULL,
    dataCriacao varchar(200) NOT NULL,
    PRIMARY KEY(cpf)
);

CREATE TABLE IF NOT EXISTS Cartao(
    numeroCartao varchar(200) NOT NULL,
    saldo varchar(200) NOT NULL,
    nomeBanco varchar(20) NOT NULL,
    tipoCartao tinyint NOT NULL,
    prazo INT(30) NOT NULL,
    id_conta varchar(200),
    PRIMARY KEY(numeroCartao),
    CONSTRAINT fk_id_conta FOREIGN KEY (id_conta) REFERENCES Conta(cpf)
);

CREATE TABLE IF NOT EXISTS Historico(
    id_history INT AUTO_INCREMENT NOT NULL ,
    id_card VARCHAR(200),
    data varchar(20) NOT NULL,
    nome varchar(55) NOT NULL,
    valorE DOUBLE,
    valorS DOUBLE,
    PRIMARY KEY(id_history),
    CONSTRAINT fk_id_card FOREIGN KEY (id_card) REFERENCES Cartao(numeroCartao)
);
/*CREATE TABLE IF NOT EXISTS CartaoCredito(
    id int NOT NULL AUTO_INCREMENT,
    dataFatura date NOT NULL,
    melhorDiaCompra date NOT NULL,
    limitePago DOUBLE NOT NULL,
    limiteAvista DOUBLE NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS CartaoDebito(
    id int NOT NULL AUTO_INCREMENT,
    depositos varchar NOT NULL,
    saques varchar NOT NULL,
    PRIMARY KEY(id)
);*/
