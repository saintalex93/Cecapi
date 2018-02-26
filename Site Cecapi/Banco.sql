DROP DATABASE IF exists Cecapi;
CREATE DATABASE Cecapi;
USE Cecapi;

CREATE TABLE CLIENTE(
	NOME VARCHAR(250),
    CPF NUMERIC(11),
    TELEFONE_FIXO NUMERIC(15),
    TELEFONE_CELULAR NUMERIC(15),
    EMAIL VARCHAR(250),
    VALOR FLOAT(10,2)
    
	
);

INSERT INTO CLIENTE (NOME, CPF, TELEFONE_FIXO, TELEFONE_CELULAR, EMAIL, VALOR) VALUES ('GUSTAVO FERREIRA DA SILVA',41203647808,1143713717,11982524613,'GUSTAVO.FERREIRA.SILVA1994@HOTMAIL.COM',1700.00);

select * from cliente;
