create database consultadb;
use consultadb;

CREATE TABLE usuario (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50),
    email VARCHAR(25) UNIQUE not null,
    cpf VARCHAR (14) UNIQUE not null,
    celular int (11) not null,
    data_nasc date not null,
	sexo ENUM('M', 'F', 'Outro') not null,
    senha VARCHAR(20)not null
);

drop table CONSULTA;

CREATE TABLE consulta (
	id_consulta int primary key auto_increment,
    nome_consulta varchar(50) not null,
    email_consulta varchar(25) not null,
    celular_consulta varchar(11) not null,
    data_hora DATETIME not null,
    especialidade ENUM('Clínico Geral', 'Dermatologista', 'Psicológo', 'Dentista', 'Urologista') not null
);

select * from usuario;